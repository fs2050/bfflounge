<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\{

    /* Home
    ================================================== */
    Home\Home, ## Home

    /* Auth
    ================================================== */
    Auth\Login\Login, ## Login

    /* Profile
    ================================================== */
    Profile\Profile, ## Profile

    /* Cards
    ================================================== */
    Cards\Cards, ## Cards

    /* Settings
    ================================================== */
    Settings\Settings, ## Settings

};

Route::group( [ ], function () {

    /* Home
    ================================================== */
    Route::get( '/', Home::class )->name( 'home.index' ); ## Home

    /* Login
    ================================================== */
    Route::get( '/login', Login::class ); ## Login

    /* Profile
    ================================================== */
    Route::get( '/profile', Profile::class )->name( 'profile.index' ); ## Profile

    /* Cards
    ================================================== */
    Route::get( '/cards', Cards::class )->name( 'cards.index' ); ## Cards

    /* Settings
    ================================================== */
    Route::get( '/settings', Settings::class )->name( 'settings.index' ); ## Settings

}); //
