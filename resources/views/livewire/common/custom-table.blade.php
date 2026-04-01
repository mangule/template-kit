<div class="overflow-x-auto border rounded-xl shadow-sm bg-white">
    <table class="w-full table-auto text-sm text-left">
        <thead class="bg-muted text-foreground/80 uppercase text-xs font-semibold border-b">
            <tr>
                @foreach ($columns as $column)
                    <th class="px-4 py-3 {{ $column['class'] ?? '' }}">
                        {{ $column['label'] }}
                    </th>
                @endforeach
            </tr>
        </thead>

        <tbody class="divide-y">
            @forelse ($this->rows as $row)
                <tr class="hover:bg-muted/40 transition-colors">
                    @foreach ($columns as $column)
                        <td class="px-4 py-3 align-middle">
                            @switch($column['type'])
                                @case('index')
                                    {{ $loop->parent->iteration }}
                                    @break

                                @case('field')
                                    {{ data_get($row, $column['field']) }}
                                    @break

                                @case('date')
                                    @if (isset($column['format']) && $column['format'] === 'diffForHumans')
                                        {{ data_get($row, $column['field'])?->diffForHumans() }}
                                    @endif
                                    @break

                                @case('actions')
                                    <div class="flex justify-center gap-2">
                                        @foreach ($column['actions'] as $action)
                                            @php
                                                $action = array_merge($action, ['rowId' => $row->id]);
                                            @endphp

                                            <button
                                                type="button"
                                                wire:click="actionClickHandler({{ json_encode($action) }})"
                                                class="kt-btn kt-btn-sm {{ $action['class'] ?? '' }}"
                                            >
                                                {{-- Bisa ganti dengan icon komponen global, di sini teks saja --}}
                                                {{ $action['label'] }}
                                            </button>
                                        @endforeach
                                    </div>
                                    @break

                                @default
                            @endswitch
                        </td>
                    @endforeach
                </tr>
            @empty
                <tr>
                    <td colspan="{{ count($columns) }}" class="px-4 py-6 text-center">
                        <div class="flex items-center justify-center text-destructive text-sm gap-2">
                            <span class="inline-flex h-5 w-5 items-center justify-center rounded-full border border-destructive">
                                !
                            </span>
                            <span>No data found!</span>
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    @if ($this->rows->hasPages())
        <div class="px-4 py-3 border-t bg-muted/40">
            {{ $this->rows->links() }}
        </div>
    @endif
</div>
