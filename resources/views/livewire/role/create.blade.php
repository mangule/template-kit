<div class="p-6 space-y-6 w-full mx-auto kt-container-fluid">

    <!-- Header -->
    <div class="mb-6">
        <h1 class="text-2xl font-medium text-gray-900">Create Roles</h1>
        <p class="text-gray-600 mt-1">Manage roles and permissions</p>
        <hr class="mt-4 border-gray-200">
    </div>

    <!-- Form -->
    <div class="grid grid-cols-2 gap-4 mb-4 mt-6">
        <div>
            <label class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" wire:model.defer="form.name"
                class="kt-input mt-1 w-full border border-gray-300 rounded-lg shadow-sm px-3 py-2 focus:ring-2 focus:ring-black focus:outline-none">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Guard Name</label>
            <input type="text" wire:model.defer="form.guard_name"
                class="kt-input mt-1 w-full border border-gray-300 rounded-lg shadow-sm px-3 py-2 focus:ring-2 focus:ring-black focus:outline-none">
        </div>
    </div>

    <!-- Select All -->
    <div class="mb-4">
        <div class="flex items-center space-x-2 mb-6 mt-6">
            <input id="selectAll" type="checkbox" wire:model.live="form.selectAll"
                class="kt-checkbox kt-checkbox-sm rounded border-gray-300 text-black focus:ring-black me-2">
            <label for="selectAll" class="text-sm font-medium text-gray-700">
                Select All
            </label>
        </div>

        <!-- Permission Groups -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-6">
            @foreach ($this->form->groupedPermissions as $group => $permissions)
                <div class="border border-gray-200 p-4 rounded-lg shadow-sm"
                    wire:key="permission-group-{{ $group }}-{{ $form->groupCheckStatus[$group] ? '1' : '0' }}">

                    <!-- Group Header -->
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center space-x-2">
                            <span class="px-2 py-1 bg-gray-200 rounded">
                                {{ $group }}
                            </span>

                            @if ($form->groupCheckStatus[$group] ?? false)
                                <!-- Check Icon (SVG Tailwind) -->
                                <i class="ki-filled ki-double-check text-2xl text-green-600"></i>
                            @endif
                        </div>

                        <input type="checkbox" wire:change="toggleGroup('{{ $group }}')"
                            @checked($form->groupCheckStatus[$group] ?? false) class="kt-checkbox kt-checkbox-sm rounded border-gray-300 text-black focus:ring-black">
                    </div>

                    <!-- Permissions -->
                    <div class="space-y-2">
                        @foreach ($permissions as $permission)

                            <div class="flex items-center gap-2">
                                <input type="checkbox" value="{{ $permission }}"
                                    wire:change="onPermissionToggled($event.target.checked, '{{ $permission }}')"
                                    @checked($form->isPermissionChecked($permission)) class="kt-checkbox kt-checkbox-sm" />
                                <label class="kt-label text-sm text-gray-700" for="check">{{ $permission }}</label>
                            </div>
                        @endforeach
                    </div>

                </div>
            @endforeach
        </div>
    </div>

    <!-- Actions -->
    <div class="flex justify-end space-x-2 mt-3">
        <a href="{{ route('roles.index') }}"
            class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg shadow">
            Cancel
        </a>


        <button wire:click="save" type="button"
            class="kt-btn px-4 py-2 bg-black text-white hover:bg-gray-900 rounded-lg shadow">
            <i class="ki-filled ki-double-check text-2xl"></i>
            Save</button </div>
    </div>

</div>
