<?php

namespace App\Livewire\Role;

use App\Livewire\Forms\RoleForm;
use App\Models\Role;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.dash')]
class Edit extends Component
{
    public RoleForm $form;

    public function mount(Role $role)
    {
        $this->form->initialize($role);
    }

    // Common Function
    public function onPermissionToggled($checked, $permission)
    {
        if ($checked) {
            $this->form->permissions[] = $permission;
        } else {
            $this->form->permissions = array_values(array_diff($this->form->permissions, [$permission]));
        }

        $this->form->updatedFormPermissions();
    }

    public function toggleGroup(string $group): void
    {
        $this->form->toggleGroup($group);
    }

    public function toggleSelectAll()
    {
        $this->form->toggleSelectAll();
    }

    // Magic method
    public function updatedFormPermissions()
    {
        $this->form->updatedFormPermissions();
    }

    public function updatedFormSelectAll($selectAll)
    {
        $this->form->updatedFormSelectAll($selectAll);
    }

    public function save()
    {
        $this->form->update();
        return redirect()->route('roles.index')->with('success', 'Role updated.');
    }

    public function render()
    {
        return view('livewire.role.edit');
    }
}
