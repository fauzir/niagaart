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

Route::get('/', function(){
    return redirect()->to('/en');
});

Route::get('/{locale}',[
   'uses' => 'HomeController@index',
   'as'    => 'home'
]);

Route::get('/error',[
   'uses' => 'HomeController@error',
   'as'    => 'error'
]);

Route::post('/send-message',[
   'uses' => 'ContactController@sendMessage',
   'as'    => 'send.message'
]);

Route::get('/{locale}/services',[
   'uses' => 'ServiceController@getAll',
   'as'    => 'service.all'
]);

Route::get('/{locale}/services/interior',[
   'uses' => 'ServiceController@getInterior',
   'as'    => 'service.interior'
]);

Route::get('/{locale}/services/other',[
   'uses' => 'ServiceController@getOther',
   'as'    => 'service.other'
]);

Route::get('/en/service/{slug}',[
   'uses' => 'ServiceController@index',
   'as'    => 'service'
]);

Route::get('/{locale}/projects',[
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

Route::get('/{locale}/about',[
   'uses' => 'AboutController@index',
   'as'    => 'about'
]);

Route::get('/{locale}/contact',[
   'uses' => 'ContactController@index',
   'as'    => 'contact'
]);

Route::get('/{locale}/blog',[
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

Route::group(['prefix' => 'en'], function () {
  Auth::routes();
});

Route::get('/en/admin',[
   'uses' => 'Admin\AdminController@index',
   'as'    => 'admin'
]);
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'roles']], function () {
  Route::group(['roles'=>'admin'], function () {
    Route::group(['namespace' => 'Admin'], function () {
      Route::get('give-role-permissions', 'AdminController@getGiveRolePermissions');
      Route::post('give-role-permissions', 'AdminController@postGiveRolePermissions');
      Route::resource('roles', 'RolesController');
      Route::resource('permissions', 'PermissionsController');
      Route::resource('users', 'UsersController');
    });
    Route::resource('home', 'AdminHome\\HomeController');
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
    Route::resource('social', 'AdminSocial\\SocialController');
  });

  Route::group(['roles'=>'blog-writer'], function () {
    Route::resource('blog', 'AdminBlog\\BlogController');
    Route::resource('blog-category', 'AdminBlogCategory\\BlogCategoryController');
    Route::resource('blog-tag', 'BlogTag\\BlogTagController');
  });
  Route::get('generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
  Route::post('generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);
});
