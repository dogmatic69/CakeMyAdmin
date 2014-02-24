<?php
App::uses('STATISTIC', 'Cma.Model');

/**
 * STATISTIC Test Case
 *
 */
class STATISTICTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.s_t_a_t_i_s_t_i_c'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->STATISTIC = ClassRegistry::init('Cma.STATISTIC');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->STATISTIC);

		parent::tearDown();
	}

}
