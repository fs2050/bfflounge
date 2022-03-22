<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return view( 'livewire.profile.index' )
            ->layout( 'livewire.layouts.profile' );
    }

} // Profile
