@extends('admin.layouts.app')

@section('title', 'Messages | Admin')
@section('page-title', 'Contact Messages')

@section('content')
<div class="max-w-6xl mx-auto animate-fade-in">

    {{-- Success Message --}}
    @if(session('success'))
        <div class="bg-green-50 border-l-4 border-green-500 text-green-800 p-4 rounded-md mb-6 shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    {{-- Messages Table --}}
    <div class="bg-white shadow-md rounded-2xl overflow-hidden border border-gray-100">
        <table class="min-w-full text-sm text-gray-800">
            <thead class="bg-gradient-to-r from-[#0a1a3a] to-[#1e3a5f] text-white uppercase text-xs tracking-wider">
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
                    <tr class="border-b border-gray-100 hover:bg-gray-50 transition duration-150">
                        <td class="py-3 px-4 font-medium text-gray-900">{{ $message->name }}</td>
                        <td class="py-3 px-4 text-gray-700">{{ $message->email }}</td>
                        <td class="py-3 px-4 text-gray-700">{{ $message->subject ?? '—' }}</td>
                        <td class="py-3 px-4 text-gray-600 max-w-xs truncate" title="{{ $message->message }}">
                            {{ Str::limit($message->message, 50) }}
                        </td>
                        <td class="py-3 px-4 text-gray-500">{{ $message->created_at->format('M d, Y') }}</td>
                        <td class="py-3 px-4 text-right">
                            <form 
                                action="{{ route('admin.messages.destroy', $message) }}" 
                                method="POST" 
                                onsubmit="return confirm('Are you sure you want to delete this message?');" 
                                class="inline">
                                @csrf
                                @method('DELETE')
                                <button 
                                    class="text-red-600 hover:text-red-700 hover:underline transition duration-200 font-medium">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="py-6 text-center text-gray-500">
                            No messages found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="mt-6">
        {{ $messages->links() }}
    </div>
</div>

{{-- Fade-in Animation --}}
@push('styles')
<style>
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(15px); }
  to { opacity: 1; transform: translateY(0); }
}
.animate-fade-in {
  animation: fadeIn 0.6s ease-out;
}
</style>
@endpush
@endsection
