<?php

namespace App\Livewire\Profile;

use App\Models\User;
use Livewire\Component;

class Subscriptions extends Component
{

    public function render()
    {
        return view('livewire.profile.subscriptions');
    }

    public function subscribe()
    {
        if (auth()->check()) {
            return User::findOrFail(auth()->user()->id)->newSubscription('default', env('STRIPE_PRICE_ID'))
                        ->allowPromotionCodes()
                        ->checkout([
                            'success_url' => route('videos.index', ['success' => 'Jesteś subskrybentem premium. Dziękujemy!']),
                            'cancel_url' => route('videos.index', ['error' => 'Nie udało się zasubskrybować']),
                        ]);;
        } else {
            return redirect()->route('register');
        }
    }

    public function cancel()
    {
        $user = User::find(auth()->id());

        $user->subscription('default')->cancel();

        $this->flash('message', 'Subskrypcja została anulowana');
    }
    
}
