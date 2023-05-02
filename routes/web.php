<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::prefix('login')->middleware('userAdmins')->group(function(){

// });

// Route::prefix('admin')->middleware('userAdmins')->name('admin.')->group(function (){});

    Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('dashboard')->middleware(['userAdmins']);

    Route::get('/login',[App\Http\Controllers\HomeController::class,'adminLogin'])->name('admin.login');
    Route::post('/login',[App\Http\Controllers\HomeController::class,'checkLogin'])->name('admin.logincheck');
    Route::get('/add-user',[App\Http\Controllers\HomeController::class,'addUser']);
    Route::get('/user-list',[App\Http\Controllers\HomeController::class,'userList']);

    Route::get('/contact',[App\Http\Controllers\HomeController::class,'contact']);


    Route::get('/user-list',[App\Http\Controllers\adminUserController::class,'insertform']);
    Route::post('/add-user',[App\Http\Controllers\adminUserController::class,'insert']);

    //Route::post('/dashboard',[App\Http\Controllers\UserLoginController::class,'checkAuth'])->name('admin.logincheck');
