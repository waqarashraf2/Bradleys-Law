@extends('admin.layouts.app')

@section('title', 'Manage Insights | Admin')
@section('page-title', 'Insights')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-lg font-semibold">All Insights</h2>
    <a href="{{ route('admin.insights.create') }}" class="bg-[#0a1a3a] text-white px-4 py-2 rounded hover:bg-[#1e3a5f]">
        + Add New Insight
    </a>
</div>

@if(session('success'))
    <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white rounded-lg shadow overflow-hidden">
    <table class="min-w-full text-sm">
        <thead class="bg-gray-100">
            <tr>
                <th class="py-3 px-4 text-left">Title</th>
                <th class="py-3 px-4 text-left">Slug</th>
                <th class="py-3 px-4 text-left">Published</th>
                <th class="py-3 px-4 text-right">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($insights as $insight)
            <tr class="border-t">
                <td class="py-3 px-4">{{ $insight->title }}</td>
                <td class="py-3 px-4 text-gray-500">{{ $insight->slug }}</td>
                <td class="py-3 px-4">
                    {{ $insight->published_at ? $insight->published_at->format('M d, Y') : '—' }}
                </td>
                <td class="py-3 px-4 text-right space-x-2">
                    <a href="{{ route('admin.insights.edit', $insight) }}" class="text-blue-600 hover:underline">Edit</a>
                    <form action="{{ route('admin.insights.destroy', $insight) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline"
                            onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-6">
    {{ $insights->links() }}
</div>
@endsection
