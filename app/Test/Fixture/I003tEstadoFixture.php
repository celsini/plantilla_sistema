<?php
/**
 * I003tEstadoFixture
 *
 */
class I003tEstadoFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'i003t_estado';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'co_estado' => array('type' => 'integer', 'null' => false, 'default' => 'nextval((\'"sms_mensajes"."i003t_estado_co_estado_seq"\''),
		'tx_estado' => array('type' => 'string', 'null' => true, 'length' => 50),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'co_estado')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'co_estado' => 1,
			'tx_estado' => 'Lorem ipsum dolor sit amet'
		),
	);
}
