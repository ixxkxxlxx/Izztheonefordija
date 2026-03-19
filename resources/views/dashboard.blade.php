<x-app-layout>

@section('title', '{{ __("Dashboard") }} - Kad Tunang')

@section('content')
<div class="py-12">
    <div class="text-3xl font-serif text-soft-pink-800 mb-6 text-center animate-fade-in">
        {{ __('Dashboard') }}
    </div>
    <div class="max-w-md mx-auto">
        <div class="bg-white overflow-hidden shadow-2xl sm:rounded-3xl p-8 card-soft">
            <div class="text-center">
                <div class="w-24 h-24 bg-gradient-to-br from-soft-pink-400 to-soft-pink-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-soft-pink-800 mb-4">{{ __('Welcome back!') }}</h2>
                <p class="text-lg text-soft-pink-700 mb-6">{{ __("You're logged in and ready to manage your wedding site!") }}</p>
                <div class="space-y-4">
                    <a href="{{ route('profile.edit') }}" class="btn-pink block w-full text-center">{{ __('Manage Profile') }}</a>
                    <a href="{{ route('ucapan.index') }}" class="block w-full text-center text-soft-pink-600 hover:text-soft-pink-700 font-medium py-3 rounded-xl border-2 border-soft-pink-200 hover:bg-soft-pink-50 transition">{{ __('View Messages') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

