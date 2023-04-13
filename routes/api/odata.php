<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OdataController;

Route::group(['prefix => odata', 'as' => 'odata.'], function () {
    Route::get('store', [OdataController::class, 'store'])
        ->name('store');
});
