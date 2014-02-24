<?php
App::uses('INNODBTRX', 'Cma.Model');

/**
 * INNODBTRX Test Case
 *
 */
class INNODBTRXTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.i_n_n_o_d_b_t_r_x',
		'plugin.cma.trx',
		'plugin.cma.trx_requested_lock',
		'plugin.cma.trx_mysql_thread'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->INNODBTRX = ClassRegistry::init('Cma.INNODBTRX');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->INNODBTRX);

		parent::tearDown();
	}

}
