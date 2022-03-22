<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\{

    /* Auth
    ================================================== */
    Auth\Login\Login, ## Login

    /* Home
    ================================================== */
    Home\Home, ## Home

    /* Chat
    ================================================== */
    Chat\Chat, ## Chat

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

    /* Chargebacks
    ================================================== */
    Chargebacks\Chargebacks, ## Chargebacks

    /* Indications
    ================================================== */
    Indications\Indications, ## Indications

    /* Earnings
    ================================================== */
    Earnings\Earnings, ## Earnings

    /* My Earnings
    ================================================== */
    MyEarnings\MyEarnings, ## My Earnings

    /* Subscribers
    ================================================== */
    Subscribers\Subscribers, ## Subscribers

};

Route::group( [ ], function () {

    /* Login
    ================================================== */
    Route::get( '/login', Login::class ); ## Login

    /* Home
    ================================================== */
    Route::get( '/', Home::class )->name( 'home.index' ); ## Home

    /* Chat
    ================================================== */
    Route::get( '/chat', Chat::class )->name( 'chat.index' ); ## Chat

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

    /* Chargebacks
    ================================================== */
    Route::get( '/chargebacks', Chargebacks::class )->name( 'chargebacks.index' ); ## Chargebacks

    /* Indications
    ================================================== */
    Route::get( '/indications', Indications::class )->name( 'indications.index' ); ## Indications

    /* Earnings
    ================================================== */
    Route::get( '/earnings', Earnings::class )->name( 'earnings.index' ); ## Earnings

    /* My Earnings
    ================================================== */
    Route::get( '/my-earnings', MyEarnings::class )->name( 'myEarnings.index' ); ## My Earnings

    /* Subscribers
    ================================================== */
    Route::get( '/subscribers', Subscribers::class )->name( 'subscribers.index' ); ## Subscribers

}); //
