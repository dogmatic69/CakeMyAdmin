<?php
App::uses('COLLATION', 'Cma.Model');

/**
 * COLLATION Test Case
 *
 */
class COLLATIONTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.c_o_l_l_a_t_i_o_n'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->COLLATION = ClassRegistry::init('Cma.COLLATION');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->COLLATION);

		parent::tearDown();
	}

}
