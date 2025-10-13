<header id="main-header" class="relative w-full z-50 bg-white transition-all duration-500">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
        <a href="{{ route('home') }}" class="flex items-center space-x-2">
            <div class="w-10 h-10 bg-[#0a1a3a] rounded-full flex items-center justify-center">
                <span class="text-white font-bold text-lg">B</span>
            </div>
            <div class="text-2xl font-playfair font-semibold text-[#0a1a3a]">
                Bradleys <span class="text-[#c9a227]">Law</span>
            </div>
        </a>
        
        <nav class="hidden md:flex space-x-8 text-[15px] font-medium text-gray-700">
            <a href="{{ route('home') }}" class="nav-link hover:text-[#c9a227] transition-colors duration-300">Home</a>
            <a href="{{ route('about') }}" class="nav-link hover:text-[#c9a227] transition-colors duration-300">About</a>
            <a href="{{ route('expertise.index') }}" class="nav-link hover:text-[#c9a227] transition-colors duration-300">Expertise</a>
            <a href="{{ route('insights') }}" class="nav-link hover:text-[#c9a227] transition-colors duration-300">Insights</a>
            <a href="{{ route('legal') }}" class="nav-link hover:text-[#c9a227] transition-colors duration-300">Legal & Compliance</a>
            <a href="{{ route('auth.form') }}" class="nav-link hover:text-[#c9a227] transition-colors duration-300">Login</a>
            <a href="{{ route('contact') }}" class="nav-link hover:text-[#c9a227] transition-colors duration-300">Contact</a>
        </nav>
        
        <div class="hidden md:block">
            <a href="{{ route('contact') }}" class="btn-primary">Get in Touch</a>
        </div>

        <!-- Mobile menu button -->
        <button class="md:hidden flex flex-col space-y-1" id="mobile-menu-button">
            <span class="w-6 h-0.5 bg-[#0a1a3a] transition-all"></span>
            <span class="w-6 h-0.5 bg-[#0a1a3a] transition-all"></span>
            <span class="w-6 h-0.5 bg-[#0a1a3a] transition-all"></span>
        </button>
    </div>

    <!-- Mobile menu -->
    <div class="md:hidden bg-white border-t border-gray-200 hidden" id="mobile-menu">
        <div class="px-6 py-4 space-y-4">
            <a href="{{ route('home') }}" class="block py-2 text-gray-700 hover:text-[#c9a227] transition">Home</a>
            <a href="{{ route('about') }}" class="block py-2 text-gray-700 hover:text-[#c9a227] transition">About</a>
            <a href="{{ route('expertise.index') }}" class="block py-2 text-gray-700 hover:text-[#c9a227] transition">Expertise</a>
            <a href="{{ route('insights') }}" class="block py-2 text-gray-700 hover:text-[#c9a227] transition">Insights</a>
            <a href="{{ route('legal') }}" class="block py-2 text-gray-700 hover:text-[#c9a227] transition">Legal & Compliance</a>
            <a href="{{ route('contact') }}" class="block py-2 text-gray-700 hover:text-[#c9a227] transition">Contact</a>
            <a href="{{ route('auth.form') }}" class="block py-2 text-gray-700 hover:text-[#c9a227] transition">Login</a>
            <a href="{{ route('contact') }}" class="btn-primary inline-block mt-2">Get in Touch</a>
        </div>
    </div>
</header>

<script>


document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('main-header');
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    let lastScrollTop = 0;
    let ticking = false;

    // --- Mobile menu toggle ---
    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        const spans = mobileMenuButton.querySelectorAll('span');
        if (mobileMenu.classList.contains('hidden')) {
            spans[0].style.transform = 'none';
            spans[1].style.opacity = '1';
            spans[2].style.transform = 'none';
        } else {
            spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
            spans[1].style.opacity = '0';
            spans[2].style.transform = 'rotate(-45deg) translate(6px, -6px)';
        }
    });

    // --- Smooth scroll behavior for header ---
    function updateHeader() {
        const scrollTop = window.scrollY || document.documentElement.scrollTop;

        // 🟢 If user scrolls to top → show header
        if (scrollTop <= 50) {
            header.classList.remove('fixed', 'top-0', 'shadow-md');
            header.classList.add('relative');
            header.style.transform = 'translateY(0)';
            lastScrollTop = scrollTop;
            ticking = false;
            return;
        }

        // 🟡 Scrolling UP → show header
        if (scrollTop < lastScrollTop) {
            header.classList.add('fixed', 'top-0', 'shadow-md');
            header.classList.remove('relative');
            header.style.transform = 'translateY(0)';
        }
        // 🔴 Scrolling DOWN → hide header
        else if (scrollTop > lastScrollTop) {
            header.style.transform = 'translateY(-100%)';
        }

        lastScrollTop = scrollTop;
        ticking = false;
    }

    // Use requestAnimationFrame for smoother performance
    window.addEventListener('scroll', function() {
        if (!ticking) {
            requestAnimationFrame(updateHeader);
            ticking = true;
        }
    });
});
</script>
