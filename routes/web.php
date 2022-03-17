<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\{

    /* Auth
    ================================================== */
    Auth\Login\Login, ## Login

};

Route::group( [ ], function () {

    /* Auth
    ================================================== */
    Route::get( '/login', Login::class ); ## Login

}); //

Route::get('/', function () {
    return view('welcome');
});
