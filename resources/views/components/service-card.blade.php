<article
  class="relative border border-white/20 rounded-2xl p-8 bg-white/30 backdrop-blur-md hover:shadow-2xl hover:-translate-y-1 transition-all duration-500 overflow-hidden"
  style="border:1px solid rgba(211, 211, 211, 0.5);">

  <!-- Subtle gradient overlay for depth -->
  <div class="absolute inset-0 bg-gradient-to-b from-white/40 via-transparent to-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>

  <!-- Category Tag -->
  <span class="relative inline-block text-xs font-semibold text-[#0a1a3a] bg-[#f4f2eb] px-3 py-1 rounded-full mb-3">
    {{ $service->category ?? 'Legal Service' }}
  </span>

  <!-- Title -->
  <h3 class="relative text-xl font-semibold text-[#1a2238] mb-3 hover:text-[#c9a227] transition-colors duration-300 leading-snug">
    <a href="{{ route('expertise.show', $service->slug) }}">
      {{ $service->title }}
    </a>
  </h3>

  <!-- Divider line for structure -->
  <div class="relative h-[1px] w-12 bg-[#c9a227] mb-4"></div>

  <!-- Summary -->
  <p class="relative text-gray-700 mb-5 text-sm leading-relaxed">
    {{ Str::limit($service->summary ?? 'We provide expert legal solutions tailored to client needs, ensuring clarity, confidence, and results-driven outcomes.', 150) }}
  </p>

  <!-- Optional Highlights -->
  <ul class="relative text-gray-600 text-sm space-y-2 mb-6">
    <li class="flex items-start">
      <svg class="w-4 h-4 text-[#c9a227] mr-2 mt-0.5" fill="none" stroke="currentColor" stroke-width="2"
           viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
      </svg>
      Expert representation and advisory
    </li>
    <li class="flex items-start">
      <svg class="w-4 h-4 text-[#c9a227] mr-2 mt-0.5" fill="none" stroke="currentColor" stroke-width="2"
           viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
      </svg>
      Proven track record in case resolutions
    </li>
    <li class="flex items-start">
      <svg class="w-4 h-4 text-[#c9a227] mr-2 mt-0.5" fill="none" stroke="currentColor" stroke-width="2"
           viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
      </svg>
      Industry-specific legal insights
    </li>
  </ul>

  <!-- Read More -->
  <a href="{{ route('expertise.show', $service->slug) }}"
     class="relative inline-flex items-center text-[#c9a227] font-semibold text-sm group hover:underline">
    Learn more
    <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform"
         fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
    </svg>
  </a>

</article>
