<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

/*
CAUTION:
For testing purpose on this routes using Postman. These routes have been
excluded from VerifyCsrfToken in Middlewares. After testing make sure to
remove them from the $except parameter in the mentioned file
*/
Route::get('/', [PostController::class, 'index']);
Route::get('/customers/{customerID}', [PostController::class, 'show']);
Route::patch('/customers/{customerID}', [PostController::class, 'update']);
Route::delete('/customers/{customerID}', [PostController::class, 'destroy']);
