<x-app-layouts>
    <div class="w-full bg-white p-6 rounded-lg shadow-md">
        <a href="/">
            <button class="p-2 bg-blue-500 text-white rounded-lg">
                Kembali
            </button>
        </a>
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Upload Foto</h2>
        <form action="{{ route('web.upload') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div class="flex items-center justify-center w-full">
                <label for="photo" class="flex flex-col items-center justify-center w-full h-64 bg-gray-50 rounded-lg border-2 border-dashed border-gray-300 cursor-pointer hover:bg-gray-100">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V10M7 16l-2.3-2.3m2.3 2.3L9.3 13.7M7 10a4 4 0 018 0v6a4 4 0 01-8 0zM12 10v6m-5 5a2 2 0 002 2h6a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5z"></path></svg>
                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                    </div>
                    <input id="photo" type="file" class="hidden" name="photo">
                </label>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                Upload Foto
            </button>
        </form>
    </div>
</x-app-layouts>
