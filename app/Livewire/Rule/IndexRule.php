<?php

namespace App\Livewire\Rule;

use App\Models\Rule;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class IndexRule extends Component
{
    use WithPagination, Actions;


    #[Url(as: 'q')]
    public $search = '';
    public $paginate = 10;

    public $toggleAdd;
    public $formEdit = false;
    public $idFormEdit;

    public function confirmDelete($id)
    {
        $this->dialog()->confirm([
            'title'       => 'Are you Sure?',
            'description' => 'Delete the information?',
            'acceptLabel' => 'Yes, delete it',
            'method'      => 'delete',
            'params'      => $id,
        ]);
    }

    public function delete(Rule $rule)
    {
        $rule->delete();

        $this->notification()->success(
            $title = 'Berhasil!',
            $description = 'Rule telah dihapus'
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
        return view('livewire.rule.index-rule', [
            'rules' => Rule::latest()->search($this->search)->paginate($this->paginate)
        ]);
    }

    #[On('closedForm')]
    public function closedForm()
    {
        $this->toggleAdd = false;
        $this->formEdit = false;
    }

    #[On('createdRule')]
    public function createdRule()
    {
        $this->toggleAdd = false;

        $this->notification()->success(
            $title = 'Berhasil!',
            $description = 'Rule baru ditambahkan'
        );
    }

    #[On('updatedRule')]
    public function updatedRule()
    {
        $this->toggleAdd = false;
        $this->formEdit = false;

        $this->notification()->success(
            $title = 'Berhasil!',
            $description = 'Rule telah diperbarui'
        );
    }
}
