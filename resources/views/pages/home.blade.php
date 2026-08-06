@extends('layouts.app')

@section('title', 'Bradleys Law — Insurance Litigation & Construction Law')
@section('meta_description', 'Bradleys Law Ltd — Expert Solicitors in Insurance Litigation and Construction Law, London.')

@section('content')

<!-- Modern London Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-28 sm:pt-32 lg:pt-0" id="home">

    <!-- Background Image with Dark Gradient Overlay -->
    <div class="absolute inset-0 z-0">
        
        <img 
            src="https://www.photohound.co/images/1026522l.jpg" alt="London cityscape" 
            class="w-full h-full object-cover object-center scale-105 transition-transform duration-[4000ms] ease-in-out hover:scale-110" id="hero-bg-image" >
        
        <div class="absolute inset-0 bg-gradient-to-b from-[#0a1a3a]/90 via-[#0a1a3a]/80 to-[#0a1a3a]/45" id="hero-overlay"></div>
    </div>

    <!-- Floating golden accent orbs -->
    <div class="absolute top-10 left-10 w-32 h-32 bg-[#c9a227]/20 rounded-full blur-3xl animate-pulse-slow" id="orb-1"></div>
    <div class="absolute bottom-20 right-20 w-40 h-40 bg-[#e6d18a]/20 rounded-full blur-3xl animate-pulse-slow" id="orb-2"></div>

    <!-- Hero Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-8 lg:px-10 pt-2">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

            <!-- Left Text Content -->
            <div class="text-white text-center lg:text-left">
                <!-- Modern Badge -->
                <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 mb-5 opacity-0" id="hero-badge">
                    <span class="w-2 h-2 bg-[#c9a227] rounded-full mr-2 animate-pulse"></span>
                    <span class="text-xs font-semibold tracking-wide uppercase">Trusted Legal Expertise</span>
                </div>

                <!-- Modern Title -->
                <h1 class="font-playfair text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-medium leading-tight mb-5 drop-shadow-md">
                    <span class="opacity-0" id="hero-title-1">Strength in </span>
                    <span class="text-[#c9a227] opacity-0" id="hero-title-2">Legal</span>
                    <span class="opacity-0" id="hero-title-3"> Representation</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-gray-200 text-base sm:text-lg md:text-xl max-w-2xl mx-auto lg:mx-0 mb-8 leading-relaxed opacity-0" id="hero-subtitle">
                    Bradleys Law provides authoritative, pragmatic legal advice in Insurance litigation and Construction law — acting for Insurers, Brokers, Professionals, Employers, Contractors and Sub-Contractors throughout the UK.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <a href="{{ route('expertise.index') }}" 
                        class="px-6 py-3 rounded-md text-sm font-medium bg-[#c9a227] text-[#0a1a3a] hover:bg-[#e6d18a] transition-all duration-300 transform hover:scale-105 shadow-md opacity-0"
                        id="cta-1">
                        Explore Our Expertise
                    </a>
                    <a href="{{ route('contact') }}" 
                        class="px-6 py-3 rounded-md text-sm font-medium border border-white text-white hover:bg-white hover:text-[#0a1a3a] transition-all duration-300 transform hover:scale-105 shadow-md opacity-0"
                        id="cta-2">
                        Contact Us
                    </a>
                </div>
            </div>



<!-- Right Floating Card -->
<div class="mt-10 mb-10 lg:mt-0 opacity-0" id="hero-visual">
  <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 border border-white/20 shadow-2xl transform" id="main-card">
    <h3 class="text-lg font-playfair text-white text-center mb-4">Our Legal Specialties</h3>

    <div class="space-y-3" id="specialties-container">
      <!-- Item 1 -->
      <a href="/expertise/Insurance-Coverage-Claims-and-Litigation" class="flex items-center p-3 bg-white/5 rounded-lg border border-white/10 hover:bg-white/10 hover:scale-[1.02] transition-all duration-300">
        <div class="w-10 h-10 bg-[#c9a227] rounded-lg flex items-center justify-center mr-3">
          <svg class="w-5 h-5 text-[#0a1a3a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
          </svg>
        </div>
        <div>
          <h4 class="text-white font-medium text-sm">Insurance Litigation</h4>
          <p class="text-gray-300 text-xs">Complex dispute resolution & Claims</p>
        </div>
      </a>

      <!-- Item 2 -->
      <a href="/expertise/construction-law-disputes" class="flex items-center p-3 bg-white/5 rounded-lg border border-white/10 hover:bg-white/10 hover:scale-[1.02] transition-all duration-300">
        <div class="w-10 h-10 bg-[#c9a227] rounded-lg flex items-center justify-center mr-3">
          <svg class="w-5 h-5 text-[#0a1a3a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7v18"></path>
          </svg>
        </div>
        <div>
          <h4 class="text-white font-medium text-sm">Construction Law</h4>
          <p class="text-gray-300 text-xs">Contract disputes & Claims</p>
        </div>
      </a>

      <!-- Item 3 -->
      <a href="/expertise/alternative-dispute-resolution-adr" class="flex items-center p-3 bg-white/5 rounded-lg border border-white/10 hover:bg-white/10 hover:scale-[1.02] transition-all duration-300">
        <div class="w-10 h-10 bg-[#c9a227] rounded-lg flex items-center justify-center mr-3">
          <svg class="w-5 h-5 text-[#0a1a3a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7"></path>
          </svg>
        </div>
        <div>
          <h4 class="text-white font-medium text-sm">Alternative Dispute Resolution</h4>
          <p class="text-gray-300 text-xs">Efficient mediation and negotiation/settlement</p>
        </div>
      </a>

      <!-- Item 4 -->
      <a href="/expertise/commercial-law" class="flex items-center p-3 bg-white/5 rounded-lg border border-white/10 hover:bg-white/10 hover:scale-[1.02] transition-all duration-300">
        <div class="w-10 h-10 bg-[#c9a227] rounded-lg flex items-center justify-center mr-3">
          <svg class="w-5 h-5 text-[#0a1a3a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7"></path>
          </svg>
        </div>
        <div>
          <h4 class="text-white font-medium text-sm">Commercial Law</h4>
          <p class="text-gray-300 text-xs">Protecting your business interests</p>
        </div>
      </a>


    </div>
  </div>
