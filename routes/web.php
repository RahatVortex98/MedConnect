<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth','verified'])->group(function () {
        Route::get('/', [UserController::class,'home'])
        ->name('home');
        Route::get('/about-us', [UserController::class,'home'])
        ->name('about-us');

        Route::get('/dashboard', [UserController::class,'dashboard'])
        ->name('dashboard');

        
        Route::get('/doctors', [UserController::class, 'DoctorIndex'])
        ->name('doctors.index');
        Route::get('/doctors/{doctor}', [UserController::class, 'doctorShow'])
        ->name('doctors.show');
        Route::get('/doctors', [UserController::class, 'doctorList'])
        ->name('doctors.list');
        
});



Route::middleware(['auth','admin'])->group(function () {
    Route::get('/admin/dashboard',[AdminController::class,'dashboard'])
    ->name('admin.dashboard');


    



    Route::get('/doctor/create',[AdminController::class,'adminCreateDoctor'])
    ->name('admin.create.doctor');
    Route::post('/doctor/create',[AdminController::class,'adminStoreDoctor'])
    ->name('admin.store.doctor');

    Route::get('doctor/edit/{doctor}',[AdminController::class,'adminDoctorEdit'])
    ->name('admin.edit.doctor');
    Route::put('doctor/edit/{doctor}',[AdminController::class,'adminDoctorUpdate'])
    ->name('admin.update.doctor');
    
    Route::get('/doctor/{doctor}',[AdminController::class,'adminShowDoctor'])
    ->name('admin.show.doctor');
});









Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
