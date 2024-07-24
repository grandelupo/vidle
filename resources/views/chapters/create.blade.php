<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dodaj nowy rozdział') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <form action="{{ route('chapters.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <label for="title" class="block font-medium text-gray-700">Tytuł</label>
                    <x-text-input type="text" name="title" id="title" class="form-input mt-1 block w-full" required autofocus />
                    @error('title') <span class="red mt-1">{{$message}}</span> @enderror
                </div>

                <div>
                    <label for="description" class="block font-medium text-gray-700">Opis</label>
                    <x-textarea name="description" id="description" class="form-input mt-1 block w-full" required></x-textarea>
                    @error('description') <span class="red mt-1">{{$message}}</span> @enderror
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button type="submit" class="btn btn-primary">Utwórz nowy rozdział</x-primary-button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>