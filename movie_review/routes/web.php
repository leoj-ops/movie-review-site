<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\SignUp;

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
