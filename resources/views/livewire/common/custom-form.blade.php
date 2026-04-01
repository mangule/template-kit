{{-- Common form  --}}
<form wire:submit="handleSubmit" class="space-y-6">
    {{-- Fields --}}
    @foreach ($fields['fields'] as $field)
        @switch($field['type'])
            {{-- 1. Input --}}
            @case('input')
                <div class="space-y-1">
                    <label class="block text-sm font-medium text-foreground">
                        {{ $field['label'] }}
                    </label>
                    <input
                        type="text"
                        @disabled($isView)
                        wire:model.live="formData.{{ $field['name'] }}"
                        placeholder="{{ $field['placeholder'] }}"
                        class="kt-input w-full"
                    >
                    @error('formData.' . $field['name'])
                        <p class="text-xs text-destructive mt-1">{{ $message }}</p>
                    @enderror
                </div>
                @break

            {{-- 2. Select --}}
            @case('select')
                <div class="space-y-1">
                    <label class="block text-sm font-medium text-foreground">
                        {{ $field['label'] }}
                    </label>
                    <select
                        @disabled($isView)
                        wire:model.live="formData.{{ $field['name'] }}"
                        class="kt-input w-full"
                    >
                        <option value="">
                            {{ $field['placeholder'] ?? 'Select option' }}
                        </option>
                        @foreach ($field['options'] as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
                        @endforeach
                    </select>
                    @error('formData.' . $field['name'])
                        <p class="text-xs text-destructive mt-1">{{ $message }}</p>
                    @enderror
                </div>
                @break

            {{-- 3. Textarea --}}
            @case('textarea')
                <div class="space-y-1">
                    <label class="block text-sm font-medium text-foreground">
                        {{ $field['label'] }}
                    </label>
                    <textarea
                        @disabled($isView)
                        wire:model.live="formData.{{ $field['name'] }}"
                        rows="{{ $field['rows'] ?? 2 }}"
                        placeholder="{{ $field['placeholder'] }}"
                        class="kt-input w-full resize-y"
                    ></textarea>
                    @error('formData.' . $field['name'])
                        <p class="text-xs text-destructive mt-1">{{ $message }}</p>
                    @enderror
                </div>
                @break

            {{-- 4. File / Image --}}
            @case('image')
            @case('file')
                <div class="space-y-1">
                    <label class="block text-sm font-medium text-foreground">
                        {{ $field['label'] }}
                    </label>

                    @if (! $isView)
                        <input
                            type="file"
                            wire:model.live="formData.{{ $field['name'] }}"
                            accept="{{ $field['accept'] ?? '' }}"
                            class="block w-full text-sm text-muted file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/5 file:text-primary hover:file:bg-primary/10"
                        >
                        @if (isset($field['info']))
                            <p class="text-xs text-muted mt-1">
                                {{ $field['info'] }}
                            </p>
                        @endif
                    @endif

                    {{-- Preview --}}
                    @if (! empty($formData[$field['name']]))
                        @php
                            $file   = $formData[$field['name']];
                            $isTemp = $file instanceof \Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
                            $isImage = $isTemp
                                ? str_starts_with($file->getMimeType(), 'image')
                                : preg_match('/\.(png|jpe?g|gif|svg)$/i', $file);
                            $url = $isImage ? ($isTemp ? $file->temporaryUrl() : asset('storage/' . $file)) : null;
                        @endphp

                        <div class="mt-2">
                            @if ($isImage && $url)
                                <img
                                    src="{{ $url }}"
                                    alt="Image preview"
                                    class="w-32 h-32 object-cover rounded-lg border"
                                >
                            @elseif($url)
                                <a
                                    href="{{ $url }}"
                                    target="_blank"
                                    class="text-sm text-primary underline"
                                >
                                    {{ is_string($file) ? $file : 'Download file' }}
                                </a>
                            @endif
                        </div>
                    @endif

                    @error('formData.' . $field['name'])
                        <p class="text-xs text-destructive mt-1">{{ $message }}</p>
                    @enderror
                </div>
                @break

            @default
        @endswitch
    @endforeach

    <div class="h-px bg-border"></div>

    {{-- Buttons --}}
    <div class="flex items-center justify-end gap-2 mt-4">
        @foreach ($fields['buttons'] as $button)
            @if (! $isView)
                <button
                    type="{{ $button['type'] }}"
                    class="kt-btn kt-btn-primary"
                >
                    {{ isset($formFieldData['id']) ? 'Update' : $button['label'] }}
                </button>
            @endif
        @endforeach
    </div>
</form>
