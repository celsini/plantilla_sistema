<?php
/**
 * PruebaFixture
 *
 */
class PruebaFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'prueba';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'c003t_grupo_id' => array('type' => 'integer', 'null' => true),
		'tx_telefono' => array('type' => 'string', 'null' => true, 'length' => 11),
		'carpeta' => array('type' => 'text', 'null' => true),
		'prioridad' => array('type' => 'integer', 'null' => true),
		'codigoid' => array('type' => 'integer', 'null' => true),
		'bool' => array('type' => 'boolean', 'null' => true),
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
			'c003t_grupo_id' => 1,
			'tx_telefono' => 'Lorem ips',
			'carpeta' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'prioridad' => 1,
			'codigoid' => 1,
			'bool' => 1
		),
	);
}
