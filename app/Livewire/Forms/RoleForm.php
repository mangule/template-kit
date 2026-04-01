<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleForm extends Form
{
    public ?Role $role = null;

    public string $name = '';
    public string $guard_name = 'web';
    public array $permissions = [];

    // Handle select all permissions
    public bool $selectAll = false;

    // Handle group check status
    public array $groupCheckStatus = [];
    public array $groupedPermissions = [];

    public function initialize(Role $role): void
    {
        $this->setRole($role);

        $this->permissions = $role->permissions->pluck('name')->toArray();

        // Group permission
        $allPermissions = Permission::pluck('name')->toArray();
        $this->groupedPermissions = collect($allPermissions)
            ->groupBy(function ($item) {
                return explode('.', $item)[0];
            })->toArray();

        // Check select group
        foreach ($this->groupedPermissions as $group => $perms) {
            $this->groupCheckStatus[$group] = $this->isGroupFullyChecked($group);
        }

        // Update togle group
        $this->updatedFormPermissions();
    }

    // Inisialisasi dari Role jika diedit
    public function setRole(Role $role): void
    {
        if ($role->id) {
            $this->role = $role;
            $this->name = $role->name;
            $this->guard_name = $role->guard_name;
            $this->permissions = $role->permissions->pluck('name')->toArray();
        }
    }

    // Untuk create baru
    public function store(): Role
    {
        $role = Role::create([
            'name' => $this->name,
            'guard_name' => $this->guard_name,
        ]);

        $role->syncPermissions($this->permissions);

        return $role;
    }

    // Untuk update
    public function update(): void
    {
        if (!$this->role) {
            throw new \Exception('No role selected to update.');
        }

        $this->role->update([
            'name' => $this->name,
            'guard_name' => $this->guard_name,
        ]);

        $this->role->syncPermissions($this->permissions);
    }

     // Magic Method
    public function updatedFormSelectAll($selectAll)
    {
        if ($selectAll) {
            $this->permissions = Permission::all()->pluck('name')->toArray();
        } else {
            $this->permissions = [];
        }

        // Update togle group
        $this->updatedFormPermissions();
    }

    public function updatedFormPermissions()
    {
        // Handle select all
        $this->updateSelectAllStatus();

        // Handle select group
        $this->updateGroupCheckStatus();
    }

    public function isPermissionChecked(string $permission): bool
    {
        return in_array($permission, $this->permissions);
    }

    public function isGroupFullyChecked($group)
    {
        $groupPermissions = collect($this->groupedPermissions[$group])->values();
        return collect($groupPermissions)
            ->every(fn($perm) => in_array($perm, $this->permissions));
    }

    public function updateSelectAllStatus(): void
    {
        $this->selectAll = count($this->permissions) === Permission::count();
    }

    public function updateGroupCheckStatus()
    {
        foreach ($this->groupedPermissions as $group => $perms) {
            $this->groupCheckStatus[$group] = $this->isGroupFullyChecked($group);
        }
    }

    public function toggleGroup($group)
    {
        $groupPermissions = $this->groupedPermissions[$group] ?? [];
        $currentlyAllChecked = $this->isGroupFullyChecked($group);

        if ($currentlyAllChecked) {
             // Uncheck semua dalam grup
            $this->permissions = array_values(array_filter(
                $this->permissions,
                fn($permission) => !in_array($permission, $groupPermissions)
            ));
        } else {
            // Check semua permission dalam grup (replace)
            $this->permissions = array_values(array_unique(array_merge($this->permissions, $groupPermissions)));
        }

        $this->updatedFormPermissions();
    }

    public function toggleSelectAll()
    {
        $allPermissions = Permission::pluck('name')->toArray();

        if (count($this->permissions) < count($allPermissions)) {
            $this->permissions = $allPermissions;
        } else {
            $this->permissions = [];
        }

        // Update togle group
        $this->updateGroupCheckStatus();
    }
}
