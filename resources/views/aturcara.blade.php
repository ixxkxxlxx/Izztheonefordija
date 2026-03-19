@extends('layouts.guest')

@section('title', 'Aturcara Majlis')

@push('head')
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&display=swap" rel="stylesheet"/>
@endpush

@push('styles')
<style>
    .scalloped-edge {
        background-image: radial-gradient(circle at 10px -5px, transparent 12px, #fce7f3 13px);
        background-size: 20px 20px;
    }
    .striped-bg {
        background-image: repeating-linear-gradient(45deg, rgba(239, 57, 118, 0.02) 0px, rgba(239, 57, 118, 0.02) 10px, transparent 10px, transparent 20px);
    }
    @media (prefers-color-scheme: dark) {
    .dark\:bg-background-dark {
        --tw-bg-opacity: 1;
        background-color: #f7f5ed;
    }
    }
    .italic {
    font-style: italic;
    color: #db2777;
    }

    @media (prefers-color-scheme: dark) {
    .dark\:bg-slate-800\/80 {
        background-color: #e5e7eb;
    }
    }

    .text-elegant-brown {
    --tw-text-opacity: 1;
    color: #3b312c;
    }

    @media (prefers-color-scheme: dark) {
    .dark\:bg-slate-900 {
        --tw-bg-opacity: 1;
        background-color: #3b312c;
    }
    }
    .text-primary\/80 {
    color: #ffffff;
}
</style>
@endpush

@section('content')
<div class="bg-background-light dark:bg-background-dark font-display text-slate-800 dark:text-slate-100 min-h-screen flex flex-col">
    <div class="h-4 scalloped-edge w-full opacity-50"></div>
    <header class="relative pt-6 pb-2 px-6 text-center">
        <div class="flex items-center justify-center mb-2">
            <div class="flex flex-col items-center">
                <h1 class="text-3xl font-bold text-[#3b312c] italic">Aturcara Majlis</h1>
            </div>
        </div>
        <div class="flex justify-center items-center gap-3 py-4">
            <div class="h-[1px] w-12 bg-gradient-to-r from-transparent to-primary/30"></div>
            <span class="material-symbols-outlined text-primary/40 text-sm">filter_vintage</span>
            <div class="h-[1px] w-12 bg-gradient-to-l from-transparent to-primary/30"></div>
        </div>
    </header>
    <main class="flex-1 px-6 pb-28 relative striped-bg">
        <div class="absolute top-20 right-0 opacity-5 pointer-events-none">
            <span class="material-symbols-outlined text-[180px] text-primary">spa</span>
        </div>
        <div class="absolute bottom-40 left-0 opacity-5 pointer-events-none rotate-180">
            <span class="material-symbols-outlined text-[150px] text-primary">spa</span>
        </div>
        <div class="max-w-md mx-auto relative mt-4">
            <div class="grid grid-cols-[80px_1fr] gap-x-4">
                {{-- 10:30 AM --}}
                <div class="flex flex-col items-center pt-5">
                    <span class="text-[11px] font-bold tracking-tighter text-primary/80 bg-white dark:bg-slate-900 px-2 py-0.5 rounded border border-primary/10 shadow-sm z-10">10:30 AM</span>
                    <div class="w-[1px] flex-1 bg-primary/5 my-2"></div>
                </div>
                <div class="relative py-4">
                    <div class="absolute -left-4 top-1/2 -translate-y-1/2 w-4 h-[1px] bg-primary/20"></div>
                    <div class="bg-white/80 dark:bg-slate-800/80 backdrop-blur-sm p-4 rounded-xl border border-primary/5 shadow-sm hover:border-primary/20 transition-all duration-300">
                        <h3 class="text-lg text-elegant-brown dark:text-soft-pink leading-tight">Ketibaan Keluarga Pihak Perempuan</h3>
                    </div>
                </div>

                {{-- 11:00 AM --}}
                <div class="flex flex-col items-center pt-5">
                    <span class="text-[11px] font-bold tracking-tighter text-primary/80 bg-white dark:bg-slate-900 px-2 py-0.5 rounded border border-primary/10 shadow-sm z-10">11:00 AM</span>
                    <div class="w-[1px] flex-1 bg-primary/5 my-2"></div>
                </div>
                <div class="relative py-4">
                    <div class="absolute -left-4 top-1/2 -translate-y-1/2 w-4 h-[1px] bg-primary/20"></div>
                    <div class="bg-white/80 dark:bg-slate-800/80 backdrop-blur-sm p-4 rounded-xl border border-primary/5 shadow-sm hover:border-primary/20 transition-all duration-300">
                        <h3 class="text-lg text-elegant-brown dark:text-soft-pink leading-tight">Ketibaan Rombongan Pihak Lelaki</h3>
                    </div>
                </div>

                {{-- 11:30 AM --}}
                <div class="flex flex-col items-center pt-5">
                    <span class="text-[11px] font-bold tracking-tighter text-primary/80 bg-white dark:bg-slate-900 px-2 py-0.5 rounded border border-primary/10 shadow-sm z-10">11:30 AM</span>
                    <div class="w-[1px] flex-1 bg-primary/5 my-2"></div>
                </div>
                <div class="relative py-4">
                    <div class="absolute -left-4 top-1/2 -translate-y-1/2 w-4 h-[1px] bg-primary/20"></div>
                    <div class="bg-white/80 dark:bg-slate-800/80 backdrop-blur-sm p-4 rounded-xl border border-primary/5 shadow-sm hover:border-primary/20 transition-all duration-300">
                        <h3 class="text-lg text-elegant-brown dark:text-soft-pink leading-tight">Sesi Perbincangan Ringkas</h3>
                    </div>
                </div>

                {{-- 11:45 AM (Featured) --}}
                <div class="flex flex-col items-center pt-6">
                    <div class="relative">
                        <div class="absolute -inset-2 bg-primary/10 rounded-full animate-ping opacity-30"></div>
                        <span class="relative z-10 text-[11px] font-bold tracking-tighter text-white bg-primary px-2 py-0.5 rounded shadow-lg shadow-primary/20">11:45 AM</span>
                    </div>
                    <div class="w-[1px] flex-1 bg-primary/10 my-2"></div>
                </div>
                <div class="relative py-4">
                    <div class="absolute -left-4 top-1/2 -translate-y-1/2 w-4 h-[1px] bg-primary/30"></div>
                    <div class="bg-primary/[0.03] dark:bg-primary/10 p-5 rounded-2xl border border-primary/30 shadow-md relative overflow-hidden">
                        <div class="absolute top-0 right-0 p-2 opacity-10">
                            <span class="material-symbols-outlined text-4xl text-primary">favorite</span>
                        </div>
                        <h3 class="text-lg font-bold text-primary leading-snug">Upacara Sarung Cincin & Sesi Bergambar</h3>
                        <div class="mt-3 flex gap-4 text-primary/60">
                            <span class="material-symbols-outlined text-lg">camera_enhance</span>
                            <span class="material-symbols-outlined text-lg">auto_awesome</span>
                        </div>
                    </div>
                </div>

                {{-- 12:30 PM --}}
                <div class="flex flex-col items-center pt-5">
                    <span class="text-[11px] font-bold tracking-tighter text-primary/80 bg-white dark:bg-slate-900 px-2 py-0.5 rounded border border-primary/10 shadow-sm z-10">12:30 PM</span>
                    <div class="w-[1px] flex-1 bg-primary/5 my-2"></div>
                </div>
                <div class="relative py-4">
                    <div class="absolute -left-4 top-1/2 -translate-y-1/2 w-4 h-[1px] bg-primary/20"></div>
                    <div class="bg-white/80 dark:bg-slate-800/80 backdrop-blur-sm p-4 rounded-xl border border-primary/5 shadow-sm hover:border-primary/20 transition-all duration-300">
                        <h3 class="text-lg text-elegant-brown dark:text-soft-pink leading-tight">Jamuan Makan</h3>
                        <p class="text-sm italic text-primary/50 mt-1 border-t border-primary/5 pt-2 font-display">Menu: Nasi Minyak & Kuih Tradisional</p>
                    </div>
                </div>

                {{-- 04:00 PM --}}
                <div class="flex flex-col items-center pt-5">
                    <span class="text-[11px] font-bold tracking-tighter text-primary/80 bg-white dark:bg-slate-900 px-2 py-0.5 rounded border border-primary/10 shadow-sm z-10">04:00 PM</span>
                    <div class="w-[1px] flex-1 bg-transparent my-2"></div>
                </div>
                <div class="relative py-4">
                    <div class="absolute -left-4 top-1/2 -translate-y-1/2 w-4 h-[1px] bg-primary/20"></div>
                    <div class="bg-white/80 dark:bg-slate-800/80 backdrop-blur-sm p-4 rounded-xl border border-primary/5 shadow-sm hover:border-primary/20 transition-all duration-300">
                        <h3 class="text-lg text-elegant-brown dark:text-soft-pink leading-tight">Majlis Bersurai</h3>
                        <p class="text-[11px] uppercase tracking-widest text-primary/40 mt-2 italic font-display">Terima kasih atas kehadiran</p>
                    </div>
                </div>
            </div>
            <div class="mt-12 mb-4 flex justify-center opacity-40">
                <div class="flex items-center gap-4">
                    <div class="h-[0.5px] w-16 bg-primary"></div>
                    <span class="material-symbols-outlined text-primary text-xl">temp_preferences_custom</span>
                    <div class="h-[0.5px] w-16 bg-primary"></div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
