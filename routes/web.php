<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TopicController;

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
//course
Route::get('/',[HomeController::class,'index'])->name("index");
Route::get('/insert',[HomeController::class,'create']);
Route::post('/insert',[HomeController::class,'store'])->name('insert');
//coursest('/insert',[HomeController::class,'store'])->name('insert');
Route::get('/video/calling',[HomeController::class,"Videocalling"])->name("video.calling");
Route::prefix('admin')->middleware('auth')->group(function(){
//category
Route::get('/store',[CategoryController::class,'show']);
Route::post('/category/store',[CategoryController::class,'InsertStore'])->name('category.store');

//Topics
Route::get('/InsertTopic',[TopicController::class,'show']);
Route::post('/store',[TopicController::class,'StoreTopic'])->name('topic.store');
//contents

Route::get('/create',[ContentController::class,'create']);
Route::post('/contentInsert',[ContentController::class,'insert'])->name('contentInsert');
});


Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
