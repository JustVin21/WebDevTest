<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;

// GET - tampil data
Route::get('/GET/api/products ', [ProductController::class, 'index']);

// POST - tambah data
Route::get('/POST/api/products ', function () {
    return app(ProductController::class)->store();
});

// PUT - update data
Route::get('/PUT/api/products/{id}', function ($id) {
    return app(ProductController::class)->update($id);
});

// DELETE - hapus data
Route::get('/DELETE/api/products/{id}', function ($id) {
    return app(ProductController::class)->destroy($id);
});

//POST - mengurangi data karena  sudah di beli
Route::get('/POST/api/transactions', [TransactionController::class, 'createTransactionViaBrowser']);




