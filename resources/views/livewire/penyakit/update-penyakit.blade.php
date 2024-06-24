<div class="max-w-3xl mx-auto">
    <p class="text-2xl font-semibold text-center dark:text-white">Update Form</p>
    <form wire:submit.prevent="updatePenyakit" class="space-y-2" enctype="multipart/form-data">
        <x-input label="Kode Penyakit" placeholder="kode" wire:model="kode_penyakit" />
        <x-input label="Nama Penyakit" placeholder="nama" wire:model="name" />
        <x-textarea label="Definisi" placeholder="definisi" wire:model="definisi" />
        <x-textarea label="Penyebab" placeholder="penyebab" wire:model="penyebab" />
        <x-textarea label="Solusi" placeholder="solusi" wire:model="solusi" />
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload
                Gambar</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="user_avatar_help" id="user_avatar" type="file" wire:model="image">
            <span wire:loading wire:target="image" class="text-sm text-gray-500">Uploading...</span>
            @error('image')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>
        @if ($image)
            @if ($image->extension() != 'pdf')
                <img src="{{ $image->temporaryUrl() }}" alt="404" width="200">
            @endif
        @else
            <input type="hidden" value="{{ $imageOld }}">
            <img src="{{ asset('storage/' . $imageOld) }}" alt="404" width="200">
        @endif
        <div>
            <x-button label="Simpan" type="submit" primary />
            <x-button label="Close" dark wire:click="$dispatch('closedForm')" />
        </div>
    </form>
</div>
