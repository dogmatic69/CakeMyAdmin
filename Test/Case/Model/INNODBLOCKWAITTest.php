<?php
App::uses('INNODBLOCKWAIT', 'Cma.Model');

/**
 * INNODBLOCKWAIT Test Case
 *
 */
class INNODBLOCKWAITTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.i_n_n_o_d_b_l_o_c_k_w_a_i_t',
		'plugin.cma.requesting_trx',
		'plugin.cma.requested_lock',
		'plugin.cma.blocking_trx',
		'plugin.cma.blocking_lock'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->INNODBLOCKWAIT = ClassRegistry::init('Cma.INNODBLOCKWAIT');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->INNODBLOCKWAIT);

		parent::tearDown();
	}

}
