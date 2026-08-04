@extends('admin.layouts.app')

@section('title', 'Edit Service | Admin')
@section('page-title', 'Edit Service')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white p-8 rounded-2xl shadow-md border border-gray-100 animate-slide-up">
        
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-[#0a1a3a] flex items-center gap-2">
                ✏️ Edit Service
            </h2>
            <a href="{{ route('admin.services.index') }}" 
               class="text-sm text-gray-600 hover:text-[#0a1a3a] transition">
               ← Back to Services
            </a>
        </div>

        <!-- Form -->
        <form action="{{ route('admin.services.update', $service) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Title -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                <input 
                    type="text" 
                    name="title" 
                    value="{{ old('title', $service->title) }}" 
                    class="w-full border border-gray-300 focus:border-[#0a1a3a] focus:ring-[#0a1a3a] rounded-lg p-3 transition duration-200 outline-none" 
                    required>
            </div>

            <!-- Excerpt -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Excerpt</label>
                <textarea 
                    name="excerpt" 
                    rows="2" 
                    class="w-full border border-gray-300 focus:border-[#0a1a3a] focus:ring-[#0a1a3a] rounded-lg p-3 transition duration-200 outline-none">{{ old('excerpt', $service->excerpt) }}</textarea>
            </div>

            <!-- Content -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Content</label>
                <textarea 
                    name="content" 
                    rows="6" 
                    class="w-full border border-gray-300 focus:border-[#0a1a3a] focus:ring-[#0a1a3a] rounded-lg p-3 transition duration-200 outline-none" 
                    required>{{ old('content', $service->content) }}</textarea>
            </div>
            
            <select name="category" id="category" class="w-full border border-gray-300 focus:border-[#0a1a3a] focus:ring-[#0a1a3a] rounded-lg p-3 transition duration-200 outline-none" >
    <option value="Insurance Litigation" {{ $service->category == 'Insurance Litigation' ? 'selected' : '' }}>Insurance Litigation</option>
    <option value="Construction Law" {{ $service->category == 'Construction Law' ? 'selected' : '' }}>Construction Law</option>
    <option value="ADR Services" {{ $service->category == 'ADR Services' ? 'selected' : '' }}>ADR Services</option>
</select>


            <!-- Submit Button -->
            <div class="flex justify-end">
                <button 
                    type="submit" 
                    class="bg-gradient-to-r from-[#0a1a3a] to-[#1e3a5f] text-white px-6 py-2.5 rounded-lg shadow hover:from-[#1a2a4a] hover:to-[#324d71] transition-all font-medium">
                    💾 Update Service
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Subtle Animations -->
<style>
@keyframes slideUp {
  from { opacity: 0; transform: translateY(15px); }
  to { opacity: 1; transform: translateY(0); }
}
.animate-slide-up { animation: slideUp 0.6s ease-out; }
</style>
@endsection
