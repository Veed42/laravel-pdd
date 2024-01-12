<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\StatementController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Route::redirect('welcome','/')->name('welcome');


Route::post('');

Auth::routes();
Route::post('login',[LoginController::class,'index'])->name('login');
Route::group(['middleware'=> 'auth'], function (){
    Route::get('/statements', [StatementController::class, 'index'] )->name('statements');
    Route::get('/statements.create', [StatementController::class, 'create'])->name('statement.create');
    Route::post('/statements.store', [StatementController::class, 'store'])->name('statement.store');

});

Route::group(['middleware' => 'admin'], function (){
    Route::get('/index',[AdminController::class, 'index'])->name('admin.index');

    Route::get('/statements/{statement}', [StatementController::class, 'show'])->name('statements.show');
    Route::get('/statements/{statement}/edit', [StatementController::class, 'edit'])->name('statement.edit');
    Route::patch('/statements/{statement}', [StatementController::class, 'update'])->name('statement.update');

});

//Route::get('/login',[LoginController::class,'showLoginForm'])
//    ->name('login');
//Route::post('/login', [LoginController::class, 'store'])
//    ->name('login');
//Route::get('/logout', [AuthController::class, 'loggedOut'])
//    ->name('/home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
