<?php
App::uses('TABLECONSTRAINT', 'Cma.Model');

/**
 * TABLECONSTRAINT Test Case
 *
 */
class TABLECONSTRAINTTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.t_a_b_l_e_c_o_n_s_t_r_a_i_n_t'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TABLECONSTRAINT = ClassRegistry::init('Cma.TABLECONSTRAINT');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TABLECONSTRAINT);

		parent::tearDown();
	}

}
