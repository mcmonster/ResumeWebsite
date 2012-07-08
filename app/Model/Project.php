<?php
class Project extends AppModel {
	public $validate = array(
		'title' => array(
			'rule' => 'notEmpty'
		),
		'start_date' => array(
			'rule' => 'notEmpty'
		),
		'summary' => array(
			'rule' => 'notEmpty'
		)
	);
}
?>
