@extends('layouts.app')

@section('title', 'Set New Password - Bradleys Law')

@section('content')
<section class="flex min-h-screen items-center justify-center bg-[#0a1a3a] px-6 py-32">
    <div class="w-full max-w-md rounded-2xl border border-[#c9a227]/30 bg-white p-8 shadow-2xl">
        <div class="text-center">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-[#c9a227]">Secure reset</p>
            <h1 class="mt-3 font-playfair text-3xl font-semibold text-[#0a1a3a]">Create a new password</h1>
            <p class="mt-3 text-sm leading-6 text-gray-600">
                Use a strong password with at least 10 characters.
            </p>
        </div>

        @if ($errors->any())
            <div class="mt-6 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.update') }}" class="mt-8 space-y-5">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div>
                <label class="block text-sm font-semibold text-gray-800">Email address</label>
                <input type="email" name="email" value="{{ old('email', $email) }}" required
                       class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-3 text-sm text-gray-900 focus:border-[#c9a227] focus:outline-none focus:ring-2 focus:ring-[#c9a227]/20">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-800">New password</label>
                <input type="password" name="password" required
                       class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-3 text-sm text-gray-900 focus:border-[#c9a227] focus:outline-none focus:ring-2 focus:ring-[#c9a227]/20">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-800">Confirm new password</label>
                <input type="password" name="password_confirmation" required
                       class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-3 text-sm text-gray-900 focus:border-[#c9a227] focus:outline-none focus:ring-2 focus:ring-[#c9a227]/20">
            </div>

            <button type="submit"
                    class="w-full rounded-lg bg-[#0a1a3a] px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-[#123061]">
                Update password
            </button>
        </form>
    </div>
</section>
@endsection
