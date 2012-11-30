<?php
/**
 * I001tEstatusTelefonoFixture
 *
 */
class I001tEstatusTelefonoFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'i001t_estatus_telefono';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'co_estatus' => array('type' => 'integer', 'null' => false),
		'tx_estatus' => array('type' => 'string', 'null' => true, 'length' => 10),
		'in_estatus' => array('type' => 'integer', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'co_estatus')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'co_estatus' => 1,
			'tx_estatus' => 'Lorem ip',
			'in_estatus' => 1
		),
	);
}
