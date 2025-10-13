@extends('layouts.app')

@section('title', $service->title . ' — Bradleys Law')

@section('content')
<section id="service-detail" class="relative overflow-hidden py-10 px-4 bg-white">

  <!-- Title -->
  <div class="max-w-4xl mx-auto text-center mb-12">
    <h1 id="service-title" class="text-4xl md:text-5xl font-playfair text-[#1a2238] font-semibold mb-3">
      {{ $service->title }}
    </h1>
    <p id="service-category" class="inline-block text-[#c9a227] font-medium border border-[#c9a227]/40 rounded-full px-4 py-1 text-sm shadow-sm">
      {{ $service->category ?? 'Expertise' }}
    </p>
  </div>

  <!-- Content Section -->
  <div id="service-content" class="max-w-4xl mx-auto bg-white border border-gray-200 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-700">
    <div class="prose max-w-none text-gray-700 leading-relaxed">
      {!! $service->content ? nl2br(e($service->content)) : '<p>No detailed content provided yet.</p>' !!}
    </div>
  </div>

  <!-- CTA Buttons -->
  <div id="service-cta" class="max-w-4xl mx-auto mt-10 flex flex-wrap items-center gap-4">
    <a href="{{ route('contact') }}" 
       class="relative inline-flex items-center justify-center px-8 py-3 bg-[#c9a227] text-white font-semibold rounded-lg shadow-md hover:bg-[#b18e1e] hover:-translate-y-1 transition-all duration-500">
      <span class="mr-2">📞</span> Discuss this matter
    </a>

    <a href="{{ route('expertise.index') }}" 
       class="inline-flex items-center justify-center px-6 py-3 border border-gray-400 text-gray-700 rounded-lg hover:border-[#c9a227] hover:text-[#c9a227] hover:-translate-y-1 transition-all duration-500">
      ← Back to Expertise
    </a>
  </div>

</section>

@push('scripts')
<!-- GSAP Animation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
  gsap.from("#service-title", { y: -40, opacity: 0, duration: 1 });
  gsap.from("#service-category", { y: -20, opacity: 0, delay: 0.3, duration: 1 });
  gsap.from("#service-content", { y: 40, opacity: 0, delay: 0.5, duration: 1.2, ease: "power3.out" });
  gsap.from("#service-cta", { y: 40, opacity: 0, delay: 0.8, duration: 1, ease: "power3.out" });
</script>
@endpush
@endsection
