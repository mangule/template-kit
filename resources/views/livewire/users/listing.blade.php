<div class="space-y-6">
    <div class="kt-container-fluid">
        <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
            <div class="flex flex-col justify-center gap-2">
                <h1 class="text-xl font-medium leading-none text-mono">
                    {{ __('Users management Modal') }}
                </h1>
                <div class="text-sm font-normal text-secondary-foreground">
                    {{ __('Manage users from here (menggunakan modal)') }}
                </div>
            </div>
            {{-- Add user --}}
            <div class="text-end mb-4">
                <button type="button" class="kt-btn kt-btn-primary inline-flex items-center gap-2"
                    wire:click="$dispatch('open-modal', { modalName: 'user-form-modal', actionType: 'create' })">
                    {{-- icon bisa pakai lucide/heroicon sesuai setup Anda --}}
                    <span class="inline-flex h-4 w-4 items-center justify-center rounded-full bg-white/10">
                        +
                    </span>
                    <span>Add User</span>
                </button>
            </div>
        </div>




        {{-- User form component (modal) --}}
        <livewire:users.user-form />

        {{-- Common Table Component --}}
        <livewire:common.custom-table :columns="$tableColumns" :model-class="$modelClass" :per-page="$perPage" :order-by-key="$orderByKey"
            :sort-order="$sortOrder" actionEvent="users-table-action" />
    </div>
</div>
