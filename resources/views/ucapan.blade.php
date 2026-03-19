@extends('layouts.guest')

@section('title', 'Ucapan & Doa - Kad Tunang')

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
        color: #3b312c;
    }
    @media (prefers-color-scheme: dark) {
        .dark-mode-bg {
            background-color: #221016;
        }
        .dark-mode-card {
            background: rgba(255, 255, 255, 0.05);
            border-color: rgba(239, 57, 118, 0.2);
        }
        .dark\:bg-\[\#221016\] {
            --tw-bg-opacity: 1;
            background-color: #221016;
        }
        .dark\:text-slate-400 {
            --tw-text-opacity: 1;
            color: #a1a1aa;
        }
    }
    .btn-pink-custom {
        background-color: #ef3976;
        color: white;
        transition: all 0.3s ease;
    }
    .btn-pink-custom:hover {
        background-color: #db2777;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(239, 57, 118, 0.3);
    }
    @media (prefers-color-scheme: dark) {
    .dark\:bg-\[\#221016\] {
        --tw-bg-opacity: 1;
        background-color: #f7f5ed;
    }
    }
    @media (prefers-color-scheme: dark) {
    .dark\:text-slate-400 {
        --tw-text-opacity: 1;
        color: #3b312c;
    }
    }
    .text-\[\#3b312c\] {
    --tw-text-opacity: 1;
    color: #db2777;
    }
    @media (prefers-color-scheme: dark) {
    .dark\:text-gray-100 {
        --tw-text-opacity: 1;
        color: #3b312c;
    }
    }
    @media (prefers-color-scheme: dark) {
    .dark\:text-pink-100 {
        --tw-text-opacity: 1;
        color: #db2777;
    }
    }
</style>

