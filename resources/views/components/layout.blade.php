<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $description ?? 'GBS Trusted Company Limited - Professional Air Conditioning, Plumbing, Electrical Wiring, CCTV Installation, and Electric Fencing services across Tanzania (Dar es Salaam, Zanzibar, Arusha, Tanga, and more).' }}">
    <meta name="keywords" content="{{ $keywords ?? 'Air Conditioning Tanzania, Plumbing services Tanzania, Electrical wiring Dar es Salaam, CCTV installation Zanzibar, GBS Trusted Company, AC maintenance Arusha, AC repair Tanga' }}">
    <title>{{ $title ??  'GBS Trusted Company Limited - Air Conditioning, Electrical & Plumbing Services'}}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/gbs-logo.jpg') }}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite('resources/css/app.css')
</head>

<body class="font-sans" x-data="{ mobileMenuOpen: false }">

<header id="site-header" class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-md border-b border-gray-100 transition duration-300" x-data="{ mobileMenuOpen: false }">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex items-center justify-between h-20">
            <div class="flex-shrink-0">
                <a class="flex items-center gap-2" href="{{route('welcome')}}">
                    <img src="{{ asset('images/gbs-logo.jpg') }}" alt="GBS Logo" class="h-12 w-auto rounded-lg shadow-sm">
                    <span class="text-xl font-black tracking-tighter text-gray-900">GBS <span class="text-primary-600">TRUSTED</span></span>
                </a>
            </div>

            <div class="hidden lg:flex lg:items-center space-x-1">
                @php
                    $navLinks = [
                        ['name' => 'Home', 'route' => 'welcome'],
                        ['name' => 'About', 'route' => 'about'],
                        ['name' => 'Services', 'route' => 'services'],
                        ['name' => 'Contact', 'route' => 'contacts'],
                    ];
                @endphp
                @foreach($navLinks as $link)
                    <a
                        href="{{ route($link['route']) }}"
                        class="px-4 py-2 text-sm font-medium transition-all duration-200 rounded-full {{ request()->routeIs($link['route']) ? 'bg-primary-50 text-primary-600' : 'text-gray-600 hover:text-primary-600 hover:bg-gray-50' }}"
                    >
                        {{ $link['name'] }}
                    </a>
                @endforeach
                <a href="{{ route('contacts') }}" class="ml-4 px-6 py-2.5 bg-primary-600 text-white text-sm font-bold rounded-full hover:bg-primary-700 hover:shadow-lg hover:shadow-primary-500/30 transition-all duration-300">
                    Get Quote
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex lg:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="inline-flex items-center justify-center p-2 rounded-xl text-gray-600 hover:text-primary-600 hover:bg-gray-100 focus:outline-none transition-colors" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg x-show="mobileMenuOpen" x-cloak class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </nav>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="mobileMenuOpen"
         x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="lg:hidden bg-white border-b border-gray-100 shadow-xl"
         id="mobile-menu">
        <div class="px-4 pt-2 pb-6 space-y-1">
            @foreach($navLinks as $link)
                <a
                    href="{{ route($link['route']) }}"
                    class="block px-4 py-3 text-base font-semibold rounded-xl {{ request()->routeIs($link['route']) ? 'bg-primary-50 text-primary-600' : 'text-gray-600 hover:bg-gray-50 hover:text-primary-600' }}"
                >
                    {{ $link['name'] }}
                </a>
            @endforeach
            <div class="pt-4">
                <a href="{{ route('contacts') }}" class="block w-full text-center px-6 py-4 bg-primary-600 text-white font-bold rounded-xl shadow-lg shadow-primary-500/20">
                    Get a Quote
                </a>
            </div>
        </div>
    </div>
</header>

{{ $slot }}

