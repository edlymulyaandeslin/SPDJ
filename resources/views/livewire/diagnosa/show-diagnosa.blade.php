<div class="space-y-4">
    <h1 class="text-2xl font-semibold">Halo {{ $diagnosa->user->name }}</h1>
    <div>
        <p>Kamu terkena penyakit <span class="font-semibold">{{ $penyakit->name }}</span> dengan hasil
            {{ $diagnosa->hasil }}%</p>
    </div>

    <div>
        <img src="{{ asset('storage/' . $penyakit->image) }}" width="200px" alt="404">
    </div>

    <div>
        <p>{{ $penyakit->definisi }}</p>
    </div>

    <div>
        <p class="text-lg font-semibold">Penyebab:</p>
        @php
            $arrayData = explode("\n", $penyakit->penyebab);
            $strPenyebab = implode("\n", $arrayData);
        @endphp
        <p>{!! nl2br(e($strPenyebab))  !!}</p>
    </div>

    <div>
        <p class="text-lg font-semibold">Saran perawatan:</p>
        @php
            $arrayData = explode("\n", $penyakit->solusi);
            $strSolusi = implode("\n", $arrayData);
        @endphp
        <p>{!! nl2br(e($strSolusi))  !!}</p>
    </div>

    <div>
        <x-button label="Kembali" :href="route('diagnosa.index')" dark wire:navigate />
    </div>
</div>
