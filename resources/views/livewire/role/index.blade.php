<div class="space-y-6">

    <!-- Container -->
    <div class="kt-container-fluid">
        <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
            <div class="flex flex-col justify-center gap-2">
                <h1 class="text-xl font-medium leading-none text-mono">
                    Roles ({{ $roles->count() }})
                </h1>
                <div class="flex items-center gap-2 text-sm font-normal text-secondary-foreground">
                    Manage roles and permissions.
                </div>
            </div>
            <div class="flex items-center gap-2.5">

                <a class="kt-btn kt-btn-sm kt-btn-primary" href="{{ route('roles.create') }}">
                    Tambah Roles
                </a>
            </div>
        </div>
    </div>
    <!-- End of Container -->
    <!-- Container -->
    <div class="kt-container-fluid">
        <div class="grid gap-5 lg:gap-7.5">
            <div class="kt-card kt-card-grid min-w-full">
                <div class="kt-card-header py-5 flex-wrap gap-2">
                    <h3 class="kt-card-title">
                        Team Members
                    </h3>
                    <div class="flex items-center gap-6">
                        <div class="kt-input">
                            <i class="ki-filled ki-magnifier">
                            </i>
                            <input data-kt-datatable-search="#team_members_table"
                                wire:model.live.debounce.500ms="search" placeholder="Search users" type="text"
                                value="" />
                            @if (!empty($search))
                                <button type="button" wire:click="$set('search', '')"
                                    class="absolute right-3 top-2.5 text-gray-400 hover:text-gray-600">
                                    <!-- X Icon -->
                                    <i class="ki-filled ki-cross-circle"></i>
                                </button>
                            @endif
                        </div>
                                                {{-- Per Page --}}
                        <select wire:model="perPage"
                            class="ml-4 text-sm border-gray-300 rounded-md shadow-sm focus:ring focus:ring-primary focus:outline-none">
                            @foreach ([10, 25, 50, 100] as $size)
                                <option value="{{ $size }}">{{ $size }}</option>
                            @endforeach
                        </select>
                    </div>
 
                </div>
                <div class="kt-card-content">
                    <div class="grid" data-kt-datatable="true" data-kt-datatable-page-size="10"
                        id="team_members_table">
                        <div class="kt-scrollable-x-auto">
                            <table class="kt-table kt-table-border" data-kt-datatable-table="true" id="members_table">
                                <thead>
                                    <tr>
                                        <th class="w-[60px] text-center">
                                            <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-check="true"
                                                type="checkbox">
                                            </input>
                                        </th>
                                        <th class="min-w-[300px]">
                                            <span class="kt-table-col">
                                                <span class="kt-table-col-label">
                                                    Name
                                                </span>
                                                <span class="kt-table-col-sort">
                                                </span>
                                            </span>
                                        </th>
                                        <th class="text-secondary-foreground font-normal min-w-[220px]">
                                            Permission
                                        </th>

                                        <th class="min-w-[165px]">
                                            <span class="kt-table-col">
                                                <span class="kt-table-col-label">
                                                    Created
                                                </span>
                                                <span class="kt-table-col-sort">
                                                </span>
                                            </span>
                                        </th>
                                        <th class="min-w-[165px]">
                                            <span class="kt-table-col">
                                                <span class="kt-table-col-label">
                                                    Updated
                                                </span>
                                                <span class="kt-table-col-sort">
                                                </span>
                                            </span>
                                        </th>
                                        <th class="w-[60px]">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($roles as $role)
                                        <tr>
                                            <td class="text-center">
                                                <input class="kt-checkbox kt-checkbox-sm"
                                                    data-kt-datatable-row-check="true" type="checkbox" value="1" />
                                            </td>
                                            <td>
                                                <div class="flex items-center gap-2.5">
                                                    <div class="">
                                                        <img class="h-9 rounded-full"
                                                            src="assets/media/avatars/300-3.png" />
                                                    </div>
                                                    <div class="flex flex-col gap-0.5">
                                                        <a class="leading-none font-medium text-sm text-mono hover:text-primary"
                                                            href="#">
                                                            {{ $role->name }}
                                                        </a>
                                                        <span class="text-xs text-secondary-foreground font-normal">
                                                            26 tasks
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex flex-wrap gap-2.5 mb-2">
                                                    {{ $role->permissions_count }} Permissions
                                                </div>
                                            </td>

                                            <td>
                                                <span class="kt-badge kt-badge-outline kt-badge-success">
                                                    {{ $role->created_at->format('Y-m-d H:i:s') }}
                                                </span>
                                            </td>
                                            <td class="text-foreground font-normal">
                                                {{ $role->updated_at->format('Y-m-d H:i:s') }}
                                            </td>
                                            <td class="w-[60px]">
                                                <div class="kt-menu" data-kt-menu="true">
                                                    <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px"
                                                        data-kt-menu-item-placement="bottom-end"
                                                        data-kt-menu-item-placement-rtl="bottom-start"
                                                        data-kt-menu-item-toggle="dropdown"
                                                        data-kt-menu-item-trigger="click">
                                                        <button
                                                            class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                                                            <i class="ki-filled ki-dots-vertical text-lg">
                                                            </i>
                                                        </button>
                                                        <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]"
                                                            data-kt-menu-dismiss="true">

                                                            <div class="kt-menu-item">
                                                                <a class="kt-menu-link"
                                                                    href="{{ route('roles.edit', $role->uuid) }}">
                                                                    <span class="kt-menu-icon">
                                                                        <i class="ki-filled ki-pencil">
                                                                        </i>
                                                                    </span>
                                                                    <span class="kt-menu-title">
                                                                        Edit
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="kt-menu-item">

                                                                <!-- Delete -->
                                                                @if ($role->is_default)
                                                                    <button class="kt-menu-link" href="#">
                                                                        <span class="kt-menu-icon">
                                                                            <i class="ki-filled ki-trash">
                                                                            </i>
                                                                        </span>
                                                                        <span class="kt-menu-title">
                                                                            Remove
                                                                        </span>
                                                                    </button>
                                                                @else
                                                                    <button class="kt-menu-link" href="#"
                                                                        wire:click="confirmDelete({{ $role->id }})">
                                                                        <span class="kt-menu-icon">
                                                                            <i class="ki-filled ki-trash">
                                                                            </i>
                                                                        </span>
                                                                        <span class="kt-menu-title">
                                                                            Hapus
                                                                        </span>
                                                                    </button>
                                                                @endif
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="p-4 text-center text-gray-500">
                                                No roles found.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="kt-card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-secondary-foreground text-sm font-medium">
                            <div class="flex items-center gap-2 order-2 md:order-1">
                                Show
                                <select class="kt-select w-16" data-kt-datatable-size="true" data-kt-select=""
                                    name="perpage">

                                </select>
                                per page
                            </div>
                            <div class="flex items-center gap-4 order-1 md:order-2">
                                <span data-kt-datatable-info="true">
                                </span>
                                <div class="kt-datatable-pagination" data-kt-datatable-pagination="true">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End of Container -->

    @livewire('actions.delete-action')
</div>
