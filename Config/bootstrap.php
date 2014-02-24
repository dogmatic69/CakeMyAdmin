<?php
App::uses('Folder', 'Utility');
App::uses('CmaConnect', 'Cma.Lib');

$Folder = new Folder(CakePlugin::path('Cma') . 'Model' . DS . 'MySql');
list(,$files) = $Folder->read();
foreach ($files as $model) {
	$model = current(explode('.', $model));
	App::uses($model, 'Cma.Model/MySql');
	class_exists($model);
}