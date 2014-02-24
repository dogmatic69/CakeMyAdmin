<?php
App::uses('COLUMNPRIVILEGE', 'Cma.Model');

/**
 * COLUMNPRIVILEGE Test Case
 *
 */
class COLUMNPRIVILEGETest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.c_o_l_u_m_n_p_r_i_v_i_l_e_g_e'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->COLUMNPRIVILEGE = ClassRegistry::init('Cma.COLUMNPRIVILEGE');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->COLUMNPRIVILEGE);

		parent::tearDown();
	}

}
