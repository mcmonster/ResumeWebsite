<?php
class ProjectSkill extends AppModel {
	public $belongsTo = array(
		'Project',
		'Skill');
}
?>
