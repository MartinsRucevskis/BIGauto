<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\UserController;

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
Route::get('/parmums', function () {
    return view('aboutus');
});
Route::get('/admincars', function () {
    return view('AdminCars');
});
Route::get('/users', function () {
    return view('adminUsers');
});
Route::get('/newuser', function () {
    return view('newuser');
});
Route::get('/edituser/{id}', function () {
    return view('edituser');
});
Route::get('/newcar', function () {
    return view('newcar');
});
Route::get('/admin', [UserController::class, 'checkAdmin']);
Route::get('/dashboard', [UserController::class, 'checkDashboard']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/users/delete/{id}', [UserController::class, 'delete']);
Route::get('cars', [CarController::class, 'show']);
Route::get('newcar/create', [CarController::class, 'create']);
Route::get('newuser/create', [UserController::class, 'create']);
Route::get('car/{id}', [CarController::class, 'index']);
Route::get('editcar/{id}', [CarController::class, 'indexAdmin']);
Route::get('editcar/{id}/submit', [CarController::class, 'update']);
Route::get('edituser/{id}/submit', [UserController::class, 'update']);
Route::get('editcar/{id}/delete', [CarController::class, 'delete']);
Route::post("/dashboard", [UserController::class, 'dashboard']);
Route::get('orders', [OrdersController::class, 'index']);
Route::get('orders/create', [OrdersController::class, 'create']);
Route::get('orders/create/store', [OrdersController::class, 'store']);
Route::get('orders/{order}', [OrdersController::class, 'show']);
Route::put('orders/{order}', [OrdersController::class, 'update']);
Route::get('orders/destroy/{order}', [OrdersController::class, 'destroy']);

Route::get('acceptorder', [MailController::class, 'acceptMail']);
Route::get('declineorder', [MailController::class, 'declineMail']);

