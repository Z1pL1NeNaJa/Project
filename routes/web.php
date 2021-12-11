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
Route::get('/about','about@showproduct')->name('about');

Route::get('/services', function () {
    return view('services');
});
Route::get('/contact', function () {
    return view('contact');
});
//route Dashboard
Route::get('/index', 'Admin\AdminController@index')->name('index');

//route admin
Route::get('/adminfrom', 'Admin\AdminindexController@showadmin')->name('adminfrom');
Route::get('/adddataadmin', 'Admin\AdddataadminController@showaddadmin')->name('adddataadmin');
Route::post('/adminfrom/create', 'Admin\AdminindexController@create')->name('create');
Route::get('/adminfrom/edit/{id}', 'Admin\AdminindexController@edit');
Route::post('/adminfrom/update/{id}', 'Admin\AdminindexController@update');

//route Background
Route::get('/Backgroundfrom', 'Admin\BackgroundController@showBackground')->name('Backgroundfrom');
Route::get('/adddataadminb', 'Admin\AdddataadminbController@showaddadmin')->name('adddataadminb');
Route::post('/Backgroundfrom/create', 'Admin\BackgroundController@create')->name('create');
//Route::get('/adminfrom/edit/{id}', 'Admin\AdminindexController@edit');
//Route::post('/adminfrom/update/{id}', 'Admin\AdminindexController@update');

//route TypeProduct
Route::get('/TypeProductfrom', 'Admin\TypeProductController@showTypeProduct')->name('TypeProductfrom');
Route::get('/adddataadmint', 'Admin\AdddataadmintController@showaddadmin')->name('adddataadmint');
Route::post('/TypeProductfrom/create', 'Admin\TypeProductController@create')->name('create');
Route::get('/TypeProductfrom/edit/{id}', 'Admin\TypeProductController@edit');
Route::post('/TypeProductfrom/update/{id}', 'Admin\TypeProductController@update');
Route::get('/TypeProductfrom/delete/{id}', 'Admin\TypeProductController@delete');

//route Product
Route::get('/productfrom', 'Admin\ProductController@showproduct')->name('productfrom');
Route::get('/adddataadminp', 'Admin\AdddataadminpController@showaddadmin')->name('adddataadminp');
Route::post('/productfrom/create', 'Admin\ProductController@create')->name('product.c');
Route::get('/productfrom/edit/{id}', 'Admin\ProductController@edit');
Route::post('/productfrom/update/{id}', 'Admin\ProductController@update');
Route::get('/productfrom/delete/{id}', 'Admin\ProductController@delete');

//route Contents
Route::get('/contentsfrom', 'Admin\contentsController@showcontents')->name('contentsfrom');
//route Homepagefrom
Route::get('/homepagefrom', 'Admin\HomepageController@showhomepage')->name('homepagefrom');
//------------------------------------------------------------------------------------------------------------------------------------

// Zone Admin ADD

//route addadminc
Route::get('/adddataadminc', 'Admin\AdddataadmincController@showaddadmin')->name('adddataadminc');
//route addadminh
Route::get('/adddataadminh', 'Admin\AdddataadminhController@showaddadmin')->name('adddataadminh');
//------------------------------------------------------------------------------------------------------------------------------------

// Zone Admin Edit

//route Editadminb
Route::get('/editadminbfrom', 'Admin\EditadminbController@showaddadmin')->name('editadminbfrom');
//route Editadminc
Route::get('/editadmincfrom', 'Admin\EditadmincController@showaddadmin')->name('editadmincfrom');
//route Editadminh
Route::get('/editadminhfrom', 'Admin\EditadminhController@showaddadmin')->name('editadminhfrom');

Auth::routes();

Route::middleware(['auth','Veirfyisadmin'])->group(function(){
    
});

Route::get('/home', 'HomeController@index')->name('home');
