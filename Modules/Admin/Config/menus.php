<?php return array (
  0 => 
    array (
      'title' => '基本管理',
      'icon' => 'fe fa-bank',
      'permission' => '[Modules\\Admin\\Http\\Controllers\\RoleController@index]',
      'menus' => 
      array (
        0 => 
        array (
          'title' => '系统预览',
          'permission' => 'Modules\\Admin\\Http\\Controllers\\AdminController@index',
          'url' => '/admin',
        ),
        1 => 
        array (
          'title' => '角色管理',
          'permission' => 'Modules\\Admin\\Http\\Controllers\\RoleController@index',
          'url' => '/admin/role',
        ),
      ),
    ),
  1 => 
    array (
      'title' => '模块管理',
      'icon' => 'fa fa-navicon',
      'permission' => '[Modules\Admin\Http\Controllers\ModuleController@index]',
      'menus' => 
        array (
          0 => 
          array (
            'title' => '模块管理',
            'permission' => 'Modules\Admin\Http\Controllers\ModuleController@index',
            'url' => '/admin/module',
          ),
        ),
    ),
);