<?php

Route::group(['middleware' => ['web','auth:admin'], 'prefix' => 'article', 'namespace' => 'Modules\Article\Http\Controllers'], function()
{
    
    
    Route::resource('category', 'CategoryController')->middleware("permission:admin,resource");
    
});

 
//content-route
Route::group(['middleware' => ['web'],'prefix'=>'article','namespace'=>"Modules\Article\Http\\Controllers"], 
function () {
    Route::get('lists/{category}.html', 'HomeController@lists');
    Route::get('content/{content}.html', 'HomeController@content');
});


Route::group(['middleware' => ['web','auth:admin'],'prefix'=>'article','namespace'=>"Modules\Article\Http\\Controllers"], 
function () {
    Route::get('/', 'ContentController@index');
    Route::resource('content', 'ContentController')->middleware("permission:admin,resource");
});


 
//slide-route
Route::group(['middleware' => ['web','auth:admin'],'prefix'=>'article','namespace'=>"Modules\Article\Http\\Controllers"], 
function () {
    Route::resource('slide', 'SlideController')->middleware("permission:admin,resource");
    Route::get('template', 'TemplateController@index');
    Route::get('template/set/{name}', 'TemplateController@setDefaultTemplate');
});
 
//comment-route
Route::group(['middleware' => ['web','auth:web'],'prefix'=>'article','namespace'=>"Modules\Article\Http\\Controllers"], 
function () {
    Route::resource('comment', 'CommentController');
});