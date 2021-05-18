<?php

use App\Http\Controllers\Api\Subscriptions\ApiVacancyOrderController;
use App\Http\Controllers\Api\Subscriptions\ApiVacancySubscriptionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/subscription/vacancy/post', [ApiVacancySubscriptionController::class, 'postOrderOnVacancy'])
    ->name('api.subscription.vacancy.post');

