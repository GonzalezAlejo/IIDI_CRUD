<?php
use App\Http\Controllers\TaskController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('task/create',[TaskController::class,'create'])->name('task.create');
Route::post('task/store',[TaskController::class,'store'])->name('task.store');
Route::get('task/index',[TaskController::class,'index'])->name('task.index');
Route::get('task/{task_to_edit}/edit',[TaskController::class,'edit'])->name('task.edit');
Route::put('task/{task_to_edit}/update',[TaskController::class,'update'])->name('task.update');
Route::get('task/{task}/show',[TaskController::class,'show'])->name('task.show');
Route::delete('task/{task}/delete',[TaskController::class,'destroy'])->name('task.destroy');
