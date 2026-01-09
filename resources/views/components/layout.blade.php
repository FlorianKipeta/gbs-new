<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

            <button class="lg:hidden p-2" type="button" @click="mobileMenuOpen = !mobileMenuOpen" aria-label="Toggle navigation">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>

            <div :class="mobileMenuOpen ? 'block' : 'hidden'" class="lg:flex lg:items-center lg:w-auto absolute lg:static top-20 left-0 w-full bg-white lg:bg-transparent shadow-lg lg:shadow-none px-4 lg:px-0" id="navbarScroll">
                <ul class="flex flex-col lg:flex-row space-y-2 lg:space-y-0 lg:space-x-8 mx-auto my-2 lg:my-0">
                    <li class="nav-item">
                        <a
                            class="{{ request()->routeIs('welcome') ? 'text-primary-600 font-semibold' : 'text-gray-600 hover:text-primary-600' }} transition duration-150 py-2 lg:py-0"
                            href="{{ route('welcome') }}"
                        >Home</a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="{{ request()->routeIs('about') ? 'text-primary-600 font-semibold' : 'text-gray-600 hover:text-primary-600' }} transition duration-150 py-2 lg:py-0"
                            href="{{ route('about') }}"
                        >About Us</a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="{{ request()->routeIs('services') ? 'text-primary-600 font-semibold' : 'text-gray-600 hover:text-primary-600' }} transition duration-150 py-2 lg:py-0"
                            href="{{ route('services') }}"
                        >Services</a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="{{ request()->routeIs('contacts') ? 'text-primary-600 font-semibold' : 'text-gray-600 hover:text-primary-600' }} transition duration-150 py-2 lg:py-0"
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

                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8 lg:mb-0">
                    <h6 class="text-lg font-semibold text-white mb-4 text-primary-400">About GBS</h6>
                    <!-- Bold text updated to <strong> -->
                    <p class="text-gray-400 mb-6 text-sm">We are <strong>GBS Trusted Company Limited</strong>, providing top-notch solutions in Air conditioning, Electrical, Plumbing, CCTV, and Electric fence services in Dar es Salaam and Zanzibar since 2019.</p>
                    <div class="flex space-x-4">
                        <a href="#facebook" class="text-gray-400 hover:text-primary-400 transition duration-150"><span class="fab fa-facebook-f"></span></a>
                        <a href="#linkedin" class="text-gray-400 hover:text-primary-400 transition duration-150"><span class="fab fa-linkedin-in"></span></a>
                        <a href="#twitter" class="text-gray-400 hover:text-primary-400 transition duration-150"><span class="fab fa-twitter"></span></a>
                        <a href="#google" class="text-gray-400 hover:text-primary-400 transition duration-150"><span class="fab fa-google-plus-g"></span></a>
                    </div>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8 lg:mb-0">
                    <h6 class="text-xl font-bold mb-4 text-white">Our Services</h6>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#ac-install" class="text-gray-400 hover:text-white transition duration-150"><i class="fas fa-angle-right mr-2"></i> AC Installation & Replacement</a></li>
                        <li><a href="#ac-repair" class="text-gray-400 hover:text-white transition duration-150"><i class="fas fa-angle-right mr-2"></i> AC Repair & Emergency</a></li>
                        <li><a href="#plumbing" class="text-gray-400 hover:text-white transition duration-150"><i class="fas fa-angle-right mr-2"></i> 24/7 Plumbing Services</a></li>
                        <li><a href="#electrical" class="text-gray-400 hover:text-white transition duration-150"><i class="fas fa-angle-right mr-2"></i> Residential Electrical</a></li>
                        <li><a href="#cctv" class="text-gray-400 hover:text-white transition duration-150"><i class="fas fa-angle-right mr-2"></i> CCTV & Electric Fencing</a></li>
                    </ul>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8 md:mb-0">
                    <h6 class="text-xl font-bold mb-4 text-white">Contact Info</h6>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start text-gray-400"><i class="fas fa-map-marker-alt text-primary-400 mr-3 mt-1"></i> P.O Box 18009, Mwenge, Dar es salaam, Tanzania.</li>
                        <li class="flex items-center text-gray-400"><i class="fas fa-phone text-primary-400 mr-3"></i> +255 789 415238</li>
                        <li class="flex items-center text-gray-400"><i class="fas fa-envelope text-primary-400 mr-3"></i> bottosahali4@gmail.com</li>
                    </ul>
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
