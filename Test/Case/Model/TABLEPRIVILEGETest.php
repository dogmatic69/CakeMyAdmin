<?php
App::uses('TABLEPRIVILEGE', 'Cma.Model');

/**
 * TABLEPRIVILEGE Test Case
 *
 */
class TABLEPRIVILEGETest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.t_a_b_l_e_p_r_i_v_i_l_e_g_e'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TABLEPRIVILEGE = ClassRegistry::init('Cma.TABLEPRIVILEGE');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TABLEPRIVILEGE);

		parent::tearDown();
	}

}
