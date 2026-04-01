<!DOCTYPE html>
<html class="h-full" data-kt-theme="true" data-kt-theme-mode="light" dir="ltr" lang="en">

<head>

    @include('layouts.partials.head', ['title' => $title ?? "Metronic"])
    @livewireStyles
</head>

<body class="antialiased flex h-full text-base text-foreground bg-background">
    <!-- Theme Mode -->
    <livewire:shared.theme-toggle />
    <!-- End of Theme Mode -->
    <!-- Page -->
    <style>
        .branded-bg {
            background-image: url('assets/media/images/2600x1600/2.png');
        }

        .dark .branded-bg {
            background-image: url('assets/media/images/2600x1600/2-dark.png');
        }
    </style>
    <div class="grid lg:grid-cols-2 grow">
        {{ $slot }}
    </div>
    <!-- End of Page -->
    <!-- Scripts -->
    @include('layouts.partials.scripts')
    @livewireScripts
    <!-- End of Scripts -->
</body>

</html>
