<!-- resources/views/tasks.blade.php -->
<x-layout>
    <section id="home" class="relative pt-20" x-data="{
        activeSlide: 0,
        slides: [
            { image: 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?q=80&w=2069&auto=format&fit=crop', title: 'Guaranteed Comfort Everywhere in Tanzania.', subtitle: 'Providing top-notch solutions in AC, Electrical, and Plumbing services across the nation since 2019.' },
            { image: 'https://images.unsplash.com/photo-1581094288338-2314dddb7ecb?q=80&w=2070&auto=format&fit=crop', title: 'Professional Infrastructure Projects.', subtitle: 'Comprehensive services for properties, hotels, and telecommunication hubs.' },
            { image: 'https://images.unsplash.com/photo-1558389186-438424b00a32?q=80&w=2070&auto=format&fit=crop', title: 'Expert Technical Solutions 24/7.', subtitle: 'Our skilled technicians are ready to handle your most critical needs anywhere in Tanzania.' }
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
                                <a href="#projects" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-lg text-white bg-primary-600 hover:bg-primary-700 transition duration-300">
                                    Learn More <i class="fas fa-angle-double-right ml-2"></i>
                                </a>
                                <a href="{{route('contacts')}}" class="inline-flex items-center px-6 py-3 border border-white text-base font-medium rounded-lg shadow-lg text-white hover:bg-white hover:text-gray-900 transition duration-300">
                                    Contact Us
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
                    <p class="text-4xl md:text-5xl font-extrabold mb-1">6+</p>
                    <p class="uppercase text-xs font-semibold opacity-80">Years in Business</p>
                </div>
                <div class="p-6 bg-white/10 rounded-lg backdrop-blur-sm border border-white/20">
                    <p class="text-4xl md:text-5xl font-extrabold mb-1">98%</p>
                    <p class="uppercase text-xs font-semibold opacity-80">Client Satisfaction</p>
                </div>
                <div class="p-6 bg-white/10 rounded-lg backdrop-blur-sm border border-white/20">
                    <p class="text-4xl md:text-5xl font-extrabold mb-1">500+</p>
                    <p class="uppercase text-xs font-semibold opacity-80">Projects Completed</p>
                </div>
                <div class="p-6 bg-white/10 rounded-lg backdrop-blur-sm border border-white/20">
                    <p class="text-4xl md:text-5xl font-extrabold mb-1">8</p>
                    <p class="uppercase text-xs font-semibold opacity-80">Core Services</p>
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
                        Expertise You Can Trust <strong class="text-primary-600">Nationwide</strong>.
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
                        <img src="images/gbs-06.jpeg" alt="GBS Office Team" class="rounded-3xl shadow-2xl w-full h-[450px] object-cover relative z-10">
                        <div class="absolute -bottom-10 -left-10 w-2/3 hidden lg:block z-20">
                            <div class="bg-white p-4 rounded-2xl shadow-2xl">
                                <img src="images/gbs-logo.jpg" alt="GBS Technician Working" class="w-full h-48 object-cover rounded-xl">
                            </div>
                        </div>
                        <div class="absolute -top-6 -right-6 w-32 h-32 bg-primary-600 rounded-full flex items-center justify-center text-white text-center p-4 z-20 shadow-xl border-8 border-white">
                            <div>
                                <p class="text-2xl font-bold leading-none">6+</p>
                                <p class="text-[10px] uppercase font-bold">Years of Exp</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="work" class="py-16 md:py-24 bg-gray-100 scroll-mt-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <p class="text-primary-600 text-lg font-semibold mb-2 uppercase tracking-wide">Expertise You Can Trust</p>
                <h2 class="text-4xl font-bold text-gray-800">Solutions for Guaranteed Comfort and Safety</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center justify-center w-12 h-12 bg-primary-50 text-primary-600 rounded-xl text-xl group-hover:bg-primary-600 group-hover:text-white transition-all duration-300">
                                <i class="fas fa-fan"></i>
                            </div>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-primary-600 transition-colors duration-300">AC Services</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">Professional installation, repair, and maintenance for homes, industries, and commercial units.</p>
                    </div>
                </div>

                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center justify-center w-12 h-12 bg-primary-50 text-primary-600 rounded-xl text-xl group-hover:bg-primary-600 group-hover:text-white transition-all duration-300">
                                <i class="fas fa-bolt"></i>
                            </div>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-primary-600 transition-colors duration-300">Electrical</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">Knowledgeable technicians for all electrical systems, building design, and power installations.</p>
                    </div>
                </div>

                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center justify-center w-12 h-12 bg-primary-50 text-primary-600 rounded-xl text-xl group-hover:bg-primary-600 group-hover:text-white transition-all duration-300">
                                <i class="fas fa-wrench"></i>
                            </div>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-primary-600 transition-colors duration-300">Plumbing</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">Certified plumbers for residential, industrial, and commercial properties. Available 24/7.</p>
                    </div>
                </div>

                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center justify-center w-12 h-12 bg-primary-50 text-primary-600 rounded-xl text-xl group-hover:bg-primary-600 group-hover:text-white transition-all duration-300">
                                <i class="fas fa-video"></i>
                            </div>
                        </div>
                        <h4 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-primary-600 transition-colors duration-300">Security</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">Turnkey security projects including CCTV, alarm systems, and high-voltage electric fencing.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="{{route('services')}}" class="inline-flex items-center text-primary-600 font-bold hover:translate-x-2 transition-transform duration-300">
                    Explore All 8 Core Services <i class="fas fa-arrow-right ml-2 text-sm"></i>
                </a>
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
                        <p class="text-gray-700 mb-8">Contact us now for a free consultation or immediate technical support. We serve all areas across Tanzania, from major cities to remote locations.</p>

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

    <section id="projects" class="py-16 md:py-24 bg-gray-50 scroll-mt-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <p class="text-primary-600 text-lg font-semibold mb-2 uppercase tracking-wide">Our Track Record</p>
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Some of our previous projects successfully completed</h2>
                <p class="text-gray-600">Explore how GBS Trusted Company Limited delivers excellence across various industries and locations in Tanzania.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1: Azure Properties -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 flex flex-col">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=2070&auto=format&fit=crop" alt="Azure Properties Zanzibar" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4 bg-primary-600 text-white text-xs font-bold px-3 py-1 rounded-full">2024</div>
                    </div>
                    <div class="p-6 flex-grow">
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Azure Properties – Michamvi, Zanzibar</h4>
                        <p class="text-gray-600 text-sm mb-4">Comprehensive installation of Air Conditioning, Plumbing, Electrical Wiring, and CCTV systems for high-value development.</p>
                        <ul class="text-xs text-gray-500 space-y-1 mb-4">
                            <li><i class="fas fa-check text-primary-600 mr-2"></i>Split & Central AC Installation</li>
                            <li><i class="fas fa-check text-primary-600 mr-2"></i>Cold/Hot Water (PPR) & Drainage</li>
                            <li><i class="fas fa-check text-primary-600 mr-2"></i>Main & Sub-Distribution Boards</li>
                            <li><i class="fas fa-check text-primary-600 mr-2"></i>IP CCTV Surveillance Systems</li>
                        </ul>
                    </div>
                </div>

                <!-- Project 2: Halotel Towers -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 flex flex-col">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1454165833767-027eeea15c3e?q=80&w=2070&auto=format&fit=crop" alt="Halotel Arusha & Tanga" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4 bg-primary-600 text-white text-xs font-bold px-3 py-1 rounded-full">2023</div>
                    </div>
                    <div class="p-6 flex-grow">
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Halotel Towers – Arusha & Tanga</h4>
                        <p class="text-gray-600 text-sm mb-4">AC Maintenance and Repair for critical telecommunication hubs to ensure uninterrupted cooling for equipment rooms.</p>
                        <ul class="text-xs text-gray-500 space-y-1 mb-4">
                            <li><i class="fas fa-check text-primary-600 mr-2"></i>Preventive & Corrective Maintenance</li>
                            <li><i class="fas fa-check text-primary-600 mr-2"></i>Refrigerant Re-charging & Cleaning</li>
                            <li><i class="fas fa-check text-primary-600 mr-2"></i>Compressor & Motor Replacement</li>
                        </ul>
                    </div>
                </div>

                <!-- Project 3: The Power Villa -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 flex flex-col">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?q=80&w=2070&auto=format&fit=crop" alt="The Power Villa Zanzibar" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4 bg-primary-600 text-white text-xs font-bold px-3 py-1 rounded-full">2022</div>
                    </div>
                    <div class="p-6 flex-grow">
                        <h4 class="text-xl font-bold text-gray-800 mb-2">The Power Villa – Zanzibar</h4>
                        <p class="text-gray-600 text-sm mb-4">Full installation of CCTV cameras, AC systems, plumbing, and electrical wiring adhering to international standards.</p>
                        <ul class="text-xs text-gray-500 space-y-1 mb-4">
                            <li><i class="fas fa-check text-primary-600 mr-2"></i>HD CCTV Covering Critical Areas</li>
                            <li><i class="fas fa-check text-primary-600 mr-2"></i>Centralized AC for Common Areas</li>
                            <li><i class="fas fa-check text-primary-600 mr-2"></i>Modern Plumbing & Leak-proof Systems</li>
                        </ul>
                    </div>
                </div>

                <!-- Project 4: Popex Hotel -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 flex flex-col">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=2070&auto=format&fit=crop" alt="Popex Hotel Dar es Salaam" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4 bg-primary-600 text-white text-xs font-bold px-3 py-1 rounded-full">2023</div>
                    </div>
                    <div class="p-6 flex-grow">
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Popex Hotel – Dar es Salaam</h4>
                        <p class="text-gray-600 text-sm mb-4">Professional AC services and maintenance to enhance system efficiency and guest satisfaction.</p>
                        <ul class="text-xs text-gray-500 space-y-1 mb-4">
                            <li><i class="fas fa-check text-primary-600 mr-2"></i>Comprehensive Unit Inspection</li>
                            <li><i class="fas fa-check text-primary-600 mr-2"></i>Faulty Parts Replacement</li>
                            <li><i class="fas fa-check text-primary-600 mr-2"></i>System Calibration & Optimization</li>
                        </ul>
                    </div>
                </div>

                <!-- Project 5: Sky Bar Paje -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 flex flex-col">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?q=80&w=2070&auto=format&fit=crop" alt="Sky Bar Paje Zanzibar" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4 bg-primary-600 text-white text-xs font-bold px-3 py-1 rounded-full">2022</div>
                    </div>
                    <div class="p-6 flex-grow">
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Sky Bar Paje – Zanzibar</h4>
                        <p class="text-gray-600 text-sm mb-4">Modern electrical system installation including safe wiring, power distribution, and decorative lighting.</p>
                        <ul class="text-xs text-gray-500 space-y-1 mb-4">
                            <li><i class="fas fa-check text-primary-600 mr-2"></i>Main & Sub-Distribution Boards</li>
                            <li><i class="fas fa-check text-primary-600 mr-2"></i>Decorative & Functional Lighting</li>
                            <li><i class="fas fa-check text-primary-600 mr-2"></i>Grounding & Surge Protection</li>
                        </ul>
                    </div>
                </div>
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
