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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('company','CompanyController');
Route::resource('users','UserController');
Route::resource('branch_offices','BranchOfficeController');
Route::resource('warehouses', 'WarehouseController');
Route::resource('services', 'ServiceController');
Route::resource('article_categories', 'ArticleCategoryController');
Route::resource('raw_material_categories', 'RawMaterialCategoryController');
Route::resource('article_categories.articles', 'ArticleController');
Route::resource('raw_material_categories.raw_materials', 'RawMaterialController');