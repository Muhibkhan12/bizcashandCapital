<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/check', function () {
    return view('checking');
});

Route::get('/home2',function(){
    return view('home2');
});


Route::get('/contact',function(){
    return view('contact');
})->name('contact-page');


Route::get('/loans',function(){
    return view('loans');
});
Route::get('/sba-loan',function(){
    return view('loans.sba-loan');
})->name('sba-loan');
Route::get('/commercial-loan', function () {
    return view('loans.commercial-loan');
});
Route::get('/business-loan', function () {
    return view('loans.business-loan');
});
Route::get('/bridge-loan', function () {
    return view('loans.bridge-loan');
});
Route::get('/contstruction-loan', function () {
    return view('loans.construction-loan');
});

Route::get('/industries',function(){
return view('industries');
});
Route::get('/auto-repair-loan', function(){
    return view('industries.auto-repair');
});
Route::get('/accounting-loan', function(){
    return view('industries.accounting');
});
Route::get('/attorney-loan', function(){
    return view('industries.attorney-loan');
});
Route::get('/beauty-saloon-loan', function(){
    return view('industries.beauty-saloon');
});
Route::get('/cleaning-business', function(){
    return view('industries.cleaningbusiness-loans');
});
Route::get('/construction-loan', function(){
    return view('industries.construction-loan');
});
Route::get('/convenience-store', function(){
    return view('industries.convenience-store-loan');
});
Route::get('/day-care-loan', function(){
    return view('industries.day-care');
});


Route::get('/check2',function(){
    return view('check2');
});