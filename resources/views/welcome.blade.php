<x-app-layouts>
    <div class="p-4 text-3xl font-semibold flex justify-center">
        Welcome to Laravel Drive
    </div>
    <div class="container mx-auto">
        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                <p class="font-bold">Success!</p>
                <p>{{ session('success') }}</p>
                @if (session('path'))
                    <p class="text-sm text-gray-600">Path: {{ session('path') }}</p>
                @endif
            </div>
        @endif
        <div class="flex justify-center mt-10">
            <div class="w-full max-w-lg">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4">
                        <a href="{{route('web.store')}}">
                            <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Upload
                            </button>
                        </a>
                    </div>
                    <div>
                        <a href="{{route('web.stream')}}">
                            <button class="w-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                View
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layouts>