<?php

use App\Http\Controllers\Admin\Dashboard\AdminDashboardController;
use App\Http\Controllers\Admin\Subscription\AdminSubscriptionController;
use App\Http\Controllers\Admin\Vacancy\AdminVacancyController;
use App\Http\Controllers\Guest\Pages\HomePageController;
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

\Illuminate\Support\Facades\Artisan::call('view:clear');

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('', [AdminDashboardController::class, 'index'])->name('admin.index');

        Route::resource('vacancy', AdminVacancyController::class)->except('show');

        Route::resource('subscription', AdminSubscriptionController::class)->only('index');
    });
});

require __DIR__.'/auth.php';
