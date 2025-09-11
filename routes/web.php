<?php

use App\Http\Controllers\TicketController;
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
Route::resource('ticket', TicketController::class);
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['fr', 'en', 'pt'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});
