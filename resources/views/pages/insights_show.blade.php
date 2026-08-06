@extends('layouts.app')

@section('title', $insight->title . ' | Bradleys Law')
@section('meta_description', Str::limit(strip_tags($insight->excerpt ?? $insight->content), 160))
@section('canonical', route('insights.show', $insight->slug))
@section('og_type', 'article')
@section('og_image', $insight->image_url)

@push('structured_data')
<script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Article',
        'headline' => $insight->title,
        'description' => Str::limit(strip_tags($insight->excerpt ?? $insight->content), 160),
        'image' => $insight->image_url,
        'author' => [
            '@type' => 'Organization',
            'name' => $insight->author ?: 'Bradleys Law',
        ],
        'publisher' => [
            '@type' => 'Organization',
            'name' => 'Bradleys Law',
            'logo' => [
                '@type' => 'ImageObject',
                'url' => asset('images/bradleys-law-site-icon.png'),
            ],
        ],
        'datePublished' => optional($insight->published_at)->toAtomString(),
        'dateModified' => $insight->updated_at?->toAtomString(),
        'mainEntityOfPage' => route('insights.show', $insight->slug),
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endpush
@section('content')
<section 
  class="relative py-44 px-6 bg-fixed bg-center bg-cover overflow-hidden"
  style="background-image: url('{{ $insight->banner ?? 'https://tse3.mm.bing.net/th/id/OIP.VDYwgJM_RWElgrACX74WBQHaEK?cb=12&w=2048&h=1152&rs=1&pid=ImgDetMain&o=7&rm=3' }}');"
>
  <!-- Overlay -->
  <div class="absolute inset-0 bg-gradient-to-b from-[#0a0f1c]/90 via-[#1a2238]/85 to-[#0a0f1c]/90"></div>

  <!-- Header -->
  <div class="relative max-w-5xl mx-auto text-center text-white mb-8 z-10">
    <span class="inline-block px-5 py-2 mb-5 text-sm font-medium uppercase tracking-widest bg-[#c9a227]/20 text-[#f6f1e5] border border-[#c9a227]/40 rounded-full backdrop-blur-sm animate-fade-in">
      Legal Insight
    </span>

    <h1 class="text-3xl md:text-5xl font-playfair font-semibold leading-tight mb-4 animate-slide-up">
      {{ $insight->title }}
    </h1>

    <p class="text-[#f6f1e5]/80 text-sm md:text-base animate-fade-in-delay">
      <!--By <span class="font-semibold text-[#c9a227]">{{ 'Bradleys Law Team' }}</span> -->
      • {{ \Carbon\Carbon::parse($insight->published_at)->format('F d, Y') }}
    </p>
  </div>

  <!-- Content Card -->
  <div class="relative z-10 max-w-5xl mx-auto bg-white/35 backdrop-blur-md border border-[#c9a227]/30 rounded-3xl shadow-2xl hover:shadow-[#c9a227]/30 transition-all duration-700 p-4 md:p-14 animate-scale-in">
    
    <!-- Featured Image -->
    @if($insight->image)
      <img src="{{ asset($insight->image) }}" alt="{{ $insight->title }}" class="rounded-2xl mb-8 w-full object-cover shadow-md">
    @endif

    <!-- Main Content -->
    <div class="prose prose-lg max-w-none text-gray-800 leading-relaxed">
      {!! $insight->content !!}
    </div>

    <!-- Decorative Line -->
    <div class="w-1/2 mx-auto mt-12 h-[3px] bg-gradient-to-r from-[#1a2238] via-[#c9a227] to-[#1a2238] rounded-full"></div>

    <!-- Share Section -->
    <!--<div class="mt-10 flex justify-center gap-6">-->
    <!--  <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(Request::url()) }}" target="_blank" class="text-[#0a66c2] hover:text-[#004182] transition">-->
    <!--    <i class="fab fa-linkedin text-2xl"></i>-->
    <!--  </a>-->
    <!--  <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::url()) }}&text={{ urlencode($insight->title) }}" target="_blank" class="text-[#1DA1F2] hover:text-[#0d8ddb] transition">-->
    <!--    <i class="fab fa-twitter text-2xl"></i>-->
    <!--  </a>-->
    <!--  <a href="mailto:?subject={{ urlencode($insight->title) }}&body={{ urlencode(Request::url()) }}" class="text-gray-600 hover:text-gray-800 transition">-->
    <!--    <i class="fas fa-envelope text-2xl"></i>-->
    <!--  </a>-->
    <!--</div>-->
  </div>

  <!-- Related Insights -->
  @if(isset($relatedInsights) && $relatedInsights->count())
  <div class="relative z-10 max-w-6xl mx-auto mt-24">
    <h3 class="text-2xl font-semibold text-center mb-10 text-[#1a2238]">Related Insights</h3>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach($relatedInsights as $related)
        <article class="border rounded-2xl p-6 bg-white hover:shadow-xl transition duration-500">
          <h4 class="text-xl font-semibold text-[#1a2238] mb-3 hover:text-[#c9a227] transition">
            <a href="{{ route('insights.show', $related->slug) }}">{{ $related->title }}</a>
          </h4>
          <p class="text-gray-600 line-clamp-3">{{ $related->excerpt }}</p>
          <a href="{{ route('insights.show', $related->slug) }}" class="inline-block mt-3 text-[#c9a227] font-medium">Read more →</a>
        </article>
      @endforeach
    </div>
  </div>
  @endif

  <!-- Back Button -->
  <div class="relative z-10 text-center mt-16">
    <a href="{{ route('insights') }}"
       class="group inline-flex items-center gap-2 px-8 py-3 rounded-full bg-gradient-to-r from-[#1a2238] to-[#c9a227] text-white font-semibold shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:scale-105">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition-transform group-hover:-translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
      Back to Insights
    </a>
  </div>
</section>

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
@keyframes fade-in { from {opacity:0;transform:translateY(10px);} to {opacity:1;transform:translateY(0);} }
@keyframes fade-in-delay { from {opacity:0;transform:translateY(20px);} to {opacity:1;transform:translateY(0);} }
@keyframes slide-up { from {opacity:0;transform:translateY(40px);} to {opacity:1;transform:translateY(0);} }
@keyframes scale-in { from {opacity:0;transform:scale(0.97);} to {opacity:1;transform:scale(1);} }

.animate-fade-in { animation: fade-in 0.6s ease-out forwards; }
.animate-fade-in-delay { animation: fade-in-delay 0.9s ease-out forwards; }
.animate-slide-up { animation: slide-up 0.8s ease-out forwards; }
.animate-scale-in { animation: scale-in 0.8s ease-out forwards; }
</style>
@endpush
@endsection
