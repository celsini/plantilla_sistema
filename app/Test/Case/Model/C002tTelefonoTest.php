<?php
App::uses('C002tTelefono', 'Model');

/**
 * C002tTelefono Test Case
 *
 */
class C002tTelefonoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.c002t_telefono');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->C002tTelefono = ClassRegistry::init('C002tTelefono');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->C002tTelefono);

		parent::tearDown();
	}

}
