<?php

use Illuminate\Support\Facades\Route;

Route::group(['as' => 'postcode-nl::'], function () {

    Route::get('postcode-nl/address/{postcode}/{houseNumber}/{houseNumberAddition?}', [
        'as' => 'address',
        'uses' => 'Speelpenning\PostcodeNl\Http\Controllers\AddressController@get'
    ]);

});
