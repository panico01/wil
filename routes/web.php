<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', [HomeController::class, 'index']);

Route::controller(LoginController::class)->group(function () {
  Route::get('/login', 'index')->name('login.index');
  Route::post('/login', 'store')->name('login.store');
  Route::get('/logout', 'destroy')->name('login.destroy');
});


Route::group(['middleware' => ['auth']], function(){

  Route::get('/earnings', function () {
      return view('earnings');
  })->name('earnings');

  Route::get('/myprofile', function () {
      return view('profile');
  })->name('myprofile');

  Route::get('/', [HomeController::class, 'index'])->name('home.index');
});

// });


// Route::get('/login', function () {
//     return view('auth.login');
// });


