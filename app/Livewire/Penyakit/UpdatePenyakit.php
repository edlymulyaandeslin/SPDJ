<?php

namespace App\Livewire\Penyakit;

use App\Models\Penyakit;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;


class UpdatePenyakit extends Component
{
    use WithFileUploads;
    public Penyakit $penyakit;

    public $kode_penyakit;
    public $name;
    public $definisi;
    public $penyebab;
    public $solusi;
    public $image;
    public $imageOld;


    public function mount(Penyakit $penyakit)
    {
        $this->penyakit = $penyakit;
        $this->kode_penyakit = $penyakit->kode_penyakit;
        $this->name = $penyakit->name;
        $this->definisi = $penyakit->definisi;
        $this->penyebab = $penyakit->penyebab;
        $this->solusi = $penyakit->solusi;
        $this->imageOld = $penyakit->image;
    }

    public function updatePenyakit()
    {
        $rules = [
            'kode_penyakit' => ['required', Rule::unique('penyakits')->ignore($this->kode_penyakit, 'kode_penyakit'), 'min:3', 'max:5'],
            'name' => ['required', 'min:3', 'max:255'],
            'definisi' => ['required', 'min:10'],
            'penyebab' => ['required', 'min:10'],
            'solusi' => ['required', 'min:10'],
        ];

        if ($this->image) {
            $rules['image'] = ['image', 'max:1024'];
        }

        $validateData = $this->validate($rules);

        if ($this->image) {
            if($this->imageOld){
                Storage::delete($this->imageOld);
            }
            $imageName = \Str::slug($this->name) . '-' . date('YmdHis') . '.' . $this->image->extension();
            $validateData['image'] = $this->image->storeAs('penyakit-img', $imageName);
        } else {
            $validateData['image'] = $this->imageOld;
        }

        $this->penyakit->update($validateData);

        $this->dispatch('updatedPenyakit');
    }

    public function render()
    {
        return view('livewire.penyakit.update-penyakit');
    }
}
