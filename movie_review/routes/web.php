<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\SignUp;
use App\Http\Controllers\dbManager;
use App\Http\Controllers\movieData;

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
    if(session()->has('user')){
        return redirect('index');
    }
    return view('cover');
});

Route::post('login',[Login::class, 'userLogin']);

Route::post('signup',[SignUp::class, 'userSign']);

Route::get('/logout', function () {
    if(session()->has('user'))
    {
        session()->pull('user');
    }
    return view('cover');
});

Route::group(['middleware'=>['protectedPage']],function(){

    Route::get('/movies',[movieData::class, 'viewMovies']);

    Route::get('/celebrities',[movieData::class, 'viewCelebrities']);

    Route::get('/index', function () {
        return view('index');
    });

    Route::get('/feedback', function () {
        return view('feedback');
    });

    Route::get('/moviedata/{id}',[movieData::class, 'movieDb']);

});

Route::get('/insert', function () {
        return view('insert');
});

Route::get('/update', function () {
        return view('update');
});

Route::get('/delete', function () {
        return view('delete');
});

Route::post('dbUpdate',[dbManager::class, 'dbUpdate']);

Route::post('dbInsert',[dbManager::class, 'dbInsert']);

Route::post('dbDelete',[dbManager::class, 'dbDelete']);

Route::post('feedback',[movieData::class,'feedBack']);
// Route::get('/moviedata', function () {
//     return view('moviedata');
// });