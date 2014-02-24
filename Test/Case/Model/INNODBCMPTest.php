<?php
App::uses('INNODBCMP', 'Cma.Model');

/**
 * INNODBCMP Test Case
 *
 */
class INNODBCMPTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.i_n_n_o_d_b_c_m_p'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->INNODBCMP = ClassRegistry::init('Cma.INNODBCMP');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->INNODBCMP);

		parent::tearDown();
	}

}
