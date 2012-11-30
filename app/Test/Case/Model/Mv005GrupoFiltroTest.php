<?php
App::uses('Mv005GrupoFiltro', 'Model');

/**
 * Mv005GrupoFiltro Test Case
 *
 */
class Mv005GrupoFiltroTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.mv005_grupo_filtro');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mv005GrupoFiltro = ClassRegistry::init('Mv005GrupoFiltro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mv005GrupoFiltro);

		parent::tearDown();
	}

}