</div>




        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10 pt- opacity-0" id="scroll-indicator">
        <div class="flex flex-col items-center text-white">
            <span class="text-xs mb-2 tracking-wide">Scroll to explore</span>
            <div class="w-5 h-8 border border-white rounded-full flex justify-center">
                <div class="w-0.5 h-2 bg-white rounded-full mt-2 animate-bounce"></div>
            </div>
        </div>
    </div>
</section>




<section class="relative py-24 overflow-hidden" id="expertise">
  <!-- Background Layer -->
  <div class="absolute inset-0 -z-10">
    <div class="absolute inset-0 bg-cover bg-center opacity-90"
         style="background-image: url('https://i.ytimg.com/vi/it1cU64dhc8/maxresdefault.jpg');"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-white/95 via-white/90 to-white/95"></div>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-3 lg:px-4 relative">
    <!-- Section Heading -->
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-playfair text-[#0a1a3a] mb-4 tracking-tight">
        Our Areas of Expertise
      </h2>
      <p class="text-lg text-gray-700 max-w-3xl mx-auto leading-relaxed">
       Specialist representation in insurance litigation, claims handling, construction disputes and commercial law supported by an experienced legal team delivering tailored, strategic, and client-focused solutions.
      </p>
    </div>

    <!-- Expertise Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      @foreach($services as $service)
        <div class="bg-white/90 backdrop-blur-lg border border-[#c9a227]/20 rounded-2xl shadow-lg p-5 
                    hover:shadow-2xl hover:-translate-y-1 transition-all duration-500 relative overflow-hidden">

          <!-- Top Accent Line -->
          <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-[#c9a227] to-[#f1e2a0]"></div>

          <!-- Icon -->
          <div class="w-14 h-14 bg-gradient-to-r from-[#0a1a3a] to-[#1e3a5f] rounded-xl flex items-center justify-center mb-5 shadow-md">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
            </svg>
          </div>

          <!-- Title -->
          <h3 class="text-xl font-semibold text-[#0a1a3a] mb-3">{{ $service->title }}</h3>

          <!-- Excerpt -->
          <p class="text-gray-700 mb-5 text-sm leading-relaxed">
            {{ $service->excerpt }}
          </p>

          <!-- Key Points -->
@if(!empty($service->points))
  <ul class="text-sm text-gray-600 list-disc pl-5 mb-6 space-y-1">
    @foreach($service->points as $point)
      <li>{{ $point }}</li>
    @endforeach
  </ul>
@endif


          <!-- Learn More Button -->
          <a href="{{ url('expertise/' . $service->slug) }}" 
             class="inline-flex items-center text-[#c9a227] font-medium group text-sm hover:underline">
            Learn more
            <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform"
                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      @endforeach
    </div>

    <!-- CTA Section -->
    <div class="text-center mt-20">
      <div class="bg-gradient-to-r from-[#0a1a3a] to-[#1e3a5f] rounded-2xl p-12 text-white shadow-xl">
        <h3 class="text-2xl md:text-3xl font-playfair mb-4">Ready to discuss your legal needs?</h3>
        <p class="text-lg text-gray-200 mb-6 max-w-2xl mx-auto">
          Contact our legal experts for a confidential consultation and discover how we can protect your interests with strategic precision.
        </p>
        <a href="{{ route('contact') }}" 
           class="inline-flex items-center justify-center px-6 py-3 text-sm font-medium bg-[#c9a227] text-[#0a1a3a] rounded-md hover:bg-[#e6d18a] transition-all duration-300">
          Schedule a Consultation
        </a>
      </div>
    </div>
  </div>
</section>




<!-- 🔰 Featured Insurance Litigation Section -->
<section class="relative py-24 bg-gradient-to-b from-[#0a1a3a] via-[#10244f] to-[#0a1a3a] overflow-hidden" id="insurance-highlight">

  <!-- Background Accent Orbs -->
  <div class="absolute inset-0 -z-10 overflow-hidden">
    <div class="absolute top-10 left-20 w-64 h-64 bg-[#c9a227]/10 rounded-full blur-3xl animate-pulse-slow"></div>
    <div class="absolute bottom-10 right-20 w-96 h-96 bg-[#c9a227]/10 rounded-full blur-3xl animate-pulse-slow"></div>
  </div>

  <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-10 relative z-10">
    <div class="grid lg:grid-cols-2 gap-12 items-start">

      <!-- Left Content -->
      <div class="text-white">
        <span class="inline-block px-4 py-1.5 text-xs font-semibold tracking-wide uppercase bg-[#c9a227]/20 border border-[#c9a227]/40 rounded-full mb-5">
          Core Expertise
        </span>
        <h2 class="font-playfair text-4xl sm:text-5xl font-medium mb-6 leading-tight">
          <span class="text-[#c9a227]">Insurance Litigation</span><br>
          Expertise You Can Trust
        </h2>
        <p class="text-gray-200 text-base sm:text-lg leading-relaxed mb-8">
          Bradleys Law provides **specialist legal representation in Insurance Litigation**, advising insurers, brokers, and policyholders across the UK. Our team delivers expert guidance in complex coverage disputes, policy interpretation, claims handling, and high-value litigation.
        </p>

        <!-- Focus Areas -->
        <!--<div class="bg-[#0a1a3a]/80 backdrop-blur-md border border-[#c9a227]/30 rounded-2xl p-6 shadow-lg text-gray-200 mb-8">-->
        <!--  <h4 class="font-semibold text-lg text-white mb-4">Focus on the following areas:</h4>-->
        <!--  <ul class="list-disc list-inside space-y-2">-->
        <!--    <li>Professional Indemnity Insurance</li>-->
        <!--    <li>Contractors All Risk Insurance</li>-->
        <!--    <li>Directors and Officers Insurance</li>-->
        <!--    <li>Energy and Environmental Insurance</li>-->
        <!--    <li>Construction Defect Insurance</li>-->
        <!--    <li>General Liability Insurance</li>-->
        <!--    <li>Insurance Coverage & Claims Handling</li>-->
        <!--  </ul>-->
        <!--</div>-->
        
      </div>

      <!-- Right Visual -->
      <div class="relative group">
        <div class="absolute inset-0 bg-gradient-to-r from-[#c9a227]/20 to-transparent rounded-3xl transform rotate-2 group-hover:rotate-0 transition-transform duration-500"></div>
        <img src="https://editorialge.com/wp-content/uploads/2022/07/PoSP-Certification.jpg" 
             alt="Insurance Litigation"
             class="relative z-10 rounded-3xl shadow-2xl border border-[#c9a227]/30 transition-transform duration-700 transform group-hover:scale-[1.03]">

        <div class="absolute bottom-6 left-6 bg-[#0a1a3a]/80 backdrop-blur-md border border-[#c9a227]/30 rounded-xl px-5 py-3 shadow-lg">
          <p class="text-[#c9a227] text-sm font-semibold uppercase tracking-wider">Trusted by Global Insurers</p>
        </div>
      </div>

    </div>

    <!-- Buttons After Section -->
    <div class="mt-12 flex flex-col sm:flex-row gap-4 justify-left">
      <a href="{{ route('expertise.show', 'professional-indemnity-insurance') }}"
         class="px-6 py-3 bg-[#c9a227] text-[#0a1a3a] font-medium rounded-md hover:bg-[#e6d18a] transition-all duration-300 shadow-md text-center">
        Learn More
      </a>
      <a href="{{ route('contact') }}"
         class="px-6 py-3 border border-[#c9a227] text-[#f7e6a2] rounded-md hover:bg-[#c9a227] hover:text-[#0a1a3a] transition-all duration-300 shadow-md text-center">
        Speak to a Solicitor
      </a>
    </div>

  </div>
</section>





<!-- 🔰 Featured Construction Law Section with Background Image -->
<section class="relative py-24 overflow-hidden" id="construction-law">

  <!-- Background Image Layer -->
  <div class="absolute inset-0 -z-20">
    <img src="https://tse3.mm.bing.net/th/id/OIP.8NjFTtQz9ug0sRUThPtGJwAAAA?cb=12ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" 
         alt="Construction Site Background"
         class="w-full h-full object-cover object-center opacity-80">
    <div class="absolute inset-0 bg-gradient-to-b from-[#10244f]/80 via-[#0a1a3a]/70 to-[#10244f]/80"></div>
  </div>

  <!-- Floating Accent Orbs -->
  <div class="absolute inset-0 -z-10 overflow-hidden">
    <div class="absolute top-10 left-10 w-64 h-64 bg-[#c9a227]/10 rounded-full blur-3xl animate-pulse-slow"></div>
    <div class="absolute bottom-10 right-10 w-96 h-96 bg-[#c9a227]/10 rounded-full blur-3xl animate-pulse-slow"></div>
  </div>

  <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-10 relative z-10">
    <div class="grid lg:grid-cols-2 gap-12 items-start">

      <!-- Left Content -->
      <div class="text-white">
        <span class="inline-block px-4 py-1.5 text-xs font-semibold tracking-wide uppercase bg-[#c9a227]/20 border border-[#c9a227]/40 rounded-full mb-5">
          Core Expertise
        </span>
        <h2 class="font-playfair text-4xl sm:text-5xl font-medium mb-6 leading-tight">
          <span class="text-[#c9a227]">Construction Law</span><br>
          Professional Legal Support
        </h2>
        <p class="text-gray-200 text-base sm:text-lg leading-relaxed mb-8">
          Bradleys Law provides specialist guidance in **Construction Law**, representing insurers, contractors, architects, engineers, and private clients in disputes, claims, and ADR processes. Our legal team combines deep industry knowledge with practical experience for successful outcomes.
        </p>

        <!-- Focus Areas -->
        <!--<div class="bg-[#0a1a3a]/70 backdrop-blur-md border border-[#c9a227]/30 rounded-2xl p-6 shadow-lg text-gray-200 mb-8">-->
        <!--  <h4 class="font-semibold text-lg text-white mb-4">Focus on the following areas:</h4>-->
        <!--  <ul class="list-disc list-inside space-y-2">-->
        <!--    <li>Claims for insurers and private clients</li>-->
        <!--    <li>Representation of:-->
        <!--      <ul class="list-disc list-inside ml-5 space-y-1">-->
        <!--        <li>Employers</li>-->
        <!--        <li>Main contractors</li>-->
        <!--        <li>Sub-contractors</li>-->
        <!--        <li>Architects</li>-->
        <!--        <li>Engineers</li>-->
        <!--        <li>Surveyors</li>-->
        <!--      </ul>-->
        <!--    </li>-->
        <!--    <li>ADR: Mediation, arbitration, adjudication, expert determination</li>-->
        <!--  </ul>-->
        <!--</div>-->

        <!-- Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 mt-2">
          <a href="{{ route('expertise.show', 'construction-law-disputes') }}"
             class="px-6 py-3 bg-[#c9a227] text-[#0a1a3a] font-medium rounded-md hover:bg-[#e6d18a] transition-all duration-300 shadow-md text-center">
            Learn More
          </a>
          <a href="{{ route('contact') }}"
             class="px-6 py-3 border border-[#c9a227] text-[#f7e6a2] rounded-md hover:bg-[#c9a227] hover:text-[#0a1a3a] transition-all duration-300 shadow-md text-center">
            Speak to a Solicitor
          </a>
        </div>
      </div>

      <!-- Right Visual -->
      <div class="relative group">
        <div class="absolute inset-0 bg-gradient-to-r from-[#c9a227]/20 to-transparent rounded-3xl transform rotate-2 group-hover:rotate-0 transition-transform duration-500"></div>
        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80"
             alt="Construction Law"
             class="relative z-10 rounded-3xl shadow-2xl border border-[#c9a227]/30 transition-transform duration-700 transform group-hover:scale-[1.03]">
        <div class="absolute bottom-6 left-6 bg-[#0a1a3a]/80 backdrop-blur-md border border-[#c9a227]/30 rounded-xl px-5 py-3 shadow-lg">
          <p class="text-[#c9a227] text-sm font-semibold uppercase tracking-wider">Trusted by Industry Leaders</p>
        </div>
      </div>

    </div>
  </div>
</section>





<!-- 🌟 Modern Insights Section with Background Image -->


<!-- Newsletter Signup Section -->
<section class="relative overflow-hidden bg-white py-20">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,_rgba(201,162,39,0.18),_transparent_34%),linear-gradient(135deg,_#ffffff_0%,_#f7f8fb_50%,_#eef2f7_100%)]"></div>

  <div class="relative mx-auto max-w-7xl px-6 sm:px-8 lg:px-10">
    <div class="grid gap-10 lg:grid-cols-[0.95fr_1.05fr] lg:items-center">
      <div>
        <span class="inline-flex rounded-full border border-[#c9a227]/30 bg-[#c9a227]/10 px-4 py-1.5 text-xs font-semibold uppercase tracking-[0.22em] text-[#8b6f18]">
          {{ config('newsletter.frequency') }} newsletter
        </span>
        <h2 class="mt-5 font-playfair text-3xl font-medium leading-tight text-[#0a1a3a] sm:text-4xl lg:text-5xl">
          Receive our popular weekly newsletter
        </h2>
      </div>

      <div class="rounded-2xl border border-[#c9a227]/25 bg-white p-6 shadow-xl shadow-[#0a1a3a]/10 sm:p-8">
        <h3 class="font-playfair text-2xl font-semibold text-[#0a1a3a]">
          "{{ config('newsletter.name') }}"
        </h3>
        <p class="mt-4 text-base leading-relaxed text-gray-700">
          {{ config('newsletter.description') }}
        </p>
        <div class="mt-7 flex flex-col gap-3 sm:flex-row sm:items-center">
          <a href="{{ config('newsletter.url') }}" target="_blank" rel="noopener"
             class="inline-flex items-center justify-center rounded-md bg-[#0a1a3a] px-6 py-3 text-sm font-semibold text-white shadow-md transition hover:bg-[#123061]">
            Click here to receive it
          </a>
          <span class="text-sm text-gray-500">Signup opens securely in Mailchimp.</span>
        </div>
      </div>
    </div>
  </div>
</section>


<section 
    class="relative py-20 bg-fixed bg-center bg-cover"
    style="background-image: url('https://tse4.mm.bing.net/th/id/OIP.Mh4hGlqR06Y7WSGaqaecuwHaE8?cb=12&w=1024&h=683&rs=1&pid=ImgDetMain&o=7&rm=3');"
    id="insights"
>
    <!-- Overlay -->
    <div class="absolute inset-0 bg-[#0a1a3a]/90 backdrop-blur-sm"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12 opacity-0" id="insights-header">
            <div>
                <h2 class="text-3xl md:text-4xl font-playfair text-white mb-3">
                    Latest <span class="text-[#c9a227]">Insights</span>
                </h2>
                <p class="text-gray-300 text-lg max-w-2xl leading-relaxed">
                    Stay informed with our latest legal analysis, case studies, and industry updates.
                </p>
            </div>

            <a href="{{ route('insights') }}" 
               class="inline-flex items-center justify-center px-6 py-3 mt-6 md:mt-0 text-sm font-medium border border-[#c9a227] text-[#c9a227] rounded-full hover:bg-[#c9a227] hover:text-[#0a1a3a] transition-all duration-300">
                View All Insights
                <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>

        <!-- Insights Grid -->
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @forelse($insights as $index => $insight)
                <div class="bg-white/10 backdrop-blur-lg border border-white/10 rounded-2xl p-6 text-white shadow-xl hover:shadow-2xl transition-all duration-500 opacity-0 insight-card" data-delay="{{ $index * 0.1 }}">
                    <div class="flex items-center text-xs text-gray-300 mb-3">
                        <span>{{ \Carbon\Carbon::parse($insight->published_at)->format('M d, Y') }}</span>
                        <span class="mx-2">•</span>
                        <span>1 min read</span>
                    </div>

                    <h4 class="text-lg font-semibold mb-3 hover:text-[#c9a227] transition-colors duration-300">
                        <a href="{{ route('insights.show', $insight->slug) }}">{{ $insight->title }}</a>
                    </h4>

                    <p class="text-gray-200 mb-5 text-sm line-clamp-3">
                        {{ $insight->excerpt }}
                    </p>

                    <a href="{{ route('insights.show', $insight->slug) }}" 
                       class="text-[#c9a227] font-medium inline-flex items-center group text-sm">
                        Read more
                        <svg class="w-3 h-3 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            @empty
                <div class="col-span-3 bg-white/10 backdrop-blur-lg rounded-xl p-10 text-center text-white border border-white/10 opacity-0" id="no-insights">
                    <svg class="w-14 h-14 text-gray-400 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <h3 class="text-lg font-semibold mb-1">No insights yet</h3>
                    <p class="text-gray-300 text-sm">Check back soon for our latest legal insights and updates.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize GSAP
    gsap.registerPlugin(ScrollTrigger);

    // Hero section animations
    const heroTimeline = gsap.timeline();
    
    heroTimeline
        .fromTo('#hero-bg-image', { scale: 1.1 }, { scale: 1, duration: 2, ease: "power2.out" })
        .fromTo('#hero-overlay', { opacity: 0 }, { opacity: 1, duration: 1.5 }, "-=2")
        .to('#hero-badge', { opacity: 1, duration: 0.8, ease: "power2.out" })
        .fromTo('#hero-title-1', { y: 50, opacity: 0 }, { y: 0, opacity: 1, duration: 0.8, ease: "power2.out" }, "-=0.4")
        .fromTo('#hero-title-2', { y: 50, opacity: 0 }, { y: 0, opacity: 1, duration: 0.8, ease: "power2.out" }, "-=0.6")
        .fromTo('#hero-title-3', { y: 50, opacity: 0 }, { y: 0, opacity: 1, duration: 0.8, ease: "power2.out" }, "-=0.6")
        .to('#hero-subtitle', { opacity: 1, duration: 1, ease: "power2.out" }, "-=0.4")
        .to('#cta-1', { opacity: 1, duration: 0.6, ease: "power2.out" }, "-=0.3")
        .to('#cta-2', { opacity: 1, duration: 0.6, ease: "power2.out" }, "-=0.5")
        .to('#hero-visual', { opacity: 1, duration: 1, ease: "power2.out" }, "-=0.8")
        .fromTo('#specialty-1', { x: -50, opacity: 0 }, { x: 0, opacity: 1, duration: 0.6 }, "-=0.5")
        .fromTo('#specialty-2', { x: -50, opacity: 0 }, { x: 0, opacity: 1, duration: 0.6 }, "-=0.4")
        .fromTo('#specialty-3', { x: -50, opacity: 0 }, { x: 0, opacity: 1, duration: 0.6 }, "-=0.3")
        .to('#scroll-indicator', { opacity: 1, duration: 0.8, ease: "power2.out" });

    // Floating animation for orbs
    gsap.to('#orb-1', {
        y: 30,
        duration: 4,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut"
    });

    gsap.to('#orb-2', {
        y: -40,
        duration: 5,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut",
        delay: 1
    });

    // Expertise Section Animations
    gsap.fromTo('#expertise-heading', 
        { y: 50, opacity: 0 },
        {
            y: 0,
            opacity: 1,
            duration: 1,
            ease: "power2.out",
            scrollTrigger: {
                trigger: '#expertise',
                start: 'top 80%',
                end: 'bottom 20%',
                toggleActions: 'play none none reverse'
            }
        }
    );

    // Service Cards Animation
    gsap.fromTo('.service-card', 
        { y: 60, opacity: 0 },
        {
            y: 0,
            opacity: 1,
            duration: 0.8,
            stagger: 0.2,
            ease: "power2.out",
            scrollTrigger: {
                trigger: '#expertise',
                start: 'top 70%',
                toggleActions: 'play none none reverse'
            }
        }
    );

    // Expertise CTA Animation
    gsap.fromTo('#expertise-cta', 
        { y: 50, opacity: 0 },
        {
            y: 0,
            opacity: 1,
            duration: 1,
            ease: "power2.out",
            scrollTrigger: {
                trigger: '#expertise-cta',
                start: 'top 80%',
                toggleActions: 'play none none reverse'
            }
        }
    );

    // Insurance Highlight Section
    gsap.fromTo('#insurance-highlight .text-white', 
        { x: -100, opacity: 0 },
        {
            x: 0,
            opacity: 1,
            duration: 1,
            ease: "power2.out",
            scrollTrigger: {
                trigger: '#insurance-highlight',
                start: 'top 80%',
                toggleActions: 'play none none reverse'
            }
        }
    );

    gsap.fromTo('#insurance-highlight .relative.group', 
        { x: 100, opacity: 0 },
        {
            x: 0,
            opacity: 1,
            duration: 1,
            ease: "power2.out",
            scrollTrigger: {
                trigger: '#insurance-highlight',
                start: 'top 80%',
                toggleActions: 'play none none reverse'
            }
        }
    );

    // Construction Law Section
    gsap.fromTo('#construction-law .text-white', 
        { x: -100, opacity: 0 },
        {
            x: 0,
            opacity: 1,
            duration: 1,
            ease: "power2.out",
            scrollTrigger: {
                trigger: '#construction-law',
                start: 'top 80%',
                toggleActions: 'play none none reverse'
            }
        }
    );

    gsap.fromTo('#construction-law .relative.group', 
        { x: 100, opacity: 0 },
        {
            x: 0,
            opacity: 1,
            duration: 1,
            ease: "power2.out",
            scrollTrigger: {
                trigger: '#construction-law',
                start: 'top 80%',
                toggleActions: 'play none none reverse'
            }
        }
    );

    // Insights Section
    gsap.fromTo('#insights-header', 
        { y: 50, opacity: 0 },
        {
            y: 0,
            opacity: 1,
            duration: 1,
            ease: "power2.out",
            scrollTrigger: {
                trigger: '#insights',
                start: 'top 80%',
                toggleActions: 'play none none reverse'
            }
        }
    );

    // Insight Cards Animation
    gsap.fromTo('.insight-card', 
        { y: 60, opacity: 0 },
        {
            y: 0,
            opacity: 1,
            duration: 0.8,
            stagger: 0.15,
            ease: "power2.out",
            scrollTrigger: {
                trigger: '#insights',
                start: 'top 70%',
                toggleActions: 'play none none reverse'
            }
        }
    );

    // No Insights Message Animation
    if (document.getElementById('no-insights')) {
        gsap.fromTo('#no-insights', 
            { y: 50, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 1,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: '#no-insights',
                    start: 'top 80%',
                    toggleActions: 'play none none reverse'
                }
            }
        );
    }

    // Add hover animations to cards
    gsap.utils.toArray('.service-card, .insight-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            gsap.to(card, {
                y: -5,
                duration: 0.3,
                ease: "power2.out"
            });
        });
        
        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                y: 0,
                duration: 0.3,
                ease: "power2.out"
            });
        });
    });

    // Smooth scroll for navigation
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                gsap.to(window, {
                    duration: 1,
                    scrollTo: { y: target, offsetY: 50 },
                    ease: "power2.inOut"
                });
            }
        });
    });

    // Enhanced card animations for hero section
    const advancedCardAnimator = new AdvancedCardAnimator();
    window.advancedAnimator = advancedCardAnimator;
});

