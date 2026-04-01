<?php
namespace App\Livewire\Users;

use App\Models\User;
use Flux\Flux;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Component;

class UserForm extends Component
{

    public $formFields = [
        'fields'  => [
            [
                'type'        => 'input',
                'name'        => 'name',
                'label'       => 'Full Name',
                'placeholder' => 'Enter your full name',
                'validation'  => 'required|string|max:255',
            ],
            [
                'type'        => 'input',
                'name'        => 'email',
                'label'       => 'Email Address',
                'placeholder' => 'Enter your email address',
                'validation'  => 'required|email|unique:users,email',
            ],
            [
                'type'        => 'input',
                'name'        => 'phone_number',
                'label'       => 'Phone Number',
                'placeholder' => 'Enter your phone number',
                'validation'  => 'required|digits:10',
            ],
            [
                'type'        => 'textarea',
                'name'        => 'description',
                'label'       => 'Short Description',
                'placeholder' => 'Enter a short description',
                'validation'  => 'nullable|string|max:255',
                'rows'        => 2,
            ],
            [
                'type'        => 'select',
                'name'        => 'nationality',
                'label'       => 'Nationality',
                'placeholder' => 'Select nationality',
                'validation'  => 'required|string',
                'options'     => [
                    'india' => 'India',
                    'usa'   => 'USA',
                ],
            ],
            [
                'type'            => 'image',
                'name'            => 'avatar',
                'label'           => 'Profile Picture',
                'validation'      => 'nullable|image|max:2048',
                'info'            => 'Maxium file size 2 MB allowed.',
                'accept'          => 'image/*',
                'uploadDirectory' => 'avatars',
            ],
        ],
        'buttons' => [
            [
                'type'    => 'submit',
                'label'   => 'Create',
                'variant' => 'primary',
                'icon'    => 'document-plus',
                'color'   => 'blue',
            ],
        ],
    ];

    public array $formData = [];
    public $isView         = false;
    #[On('open-modal')]
    public function openModal($modalName = null, $actionType = null): void
    {
        // hanya trigger event ke browser untuk buka modal KTUI
        $this->dispatch(
            'show-user-modal',
            modalName: $modalName ?? 'user-form-modal',
            actionType: $actionType
        );
    }
    #[On('save-user-form')]
    public function saveUser($formInputs): void
    {
        // Update
        if (! empty($this->formData['id'])) {
            $user = User::find($this->formData['id']);
            if ($user) {
                $user->update($formInputs);
                $this->dispatch('toast', type: 'success', message: 'User Updated Successfully!');
            }
        } else {
            // Create
            $formInputs['password'] = Hash::make(Str::random(6));
            $user = User::create($formInputs);
            if ($user) {
                $this->dispatch('toast', type: 'success', message: 'User Created Successfully!');
                $this->resetForm();
            }
        }
        // tutup modal via browser event
        $this->dispatch('hide-user-modal', modalName: 'user-form-modal');
    }
    public function resetForm(): void
    {
        foreach ($this->formFields['fields'] as $field) {
            $this->formData[$field['name']] = in_array($field['type'], ['file', 'image']) ? null : '';
        }
        $this->isView = false;
    }
    #[On('users-table-action')]
    public function actionClick($props): void
    {
        $actionType = $props['type'] ?? null;
        $rowId      = $props['rowId'];
        $eventType  = $props['eventType'] ?? null;
        $modalName  = $props['modalName'] ?? null;
        $user = User::find($rowId);
        if (! $user) {
            return;
        }
        if (in_array($actionType, ['view', 'edit'])) {
            $this->formData = [
                'id'           => $user->id,
                'name'         => $user->name,
                'email'        => $user->email,
                'phone_number' => $user->phone_number,
                'description'  => $user->description,
                'nationality'  => $user->nationality,
                'avatar'       => $user->avatar,
            ];
            $this->isView = $actionType === 'view';
            if ($eventType === 'modal' && ! empty($modalName)) {
                $this->openModal($modalName, $actionType);
            }
        }
    }
    public function render()
    {
        return view('livewire.users.user-form');
    }
}
