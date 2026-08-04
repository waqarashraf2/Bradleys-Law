<header id="site-header" class="fixed top-7 left-1/2 -translate-x-1/2 w-[95%] sm:w-[90%] md:w-[85%] z-50 transition-all duration-300 rounded-2xl">
  <div class="header-inner backdrop-blur-xl bg-white/40 border border-white/20 rounded-t-2xl 
              shadow-[0_8px_30px_rgba(10,26,58,0.15)] 
              flex justify-between items-center px-4 sm:px-6 md:px-10 py-3 sm:py-4 transition-all duration-500">

    <!-- Logo -->
    <a href="{{ route('home') }}" class="flex items-center gap-2">
      <div class="text-xl sm:text-2xl md:text-3xl font-playfair font-semibold tracking-tight text-[#0a1a3a]">
        Bradleys<span class="text-[#c9a227]">Law</span>
      </div>
    </a>

    <!-- Desktop Nav -->
    <nav class="hidden md:flex items-center gap-6 lg:gap-8 text-[15px] font-medium text-gray-700">
      @php
        $links = [
          ['name' => 'Home', 'route' => 'home'],
          ['name' => 'About', 'route' => 'about'],
          ['name' => 'Expertise', 'route' => 'expertise.index'],
          ['name' => 'Legal & Compliance', 'route' => 'legal'],
          ['name' => 'Login', 'route' => 'auth.form'],
        ];
      @endphp
      @foreach($links as $link)
        <a href="{{ route($link['route']) }}" 
           class="relative text-gray-700 hover:text-[#0a1a3a] transition-all duration-300 group">
          <span>{{ $link['name'] }}</span>
          <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#c9a227] transition-all duration-300 group-hover:w-full"></span>
        </a>
      @endforeach
    </nav>

    <!-- CTA -->
    <a href="{{ route('contact') }}" 
       class="hidden md:inline-block px-5 py-2.5 rounded-full 
              bg-gradient-to-r from-[#0a1a3a] to-[#1e3a5f] text-white font-medium 
              shadow-md hover:shadow-lg hover:scale-[1.03] transition-all duration-300">
      Get in Touch
    </a>

    <!-- Mobile Menu Button -->
    <button id="mobile-menu-btn" 
            class="md:hidden w-10 h-10 flex items-center justify-center rounded-lg 
                   bg-white/50 backdrop-blur-md border border-white/20">
      <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" 
           class="w-6 h-6 text-[#0a1a3a]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
      <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" 
           class="w-6 h-6 text-[#0a1a3a] hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>
  </div>

<!-- 📍 Address bar (same bg + blur, unified scroll effect) -->
<div id="header-address" 
     class="backdrop-blur-xl bg-white/40 border border-t-0 border-white/20 rounded-b-2xl py-1
            text-center text-[13px] sm:text-sm font-semibold text-[#d4af37] transition-all duration-500">
  22 Bishopsgate, London, EC2N 4BQ
</div>


  <!-- Mobile Menu -->
  <div id="mobile-menu" 
       class="hidden animate-fade-down mt-2 backdrop-blur-xl bg-white/70 border border-white/20 
              rounded-2xl shadow-lg overflow-hidden transition-all duration-500 md:hidden">
    <div class="flex flex-col p-5 space-y-3 text-gray-700 font-medium text-[15px]">
      @foreach($links as $link)
        <a href="{{ route($link['route']) }}" 
           class="hover:text-[#c9a227] transition text-center py-2 rounded-md hover:bg-[#f8f9fb]">
          {{ $link['name'] }}
        </a>
      @endforeach
      <a href="{{ route('contact') }}" 
         class="mt-3 text-center bg-gradient-to-r from-[#0a1a3a] to-[#1e3a5f] text-white 
                py-2.5 rounded-full shadow-md hover:scale-[1.02] transition-all">
        Get in Touch
      </a>
    </div>
  </div>
</header>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const btn = document.getElementById("mobile-menu-btn");
  const menu = document.getElementById("mobile-menu");
  const openIcon = document.getElementById("menu-icon");
  const closeIcon = document.getElementById("close-icon");
  const header = document.getElementById("site-header");
  const addressBar = document.getElementById("header-address");

  btn.addEventListener("click", () => {
    const isOpen = !menu.classList.contains("hidden");
    menu.classList.toggle("hidden");
    openIcon.classList.toggle("hidden");
    closeIcon.classList.toggle("hidden");

    if (!isOpen) {
      menu.classList.add("animate-fade-down");
      setTimeout(() => menu.classList.remove("animate-fade-down"), 500);
    }
  });

  // Header & address background change on scroll
  let lastScroll = 0;
  window.addEventListener("scroll", () => {
    const current = window.pageYOffset;

    if (current > 50) {
      header.classList.add("bg-white/90", "shadow-lg");
      addressBar.classList.replace("bg-white/40", "bg-white/90");
    } else {
      header.classList.remove("bg-white/90", "shadow-lg");
      addressBar.classList.replace("bg-white/90", "bg-white/40");
    }

    // Hide header on scroll down, show on scroll up
    if (current > lastScroll && current > 80) header.classList.add("-translate-y-full");
    else header.classList.remove("-translate-y-full");
    lastScroll = current;
  });
});
</script>

<!-- Add Tailwind animation class -->
<style>
@keyframes fade-down {
  from { opacity: 0; transform: translateY(-10px); }
  to { opacity: 1; transform: translateY(0); }
}
.animate-fade-down {
  animation: fade-down 0.3s ease-out;
}
</style>
