<!-- resources/views/tasks.blade.php -->
<x-layout
    title="GBS Trusted Company Limited - Guaranteed Comfort"
    description="Professional AC installation, plumbing, electrical wiring, and security systems. Expert solutions for homes, industries, and commercial properties."
    keywords="AC Installation, Electrical Wiring, Plumbing, CCTV Security, GBS Trusted Company, HVAC"
>
    <section id="home" class="relative min-h-screen flex items-center pt-20 bg-gray-50 overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-primary-600 skew-x-[-12deg] translate-x-1/4 hidden lg:block"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
                <div class="max-w-2xl">
                    <span class="inline-block px-4 py-1.5 mb-6 text-xs font-black tracking-widest text-primary-600 uppercase bg-primary-100 rounded-full">Engineering Excellence since 2019</span>
                    <h1 class="text-5xl md:text-7xl font-black text-gray-900 mb-8 leading-[1.1] tracking-tighter">
                        Guaranteed <span class="text-primary-600">Comfort</span> in Every Project.
                    </h1>
                    <p class="text-xl text-gray-600 mb-10 leading-relaxed">
                        Professional Air Conditioning, Electrical, and Plumbing services. We deliver high-standard technical solutions with precision and trust.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contacts" class="px-8 py-4 bg-primary-600 text-white font-bold rounded-2xl shadow-xl shadow-primary-500/30 hover:bg-primary-700 hover:-translate-y-1 transition-all duration-300 text-center">
                            Get a Quote
                        </a>
                        <a href="#services" class="px-8 py-4 bg-white text-gray-900 font-bold rounded-2xl shadow-lg border border-gray-100 hover:bg-gray-50 hover:-translate-y-1 transition-all duration-300 text-center">
                            Our Services
                        </a>
                    </div>
                </div>
                <div class="mt-16 lg:mt-0 relative">
                    <div class="relative z-10 rounded-[3rem] overflow-hidden shadow-2xl border-8 border-white">
                        <img src="{{ asset('images/gbs-images/gbs-trusted-company-limited-1.jpeg') }}" alt="GBS Excellence" class="w-full h-[600px] object-cover">
                    </div>
                    <div class="absolute -bottom-10 -left-10 bg-white p-8 rounded-3xl shadow-2xl z-20 hidden md:block border border-gray-100">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 bg-primary-50 rounded-2xl flex items-center justify-center text-primary-600 text-3xl">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <div>
                                <p class="text-3xl font-black text-gray-900 leading-none">100%</p>
                                <p class="text-sm font-bold text-gray-500 uppercase tracking-widest">Satisfaction</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="stats" class="py-20 bg-gray-900 relative overflow-hidden">
        <div class="absolute inset-0 bg-primary-600/5"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8">
                <div class="p-8 bg-white/5 border border-white/10 rounded-3xl backdrop-blur-md text-center group hover:bg-primary-600 transition-all duration-500">
                    <p class="text-4xl md:text-6xl font-black text-white mb-2 group-hover:scale-110 transition-transform">6+</p>
                    <p class="uppercase text-xs font-bold tracking-widest text-primary-400 group-hover:text-white">Years Experience</p>
                </div>
                <div class="p-8 bg-white/5 border border-white/10 rounded-3xl backdrop-blur-md text-center group hover:bg-primary-600 transition-all duration-500">
                    <p class="text-4xl md:text-6xl font-black text-white mb-2 group-hover:scale-110 transition-transform">98%</p>
                    <p class="uppercase text-xs font-bold tracking-widest text-primary-400 group-hover:text-white">Success Rate</p>
                </div>
                <div class="p-8 bg-white/5 border border-white/10 rounded-3xl backdrop-blur-md text-center group hover:bg-primary-600 transition-all duration-500">
                    <p class="text-4xl md:text-6xl font-black text-white mb-2 group-hover:scale-110 transition-transform">10+</p>
                    <p class="uppercase text-xs font-bold tracking-widest text-primary-400 group-hover:text-white">Projects Done</p>
                </div>
                <div class="p-8 bg-white/5 border border-white/10 rounded-3xl backdrop-blur-md text-center group hover:bg-primary-600 transition-all duration-500">
                    <p class="text-4xl md:text-6xl font-black text-white mb-2 group-hover:scale-110 transition-transform">24/7</p>
                    <p class="uppercase text-xs font-bold tracking-widest text-primary-400 group-hover:text-white">Active Support</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-16 md:py-24 bg-white scroll-mt-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">

                <div class="lg:col-span-1 order-2 lg:order-1">
                    <p class="text-primary-600 text-lg font-semibold mb-2 uppercase tracking-wide">Our Story</p>
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-800 mb-6 leading-tight">
                        Expertise You Can <strong class="text-primary-600">Trust</strong>.
                    </h2>
                    <p class="text-gray-600 mb-6 leading-relaxed text-lg">
                        Founded in Dar es Salaam, <strong>GBS Trusted Company Limited</strong> is a BRELA-registered company (No. 154573453) specializing in Air Conditioning, refrigeration, plumbing, CCTV, electrical fencing, and equipment trading.
                    </p>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Since 2019, we have provided multi-discipline engineering services with an innovative problem-solving approach. Our highly qualified team offers complete services from project feasibility to detailed design and construction management.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mb-10">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-primary-50 rounded-lg flex items-center justify-center text-primary-600 mr-4">
                                <i class="fas fa-bullseye text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-800 mb-1">Our Mission</h4>
                                <p class="text-gray-600 text-sm">To provide the highest quality products and services exceeding our client’s expectations through excellence and professionalism.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-primary-50 rounded-lg flex items-center justify-center text-primary-600 mr-4">
                                <i class="fas fa-eye text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-800 mb-1">Our Vision</h4>
                                <p class="text-gray-600 text-sm">Becoming the most reliable, sustainable in technology, customer-oriented, and fastest-growing service provider.</p>
                            </div>
                        </div>
                    </div>

                    <a href="{{route('about')}}" class="inline-flex items-center px-8 py-4 border border-primary-600 text-base font-bold rounded-xl shadow-sm text-primary-600 bg-white hover:bg-primary-600 hover:text-white transition-all duration-300">
                        Read Our Full Story <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>

                <div class="lg:col-span-1 order-1 lg:order-2 mt-12 lg:mt-0 relative">
                    <div class="relative">
                        <img src="{{ asset('images/gbs-images/gbs-trusted-company-limited-20.jpeg') }}" alt="Engineering Excellence" class="rounded-[3rem] shadow-2xl w-full h-[600px] object-cover relative z-10 border-8 border-white">
                        <div class="absolute -bottom-12 -left-12 w-1/2 hidden lg:block z-20">
                            <div class="bg-white p-6 rounded-[2rem] shadow-2xl border border-gray-100">
                                <img src="{{ asset('images/gbs-images/gbs-trusted-company-limited-25.jpeg') }}" alt="Team Working" class="w-full h-48 object-cover rounded-2xl">
                                <div class="mt-4 flex items-center gap-3">
                                    <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
                                    <span class="text-xs font-bold uppercase tracking-widest text-gray-500">Active Projects</span>
                                </div>
                            </div>
                        </div>
                        <div class="absolute -top-10 -right-10 w-40 h-40 bg-primary-600 rounded-full flex items-center justify-center text-white text-center p-6 z-20 shadow-2xl border-[12px] border-white group">
                            <div class="group-hover:scale-110 transition-transform duration-500">
                                <p class="text-4xl font-black leading-none">6+</p>
                                <p class="text-[10px] uppercase font-black tracking-tighter">Years of Trust</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="work" class="py-24 bg-gray-50 scroll-mt-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20 max-w-3xl mx-auto">
                <span class="inline-block px-4 py-1.5 mb-4 text-xs font-black tracking-widest text-primary-600 uppercase bg-primary-50 rounded-full">Our Excellence</span>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 tracking-tight">Technical Solutions for <span class="text-primary-600 italic">Total Comfort</span></h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">
                @php
                    $features = [
                        [
                            'icon' => 'fas fa-fan',
                            'title' => 'AC Installation',
                            'desc' => 'Professional AC installation for homes, industries, and commercial buildings. We handle central air, ductless mini-splits, and more.',
                            'image' => asset('images/gbs-images/gbs-trusted-company-limited-30.jpeg')
                        ],
                        [
                            'icon' => 'fas fa-bolt',
                            'title' => 'Electrical Services',
                            'desc' => 'Qualified technicians for design, installation, and maintenance of all electrical systems.',
                            'image' => asset('images/gbs-images/gbs-trusted-company-limited-35.jpeg')
                        ],
                        [
                            'icon' => 'fas fa-wrench',
                            'title' => 'Plumbing Services',
                            'desc' => 'From leaky faucets to complex setups. Certified plumbers for residential, commercial, and industrial areas.',
                            'image' => asset('images/gbs-images/gbs-trusted-company-limited-40.jpeg')
                        ],
                        [
                            'icon' => 'fas fa-video',
                            'title' => 'CCTV & Security',
                            'desc' => 'Design, installation, and repair of security systems using leading brands like Hikvision and Dahua.',
                            'image' => asset('images/gbs-images/gbs-trusted-company-limited-45.jpeg')
                        ],
                        [
                            'icon' => 'fas fa-solar-panel',
                            'title' => 'Solar Installation',
                            'desc' => 'Sustainable energy solutions for homes and businesses with high-quality solar power systems.',
                            'image' => asset('images/gbs-images/gbs-trusted-company-limited-50.jpeg')
                        ],
                        [
                            'icon' => 'fas fa-shield-alt',
                            'title' => 'Electric Fencing',
                            'desc' => 'Strong perimeter security barriers with high-voltage pulses for durable protection and peace of mind.',
                            'image' => asset('images/gbs-images/gbs-trusted-company-limited-55.jpeg')
                        ],
                    ];
                @endphp
                @foreach($features as $feature)
                    <div class="group relative bg-white rounded-[2rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 flex flex-col h-full">
                        <div class="h-64 overflow-hidden relative">
                            <img src="{{ $feature['image'] }}" alt="{{ $feature['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-gray-900/20 to-transparent"></div>
                            <div class="absolute bottom-6 left-6 flex items-center gap-3">
                                <div class="w-12 h-12 flex items-center justify-center bg-primary-600 text-white rounded-xl text-xl shadow-xl group-hover:rotate-12 transition-transform duration-500">
                                    <i class="{{ $feature['icon'] }}"></i>
                                </div>
                                <h4 class="text-xl font-black text-white drop-shadow-md">{{ $feature['title'] }}</h4>
                            </div>
                        </div>
                        <div class="p-8 flex flex-col flex-grow">
                            <p class="text-gray-600 text-base leading-relaxed mb-8 flex-grow">
                                {{ $feature['desc'] }}
                            </p>
                            <div class="flex items-center justify-between pt-6 border-t border-gray-50">
                                <a href="{{ route('services') }}" class="inline-flex items-center text-sm font-black uppercase tracking-widest text-primary-600 group/link">
                                    <span>Explore Service</span>
                                    <i class="fas fa-arrow-right ml-2 group-hover/link:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">

                <div class="lg:col-span-1 mb-12 lg:mb-0">
                    <p class="text-primary-600 text-lg font-semibold mb-2 uppercase tracking-wide">Commitment to Service</p>
                    <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8">Why GBS is the Right Choice</h3>

                    <div class="space-y-8">

                        <div class="flex items-start group">
                            <div class="w-14 h-14 flex items-center justify-center bg-primary-50 text-primary-600 rounded-2xl text-2xl flex-shrink-0 mr-6 group-hover:bg-primary-600 group-hover:text-white transition-all duration-300">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-black text-gray-900 mb-2">Licensed & Insured Experts</h4>
                                <p class="text-gray-500 leading-relaxed">Our technicians are fully certified and equipped, ensuring compliant and high-standard service delivery.</p>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div class="w-14 h-14 flex items-center justify-center bg-primary-50 text-primary-600 rounded-2xl text-2xl flex-shrink-0 mr-6 group-hover:bg-primary-600 group-hover:text-white transition-all duration-300">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-black text-gray-900 mb-2">24/7 Emergency Support</h4>
                                <p class="text-gray-500 leading-relaxed">We offer round-the-clock availability for critical repairs, minimizing downtime for your business or home.</p>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div class="w-14 h-14 flex items-center justify-center bg-primary-50 text-primary-600 rounded-2xl text-2xl flex-shrink-0 mr-6 group-hover:bg-primary-600 group-hover:text-white transition-all duration-300">
                                <i class="fas fa-star"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-black text-gray-900 mb-2">Guaranteed Quality</h4>
                                <p class="text-gray-500 leading-relaxed">All work is backed by our signature service guarantee, using only durable and high-quality equipment.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image source updated to use asset() -->
                <div class="lg:col-span-1 p-8 bg-gray-100 rounded-xl shadow-2xl relative overflow-hidden">
                    <img src="{{ asset('images/gbs-logo.jpg') }}" alt="Book a Technician" class="absolute inset-0 w-full h-full object-cover opacity-30 blur-sm">
                    <div class="relative z-10">
                        <p class="text-primary-700 text-2xl font-bold mb-3">Ready for Service?</p>
                        <h3 class="text-4xl font-extrabold text-gray-800 mb-6 leading-tight">Book Your Expert Technician Today.</h3>
                        <p class="text-gray-700 mb-8">Contact us now for a free consultation or immediate technical support. We serve all areas with professional engineering solutions.</p>

                        <div class="space-y-4">
                            <a href="tel:+255763383880" class="block w-full text-center px-6 py-4 border border-primary-600 text-lg font-bold rounded-lg shadow-md text-primary-600 bg-white hover:bg-primary-50 transition duration-300">
                                Call Now: +255 763 383 880
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-16 md:py-24 bg-gray-50 scroll-mt-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <p class="text-primary-600 text-lg font-semibold mb-2 uppercase tracking-wide">Our Track Record</p>
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Some of our previous projects successfully completed</h2>
                <p class="text-gray-600">Explore how GBS Trusted Company Limited delivers excellence across various industries and locations.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1: Azure Properties -->
                <a href="{{ route('projects.show', 'azure-properties') }}" class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 flex flex-col">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/gbs-images/gbs-trusted-company-limited-60.jpeg') }}" alt="Azure Properties" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute top-4 left-4 bg-primary-600 text-white text-xs font-bold px-4 py-1.5 rounded-full shadow-lg">2024</div>
                    </div>
                    <div class="p-8 flex-grow border-b-4 border-transparent group-hover:border-primary-600 transition-all duration-300">
                        <h4 class="text-xl font-black text-gray-900 mb-3 uppercase tracking-tight">Azure Properties – Michamvi</h4>
                        <p class="text-gray-600 text-sm mb-6 leading-relaxed">Comprehensive installation of Air Conditioning, Plumbing, Electrical Wiring, and CCTV systems for luxury coastal development.</p>
                        <ul class="grid grid-cols-1 gap-2 mb-6">
                            <li class="flex items-center text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-2 h-2 bg-primary-600 rounded-full mr-2"></span>Split & Central AC</li>
                            <li class="flex items-center text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-2 h-2 bg-primary-600 rounded-full mr-2"></span>Modern Plumbing</li>
                            <li class="flex items-center text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-2 h-2 bg-primary-600 rounded-full mr-2"></span>IP CCTV Systems</li>
                        </ul>
                    </div>
                </a>

                <!-- Project 2: Halotel Towers -->
                <a href="{{ route('projects.show', 'halotel-towers') }}" class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 flex flex-col">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/gbs-images/gbs-trusted-company-limited-65.jpeg') }}" alt="Halotel Towers" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute top-4 left-4 bg-primary-600 text-white text-xs font-bold px-4 py-1.5 rounded-full shadow-lg">2023</div>
                    </div>
                    <div class="p-8 flex-grow border-b-4 border-transparent group-hover:border-primary-600 transition-all duration-300">
                        <h4 class="text-xl font-black text-gray-900 mb-3 uppercase tracking-tight">Halotel Towers</h4>
                        <p class="text-gray-600 text-sm mb-6 leading-relaxed">Critical AC Maintenance for telecommunication hubs ensuring 100% equipment uptime across multiple regions.</p>
                        <ul class="grid grid-cols-1 gap-2 mb-6">
                            <li class="flex items-center text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-2 h-2 bg-primary-600 rounded-full mr-2"></span>Preventive Maint.</li>
                            <li class="flex items-center text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-2 h-2 bg-primary-600 rounded-full mr-2"></span>Precision Cooling</li>
                            <li class="flex items-center text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-2 h-2 bg-primary-600 rounded-full mr-2"></span>System Cleaning</li>
                        </ul>
                    </div>
                </a>

                <!-- Project 3: The Power Villa -->
                <a href="{{ route('projects.show', 'power-villa') }}" class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 flex flex-col">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/gbs-images/gbs-trusted-company-limited-70.jpeg') }}" alt="The Power Villa" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute top-4 left-4 bg-primary-600 text-white text-xs font-bold px-4 py-1.5 rounded-full shadow-lg">2022</div>
                    </div>
                    <div class="p-8 flex-grow border-b-4 border-transparent group-hover:border-primary-600 transition-all duration-300">
                        <h4 class="text-xl font-black text-gray-900 mb-3 uppercase tracking-tight">The Power Villa</h4>
                        <p class="text-gray-600 text-sm mb-6 leading-relaxed">High-end installation of security systems, centralized AC, and premium plumbing for international standard villas.</p>
                        <ul class="grid grid-cols-1 gap-2 mb-6">
                            <li class="flex items-center text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-2 h-2 bg-primary-600 rounded-full mr-2"></span>HD Surveillance</li>
                            <li class="flex items-center text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-2 h-2 bg-primary-600 rounded-full mr-2"></span>Centralized HVAC</li>
                            <li class="flex items-center text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-2 h-2 bg-primary-600 rounded-full mr-2"></span>Leak-proof Piping</li>
                        </ul>
                    </div>
                </a>

                <!-- Project 4: Popex Hotel -->
                <a href="{{ route('projects.show', 'popex-hotel') }}" class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 flex flex-col">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/gbs-images/gbs-trusted-company-limited-75.jpeg') }}" alt="Popex Hotel" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute top-4 left-4 bg-primary-600 text-white text-xs font-bold px-4 py-1.5 rounded-full shadow-lg">2023</div>
                    </div>
                    <div class="p-8 flex-grow border-b-4 border-transparent group-hover:border-primary-600 transition-all duration-300">
                        <h4 class="text-xl font-black text-gray-900 mb-3 uppercase tracking-tight">Popex Hotel</h4>
                        <p class="text-gray-600 text-sm mb-6 leading-relaxed">Professional AC services and preventive maintenance to enhance system efficiency and guest satisfaction.</p>
                        <ul class="grid grid-cols-1 gap-2 mb-6">
                            <li class="flex items-center text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-2 h-2 bg-primary-600 rounded-full mr-2"></span>Unit Inspection</li>
                            <li class="flex items-center text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-2 h-2 bg-primary-600 rounded-full mr-2"></span>Parts Replacement</li>
                            <li class="flex items-center text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-2 h-2 bg-primary-600 rounded-full mr-2"></span>System Optimization</li>
                        </ul>
                    </div>
                </a>

                <!-- Project 5: Sky Bar Paje -->
                <a href="{{ route('projects.show', 'sky-bar-paje') }}" class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 flex flex-col">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/gbs-images/gbs-trusted-company-limited-80.jpeg') }}" alt="Sky Bar Paje" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute top-4 left-4 bg-primary-600 text-white text-xs font-bold px-4 py-1.5 rounded-full shadow-lg">2022</div>
                    </div>
                    <div class="p-8 flex-grow border-b-4 border-transparent group-hover:border-primary-600 transition-all duration-300">
                        <h4 class="text-xl font-black text-gray-900 mb-3 uppercase tracking-tight">Sky Bar Paje</h4>
                        <p class="text-gray-600 text-sm mb-6 leading-relaxed">Modern electrical system installation including safe wiring, power distribution, and decorative lighting for vibrant facilities.</p>
                        <ul class="grid grid-cols-1 gap-2 mb-6">
                            <li class="flex items-center text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-2 h-2 bg-primary-600 rounded-full mr-2"></span>Main Boards</li>
                            <li class="flex items-center text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-2 h-2 bg-primary-600 rounded-full mr-2"></span>Decorative Lighting</li>
                            <li class="flex items-center text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-2 h-2 bg-primary-600 rounded-full mr-2"></span>Surge Protection</li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section id="testimonials" class="py-16 md:py-24 bg-gray-50 scroll-mt-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-primary-600 text-lg font-semibold mb-2 uppercase tracking-wide">Testimonials</p>
                <h3 class="text-4xl md:text-5xl font-bold text-gray-800">What Our Clients Say</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-10 bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 relative">
                    <div class="absolute -top-4 left-10 w-10 h-10 bg-primary-600 rounded-full flex items-center justify-center text-white shadow-lg">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="mb-6">
                        <div class="flex text-yellow-400 text-sm mb-4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="italic text-gray-600 leading-relaxed">"GBS installed our new AC system flawlessly. Fast, professional, and the price was excellent. We highly recommend their guaranteed service!"</p>
                    </div>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center text-primary-600 font-bold mr-4">T</div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800 leading-none">The Power 2020 Co. Ltd</h3>
                            <p class="text-xs text-gray-400 mt-1 uppercase tracking-wider">Client</p>
                        </div>
                    </div>
                </div>

                <div class="p-10 bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 relative">
                    <div class="absolute -top-4 left-10 w-10 h-10 bg-primary-600 rounded-full flex items-center justify-center text-white shadow-lg">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="mb-6">
                        <div class="flex text-yellow-400 text-sm mb-4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="italic text-gray-600 leading-relaxed">"Their 24/7 plumbing emergency service saved us. A technician arrived quickly and fixed the leak perfectly. True to their slogan, 'Guaranteed Comfort'."</p>
                    </div>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center text-primary-600 font-bold mr-4">A</div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800 leading-none">Azure United Properties Ltd</h3>
                            <p class="text-xs text-gray-400 mt-1 uppercase tracking-wider">Client</p>
                        </div>
                    </div>
                </div>

                <div class="p-10 bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 relative">
                    <div class="absolute -top-4 left-10 w-10 h-10 bg-primary-600 rounded-full flex items-center justify-center text-white shadow-lg">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="mb-6">
                        <div class="flex text-yellow-400 text-sm mb-4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="italic text-gray-600 leading-relaxed">"We used GBS for CCTV and electric fencing. The installation was seamless, and the security system is top-notch. Highly professional staff."</p>
                    </div>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center text-primary-600 font-bold mr-4">M</div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800 leading-none">Mind Garden</h3>
                            <p class="text-xs text-gray-400 mt-1 uppercase tracking-wider">Local Business</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>
