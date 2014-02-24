<?php
App::uses('TABLESPACE', 'Cma.Model');

/**
 * TABLESPACE Test Case
 *
 */
class TABLESPACETest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.t_a_b_l_e_s_p_a_c_e'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TABLESPACE = ClassRegistry::init('Cma.TABLESPACE');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TABLESPACE);

		parent::tearDown();
	}

}
