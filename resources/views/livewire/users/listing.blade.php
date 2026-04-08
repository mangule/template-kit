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


    <!-- Container -->
    <div class="kt-container-fluid">
        <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
            <div class="flex flex-col justify-center gap-2">
                <h1 class="text-xl font-medium leading-none text-mono">
                    Store Clients
                </h1>
                <div class="flex items-center flex-wrap gap-1.5 font-medium">
                    <span class="text-base text-secondary-foreground">
                        All Members:
                    </span>
                    <span class="text-base text-ray-800 font-semibold me-2">
                        49,053
                    </span>
                    <span class="text-base text-secondary-foreground">
                        Pro Licenses
                    </span>
                    <span class="text-base text-foreground font-semibold">
                        724
                    </span>
                </div>
            </div>
            <div class="flex items-center gap-2.5">
                <a class="kt-btn kt-btn-outline" href="#">
                    Import CSV
                </a>
                <a class="kt-btn kt-btn-primary" href="#">
                    Add Member
                </a>
            </div>
        </div>
    </div>
    <!-- End of Container -->
    <!-- Container -->
    <div class="kt-container-fluid">
        <div class="grid gap-5 lg:gap-7.5">
            <div class="kt-card kt-card-grid min-w-full">
                <div class="kt-card-header flex-wrap gap-2">
                    <h3 class="kt-card-title text-sm">
                        Showing 10 of 49,053 users
                    </h3>
                    <div class="flex flex-wrap gap-2 lg:gap-5">
                        <div class="flex">
                            <label class="kt-input">
                                <i class="ki-filled ki-magnifier">
                                </i>
                                <input placeholder="Search users" type="text" value="" />
                            </label>
                        </div>
                        <div class="flex flex-wrap gap-2.5">
                            <select class="kt-select w-36" data-kt-select="true"
                                data-kt-select-placeholder="Select a status">
                                <option value="1">
                                    Active
                                </option>
                                <option value="2">
                                    Disabled
                                </option>
                                <option value="2">
                                    Pending
                                </option>
                            </select>
                            <select class="kt-select w-36" data-kt-select="true"
                                data-kt-select-placeholder="Select a sort">
                                <option value="1">
                                    Latest
                                </option>
                                <option value="2">
                                    Older
                                </option>
                                <option value="3">
                                    Oldest
                                </option>
                            </select>
                            <button class="kt-btn kt-btn-outline kt-btn-primary">
                                <i class="ki-filled ki-setting-4">
                                </i>
                                Filters
                            </button>
                        </div>
                    </div>
                </div>
                <div class="kt-card-content">
                    <div class="grid" data-kt-datatable="true" data-kt-datatable-page-size="10">
                        <div class="kt-scrollable-x-auto">
                            <table class="kt-table table-auto kt-table-border" data-kt-datatable-table="true">
                                <thead>
                                    <tr>
                                        <th class="w-[60px] text-center">
                                            <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-check="true"
                                                type="checkbox" />
                                        </th>
                                        <th class="min-w-[300px]">
                                            <span class="kt-table-col">
                                                <span class="kt-table-col-label">
                                                    Member
                                                </span>
                                                <span class="kt-table-col-sort">
                                                </span>
                                            </span>
                                        </th>
                                        <th class="min-w-[150px]">
                                            <span class="kt-table-col">
                                                <span class="kt-table-col-label">
                                                    Client ID
                                                </span>
                                                <span class="kt-table-col-sort">
                                                </span>
                                            </span>
                                        </th>
                                        <th class="min-w-[150px]">
                                            <span class="kt-table-col">
                                                <span class="kt-table-col-label">
                                                    Orders Value
                                                </span>
                                                <span class="kt-table-col-sort">
                                                </span>
                                            </span>
                                        </th>
                                        <th class="min-w-[150px]">
                                            <span class="kt-table-col">
                                                <span class="kt-table-col-label">
                                                    Location
                                                </span>
                                                <span class="kt-table-col-sort">
                                                </span>
                                            </span>
                                        </th>
                                        <th class="min-w-[150px]">
                                            <span class="kt-table-col">
                                                <span class="kt-table-col-label">
                                                    Activity
                                                </span>
                                                <span class="kt-table-col-sort">
                                                </span>
                                            </span>
                                        </th>
                                        <th class="w-[100px] text-center">
                                            <span class="kt-table-col">
                                                <span class="kt-table-col-label">
                                                    Invoices
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
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm" data-kt-datatable-row-check="true"
                                                type="checkbox" value="1" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-3.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Tyler Hero
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        tyler.hero@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-23456832
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $27,456.09
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/estonia.svg" />
                                                Estonia
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Current session
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox" value="2" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-1.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Esther Howard
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        esther.howard@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-52967418
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $45,800.90
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/malaysia.svg" />
                                                Malaysia
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Week ago
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox" value="3" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-11.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Jacob Jones
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        jacob.jones@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-43765928
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $63,250.30
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/ukraine.svg" />
                                                Ukraine
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Today, 9:53 am
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox" value="4" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-2.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Cody Fisher
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        cody.fisher@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-29846571
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $80,100.45
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/canada.svg" />
                                                Canada
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Current session
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox" value="5" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-5.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Leslie Alexander
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        leslie.alexander@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-71639482
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $56,500.60
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/india.svg" />
                                                India
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Month ago
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox" value="6" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-4.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Robert Fox
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        robert.fox@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-65438729
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $70,342.25
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/united-states.svg" />
                                                USA
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Today, 15:02
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox" value="7" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-20.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Guy Hawkins
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        guy.hawkins@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-58372914
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $40,210.15
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/turkey.svg" />
                                                Turkey
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Current session
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox" value="8" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-23.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Theresa Webb
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        theresa.webb@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-47298356
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $52,315.70
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/brazil.svg" />
                                                Brasil
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Current session
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox" value="9" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-22.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Marvin McKinney
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        marvin.mckenney@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-83926145
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $68,450.55
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/latvia.svg" />
                                                Latvia
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Week ago
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox" value="10" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-18.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Ronald Richards
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        ronald.richards@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-72649538
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $73,270.80
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/uruguay.svg" />
                                                Uruguay
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Current session
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox" value="11" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-6.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        William Wilson
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        william.wilson@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-98473654
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $28,456.22
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/germany.svg" />
                                                Germany
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Yesterday
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox" value="12" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-7.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Sophia Anderson
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        sophia.anderson@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-23784956
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $46,800.90
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/france.svg" />
                                                France
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            2 days ago
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox" value="13" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-8.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Mason Taylor
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        mason.taylor@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-48723659
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $66,350.30
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/italy.svg" />
                                                Italy
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Today, 8:45 am
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox" value="14" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-9.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Isabella Lee
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        isabella.lee@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-29374685
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $90,150.45
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/japan.svg" />
                                                Japan
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Current session
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox"
                                                value="15" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-10.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        James Martinez
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        james.martinez@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-73649281
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $54,600.60
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/mexico.svg" />
                                                Mexico
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Week ago
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox"
                                                value="16" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-12.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Emily Thomas
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        emily.thomas@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-47682953
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $74,342.25
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/south-korea.svg" />
                                                South Korea
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Today, 14:10
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox"
                                                value="17" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-13.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Benjamin Harris
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        benjamin.harris@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-58394721
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $33,210.15
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/russia.svg" />
                                                Russia
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Current session
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox"
                                                value="18" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-14.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Charlotte Young
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        charlotte.young@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-69583742
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $52,315.70
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/spain.svg" />
                                                Spain
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            3 days ago
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox"
                                                value="19" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-15.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Henry Clark
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        henry.clark@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-98237645
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $68,450.55
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/portugal.svg" />
                                                Portugal
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Week ago
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox"
                                                value="20" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-16.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Amelia Lewis
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        amelia.lewis@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-46537289
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $73,270.80
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/netherlands.svg" />
                                                Netherlands
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Current session
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox"
                                                value="21" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-17.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Lucas Walker
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        lucas.walker@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-29374650
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $57,456.09
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/belgium.svg" />
                                                Belgium
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Yesterday
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox"
                                                value="22" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-19.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Grace Allen
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        grace.allen@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-47682953
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $85,800.90
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/sweden.svg" />
                                                Sweden
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            2 days ago
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox"
                                                value="23" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-21.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Jack Harris
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        jack.harris@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-83926145
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $63,250.30
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/norway.svg" />
                                                Norway
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Today, 11:53 am
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox"
                                                value="24" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-24.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Aiden King
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        aiden.king@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-29846571
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $90,100.45
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/denmark.svg" />
                                                Denmark
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Current session
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox"
                                                value="25" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-25.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Avery Green
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        avery.green@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-71639482
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $56,500.60
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/austria.svg" />
                                                Austria
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Month ago
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox"
                                                value="26" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-26.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Ella White
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        ella.white@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-65438729
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $70,342.25
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/poland.svg" />
                                                Poland
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Today, 15:02
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox"
                                                value="27" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-27.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Henry King
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        henry.king@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-58372914
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $40,210.15
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/switzerland.svg" />
                                                Switzerland
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Current session
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox"
                                                value="28" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-28.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Olivia Green
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        olivia.green@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-47298356
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $52,315.70
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/finland.svg" />
                                                Finland
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Current session
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox"
                                                value="29" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-29.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Mason Lewis
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        mason.lewis@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-83926145
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $68,450.55
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/ireland.svg" />
                                                Ireland
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Week ago
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox"
                                                value="30" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-30.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Sophia Lee
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        sophia.lee@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-72649538
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $73,270.80
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/portugal.svg" />
                                                Portugal
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Current session
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input class="kt-checkbox kt-checkbox-sm"
                                                data-kt-datatable-row-check="true" type="checkbox"
                                                value="31" />
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-7 shrink-0"
                                                    src="assets/media/avatars/300-31.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                        href="#">
                                                        Matthew Martinez
                                                    </a>
                                                    <a class="text-sm text-secondary-foreground font-normal hover:text-primary"
                                                        href="#">
                                                        matthew.martinez@gmail.com
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            MS-23456832
                                        </td>
                                        <td class="text-foreground font-normal">
                                            $27,456.09
                                        </td>
                                        <td>
                                            <div class="flex items-center gap-1.5 class=" font-normal""=""
                                                text-foreground="">
                                                <img alt="" class="rounded-full size-4 shrink-0"
                                                    src="assets/media/flags/estonia.svg" />
                                                Estonia
                                            </div>
                                        </td>
                                        <td class="text-foreground font-normal">
                                            Current session
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                                                    View
                                                </a>
                                            </div>
                                        </td>
                                        <td>
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-search-list">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-file-up">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Export
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
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
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-copy">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Make a copy
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="kt-menu-separator">
                                                        </div>
                                                        <div class="kt-menu-item">
                                                            <a class="kt-menu-link" href="#">
                                                                <span class="kt-menu-icon">
                                                                    <i class="ki-filled ki-trash">
                                                                    </i>
                                                                </span>
                                                                <span class="kt-menu-title">
                                                                    Remove
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
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

            <div class="grid lg:grid-cols-2 gap-5 lg:gap-7.5">
                <div class="kt-card">
                    <div class="kt-card-content px-10 py-7.5 lg:pr-12.5">
                        <div class="flex flex-wrap md:flex-nowrap items-center gap-6 md:gap-10">
                            <div class="flex flex-col items-start gap-3">
                                <h2 class="text-xl font-medium text-mono">
                                    Questions ?
                                </h2>
                                <p class="text-sm text-foreground leading-5.5 mb-2.5">
                                    Visit our Help Center for detailed assistance on billing, payments, and
                                    subscriptions.
                                </p>
                            </div>
                            <img alt="image" class="dark:hidden max-h-[150px]"
                                src="assets/media/illustrations/29.svg" />
                            <img alt="image" class="light:hidden max-h-[150px]"
                                src="assets/media/illustrations/29-dark.svg" />
                        </div>
                    </div>
                    <div class="kt-card-footer justify-center">
                        <a class="kt-link kt-link-underlined kt-link-dashed" href="">
                            Go to Help Center
                        </a>
                    </div>
                </div>
                <div class="kt-card">
                    <div class="kt-card-content px-10 py-7.5 lg:pr-12.5">
                        <div class="flex flex-wrap md:flex-nowrap items-center gap-6 md:gap-10">
                            <div class="flex flex-col items-start gap-3">
                                <h2 class="text-xl font-medium text-mono">
                                    Contact Support
                                </h2>
                                <p class="text-sm text-foreground leading-5.5 mb-2.5">
                                    Need assistance? Contact our support team for prompt, personalized help your queries
                                    & concerns.
                                </p>
                            </div>
                            <img alt="image" class="dark:hidden max-h-[150px]"
                                src="assets/media/illustrations/31.svg" />
                            <img alt="image" class="light:hidden max-h-[150px]"
                                src="assets/media/illustrations/31-dark.svg" />
                        </div>
                    </div>
                    <div class="kt-card-footer justify-center">
                        <a class="kt-link kt-link-underlined kt-link-dashed"
                            href="https://devs.keenthemes.com/unresolved">
                            Contact Support
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Container -->
</div>
