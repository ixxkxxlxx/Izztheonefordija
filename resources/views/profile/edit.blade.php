<x-app-layout>

@section('title', '{{ __("Profile") }} - Kad Tunang')

@section('content')
<div class="py-8 space-y-6">
    <div class="text-3xl font-serif text-soft-pink-800 mb-8 text-center animate-fade-in">
        {{ __('Profile') }}
    </div>
    <div class="max-w-2xl mx-auto space-y-6">
        <div class="p-6 sm:p-8 bg-white shadow-xl rounded-2xl card-soft">
            <div class="max-w-xl mx-auto">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="p-6 sm:p-8 bg-white shadow-xl rounded-2xl card-soft">
            <div class="max-w-xl mx-auto">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="p-6 sm:p-8 bg-white shadow-xl rounded-2xl card-soft">
            <div class="max-w-xl mx-auto">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>
@endsection
</x-app-layout>
