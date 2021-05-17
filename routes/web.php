<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/','GalleryController')->name("home");

Route::get('/Courses','CourseController')->name("center");

Route::get('/Details-Courses/{id}', 'CourseContentController')->name("Details");

Route::get('/PHD-Solution','SolutionController')->name("solution");

Route::get('/PHD-Marketing', 'MarketingController')->name("marketing");

Route::get('/PHD-Software', 'SoftwareController')->name("software");

$url = DB::select('SELECT data FROM urls where id = ?', [1]);

$a=$url[0]->data;

Route::group(['prefix' => $a.'/admin'], function () {
    Voyager::routes();
});


Route::get('/error', function () {
    return view('error');
})->name('error');

Route::get('/map', function () {
    return view('map');
})->name('map');

Route::get('/pro/{id}', function () {
    return view('product');
})->name('pro');


Route::get('/tt/{id}','ttController');


Route::get('/test1', function () {
    return view('test1');
})->name('test1');