<?php
App::uses('PARAMETER', 'Cma.Model');

/**
 * PARAMETER Test Case
 *
 */
class PARAMETERTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.p_a_r_a_m_e_t_e_r'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PARAMETER = ClassRegistry::init('Cma.PARAMETER');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PARAMETER);

		parent::tearDown();
	}

}
