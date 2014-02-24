<?php
App::uses('CmaAppController', 'Cma.Controller');
App::uses('CmaSchema', 'Cma.Model');

class CmaTablesController extends CmaAppController {

	public $uses = array(
		'Cma.CmaSchemata',
	);

	public function index() {
		$database = !empty($this->request->params['database']) ? $this->request->params['database'] : null;
		$tables = $this->CmaSchemata->find('tables', $database);
		
		$this->set(compact('tables', 'database'));
	}

	public function structure() {
		$database = !empty($this->request->params['database']) ? $this->request->params['database'] : null;
		$table = !empty($this->request->params['table']) ? $this->request->params['table'] : null;

		$modelName = $this->_ModelFromTable($database, $table);

		$CakeSchema = new CmaSchema();
		$this->set($CakeSchema->schema($this->{$modelName}));
		$this->set(array(
			'alias' => $this->{$modelName}->alias,
			'table' => $this->{$modelName}->useTable,
			'primaryKey' => $this->{$modelName}->primaryKey,
			'displayField' => $this->{$modelName}->displayField,
		));
	}

	public function browse() {
		$database = !empty($this->request->params['database']) ? $this->request->params['database'] : null;
		$table = !empty($this->request->params['table']) ? $this->request->params['table'] : null;

		$modelName = $this->_ModelFromTable($database, $table);

		$schema = $this->{$modelName}->schema();
		foreach ($schema as $field => $config) {
			if (in_array($field, array('password', 'hash')) && $config['type'] == 'string') {
				if ($config['length'] == 40) {
					$this->{$modelName}->virtualFields[$field] = '"SHA1"';
				}
				continue;
			}

			if (substr($field, -3) == '_id') {
				$relatedModel = Inflector::camelize(substr($field, 0, -3));
				try {
					@$RelatedModel = ClassRegistry::init($relatedModel);
					if (!$RelatedModel instanceof AppModel) {
						throw new CakeException('Not a valid model class');
					}
					$RelatedModel->virtualFields = array(
						'==foreignKey' => sprintf('"%s"', $field),
						'==alias' => sprintf('"%s"', $RelatedModel->alias),
						'==table' => sprintf('"%s"', $RelatedModel->useTable),
						'==primaryKey' => sprintf('"%s"', $RelatedModel->primaryKey),
						'==displayField' => sprintf('"%s"', $RelatedModel->displayField),
					);
					$this->{$modelName}->bindModel(array(
						'belongsTo' => array(
							$relatedModel
						)
					), false);
					$this->Paginator->settings['contain'][] = $relatedModel;
				} catch (Exception $e) {

				}
			}
		}
		$data = $this->Paginator->paginate($modelName);

		if (empty($data)) {
			$this->Cma->warning('No data found, showing table schema', array(
				'action' => 'structure',
				'database' => $database,
				'table' => $table,
			));
		}

		$this->set(array(
			'data' => $data,
			'alias' => $this->{$modelName}->alias,
			'table' => $this->{$modelName}->useTable,
			'primaryKey' => $this->{$modelName}->primaryKey,
			'displayField' => $this->{$modelName}->displayField,
			'schema' => $schema,
			'belongsTo' => (array)array_keys($this->{$modelName}->belongsTo),
		));
	}

	public function add() {
		if (!$this->request->is('post')) {
			$this->Cma->warning('Problem with the request', true);
		}
		if (!isset($this->request->data['CmaTable']['_pre'])) {
			throw new CakeException('Create new table here');
		}

		foreach (range(1, $this->request->data['CmaTable']['columns']) as $k) {
			$this->request->data['CmaField'][] = array(
				'field_name' => '',
				'type' => '',
				'null' => false,
				'default' => '',
				'length' => '',
				'collate' => null,
				'charset' => null,
			);
		}

		$collations = ClassRegistry::init('Cma.CmaCollation')->find('select');
		$charsets = ClassRegistry::init('Cma.CmaCharacterSet')->find('select');
		$this->set(array(
			'type_config' => array(
				'options' => array(
					'string' => __d('cma', 'String'),
					'boolean' => __d('cma', 'Boolean'),
					'integer' => __d('cma', 'Integer'),
					'varchar' => __d('cma', 'VarChar'),
					'text' => __d('cma', 'Text'),
				),
				'type' => 'select',
				'empty' => __d('cma', 'Field type'),
			),
			'null_config' => array(
				'type' => 'checkbox',
				'label' => array(
					'class' => '',
				),
			),
			'default_config' => array(
				'placeholder' => __d('cma', 'Default value'),
			),
			'length_config' => array(
				'type' => 'number',
				'min' => 0,
				'max' => PHP_INT_MAX,
			),
			'collate_config' => array(
				'type' => 'select',
				'options' => $collations,
				'empty' => __d('cma', 'Collate'),
			),
			'charset_config' => array(
				'type' => 'select',
				'options' => $charsets,
				'empty' => __d('cma', 'Charset'),
			)
		));
	}

	public function insert() {
		if ($this->request->data) {
			pr($this->request->data);
			exit;
		}
		self::structure();
	}

	public function truncate() {
		throw new CakeException('not implemented');
	}

	public function delete() {
		throw new CakeException('not implemented');
	}

	protected function _ModelFromTable($database, $table) {
		try {
			$Model = CmaConnect::loadModel($database, $table);
			$this->{$Model->alias} = $Model;
		} catch (Exception $e) {
			$this->Cma->error($e, array('action' => 'databases'));
		}

		return $Model->alias;
	}
}