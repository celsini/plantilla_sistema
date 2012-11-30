<?php
/**
 * C012tEnvioFixture
 *
 */
class C012tEnvioFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'c012t_envio';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'co_envio' => array('type' => 'integer', 'null' => false, 'default' => 'nextval((\'"sms_mensajes"."c012t_envio_co_envio_seq"\''),
		'tx_telefono' => array('type' => 'string', 'null' => true, 'length' => 11),
		'tx_carpeta' => array('type' => 'string', 'null' => true, 'length' => 100),
		'i004t_prioridad_id' => array('type' => 'integer', 'null' => true),
		'tx_mensaje' => array('type' => 'string', 'null' => true, 'length' => 300),
		'c007t_mensajes_enviados_id' => array('type' => 'integer', 'null' => true),
		'estado' => array('type' => 'boolean', 'null' => true, 'default' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'co_envio')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'co_envio' => 1,
			'tx_telefono' => 'Lorem ips',
			'tx_carpeta' => 'Lorem ipsum dolor sit amet',
			'i004t_prioridad_id' => 1,
			'tx_mensaje' => 'Lorem ipsum dolor sit amet',
			'c007t_mensajes_enviados_id' => 1,
			'estado' => 1
		),
	);
}
