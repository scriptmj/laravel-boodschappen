<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroceriesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/groceries', 'App\Http\Controllers\GroceriesController@index')->name('groceries.index');

Route::get('/groceries/create', 'App\Http\Controllers\GroceriesController@create')->name('groceries.create');

Route::post('/groceries', 'App\Http\Controllers\GroceriesController@store')->name('groceries.store');

Route::get('/groceries/{grocery}/edit', 'App\Http\Controllers\GroceriesController@edit')->name('groceries.edit');

Route::put('/groceries/{grocery}', 'App\Http\Controllers\GroceriesController@update')->name('groceries.update');

Route::delete('/groceries/{grocery}', 'App\Http\Controllers\GroceriesController@destroy')->name('groceries.destroy');

Route::get('/', function () {
    return redirect(route('groceries.index'));
});