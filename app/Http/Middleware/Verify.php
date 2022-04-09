<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Verify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle( Request $request, Closure $next )
    {
        if( response()->json( [], 401 ) )
            return redirect()->route( 'verify' );

        if( response()->json( [], 200 ) )
            return redirect()->route( 'home.index' );

        return $next( $request );
    }

} // Verify
