<?php

namespace App\Livewire\Diagnosa;

use App\Models\Diagnosa;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

#[Title('Diagnosa')]
class IndexDiagnosa extends Component
{
    use WithPagination, Actions;

    public $paginate = 10;

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

    public function delete(Diagnosa $diagnosa)
    {

        $diagnosa->delete();

        $this->notification()->success(
            $title = 'Berhasil!',
            $description = 'Diagnosa telah dihapus'
        );
    }

    public function render()
    {
        if (auth()->user()->role == 'admin') {
            $diagnosas = Diagnosa::search($this->search)->latest()->paginate($this->paginate);
        } else {
            $diagnosas = Diagnosa::where('user_id', auth()->user()->id)->search($this->search)->latest()->paginate($this->paginate);
        }

        return view('livewire.diagnosa.index-diagnosa', [
            'diagnosas' => $diagnosas
        ]);
    }
}
