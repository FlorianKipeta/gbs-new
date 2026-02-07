@php
    $footerSocials = [
        ['icon' => 'fab fa-facebook-f', 'url' => '#', 'name' => 'Facebook'],
        ['icon' => 'fab fa-instagram', 'url' => '#', 'name' => 'Instagram'],
        ['icon' => 'fab fa-whatsapp', 'url' => 'https://wa.me/255787858011', 'name' => 'WhatsApp'],
    ];
@endphp
@php
    $footerServices = [
        ['name' => 'AC Installation', 'route' => 'services'],
        ['name' => 'Electrical Services', 'route' => 'services'],
        ['name' => 'Plumbing Solutions', 'route' => 'services'],
        ['name' => 'CCTV & Security', 'route' => 'services'],
        ['name' => 'Electric Fencing', 'route' => 'services'],
        ['name' => 'Solar Installation', 'route' => 'services'],
    ];
@endphp
@php
    $footerLinks = [
        ['name' => 'About Our Company', 'route' => 'about'],
        ['name' => 'Our Project Portfolio', 'route' => 'welcome', 'hash' => '#projects'],
        ['name' => 'Contact Support', 'route' => 'contacts'],
        ['name' => 'Terms of Service', 'route' => 'terms-and-conditions'],
        ['name' => 'Privacy Policy', 'route' => 'privacy-policy'],
    ];
@endphp
@php
    $socials = [
        ['icon' => 'fab fa-facebook-f', 'url' => '#'],
        ['icon' => 'fab fa-instagram', 'url' => '#'],
        ['icon' => 'fab fa-whatsapp', 'url' => 'https://wa.me/255787858011'],
    ];
@endphp
@php
    $navLinks = [
        ['name' => 'Home', 'route' => 'welcome'],
        ['name' => 'About', 'route' => 'about'],
        ['name' => 'Services', 'route' => 'services'],
        ['name' => 'Contact', 'route' => 'contacts'],
    ];
@endphp
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $description ?? 'GBS Trusted Company Limited - Professional Air Conditioning, Plumbing, Electrical Wiring, CCTV Installation, and Electric Fencing services in Dar es Salaam and across Tanzania.' }}">
    <meta name="keywords" content="{{ $keywords ?? 'Air Conditioning Tanzania, Plumbing services Tanzania, Electrical wiring Dar es Salaam, CCTV installation Tanzania, GBS Trusted Company, AC maintenance Tanzania, AC repair Tanzania, HVAC services' }}">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? 'GBS Trusted Company Limited - Air Conditioning, Electrical & Plumbing Services' }}">
    <meta property="og:description" content="{{ $description ?? 'Professional Air Conditioning, Plumbing, Electrical Wiring, CCTV Installation, and Electric Fencing services in Dar es Salaam and across Tanzania.' }}">
    <meta property="og:image" content="{{ asset('images/gbs-logo.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $title ?? 'GBS Trusted Company Limited - Air Conditioning, Electrical & Plumbing Services' }}">
    <meta property="twitter:description" content="{{ $description ?? 'Professional Air Conditioning, Plumbing, Electrical Wiring, CCTV Installation, and Electric Fencing services in Dar es Salaam and across Tanzania.' }}">
    <meta property="twitter:image" content="{{ asset('images/gbs-logo.jpg') }}">

    <title>{{ $title ??  'GBS Trusted Company Limited - Air Conditioning, Electrical & Plumbing Services'}}</title>

    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "LocalBusiness",
      "name": "GBS Trusted Company Limited",
      "image": "{{ asset('images/gbs-logo.jpg') }}",
      "@@id": "{{ url('/') }}",
      "url": "{{ url('/') }}",
      "telephone": "+255763383880",
      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "Wakatibado Street, Makumbusho",
        "addressLocality": "Dar es Salaam",
        "addressCountry": "TZ"
      },
      "geo": {
        "@@type": "GeoCoordinates",
        "latitude": -6.7691,
        "longitude": 39.2385
      },
      "openingHoursSpecification": {
        "@@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday"
        ],
        "opens": "08:00",
        "closes": "18:00"
      },
      "sameAs": [
        "https://wa.me/255787858011"
      ]
    }
    </script>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite('resources/css/app.css')
