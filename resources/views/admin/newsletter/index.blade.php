@extends('admin.layouts.app')

@section('title', 'Newsletter - Bradleys Law')
@section('page_title', 'Newsletter')

@section('content')
<div class="max-w-6xl mx-auto space-y-8">
    <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-[#c9a227]">Mailchimp signup</p>
            <h2 class="mt-2 text-3xl font-semibold text-[#0a1a3a]">Bradleys Briefest Briefs</h2>
            <p class="mt-3 max-w-3xl text-gray-600">
                Manage the public newsletter signup message and open the Mailchimp hosted signup form from one place.
            </p>
        </div>

        <a href="{{ $newsletter['url'] }}" target="_blank" rel="noopener"
           class="inline-flex items-center justify-center rounded-lg bg-[#0a1a3a] px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-[#123061]">
            Open Mailchimp form
        </a>
    </div>

    <div class="grid gap-6 lg:grid-cols-[1.1fr_0.9fr]">
        <section class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-[#0a1a3a]">Homepage copy</h3>
            <div class="mt-5 rounded-xl border border-[#c9a227]/30 bg-[#fffaf0] p-5">
                <p class="text-sm font-semibold uppercase tracking-[0.18em] text-[#8b6f18]">{{ $newsletter['frequency'] }} newsletter</p>
                <h4 class="mt-2 text-2xl font-semibold text-[#0a1a3a]">{{ $newsletter['name'] }}</h4>
                <p class="mt-3 text-gray-700">{{ $newsletter['description'] }}</p>
            </div>

            <dl class="mt-6 grid gap-4 text-sm md:grid-cols-2">
                <div class="rounded-xl bg-gray-50 p-4">
                    <dt class="font-semibold text-gray-500">Signup URL</dt>
                    <dd class="mt-2 break-all text-[#0a1a3a]">{{ $newsletter['url'] }}</dd>
                </div>
                <div class="rounded-xl bg-gray-50 p-4">
                    <dt class="font-semibold text-gray-500">Platform</dt>
                    <dd class="mt-2 text-[#0a1a3a]">Mailchimp hosted form</dd>
                </div>
            </dl>
        </section>

        <aside class="rounded-2xl border border-gray-200 bg-[#0a1a3a] p-6 text-white shadow-sm">
            <h3 class="text-lg font-semibold">Implementation notes</h3>
            <ul class="mt-5 space-y-4 text-sm leading-6 text-gray-200">
                <li class="rounded-xl bg-white/10 p-4">Visitors click the homepage newsletter button and subscribe directly through Mailchimp.</li>
                <li class="rounded-xl bg-white/10 p-4">No Mailchimp API key is required for the hosted signup form.</li>
                <li class="rounded-xl bg-white/10 p-4">Subscriber data remains inside Mailchimp, which is the best place for newsletter campaigns and compliance tools.</li>
            </ul>
        </aside>
    </div>
</div>
@endsection
