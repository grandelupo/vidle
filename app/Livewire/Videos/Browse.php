<?php

namespace App\Livewire\Videos;

use Livewire\Component;

class Browse extends Component
{
    public $chapters;
    public $mini = false;

    public function render()
    {
        return view('livewire.videos.browse');
    }
}
