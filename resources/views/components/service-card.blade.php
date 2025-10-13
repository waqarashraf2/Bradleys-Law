<article class="border rounded-xl p-6 hover:shadow-lg transition">
  <h3 class="text-xl font-semibold text-[#1a2238] mb-2">
    <a href="{{ route('expertise.show', $service->slug) }}">{{ $service->title }}</a>
  </h3>
  <p class="text-gray-600 mb-4">{{ $service->summary }}</p>
  <a href="{{ route('expertise.show', $service->slug) }}" class="text-[#c9a227] font-medium">Read more →</a>
</article>
