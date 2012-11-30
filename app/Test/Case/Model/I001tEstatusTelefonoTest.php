<?php
App::uses('I001tEstatusTelefono', 'Model');

/**
 * I001tEstatusTelefono Test Case
 *
 */
class I001tEstatusTelefonoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.i001t_estatus_telefono', 'app.c002t_telefono');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->I001tEstatusTelefono = ClassRegistry::init('I001tEstatusTelefono');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->I001tEstatusTelefono);

		parent::tearDown();
	}

}
