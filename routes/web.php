<?php
use App\Http\Middleware\rider;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\riderControler;

Route::get('/', function () {
    return view('index');
});
Route::get('/navigation', function () {
    return view('navigation-menu');
});
Route::get('/policy', function () {
    return view('policy');
});
Route::get('/terms&conditions', function () {
    return view('terms');
});
Route::get('/riderrigester', function () {
    return view('riderrigester');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::user()->userrole == 'user')
        {
             return redirect('/');
        }
        else if(Auth::user()->userrole == 'rider')
        {
 return view('riderdash.riderindex');
        }
        else{
 return view('admin.index');
        }
        return view('dashboard');
    })->name('dashboard');

    Route::get('/becomearider', function () {
    return view('becomearider');
});

Route::post('/updateriderrequest/{id}',[UserController::class, 'updateRiderRequest'])->name('updateriderrequest');
});

Route::get('/404', function () {
    return view('404'); 
}); 
Route::get('/pagerestricted', function () {
    return view('restrict'); 
}); 


//These routes are for admin
Route::middleware([Admin::class])->group(function(){
Route::get('/widget', function () {
    return view('admin.widget');
});
});

//These routes are for riders
Route::middleware([rider::class])->group(function(){

});

Route::get('/riderregister', function () {
    return view('riderregistered');
});

route::post('/addrider',[ridercontroler::class,('register')]);
route::get('/allriders',[ridercontroler::class,('getriders')]);

Route::get('/viewrider', function () {
    return view('admin.viewrider');
});
