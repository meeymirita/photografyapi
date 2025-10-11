<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/registration', [UserController::class, 'registration']);
Route::post('/authentication', [UserController::class, 'authentication']);

/*
 * register
 *
 * name
 * lastname
 * login
 * email
 * phone
 * password
 * city
 *
 * auth
 * login/email/phone
 * password
 *
 *
 *
 */