</head>

<body class="font-sans" x-data="{ mobileMenuOpen: false }">
<header id="site-header" class="fixed top-0 w-full z-50 transition-all duration-300"
        x-data="{
            mobileMenuOpen: false,
            isScrolled: false
        }"
        @scroll.window="isScrolled = (window.pageYOffset > 20)"
        :class="isScrolled ? 'bg-white shadow-lg py-2' : 'bg-white/90 backdrop-blur-md py-4'">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex items-center justify-between transition-all duration-300">
            <div class="flex-shrink-0">
                <a class="flex items-center gap-3 group" href="{{route('welcome')}}">
                    <div class="relative overflow-hidden rounded-xl shadow-md transition-transform duration-300 group-hover:scale-105">
                        <img src="{{ asset('images/gbs-logo.jpg') }}" alt="GBS Logo" class="h-12 w-auto">
                    </div>
                    <div class="flex flex-col justify-center">
                        <span class="text-xl font-black tracking-tighter text-gray-900 leading-none">GBS <span class="text-primary-600">TRUSTED</span></span>
                        <span class="text-[10px] font-bold text-gray-500 uppercase tracking-widest mt-1">Guaranteed Comfort</span>
                    </div>
                </a>
            </div>

            <div class="hidden lg:flex lg:items-center space-x-2">
                @foreach($navLinks as $link)
                    <a
                        href="{{ route($link['route']) }}"
                        class="relative px-4 py-2 text-sm font-bold uppercase tracking-wider transition-all duration-200 rounded-lg group {{ request()->routeIs($link['route']) ? 'text-primary-600' : 'text-gray-700 hover:text-primary-600' }}"
                    >
                        {{ $link['name'] }}
                        <span class="absolute bottom-1 left-4 right-4 h-0.5 bg-primary-600 transform origin-left transition-transform duration-300 {{ request()->routeIs($link['route']) ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}"></span>
                    </a>
                @endforeach
                <div class="pl-4 ml-4 border-l border-gray-200">
                    <a href="{{ route('contacts') }}" class="inline-flex items-center px-6 py-3 bg-primary-600 text-white text-xs font-black uppercase tracking-widest rounded-xl hover:bg-primary-700 hover:shadow-xl hover:shadow-primary-500/30 transition-all duration-300 active:scale-95">
                        Get Quote <i class="fas fa-arrow-right ml-2 text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="flex lg:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="inline-flex items-center justify-center p-2.5 rounded-xl text-gray-700 bg-gray-50 hover:text-primary-600 hover:bg-primary-50 focus:outline-none transition-all duration-300" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <div class="w-6 h-5 relative flex flex-col justify-between">
                        <span class="w-full h-0.5 bg-current rounded-full transition-all duration-300" :class="mobileMenuOpen ? 'rotate-45 translate-y-2' : ''"></span>
                        <span class="w-full h-0.5 bg-current rounded-full transition-all duration-300" :class="mobileMenuOpen ? 'opacity-0' : ''"></span>
                        <span class="w-full h-0.5 bg-current rounded-full transition-all duration-300" :class="mobileMenuOpen ? '-rotate-45 -translate-y-2' : ''"></span>
                    </div>
                </button>
            </div>
        </nav>
    </div>
