<?php
/**
 * C009tModemFixture
 *
 */
class C009tModemFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'c009t_modem';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'co_modem' => array('type' => 'integer', 'null' => false, 'default' => 'nextval((\'"sms_mensajes"."c009t_modem_co_modem_seq"\''),
		'tx_telefono' => array('type' => 'string', 'null' => true, 'length' => 11),
		'c010t_computador_id' => array('type' => 'integer', 'null' => true),
		'i001t_estatus_telefono_id' => array('type' => 'integer', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'co_modem')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'co_modem' => 1,
			'tx_telefono' => 'Lorem ips',
			'c010t_computador_id' => 1,
			'i001t_estatus_telefono_id' => 1
		),
	);
}
