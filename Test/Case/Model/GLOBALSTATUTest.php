<?php
App::uses('GLOBALSTATU', 'Cma.Model');

/**
 * GLOBALSTATU Test Case
 *
 */
class GLOBALSTATUTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.g_l_o_b_a_l_s_t_a_t_u'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GLOBALSTATU = ClassRegistry::init('Cma.GLOBALSTATU');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GLOBALSTATU);

		parent::tearDown();
	}

}
