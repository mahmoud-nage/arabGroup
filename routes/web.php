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

Auth::routes(['register' => false]);



Route::resource('home', 'HomeController');

Route::group(['middleware' => ['auth', 'LoginCheck'], 'prefix' => 'admin'], function (){

Route::get('/dash', function () {
    return view('admin.dashboard');
});


Route::resource('admins', 'AdminController');
Route::get('/changeStatus', 'AdminController@changeStatus');
Route::resource('user', 'UserController');
Route::resource('category', 'CategoryController');
Route::resource('books', 'BookController');
Route::get('/favourite', 'BookController@favourite');
Route::resource('setting', 'SettingController');
Route::resource('country', 'CountryController');
Route::resource('city', 'CityController');
Route::resource('agent', 'AgentController');
Route::resource('dists', 'DistController');
Route::resource('fair', 'FairController');
Route::resource('news', 'NewController');
Route::delete('destroyImage', 'NewController@destroyImage');
Route::resource('booklist', 'BookListController');
Route::resource('maillist', 'MailListController');
Route::resource('contact', 'ContactController');

// Route::resource('region', 'RegionController');
Route::resource('order', 'OrderController');
Route::resource('bookorder', 'BookOrderController');

});

Route::group(['prefix' => 'fronts'], function (){

    Route::get('/', function () {
        return view('front.layouts.index');
    });

Route::get('/most-views/{views}', 'Front\MainController@books');
Route::get('/features/{features}', 'Front\MainController@books');
Route::get('/latest/{latest}', 'Front\MainController@books');

});






