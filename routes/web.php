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
Route::get('/','MainController@home')->name('main');
//admin job post
Route::get('/postjob','MainController@postjob')->name('postjob');
Route::post('/jobview','MainController@jobview')->name('jobview');
Route::get('/adminjoblist','MainController@alljob')->name('adminjoblist');

//applicant side

Route::get('/applicantjoblist','MainController@applicantjob')->name('applicantjoblist');
Route::get('/updateprofile','MainController@updateprofile')->name('updateprofile');
Route::get('/profile','MainController@viewprofile')->name('profile');
Route::get('/profile1','MainController@profile1')->name('profile1');

Route::post('/upload','MainController@upload')->name('upload');

//admin side joblist
//Route::get('/adminjoblist','MainController@adminjoblist')->name('adminjoblist');

//admin side applicant list
Route::get('/applicantlist','MainController@applicantlist')->name('applicantlist');




Auth::routes();




//login system

Route::group(['middleware' => ['web','auth']],function(){

	

	Route::get('/home',function(){

		if(Auth::user()->admin == 0){

			return view('home');
		}else{
             $users['users'] = \App\User::all();
			return view('adminhome',$users);
		}

	});



});
