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

Route::post('/send-message',[
   'uses' => 'ContactController@sendMessage',
   'as'    => 'send.message'
]);

Route::get('/services',[
   'uses' => 'ServiceController@getAll',
   'as'    => 'service.all'
]);

Route::get('/service/{slug}',[
   'uses' => 'ServiceController@index',
   'as'    => 'service'
]);

Route::get('/projects',[
   'uses' => 'ProjectsController@index',
   'as'    => 'projects'
]);

Route::get('/projects/item/{id}',[
   'uses' => 'ProjectsController@getItem',
   'as'    => 'project.item'
]);

Route::get('/product/item/{id}',[
   'uses' => 'ServiceController@getProduct',
   'as'    => 'product.item'
]);

Route::get('/about',[
   'uses' => 'AboutController@index',
   'as'    => 'about'
]);

Route::get('/contact',[
   'uses' => 'ContactController@index',
   'as'    => 'contact'
]);

Route::get('/blog',[
   'uses' => 'BlogController@index',
   'as'    => 'blog'
]);

Route::get('/blog/{slug}',[
   'uses' => 'BlogController@getContent',
   'as'    => 'blog.content'
]);

Route::get('/blog/category/{slug}',[
   'uses' => 'BlogController@getCategory',
   'as'    => 'blog.category'
]);

Route::post('postImage', [
  'uses' => 'AdminHome\\HomeController@postImage',
  'as' => 'postImage'
]);

Route::post('upload-original', [
  'uses' => 'HomeController@uploadOriginal',
  'as' => 'upload.original'
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
    Route::post('crop',[
       'uses' => 'HomeController@crop',
       'as'    => 'crop'
    ]);
    Route::resource('service-catalogue', 'AdminServiceCatalogue\\ServiceCatalogueController');
    Route::resource('service', 'AdminService\\ServiceController');
    Route::resource('projects', 'AdminProjects\\ProjectsController');
    Route::resource('project-item', 'AdminProjectItem\\ProjectItemController');
    Route::resource('about', 'AdminAbout\\AboutController');
    Route::resource('contact', 'AdminContact\\ContactController');
    Route::resource('product', 'Product\\ProductController');
    Route::resource('blog', 'AdminBlog\\BlogController');
    Route::resource('blog-category', 'AdminBlogCategory\\BlogCategoryController');
    Route::resource('blog-tag', 'BlogTag\\BlogTagController');
    Route::resource('promotion', 'AdminPromotion\\PromotionController');
    Route::resource('testimony', 'AdminTestimony\\TestimonyController');
});
