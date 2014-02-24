<?php
App::uses('SCHEMAPRIVILEGE', 'Cma.Model');

/**
 * SCHEMAPRIVILEGE Test Case
 *
 */
class SCHEMAPRIVILEGETest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.s_c_h_e_m_a_p_r_i_v_i_l_e_g_e'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SCHEMAPRIVILEGE = ClassRegistry::init('Cma.SCHEMAPRIVILEGE');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SCHEMAPRIVILEGE);

		parent::tearDown();
	}

}
