@extends('layouts.app')

@section('title', 'Insights — Bradleys Law')
@section('meta_description', 'Explore legal insights, articles, and updates from Bradleys Law’s insurance and construction law specialists.')

@section('content')
<section id="insights" class="relative overflow-hidden py-10 px-4 bg-white">

  <!-- Section Header -->
  <div class="max-w-5xl mx-auto text-center mb-14">
    <h1 id="insights-title" class="text-4xl md:text-5xl font-playfair text-[#1a2238] font-semibold mb-4">
      Legal Insights & Updates
    </h1>
    <p id="insights-subtitle" class="text-gray-600 text-lg max-w-2xl mx-auto">
      Expert commentary, case analysis, and developments in insurance and construction law.
    </p>
  </div>

  <!-- Insights Grid -->
  @if($insights->count())
    <div id="insights-grid" class="max-w-6xl mx-auto grid sm:grid-cols-2 lg:grid-cols-3 gap-10">
      @foreach($insights as $insight)
        <article class="insight-card relative bg-white border-2 border-gray-200 rounded-2xl shadow-md hover:shadow-xl hover:border-[#c9a227] transition-all duration-500 overflow-hidden group">
          
          <!-- Image placeholder -->
          @if($insight->image)
            <img src="{{ asset('storage/' . $insight->image) }}" alt="{{ $insight->title }}"
              class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-700">
          @else
            <div class="w-full h-48 bg-gray-100 flex items-center justify-center text-gray-400 text-sm">
              No Image
            </div>
          @endif

          <!-- Card Content -->
          <div class="p-6 relative z-10">
            <h2 class="text-2xl font-semibold text-[#1a2238] mb-3 transition-colors duration-300 group-hover:text-[#c9a227]">
              <a href="{{ route('insights.show', $insight->slug) }}">
                {{ $insight->title }}
              </a>
            </h2>

            <p class="text-sm text-gray-500 mb-3">
              {{ \Carbon\Carbon::parse($insight->published_at)->format('M d, Y') }}
            </p>

            <p class="text-gray-600 mb-5 line-clamp-3">
              {{ $insight->excerpt }}
            </p>

            <a href="{{ route('insights.show', $insight->slug) }}"
              class="inline-flex items-center text-[#c9a227] font-semibold hover:underline transition-all duration-300">
              Read more
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
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
    <p class="text-center text-gray-600 text-lg">No insights published yet.</p>
  @endif

</section>

@push('scripts')
<!-- GSAP Animations -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
  gsap.from("#insights-title", { y: -40, opacity: 0, duration: 1 });
  gsap.from("#insights-subtitle", { y: -20, opacity: 0, delay: 0.3, duration: 1 });
  gsap.from(".insight-card", {
    y: 50,
    opacity: 0,
    duration: 1.2,
    delay: 0.5,
    stagger: 0.2,
    ease: "power3.out"
  });
</script>
@endpush
@endsection
