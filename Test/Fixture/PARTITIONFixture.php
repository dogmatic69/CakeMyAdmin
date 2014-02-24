<?php
/**
 * PARTITIONFixture
 *
 */
class PARTITIONFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'PARTITIONS';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'TABLE_CATALOG' => array('type' => 'string', 'null' => false, 'length' => 512, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_SCHEMA' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'PARTITION_NAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SUBPARTITION_NAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'PARTITION_ORDINAL_POSITION' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'SUBPARTITION_ORDINAL_POSITION' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'PARTITION_METHOD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 18, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SUBPARTITION_METHOD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'PARTITION_EXPRESSION' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SUBPARTITION_EXPRESSION' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'PARTITION_DESCRIPTION' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_ROWS' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'AVG_ROW_LENGTH' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'DATA_LENGTH' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'MAX_DATA_LENGTH' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'INDEX_LENGTH' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'DATA_FREE' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'CREATE_TIME' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'UPDATE_TIME' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'CHECK_TIME' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'CHECKSUM' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'PARTITION_COMMENT' => array('type' => 'string', 'null' => false, 'length' => 80, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'NODEGROUP' => array('type' => 'string', 'null' => false, 'length' => 12, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLESPACE_NAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'TABLE_CATALOG' => 'Lorem ipsum dolor sit amet',
			'TABLE_SCHEMA' => 'Lorem ipsum dolor sit amet',
			'TABLE_NAME' => 'Lorem ipsum dolor sit amet',
			'PARTITION_NAME' => 'Lorem ipsum dolor sit amet',
			'SUBPARTITION_NAME' => 'Lorem ipsum dolor sit amet',
			'PARTITION_ORDINAL_POSITION' => '',
			'SUBPARTITION_ORDINAL_POSITION' => '',
			'PARTITION_METHOD' => 'Lorem ipsum dolo',
			'SUBPARTITION_METHOD' => 'Lorem ipsu',
			'PARTITION_EXPRESSION' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'SUBPARTITION_EXPRESSION' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'PARTITION_DESCRIPTION' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'TABLE_ROWS' => '',
			'AVG_ROW_LENGTH' => '',
			'DATA_LENGTH' => '',
			'MAX_DATA_LENGTH' => '',
			'INDEX_LENGTH' => '',
			'DATA_FREE' => '',
			'CREATE_TIME' => '2014-02-21 20:52:06',
			'UPDATE_TIME' => '2014-02-21 20:52:06',
			'CHECK_TIME' => '2014-02-21 20:52:06',
			'CHECKSUM' => '',
			'PARTITION_COMMENT' => 'Lorem ipsum dolor sit amet',
			'NODEGROUP' => 'Lorem ipsu',
			'TABLESPACE_NAME' => 'Lorem ipsum dolor sit amet'
		),
	);

}
