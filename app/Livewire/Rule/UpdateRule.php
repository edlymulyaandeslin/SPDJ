<?php

namespace App\Livewire\Rule;

use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class UpdateRule extends Component
{
    public Rule $rule;

    #[Validate('required')]
    public $penyakit_id;

    #[Validate('required')]
    public $gejala_id;

    #[Validate(['required', 'numeric', 'min:0', 'max:1'])]
    public $cf_pakar;

    // options pilihan dari table penyakit dan gejala
    public $penyakitOpt;
    public $gejalaOpt;

    public function mount(Rule $rule)
    {
        $this->rule = $rule;
        $this->penyakit_id = $rule->penyakit_id;
        $this->gejala_id = $rule->gejala_id;
        $this->cf_pakar = $rule->cf_pakar;
    }

    public function updateRule()
    {

        $validateData = $this->validate();

        $this->rule->update($validateData);

        $this->dispatch('updatedRule');
    }

    public function render()
    {
        $this->penyakitOpt = Penyakit::latest()->get()->map(fn ($item) => ['id' => $item->id, 'name' => $item->name])->toArray();
        $this->gejalaOpt = Gejala::latest()->get()->map(fn ($item) => ['id' => $item->id, 'name' => $item->name])->toArray();

        return view('livewire.rule.update-rule');
    }
}
