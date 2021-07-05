<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
	
class SpasTable extends Table{

	public function initialize(array $config): void{
		parent::initialize($config);
		$this->addBehavior('Timestamp');
		
		$this->belongsTo('Users', ['foreignKey' => 'user_id', 'joinType' => 'INNER']);
	}

	public function validationDefault(Validator $v): Validator{
		$v
			->notEmptyString('housing')
			->notEmptyString('installation')
			->notEmptyString('housing')
			->notEmptyString('water_systeme')
			->notEmptyString('booking_date')
			->notEmptyString('theming_spa');

		return $v;
	}
}
