<?php

$admin = new Door\BSPanel\Configurator\AdminPanel();

$admin->add_menu_items(array(
	array(
		'uri' => '',
		'icon' => 'fa-home',
		'name' => 'Главная'
	),
	array(
		'uri' => 'pages',
		'name' => 'Страницы',
		'icon' => 'fa-file'
	),
	array(
		'uri' => 'news',
		'name' => 'Новости',
		'icon' => 'fa-file-text'
	),
	array(
		'uri' => 'collections',
		'name' => 'Коллекции',
		'icon' => 'fa-database'
	),
	array(
		'uri' => 'catalogue',
		'name' => 'Каталог',
		'icon' => 'fa-signal'
	),
	array(
		'uri' => 'metal_colors',
		'name' => 'Каталог по цвету',
		'icon' => 'fa-asterisk'
	),
	array(
		'uri' => 'press',
		'name' => 'Пресса',
		'icon' => 'fa-trophy'
	)	
));

$multilang_tabs = array(
	'type' => 'tabs',
	'tabs' => array(
		array(
			'name' => 'russian',
			'fields' => array(
				'name_ru',
				'description_ru',
				'keywords_ru',
				array(
					'name' => 'text_ru',
					'type' => 'wysiwyg'
				),						
			)
		),
		array(
			'name' => 'english',
			'fields' => array(
				'name_en',
				'description_en',
				'keywords_en',
				array(
					'name' => 'text_en',
					'type' => 'wysiwyg'
				),						
			)					
		)
	)
);

$admin->add_editable_list("pages", "Page", array(
	'delete' => false,
	'create' => false,
	'list_columns' => array(
		'name_ru'
	),
	'edit_fields' => array(
		$multilang_tabs
	)
))->add_editable_list("news", "NewsItem", array(
	'list_columns' => array(
		'name_ru','date','visible'
	),
	'sort' => array(
		'date' => -1
	),
	'edit_fields' => array(
		'date',
		'visible',
		$multilang_tabs
	)
))->add_editable_list("collections", "Collection", array(
	'list_columns' => array(
		'name_ru','visible'
	),
	'sortable' => true,
	'list_buttons' => array(
		array(
			'name' => 'Товары',
			'icon' => 'list',
			'uri' => 'goods?collection_id=<id>',
			'attributes' => array(
				'class' => 'btn-primary'
			)
		)
	),	
	'edit_fields' => array(
		'visible',
		'image',
		'alias',
		$multilang_tabs
	)
))->add_editable_list("goods", "Good", array(
	'list_columns' => array(
		'name_ru','visible'
	),
	'filter_param' => 'collection_id',
	'filter_model' => 'Collection',
	'return_uri' => 'collections',	
	'sortable' => true,
	'edit_fields' => array(
		'visible',
		'image',
		'set_goods',
		'alias',
		$multilang_tabs
	)
))->add_editable_list("catalogue", "CatalogueSection", array(
	'list_columns' => array(
		'name_ru','visible'
	),
	'list_buttons' => array(
		array(
			'name' => 'Подразделы',
			'icon' => 'list',
			'uri' => 'catalogue_pages?section_id=<id>',
			'attributes' => array(
				'class' => 'btn-primary'
			)
		)
	),		
	'sortable' => true,
	'edit_fields' => array(
		'alias',
		'visible',
		'image',
		$multilang_tabs
	)
))->add_editable_list("catalogue_pages", "CataloguePage", array(
	'list_columns' => array(
		'name_ru','visible'
	),
	'sortable' => true,
	'filter_param' => 'section_id',
	'filter_model' => 'CatalogueSection',
	'return_uri' => 'catalogue',		
	'edit_fields' => array(
		'visible',
		'alias',
		'image',
		'goods',
		$multilang_tabs
	)
))->add_editable_list("metal_colors", "MetalColor", array(
	'list_columns' => array(
		'name_ru','visible'
	),
	'sortable' => true,	
	'edit_fields' => array(
		'visible',
		'alias',
		'image',
		'goods',
		$multilang_tabs
	)
))->add_editable_list("press", "PressItem", array(
	'list_columns' => array(
		'name_ru','visible'
	),
	'sortable' => true,
	'edit_fields' => array(
		'visible',
		'image',
		'full_image',
		array(
			'type' => 'tabs',
			'tabs' => array(
				array(
					'name' => 'russian',
					'fields' => array(
						'name_ru'				
					)
				),
				array(
					'name' => 'english',
					'fields' => array(
						'name_en'				
					)					
				)
			)
		)
	)
));

$admin->configure($app);

unset($admin);