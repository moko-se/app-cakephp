<?php 

namespace App\Controller;

class SpasController extends AppController {

	public function index() {
		
	}
	public function offres() {
		
	}
	public function apropos() {
		
	}
	public function add(){

		$n = $this->Spas->newEmptyEntity();
		if ($this->request->is('post')) {
			$n = $this->Spas->patchEntity($n, $this->request->getData());

			
			
			if ($this->Spas->save($n)) {
				$this->Flash->success('Votre réservation a bien été enregistré. Chopetonspa vous recontactera au plus vite.');
			}else

				$this->Flash->error('Sauvegarde impossible');

			return $this->redirect(['controller' => 'Spas', 'action' => 'index']);
		}
		$this->set(compact('n'));
	}

	public function view($id){
		$spa = $this->Spas->get($id, ['contain'=>'Users']);
		/*$tSpa = $this->Spas->findById($id,['contain' => 'Users'])->first();*/
		/*var_dump($this->request->getAttribute('identity')->level);*/
        $this->set(compact('spa'));
	}
}