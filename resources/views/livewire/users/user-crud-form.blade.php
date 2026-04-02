<div class="kt-container-fluid">
    <div class="mx-auto max-w-3xl">
        <div class="kt-card w-full">
            <div class="kt-card-content flex flex-col gap-6 p-6 md:p-10">
                <div class="space-y-2">
                    <h1 class="text-xl font-medium leading-none text-mono">
                        @if ($mode === 'view')
                            User detail
                        @elseif (isset($formData['id']))
                            Update user
                        @else
                            Create user
                        @endif
                    </h1>
                    <p class="text-sm font-normal text-secondary-foreground">
                        Fill up the form below.
                    </p>
                </div>

                <div class="h-px w-full bg-border"></div>

                <livewire:common.custom-form
                    :fields="$formFields"
                    submitEvent="save-user-form-crud"
                    :form-field-data="$formData"
                    :key="($formData['id'] ?? 'new') . '-' . $mode"
                    :isView="$isView"
                />

                <div class="flex flex-wrap items-center justify-end gap-2.5 pt-2">
                    <a
                        href="{{ route('users.manage') }}"
                        wire:navigate
                        class="kt-btn kt-btn-sm kt-btn-outline"
                    >
                        Back to list
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
