<div class="space-y-6">

    <div class="relative mb-4 w-full">
        <h1 class="text-2xl font-semibold text-gray-900">
            {{ __('Users Management') }}
        </h1>
        <p class="text-sm text-muted mt-1 mb-4">
            {{ __('Manage users from here') }}
        </p>

        <div class="h-px bg-border"></div>
    </div>

    {{-- Add user --}}
    <div class="text-end mb-4">
        <button
            type="button"
            class="kt-btn kt-btn-primary inline-flex items-center gap-2"
            wire:click="$dispatch('open-modal', { modalName: 'user-form-modal', actionType: 'create' })"
        >
            {{-- icon bisa pakai lucide/heroicon sesuai setup Anda --}}
            <span class="inline-flex h-4 w-4 items-center justify-center rounded-full bg-white/10">
                +
            </span>
            <span>Add User</span>
        </button>
    </div>

    {{-- User form component (modal) --}}
    <livewire:users.user-form />

    {{-- Common Table Component --}}
    <livewire:common.custom-table
        :columns="$tableColumns"
        :model-class="$modelClass"
        :per-page="$perPage"
        :order-by-key="$orderByKey"
        :sort-order="$sortOrder"
        actionEvent="users-table-action"
    />
</div>
