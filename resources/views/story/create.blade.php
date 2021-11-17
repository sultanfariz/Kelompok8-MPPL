<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet" />

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add new story') }}
        </h2>
    </x-slot>

    <div class="py-12">
            <div class="grid grid-cols-3 gap-4 align-center">
                <form action="{{ route('story.store') }}" method="POST" class="bg-white mt-5 ml-5 p-5 shadow-md rounded-md text-left mx-auto" style="max-width: 80%; min-width:600px; padding: 20px !important;">
                    <label class="block">
                        <span class="text-gray-700">Title</span>
                        <input class="form-input mt-1 block w-full" name="title" placeholder="Title" required/>
                    </label>

                    <label class="block mt-4">
                        <span class="text-gray-700">Body</span>
                        <textarea class="form-input mt-1 block w-full" name="body" placeholder="" required></textarea>
                    </label>

                    <div class="mt-4">
                        <span class="text-gray-700">Language</span>
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="language" value="id" checked>
                                <span class="ml-2">Indonesian</span>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input type="radio" class="form-radio" name="language" value="en" />
                                <span class="ml-2">English</span>
                            </label>
                        </div>
                    </div>

                    <label class="block mt-4">
                        <span class="text-gray-700">Image</span>
                        {{-- file input --}}
                        <input type="file" name="image" class="form-input mt-1 block w-full" required/>
                    </label>

                    {{-- <label class="block mt-4">
                        <span class="text-gray-700">Requested Limit</span>
                        <select class="form-select mt-1 block w-full">
                            <option>$1,000</option>
                            <option>$5,000</option>
                            <option>$10,000</option>
                            <option>$25,000</option>
                        </select>
                    </label> --}}

                    {{-- <div class="flex mt-6">
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox" />
                            <span class="ml-2">I agree to the <span class="underline">privacy
                                    policy</span></span>
                        </label>
                    </div> --}}

                    <div class="mt-4">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-full">
                            {{ __('Submit') }}
                        </button>
                        <button class="p-2 pl-5 pr-5 bg-transparent border-2 border-blue-500 text-blue-500 text-lg rounded-lg hover:bg-blue-500 hover:text-gray-100 focus:border-4 focus:border-blue-300">Primary</button>
                        <button class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">Primary</button>
                    </div>
                </form>
            </div>
    </div>
</x-app-layout>