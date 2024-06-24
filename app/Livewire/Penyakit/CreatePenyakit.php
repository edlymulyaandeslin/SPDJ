<?php

namespace App\Livewire\Penyakit;

use App\Models\Penyakit;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use Livewire\Component;

class CreatePenyakit extends Component
{
    use WithFileUploads;
    #[Validate(['required', 'unique:penyakits,kode_penyakit', 'min:3', 'max:5'])]
    public $kode_penyakit;
    #[Validate(['required', 'min:3', 'max:255'])]
    public $name;
    #[Validate(['required', 'min:10'])]
    public $definisi;
    #[Validate(['required', 'min:10'])]
    public $penyebab;
    #[Validate(['required', 'min:10'])]
    public $solusi;
    #[Validate('required|image|max:1024')]
    public $image;

    public function createPenyakit()
    {
        $validateData = $this->validate();
        
        if ($this->image) {
            $imageName = \Str::slug($this->name) . '-' . date('YmdHis') . '.' . $this->image->extension();
            $validateData['image'] = $this->image->storeAs('penyakit-img', $imageName);
        }

        Penyakit::create($validateData);

        $this->dispatch('storedDataPenyakit');
    }


    public function render()
    {
        return view('livewire.penyakit.create-penyakit');
    }
}
