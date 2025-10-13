@extends('layouts.app')

@section('title', 'Expertise — Bradleys Law')

@section('content')
<section id="expertise" class="relative overflow-hidden py-10 px-4 bg-white">

  <!-- Title Section -->
  <div class="max-w-5xl mx-auto text-center mb-12">
    <h1 id="expertise-title" class="text-4xl md:text-5xl font-playfair text-[#1a2238] font-semibold mb-4">
      Our Expertise
    </h1>
    <p id="expertise-subtitle" class="text-gray-600 text-lg max-w-2xl mx-auto">
      Bradleys Law specialises in advising insurers and construction industry clients on a wide range of matters.
    </p>
  </div>

  <!-- Services Grid -->
  <div id="expertise-grid" class="max-w-6xl mx-auto grid md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach($services as $service)
      <div class="service-card relative border-2 border-gray-200 rounded-2xl p-6 bg-white shadow-md hover:shadow-xl hover:border-[#c9a227] transition-all duration-500 group overflow-hidden">
        <div class="absolute inset-0 bg-[#c9a227]/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

        <h2 class="relative text-2xl font-semibold text-[#1a2238] mb-3 transition-colors duration-300 group-hover:text-[#c9a227]">
          {{ $service->title }}
        </h2>
        <p class="relative text-gray-600 mb-5 leading-relaxed">
          {{ Str::limit($service->summary, 120) }}
        </p>

        <a href="{{ route('expertise.show', $service->slug) }}"
           class="relative inline-flex items-center font-semibold text-[#c9a227] group-hover:underline transition-all duration-300">
          Read more
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </a>
      </div>
    @endforeach
  </div>

</section>

@push('scripts')
<!-- GSAP Animation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
  gsap.from("#expertise-title", { y: -40, opacity: 0, duration: 1 });
  gsap.from("#expertise-subtitle", { y: -20, opacity: 0, delay: 0.3, duration: 1 });
  gsap.from(".service-card", {
    y: 40,
    opacity: 0,
    duration: 1,
    stagger: 0.2,
    delay: 0.6,
    ease: "power3.out"
  });
</script>
@endpush
@endsection
