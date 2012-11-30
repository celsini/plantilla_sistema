<?php
App::uses('I003tEstado', 'Model');

/**
 * I003tEstado Test Case
 *
 */
class I003tEstadoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.i003t_estado', 'app.c007t_mensajes_enviado');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->I003tEstado = ClassRegistry::init('I003tEstado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->I003tEstado);

		parent::tearDown();
	}

}
