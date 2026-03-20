<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#fffafb" media="(prefers-color-scheme: light)">
        <meta name="theme-color" content="#221016" media="(prefers-color-scheme: dark)">

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

        <script>
            // On page load or when changing themes, best to add inline in `head` to avoid FOUC
            if (localStorage.getItem('color-theme') === 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        </script>

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
                position: relative;
            }
            
            @media (prefers-color-scheme: dark) {
                .bg-wedding-stripes::before {
                    content: '';
                    position: fixed;
                    inset: 0;
                    background-color: rgba(34, 16, 22, 0.7); /* background-dark with opacity */
                    z-index: -1;
                    pointer-events: none;
                }
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
            
            @media (prefers-color-scheme: dark) {
                #splash-screen {
                    background-color: #221016; /* background-dark */
                }
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
                transition: color 0.5s ease-in-out;
            }
            
            @media (prefers-color-scheme: dark) {
                .splash-title {
                    color: #fce7f3; /* soft-pink-100 */
                }
            }

            .splash-subtitle {
                font-family: 'Playfair Display', serif;
                font-size: 1.2rem;
                letter-spacing: 0.2em;
                color: #9d174d; /* soft-pink-800 */
                text-transform: uppercase;
                opacity: 0.8;
                transition: color 0.5s ease-in-out;
            }

            @media (prefers-color-scheme: dark) {
                .splash-subtitle {
                    color: #fbcfe8; /* soft-pink-200 */
                }
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
        @include('partials.theme-toggle')
        
        <!-- Scalloped edges -->
        <div class="fixed inset-y-0 left-0 w-5 md:w-8 scallop-l z-0 pointer-events-none"></div>
        <div class="fixed inset-y-0 right-0 w-5 md:w-8 scallop-r z-0 pointer-events-none"></div>

        <div class="relative z-10 pb-24 md:pb-0 min-h-[calc(100vh-4rem)] flex flex-col view-transition-main">

            @yield('content')

        </div>

        @include('partials.bottom-nav')
        @include('partials.desktop-only')

        <!-- Background Music Player -->
        <div x-data="musicPlayer()" x-init="init()" class="fixed bottom-28 md:bottom-8 left-6 z-50">
            <audio id="bg-music" loop preload="auto">
                <source src="https://cdn.pixabay.com/audio/2025/06/04/audio_690639421c.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
            
            <div class="relative flex flex-col items-center">
                <!-- Autoplay Unlock Hint -->
                <div x-show="showUnlockHint" 
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-4"
                    class="absolute bottom-16 left-0 whitespace-nowrap bg-white/90 backdrop-blur-sm px-4 py-2 rounded-2xl shadow-xl border border-[#ef3976]/20 text-[#ef3976] text-xs font-bold animate-bounce-slow">
                    Tap to play music <span class="ml-1">🎵</span>
                </div>

                <button @click="toggle()" 
                    class="w-12 h-12 bg-[#ef3976] rounded-full shadow-lg flex items-center justify-center text-white hover:scale-110 active:scale-95 transition-all focus:outline-none ring-4 ring-white/30"
                    :class="{'animate-pulse-slow': isPlaying, 'opacity-80': !isPlaying}">
                    <!-- Music Note/Pause Icon -->
                    <template x-if="!isPlaying">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                        </svg>
                    </template>
                    <template x-if="isPlaying">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </template>
                </button>
            </div>
        </div>

        <script>
            function musicPlayer() {
                return {
                    isPlaying: false,
                    audio: null,
                    showUnlockHint: false,
                    
                    init() {
                        this.audio = document.getElementById('bg-music');
                        if (!this.audio) return;

                        // Set volume to a pleasant level
                        this.audio.volume = 0.5;
                        
                        // Restore state from localStorage
                        const wasPlaying = localStorage.getItem('music_playing') === 'true';
                        const savedTime = localStorage.getItem('music_current_time');
                        
                        if (savedTime) {
                            this.audio.currentTime = parseFloat(savedTime);
                        }

                        // Try to play immediately if it was playing before
                        if (wasPlaying) {
                            this.play().catch(() => {
                                // If autoplay was blocked, show hint
                                this.showUnlockHint = true;
                            });
                        }

                        // Periodically save time
                        setInterval(() => {
                            if (!this.audio.paused) {
                                localStorage.setItem('music_current_time', this.audio.currentTime);
                            }
                        }, 1000);

                        // Unlock audio on first interaction if it was playing
                        const unlockHandler = () => {
                            if (localStorage.getItem('music_playing') === 'true' && this.audio.paused) {
                                this.play();
                            }
                            // Always hide hint after any interaction
                            this.showUnlockHint = false;
                        };

                        document.addEventListener('click', unlockHandler, { once: true });
                        document.addEventListener('touchstart', unlockHandler, { once: true });

                        // Handle audio events for state tracking
                        this.audio.onplay = () => {
                            this.isPlaying = true;
                            this.showUnlockHint = false;
                            localStorage.setItem('music_playing', 'true');
                        };
                        this.audio.onpause = () => {
                            this.isPlaying = false;
                            localStorage.setItem('music_playing', 'false');
                        };
                    },

                    toggle() {
                        if (this.audio.paused) {
                            this.play();
                        } else {
                            this.audio.pause();
                        }
                    },

                    async play() {
                        try {
                            await this.audio.play();
                            this.isPlaying = true;
                        } catch (error) {
                            console.log('Playback prevented:', error);
                            throw error;
                        }
                    }
                }
            }
        </script>

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
