<?php

use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('uploads')->group(function () {
    Route::post('/', [UploadController::class, 'upload'])->name('uploads.store');
    Route::get('/', [UploadController::class, 'index'])->name('uploads.index');
    Route::get('/data', [UploadController::class, 'getData'])->name('uploads.data');
});
