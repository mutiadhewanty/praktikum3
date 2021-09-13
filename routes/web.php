<?php
use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\programController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactController;
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
Route::prefix('product')->group(function () {
    Route::get('/list-product', [productController::class, 'product']);
    Route::get('/add-product', [productController::class, 'product1']);
});
Route::get('/news/{id}', [newsController::class, 'news']);
Route::prefix('program')->group(function () {
    Route::get('/list-program', [programController::class, 'program']);
    Route::get('/add-program', [programController::class, 'program1']);
});
Route::get('about', [aboutController::class, 'about']);
Route::get('index', [homeController::class, 'index']);
Route::resource('contact', contactController::class);