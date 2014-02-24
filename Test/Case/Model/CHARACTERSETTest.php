<?php
App::uses('CHARACTERSET', 'Cma.Model');

/**
 * CHARACTERSET Test Case
 *
 */
class CHARACTERSETTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.c_h_a_r_a_c_t_e_r_s_e_t'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CHARACTERSET = ClassRegistry::init('Cma.CHARACTERSET');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CHARACTERSET);

		parent::tearDown();
	}

}
