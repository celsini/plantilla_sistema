<?php
/**
 * C004tGrupoDestinatarioFixture
 *
 */
class C004tGrupoDestinatarioFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'c004t_grupo_destinatario';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'c003t_grupo_id' => array('type' => 'integer', 'null' => false),
		'c001t_destinatario_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => array('c003t_grupo_id', 'c001t_destinatario_id'))),
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
			'c001t_destinatario_id' => 1
		),
	);
}
