<?php
/**
 * Mv005GrupoFiltroFixture
 *
 */
class Mv005GrupoFiltroFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'mv005_grupo_filtro';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'co_grupo' => array('type' => 'integer', 'null' => true),
		'tx_grupo' => array('type' => 'string', 'null' => true, 'length' => 100),
		'codigo_grupo_id' => array('type' => 'integer', 'null' => true),
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
			'co_grupo' => 1,
			'tx_grupo' => 'Lorem ipsum dolor sit amet',
			'codigo_grupo_id' => 1
		),
	);
}
