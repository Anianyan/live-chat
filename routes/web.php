<?php

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
    return view('pages.welcome');
});

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/chat-room', 'App\Http\Controllers\ChattingController@chattingView');

    Route::post('ajax/message', 'App\Http\Controllers\ChattingController@newMessage');
});
