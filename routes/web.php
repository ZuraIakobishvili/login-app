<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FootballController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NeqsonController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function(){
    return view('homepage');
})->name('homepage');

Route::middleware('guest')->group(function(){
    Route::get('login', [LoginController::class, 'index'])->name('index');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    
    Route::get('register', [RegisterController::class, 'register'])->name('register');
    Route::post('register', [RegisterController::class, 'registerUser'])->name('post.register');
});

Route::middleware('auth')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::controller(AdminController::class)->group(function(){
            Route::get('create', 'create')->name('admin.create');
            Route::post('store', 'store')->name('admin.store');
            Route::get('admins', 'admins')->name('admins');
            Route::get('show/{admin}', 'showAdmin')->name('admin.show');
            Route::get('edit/{admin}', 'editAdmin')->name('admin.edit');
            Route::put('update/{admin}', 'updateAdmin')->name('admin.update');
            Route::delete('delete/{admin}', 'destroy')->name('admin.delete');
        });
        
        Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
        Route::get('logout',[LoginController::class, 'logout'])->name('logout');
        });
       
    Route::controller(TeacherController::class)->prefix('teacher')->group(function(){      
            Route::get('/', 'teachersPage')->name('teachers');
            Route::get('/create', 'teacherCreate')->name('teacher.create');
            Route::post('/store', 'teacherStore')->name('teacher.store');  
    });
       
    Route::controller(FootballController::class)->prefix('football')->group(function(){ 
            Route::get('/', 'index')->name('football.index');
            Route::get('/add', 'create')->name('football.create'); 
    });
}); 
