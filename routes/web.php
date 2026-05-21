<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/industries',function(){
    return view('industries');
});
Route::get('/home2',function(){
    return view('home2');
});
Route::get('/loans',function(){
    return view('loans');
});
Route::get('/contact',function(){
    return view('contact');
})->name('contact-page');
Route::get('/sba-loan',function(){
    return view('loans.sba-loan');
})->name('sba-loan');