<?php
App::uses('C009tModem', 'Model');

/**
 * C009tModem Test Case
 *
 */
class C009tModemTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.c009t_modem', 'app.c010t_computador', 'app.i001t_estatus_telefono', 'app.c002t_telefono', 'app.c001t_destinatario', 'app.c004t_grupo_destinatario', 'app.c003t_grupo', 'app.c006t_usuario_grupo', 'app.c005t_usuario', 'app.i002t_rol', 'app.c007t_mensajes_enviado', 'app.i003t_estado', 'app.i004t_prioridad');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->C009tModem = ClassRegistry::init('C009tModem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->C009tModem);

		parent::tearDown();
	}

}
