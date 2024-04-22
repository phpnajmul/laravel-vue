<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ApplicationController;
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


// Route::get('csrf', function () {
//     return csrf_token();
// });


Route::get('/', function () {
    return view('welcome');
});

//Route::get('/admin/dashboard', function (){
//   return view('dashboard');
//});

Route::get('/api/users', [UserController::class, 'index']);
Route::post('/api/users', [UserController::class, 'store']);
Route::get('/api/users/search', [UserController::class, 'search']);
Route::patch('/api/users/{user}/change-role',[UserController::class,'changeRole']);
Route::put('/api/users/{user}', [UserController::class, 'update']);
Route::delete('/api/users/{user}', [UserController::class, 'destroy']);



Route::get('{view}', ApplicationController::class)->where('view', '(.*)');
