<?php

use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::user()->userrole == 'user')
        {
             return view('dashboard');
        }
        else{
 return view('admin.index');
        }
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/dashboardrider', function () {
    return view('riderdash.riderindex');
});
Route::get('/404', function () {
    return view('404'); 
}); 


//These routes are for admin
Route::middleware([Admin::class])->group(function(){
Route::get('/widget', function () {
    return view('admin.widget');
});
});