// Advanced Animation Controller (keep your existing class)
class AdvancedCardAnimator {
    constructor() {
        this.isAnimating = false;
        this.animationCount = 0;
        this.init();
    }

    init() {
        this.setupEventListeners();
        this.initialAnimation();
    }

    resetToInitialState() {
        // Reset all elements with more dramatic starting positions
        gsap.set("#hero-visual", { opacity: 0, scale: 0.8 });
        gsap.set("#main-card", { 
            rotationY: -180, 
            rotationX: 30,
            scale: 0.9,
            transformPerspective: 1000
        });
        gsap.set("#card-title", { 
            y: -50, 
            opacity: 0,
            scale: 1.5,
            rotationX: 45
        });
        
        // Set specialties with different starting positions
        gsap.set("#specialty-1", { 
            opacity: 0, 
            x: -100,
            rotationY: -90,
            scale: 0.8
        });
        gsap.set("#specialty-2", { 
            opacity: 0, 
            x: 100,
            rotationY: 90,
            scale: 0.8
        });
        gsap.set("#specialty-3", { 
            opacity: 0, 
            y: 50,
            rotationX: -45,
            scale: 0.8
        });
        
        // Icons with spinning start
        gsap.set(["#icon-1", "#icon-2", "#icon-3"], { 
            rotation: 180,
            scale: 0
        });
        
        // Text with blur effect start
        gsap.set(["#text-1", "#text-2", "#text-3"], { 
            opacity: 0,
            filter: "blur(10px)"
        });
    }

