<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="@yield('title', 'Bradleys Law | Insurance & Construction Law Specialists')">
    <meta property="og:description" content="@yield('meta_description', 'Bradleys Law Ltd — Expert Solicitors in Insurance Litigation and Construction Law, London.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    {{-- <meta property="og:image" content="{{ asset('images/bradleyslaw-og.jpg') }}"> --}}
    <meta name="twitter:card" content="summary_large_image">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/TextPlugin.min.js"></script>
    @stack('scripts')
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" href="{{ asset('images/bradleys-law-favicon.svg') }}" type="image/svg+xml">
    <link rel="apple-touch-icon" href="{{ asset('images/bradleys-law-favicon.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --navy: #0a1a3a;
            --charcoal: #2c3e50;
            --gold: #c9a227;
            --light-gold: #e6d18a;
            --white: #ffffff;
            --light-gray: #f8f9fa;
            --transition-duration: 1s;
            --transition-timing: cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
            opacity: 0;
            transition: opacity var(--transition-duration) var(--transition-timing);
        }
        
        .body-loaded {
            opacity: 1;
        }
        
        .font-playfair {
            font-family: 'Playfair Display', serif;
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, var(--navy) 0%, var(--charcoal) 100%);
        }
        
        .gold-gradient {
            background: linear-gradient(135deg, var(--gold) 0%, var(--light-gold) 100%);
        }
        
        .section-fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity var(--transition-duration) var(--transition-timing), 
                        transform var(--transition-duration) var(--transition-timing);
        }
        
        .section-visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .btn-primary {
            background: var(--navy);
            color: white;
            padding: 12px 28px;
            border-radius: 4px;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-block;
        }
        
        .btn-primary:hover {
            background: var(--charcoal);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .btn-secondary {
            background: transparent;
            color: var(--navy);
            border: 2px solid var(--navy);
            padding: 12px 28px;
            border-radius: 4px;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-block;
        }
        
        .btn-secondary:hover {
            background: var(--navy);
            color: white;
            transform: translateY(-2px);
        }
        
        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--gold);
            transition: width var(--transition-duration) var(--transition-timing);
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--navy);
            line-height: 1;
            transition: transform var(--transition-duration) var(--transition-timing);
        }
        
        .stat-number:hover {
            transform: scale(1.05);
        }
        
        .expertise-card {
            transition: transform var(--transition-duration) var(--transition-timing), 
                        box-shadow var(--transition-duration) var(--transition-timing),
                        opacity var(--transition-duration) var(--transition-timing);
            border-top: 4px solid var(--gold);
            opacity: 0;
            transform: translateY(20px);
        }
        
        .expertise-card.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .expertise-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .gold-accent {
            color: var(--gold);
            transition: color var(--transition-duration) var(--transition-timing);
        }
        
        /* Header transitions */
        header {
            transition: all var(--transition-duration) var(--transition-timing);
            opacity: 0;
            transform: translateY(-20px);
        }
        
        header.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Footer transitions */
        footer {
            transition: all var(--transition-duration) var(--transition-timing);
            opacity: 0;
        }
        
        footer.visible {
            opacity: 1;
        }
        
        /* Smooth transitions for all interactive elements */
        a, button, input, textarea, select {
            transition: all 0.3s ease;
        }
        
        /* Page load animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-in-up {
            animation: fadeInUp var(--transition-duration) var(--transition-timing) forwards;
        }
    </style>
</head>
<body class="bg-white text-gray-800 flex flex-col min-h-screen font-inter">
    <x-navbar />

    <main class="flex-1">
        @yield('content')
    </main>

    <x-footer />
    
    <script>
        // Initialize GSAP animations
        document.addEventListener('DOMContentLoaded', function() {
            // Register GSAP plugins
            gsap.registerPlugin(ScrollTrigger, TextPlugin);
            
            // Fade in body on load
            document.body.classList.add('body-loaded');
            
            // Animate header on load
            const header = document.querySelector('header');
            if (header) {
                header.classList.add('visible');
            }
            
            // Animate footer on load
            const footer = document.querySelector('footer');
            if (footer) {
                footer.classList.add('visible');
            }
            
            // Animate navbar on scroll
            gsap.to("header", {
                backgroundColor: "rgba(255,255,255,0.95)",
                backdropFilter: "blur(10px)",
                boxShadow: "0 5px 20px rgba(0,0,0,0.1)",
                duration: 0.5,
                scrollTrigger: {
                    trigger: "body",
                    start: "50px top",
                    end: "bottom top",
                    toggleActions: "play reverse play reverse"
                }
            });
            
            // Fade in sections with Intersection Observer
            const fadeInSections = document.querySelectorAll('.section-fade-in');
            const expertiseCards = document.querySelectorAll('.expertise-card');
            
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('section-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);
            
            fadeInSections.forEach(section => {
                observer.observe(section);
            });
            
            // Observe expertise cards with staggered delay
            const cardObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.classList.add('visible');
                        }, index * 200); // Stagger animation
                        cardObserver.unobserve(entry.target);
                    }
                });
            }, observerOptions);
            
            expertiseCards.forEach(card => {
                cardObserver.observe(card);
            });
            
            // Animate numbers in stats
            gsap.utils.toArray('.stat-number').forEach(stat => {
                let target = parseInt(stat.getAttribute('data-target'));
                let duration = 2;
                
                ScrollTrigger.create({
                    trigger: stat,
                    start: "top 80%",
                    onEnter: () => {
                        gsap.fromTo(stat, 
                            { textContent: 0 },
                            { 
                                textContent: target,
                                duration: duration,
                                snap: { textContent: 1 },
                                ease: "power1.out"
                            }
                        );
                    }
                });
            });
            
            // Add smooth transitions to all interactive elements
            document.querySelectorAll('a, button').forEach(element => {
                element.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                });
                
                element.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
</body>
</html>
