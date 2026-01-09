<!-- resources/views/tasks.blade.php -->
<x-layout
    title="About Us - GBS Trusted Company Limited"
    description="Learn about GBS Trusted Company Limited, our history since 2019, our mission, vision, and the professional management team behind our technical excellence in Tanzania."
    keywords="About GBS Trusted, Gerald Davis CEO, Engineering Services Tanzania, BRELA 154573453, Technical Experts Tanzania"
>
    <div class="pt-20 bg-gray-100">
        <section class="py-12 sm:py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="mb-4 sm:mb-0">
                        <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mt-8 sm:mt-4">
                            About Us
                        </h2>
                    </div>
                    <div>
                        <ul class="flex space-x-2 text-sm text-gray-600">
                            <li><a href="{{route('welcome')}}" class="hover:text-primary-500">Home</a></li>
                            <li class="text-gray-400">
                                <span class="mx-2">/</span> About Us
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap lg:flex-nowrap -mx-4 items-center mb-20">
                <div class="w-full lg:w-6/12 px-4 mb-12 lg:mb-0 lg:pr-16">
                    <p class="text-primary-600 font-semibold mb-2 uppercase tracking-widest text-sm">Our Story</p>
                    <h3 class="text-3xl md:text-5xl font-bold text-gray-800 mb-8 leading-tight">Excellence and Professionalism Since 2019</h3>
                    <div class="space-y-6">
                        <p class="text-gray-600 leading-relaxed text-lg">
                            Founded in Dar es Salaam city, Tanzania, <strong>GBS Trusted Company Limited</strong> is a registered company under BRELA with registration no. <strong>154573453</strong>. We set our foot as an Air Conditioning, refrigeration, plumbing, CCTV, and electrical fencing specialist.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            The company has earned a reputation for excellence and professionalism for continuously striving to meet and even exceed standards which set the climate for a sustainable business relationship with our clients. Our highly qualified team can offer complete engineering services from the project feasibility phase through to detailed design and construction management.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Our team is composed of technically skilled and highly dedicated personnel working cohesively to promote value-added solutions with a competitive pricing structure to suit your needs.
                        </p>
                    </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                    <div class="relative">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="pt-12">
                                <img src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?q=80&w=2070&auto=format&fit=crop" alt="AC Technician at Work" class="w-full h-[400px] object-cover rounded-3xl shadow-2xl">
                            </div>
                            <div>
                                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2069&auto=format&fit=crop" alt="Team Meeting" class="w-full h-[400px] object-cover rounded-3xl shadow-2xl">
                            </div>
                        </div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-24 h-24 bg-white rounded-full flex items-center justify-center shadow-2xl z-20 hidden md:flex border-4 border-primary-50">
                            <img src="images/gbs-logo.jpg" alt="Logo" class="w-16 h-16 object-contain">
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
                <div class="p-8 bg-gray-50 rounded-3xl border border-gray-100 hover:shadow-xl transition duration-300">
                    <div class="w-14 h-14 bg-primary-600 text-white rounded-2xl flex items-center justify-center text-2xl mb-6">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-gray-800 mb-4">Our Vision</h4>
                    <p class="text-gray-600">Becoming the most reliable, sustainable in technology, customer-oriented, fastest-growing service provider, offering cost-effective, superior installations, maintenance, and repair services with love for the earth.</p>
                </div>
                <div class="p-8 bg-gray-50 rounded-3xl border border-gray-100 hover:shadow-xl transition duration-300">
                    <div class="w-14 h-14 bg-primary-600 text-white rounded-2xl flex items-center justify-center text-2xl mb-6">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-gray-800 mb-4">Our Mission</h4>
                    <ul class="text-gray-600 space-y-3">
                        <li class="flex items-start"><i class="fas fa-check text-primary-600 mt-1 mr-2 text-xs"></i> <span>Commitment to provide the highest quality products and services exceeding expectations.</span></li>
                        <li class="flex items-start"><i class="fas fa-check text-primary-600 mt-1 mr-2 text-xs"></i> <span>Continuous expansion in equipment and facilities with expert training and certification.</span></li>
                    </ul>
                </div>
                <div class="p-8 bg-gray-50 rounded-3xl border border-gray-100 hover:shadow-xl transition duration-300">
                    <div class="w-14 h-14 bg-primary-600 text-white rounded-2xl flex items-center justify-center text-2xl mb-6">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-gray-800 mb-4">Core Values</h4>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-white border border-primary-100 rounded-full text-sm font-semibold text-primary-700">Integrity</span>
                        <span class="px-3 py-1 bg-white border border-primary-100 rounded-full text-sm font-semibold text-primary-700">Professionalism</span>
                        <span class="px-3 py-1 bg-white border border-primary-100 rounded-full text-sm font-semibold text-primary-700">Team working</span>
                        <span class="px-3 py-1 bg-white border border-primary-100 rounded-full text-sm font-semibold text-primary-700">Efficiency</span>
                        <span class="px-3 py-1 bg-white border border-primary-100 rounded-full text-sm font-semibold text-primary-700">Customer Service</span>
                        <span class="px-3 py-1 bg-white border border-primary-100 rounded-full text-sm font-semibold text-primary-700">Safety</span>
                    </div>
                </div>
            </div>

            <div class="bg-primary-600 rounded-3xl p-10 md:p-16 text-white text-center">
                <p class="text-primary-200 font-semibold mb-4 uppercase tracking-widest">Leadership</p>
                <h3 class="text-3xl md:text-5xl font-bold mb-12">Our Management Team</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-md border border-white/20">
                        <h5 class="text-xl font-bold mb-1">Eng. Gerald Davis</h5>
                        <p class="text-primary-200 text-sm font-medium mb-4">CEO</p>
                        <p class="text-xs opacity-80 italic">"5+ years of experience in cost-effective engineering systems."</p>
                    </div>
                    <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-md border border-white/20">
                        <h5 class="text-xl font-bold mb-1">Mr. Dominick D. Donald</h5>
                        <p class="text-primary-200 text-sm font-medium">Deputy Managing Director</p>
                    </div>
                    <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-md border border-white/20">
                        <h5 class="text-xl font-bold mb-1">Mr. Botto Daniel Sahali</h5>
                        <p class="text-primary-200 text-sm font-medium">Technical Director</p>
                    </div>
                    <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-md border border-white/20">
                        <h5 class="text-xl font-bold mb-1">Mr. Salum Bakari</h5>
                        <p class="text-primary-200 text-sm font-medium">Deputy Technical Director</p>
                    </div>
                </div>
                <div class="mt-16 pt-10 border-t border-white/20">
                    <h4 class="text-2xl font-bold mb-8">Our Skilled Experts</h4>
                    <div class="flex flex-wrap justify-center gap-4">
                        <span class="px-4 py-2 bg-white/10 rounded-xl text-sm border border-white/10">Marketing Manager</span>
                        <span class="px-4 py-2 bg-white/10 rounded-xl text-sm border border-white/10">Electronic & CCTV Technicians</span>
                        <span class="px-4 py-2 bg-white/10 rounded-xl text-sm border border-white/10">Mechanical Engineers</span>
                        <span class="px-4 py-2 bg-white/10 rounded-xl text-sm border border-white/10">Certified Electricians</span>
                        <span class="px-4 py-2 bg-white/10 rounded-xl text-sm border border-white/10">AC Technicians</span>
                        <span class="px-4 py-2 bg-white/10 rounded-xl text-sm border border-white/10">Fleet Maintenance</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
