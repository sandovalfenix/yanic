<?php 

namespace Controllers;

use Config\Config;

/**
 * @start homepage
 */
class DefaultController extends Config {

	public function __construct() {
		parent::__construct();
		$this->index();
	}

	public function index() {
		$this->render('homepage/index.twig');
	}
}