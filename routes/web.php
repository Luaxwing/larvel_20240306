<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;
use App\Http\Controllers\CatController;


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
    // return view('welcome');
    return view('index');
});
// Route::get('/dog', function () {
//     // return view('welcome');
//     return view('dog');
// });
// Route::get('/cat', function () {
//     // return view('welcome');
//     return view('cat');
// });

// cats
Route::resource('cats', CatController::class);

// excel
Route::get('cats_excel',[CatController::class,'excel'])->name('cats.excel');

// dogs
Route::resource('dogs', DogController::class);
