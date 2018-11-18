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



/*super Admin starts..............................................*/

Route:: get('/school','SchoolController@index')->name('SchoolDashboard');

Route:: get('/school/message','SchoolController@message')->name('SchoolMessage');

Route:: get('/school/task','SchoolController@task')->name('SchoolTask');

Route:: get('/school/teachers','SchoolController@teachers')->name('SchoolTeachers');

/*super Admin starts..............................................*/

/*super Admin starts..............................................*/

Route:: get('/dashboard','SuperAdminController@index')->name('SuperDashboard');

/*super Admin starts..............................................*/