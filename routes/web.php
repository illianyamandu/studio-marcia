<?php

use App\Http\Controllers\Colaborador\ColaboradorController;
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

Route::group(['prefix' => '/'], function () {
    Route::get('', function () {
        return view('dashboards.index');
    });
    Route::group(['prefix' => 'colaborador'], function () {
        Route::get('/', [ColaboradorController::class, 'index'])->name('colaborador.index');
    });
});
