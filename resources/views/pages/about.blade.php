@extends('layouts.app')

@section('title', 'About Bradleys Law')
@section('meta_description', 'Learn about Bradleys Law, a London law firm focused on insurance litigation, construction disputes, arbitration, adjudication, and specialist commercial legal advice.')
@section('canonical', route('about'))

@section('content')

{{-- ================= HERO SECTION ================= --}}
<section id="hero" class="relative min-h-[90vh] flex items-center justify-center overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 bg-cover bg-center scale-105 animate-slow-zoom"
        style="background-image: url('{{ asset('storage/insights/bradly-about.jpeg') }}');">
    </div>

    <!-- Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-[#0b1227]/90 via-[#0b1227]/50 to-[#0b1227]"></div>

    <!-- Hero Content -->
    <div class="relative z-20 text-center px-6">
        <h1 class="text-5xl md:text-7xl font-playfair text-white font-bold mb-6 tracking-wide opacity-0 translate-y-10">
            About <span class="text-[#c9a227]">Bradleys Law</span>
        </h1>
        <p class="text-gray-200 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed opacity-0 translate-y-10">
           A City based law firm in London – where tradition meets innovation and excellence.
        </p>

        <div class="mt-10 opacity-0 scale-90">
            <a href="#about"
                class="bg-[#c9a227] hover:bg-[#b08e1b] transition-all duration-300 text-[#0b1227] px-8 py-3 font-semibold rounded-full shadow-lg hover:shadow-[#c9a227]/40">
                Discover Our Story
            </a>
        </div>
    </div>
</section>



{{-- ================= INTRO SECTION ================= --}}
<section id="about" class="relative py-28 px-6 md:px-12 text-gray-800">
    <!-- Background -->
    <div class="absolute inset-0 bg-cover bg-center opacity-15"
        style="background-image: url('https://img.freepik.com/premium-photo/photo-modern-office-space-glass-partitions_611870-38371.jpg');"></div>
    <div class="absolute inset-0 bg-white/45 backdrop-blur-md"></div>

    <div class="relative z-10 max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">
        <div class="relative opacity-0 translate-x-[-40px]">
            <div class="absolute -inset-3 bg-gradient-to-tr from-[#c9a227]/40 to-transparent rounded-3xl blur-md"></div>
            <img src="https://www.empireoffice.com/wp-content/uploads/2019/09/MB20170622_Horizon_IMG_0092.jpg"
                alt="Bradleys Law Office"
                class="relative rounded-3xl shadow-2xl border border-gray-200 transform hover:scale-[1.03] transition-transform duration-500">
        </div>

        <div class="opacity-0 translate-x-10">
            <h2 class="text-4xl font-playfair text-[#0b1227] mb-6 font-semibold">Our Firm</h2>
            <p class="text-gray-700 text-lg leading-relaxed mb-5">
                Bradleys Law is a distinguished London-based firm specialising in <strong>insurance litigation</strong> and
                <strong>construction law</strong>. We combine deep legal expertise with commercial insight to achieve decisive outcomes.
            </p>
            <p class="text-gray-700 text-lg leading-relaxed mb-6">
                We reflect the sophistication of a large practice while maintaining the personal attention of a boutique firm.
            </p>
            
            <!-- Additional Professional Content -->
            <p class="text-gray-700 text-lg leading-relaxed mb-5">
                Our strategic approach integrates comprehensive risk assessment with proactive legal solutions, 
                ensuring our clients navigate complex regulatory landscapes with confidence and clarity.
            </p>
            <p class="text-gray-700 text-lg leading-relaxed mb-6">
                We pride ourselves on delivering bespoke legal strategies that align with our clients' commercial objectives, 
                combining technical precision with practical business acumen.
            </p>
        </div>
    </div>
</section>


{{-- ================= JOHN BRADLEY SECTION ================= --}}
<section class="relative py-24 px-4 sm:px-10 lg:px-20 bg-gradient-to-br from-[#0b1227] to-[#1a2a4a] text-white overflow-hidden">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-2xl sm:text-3xl lg:text-3xl font-playfair text-center mb-14 sm:mb-16 opacity-0 translate-y-10 transition-all duration-700">
      Meet Our Managing Director / Chief Executive Officer
    </h2>

    <div class="flex flex-col md:flex-row md:items-start md:space-x-12 lg:space-x-16">
      <!-- Image Section -->
      <div class="relative flex justify-center md:justify-start mb-10 md:mb-0 md:w-1/3 lg:w-1/4 opacity-0 translate-x-[-40px] transition-all duration-700">
        <div class="absolute -inset-3 bg-gradient-to-tr from-[#c9a227]/40 to-transparent rounded-3xl blur-md"></div>
        <img 
          src="{{ asset('storage/insights/bradly-ai1.png') }}"
          alt="John Bradley - Managing Director"
          class="relative w-74 sm:w-82 lg:w-80 rounded-3xl shadow-2xl border border-[#c9a227]/30 transform hover:scale-[1.03] transition-transform duration-500"
        >
      </div>

      <!-- Text Section -->
      <div class="md:w-2/3 lg:w-3/4 opacity-0 translate-x-10 transition-all duration-700">
        <h3 class="text-2xl sm:text-3xl lg:text-3xl font-playfair mb-4">
          John Bradley, BSc, MSc, FCIArb, Solicitor
        </h3>
<p class="text-gray-300 text-base sm:text-lg leading-relaxed mb-5">
  John is an expert in insurance and construction-related dispute resolution, with 30 years of experience conducting litigation for Insurers, Brokers, Policyholders, Professionals, Developers, Employers, Contractors, and Sub-Contractors throughout the UK. He has significant experience in coverage and defence work in the insurance market and specialises in insurance, construction, and engineering law.
</p>
<p class="text-gray-300 text-base sm:text-lg leading-relaxed mb-5">
  As well as being a specialist litigator, including Court of Appeal cases, John also has wide-ranging experience of mediation, arbitration, and adjudication, as well as expert determination and early neutral evaluation, and is a strong proponent of ADR.
</p>
<p class="text-gray-300 text-base sm:text-lg leading-relaxed mb-5">
  John is well known in the insurance and construction industries and is recognised for being a first-class and highly experienced litigator.
</p>
<p class="text-gray-300 text-base sm:text-lg leading-relaxed mb-5">
  John also runs the Contractors Legal Group ("CLG"), the main umbrella association for main contractors, and sits on the main boards of the Joint Contracts Tribunal ("JCT") and Construction Industry Publications ("CIP").
</p>
<p class="text-gray-300 text-base sm:text-lg leading-relaxed mb-5">
  Prior to qualifying as a solicitor, John worked as a Quantity Surveyor in Private Practice, ensuring that the projects he worked on were completed on time, within budget, and to the required standard.
</p>


        <div class="mt-8">
          <a href="mailto:john.bradley@bradleyslaw.com"
            class="bg-[#c9a227] hover:bg-[#b08e1b] transition-all duration-300 text-[#0b1227] px-8 py-3 font-semibold rounded-full shadow-lg hover:shadow-[#c9a227]/40">
            Contact John Bradley
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


{{-- ================= INDUSTRY CONTEXT SECTION ================= --}}
<!--<section class="relative py-28 px-4 md:px-12 bg-white text-gray-800">-->
<!--    <div class="max-w-7xl mx-auto">-->
<!--        <h2 class="text-4xl font-playfair text-center mb-6 opacity-0 translate-y-10">Our Legal Landscape</h2>-->
<!--        <p class="text-xl text-gray-600 text-center max-w-3xl mx-auto mb-16 opacity-0 translate-y-10">-->
<!--            Bradleys Law operates alongside distinguished firms in the insurance and construction legal sectors-->
<!--        </p>-->
        
<!--        <div class="grid md:grid-cols-2 gap-12">-->
<!--            <div class="opacity-0 translate-x-[-40px]">-->
<!--                <h3 class="text-2xl font-playfair mb-6 text-[#0b1227]">Insurance Law Specialists</h3>-->
<!--                <div class="space-y-6">-->
<!--                    <div class="bg-gray-50 rounded-2xl p-6 shadow-md hover:shadow-lg transition">-->
<!--                        <h4 class="text-xl font-semibold mb-3">Clyde & Co</h4>-->
<!--                        <p class="text-gray-700">A global firm with extensive expertise in insurance law, particularly in Professional Indemnity Insurance, Contractors All Risk Insurance, Directors and Officers Insurance, Energy and Environmental Insurance, Construction Defect Insurance and General Liability Insurance.</p>-->
<!--                    </div>-->
<!--                    <div class="bg-gray-50 rounded-2xl p-6 shadow-md hover:shadow-lg transition">-->
<!--                        <h4 class="text-xl font-semibold mb-3">DWF</h4>-->
<!--                        <p class="text-gray-700">Offers comprehensive Insurance Advisory Services with deep expertise in the insurance areas that Bradleys Law specializes in, serving as a valuable resource and benchmark in the industry.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            
<!--            <div class="opacity-0 translate-x-10">-->
<!--                <h3 class="text-2xl font-playfair mb-6 text-[#0b1227]">Construction Law Specialists</h3>-->
<!--                <div class="space-y-6">-->
<!--                    <div class="bg-gray-50 rounded-2xl p-6 shadow-md hover:shadow-lg transition">-->
<!--                        <h4 class="text-xl font-semibold mb-3">Barton Legal</h4>-->
<!--                        <p class="text-gray-700">A specialist firm focused exclusively on construction law, providing dedicated expertise in construction disputes and contracts.</p>-->
<!--                    </div>-->
<!--                    <div class="bg-gray-50 rounded-2xl p-6 shadow-md hover:shadow-lg transition">-->
<!--                        <h4 class="text-xl font-semibold mb-3">Fenwick Elliott</h4>-->
<!--                        <p class="text-gray-700">Recognized as construction and energy law specialists with a strong reputation for handling complex construction disputes and providing strategic legal advice to industry participants.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        
<!--        <div class="mt-16 bg-gradient-to-r from-[#0b1227] to-[#1a2a4a] rounded-3xl p-10 text-center opacity-0 translate-y-10">-->
<!--            <h3 class="text-3xl font-playfair text-white mb-6">Why Choose Bradleys Law?</h3>-->
<!--            <p class="text-gray-300 text-lg max-w-3xl mx-auto mb-8">-->
<!--                While we respect and acknowledge the expertise of our peers in the industry, Bradleys Law offers a unique combination of deep insurance litigation experience, specialized construction law knowledge, and the personal attention of a boutique firm with the resources of a larger practice.-->
<!--            </p>-->
<!--            <a href="/contact"-->
<!--                class="bg-[#c9a227] hover:bg-[#b08e1b] transition-all duration-300 text-[#0b1227] px-10 py-4 font-semibold rounded-full shadow-lg hover:shadow-[#c9a227]/50">-->
<!--                Schedule a Consultation-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->



{{-- ================= CTA SECTION ================= --}}


<section class="relative py-32 text-center overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 bg-cover bg-center"
        style="background-image: url('https://tse4.mm.bing.net/th/id/OIP.y-JCbcWu_PkOmnJzr4e1KQHaE7?cb=12&rs=1&pid=ImgDetMain&o=7&rm=3');"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-[#0b1227]/70 to-[#0b1227]/75"></div>

    <div class="relative z-10 max-w-3xl mx-auto text-white px-6">
        <h2 class="text-4xl font-playfair mb-6 opacity-0 translate-y-10">A Law Firm You Can Trust</h2>
        <p class="text-gray-300 text-lg leading-relaxed mb-10 opacity-0 translate-y-10">
            Bradleys Law stands for precision, professionalism, and client-first dedication.
            We don't just handle cases — we protect your reputation and your future.
        </p>
        <a href="/contact"
            class="bg-[#c9a227] hover:bg-[#b08e1b] transition-all duration-300 text-[#0b1227] px-10 py-4 font-semibold rounded-full shadow-lg hover:shadow-[#c9a227]/50 opacity-0 scale-90">
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

    const hero = gsap.timeline({ defaults: { duration: 1, ease: 'power3.out' } });
    hero.to('#hero h1', { opacity: 1, y: 0 })
        .to('#hero p', { opacity: 1, y: 0 }, '-=0.4')
        .to('#hero div.opacity-0', { opacity: 1, scale: 1 }, '-=0.3');

    gsap.utils.toArray('.opacity-0').forEach((el) => {
        gsap.to(el, {
            scrollTrigger: { trigger: el, start: 'top 85%' },
            opacity: 1, y: 0, x: 0, scale: 1,
            duration: 1.2, ease: 'power3.out'
        });
    });

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

{{-- Custom Animations --}}
<style>
.animate-slow-zoom {
    animation: zoomIn 40s ease-in-out infinite alternate;
}
@keyframes zoomIn {
    0% { transform: scale(1); }
    100% { transform: scale(1.1); }
}
</style>
@endsection
