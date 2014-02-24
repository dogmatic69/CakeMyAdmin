<?php
App::uses('SESSIONSTATU', 'Cma.Model');

/**
 * SESSIONSTATU Test Case
 *
 */
class SESSIONSTATUTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.s_e_s_s_i_o_n_s_t_a_t_u'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SESSIONSTATU = ClassRegistry::init('Cma.SESSIONSTATU');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SESSIONSTATU);

		parent::tearDown();
	}

}
