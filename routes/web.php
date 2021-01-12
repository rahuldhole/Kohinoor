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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware'=>'auth'], function(){
    Route::resource('book', \App\Http\Controllers\BookController::class);
});

Route::get('admin',function (){
    if(session()->has('kpsess')) {
        return redirect('mydash');
    } else  return view('admin_login');
});

Route::get('mydash',function (){
    if(!session()->has('kpsess')) {
        session()->flash('error', 'Access Denied!!! Please Login!!!');
        return view('admin_login');
    } else return view('admin_dash');
});


Route::post('adminlogin', [\App\Http\Controllers\AdminLog::class, 'login']);
Route::get('adminlogout', function (){
    session()->forget('kpsess');
    session()->flash('error', 'Logout successfully!!!');
    return view('admin_login');
});

