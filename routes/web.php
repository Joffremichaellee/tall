<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;

use App\Http\Livewire\Customer\ShowCustomer;
use App\Http\Livewire\Customer\CreateCustomer;
use App\Http\Livewire\Customer\EditCustomer;

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

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::fallback(function() {
        return view('pages/utility/404');
    });    
});

/*=========== Customer ==========*/

/* Route::middleware(['auth:sanctum', 'verified'])->get('/customer', ShowCustomer::class)->name('customer.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/customer/create', CreateCustomer::class)->name('customer.create');
Route::middleware(['auth:sanctum', 'verified'])->get('/customer/edit/{id}', EditCustomer::class)->name('customer.edit'); */