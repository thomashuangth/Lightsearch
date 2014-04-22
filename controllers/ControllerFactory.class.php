<?php

require_once 'controllers/pdo/PdoResultController.class.php';

final class ControllerFactory {
	
	private function __construct() {}
	
	public static function getResultController() {
		return new PdoResultController();
	}
}

?>