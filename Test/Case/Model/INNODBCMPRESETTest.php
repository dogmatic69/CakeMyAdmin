<?php
App::uses('INNODBCMPRESET', 'Cma.Model');

/**
 * INNODBCMPRESET Test Case
 *
 */
class INNODBCMPRESETTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.i_n_n_o_d_b_c_m_p_r_e_s_e_t'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->INNODBCMPRESET = ClassRegistry::init('Cma.INNODBCMPRESET');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->INNODBCMPRESET);

		parent::tearDown();
	}

}
