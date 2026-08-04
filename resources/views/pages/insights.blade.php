@extends('layouts.app')

@section('title', 'Insights — Bradleys Law')
@section('meta_description', 'Explore expert legal insights, case analyses, and updates from Bradleys Law’s insurance and construction law specialists.')

@section('content')
<section id="insights" class="relative overflow-hidden py-20 px-6 bg-[#f8f9fb]">

  <!-- Section Header -->
  <div class="max-w-5xl mx-auto text-center mt-10 mb-14">
    <h1 id="insights-title" class="text-4xl md:text-5xl font-playfair text-[#0a1a3a] font-semibold mb-4">
      Legal Insights & Updates
    </h1>
    <p id="insights-subtitle" class="text-gray-600 text-lg max-w-2xl mx-auto leading-relaxed">
      Stay ahead with professional analysis, case commentary, and the latest updates shaping insurance, construction and commercial law.
    </p>
  </div>

  <!-- Insights Grid -->
  @if($insights->count())
    <div id="insights-grid" class="max-w-7xl mx-auto grid sm:grid-cols-2 lg:grid-cols-3 gap-10">
      @foreach($insights as $insight)
        <article class="insight-card relative bg-white border border-gray-200 rounded-2xl shadow-md hover:shadow-xl hover:border-[#c9a227] transition-all duration-500 overflow-hidden group">

          <!-- Image Section -->
          <div class="relative overflow-hidden h-56">
            @if($insight->image)
              <img src="{{ asset($insight->image) }}" 
                   alt="{{ $insight->title }}"
                   class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            @else
              <div class="w-full h-full flex items-center justify-center bg-[#f4f4f4] text-gray-400 text-sm">
                No Image Available
              </div>
            @endif

            <!-- Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

            <!-- Overlay Title -->
            <div class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-all duration-500">
              <span class="text-sm bg-[#c9a227]/90 px-3 py-1 rounded-full">{{ $insight->category ?? 'Legal Insight' }}</span>
            </div>
          </div>

          <!-- Card Body -->
          <div class="p-6">
            <h2 class="text-2xl font-semibold text-[#1a2238] mb-3 transition-colors duration-300 group-hover:text-[#c9a227]">
              <a href="{{ route('insights.show', $insight->slug) }}">
                {{ $insight->title }}
              </a>
            </h2>

            <!-- Metadata -->
            <div class="flex flex-wrap items-center text-sm text-gray-500 mb-3">
              <span>{{ \Carbon\Carbon::parse($insight->published_at)->format('M d, Y') }}</span>
              @if($insight->author)
                <!--<span class="mx-2">•</span>-->
                <!--<span>By {{ $insight->author }}</span>-->
              @endif
              @if($insight->read_time)
                <span class="mx-2">•</span>
                <span>{{ $insight->read_time }} min read</span>
              @endif
            </div>

            <!-- Excerpt -->
            <p class="text-gray-600 mb-6 text-sm leading-relaxed line-clamp-4">
              {{ $insight->excerpt }}
            </p>

            <!-- CTA -->
            <a href="{{ route('insights.show', $insight->slug) }}" 
               class="inline-flex items-center text-[#c9a227] font-semibold group-hover:text-[#a3821c] transition-all duration-300 text-sm">
              Read full article
              <svg xmlns="http://www.w3.org/2000/svg" 
                   class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" 
                   fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </a>
          </div>
        </article>
      @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-16 flex justify-center">
      {{ $insights->links('pagination::tailwind') }}
    </div>
  @else
    <div class="text-center py-20">
      <h3 class="text-lg font-semibold text-[#0a1a3a] mb-2">No Insights Yet</h3>
      <p class="text-gray-600">Check back soon for our latest publications and expert updates.</p>
    </div>
  @endif

</section>

@push('scripts')
<!-- GSAP Animations -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
  gsap.from("#insights-title", { y: -40, opacity: 0, duration: 1 });
  gsap.from("#insights-subtitle", { y: -20, opacity: 0, delay: 0.3, duration: 1 });
  gsap.from(".insight-card", {
    y: 60,
    opacity: 0,
    duration: 1.3,
    delay: 0.5,
    stagger: 0.25,
    ease: "power3.out"
  });
</script>
@endpush
@endsection
