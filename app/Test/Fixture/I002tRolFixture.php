<?php
/**
 * I002tRolFixture
 *
 */
class I002tRolFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'i002t_rol';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'co_rol' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'tx_rol' => array('type' => 'text', 'null' => false),
		'tx_descripcion' => array('type' => 'text', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'co_rol'), 'i002t_rol_tx_rol_key' => array('unique' => true, 'column' => 'tx_rol')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'co_rol' => 1,
			'tx_rol' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'tx_descripcion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);
}
