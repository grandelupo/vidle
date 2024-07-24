
        
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
        <div class="mt-4">
            <div x-data="{ open: false }">
                <div class="flex justify-between">
                    <h2 class="text-2xl font-semibold text-gray-800 leading-tight">Wszystkie filmy</h2>
                    @if (auth()->check() && auth()->user()->isAdmin() && !$mini)
                        <div>
                            <a href="{{ route('videos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Dodaj nowy film</a>
                            <a href="{{ route('chapters.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Dodaj nowy rozdział</a>
                        </div>
                    @endif
                </div>
                <div class="mt-4">
                    <table class="min-w-full divide-y divide-gray-200">
                        @foreach ($chapters as $chapter)
                            <tbody class="bg-white divide-y divide-gray-200" x-data="{openChapter: true, collapseText: 'Zwiń', expandText: 'Rozwiń'}">
                                <tr class="bg-gray-100">
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="text-sm leading-5 font-medium text-gray-900">{{ $chapter->title }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                        <button @click="openChapter = !openChapter" class="text-indigo-600 hover:text-indigo-900" x-text="openChapter ? collapseText : expandText"></button>
                                    </td>
                                </tr>
                                <tr x-show="openChapter">
                                    <td colspan="2">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @foreach ($chapter->videos as $video)
                                                    <tr>
                                                        <td class="pl-16 pr-6 py-4 whitespace-no-wrap">
                                                            <a href="{{ route('videos.show', $video) }}" class="text-indigo-600 hover:text-indigo-900 hover:underline">
                                                                <div class="text-sm leading-5 font-medium">{{ $video->title }}</div>
                                                            </a>
                                                        </td>
                                                        @if (!$mini)
                                                            <td class="px-6 py-4 whitespace-no-wrap">
                                                                <div class="text-sm leading-5 text-gray-500">{{ $video->description }}</div>
                                                            </td>
                                                        @endif
                                                        @if (auth()->check() && auth()->user()->isAdmin())
                                                            <td class="show-on-hover px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                                                <div class="inline-block">
                                                                    <form action="{{ route('videos.destroy', $video) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="text-red-600 hover:text-red-900">Usuń</button>
                                                                    </form>
                                                                </div>
                                                                <div class="inline-block ml-4">
                                                                    <a href="{{ route('videos.edit', $video) }}" class="text-indigo-600 hover:text-indigo-900">Edytuj</a>
                                                                </div>
                                                            </td>
                                                        @endif
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>