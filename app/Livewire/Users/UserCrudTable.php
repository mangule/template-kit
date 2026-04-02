<?php

declare(strict_types=1);

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.dash')]
class UserCrudTable extends Component
{
    /**
     * Columns configuration for the reusable table component.
     *
     * @var array<int, array<string, mixed>>
     */
    public array $tableColumns = [
        [
            'label' => '#',
            'type' => 'index',
            'field' => 'id',
        ],
        [
            'label' => 'Name',
            'type' => 'field',
            'field' => 'name',
        ],
        [
            'label' => 'Email',
            'type' => 'field',
            'field' => 'email',
        ],
        [
            'label' => 'Created At',
            'type' => 'date',
            'field' => 'created_at',
            'format' => 'diffForHumans',
            'class' => 'whitespace-nowrap',
        ],
        [
            'label' => 'Actions',
            'type' => 'actions',
            'class' => 'text-center w-48',
            'actions' => [
                [
                    'label' => 'View',
                    'icon' => 'eye',
                    'color' => 'sky',
                    'variant' => 'primary',
                    'type' => 'view',
                    'class' => 'kt-btn-outline',
                ],
                [
                    'label' => 'Edit',
                    'icon' => 'pencil',
                    'color' => 'blue',
                    'variant' => 'primary',
                    'type' => 'edit',
                    'class' => 'kt-btn-primary',
                ],
                [
                    'label' => 'Delete',
                    'icon' => 'trash',
                    'color' => 'red',
                    'variant' => 'primary',
                    'type' => 'delete',
                    'class' => 'kt-btn-outline text-destructive hover:bg-destructive/10 border-destructive/30',
                ],
            ],
        ],
    ];

    /**
     * Model class to be paginated by `custom-table`.
     */
    public string $modelClass = User::class;

    public int $perPage = 5;
    public string $orderByKey = 'id';
    public string $sortOrder = 'desc';

    /**
     * Redirect to create form page.
     */
    public function goCreate(): void
    {
        $this->redirect(route('users.manage.form', ['mode' => 'create']), navigate: true);
    }

    /**
     * Handle action click coming from the reusable table component.
     *
     * @param array<string, mixed> $props
     */
    #[On('users-crud-table-action')]
    public function handleTableAction(array $props): void
    {
        $actionType = $props['type'] ?? null;
        $rowId = $props['rowId'] ?? null;

        if (! is_numeric($rowId)) {
            return;
        }

        $userId = (int) $rowId;
        if ($userId <= 0) {
            return;
        }

        if (! is_string($actionType)) {
            return;
        }

        if ($actionType === 'delete') {
            $user = User::find($userId);
            if (! $user) {
                $this->dispatch('toast', type: 'error', message: 'User not found.');
                return;
            }

            $user->delete();
            $this->dispatch('toast', type: 'success', message: 'User deleted successfully.');

            $this->redirect(route('users.manage'), navigate: true);
            return;
        }

        if ($actionType === 'view' || $actionType === 'edit') {
            $this->redirect(
                route('users.manage.form', ['mode' => $actionType, 'id' => $userId]),
                navigate: true
            );
        }
    }

    public function render()
    {
        return view('livewire.users.users-table');
    }
}

