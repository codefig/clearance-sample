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

// use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('index');
});



Route::group(['prefix' => 'user'], function () {

    Route::get('/login', 'Auth\LoginController@showUserLoginForm')->name('user.login');
    Route::post('/login', 'Auth\LoginController@userLogin')->name('user.login.post');
    Route::get('/logout', 'LoggedUserController@logout')->name('user.logout');
    Route::get('/dashboard', 'LoggedUserController@showDashboard')->name('user.dashboard');
    Route::get('/apply', 'LoggedUserController@showApply')->name('user.apply');
    Route::post('/apply', 'LoggedUserController@postApply')->name('user.apply.post');
    Route::get('/graduating', 'LoggedUserController@showGraduating')->name('user.graduating');
});

Route::group(['prefix' => 'admin'], function () {

    Route::get('/login', 'Auth\LoginController@showAdminLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\LoginController@adminLogin')->name('admin.login.post');
    Route::get('/logout', 'LoggedAdminController@logout')->name('admin.logout');
    Route::get('/dashboard', 'LoggedAdminController@showDashboard')->name('admin.dashboard');
    Route::get('/addDepartment', 'LoggedAdminController@showAddDepartment')->name('admin.addDepartment');
    Route::post('/addDepartment', 'LoggedAdminController@postAddDepartment')->name('admin.addDepartment.post');
    Route::get('/addStudent', 'LoggedAdminController@showAddStudent')->name('admin.addStudent');
    Route::post('/addStudent', 'LoggedAdminController@postAddStudent')->name('admin.addStudent.post');
    Route::get('/graduating', 'LoggedAdminController@showGraduatingList')->name('admin.graduants');
    Route::get('/allStudent', 'LoggedAdminController@showAllStudents')->name('admin.allstudent');
    Route::get('/applications', 'LoggedAdminController@showApplications')->name('admin.applications');
    Route::get('/approve/{id}', 'LoggedAdminController@approveSubmission')->name('admin.applications.approve');
    Route::get('/disprove/{id}', 'LoggedAdminController@disproveSubmission')->name('admin.applications.disprove');
});
