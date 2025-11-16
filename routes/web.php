<?php

use App\Livewire\UserPanel\HomePage;
use App\Livewire\UserPanel\ShowServiceDeatils;
use App\Livewire\UserPanel\ShowServicePage;
use Illuminate\Support\Facades\Route;

Route::get('/',HomePage::class)->name('home');
Route::get('/service',ShowServicePage::class)->name('service');
Route::get('/service/{id}',ShowServiceDeatils::class)->name('service.details');