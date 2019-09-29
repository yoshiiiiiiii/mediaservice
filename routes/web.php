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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Route::group(['middleware' => ['web']], function(){
  Route::get('/', 'TopController@index');
/*
  Route::get('/admin/new', function(){
    return view('new');
    // 処理
  });
*/
    use Illuminate\Http\Request;
    //Route::post('/admin/new_comfirm', 'NewComfirmController@postIndex');

  Route::delete('/hoge/{hoge}', function(Book $book){
    //処理
  });
//});
Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

//投稿フォームページ
Route::get('/admin/content', 'ContentController@showCreateForm');
Route::post('/admin/content/confirm', 'ContentController@confirm');
Route::post('/admin/content/complete', 'ContentController@complete');

//投稿詳細ページ
//Route::get('/content/{id}', 'ContentController@');
Route::get('/admin/content/{id}', 'ContentController@showEditForm');

//投稿確認ページ
Route::get('/content/{id}', 'ViewController@showForm');

