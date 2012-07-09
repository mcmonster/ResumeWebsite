<?php
class UsersController extends AppController {
	// Functionality to occur before all controller functions
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('add', 'logout');
	}

	// Manages users
	public function index() {
		// Set the search depth to include all users sans associations
		$this->User->recursive = 0;

		// Pull the users and page them using the default settings
		$this->set('users', $this->paginate());
	}

	// Log in a user
	public function login() {
		// If this is a POST request
		if ($this->request->is('post')) {
			// Try to log in
			if ($this->Auth->login()) {
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(__('Invalid username or password'));
			}
		}
	}

	// Log out a user
	public function logout() {
		$this->redirect($this->Auth->logout());
	}

	// View an individual user
	public function view($id = null) {
		$this->User->id = $id;

		// Verify the user exists
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}

		// Load the user's data
		$this->set('user', $this->User->read(null, $id));
	}

	// Create a new user
	public function add() {
		// If the request is POST
		if ($this->request->is('post')) {
			// Create a new user
			$this->User->create();

			// Try to save the newly created user populated with the POST data
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('User saved!'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('User could not be saved.'));
			}
		}
	}

	// Edit an existing user
	public function edit($id = null) {
		$this->User->id = $id;

		// Verify the user exists
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}

		// If the request is POST/PUT aka sending data to server
		if ($this->request->is('post') || $this->request->is('put')) {
			// Try to save the updated user information in the request
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('User saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('User could not be save'));
			}
		} 
		// The request is GET, read data from server
		else {
			$this->request->data = $this->User->read(null, $id);

			// Remove the password data
			unset($this->request->data['User']['password']);
		}
	}

	// Delete a user
	public function delete($id = null) {
		// Verify the request is POST, GET isn't safe
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}

		// Verify the user exists
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}

		// Try to delete the user
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		// Failed to delete the user, handle this
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
?>
