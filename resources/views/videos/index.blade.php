<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Przeglądaj') }}
        </h2>
    </x-slot>

    @if(session('success'))
        <div class="mt-5 relative max-w-7xl mx-auto" role="alert">
            <span class="block bg-green-100 border border-green-400 text-green-700 rounded sm:mx-6 lg:mx-8 py-3 px-4 lg:px-8 sm:px-6">{{ session('success') }}</span>
        </div>
    @endif


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <livewire:videos.browse :chapters="$chapters" />
        </div>
    </div>

</x-app-layout>
