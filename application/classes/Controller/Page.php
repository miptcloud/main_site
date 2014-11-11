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
		
		$path = $this->param('path');
		if($path == "")
		{
			$path = 'index';
		}
		
		$path = "pages/".$path;
		
		try
		{
			$page = $this->app->pages->get($path);
			$this->response->body($page->render());
			foreach($page->getStyles() as $style)
			{
				$this->add_outer_style("/assets/".$style);
			}
			foreach($page->getScripts() as $script)
			{
				if(strpos($script,"http://") === false)
				{
					$this->add_outer_script("/assets/".$script);
				}
				else {
					$this->add_outer_script($script);
				}
				
			}
			
			$top_menu = $this->app->views->get('top_menu');
			$this->layout->top_menu = $top_menu;
		}
		catch(\Exception $ex)
		{
			$this->response->status(404);
		}						
		
		parent::execute();
	}
	
}
