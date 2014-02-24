<?php
App::uses('INNODBBUFFERPOOLSTAT', 'Cma.Model');

/**
 * INNODBBUFFERPOOLSTAT Test Case
 *
 */
class INNODBBUFFERPOOLSTATTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.i_n_n_o_d_b_b_u_f_f_e_r_p_o_o_l_s_t_a_t'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->INNODBBUFFERPOOLSTAT = ClassRegistry::init('Cma.INNODBBUFFERPOOLSTAT');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->INNODBBUFFERPOOLSTAT);

		parent::tearDown();
	}

}
