<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('welcome');
});


//composer require laravel/ui
//php artisan ui vue --auth

//npm install
//npm run dev
//php artisan serve





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::post('/ajaxupload',[App\Http\Controllers\HomeController::class,'upload']);

Route::get('/page3', [App\Http\Controllers\MyController::class, 'accessAllDb']);



Route::group(['middleware' => 'auth'], function(){
    Route::get('/page1', function () {
        return view('mynewpage');
    });
    
    Route::get('/page2/{name}/{age}', function ($name, $age) {
        return view('mynewpage2')->with('name', $name)->with('age',$age);
    });
    

    //Route::get('/page3', [App\Http\Controllers\MyController::class, 'fetchStudentsData']);

});