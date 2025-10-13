@extends('admin.layouts.app')

@section('title', 'Edit Service | Admin')
@section('page-title', 'Edit Service')

@section('content')
<form action="{{ route('admin.services.update', $service) }}" method="POST" class="bg-white p-6 rounded-lg shadow space-y-4">
    @csrf
    @method('PUT')

    <div>
        <label class="block text-sm font-medium mb-1">Title</label>
        <input type="text" name="title" value="{{ old('title', $service->title) }}" class="w-full border-gray-300 rounded p-2" required>
    </div>

    <div>
        <label class="block text-sm font-medium mb-1">Excerpt</label>
        <textarea name="excerpt" rows="2" class="w-full border-gray-300 rounded p-2">{{ old('excerpt', $service->excerpt) }}</textarea>
    </div>

    <div>
        <label class="block text-sm font-medium mb-1">Content</label>
        <textarea name="content" rows="6" class="w-full border-gray-300 rounded p-2" required>{{ old('content', $service->content) }}</textarea>
    </div>

    <button type="submit" class="bg-[#0a1a3a] text-white px-4 py-2 rounded hover:bg-[#1e3a5f]">
        Update Service
    </button>
</form>
@endsection
