<!-- resources/views/tasks.blade.php -->
<x-layout>
    <div class="pt-20 bg-gray-100">
        <section class="py-12 sm:py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="mb-4 sm:mb-0">
                        <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mt-8 sm:mt-4">
                            Our Solutions
                        </h2>
                    </div>
                    <div>
                        <ul class="flex space-x-2 text-sm text-gray-600">
                            <li><a href="{{route('welcome')}}" class="hover:text-primary-500">Home</a></li>
                            <li class="text-gray-400">
                                <span class="mx-2">/</span> Services
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-16 items-center">

                <div class="lg:col-span-1 mb-8 lg:mb-0">
                    <img src="images/gbs-02.jpeg" alt="Technician working on a building system" class="img-fluid rounded-xl shadow-2xl w-full h-auto object-cover">
                </div>

                <div class="lg:col-span-1">
                    <p class="text-primary-600 text-lg font-semibold mb-2 uppercase tracking-wide">What We Do</p>
                    <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Comprehensive Technical Services with Guaranteed Comfort</h3>
                    <p class="text-gray-600 mb-4">At <strong>GBS Trusted Company Limited</strong>, we offer a comprehensive range of professional services, ensuring precision, reliability, and guaranteed satisfaction for both residential and commercial clients across Dar es Salaam and Zanzibar.</p>
                    <p class="text-gray-600 mb-8">Our licensed technicians are available 24/7 for emergency repairs and scheduled maintenance, delivering quality workmanship every time.</p>

                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-4">
                        <li class="flex items-center space-x-2 text-gray-700">
                            <i aria-hidden="true" class="fas fa-check text-primary-600"></i>
                            <span>Air Conditioning Sales & Service</span>
                        </li>
                        <li class="flex items-center space-x-2 text-gray-700">
                            <i aria-hidden="true" class="fas fa-check text-primary-600"></i>
                            <span>Electrical Installations & Repair</span>
                        </li>
                        <li class="flex items-center space-x-2 text-gray-700">
                            <i aria-hidden="true" class="fas fa-check text-primary-600"></i>
                            <span>Plumbing and Water Solutions</span>
                        </li>
                        <li class="flex items-center space-x-2 text-gray-700">
                            <i aria-hidden="true" class="fas fa-check text-primary-600"></i>
                            <span>CCTV & Electric Fencing Security</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section id="why-trust-gbs" class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 max-w-3xl mx-auto">
                <p class="text-primary-600 text-lg font-semibold mb-2 uppercase tracking-wide">Our Value</p>
                <h3 class="text-4xl font-bold text-gray-800">Why Trust GBS?</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img src="images/gbs-02.jpeg" alt="Technician with tools" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-gray-800 mb-2 hover:text-primary-600 transition duration-300"><a href="#feature">24/7 Emergency Service</a></h4>
                        <p class="text-gray-600">We are available around the clock to handle your urgent AC, electrical, or plumbing breakdowns.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img src="images/gbs-02.jpeg" alt="Quote pad" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-gray-800 mb-2 hover:text-primary-600 transition duration-300"><a href="#feature">Free Consultation & Quote</a></h4>
                        <p class="text-gray-600">Get a no-obligation, accurate, and transparent quote for any installation or major repair work.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img src="images/gbs-02.jpeg" alt="Certified technician" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-gray-800 mb-2 hover:text-primary-600 transition duration-300"><a href="#feature">Certified Experts</a></h4>
                        <p class="text-gray-600">All our services are delivered by highly trained, licensed, and friendly technicians.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services1" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <p class="text-primary-600 text-lg font-semibold mb-2 uppercase tracking-wide">Our Expertise</p>
                <h3 class="text-4xl md:text-5xl font-bold text-gray-800">Technical Services Offered</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="p-8 bg-gray-50 rounded-3xl shadow-sm border border-transparent hover:border-primary-100 hover:bg-white hover:shadow-xl transition-all duration-300">
                    <div class="w-14 h-14 flex items-center justify-center bg-primary-600 text-white rounded-2xl text-2xl mb-6">
                        <i class="fas fa-fan" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h4 class="text-2xl font-bold text-gray-800 mb-4">Air Conditioning (HVAC)</h4>
                        <p class="text-gray-600 leading-relaxed">Installation, maintenance, and repair of all AC types (Split, Cassette, Central) for optimal cooling and heating performance.</p>
                        <ul class="mt-4 space-y-2 text-sm text-gray-500">
                            <li class="flex items-center"><i class="fas fa-check text-primary-600 mr-2 text-xs"></i> New Installations</li>
                            <li class="flex items-center"><i class="fas fa-check text-primary-600 mr-2 text-xs"></i> Preventive Maintenance</li>
                            <li class="flex items-center"><i class="fas fa-check text-primary-600 mr-2 text-xs"></i> Emergency Repairs</li>
                        </ul>
                    </div>
                </div>

                <div class="p-8 bg-gray-50 rounded-3xl shadow-sm border border-transparent hover:border-primary-100 hover:bg-white hover:shadow-xl transition-all duration-300">
                    <div class="w-14 h-14 flex items-center justify-center bg-primary-600 text-white rounded-2xl text-2xl mb-6">
                        <i class="fas fa-bolt" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h4 class="text-2xl font-bold text-gray-800 mb-4">Electrical Systems</h4>
                        <p class="text-gray-600 leading-relaxed">Wiring, fault finding, circuit breaker installation, lighting design, and residential/commercial power solutions.</p>
                        <ul class="mt-4 space-y-2 text-sm text-gray-500">
                            <li class="flex items-center"><i class="fas fa-check text-primary-600 mr-2 text-xs"></i> Building Wiring</li>
                            <li class="flex items-center"><i class="fas fa-check text-primary-600 mr-2 text-xs"></i> Panel Upgrades</li>
                            <li class="flex items-center"><i class="fas fa-check text-primary-600 mr-2 text-xs"></i> Lighting Solutions</li>
                        </ul>
                    </div>
                </div>

                <div class="p-8 bg-gray-50 rounded-3xl shadow-sm border border-transparent hover:border-primary-100 hover:bg-white hover:shadow-xl transition-all duration-300">
                    <div class="w-14 h-14 flex items-center justify-center bg-primary-600 text-white rounded-2xl text-2xl mb-6">
                        <i class="fas fa-faucet" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h4 class="text-2xl font-bold text-gray-800 mb-4">Plumbing Services</h4>
                        <p class="text-gray-600 leading-relaxed">Pipe repair, fixture installation, water heater service, drain cleaning, and general plumbing maintenance.</p>
                        <ul class="mt-4 space-y-2 text-sm text-gray-500">
                            <li class="flex items-center"><i class="fas fa-check text-primary-600 mr-2 text-xs"></i> 24/7 Emergencies</li>
                            <li class="flex items-center"><i class="fas fa-check text-primary-600 mr-2 text-xs"></i> Leak Detection</li>
                            <li class="flex items-center"><i class="fas fa-check text-primary-600 mr-2 text-xs"></i> Water Heaters</li>
                        </ul>
                    </div>
                </div>

                <div class="p-8 bg-gray-50 rounded-3xl shadow-sm border border-transparent hover:border-primary-100 hover:bg-white hover:shadow-xl transition-all duration-300">
                    <div class="w-14 h-14 flex items-center justify-center bg-primary-600 text-white rounded-2xl text-2xl mb-6">
                        <i class="fas fa-video" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h4 class="text-2xl font-bold text-gray-800 mb-4">CCTV & Surveillance</h4>
                        <p class="text-gray-600 leading-relaxed">Installation and configuration of advanced CCTV cameras and surveillance systems for ultimate security.</p>
                        <ul class="mt-4 space-y-2 text-sm text-gray-500">
                            <li class="flex items-center"><i class="fas fa-check text-primary-600 mr-2 text-xs"></i> IP Cameras</li>
                            <li class="flex items-center"><i class="fas fa-check text-primary-600 mr-2 text-xs"></i> Remote Access</li>
                            <li class="flex items-center"><i class="fas fa-check text-primary-600 mr-2 text-xs"></i> DVR/NVR Setup</li>
                        </ul>
                    </div>
                </div>

                <div class="p-8 bg-gray-50 rounded-3xl shadow-sm border border-transparent hover:border-primary-100 hover:bg-white hover:shadow-xl transition-all duration-300">
                    <div class="w-14 h-14 flex items-center justify-center bg-primary-600 text-white rounded-2xl text-2xl mb-6">
                        <i class="fas fa-lock" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h4 class="text-2xl font-bold text-gray-800 mb-4">Electric Fencing</h4>
                        <p class="text-gray-600 leading-relaxed">Design, installation, and maintenance of perimeter electric fences for enhanced property protection.</p>
                        <ul class="mt-4 space-y-2 text-sm text-gray-500">
                            <li class="flex items-center"><i class="fas fa-check text-primary-600 mr-2 text-xs"></i> Legal Compliance</li>
                            <li class="flex items-center"><i class="fas fa-check text-primary-600 mr-2 text-xs"></i> Alarm Integration</li>
                            <li class="flex items-center"><i class="fas fa-check text-primary-600 mr-2 text-xs"></i> Periodic Testing</li>
                        </ul>
                    </div>
                </div>

                <div class="p-8 bg-gray-50 rounded-3xl shadow-sm border border-transparent hover:border-primary-100 hover:bg-white hover:shadow-xl transition-all duration-300">
                    <div class="w-14 h-14 flex items-center justify-center bg-primary-600 text-white rounded-2xl text-2xl mb-6">
                        <i class="fas fa-toolbox" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h4 class="text-2xl font-bold text-gray-800 mb-4">General Maintenance</h4>
                        <p class="text-gray-600 leading-relaxed">Full property maintenance, including minor structural repairs, painting, and general handyman services.</p>
                        <ul class="mt-4 space-y-2 text-sm text-gray-500">
                            <li class="flex items-center"><i class="fas fa-check text-primary-600 mr-2 text-xs"></i> Handyman Services</li>
                            <li class="flex items-center"><i class="fas fa-check text-primary-600 mr-2 text-xs"></i> Painting & Decor</li>
                            <li class="flex items-center"><i class="fas fa-check text-primary-600 mr-2 text-xs"></i> Annual Contracts</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
