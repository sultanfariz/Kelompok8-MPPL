<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}
                <div>
                    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 mt-5">

                        @if (\Session::has('success'))
                        <div id="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{!! \Session::get('success') !!}</span>
                            <span onclick="close()" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <svg onclick="close()" class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <title>Close</title>
                                    <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                </svg>
                            </span>
                        </div>
                        @endif

                        <script type="text/javascript">
                            function close() {
                                let alert = document.getElementById("alert");
                                alert.style.display = "none";
                            }
                        </script>

                         <button class="p-2 pl-5 pr-5 bg-transparent border-2 border-blue-500 text-blue-500 text-lg rounded-lg hover:bg-blue-500 hover:text-gray-100 focus:border-4 focus:border-blue-300 w-100">
                            {{ __('Insert New Story') }}
                        </button>

                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200 border-collapse w-full">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        TITLE
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        LINK
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        ACTION
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @foreach($stories as $story)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                                        {{-- <div class="text-sm text-gray-900">{{$permohonan->pelayanan}}</div> --}}
                                                        {{-- <div class="text-sm text-gray-900">yok</div> --}}
                                                        <div class="text-sm text-gray-900">
                                                            <a href="/story/{{$story->id}}" target="_blank">{{$story->title}}</a>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                                        {{-- <div class="text-sm text-gray-900">yok</div> --}}
                                                        <div class="text-sm text-gray-900">{{$story->link}}</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                                        {{-- <button wire:click="showModal()" class="p-2 pl-5 pr-5 bg-transparent border-2 border-blue-500 text-blue-500 text-lg rounded-lg hover:bg-blue-500 hover:text-gray-100 focus:border-4 focus:border-blue-300 w-100">
                                                            {{ __('Edit') }}
                                                        </button>
                                                        <button wire:click="delete()" class="p-2 pl-5 pr-5 bg-transparent border-2 border-red-500 text-red-500 text-lg rounded-lg hover:bg-red-500 hover:text-gray-100 focus:border-4 focus:border-red-300 w-100">
                                                            {{ __('Delete') }}
                                                        </button> --}}
                                                        <button class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800"
                                                            onclick="window.location.href='/story/{{$story->id}}/edit'">
                                                            {{ __('Edit') }}
                                                        </button>
                                                        <button class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                            {{ __('Delete') }}
                                                        </button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                            <!-- <div class="text-center text-sm text-gray-500 sm:text-left">
                                <div class="flex items-center">
                                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                        <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>

                                    <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                        Shop
                                    </a>

                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                        <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>

                                    <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                        Sponsor
                                    </a>
                                </div>
                            </div> -->

                            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
