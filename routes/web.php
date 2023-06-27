<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Sun\EpayAlfa\Http\Controllers\EpayAlfaController;

Route::post('{provider}/callback', EpayAlfaController::class);
