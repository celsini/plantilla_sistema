<?php
App::uses('C005tUsuario', 'Model');

/**
 * C005tUsuario Test Case
 *
 */
class C005tUsuarioTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.c005t_usuario', 'app.i002t_rol', 'app.c006_usuario_grupo', 'app.c003t_grupo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->C005tUsuario = ClassRegistry::init('C005tUsuario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->C005tUsuario);

		parent::tearDown();
	}

}
