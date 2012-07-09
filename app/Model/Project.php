<?php
class Project extends AppModel {
	var $hasMany = array('ProjectSkill');

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
