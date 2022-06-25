<?php
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController; 
use App\Http\Controllers\MerchantController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::redirect('/', 'country'); 
Route::resource('country', CountryController::class); 
Route::resource('merchant', MerchantController::class, ['except' => ['index', 'create']]);
Route::resource('city', CityController::class, ['except' => ['index', 'create']]);
Route::get('city/country/{id}', [CityController::class, 'index']);
Route::get('city/country/{id}/create', [CityController::class, 'create']); 
Route::get('merchant/country/{id}/create', [MerchantController::class, 'create']); 
Route::get('merchant/country/{id}', [MerchantController::class, 'index']);