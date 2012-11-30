<?php
App::uses('Mv007SmsEnviadoReporte', 'Model');

/**
 * Mv007SmsEnviadoReporte Test Case
 *
 */
class Mv007SmsEnviadoReporteTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.mv007_sms_enviado_reporte');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mv007SmsEnviadoReporte = ClassRegistry::init('Mv007SmsEnviadoReporte');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mv007SmsEnviadoReporte);

		parent::tearDown();
	}

}
