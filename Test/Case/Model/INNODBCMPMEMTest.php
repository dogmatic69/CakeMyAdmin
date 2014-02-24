<?php
App::uses('INNODBCMPMEM', 'Cma.Model');

/**
 * INNODBCMPMEM Test Case
 *
 */
class INNODBCMPMEMTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.i_n_n_o_d_b_c_m_p_m_e_m'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->INNODBCMPMEM = ClassRegistry::init('Cma.INNODBCMPMEM');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->INNODBCMPMEM);

		parent::tearDown();
	}

}
