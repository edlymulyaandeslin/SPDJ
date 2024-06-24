<div class="max-w-3xl mx-auto">
    <p class="text-2xl font-semibold text-center dark:text-white">Lengkapi Form</p>
    <form wire:submit.prevent="createGejala" class="space-y-2">

        <x-input label="Kode Gejala" placeholder="kode" wire:model.blur="kode_gejala" />
        <x-input label="Nama Gejala" placeholder="nama" wire:model.blur="name" />

        <div>
            <x-button positive type="submit">Simpan</x-button>
            <x-button dark wire:click="$dispatch('closedForm')">Close</x-button>
        </div>

    </form>
</div>
