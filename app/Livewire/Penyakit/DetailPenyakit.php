<?php

namespace App\Livewire\Penyakit;

use App\Models\Penyakit;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.diagnosa')]
#[Title('Detail Penyakit')]
class DetailPenyakit extends Component
{
    public Penyakit $penyakit;

    public function mount(Penyakit $penyakit)
    {
        $this->penyakit = $penyakit;
    }

    public function render()
    {
        return view('livewire.penyakit.detail-penyakit');
    }
}
