<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/main', [Main::class, 'index']);
Route::get('/resume', [Main::class, 'resume']);
Route::post('/contact', [Main::class, 'sendMail']);