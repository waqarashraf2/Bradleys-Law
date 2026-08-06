@extends('layouts.app')

@section('title', 'Recover Password - Bradleys Law')
@section('robots', 'noindex, nofollow')

@section('content')
<section class="flex min-h-screen items-center justify-center bg-[#0a1a3a] px-6 py-32">
    <div class="w-full max-w-md rounded-2xl border border-[#c9a227]/30 bg-white p-8 shadow-2xl">
        <div class="text-center">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-[#c9a227]">Account recovery</p>
            <h1 class="mt-3 font-playfair text-3xl font-semibold text-[#0a1a3a]">Reset your password</h1>
            <p class="mt-3 text-sm leading-6 text-gray-600">
                Enter your account email and we will send a secure password reset link.
            </p>
        </div>

        @if (session('status'))
            <div class="mt-6 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mt-6 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="mt-8 space-y-5">
            @csrf
            <div>
                <label class="block text-sm font-semibold text-gray-800">Email address</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus
                       class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-3 text-sm text-gray-900 focus:border-[#c9a227] focus:outline-none focus:ring-2 focus:ring-[#c9a227]/20">
            </div>

            <button type="submit"
                    class="w-full rounded-lg bg-[#0a1a3a] px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-[#123061]">
                Send reset link
            </button>
        </form>

        <div class="mt-6 text-center">
            <a href="{{ route('auth.form') }}" class="text-sm font-semibold text-[#0a1a3a] hover:text-[#c9a227]">
                Back to login
            </a>
        </div>
    </div>
</section>
@endsection
