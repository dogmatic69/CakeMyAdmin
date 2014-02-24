<?php
App::uses('INNODBLOCK', 'Cma.Model');

/**
 * INNODBLOCK Test Case
 *
 */
class INNODBLOCKTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.i_n_n_o_d_b_l_o_c_k',
		'plugin.cma.lock',
		'plugin.cma.lock_trx'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->INNODBLOCK = ClassRegistry::init('Cma.INNODBLOCK');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->INNODBLOCK);

		parent::tearDown();
	}

}
