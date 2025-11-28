<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PopupController;
use App\Http\Controllers\MailController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('about');
Route::get('/getaquotes', function () {
    return view('getaquotes');
})->name('quotes');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/project', function () {
    return view('project');
})->name('project');
Route::get('/service', function () {
    return view('service');
})->name('service');

Route::post('/send-popup-data', [PopupController::class, 'send'])->name('popup.send');
// Route::post('/popup-send', [MailController::class, 'sendEmail'])->name('popup.send');

