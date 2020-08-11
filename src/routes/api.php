<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('user', function (Request $request) {
    return $request->user();
});

Route::get('produtos', 'ProdutoController@index');
Route::group(['prefix' => 'produto'], function () {
    Route::post('adicionar', 'ProdutoController@add');
    Route::get('editar/{id}', 'ProdutoController@edit');
    Route::post('update/{id}', 'ProdutoController@update');
    Route::delete('deletar/{id}', 'ProdutoController@delete');
});


