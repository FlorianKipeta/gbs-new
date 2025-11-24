<!-- resources/views/tasks.blade.php -->
<x-layout>
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
                            <li><a href={{route('welcome')}} class="hover:text-primary-500">Home</a></li>
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

                <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="bg-gray-50 p-8 rounded-xl shadow-lg">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                        <div class="space-y-4">
                            <input type="text" name="w3lName" id="w3lName" placeholder="Name" required="" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600">
                            <input type="number" name="w3lPhone" placeholder="Your phone number" required="" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600">
                            <input type="email" name="w3lSender" id="w3lSender" placeholder="Email*" required="" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600">
                            <input type="text" name="w3lSubject" placeholder="Subject (e.g., AC Repair, Quote Request)" required="" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600">
                        </div>
                        <div>
                            <textarea name="w3lMessage" id="w3lMessage" placeholder="Message (Please describe your service need, location, and preferred time.)*" required="" rows="8" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600"></textarea>
                        </div>
                    </div>

                    <div class="text-center lg:text-right">
                        <button type="submit" class="inline-flex items-center px-8 py-3 border border-transparent text-base font-bold rounded-lg shadow-lg text-white bg-primary-600 hover:bg-primary-700 transition duration-300">
                            Submit Now <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id="contact-details" class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-lg flex flex-col items-center text-center">
                    <div class="w-16 h-16 flex items-center justify-center bg-primary-600 text-white rounded-full text-2xl mb-4">
                        <span class="fas fa-map-marked-alt"></span>
                    </div>
                    <div class="text-box">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Our Location</h3>
                        <p class="text-gray-600"><strong>GBS Trusted Company Limited</strong>, P.O Box 18009, Mwenge, Dar es salaam, Tanzania.</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-lg flex flex-col items-center text-center">
                    <div class="w-16 h-16 flex items-center justify-center bg-primary-600 text-white rounded-full text-2xl mb-4">
                        <span class="fas fa-phone-alt"></span>
                    </div>
                    <div class="text-box">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Give us a call (24/7)</h3>
                        <p><a href="tel:+255789415238" class="text-primary-600 hover:text-primary-700 font-medium">+255 789 415238 (Main)</a></p>
                        <p><a href="tel:+255655415238" class="text-primary-600 hover:text-primary-700 font-medium">+255 655 415238 (Support)</a></p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-lg flex flex-col items-center text-center">
                    <div class="w-16 h-16 flex items-center justify-center bg-primary-600 text-white rounded-full text-2xl mb-4">
                        <span class="fas fa-envelope-open-text"></span>
                    </div>
                    <div class="text-box">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Help Desk</h3>
                        <p> <a href="mailto:info@gbstrusted.co.tz" class="text-primary-600 hover:text-primary-700 font-medium">info@gbstrusted.co.tz (General Inquiries)</a></p>
                        <p> <a href="mailto:bottosahali4@gmail.com" class="text-primary-600 hover:text-primary-700 font-medium">bottosahali4@gmail.com (Urgent)</a></p>
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
