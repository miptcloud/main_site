<?php

/*
 * Created by Sachik Sergey
 * box@serginho.ru
 */
namespace App;
use Door\Core\View;
/**
 * Description of Page
 *
 * @author serginho
 */
class Page {
	
	protected $styles;
	
	protected $scripts;
	
	/**
	 *
	 * @var View
	 */
	protected $view;
	
	public function __construct(View $view) {
		$this->view = $view;
	}
	
	public function render()
	{
		$this->styles = array();
		$this->scripts = array();
		$this->view->page = $this;
		return $this->view->render();		
	}
	
	public function addStyle($url)
	{
		$this->styles[] = $url;
	}
	
	public function addScript($url)
	{
		$this->scripts[] = $url;
	}
	
	public function getStyles()
	{
		return $this->styles;
	}
	
	public function getScripts()
	{
		return $this->scripts;
	}
	
}
