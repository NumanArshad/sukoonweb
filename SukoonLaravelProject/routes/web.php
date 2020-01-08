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
Route::get('/welcomeOnly', function () {
    return '<h1>welcome</h1>';
});
// Route::get('/about', function () {
//     return view('pages.about');
// });
Route::get('/value/{id}', function ($id) {
    return '<h1>welcome</h1>'.$id;
});
Route::get('/pageindex', function () {
    return view('pages.index');
});
//hard code controller function call//
//Route::get('/index','PagesController@index');
// Route::get('/about','PagesController@about');
// Route::get('/services','PagesController@services');
/////////////////////////////////////////

//resource controller function call//
//Route::resource('postsRoute','PostsController');
/////////////////////////////////////////

/////////////////////////////////////template route/////////////////////////////////
Route::get('/templateindex',function(){
    return view('pages.index');
});
Route::get('templateindex/newdoctor',function(){
    return view('pages.newdoctor');
});
Route::get('templateindex/specific',function(){
    return view('pages.finddoctor');
});
Route::get('templateindex/bookappoint',function(){
    return view('pages.bookappointment');
});
Route::get('templateindex/consultdoctor',function(){
    return view('pages.consultdoctor');
});