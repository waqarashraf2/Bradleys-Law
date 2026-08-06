@extends('layouts.app')

@section('title', 'Contact — Bradleys Law')
@section('meta_description', 'Contact Bradleys Law in London for specialist advice on insurance litigation, construction disputes, arbitration, adjudication, and commercial legal matters.')
@section('canonical', route('contact'))

@section('content')
<section id="contact" 
  class="relative overflow-hidden py-40 px-6 bg-cover bg-center bg-no-repeat"
  style="background-image: url('https://bradleyslaw.com/storage/insights/bradly-about.jpeg');">

  <!-- Dark Overlay -->
  <div class="absolute inset-0 bg-[#0a1a3a]/50"></div>

  <!-- Content Wrapper -->
  <div class="relative z-10 max-w-7xl mx-auto">
    
    <!-- Title -->
    <div class="text-center mb-16">
      <h1 id="contact-title" class="text-4xl md:text-5xl font-playfair text-white font-semibold mb-4">
        Contact Bradleys Law
      </h1>
      <p id="contact-subtitle" class="text-gray-300 text-lg">
        Strength. Reliability. Organisation. Let's start a conversation.
      </p>
    </div>

    <!-- Grid Layout -->
    <div class="grid md:grid-cols-2 gap-12 items-start">
      
      <!-- Contact Form -->
      <div id="contact-form" class="bg-white/10 backdrop-blur-md border border-white/20 p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-700">
          
          <!-- SUCCESS MESSAGE -->
          @if (session('success'))
              <div class="mb-6 p-4 rounded-lg bg-green-600/20 border border-green-600 text-green-300 text-center font-medium">
                  {{ session('success') }}
              </div>
          @endif

          <!-- VALIDATION ERRORS -->
          @if ($errors->any())
              <div class="mb-6 p-4 rounded-lg bg-red-600/20 border border-red-600 text-red-300">
                  <ul class="list-disc pl-4">
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          
        <form action="{{ route('contact.store') }}" method="POST" class="space-y-10 relative z-10">
          @csrf

          <div class="relative">
            <label for="name"
              class="absolute -top-3 left-5 bg-[#0a1a3a] px-2 text-sm text-[#c9a227] font-medium">
              Full Name
            </label>
            <input id="name" name="name" type="text" value="{{ old('name') }}" required
              class="block w-full border-2 border-white/30 rounded-xl px-4 py-4 bg-transparent text-white placeholder-gray-400 focus:border-[#c9a227] outline-none transition-all duration-300">
          </div>

          <div class="relative">
            <label for="email"
              class="absolute -top-3 left-5 bg-[#0a1a3a] px-2 text-sm text-[#c9a227] font-medium">
              Email Address
            </label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" required
              class="block w-full border-2 border-white/30 rounded-xl px-4 py-4 bg-transparent text-white placeholder-gray-400 focus:border-[#c9a227] outline-none transition-all duration-300">
          </div>

          <div class="relative">
            <label for="message"
              class="absolute -top-3 left-5 bg-[#0a1a3a] px-2 text-sm text-[#c9a227] font-medium">
              Message
            </label>
            <textarea id="message" name="message" rows="4" required
              class="block w-full border-2 border-white/30 rounded-xl px-4 py-4 bg-transparent text-white placeholder-gray-400 focus:border-[#c9a227] outline-none transition-all duration-300">{{ old('message') }}</textarea>
          </div>

          <button type="submit"
            class="relative w-full bg-[#c9a227] text-[#0a1a3a] font-semibold rounded-lg px-8 py-3 transition-all duration-500 hover:bg-[#b18e1e] hover:-translate-y-1 shadow-md">
            Send Message
          </button>
        </form>
      </div>

      <!-- Contact Info -->
      <div id="contact-info" class="space-y-6 text-white">
        <div class="p-6 border-l-4 border-[#c9a227] bg-white/10 backdrop-blur-md rounded-xl shadow-md hover:shadow-lg transition-all duration-300">
          <h2 class="text-xl font-semibold text-[#c9a227] mb-2">Office Address</h2>
          <p class="text-gray-200">22 Bishopsgate, London, EC2N 4BQ. United Kingdom</p>
        </div>

        <div class="p-6 border-l-4 border-[#c9a227] bg-white/10 backdrop-blur-md rounded-xl shadow-md hover:shadow-lg transition-all duration-300">
          <h2 class="text-xl font-semibold text-[#c9a227] mb-2">Telephone</h2>
          <a href="tel:+447747767444" class="text-[#c9a227] font-medium hover:underline">
            07747767444
          </a>
        </div>

        <div class="p-6 border-l-4 border-[#c9a227] bg-white/10 backdrop-blur-md rounded-xl shadow-md hover:shadow-lg transition-all duration-300">
          <h2 class="text-xl font-semibold text-[#c9a227] mb-2">Email</h2>
          <a href="mailto:info@bradleyslaw.com" class="text-[#c9a227] font-medium hover:underline">
            info@bradleyslaw.com
          </a>
        </div>

        <!-- Google Map -->
        <div class="rounded-xl overflow-hidden border border-white/20 shadow-lg mt-8">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.779434660042!2d-0.0815826!3d51.5144635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876034f1c0e6b5f%3A0x6a63a1c1f1b1b1b1!2s22%20Bishopsgate%2C%20London%2C%20EC2N%204BQ!5e0!3m2!1sen!2suk!4v1700000000000!5m2!1sen!2suk"
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>

@push('scripts')
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
