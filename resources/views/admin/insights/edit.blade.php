@extends('admin.layouts.app')

@section('title', 'Edit Insight | Admin')
@section('page_title', 'Edit Insight')

@section('content')
<div class="max-w-4xl mx-auto space-y-8">

    <!-- Header -->
    <div class="flex justify-between items-center">
        <h2 class="text-2xl font-semibold text-[#0a1a3a]">✏️ Edit Insight</h2>
        <a href="{{ route('admin.insights.index') }}" 
           class="text-sm text-[#0a1a3a] hover:text-[#1e3a5f] transition font-medium">
            ← Back to Insights
        </a>
    </div>

    <!-- Form -->
    <form action="{{ route('admin.insights.update', $insight) }}" 
          method="POST" 
          class="bg-white p-8 rounded-2xl shadow-lg border border-gray-200 space-y-6 transition-all duration-300">
        @csrf
        @method('PUT')

        <!-- Title -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Title</label>
            <input type="text" 
                   name="title" 
                   value="{{ old('title', $insight->title) }}" 
                   class="w-full rounded-lg border border-gray-300 focus:border-[#0a1a3a] focus:ring-2 focus:ring-[#c9a227]/40 p-3 outline-none transition"
                   placeholder="Enter insight title"
                   required>
        </div>

        <!-- Excerpt -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Excerpt</label>
            <textarea name="excerpt" rows="2" 
                      class="w-full rounded-lg border border-gray-300 focus:border-[#0a1a3a] focus:ring-2 focus:ring-[#c9a227]/40 p-3 outline-none transition resize-none"
                      placeholder="Short summary or preview">{{ old('excerpt', $insight->excerpt) }}</textarea>
        </div>

        <!-- Content -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Content</label>
            <textarea name="content" rows="8" 
                      class="w-full rounded-lg border border-gray-300 focus:border-[#0a1a3a] focus:ring-2 focus:ring-[#c9a227]/40 p-3 outline-none transition"
                      placeholder="Write full insight content here..."
                      required>{{ old('content', $insight->content) }}</textarea>
        </div>

        <!-- Published At -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Published At</label>
            <input type="datetime-local" 
                   name="published_at"
                   value="{{ old('published_at', optional($insight->published_at)->format('Y-m-d\TH:i')) }}"
                   class="w-full rounded-lg border border-gray-300 focus:border-[#0a1a3a] focus:ring-2 focus:ring-[#c9a227]/40 p-3 outline-none transition">
        </div>

        <!-- Buttons -->
        <div class="flex flex-col sm:flex-row justify-end gap-3 pt-6 border-t border-gray-200">
            <a href="{{ route('admin.insights.index') }}" 
               class="inline-flex items-center justify-center px-5 py-2.5 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 transition font-medium">
                Cancel
            </a>
            <button type="submit" 
                    class="inline-flex items-center justify-center px-6 py-2.5 rounded-lg bg-[#0a1a3a] text-white font-medium hover:bg-[#1e3a5f] shadow-md transition">
                💾 Update Insight
            </button>
        </div>
    </form>
</div>

<!-- Soft Fade-In Animation -->
<style>
@keyframes fadeInSmooth {
  from { opacity: 0; transform: translateY(10px); }
  to { opacity: 1; transform: translateY(0); }
}
form {
  animation: fadeInSmooth 0.6s ease-out;
}
</style>
@endsection
