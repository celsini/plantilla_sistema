<?php
App::uses('C006tUsuarioGrupo', 'Model');

/**
 * C006tUsuarioGrupo Test Case
 *
 */
class C006tUsuarioGrupoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.c006t_usuario_grupo', 'app.c005t_usuario', 'app.i002t_rol', 'app.c006_usuario_grupo', 'app.c003t_grupo', 'app.c003_grupo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->C006tUsuarioGrupo = ClassRegistry::init('C006tUsuarioGrupo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->C006tUsuarioGrupo);

		parent::tearDown();
	}

}
