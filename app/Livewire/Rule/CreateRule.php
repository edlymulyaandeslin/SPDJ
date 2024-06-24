<?php

namespace App\Livewire\Rule;

use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateRule extends Component
{

    #[Validate('required')]
    public $penyakit_id;

    #[Validate('required')]
    public $gejala_id;

    #[Validate(['required', 'numeric', 'min:0', 'max:1'])]
    public $cf_pakar;

    // options pilihan dari table penyakit dan gejala
    public $penyakitOpt;
    public $gejalaOpt;

    public function mount()
    {
        $this->penyakitOpt = Penyakit::latest()->get()->map(fn ($item) => ['id' => $item->id, 'name' => $item->name])->toArray();
        $this->gejalaOpt = Gejala::latest()->get()->map(fn ($item) => ['id' => $item->id, 'name' => $item->name])->toArray();
    }

    public function createRule()
    {
        $validateData = $this->validate();

        Rule::create($validateData);

        $this->dispatch('createdRule');
    }

    public function render()
    {

        return view('livewire.rule.create-rule');
    }
}
