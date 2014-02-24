<?php
App::uses('ENGINE', 'Cma.Model');

/**
 * ENGINE Test Case
 *
 */
class ENGINETest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.e_n_g_i_n_e'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ENGINE = ClassRegistry::init('Cma.ENGINE');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ENGINE);

		parent::tearDown();
	}

}
