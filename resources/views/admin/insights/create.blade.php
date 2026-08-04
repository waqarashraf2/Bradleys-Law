@extends('admin.layouts.app')

@section('title', 'Add Insight | Admin')
@section('page_title', 'Add New Insight')

@section('content')
<div class="max-w-5xl mx-auto space-y-10">

    <!-- Header -->
    <div class="flex justify-between items-center">
        <h2 class="text-2xl font-semibold text-[#0a1a3a] flex items-center gap-2">
            📰 Add New Insight
        </h2>
        <a href="{{ route('admin.insights.index') }}" 
           class="text-sm text-[#0a1a3a] hover:text-[#1e3a5f] transition font-medium">
            ← Back to Insights
        </a>
    </div>

    <!-- Form -->
    <form action="{{ route('admin.insights.store') }}" 
          method="POST" 
          enctype="multipart/form-data"
          class="bg-white p-10 rounded-2xl shadow-lg border border-gray-200 space-y-6 transition-all duration-300">
        @csrf

        {{-- Title --}}
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Title <span class="text-red-500">*</span></label>
            <input type="text" 
                   name="title" 
                   id="title"
                   class="w-full rounded-lg border border-gray-300 focus:border-[#0a1a3a] focus:ring-2 focus:ring-[#c9a227]/40 p-3 outline-none transition"
                   placeholder="Enter insight title"
                   required>
        </div>

        {{-- Slug (auto-generated) --}}
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Slug</label>
            <input type="text" 
                   name="slug" 
                   id="slug"
                   class="w-full rounded-lg border border-gray-300 bg-gray-50 text-gray-700 p-3 outline-none transition"
                   readonly>
            <p class="text-xs text-gray-500 mt-1">Auto-generated from title.</p>
        </div>

        {{-- Category --}}
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Category</label>
            <select name="category" 
                    class="w-full rounded-lg border border-gray-300 focus:border-[#0a1a3a] focus:ring-2 focus:ring-[#c9a227]/40 p-3 outline-none transition">
                <option value="Insurance Litigation">Insurance Litigation</option>
                <option value="Construction Law">Construction Law</option>
                <option value="Professional Negligence">Professional Negligence</option>
                <option value="Corporate Advisory">Corporate Advisory</option>
                <option value="General">General</option>
            </select>
        </div>

        {{-- Author --}}
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Author</label>
            <input type="text" 
                   name="author" 
                   value="{{ Auth::user()->name ?? 'Admin' }}" 
                   class="w-full rounded-lg border border-gray-300 focus:border-[#0a1a3a] focus:ring-2 focus:ring-[#c9a227]/40 p-3 outline-none transition"
                   placeholder="Enter author name">
        </div>

        {{-- Excerpt --}}
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Excerpt</label>
            <textarea name="excerpt" rows="3" 
                      class="w-full rounded-lg border border-gray-300 focus:border-[#0a1a3a] focus:ring-2 focus:ring-[#c9a227]/40 p-3 outline-none transition resize-none"
                      placeholder="Short summary or preview (auto-generated if empty)"></textarea>
        </div>

        {{-- Content --}}
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Content <span class="text-red-500">*</span></label>
            <textarea name="content" id="content" rows="10" 
                      class="w-full rounded-lg border border-gray-300 focus:border-[#0a1a3a] focus:ring-2 focus:ring-[#c9a227]/40 p-3 outline-none transition"
                      placeholder="Write full insight content here..."
                      required></textarea>
        </div>

        {{-- Image Upload --}}
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Featured Image</label>
            <input type="file" 
                   name="image"
                   accept="image/*"
                   class="w-full rounded-lg border border-gray-300 bg-gray-50 focus:border-[#0a1a3a] focus:ring-2 focus:ring-[#c9a227]/40 p-3 transition">
            <p class="text-xs text-gray-500 mt-1">Recommended size: 1200x800px (JPG or PNG)</p>
        </div>

        {{-- Read Time --}}
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Estimated Read Time (minutes)</label>
            <input type="number" 
                   name="read_time" 
                   id="read_time"
                   class="w-full rounded-lg border border-gray-300 focus:border-[#0a1a3a] focus:ring-2 focus:ring-[#c9a227]/40 p-3 outline-none transition"
                   placeholder="Auto-calculated from content">
        </div>

        {{-- Published Date --}}
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Published At</label>
            <input type="datetime-local" 
                   name="published_at"
                   value="{{ now()->format('Y-m-d\TH:i') }}"
                   class="w-full rounded-lg border border-gray-300 focus:border-[#0a1a3a] focus:ring-2 focus:ring-[#c9a227]/40 p-3 outline-none transition">
        </div>

        {{-- Views (optional / default 0) --}}
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Views (default 0)</label>
            <input type="number" 
                   name="views" 
                   value="0"
                   class="w-full rounded-lg border border-gray-300 focus:border-[#0a1a3a] focus:ring-2 focus:ring-[#c9a227]/40 p-3 outline-none transition">
        </div>

        <!-- Buttons -->
        <div class="flex flex-col sm:flex-row justify-end gap-3 pt-8 border-t border-gray-200">
            <a href="{{ route('admin.insights.index') }}" 
               class="inline-flex items-center justify-center px-5 py-2.5 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 transition font-medium">
                Cancel
            </a>
            <button type="submit" 
                    class="inline-flex items-center justify-center px-6 py-2.5 rounded-lg bg-[#0a1a3a] text-white font-medium hover:bg-[#1e3a5f] shadow-md transition">
                ➕ Save Insight
            </button>
        </div>
    </form>
</div>

<!-- Smooth Fade-In Animation -->
<style>
@keyframes fadeInSmooth {
  from { opacity: 0; transform: translateY(10px); }
  to { opacity: 1; transform: translateY(0); }
}
form {
  animation: fadeInSmooth 0.6s ease-out;
}
</style>

<!-- Auto Slug + Read Time Calculation -->
<script>
document.getElementById('title').addEventListener('input', function () {
    const slugInput = document.getElementById('slug');
    const slug = this.value
        .toLowerCase()
        .replace(/[^a-z0-9\s-]/g, '')
        .trim()
        .replace(/\s+/g, '-');
    slugInput.value = slug;
});

// Auto calculate read time
document.getElementById('content').addEventListener('input', function () {
    const text = this.value.trim();
    const words = text.split(/\s+/).length;
    const minutes = Math.ceil(words / 200); // average 200 words per minute
    document.getElementById('read_time').value = minutes;
});
</script>
@endsection
