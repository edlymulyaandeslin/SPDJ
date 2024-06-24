<?php

namespace App\Livewire\Gejala;

use App\Models\Gejala;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateGejala extends Component
{

    #[Validate(['required', 'unique:gejalas', 'min:3', 'max:5'])]
    public $kode_gejala;

    #[Validate('required|max:255')]
    public $name;

    public function createGejala()
    {
        $validateData = $this->validate();

        Gejala::create($validateData);

        $this->dispatch('storedDataGejala');
    }

    public function render()
    {

        return view('livewire.gejala.create-gejala');
    }
}
