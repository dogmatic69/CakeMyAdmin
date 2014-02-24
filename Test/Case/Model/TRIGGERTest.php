<?php
App::uses('TRIGGER', 'Cma.Model');

/**
 * TRIGGER Test Case
 *
 */
class TRIGGERTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.t_r_i_g_g_e_r'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TRIGGER = ClassRegistry::init('Cma.TRIGGER');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TRIGGER);

		parent::tearDown();
	}

}
