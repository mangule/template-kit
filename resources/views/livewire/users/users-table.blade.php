<div class="space-y-6">
    <div class="kt-container-fluid">
        <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
            <div class="flex flex-col justify-center gap-2">
                <h1 class="text-xl font-medium leading-none text-mono">
                    {{ __('Users management Page') }}
                </h1>
                <div class="text-sm font-normal text-secondary-foreground">
                    {{ __('Manage users from here (menggunakan Page)') }}
                </div>
            </div>
            <div class="flex items-center gap-2.5">
                <button
                    type="button"
                    wire:click="goCreate"
                    class="kt-btn kt-btn-sm kt-btn-primary"
                >
                    <i class="ki-filled ki-plus-squared text-base"></i>
                    Add user
                </button>
            </div>
        </div>
    </div>

    <div class="kt-container-fluid">
        <div class="grid gap-5 lg:gap-7.5">
            <div class="kt-card kt-card-grid min-w-full">
                <div class="kt-card-content p-0 md:p-0">
                    <livewire:common.custom-table
                        :columns="$tableColumns"
                        :model-class="$modelClass"
                        :per-page="$perPage"
                        :order-by-key="$orderByKey"
                        :sort-order="$sortOrder"
                        actionEvent="users-crud-table-action"
                    />
                </div>
            </div>
        </div>
    </div>
</div>
