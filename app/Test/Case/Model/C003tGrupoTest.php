<?php
App::uses('C003tGrupo', 'Model');

/**
 * C003tGrupo Test Case
 *
 */
class C003tGrupoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.c003t_grupo', 'app.codigo_grupo', 'app.c006t_usuario_grupo', 'app.c005t_usuario', 'app.i002t_rol', 'app.c007t_mensajes_enviado', 'app.i003t_estado', 'app.i004t_prioridad', 'app.i001t_estatus_telefono', 'app.c002t_telefono', 'app.c001t_destinatario', 'app.c004t_grupo_destinatario');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->C003tGrupo = ClassRegistry::init('C003tGrupo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->C003tGrupo);

		parent::tearDown();
	}

}
