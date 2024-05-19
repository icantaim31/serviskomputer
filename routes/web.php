<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\KomputerController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

// Define the route for the homepage
Route::get('/', [DashboardController::class, 'index']);

// Define the routes for the Pegawai resource controller
Route::resource('pegawai', PegawaiController::class);

// Define the routes for the Customer resource controller
Route::resource('customer', CustomerController::class);

// Define the routes for the Keluhan resource controller
Route::resource('keluhan', KeluhanController::class);

// Define the routes for the Komputer resource controller
Route::resource('komputer', KomputerController::class);