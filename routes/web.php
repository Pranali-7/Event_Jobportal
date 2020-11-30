<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EventsController;
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

// Route::get('/', function () {
//     return view('event');
// });

Route::view('/login','login');
Route::post('/login',[UsersController::class,'login']);
Route::get('/logout', function () {
    if(session()->has('admin'))
    {
    Session::forget('admin');
    return redirect('/');
    }
});

Route::get('eventlist',[EventsController::class,'eventlist']);

Route::get('/',[EventsController::class,'event']);

Route::get('addevent',[EventsController::class,'addevent']);

Route::post('add',[EventsController::class,'add']);

Route::get('updatevent/{id}',[EventsController::class,'updatevent']);

Route::post('editEvent/{id}',[EventsController::class,'editEvent']);

Route::get('detail/{id}',[EventsController::class,'detail']);