<x-layout
    :title="$service['title'] . ' - GBS Trusted Services'"
    :description="$service['description']"
>
    <div class="pt-20 bg-gray-100">
        <section class="py-12 sm:py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="mb-4 sm:mb-0">
                        <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mt-8 sm:mt-4">
                            {{ $service['title'] }}
                        </h1>
                    </div>
                    <div>
                        <ul class="flex space-x-2 text-sm text-gray-600">
                            <li><a href="{{ route('welcome') }}" class="hover:text-primary-500">Home</a></li>
                            <li class="text-gray-400"><span class="mx-2">/</span> <a href="{{ route('services') }}" class="hover:text-primary-500">Services</a></li>
                            <li class="text-gray-400"><span class="mx-2">/</span> {{ $service['title'] }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Service Details -->
                <div class="lg:col-span-2 space-y-12">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="w-full h-[400px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-8 left-8 flex items-center gap-4">
                            <div class="w-16 h-16 flex items-center justify-center bg-primary-600 text-white rounded-2xl text-3xl shadow-xl">
                                <i class="{{ $service['icon'] }}"></i>
                            </div>
                            <div class="text-white">
                                <p class="text-sm font-bold uppercase tracking-widest opacity-80">Our Expertise</p>
                                <h2 class="text-2xl font-black">Guaranteed Excellence</h2>
                            </div>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Service Overview</h2>
                        <p class="text-xl text-gray-800 font-medium mb-6">{{ $service['summary'] }}</p>
                        <p>{{ $service['details'] }}</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach($service['benefits'] as $benefit)
                            <div class="flex items-start gap-4 p-6 bg-gray-50 rounded-2xl border border-gray-100 hover:border-primary-100 transition-colors group">
                                <div class="w-10 h-10 shrink-0 flex items-center justify-center bg-white text-primary-600 rounded-xl shadow-sm group-hover:bg-primary-600 group-hover:text-white transition-all">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900">{{ $benefit }}</h4>
                                    <p class="text-sm text-gray-500 mt-1">Professional delivery with quality guarantee.</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1 space-y-8">
                    <!-- Quick Contact -->
                    <div class="bg-gray-900 rounded-3xl p-8 text-white relative overflow-hidden group">
                        <div class="absolute top-0 right-0 -mt-8 -mr-8 w-32 h-32 bg-primary-600/20 rounded-full blur-3xl group-hover:bg-primary-600/40 transition-all"></div>
                        <h4 class="text-2xl font-black mb-6 relative z-10">Need this service?</h4>
                        <div class="space-y-6 relative z-10">
                            <a href="tel:+255763383880" class="flex items-center gap-4 p-4 bg-white/5 border border-white/10 rounded-2xl hover:bg-primary-600 transition-all group/item">
                                <div class="w-12 h-12 flex items-center justify-center bg-primary-600 text-white rounded-xl group-hover/item:bg-white group-hover/item:text-primary-600 transition-all">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-400 uppercase font-bold tracking-widest mb-1">Call Us Now</p>
                                    <p class="font-bold">+255 763 383 880</p>
                                </div>
                            </a>
                            <a href="{{ route('contacts') }}" class="flex items-center gap-4 p-4 bg-white/5 border border-white/10 rounded-2xl hover:bg-primary-600 transition-all group/item">
                                <div class="w-12 h-12 flex items-center justify-center bg-primary-600 text-white rounded-xl group-hover/item:bg-white group-hover/item:text-primary-600 transition-all">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-400 uppercase font-bold tracking-widest mb-1">Get a Quote</p>
                                    <p class="font-bold">info@gbstrusted.co.tz</p>
                                </div>
                            </a>
                        </div>
                        <div class="mt-8 pt-8 border-t border-white/10 relative z-10">
                            <p class="text-gray-400 text-sm leading-relaxed italic">"Available 24/7 for emergency repairs and professional technical consultations across Tanzania."</p>
                        </div>
                    </div>

                    <!-- Other Services -->
                    <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm">
                        <h4 class="text-xl font-bold text-gray-900 mb-6 border-b border-gray-100 pb-4">Other Services</h4>
                        <div class="space-y-4">
                            @php
                                $allServices = [
                                    'ac-installation' => ['title' => 'AC Installation', 'icon' => 'fas fa-fan'],
                                    'ac-repair' => ['title' => 'AC Repair', 'icon' => 'fas fa-tools'],
                                    'ac-maintenance' => ['title' => 'AC Maintenance', 'icon' => 'fas fa-sync'],
                                    'plumbing-services' => ['title' => 'Plumbing Services', 'icon' => 'fas fa-faucet'],
                                    'electrical-services' => ['title' => 'Electrical Services', 'icon' => 'fas fa-bolt'],
                                    'cctv-security' => ['title' => 'CCTV & Security', 'icon' => 'fas fa-video'],
                                    'electric-fencing' => ['title' => 'Electric Fencing', 'icon' => 'fas fa-shield-alt'],
                                    'solar-installation' => ['title' => 'Solar Installation', 'icon' => 'fas fa-solar-panel'],
                                ];
                                unset($allServices[$slug]);
                                $others = array_slice($allServices, 0, 5);
                            @endphp

                            @foreach($others as $oSlug => $oServ)
                                <a href="{{ route('services.show', $oSlug) }}" class="flex items-center gap-3 p-3 rounded-xl hover:bg-primary-50 group transition-all">
                                    <div class="w-10 h-10 flex items-center justify-center bg-gray-50 text-gray-400 rounded-lg group-hover:bg-primary-600 group-hover:text-white transition-all">
                                        <i class="{{ $oServ['icon'] }} text-sm"></i>
                                    </div>
                                    <span class="font-bold text-gray-700 group-hover:text-primary-600 transition-colors">{{ $oServ['title'] }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
