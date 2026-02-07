@php
    $features = [
        [
            'icon' => 'fas fa-fan',
            'title' => 'AC Installation',
            'desc' => 'Professional AC installation for homes, industries, and commercial buildings.',
            'image' => asset('images/gbs-images/gbs-trusted-company-limited-35.jpeg'),
        ],
        [
            'icon' => 'fas fa-bolt',
            'title' => 'Electrical Services',
            'desc' => 'Qualified technicians for design, installation, and maintenance of all electrical systems.',
            'image' => asset('images/gbs-images/gbs-trusted-company-limited-7.jpeg'),
        ],
        [
            'icon' => 'fas fa-wrench',
            'title' => 'Plumbing Services',
            'desc' => 'Certified plumbers for residential, commercial, and industrial areas.',
            'image' => asset('images/gbs-images/gbs-trusted-company-limited-30.jpeg'),
        ],
        [
            'icon' => 'fas fa-video',
            'title' => 'CCTV & Security',
            'desc' => 'Design, installation, and repair of security systems using leading brands.',
            'image' => asset('images/gbs-images/gbs-trusted-company-limited-45.jpeg'),
        ],
        [
            'icon' => 'fas fa-solar-panel',
            'title' => 'Solar Installation',
            'desc' => 'Sustainable energy solutions with high-quality solar power systems.',
            'image' => asset('images/gbs-images/gbs-trusted-company-limited-50.jpeg'),
        ],
        [
            'icon' => 'fas fa-shield-alt',
            'title' => 'Electric Fencing',
            'desc' => 'Strong perimeter security barriers with high-voltage pulses for durable protection.',
            'image' => asset('images/gbs-images/gbs-trusted-company-limited-5.jpeg'),
        ],
    ];
@endphp
<x-layout
    title="GBS Trusted Company Limited - Guaranteed Comfort"
    description="Professional AC installation, plumbing, electrical wiring, and security systems. Expert solutions for homes, industries, and commercial properties."
    keywords="AC Installation, Electrical Wiring, Plumbing, CCTV Security, GBS Trusted Company, HVAC"
