<?php
/**
 * Mv007SmsEnviadoReporteFixture
 *
 */
class Mv007SmsEnviadoReporteFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'mv007_sms_enviado_reporte';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Mensaje' => array('type' => 'string', 'null' => true, 'length' => 300),
		'Dirigido a' => array('type' => 'string', 'null' => true, 'length' => 100),
		'Estatus' => array('type' => 'string', 'null' => true, 'length' => 15),
		'Estado' => array('type' => 'string', 'null' => true, 'length' => 50),
		'Fecha/Hora de envio' => array('type' => 'datetime', 'null' => true),
		'Enviado por' => array('type' => 'string', 'null' => true, 'length' => 100),
		'filtro' => array('type' => 'date', 'null' => true),
		'indexes' => array(),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'Mensaje' => 'Lorem ipsum dolor sit amet',
			'Dirigido a' => 'Lorem ipsum dolor sit amet',
			'Estatus' => 'Lorem ipsum d',
			'Estado' => 'Lorem ipsum dolor sit amet',
			'Fecha/Hora de envio' => '2012-08-29 11:16:35',
			'Enviado por' => 'Lorem ipsum dolor sit amet',
			'filtro' => '2012-08-29'
		),
	);
}
