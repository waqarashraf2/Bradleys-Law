@extends('admin.layouts.app')

@section('title', 'Users | Admin')
@section('page-title', 'Users Management')

@section('content')
<div class="max-w-6xl mx-auto animate-fade-in">

    {{-- Flash Messages --}}
    @if(session('success'))
        <div class="bg-green-50 border-l-4 border-green-500 text-green-800 p-4 rounded-md mb-6 shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-50 border-l-4 border-red-500 text-red-800 p-4 rounded-md mb-6 shadow-sm">
            {{ session('error') }}
        </div>
    @endif

    {{-- Users Table --}}
    <div class="bg-white shadow-md rounded-2xl overflow-hidden border border-gray-100">
        <table class="min-w-full text-sm text-gray-800">
            <thead class="bg-gradient-to-r from-[#0a1a3a] to-[#1e3a5f] text-white uppercase text-xs tracking-wider">
                <tr>
                    <th class="py-3 px-4 text-left">Name</th>
                    <th class="py-3 px-4 text-left">Email</th>
                    <th class="py-3 px-4 text-left">Role</th>
                    <th class="py-3 px-4 text-left">Joined</th>
                    <th class="py-3 px-4 text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr class="border-b border-gray-100 hover:bg-gray-50 transition duration-150">
                        <td class="py-3 px-4 font-medium text-gray-900">{{ $user->name }}</td>
                        <td class="py-3 px-4 text-gray-700">{{ $user->email }}</td>
                        <td class="py-3 px-4">
                            <span class="inline-block px-2 py-1 rounded-full text-xs font-medium
                                {{ $user->role === 'admin' 
                                    ? 'bg-green-100 text-green-700' 
                                    : 'bg-blue-50 text-blue-700' }}">
                                {{ ucfirst($user->role) }}
                            </span>
                        </td>
                        <td class="py-3 px-4 text-gray-500">
                            {{ $user->created_at->format('M d, Y') }}
                        </td>
                        <td class="py-3 px-4 text-right">
                            @if(auth()->id() !== $user->id)
                                <form action="{{ route('admin.users.destroy', $user) }}" method="POST"
                                      onsubmit="return confirm('Are you sure you want to delete this user?');" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600 hover:text-red-700 hover:underline font-medium transition duration-200">
                                        Delete
                                    </button>
                                </form>
                            @else
                                <span class="text-gray-400 text-xs italic">You</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="py-6 text-center text-gray-500">
                            No users found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="mt-6">
        {{ $users->links() }}
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
