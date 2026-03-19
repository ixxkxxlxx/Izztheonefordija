<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <!-- Navigation Progress Bar -->
        <div id="nav-progress"></div>

        <div class="min-h-screen bg-gradient-to-br from-soft-pink-50 via-white to-soft-pink-50 pb-20 md:pb-0">
            @include('partials.navbar')

            <!-- Page Heading -->
            @isset($header)
                <header class="navbar-pink shadow-sm">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 view-transition-main">
                @yield('content')
            </main>

            @include('partials.bottom-nav')
            @include('partials.desktop-only')
        </div>

        <script>
            // Navigation feedback and progress bar
            document.addEventListener('click', (e) => {
                const link = e.target.closest('a');
                if (link && 
                    link.href && 
                    link.href.startsWith(window.location.origin) && 
                    !link.href.includes('#') && 
                    !link.target && 
                    !e.metaKey && !e.ctrlKey && !e.shiftKey && !e.altKey) {
                    
                    const progressBar = document.getElementById('nav-progress');
                    if (progressBar) {
                        progressBar.style.opacity = '1';
                        progressBar.classList.remove('complete');
                        progressBar.classList.add('loading');
                    }
                    link.classList.add('is-navigating');
                }
            });

            window.addEventListener('pageshow', (event) => {
                const progressBar = document.getElementById('nav-progress');
                if (progressBar) {
                    progressBar.classList.remove('loading');
                    progressBar.classList.add('complete');
                }
                document.querySelectorAll('.is-navigating').forEach(el => {
                    el.classList.remove('is-navigating');
                });
            });
        </script>
    </body>
</html>
