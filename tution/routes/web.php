<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
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
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::post('/search-for-teacher', function (Request $request) {
//  return hello;
// })->name('searchforteacher');


Route::post('/user/search',
    [QueryController::class, 'search']
)->name('searchforteacher');

Route::get('/advanced/search',
    [HomeController::class, 'ShowsearchPage']
)->name('searchPage');

Route::get('/about/us',
    [HomeController::class, 'ShowaboutPage']
)->name('aboutUs');

Route::get('/request/tutor',
    [HomeController::class, 'ShowReqTutorPage']
)->name('reqTutor');

//post for teacher
Route::post('/post/for/teacher',
    [PostController::class, 'store']
)->name('postForTtutor');
//find tuition 
Route::get('/tuition/available',
    [PostController::class, 'index']
)->name('findTuition');