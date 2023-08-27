<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Hospital Listing') }}
        </h2>
    </x-slot>
    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">

        <div class="py-12">

            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

                <livewire:hospital-create-livewire />
                <livewire:hospital-index-livewire lazy />
            </div>
        </div>
    </div>
</x-app-layout>
