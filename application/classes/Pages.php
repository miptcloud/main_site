<?php

/*
 * Created by Sachik Sergey
 * box@serginho.ru
 */

namespace App;
use Door\Core\Library;

/**
 * Description of Pages
 *
 * @author serginho
 */
class Pages extends Library{
	
	public function init() {
		parent::init();						
	}
	
	/**
	 * 
	 * @param type $name
	 * @return Page
	 */
	public function get($name)
	{
		$view = $this->app->views->get($name);
		$page = new Page($view);
		return $page;
	}
	
}
