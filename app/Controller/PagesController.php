<?php

/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       Cake.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

	/**
	 * Default helper
	 *
	 * @var array
	 */
	public $helpers = array('Html', 'Session');

	/**
	 * This controller does not use a model
	 *
	 * @var array
	 */
	public $uses = array();

	/**
	 * Displays a view
	 *
	 * @param mixed What page to display
	 * @return void
	 */
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		$this->render(implode('/', $path));
	}

	public function documentary($id) {
		$movies = array(
			1 => 'The Water Cycle',
			2 => 'The matunda kids sign with volunteers',
			3 => 'We have water',
			4 => 'The Matunda Health Centre',
			5 => 'Pulling Teeth',
		);
		if (empty($movies[$id])) {
			$id = 1;
		}

		$title_movie = $title_for_layout = $movies[$id];

		$this->set(compact('id', 'title_movie', 'title_for_layout'));
	}
	
	public function video($id) {
		$movies = array(
			1 => array('The Water Cycle','http://www.youtube.com/embed/lzOAxvs2RuY'),
			2 => array('The matunda kids sign with volunteers','http://www.youtube.com/embed/Melw8HX6ssA'),
			3 => array('We have water','http://www.youtube.com/embed/-AMB71jf6rs'),
			4 => array('The Matunda Health Centre','http://www.youtube.com/embed/rRxM42URLh0'),
			5 => array('Pulling Teeth','http://www.youtube.com/embed/2uAoB1IxfH0'),
		);
		if (empty($movies[$id])) {
			$id = 1;
		}

		$title_movie = $movies[$id];
		$title_for_layout = $movies[$id][0];

		$this->set(compact('id', 'title_movie', 'title_for_layout'));
	}

}