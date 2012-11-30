<?php
App::uses('C008tGrupoModem', 'Model');

/**
 * C008tGrupoModem Test Case
 *
 */
class C008tGrupoModemTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.c008t_grupo_modem', 'app.c003t_grupo', 'app.c006t_usuario_grupo', 'app.c005t_usuario', 'app.i002t_rol', 'app.c007t_mensajes_enviado', 'app.i003t_estado', 'app.i004t_prioridad', 'app.i001t_estatus_telefono', 'app.c002t_telefono', 'app.c001t_destinatario', 'app.c004t_grupo_destinatario', 'app.c009t_modem', 'app.c010t_computador');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->C008tGrupoModem = ClassRegistry::init('C008tGrupoModem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->C008tGrupoModem);

		parent::tearDown();
	}

}
