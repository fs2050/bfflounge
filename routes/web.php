<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\{

    /* Auth
    ================================================== */
    Auth\Login\Login, ## Login

    /* Profile
    ================================================== */
    Profile\Profile, ## Profile

};

Route::group( [ ], function () {

    /* Profile
    ================================================== */
    Route::get( '/login', Login::class ); ## Login

    /* Profile
    ================================================== */
    Route::get( '/profile', Profile::class )->name( 'profile.index' ); ## Profile

}); //
