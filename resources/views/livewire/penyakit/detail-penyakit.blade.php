<div class="space-y-4">
    <h1 class="text-2xl font-semibold">{{ $penyakit->name }}</h1>
    <div>
        <img src="{{ asset('storage/' . $penyakit->image) }}" width="150px" alt="">
    </div>
    <div>
        <p class="text-lg font-semibold">Definisi:</p>
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
        <p class="text-lg font-semibold">Saran Perawatan:</p>
        @php
            $arrayData = explode("\n", $penyakit->solusi);
            $strSolusi = implode("\n", $arrayData);
        @endphp
        <p>{!! nl2br(e($strSolusi))  !!}</p>
    </div>

    <div>
        <x-button label="Kembali" :href="url('/')" dark wire:navigate />
    </div>
</div>
