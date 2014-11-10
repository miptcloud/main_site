<?php

/*
 * Created by Sachik Sergey
 * box@serginho.ru
 */

namespace App\Controller;

/**
 * Description of Page
 *
 * @author serginho
 */
class Page extends Layout{
	
	public function execute() {
		
		$this->response->body("Hello,world!");
		
		parent::execute();
	}
	
}
