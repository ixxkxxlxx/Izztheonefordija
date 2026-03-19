<div class="fixed inset-0 z-[100] hidden md:flex items-center justify-center bg-white p-6 text-center">
    <div class="max-w-md w-full space-y-8">
        <!-- Decoration -->
        <div class="flex justify-center mb-6">
            <div class="relative">
                <!-- Desktop Icon SVG (Black) -->
                <svg class="w-32 h-32 mx-auto text-black drop-shadow-lg" fill="none" stroke="black" viewBox="0 0 64 64">
                    <rect x="8" y="14" width="48" height="28" rx="4" stroke="black" stroke-width="3" fill="white" />
                    <rect x="18" y="42" width="28" height="4" rx="2" fill="black" opacity="0.12" />
                    <rect x="26" y="48" width="12" height="3" rx="1.5" fill="black" />
                    <circle cx="32" cy="47" r="2" fill="black" />
                    <rect x="20" y="19" width="24" height="12" rx="2" fill="black" opacity="0.07" />
                </svg>
            </div>
        </div>

        <div class="space-y-4">
            <h1 class="font-serif text-4xl text-soft-pink-800 leading-tight">Desktop Version Not Supported</h1>
            <p class="text-soft-pink-600 text-lg font-light leading-relaxed">
                Untuk pengalaman terbaik, sila akses sistem ini melalui peranti mudah alih anda.
            </p>
        </div>

        <div class="flex justify-center gap-8 pt-4">
            <!-- Android -->
            <div class="flex flex-col items-center">
                <svg class="w-10 h-10 mb-1 text-soft-pink-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 48 48">
                    <rect x="8" y="12" width="32" height="24" rx="8" fill="#F06292" stroke="#E91E63" />
                    <circle cx="16" cy="32" r="2" fill="#fff"/>
                    <circle cx="32" cy="32" r="2" fill="#fff"/>
                    <rect x="20" y="20" width="8" height="8" rx="1.5" fill="#fff" opacity="0.13"/>
                </svg>
                <span class="text-xs text-soft-pink-600 font-semibold">Android</span>
            </div>
            <!-- iOS -->
            <div class="flex flex-col items-center">
                <svg class="w-10 h-10 mb-1 text-soft-pink-600" fill="none" viewBox="0 0 48 48">
                    <rect x="14" y="9" width="20" height="30" rx="5" fill="#D1C4E9" stroke="#9575CD" stroke-width="1.5"/>
                    <rect x="20" y="33" width="8" height="2" rx="1" fill="#B39DDB"/>
                    <circle cx="24" cy="12" r="1.2" fill="#9575CD"/>
                </svg>
                <span class="text-xs text-soft-pink-600 font-semibold">iOS</span>
            </div>
            <!-- iPad -->
            <div class="flex flex-col items-center">
                <svg class="w-10 h-10 mb-1 text-soft-pink-600" fill="none" viewBox="0 0 48 48">
                    <rect x="10" y="11" width="28" height="26" rx="4" fill="#BBDEFB" stroke="#42A5F5" stroke-width="1.5"/>
                    <rect x="18" y="33" width="12" height="2" rx="1" fill="#90CAF9"/>
                    <circle cx="24" cy="14" r="1.2" fill="#42A5F5"/>
                </svg>
                <span class="text-xs text-soft-pink-600 font-semibold">iPad</span>
            </div>
        </div>

        <div class="pt-8 flex flex-col items-center gap-4">
            <div class="w-32 h-1 bg-gradient-to-r from-transparent via-soft-pink-300 to-transparent"></div>
            <p class="font-display text-sm uppercase tracking-widest text-soft-pink-400">
                Terima Kasih
            </p>
        </div>

        <!-- Subtle footer -->
        <div class="mt-12 text-xs text-soft-pink-300 pointer-events-none">
            &copy; {{ date('Y') }} createbyizz
        </div>
    </div>
</div>

