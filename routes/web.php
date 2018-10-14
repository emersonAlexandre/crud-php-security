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

Auth::routes();

Route::get('/', 'ProdutoController@index');
Route::get('/produtos', 'ProdutoController@index')->name('lista_produtos');
Route::group(['prefix' => 'produtos'], function () {
    Route::get('/show/{produto}', 'ProdutoController@show')
        ->name('show_produto')
        ->middleware('can:show-produto');
    Route::get('/create', 'ProdutoController@create')
        ->name('create_produto')
        ->middleware('can:create-produto');
    Route::post('/create', 'ProdutoController@store')
        ->name('store_produto')
        ->middleware('can:create-produto');
    Route::get('/edit/{produto}', 'ProdutoController@edit')
        ->name('edit_produto')
        ->middleware('can:update-produto,produto');
    Route::post('/edit/{produto}', 'ProdutoController@update')
        ->name('update_produto')
        ->middleware('can:update-produto,produto');
    Route::post('/delete/{produto}', 'ProdutoController@destroy')
        ->name('delete_produto')
        ->middleware('can:delete-produto,produto');
});
