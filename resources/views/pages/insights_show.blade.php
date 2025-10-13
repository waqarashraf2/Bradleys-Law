@extends('layouts.app')

@section('title', $insight->title . ' | Bradleys Law')
@section('meta_description', Str::limit(strip_tags($insight->excerpt), 160))

@section('content')
<section class="relative max-w-5xl mx-auto px-6 py-20">

    {{-- Header Section --}}
    <div class="text-center mb-14">
        <span class="inline-block px-4 py-1 mb-4 text-sm font-medium tracking-wider uppercase text-[#c9a227] bg-[#f6f1e5] rounded-full animate-fade-in">
            Legal Insight
        </span>

        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-4 animate-slide-up">
            {{ $insight->title }}
        </h1>

        <p class="text-gray-500 text-sm md:text-base animate-fade-in-delay">
            By <span class="font-semibold text-gray-800">{{ $insight->author }}</span> 
            • {{ \Carbon\Carbon::parse($insight->published_at)->format('F d, Y') }}
        </p>
    </div>

    {{-- Article Card --}}
    <div class="relative bg-white border border-gray-200 rounded-3xl shadow-md hover:shadow-xl transition-shadow duration-500 p-10 animate-scale-in">
        <div class="prose prose-lg max-w-none text-gray-800 leading-relaxed">
            {!! $insight->content !!}
        </div>

        {{-- Decorative gradient line --}}
        <div class="absolute left-1/2 transform -translate-x-1/2 bottom-0 w-2/3 h-[3px] bg-gradient-to-r from-[#1a2238] via-[#c9a227] to-[#1a2238] rounded-full mt-10"></div>
    </div>

    {{-- Navigation Button --}}
    <div class="text-center mt-16">
        <a href="{{ route('insights') }}" 
           class="group inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gradient-to-r from-[#1a2238] to-[#c9a227] text-white font-semibold shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition-transform group-hover:-translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back to Insights
        </a>
    </div>

</section>

{{-- Custom animations --}}
@push('styles')
<style>
@keyframes fade-in {
  from { opacity: 0; transform: translateY(10px); }
  to { opacity: 1; transform: translateY(0); }
}
@keyframes fade-in-delay {
  from { opacity: 0; transform: translateY(15px); }
  to { opacity: 1; transform: translateY(0); }
}
@keyframes slide-up {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}
@keyframes scale-in {
  from { opacity: 0; transform: scale(0.98); }
  to { opacity: 1; transform: scale(1); }
}

.animate-fade-in { animation: fade-in 0.6s ease-out forwards; }
.animate-fade-in-delay { animation: fade-in-delay 0.9s ease-out forwards; }
.animate-slide-up { animation: slide-up 0.8s ease-out forwards; }
.animate-scale-in { animation: scale-in 0.7s ease-out forwards; }
</style>
@endpush
@endsection
