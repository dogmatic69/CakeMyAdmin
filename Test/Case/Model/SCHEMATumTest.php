<?php
App::uses('SCHEMATum', 'Cma.Model');

/**
 * SCHEMATum Test Case
 *
 */
class SCHEMATumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.s_c_h_e_m_a_tum'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SCHEMATum = ClassRegistry::init('Cma.SCHEMATum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SCHEMATum);

		parent::tearDown();
	}

}
