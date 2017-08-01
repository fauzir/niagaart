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
    return redirect()->to('/id');
});

Route::get('{locale}/blog/feed', function(){

    // create new feed
    $feed = App::make("feed");

    // multiple feeds are supported
    // if you are using caching you should set different cache keys for your feeds

    // cache the feed for 60 minutes (second parameter is optional)
    $feed->setCache(60, 'laravelFeedKey');

    // check if there is cached feed and build new only if is not
    if (!$feed->isCached())
    {
       // creating rss feed with our most recent 20 posts
       $posts = \DB::table('blogs')->orderBy('created_at', 'desc')->take(20)->get();

       // set your feed's title, description, link, pubdate and language
       $feed->title = 'Niaga Art Blog';
       $feed->description = 'Blog on interior design, other interior, and projects';
       $feed->logo = 'http://yoursite.tld/logo.jpg';
       $feed->link = url('feed');
       $feed->setDateFormat('datetime'); // 'datetime', 'timestamp' or 'carbon'
       $feed->pubdate = $posts[0]->created_at;
       $feed->lang = 'en';
       $feed->setShortening(true); // true or false
       $feed->setTextLimit(100); // maximum length of description text

       foreach ($posts as $post)
       {
           // set item's title, author, url, pubdate, description, content, enclosure (optional)*
           $feed->add($post->title, $post->author, URL::to($post->slug), $post->created_at, $post->slug, $post->content);
       }

    }

    // first param is the feed format
    // optional: second param is cache duration (value of 0 turns off caching)
    // optional: you can set custom cache key with 3rd param as string
    return $feed->render('atom');

    // to return your feed as a string set second param to -1
    // $xml = $feed->render('atom', -1);

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
