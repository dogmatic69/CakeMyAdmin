<?php
App::uses('CmaAppModel', 'Cma.Model');
/**
 * INNODBBUFFERPAGELRU Model
 *
 */
class CmaInnodbBufferPageLru extends CmaAppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'info';

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'INNODB_BUFFER_PAGE_LRU';

}
