<?php

use Illuminate\Support\Facades\Route;

Route::post('{provider}/callback', [
    'uses' => 'EpayAlfaController@callback',
    'as' => 'epayalfa.callback',
]);
