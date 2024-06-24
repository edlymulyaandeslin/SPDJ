<div>
    <form wire:submit.prevent="save">
        @foreach ($gejalas as $index => $gejala)
            <div class="flex flex-col mb-5" wire:key={{ $gejala->id }}>
                <h2 class="font-semibold">{{ $index + 1 }}. Apakah {{ $gejala->name }}?</h2>
                <div class="flex justify-evenly">
                    @foreach ($bobots as $bobot)
                        <x-radio :left-label="$bobot->pilihan" value="{{ $bobot->bobot_nilai }}"
                            wire:model.defer="bobot.{{ $gejala->id }}" required />
                    @endforeach
                </div>
            </div>
            <x-errors />
        @endforeach

        <div class="flex justify-center">
            <x-button class="w-40" type="submit" label="Check" primary wire:loading.remove />
            <x-button class="w-40 text-xs" label="Process..." primary wire:loading wire:target="save" />
        </div>
    </form>

</div>
