<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="GBS Trusted Company Limited - Professional Air Conditioning, Plumbing, Electrical Wiring, CCTV Installation, and Electric Fencing services across Tanzania (Dar es Salaam, Zanzibar, Arusha, Tanga, and more).">
    <meta name="keywords" content="Air Conditioning Tanzania, Plumbing services Tanzania, Electrical wiring Dar es Salaam, CCTV installation Zanzibar, GBS Trusted Company, AC maintenance Arusha, AC repair Tanga">
    <title>{{ $title ??  'GBS Trusted Company Limited - Air Conditioning, Electrical & Plumbing Services'}}</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite('resources/css/app.css')
</head>

<body class="font-sans" x-data="{ mobileMenuOpen: false }">

<header id="site-header" class="fixed top-0 w-full z-50 bg-white shadow-md transition duration-300">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex items-center justify-between h-20 lg:py-0">
            <h1><a class="text-2xl font-bold" href="{{route('welcome')}}">
                    <img src="images/gbs-logo.jpg" alt="GBS Logo" class="h-20">
                    {{--                    <span class="text-primary-600">GBS</span> Trusted--}}
                </a></h1>

            <div class="hidden lg:flex lg:items-center lg:w-auto" id="navbarScroll">
                <ul class="flex flex-row space-x-8">
                    <li class="nav-item">
                        <a
                            class="{{ request()->routeIs('welcome') ? 'text-primary-600 font-semibold' : 'text-gray-600 hover:text-primary-600' }} transition duration-150 py-2 lg:py-0 uppercase text-sm tracking-widest"
                            href="{{ route('welcome') }}"
                        >Home</a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="{{ request()->routeIs('about') ? 'text-primary-600 font-semibold' : 'text-gray-600 hover:text-primary-600' }} transition duration-150 py-2 lg:py-0 uppercase text-sm tracking-widest"
                            href="{{ route('about') }}"
                        >About</a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="{{ request()->routeIs('services') ? 'text-primary-600 font-semibold' : 'text-gray-600 hover:text-primary-600' }} transition duration-150 py-2 lg:py-0 uppercase text-sm tracking-widest"
                            href="{{ route('services') }}"
                        >Services</a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="{{ request()->routeIs('contacts') ? 'text-primary-600 font-semibold' : 'text-gray-600 hover:text-primary-600' }} transition duration-150 py-2 lg:py-0 uppercase text-sm tracking-widest"
                            href="{{ route('contacts') }}"
                        >Contact</a>
                    </li>
                </ul>
            </div>

        </nav>
    </div>
</header>

{{ $slot }}

<footer class="bg-gray-800">
    <section class="py-12 md:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap -mx-4">

                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8 lg:mb-0">
                    <h6 class="text-lg font-semibold text-white mb-4 text-primary-400 border-b border-primary-400 pb-2 inline-block">About GBS</h6>
                    <p class="text-gray-400 mb-6 text-sm leading-relaxed"><strong>GBS Trusted Company Limited</strong> operates across <strong>Tanzania</strong> (Mainland and Zanzibar), providing expert solutions in AC, Electrical, Plumbing, and Security services since 2019.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center text-gray-400 hover:bg-primary-600 hover:text-white transition duration-300"><span class="fab fa-facebook-f"></span></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center text-gray-400 hover:bg-primary-600 hover:text-white transition duration-300"><span class="fab fa-instagram"></span></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center text-gray-400 hover:bg-primary-600 hover:text-white transition duration-300"><span class="fab fa-linkedin-in"></span></a>
                    </div>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8 lg:mb-0">
                    <h6 class="text-lg font-semibold mb-4 text-white border-b border-primary-400 pb-2 inline-block">Our Expertise</h6>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-gray-400 hover:text-primary-400 transition duration-150 flex items-center"><i class="fas fa-chevron-right text-[10px] mr-2 text-primary-600"></i> AC Installation & Repair</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary-400 transition duration-150 flex items-center"><i class="fas fa-chevron-right text-[10px] mr-2 text-primary-600"></i> Plumbing Solutions</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary-400 transition duration-150 flex items-center"><i class="fas fa-chevron-right text-[10px] mr-2 text-primary-600"></i> Electrical Systems</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary-400 transition duration-150 flex items-center"><i class="fas fa-chevron-right text-[10px] mr-2 text-primary-600"></i> CCTV & Security</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary-400 transition duration-150 flex items-center"><i class="fas fa-chevron-right text-[10px] mr-2 text-primary-600"></i> Electric Fencing</a></li>
                    </ul>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8 md:mb-0">
                    <h6 class="text-lg font-semibold mb-4 text-white border-b border-primary-400 pb-2 inline-block">Contact Info</h6>
                    <ul class="space-y-4 text-sm">
                        <li class="flex items-start text-gray-400 gap-3">
                            <i class="fas fa-map-marker-alt text-primary-500 mt-1"></i>
                            <span>P.O Box 18009, Makumbusho-Kinondoni, Dar es salaam, Tanzania.<br><small class="text-gray-500 italic">Serving Tanzania Nationwide</small></span>
                        </li>
                        <li class="flex items-center text-gray-400 gap-3">
                            <i class="fas fa-phone-alt text-primary-500"></i>
                            <a href="tel:+255787858011" class="hover:text-primary-400">+255 787 858011</a>
                        </li>
                        <li class="flex flex-col text-gray-400 gap-2">
                            <div class="flex items-center gap-3">
                                <i class="fas fa-envelope text-primary-500"></i>
                                <a href="mailto:domisahali@gmail.com" class="hover:text-primary-400">domisahali@gmail.com</a>
                            </div>
                            <div class="flex items-center gap-3 ml-7">
                                <a href="mailto:info@gbstrusted.co.tz" class="hover:text-primary-400 text-xs">info@gbstrusted.co.tz</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8 md:mb-0">
                    <h6 class="text-lg font-semibold mb-4 text-white border-b border-primary-400 pb-2 inline-block">Work Anywhere</h6>
                    <p class="text-gray-400 text-xs leading-relaxed mb-4">We are not limited to Dar es Salaam and Zanzibar. Our team is ready to deliver quality services <strong>anywhere in Tanzania</strong>, ensuring professionalism in every project.</p>
                    <img src="images/gbs-logo.jpg" alt="GBS" class="h-12 opacity-50 grayscale hover:grayscale-0 transition duration-300">
                </div>

            </div>

            <div class="mt-10 pt-6 border-t border-gray-700 flex flex-col md:flex-row justify-between items-center text-sm text-gray-400">
                <!-- Bold text updated to <strong> -->
                <p class="mb-4 md:mb-0">© 2025 <strong>GBS</strong> Trusted Company Limited. All rights reserved.</p>
            </div>
        </div>
    </section>
</footer>
</body>
</html>
