<?php
class ProjectsController extends AppController {
	public $helpers = array('Html', 'Form');

	public function index() {
		$this->set('projects', $this->Project->find('all'));
	}

	public function manage() {
		$this->set('projects', $this->Project->find('all'));
	}

	public function view($id = null) {
		$this->Project->id = $id;
		$this->set('project', $this->Project->read());
	}

	public function add() {
		if ($this->request->is('post')) {
			if ($this->Project->save($this->request->data)) {
				$this->Session->setFlash('Project has been saved!');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to save project!');
			}
		}
	}

	public function edit($id = null) {
		$this->Project->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->Project->read();
		} else {
			if ($this->Project->save($this->request->data)) {
				$this->Session->setFlash('Project has been updated!');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Failed to update project!');
			}
		}
	}

	public function delete($id = null) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Project->delete($id)) {
			$this->Session->setFlash('Project has been deleted!');
			$this->redirect(array('action' => 'index'));
		}
	}
}
?>