    async playAdvancedAnimation() {
        if (this.isAnimating) return;
        
        this.isAnimating = true;
        this.animationCount++;
        this.resetToInitialState();

        // Advanced animation sequence
        await this.magicAppear();
        await this.cardReveal3D();
        await this.titleUnfold();
        await this.specialtiesDance();
        await this.iconsMagicSpin();
        await this.textRevealGlow();
        
        // Continuous subtle animations
        this.startIdleAnimations();
        
        this.isAnimating = false;
    }

    magicAppear() {
        return new Promise(resolve => {
            gsap.to("#hero-visual", {
                opacity: 1,
                scale: 1,
                duration: 0.8,
                ease: "elastic.out(1, 0.5)",
                onComplete: resolve
            });
        });
    }

    cardReveal3D() {
        return new Promise(resolve => {
            gsap.to("#main-card", {
                rotationY: 0,
                rotationX: 0,
                scale: 1,
                duration: 1.5,
                ease: "power3.out",
                transformPerspective: 1000,
                onComplete: resolve
            });
        });
    }

    titleUnfold() {
        return new Promise(resolve => {
            gsap.to("#card-title", {
                y: 0,
                opacity: 1,
                scale: 1,
                rotationX: 0,
                duration: 0.8,
                ease: "back.out(2)",
                onComplete: resolve
            });
        });
    }

