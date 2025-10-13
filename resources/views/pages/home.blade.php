@extends('layouts.app')

@section('title', 'Bradleys Law — Insurance Litigation & Construction Law')
@section('meta_description', 'Bradleys Law Ltd — Expert Solicitors in Insurance Litigation and Construction Law, London.')

@section('content')
    <!-- Enhanced Professional Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background with gradient overlay -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-[#0a1a3a] to-[#1e3a5f] opacity-95"></div>
            <!-- Subtle animated background elements -->
            <div class="absolute top-0 left-0 w-full h-full opacity-10">
                <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-[#c9a227] rounded-full mix-blend-overlay filter blur-3xl animate-pulse-slow"></div>
                <div class="absolute bottom-1/3 right-1/4 w-80 h-80 bg-[#e6d18a] rounded-full mix-blend-overlay filter blur-3xl animate-pulse-slow" style="animation-delay: 2s;"></div>
            </div>
        </div>
        
        <!-- Minimal floating geometric elements -->
        <div class="absolute top-20 left-10 w-20 h-20 border border-[#c9a227] opacity-20 rounded-lg animate-float"></div>
        <div class="absolute bottom-40 right-20 w-16 h-16 border border-[#e6d18a] opacity-30 rounded-full animate-float" style="animation-delay: 1s;"></div>
        
        <!-- Main content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <div class="text-white">
                    <!-- Professional badge -->
                    <div class="inline-flex items-center px-3 py-1.5 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-4 opacity-0" id="hero-badge">
                        <span class="w-1.5 h-1.5 bg-[#c9a227] rounded-full mr-2 animate-pulse"></span>
                        <span class="text-xs font-medium tracking-wide">Expert Legal Representation</span>
                    </div>
                    
                    <!-- Main heading with professional styling -->
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl xl:text-6xl font-playfair font-medium mb-4 leading-tight">
                        <span class="block opacity-0" id="hero-title-1">Strength in</span>
                        <span class="block opacity-0" id="hero-title-2">Legal</span>
                        <span class="block text-[#c9a227] opacity-0" id="hero-title-3">Representation</span>
                    </h1>
                    
                    <!-- Professional subtitle -->
                    <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 max-w-2xl opacity-0 leading-relaxed" id="hero-subtitle">
                        Bradleys Law provides authoritative, pragmatic legal advice in insurance litigation and construction law — acting for insurers and construction professionals throughout the UK.
                    </p>
                    
                    <!-- Professional CTA buttons -->
                    <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                        <a href="{{ route('expertise.index') }}" class="inline-flex items-center justify-center px-5 py-3 text-sm font-medium bg-[#c9a227] text-[#0a1a3a] rounded-md hover:bg-[#e6d18a] transition-all duration-300 transform hover:scale-105 opacity-0" id="cta-1">
                            Explore Our Expertise
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-5 py-3 text-sm font-medium border border-white text-white rounded-md hover:bg-white hover:text-[#0a1a3a] transition-all duration-300 transform hover:scale-105 opacity-0" id="cta-2">
                            Contact Us
                        </a>
                    </div>
                </div>
                
                <!-- Right side - Professional visual element -->
                <div class="relative opacity-0 mt-8 lg:mt-0" id="hero-visual">
                    <div class="relative bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 shadow-xl transform transition-all duration-700 hover:scale-105">
                        <div class="absolute -top-3 -left-3 w-6 h-6 bg-[#c9a227] rounded-full"></div>
                        <div class="absolute -bottom-3 -right-3 w-6 h-6 bg-[#c9a227] rounded-full"></div>
                        
                        <h3 class="text-lg font-playfair text-white mb-4 text-center">Our Legal Specialties</h3>
                        
                        <div class="space-y-3">
                            <div class="flex items-center p-3 bg-white/5 rounded-lg border border-white/10 hover:bg-white/10 transition-all duration-300 cursor-pointer">
                                <div class="w-10 h-10 bg-[#c9a227] rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-[#0a1a3a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-white font-medium text-sm">Insurance Litigation</h4>
                                    <p class="text-gray-300 text-xs">Complex dispute resolution</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center p-3 bg-white/5 rounded-lg border border-white/10 hover:bg-white/10 transition-all duration-300 cursor-pointer">
                                <div class="w-10 h-10 bg-[#c9a227] rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-[#0a1a3a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-white font-medium text-sm">Construction Law</h4>
                                    <p class="text-gray-300 text-xs">Contract disputes & claims</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center p-3 bg-white/5 rounded-lg border border-white/10 hover:bg-white/10 transition-all duration-300 cursor-pointer">
                                <div class="w-10 h-10 bg-[#c9a227] rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-[#0a1a3a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-white font-medium text-sm">Professional Negligence</h4>
                                    <p class="text-gray-300 text-xs">Defending professionals</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Subtle scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10 opacity-0" id="scroll-indicator">
            <div class="flex flex-col items-center text-white">
                <span class="text-xs mb-2 tracking-wide">Scroll to explore</span>
                <div class="w-5 h-8 border border-white rounded-full flex justify-center">
                    <div class="w-0.5 h-2 bg-white rounded-full mt-2 animate-bounce"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rest of your page content remains the same -->
    <!-- Enhanced Expertise Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 section-fade-in">
                <h2 class="text-2xl md:text-3xl font-playfair text-[#0a1a3a] mb-4">Our Areas of Expertise</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Specialist representation in insurance litigation and construction disputes, supported by a full professional team with decades of combined experience.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @if(isset($services) && $services->count())
                    @foreach($services as $service)
                        @include('components.service-card', ['service' => $service])
                    @endforeach
                @else
                    <!-- Placeholder service cards -->
                    <div class="bg-white rounded-xl shadow-md p-6 expertise-card border-t-4 border-[#c9a227] section-fade-in">
                        <div class="w-12 h-12 bg-[#0a1a3a] rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-[#0a1a3a] mb-3">Insurance Litigation</h3>
                        <p class="text-gray-600 mb-4 text-sm">
                            Comprehensive representation in complex insurance disputes, policy interpretation, and coverage issues for insurers and policyholders.
                        </p>
                        <a href="#" class="text-[#c9a227] font-medium inline-flex items-center group text-sm">
                            Learn more
                            <svg class="w-3 h-3 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-md p-6 expertise-card border-t-4 border-[#c9a227] section-fade-in">
                        <div class="w-12 h-12 bg-[#0a1a3a] rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-[#0a1a3a] mb-3">Construction Law</h3>
                        <p class="text-gray-600 mb-4 text-sm">
                            Expert advice on construction contracts, disputes, adjudication, and professional negligence claims for contractors and developers.
                        </p>
                        <a href="#" class="text-[#c9a227] font-medium inline-flex items-center group text-sm">
                            Learn more
                            <svg class="w-3 h-3 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-md p-6 expertise-card border-t-4 border-[#c9a227] section-fade-in">
                        <div class="w-12 h-12 bg-[#0a1a3a] rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-[#0a1a3a] mb-3">Professional Indemnity</h3>
                        <p class="text-gray-600 mb-4 text-sm">
                            Defense of professionals against negligence claims, with strategic counsel to protect reputation and manage liability exposure.
                        </p>
                        <a href="#" class="text-[#c9a227] font-medium inline-flex items-center group text-sm">
                            Learn more
                            <svg class="w-3 h-3 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                @endif
            </div>
            
            <!-- CTA section -->
            <div class="text-center mt-12 section-fade-in">
                <div class="bg-gradient-to-r from-[#0a1a3a] to-[#1e3a5f] rounded-xl p-8 text-white">
                    <h3 class="text-xl md:text-2xl font-playfair mb-4">Ready to discuss your legal needs?</h3>
                    <p class="text-lg text-gray-200 mb-6 max-w-2xl mx-auto">
                        Contact us today for a confidential consultation with our expert legal team.
                    </p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-5 py-3 text-sm font-medium bg-[#c9a227] text-[#0a1a3a] rounded-md hover:bg-[#e6d18a] transition-all duration-300">
                        Schedule a Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Insights Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 section-fade-in">
                <div>
                    <h2 class="text-2xl md:text-3xl font-playfair text-[#0a1a3a] mb-3">Latest Insights</h2>
                    <p class="text-lg text-gray-600 max-w-2xl">
                        Stay informed with our latest legal analysis, case studies, and industry updates.
                    </p>
                </div>
                <a href="{{ route('insights') }}" class="inline-flex items-center justify-center px-5 py-3 text-sm font-medium border border-[#0a1a3a] text-[#0a1a3a] rounded-md hover:bg-[#0a1a3a] hover:text-white transition-all duration-300 mt-4 md:mt-0">
                    View All Insights
                </a>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($insights as $insight)
                    <div class="bg-white rounded-xl shadow-md overflow-hidden section-fade-in transform transition-all duration-500 hover:scale-105">
                        <div class="h-40 bg-gradient-to-r from-[#0a1a3a] to-[#1e3a5f] flex items-center justify-center">
                            <svg class="w-10 h-10 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                            </svg>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center text-xs text-gray-500 mb-2">
                                <span>{{ \Carbon\Carbon::parse($insight->published_at)->format('M d, Y') }}</span>
                                <span class="mx-2">•</span>
                                <span>5 min read</span>
                            </div>
                            <h4 class="text-lg font-semibold text-[#0a1a3a] mb-2 hover:text-[#c9a227] transition-colors duration-300">
                                <a href="{{ route('insights.show', $insight->slug) }}">{{ $insight->title }}</a>
                            </h4>
                            <p class="text-gray-600 mb-3 text-sm">{{ $insight->excerpt }}</p>
                            <a href="{{ route('insights.show', $insight->slug) }}" class="text-[#c9a227] font-medium inline-flex items-center group text-sm">
                                Read more
                                <svg class="w-3 h-3 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @empty
                    <!-- Placeholder insights -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden section-fade-in col-span-3">
                        <div class="p-6 text-center">
                            <svg class="w-14 h-14 text-gray-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <h3 class="text-lg font-semibold text-gray-700 mb-1">No insights yet</h3>
                            <p class="text-gray-500 text-sm">Check back soon for our latest legal insights and updates.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Hero section animations
        const heroTimeline = gsap.timeline();
        
        heroTimeline
            .to('#hero-badge', { opacity: 1, duration: 0.8, ease: "power2.out" })
            .fromTo('#hero-title-1', { y: 50 }, { y: 0, opacity: 1, duration: 0.8, ease: "power2.out" }, "-=0.4")
            .fromTo('#hero-title-2', { y: 50 }, { y: 0, opacity: 1, duration: 0.8, ease: "power2.out" }, "-=0.6")
            .fromTo('#hero-title-3', { y: 50 }, { y: 0, opacity: 1, duration: 0.8, ease: "power2.out" }, "-=0.6")
            .to('#hero-subtitle', { opacity: 1, duration: 1, ease: "power2.out" }, "-=0.4")
            .to('#cta-1', { opacity: 1, duration: 0.6, ease: "power2.out" }, "-=0.3")
            .to('#cta-2', { opacity: 1, duration: 0.6, ease: "power2.out" }, "-=0.5")
            .to('#hero-visual', { opacity: 1, duration: 1, ease: "power2.out" }, "-=0.8")
            .to('#scroll-indicator', { opacity: 1, duration: 0.8, ease: "power2.out" });
        
        // Floating animation for geometric elements
        gsap.to('.animate-float', {
            y: 20,
            duration: 3,
            repeat: -1,
            yoyo: true,
            ease: "power1.inOut"
        });
        
        // Pulse animation for background elements
        gsap.to('.animate-pulse-slow', {
            scale: 1.1,
            duration: 4,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });
    });
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
</style>
@endpush