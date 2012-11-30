<?php
App::uses('Mv003GridTelefono', 'Model');

/**
 * Mv003GridTelefono Test Case
 *
 */
class Mv003GridTelefonoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.mv003_grid_telefono');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mv003GridTelefono = ClassRegistry::init('Mv003GridTelefono');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mv003GridTelefono);

		parent::tearDown();
	}

}
