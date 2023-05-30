<?php

use App\Models\Post;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('login');
});

Route::get('get_data', function (){


    $allUserVal = Post::all();

//    foreach ($allUserVal as $userVal)
//    {
//        return $userVal->father_name;
//    }

    $viewVar = $allUserVal->id;

    return view('login', $allUserVal;
});
