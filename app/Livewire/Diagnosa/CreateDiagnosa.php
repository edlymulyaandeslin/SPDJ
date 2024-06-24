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

        $validate = $this->validate();
        $validate['user_id'] = auth()->user()->id;
        $validate['penyakit_id'] = $penyakitId;
        $validate['kode_diagnosa'] = 'diagnosa_' . time();
        $validate['pilihan_gejala'] = json_encode($this->bobot);
        $validate['hasil'] = $hasil;

        $diagnosa = Diagnosa::create($validate);

        $this->redirect(route('diagnosa.show', $diagnosa->id), navigate: true);
    }

    // public function save()
    // {
    //     $cfPakar = Gejala::latest()->get();

    //     $cfUserXcfPakar = [];
    //     foreach ($this->bobot as $index => $cfUser) {
    //         foreach ($cfPakar as $cfp) {
    //             if ($index == $cfp->kode_gejala) {
    //                 array_push($cfUserXcfPakar, [
    //                     'penyakit_id' => $cfp->penyakit_id,
    //                     'kode_gejala' => $cfp->kode_gejala,
    //                     'bobot' => $this->cfuserXcfpakar($cfp->cf_pakar, $cfUser)
    //                 ]);
    //             }
    //         }
    //     }

    //     $penyakits = Penyakit::with('gejala')->latest()->get();
    //     $bobotGrouping = [];

    //     foreach ($penyakits as $key => $penyakit) {
    //         $bobotGrouping[$key] = [];

    //         $cfOld = 0;
    //         foreach ($cfUserXcfPakar as $key2 => $value) {
    //             if ($value['penyakit_id'] == $penyakit->id) {
    //                 $cfOld = $this->calculateCFCombine($cfOld, $value['bobot']);
    //             }
    //         }
    //         array_push($bobotGrouping[$key], [
    //             'penyakit_id' => $penyakit->id,
    //             'cfOld' => $cfOld
    //         ]);
    //     }

    //     $max = 0;
    //     $fixPenyakitId = 0;
    //     foreach ($bobotGrouping as $key => $value) {
    //         foreach ($value as $key2 => $value2) {
    //             if ($value2['cfOld'] > $max) {
    //                 $max = $value2['cfOld'];
    //                 $fixPenyakitId = $value2['penyakit_id'];
    //             }
    //         }
    //     }

    //     $hasil = $max * 100;

    //     if ($hasil < 30) {
    //         $this->dialog()->show([
    //             'title'       => 'Informasi!',
    //             'description' => "Hasil diagnosa kamu tidak lebih dari 30% , yang artinya kamu sehat. Happy nice day",
    //             'icon'        => 'info'
    //         ]);
    //     } else {
    //         $gejalaPilihan = json_encode($this->bobot);
    //         $validate = $this->validate();
    //         $validate['user_id'] = auth()->user()->id;
    //         $validate['penyakit_id'] = $fixPenyakitId;
    //         $validate['pilihan_gejala'] = $gejalaPilihan;
    //         $validate['hasil'] = $hasil;

    //         $diagnosa = Diagnosa::create($validate);

    //         $this->redirect(route('diagnosa.show', $diagnosa->id), navigate: true);
    //     }
    // }

    public function render()
    {
        return view('livewire.diagnosa.create-diagnosa', [
            'gejalas' => Gejala::orderBy('kode_gejala', 'asc')->get(),
            'bobots' => Bobot::latest()->get()
        ]);
    }
}
