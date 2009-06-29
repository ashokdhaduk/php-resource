<?php
require_once dirname(__FILE__) . '/Resource.php';

class MySQL extends Resource {
	protected static $prefix = 'mysql_';
	protected $unshift = false;
	protected $destructor = 'close';
	protected $resources = array('mysql result' => 'freeResult');

	protected function __construct($resource) {
		parent::__construct($resource);
		if (get_resource_type($resource) == 'mysql result') {
			$this->unshift = true;
		}
	}
}
