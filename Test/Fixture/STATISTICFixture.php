<?php
/**
 * STATISTICFixture
 *
 */
class STATISTICFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'STATISTICS';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'TABLE_CATALOG' => array('type' => 'string', 'null' => false, 'length' => 512, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_SCHEMA' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'NON_UNIQUE' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 1),
		'INDEX_SCHEMA' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'INDEX_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SEQ_IN_INDEX' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 2),
		'COLUMN_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'COLLATION' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CARDINALITY' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'SUB_PART' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 3),
		'PACKED' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'NULLABLE' => array('type' => 'string', 'null' => false, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'INDEX_TYPE' => array('type' => 'string', 'null' => false, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'COMMENT' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'INDEX_COMMENT' => array('type' => 'string', 'null' => false, 'length' => 1024, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MEMORY')
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
			'NON_UNIQUE' => '',
			'INDEX_SCHEMA' => 'Lorem ipsum dolor sit amet',
			'INDEX_NAME' => 'Lorem ipsum dolor sit amet',
			'SEQ_IN_INDEX' => '',
			'COLUMN_NAME' => 'Lorem ipsum dolor sit amet',
			'COLLATION' => 'Lorem ipsum dolor sit ame',
			'CARDINALITY' => '',
			'SUB_PART' => '',
			'PACKED' => 'Lorem ip',
			'NULLABLE' => 'L',
			'INDEX_TYPE' => 'Lorem ipsum do',
			'COMMENT' => 'Lorem ipsum do',
			'INDEX_COMMENT' => 'Lorem ipsum dolor sit amet'
		),
	);

}
