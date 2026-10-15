<?php

use App\Http\Controllers\produkController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    echo "Welcome";
});

Route::get('/get-test', function () {
    echo "Uji Coba route dengan method GET";
});

Route::post('/store', function () {
    // sintak untuk menyimpan data
});

Route::put('/update', function () {
    // sintak untuk memperbarui data
});

Route::delete('/delete', function () {
    // sintak untuk menghapus data
});

Route::match(['get', 'post'], '/welcome', function () {
    //
});

Route::any('/all', function () {
    //
});

Route::get('/show/{id?}', function ($id = 1) {
    echo "Nilai Parameter Adalah " . $id;
});

Route::get('/edit/{nama}', function ($nama) {
    echo "Nilai Parameter Adalah " . $nama;
})->where('nama', '[A-Za-z]+');

Route::get('/index', function () {
    echo '<a href="' . route('create') . '">Akses Route dengan nama</a>';
});

Route::get('/create', function () {
    echo "Route diakses menggunakan nama";
})->name('create');

Route::get('/produk', [produkController::class, 'index']);