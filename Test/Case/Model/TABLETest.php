<?php
App::uses('TABLE', 'Cma.Model');

/**
 * TABLE Test Case
 *
 */
class TABLETest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.t_a_b_l_e'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TABLE = ClassRegistry::init('Cma.TABLE');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TABLE);

		parent::tearDown();
	}

}
