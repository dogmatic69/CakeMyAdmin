<?php
App::uses('PROCESSLIST', 'Cma.Model');

/**
 * PROCESSLIST Test Case
 *
 */
class PROCESSLISTTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.p_r_o_c_e_s_s_l_i_s_t'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PROCESSLIST = ClassRegistry::init('Cma.PROCESSLIST');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PROCESSLIST);

		parent::tearDown();
	}

}
