@extends('layouts.guest')

@section('title', 'Lokasi Majlis')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<style>
    .scalloped-border {
        background-image: radial-gradient(circle at 10px 0, rgba(254, 253, 249) 12px, #ef3976 13px);
        background-size: 20px 20px;
        height: 10px;
        width: 100%;
    }

    .italic {
    font-style: italic;
    color: #db2777;
    }

    .font-display {
        font-family: 'Newsreader', serif;
    }
    .dark .dark\:text-slate-200 {
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
    .dark .dark\:text-slate-300 {
        --tw-text-opacity: 1;
        color: #3b312c;
    }

</style>

<div class="flex-1 w-full flex flex-col bg-[#88786F] dark:bg-[#221016] font-display text-slate-900 dark:text-slate-100 relative z-20">
    <header class="relative pt-8 pb-4 px-6 text-center border-b border-[#ef3976]/10 bg-[#f8f6f6] dark:bg-[#ffffff]/5">
        <div class="absolute top-0 left-0 w-full scalloped-border opacity-20"></div>
        <h1 class="text-3xl font-bold text-[#3b312c] italic">Lokasi Majlis</h1>
        <p class="text-slate-600 dark:text-slate-400 mt-1 tracking-wide uppercase text-xs font-semibold">Join us for the celebration</p>
    </header>

    @php
        $googleMapsUrl = 'https://www.google.com/maps/place/3+TOWERS/@3.1613217,101.7393931,17z/data=!3m2!4b1!5s0x31cc37a5521687dd:0x668b97615ce76b7e!4m6!3m5!1s0x31cc37affe8f586f:0x3fe2215128325ffe!8m2!3d3.1613217!4d101.7419734!16s%2Fg%2F11g6xqxkjf?entry=tts&g_ep=EgoyMDI2MDMxMC4wIPu8ASoASAFQAw%3D%3D&skid=c58ff3bc-db7e-42ab-b989-0d51ab33ce46';
        
        $renderer = new \BaconQrCode\Renderer\ImageRenderer(
            new \BaconQrCode\Renderer\RendererStyle\RendererStyle(200),
            new \BaconQrCode\Renderer\Image\SvgImageBackEnd()
        );
        $writer = new \BaconQrCode\Writer($renderer);
        $qrSvg = $writer->writeString($googleMapsUrl);

        $wazeUrl = 'https://www.waze.com/en-GB/live-map/directions/my/wilayah-persekutuan-kuala-lumpur/kuala-lumpur/3-towers?navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location&to=place.ChIJb1iP_q83zDER_l8yKFEh4j8';
        
        $rendererWaze = new \BaconQrCode\Renderer\ImageRenderer(
            new \BaconQrCode\Renderer\RendererStyle\RendererStyle(200),
            new \BaconQrCode\Renderer\Image\SvgImageBackEnd()
        );
        $writerWaze = new \BaconQrCode\Writer($rendererWaze);
        $qrSvgWaze = $writerWaze->writeString($wazeUrl);
    @endphp

    <div class="flex-1 pb-24">
        <div class="max-w-md mx-auto p-6 space-y-6">
            <div class="relative group">
                <!-- Location Photo Image Container -->
                <div class="relative bg-white dark:bg-[#ffffff]/5 border border-[#ef3976]/20 rounded-xl overflow-hidden shadow-sm">
                    <div class="w-full h-64 bg-slate-200 dark:bg-slate-800 flex items-center justify-center relative" style="background-image: url('{{ asset('images/lokasi.jpg') }}'); background-size: cover; background-position: center;">
                    </div>
                    <div class="p-6 text-center border-t border-[#fffff]/10">
                        <h2 class="text-xl font-bold text-slate-800 dark:text-slate-200 mb-2">OneTwo KL</h2>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed italic">
                            T3-19-01, 3 Towers, 296, Jln Ampang,<br/>
                            Kampung Berembang, 50450 Kuala Lumpur
                        </p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <a class="flex flex-col items-center py-6 px-4 bg-white dark:bg-[#221016] border border-[#ef3976]/10 rounded-xl shadow-sm hover:border-[#ef3976]/40 transition-colors group" href="{{ $googleMapsUrl }}" target="_blank">
                    <div class="w-full aspect-square bg-[#f8f6f6] dark:bg-slate-300 rounded-lg mb-4 flex items-center justify-center border border-[#ef3976]/20 p-2 overflow-hidden [&>svg]:w-full [&>svg]:h-full [&>svg]:max-w-[120px]">
                        {!! $qrSvg !!}
                    </div>
                    <span class="material-symbols-outlined text-[#ef3976] mb-1">map</span>
                    <span class="text-sm font-bold text-slate-700 dark:text-slate-300">Google Maps</span>
                </a>
                
                <a class="flex flex-col items-center py-6 px-4 bg-white dark:bg-[#221016] border border-[#ef3976]/10 rounded-xl shadow-sm hover:border-[#ef3976]/40 transition-colors group" href="{{ $wazeUrl }}" target="_blank">
                    <div class="w-full aspect-square bg-[#f8f6f6] dark:bg-slate-300 rounded-lg mb-4 flex items-center justify-center border border-[#ef3976]/20 p-2 overflow-hidden [&>svg]:w-full [&>svg]:h-full [&>svg]:max-w-[120px]">
                        {!! $qrSvgWaze !!}
                    </div>
                    <span class="material-symbols-outlined text-[#ef3976] mb-1">navigation</span>
                    <span class="text-sm font-bold text-slate-700 dark:text-slate-300">Waze</span>
                </a>
            </div>

            <div class="p-6 bg-[#ef3976]/5 rounded-xl border border-[#ef3976]/10 text-center italic mt-2">
                <p class="text-slate-600 dark:text-slate-400 text-sm">
                    "Two hearts, one destination. We can't wait to see you there."
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
