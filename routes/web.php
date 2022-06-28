<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/cars', function () {
    return view('master');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('', function () {
    return view('welcome');
});
Route::get('/parmums', function () {
    return view('aboutus');
});
Route::get('/admincars', function () {
    return view('AdminCars');
})->middleware('auth');;
Route::get('/users', function () {
   if(Auth::user()->Limenis>=2){
    return view('adminUsers');}
    else return redirect('admin');
})->middleware('auth');;
Route::get('/newuser', function () {
    return view('newuser');
})->middleware('auth');;
Route::get('/edituser/{id}', function () {
    return view('edituser');
})->middleware('auth');;
Route::get('/newcar', function () {
    return view('newcar');
})->middleware('auth');;
Route::get('/admin', [UserController::class, 'checkAdmin'])->name('admin');
Route::get('/dashboard', [UserController::class, 'checkDashboard'])->name('dashboard');
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/edituser/{id}/delete', [UserController::class, 'delete'])->middleware('auth');;
Route::get('cars', [CarController::class, 'show']);
Route::get('newcar/create', [CarController::class, 'create'])->middleware('auth');;
Route::get('newuser/create', [UserController::class, 'create'])->middleware('auth');;
Route::get('car/{id}', [CarController::class, 'index']);
Route::get('editcar/{id}', [CarController::class, 'indexAdmin'])->middleware('auth');;
Route::get('editcar/{id}/submit', [CarController::class, 'update'])->middleware('auth');;
Route::get('edituser/{id}/submit', [UserController::class, 'update'])->middleware('auth');;
Route::get('editcar/{id}/delete', [CarController::class, 'delete'])->middleware('auth');;
Route::post("/dashboard", [UserController::class, 'dashboard']);
Route::get('orders', [OrdersController::class, 'index'])->middleware('auth');
Route::get('orders/create', [OrdersController::class, 'create']);
Route::get('orders/create/store', [OrdersController::class, 'store']);
Route::get('orders/{order}', [OrdersController::class, 'show'])->middleware('auth');;
Route::put('orders/{order}', [OrdersController::class, 'update'])->middleware('auth');;
Route::get('orders/destroy/{order}', [OrdersController::class, 'destroy'])->middleware('auth');;

Route::get('acceptorder', [MailController::class, 'acceptMail'])->middleware('auth');;
Route::get('declineorder', [MailController::class, 'declineMail'])->middleware('auth');;
Route::any('{query}',
    function() { return redirect('/'); })
    ->where('query', '.*');