<div class="flex-1 w-full flex flex-col bg-[#f7f5ed] dark:bg-[#221016] font-display text-slate-900 dark:text-slate-100 relative z-20">

    <header class="relative pt-12 pb-8 px-6 text-center border-b border-[#ef3976]/10 bg-[#f8f6f6] dark:bg-[#ffffff]/5">
        <div class="absolute top-0 left-0 w-full scalloped-border opacity-20"></div>
        <h1 class="text-4xl font-bold text-[#3b312c] italic mb-2">Ucapan</h1>
        <p class="text-slate-600 dark:text-slate-400 tracking-widest uppercase text-xs font-semibold">Kongsikan ucapan & doa anda untuk kami</p>
    </header>

    <div class="flex-1 flex flex-col items-center justify-center p-6 pb-32">
        <div class="w-full max-w-xl space-y-12">

            @if (session('success'))
                <div class="timer-card dark-mode-card p-4 rounded-2xl text-center text-[#ef3976] font-semibold shadow-sm border border-[#ef3976]/20">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Guestbook Form -->
            <div class="timer-card dark-mode-card p-8 rounded-3xl shadow-xl border border-[#ef3976]/10 relative overflow-hidden group">
                <div class="absolute inset-0 bg-gradient-to-br from-[#ef3976]/5 to-transparent opacity-50"></div>
                <div class="relative z-10">
                    <h2 class="text-2xl font-bold text-[#3b312c] dark:text-pink-100 italic mb-8 text-center">Tinggalkan Ucapan Anda</h2>
                    <form method="POST" action="{{ route('ucapan.store') }}" class="space-y-6">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="block text-xs uppercase tracking-wider font-bold text-slate-500 dark:text-slate-400">Nama<span class="text-[#ef3976]">*</span></label>
                                <input type="text" name="name" required 
                                    class="w-full px-4 py-3 bg-white/50 dark:bg-black/20 border border-[#ef3976]/20 rounded-xl focus:ring-2 focus:ring-[#ef3976] focus:border-[#ef3976] transition outline-none dark:text-white"
                                    placeholder="Nama anda">
                                @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-xs uppercase tracking-wider font-bold text-slate-500 dark:text-slate-400">Ucapan<span class="text-[#ef3976]">*</span></label>
                            <textarea name="message" rows="4" required 
                                class="w-full px-4 py-3 bg-white/50 dark:bg-black/20 border border-[#ef3976]/20 rounded-xl focus:ring-2 focus:ring-[#ef3976] focus:border-[#ef3976] transition outline-none resize-none dark:text-white"
                                placeholder="Tinggalkan ucapan anda di sini..."></textarea>
                            @error('message') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div class="text-center pt-4">
                            <button type="submit" class="btn-pink-custom px-10 py-3 rounded-full font-bold text-sm tracking-widest uppercase">
                                Hantar Ucapan
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Romantic Divider with Double Heart and Ribbon Shape -->
            <div class="flex justify-center py-4">
                <div class="relative flex flex-col items-center">
                    <!-- Curved "ribbon" under the romantic hearts -->
                    <svg width="68" height="20" viewBox="0 0 68 20" fill="none" class="absolute -bottom-3 left-1/2 -translate-x-1/2" style="z-index:0;">
                        <path d="M2 10 C16 22, 52 22, 66 10" stroke="#ef3976" stroke-width="2" fill="none" opacity="0.25"/>
                    </svg>
                    <!-- Double overlapping hearts shape -->
                    <div class="flex items-center space-x-[-8px] relative z-10">
                        <svg class="w-7 h-7 text-[#ef3976] drop-shadow" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12.1 8.64l-.1.1-.11-.11C10.14 6.1 6.61 6.24 4.55 8.3c-2.04 2.04-2.04 5.36 0 7.4l7.07 7.07c.39.39 1.02.39 1.41 0l7.07-7.07c2.04-2.04 2.04-5.36 0-7.4-2.06-2.06-5.59-2.2-7.49.05z"/>
                        </svg>
                        <svg class="w-7 h-7 text-[#ef3976]/80 drop-shadow -ml-2" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12.1 8.64l-.1.1-.11-.11C10.14 6.1 6.61 6.24 4.55 8.3c-2.04 2.04-2.04 5.36 0 7.4l7.07 7.07c.39.39 1.02.39 1.41 0l7.07-7.07c2.04-2.04 2.04-5.36 0-7.4-2.06-2.06-5.59-2.2-7.49.05z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Romantic quote/intro, matching style -->
            <div class="text-center italic px-8">
                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                    "Your heartfelt wishes and prayers accompany us on our beautiful journey toward happiness."
                </p>
            </div>

            <!-- Approved Messages -->
            <div class="space-y-8 pt-8">
                <div class="flex items-center justify-center space-x-4">
                    <div class="h-px w-12 bg-[#ef3976]/20"></div>
                    <h2 class="text-2xl font-bold text-[#3b312c] dark:text-pink-100 italic">Ucapan Tetamu</h2>
                    <div class="h-px w-12 bg-[#ef3976]/20"></div>
                </div>

                @if($messages->count() > 0)
                    <div class="grid md:grid-cols-2 gap-6">
                        @foreach($messages as $message)
                            <div class="timer-card dark-mode-card p-6 rounded-2xl shadow-sm border border-[#ef3976]/10 hover:shadow-md transition-all duration-300 group">
                                <div class="flex items-start space-x-4">
                                    <div class="flex-shrink-0">
                                        <div class="w-10 h-10 rounded-full bg-[#ef3976]/10 flex items-center justify-center">
                                            <svg class="w-6 h-6 text-[#ef3976]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 15c2.21 0 4.303.534 6.121 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex items-center space-x-2">
                                            <span class="font-semibold text-[#ef3976] dark:text-pink-100">{{ $message->name }}</span>
                                        </div>
                                        <div class="mt-1 text-gray-700 dark:text-gray-100">{{ $message->message }}</div>
                                        <div class="mt-2 text-xs text-slate-400">{{ $message->created_at->format('d M Y, H:i') }}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-center text-gray-400 py-8 italic">Tiada ucapan buat masa ini. Jadilah yang pertama!</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
