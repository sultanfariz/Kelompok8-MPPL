<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet" />

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit story') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center">
            <form action="/story/{{ $story->id }}" method="POST" class="bg-white mt-5 p-5 shadow-md rounded-md text-left mx-5" 
            style="max-width: 80%; min-width:600px; padding: 20px !important;" enctype="multipart/form-data"
            >
                @csrf
                <label class="block">
                    <span class="text-gray-700">Title</span>
                </label>
                <input class="form-input mt-1 block w-full" name="title" placeholder="Title" value="{{ $story->title }}" required/>
                @error('title')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror

                <label class="block mt-4">
                    <span class="text-gray-700">Body</span>
                </label>
                <textarea class="form-input mt-1 block w-full" name="body" placeholder="Body" required>{{ $story->body }}</textarea>
                @error('body')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror

                <label class="block mt-4">
                    <span class="text-gray-700">Link</span>
                </label>
                <input class="form-input mt-1 block w-full" name="link" placeholder="Link" value="{{ $story->link }}" required/>
                @error('link')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror

                <label class="block mt-4">
                    <span class="text-gray-700">Image</span>
                </label>
                <input type="file" name="image" class="form-input mt-1 block w-full" required/>
                @error('image')
                    <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                @enderror

                <div class="mt-4 flex justify-center">
                    <button type="submit" class="p-2 pl-5 pr-5 bg-transparent border-2 border-blue-500 text-blue-500 text-lg rounded-lg hover:bg-blue-500 hover:text-gray-100 focus:border-4 focus:border-blue-300 w-full">
                        {{ __('Submit') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>