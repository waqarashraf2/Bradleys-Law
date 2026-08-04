@extends('admin.layouts.app')

@section('title', 'Admin Dashboard - Bradleys Law')
@section('page-title', 'Dashboard')

@section('content')
<div class="max-w-7xl mx-auto animate-fade-in">

    {{-- Stats Section --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-gradient-to-br from-[#0a1a3a] to-[#1e3a5f] text-white rounded-2xl shadow-lg p-6 flex items-center justify-between border border-gray-200">
            <div>
                <h2 class="text-sm uppercase opacity-80 tracking-wider font-medium">Total Services</h2>
                <p class="text-4xl font-bold mt-2">{{ $servicesCount ?? 0 }}</p>
            </div>
            <div class="bg-white/20 rounded-full p-3">
                <i class="fas fa-briefcase text-2xl"></i>
            </div>
        </div>

        <div class="bg-gradient-to-br from-[#1e3a5f] to-[#3a5f84] text-white rounded-2xl shadow-lg p-6 flex items-center justify-between border border-gray-200">
            <div>
                <h2 class="text-sm uppercase opacity-80 tracking-wider font-medium">Total Insights</h2>
                <p class="text-4xl font-bold mt-2">{{ $insightsCount ?? 0 }}</p>
            </div>
            <div class="bg-white/20 rounded-full p-3">
                <i class="fas fa-lightbulb text-2xl"></i>
            </div>
        </div>

        <div class="bg-gradient-to-br from-[#0a1a3a] to-[#3a5f84] text-white rounded-2xl shadow-lg p-6 flex items-center justify-between border border-gray-200">
            <div>
                <h2 class="text-sm uppercase opacity-80 tracking-wider font-medium">New Messages</h2>
                <p class="text-4xl font-bold mt-2">{{ $messagesCount ?? 0 }}</p>
            </div>
            <div class="bg-white/20 rounded-full p-3">
                <i class="fas fa-envelope text-2xl"></i>
            </div>
        </div>
    </div>

    {{-- Recent Messages Table --}}
    <div class="mt-12 bg-white shadow-lg rounded-2xl p-6 border border-gray-100">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-semibold text-[#0a1a3a]">Recent Messages</h2>
            <a href="{{ route('admin.messages.index') ?? '#' }}" class="text-sm text-[#1e3a5f] hover:underline">
                View all
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm border border-gray-200 rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-100 text-left text-sm font-semibold text-gray-700">
                        <th class="py-3 px-4 border-b">Name</th>
                        <th class="py-3 px-4 border-b">Email</th>
                        <th class="py-3 px-4 border-b">Message</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($recentMessages ?? [] as $msg)
                        <tr class="hover:bg-gray-50 transition duration-150">
                            <td class="py-3 px-4 border-b font-medium text-gray-800">{{ $msg->name }}</td>
                            <td class="py-3 px-4 border-b text-gray-600">{{ $msg->email }}</td>
                            <td class="py-3 px-4 border-b text-gray-600">
                                {{ Str::limit($msg->message, 60) }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center py-6 text-gray-500">No recent messages found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
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