</header>

    <!-- Mobile menu -->
    <div x-show="mobileMenuOpen"
         x-cloak
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         @click.away="mobileMenuOpen = false"
         class="lg:hidden absolute top-full left-0 w-full bg-white border-t border-gray-100 shadow-2xl overflow-hidden rounded-b-3xl"
         id="mobile-menu">
        <div class="px-4 pt-4 pb-8 space-y-2">
            @foreach($navLinks as $link)
                <a
                    href="{{ route($link['route']) }}"
                    class="flex items-center justify-between px-5 py-4 text-base font-bold uppercase tracking-wider rounded-2xl transition-all duration-300 {{ request()->routeIs($link['route']) ? 'bg-primary-600 text-white shadow-lg shadow-primary-500/30' : 'text-gray-700 hover:bg-primary-50 hover:text-primary-600' }}"
                >
                    {{ $link['name'] }}
                    <i class="fas fa-chevron-right text-xs opacity-50"></i>
                </a>
            @endforeach
            <div class="pt-6">
                <a href="{{ route('contacts') }}" class="flex items-center justify-center w-full px-6 py-5 bg-gray-900 text-white font-black uppercase tracking-widest rounded-2xl shadow-xl hover:bg-primary-600 transition-all duration-300">
                    Get a Free Quote <i class="fas fa-paper-plane ml-3"></i>
                </a>
            </div>

            <div class="pt-8 flex justify-center gap-6">
                @foreach($socials as $social)
                    <a href="{{ $social['url'] }}" class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-500 hover:bg-primary-600 hover:text-white transition-all duration-300">
                        <i class="{{ $social['icon'] }}"></i>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</header>

{{ $slot }}

