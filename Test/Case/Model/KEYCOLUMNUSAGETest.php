<?php
App::uses('KEYCOLUMNUSAGE', 'Cma.Model');

/**
 * KEYCOLUMNUSAGE Test Case
 *
 */
class KEYCOLUMNUSAGETest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.k_e_y_c_o_l_u_m_n_u_s_a_g_e'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->KEYCOLUMNUSAGE = ClassRegistry::init('Cma.KEYCOLUMNUSAGE');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->KEYCOLUMNUSAGE);

		parent::tearDown();
	}

}
