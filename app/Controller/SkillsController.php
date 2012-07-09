<?php
class SkillsController extends AppController {
	public function index() {
		// Fetch all of the skills
		$skills = $this->Skill->find('all');
		$this->set('skills', $skills);
	}
}
?>
