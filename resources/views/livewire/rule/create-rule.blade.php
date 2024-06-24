<div class="max-w-3xl mx-auto">
    <p class="text-2xl font-semibold text-center dark:text-white">Lengkapi Form Rule</p>
    <form wire:submit.prevent="createRule" class="mb-5 space-y-2" enctype="multipart/form-data">
        <x-select label="Pilih Penyakit" placeholder="Select one status" :options="$penyakitOpt" option-label="name"
            option-value="id" wire:model.blur="penyakit_id" />
        <x-select label="Pilih Gejala" placeholder="Select one status" :options="$gejalaOpt" option-label="name"
            option-value="id" wire:model.blur="gejala_id" />
        <x-input label="CF Pakar" placeholder="cf pakar" wire:model.blur="cf_pakar" />
        <div>
            <x-button positive type="submit">Simpan</x-button>
            <x-button dark wire:click="$dispatch('closedForm')">Close</x-button>
        </div>
    </form>
</div>
