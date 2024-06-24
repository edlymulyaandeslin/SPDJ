<?php

namespace App\Livewire\Gejala;

use App\Models\Gejala;
use Illuminate\Validation\Rule;
use Livewire\Component;

class UpdateGejala extends Component
{
    public Gejala $gejala;
    public $kode_gejala;
    public $name;

    public function mount(Gejala $gejala)
    {
        $this->gejala = $gejala;
        $this->kode_gejala = $gejala->kode_gejala;
        $this->name = $gejala->name;
    }

    public function updateGejala()
    {
        $rules = [
            'kode_gejala' => ['required', 'string', Rule::unique('gejalas')->ignore($this->gejala->kode_gejala, 'kode_gejala')],
            'name' => ['required', 'max:255'],
        ];

        $validateData = $this->validate($rules);

        $this->gejala->update($validateData);

        $this->dispatch('updatedGejala');
    }

    public function render()
    {
        return view('livewire.gejala.update-gejala');
    }
}
