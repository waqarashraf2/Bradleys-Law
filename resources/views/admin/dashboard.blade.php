@extends('admin.layouts.app')

@section('title', 'Admin Dashboard - Bradleys Law')
@section('page_title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Stats Cards -->
    <div class="bg-white shadow rounded-xl p-6 border">
        <h2 class="text-lg font-semibold text-gray-700">Total Services</h2>
        <p class="text-3xl font-bold text-[#0a1a3a] mt-2">{{ $servicesCount ?? 0 }}</p>
    </div>

    <div class="bg-white shadow rounded-xl p-6 border">
        <h2 class="text-lg font-semibold text-gray-700">Total Insights</h2>
        <p class="text-3xl font-bold text-[#0a1a3a] mt-2">{{ $insightsCount ?? 0 }}</p>
    </div>

    <div class="bg-white shadow rounded-xl p-6 border">
        <h2 class="text-lg font-semibold text-gray-700">New Messages</h2>
        <p class="text-3xl font-bold text-[#0a1a3a] mt-2">{{ $messagesCount ?? 0 }}</p>
    </div>
</div>

<div class="mt-12 bg-white shadow rounded-xl p-6 border">
    <h2 class="text-xl font-semibold text-[#0a1a3a] mb-4">Recent Messages</h2>
    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-100 text-left text-sm font-semibold text-gray-700">
                <th class="py-3 px-4 border">Name</th>
                <th class="py-3 px-4 border">Email</th>
                <th class="py-3 px-4 border">Message</th>
            </tr>
        </thead>
        <tbody>
            @forelse($recentMessages ?? [] as $msg)
                <tr class="hover:bg-gray-50">
                    <td class="py-2 px-4 border">{{ $msg->name }}</td>
                    <td class="py-2 px-4 border">{{ $msg->email }}</td>
                    <td class="py-2 px-4 border">{{ Str::limit($msg->message, 60) }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center py-4 text-gray-500">No recent messages found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
