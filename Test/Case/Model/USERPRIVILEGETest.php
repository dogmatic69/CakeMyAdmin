<?php
App::uses('USERPRIVILEGE', 'Cma.Model');

/**
 * USERPRIVILEGE Test Case
 *
 */
class USERPRIVILEGETest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.u_s_e_r_p_r_i_v_i_l_e_g_e'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->USERPRIVILEGE = ClassRegistry::init('Cma.USERPRIVILEGE');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->USERPRIVILEGE);

		parent::tearDown();
	}

}
