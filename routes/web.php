<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/aboutus.blade.php', function () {
    return view('aboutus');
});
Route::get('/contactus.blade.php', function () {
    return view('contactus');
});
Route::get('/headbands.blade.php', function () {
    return view('headbands');
});
Route::get('/clips.blade.php', function () {
    return view('clips');
});
Route::get('/baws.blade.php', function () {
    return view('baws');
});