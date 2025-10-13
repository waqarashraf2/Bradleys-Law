@extends('admin.layouts.app')

@section('title', 'Messages | Admin')
@section('page-title', 'Contact Messages')

@section('content')
@if(session('success'))
    <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white shadow rounded-lg overflow-hidden">
    <table class="min-w-full text-sm">
        <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
            <tr>
                <th class="py-3 px-4 text-left">Name</th>
                <th class="py-3 px-4 text-left">Email</th>
                <th class="py-3 px-4 text-left">Subject</th>
                <th class="py-3 px-4 text-left">Message</th>
                <th class="py-3 px-4 text-left">Date</th>
                <th class="py-3 px-4 text-right">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($messages as $message)
                <tr class="border-t">
                    <td class="py-3 px-4 font-medium">{{ $message->name }}</td>
                    <td class="py-3 px-4">{{ $message->email }}</td>
                    <td class="py-3 px-4">{{ $message->subject ?? '—' }}</td>
                    <td class="py-3 px-4 text-gray-600 max-w-xs truncate">{{ $message->message }}</td>
                    <td class="py-3 px-4 text-gray-500">{{ $message->created_at->format('M d, Y') }}</td>
                    <td class="py-3 px-4 text-right">
                        <form action="{{ route('admin.messages.destroy', $message) }}" method="POST" onsubmit="return confirm('Delete this message?');" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" class="py-4 text-center text-gray-500">No messages found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-6">
    {{ $messages->links() }}
</div>
@endsection
