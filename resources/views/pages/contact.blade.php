@extends('layouts.app')

@section('title', 'Contact — Bradleys Law')

@section('content')
<section id="contact" class="relative overflow-hidden py-10 px-4 bg-white">
  <!-- Title -->
  <div class="max-w-4xl mx-auto text-center mb-14">
    <h1 class="text-4xl md:text-5xl font-playfair text-[#1a2238] font-semibold mb-4" id="contact-title">
      Contact Bradleys Law
    </h1>
    <p class="text-gray-600 text-lg" id="contact-subtitle">
      Strength. Reliability. Organisation. Let’s start a conversation.
    </p>
  </div>

  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-start">
    <!-- Contact Form -->
    <div id="contact-form" class="bg-white p-8 rounded-2xl border border-[#c9a227]/40 shadow-lg hover:shadow-2xl transition-all duration-700">
      <form action="{{ route('contact.store') }}" method="POST" class="space-y-10 relative z-10">
        @csrf

        <!-- Floating Border Label Input -->
        <div class="relative">
          <label for="name"
            class="absolute -top-3 left-5 bg-white px-2 text-sm text-[#1a2238] font-medium transition-all duration-300">
            Full Name
          </label>
          <input id="name" name="name" type="text" value="{{ old('name') }}" required
            class="block w-full border-2 border-gray-300 rounded-xl px-4 py-4 text-gray-900 focus:border-[#c9a227] focus:ring-0 outline-none transition-all duration-300 hover:border-[#c9a227]">
        </div>

        <div class="relative">
          <label for="email"
            class="absolute -top-3 left-5 bg-white px-2 text-sm text-[#1a2238] font-medium transition-all duration-300">
            Email Address
          </label>
          <input id="email" name="email" type="email" value="{{ old('email') }}" required
            class="block w-full border-2 border-gray-300 rounded-xl px-4 py-4 text-gray-900 focus:border-[#c9a227] focus:ring-0 outline-none transition-all duration-300 hover:border-[#c9a227]">
        </div>

        <div class="relative">
          <label for="message"
            class="absolute -top-3 left-5 bg-white px-2 text-sm text-[#1a2238] font-medium transition-all duration-300">
            Message
          </label>
          <textarea id="message" name="message" rows="4" required
            class="block w-full border-2 border-gray-300 rounded-xl px-4 py-4 text-gray-900 focus:border-[#c9a227] focus:ring-0 outline-none transition-all duration-300 hover:border-[#c9a227]"></textarea>
        </div>

        <button type="submit"
          class="relative w-full bg-[#c9a227] text-white font-semibold rounded-lg px-8 py-3 transition-all duration-500 hover:bg-[#b18e1e] hover:-translate-y-1 shadow-md">
          Send Message
        </button>
      </form>
    </div>

    <!-- Contact Info + Map -->
    <div id="contact-info" class="space-y-6">
      <div class="p-6 border-l-4 border-[#c9a227] bg-gray-50 rounded-xl shadow-sm hover:shadow-md transition-all duration-300">
        <h2 class="text-xl font-semibold text-[#1a2238] mb-2">Office Address</h2>
        <p class="text-gray-700">32 Woodville Road, London, EN5 5HA</p>
      </div>

      <div class="p-6 border-l-4 border-[#c9a227] bg-gray-50 rounded-xl shadow-sm hover:shadow-md transition-all duration-300">
        <h2 class="text-xl font-semibold text-[#1a2238] mb-2">Email</h2>
        <a href="mailto:john.bradley@bradleyslaw.com" class="text-[#c9a227] font-medium hover:underline">
          john.bradley@bradleyslaw.com
        </a>
      </div>

      <div class="p-6 border-l-4 border-[#c9a227] bg-gray-50 rounded-xl shadow-sm hover:shadow-md transition-all duration-300">
        <h2 class="text-xl font-semibold text-[#1a2238] mb-2">Business Hours</h2>
        <p class="text-gray-700">Monday – Friday: 9:00 AM – 5:30 PM</p>
        <p class="text-gray-700">Saturday – Sunday: Closed</p>
      </div>

      <!-- Google Map -->
      <div class="rounded-xl overflow-hidden border border-gray-200 shadow-md mt-8">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.2370611119485!2d-0.173484!3d51.652357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487619b6ff1e8f2b%3A0xa6c11f1dc1b53f9e!2s32%20Woodville%20Rd%2C%20London%20EN5%205HA!5e0!3m2!1sen!2suk!4v1700000000000!5m2!1sen!2suk"
          width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </div>
</section>

@push('scripts')
<!-- GSAP Animation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    gsap.from("#contact-title", { y: -40, opacity: 0, duration: 1, ease: "power3.out" });
    gsap.from("#contact-subtitle", { y: -20, opacity: 0, delay: 0.2, duration: 1, ease: "power3.out" });
    gsap.from("#contact-form", { x: -100, opacity: 0, delay: 0.4, duration: 1.2, ease: "power3.out" });
    gsap.from("#contact-info", { x: 100, opacity: 0, delay: 0.6, duration: 1.2, ease: "power3.out" });
  });
</script>
@endpush
@endsection
