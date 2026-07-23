<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::name('students.')->prefix('students')->group(function () {
    Route::get('/', function () {
        return "Menampilkan Daftar Siswa";
    })->name('index');

    Route::get('/{id}', function ($id) {
        return "Menampilkan Detail Siswa Dengan ID: {$id}";
    })->name('show');
});
