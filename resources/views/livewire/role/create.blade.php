<div class="p-6 space-y-6 w-full mx-auto bg-white shadow rounded-xl">

    <!-- Header -->
    <div class="mb-6 w-full">
        <h1 class="text-2xl font-bold text-gray-900">Roles</h1>
        <p class="text-gray-600 mt-1">Manage your roles here</p>
        <hr class="mt-4 border-gray-200">
    </div>

    <!-- Form -->
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" wire:model.defer="form.name"
                class="mt-1 w-full border border-gray-300 rounded-lg shadow-sm px-3 py-2 focus:ring-2 focus:ring-black focus:outline-none">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Guard Name</label>
            <input type="text" wire:model.defer="form.guard_name"
                class="mt-1 w-full border border-gray-300 rounded-lg shadow-sm px-3 py-2 focus:ring-2 focus:ring-black focus:outline-none">
        </div>
    </div>

    <!-- Select All -->
    <div>
        <div class="flex items-center space-x-2 mb-4">
            <input id="selectAll" type="checkbox" wire:model.live="form.selectAll"
                class="rounded border-gray-300 text-black focus:ring-black">
            <label for="selectAll" class="text-sm font-medium text-gray-700">
                Select All
            </label>
        </div>

        <!-- Permission Groups -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($this->form->groupedPermissions as $group => $permissions)
                <div class="border border-gray-200 p-4 rounded-lg shadow-sm"
                    wire:key="permission-group-{{ $group }}-{{ $form->groupCheckStatus[$group] ? '1' : '0' }}">

                    <!-- Group Header -->
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center space-x-2">
                            <span class="px-2 py-1 text-xs bg-gray-200 rounded">
                                {{ $group }}
                            </span>

                            @if ($form->groupCheckStatus[$group] ?? false)
                                <!-- Check Icon (SVG Tailwind) -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            @endif
                        </div>

                        <input type="checkbox" wire:change="toggleGroup('{{ $group }}')"
                            @checked($form->groupCheckStatus[$group] ?? false) class="rounded border-gray-300 text-black focus:ring-black">
                    </div>

                    <!-- Permissions -->
                    <div class="space-y-2">
                        @foreach ($permissions as $permission)
                            <label class="flex items-center space-x-2 text-sm text-gray-700">
                                <input type="checkbox" value="{{ $permission }}"
                                    wire:change="onPermissionToggled($event.target.checked, '{{ $permission }}')"
                                    @checked($form->isPermissionChecked($permission))
                                    class="rounded border-gray-300 text-black focus:ring-black">
                                <span>{{ $permission }}</span>
                            </label>
                        @endforeach
                    </div>

                </div>
            @endforeach
        </div>
    </div>

    <!-- Actions -->
    <div class="flex justify-end space-x-2">
        <a href="{{ route('roles.index') }}"
            class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg shadow">
            Cancel
        </a>

        <button wire:click="save" class="px-4 py-2 bg-black text-white hover:bg-gray-900 rounded-lg shadow">
            ✔ Create
        </button>
    </div>

</div>
