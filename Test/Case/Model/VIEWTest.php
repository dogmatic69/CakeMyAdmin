<?php
App::uses('VIEW', 'Cma.Model');

/**
 * VIEW Test Case
 *
 */
class VIEWTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.v_i_e_w'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->VIEW = ClassRegistry::init('Cma.VIEW');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->VIEW);

		parent::tearDown();
	}

}
