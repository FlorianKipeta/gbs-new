<x-layout
    :title="$project['title'] . ' - GBS Trusted Projects'"
    :description="$project['description']"
>
    <div class="pt-20 bg-gray-100">
        <section class="py-12 sm:py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="mb-4 sm:mb-0">
                        <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mt-8 sm:mt-4">
                            {{ $project['title'] }}
                        </h1>
                    </div>
                    <div>
                        <ul class="flex space-x-2 text-sm text-gray-600">
                            <li><a href="{{ route('welcome') }}" class="hover:text-primary-500">Home</a></li>
                            <li class="text-gray-400"><span class="mx-2">/</span> <a href="{{ route('welcome') }}#projects" class="hover:text-primary-500">Projects</a></li>
                            <li class="text-gray-400"><span class="mx-2">/</span> {{ $project['title'] }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Project Gallery/Image -->
                <div class="lg:col-span-2 space-y-8">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-auto object-cover">
                        <div class="absolute top-6 left-6 bg-primary-600 text-white px-6 py-2 rounded-full font-bold shadow-lg">
                            Completed in {{ $project['year'] }}
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Project Overview</h2>
                        <p>{{ $project['details'] }}</p>
                    </div>
                </div>

                <!-- Project Info Sidebar -->
                <div class="lg:col-span-1 space-y-8">
                    <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100 shadow-sm">
                        <h4 class="text-xl font-bold text-gray-900 mb-6 border-b border-gray-200 pb-4">Project Information</h4>
                        <div class="space-y-6">
                            <div>
                                <p class="text-xs font-black text-primary-600 uppercase tracking-widest mb-1">Client</p>
                                <p class="text-gray-900 font-bold">{{ $project['client'] }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-black text-primary-600 uppercase tracking-widest mb-1">Location</p>
                                <p class="text-gray-900 font-bold">{{ $project['location'] }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-black text-primary-600 uppercase tracking-widest mb-1">Category</p>
                                <div class="flex flex-wrap gap-2 mt-2">
                                    @foreach($project['features'] as $feature)
                                        <span class="px-3 py-1 bg-white border border-primary-100 rounded-full text-xs font-semibold text-primary-700 shadow-sm">{{ $feature }}</span>
                                    @endforeach
                                </div>
                            </div>
                            @if(isset($project['report']))
                            <div class="pt-4">
                                <a href="{{ asset('projects/' . $project['report']) }}" target="_blank" class="flex items-center justify-center gap-2 w-full px-6 py-4 bg-primary-600 text-white font-bold rounded-xl hover:bg-primary-700 transition duration-300 shadow-lg shadow-primary-500/20">
                                    <i class="fas fa-file-pdf"></i>
                                    View Project Report
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="bg-primary-600 rounded-3xl p-8 text-white">
                        <h4 class="text-xl font-bold mb-4">Need Similar Results?</h4>
                        <p class="text-primary-100 mb-6">Let GBS Trusted Company Limited bring this same level of technical excellence to your next project.</p>
                        <a href="{{ route('contacts') }}" class="inline-flex items-center justify-center w-full px-6 py-4 bg-white text-primary-600 font-bold rounded-xl hover:bg-primary-50 transition duration-300">
                            Get a Free Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Other Projects -->
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-12">
                <h3 class="text-3xl font-bold text-gray-900">Related Projects</h3>
                <a href="{{ route('welcome') }}#projects" class="text-primary-600 font-bold hover:underline flex items-center gap-2">
                    View All Projects <i class="fas fa-arrow-right text-sm"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- This is a bit manual since we're not using a DB yet --}}
                @php
                    $allProjects = [
                        'azure-properties' => ['title' => 'Azure Properties', 'image' => asset('images/gbs-images/gbs-trusted-company-limited-60.jpeg')],
                        'halotel-towers' => ['title' => 'Halotel Towers', 'image' => asset('images/gbs-images/gbs-trusted-company-limited-65.jpeg')],
                        'power-villa' => ['title' => 'The Power Villa', 'image' => asset('images/gbs-images/gbs-trusted-company-limited-70.jpeg')],
                        'popex-hotel' => ['title' => 'Popex Hotel', 'image' => asset('images/gbs-images/gbs-trusted-company-limited-75.jpeg')],
                        'sky-bar-paje' => ['title' => 'Sky Bar Paje', 'image' => asset('images/gbs-images/gbs-trusted-company-limited-80.jpeg')],
                    ];
                    unset($allProjects[$slug]);
                    $related = array_slice($allProjects, 0, 3);
                @endphp

                @foreach($related as $rSlug => $rProj)
                    <a href="{{ route('projects.show', $rSlug) }}" class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500">
                        <div class="relative h-48 overflow-hidden">
                            <img src="{{ $rProj['image'] }}" alt="{{ $rProj['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition-colors"></div>
                        </div>
                        <div class="p-6">
                            <h4 class="text-lg font-bold text-gray-900 group-hover:text-primary-600 transition-colors">{{ $rProj['title'] }}</h4>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
