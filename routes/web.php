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

Route::get('/',[
   'uses' => 'HomeController@index',
   'as'    => 'home'
]);

Route::get('/about',[
   'uses' => 'AboutController@index',
   'as'    => 'about'
]);

Route::get('/contact',[
   'uses' => 'ContactController@index',
   'as'    => 'contact'
]);

Auth::routes();

Route::get('admin', 'Admin\AdminController@index');
Route::prefix('admin')->group(function () {
    Route::get('give-role-permissions', 'Admin\AdminController@getGiveRolePermissions');
    Route::post('give-role-permissions', 'Admin\AdminController@postGiveRolePermissions');
    Route::resource('roles', 'Admin\RolesController');
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::resource('users', 'Admin\UsersController');
    Route::get('generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
    Route::post('generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);
    Route::resource('home', 'AdminHome\\HomeController');
    Route::resource('service-catalogue', 'AdminServiceCatalogue\\ServiceCatalogueController');
    Route::resource('service', 'AdminService\\ServiceController');
    Route::resource('about', 'AdminAbout\\AboutController');
    Route::resource('contact', 'AdminContact\\ContactController');
    Route::resource('product', 'Product\\ProductController');
    Route::resource('blog', 'AdminBlog\\BlogController');
    Route::resource('promotion', 'AdminPromotion\\PromotionController');
});

// Route::get('admin', 'Admin\AdminController@index');
// Route::get('admin/give-role-permissions', 'Admin\AdminController@getGiveRolePermissions');
// Route::post('admin/give-role-permissions', 'Admin\AdminController@postGiveRolePermissions');
// Route::resource('admin/roles', 'Admin\RolesController');
// Route::resource('admin/permissions', 'Admin\PermissionsController');
// Route::resource('admin/users', 'Admin\UsersController');
// Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
// Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);
// Route::resource('admin/home', 'AdminHome\\HomeController');
// Route::resource('admin/service-catalogue', 'AdminServiceCatalogue\\ServiceCatalogueController');
// Route::resource('admin/service', 'AdminService\\ServiceController');
// Route::resource('admin/about', 'AdminAbout\\AboutController');
// Route::resource('admin/contact', 'AdminContact\\ContactController');
// Route::resource('admin/product', 'Product\\ProductController');
// Route::resource('admin/blog', 'AdminBlog\\BlogController');
// Route::resource('admin/promotion', 'AdminPromotion\\PromotionController');
