<style>
    .-mt-8 {
        margin-top: -5px;
    }

    @keyframes heartbeat {
        0% { transform: scale(1); }
        14% { transform: scale(1.3); }
        28% { transform: scale(1); }
        42% { transform: scale(1.3); }
        70% { transform: scale(1); }
    }

    .animate-heartbeat {
        animation: heartbeat 1.5s infinite ease-in-out;
    }
</style>

<nav class="md:hidden fixed bottom-6 left-1/2 -translate-x-1/2 w-[92%] max-w-lg bg-white/80 dark:bg-background-dark/80 backdrop-blur-xl border border-white/20 dark:border-white/10 shadow-[0_8px_32px_rgba(0,0,0,0.12)] z-50 rounded-[2rem] overflow-hidden transition-all duration-500 ease-in-out view-transition-bottom-nav">
    <div class="px-2">
        <div class="flex justify-around items-center h-16">
            <a href="{{ route('home') }}" class="flex-1 flex flex-col items-center justify-center text-[10px] sm:text-xs font-medium transition-all duration-300 p-2 {{ request()->routeIs('home') ? 'text-soft-pink-600 dark:text-soft-pink-300 bg-soft-pink-50/50 dark:bg-soft-pink-900/40 rounded-2xl' : 'text-gray-500 dark:text-gray-400 hover:text-soft-pink-400 dark:hover:text-soft-pink-300' }}">
                <div class="relative {{ request()->routeIs('home') ? 'scale-110' : '' }} transition-transform duration-300">
                    <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </div>
                <span class="truncate">Utama</span>
            </a>
            <a href="{{ route('lokasi') }}" class="flex-1 flex flex-col items-center justify-center text-[10px] sm:text-xs font-medium transition-all duration-300 p-2 {{ request()->routeIs('lokasi') ? 'text-soft-pink-600 dark:text-soft-pink-300 bg-soft-pink-50/50 dark:bg-soft-pink-900/40 rounded-2xl' : 'text-gray-500 dark:text-gray-400 hover:text-soft-pink-400 dark:hover:text-soft-pink-300' }}">
                <div class="relative {{ request()->routeIs('lokasi') ? 'scale-110' : '' }} transition-transform duration-300">
                    <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8.307 8.307 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <span class="truncate">Lokasi</span>
            </a>
            <div class="flex-1 flex justify-center -mt-8">
                <a href="{{ route('countdown') }}" class="group relative flex flex-col items-center">
                    <div class="w-14 h-14 bg-soft-pink-500 rounded-full flex items-center justify-center shadow-lg transform transition-all duration-300 hover:scale-110 active:scale-95 border-4 border-white">
                        <svg class="w-7 h-7 text-white animate-heartbeat" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                    </div>
                </a>
            </div>
            <a href="{{ route('aturcara') }}" class="flex-1 flex flex-col items-center justify-center text-[10px] sm:text-xs font-medium transition-all duration-300 p-2 {{ request()->routeIs('aturcara') ? 'text-soft-pink-600 dark:text-soft-pink-300 bg-soft-pink-50/50 dark:bg-soft-pink-900/40 rounded-2xl' : 'text-gray-500 dark:text-gray-400 hover:text-soft-pink-400 dark:hover:text-soft-pink-300' }}">
                <div class="relative {{ request()->routeIs('aturcara') ? 'scale-110' : '' }} transition-transform duration-300">
                    <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <span class="truncate">Aturcara</span>
            </a>
            <a href="{{ route('ucapan.index') }}" class="flex-1 flex flex-col items-center justify-center text-[10px] sm:text-xs font-medium transition-all duration-300 p-2 {{ request()->routeIs('ucapan.*') ? 'text-soft-pink-600 dark:text-soft-pink-300 bg-soft-pink-50/50 dark:bg-soft-pink-900/40 rounded-2xl' : 'text-gray-500 dark:text-gray-400 hover:text-soft-pink-400 dark:hover:text-soft-pink-300' }}">
                <div class="relative {{ request()->routeIs('ucapan.*') ? 'scale-110' : '' }} transition-transform duration-300">
                    <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 4.418 9 8z"></path>
                    </svg>
                </div>
                <span class="truncate">Ucapan</span>
            </a>
            @auth
            <a href="{{ route('dashboard') }}" class="flex-1 flex flex-col items-center justify-center text-[10px] sm:text-xs font-medium transition-all duration-300 p-2 {{ request()->routeIs('dashboard') ? 'text-soft-pink-600 dark:text-soft-pink-300 bg-soft-pink-50/50 dark:bg-soft-pink-900/40 rounded-2xl' : 'text-gray-500 dark:text-gray-400 hover:text-soft-pink-400 dark:hover:text-soft-pink-300' }}">
                <div class="relative {{ request()->routeIs('dashboard') ? 'scale-110' : '' }} transition-transform duration-300">
                    <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <span class="truncate">Profil</span>
            </a>
            @endauth
        </div>
    </div>
</nav>


