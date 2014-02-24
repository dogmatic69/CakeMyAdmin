<?php
App::uses('GLOBALVARIABLE', 'Cma.Model');

/**
 * GLOBALVARIABLE Test Case
 *
 */
class GLOBALVARIABLETest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.g_l_o_b_a_l_v_a_r_i_a_b_l_e'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GLOBALVARIABLE = ClassRegistry::init('Cma.GLOBALVARIABLE');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GLOBALVARIABLE);

		parent::tearDown();
	}

}
