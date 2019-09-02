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

Route::get('/', 'PageController@getHome')->name('home');
Route::get('/out-story','PageController@getOurstory');
Route::get('/category','PageController@getCategory');
Route::get('/shop/{id?}','PageController@getList');
Route::get('/search','PageController@getSearch')->name('search');
Route::get('/sort','PageController@getSort')->name('sort');
Route::get('/shop-detail/{id}','PageController@getProductDetail');

Route::get('user-register', 'PageController@getRegister')->name('user.getRegister');
Route::post('user-register', 'PageController@postRegister')->name('user.postRegister');
Route::get('user-login', 'PageController@getLogin')->name('user.getLogin');
Route::post('user-login', 'PageController@postLogin')->name('user.postLogin');
Route::get('user-logout', 'PageController@getLogout')->name('user.getLogout');


Auth::routes();

Route::group(['namespace'=>'Admin'],function(){
  Route::group(['prefix'=>'login','middleware' => 'CheckedLogin'],function(){
    Route::post('/postLogin','LoginController@postLogin');

  });
  Route::get('logout','HomeController@getLogout');
  Route::group(['prefix' => 'admin', 'middleware' => 'CheckedLogout'] , function(){
    Route::get('home','HomeController@getHome');
    Route::group(['prefix'=>'category'],function(){
      Route::get('/','CategoryController@getCate');
      Route::post('','CategoryController@postCate');
      Route::get('/edit/{id?}','CategoryController@geteditCate')->name('category.geteditCate');
      Route::post('/edit/{id?}','CategoryController@posteditCate');
      Route::get('delete/{id?}','CategoryController@getdelCate');
    });
    Route::group(['prefix'=>'product'],function(){
      Route::get('/','ProductController@getProduct');
      Route::get('/addpro','ProductController@getAddProduct')->name('product.addpro');

      Route::post('/addpro','ProductController@postAddProduct');
      Route::get('/edit/{id?}','ProductController@getEditProduct');
      Route::post('/edit/{id?}','ProductController@postEditProduct');
      Route::get('delete/{id?}','ProductController@getdelProduct');
    });

    Route::get('promotion/list', 'PromotionController@index')->name('promotion.index');
    Route::get('promotion/create', 'PromotionController@getAdd')->name('promotion.getAdd');
    Route::post('promotion/create', 'PromotionController@postAdd')->name('promotion.postAdd');
    Route::get('promotion/edit/{id?}', 'PromotionController@getEdit')->name('promotion.getEdit');
    Route::post('promotion/edit/{id?}', 'PromotionController@postEdit')->name('promotion.postEdit');
    Route::get('promotion/delete/{id?}', 'PromotionController@getDelete')->name('promotion.getDelete');

  });

});


Route::get('/home', 'HomeController@index')->name('home');
