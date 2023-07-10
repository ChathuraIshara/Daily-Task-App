<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\taskController;
use Illuminate\Support\Facades\Route;
use App\Models\task;

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
    return view('welcome');
});

Route::get('/task',function(){
    $data=task::all();
    return view("task")->with("tasks",$data);
});


Route::get('/aboutus',[FrontendController::class,'indexAboutUs']);
Route::get('/contactus',[FrontendController::class,'indexContact']);
Route::post('/savetask',[taskController::class,'store']);
