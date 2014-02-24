<?php
class CmaHelper extends AppHelper {

	public $helpers = array(
		'Html'
	);

/**
 * Build an icon
 *
 * @param string $type the type of icon to return
 *
 * @return string
 */
	public function icon($type) {
		$icon = $this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-%s'));
		$icons = array(
			'home' => sprintf($icon, 'home'),
			'list' => sprintf($icon, 'th-list'),
			'structure' => sprintf($icon, 'list-alt'),

			'edit' => sprintf($icon, 'edit'),
			'delete' => sprintf($icon, 'trash'),
			'insert' => sprintf($icon, 'floppy-open'),
			'true' => sprintf($icon, 'ok'),
			'false' => sprintf($icon, 'remove'),
		);

		return !empty($icons[$type]) ? $icons[$type] : null;
	}

	public function home() {
		return $this->Html->link($this->icon('home'), array(
			'plugin' => 'cma',
			'controller' => 'cma_databases',
			'action' => 'index',
		), array('escape' => false));
	}

	public function database($database) {
		return $this->Html->link(Inflector::classify($database), array(
			'plugin' => 'cma',
			'controller' => 'cma_tables',
			'action' => 'index',
			'database' => $database
		), array('title' => $database));
	}

	public function table($database, $table, $action = 'browse') {
		return $this->Html->link(Inflector::classify($table), array(
			'plugin' => 'cma',
			'controller' => 'cma_tables',
			'action' => $action,
			'database' => $database,
			'table' => $table,
		), array('title' => sprintf('%s :: %s', $database, $table)));
	}

/**
 * Row count button
 *
 * @param integer $count the row count
 *
 * @return string
 */
	public function rowCountButton($count) {
		return $this->Html->link((int)$count ?: '-', '#', array(
			'class' => 'btn btn-default row-count',
			'title' => __d('cma', '~%d Rows', $count),
		));
	}

/**
 * Browse link
 *
 * @param string $database the database name
 * @param string $table the table name
 * @param string $text optional text to add to the link
 *
 * @return string
 */
	public function browse($database, $table, $text = null) {
		$url = array(
			'plugin' => 'cma',
			'controller' => 'cma_tables',
			'action' => 'browse',
			'database' => $database, 
			'table' => $table,
		);
		return $this->Html->link($this->icon('list') . __d('cma', $text), $url, array(
			'class' => 'btn btn-xs btn-default', 
			'title' => __d('cma', 'Browse Data'),
			'escape' => false,
		));
	}

/**
 * Structure link
 *
 * @param string $database the database name
 * @param string $table the table name
 * @param string $text optional text to add to the link
 *
 * @return string
 */
	public function structure($database, $table, $text = null) {
		$url = array(
			'plugin' => 'cma',
			'controller' => 'cma_tables',
			'action' => 'structure',
			'database' => $database, 
			'table' => $table,
		);
		return $this->Html->link($this->icon('structure') . __d('cma', $text), $url, array(
			'class' => 'btn btn-xs btn-default', 
			'title' => __d('cma', 'View Table Structure'),
			'escape' => false,
		));
	}
}