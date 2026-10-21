<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::resource('mahasiswa', MahasiswaController::class);

    Route::resource('mata-kuliah', MataKuliahController::class)
        ->parameters(['mata-kuliah' => 'mataKuliah']);
});
