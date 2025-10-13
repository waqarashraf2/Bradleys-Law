@extends('admin.layouts.app')

@section('title', 'Add Insight | Admin')
@section('page-title', 'Add New Insight')

@section('content')
<form action="{{ route('admin.insights.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow space-y-4">
    @csrf
    <div>
        <label class="block text-sm font-medium mb-1">Title</label>
        <input type="text" name="title" class="w-full border-gray-300 rounded p-2" required>
    </div>

    <div>
        <label class="block text-sm font-medium mb-1">Excerpt</label>
        <textarea name="excerpt" rows="2" class="w-full border-gray-300 rounded p-2"></textarea>
    </div>

    <div>
        <label class="block text-sm font-medium mb-1">Content</label>
        <textarea name="content" rows="6" class="w-full border-gray-300 rounded p-2" required></textarea>
    </div>

    <div>
        <label class="block text-sm font-medium mb-1">Published At (optional)</label>
        <input type="datetime-local" name="published_at" class="border-gray-300 rounded p-2 w-full">
    </div>

    <button type="submit" class="bg-[#0a1a3a] text-white px-4 py-2 rounded hover:bg-[#1e3a5f]">
        Save Insight
    </button>
</form>
@endsection
