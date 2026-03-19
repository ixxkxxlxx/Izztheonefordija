@extends('layouts.guest')

@section('title', 'Majlis Tunang - Ahmad & Aisyah')

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&amp;family=Poppins:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
<style>
.hero-gradient { 
    background: linear-gradient(135deg, #fdf2f8 0%, #fce7f3 25%, #fff 50%, #fce7f3 75%, #fdf2f8 100%); 
}
.floating-heart {
    animation: float 6s ease-in-out infinite;
}
@keyframes float {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(5deg); }
}
</style>
@endpush

@section('content')
<div class="min-h-screen hero-gradient overflow-hidden relative">
    {{-- Floating hearts --}}
    <div class="absolute inset-0 pointer-events-none z-0">
        <div class="absolute top-20 left-10 w-12 h-12 bg-soft-pink-300 rounded-full opacity-20 floating-heart" style="animation-delay: 0s;"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-soft-pink-200 rounded-full opacity-30 floating-heart" style="animation-delay: 1.5s;"></div>
        <div class="absolute bottom-40 left-20 w-20 h-20 bg-soft-pink-400 rounded-full opacity-25 floating-heart" style="animation-delay: 3s;"></div>
        <div class="absolute bottom-20 right-32 w-12 h-12 bg-soft-pink-500 rounded-full opacity-35 floating-heart" style="animation-delay: 4.5s;"></div>
    </div>

    {{-- Main Hero --}}
    <div class="relative z-10 flex flex-col lg:flex-row items-center justify-center min-h-[calc(100vh-12rem)] px-4 py-20 pb-24 md:pb-0">
        <div class="lg:w-1/2 text-center lg:text-left mb-12 lg:mb-0 lg:mr-12 animate-fade-in">
            <div class="inline-block bg-soft-pink-400 px-6 py-3 rounded-full mb-8 shadow-lg">
                <span class="text-sm font-semibold text-white">Undangan Rasmi</span>
            </div>
            <h1 class="text-5xl lg:text-7xl xl:text-8xl font-serif text-soft-pink-900 mb-8 leading-tight text-hero drop-shadow-lg">
                Majlis <span class="text-soft-pink-700 block">Tunang &amp; Perkahwinan</span>
            </h1>
            <div class="bg-white/95 backdrop-blur-xl p-10 rounded-3xl shadow-2xl border border-soft-pink-200 max-w-4xl mx-auto lg:mx-0">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-center lg:text-left">
                    <div>
                        <div class="text-4xl font-serif font-bold text-soft-pink-800 mb-2">{{ config('app.name') }}</div>
                        <div class="text-2xl text-soft-pink-600 mb-6 font-medium">15 Jun 2026</div>
                        <p class="text-lg text-soft-pink-700 leading-relaxed">Alhamdulillah, dengan restu Allah SWT dan rahmat kedua ibu bapa, kami 
                            <strong>Ahmad &amp; Aisyah</strong> akan mengadakan majlis tunang dan akad nikah.
                        </p>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center justify-center lg:justify-end">
                            <a href="{{ route('aturcara') }}" class="bg-gradient-to-r from-soft-pink-500 to-soft-pink-600 hover:from-soft-pink-600 hover:to-soft-pink-700 text-white font-semibold py-4 px-8 rounded-2xl shadow-xl mr-4 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">Lihat Aturcara</a>
                            <a href="{{ route('lokasi') }}" class="bg-white hover:bg-soft-pink-50 text-soft-pink-700 font-semibold py-4 px-8 rounded-2xl border-2 border-soft-pink-300 hover:border-soft-pink-400 transition-all duration-300 shadow-lg hover:shadow-xl">Lokasi</a>
                        </div>
                        <div class="flex justify-center lg:justify-end space-x-6 text-sm text-soft-pink-600">
                            <a href="{{ route('ucapan.index') }}">Buku Ucapan</a>
                            <span>|</span>
                            <a href="{{ route('register') }}">RSVP</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Decorative Element --}}
        <div class="lg:w-1/2 relative">
            <div class="relative z-20 w-96 h-96 lg:w-[500px] lg:h-[500px] mx-auto bg-gradient-to-br from-soft-pink-300 via-soft-pink-200 to-white rounded-full shadow-2xl flex items-center justify-center p-12">
                <div class="text-center">
                    <div class="w-48 h-48 mx-auto mb-8 bg-gradient-to-r from-soft-pink-500 to-soft-pink-600 rounded-full flex items-center justify-center shadow-2xl">
                        <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <p class="text-2xl font-serif text-soft-pink-800 font-bold">Datanglah Menyaksikan</p>
                    <p class="text-lg text-soft-pink-700 mt-2">Keikhlasan Kasih Sayang</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Quick Links Footer --}}
    <div class="bg-white/80 backdrop-blur-md border-t border-soft-pink-200 shadow-lg">
        <div class="max-w-7xl mx-auto py-12 px-4 grid md:grid-cols-4 gap-8 text-center md:text-left">
            <div>
                <h3 class="text-xl font-serif text-soft-pink-800 mb-4">Majlis Akad</h3>
                <p class="text-soft-pink-600">15 Jun 2026, 10:00 AM</p>
                <p class="text-sm text-soft-pink-500">Masjid Jamek Kampung Baru</p>
            </div>
            <div>
                <h3 class="text-xl font-serif text-soft-pink-800 mb-4">Majlis Resepsi</h3>
                <p class="text-soft-pink-600">15 Jun 2026, 7:00 PM</p>
                <p class="text-sm text-soft-pink-500">PWTC Dewan Seri Melati</p>
            </div>
            <div>
                <h3 class="text-xl font-serif text-soft-pink-800 mb-4">Kehadiran</h3>
                <a href="{{ route('register') }}" class="bg-gradient-to-r from-soft-pink-500 to-soft-pink-600 hover:from-soft-pink-600 hover:to-soft-pink-700 text-white inline-block px-6 py-2 text-sm rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">Sahkans Kan</a>
            </div>
            <div>
                <h3 class="text-xl font-serif text-soft-pink-800 mb-4">Ucapan</h3>
                <p class="text-sm text-soft-pink-500">{{ $messageCount ?? 0 }} Ucapan</p>
            </div>
        </div>
    </div>
</div>
@endsection

