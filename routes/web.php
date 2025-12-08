<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DesignRequestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

// Public Website Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/portfolio', [ProjectController::class, 'index'])->name('portfolio');
Route::get('/projects/{project:slug}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/request-a-design', [DesignRequestController::class, 'create'])->name('request-design.create');
Route::post('/request-a-design', [DesignRequestController::class, 'store'])->name('request-design.store');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.store');
Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms-conditions', [PageController::class, 'terms'])->name('terms');
Route::get('/add-testimonial', [TestimonialController::class, 'create'])->name('testimonial.create');
Route::post('/add-testimonial', [TestimonialController::class, 'store'])->name('testimonial.store');

// The default welcome route can be removed or kept for testing
// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Note: Filament routes are automatically registered by the service provider.
// The login route will be /admin/login by default.