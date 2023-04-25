<?php

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

#Route::get('/PromPred', [\App\Http\Controllers\Controller::class, 'welcome'])->name(name:'welcome');

Route::get('/PromPred', function () {
    return view('welcome');
});



/*Route::get('/', function () {
    return view('PromPred');
});*/

Route::get('/', [\App\Http\Controllers\AppController::class, 'prompred'])->name(name:'prompred');

/*Route::get('/Find', function () {
    return view('Finding');
});*/

Route::get('/Find', [\App\Http\Controllers\AppController::class, 'find'])->name(name:'find');

/*Route::get('/mailto', function () {
    return view('MailTo');
});*/


Route::get('/mailto', [\App\Http\Controllers\AppController::class, 'mailto'])->name(name:'mailto');

Route::get('/test', [\App\Http\Controllers\AppController::class, 'test'])->name(name:'test');

Route::get('/Spp', [\App\Http\Controllers\AppController::class, 'spp'])->name(name:'spp');

Route::get('/Spp2', [\App\Http\Controllers\AppController::class, 'spp2'])->name(name:'spp2');

Route::get('/Spp3', [\App\Http\Controllers\AppController::class, 'spp3'])->name(name:'spp3');

Route::get('/Spp4', [\App\Http\Controllers\AppController::class, 'spp4'])->name(name:'spp4');

/* тут менял /PromPred на / тк я отлаживал оффлайн --> 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/PromPred', function () {
    return view('PromPred');
});

*/