<?php
/**
 * I004tPrioridadFixture
 *
 */
class I004tPrioridadFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'i004t_prioridad';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'co_prioridad' => array('type' => 'integer', 'null' => false, 'default' => 'nextval((\'"sms_mensajes"."i004t_prioridad_co_prioridad_seq"\''),
		'tx_prioridad' => array('type' => 'string', 'null' => true, 'length' => 20),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'co_prioridad')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'co_prioridad' => 1,
			'tx_prioridad' => 'Lorem ipsum dolor '
		),
	);
}