<footer class="bg-gray-900 text-gray-300 relative overflow-hidden">
    <!-- Brand Wave Pattern -->
    <div class="absolute top-0 left-0 w-full overflow-hidden leading-none rotate-180">
        <svg class="relative block w-full h-[50px] text-white" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="currentColor"></path>
        </svg>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Footer CTA -->
        <div class="pt-24 pb-16 border-b border-white/5">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                <div class="max-w-2xl text-center lg:text-left">
                    <h2 class="text-3xl md:text-5xl font-black text-white mb-6 leading-tight">Ready to Experience <span class="text-primary-500">Guaranteed Comfort</span>?</h2>
                    <p class="text-gray-400 text-lg">Contact our team of experts today for all your AC, plumbing, and electrical needs.</p>
                </div>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="tel:+255763383880" class="inline-flex items-center px-8 py-4 bg-primary-600 text-white font-black uppercase tracking-widest rounded-2xl hover:bg-primary-700 transition-all duration-300 shadow-xl shadow-primary-500/20">
                        <i class="fas fa-phone-alt mr-3"></i> Call Now
                    </a>
                    <a href="{{ route('contacts') }}" class="inline-flex items-center px-8 py-4 bg-white text-gray-900 font-black uppercase tracking-widest rounded-2xl hover:bg-gray-100 transition-all duration-300">
                        Get a Quote
                    </a>
                </div>
            </div>
        </div>

        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 py-20">
            <!-- Brand Column -->
            <div class="space-y-8">
                <div>
                    <a class="flex items-center gap-3 mb-6" href="{{route('welcome')}}">
                        <img src="{{ asset('images/gbs-logo.jpg') }}" alt="GBS Logo" class="h-16 w-auto rounded-2xl shadow-2xl ring-4 ring-white/5">
                        <div class="flex flex-col">
                            <span class="text-2xl font-black tracking-tighter text-white">GBS <span class="text-primary-500">TRUSTED</span></span>
                            <span class="text-[10px] font-bold text-gray-500 uppercase tracking-widest">Guaranteed Comfort</span>
                        </div>
                    </a>
                    <p class="text-gray-400 leading-relaxed">
                        Setting the standard for excellence in engineering services since 2019. We provide reliable, sustainable, and professional technical solutions.
                    </p>
                </div>
                <div class="flex gap-4">
                    @foreach($footerSocials as $social)
                        <a href="{{ $social['url'] }}" class="w-12 h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-primary-600 hover:text-white hover:-translate-y-1 transition-all duration-300 group" title="{{ $social['name'] }}">
                            <i class="{{ $social['icon'] }} text-lg"></i>
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Services Column -->
            <div>
                <h4 class="text-white font-black uppercase tracking-widest text-sm mb-10 flex items-center gap-3">
                    <span class="w-8 h-px bg-primary-600"></span>
                    Our Services
                </h4>
                <ul class="space-y-4">
                    @foreach($footerServices as $service)
                        <li>
                            <a href="{{ route($service['route']) }}" class="group flex items-center text-gray-400 hover:text-primary-400 transition-all duration-300">
                                <i class="fas fa-chevron-right text-[10px] mr-3 opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all"></i>
                                {{ $service['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-white font-black uppercase tracking-widest text-sm mb-10 flex items-center gap-3">
                    <span class="w-8 h-px bg-primary-600"></span>
                    Company
                </h4>
                <ul class="space-y-4">
                    @foreach($footerLinks as $link)
                        <li>
                            <a href="{{ route($link['route']) }}{{ $link['hash'] ?? '' }}" class="group flex items-center text-gray-400 hover:text-primary-400 transition-all duration-300">
                                <i class="fas fa-chevron-right text-[10px] mr-3 opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all"></i>
                                {{ $link['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Contact Column -->
            <div>
                <h4 class="text-white font-black uppercase tracking-widest text-sm mb-10 flex items-center gap-3">
                    <span class="w-8 h-px bg-primary-600"></span>
                    Contact Info
                </h4>
                <div class="space-y-6">
                    <div class="flex gap-4 group">
                        <div class="w-12 h-12 rounded-2xl bg-primary-600/10 flex items-center justify-center text-primary-500 shrink-0 group-hover:bg-primary-600 group-hover:text-white transition-all duration-300">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase font-bold tracking-widest mb-1">Our Location</p>
                            <p class="text-sm leading-relaxed text-gray-300">
                                Wakatibado Street, Makumbusho<br>
                                Dar es Salaam, Tanzania
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-4 group">
                        <div class="w-12 h-12 rounded-2xl bg-primary-600/10 flex items-center justify-center text-primary-500 shrink-0 group-hover:bg-primary-600 group-hover:text-white transition-all duration-300">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase font-bold tracking-widest mb-1">24/7 Support</p>
                            <a href="tel:+255763383880" class="text-white hover:text-primary-400 font-bold block transition-colors">+255 763 383 880</a>
                            <a href="tel:+255787858011" class="text-white hover:text-primary-400 font-bold block transition-colors">+255 787 858 011</a>
                        </div>
                    </div>
                    <div class="flex gap-4 group">
                        <div class="w-12 h-12 rounded-2xl bg-primary-600/10 flex items-center justify-center text-primary-500 shrink-0 group-hover:bg-primary-600 group-hover:text-white transition-all duration-300">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase font-bold tracking-widest mb-1">Email Us</p>
                            <a href="mailto:info@gbstrusted.co.tz" class="text-white hover:text-primary-400 font-bold transition-colors">info@gbstrusted.co.tz</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="py-10 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6 text-sm">
            <div class="flex items-center gap-4">
                <div class="w-8 h-8 rounded-lg bg-primary-600 flex items-center justify-center text-white text-[10px] font-black">GBS</div>
                <p class="text-gray-500">© {{ date('Y') }} <span class="text-white font-bold tracking-tight">GBS Trusted Company Limited</span>. All rights reserved.</p>
            </div>
            <div class="flex items-center gap-8">
                <a href="{{ route('privacy-policy') }}" class="text-gray-500 hover:text-white transition-colors">Privacy Policy</a>
                <a href="{{ route('terms-and-conditions') }}" class="text-gray-500 hover:text-white transition-colors">Terms & Conditions</a>
                <a href="{{ route('welcome') }}#site-header" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary-600 hover:text-white transition-all duration-300">
                    <i class="fas fa-chevron-up"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
