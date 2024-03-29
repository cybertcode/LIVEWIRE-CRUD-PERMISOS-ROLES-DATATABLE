<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::resource('users', UserController::class)->middleware('can_view:usuario')->names('users');
    // ruta url| ruta de vista | nombre de ruta
    Route::view('sellers', 'admin.seller.index')->middleware('can_view:vendedor')->name('sellers');
    Route::view('clients', 'admin.client.index')->middleware('can_view:cliente')->name('clients');
    Route::view('roles', 'admin.role.index')->middleware('can_view:role')->name('roles');
    // Route::resource('/posts', PostController::class)->names('posts');
});
