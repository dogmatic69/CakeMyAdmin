<?php
App::uses('CmaAppController', 'Cma.Controller');

class CmaController extends CmaAppController {

	public $uses = false;

	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirectUrl());
			}
			
			$this->Cma->error('Unable to connect to the server with the specified details', false);
		}
	}

	public function logout() {
		$this->Session->delete(AuthComponent::$sessionKey);
		$this->redirect($this->Auth->logout());
	}

	public function index() {

	}

	public function sql() {
		
	}
}