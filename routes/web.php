<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\User\PaymentController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/services', [FrontController::class, 'services'])->name('services');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [FrontController::class, 'blogSingle'])->name('blog.single');
Route::get('/faq', [FrontController::class, 'faq'])->name('faq');
Route::get('/terms', [FrontController::class, 'term'])->name('terms');
Route::get('/tip', [FrontController::class, 'program'])->name('program');
Route::get('/portfolio', [FrontController::class, 'portfolio'])->name('portfolio');
Route::get('/enrollment', [FrontController::class, 'enrollment'])->name('enrollment');
Route::post('/enrollment/store', [FrontController::class, 'enrollmentStore'])->name('payment.page');
Route::get('/program/registration', [FrontController::class, 'registrationPage'])->name('payment.index');
Route::post('/payment', [PaymentController::class, 'redirectToGateway'])->name('initiate.payment');
Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback']);
Route::get('/registration/success', [FrontController::class, 'success'])->name('payment.success');
Route::get('/registration/failed', [FrontController::class, 'cancel'])->name('payment.failure');


require __DIR__.'/admin.php'; 