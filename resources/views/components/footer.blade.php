<footer class="relative text-gray-300 mt-1 overflow-hidden">
    <!-- Background with subtle image -->
    <div class="absolute inset-0 bg-cover bg-center" 
         style="background-image: url('https://tse2.mm.bing.net/th/id/OIP.zXK_sbsn8b2H5otvRvIehgHaE8?pid=ImgDet&w=1600&h=1066&rs=1');">
    </div>
    <div class="absolute inset-0 bg-[#0a1a3a]/95 backdrop-blur-sm"></div>

    <div class="relative max-w-7xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-10">

            <!-- Logo + About -->
            <div class="md:col-span-2">
                <!-- Signature-style logo -->
  
      <div class="text-xl sm:text-2xl md:text-3xl font-playfair pb-4 font-semibold tracking-tight text-[#ffff]">
        Bradleys<span class="text-[#c9a227]">Law</span>
      </div>

                <p class="text-gray-300 mb-6 leading-relaxed max-w-md">
                    Providing sophisticated legal solutions in insurance litigation, construction, and commercial law.  
                    Trusted for excellence, professionalism, and integrity.
                </p>


            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-white font-semibold text-lg mb-5 border-l-4 border-[#c9a227] pl-3">Quick Links</h3>
                <ul class="space-y-2 text-gray-300">
                    <li><a href="{{ route('home') }}" class="hover:text-[#c9a227] transition">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-[#c9a227] transition">About Us</a></li>
                    <li><a href="{{ route('expertise.index') }}" class="hover:text-[#c9a227] transition">Our Expertise</a></li>
                    <li><a href="{{ route('insights') }}" class="hover:text-[#c9a227] transition">Insights</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-[#c9a227] transition">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-white font-semibold text-lg mb-5 border-l-4 border-[#c9a227] pl-3">Contact Info</h3>
                <address class="not-italic text-gray-300 space-y-2">
                    <p>22 Bishopsgate</p>
                    <p>London, EC2N 4BQ.</p>
                    <p>United Kingdom</p>
                    <p>
                        <a href="tel:+44 (0)7747767444" class="hover:text-[#c9a227] transition">07747767444</a>
                    </p>
                    <p>
                        <a href="mailto:info@bradleyslaw.co.uk" class="hover:text-[#c9a227] transition">info@bradleyslaw.com</a>
                    </p>
                </address>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="pt-8 border-t border-gray-700/70 flex flex-col md:flex-row justify-between items-center text-sm text-gray-400 space-y-4 md:space-y-0">
            <div class="max-w-2xl text-center md:text-left leading-relaxed">
                Bradleys Law Ltd t/a Bradleys Law.<br>
                Registered office: 32 Woodville Road, London, EN5 5HA.<br>
                Authorised and regulated by the Solicitors Regulation Authority.
            </div>

            <div class="flex flex-col md:flex-row items-center md:space-x-6 space-y-2 md:space-y-0">
                <a href="{{ route('legal') }}" class="hover:text-[#c9a227] transition">Privacy & Terms</a>
                <span class="text-gray-500">© {{ date('Y') }} Bradleys Law Ltd. All rights reserved.</span>
            </div>
        </div>
    </div>
</footer>

<!-- Add Great Vibes font -->
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
