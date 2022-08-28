<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LN extends Component
{
    public function render()
    {
        $nn = Auth::user()->Notifications;
        return view('livewire.l-n',compact('nn'));
    }
}
