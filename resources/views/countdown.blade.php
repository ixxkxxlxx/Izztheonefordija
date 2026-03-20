@extends('layouts.guest')

@section('title', 'Countdown Majlis')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&display=swap" rel="stylesheet"/>

<style>
    .scalloped-border {
        background-image: radial-gradient(circle at 10px 0, rgba(254, 253, 249) 12px, #ef3976 13px);
        background-size: 20px 20px;
        height: 10px;
        width: 100%;
    }

    .font-display {
        font-family: 'Newsreader', serif;
    }

    .timer-card {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(239, 57, 118, 0.1);
    }
    .text-\[\#3b312c\] {
    --tw-text-opacity: 1;
    color: #db2777;
    }
    .dark .dark\:bg-\[\#221016\] {
        --tw-bg-opacity: 1;
        background-color: #f7f5ed;
    }
    .dark .dark\:text-slate-400 {
        --tw-text-opacity: 1;
        color: #3b312c;
    }
    .pb-24 {
    padding-bottom: 0rem;
    }

    /* --- Background Pattern Added --- */
    .pattern-bg {
        position: fixed;
        z-index: 10;
        inset: 0;
        width: 100vw;
        height: 100vh;
        background-image:
            repeating-radial-gradient(circle at 20px 20px, #fff7fa 0, #fff7fa 1.5px, transparent 2.5px, transparent 40px),
            repeating-radial-gradient(circle at 60px 90px, #ffeef5 0, #ffeef5 1px, transparent 2px, transparent 30px);
        opacity: 0.25;
        pointer-events: none;
        /* A hint of color for romance! */
    }
    .dark .pattern-bg {
        background-image:
            repeating-radial-gradient(circle at 20px 20px, #ef397680 0, #ef397680 1.5px, transparent 2.5px, transparent 40px),
            repeating-radial-gradient(circle at 60px 90px, #ef397640 0, #ef397640 1px, transparent 2px, transparent 30px);
        opacity: 0.15;
    }
</style>

<div class="pattern-bg"></div>
<div class="flex-1 w-full flex flex-col bg-[#88786F] dark:bg-[#221016] font-display text-slate-900 dark:text-slate-100 relative z-20" 
     x-data="countdownTimer('2026-04-05T00:00:00')" 
     x-init="start()">
    
    <header class="relative pt-12 pb-8 px-6 text-center border-b border-[#ef3976]/10 bg-[#f8f6f6] dark:bg-[#ffffff]/5">
        <div class="absolute top-0 left-0 w-full scalloped-border opacity-20"></div>
        <h1 class="text-4xl font-bold text-[#3b312c] italic mb-2">Menghitung Hari</h1>
        <p class="text-slate-600 dark:text-slate-400 tracking-widest uppercase text-xs font-semibold">Menjelang Detik Bahagia</p>
    </header>

    <div class="flex-1 flex flex-col items-center justify-center p-6 pb-32">
        <div class="w-full max-w-md space-y-8">
            
            <!-- Target Date Display -->
            <div class="text-center space-y-2">
                <div class="inline-block px-4 py-1 bg-[#ef3976]/10 rounded-full text-[#ef3976] text-sm font-bold">
                    Ahad, 05 April 2026
                </div>
            </div>

            <!-- Countdown Grid -->
            <div class="grid grid-cols-4 gap-4">
                <template x-for="(value, label) in timeLeft" :key="label">
                    <div class="flex flex-col items-center">
                        <div class="w-full aspect-square timer-card rounded-2xl flex items-center justify-center shadow-lg relative overflow-hidden group">
                            <div class="absolute inset-0 bg-gradient-to-br from-[#ef3976]/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <span class="text-3xl font-bold text-[#ef3976] relative z-10" x-text="value">00</span>
                        </div>
                        <span class="mt-3 text-[10px] uppercase tracking-widest font-bold text-slate-500 dark:text-slate-400" x-text="label">HARI</span>
                    </div>
                </template>
            </div>

            <!-- Heart Icon Decoration -->
            <div class="flex justify-center py-4">
                <div class="w-12 h-12 rounded-full bg-white dark:bg-[#ffffff]/5 border border-[#ef3976]/20 flex items-center justify-center shadow-sm">
                    <svg class="w-6 h-6 text-[#ef3976] animate-pulse" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                </div>
            </div>

            <!-- Romantic Quote -->
            <div class="text-center italic px-8">
                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                    "Setiap saat yang berlalu membawa kita lebih dekat kepada ikatan abadi yang kita impikan."
                </p>
            </div>

        </div>
    </div>
</div>

<script>
    function countdownTimer(targetDate) {
        return {
            target: new Date(targetDate).getTime(),
            timeLeft: {
                hari: '00',
                jam: '00',
                minit: '00',
                saat: '00'
            },
            start() {
                this.update();
                setInterval(() => this.update(), 1000);
            },
            update() {
                const now = new Date().getTime();
                const distance = this.target - now;

                if (distance < 0) {
                    this.timeLeft = { hari: '00', jam: '00', minit: '00', saat: '00' };
                    return;
                }

                const d = Math.floor(distance / (1000 * 60 * 60 * 24));
                const h = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const m = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const s = Math.floor((distance % (1000 * 60)) / 1000);

                this.timeLeft = {
                    hari: d.toString().padStart(2, '0'),
                    jam: h.toString().padStart(2, '0'),
                    minit: m.toString().padStart(2, '0'),
                    saat: s.toString().padStart(2, '0')
                };
            }
        }
    }
</script>
@endsection
