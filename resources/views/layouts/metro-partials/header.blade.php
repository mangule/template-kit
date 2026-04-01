<!-- Header -->
<header class="kt-header fixed end-0 start-0 top-0 z-10 flex shrink-0 items-stretch bg-background" data-kt-sticky="true"
    data-kt-sticky-class="border-b border-border" data-kt-sticky-name="header" id="header">
    <!-- Container -->
    <div class="kt-container-fluid flex items-stretch justify-between lg:gap-4" id="headerContainer">
        <!-- Mobile Logo -->
        <div class="-ms-1 flex items-center gap-2.5 lg:hidden">
            <a class="shrink-0" href="html/demo1.html">
                <img class="max-h-[25px] w-full" src="{{ asset('assets/media/app/mini-logo.svg') }}" />
            </a>
            <div class="flex items-center">
                <button class="kt-btn kt-btn-icon kt-btn-ghost" data-kt-drawer-toggle="#sidebar">
                    <i class="ki-filled ki-menu">
                    </i>
                </button>
                <button class="kt-btn kt-btn-icon kt-btn-ghost" data-kt-drawer-toggle="#mega_menu_wrapper">
                    <i class="ki-filled ki-burger-menu-2">
                    </i>
                </button>
            </div>
        </div>
        <!-- End of Mobile Logo -->
        <!-- Breadcrumbs -->
        <div class="flex [.kt-header_&]:below-lg:hidden items-center gap-1.25 text-xs lg:text-sm font-medium mb-2.5 lg:mb-0 [--kt-reparent-target:#contentContainer] lg:[--kt-reparent-target:#headerContainer] [--kt-reparent-mode:prepend] lg:[--kt-reparent-mode:prepend]"
            data-kt-reparent="true">
            <span class="text-secondary-foreground">
                My Account
            </span>
            <i class="ki-filled ki-right text-muted-foreground text-[10px]">
            </i>
            <span class="text-secondary-foreground">
                Account Home
            </span>
            <i class="ki-filled ki-right text-muted-foreground text-[10px]">
            </i>
            <span class="text-mono font-medium">
                Ini breadcumbs
            </span>
        </div>
        <!-- End of Breadcrumbs -->
        {{-- <livewire:shared.mega-menu /> --}}
        <!-- Topbar -->
        <div class="flex items-center gap-2.5">
            {{-- <livewire:shared.topbar-search-modal /> --}}
            <livewire:shared.topbar-notification-dropdown />
            <livewire:shared.topbar-chat />
            <livewire:shared.topbar-apps />
            {{-- <livewire:shared.topbar-user-dropdown /> --}}
            @include('layouts.metro-partials.topbar-user')
        </div>
        <!-- End of Topbar -->
    </div>
    <!-- End of Container -->
</header>
<!-- End of Header -->
