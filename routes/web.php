<?php

use App\Http\Controllers\PortfolioController;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvportfolioer and all of them will
| be assigned to the "web" mportfoliodleware group. Make something great!
|
*/



Route::get('/', function () {
    $portfolios = Portfolio::all();
    return view('index', compact('portfolios'));
})->name('home');

Route::get('/signin', function () {
    return view('signin');
})->name('sign in');

Route::resource('portfolio', PortfolioController::class)->only([
    'show'
]);