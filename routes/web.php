<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/', 'index');
Route::view('/about-company', 'about-company');
Route::view('/anandam-floor-phase-I', 'anandam-floor-phase-I');
Route::view('/anandam-floor-phase-II', 'anandam-floor-phase-II');
Route::view('/bottling-plant', 'bottling-plant');
Route::view('/contact-us', 'contact-us');
Route::view('/eta-I', 'eta-I'); // Removed period in URL (invalid)
Route::view('/gallery', 'gallery');
Route::view('/maihar-plaza-mall', 'maihar-plaza-mall');
Route::view('/our-director', 'our-director');
Route::view('/portfolio', 'portfolio');
Route::view('/project', 'project');
Route::view('/resort-maihar-garden-deoghar-jharkhand', 'resort-maihar-garden-deoghar-jharkhand');
Route::view('/team', 'team');
Route::view('/video-gallery', 'video-gallery');
Route::view('/vision-and-mission', 'vision-and-mission');
Route::get('/thank-you', function () {
    return view('thank-you');
})->name('thank.you');

// Form submission
Route::post('/send-mail', [MailController::class, 'send'])->name('send.mail');
