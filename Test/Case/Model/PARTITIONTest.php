<?php
App::uses('PARTITION', 'Cma.Model');

/**
 * PARTITION Test Case
 *
 */
class PARTITIONTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.p_a_r_t_i_t_i_o_n'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PARTITION = ClassRegistry::init('Cma.PARTITION');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PARTITION);

		parent::tearDown();
	}

}
