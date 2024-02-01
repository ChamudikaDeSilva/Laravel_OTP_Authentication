<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneAuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('phone-auth', [PhoneAuthController::class, 'index']);
