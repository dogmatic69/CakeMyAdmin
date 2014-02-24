<?php
App::uses('EVENT', 'Cma.Model');

/**
 * EVENT Test Case
 *
 */
class EVENTTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.e_v_e_n_t'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EVENT = ClassRegistry::init('Cma.EVENT');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EVENT);

		parent::tearDown();
	}

}
