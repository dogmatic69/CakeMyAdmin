<?php
App::uses('INNODBBUFFERPAGELRU', 'Cma.Model');

/**
 * INNODBBUFFERPAGELRU Test Case
 *
 */
class INNODBBUFFERPAGELRUTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.i_n_n_o_d_b_b_u_f_f_e_r_p_a_g_e_l_r_u'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->INNODBBUFFERPAGELRU = ClassRegistry::init('Cma.INNODBBUFFERPAGELRU');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->INNODBBUFFERPAGELRU);

		parent::tearDown();
	}

}
