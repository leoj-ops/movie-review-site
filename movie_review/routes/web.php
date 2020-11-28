<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\SignUp;
use App\Http\Controllers\dbManager;

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

/*Route::get('/', function () {
    return view('cover');
});*/
// Route::view('/','cover');
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

        Route::get('/movies', function () {
        return view('movies');
    });

        Route::get('/index', function () {
        return view('index');
    });

});

Route::get('/insert', function () {
        return view('insert');
});

Route::get('/update', function () {
        return view('update');
});

Route::get('/display', function () {
        return view('display');
});

Route::get('/delete', function () {
        return view('delete');
});

Route::post('dbUpdate',[dbManager::class, 'dbUpdate']);

// Route::post('dbDisplay',[dbManager::class, 'dbDisplay']);

Route::post('dbInsert',[dbManager::class, 'dbInsert']);

Route::post('dbDelete',[dbManager::class, 'dbDelete']);