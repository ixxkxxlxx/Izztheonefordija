<div x-data="themeSwitcher()" class="fixed top-6 right-6 z-50">
    <button @click="toggle()" 
        class="w-12 h-12 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md rounded-full shadow-lg flex items-center justify-center text-soft-pink-600 dark:text-soft-pink-300 hover:scale-110 active:scale-95 transition-all focus:outline-none ring-4 ring-white/30 dark:ring-black/20 border border-soft-pink-100 dark:border-white/10"
        aria-label="Toggle dark mode">
        <!-- Sun Icon (shows when dark) -->
        <svg x-show="isDark" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
        </svg>
        <!-- Moon Icon (shows when light) -->
        <svg x-show="!isDark" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
        </svg>
    </button>
</div>

<script>
    function themeSwitcher() {
        return {
            isDark: document.documentElement.classList.contains('dark'),
            
            toggle() {
                this.isDark = !this.isDark;
                if (this.isDark) {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }
                
                // Trigger an event for other components if needed
                window.dispatchEvent(new CustomEvent('theme-changed', { detail: { isDark: this.isDark } }));
            }
        }
    }
</script>
