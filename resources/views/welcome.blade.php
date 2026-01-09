<!-- resources/views/tasks.blade.php -->
<x-layout>
    <section id="home" class="relative pt-20" x-data="{
        activeSlide: 0,
        slides: [
            { image: 'images/gbs-03.jpeg', title: 'Your Trusted Partner in AC, Electrical & Plumbing.', subtitle: 'Providing top-notch solutions to homes and businesses in Dar es Salaam and Zanzibar since 2019.' },
            { image: 'images/gbs-02.jpeg', title: 'Guaranteed Comfort for Your Home.', subtitle: 'Reliable air conditioning services to keep you cool all year round.' },
            { image: 'images/gbs-04.jpeg', title: 'Expert Electrical & Plumbing Solutions.', subtitle: 'Certified technicians ready to handle your most critical needs 24/7.' }
        ],
        next() { this.activeSlide = (this.activeSlide + 1) % this.slides.length },
        prev() { this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length },
        init() { setInterval(() => this.next(), 5000) }
    }">
        <div class="relative h-[70vh] md:h-[85vh] overflow-hidden">
            <template x-for="(slide, index) in slides" :key="index">
                <div x-show="activeSlide === index"
                     x-transition:enter="transition ease-out duration-1000"
                     x-transition:enter-start="opacity-0 transform scale-105"
                     x-transition:enter-end="opacity-100 transform scale-100"
                     x-transition:leave="transition ease-in duration-1000"
                     x-transition:leave-start="opacity-100 transform scale-100"
                     x-transition:leave-end="opacity-0 transform scale-105"
                     class="absolute inset-0 bg-cover bg-center flex items-center"
                     :style="`background-image: url('${slide.image}');`"
                >
                    <div class="absolute inset-0 bg-black/50"></div>
                    <div class="container mx-auto px-4 sm:px-6 lg:px-8 z-10 text-white">
                        <div class="max-w-4xl">
                            <p class="text-lg font-semibold text-primary-300 mb-2 uppercase tracking-wider">OUR SLOGAN: Guaranteed Comfort</p>
                            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4" x-text="slide.title"></h1>
                            <p class="text-xl opacity-90 mb-8 max-w-2xl" x-text="slide.subtitle"></p>
                            <div class="flex flex-wrap gap-4">
                                <a href="{{route('about')}}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-lg text-white bg-primary-600 hover:bg-primary-700 transition duration-300">
                                    Read More <i class="fas fa-angle-double-right ml-2"></i>
                                </a>
                                <a href="{{route('services')}}" class="inline-flex items-center px-6 py-3 border border-white text-base font-medium rounded-lg shadow-lg text-white hover:bg-white hover:text-gray-900 transition duration-300">
                                    Our Services
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </template>

            <!-- Slider Controls -->
            <button @click="prev()" class="absolute left-4 top-1/2 -translate-y-1/2 z-20 p-2 rounded-full bg-white/20 hover:bg-white/40 text-white transition">
                <i class="fas fa-chevron-left text-2xl"></i>
            </button>
            <button @click="next()" class="absolute right-4 top-1/2 -translate-y-1/2 z-20 p-2 rounded-full bg-white/20 hover:bg-white/40 text-white transition">
                <i class="fas fa-chevron-right text-2xl"></i>
            </button>

            <!-- Slider Indicators -->
            <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 flex space-x-2">
                <template x-for="(slide, index) in slides" :key="index">
                    <button @click="activeSlide = index"
                            class="w-3 h-3 rounded-full transition-all duration-300"
                            :class="activeSlide === index ? 'bg-primary-600 w-8' : 'bg-white/50 hover:bg-white'"></button>
                </template>
            </div>
        </div>
    </section>

    <section id="stats" class="py-12 bg-primary-600 text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="p-6 bg-white/10 rounded-lg backdrop-blur-sm border border-white/20">
                    <p class="text-4xl md:text-5xl font-extrabold mb-1">5+</p>
                    <p class="uppercase text-xs font-semibold opacity-80">Years in Business</p>
                </div>
                <div class="p-6 bg-white/10 rounded-lg backdrop-blur-sm border border-white/20">
                    <p class="text-4xl md:text-5xl font-extrabold mb-1">98%</p>
                    <p class="uppercase text-xs font-semibold opacity-80">Client Satisfaction</p>
                </div>
                <div class="p-6 bg-white/10 rounded-lg backdrop-blur-sm border border-white/20">
                    <p class="text-4xl md:text-5xl font-extrabold mb-1">450+</p>
                    <p class="uppercase text-xs font-semibold opacity-80">Projects Completed</p>
                </div>
                <div class="p-6 bg-white/10 rounded-lg backdrop-blur-sm border border-white/20">
                    <p class="text-4xl md:text-5xl font-extrabold mb-1">5</p>
                    <p class="uppercase text-xs font-semibold opacity-80">Core Services</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">

                <div class="lg:col-span-1 order-2 lg:order-1">
                    <p class="text-primary-600 text-lg font-semibold mb-2 uppercase tracking-wide">Our Foundation</p>
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-800 mb-6 leading-tight">
                        Building <strong class="text-primary-600">Trust</strong> Through Technical Excellence.
                    </h2>
                    <p class="text-gray-600 mb-8 leading-relaxed text-lg">
                        We are <strong>GBS Trusted Company Limited</strong>, your local partner for guaranteed comfort and safety. Founded in <strong>2019</strong>, our commitment is to provide prompt, high-quality AC, Electrical, and Plumbing services across Dar es Salaam and Zanzibar.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mb-10">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-primary-50 rounded-lg flex items-center justify-center text-primary-600 mr-4">
                                <i class="fas fa-bullseye text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-800 mb-1">Our Mission</h4>
                                <p class="text-gray-600 text-sm">To provide the best solution in HVAC and security with unmatched dedication.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-primary-50 rounded-lg flex items-center justify-center text-primary-600 mr-4">
                                <i class="fas fa-eye text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-800 mb-1">Our Vision</h4>
                                <p class="text-gray-600 text-sm">To be the most reliable, customer-oriented service provider in the region.</p>
                            </div>
                        </div>
                    </div>

                    <a href="{{route('services')}}" class="inline-flex items-center px-8 py-4 border border-primary-600 text-base font-bold rounded-xl shadow-sm text-primary-600 bg-white hover:bg-primary-600 hover:text-white transition-all duration-300">
                        View All Services <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>

                <div class="lg:col-span-1 order-1 lg:order-2 mt-12 lg:mt-0 relative">
                    <div class="relative">
                        <img src="images/gbs-06.jpeg" alt="GBS Office Team" class="rounded-3xl shadow-2xl w-full h-[450px] object-cover relative z-10">
                        <div class="absolute -bottom-10 -left-10 w-2/3 hidden lg:block z-20">
                            <div class="bg-white p-4 rounded-2xl shadow-2xl">
                                <img src="images/gbs-logo.jpg" alt="GBS Technician Working" class="w-full h-48 object-cover rounded-xl">
                            </div>
                        </div>
                        <div class="absolute -top-6 -right-6 w-32 h-32 bg-primary-600 rounded-full flex items-center justify-center text-white text-center p-4 z-20 shadow-xl border-8 border-white">
                            <div>
                                <p class="text-2xl font-bold leading-none">5+</p>
                                <p class="text-[10px] uppercase font-bold">Years of Exp</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="work" class="py-16 md:py-24 bg-gray-100">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <p class="text-primary-600 text-lg font-semibold mb-2 uppercase tracking-wide">Expertise You Can Trust</p>
                <h2 class="text-4xl font-bold text-gray-800">Solutions for Guaranteed Comfort and Safety</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center justify-center w-14 h-14 bg-primary-50 text-primary-600 rounded-xl text-2xl group-hover:bg-primary-600 group-hover:text-white transition-all duration-300">
                                <i class="fas fa-fan"></i>
                            </div>
                            <p class="text-4xl font-extrabold text-gray-100 group-hover:text-primary-50 transition-all duration-300">01</p>
                        </div>
                        <h4 class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary-600 transition-colors duration-300"><a href="#service">Air Conditioning</a></h4>
                        <p class="text-gray-600 leading-relaxed">Complete services from new installations of central air and mini-splits to emergency repairs and routine maintenance plans.</p>
                    </div>
                    <div class="px-8 pb-8">
                        <a href="#service" class="inline-flex items-center text-primary-600 font-bold hover:translate-x-2 transition-transform duration-300">
                            Learn More <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center justify-center w-14 h-14 bg-primary-50 text-primary-600 rounded-xl text-2xl group-hover:bg-primary-600 group-hover:text-white transition-all duration-300">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <p class="text-4xl font-extrabold text-gray-100 group-hover:text-primary-50 transition-all duration-300">02</p>
                        </div>
                        <h4 class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary-600 transition-colors duration-300"><a href="#service">Electrical Services</a></h4>
                        <p class="text-gray-600 leading-relaxed">Certified electricians for home wiring, panel upgrades, troubleshooting faults, and commercial electrical installations.</p>
                    </div>
                    <div class="px-8 pb-8">
                        <a href="#service" class="inline-flex items-center text-primary-600 font-bold hover:translate-x-2 transition-transform duration-300">
                            Learn More <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center justify-center w-14 h-14 bg-primary-50 text-primary-600 rounded-xl text-2xl group-hover:bg-primary-600 group-hover:text-white transition-all duration-300">
                                <i class="fas fa-wrench"></i>
                            </div>
                            <p class="text-4xl font-extrabold text-gray-100 group-hover:text-primary-50 transition-all duration-300">03</p>
                        </div>
                        <h4 class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary-600 transition-colors duration-300"><a href="#service">Plumbing Services</a></h4>
                        <p class="text-gray-600 leading-relaxed">Rapid response for 24/7 emergencies, drain cleaning, water heater repair, and comprehensive plumbing system maintenance.</p>
                    </div>
                    <div class="px-8 pb-8">
                        <a href="#service" class="inline-flex items-center text-primary-600 font-bold hover:translate-x-2 transition-transform duration-300">
                            Learn More <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center justify-center w-14 h-14 bg-primary-50 text-primary-600 rounded-xl text-2xl group-hover:bg-primary-600 group-hover:text-white transition-all duration-300">
                                <i class="fas fa-video"></i>
                            </div>
                            <p class="text-4xl font-extrabold text-gray-100 group-hover:text-primary-50 transition-all duration-300">04</p>
                        </div>
                        <h4 class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary-600 transition-colors duration-300"><a href="#service">CCTV & Security</a></h4>
                        <p class="text-gray-600 leading-relaxed">Installation and integration of advanced CCTV systems, access control, and alarm solutions for residential and commercial security.</p>
                    </div>
                    <div class="px-8 pb-8">
                        <a href="#service" class="inline-flex items-center text-primary-600 font-bold hover:translate-x-2 transition-transform duration-300">
                            Learn More <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center justify-center w-14 h-14 bg-primary-50 text-primary-600 rounded-xl text-2xl group-hover:bg-primary-600 group-hover:text-white transition-all duration-300">
                                <i class="fas fa-lock"></i>
                            </div>
                            <p class="text-4xl font-extrabold text-gray-100 group-hover:text-primary-50 transition-all duration-300">05</p>
                        </div>
                        <h4 class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary-600 transition-colors duration-300"><a href="#service">Electric Fencing</a></h4>
                        <p class="text-gray-600 leading-relaxed">Designing and installing high-quality, legally compliant electric perimeter fencing for maximum security deterrence.</p>
                    </div>
                    <div class="px-8 pb-8">
                        <a href="#service" class="inline-flex items-center text-primary-600 font-bold hover:translate-x-2 transition-transform duration-300">
                            Learn More <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">

                <div class="lg:col-span-1 mb-12 lg:mb-0">
                    <p class="text-primary-600 text-lg font-semibold mb-2 uppercase tracking-wide">Commitment to Service</p>
                    <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8">Why GBS is the Right Choice</h3>

                    <div class="space-y-6">

                        <div class="flex items-start">
                            <div class="w-12 h-12 flex items-center justify-center bg-primary-600 text-white rounded-lg text-xl flex-shrink-0 mr-4">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-800">Licensed and Insured Experts</h4>
                                <p class="text-gray-600">Our technicians are fully licensed and equipped, ensuring expert and compliant service delivery every time.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 flex items-center justify-center bg-primary-600 text-white rounded-lg text-xl flex-shrink-0 mr-4">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-800">24/7 Emergency Response</h4>
                                <p class="text-gray-600">We offer round-the-clock availability for critical repairs, minimizing downtime and disruption to your home or business.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 flex items-center justify-center bg-primary-600 text-white rounded-lg text-xl flex-shrink-0 mr-4">
                                <i class="fas fa-star"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-800">Quality and Warranty</h4>
                                <p class="text-gray-600">All work is backed by a 100% service guarantee, utilizing only high-quality, durable parts and equipment.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image source updated to images/ -->
                <div class="lg:col-span-1 p-8 bg-gray-100 rounded-xl shadow-2xl relative overflow-hidden">
                    <img src="images/gbs-logo.jpg" alt="Book a Technician" class="absolute inset-0 w-full h-full object-cover opacity-30 blur-sm">
                    <div class="relative z-10">
                        <p class="text-primary-700 text-2xl font-bold mb-3">Ready for Service?</p>
                        <h3 class="text-4xl font-extrabold text-gray-800 mb-6 leading-tight">Book Your Expert Technician Today.</h3>
                        <p class="text-gray-700 mb-8">Contact us now for a free consultation or immediate emergency support. We serve all areas in Dar es Salaam and Zanzibar.</p>

                        <div class="space-y-4">
                            <a href="tel:+255789415238" class="block w-full text-center px-6 py-4 border border-primary-600 text-lg font-bold rounded-lg shadow-md text-primary-600 bg-white hover:bg-primary-50 transition duration-300">
                                Call Now: +255 789 415238
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 max-w-3xl mx-auto">
                <p class="text-primary-600 text-lg font-semibold mb-2 uppercase tracking-wide">Our Track Record</p>
                <h2 class="text-4xl font-bold text-gray-800">Showcasing Quality Workmanship </h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="relative group overflow-hidden rounded-xl shadow-xl aspect-square">
                    <img src="images/gbs-02.jpeg" alt="AC Installation" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="p-4 text-center text-white transform translate-y-4 group-hover:translate-y-0 transition duration-500">
                            <h3 class="text-xl font-bold">AC Installation</h3>
                            <p class="text-sm mt-2">Professional cooling solutions</p>
                        </div>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-xl shadow-xl aspect-square">
                    <img src="images/gbs-03.jpeg" alt="Electrical Wiring" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="p-4 text-center text-white transform translate-y-4 group-hover:translate-y-0 transition duration-500">
                            <h3 class="text-xl font-bold">Electrical Wiring</h3>
                            <p class="text-sm mt-2">Safe and reliable wiring</p>
                        </div>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-xl shadow-xl aspect-square">
                    <img src="images/gbs-04.jpeg" alt="Plumbing Repair" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="p-4 text-center text-white transform translate-y-4 group-hover:translate-y-0 transition duration-500">
                            <h3 class="text-xl font-bold">Plumbing Repair</h3>
                            <p class="text-sm mt-2">Expert maintenance & repair</p>
                        </div>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-xl shadow-xl aspect-square">
                    <img src="images/gbs-05.jpeg" alt="CCTV Installation" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="p-4 text-center text-white transform translate-y-4 group-hover:translate-y-0 transition duration-500">
                            <h3 class="text-xl font-bold">CCTV Installation</h3>
                            <p class="text-sm mt-2">Advanced security monitoring</p>
                        </div>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-xl shadow-xl aspect-square">
                    <img src="images/gbs-06.jpeg" alt="Electric Fencing" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="p-4 text-center text-white transform translate-y-4 group-hover:translate-y-0 transition duration-500">
                            <h3 class="text-xl font-bold">Electric Fencing</h3>
                            <p class="text-sm mt-2">Secure perimeter protection</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="py-16 md:py-24 bg-gray-50">
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
                            <p class="text-xs text-gray-400 mt-1 uppercase tracking-wider">Dar es Salaam</p>
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
                            <p class="text-xs text-gray-400 mt-1 uppercase tracking-wider">Zanzibar</p>
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
