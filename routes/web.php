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

// Route::get('/task',function(){
//     $data=task::all();
//     return view("task")->with("tasks",$data);
// });

Route::get('/aboutus',[FrontendController::class,'indexAboutUs']);
Route::get('/contactus',[FrontendController::class,'indexContact']);
Route::post('/insertdata',[taskController::class,'save']);
Route::get('/mark/{id}',[taskController::class,'markCompleted']);

Route::get('/task',[taskController::class,'show'])->name('task.show');
Route::get('/marknot/{id}',[taskController::class,'markNotCompleted']);
Route::get('/deletetask/{id}',[taskController::class,'deleteTask']);
Route::get('/updatetask/{id}',[taskController::class,'updateTask']);
Route::post('/updatetaskdb',[taskController::class,'updateTaskDb']);
Route::get('/updatecancel',[taskController::class,'cancelUpdate']);