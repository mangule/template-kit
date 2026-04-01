{{-- User Form Modal (Metronic / KTUI) --}}
<div
    class="kt-modal kt-modal-center"
    data-kt-modal="true"
    id="user-form-modal"
>
    <div class="kt-modal-content max-w-[800px] top-[10%]">
        <div class="kt-modal-header">
            <h3 class="kt-modal-title text-base font-semibold">
                {{ $isView ? 'User Detail' : (isset($formData['id']) ? 'Update User' : 'Create User') }}
            </h3>

            <button
                type="button"
                class="kt-modal-close"
                aria-label="Close modal"
                data-kt-modal-dismiss="#user-form-modal"
            >
                {{-- icon close bawaan KTUI --}}
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    aria-hidden="true"
                >
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
        </div>

        <div class="kt-modal-body">
            <p class="text-sm text-muted mb-4">
                Create a new user by filling up the form below.
            </p>

            {{-- Common form component --}}
            <livewire:common.custom-form
                :fields="$formFields"
                submitEvent="save-user-form"
                :form-field-data="$formData"
                :key="($formData['id'] ?? 'new') . ($isView ? '-view' : '-edit')"
                :isView="$isView"
            />
        </div>
    </div>
</div>
