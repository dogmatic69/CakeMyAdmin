<?php
App::uses('ROUTINE', 'Cma.Model');

/**
 * ROUTINE Test Case
 *
 */
class ROUTINETest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.r_o_u_t_i_n_e'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ROUTINE = ClassRegistry::init('Cma.ROUTINE');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ROUTINE);

		parent::tearDown();
	}

}
