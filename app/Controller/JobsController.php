<?php
class JobsController extends AppController {
	public $helpers = array('Html', 'Time');

	public function index() {
		$this->set('jobs', $this->Job->find('all'));
	}
}
?>
