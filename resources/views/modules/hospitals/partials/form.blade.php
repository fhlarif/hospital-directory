<form wire:submit='handleCreate' class='overflow-y-auto'>
    @csrf
    <h3 class="text-lg font-semibold">Create New Hospital or Institution</h3>
    <div class="grid gap-2 mb-6 sm:grid-cols-2">
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Institution Name</label>
            <input wire:model='form.name' type="text" id="name" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Klinik Desa Abuan" required>
        </div>
        <div class="mb-6">
            <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Type</label>
            <input wire:model='form.type' type="text" id="type" name="type"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>
        </div>
    </div>
    <div class="grid gap-2 my-6 sm:grid-cols-2">
        <div class="mb-6">
            <label for="ins_email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
            <input wire:model='form.ins_email' type="email" id="ins_email" name="ins_email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>
        </div>
        <div class="mb-6">
            <label for="ins_phone" class="block mb-2 text-sm font-medium text-gray-900">Phone</label>
            <input wire:model='form.ins_phone' type="number" id="ins_phone" name="ins_phone"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>
        </div>
    </div>
    <div class="grid gap-2 my-6 sm:grid-cols-2">
        <div>
            <label for="address_1" class="block mb-2 text-sm font-medium text-gray-900">Address 1</label>
            <input wire:model='form.address_1' type="text" id="address_1" name="address_1"
                class="bg-gray-50 border my-1 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>
        </div>
        <div>
            <label for="address_2" class="block mb-2 text-sm font-medium text-gray-900">Address 2</label>
            <input wire:model='form.address_2' type="text" id="address_2" name="address_2"
                class="bg-gray-50 border my-1 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>
        <div>
            <label for="address_3" class="block mb-2 text-sm font-medium text-gray-900">Address 3</label>
            <input wire:model='form.address_3' type="text" id="address_3" name="address_3"
                class="bg-gray-50 border my-1 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>
    </div>
    <div class="grid gap-2 mb-6 sm:grid-cols-2">
        <div class="mb-6">
            <label for="city" class="block mb-2 text-sm font-medium text-gray-900">City</label>
            <input wire:model='form.city' type="text" id="city" name="city"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>
        </div>
        <div class="mb-6">
            <label for="postcode" class="block mb-2 text-sm font-medium text-gray-900">Postcode</label>
            <input wire:model='form.postcode' type="number" id="postcode" name="postcode"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>
        </div>
        <div class="mb-6">
            <label for="country" class="block mb-2 text-sm font-medium text-gray-900">Country</label>
            <input wire:model.blur='form.country' type="text" id="country" name="country"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>
        </div>
        <div class="mb-6">
            <label for="state" class="block mb-2 text-sm font-medium text-gray-900">State</label>
            @if (Illuminate\Support\Str::lower($this->form->all()['country']) === 'malaysia')
                <select wire:model='form.state' type="text" id="state" name="state"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required>
                    @foreach ($this->states() as $state)
                        <option></option>
                        <option value="{{ $state }}">{{ $state }}</option>
                    @endforeach
                </select>
            @else
                <input wire:model='form.state' type="text" id="state" name="state"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required>

            @endif

        </div>
    </div>

    <div class="mb-6">
        <label for="latitude" class="block mb-2 text-sm font-medium text-gray-900">Latitude</label>
        <input wire:model='form.latitude' type="number" id="latitude" name="latitude" step="any"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            required>
    </div>
    <div class="mb-6">
        <label for="longitude" class="block mb-2 text-sm font-medium text-gray-900">Longitude</label>
        <input wire:model='form.longitude' type="number" id="longitude" name="longitude" step="any"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            required>
    </div>
    <button type="submit"
        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Submit</button>
</form>
