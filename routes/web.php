<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\usercontroller;


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
    return view('homepage');
});

Route::post('/store/data',[usercontroller::class,'store'])->name('storeData');
Route::get('/view_user',[usercontroller::class,'index'])->name('view_user');
Route::get('/delete/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::GET('/edit/{user}', [UserController::class, 'edit'])->name('users.edit');
Route::post('update', [UserController::class, 'update'])->name('users.update');