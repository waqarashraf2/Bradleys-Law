@extends('admin.layouts.app')

@section('title', 'Users | Admin')
@section('page-title', 'Users Management')

@section('content')
@if(session('success'))
    <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
        {{ session('error') }}
    </div>
@endif

<div class="bg-white shadow rounded-lg overflow-hidden">
    <table class="min-w-full text-sm">
        <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
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
                <tr class="border-t">
                    <td class="py-3 px-4 font-medium">{{ $user->name }}</td>
                    <td class="py-3 px-4">{{ $user->email }}</td>
                    <td class="py-3 px-4">
                        <span class="px-2 py-1 rounded text-xs {{ $user->role === 'admin' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-700' }}">
                            {{ ucfirst($user->role) }}
                        </span>
                    </td>
                    <td class="py-3 px-4 text-gray-500">{{ $user->created_at->format('M d, Y') }}</td>
                    <td class="py-3 px-4 text-right">
                        @if(auth()->id() !== $user->id)
                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" onsubmit="return confirm('Delete this user?');" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 hover:underline">Delete</button>
                            </form>
                        @else
                            <span class="text-gray-400 text-xs italic">You</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="py-4 text-center text-gray-500">No users found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-6">
    {{ $users->links() }}
</div>
@endsection
