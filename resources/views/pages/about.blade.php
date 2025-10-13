@extends('layouts.app')

@section('title', 'About Bradleys Law')

@section('content')
{{-- ================= HERO SECTION ================= --}}
<section id="hero" class="relative h-[85vh] flex items-center justify-center overflow-hidden bg-[#0b1227]">
    <div class="absolute inset-0 bg-cover bg-center opacity-40" 
         style="background-image: url('https://th.bing.com/th/id/R.17bf1c5533bb533eafd7f670392c6540?rik=LQfbFBq3Ln62bw&riu=http%3a%2f%2fimages.unsplash.com%2fphoto-1520114878144-6123749968dd%3fcrop%3dentropy%26cs%3dtinysrgb%26fit%3dmax%26fm%3djpg%26ixid%3dMnwxMjA3fDB8MXxzZWFyY2h8MXx8bG9uZG9uJTIwYXQlMjBuaWdodHx8MHx8fHwxNjI3Nzc5Njcx%26ixlib%3drb-1.2.1%26q%3d80%26w%3d1080&ehk=WYyrRno%2fCQ8eTb6dkBW5HvPG%2fcAx4%2bJkykDAsyh3Yi0%3d&risl=&pid=ImgRaw&r=0"></div>

    <div class="absolute inset-0 bg-gradient-to-b from-[#0b1227]/60 via-[#0b1227]/90 to-[#0b1227]"></div>

    <div class="relative z-20 text-center px-6">
        <h1 class="text-6xl md:text-7xl font-playfair text-white font-bold mb-6 opacity-0 translate-y-10 tracking-wide">
            About <span class="text-[#c9a227]">Bradleys Law</span>
        </h1>
        <p class="text-gray-200 text-xl max-w-2xl mx-auto opacity-0 translate-y-10 leading-relaxed">
            A London-based legal practice combining traditional excellence with modern precision.
        </p>

        <div class="mt-10 opacity-0 scale-90">
            <a href="#about" 
               class="bg-[#c9a227] hover:bg-[#b08e1b] transition-colors duration-300 text-[#0b1227] px-8 py-3 font-semibold rounded-full shadow-lg hover:shadow-[#c9a227]/50">
               Discover Our Story
            </a>
        </div>
    </div>
</section>

{{-- ================= INTRO SECTION ================= --}}
<section id="about" class="relative bg-white py-24 px-6 md:px-10 overflow-hidden">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#c9a227]/10 rounded-full blur-3xl opacity-40 animate-pulse-slow"></div>
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-20 items-center">
        <div class="opacity-0 translate-x-[-40px]">
            <img src="https://th.bing.com/th/id/R.2cfe8eb10a59a87e3b65ca4d839a7442?rik=CJ02pkjwj1lacg&pid=ImgRaw&r=0" alt="Bradleys Law Office"
                class="rounded-3xl shadow-2xl border border-gray-100 transform hover:scale-[1.02] transition-transform duration-500">
        </div>
        <div class="opacity-0 translate-x-10">
            <h2 class="text-4xl font-playfair text-[#1a2238] mb-6 font-semibold">Our Firm</h2>
            <p class="text-gray-700 text-lg leading-relaxed mb-5">
                Bradleys Law is a distinguished London-based firm specialising in <strong>insurance litigation</strong> and 
                <strong>construction law</strong>. We blend deep legal knowledge with commercial awareness to deliver
                efficient and decisive outcomes.
            </p>
            <p class="text-gray-700 text-lg leading-relaxed mb-6">
                Our firm reflects the scale and professionalism of a large practice, while maintaining the agility,
                responsiveness, and personal service of a boutique law office.
            </p>
            <div class="grid grid-cols-3 gap-6 mt-8">
                <div class="text-center">
                    <span class="text-5xl font-bold text-[#c9a227] counter" data-target="30">0</span>
                    <p class="text-gray-600 text-sm mt-2">Years Experience</p>
                </div>
                <div class="text-center">
                    <span class="text-5xl font-bold text-[#c9a227] counter" data-target="200">0</span>
                    <p class="text-gray-600 text-sm mt-2">Cases Won</p>
                </div>
                <div class="text-center">
                    <span class="text-5xl font-bold text-[#c9a227] counter" data-target="50">0</span>
                    <p class="text-gray-600 text-sm mt-2">Corporate Clients</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ================= JOHN BRADLEY SECTION ================= --}}
