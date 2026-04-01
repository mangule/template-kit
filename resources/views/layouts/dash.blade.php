<!DOCTYPE html>
<html class="h-full" data-kt-theme="true" data-kt-theme-mode="light" dir="ltr" lang="en">
    <head>
        @include('layouts.partials.head')
        @livewireStyles
    </head>
    <body class="demo1 kt-sidebar-fixed kt-header-fixed flex h-full bg-background text-base text-foreground antialiased">
        @include('layouts.metro-partials.theme-toggle')

        <!-- Page -->
        <!-- Main -->
        <div class="flex grow">
            @include('layouts.metro-partials.sidebar')

            <!-- Wrapper -->
            <div class="kt-wrapper flex grow flex-col">
                @persist('mega-menu')
                @include('layouts.metro-partials.header')
                @endpersist

                <!-- Content -->
                <main class="grow pt-5" id="content" role="content">
                    {{ $slot }}
                </main>
                <!-- End of Content -->

                @include('layouts.metro-partials.footer')
            </div>
            <!-- End of Wrapper -->
        </div>
        <!-- End of Main -->
        <!-- End of Page -->

        @include('layouts.partials.scripts')
        @livewireScripts

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                // Inisialisasi semua modal KTUI
                if (window.KTModal && typeof KTModal.init === 'function') {
                    KTModal.init();
                }

                // Livewire v3 browser events
                window.addEventListener('show-user-modal', (event) => {
                    const modalName = event.detail.modalName || '#user-form-modal';
                    const selector = modalName.startsWith('#') ? modalName : `#${modalName}`;
                    const el = document.querySelector(selector);

                    if (!el || !window.KTModal) return;

                    const instance = KTModal.getInstance(el) || new KTModal(el, {});
                    instance.show();
                });

                window.addEventListener('hide-user-modal', (event) => {
                    const modalName = event.detail.modalName || '#user-form-modal';
                    const selector = modalName.startsWith('#') ? modalName : `#${modalName}`;
                    const el = document.querySelector(selector);

                    if (!el || !window.KTModal) return;

                    const instance = KTModal.getInstance(el) || new KTModal(el, {});
                    instance.hide();
                });
            });
        </script>
    </body>
</html>
