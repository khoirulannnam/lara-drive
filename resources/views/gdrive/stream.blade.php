<x-app-layouts>
    <div class="p-6 bg-white border-b border-gray-200">
        <a href="/">
            <button class="p-2 bg-blue-500 text-white rounded-lg">
                Kembali
            </button>
        </a>
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Daftar File di Google Drive</h2>
        @if (count($files) != 0)
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @foreach ($files as $file)
                    <div>
                        <div class="max-w-lg mx-auto">
                            <iframe src="https://drive.google.com/file/d/{{ $file['extraMetadata']['id'] }}/preview"
                                width="100%" height="480" frameborder="0" allowfullscreen="true"
                                mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                        </div>
                        <div class="flex justify-center">
                            <a href="{{ route('web.stream-by-path', ['path' => $file['path']]) }}"
                                class="text-blue-600 hover:underline">Lihat</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-600">Tidak ada file yang ditemukan.</p>
        @endif
    </div>
</x-app-layouts>
