<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\{

    /* Auth
    ================================================== */
    Auth\Register\Register, ## Register
    Auth\Verify\Verify, ## Verify
    Auth\Resend\Resend, ## Verify

    Auth\Login\Login, ## Login
    Auth\Forgot\Forgot, ## Forgot
    Auth\Reset\Reset, ## Reset
    Likes\Likes, ## Likes

    /* Livewire
    ================================================== */
    Home\Home, ## Home
    Publications\Publications, ## Publications
    Chat\Chat, ## Chat
    Profile\Profile, ## Profile
    Cards\Cards, ## Cards
    Bank\Bank, ## Bank
    Settings\Settings, ## Settings
    Support\Support, ## Support
    Chargebacks\Chargebacks, ## Chargebacks
    Indications\Indications, ## Indications
    Earnings\Earnings, ## Earnings
    MyEarnings\MyEarnings, ## My Earnings
    Subscribers\Subscribers, ## Subscribers

};

/* Auth
================================================== */
Route::get( '/register', Register::class )->name( 'register' ); ## Register
Route::get( '/verify', Verify::class )->name( 'verify' ); ## Verify
Route::get( '/resend', Resend::class )->name( 'resend' ); ## Resend

Route::get( '/login', Login::class )->name( 'login' ); ## Login
Route::get( '/forgot', Forgot::class )->name( 'forgot' ); ## Forgot

Route::group( [ 'middleware' => 'auth.api', 'verify' ], function() {

    Route::get( '/reset', Reset::class )->name( 'reset' ); ## Reset

    /* Livewire
    ================================================== */
    Route::get( '/', Home::class )->name( 'home.index' ); ## Home
    Route::get( '/publications', Publications::class )->name( 'publications.index' ); ## Publications
    Route::get( '/chat', Chat::class )->name( 'chat.index' ); ## Chat
    Route::get( '/profile', Profile::class )->name( 'profile.index' ); ## Profile
    Route::get( '/cards', Cards::class )->name( 'cards.index' ); ## Cards
    Route::get( '/bank', Bank::class )->name( 'bank.index' ); ## Bank
    Route::get( '/likes', Likes::class )->name( 'likes.index' ); ## Bank
    Route::get( '/settings', Settings::class )->name( 'settings.index' ); ## Settings
    Route::get( '/support', Support::class )->name( 'support.index' ); ## Support
    Route::get( '/chargebacks', Chargebacks::class )->name( 'chargebacks.index' ); ## Chargebacks
    Route::get( '/indications', Indications::class )->name( 'indications.index' ); ## Indications
    Route::get( '/earnings', Earnings::class )->name( 'earnings.index' ); ## Earnings
    Route::get( '/my-earnings', MyEarnings::class )->name( 'my-earnings.index' ); ## My Earnings
    Route::get( '/subscribers', Subscribers::class )->name( 'subscribers.index' ); ## Subscribers

}); //
