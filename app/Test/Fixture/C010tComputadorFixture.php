<?php
/**
 * C010tComputadorFixture
 *
 */
class C010tComputadorFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'c010t_computador';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'co_computador' => array('type' => 'integer', 'null' => false, 'default' => 'nextval((\'"sms_mensajes"."c010t_computador_co_computador_seq"\''),
		'tx_computador' => array('type' => 'string', 'null' => true, 'length' => 50),
		'tx_carpeta' => array('type' => 'string', 'null' => true, 'length' => 100),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'co_computador')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'co_computador' => 1,
			'tx_computador' => 'Lorem ipsum dolor sit amet',
			'tx_carpeta' => 'Lorem ipsum dolor sit amet'
		),
	);
}
