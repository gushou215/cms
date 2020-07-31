<?php return array (
  'article' => 
  array (
    'title' => '文章管理',
    'icon' => 'fa fa-navicon',
    'permission' => '权限标识',
    'menus' => 
    array (
      0 => 
      array (
        'title' => '栏目管理',
        'permission' => 'Modules\\Article\\Http\\Controllers\\CategoryController@index',
        'url' => '/article/category',
      ),
      1 => 
      array (
        'title' => '文章管理',
        'permission' => 'Modules\\Article\\Http\\Controllers\\ContentController@index',
        'url' => '/article/content',
      ),
      2 => 
      array (
        'title' => '模板管理',
        'permission' => 'Modules\\Article\\Http\\Controllers\\TemplateController@index',
        'url' => '/article/template',
      ),
      3 => 
      array (
        'title' => '幻灯片管理',
        'permission' => 'Modules\\Article\\Http\\Controllers\\SlideController@index',
        'url' => '/article/slide',
      ),
      4 => 
      array (
        'title' => '评论管理',
        'permission' => '',
        'url' => '/article/comment',
      ),
    ),
  ),
);