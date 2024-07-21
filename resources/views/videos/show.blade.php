<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $video->title }}
        </h2>
    </x-slot>

    <div class="relative">


        @if(session('success'))
            <div class="mt-5 relative max-w-7xl mx-auto" role="alert">
                <span class="block bg-green-100 border border-green-400 text-green-700 rounded sm:mx-6 lg:mx-8 py-3 px-4 lg:px-8 sm:px-6">{{ session('success') }}</span>
            </div>
        @endif


        

        <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 grid grid-cols-3 gap-6">
            <div class="">
                <livewire:videos.browse :chapters="$chapters" :mini="true" />
            </div>

            <div class="col-span-2" style="margin-top:0;">
                {{-- Video --}}
                <div class="embed-container">
                    <iframe src="{{ $video->url }}" width="100%" frameborder="0" allowfullscreen></iframe>
                </div>

                {{-- Description --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4 lg:mt-8">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex justify-between">
                            <h2 class="text-2xl font-semibold text-gray-800 leading-tight">Opis</h2>
                        </div>
                        <div class="mt-4">
                            <p>{{ $video->description }}</p>
                        </div>
                    </div>
                </div>

                {{-- Comments section --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4 lg:mt-8">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex justify-between">
                            <h2 class="text-2xl font-semibold text-gray-800 leading-tight">Komentarze</h2>
                        </div>
                        <div class="mt-4">
                            <form action="{{ route('comments.store', $video) }}" method="POST">
                                @csrf

                                <div>
                                    <label for="content" class="block font-medium text-gray-700">Treść</label>
                                    <textarea name="content" id="content" class="form-input mt-1 block w-full" required></textarea>
                                    @error('content') <span class="red mt-1">{{$message}}</span> @enderror
                                </div>

                                <input type="hidden" name="video_id" value="{{ $video->id }}">

                                <div class="flex items-center justify-end mt-4">
                                    <button type="submit" class="btn btn-primary">Dodaj</button>
                                </div>
                            </form>
                        </div>
                        <div class="mt-4">
                            <ul class="divide-y divide-gray-200">
                                @foreach ($video->comments as $comment)
                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-shrink-0">
                                                <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name={{ $comment->user->name }}&color=7F9CF5&background=EBF4FF" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">{{ $comment->user->name }}</div>
                                                <div class="text-sm text-gray-500">{{ $comment->content }}</div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>


    </div>
   
</x-app-layout>