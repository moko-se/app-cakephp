<?php //User.php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;

class User extends Entity{
	//On lui indique qu'il peut modifier toutes les colonnes sauf l'id
	protected $_accessible = [
		'*' => true,
		'id' => false
	];

	protected function _setPassword(string $p) : ?string{
		if(strlen($p) > 0){
			return (new DefaultPasswordHasher())->hash($p);
		}
	}
}