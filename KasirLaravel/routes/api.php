<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('buku','apicontroller@read');
Route::post('buku/insert','apicontroller@insert');
Route::put('/buku/update/{kode_buku}', 'apicontroller@update');
Route::delete('/buku/delete/{kode_buku}', 'apicontroller@delete');