<section id="john" class="relative bg-[#0b1227] text-white py-24 px-6 md:px-10 overflow-hidden">
    <div class="absolute left-0 top-0 w-[600px] h-[600px] bg-[#c9a227]/10 rounded-full blur-3xl opacity-30 animate-pulse-slow"></div>
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-16 items-center">
        <div class="opacity-0 translate-y-10">
            <h2 class="text-4xl font-playfair mb-6 font-semibold">John Bradley, BSc, MSc, FCIArb, Solicitor</h2>
            <p class="text-gray-300 text-lg leading-relaxed mb-4">
                John is an industry-leading expert in insurance-related dispute resolution with over 30 years of 
                litigation experience. His practice spans professional indemnity, engineering, and construction law.
            </p>
            <p class="text-gray-300 text-lg leading-relaxed mb-4">
                A Fellow of the Chartered Institute of Arbitrators, John serves on the boards of the 
                <strong>Joint Contracts Tribunal (JCT)</strong> and <strong>Construction Industry Publications (CIP)</strong>.
            </p>
            <p class="text-gray-300 text-lg leading-relaxed">
                His early background as a Quantity Surveyor gives him a rare balance of legal and technical understanding,
                ensuring precise, commercially driven outcomes for his clients.
            </p>
            <a href="mailto:john.bradley@bradleyslaw.com"
               class="inline-block mt-6 text-[#c9a227] font-semibold hover:underline">
               john.bradley@bradleyslaw.com
            </a>
        </div>
        <div class="relative opacity-0 scale-90">
            <div class="absolute -inset-2 bg-gradient-to-tr from-[#c9a227]/30 to-transparent rounded-3xl blur-lg"></div>
            <img src="{{ asset('images/john-bradley.jpg') }}" 
                 class="relative w-full rounded-3xl shadow-2xl border border-[#ffffff22] transform hover:scale-[1.03] transition-transform duration-500"
                 alt="John Bradley">
        </div>
    </div>
</section>

{{-- ================= CTA SECTION ================= --}}
<section class="relative bg-gradient-to-b from-white to-[#f8f9fb] py-20 text-center overflow-hidden">
    <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-[#c9a227]/20 rounded-full blur-3xl opacity-40 animate-pulse-slow"></div>
    <div class="max-w-3xl mx-auto relative z-10">
        <h2 class="text-4xl font-playfair text-[#1a2238] mb-4 opacity-0 translate-y-10">A Law Firm You Can Trust</h2>
        <p class="text-gray-700 text-lg leading-relaxed mb-8 opacity-0 translate-y-10">
            Bradleys Law stands for professionalism, discretion, and effectiveness.  
            We don’t just handle cases — we safeguard reputations.
        </p>
        <a href="/contact"
           class="bg-[#c9a227] hover:bg-[#b08e1b] transition-colors duration-300 text-[#0b1227] px-8 py-3 font-semibold rounded-full shadow-lg hover:shadow-[#c9a227]/50 opacity-0 scale-90">
           Contact Us Today
        </a>
    </div>
</section>

{{-- ================= GSAP ANIMATIONS ================= --}}
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollTrigger.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger);

    // Hero animation
    const hero = gsap.timeline({ defaults: { duration: 1, ease: 'power3.out' } });
    hero.to('#hero h1', { opacity: 1, y: 0 })
        .to('#hero p', { opacity: 1, y: 0 }, '-=0.4')
        .to('#hero div.opacity-0', { opacity: 1, scale: 1 }, '-=0.3');

    // Scroll-triggered animations
    gsap.utils.toArray('.opacity-0').forEach((el) => {
        gsap.to(el, {
            scrollTrigger: {
                trigger: el,
                start: 'top 85%',
            },
            opacity: 1,
            y: 0,
            x: 0,
            scale: 1,
            duration: 1.2,
            ease: 'power3.out'
        });
    });

    // Animated counters
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        let started = false;
        ScrollTrigger.create({
            trigger: counter,
            start: 'top 85%',
            onEnter: () => {
                if (started) return;
                started = true;
                const target = +counter.dataset.target;
                let current = 0;
                const increment = target / 80;
                const update = () => {
                    current += increment;
                    if (current < target) {
                        counter.textContent = Math.floor(current);
                        requestAnimationFrame(update);
                    } else {
                        counter.textContent = target;
                    }
                };
                update();
            }
        });
    });
});
</script>
@endpush

{{-- Tailwind custom animation --}}
<style>
@keyframes pulse-slow {
    0%, 100% { opacity: 0.3; transform: scale(1); }
    50% { opacity: 0.5; transform: scale(1.1); }
}
.animate-pulse-slow {
    animation: pulse-slow 6s ease-in-out infinite;
}
</style>
@endsection
