<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TutorController;
use App\Http\Controllers\Admin\MentorController;
use App\Http\Controllers\Admin\UserManagementController;
use Illuminate\Support\Facades\Route;









Route::prefix('admin')->name('admin.')->group(function (){ 

    Route::middleware('admin.logged_out')->group(function () {
        Route::controller(LoginController::class)->group(function (){
            Route::get('login-form','showLoginForm')->name('login.form');
            Route::post('login','login')->name('login');
            Route::post('logout','logout')->name('logout');
        });
    });

    Route::middleware('admin.logged_in')->group(function () { 
        Route::get('/', [ HomeController::class,'home' ])->name('home');
    });
    
});