    specialtiesDance() {
        return new Promise(resolve => {
            const tl = gsap.timeline({ onComplete: resolve });
            
            tl.to("#specialty-1", {
                x: 0,
                opacity: 1,
                rotationY: 0,
                scale: 1,
                duration: 0.6,
                ease: "power2.out"
            })
            .to("#specialty-2", {
                x: 0,
                opacity: 1,
                rotationY: 0,
                scale: 1,
                duration: 0.6,
                ease: "power2.out"
            }, "-=0.3")
            .to("#specialty-3", {
                y: 0,
                opacity: 1,
                rotationX: 0,
                scale: 1,
                duration: 0.6,
                ease: "power2.out"
            }, "-=0.3");
        });
    }

    iconsMagicSpin() {
        return new Promise(resolve => {
            gsap.to(["#icon-1", "#icon-2", "#icon-3"], {
                rotation: 0,
                scale: 1,
                stagger: 0.15,
                duration: 0.8,
                ease: "back.out(2)",
                onComplete: resolve
            });
        });
    }

    textRevealGlow() {
        return new Promise(resolve => {
            gsap.to(["#text-1", "#text-2", "#text-3"], {
                opacity: 1,
                filter: "blur(0px)",
                stagger: 0.1,
                duration: 0.6,
                ease: "power2.out",
                onComplete: resolve
            });
        });
    }

