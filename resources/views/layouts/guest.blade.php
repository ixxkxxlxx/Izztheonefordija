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
        @stack('head')
        @stack('styles')

        <style>
            html, body {
                margin: 0;
                padding: 0;
            }
            .bg-wedding-stripes {
                background-image: url('{{ asset('images/wedding-bg2.jpg') }}');
                background-size: cover;
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                min-height: 100vh;
            }
            .scallop-l, .scallop-r {
                display: none;
            }

            @if(request()->routeIs('home'))
            /* Splash Screen */
            #splash-screen {
                position: fixed;
                inset: 0;
                background-color: #fffafb; /* soft-pink-50 equivalent */
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                z-index: 9999;
                transition: opacity 1s ease-in-out, visibility 1s ease-in-out;
            }
            #splash-screen.fade-out {
                opacity: 0;
                visibility: hidden;
                pointer-events: none;
            }
            .splash-content {
                text-align: center;
                animation: scale-up 1.2s ease-out forwards;
            }
            @keyframes scale-up {
                from { opacity: 0; transform: scale(0.8); }
                to { opacity: 1; transform: scale(1); }
            }
            .splash-title {
                font-family: 'Great Vibes', cursive;
                font-size: 5rem;
                color: #be185d; /* soft-pink-700 */
                margin-bottom: 1rem;
                filter: drop-shadow(0 4px 6px rgba(0,0,0,0.1));
            }
            .splash-subtitle {
                font-family: 'Playfair Display', serif;
                font-size: 1.2rem;
                letter-spacing: 0.2em;
                color: #9d174d; /* soft-pink-800 */
                text-transform: uppercase;
                opacity: 0.8;
            }
            .splash-footer {
                position: absolute;
                bottom: 2rem;
                left: 0;
                right: 0;
                text-align: center;
                animation: fade-in-up 1.5s ease-out 0.5s both;
            }
            @keyframes fade-in-up {
                from { opacity: 0; transform: translateY(10px); }
                to { opacity: 0.6; transform: translateY(0); }
            }
            @endif

            /* Animated particles background */
            .particles {
                animation: float 20s ease-in-out infinite;
            }
            @keyframes float {
                0%, 100% { transform: translateY(0) rotate(0deg); }
                50% { transform: translateY(-20px) rotate(180deg); }
            }

            /* Bounce animation */
            .animate-bounce-slow {
                animation: bounce-slow 3s ease-in-out infinite;
            }
            @keyframes bounce-slow {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-10px); }
            }

            /* Pulse animation */
            .animate-pulse-slow {
                animation: pulse-slow 2s ease-in-out infinite;
            }
            @keyframes pulse-slow {
                0%, 100% { opacity: 1; transform: scale(1); }
                50% { opacity: 0.9; transform: scale(1.05); }
            }

        </style>
    </head>
    <body class="font-sans antialiased bg-wedding-stripes relative min-h-screen">
        <!-- Navigation Progress Bar -->
        <div id="nav-progress"></div>

        @if(request()->routeIs('home'))
        <!-- Splash Screen Overlay -->
        <div id="splash-screen">
            <div class="splash-content">
                <div class="splash-title">I & D</div>
                <div class="splash-subtitle">Majlis Ikatan Janji</div>
                <div class="mt-8 flex justify-center">
                    <div class="w-16 h-1 border-t-2 border-soft-pink-300 animate-pulse"></div>
                </div>
            </div>
            <div class="splash-footer">
                <p class="text-[#be185d]/60 text-[10px] tracking-[0.2em] uppercase font-medium">
                    &copy; {{ date('Y') }} &bull; createdbyIzz
                </p>
            </div>
        </div>

        <script>
            window.addEventListener('load', function() {
                const splash = document.getElementById('splash-screen');
                if (!splash) return;
                
                // Keep splash for 3 seconds as requested
                setTimeout(() => {
                    splash.classList.add('fade-out');
                    
                    // Optional: remove from DOM after fade out to ensure no interference
                    setTimeout(() => {
                        if (splash.parentNode) {
                            splash.parentNode.removeChild(splash);
                        }
                    }, 1000);
                }, 3000);
            });
        </script>
        @endif
        @include('partials.navbar')
        
        <!-- Scalloped edges -->
        <div class="fixed inset-y-0 left-0 w-5 md:w-8 scallop-l z-0 pointer-events-none"></div>
        <div class="fixed inset-y-0 right-0 w-5 md:w-8 scallop-r z-0 pointer-events-none"></div>

        <div class="relative z-10 pb-24 md:pb-0 min-h-[calc(100vh-4rem)] flex flex-col view-transition-main">

            @yield('content')

        </div>

        @include('partials.bottom-nav')
        @include('partials.desktop-only')

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
                    
                    // Show progress bar
                    const progressBar = document.getElementById('nav-progress');
                    if (progressBar) {
                        progressBar.style.opacity = '1';
                        progressBar.classList.remove('complete');
                        progressBar.classList.add('loading');
                    }

                    // Click feedback
                    link.classList.add('is-navigating');
                }
            });

            // Handle back/forward cache
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
