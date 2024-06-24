<?php

namespace App\Livewire\Penyakit;

use App\Models\Penyakit;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;
use Illuminate\Support\Facades\Storage;

#[Title('Penyakit')]
class IndexPenyakit extends Component
{
    use WithPagination, Actions;

    public $paginate = 10;
    public $toggleAdd;
    public $formEdit = false;
    public $idFormEdit;

    #[Url(as: 'q')]
    public $search = '';

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

    public function delete(Penyakit $penyakit)
    {
        if ($penyakit->image) {
            Storage::delete($penyakit->image);
        }

        $penyakit->delete();

        $this->notification()->success(
            $title = 'Berhasil!',
            $description = 'Data penyakit telah dihapus'
        );
    }

    public function openFormEdit($id)
    {
        $this->toggleAdd = true;
        $this->formEdit = true;
        $this->idFormEdit = $id;
    }

    public function render()
    {
        return view('livewire.penyakit.index-penyakit', [
            'penyakits' => Penyakit::latest()->search($this->search)->paginate($this->paginate),
        ]);
    }

    #[On('closedForm')]
    public function closedForm()
    {
        $this->toggleAdd = false;
        $this->formEdit = false;
    }

    #[On('storedDataPenyakit')]
    public function storedDataPenyakit()
    {
        $this->toggleAdd = false;


        $this->notification()->success(
            $title = 'Berhasil!',
            $description = 'Penyakit baru ditambahkan'
        );
    }

    #[On('updatedPenyakit')]
    public function updatedPenyakit()
    {
        $this->toggleAdd = false;
        $this->formEdit = false;

        $this->notification()->success(
            $title = 'Berhasil!',
            $description = 'Data penyakit diperbarui'
        );
    }
}