>
    <section id="home" class="relative pt-20" x-data="{
        activeSlide: 0,
        slides: [
            {
                image: '{{ asset('images/gbs-images/gbs-trusted-company-limited-5.jpeg') }}',
                tag: 'Engineering Excellence',
                title: 'Guaranteed Comfort Everywhere.',
                subtitle: 'Precision AC, Electrical, and Plumbing solutions since 2019.'
            },
            {
                image: '{{ asset('images/gbs-images/gbs-trusted-company-limited-22.jpeg') }}',
                tag: 'Technical Innovation',
                title: 'Professional Infrastructure Projects.',
                subtitle: 'Comprehensive technical services for premium properties and commercial hubs.'
            },
            {
                image: '{{ asset('images/gbs-images/gbs-trusted-company-limited-15.jpeg') }}',
                tag: '24/7 Expert Support',
                title: 'Expert Technical Solutions.',
                subtitle: 'Our skilled technicians are ready to handle your most critical engineering needs.'
            },
            {
                image: '{{ asset('images/gbs-images/gbs-trusted-company-limited-20.jpeg') }}',
                tag: 'Sustainable Energy',
                title: 'Solar & Power Solutions.',
                subtitle: 'Harness the power of the sun with our expert solar installations and power management.'
            },
            {
                image: '{{ asset('images/gbs-images/gbs-trusted-company-limited-25.jpeg') }}',
                tag: 'Safety & Security',
                title: 'Advanced Security Systems.',
                subtitle: 'Protecting what matters most with professional CCTV and electric fencing.'
            }
        ],
        next() { this.activeSlide = (this.activeSlide + 1) % this.slides.length },
        prev() { this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length },
        init() { setInterval(() => this.next(), 7000) }
    }">
        <div class="relative h-[60vh] md:h-[70vh] lg:h-[80vh] max-h-[900px] overflow-hidden">
            <template x-for="(slide, index) in slides" :key="index">
                <div x-show="activeSlide === index"
                     x-transition:enter="transition ease-out duration-1000"
                     x-transition:enter-start="opacity-0 scale-110"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-1000"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-110"
                     class="absolute inset-0 bg-cover bg-center flex items-center"
                     :style="`background-image: url('${slide.image}');`"
                     :aria-label="slide.title"
                >
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-linear-to-r from-gray-900/90 via-gray-900/50 to-transparent"></div>

                    <div class="container mx-auto px-4 sm:px-6 lg:px-8 z-10 text-white">
                        <div class="max-w-4xl">
                            <div x-show="activeSlide === index"
                                 x-transition:enter="transition ease-out delay-300 duration-700"
                                 x-transition:enter-start="opacity-0 translate-y-8"
                                 x-transition:enter-end="opacity-100 translate-y-0"
                            >
                                <span class="inline-block px-4 py-1.5 mb-6 text-xs font-black tracking-widest text-white uppercase bg-primary-600 rounded-full" x-text="slide.tag"></span>
                                <h2 class="text-4xl md:text-6xl lg:text-7xl font-black leading-[1.05] mb-6 tracking-tighter" x-text="slide.title"></h2>
                                <p class="text-lg md:text-xl opacity-90 mb-10 max-w-2xl font-medium leading-relaxed" x-text="slide.subtitle"></p>

                                <div class="flex flex-wrap gap-5">
                                    <a href="{{ route('welcome', ['hash' => '#projects']) }}" class="group inline-flex items-center px-8 py-4 bg-primary-600 text-white font-black uppercase tracking-widest rounded-2xl shadow-2xl shadow-primary-500/30 hover:bg-primary-700 hover:-translate-y-1 transition-all duration-300">
                                        Explore Projects <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </template>

            <!-- Slider Navigation Controls -->
            <div class="absolute inset-y-0 left-4 right-4 z-20 flex items-center justify-between pointer-events-none">
                <button @click="prev()" class="pointer-events-auto p-4 rounded-2xl bg-white/5 backdrop-blur-md border border-white/10 text-white hover:bg-primary-600 hover:border-primary-600 transition-all duration-500 group">
                    <i class="fas fa-chevron-left text-xl group-hover:-translate-x-1 transition-transform"></i>
                </button>
                <button @click="next()" class="pointer-events-auto p-4 rounded-2xl bg-white/5 backdrop-blur-md border border-white/10 text-white hover:bg-primary-600 hover:border-primary-600 transition-all duration-500 group">
                    <i class="fas fa-chevron-right text-xl group-hover:translate-x-1 transition-transform"></i>
                </button>
            </div>

            <!-- Enhanced Slider Indicators -->
            <div class="absolute bottom-12 left-0 right-0 z-20">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center gap-4">
                        <template x-for="(slide, index) in slides" :key="index">
                            <button @click="activeSlide = index"
                                    class="relative h-1 bg-white/30 rounded-full transition-all duration-500 overflow-hidden"
                                    :class="activeSlide === index ? 'w-24 bg-white/40' : 'w-12 hover:bg-white/50'">
                                <div x-show="activeSlide === index"
                                     class="absolute inset-y-0 left-0 bg-primary-500 transition-all duration-700"
                                     style="width: 100%; transition-duration: 7000ms; transition-timing-function: linear;"
                                     :style="activeSlide === index ? 'width: 100%' : 'width: 0%'"
                                ></div>
                            </button>
                        </template>
                    </div>
                </div>
            </div>

            <!-- Scroll Down Indicator -->
            <div class="absolute bottom-12 right-4 sm:right-6 lg:right-8 z-20 hidden md:block">
                <div class="flex flex-col items-center gap-4">
                    <span class="text-[10px] font-black uppercase tracking-[0.3em] text-white/50 vertical-text [writing-mode:vertical-lr]">Scroll Down</span>
                    <div class="w-px h-16 bg-white/20 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-full h-1/2 bg-primary-500 animate-[scroll-line_2s_ease-in-out_infinite]"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="stats" class="py-12 md:py-20 bg-gray-900 relative overflow-hidden">
        <h1 class="sr-only">GBS Trusted Company Limited - Professional Engineering Services in Tanzania</h1>
        <div class="absolute inset-0 bg-primary-600/5"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8">
                <div class="p-6 md:p-8 bg-white/5 border border-white/10 rounded-2xl backdrop-blur-md text-center group hover:bg-primary-600 transition-all duration-500">
                    <p class="text-3xl md:text-6xl font-black text-white mb-1 group-hover:scale-110 transition-transform">6+</p>
                    <p class="uppercase text-[10px] md:text-xs font-bold tracking-widest text-primary-400 group-hover:text-white">Years Experience</p>
                </div>
                <div class="p-6 md:p-8 bg-white/5 border border-white/10 rounded-2xl backdrop-blur-md text-center group hover:bg-primary-600 transition-all duration-500">
                    <p class="text-3xl md:text-6xl font-black text-white mb-1 group-hover:scale-110 transition-transform">98%</p>
                    <p class="uppercase text-[10px] md:text-xs font-bold tracking-widest text-primary-400 group-hover:text-white">Success Rate</p>
                </div>
                <div class="p-6 md:p-8 bg-white/5 border border-white/10 rounded-2xl backdrop-blur-md text-center group hover:bg-primary-600 transition-all duration-500">
                    <p class="text-3xl md:text-6xl font-black text-white mb-1 group-hover:scale-110 transition-transform">10+</p>
                    <p class="uppercase text-[10px] md:text-xs font-bold tracking-widest text-primary-400 group-hover:text-white">Projects Done</p>
                </div>
                <div class="p-6 md:p-8 bg-white/5 border border-white/10 rounded-2xl backdrop-blur-md text-center group hover:bg-primary-600 transition-all duration-500">
                    <p class="text-3xl md:text-6xl font-black text-white mb-1 group-hover:scale-110 transition-transform">24/7</p>
                    <p class="uppercase text-[10px] md:text-xs font-bold tracking-widest text-primary-400 group-hover:text-white">Active Support</p>
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
                        <img src="{{ asset('images/gbs-images/gbs-trusted-company-limited-20.jpeg') }}" alt="Engineering Excellence" class="rounded-3xl lg:rounded-[3rem] shadow-2xl w-full h-[300px] md:h-[500px] lg:h-[600px] object-cover relative z-10 border-4 lg:border-8 border-white">
                        <div class="absolute -bottom-12 -left-12 w-1/2 hidden lg:block z-20">
                            <div class="bg-white p-6 rounded-[2rem] shadow-2xl border border-gray-100">
                                <img src="{{ asset('images/gbs-images/gbs-trusted-company-limited-25.jpeg') }}" alt="Team Working" class="w-full h-48 object-cover rounded-2xl">
                                <div class="mt-4 flex items-center gap-3">
                                    <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
                                    <span class="text-xs font-bold uppercase tracking-widest text-gray-500">Active Projects</span>
                                </div>
                            </div>
                        </div>
                        <div class="absolute -top-6 -right-6 lg:-top-10 lg:-right-10 w-24 h-24 lg:w-40 lg:h-40 bg-primary-600 rounded-full flex items-center justify-center text-white text-center p-4 lg:p-6 z-20 shadow-2xl border-4 lg:border-[12px] border-white group">
                            <div class="group-hover:scale-110 transition-transform duration-500">
                                <p class="text-2xl lg:text-4xl font-black leading-none">6+</p>
                                <p class="text-[8px] lg:text-[10px] uppercase font-black tracking-tighter">Years of Trust</p>
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

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @foreach($features as $feature)
                    <div class="group relative bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-500 flex flex-col h-full">
                        <div class="h-48 md:h-64 overflow-hidden relative">
                            <img src="{{ $feature['image'] }}" alt="{{ $feature['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-gray-900/20 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 flex items-center gap-3">
                                <div class="w-10 h-10 flex items-center justify-center bg-primary-600 text-white rounded-lg text-lg shadow-xl group-hover:rotate-12 transition-transform duration-500">
                                    <i class="{{ $feature['icon'] }}"></i>
                                </div>
                                <h4 class="text-lg md:text-xl font-black text-white drop-shadow-md">{{ $feature['title'] }}</h4>
                            </div>
                        </div>
                        <div class="p-6 md:p-8 flex flex-col flex-grow">
                            <p class="text-gray-600 text-sm md:text-base leading-relaxed mb-6 flex-grow">
                                {{ $feature['desc'] }}
                            </p>
                            <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                                <a href="{{ route('services') }}" class="inline-flex items-center text-xs md:text-sm font-black uppercase tracking-widest text-primary-600 group/link">
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

    <section class="py-16 bg-primary-600">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="inline-block px-4 py-1.5 mb-4 text-xs font-black tracking-widest text-white uppercase bg-white/10 rounded-full">Commitment to Service</span>
                <h3 class="text-3xl md:text-5xl font-black text-white mb-4 tracking-tight">Why GBS is the <span class="text-primary-200">Right Choice</span></h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
                <div class="p-8 bg-white/5 border border-white/10 rounded-2xl hover:bg-white/10 transition-all duration-300">
                    <div class="text-3xl text-primary-200 mb-4">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-2">Licensed Experts</h4>
                    <p class="text-primary-100/70 text-sm leading-relaxed">Fully certified technicians ensuring compliant service delivery.</p>
                </div>

                <div class="p-8 bg-white/5 border border-white/10 rounded-2xl hover:bg-white/10 transition-all duration-300">
                    <div class="text-3xl text-primary-200 mb-4">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-2">24/7 Support</h4>
                    <p class="text-primary-100/70 text-sm leading-relaxed">Round-the-clock availability for critical repairs.</p>
                </div>

                <div class="p-8 bg-white/5 border border-white/10 rounded-2xl hover:bg-white/10 transition-all duration-300">
                    <div class="text-3xl text-primary-200 mb-4">
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-2">Guaranteed Quality</h4>
                    <p class="text-primary-100/70 text-sm leading-relaxed">Backed by our signature guarantee and durable equipment.</p>
                </div>

                <div class="p-8 bg-white/5 border border-white/10 rounded-2xl hover:bg-white/10 transition-all duration-300">
                    <div class="text-3xl text-primary-200 mb-4">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-2">Fast Response</h4>
                    <p class="text-primary-100/70 text-sm leading-relaxed">We respond quickly to all technical service requests.</p>
                </div>
            </div>

            <div class="bg-white rounded-3xl p-8 md:p-12 text-center max-w-4xl mx-auto shadow-xl">
                <h3 class="text-2xl md:text-4xl font-black text-gray-900 mb-4">Book Your Expert Technician Today</h3>
                <p class="text-gray-600 mb-8 max-w-2xl mx-auto">Contact us now for a free consultation or immediate technical support. We serve all areas with professional engineering solutions.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="tel:+255763383880" class="inline-flex items-center justify-center px-8 py-4 bg-primary-600 text-white font-bold rounded-xl hover:bg-primary-700 transition duration-300 uppercase tracking-wider text-sm">
                        <i class="fas fa-phone-alt mr-2"></i> Call Now
                    </a>
                    <a href="{{route('contacts')}}" class="inline-flex items-center justify-center px-8 py-4 bg-white text-primary-600 border-2 border-primary-600 font-bold rounded-xl hover:bg-primary-50 transition duration-300 uppercase tracking-wider text-sm">
                        Get Quote
                    </a>
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

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <!-- Project 1: Azure Properties -->
                <a href="{{ route('projects.show', 'azure-properties') }}" class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col">
                    <div class="relative h-48 md:h-64 overflow-hidden">
                        <img src="{{ asset('images/gbs-images/gbs-trusted-company-limited-60.jpeg') }}" alt="Azure Properties" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute top-4 left-4 bg-primary-600 text-white text-[10px] md:text-xs font-bold px-3 py-1 md:px-4 md:py-1.5 rounded-full shadow-lg">2024</div>
                    </div>
                    <div class="p-6 md:p-8 flex-grow border-b-4 border-transparent group-hover:border-primary-600 transition-all duration-300">
                        <h4 class="text-lg md:text-xl font-black text-gray-900 mb-2 uppercase tracking-tight">Azure Properties – Michamvi</h4>
                        <p class="text-gray-600 text-xs md:text-sm mb-4 md:mb-6 leading-relaxed">Comprehensive installation of Air Conditioning, Plumbing, Electrical Wiring, and CCTV systems.</p>
                        <ul class="grid grid-cols-1 gap-1 md:gap-2 mb-4 md:mb-6">
                            <li class="flex items-center text-[10px] md:text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-1.5 h-1.5 md:w-2 md:h-2 bg-primary-600 rounded-full mr-2"></span>Split & Central AC</li>
                            <li class="flex items-center text-[10px] md:text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-1.5 h-1.5 md:w-2 md:h-2 bg-primary-600 rounded-full mr-2"></span>Modern Plumbing</li>
                            <li class="flex items-center text-[10px] md:text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-1.5 h-1.5 md:w-2 md:h-2 bg-primary-600 rounded-full mr-2"></span>IP CCTV Systems</li>
                        </ul>
                    </div>
                </a>

                <!-- Project 2: Halotel Towers -->
                <a href="{{ route('projects.show', 'halotel-towers') }}" class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col">
                    <div class="relative h-48 md:h-64 overflow-hidden">
                        <img src="{{ asset('images/gbs-images/gbs-trusted-company-limited-65.jpeg') }}" alt="Halotel Towers" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute top-4 left-4 bg-primary-600 text-white text-[10px] md:text-xs font-bold px-3 py-1 md:px-4 md:py-1.5 rounded-full shadow-lg">2023</div>
                    </div>
                    <div class="p-6 md:p-8 flex-grow border-b-4 border-transparent group-hover:border-primary-600 transition-all duration-300">
                        <h4 class="text-lg md:text-xl font-black text-gray-900 mb-2 uppercase tracking-tight">Halotel Towers</h4>
                        <p class="text-gray-600 text-xs md:text-sm mb-4 md:mb-6 leading-relaxed">Critical AC Maintenance for telecommunication hubs ensuring 100% equipment uptime.</p>
                        <ul class="grid grid-cols-1 gap-1 md:gap-2 mb-4 md:mb-6">
                            <li class="flex items-center text-[10px] md:text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-1.5 h-1.5 md:w-2 md:h-2 bg-primary-600 rounded-full mr-2"></span>Preventive Maint.</li>
                            <li class="flex items-center text-[10px] md:text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-1.5 h-1.5 md:w-2 md:h-2 bg-primary-600 rounded-full mr-2"></span>Precision Cooling</li>
                            <li class="flex items-center text-[10px] md:text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-1.5 h-1.5 md:w-2 md:h-2 bg-primary-600 rounded-full mr-2"></span>System Cleaning</li>
                        </ul>
                    </div>
                </a>

                <!-- Project 3: The Power Villa -->
                <a href="{{ route('projects.show', 'power-villa') }}" class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col">
                    <div class="relative h-48 md:h-64 overflow-hidden">
                        <img src="{{ asset('images/gbs-images/gbs-trusted-company-limited-70.jpeg') }}" alt="The Power Villa" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute top-4 left-4 bg-primary-600 text-white text-[10px] md:text-xs font-bold px-3 py-1 md:px-4 md:py-1.5 rounded-full shadow-lg">2022</div>
                    </div>
                    <div class="p-6 md:p-8 flex-grow border-b-4 border-transparent group-hover:border-primary-600 transition-all duration-300">
                        <h4 class="text-lg md:text-xl font-black text-gray-900 mb-2 uppercase tracking-tight">The Power Villa</h4>
                        <p class="text-gray-600 text-xs md:text-sm mb-4 md:mb-6 leading-relaxed">High-end installation of security systems, centralized AC, and premium plumbing.</p>
                        <ul class="grid grid-cols-1 gap-1 md:gap-2 mb-4 md:mb-6">
                            <li class="flex items-center text-[10px] md:text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-1.5 h-1.5 md:w-2 md:h-2 bg-primary-600 rounded-full mr-2"></span>HD Surveillance</li>
                            <li class="flex items-center text-[10px] md:text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-1.5 h-1.5 md:w-2 md:h-2 bg-primary-600 rounded-full mr-2"></span>Centralized HVAC</li>
                            <li class="flex items-center text-[10px] md:text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-1.5 h-1.5 md:w-2 md:h-2 bg-primary-600 rounded-full mr-2"></span>Leak-proof Piping</li>
                        </ul>
                    </div>
                </a>

                <!-- Project 4: Popex Hotel -->
                <a href="{{ route('projects.show', 'popex-hotel') }}" class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col">
                    <div class="relative h-48 md:h-64 overflow-hidden">
                        <img src="{{ asset('images/gbs-images/gbs-trusted-company-limited-75.jpeg') }}" alt="Popex Hotel" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute top-4 left-4 bg-primary-600 text-white text-[10px] md:text-xs font-bold px-3 py-1 md:px-4 md:py-1.5 rounded-full shadow-lg">2023</div>
                    </div>
                    <div class="p-6 md:p-8 flex-grow border-b-4 border-transparent group-hover:border-primary-600 transition-all duration-300">
                        <h4 class="text-lg md:text-xl font-black text-gray-900 mb-2 uppercase tracking-tight">Popex Hotel</h4>
                        <p class="text-gray-600 text-xs md:text-sm mb-4 md:mb-6 leading-relaxed">Professional AC services and preventive maintenance to enhance system efficiency.</p>
                        <ul class="grid grid-cols-1 gap-1 md:gap-2 mb-4 md:mb-6">
                            <li class="flex items-center text-[10px] md:text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-1.5 h-1.5 md:w-2 md:h-2 bg-primary-600 rounded-full mr-2"></span>Unit Inspection</li>
                            <li class="flex items-center text-[10px] md:text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-1.5 h-1.5 md:w-2 md:h-2 bg-primary-600 rounded-full mr-2"></span>Parts Replacement</li>
                            <li class="flex items-center text-[10px] md:text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-1.5 h-1.5 md:w-2 md:h-2 bg-primary-600 rounded-full mr-2"></span>System Optimization</li>
                        </ul>
                    </div>
                </a>

                <!-- Project 5: Sky Bar Paje -->
                <a href="{{ route('projects.show', 'sky-bar-paje') }}" class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col">
                    <div class="relative h-48 md:h-64 overflow-hidden">
                        <img src="{{ asset('images/gbs-images/gbs-trusted-company-limited-80.jpeg') }}" alt="Sky Bar Paje" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute top-4 left-4 bg-primary-600 text-white text-[10px] md:text-xs font-bold px-3 py-1 md:px-4 md:py-1.5 rounded-full shadow-lg">2022</div>
                    </div>
                    <div class="p-6 md:p-8 flex-grow border-b-4 border-transparent group-hover:border-primary-600 transition-all duration-300">
                        <h4 class="text-lg md:text-xl font-black text-gray-900 mb-2 uppercase tracking-tight">Sky Bar Paje</h4>
                        <p class="text-gray-600 text-xs md:text-sm mb-4 md:mb-6 leading-relaxed">Modern electrical system installation including safe wiring and decorative lighting.</p>
                        <ul class="grid grid-cols-1 gap-1 md:gap-2 mb-4 md:mb-6">
                            <li class="flex items-center text-[10px] md:text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-1.5 h-1.5 md:w-2 md:h-2 bg-primary-600 rounded-full mr-2"></span>Main Boards</li>
                            <li class="flex items-center text-[10px] md:text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-1.5 h-1.5 md:w-2 md:h-2 bg-primary-600 rounded-full mr-2"></span>Decorative Lighting</li>
                            <li class="flex items-center text-[10px] md:text-xs font-bold text-gray-500 uppercase tracking-widest"><span class="w-1.5 h-1.5 md:w-2 md:h-2 bg-primary-600 rounded-full mr-2"></span>Surge Protection</li>
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
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                <div class="p-8 md:p-10 bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 relative">
                    <div class="absolute -top-4 left-6 md:left-10 w-10 h-10 bg-primary-600 rounded-full flex items-center justify-center text-white shadow-lg">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="mb-6">
                        <div class="flex text-yellow-400 text-xs md:text-sm mb-4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="italic text-gray-600 text-sm md:text-base leading-relaxed">"GBS installed our new AC system flawlessly. Fast, professional, and the price was excellent. We highly recommend their guaranteed service!"</p>
                    </div>
                    <div class="flex items-center">
                        <div class="w-10 h-10 md:w-12 md:h-12 bg-primary-100 rounded-full flex items-center justify-center text-primary-600 font-bold mr-4">T</div>
                        <div>
                            <h3 class="text-base md:text-lg font-bold text-gray-800 leading-none">The Power 2020 Co. Ltd</h3>
                            <p class="text-[10px] text-gray-400 mt-1 uppercase tracking-wider">Client</p>
                        </div>
                    </div>
                </div>

                <div class="p-8 md:p-10 bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 relative">
                    <div class="absolute -top-4 left-6 md:left-10 w-10 h-10 bg-primary-600 rounded-full flex items-center justify-center text-white shadow-lg">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="mb-6">
                        <div class="flex text-yellow-400 text-xs md:text-sm mb-4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="italic text-gray-600 text-sm md:text-base leading-relaxed">"Their 24/7 plumbing emergency service saved us. A technician arrived quickly and fixed the leak perfectly. True to their slogan, 'Guaranteed Comfort'."</p>
                    </div>
                    <div class="flex items-center">
                        <div class="w-10 h-10 md:w-12 md:h-12 bg-primary-100 rounded-full flex items-center justify-center text-primary-600 font-bold mr-4">A</div>
                        <div>
                            <h3 class="text-base md:text-lg font-bold text-gray-800 leading-none">Azure United Properties Ltd</h3>
                            <p class="text-[10px] text-gray-400 mt-1 uppercase tracking-wider">Client</p>
                        </div>
                    </div>
                </div>

                <div class="p-8 md:p-10 bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 relative">
                    <div class="absolute -top-4 left-6 md:left-10 w-10 h-10 bg-primary-600 rounded-full flex items-center justify-center text-white shadow-lg">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="mb-6">
                        <div class="flex text-yellow-400 text-xs md:text-sm mb-4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="italic text-gray-600 text-sm md:text-base leading-relaxed">"We used GBS for CCTV and electric fencing. The installation was seamless, and the security system is top-notch. Highly professional staff."</p>
                    </div>
                    <div class="flex items-center">
                        <div class="w-10 h-10 md:w-12 md:h-12 bg-primary-100 rounded-full flex items-center justify-center text-primary-600 font-bold mr-4">M</div>
                        <div>
                            <h3 class="text-base md:text-lg font-bold text-gray-800 leading-none">Mind Garden</h3>
                            <p class="text-[10px] text-gray-400 mt-1 uppercase tracking-wider">Local Business</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>
