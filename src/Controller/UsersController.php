<?php //PostsController.php

namespace App\Controller;

class UsersController extends AppController{
	public function initialize() : void{
		parent::initialize();
	}
	public function beforeFilter(\Cake\Event\EventInterface $event){
        parent::beforeFilter($event);

        $this->Authentication->addUnauthenticatedActions(['login', 'add']);
    }
	public function add(){
		$n = $this->Users->newEmptyEntity();
		if ($this->request->is('post')) {

			$n = $this->Users->patchEntity($n, $this->request->getData());
			
			if ($this->Users->save($n)) {
				$this->Flash->success('Sauvegardé');
				return $this->redirect(['controller' => 'Spas', 'action' => 'index']);
			}
			$this->Flash->error('Sauvegarde impossible');
		}
		$this->set(compact('n'));
	}

	public function login() {
		$this->request->allowMethod(['get', 'post']);
		$result = $this->Authentication->getResult();
		if ($result->isValid()) {
			$redirect = $this->request->getQuery('redirect', [
				'controller' => 'Spas',
				'action' => 'index'
			]);
			return $this->redirect($redirect);
		}
		if ($this->request->is('post') && !$result->isValid()) {
			$this->Flash->error('Votre identifiant ou votre mot de passe est incorrect.');
		}
	}

	public function logout(){
		$result = $this->Authentication->getResult();
		if ($result->isValid()) {
			$this->Authentication->logout();
			$this->Flash->success('A bientôt');
	    }
	    return $this->redirect(['controller' => 'Spas', 'action' => 'index']);
	}

	public function view($id){
		$u = $this->Users->get($id);
		$spa = $this->Users->Spas->findByUser_id($id);
		$tSpa = $this->Users->Spas->find('all',['contain' => 'Users']);
		/*var_dump($this->request->getAttribute('identity')->level);*/
        $this->set(compact('u', 'spa', 'tSpa'));
	}
}