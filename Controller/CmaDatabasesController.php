<?php
App::uses('CmaAppController', 'Cma.Controller');
App::uses('CmaSchema', 'Cma.Model');

/**
 * Database controller
 *
 * This is for dealing with database level, edit db names, view privileges, drop etc
 *
 * @author Carl Sutton <dogmatic69@gmail.com>
 * @package Cma.Controller
 */
class CmaDatabasesController extends CmaAppController {

/**
 * Disable loading a model
 *
 * @var boolean
 */
	public $uses = false;

/**
 * List all databases
 *
 * there is no need to set anything as the list is already created for the side nav
 */
	public function index() {
		$collations = ClassRegistry::init('Cma.CmaCollation')->find('select');
		$this->set(compact('collations'));
	}

/**
 * Display the privileges for all databases
 *
 * @return void
 */
	public function privileges() {
		$privileges = CmaConnect::privileges();
		$this->set(compact('privileges'));
	}

	public function add() {
		if ($this->request->data) {
			var_dump(CmaConnect::databaseExists($this->request->data['CmaDatabase']['database_name']));
			if (CmaConnect::databaseExists($this->request->data['CmaDatabase']['database_name'])) {
				return $this->Cma->error('Database already exists', true);
			}

			try {
				$this->_DB->query(String::insert('CREATE DATABASE IF NOT EXISTS :database_name ', $this->request->data['CmaDatabase']));
				$this->Cma->success('Database was created', array(
					'controller' => 'cma_tables',
					'action' => 'index',
					'database' => $this->request->data['CmaDatabase']['database_name'],
				));
			} catch (Exception $e) {
				return $this->Cma->error($e, true);
			}
		}
		return $this->Cma->error('Database was not created', true);
	}

/**
 * Edit the specified database
 *
 * @return void
 */
	public function edit($database = null) {
		throw new CakeException('not implemented');
	}

/**
 * delete the specified database
 *
 * @return void
 */
	public function delete($database = null) {
		try {
			$this->_DB->query(sprintf('DROP DATABASE %s', $database));
			return $this->Cma->success(sprintf('Database %s has been dropped', $database));
		} catch (Exception $e) {
			return $this->Cma->error($e, true);
		}
		return;

		// dropping tables
		$this->_DB->dropSchema(CmaConnect::schema($database), $table);
		throw new CakeException('not implemented');
	}

}
