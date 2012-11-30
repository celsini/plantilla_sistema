<?php
App::uses('C004tGrupoDestinatario', 'Model');

/**
 * C004tGrupoDestinatario Test Case
 *
 */
class C004tGrupoDestinatarioTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.c004t_grupo_destinatario', 'app.c003t_grupo', 'app.c006t_usuario_grupo', 'app.c005t_usuario', 'app.i002t_rol', 'app.c001t_destinatario', 'app.c002t_telefono', 'app.i001t_estatus_telefono');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->C004tGrupoDestinatario = ClassRegistry::init('C004tGrupoDestinatario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->C004tGrupoDestinatario);

		parent::tearDown();
	}

}
