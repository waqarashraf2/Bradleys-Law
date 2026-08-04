@extends('layouts.app')

@section('title', $service->title . ' — Bradleys Law')

@section('content')
<section id="service-detail" 
         class="relative overflow-hidden py-40 px-2 bg-cover bg-center bg-no-repeat"
         style="background-image: url('https://img.freepik.com/premium-photo/colorful-houses-kens-chelsea-london_1111504-817.jpg');">

  <!-- Overlay -->
  <div class="absolute inset-0 bg-[#0a1a3a]/85 backdrop-blur-sm"></div>

  <!-- Content Wrapper -->
  <div class="relative z-10 max-w-5xl mx-auto text-center text-white">
    
    <!-- Title -->
    <h1 id="service-title" class="text-3xl md:text-5xl font-playfair font-semibold mb-4">
      {{ $service->title }}
    </h1>

    <!-- Category Badge -->
@if(!empty($service->category))
  <p id="service-category" class="inline-block text-[#c9a227] font-medium border border-[#c9a227]/40 rounded-full px-5 py-1 text-sm mb-10 shadow-sm backdrop-blur-md bg-white/10">
    {{ $service->category }}
  </p>
@endif


    <!-- Content Section -->
    <div id="service-content" class="text-left bg-white/10 border border-white/20 backdrop-blur-lg rounded-2xl p-5 md:p-10 shadow-xl hover:shadow-2xl transition-all duration-700 max-w-4xl mx-auto">
      <div class="prose max-w-none text-gray-200 leading-relaxed space-y-8">

        <!-- Overview -->
        <section>
          <h2 class="text-2xl font-semibold text-[#c9a227] mb-3">Overview</h2>
          <p>{{ $service->summary ?? 'We offer expert representation and guidance in this specialised area of law.' }}</p>
          <p class="mt-3">{!! $service->content ? nl2br(e($service->content)) : 'Comprehensive services tailored to client needs.' !!}</p>
        </section>

        <!-- Key Services -->
        <section>
          <h2 class="text-2xl font-semibold text-[#c9a227] mb-3">Key Services We Provide</h2>
          <ul class="space-y-2 text-gray-300">
            <li class="flex items-start"><span class="text-[#c9a227] mr-2">✔</span> Legal advisory and case evaluation</li>
            <li class="flex items-start"><span class="text-[#c9a227] mr-2">✔</span> Contract drafting, review, and negotiation</li>
            <li class="flex items-start"><span class="text-[#c9a227] mr-2">✔</span> Mediation, arbitration, and court representation</li>
            <li class="flex items-start"><span class="text-[#c9a227] mr-2">✔</span> Risk management and compliance support</li>
          </ul>
        </section>

        <!-- Benefits -->
        <section>
          <h2 class="text-2xl font-semibold text-[#c9a227] mb-3">Why Choose Bradleys Law</h2>
          <p>Our clients trust us for strategic insight, meticulous preparation, and a commitment to achieving favourable outcomes.</p>
          <ul class="grid sm:grid-cols-2 gap-3 mt-3 text-gray-300">
            <li class="flex items-center"><svg class="w-4 h-4 text-[#c9a227] mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg> Decades of combined legal experience</li>
            <li class="flex items-center"><svg class="w-4 h-4 text-[#c9a227] mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg> Transparent communication</li>
            <li class="flex items-center"><svg class="w-4 h-4 text-[#c9a227] mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg> High success rate in dispute resolutions</li>
            <li class="flex items-center"><svg class="w-4 h-4 text-[#c9a227] mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg> Cost-effective legal solutions</li>
          </ul>
        </section>

        <!-- Case Studies -->
<!-- Case Studies -->
<section class="py-2 px-0 sm:px-2 lg:px-2  text-white">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-2xl sm:text-2xl font-playfair text-[#c9a227] mb-3">Core areas of expertise</h2>
    <!--<p class="text-gray-300 mb-8 text-base sm:text-lg">-->
    <!--  Below are examples of recent matters handled by our team:-->
    <!--</p>-->

    <div class="grid md:grid-cols-2 gap-6">
       <!--Card 1 -->
      <a href="/expertise/Insurance-Coverage-Claims-and-Litigation"
         class="group block bg-white/5 hover:bg-white/10 rounded-xl p-6 border border-white/10 hover:border-[#c9a227]/40 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg hover:shadow-[#c9a227]/10">
        <h4 class="text-[#c9a227] font-semibold mb-2 text-xl group-hover:text-[#dcbc42] transition-colors">
          Insurance Coverage, Claims, and Litigation
        </h4>
        <p class="text-sm sm:text-base text-gray-300 leading-relaxed">
          Providing strategic legal guidance to insurers and professionals in complex claims, coverage disputes, and indemnity-related litigation with commercial precision.
        </p>
      </a>

       <!--Card 2 -->
      <a href="/expertise/construction-law-disputes"
         class="group block bg-white/5 hover:bg-white/10 rounded-xl p-6 border border-white/10 hover:border-[#c9a227]/40 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg hover:shadow-[#c9a227]/10">
        <h4 class="text-[#c9a227] font-semibold mb-2 text-xl group-hover:text-[#dcbc42] transition-colors">
         Construction Law & Disputes
        </h4>
        <p class="text-sm sm:text-base text-gray-300 leading-relaxed">
          Delivering pragmatic legal solutions to contractors, developers, and insurers in complex construction disputes, risk management, and contract interpretation matters.
        </p>
      </a>
    </div>
  </div>
</section>


      </div>
    </div>

    <!-- CTA Buttons -->
    <div id="service-cta" class="max-w-4xl mx-auto mt-10 flex flex-wrap justify-center items-center gap-5">
      <a href="{{ route('contact') }}" 
         class="inline-flex items-center justify-center px-8 py-3 bg-[#c9a227] text-[#0a1a3a] font-semibold rounded-lg shadow-md hover:bg-[#b18e1e] hover:-translate-y-1 transition-all duration-500">
        <span class="mr-2">📞</span> Discuss this matter
      </a>

      <a href="{{ route('expertise.index') }}" 
         class="inline-flex items-center justify-center px-6 py-3 border border-[#c9a227] text-[#c9a227] rounded-lg hover:bg-[#c9a227] hover:text-white hover:-translate-y-1 transition-all duration-500">
        ← Back to Expertise
      </a>
    </div>
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
