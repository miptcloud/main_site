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
		
		//$this->add_outer_style();
		
		$this->add_script("components/jquery/jquery.min");
		$this->add_script('script');
						
	}
	
	public function execute() {
		
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
