<?php

namespace App\Livewire\Diagnosa;

use App\Models\Bobot;
use App\Models\Diagnosa;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Rule;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use WireUi\Traits\Actions;

#[Layout('layouts.diagnosa')]
#[Title('Mulai Diagnosa')]
class CreateDiagnosa extends Component
{
    use Actions;

    #[Validate('required')]
    public $bobot = [];

    public function cfuserXcfpakar($cfPakar, $cfUser)
    {
        return $cfUser * $cfPakar;
    }

    public function calculateCFCombine($cf1, $cf2)
    {
        return $cf1 + $cf2 * (1 - $cf1);
    }

    public function save()
    {
        $penyakits = Penyakit::all();
        $cfPakar = Rule::all();

        $data = [];
        foreach ($penyakits as $index => $penyakit) {
            $data[$index] = [];
            $cfOld = 0;

            foreach ($cfPakar as $cfp) {

                if ($cfp->penyakit_id == $penyakit->id) {

                    foreach ($this->bobot as $id_gejala => $cfUser) {
                        if ($id_gejala == $cfp->gejala_id) {
                            $cfUserxPakar = $this->cfuserXcfpakar($cfp->cf_pakar, $cfUser);
                        }
                    }

                    $cfOld = $this->calculateCFCombine($cfOld, $cfUserxPakar);
                }
            }
            array_push($data[$index], [
                'penyakit_id' => $penyakit->id,
                'penyakit' => $penyakit->name,
                'cf_old' => $cfOld
            ]);
        }

        $penyakitId = 0;
        $max = 0;

        foreach ($data as $value) {
            if ($value[0]['cf_old'] > $max) {
                $max = $value[0]['cf_old'];
                $penyakitId = $value[0]['penyakit_id'];
            }
        }

        $hasil = $max * 100;

        if ($hasil < 40) {
            $this->dialog()->info(
                $title = 'Information!',
                $description = 'Youare Healthy'
            );
        } else {
            $validate = $this->validate();
            $validate['user_id'] = auth()->user()->id;
            $validate['penyakit_id'] = $penyakitId;
            $validate['kode_diagnosa'] = 'diagnosa_' . time();
            $validate['pilihan_gejala'] = json_encode($this->bobot);
            $validate['hasil'] = $hasil;

            $diagnosa = Diagnosa::create($validate);

            $this->redirect(route('diagnosa.show', $diagnosa->id), navigate: true);
        }
    }


    public function render()
    {
        return view('livewire.diagnosa.create-diagnosa', [
            'gejalas' => Gejala::orderBy('kode_gejala', 'asc')->get(),
            'bobots' => Bobot::latest()->get()
        ]);
    }
}
