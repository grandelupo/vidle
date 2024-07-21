<?php

namespace App\Livewire\Profile;

use App\Models\User;
use Livewire\Component;

class Subscriptions extends Component
{

    public $currentSubscription;

    public function render()
    {
        return view('livewire.profile.subscriptions');
    }

    public function mount()
    {
        $this->currentSubscription = User::findOrFail(auth()->user()->id)->getCurrentSubscription();
    }
}
