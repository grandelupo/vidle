<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dodaj film') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <label for="title" class="block font-medium text-gray-700">Tytuł</label>
                    <input type="text" name="title" id="title" class="form-input mt-1 block w-full" required autofocus>
                    @error('title') <span class="red mt-1">{{$message}}</span> @enderror
                </div>

                <div>
                    <label for="description" class="block font-medium text-gray-700">Opis</label>
                    <textarea name="description" id="description" class="form-input mt-1 block w-full"></textarea>
                    @error('description') <span class="red mt-1">{{$message}}</span> @enderror
                </div>

                <div>
                    <label for="url" class="block font-medium text-gray-700">URL udostępniania filmu na Vimeo</label>
                    <input type="text" name="url" id="url" class="form-input mt-1 block w-full" required>
                    @error('url') <span class="red mt-1">{{$message}}</span> @enderror
                </div>

                <div>
                    <label for="chapter_id" class="block font-medium text-gray-700">Rozdział</label>
                    <x-select name="chapter_id" id="chapter_id" class="form-select mt-1 block w-full" required>
                        @foreach ($chapters as $chapter)
                            <option value="{{ $chapter->id }}">{{ $chapter->title }}</option>
                        @endforeach
                    </x-select>
                    @error('chapter_id') <span class="red mt-1">{{$message}}</span> @enderror
                </div>

                <div>
                    <label for="subscription_level" class="block font-medium text-gray-700">Stopień subskrypcji</label>
                    <select name="subscription_level" id="subscription_level" class="form-select mt-1 block w-full" required>
                        <option value="0">Darmowy film</option>
                        <option value="1">Płatny (dla subskrybentów)</option>
                        <option value="2">Prywatny (tylko Ty widzisz film)</option>
                    </select>
                    @error('subscription_level') <span class="red mt-1">{{$message}}</span> @enderror
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>Dodaj film</x-primary-button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>