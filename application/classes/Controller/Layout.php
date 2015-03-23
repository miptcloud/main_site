<?php

/*
 * Created by Sachik Sergey
 * box@serginho.ru
 */
namespace App\Controller;
/**
 * Description of Layout
 *
 * @author serginho
 */
class Layout extends \Door\Core\Controller\Layout {
	
	public function init() {				
		parent::init();
		
		$this->add_outer_style("/assets/plugins/bootstrap/css/bootstrap.min.css");
		$this->add_outer_style("/assets/css/style.css");		
		$this->add_outer_style("/assets/plugins/line-icons/line-icons.css");
		$this->add_outer_style("/assets/plugins/font-awesome/css/font-awesome.min.css");
		
		$this->add_outer_script("/assets/plugins/jquery/jquery.min.js");
		$this->add_outer_script("/assets/plugins/jquery/jquery-migrate.min.js");
		$this->add_outer_script("/assets/plugins/bootstrap/js/bootstrap.min.js");
		$this->add_outer_script("/assets/plugins/back-to-top.js");			
					
	}
	
	public function execute() {
		
		$this->add_outer_style("/assets/css/theme-colors/dark-blue.css");
		$this->add_outer_style("/assets/css/custom.css");		
		
		$this->add_outer_script("/assets/js/custom.js");
		$this->add_outer_script("/assets/js/app.js");				
		
		if( !isset($this->layout->title))
		{
			$this->layout->title = $this->title;
		}
		
		parent::execute();
	}
	
	public function set_model(\Door\Core\Model $model) {
		
		$lang = $this->app->lang->lang();
		$fields = array(
			'description' => "description",
			'keywords' => 'keywords',
			'name' => 'title');
		
		foreach($fields as $name => $property)
		{
			$key = $name."_".$lang;
			if(isset($model->$key))
			{
				$this->$property = $model->$key;
			}
		}		
		
		parent::set_model($model);
	}
}
