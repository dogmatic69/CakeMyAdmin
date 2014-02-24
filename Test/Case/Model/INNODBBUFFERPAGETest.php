<?php
App::uses('INNODBBUFFERPAGE', 'Cma.Model');

/**
 * INNODBBUFFERPAGE Test Case
 *
 */
class INNODBBUFFERPAGETest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.i_n_n_o_d_b_b_u_f_f_e_r_p_a_g_e'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->INNODBBUFFERPAGE = ClassRegistry::init('Cma.INNODBBUFFERPAGE');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->INNODBBUFFERPAGE);

		parent::tearDown();
	}

}
