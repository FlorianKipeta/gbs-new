<!-- resources/views/tasks.blade.php -->
<x-layout
    title="Contact Us - GBS Trusted Company Limited Technical Support"
    description="Contact GBS Trusted Company Limited for emergency AC repairs, plumbing, electrical services, or free quotes. We serve Dar es Salaam, Zanzibar, and all of Tanzania 24/7."
    keywords="Contact GBS Trusted, AC Repair Tanzania Phone, GBS Location Dar es Salaam, Emergency Plumber Tanzania, CCTV Support"
>
    <div class="pt-20 bg-gray-100">
        <section class="py-12 sm:py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="mb-4 sm:mb-0">
                        <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mt-8 sm:mt-4">
                            Contact Us
                        </h2>
                    </div>
                    <div>
                        <ul class="flex space-x-2 text-sm text-gray-600">
                            <li><a href="{{route('welcome')}}" class="hover:text-primary-500">Home</a></li>
                            <li class="text-gray-400">
                                <span class="mx-2">/</span> Contact Us
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section id="contact-form" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <p class="text-primary-600 text-lg font-semibold mb-2 uppercase tracking-wide">Get In Touch</p>
                    <h3 class="text-4xl font-bold text-gray-800 mb-4">Fill the form and send your query</h3>
                    <p class="text-gray-600">For emergency repairs, service bookings, or free quotes, fill out the form below. We respond promptly!</p>
                </div>

                <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="bg-white p-10 rounded-3xl shadow-xl border border-gray-100">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">Your Name</label>
                                <input type="text" name="w3lName" id="w3lName" placeholder="Full Name" required="" class="w-full p-4 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-600 focus:bg-white transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">Phone Number</label>
                                <input type="number" name="w3lPhone" placeholder="+255..." required="" class="w-full p-4 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-600 focus:bg-white transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">Email Address</label>
                                <input type="email" name="w3lSender" id="w3lSender" placeholder="email@example.com" required="" class="w-full p-4 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-600 focus:bg-white transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">Subject</label>
                                <input type="text" name="w3lSubject" placeholder="How can we help?" required="" class="w-full p-4 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-600 focus:bg-white transition-all">
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <label class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">Your Message</label>
                            <textarea name="w3lMessage" id="w3lMessage" placeholder="Describe your service need, location, and preferred time..." required="" class="w-full p-4 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-600 focus:bg-white transition-all flex-grow min-h-[300px]"></textarea>
                        </div>
                    </div>

                    <div class="text-center md:text-right">
                        <button type="submit" class="w-full md:w-auto inline-flex items-center justify-center px-10 py-4 border border-transparent text-lg font-bold rounded-xl shadow-lg text-white bg-primary-600 hover:bg-primary-700 transition duration-300">
                            Submit Now <i class="fas fa-paper-plane ml-3"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id="contact-details" class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="bg-white p-10 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col items-center text-center border border-gray-100">
                    <div class="w-20 h-20 flex items-center justify-center bg-primary-50 text-primary-600 rounded-2xl text-3xl mb-6">
                        <span class="fas fa-map-marked-alt"></span>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Our Location</h3>
                        <p class="text-gray-600 leading-relaxed"><strong>GBS Trusted Company Limited</strong><br>P.O Box 18009, Makumbusho-Kinondoni,<br>Dar es salaam, Tanzania.</p>
                    </div>
                </div>

                <div class="bg-white p-10 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col items-center text-center border border-gray-100">
                    <div class="w-20 h-20 flex items-center justify-center bg-primary-50 text-primary-600 rounded-2xl text-3xl mb-6">
                        <span class="fas fa-phone-alt"></span>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Give us a call</h3>
                        <p class="text-gray-400 text-sm mb-4 uppercase font-bold tracking-widest">Available 24/7</p>
                        <div class="space-y-2">
                            <p><a href="tel:+255787858011" class="text-xl text-primary-600 hover:text-primary-700 font-bold transition-colors">+255 787 858011</a></p>
                            <p><a href="tel:+255789415238" class="text-lg text-gray-600 hover:text-primary-600 font-medium transition-colors">+255 789 415238</a></p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-10 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col items-center text-center border border-gray-100">
                    <div class="w-20 h-20 flex items-center justify-center bg-primary-50 text-primary-600 rounded-2xl text-3xl mb-6">
                        <span class="fas fa-envelope-open-text"></span>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Help Desk</h3>
                        <p class="text-gray-400 text-sm mb-4 uppercase font-bold tracking-widest">Email Us Anytime</p>
                        <div class="space-y-2">
                            <p><a href="mailto:domisahali@gmail.com" class="text-lg text-primary-600 hover:text-primary-700 font-bold transition-colors">domisahali@gmail.com</a></p>
                            <p><a href="mailto:info@gbstrusted.co.tz" class="text-gray-600 hover:text-primary-600 font-medium transition-colors">info@gbstrusted.co.tz</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="map" class="w-full">
        <div class="h-96 w-full">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15849.569427329977!2d39.20520288233379!3d-6.762193560706857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4fc97e3c1585%3A0xc66513470659837a!2sMwenge%2C%20Dar%20es%20Salaam%2C%20Tanzania!5e0!3m2!1sen!2sus!4v1700741234567!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</x-layout>
