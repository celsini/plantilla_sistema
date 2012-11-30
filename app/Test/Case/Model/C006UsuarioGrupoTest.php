<?php
App::uses('C006UsuarioGrupo', 'Model');

/**
 * C006UsuarioGrupo Test Case
 *
 */
class C006UsuarioGrupoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.c006_usuario_grupo', 'app.c005t_usuario', 'app.i002t_rol', 'app.c003t_grupo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->C006UsuarioGrupo = ClassRegistry::init('C006UsuarioGrupo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->C006UsuarioGrupo);

		parent::tearDown();
	}

}
