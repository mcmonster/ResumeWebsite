<h1>Edit User</h1>
<?php
	echo $this->Form->create('User', array('action' => 'edit'));
	echo $this->Form->input('username');
	echo $this->Form->input('password');
	echo $this->Form->input('role', array(
		'options' => array(
			'admin' => 'Admin',
			'customer' => 'Customer',
			'employer' => 'Employer'
			)
		)
	);
	echo $this->Form->end('Save');
?>
