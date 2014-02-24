<?php
App::uses('PROFILING', 'Cma.Model');

/**
 * PROFILING Test Case
 *
 */
class PROFILINGTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.p_r_o_f_i_l_i_n_g'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PROFILING = ClassRegistry::init('Cma.PROFILING');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PROFILING);

		parent::tearDown();
	}

}
