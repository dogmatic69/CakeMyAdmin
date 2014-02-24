<?php
App::uses('COLLATIONCHARACTERSETAPPLICABILITY', 'Cma.Model');

/**
 * COLLATIONCHARACTERSETAPPLICABILITY Test Case
 *
 */
class COLLATIONCHARACTERSETAPPLICABILITYTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.c_o_l_l_a_t_i_o_n_c_h_a_r_a_c_t_e_r_s_e_t_a_p_p_l_i_c_a_b_i_l_i_t_y'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->COLLATIONCHARACTERSETAPPLICABILITY = ClassRegistry::init('Cma.COLLATIONCHARACTERSETAPPLICABILITY');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->COLLATIONCHARACTERSETAPPLICABILITY);

		parent::tearDown();
	}

}
