<?php
class EducationsController extends AppController {
	public $helpers = array('Html', 'Time');

	public function index() {
		$this->set('educations', $this->Education->find('all'));
	}
}
?>
