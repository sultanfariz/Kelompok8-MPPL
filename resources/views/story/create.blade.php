<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet" />

<x-app-layout>
    {{-- <div>
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 mt-5">
            <div class="flex flex-col"> --}}
    {{-- <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8"> --}}
    {{-- <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8"> --}}
    {{-- <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg pt-5"> --}}
    <div class="bg-white p-5 shadow-md rounded-md text-left" style="max-width: 400px">
        <label class="block">
            <span class="text-gray-700">Name</span>
            <input class="form-input mt-1 block w-full" placeholder="Jane Doe" />
        </label>

        <div class="mt-4">
            <span class="text-gray-700">Account Type</span>
            <div class="mt-2">
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio" name="accountType" value="personal" />
                    <span class="ml-2">Personal</span>
                </label>
                <label class="inline-flex items-center ml-6">
                    <input type="radio" class="form-radio" name="accountType" value="busines" />
                    <span class="ml-2">Business</span>
                </label>
            </div>
        </div>

        <label class="block mt-4">
            <span class="text-gray-700">Requested Limit</span>
            <select class="form-select mt-1 block w-full">
                <option>$1,000</option>
                <option>$5,000</option>
                <option>$10,000</option>
                <option>$25,000</option>
            </select>
        </label>

        <div class="flex mt-6">
            <label class="flex items-center">
                <input type="checkbox" class="form-checkbox" />
                <span class="ml-2">I agree to the <span class="underline">privacy
                        policy</span></span>
            </label>
        </div>
    </div>
    {{-- <table class="min-w-full divide-y divide-gray-200 border-collapse w-full">

                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            LAYANAN
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            TANGGAL JADWAL
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            SERVICE POINT
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            STATUS
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            TANGGAL PERMOHONAN
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">asdasdasd</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">asdasd</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">asasdasd</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                                asdasdasd
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            asdasdasdasd
                                        </td>
                                    </tr>
                                </tbody>
                            </table> --}}
    {{-- </div>
                    </div> --}}
    {{-- </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
