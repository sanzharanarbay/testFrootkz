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

Route::get('/','DemoController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


    Route::get('invoices/create', 'InvoiceController@create')->name('invoice.create');
    Route::post('invoices/send', 'InvoiceController@store')->name('invoice.store');
    Route::get('invoices/show/{id}', 'InvoiceController@show')->name('invoice.show');
    Route::get('invoices/edit/{id}', 'InvoiceController@edit')->name('invoice.edit');
    Route::put('invoices/update/{id}', 'InvoiceController@update')->name('invoice.update');
    Route::delete('invoices/delete/{id}', 'InvoiceController@destroy')->name('invoice.destroy');



