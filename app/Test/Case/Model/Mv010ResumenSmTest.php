<?php
App::uses('Mv010ResumenSm', 'Model');

/**
 * Mv010ResumenSm Test Case
 *
 */
class Mv010ResumenSmTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.mv010_resumen_sm');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mv010ResumenSm = ClassRegistry::init('Mv010ResumenSm');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mv010ResumenSm);

		parent::tearDown();
	}

}
