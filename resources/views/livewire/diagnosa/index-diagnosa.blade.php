<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Diagnosa Penyakit Jerawat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="mb-4 text-center">
                <x-button positive label="Mulai Diagnosa" wire:navigate :href="route('diagnosa.create')" />
            </div>

            <div class="bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="relative px-4 py-5 shadow-md sm:rounded-lg sm:p-6">
                    <div class="flex flex-wrap items-center justify-between pb-4 space-y-4 flex-column sm:flex-row">

                        <div class="flex justify-between w-full">
                            <div>
                                <!-- Dropdown menu -->
                                <x-native-select :options="[
                                    ['name' => '5', 'val' => 5],
                                    ['name' => '10', 'val' => 10],
                                    ['name' => '20', 'val' => 20],
                                    ['name' => '50', 'val' => 50],
                                ]" option-label="name" option-value="val"
                                    wire:model.live="paginate" />
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute inset-y-0 left-0 flex items-center pointer-events-none rtl:inset-r-0 rtl:right-0 ps-3">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" id="table-search"
                                    class="block p-2 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Search for items" wire:model.live='search'>
                            </div>
                        </div>

                    </div>
                    <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="p-4">
                                    No
                                </th>

                                @can('admin')
                                    <th scope="col" class="px-6 py-3">
                                        User
                                    </th>
                                @endcan

                                <th scope="col" class="px-6 py-3">
                                    Kode Diagnosa
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Penyakit
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Hasil
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($diagnosas as $index => $diagnosa)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4">
                                        {{ $index + $diagnosas->firstItem() }}
                                    </td>

                                    @can('admin')
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $diagnosa->user->name }}
                                        </th>
                                    @endcan

                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $diagnosa->kode_diagnosa }}
                                    </th>

                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $diagnosa->penyakit->name }}
                                    </th>

                                    <td class="px-6 py-4">
                                        {{ $diagnosa->hasil }}%
                                    </td>
                                    <td class="px-6 py-4">
                                        <x-wui-dropdown>

                                            <x-dropdown.item label="Detail" :href="route('diagnosa.show', $diagnosa->id)" wire:navigate />

                                            <x-dropdown.item label="Hapus"
                                                wire:click="confirmDelete({{ $diagnosa->id }})" />
                                        </x-wui-dropdown>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="py-4 text-xl text-center">
                                        No Data
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>

                    <div class="mt-3">
                        {{ $diagnosas->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
