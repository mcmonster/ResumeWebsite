<?php
class Skill extends AppModel {
	public $name = 'Skill';
	public $hasMany = array('ProjectSkill');
}
?>
