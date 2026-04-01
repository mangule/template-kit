<div x-data="{ show: @entangle('showConfirm') }" x-cloak>
    <template x-if="show">
        <div
            x-show="show"
            x-transition.opacity.duration.200ms
            @keydown.escape.window="show = false"
            @click="show = false"
            class="fixed inset-0 z-50 bg-black/30 backdrop-blur-sm flex items-center justify-center"
        >

            <!-- Modal -->
            <div
                @click.stop
                x-transition.scale.duration.200ms
                class="bg-white rounded-lg shadow-xl w-96 p-6"
            >
                <!-- Title -->
                <h2 class="text-lg font-semibold mb-4">
                    {{ $title ?? 'Delete confirmation' }}
                </h2>

                <!-- Message -->
                <p class="text-gray-700 mb-6">
                    {{ $message ?? 'Are you sure you want to delete this item?' }}
                </p>

                <!-- Actions -->
                <div class="flex justify-end space-x-2">

                    <!-- Cancel -->
                    <button
                        @click="show = false"
                        class="px-4 py-2 text-sm bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg">
                        Cancel
                    </button>

                    <!-- Delete -->
                    <button
                        wire:click="delete"
                        class="px-4 py-2 text-sm text-white rounded-lg">
                        Delete
                    </button>

                </div>
            </div>

        </div>
    </template>
</div>
