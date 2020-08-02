<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//动态设置域名跳转的页面
// Route::get('/', function () {
//     return app()->build(\Modules\Admin\Http\Controllers\HomeController::class)->index();
// });

Route::group(['middleware' => 'check.mail'], function() {
    Route::get('/', function (\Modules\Admin\Entities\Module $module) {
        $module = $module->getDefaultModule();
        $class = '\Modules\\'.$module['name'].'\Http\Controllers\HomeController';
        return app()->build($class)->index();
    });
});




Route::get('/home/index/index','Home\IndexController@index')->name('home');

// Route::get('/home','Home\IndexController@index')->name('home');

Route::get('follow/{user}','Home\UserController@follow')->name('user.follow');
Route::resource('user', 'Home\UserController');


Route::get('logout','Home\LoginController@logout')->name('logout');
Route::get('login','Home\LoginController@login')->name('login');
Route::post('store','Home\LoginController@store')->name('login.store');
Route::get('confirmEmailToken/{token}','Home\UserController@confirmEmailToken')->name('confirmEmailToken');


//找回密码
Route::get('FindPasswordEmail','Home\PasswordController@email')->name('FindPasswordEmail');
Route::post('FindPasswordSend','Home\PasswordController@send')->name('FindPasswordSend');
Route::get('FindPasswordEdit/{token}','Home\PasswordController@edit')->name('FindPasswordEdit');
Route::post('FindPasswordUpdate','Home\PasswordController@update')->name('FindPasswordUpdate');


Route::resource('blog', 'Home\BlogController');





// Route::get('/home/test/test1','TestController@test1');
// Route::get('/home/index/index','Home\IndexController@index');
// Route::get('/admin/index/index','Admin\IndexController@index');


//DB类层面的增删改查
// Route::group(['prefix' => 'home/index'], function () {
//     Route::get('add','Home\IndexController@add');
//     Route::get('del','Home\IndexController@del');
//     Route::get('update','Home\IndexController@update');
//     Route::get('select','Home\IndexController@select');
//     Route::get('test1','Home\IndexController@test1');
// });



//模型的增删改查
// Route::get('/home/index/modeladd','Home\IndexController@modelAdd');
// Route::get('/home/index/modeldel','Home\IndexController@modelDel');
// Route::get('/home/index/modelupdate','Home\IndexController@modelUpdate');
// Route::get('/home/index/modelselect','Home\IndexController@modelSelect');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::any('/upload','UploadController@make');
Route::any('/upload-simditor','UploadController@simditor');

//邮箱验证
Route::get('check_mail_show','UserController@checkMailShow')->name('check_mail_show');
Route::get('send_mail_token','UserController@sendMailToken')->name('send_mail_token');
Route::get('check_register_mail/{token}','UserController@checkUserMail')->name('check_register_mail');

//测试测试测试测试
