<?php
App::uses('Mv011DestinatarioGrupo', 'Model');

/**
 * Mv011DestinatarioGrupo Test Case
 *
 */
class Mv011DestinatarioGrupoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.mv011_destinatario_grupo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mv011DestinatarioGrupo = ClassRegistry::init('Mv011DestinatarioGrupo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mv011DestinatarioGrupo);

		parent::tearDown();
	}

}
