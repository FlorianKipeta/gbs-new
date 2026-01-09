<!-- resources/views/tasks.blade.php -->
<x-layout>
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
            <div class="flex flex-wrap lg:flex-nowrap -mx-4 items-center">
                <div class="w-full lg:w-6/12 px-4 mb-12 lg:mb-0 lg:pr-16">
                    <p class="text-primary-600 font-semibold mb-2 uppercase tracking-widest text-sm">About Our Company</p>
                    <h3 class="text-3xl md:text-5xl font-bold text-gray-800 mb-8 leading-tight">Your One-Stop Solution for AC, Electrical, Plumbing, and Security Services</h3>
                    <div class="space-y-6">
                        <p class="text-gray-600 leading-relaxed text-lg">
                            <strong>GBS Trusted Company Limited</strong> is your reliable, one-stop service provider in Tanzania and Zanzibar since <strong>2019</strong>. We are committed to providing top-notch solutions tailored to your home or business needs, ensuring efficiency and reliability all year long.
                        </p>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            Our friendly, certified technicians specialize in comprehensive Air Conditioning services, Electrical installations and repairs, Plumbing solutions, CCTV security systems, and robust Electric fence services.
                        </p>
                    </div>

                    <div class="mt-10 flex flex-wrap gap-4">
                        <div class="flex items-center space-x-3 bg-gray-50 px-6 py-4 rounded-2xl border border-gray-100 shadow-sm">
                            <div class="w-10 h-10 bg-primary-600 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-check"></i>
                            </div>
                            <span class="font-bold text-gray-800">Certified Experts</span>
                        </div>
                        <div class="flex items-center space-x-3 bg-gray-50 px-6 py-4 rounded-2xl border border-gray-100 shadow-sm">
                            <div class="w-10 h-10 bg-primary-600 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-clock"></i>
                            </div>
                            <span class="font-bold text-gray-800">24/7 Availability</span>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                    <div class="relative">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="pt-12">
                                <img src="images/gbs-02.jpeg" alt="AC Technician at Work" class="w-full h-[400px] object-cover rounded-3xl shadow-2xl">
                            </div>
                            <div>
                                <img src="images/gbs-03.jpeg" alt="Team Meeting" class="w-full h-[400px] object-cover rounded-3xl shadow-2xl">
                            </div>
                        </div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-24 h-24 bg-white rounded-full flex items-center justify-center shadow-2xl z-20 hidden md:flex">
                            <img src="images/gbs-logo.jpg" alt="Logo" class="w-16 h-16 object-contain">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
