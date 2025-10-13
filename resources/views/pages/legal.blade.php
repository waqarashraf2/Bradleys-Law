@extends('layouts.app')

@section('title', 'Legal & Compliance — Bradleys Law')

@section('content')
<section 
    class="relative overflow-hidden min-h-screen flex items-center justify-center py-10 px-4"
    style="background-image: url('https://tse4.mm.bing.net/th/id/OIP.r2Rhfk8o1j3luE1W--HL1wHaE7?cb=12&rs=1&pid=ImgDetMain&o=7&rm=3'); background-size: cover; background-position: center;">
    
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/60 backdrop-blur-[2px]"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-4xl mx-auto bg-white/95 rounded-2xl shadow-xl p-6 animate-fadeIn">
        <h1 class="text-4xl font-playfair text-[#1a2238] mb-8 border-b border-[#c9a227]/40 pb-4 text-center">
            Legal & Compliance
        </h1>

        <div class="text-gray-700 space-y-6 leading-relaxed">
            <p>
                <strong>Bradleys Law Ltd</strong> t/a Bradleys Law. Companies House No: 16671772.<br>
                Registered office: 32 Woodville Road, London, EN5 5HA.<br>
                Bradleys Law Ltd is authorised and regulated by the Solicitors Regulation Authority.
            </p>

            <div>
                <h2 class="text-2xl font-semibold text-[#1a2238] mt-10 mb-3 border-l-4 border-[#c9a227] pl-3">Privacy Policy (Summary)</h2>
                <p>
                    We process personal data in accordance with UK GDPR. Personal information submitted via this website 
                    is used to respond to your enquiry and will not be shared with third parties except where necessary 
                    to respond to your instructions or as required by law.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-semibold text-[#1a2238] mt-10 mb-3 border-l-4 border-[#c9a227] pl-3">Terms of Use</h2>
                <p>
                    This website is for general information only and does not constitute legal advice. 
                    No client relationship is created by use of this website.
                </p>
            </div>
        </div>

        <div class="mt-10 text-center">
            <a href="{{ route('home') }}" 
               class="inline-block px-6 py-3 bg-[#c9a227] text-white rounded-full font-medium shadow-md hover:bg-[#b09020] transition-all duration-300">
                ← Back to Home
            </a>
        </div>
    </div>
</section>

<!-- Fade Animation -->
<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}
.animate-fadeIn {
    animation: fadeIn 0.8s ease-out forwards;
}
</style>
@endsection
