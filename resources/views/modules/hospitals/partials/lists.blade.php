    {{-- Search --}}
    <div class="flex flex-wrap w-full p-2 space-x-1 sm:flex-nowrap">
        <form wire:submit="handleSearch" class="w-full">
            <div class="flex mb-2 space-x-2 sm:mb-0">
                <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search
                    Hospitals or Institutions</label>
                <select wire:model.live='type' id="dropdown"
                    class="z-10 w-12 bg-white divide-y divide-gray-100 rounded-lg shadow sm:w-44">
                    <option value="name" default>Institution Name</option>
                    <option value="city">City</option>
                    <option value="state">State</option>
                </select>
                <div class="relative w-full">
                    <input wire:model="search" type="search" id="search-dropdown" value="{{ $search }}"
                        class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Search Mockups, Logos, Design Templates...">
                    <button type="submit"
                        class="absolute top-0 right-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
        </form>
        <form wire:submit="handleReset">
            <button type="submit"
                class="self-center focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5">Reset</button>
        </form>
    </div>

    {{-- Table --}}
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No.
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Institution
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Address
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($this->institutions as $institution)
                    <tr wire:key='{{ $institution->id }}' class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <span class="text-yellow-800">{{ $this->institutions->firstItem() + $loop->index }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-yellow-800">{{ $institution->id }}</span>
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <div class="grid space-y-2">
                                <span class=" text-emerald-900">{{ $institution->name }}</span>
                                <span class='text-amber-800'>{{ $institution->type }}</span>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            <div class="grid">
                                <span>{{ $institution->address_1 }},
                                    <span>{{ $institution->address_2 ? $institution->address_2 . ',' : '' }}</span>
                                    <span>{{ $institution->address_3 ? $institution->address_3 . ',' : '' }}</span>
                                </span>
                                <span>{{ $institution->postcode }},</span>
                                <span>{{ $institution->city }},</span>
                                <span>{{ $institution->state }}.</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-yellow-800">{{ $institution->ins_email ?? 'N/A' }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-purple-800">{{ $institution->ins_phone ?? 'N/A' }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <a class="text-purple-800" href="{{ route('api.v1.hospital.show', [$institution->id]) }}"
                                target="blank">API</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-2 bg-white">{{ $this->institutions->links() }}</div>
    </div>
