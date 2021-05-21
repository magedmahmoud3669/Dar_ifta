<?php

use Illuminate\Support\Facades\Route;

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



Route::group(['prefix' => LaravelLocalization::setLocale()], function() {
    Route::get('/', function () {
        return view('welcome');
    });
    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/company', 'App\Http\Controllers\EmployeController');
    Route::resource('/company', '\App\Http\Controllers\CompanyController');
    Route::get('/company', '\App\Http\Controllers\CompanyController@index')->name("company.index");
    Route::get('/company/create', '\App\Http\Controllers\CompanyController@create')->name("company.create");
    Route::post('/companies', '\App\Http\Controllers\CompanyController@store')->name("company.store");
    Route::get('/company/{company}', '\App\Http\Controllers\CompanyController@show')->name("company.show");
    Route::delete('/company/{id}', '\App\Http\Controllers\CompanyController@destroy')->name("company.delete");
    Route::get('/company/{company}/edit', '\App\Http\Controllers\CompanyController@edit')->name("company.edit");
    Route::post('/company/{id}', '\App\Http\Controllers\CompanyController@update')->name("company.update");
/////////////
    Route::resource('/employe', 'App\Http\Controllers\EmployeController');
    Route::get('/employe', '\App\Http\Controllers\EmployeController@index')->name("employe.index");
    Route::get('/employe/create', '\App\Http\Controllers\EmployeController@create')->name("employe.create");
    Route::post('/employees', '\App\Http\Controllers\EmployeController@store')->name("employe.store");
    Route::get('/employe/{employe}', '\App\Http\Controllers\EmployeController@show')->name("employe.show");
    Route::delete('/employey/{id}', '\App\Http\Controllers\EmployeController@destroy')->name("employe.delete");
    Route::get('/employe/{employe}/edit', '\App\Http\Controllers\EmployeController@edit')->name("employe.edit");
    Route::post('/employe/{id}', '\App\Http\Controllers\EmployeController@update')->name("Employe.update");
});
