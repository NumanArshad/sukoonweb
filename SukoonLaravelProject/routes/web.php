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
use sukoonweb\BasicInfo;
use sukoonweb\Hospitals_Clinic;
Route::get('/templateindex',function(){
    return view('pages.index');
});
Route::get('templateindex/newdoctor',function(){
    return view('pages.newdoctor');
});
Route::get('templateindex/alldoctor',function(){
    return view('pages.alldoctorcontainer');
});
Route::get('templateindex/bookappoint',function(){
    // $getalldoctor=BasicInfo::all();
    // $getOnlyFee=DB::table('basic_infos')
    //   ->join('hospitals__clinics','basic_infos.id','=','hospitals__clinics.doctorId')
    //   ->select('hospitals__clinics.name')->get();

    //   $alldoctordata=array('doctor'=> $getalldoctor,
    //   'fee'=>$getOnlyFee);
    return view('pages.bookappointment');//->with($alldoctordata);
});
Route::get('templateindex/consultdoctor',function(){
    return view('pages.consultdoctor');
});
Route::get('templateindex/consultdoctorindex',function(){
    return view('pages.consultingcontainer');
});
Route::resource('doctors','AllDoctorsController');
Route::get('doctors/specific/{specialist}','AllDoctorsController@specific_specialist');

Route::get('doctors/doctorjoining','AllDoctorsController@create');

Route::get('doctors/bookappointment/{id}','AllDoctorsController@bookappointment');
Route::post('doctors/bookappointment/{id}','AllDoctorsController@storeappointment');

Route::get('doctors/consult/{id}','AllDoctorsController@consultview');
Route::post('doctors/consult/{id}','AllDoctorsController@storeconsultorder');

Route::get('doctors/registerhospitals/{id}','AllDoctorsController@addhospital');
Route::post('doctors/registerhospitals/{id}','AllDoctorsController@storehospital');
Route::get('sendemail','AppointConsultController@getview_sendemail');
Route::post('sendemail','AppointConsultController@sendemail');



//Route::post('doctors/bookappointment/{id}','AllDoctorsController@storeappointment');
//Route::resource('doctors/joinasdoctor','AllDoctorsController@create');