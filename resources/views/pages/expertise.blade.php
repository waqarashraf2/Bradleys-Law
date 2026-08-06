@extends('layouts.app')

@section('title', 'Expertise — Bradleys Law')
@section('meta_description', 'Explore Bradleys Law expertise in insurance litigation, construction law, professional indemnity, arbitration, adjudication, and commercial dispute resolution.')
@section('canonical', route('expertise.index'))

@section('content')
<section id="expertise" 
         class="relative overflow-hidden pt-36 pb-24 px-4 bg-cover bg-center bg-no-repeat"
         style="background-image: url('https://i.ytimg.com/vi/it1cU64dhc8/maxresdefault.jpg');">

  <!-- Overlay -->
  <div class="absolute inset-0 bg-[#0a1a3a]/65 backdrop-blur-sm"></div>

  <!-- Section Heading -->
  <div class="relative max-w-5xl mx-auto text-center mb-20 z-10">
    <h1 id="expertise-title" class="text-4xl md:text-5xl font-playfair text-white font-semibold mb-4 tracking-tight">
      Our Areas of Expertise
    </h1>
    <p id="expertise-subtitle" class="text-gray-200 text-lg max-w-3xl mx-auto leading-relaxed">
     Bradleys Law provides specialised legal services in insurance, construction, and commercial law — offering strategic solutions built on decades of combined experience.
    </p>
  </div>

  <!-- Key Services -->
  <!--<div class="relative max-w-6xl mx-auto text-center mb-10 z-10">-->
  <!--  <h2 class="text-2xl font-semibold text-[#f5d97b] tracking-wide uppercase">Key Services</h2>-->
  <!--</div>-->

  <!-- Services Grid -->
  <div id="expertise-grid" class="relative max-w-6xl mx-auto grid md:grid-cols-2 lg:grid-cols-3 gap-10 z-10">
    @foreach($services as $service)
      <div class="service-card relative p-8 rounded-2xl bg-white/10 border border-white/20 backdrop-blur-lg shadow-lg hover:shadow-2xl transition-all duration-500 group overflow-hidden">
        
        <!-- Accent Line -->
        <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-[#c9a227] to-[#f7d774] opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

        <!-- Title -->
        <h2 class="relative text-2xl font-semibold text-white mb-3 transition-colors duration-300 group-hover:text-[#c9a227]">
          {{ $service->title }}
        </h2>

        <!-- Category -->
        @if($service->category)
          <p class="text-sm text-[#f5d97b] uppercase tracking-wide mb-4">
            {{ $service->category }}
          </p>
        @endif

        <!-- Excerpt -->
        <p class="relative text-gray-200 mb-6 leading-relaxed">
          {{ $service->excerpt }}
        </p>

        <!-- Points (Dynamic) -->
        @if(!empty($service->points))
          @php
            $points = is_array($service->points) ? $service->points : json_decode($service->points, true);
          @endphp
          <ul class="text-gray-300 text-sm space-y-2 mb-6">
            @foreach($points as $point)
              <li class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#c9a227] mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                {{ $point }}
              </li>
            @endforeach
          </ul>
        @endif

        <!-- CTA -->
        <a href="{{ route('expertise.show', $service->slug) }}"
           class="relative inline-flex items-center font-semibold text-[#c9a227] group-hover:text-white transition-all duration-300">
          Read more
          <svg xmlns="http://www.w3.org/2000/svg" 
               class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" 
               fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </a>
      </div>
    @endforeach
  </div>

  <!-- Why Choose Bradleys Law -->
  <div class="relative text-center mt-24 z-10">
    <div class="inline-block bg-gradient-to-r from-[#0a1a3a] to-[#1e3a5f] rounded-2xl p-10 text-white shadow-2xl max-w-3xl">
      <h3 class="text-2xl font-playfair mb-3 text-[#f5d97b]">Why Choose Bradleys Law</h3>
      <p class="text-gray-200 mb-6 leading-relaxed">
We combine legal expertise with commercial understanding, ensuring every case is handled with clarity, integrity, and strategic focus. Our client-centred approach, sector-specific insight, and results-driven advocacy make us a trusted partner for Insurers, Brokers, Policyholders, Professionals, Developers, Employers, Contractors and Sub-Contractors throughout the UK.
      </p>
      <a href="{{ route('contact') }}" 
         class="inline-flex items-center justify-center px-8 py-3 bg-[#c9a227] text-[#0a1a3a] font-semibold rounded-lg shadow-md hover:bg-[#b18e1e] hover:-translate-y-1 transition-all duration-500">
        Schedule Consultation
      </a>
    </div>
  </div>

</section>

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
  gsap.from("#expertise-title", { y: -40, opacity: 0, duration: 1 });
  gsap.from("#expertise-subtitle", { y: -20, opacity: 0, delay: 0.3, duration: 1 });
  gsap.from(".service-card", {
    y: 50,
    opacity: 0,
    duration: 1,
    stagger: 0.25,
    delay: 0.6,
    ease: "power3.out"
  });
</script>
@endpush
@endsection
