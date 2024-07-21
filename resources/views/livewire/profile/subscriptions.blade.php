<div>
    @if ($currentSubscription)
        <p>Ju jesteś subskrybentem premium. Twoja subskrypcja automatycznie odnowi się {{$currentSubscription->endsAtString()}}</p>
        <button wire:click="cancel">Anuluj subskrypcję</button>
    @else
        <button wire:click="subscribe">Subscribe</button>
    @endif
</div>