    startIdleAnimations() {
        // Subtle floating animation for the entire card
        gsap.to("#main-card", {
            y: -5,
            duration: 2,
            ease: "sine.inOut",
            repeat: -1,
            yoyo: true
        });

        // Gentle glow pulse for specialties
        gsap.to(["#specialty-1", "#specialty-2", "#specialty-3"], {
            boxShadow: "0 0 20px rgba(201, 162, 39, 0.3)",
            duration: 2,
            stagger: 0.3,
            ease: "sine.inOut",
            repeat: -1,
            yoyo: true
        });
    }

    setupEventListeners() {
        // Auto-replay with Intersection Observer
        this.setupSmartObserver();

        // Enhanced hover effects
        this.setupMagicalHoverEffects();

        // Click effects for specialties
        this.setupSpecialtyInteractions();
    }

    setupSmartObserver() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !this.isAnimating) {
                    // Random delay for natural feel
                    const randomDelay = Math.random() * 1000 + 500;
                    setTimeout(() => {
                        this.playAdvancedAnimation();
                    }, randomDelay);
                }
            });
        }, { 
            threshold: 0.3,
            rootMargin: "50px"
        });

        observer.observe(document.getElementById("hero-visual"));
    }

    setupMagicalHoverEffects() {
        const card = document.getElementById("main-card");
        
        // 3D tilt effect on hover
        card.addEventListener("mouseenter", () => {
            if (!this.isAnimating) {
                gsap.to(card, {
                    rotationY: 5,
                    rotationX: 5,
                    scale: 1.02,
                    duration: 0.5,
                    ease: "power2.out"
                });
            }
        });

        card.addEventListener("mousemove", (e) => {
            if (!this.isAnimating) {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const rotateY = ((x - rect.width / 2) / rect.width) * 10;
                const rotateX = ((y - rect.height / 2) / rect.height) * -10;
                
                gsap.to(card, {
                    rotationY: rotateY,
                    rotationX: rotateX,
                    duration: 0.3
                });
            }
        });

        card.addEventListener("mouseleave", () => {
            gsap.to(card, {
                rotationY: 0,
                rotationX: 0,
                scale: 1,
                duration: 0.5,
                ease: "power2.out"
            });
        });

        // Specialty items hover with magical effects
        ["specialty-1", "specialty-2", "specialty-3"].forEach(id => {
            const element = document.getElementById(id);
            const icon = document.getElementById(`icon-${id.split('-')[1]}`);
            
            element.addEventListener("mouseenter", () => {
                // Elevate and glow
                gsap.to(element, {
                    y: -8,
                    scale: 1.05,
                    backgroundColor: "rgba(255,255,255,0.15)",
                    boxShadow: "0 10px 30px rgba(201, 162, 39, 0.4)",
                    duration: 0.3,
                    ease: "power2.out"
                });
                
                // Icon magic spin and color change
                gsap.to(icon, {
                    rotation: 360,
                    scale: 1.2,
                    backgroundColor: "#f0c040",
                    duration: 0.5,
                    ease: "back.out(2)"
                });
            });
            
            element.addEventListener("mouseleave", () => {
                // Return to normal
                gsap.to(element, {
                    y: 0,
                    scale: 1,
                    backgroundColor: "rgba(255,255,255,0.05)",
                    boxShadow: "0 0 20px rgba(201, 162, 39, 0.3)",
                    duration: 0.3,
                    ease: "power2.out"
                });
                
                // Reset icon
                gsap.to(icon, {
                    rotation: 0,
                    scale: 1,
                    backgroundColor: "#c9a227",
                    duration: 0.3,
                    ease: "power2.out"
                });
            });
        });
    }

    setupSpecialtyInteractions() {
        ["specialty-1", "specialty-2", "specialty-3"].forEach(id => {
            document.getElementById(id).addEventListener("click", () => {
                this.triggerSpecialtyMagic(id);
            });
        });
    }

    triggerSpecialtyMagic(specialtyId) {
        const element = document.getElementById(specialtyId);
        const icon = document.getElementById(`icon-${specialtyId.split('-')[1]}`);
        
        // Magic burst effect
        gsap.to(element, {
            scale: 1.2,
            boxShadow: "0 0 50px rgba(201, 162, 39, 0.8)",
            duration: 0.3,
            ease: "power2.out",
            yoyo: true,
            repeat: 1
        });
        
        // Icon explosion effect
        gsap.to(icon, {
            scale: 1.5,
            rotation: 720,
            duration: 0.6,
            ease: "power2.out"
        });
        
        // Particle-like effect for text
        gsap.to(`#text-${specialtyId.split('-')[1]}`, {
            y: -10,
            duration: 0.2,
            ease: "power2.out",
            yoyo: true,
            repeat: 1
        });
    }

    initialAnimation() {
        // Initial animation when page loads
        setTimeout(() => {
            this.playAdvancedAnimation();
        }, 1000);
    }
}

