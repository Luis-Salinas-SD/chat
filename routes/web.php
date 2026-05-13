<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\LoginValidateController;
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

/* Route::get('/', function () {
    return view('login');
}); */

Route::controller(LoginValidateController::class)->group(function () {
    Route::get('/', 'login');
    Route::post('/login/auth', 'validation')->name('loginAuth');
});
