@extends('admin.layouts.app')

@section('title', 'Manage Insights | Admin')
@section('page_title', 'Insights')

@section('content')
<div class="space-y-8">

    <!-- Header Section -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
        <div>
            <h2 class="text-2xl font-semibold text-[#0a1a3a]">All Insights</h2>
            <p class="text-sm text-gray-500 mt-1">Manage and edit your published and draft legal insights.</p>
        </div>
        <a href="{{ route('admin.insights.create') }}" 
           class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-gradient-to-r from-[#0a1a3a] to-[#1e3a5f] text-white font-medium shadow-md hover:shadow-lg hover:scale-[1.02] transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Add New Insight
        </a>
    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg flex items-center gap-2 shadow-sm animate-fade-in">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <!-- Table -->
    <div class="overflow-hidden bg-white border border-gray-100 rounded-xl shadow-md hover:shadow-lg transition-all duration-300">
        <table class="min-w-full text-sm">
            <thead class="bg-gradient-to-r from-[#0a1a3a] to-[#1e3a5f] text-white">
                <tr>
                    <th class="py-3 px-5 text-left font-medium tracking-wide">Title</th>
                    <th class="py-3 px-5 text-left font-medium tracking-wide">Slug</th>
                    <th class="py-3 px-5 text-left font-medium tracking-wide">Published</th>
                    <th class="py-3 px-5 text-right font-medium tracking-wide">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($insights as $insight)
                    <tr class="border-t border-gray-100 hover:bg-gray-50 transition-all duration-200">
                        <td class="py-3 px-5 font-medium text-gray-900">{{ $insight->title }}</td>
                        <td class="py-3 px-5 text-gray-500">{{ $insight->slug }}</td>
                        <td class="py-3 px-5 text-gray-700">
                            {{ $insight->published_at ? $insight->published_at->format('M d, Y') : '—' }}
                        </td>
                        <td class="py-3 px-5 text-right flex justify-end items-center gap-3">
                            <a href="{{ route('admin.insights.edit', $insight) }}" 
                               class="inline-flex items-center gap-1 text-blue-600 hover:text-blue-800 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536M9 11l6-6 3 3-6 6H9v-3z" />
                                </svg>
                                Edit
                            </a>
                            <form action="{{ route('admin.insights.destroy', $insight) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                    onclick="return confirm('Are you sure you want to delete this insight?')" 
                                    class="inline-flex items-center gap-1 text-red-600 hover:text-red-800 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5-4h4m-6 4h8" />
                                    </svg>
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="py-6 text-center text-gray-500">
                            No insights found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $insights->links('pagination::tailwind') }}
    </div>
</div>

<!-- Fade In Animation -->
<style>
@keyframes fade-in {
    from { opacity: 0; transform: translateY(8px); }
    to { opacity: 1; transform: translateY(0); }
}
.animate-fade-in {
    animation: fade-in 0.6s ease-out forwards;
}
</style>
@endsection
