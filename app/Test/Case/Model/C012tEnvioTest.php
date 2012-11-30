<?php
App::uses('C012tEnvio', 'Model');

/**
 * C012tEnvio Test Case
 *
 */
class C012tEnvioTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.c012t_envio', 'app.i004t_prioridad', 'app.c007t_mensajes_enviado', 'app.c003t_grupo', 'app.c006t_usuario_grupo', 'app.c005t_usuario', 'app.i002t_rol', 'app.c004t_grupo_destinatario', 'app.c001t_destinatario', 'app.c002t_telefono', 'app.i001t_estatus_telefono', 'app.i003t_estado', 'app.c007t_mensajes_enviados');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->C012tEnvio = ClassRegistry::init('C012tEnvio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->C012tEnvio);

		parent::tearDown();
	}

}