// Mobile header height adjustment
document.addEventListener('DOMContentLoaded', () => {
  const hero = document.querySelector('section');
  const header = document.querySelector('header');
  const headerHeight = header.offsetHeight;
  
  if (window.innerWidth < 768) {
    hero.style.paddingTop = `${headerHeight + 50}px`;
  }
});

// Auto-refresh animation every 45 seconds when visible
setInterval(() => {
    const card = document.getElementById("hero-visual");
    const rect = card.getBoundingClientRect();
    const isVisible = (
        rect.top >= -100 &&
        rect.left >= -100 &&
        rect.bottom <= (window.innerHeight + 100) &&
        rect.right <= (window.innerWidth + 100)
    );
    
    if (isVisible && !window.advancedAnimator?.isAnimating) {
        window.advancedAnimator?.playAdvancedAnimation();
    }
}, 45000);
</script>


<style>
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
    }
    
    @keyframes pulse-slow {
        0%, 100% { opacity: 0.1; }
        50% { opacity: 0.3; }
    }
    
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    
    .animate-pulse-slow {
        animation: pulse-slow 8s ease-in-out infinite;
    }

    /* Smooth scrolling */
    html {
        scroll-behavior: smooth;
    }

    /* Performance optimizations */
    .service-card,
    .insight-card {
        transform: translateZ(0);
        backface-visibility: hidden;
        perspective: 1000;
    }

    /* Active menu state styles */
    .nav-link {
        transition: all 0.3s ease;
        border-bottom: 2px solid transparent;
    }

    .nav-link:hover {
        color: #c9a227;
        border-color: #c9a227;
    }
</style>
@endpush
