<?php
App::uses('INNODBCMPMEMRESET', 'Cma.Model');

/**
 * INNODBCMPMEMRESET Test Case
 *
 */
class INNODBCMPMEMRESETTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.i_n_n_o_d_b_c_m_p_m_e_m_r_e_s_e_t'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->INNODBCMPMEMRESET = ClassRegistry::init('Cma.INNODBCMPMEMRESET');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->INNODBCMPMEMRESET);

		parent::tearDown();
	}

}
