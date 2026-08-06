@extends('admin.layouts.app')

@section('title', 'Newsletter - Bradleys Law')
@section('page_title', 'Newsletter')

@section('content')
<div class="max-w-6xl mx-auto space-y-8">
    <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-[#c9a227]">Newsletter editor</p>
            <h2 class="mt-2 text-3xl font-semibold text-[#0a1a3a]">Bradleys Briefest Briefs</h2>
            <p class="mt-3 max-w-3xl text-gray-600">
                Update the homepage newsletter signup text and keep internal newsletter notes in one safe admin area.
            </p>
        </div>

        @if($newsletter)
            <a href="{{ $newsletter->signup_url }}" target="_blank" rel="noopener"
               class="inline-flex items-center justify-center rounded-lg bg-[#0a1a3a] px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-[#123061]">
                Open Mailchimp form
            </a>
        @endif
    </div>

    @if (session('status'))
        <div class="rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm font-medium text-green-800">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm font-medium text-red-800">
            {{ $errors->first() }}
        </div>
    @endif

    @if($newsletter)
        <div class="grid gap-6 lg:grid-cols-[1.15fr_0.85fr]">
            <form method="POST" action="{{ route('admin.newsletter.update', $newsletter) }}"
                  class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
                @csrf
                @method('PUT')

                <div class="grid gap-5 md:grid-cols-2">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Newsletter title</label>
                        <input type="text" name="title" value="{{ old('title', $newsletter->title) }}" required
                               class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-3 text-sm focus:border-[#c9a227] focus:outline-none focus:ring-2 focus:ring-[#c9a227]/20">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Frequency</label>
                        <input type="text" name="frequency" value="{{ old('frequency', $newsletter->frequency) }}" required
                               class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-3 text-sm focus:border-[#c9a227] focus:outline-none focus:ring-2 focus:ring-[#c9a227]/20">
                    </div>
                </div>

                <div class="mt-5">
                    <label class="block text-sm font-semibold text-gray-700">Mailchimp signup URL</label>
                    <input type="url" name="signup_url" value="{{ old('signup_url', $newsletter->signup_url) }}" required
                           class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-3 text-sm focus:border-[#c9a227] focus:outline-none focus:ring-2 focus:ring-[#c9a227]/20">
                </div>

                <div class="mt-5">
                    <label class="block text-sm font-semibold text-gray-700">Homepage summary</label>
                    <textarea name="summary" rows="4" required
                              class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-3 text-sm leading-6 focus:border-[#c9a227] focus:outline-none focus:ring-2 focus:ring-[#c9a227]/20">{{ old('summary', $newsletter->summary) }}</textarea>
                </div>

                <div class="mt-5">
                    <label class="block text-sm font-semibold text-gray-700">Newsletter text editor</label>
                    <textarea name="body" rows="12"
                              class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-3 text-sm leading-6 focus:border-[#c9a227] focus:outline-none focus:ring-2 focus:ring-[#c9a227]/20">{{ old('body', $newsletter->body) }}</textarea>
                    <p class="mt-2 text-xs text-gray-500">Use this area for draft copy, campaign notes, or text to paste into Mailchimp.</p>
                </div>

                <label class="mt-5 flex items-center gap-3 rounded-lg border border-gray-200 bg-gray-50 px-4 py-3 text-sm font-medium text-gray-700">
                    <input type="checkbox" name="is_active" value="1" @checked(old('is_active', $newsletter->is_active))
                           class="h-4 w-4 rounded border-gray-300 text-[#0a1a3a] focus:ring-[#c9a227]">
                    Show newsletter signup on homepage
                </label>

                <div class="mt-6 flex justify-end">
                    <button type="submit"
                            class="rounded-lg bg-[#0a1a3a] px-6 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-[#123061]">
                        Save newsletter
                    </button>
                </div>
            </form>

            <aside class="space-y-6">
                <section class="rounded-2xl border border-[#c9a227]/30 bg-[#fffaf0] p-6 shadow-sm">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#8b6f18]">{{ $newsletter->frequency }} newsletter</p>
                    <h3 class="mt-2 text-2xl font-semibold text-[#0a1a3a]">{{ $newsletter->title }}</h3>
                    <p class="mt-3 text-sm leading-6 text-gray-700">{{ $newsletter->summary }}</p>
                    <a href="{{ $newsletter->signup_url }}" target="_blank" rel="noopener"
                       class="mt-5 inline-flex rounded-md bg-[#0a1a3a] px-4 py-2 text-sm font-semibold text-white">
                        Preview signup link
                    </a>
                </section>

                <section class="rounded-2xl border border-gray-200 bg-[#0a1a3a] p-6 text-white shadow-sm">
                    <h3 class="text-lg font-semibold">Safe setup</h3>
                    <ul class="mt-5 space-y-3 text-sm leading-6 text-gray-200">
                        <li class="rounded-xl bg-white/10 p-4">Subscribers continue to be handled by Mailchimp.</li>
                        <li class="rounded-xl bg-white/10 p-4">This editor only changes website newsletter text and notes.</li>
                        <li class="rounded-xl bg-white/10 p-4">Saved text is escaped when displayed, keeping the admin area safe.</li>
                    </ul>
                </section>
            </aside>
        </div>
    @else
        <div class="rounded-2xl border border-yellow-200 bg-yellow-50 p-6 text-yellow-900">
            Newsletter table is ready, but no newsletter record exists yet. Run migrations to seed the default newsletter.
        </div>
    @endif
</div>
@endsection
