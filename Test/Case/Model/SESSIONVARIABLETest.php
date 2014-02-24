<?php
App::uses('SESSIONVARIABLE', 'Cma.Model');

/**
 * SESSIONVARIABLE Test Case
 *
 */
class SESSIONVARIABLETest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.s_e_s_s_i_o_n_v_a_r_i_a_b_l_e'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SESSIONVARIABLE = ClassRegistry::init('Cma.SESSIONVARIABLE');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SESSIONVARIABLE);

		parent::tearDown();
	}

}