<footer class="bg-gray-950 text-gray-300 relative overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/4 w-96 h-96 bg-primary-600/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 translate-y-1/2 -translate-x-1/4 w-96 h-96 bg-primary-600/5 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 py-20">
            <!-- Brand Column -->
            <div class="space-y-8">
                <div>
                    <a class="flex items-center gap-3 mb-6" href="{{route('welcome')}}">
                        <img src="{{ asset('images/gbs-logo.jpg') }}" alt="GBS Logo" class="h-14 w-auto rounded-xl">
                        <span class="text-2xl font-black tracking-tighter text-white">GBS <span class="text-primary-500">TRUSTED</span></span>
                    </a>
                    <p class="text-gray-400 leading-relaxed max-w-sm">
                        Providing world-class engineering solutions across <span class="text-white font-medium">Tanzania</span>. From the heart of Dar es Salaam to the shores of Zanzibar, we guarantee comfort in every project.
                    </p>
                </div>
                <div class="flex gap-4">
                    @php
                        $socials = [
                            ['icon' => 'fab fa-facebook-f', 'url' => '#'],
                            ['icon' => 'fab fa-instagram', 'url' => '#'],
                            ['icon' => 'fab fa-linkedin-in', 'url' => '#'],
                            ['icon' => 'fab fa-whatsapp', 'url' => 'https://wa.me/255787858011'],
                        ];
                    @endphp
                    @foreach($socials as $social)
                        <a href="{{ $social['url'] }}" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-primary-600 hover:text-white hover:-translate-y-1 transition-all duration-300">
                            <i class="{{ $social['icon'] }}"></i>
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Services Column -->
            <div>
                <h4 class="text-white font-bold text-lg mb-8 relative inline-block">
                    Our Expertise
                    <span class="absolute -bottom-2 left-0 w-8 h-1 bg-primary-600 rounded-full"></span>
                </h4>
                <ul class="space-y-4">
                    @php
                        $services = [
                            'AC Installation & Repair',
                            'Modern Plumbing Solutions',
                            'Electrical Systems & Wiring',
                            'CCTV & Smart Security',
                            'Electric Fencing',
                            'Infrastructure Projects',
                        ];
                    @endphp
                    @foreach($services as $service)
                        <li>
                            <a href="#" class="group flex items-center hover:text-primary-400 transition-colors">
                                <span class="w-1.5 h-1.5 rounded-full bg-primary-600 mr-3 group-hover:scale-150 transition-transform"></span>
                                {{ $service }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Contact Column -->
            <div>
                <h4 class="text-white font-bold text-lg mb-8 relative inline-block">
                    Get In Touch
                    <span class="absolute -bottom-2 left-0 w-8 h-1 bg-primary-600 rounded-full"></span>
                </h4>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="w-10 h-10 rounded-xl bg-primary-600/10 flex items-center justify-center text-primary-500 shrink-0">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <p class="text-sm leading-relaxed text-gray-400">
                            P.O Box 18009, Makumbusho,<br>
                            Kinondoni, Dar es salaam,<br>
                            <span class="text-white font-medium">Tanzania</span>
                        </p>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-10 h-10 rounded-xl bg-primary-600/10 flex items-center justify-center text-primary-500 shrink-0">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase font-bold tracking-wider mb-1">Call Us</p>
                            <a href="tel:+255787858011" class="text-white hover:text-primary-400 font-medium">+255 787 858011</a>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-10 h-10 rounded-xl bg-primary-600/10 flex items-center justify-center text-primary-500 shrink-0">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase font-bold tracking-wider mb-1">Email Us</p>
                            <a href="mailto:info@gbstrusted.co.tz" class="text-white hover:text-primary-400 font-medium">info@gbstrusted.co.tz</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Newsletter/Location Column -->
            <div>
                <h4 class="text-white font-bold text-lg mb-8 relative inline-block">
                    Nationwide Reach
                    <span class="absolute -bottom-2 left-0 w-8 h-1 bg-primary-600 rounded-full"></span>
                </h4>
                <p class="text-gray-400 text-sm leading-relaxed mb-6">
                    Our specialized teams are equipped to handle projects in any region of Tanzania, ensuring the same GBS quality everywhere.
                </p>
                <div class="p-6 bg-white/5 border border-white/10 rounded-2xl">
                    <div class="flex items-center gap-3 mb-4 text-primary-400">
                        <i class="fas fa-globe-africa text-2xl animate-pulse"></i>
                        <span class="text-sm font-bold text-white uppercase tracking-widest">Mainland & Islands</span>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['Dar es Salaam', 'Zanzibar', 'Arusha', 'Tanga', 'Dodoma'] as $city)
                            <span class="text-[10px] px-2 py-1 bg-white/5 rounded-md text-gray-400">{{ $city }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="py-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4 text-sm">
            <p>© {{ date('Y') }} <span class="text-white font-bold">GBS Trusted Company Limited</span>. All rights reserved.</p>
            <div class="flex gap-8 text-gray-500">
                <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
