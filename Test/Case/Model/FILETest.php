<?php
App::uses('FILE', 'Cma.Model');

/**
 * FILE Test Case
 *
 */
class FILETest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FILE = ClassRegistry::init('Cma.FILE');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FILE);

		parent::tearDown();
	}

}
