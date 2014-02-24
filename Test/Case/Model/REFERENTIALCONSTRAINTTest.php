<?php
App::uses('REFERENTIALCONSTRAINT', 'Cma.Model');

/**
 * REFERENTIALCONSTRAINT Test Case
 *
 */
class REFERENTIALCONSTRAINTTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.r_e_f_e_r_e_n_t_i_a_l_c_o_n_s_t_r_a_i_n_t'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->REFERENTIALCONSTRAINT = ClassRegistry::init('Cma.REFERENTIALCONSTRAINT');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->REFERENTIALCONSTRAINT);

		parent::tearDown();
	}

}
