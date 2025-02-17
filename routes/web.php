<?php

use Dashopapp\Api\Http\Controllers\ApiController;
use Dashopapp\Api\Http\Controllers\SanctumTokenController;
use Dashopapp\Base\Facades\AdminHelper;
use Illuminate\Support\Facades\Route;

AdminHelper::registerRoutes(function () {
    Route::name('api.')->group(function () {
        Route::prefix('sanctum-token')->name('sanctum-token.')->group(function () {
            Route::resource('/', SanctumTokenController::class)
                ->parameters(['' => 'sanctum-token'])
                ->except('edit', 'update', 'show');
        });

        Route::group(['prefix' => 'settings/api', 'permission' => 'api.settings'], function () {
            Route::get('/', [ApiController::class, 'edit'])->name('settings');
            Route::post('/', [ApiController::class, 'update'])->name('settings.update');
        });
    });
});
