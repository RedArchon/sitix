<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Http;
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
//Route::get('page-1', function () {
//    return view('welcome');
//});

//data table page
Route::get('page/{id}', [PageController::class, 'show']);
//Route::get('/page-2', function () {
//    return view('welcome');
//});

Route::get('/page-3', function () {
    return view('welcome');
});

Route::get('/page-4', function () {
    return view('welcome');
});

Route::get('/data', function () {
    $response = Http::withHeaders([
        'x-rapidapi-host' => 'free-nba.p.rapidapi.com',
        'x-rapidapi-key' => 'e5d8563997mshcfb030c802400d3p1ec262jsn6864acf2d34a'
    ])->get('https://free-nba.p.rapidapi.com/teams?page=0');

    return $response;
});

