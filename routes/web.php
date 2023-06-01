<?php

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\userController;

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

Route::get('/base', function (){
    return view('welcome');
});

Route::get('/', function () {

    return view('login');
});

Route::post('/checkifvaid', [App\Http\Controllers\userController::class, 'checkUser']);

Route::post('/saveUserData', [App\Http\Controllers\userController::class, 'store']);




