<?php
/**
 * Mv010ResumenSmFixture
 *
 */
class Mv010ResumenSmFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Mensaje' => array('type' => 'string', 'null' => true, 'length' => 300),
		'Dirigido a' => array('type' => 'string', 'null' => true, 'length' => 100),
		'Total sms' => array('type' => 'integer', 'null' => true),
		'Total enviados' => array('type' => 'integer', 'null' => true),
		'Total pendiente' => array('type' => 'integer', 'null' => true),
		'c003t_grupo_id' => array('type' => 'integer', 'null' => true),
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
			'Total sms' => 1,
			'Total enviados' => 1,
			'Total pendiente' => 1,
			'c003t_grupo_id' => 1
		),
	);
}
