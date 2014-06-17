<?php

App::uses('UsersController', 'Users.Controller');
class AppUsersController extends UsersController {
	public $name = 'AppUsers';

	public function beforeFilter() {
		parent::beforeFilter();
		$this->User = ClassRegistry::init('AppUser');
		$this->set('model', 'AppUser');
		$this->layout = 'default';
	}

	public function render($view = null, $layout = null) {
		if (is_null($view)) {
			$view = $this->action;
		}
		$viewPath = substr(get_class($this), 0, strlen(get_class($this)) - 10);
		if (!file_exists(APP . 'View' . DS . $viewPath . DS . $view . '.ctp')) {
			$this->plugin = 'Users';
			$this->viewPath = 'Users';
		} else {
			$this->viewPath = $viewPath;
		}
		return parent::render($view, $layout);
	}
}