<?php

namespace App\Livewire\Diagnosa;

use App\Models\Diagnosa;
use App\Models\Penyakit;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.diagnosa')]
#[Title('Hasil Diagnosa')]
class ShowDiagnosa extends Component
{
    public Diagnosa $diagnosa;

    public Penyakit $penyakit;

    public function mount(Diagnosa $diagnosa)
    {
        $this->diagnosa = $diagnosa;

        $this->penyakit = Penyakit::find($diagnosa->penyakit_id);
    }

    public function render()
    {
        return view('livewire.diagnosa.show-diagnosa');
    }
}
