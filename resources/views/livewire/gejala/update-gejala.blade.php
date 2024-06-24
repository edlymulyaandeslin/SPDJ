<div class="max-w-3xl mx-auto">
    <p class="text-2xl font-semibold text-center dark:text-white">Update Gejala</p>
    <form wire:submit.prevent="updateGejala" class="space-y-2" enctype="multipart/form-data">
        {{-- <x-errors /> --}}
        <x-input label="Kode Gejala" placeholder="kode" wire:model="kode_gejala" />
        <x-input label="Nama Gejala" placeholder="nama" wire:model="name" />
        <div>
            <x-button positive type="submit">Update</x-button>
            <x-button negative wire:click="$dispatch('closedForm')">Cancel</x-button>
        </div>

    </form>
</div>
