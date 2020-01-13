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

Route::get('/customer','CustomerController@index')->name('customers.index');
Route::get('/customer/{id}/edit','CustomerController@edit')->name('customers.edit');
Route::get('/customer/{id}','CustomerController@delete')->name('customers.delete');
Route::get('/add','CustomerController@add')->name('customers.add');
Route::post('/add','CustomerController@store')->name('customers.store');
Route::post('/update','CustomerController@update')->name('customers.update');
//  Route::get('/employees','EmployeeController@index')->name('employees.index');
//  Route::get('/employees/{id}/edit','EmployeeController@edit')->name('employees.edit');
//  Route::get('/employees/{id}/delete','EmployeeController@destroy')->name('employees.destroy');
//  Route::get('/create','EmployeeController@create')->name('employees.create');
//  Route::post('/create','EmployeeController@store')->name('employees.store');
//  Route::post('/employee/update','EmployeeController@update')->name('employees.update');




