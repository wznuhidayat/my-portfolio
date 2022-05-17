<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;
use App\Http\Controllers\MyProject;
use App\Http\Controllers\Projects;
use App\Http\Controllers\CategoryProjects;
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
Route::get('/', [Main::class, 'index']);
Route::get('/main', [Main::class, 'index']);
Route::get('/resume', [Main::class, 'resume']);
Route::post('/contact', [Main::class, 'sendMail']);
Route::get('/admin', [Main::class, 'admin'])->middleware('auth');
Route::get('/login', [Main::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [Main::class, 'myAuth']);
Route::post('/logout', [Main::class, 'logout']);
Route::get('/admin/myproject', [Main::class, 'myProject'])->name('myProject');
Route::resource('project', MyProject::class)->middleware('auth');
Route::post('project/upload', [MyProject::class, 'upload'])->name('project.upload');
Route::get('getProject/{id}', [Main::class, 'getProject']);
Route::resource('categoryprojects', CategoryProjects::class)->middleware('auth');