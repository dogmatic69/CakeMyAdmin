<?php
App::uses('PLUGIN', 'Cma.Model');

/**
 * PLUGIN Test Case
 *
 */
class PLUGINTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.p_l_u_g_i_n'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PLUGIN = ClassRegistry::init('Cma.PLUGIN');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PLUGIN);

		parent::tearDown();
	}

}
