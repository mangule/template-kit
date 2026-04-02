<?php

declare(strict_types=1);

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.dash')]
class UserCrudForm extends Component
{
    /**
     * Form field definitions used by `custom-form`.
     *
     * @var array<string, mixed>
     */
    public array $formFields = [
        'fields' => [
            [
                'type' => 'input',
                'name' => 'name',
                'label' => 'Full Name',
                'placeholder' => 'Enter your full name',
                'validation' => 'required|string|max:255',
            ],
            [
                'type' => 'input',
                'name' => 'email',
                'label' => 'Email Address',
                'placeholder' => 'Enter your email address',
                'validation' => 'required|email|unique:users,email',
            ],
            [
                'type' => 'input',
                'name' => 'phone_number',
                'label' => 'Phone Number',
                'placeholder' => 'Enter your phone number',
                'validation' => 'required|digits:10',
            ],
            [
                'type' => 'textarea',
                'name' => 'description',
                'label' => 'Short Description',
                'placeholder' => 'Enter a short description',
                'validation' => 'nullable|string|max:255',
                'rows' => 2,
            ],
            [
                'type' => 'select',
                'name' => 'nationality',
                'label' => 'Nationality',
                'placeholder' => 'Select nationality',
                'validation' => 'required|string',
                'options' => [
                    'india' => 'India',
                    'usa' => 'USA',
                ],
            ],
            [
                'type' => 'image',
                'name' => 'avatar',
                'label' => 'Profile Picture',
                'validation' => 'nullable|image|max:2048',
                'info' => 'Maxium file size 2 MB allowed.',
                'accept' => 'image/*',
                'uploadDirectory' => 'avatars',
            ],
        ],
        'buttons' => [
            [
                'type' => 'submit',
                'label' => 'Create',
                'variant' => 'primary',
                'icon' => 'document-plus',
                'color' => 'blue',
            ],
        ],
    ];

    /**
     * Data currently bound to the form.
     *
     * @var array<string, mixed>
     */
    public array $formData = [];

    /**
     * If true, inputs and submit button will be disabled.
     */
    public bool $isView = false;

    /**
     * Current mode: create|edit|view.
     */
    public string $mode = 'create';

    /**
     * The selected user id for edit/view mode.
     */
    public ?int $userId = null;

    /**
     * Initialize form page from route parameters.
     */
    public function mount(string $mode = 'create', ?int $id = null): void
    {
        $mode = strtolower($mode);
        if (! in_array($mode, ['create', 'edit', 'view'], true)) {
            $mode = 'create';
        }

        $this->mode = $mode;

        if ($mode === 'create') {
            $this->isView = false;
            $this->userId = null;
            $this->formData = [];
            return;
        }

        if ($id === null) {
            $this->dispatch('toast', type: 'error', message: 'Missing user id.');
            $this->redirect(route('users.manage'), navigate: true);
            return;
        }

        $user = User::find($id);
        if (! $user) {
            $this->dispatch('toast', type: 'error', message: 'User not found.');
            $this->redirect(route('users.manage'), navigate: true);
            return;
        }

        $this->userId = $user->id;
        $this->isView = $mode === 'view';

        // Seed the form fields.
        $this->formData = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'phone_number' => $user->phone_number,
            'description' => $user->description,
            'nationality' => $user->nationality,
            'avatar' => $user->avatar,
        ];
    }

    /**
     * Save handler for `custom-form`.
     *
     * @param array<string, mixed> $formInputs
     */
    #[On('save-user-form-crud')]
    public function saveUserForm(array $formInputs): void
    {
        if ($this->isView) {
            $this->dispatch('toast', type: 'error', message: 'Cannot save in view mode.');
            return;
        }

        // Update flow
        if ($this->mode === 'edit' && $this->userId !== null) {
            $user = User::find($this->userId);
            if (! $user) {
                $this->dispatch('toast', type: 'error', message: 'User not found.');
                $this->redirect(route('users.manage'), navigate: true);
                return;
            }

            $user->update($formInputs);
            $this->dispatch('toast', type: 'success', message: 'User updated successfully.');

            $this->redirect(route('users.manage'), navigate: true);
            return;
        }

        // Create flow
        $formInputs['password'] = Hash::make(Str::random(6));
        $user = User::create($formInputs);

        if (! $user) {
            $this->dispatch('toast', type: 'error', message: 'Failed to create user.');
            return;
        }

        $this->dispatch('toast', type: 'success', message: 'User created successfully.');
        $this->redirect(route('users.manage'), navigate: true);
    }

    public function render()
    {
        return view('livewire.users.user-crud-form');
    }
}

