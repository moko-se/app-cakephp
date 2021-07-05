<?php //UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table{

	public function initialize(array $config) :void{
		$this->addBehavior('Timestamp');
		$this->hasMany('Spas', ['foreignKey' => 'user_id']);
	}

	public function validationDefault(Validator $v) : Validator{
		$v
		  ->notEmptyString('email')
		  ->notEmptyString('password')
		  ->notEmptyString('adress')
		  ->notEmptyString('city')
		  ->notEmptyString('code')
		  ->notEmptyString('phone')
		  ->notEmptyString('lastname')
		  ->notEmptyString('firstname');
		return $v;
	}
}