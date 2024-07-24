<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $edit ? __('Edytuj film') : __('Dodaj film') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <form action="{{ $edit ? route('videos.update', $video) : route('videos.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($edit)
                    @method('PUT')
                @endif

                <div>
                    <label for="title" class="block font-medium text-gray-700">Title</label>
                    <x-text-input type="text" name="title" id="title" class="form-input mt-1 block w-full" required autofocus value="{{ $edit ? $video->title : '' }}" />
                    @error('title') <span class="red mt-1">{{$message}}</span> @enderror
                </div>

                <div>
                    <label for="description" class="block font-medium text-gray-700">Description</label>
                    <x-textarea name="description" id="description" class="form-input mt-1 block w-full">{{ $edit ? $video->description : ''}}</x-textarea>
                    @error('description') <span class="red mt-1">{{$message}}</span> @enderror
                </div>

                <div>
                    <label for="url" class="block font-medium text-gray-700">Video URL</label>
                    <x-text-input type="text" name="url" id="url" class="form-input mt-1 block w-full" required value="{{ $edit ? $video->url : ''}}" />
                    @error('url') <span class="red mt-1">{{$message}}</span> @enderror
                </div>

                <div>
                    <label for="chapter_id" class="block font-medium text-gray-700">Chapter</label>
                    <x-select name="chapter_id" id="chapter_id" class="form-select mt-1 block w-full" required>
                        @foreach ($chapters as $chapter)
                            <option value="{{ $chapter->id }}" @if ($edit) {{ $video->chapter_id == $chapter->id ? ' selected' : '' }} @endif>{{ $chapter->title }}</option>
                        @endforeach
                    </x-select>
                    @error('chapter_id') <span class="red mt-1">{{$message}}</span> @enderror
                </div>

                <div>
                    <label for="subscription_level" class="block font-medium text-gray-700">Subscription Level</label>
                    <x-select name="subscription_level" id="subscription_level" class="form-select mt-1 block w-full" required>
                        <option value="0" @if ($edit) {{ $video->subscription_level == 0 ? ' selected' : '' }} @endif>Darmowy film</option>
                        <option value="1" @if ($edit) {{ $video->subscription_level == 0 ? ' selected' : '' }} @endif>Płatny (dla subskrybentów)</option>
                        <option value="2" @if ($edit) {{ $video->subscription_level == 0 ? ' selected' : '' }} @endif>Prywatny (tylko Ty widzisz film)</option>
                    </x-select>
                    @error('subscription_level') <span class="red mt-1">{{$message}}</span> @enderror
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>{{$edit ? __('Aktualizuj') : __('Dodaj film')}}</x-primary-button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>