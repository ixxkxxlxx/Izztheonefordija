
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 view-transition-navbar">
    <div class="flex justify-between h-16 items-center">
<div class="hidden md:flex md:space-x-4 lg:space-x-6">
        <a href="{{ route('home') }}" class="font-medium text-soft-pink-600 hover:text-soft-pink-700 px-4 py-2 rounded-lg transition md:text-sm lg:text-base {{ request()->routeIs('home') ? 'bg-soft-pink-200' : '' }}">Utama</a>
        <a href="{{ route('lokasi') }}" class="font-medium text-soft-pink-600 hover:text-soft-pink-700 px-4 py-2 rounded-lg transition md:text-sm lg:text-base {{ request()->routeIs('lokasi') ? 'bg-soft-pink-200' : '' }}">Lokasi</a>
        <a href="{{ route('aturcara') }}" class="font-medium text-soft-pink-600 hover:text-soft-pink-700 px-4 py-2 rounded-lg transition md:text-sm lg:text-base {{ request()->routeIs('aturcara') ? 'bg-soft-pink-200' : '' }}">Aturcara</a>
        <a href="{{ route('ucapan.index') }}" class="font-medium text-soft-pink-600 hover:text-soft-pink-700 px-4 py-2 rounded-lg transition md:text-sm lg:text-base {{ request()->routeIs('ucapan.*') ? 'bg-soft-pink-200' : '' }}">Ucapan</a>
        @auth
          <a href="{{ route('dashboard') }}" class="btn-pink text-sm px-4 py-2 whitespace-nowrap">Dashboard</a>
        @else
          <a href="{{ route('login') }}" class="btn-pink text-sm px-4 py-2 whitespace-nowrap">Log Masuk</a>
        @endauth
      </div>
    </div>
  </div>
</nav>
