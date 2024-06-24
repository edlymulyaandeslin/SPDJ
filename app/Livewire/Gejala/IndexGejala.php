<?php

namespace App\Livewire\Gejala;

use App\Models\Gejala;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

#[Title('Gejala')]
class IndexGejala extends Component
{
    use WithPagination, Actions;
    public $paginate = 10;

    #[Url(as: 'q')]
    public $search = '';

    public $toggleAdd;
    public $formEdit = false;
    public $idFormEdit;


    public function openFormEdit($id)
    {
        $this->toggleAdd = true;
        $this->formEdit = true;
        $this->idFormEdit = $id;
    }

    public function confirmDelete($id)
    {
        // use a simple syntax
        $this->dialog()->confirm([
            'title'       => 'Are you Sure?',
            'description' => 'Delete the information?',
            'acceptLabel' => 'Yes, delete it',
            'method'      => 'delete',
            'params'      => $id,
        ]);
    }

    public function delete(Gejala $gejala)
    {

        $gejala->delete();

        $this->notification()->success(
            $title = 'Berhasil!',
            $description = 'Gejala telah dihapus'
        );
    }

    public function render()
    {
        return view('livewire.gejala.index-gejala', [
            'gejalas' => Gejala::search($this->search)->paginate($this->paginate),
        ]);
    }

    #[On('closedForm')]
    public function closedForm()
    {
        $this->toggleAdd = false;
        $this->formEdit = false;
    }

    #[On('storedDataGejala')]
    public function storedDataGejala()
    {
        $this->toggleAdd = false;

        $this->notification()->success(
            $title = 'Berhasil!',
            $description = 'Gejala baru ditambahkan'
        );
    }

    #[On('updatedGejala')]
    public function updatedGejala()
    {
        $this->toggleAdd = false;
        $this->formEdit = false;

        $this->notification()->success(
            $title = 'Berhasil!',
            $description = 'Data gejala diperbarui'
        );
    }
}
