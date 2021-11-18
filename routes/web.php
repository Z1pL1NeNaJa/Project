<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/contact', function () {
    return view('contact');
});

//route Dashboard
Route::get('/index','Admin\AdminController@index')->name('index');
//route admin
Route::get('/adminfrom','Admin\AdminindexController@showadmin')->name('adminfrom');
//route Background
Route::get('/Backgroundfrom','Admin\BackgroundController@showBackground')->name('Backgroundfrom');
//route TypeProduct
Route::get('/TypeProductfrom','Admin\TypeProductController@showTypeProduct')->name('TypeProductfrom');
//route Product
Route::get('/productfrom','Admin\ProductController@showproduct')->name('productfrom');
//route Contents
Route::get('/contentsfrom','Admin\contentsController@showcontents')->name('contentsfrom');
//route Homepagefrom
Route::get('/homepagefrom','Admin\HomepageController@showhomepage')->name('homepagefrom');
//------------------------------------------------------------------------------------------------------------------------------------

// Zone Admin ADD

//route addadmin
Route::get('/adddataadmin','Admin\AdddataadminController@showaddadmin')->name('adddataadmin');
//route addadminb
Route::get('/adddataadminb','Admin\AdddataadminbController@showaddadmin')->name('adddataadminb');
//route addadmint
Route::get('/adddataadmint','Admin\AdddataadmintController@showaddadmin')->name('adddataadmint');
Route::post('/adddataadmint/create','Admin\AdddataadmintController@create')->name('Createadddataadmint');
//route addadminp
Route::get('/adddataadminp','Admin\AdddataadminpController@showaddadmin')->name('adddataadminp');
//route addadminc
Route::get('/adddataadminc','Admin\AdddataadmincController@showaddadmin')->name('adddataadminc');
//route addadminh
Route::get('/adddataadminh','Admin\AdddataadminhController@showaddadmin')->name('adddataadminh');
//------------------------------------------------------------------------------------------------------------------------------------

// Zone Admin Edit

//route Editadmin
Route::get('/editadminfrom','Admin\EditadminController@showaddadmin')->name('editadminfrom');
//route Editadminb
Route::get('/editadminbfrom','Admin\EditadminbController@showaddadmin')->name('editadminbfrom');
//route Editadmint
Route::get('/editadmintfrom','Admin\EditadmintController@showaddadmin')->name('editadmintfrom');
//route Editadminp
Route::get('/editadminpfrom','Admin\EditadminpController@showaddadmin')->name('editadminpfrom');
//route Editadminc
Route::get('/editadmincfrom','Admin\EditadmincController@showaddadmin')->name('editadmincfrom');
//route Editadminh
Route::get('/editadminhfrom','Admin\EditadminhController@showaddadmin')->name('editadminhfrom');
//------------------------------------------------------------------------------------------------------------------------------------






















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


