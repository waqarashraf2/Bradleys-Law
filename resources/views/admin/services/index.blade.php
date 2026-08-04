@extends('admin.layouts.app')

@section('title', 'Manage Services | Admin')
@section('page-title', 'Services')

@section('content')
<div class="max-w-6xl mx-auto space-y-8">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <div>
            <h2 class="text-2xl font-semibold text-[#0a1a3a] flex items-center gap-2">
                ⚖️ All Services
            </h2>
            <p class="text-gray-500 text-sm mt-1">Manage, edit, or remove listed services below.</p>
        </div>

        <a href="{{ route('admin.services.create') }}" 
           class="inline-flex items-center gap-2 bg-gradient-to-r from-[#0a1a3a] to-[#1e3a5f] text-white px-5 py-2.5 rounded-lg font-medium shadow hover:from-[#1a2a4a] hover:to-[#324d71] transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Add New Service
        </a>
    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg shadow-sm animate-fade-in">
            <span class="font-medium">✅ {{ session('success') }}</span>
        </div>
    @endif

    <!-- Table Container -->
    <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden animate-slide-up">
        <table class="min-w-full text-sm">
            <thead class="bg-gradient-to-r from-gray-100 to-gray-50 border-b border-gray-200">
                <tr class="text-left text-gray-600 uppercase text-xs tracking-wider">
                    <th class="py-3 px-6 font-semibold">Title</th>
                    <th class="py-3 px-6 font-semibold">Slug</th>
                    <th class="py-3 px-6 font-semibold">Created</th>
                    <th class="py-3 px-6 text-right font-semibold">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-100">
                @forelse($services as $service)
                    <tr class="hover:bg-gray-50 transition-all duration-200">
                        <td class="py-4 px-6 font-medium text-gray-800">{{ $service->title }}</td>
                        <td class="py-4 px-6 text-gray-500">{{ $service->slug }}</td>
          <td class="py-4 px-6 text-gray-600">
    {{ $service->created_at ? $service->created_at->format('M d, Y') : 'N/A' }}
</td>

                        <td class="py-4 px-6 text-right space-x-2">
                            <a href="{{ route('admin.services.edit', $service) }}" 
                               class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium transition">
                                ✏️ Edit
                            </a>
                            <form action="{{ route('admin.services.destroy', $service) }}" 
                                  method="POST" 
                                  class="inline"
                                  onsubmit="return confirm('Are you sure you want to delete this service?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="inline-flex items-center text-red-600 hover:text-red-800 font-medium transition">
                                    🗑️ Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-6 text-gray-500">
                            No services found. Add a new one above.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6 flex justify-center">
        {{ $services->links() }}
    </div>
</div>

<!-- Animations -->
<style>
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(-5px); }
  to { opacity: 1; transform: translateY(0); }
}
@keyframes slideUp {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}
.animate-fade-in { animation: fadeIn 0.6s ease-out; }
.animate-slide-up { animation: slideUp 0.7s ease-out; }
</style>
@endsection
