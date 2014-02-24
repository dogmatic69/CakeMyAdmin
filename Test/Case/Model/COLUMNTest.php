<?php
App::uses('COLUMN', 'Cma.Model');

/**
 * COLUMN Test Case
 *
 */
class COLUMNTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.c_o_l_u_m_n'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->COLUMN = ClassRegistry::init('Cma.COLUMN');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->COLUMN);

		parent::tearDown();
	}

}
