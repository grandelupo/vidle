<div>
    @if (auth()->check() && auth()->user()->subscribed() && auth()->user()->subscription('default')->pending())
        <p>Twoja subskrypcja premium jest w trakcie aktywacji. Dziękujemy!</p>
    @endif
    

    @if (auth()->check() && auth()->user()->subscribed())
        <p>Już jesteś subskrybentem premium. Twoja subskrypcja automatycznie odnowi się dnia {{auth()->user()->subscription('default')->ends_at}}</p>
        <button wire:click="cancel">Anuluj subskrypcję</button>   
    @else
        <x-primary-button wire:click="subscribe">Subskrybuj za {{ env('SUBSCRIPTION_PRICE_PLN') }} zł</x-primary-button>
    @endif

    @if (session()->has('message'))
        <p>{{ session('message') }}</p>
    @endif
</div>
