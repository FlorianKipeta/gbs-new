<!-- resources/views/tasks.blade.php -->
<x-layout
    title="Contact Us - GBS Trusted Company Limited Technical Support"
    description="Contact GBS Trusted Company Limited for emergency AC repairs, plumbing, electrical services, or free quotes. We serve Dar es Salaam, Zanzibar, and all of Tanzania 24/7."
    keywords="Contact GBS Trusted, AC Repair Tanzania Phone, GBS Location Dar es Salaam, Emergency Plumber Tanzania, CCTV Support"
>
    <div class="pt-20 bg-gray-100">
        <section class="py-12 sm:py-20 bg-primary-600 relative overflow-hidden">
            <!-- Decorative Elements -->
            <div class="absolute top-0 right-0 w-1/3 h-full bg-white/5 skew-x-[-15deg] translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-primary-500/20 rounded-full -translate-x-1/2 translate-y-1/2 blur-3xl"></div>

            <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                    <div class="text-center md:text-left">
                        <span class="inline-block px-4 py-1 text-xs font-black tracking-widest text-primary-200 uppercase bg-white/10 rounded-full mb-4">Connect With Us</span>
                        <h1 class="text-4xl sm:text-6xl font-black text-white leading-tight">
                            Contact <span class="text-primary-300 italic">GBS Trusted</span>
                        </h1>
                        <p class="text-primary-100 mt-4 text-lg max-w-xl">We are here to provide guaranteed comfort and expert technical solutions for all your engineering needs.</p>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-primary-200 bg-black/20 backdrop-blur-md px-4 py-2 rounded-full border border-white/10">
                        <a href="{{route('welcome')}}" class="hover:text-white transition-colors">Home</a>
                        <span class="opacity-30">/</span>
                        <span class="text-white font-bold">Contact Us</span>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section id="contact-content" class="py-16 md:py-24 bg-white relative">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                <!-- Contact Info Cards -->
                <div class="lg:col-span-4 space-y-8">
                    <div class="bg-gray-50 p-8 rounded-[2rem] border border-gray-100 hover:shadow-xl transition-all duration-500 group">
                        <div class="w-16 h-16 flex items-center justify-center bg-primary-600 text-white rounded-2xl text-2xl mb-6 shadow-lg shadow-primary-600/20 group-hover:scale-110 transition-transform">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mb-4 uppercase tracking-tight">Main Office</h3>
                        <p class="text-gray-600 leading-relaxed font-medium">
                            GBS Trusted Company Limited<br>
                            P.O Box 18009, Makumbusho,<br>
                            Wakatibado Street, Kinondoni,<br>
                            Dar es salaam, Tanzania.
                        </p>
                    </div>

                    <div class="bg-gray-50 p-8 rounded-[2rem] border border-gray-100 hover:shadow-xl transition-all duration-500 group">
                        <div class="w-16 h-16 flex items-center justify-center bg-primary-600 text-white rounded-2xl text-2xl mb-6 shadow-lg shadow-primary-600/20 group-hover:scale-110 transition-transform">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mb-4 uppercase tracking-tight">Call Support</h3>
                        <p class="text-gray-500 text-xs font-black uppercase tracking-widest mb-4">Available 24/7 for Emergencies</p>
                        <div class="space-y-3">
                            <a href="tel:+255763383880" class="flex items-center gap-3 text-xl text-gray-900 hover:text-primary-600 font-black transition-colors">
                                <span class="text-sm bg-primary-100 text-primary-600 w-8 h-8 rounded-full flex items-center justify-center"><i class="fas fa-headset"></i></span>
                                +255 763 383 880
                            </a>
                            <a href="tel:+255787858011" class="flex items-center gap-3 text-lg text-gray-600 hover:text-primary-600 font-bold transition-colors">
                                <span class="text-xs bg-gray-200 text-gray-500 w-7 h-7 rounded-full flex items-center justify-center"><i class="fab fa-whatsapp"></i></span>
                                +255 787 858 011
                            </a>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-8 rounded-[2rem] border border-gray-100 hover:shadow-xl transition-all duration-500 group">
                        <div class="w-16 h-16 flex items-center justify-center bg-primary-600 text-white rounded-2xl text-2xl mb-6 shadow-lg shadow-primary-600/20 group-hover:scale-110 transition-transform">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mb-4 uppercase tracking-tight">Email Us</h3>
                        <p class="text-gray-500 text-xs font-black uppercase tracking-widest mb-4">Official Inquiry</p>
                        <div class="space-y-3">
                            <a href="mailto:info@gbstrusted.co.tz" class="flex items-center gap-3 text-lg text-primary-600 hover:text-primary-700 font-black transition-colors underline decoration-2 underline-offset-4">
                                info@gbstrusted.co.tz
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="lg:col-span-8">
                    <div class="bg-white p-8 md:p-12 rounded-[2.5rem] shadow-2xl shadow-gray-200/50 border border-gray-100 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-full h-2 bg-primary-600"></div>

                        <div class="mb-10">
                            <h3 class="text-3xl font-black text-gray-900 mb-2 tracking-tight">Send a Message</h3>
                            <p class="text-gray-500 font-medium">We usually respond within 2 hours during business hours.</p>
                        </div>

                        @if(session('success'))
                            <div class="mb-8 p-6 bg-green-50 border border-green-100 rounded-2xl flex items-center gap-4 animate-bounce">
                                <div class="w-12 h-12 bg-green-500 text-white rounded-full flex items-center justify-center shadow-lg shadow-green-500/30">
                                    <i class="fas fa-check"></i>
                                </div>
                                <p class="text-green-800 font-black">{{ session('success') }}</p>
                            </div>
                        @endif

                        @php
                            $n1 = rand(1, 9);
                            $n2 = rand(1, 9);
                            session(['captcha_result' => $n1 + $n2]);
                        @endphp

                        <form action="{{ route('contacts.submit') }}" method="post" class="space-y-8">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="space-y-1.5">
                                    <label class="text-xs font-black text-gray-400 uppercase tracking-[0.2em] ml-1">Full Name</label>
                                    <div class="relative group">
                                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-primary-600 transition-colors"><i class="fas fa-user"></i></span>
                                        <input type="text" name="name" placeholder="John Doe" value="{{ old('name') }}" required class="w-full pl-12 pr-4 py-4 bg-gray-50 border @error('name') border-red-500 @else border-gray-100 @enderror rounded-2xl focus:outline-none focus:ring-4 focus:ring-primary-600/5 focus:border-primary-600 focus:bg-white transition-all font-bold text-gray-900">
                                    </div>
                                    @error('name') <p class="text-xs text-red-500 font-bold mt-1 ml-1">{{ $message }}</p> @enderror
                                </div>

                                <div class="space-y-1.5">
                                    <label class="text-xs font-black text-gray-400 uppercase tracking-[0.2em] ml-1">Phone Number</label>
                                    <div class="relative group">
                                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-primary-600 transition-colors"><i class="fas fa-phone"></i></span>
                                        <input type="text" name="phone" placeholder="+255..." value="{{ old('phone') }}" required class="w-full pl-12 pr-4 py-4 bg-gray-50 border @error('phone') border-red-500 @else border-gray-100 @enderror rounded-2xl focus:outline-none focus:ring-4 focus:ring-primary-600/5 focus:border-primary-600 focus:bg-white transition-all font-bold text-gray-900">
                                    </div>
                                    @error('phone') <p class="text-xs text-red-500 font-bold mt-1 ml-1">{{ $message }}</p> @enderror
                                </div>

                                <div class="space-y-1.5">
                                    <label class="text-xs font-black text-gray-400 uppercase tracking-[0.2em] ml-1">Email Address</label>
                                    <div class="relative group">
                                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-primary-600 transition-colors"><i class="fas fa-envelope"></i></span>
                                        <input type="email" name="email" placeholder="john@example.com" value="{{ old('email') }}" required class="w-full pl-12 pr-4 py-4 bg-gray-50 border @error('email') border-red-500 @else border-gray-100 @enderror rounded-2xl focus:outline-none focus:ring-4 focus:ring-primary-600/5 focus:border-primary-600 focus:bg-white transition-all font-bold text-gray-900">
                                    </div>
                                    @error('email') <p class="text-xs text-red-500 font-bold mt-1 ml-1">{{ $message }}</p> @enderror
                                </div>

                                <div class="space-y-1.5">
                                    <label class="text-xs font-black text-gray-400 uppercase tracking-[0.2em] ml-1">Subject</label>
                                    <div class="relative group">
                                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-primary-600 transition-colors"><i class="fas fa-tag"></i></span>
                                        <input type="text" name="subject" placeholder="AC Installation" value="{{ old('subject') }}" required class="w-full pl-12 pr-4 py-4 bg-gray-50 border @error('subject') border-red-500 @else border-gray-100 @enderror rounded-2xl focus:outline-none focus:ring-4 focus:ring-primary-600/5 focus:border-primary-600 focus:bg-white transition-all font-bold text-gray-900">
                                    </div>
                                    @error('subject') <p class="text-xs text-red-500 font-bold mt-1 ml-1">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-xs font-black text-gray-400 uppercase tracking-[0.2em] ml-1">Detailed Message</label>
                                <textarea name="message" placeholder="Tell us more about your project needs..." required class="w-full p-4 bg-gray-50 border @error('message') border-red-500 @else border-gray-100 @enderror rounded-2xl focus:outline-none focus:ring-4 focus:ring-primary-600/5 focus:border-primary-600 focus:bg-white transition-all font-bold text-gray-900 min-h-[160px]">{{ old('message') }}</textarea>
                                @error('message') <p class="text-xs text-red-500 font-bold mt-1 ml-1">{{ $message }}</p> @enderror
                            </div>

                            <div class="p-6 bg-primary-50 rounded-2xl border border-primary-100 flex flex-col md:flex-row items-center justify-between gap-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-primary-600 font-black text-xl border border-primary-100">
                                        <i class="fas fa-robot"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-black text-gray-900 uppercase tracking-tight">Spam Protection</p>
                                        <p class="text-xs text-gray-500 font-bold">What is {{ $n1 }} + {{ $n2 }}?</p>
                                    </div>
                                </div>
                                <div class="w-full md:w-32">
                                    <input type="number" name="captcha_answer" placeholder="Result" required class="w-full px-4 py-3 bg-white border @error('captcha_answer') border-red-500 @else border-primary-200 @enderror rounded-xl focus:outline-none focus:ring-4 focus:ring-primary-600/10 focus:border-primary-600 transition-all font-black text-center text-gray-900">
                                    @error('captcha_answer') <p class="text-[10px] text-red-500 font-bold mt-1">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <button type="submit" class="group w-full inline-flex items-center justify-center px-10 py-5 bg-primary-600 text-white text-lg font-black uppercase tracking-widest rounded-2xl shadow-2xl shadow-primary-600/30 hover:bg-primary-700 hover:-translate-y-1 active:scale-95 transition-all duration-300">
                                Send Message <i class="fas fa-paper-plane ml-3 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="map" class="w-full">
        <div class="h-[450px] w-full grayscale hover:grayscale-0 transition-all duration-1000">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15849.569427329977!2d39.20520288233379!3d-6.762193560706857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4fc97e3c1585%3A0xc66513470659837a!2sMwenge%2C%20Dar%20es%20Salaam%2C%20Tanzania!5e0!3m2!1sen!2sus!4v1700741234567!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</x-layout>
