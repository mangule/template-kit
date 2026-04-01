<?php

namespace App\Livewire\Role;

use App\Models\Role;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.dash')]
class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 10;

    protected $listeners = ['deleted' => 'refreshComponent'];

    public function refreshComponent()
    {
        $this->resetPage();
    }

    public function confirmDelete($id)
    {
        $this->dispatch(
            'delete:confirm',
            modelId: $id,
            modelClass: Role::class,
            title: 'Hapus Role',
            message: 'Anda yakin ingin menghapus role ini?'
        );
    }

    public function render()
    {
        $roles = Role::withCount('permissions')
            ->where('name', 'like', "%{$this->search}%")
            ->paginate($this->perPage);
        return view('livewire.role.index', compact('roles'));
    }
}
