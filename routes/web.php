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

    /* Bank
    ================================================== */
    Bank\Bank, ## Bank

    /* Settings
    ================================================== */
    Settings\Settings, ## Settings

    /* Support
    ================================================== */
    Support\Support, ## Support

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

    /* Bank
    ================================================== */
    Route::get( '/bank', Bank::class )->name( 'bank.index' ); ## Bank

    /* Settings
    ================================================== */
    Route::get( '/settings', Settings::class )->name( 'settings.index' ); ## Settings

    /* Support
    ================================================== */
    Route::get( '/support', Support::class )->name( 'support.index' ); ## Support

}); //
