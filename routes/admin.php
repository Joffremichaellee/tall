<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Customer\ShowCustomer;
use App\Http\Livewire\Customer\CreateCustomer;
use App\Http\Livewire\Customer\EditCustomer;


//Route::redirect('/', 'login');

Route::get('/customer', ShowCustomer::class)->name('customer.index');
Route::get('/customer/create', CreateCustomer::class)->name('customer.create');
Route::get('/customer/edit/{id}', EditCustomer::class)->name('customer.edit');