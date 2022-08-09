<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});


Route::get('/update', function () {
    return view('update');
});

Route::Get('/new',[NewController::class , 'index']);
Route::post('/new/submit',[NewController::class , 'store']);
Route::view('/ac_form', 'ackno_form');