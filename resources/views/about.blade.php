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
                            <li><a href={{route('welcome')}} class="hover:text-primary-500">Home</a></li>
                            <li class="text-gray-400">
                                <span class="mx-2">/</span> About Us
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="py-12 md:py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap lg:flex-nowrap -mx-4">
                <div class="w-full lg:w-6/12 px-4 mb-10 lg:mb-0 lg:pr-12">
                    <h6 class="text-primary-500 font-semibold mb-1">About Our Company</h6>
                    <h3 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-6">Your One-Stop Solution for AC, Electrical, Plumbing, and Security Services</h3>
                    <p class="mt-4 text-gray-600 lg:pr-16">
                        <strong>GBS Trusted Company Limited</strong> is your reliable, one-stop service provider in Tanzania and Zanzibar since **2019**. We are committed to providing top-notch solutions tailored to your home or business needs, ensuring efficiency and reliability all year long.
                    </p>
                    <p class="mt-4 text-gray-600 lg:pr-16">
                        Our friendly, certified technicians specialize in comprehensive Air Conditioning services, Electrical installations and repairs, Plumbing solutions, CCTV security systems, and robust Electric fence services.
                    </p>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex space-x-4">
                        <div class="w-1/2">
                            <img src="images/gbs-02.jpeg" alt="AC Technician at Work" class="w-full h-auto object-cover rounded-lg shadow-lg">
                        </div>
                        <div class="w-1/2">
                            <img src="images/gbs-03.jpeg" alt="Team Meeting" class="w-full h-auto object-cover rounded-lg shadow-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
