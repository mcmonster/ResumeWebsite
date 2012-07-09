<?php
App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {
	public function beforeSave() {
		// If the password is defined, hash it!
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password(
				$this->data[$this->alias]['password']);
		}
		return true;
	}

	public $name = 'User';
	public $validate = array(
		'username' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A username is required'
			)
		),
		'password' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A password is required'
			)
		),
		'role' => array(
			'valid' => array(
				'rule' => array('inList', array('admin', 'visitor', 'customer', 'employer')),
				'message' => 'Please enter a valid role',
				'allowEmpty' => false
			)
		)
	);
}
?>
