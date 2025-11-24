<!-- resources/views/tasks.blade.php -->
<x-layout>
    <section id="home" class="relative bg-cover bg-center pt-20 h-[70vh] md:h-[85vh] flex items-center" style="background-image: url('images/gbs-03.jpeg');">
        <div class="absolute inset-0 bg-sky-900 bg-opacity-100"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 z-10 text-white">
            <div class="max-w-4xl">
                <p class="text-lg font-semibold text-primary-300 mb-2 uppercase tracking-wider">OUR SLOGAN: Guaranteed Comfort</p>
                <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4">Your Trusted Partner in AC, Electrical & Plumbing.</h1>
                <p class="text-xl opacity-90 mb-8 max-w-2xl">
                    Providing top-notch Air conditioning solutions to homes and businesses in Dar es Salaam and Zanzibar since <strong>2019</strong>.
                    <span class="block md:inline-block">Reliable service, 24/7 availability.</span>
                </p>
                <a href={{route('about')}} class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-lg text-white bg-primary-600 hover:bg-primary-700 transition duration-300">
                    Read More <i class="fas fa-angle-double-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <section id="stats" class="py-12 bg-primary-600 text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="border-r border-primary-500 last:border-r-0 md:last:border-r-0">
                    <p class="text-4xl md:text-5xl font-extrabold mb-1">5+</p>
                    <p class="uppercase text-sm opacity-80">Years in Business</p>
                </div>
                <div class="border-r border-primary-500 last:border-r-0">
                    <p class="text-4xl md:text-5xl font-extrabold mb-1">98%</p>
                    <p class="uppercase text-sm opacity-80">Client Satisfaction</p>
                </div>
                <div class="border-r border-primary-500 last:border-r-0">
                    <p class="text-4xl md:text-5xl font-extrabold mb-1">450+</p>
                    <p class="uppercase text-sm opacity-80">Projects Completed</p>
                </div>
                <div class="last:border-r-0">
                    <p class="text-4xl md:text-5xl font-extrabold mb-1">5</p>
                    <p class="uppercase text-sm opacity-80">Core Services</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">

                <div class="lg:col-span-1 order-2 lg:order-1">
                    <p class="text-primary-600 text-lg font-semibold mb-2 uppercase tracking-wide">Our Foundation</p>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                        Building <strong class="text-primary-600">Trust</strong> Through Technical Excellence.
                    </h2>
                    <!-- Bold text updated to <strong> -->
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        We are <strong>GBS Trusted Company Limited</strong>, your local partner for guaranteed comfort and safety. Founded in <strong>2019</strong>, our commitment is to provide prompt, high-quality AC, Electrical, and Plumbing services across Dar es Salaam and Zanzibar.
                    </p>

                    <div class="space-y-6 mb-8">
                        <div class="flex items-start">
                            <i class="fas fa-bullseye text-3xl text-primary-600 mr-4 mt-1 flex-shrink-0"></i>
                            <div>
                                <h4 class="text-xl font-bold text-gray-800">Our Mission</h4>
                                <p class="text-gray-600">To identify our client’s needs and provide the best solution in Air conditioning, Electrical, Plumbing, CCTV, and Electrical fence with unmatched dedication.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-eye text-3xl text-primary-600 mr-4 mt-1 flex-shrink-0"></i>
                            <div>
                                <h4 class="text-xl font-bold text-gray-800">Our Vision</h4>
                                <p class="text-gray-600">To be the most reliable, customer-oriented, and fastest-growing service provider in the region, offering superior installations and services at the best possible price.</p>
                            </div>
                        </div>
                    </div>

                    <a href={{route('services')}} class="inline-flex items-center px-6 py-3 border border-primary-600 text-base font-medium rounded-lg shadow-md text-primary-600 bg-white hover:bg-primary-50 transition duration-300">
                        View All Services <i class="fas fa-angle-double-right ml-2"></i>
                    </a>
                </div>

                <!-- Image sources updated to images/ -->
                <div class="lg:col-span-1 order-1 lg:order-2 mt-12 lg:mt-0 relative">
                    <img src="images/gbs-06.jpeg" alt="GBS Office Team" class="rounded-xl shadow-2xl w-full h-[350px] object-cover relative z-10">
                    <img src="images/gbs-logo.jpg" alt="GBS Technician Working" class="absolute hidden lg:block w-2/3 h-56 object-cover rounded-xl shadow-xl -bottom-16 -left-16 border-8 border-white z-20">
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

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:-translate-y-1">
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center justify-center w-16 h-16 bg-primary-100 text-primary-600 rounded-full text-2xl group-hover:bg-primary-600 group-hover:text-white transition duration-300">
                                <i class="fas fa-fan"></i>
                            </div>
                            <p class="text-4xl font-extrabold text-primary-200 group-hover:text-primary-100 transition duration-300">01</p>
                        </div>
                        <h4 class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary-600 transition duration-300"><a href="#service">Air Conditioning</a></h4>
                        <p class="text-gray-600">Complete services from new installations of central air and mini-splits to emergency repairs and routine maintenance plans.</p>
                    </div>
                    <a href="#service" class="block text-primary-600 font-semibold py-3 text-center border-t border-primary-100 group-hover:bg-primary-600 group-hover:text-white transition duration-300">
                        Learn More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <div class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:-translate-y-1">
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center justify-center w-16 h-16 bg-primary-100 text-primary-600 rounded-full text-2xl group-hover:bg-primary-600 group-hover:text-white transition duration-300">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <p class="text-4xl font-extrabold text-primary-200 group-hover:text-primary-100 transition duration-300">02</p>
                        </div>
                        <h4 class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary-600 transition duration-300"><a href="#service">Electrical Services</a></h4>
                        <p class="text-gray-600">Certified electricians for home wiring, panel upgrades, troubleshooting faults, and commercial electrical installations.</p>
                    </div>
                    <a href="#service" class="block text-primary-600 font-semibold py-3 text-center border-t border-primary-100 group-hover:bg-primary-600 group-hover:text-white transition duration-300">
                        Learn More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <div class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:-translate-y-1">
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center justify-center w-16 h-16 bg-primary-100 text-primary-600 rounded-full text-2xl group-hover:bg-primary-600 group-hover:text-white transition duration-300">
                                <i class="fas fa-wrench"></i>
                            </div>
                            <p class="text-4xl font-extrabold text-primary-200 group-hover:text-primary-100 transition duration-300">03</p>
                        </div>
                        <h4 class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary-600 transition duration-300"><a href="#service">Plumbing Services</a></h4>
                        <p class="text-gray-600">Rapid response for 24/7 emergencies, drain cleaning, water heater repair, and comprehensive plumbing system maintenance.</p>
                    </div>
                    <a href="#service" class="block text-primary-600 font-semibold py-3 text-center border-t border-primary-100 group-hover:bg-primary-600 group-hover:text-white transition duration-300">
                        Learn More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <div class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:-translate-y-1">
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center justify-center w-16 h-16 bg-primary-100 text-primary-600 rounded-full text-2xl group-hover:bg-primary-600 group-hover:text-white transition duration-300">
                                <i class="fas fa-video"></i>
                            </div>
                            <p class="text-4xl font-extrabold text-primary-200 group-hover:text-primary-100 transition duration-300">04</p>
                        </div>
                        <h4 class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary-600 transition duration-300"><a href="#service">CCTV & Security</a></h4>
                        <p class="text-gray-600">Installation and integration of advanced CCTV systems, access control, and alarm solutions for residential and commercial security.</p>
                    </div>
                    <a href="#service" class="block text-primary-600 font-semibold py-3 text-center border-t border-primary-100 group-hover:bg-primary-600 group-hover:text-white transition duration-300">
                        Learn More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <div class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:-translate-y-1">
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center justify-center w-16 h-16 bg-primary-100 text-primary-600 rounded-full text-2xl group-hover:bg-primary-600 group-hover:text-white transition duration-300">
                                <i class="fas fa-lock"></i>
                            </div>
                            <p class="text-4xl font-extrabold text-primary-200 group-hover:text-primary-100 transition duration-300">05</p>
                        </div>
                        <h4 class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-primary-600 transition duration-300"><a href="#service">Electric Fencing</a></h4>
                        <p class="text-gray-600">Designing and installing high-quality, legally compliant electric perimeter fencing for maximum security deterrence.</p>
                    </div>
                    <a href="#service" class="block text-primary-600 font-semibold py-3 text-center border-t border-primary-100 group-hover:bg-primary-600 group-hover:text-white transition duration-300">
                        Learn More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
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
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div class="relative group overflow-hidden rounded-xl shadow-xl">
                    <img src="images/gbs-02.jpeg" alt="AC Installation" class="w-full h-62 object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="p-4 text-center text-white bg-primary-600 w-full transform translate-y-full group-hover:translate-y-0 transition duration-500">
                            <h3 class="text-lg font-bold">AC Installation</h3>
                        </div>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-xl shadow-xl">
                    <!-- Image source updated to images/ -->
                    <img src="images/gbs-03.jpeg" alt="Electrical Wiring" class="w-full h-62 object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="p-4 text-center text-white bg-primary-600 w-full transform translate-y-full group-hover:translate-y-0 transition duration-500">
                            <h3 class="text-lg font-bold">Electrical Wiring</h3>
                        </div>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-xl shadow-xl">
                    <!-- Image source updated to images/ -->
                    <img src="images/gbs-04.jpeg" alt="Plumbing Repair" class="w-full h-62 object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="p-4 text-center text-white bg-primary-600 w-full transform translate-y-full group-hover:translate-y-0 transition duration-500">
                            <h3 class="text-lg font-bold">Plumbing Repair</h3>
                        </div>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-xl shadow-xl">
                    <!-- Image source updated to images/ -->
                    <img src="images/gbs-05.jpeg" alt="CCTV Installation" class="w-full h-62 object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="p-4 text-center text-white bg-primary-600 w-full transform translate-y-full group-hover:translate-y-0 transition duration-500">
                            <h3 class="text-lg font-bold">CCTV Installation</h3>
                        </div>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-xl shadow-xl">
                    <!-- Image source updated to images/ -->
                    <img src="images/gbs-06.jpeg" alt="Electric Fencing" class="w-full h-62 object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="p-4 text-center text-white bg-primary-600 w-full transform translate-y-full group-hover:translate-y-0 transition duration-500">
                            <h3 class="text-lg font-bold">Electric Fencing</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <p class="text-primary-600 text-lg font-semibold mb-2">Testimonials</p>
                <h3 class="text-4xl font-bold text-gray-800">Reviews of our Clients</h3>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="p-8 bg-gray-50 rounded-xl shadow-lg border-t-4 border-primary-600">
                    <div class="flex space-x-4 mb-4">
                        <!-- Image source updated to images/ -->
                        <span class="w-16 h-16 rounded-full object-cover shadow-md bg-sky-950"></span>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">The Power 2020 Co. Ltd</h3>
                            <p class="text-sm text-gray-500">Dar es Salaam Client</p>
                        </div>
                    </div>
                    <blockquote class="italic text-gray-600 relative pl-6 border-l-4 border-primary-400">
                        <i class="fas fa-quote-left absolute top-0 -left-1 text-primary-400 opacity-50 text-xl"></i>
                        <p>GBS installed our new AC system flawlessly. Fast, professional, and the price was excellent. We highly recommend their guaranteed service!</p>
                    </blockquote>
                </div>
                <div class="p-8 bg-gray-50 rounded-xl shadow-lg border-t-4 border-primary-600">
                    <div class="flex space-x-4 mb-4">
                        <span class="w-16 h-16 rounded-full object-cover shadow-md bg-sky-950"></span>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Azure United Properties Ltd</h3>
                            <p class="text-sm text-gray-500">Zanzibar Client</p>
                        </div>
                    </div>
                    <blockquote class="italic text-gray-600 relative pl-6 border-l-4 border-primary-400">
                        <i class="fas fa-quote-left absolute top-0 -left-1 text-primary-400 opacity-50 text-xl"></i>
                        <p>Their 24/7 plumbing emergency service saved us. A technician arrived quickly and fixed the leak perfectly. True to their slogan, 'Guaranteed Comfort'.</p>
                    </blockquote>
                </div>
                <div class="p-8 bg-gray-50 rounded-xl shadow-lg border-t-4 border-primary-600">
                    <div class="flex space-x-4 mb-4">
                        <span class="w-16 h-16 rounded-full object-cover shadow-md bg-sky-950"></span>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Mind Garden</h3>
                            <p class="text-sm text-gray-500">Local Business</p>
                        </div>
                    </div>
                    <blockquote class="italic text-gray-600 relative pl-6 border-l-4 border-primary-400">
                        <i class="fas fa-quote-left absolute top-0 -left-1 text-primary-400 opacity-50 text-xl"></i>
                        <p>We used GBS for CCTV and electric fencing. The installation was seamless, and the security system is top-notch. Highly professional and skilled staff.</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

</x-layout>
