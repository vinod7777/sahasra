<?php $root = './'; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahasra Barath IT Solutions | Premium Web Development</title>
    <meta name="description" content="We provide the best IT solutions and services including Web Development, Digital Marketing, and UI/UX Design.">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/style.css">
    <!-- Alpine.js for minimal interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Unicons for Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- Lordicon (Animated Icons) -->
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

    <!-- GSAP 3.x (Modern Standard) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>



    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            accent: 'var(--brand-accent, #2563EB)',
                            'accent-end': 'var(--brand-accent-end, #00D4FF)',
                            dark: '#000B1A',
                            gray: '#F8FAFC'
                        }
                    },
                    animation: {
                        'blob': 'blob 7s infinite',
                        'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
                    },
                    keyframes: {
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        },
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        [x-cloak] { display: none !important; }
     
        .gradient-text {
            background: linear-gradient(135deg, var(--brand-accent-start, #2563EB) 0%, var(--brand-accent-end, #00D4FF) 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
            display: inline-block;
        }
        .footer-social-icon:hover {
            background: linear-gradient(135deg, var(--brand-accent-start, #2563EB) 0%, var(--brand-accent-end, #00D4FF) 100%);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px var(--accent-shadow);
            border-color: transparent;
        }
        .footer-contact-item i {
            transition: transform 0.3s ease;
        }
        .footer-contact-item:hover i {
            transform: scale(1.2);
            color: var(--brand-accent-end, #00D4FF);
        }
        #slider canvas {
            width: 150%;
            height: 150%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
        }
        #slider img { width: 100%; max-width: 100%; position: absolute; z-index: 0; opacity: 0; visibility: hidden; }
        .slider-inner {
            position: absolute; top: 0; left: 0; right: 0; bottom: 0;
            display: flex; align-items: center; width: 100%; max-width: 1060px;
            height: 100%; margin: 0 auto; z-index: 5; padding: 0 20px;
        }
        #slider-content {
            position: absolute; top: 50%; left: 8%; transform: translateY(-50%); z-index: 5;
        }
        #slider-content h2 {
            font-family: 'Outfit', sans-serif; font-weight: 700; font-size: 30px; 
            letter-spacing: -1px; color: #ffffff; line-height: 1.1; margin: 20px 0 30px;
        }
        @media screen and (min-width: 800px) {
            #slider-content h2 { font-size: 60px; line-height: 1.1; }
        }
        #slider-content span { display: none; }
        .slider-meta {
            display: inline-block; font-family: 'Inter', sans-serif; font-size: 11px; letter-spacing: 5px;
            color: #f3f4f6; text-transform: uppercase; position: relative; font-weight: 600;
        }
        .slider-meta:after {
            content: ''; display: block; position: absolute; top: 5px; right: -55px; width: 45px; height: 2px;
            background-color: #ffffff; box-shadow: 0 2px 5px rgba(0,0,0,0.5);
        }
        #slide-status {
            margin-top: 10px; font-family: 'Outfit', sans-serif; font-weight: 400; font-size: 18px; color: #ffffff;
        }
        @media screen and (min-width: 800px) { #slide-status { font-size: 34px; } }
        #pagination { position: absolute; top: 50%; transform: translateY(-50%); right: 30px; z-index: 6; }
        #pagination button {
            display: block; -webkit-appearance: none; appearance: none; border: 0; width: 16px; height: 16px; 
            background-color: #FFFFFF; border-radius: 100%; padding: 0; margin: 30px 0; cursor: pointer; 
            position: relative; opacity: 0.2; transition: opacity 0.2s ease-in-out; outline: none;
        }
        #pagination button:hover { opacity: 0.5; }
        #pagination button.active { opacity: 1; }
        #pagination button.active:before { width: 300%; height: 300%; opacity: 1; }
        #pagination button:before {
            content: ''; display: block; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
            width: 100%; height: 100%; border-radius: 100%; border: 1px solid rgba(255, 255, 255, 0.2);
            opacity: 0; transition: opacity 0.4s ease-in-out, width 0.4s ease-in-out, height 0.4s ease-in-out;
        }
        
        .loading:before {
            content: ''; position: fixed; z-index: 100000; top: 0; left: 0; width: 100%; height: 100%; background: #0B0F19;
        }
        .loading:after {
            content: ''; position: fixed; z-index: 100000; top: 50%; left: 50%; width: 60px; height: 60px;
            margin: -30px 0 0 -30px; pointer-events: none; border-radius: 50%; border: 4px solid var(--brand-accent, #2563EB);
            border-top-color: transparent; animation: spin 1s linear infinite;
        }
        @keyframes spin { to { transform: rotate(360deg); } }
        .slide-image img { transition: transform 7s ease-in-out !important; }

        /* Sticky Scroll Section Styles */
        .stickyscroll { display: flex; gap: 50px; align-items: flex-start; }
        .stickyblock { width: 360px; min-width: 360px; position: sticky; top: 120px; }
        .scrollblock { width: 100%; }
        .subtitlee { font-weight: 600; text-transform: uppercase; letter-spacing: 1px; color: var(--brand-accent, #2563EB); margin: 0 0 10px; font-size: 14px; }
        .subtitlee:before { content: ""; width: 30px; height: 2px; background: var(--brand-accent, #2563EB); display: inline-block; vertical-align: middle; margin: 0 10px 0 0; }
        .headingnm { font-size: 38px; font-weight: 700; color: #0A192F; margin: 0 0 20px; line-height: 1.2; }
        .headingnm span { color: var(--brand-accent, #2563EB); }

        .cardserv { display: flex; flex-wrap: wrap; gap: 20px; counter-reset: cardserv-counter; }
        .cardserv > .wrap { width: calc(33.33% - 14px); counter-increment: cardserv-counter; position: relative; padding: 20px; background: white; border-radius: 16px; box-shadow: 0 10px 25px -10px rgba(0,0,0,0.05); border: 1px solid #F1F5F9; transition: all 0.3s ease; }
        .cardserv > .wrap:hover { transform: translateY(-5px); box-shadow: 0 15px 35px -10px var(--accent-shadow); border-color: var(--brand-accent, #2563EB); }
        .cardserv > .wrap:after { content: '0'counter(cardserv-counter); position: absolute; right: 15px; top: 15px; opacity: 0.1; font-weight: 800; font-size: 24px; color: var(--brand-accent, #2563EB); }
        .cardserv > .wrap .imgwrap { width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; background: #EFF6FF; border-radius: 12px; margin: 0 0 15px; transition: all 0.3s ease; }
        .cardserv > .wrap:hover .imgwrap { background: var(--brand-accent, #2563EB); color: white; }
        .cardserv > .wrap .imgwrap i { font-size: 24px; color: var(--brand-accent, #2563EB); }
        .cardserv > .wrap:hover .imgwrap i { color: white; }
        .cardserv > .wrap .title { font-size: 22px; line-height: 1.3; font-weight: 700; margin: 0 0 10px; color: #0A192F; }
        .cardserv > .wrap p { color: #64748B; font-size: 15px; margin: 0 0 15px; line-height: 1.5; }
        .cardserv > .wrap .link { font-size: 13px; font-weight: 700; color: var(--brand-accent, #2563EB); display: inline-flex; align-items: center; gap: 6px; transition: all 0.2s ease; }
        .cardserv > .wrap .link:hover { gap: 12px; }
        .cardserv > .wrap .link:after { content: "\eb9b"; font-family: 'unicons'; font-weight: normal; font-style: normal; }

        @media (max-width: 991px) {
            .stickyscroll { flex-direction: column; }
            .stickyblock { position: static; width: 100%; min-width: unset; margin-bottom: 40px; }
            .cardserv > .wrap { width: 100%; }
        }
        #three-canvas-container canvas {
            display: block;
        }
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Marquee Auto-Scroll */
        .marquee-track {
            display: flex;
            width: fit-content;
        }
        .scroll-left {
            animation: scroll-left 30s linear infinite;
        }
        .scroll-right {
            animation: scroll-right 30s linear infinite;
        }
        .hover\:pause:hover {
            animation-play-state: paused;
        }
        @keyframes scroll-left {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        @keyframes scroll-right {
            0% { transform: translateX(-50%); }
            100% { transform: translateX(0); }
        }
        .projects-wrapper {
            display: flex;
            flex-wrap: nowrap;
            width: 100%;
            overflow-x: auto;
            overflow-y: hidden;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
            -ms-overflow-style: none;
            scroll-behavior: smooth;
            overscroll-behavior-x: contain;
            touch-action: pan-x;
        }
        .projects-wrapper .project-card {
            scroll-snap-align: start;
            scroll-snap-stop: always;
        }
        .projects-wrapper::-webkit-scrollbar {
            display: none;
        }
        .projects-wrapper .project-card {
            scroll-snap-align: start;
        }
        .projects-nav {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-top: 24px;
        }
        .projects-nav button {
            width: 14px;
            height: 14px;
            border-radius: 9999px;
            border: 1px solid rgba(37, 99, 235, 0.35);
            background: rgba(255, 255, 255, 0.9);
            cursor: pointer;
            transition: all 0.25s ease;
        }
        .projects-nav button.active,
        .projects-nav button:hover {
            width: 18px;
            height: 18px;
            background: #2563EB;
            border-color: transparent;
        }
        .projects-wrapper.dragging {
            cursor: grabbing;
        }
        .tilt-inner {
            transform-style: preserve-3d;
            will-change: transform;
            backface-visibility: hidden;
            transition: box-shadow 0.5s ease;
        }

        /* New Floating Hero Styles */
        .hero-floating-card {
            position: absolute;
            z-index: 20;
            opacity: 1; /* Ensure visible by default, let Alpine/GSAP control transitions */
            pointer-events: none;
            transition: transform 0.2s cubic-bezier(0.2, 0.8, 0.2, 1), opacity 0.5s ease;
        }
        .hero-floating-card.active {
            opacity: 1;
        }
        .hero-floating-card img {
            border-radius: 1.5rem;
            box-shadow: 0 15px 35px -12px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }
        .hero-floating-card .bg-white {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.8) !important;
        }
        .dark-theme .hero-floating-card .bg-white {
            background: rgba(15, 23, 42, 0.8) !important;
            border-color: rgba(30, 41, 59, 1);
        }
        .hero-badge-green {
            background: rgba(34, 197, 94, 0.1);
            color: #16a34a;
            border: 1px solid rgba(34, 197, 94, 0.2);
            box-shadow: 0 0 20px rgba(34, 197, 94, 0.1);
        }
        .text-highlight-green {
            position: relative;
            z-index: 1;
            text-shadow: 0 0 15px rgba(34, 197, 94, 0.2);
        }
        .text-highlight-green:after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 100%;
            height: 12px;
            background: #22c55e;
            opacity: 0.25;
            z-index: -1;
            transform: skewX(-15deg);
        }
        .btn-purple-grad {
            background: linear-gradient(135deg, #9333ea 0%, #4f46e5 100%);
            box-shadow: 0 15px 30px rgba(147, 51, 234, 0.2);
            animation: pulse-glow 3s infinite;
        }
        @keyframes pulse-glow {
            0% { box-shadow: 0 15px 30px rgba(147, 51, 234, 0.2); }
            50% { box-shadow: 0 15px 45px rgba(147, 51, 234, 0.4); }
            100% { box-shadow: 0 15px 30px rgba(147, 51, 234, 0.2); }
        }
        /* Floating Animation */
        .orbit-float { animation: orbit-float 6s ease-in-out infinite; }
        @keyframes orbit-float {
            0% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(5px, -10px) rotate(1deg); }
            66% { transform: translate(-5px, 5px) rotate(-1deg); }
            100% { transform: translate(0, 0) rotate(0deg); }
        }
    </style>
    <style id="sahasra-brand-authority">
        :root {
            --brand-accent: #2563EB;
            --brand-accent-start: #2563EB;
            --brand-accent-end: #00D4FF;
            --accent-shadow: rgba(37, 99, 235, 0.3);
            --brand-dark: #000B1A;
            --brand-gray: #F8FAFC;
        }
        .gradient-text {
            background: linear-gradient(135deg, var(--brand-accent-start, #2563EB) 0%, var(--brand-accent-end, #00D4FF) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
    <script id="sahasra-brand-guard">
        (function() {
            const DEFAULT_BLUE = '#2563EB';
            const DEFAULT_GRADIENT = '#00D4FF';
            
            function getLuminance(hex) {
                if (!hex) return 0;
                if (hex === 'white' || hex === '#fff' || hex === '#ffffff') return 1;
                hex = hex.replace('#', '');
                if (hex.length === 3) {
                    hex = hex[0] + hex[0] + hex[1] + hex[1] + hex[2] + hex[2];
                }
                const r = parseInt(hex.substring(0, 2), 16);
                const g = parseInt(hex.substring(2, 4), 16);
                const b = parseInt(hex.substring(4, 6), 16);
                if (isNaN(r) || isNaN(g) || isNaN(b)) return 0;
                return (0.299 * r + 0.587 * g + 0.114 * b) / 255;
            }

            let savedColor = localStorage.getItem('sahasra-accent-color') || DEFAULT_BLUE;
            let savedGradient = localStorage.getItem('sahasra-accent-gradient') || DEFAULT_GRADIENT;

            // FORCE RESET if color is white, too bright, or corrupted
            if (getLuminance(savedColor) > 0.85) {
                savedColor = DEFAULT_BLUE;
                savedGradient = DEFAULT_GRADIENT;
                localStorage.setItem('sahasra-accent-color', DEFAULT_BLUE);
                localStorage.setItem('sahasra-accent-gradient', DEFAULT_GRADIENT);
            }

            const root = document.documentElement;
            root.style.setProperty('--brand-accent', savedColor);
            root.style.setProperty('--brand-accent-start', savedColor);
            root.style.setProperty('--brand-accent-end', savedGradient);
            
            // Apply theme (Light/Dark)
            const savedTheme = localStorage.getItem('sahasra-theme') || 'light';
            document.documentElement.classList.toggle('dark-theme', savedTheme === 'dark');
        })();
    </script>
    <?php // The Branding Guard is already inlined above for zero-flicker authority ?>
</head>
<body class="font-sans text-brand-dark bg-brand-gray antialiased selection:bg-brand-accent selection:text-white loading">
    <?php include_once 'includes/theme-toggle.php'; ?>
    <?php include 'includes/nav.php'; ?>

    <!-- 2. GLOBAL THREE.JS CANVAS -->
    <div id="three-canvas-container" class="fixed inset-0 z-[-1] pointer-events-none opacity-30"></div>
    
    <!-- MODERN FLOATING HUB HERO (Sahasra Multi-Orbit Slider) -->
    <section id="home" 
             class="relative min-h-screen flex items-center justify-center overflow-hidden bg-[#fafbfc] transition-colors duration-700 dark-theme:bg-[#000B1A]"
             x-data="{ 
                activeSlide: 0,
            slides: [
                {
                    title: 'One Agency for',
                    highlight: 'Innovation',
                    desc: 'Bring ideas together effortlessly. Sahasra connects projects flowing with clarity and creative momentum every single day.',
                    btnPrimary: 'Try Sahasra',
                    btnSecondary: 'Learn more',
                    img1: 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=600&q=80',
                    img2: 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=600&q=80',
                    img3: 'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=600&q=80',
                    img4: 'https://images.unsplash.com/photo-1542744094-24638eff58bb?auto=format&fit=crop&w=600&q=80',
                    uiTask: '1 of 10 tasks',
                    uiFeedback: '“I like the direction, but could you make the logo be bigger?”',
                    uiTag: 'UX Design'
                },
                {
                    title: 'Future-Proof',
                    highlight: 'Web Presence',
                    desc: 'Architecting high-performance ecosystems that scale with your vision. From enterprise reach to startup speed.',
                    btnPrimary: 'Explore Solutions',
                    btnSecondary: 'Case Studies',
                    img1: 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80',
                    img2: 'https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=600&q=80',
                    img3: 'https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=600&q=80',
                    img4: 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=600&q=80',
                    uiTask: '5 of 8 milestones',
                    uiFeedback: '“The new architecture reduced our page load times by 40%!”',
                    uiTag: 'Engineering'
                },
                {
                    title: 'Expert Squad for',
                    highlight: 'Digital Growth',
                    desc: 'Transforming operational challenges into strategic advantages. We blend engineering with stunning aesthetics for real ROI.',
                    btnPrimary: 'Start Growing',
                    btnSecondary: 'Our Process',
                    img1: 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=600&q=80',
                    img2: 'https://images.unsplash.com/photo-1556761175-5973dc0f32d7?auto=format&fit=crop&w=600&q=80',
                    img3: 'https://images.unsplash.com/photo-1542744173-05336fcc7ad4?auto=format&fit=crop&w=600&q=80',
                    img4: 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=80',
                    uiTask: 'Q3 Goals Met',
                    uiFeedback: '“Conversion rates are up 25% since the campaign launch.”',
                    uiTag: 'Marketing'
                }
            ],
            init() {
                 setInterval(() => {
                     this.activeSlide = (this.activeSlide + 1) % this.slides.length;
                 }, 4000); 

                 this.$watch('activeSlide', () => {
                     if(typeof gsap !== 'undefined') {
                         gsap.to('.hero-floating-card', {
                             scale: 1.05,
                             duration: 0.3,
                             yoyo: true,
                             repeat: 1,
                             ease: 'back.out(1.7)',
                             stagger: {
                                 each: 0.05,
                                 from: 'edges'
                             }
                        });
                     }
                 });
             }
         }">
    
        <!-- Centered Orbit Hub -->
        <div class="container mx-auto relative z-30 text-center max-w-4xl px-4 md:-translate-y-20 pt-20 md:pt-0">
            <template x-for="(slide, index) in slides" :key="index">
                <div x-show="activeSlide === index" 
                     x-transition:enter="transition ease-out duration-1000"
                     x-transition:enter-start="opacity-0 translate-y-12 blur-sm"
                     x-transition:enter-end="opacity-100 translate-y-0 blur-0"
                     x-transition:leave="transition ease-in duration-500 absolute inset-0"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95 blur-md"
                     class="w-full">
                    
                    <!-- Main Heading -->
                    <h1 class="text-4xl sm:text-6xl md:text-8xl font-heading font-black text-brand-accent dark-theme:text-brand-accent mb-6 md:mb-8 leading-[1.05] tracking-tight">
                        <span x-text="slide.title"></span><br/>
                        <span class="text-highlight-green" x-text="slide.highlight"></span>
                    </h1>
                    
                    <!-- Description -->
                    <p class="text-sm md:text-xl text-gray-500 max-w-2xl mx-auto mb-10 md:mb-12 leading-relaxed font-medium" x-text="slide.desc"></p>
                    
                    <!-- Buttons & Social Proof -->
                    <div class="flex flex-col items-center gap-10">
                        <div class="flex flex-wrap justify-center gap-6">
                            <a href="#contact" class="btn-7 px-10 py-5 rounded-full text-white font-bold hover:scale-105 transition-all text-sm tracking-wide">
                                <span x-text="slide.btnPrimary"></span>
                            </a>
                            <a href="#services" class="btn-7-reverse px-10 py-5 rounded-full border-2 border-brand-dark text-brand-dark font-bold hover:bg-brand-dark hover:text-white transition-all text-sm tracking-wide">
                                <span x-text="slide.btnSecondary"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </template>

            <!-- Slide Navigation Dots -->
            <div class="absolute -bottom-24 left-1/2 -translate-x-1/2 flex gap-4 z-40">
                <template x-for="(slide, index) in slides" :key="index">
                    <button @click="activeSlide = index" 
                            class="w-2 h-2 rounded-full transition-all duration-500"
                            :class="activeSlide === index ? 'w-12 bg-brand-accent' : 'bg-gray-300 dark-theme:bg-slate-700 hover:bg-brand-accent/40'"></button>
                </template>
            </div>
            
            <!-- Social Proof -->
            <div class="mt-16 flex flex-col items-center gap-4 reveal">
                <div class="flex items-center gap-5">
                    <div class="flex -space-x-3">
                        <img src="https://i.pravatar.cc/100?u=1" class="w-10 h-10 rounded-full border-2 border-white ring-2 ring-gray-50 object-cover shadow-sm" />
                        <img src="https://i.pravatar.cc/100?u=2" class="w-10 h-10 rounded-full border-2 border-white ring-2 ring-gray-50 object-cover shadow-sm" />
                        <img src="https://i.pravatar.cc/100?u=3" class="w-10 h-10 rounded-full border-2 border-white ring-2 ring-gray-50 object-cover shadow-sm" />
                        <img src="https://i.pravatar.cc/100?u=4" class="w-10 h-10 rounded-full border-2 border-white ring-2 ring-gray-50 object-cover shadow-sm" />
                    </div>
                    <p class="text-sm text-gray-400 font-bold tracking-tight">Join 1000+ members worldwide</p>
                </div>
            </div>
        </div>

        <!-- FLOATING ORBIT CARDS (Arranged for Balance) -->
        <div class="absolute inset-0 z-10 pointer-events-none">
            
            <!-- Node 1: Top Left -->
            <div class="hero-floating-card top-[5%] left-[0%] sm:top-[12%] sm:left-[4%] w-[120px] sm:w-[200px] md:w-[320px] floating-node-1 orbit-float aspect-[4/3] opacity-40 sm:opacity-100">
                <template x-for="(slide, index) in slides" :key="index">
                    <img x-show="activeSlide === index"
                         :src="slide.img1" 
                         x-transition:enter="transition ease-out duration-700"
                         x-transition:enter-start="opacity-0 scale-90"
                         x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-500 absolute inset-0"
                         x-transition:leave-start="opacity-100 scale-100"
                         x-transition:leave-end="opacity-0 scale-90"
                         class="transform -rotate-6 rounded-2xl shadow-xl w-full h-full object-cover" />
                </template>
            </div>

            <!-- Node 2: Bottom Left -->
            <div class="hero-floating-card bottom-[15%] left-[6%] w-[140px] md:w-[240px] floating-node-2 orbit-float aspect-square hidden sm:block" style="animation-delay: -1s;">
                <template x-for="(slide, index) in slides" :key="index">
                    <img x-show="activeSlide === index"
                         :src="slide.img2" 
                         x-transition:enter="transition ease-out duration-700 delay-100"
                         x-transition:enter-start="opacity-0 scale-90"
                         x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-500 absolute inset-0"
                         x-transition:leave-start="opacity-100 scale-100"
                         x-transition:leave-end="opacity-0 scale-90"
                         class="transform rotate-3 rounded-2xl shadow-xl w-full h-full object-cover" />
                </template>
            </div>

            <!-- Node 3: Middle Left Orbit -->
            <div class="hero-floating-card top-[45%] left-[2%] w-[180px] bg-white dark-theme:bg-slate-900 rounded-3xl p-5 shadow-[0_20px_50px_rgba(0,0,0,0.1)] border border-gray-100 dark-theme:border-slate-800 floating-node-3 pointer-events-auto orbit-float h-[100px] hidden lg:block" style="animation-delay: -2s;">
                 <template x-for="(slide, index) in slides" :key="index">
                    <div x-show="activeSlide === index"
                         x-transition:enter="transition ease-out duration-700"
                         x-transition:enter-start="opacity-0 translate-y-4"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-300 absolute inset-0 p-5"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 -translate-y-4"
                         class="w-full h-full flex flex-col justify-center">
                        <h4 class="text-[12px] font-bold text-brand-dark dark-theme:text-white mb-4 uppercase tracking-tighter">Task Status</h4>
                        <div class="h-1.5 w-full bg-gray-100 dark-theme:bg-slate-800 rounded-full mb-3">
                            <div class="h-full bg-brand-accent rounded-full w-[70%]" :style="`box-shadow: 0 0 10px rgba(var(--brand-accent-rgb, 37, 99, 235), 0.3)`"></div>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-[9px] text-gray-400 font-bold" x-text="slide.uiTask"></span>
                            <i class="uil uil-check-circle text-brand-accent text-base"></i>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Node 4: Top Right -->
            <div class="hero-floating-card top-[8%] right-[0%] sm:top-[8%] sm:right-[4%] w-[120px] sm:w-[200px] md:w-[320px] floating-node-4 orbit-float aspect-[4/3] opacity-40 sm:opacity-100" style="animation-delay: -0.5s;">
                 <template x-for="(slide, index) in slides" :key="index">
                    <img x-show="activeSlide === index"
                         :src="slide.img3" 
                         x-transition:enter="transition ease-out duration-700 delay-200"
                         x-transition:enter-start="opacity-0 scale-90"
                         x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-500 absolute inset-0"
                         x-transition:leave-start="opacity-100 scale-100"
                         x-transition:leave-end="opacity-0 scale-90"
                         class="transform rotate-6 rounded-2xl shadow-xl w-full h-full object-cover" />
                </template>
            </div>

            <!-- Node 5: Brand Personality Hub -->
            <div class="hero-floating-card bottom-[40%] right-[2%] w-[220px] bg-white/95 dark-theme:bg-slate-900/95 backdrop-blur-xl rounded-3xl p-6 shadow-[0_20px_50px_rgba(0,0,0,0.1)] border border-white/20 dark-theme:border-slate-800 floating-node-5 pointer-events-auto orbit-float hidden lg:block" style="animation-delay: -1.5s;">
                <p class="text-[9px] font-black uppercase tracking-[3px] text-brand-dark/40 dark-theme:text-white/40 mb-5 text-center">Brand Personality Hub</p>
                <div class="grid grid-cols-4 gap-2">
                    <div @click="setAccent('#2563EB', '#00D4FF')" class="h-10 rounded-xl bg-[#2563EB] cursor-pointer hover:scale-110 transition-transform shadow-sm"></div>
                    <div @click="setAccent('#7C3AED', '#C084FC')" class="h-10 rounded-xl bg-[#7C3AED] cursor-pointer hover:scale-110 transition-transform shadow-sm"></div>
                    <div @click="setAccent('#10B981', '#6EE7B7')" class="h-10 rounded-xl bg-[#10B981] cursor-pointer hover:scale-110 transition-transform shadow-sm"></div>
                    <!-- Custom Picker Integration -->
                    <div class="h-10 rounded-xl border border-dashed border-gray-300 dark-theme:border-slate-700 flex items-center justify-center relative group hover:border-brand-accent transition-colors">
                        <input type="color" @input="setAccent($event.target.value)" class="absolute inset-0 opacity-0 cursor-pointer w-full h-full">
                        <i class="uil uil-plus text-gray-400 group-hover:text-brand-accent transition-colors"></i>
                    </div>
                </div>
            </div>

            <!-- Node 6: Middle Right -->
            <div class="hero-floating-card top-[52%] right-[6%] w-[140px] md:w-[240px] floating-node-6 orbit-float aspect-square hidden sm:block" style="animation-delay: -2.5s;">
                 <template x-for="(slide, index) in slides" :key="index">
                    <img x-show="activeSlide === index"
                         :src="slide.img4" 
                         x-transition:enter="transition ease-out duration-700 delay-75"
                         x-transition:enter-start="opacity-0 scale-90"
                         x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-500 absolute inset-0"
                         x-transition:leave-start="opacity-100 scale-100"
                         x-transition:leave-end="opacity-0 scale-90"
                         class="transform -rotate-3 rounded-2xl shadow-xl w-full h-full object-cover" />
                </template>
            </div>
        </div>
    </section>






    <!-- 3. ABOUT SECTION -->
    <section id="about" class="py-24 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] bg-gray-50">
        <div class="container mx-auto px-6 md:px-12 grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left Images -->
            <div class="relative reveal h-[500px]">
                <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Office" class="absolute top-0 left-0 w-2/3 h-[350px] object-cover rounded-3xl border-8 border-white shadow-xl z-10 transition-transform hover:scale-105 duration-500">
                <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Meeting" class="absolute bottom-0 right-0 w-2/3 h-[300px] object-cover rounded-3xl border-8 border-white shadow-xl z-20 transition-transform hover:scale-105 duration-500">
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-30 bg-white p-4 rounded-full shadow-2xl text-brand-accent">
                    <i class="uil uil-play text-4xl ml-1"></i>
                </div>
            </div>
            
            <!-- Right Content -->
            <div class="reveal">
                <span class="text-brand-accent font-semibold tracking-wider text-sm uppercase mb-2 block">About Company</span>
                <h2 class="text-4xl md:text-5xl font-heading font-bold mb-6">We Provide the best <span class="gradient-text">IT Solutions</span> services</h2>
                <p class="text-gray-600 mb-8 leading-relaxed">
                    With over a decade of hands-on experience in dynamic tech environments, we pioneer digital solutions that transform operational challenges into strategic advantages. Our approach merges aesthetics with deep engineering.
                </p>
                
                <div class="grid sm:grid-cols-2 gap-6 mb-10">
                    <div class="flex items-start gap-4 p-4 rounded-xl bg-white shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent text-xl shrink-0">
                            <i class="uil uil-chart-line animated-icon text-brand-accent"></i>
                        </div>
                        <div>
                            <h4 class="font-bold mb-1">Business Growth</h4>
                            <p class="text-sm text-gray-500">Scale your revenue with tech.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 rounded-xl bg-white shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent text-xl shrink-0">
                            <i class="uil uil-lightbulb-alt animated-icon text-brand-accent"></i>
                        </div>
                        <div>
                            <h4 class="font-bold mb-1">IT Consultancy</h4>
                            <p class="text-sm text-gray-500">Strategic tech guidance.</p>
                        </div>
                    </div>
                </div>
                
                <a href="#services" class="btn-7 inline-block rounded font-bold shadow-lg">
                    <span>Discover More <i class="uil uil-arrow-right ml-1"></i></span>
                </a>
            </div>
        </div>
    </section>

    <!-- 5. SERVICES SECTION (Sticky Scroll Layout) -->
    <section id="services" class="py-24 bg-brand-gray relative">
        <div class="container mx-auto px-6 md:px-12">
            <div class="stickyscroll">
                <div class="stickyblock reveal">
                    <div class="subtitlee">Our Services</div>
                    <h1 class="headingnm">Leading Digital Marketing Agency & Web Development Company in <span>India, US & UK</span></h1>
                    <p class="text-gray-600 mb-8 leading-relaxed">From strategy to execution, we offer a full range of digital marketing and web development services tailored to help your brand thrive online.</p>
                    <a href="#contact" class="btn-7 rounded shadow-lg"><span>All Services <i class="uil uil-arrow-right ml-1"></i></span></a>
                </div>
                
                <div class="scrollblock">
                    <div class="cardserv">
                        <!-- Card 1 -->
                        <div class="wrap reveal scale-up">
                            <div class="tilt-inner">
                                <div class="imgwrap"><i class="uil uil-web-grid"></i></div>
                                <h3 class="title">Web Design</h3>
                                <p>Our designers create engaging websites that make an impression. Whether you are a new start-up or an established brand.</p>
                                <a href="services/website-design.php" class="link">Know More</a>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="wrap reveal scale-up">
                            <div class="tilt-inner">
                                <div class="imgwrap"><i class="uil uil-brackets-curly"></i></div>
                                <h3 class="title">Web Development</h3>
                                <p>Full-cycle development from frontend design to backend systems, ensuring high performance and scalability.</p>
                                <a href="<?php echo $root; ?>services/web-development.php" class="link">Know More</a>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="wrap reveal scale-up">
                            <div class="tilt-inner">
                                <div class="imgwrap"><i class="uil uil-shopping-cart"></i></div>
                                <h3 class="title">E-Commerce</h3>
                                <p>User-friendly online stores that simplify operations and enhance the shopping experience from inventory to checkout.</p>
                                <a href="<?php echo $root; ?>services/ecommerce.php" class="link">Know More</a>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div class="wrap reveal scale-up">
                            <div class="tilt-inner">
                                <div class="imgwrap"><i class="uil uil-mobile-android"></i></div>
                                <h3 class="title">Mobile Apps</h3>
                                <p>Custom mobile applications for iOS and Android designed for maximum user engagement and performance.</p>
                                <a href="<?php echo $root; ?>services/mobile-applications.php" class="link">Know More</a>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="wrap reveal scale-up">
                            <div class="tilt-inner">
                                <div class="imgwrap"><i class="uil uil-analysis"></i></div>
                                <h3 class="title">Digital Marketing</h3>
                                <p>Comprehensive digital growth strategies including content marketing, email, and performance analysis.</p>
                                <a href="<?php echo $root; ?>services/digital-marketing.php" class="link">Know More</a>
                            </div>
                        </div>
                        <!-- Card 6 -->
                        <div class="wrap reveal scale-up" style="transition-delay: 100ms;">
                            <div class="tilt-inner">
                                <div class="imgwrap"><i class="uil uil-search-alt"></i></div>
                                <h3 class="title">SEO Services</h3>
                                <p>Personalized SEO strategies to increase your business rankings and drive organic traffic to your site.</p>
                                <a href="<?php echo $root; ?>services/seo.php" class="link">Know More</a>
                            </div>
                        </div>
                        <!-- Card 7 -->
                        <div class="wrap reveal scale-up">
                            <div class="tilt-inner">
                                <div class="imgwrap"><i class="uil uil-share-alt"></i></div>
                                <h3 class="title">Social Media</h3>
                                <p>Connecting companies with customers through engaging content and strategic social media management.</p>
                                <a href="<?php echo $root; ?>services/smo.php" class="link">Know More</a>
                            </div>
                        </div>
                        <!-- Card 8 -->
                        <div class="wrap reveal scale-up" style="transition-delay: 100ms;">
                            <div class="tilt-inner">
                                <div class="imgwrap"><i class="uil uil-money-bill"></i></div>
                                <h3 class="title">PPC Ads</h3>
                                <p>ROI-driven PPC campaigns managed from keyword research to ad copy for maximum conversion.</p>
                                <a href="<?php echo $root; ?>services/paid-service.php" class="link">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. WHY CHOOSE US - PROFESSIONAL LIGHT THEME REFACTOR -->
    <section id="why-choose-us" class="py-12 bg-white relative overflow-hidden">
        <!-- Abstract BG Elements (Soft) -->
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-brand-accent/5 rounded-full blur-[120px] -mr-64 -mt-64"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-brand-accent/5 rounded-full blur-[100px] -ml-48 -mb-48"></div>

        <div class="container mx-auto px-6 md:px-12 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                
                <!-- Left: Content & Progress -->
                <div class="reveal">
                    <div class="flex items-center gap-2 text-brand-accent font-semibold tracking-wider text-xs uppercase mb-4">
                        <span class="w-8 h-[2px] bg-brand-accent"></span>
                        Why Choose Sahasra?
                    </div>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-heading font-bold mb-5 leading-tight text-brand-dark">
                        We Don't Just Build Apps, We <span class="gradient-text">Architect Success</span>
                    </h2>
                    <p class="text-gray-600 text-base mb-8 leading-relaxed">
                        With over a decade of excellence, Sahasra Barath delivers high-impact digital solutions that blend cutting-edge engineering with stunning aesthetics. Our results-driven approach ensures your brand stays ahead in a competitive landscape.
                    </p>
                    
                    <div class="grid sm:grid-cols-2 gap-10">
                        <!-- Stat 1 -->
                        <div class="space-y-4">
                            <div class="flex justify-between items-end mb-1">
                                <span class="text-sm font-bold uppercase tracking-widest text-gray-400">Project Integrity</span>
                                <span class="text-2xl font-heading font-bold text-brand-accent">99%</span>
                            </div>
                            <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                                <div class="h-full gradient-bg w-[99%] ring-1 ring-white/20"></div>
                            </div>
                            <p class="text-xs text-gray-500">Rigorous QA & zero-defect delivery.</p>
                        </div>
                        <!-- Stat 2 -->
                        <div class="space-y-4">
                            <div class="flex justify-between items-end mb-1">
                                <span class="text-sm font-bold uppercase tracking-widest text-gray-400">Client ROI</span>
                                <span class="text-2xl font-heading font-bold text-brand-accent">2.5x</span>
                            </div>
                            <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                                <div class="h-full gradient-bg w-[85%] ring-1 ring-white/20"></div>
                            </div>
                            <p class="text-xs text-gray-500">Average growth in digital revenue.</p>
                        </div>
                    </div>

                    <div class="mt-10 flex flex-wrap gap-8 items-center border-t border-gray-100 pt-8">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full gradient-bg flex items-center justify-center text-lg text-white shadow-lg">
                                <i class="uil uil-users-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-base leading-none text-brand-dark">1200+</h4>
                                <p class="text-[10px] text-gray-500 mt-1 uppercase tracking-tighter">Happy Global Clients</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 border-l border-gray-100 pl-8">
                            <div class="w-10 h-10 rounded-full bg-brand-accent/10 flex items-center justify-center text-lg text-brand-accent border border-brand-accent/10">
                                <i class="uil uil-award"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-base leading-none text-brand-dark">15+</h4>
                                <p class="text-[10px] text-gray-500 mt-1 uppercase tracking-tighter">Industry Awards</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Clean High-End Feature Grid -->
                <div class="grid sm:grid-cols-2 gap-4 reveal">
                    <!-- Feature 1 -->
                    <div class="sahasra-feature-card p-6 rounded-[32px] bg-white shadow-[0_10px_30px_-5px_rgba(37,99,235,0.05)] border border-gray-100 hover:border-brand-accent/50 transition-all group hover:-translate-y-2 relative overflow-hidden">
                        <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent text-2xl mb-5 group-hover:bg-brand-accent group-hover:text-white transition-all">
                            <i class="uil uil-shield-check"></i>
                        </div>
                        <h4 class="text-lg font-bold mb-2 font-heading text-brand-dark">Security First</h4>
                        <p class="text-gray-500 text-xs leading-relaxed">Enterprise-grade protocols ensuring your data remains impenetrable.</p>
                    </div>
                    <!-- Feature 2 -->
                    <div class="sahasra-feature-card p-6 rounded-[32px] bg-white shadow-[0_10px_30px_-5px_rgba(var(--brand-accent-rgb),0.05)] border border-gray-100 hover:border-brand-accent/50 transition-all group hover:-translate-y-2 mt-0 sm:mt-10">
                        <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent text-2xl mb-5 group-hover:bg-brand-accent group-hover:text-white transition-all">
                            <i class="uil uil-rocket"></i>
                        </div>
                        <h4 class="text-lg font-bold mb-2 font-heading text-brand-dark">Rapid Scaling</h4>
                        <p class="text-gray-500 text-xs leading-relaxed">Architecture designed to handle 10x traffic spikes without breaking a sweat.</p>
                    </div>
                    <!-- Feature 3 -->
                    <div class="sahasra-feature-card p-6 rounded-[32px] bg-white shadow-[0_10px_30px_-5px_rgba(var(--brand-accent-rgb),0.05)] border border-gray-100 hover:border-brand-accent/50 transition-all group hover:-translate-y-2 -mt-0 sm:-mt-6">
                        <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent text-2xl mb-5 group-hover:bg-brand-accent group-hover:text-white transition-all">
                            <i class="uil uil-processor"></i>
                        </div>
                        <h4 class="text-lg font-bold mb-2 font-heading text-brand-dark">Deep Tech</h4>
                        <p class="text-gray-500 text-xs leading-relaxed">Latest tech stacks from React/Next.js to AI-driven backend systems.</p>
                    </div>
                    <!-- Feature 4 -->
                    <div class="sahasra-feature-card p-6 rounded-[32px] bg-white shadow-[0_10px_30px_-5px_rgba(var(--brand-accent-rgb),0.05)] border border-gray-100 hover:border-brand-accent/50 transition-all group hover:-translate-y-2 mt-0 sm:mt-6">
                        <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent text-2xl mb-5 group-hover:bg-brand-accent group-hover:text-white transition-all">
                            <i class="uil uil-clock-eight"></i>
                        </div>
                        <h4 class="text-lg font-bold mb-2 font-heading text-brand-dark">24/7 Support</h4>
                        <p class="text-gray-500 text-xs leading-relaxed">Global infrastructure providing round-the-clock reliability and rapid support response.</p>
                    </div>
                </div>



            </div>
        </div>
    </section>

   

    <section id="portfolio" class="py-16 bg-gray-50 overflow-hidden">
        <div class="container mx-auto px-6 md:px-12 mb-10">
            <div class="flex flex-col md:flex-row justify-between items-end reveal">
                <div class="max-w-xl">
                    <span class="text-brand-accent font-semibold tracking-wider text-sm uppercase mb-2 block">Our Projects</span>
                    <h2 class="text-3xl md:text-4xl font-heading font-bold">Our Outstanding Latest <span class="gradient-text">Projects</span></h2>
                </div>
                <a href="#" class="hidden md:inline-flex items-center gap-2 font-bold text-brand-dark hover:text-brand-accent transition-colors text-sm magnetic-btn">
                    View All Projects <i class="uil uil-arrow-right"></i>
                </a>
            </div>
        </div>
        
        <!-- Marquee Container (Auto-Scrolling Projects) -->
        <div class="projects-marquee py-10 relative">
            <div class="projects-wrapper flex">
                <!-- Project Card 1: E-Commerce -->
                <a href="products/ecommerce-platform.php" class="project-card flex-shrink-0 w-[400px] px-4 group block">
                    <div class="tilt-inner bg-white rounded-3xl overflow-hidden shadow-[0_10px_30px_-10px_rgba(0,0,0,0.1)] hover:shadow-2xl transition-all duration-500 border border-gray-100 h-full">
                        <div class="aspect-[4/3] overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&w=800&q=80" alt="E-Commerce Platform" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                                <span class="gradient-bg text-white text-[10px] font-bold px-4 py-2 rounded-full uppercase tracking-widest ring-1 ring-white/20">Product OS</span>
                            </div>
                        </div>
                        <div class="p-8">
                            <h3 class="text-xl font-bold text-brand-dark mb-2 group-hover:text-brand-accent transition-colors">Enterprise E-Commerce</h3>
                            <p class="text-xs text-brand-accent font-bold uppercase tracking-widest mb-3">Global Retail Solution</p>
                            <p class="text-gray-500 text-sm leading-relaxed">Scale your business globally with our high-fidelity commerce platform.</p>
                        </div>
                    </div>
                </a>

                <!-- Project Card 2: Hotel Mgmt -->
                <a href="products/hotel-mgmt.php" class="project-card flex-shrink-0 w-[400px] px-4 group block">
                    <div class="tilt-inner bg-white rounded-3xl overflow-hidden shadow-[0_10px_30px_-10px_rgba(0,0,0,0.1)] hover:shadow-2xl transition-all duration-500 border border-gray-100 h-full">
                        <div class="aspect-[4/3] overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&w=800&q=80" alt="Hotel Management" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                                <span class="gradient-bg text-white text-[10px] font-bold px-4 py-2 rounded-full uppercase tracking-widest ring-1 ring-white/20">Healthcare OS</span>
                            </div>
                        </div>
                        <div class="p-8">
                            <h3 class="text-xl font-bold text-brand-dark mb-2 group-hover:text-brand-accent transition-colors">Hotel Management OS</h3>
                            <p class="text-xs text-brand-accent font-bold uppercase tracking-widest mb-3">Hospitality Tech</p>
                            <p class="text-gray-500 text-sm leading-relaxed">Streamlined operations for luxury stays and boutique guest houses.</p>
                        </div>
                    </div>
                </a>

                <!-- Project Card 3: School ERP -->
                <a href="products/ss-smartnous-school.php" class="project-card flex-shrink-0 w-[400px] px-4 group block">
                    <div class="tilt-inner bg-white rounded-3xl overflow-hidden shadow-[0_10px_30px_-10px_rgba(0,0,0,0.1)] hover:shadow-2xl transition-all duration-500 border border-gray-100 h-full">
                        <div class="aspect-[4/3] overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?ixlib=rb-4.0.3&w=800&q=80" alt="School ERP" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                                <span class="gradient-bg text-white text-[10px] font-bold px-4 py-2 rounded-full uppercase tracking-widest ring-1 ring-white/20">EduTech</span>
                            </div>
                        </div>
                        <div class="p-8">
                            <h3 class="text-xl font-bold text-brand-dark mb-2 group-hover:text-brand-accent transition-colors">Smartnous School ERP</h3>
                            <p class="text-xs text-brand-accent font-bold uppercase tracking-widest mb-3">Modern Education</p>
                            <p class="text-gray-500 text-sm leading-relaxed">Complete digital transformation for modern academic institutions.</p>
                        </div>
                    </div>
                </a>

                <!-- Project Card 4 -->
                <div class="project-card flex-shrink-0 w-[400px] px-4">
                    <div class="tilt-inner bg-white rounded-3xl overflow-hidden shadow-[0_10px_30px_-10px_rgba(0,0,0,0.1)] hover:shadow-2xl transition-all duration-500 border border-gray-100 group">
                        <div class="aspect-[4/3] overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1554672408-730436b60dde?ixlib=rb-4.0.3&w=800&q=80" alt="Project 4" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                                <span class="gradient-bg text-white text-[10px] font-bold px-4 py-2 rounded-full uppercase tracking-widest ring-1 ring-white/20">Retail</span>
                            </div>
                        </div>
                        <div class="p-8">
                            <h3 class="text-xl font-bold text-brand-dark mb-2 group-hover:text-brand-pink transition-colors">Hirawats E-Commerce</h3>
                            <p class="text-xs text-brand-accent font-bold uppercase tracking-widest mb-3">Scaling Solutions</p>
                            <p class="text-gray-500 text-sm leading-relaxed">Enterprise-grade medical retail platform optimized for large-scale commerce.</p>
                        </div>
                    </div>
                </div>

                <!-- Duplicates for Infinite Loop -->
                <div class="project-card flex-shrink-0 w-[400px] px-4">
                    <div class="tilt-inner bg-white rounded-3xl overflow-hidden shadow-[0_10px_30px_-10px_rgba(0,0,0,0.1)] hover:shadow-2xl transition-all duration-500 border border-gray-100 group">
                        <div class="aspect-[4/3] overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&w=800&q=80" alt="Project 1" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        </div>
                        <div class="p-8">
                            <h3 class="text-xl font-bold text-brand-dark mb-2 group-hover:text-brand-pink transition-colors">South India Shopping Mall</h3>
                            <p class="text-xs text-brand-accent font-bold uppercase tracking-widest mb-3">SEO & UI Overhaul</p>
                        </div>
                    </div>
                </div>
                <div class="project-card flex-shrink-0 w-[400px] px-4">
                    <div class="tilt-inner bg-white rounded-3xl overflow-hidden shadow-[0_10px_30px_-10px_rgba(0,0,0,0.1)] hover:shadow-2xl transition-all duration-500 border border-gray-100 group">
                        <div class="aspect-[4/3] overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&w=800&q=80" alt="Project 2" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        </div>
                        <div class="p-8">
                            <h3 class="text-xl font-bold text-brand-dark mb-2 group-hover:text-brand-pink transition-colors">KIMS Sunshine</h3>
                            <p class="text-xs text-brand-accent font-bold uppercase tracking-widest mb-3">Web Maintenance</p>
                        </div>
                    </div>
                </div>
                <div class="project-card flex-shrink-0 w-[400px] px-4">
                    <div class="tilt-inner bg-white rounded-3xl overflow-hidden shadow-[0_10px_30px_-10px_rgba(0,0,0,0.1)] hover:shadow-2xl transition-all duration-500 border border-gray-100 group">
                        <div class="aspect-[4/3] overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?ixlib=rb-4.0.3&w=800&q=80" alt="Project 3" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        </div>
                        <div class="p-8">
                            <h3 class="text-xl font-bold text-brand-dark mb-2 group-hover:text-brand-pink transition-colors">Sri Aishwarya Foods</h3>
                            <p class="text-xs text-brand-accent font-bold uppercase tracking-widest mb-3">Organic SEO</p>
                        </div>
                    </div>
                </div>
                <div class="project-card flex-shrink-0 w-[400px] px-4">
                    <div class="tilt-inner bg-white rounded-3xl overflow-hidden shadow-[0_10px_30px_-10px_rgba(0,0,0,0.1)] hover:shadow-2xl transition-all duration-500 border border-gray-100 group">
                        <div class="aspect-[4/3] overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1554672408-730436b60dde?ixlib=rb-4.0.3&w=800&q=80" alt="Project 4" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        </div>
                        <div class="p-8">
                            <h3 class="text-xl font-bold text-brand-dark mb-2 group-hover:text-brand-pink transition-colors">Hirawats E-Commerce</h3>
                            <p class="text-xs text-brand-accent font-bold uppercase tracking-widest mb-3">Scaling Solutions</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="projects-nav">
                <button type="button" class="project-dot active" data-index="0" aria-label="Show project 1"></button>
                <button type="button" class="project-dot" data-index="1" aria-label="Show project 2"></button>
                <button type="button" class="project-dot" data-index="2" aria-label="Show project 3"></button>
            </div>
        </div>

        <div class="text-center mt-6 reveal">
            <a href="#" class="inline-flex items-center gap-3 font-black text-brand-dark hover:text-brand-accent transition-all text-xs tracking-[4px] uppercase group">
                Review Case Studies <i class="uil uil-arrow-right group-hover:translate-x-2 transition-transform"></i>
            </a>
        </div>
    </section>

    </section>

    <!-- 6.6 CLIENTS LOGO MARQUEE -->
    <section class="py-10 bg-white overflow-hidden border-b border-gray-100">
        <div class="container mx-auto px-6 mb-6 text-center reveal">
            <h3 class="text-brand-dark font-black text-xl tracking-[1px] uppercase">Trusted By Industry Leaders</h3>
        </div>
        
        <!-- Row 1: Scrolling Left -->
        <div class="marquee-container mb-4">
            <div class="marquee-track scroll-left hover:pause">
                <img src="https://img.logo.dev/microsoft.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/google.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/amazon.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/netflix.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/spotify.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/adobe.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/slack.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/uber.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <!-- Duplicate for Loop -->
                <img src="https://img.logo.dev/microsoft.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/google.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/amazon.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/netflix.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/spotify.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/adobe.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/slack.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/uber.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
            </div>
        </div>

        <!-- Row 2: Scrolling Right -->
        <div class="marquee-container">
            <div class="marquee-track scroll-right hover:pause">
                <img src="https://img.logo.dev/meta.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/apple.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/tesla.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/digitalocean.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/github.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/figma.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/discord.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/stripe.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <!-- Duplicate for Loop -->
                <img src="https://img.logo.dev/meta.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/apple.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/tesla.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/digitalocean.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/github.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/figma.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/discord.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
                <img src="https://img.logo.dev/stripe.com?token=pk_S8_vL-7pSle-I-l-s-q-p-w" class="client-logo" alt="Client">
            </div>
        </div>
    </section>

    <!-- 8. TEAM SECTION -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center max-w-2xl mx-auto mb-16 reveal">
                <span class="text-brand-accent font-semibold tracking-wider text-sm uppercase mb-2 block">Our Leaders</span>
                <h2 class="text-4xl md:text-5xl font-heading font-bold">Let's See Our <span class="gradient-text">Expert Team</span></h2>
            </div>

            <div class="max-w-[850px] mx-auto">
                <div class="grid md:grid-cols-3 gap-4 justify-center">
                    <!-- Member 1 -->
                    <div class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow reveal text-center border border-gray-100 max-w-[280px] mx-auto">
                        <div class="relative overflow-hidden aspect-square p-2">
                            <div class="w-full h-full rounded-2xl overflow-hidden relative">
                                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="CEO" class="w-full h-full object-cover">
                                <div class="absolute inset-0 gradient-bg opacity-0 group-hover:opacity-70 transition-opacity duration-300"></div>
                                <!-- Social Icons Hover -->
                                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 flex gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <a href="#" class="w-8 h-8 bg-white rounded-full flex items-center justify-center text-brand-dark hover:text-brand-accent hover:-translate-y-1 transition-all text-xs"><i class="uil uil-linkedin"></i></a>
                                    <a href="#" class="w-8 h-8 bg-white rounded-full flex items-center justify-center text-brand-dark hover:text-brand-accent hover:-translate-y-1 transition-all text-xs"><i class="uil uil-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="p-4">
                            <h4 class="text-lg font-bold font-heading">David Warner</h4>
                            <p class="text-brand-accent font-medium text-xs mt-1">Founder & CEO</p>
                        </div>
                    </div>

                    <!-- Member 2 -->
                    <div class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow reveal text-center border border-gray-100 max-w-[280px] mx-auto" style="transition-delay: 100ms;">
                        <div class="relative overflow-hidden aspect-square p-2">
                            <div class="w-full h-full rounded-2xl overflow-hidden relative">
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="CTO" class="w-full h-full object-cover">
                                <div class="absolute inset-0 gradient-bg opacity-0 group-hover:opacity-70 transition-opacity duration-300"></div>
                                <!-- Social Icons Hover -->
                                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 flex gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <a href="#" class="w-8 h-8 bg-white rounded-full flex items-center justify-center text-brand-dark hover:text-brand-accent hover:-translate-y-1 transition-all text-xs"><i class="uil uil-linkedin"></i></a>
                                    <a href="#" class="w-8 h-8 bg-white rounded-full flex items-center justify-center text-brand-dark hover:text-brand-accent hover:-translate-y-1 transition-all text-xs"><i class="uil uil-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="p-4">
                            <h4 class="text-lg font-bold font-heading">Emma Stone</h4>
                            <p class="text-brand-accent font-medium text-xs mt-1">Chief Tech Officer</p>
                        </div>
                    </div>

                    <!-- Member 3 -->
                    <div class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow reveal text-center border border-gray-100 max-w-[280px] mx-auto" style="transition-delay: 200ms;">
                        <div class="relative overflow-hidden aspect-square p-2">
                            <div class="w-full h-full rounded-2xl overflow-hidden relative">
                                <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Lead Designer" class="w-full h-full object-cover">
                                <div class="absolute inset-0 gradient-bg opacity-0 group-hover:opacity-70 transition-opacity duration-300"></div>
                                <!-- Social Icons Hover -->
                                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 flex gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <a href="#" class="w-8 h-8 bg-white rounded-full flex items-center justify-center text-brand-dark hover:text-brand-accent hover:-translate-y-1 transition-all text-xs"><i class="uil uil-linkedin"></i></a>
                                    <a href="#" class="w-8 h-8 bg-white rounded-full flex items-center justify-center text-brand-dark hover:text-brand-accent hover:-translate-y-1 transition-all text-xs"><i class="uil uil-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="p-4">
                            <h4 class="text-lg font-bold font-heading">Mike Ross</h4>
                            <p class="text-brand-accent font-medium text-xs mt-1">Lead UI/UX Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. TESTIMONIALS -->
    <section class="py-24 bg-brand-gray relative overflow-hidden">
        <!-- Decor blobs -->
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-brand-accent/5 rounded-full mix-blend-multiply filter blur-3xl opacity-70"></div>
        
        <div class="container mx-auto px-6 md:px-12 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-16 reveal">
                <span class="text-brand-accent font-semibold tracking-wider text-sm uppercase mb-2 block">Reviews</span>
                <h2 class="text-4xl md:text-5xl font-heading font-bold">What Our <span class="gradient-text">Clients</span> Say?</h2>
            </div>
            
            <!-- Marquee Container for Reviews -->
            <div class="overflow-hidden py-10 relative">
                <div class="flex scroll-left hover:pause">
                    <!-- Review Card 1 -->
                    <div class="review-card flex-shrink-0 w-[400px] px-4">
                        <div class="tilt-inner bg-white p-10 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 ease-out border border-gray-100 h-full flex flex-col">
                            <div class="flex items-center gap-1 text-yellow-500 mb-6 text-sm">
                                <i class="uil uil-star"></i><i class="uil uil-star"></i><i class="uil uil-star"></i><i class="uil uil-star"></i><i class="uil uil-star"></i>
                            </div>
                            <p class="text-gray-600 mb-8 italic text-sm flex-grow">"Their web development team entirely transformed our outdated portal into a modern, lightning-fast application. Revenue increased by 40% in two months."</p>
                            <div class="flex items-center gap-4">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-12 h-12 rounded-full object-cover">
                                <div>
                                    <h5 class="font-bold text-sm">John Doe</h5>
                                    <span class="text-xs text-gray-500">CEO, TechStartup</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Review Card 2 -->
                    <div class="review-card flex-shrink-0 w-[400px] px-4">
                        <div class="tilt-inner bg-white p-10 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 ease-out border border-gray-100 h-full flex flex-col">
                            <div class="flex items-center gap-1 text-yellow-500 mb-6 text-sm">
                                <i class="uil uil-star"></i><i class="uil uil-star"></i><i class="uil uil-star"></i><i class="uil uil-star"></i><i class="uil uil-star"></i>
                            </div>
                            <p class="text-gray-600 mb-8 italic text-sm flex-grow">"Unmatched professionalism and UI/UX capability. The interface they designed is clean, corporate, and highly intuitive. Highly recommend Sahasra."</p>
                            <div class="flex items-center gap-4">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" class="w-12 h-12 rounded-full object-cover">
                                <div>
                                    <h5 class="font-bold text-sm">Emma Watson</h5>
                                    <span class="text-xs text-gray-500">Director, Growth Corp</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Review Card 3 -->
                    <div class="review-card flex-shrink-0 w-[400px] px-4">
                        <div class="tilt-inner bg-white p-10 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 ease-out border border-gray-100 h-full flex flex-col">
                            <div class="flex items-center gap-1 text-yellow-500 mb-6 text-sm">
                                <i class="uil uil-star"></i><i class="uil uil-star"></i><i class="uil uil-star"></i><i class="uil uil-star"></i><i class="uil uil-star"></i>
                            </div>
                            <p class="text-gray-600 mb-8 italic text-sm flex-grow">"We needed robust digital marketing and reliable IT management. They overdelivered on both fronts, ensuring zero downtime and great leads."</p>
                            <div class="flex items-center gap-4">
                                <img src="https://randomuser.me/api/portraits/men/86.jpg" alt="User" class="w-12 h-12 rounded-full object-cover">
                                <div>
                                    <h5 class="font-bold text-sm">Alex Smith</h5>
                                    <span class="text-xs text-gray-500">Founder, AlexStores</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Duplicated for Loop -->
                    <div class="review-card flex-shrink-0 w-[400px] px-4">
                        <div class="tilt-inner bg-white p-10 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 ease-out border border-gray-100 h-full flex flex-col">
                            <div class="flex items-center gap-1 text-yellow-500 mb-6 text-sm">
                                <i class="uil uil-star"></i><i class="uil uil-star"></i><i class="uil uil-star"></i><i class="uil uil-star"></i><i class="uil uil-star"></i>
                            </div>
                            <p class="text-gray-600 mb-8 italic text-sm flex-grow">"Their web development team entirely transformed our outdated portal into a modern, lightning-fast application. Revenue increased by 40% in two months."</p>
                            <div class="flex items-center gap-4">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-12 h-12 rounded-full object-cover">
                                <div>
                                    <h5 class="font-bold text-sm">John Doe</h5>
                                    <span class="text-xs text-gray-500">CEO, TechStartup</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review-card flex-shrink-0 w-[400px] px-4">
                        <div class="tilt-inner bg-white p-10 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 ease-out border border-gray-100 h-full flex flex-col">
                            <div class="flex items-center gap-1 text-yellow-500 mb-6 text-sm">
                                <i class="uil uil-star"></i><i class="uil uil-star"></i><i class="uil uil-star"></i><i class="uil uil-star"></i><i class="uil uil-star"></i>
                            </div>
                            <p class="text-gray-600 mb-8 italic text-sm flex-grow">"Unmatched professionalism and UI/UX capability. The interface they designed is clean, corporate, and highly intuitive. Highly recommend Sahasra."</p>
                            <div class="flex items-center gap-4">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" class="w-12 h-12 rounded-full object-cover">
                                <div>
                                    <h5 class="font-bold text-sm">Emma Watson</h5>
                                    <span class="text-xs text-gray-500">Director, Growth Corp</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review-card flex-shrink-0 w-[400px] px-4">
                        <div class="tilt-inner bg-white p-10 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 ease-out border border-gray-100 h-full flex flex-col">
                            <div class="flex items-center gap-1 text-yellow-500 mb-6 text-sm">
                                <i class="uil uil-star"></i><i class="uil uil-star"></i><i class="uil uil-star"></i><i class="uil uil-star"></i><i class="uil uil-star"></i>
                            </div>
                            <p class="text-gray-600 mb-8 italic text-sm flex-grow">"We needed robust digital marketing and reliable IT management. They overdelivered on both fronts, ensuring zero downtime and great leads."</p>
                            <div class="flex items-center gap-4">
                                <img src="https://randomuser.me/api/portraits/men/86.jpg" alt="User" class="w-12 h-12 rounded-full object-cover">
                                <div>
                                    <h5 class="font-bold text-sm">Alex Smith</h5>
                                    <span class="text-xs text-gray-500">Founder, AlexStores</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </section>
 
    <!-- 6.5 OUR PROCESS SECTION (PRO MAX UPGRADE) -->
    <section class="py-24 bg-transparent relative overflow-hidden">
        <!-- Section Decor Blobs -->
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-brand-accent/5 rounded-full blur-[100px] -mr-96 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-brand-accent/5 rounded-full blur-[100px] -ml-96 pointer-events-none"></div>

        <div class="max-w-[1100px] mx-auto px-6 relative z-10">
            <div class="flex items-center gap-4 mb-20 reveal">
                <div class="w-14 h-14 rounded-2xl bg-brand-accent flex items-center justify-center text-white text-3xl shadow-xl shadow-brand-accent/20 rotate-3">
                    <i class="uil uil-layers-alt"></i>
                </div>
                <h2 class="text-4xl md:text-5xl font-heading font-bold">Our Digital <span class="gradient-text">Process</span></h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 01 -->
                <div class="process-card group cursor-pointer reveal">
                    <div class="tilt-inner bg-white/70 backdrop-blur-md p-8 rounded-[40px] border border-white/50 shadow-[0_20px_50px_-20px_rgba(0,0,0,0.05)] hover:shadow-2xl hover:bg-brand-accent transition-all duration-500 h-full relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-brand-accent to-brand-accent-end opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="relative z-10">
                            <div class="flex justify-between items-start mb-8">
                                <div class="w-16 h-16 rounded-2xl bg-brand-accent/5 flex items-center justify-center text-brand-accent text-3xl group-hover:bg-white group-hover:text-brand-accent group-hover:rotate-12 transition-all duration-700 shadow-sm">
                                    <i class="uil uil-lightbulb-alt"></i>
                                </div>
                                <span class="text-6xl font-black text-gray-100/50 group-hover:text-white/10 transition-colors duration-700">01</span>
                            </div>
                            <h3 class="text-2xl font-bold mb-4 font-heading group-hover:text-white transition-colors">Ideate</h3>
                            <p class="text-gray-500 leading-relaxed text-sm group-hover:text-white/90">We analyze your brand, audience, and goals to spark data-driven ideas that align with your vision.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 02 -->
                <div class="process-card group cursor-pointer reveal">
                    <div class="tilt-inner bg-white/70 backdrop-blur-md p-8 rounded-[40px] border border-white/50 shadow-[0_20px_50px_-20px_rgba(0,0,0,0.05)] hover:shadow-2xl hover:bg-brand-accent transition-all duration-500 h-full relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-brand-accent to-brand-accent-end opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="relative z-10">
                            <div class="flex justify-between items-start mb-8">
                                <div class="w-16 h-16 rounded-2xl bg-brand-accent/5 flex items-center justify-center text-brand-accent text-3xl group-hover:bg-white group-hover:text-brand-accent group-hover:rotate-12 transition-all duration-700 shadow-sm">
                                    <i class="uil uil-brackets-curly"></i>
                                </div>
                                <span class="text-6xl font-black text-gray-100/50 group-hover:text-white/10 transition-colors duration-700">02</span>
                            </div>
                            <h3 class="text-2xl font-bold mb-4 font-heading group-hover:text-white transition-colors">Develop</h3>
                            <p class="text-gray-500 leading-relaxed text-sm group-hover:text-white/90">Our engineers build scalable, secure, and fast applications using the latest modern tech stacks.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 03 -->
                <div class="process-card group cursor-pointer reveal">
                    <div class="tilt-inner bg-white/70 backdrop-blur-md p-8 rounded-[40px] border border-white/50 shadow-[0_20px_50px_-20px_rgba(0,0,0,0.05)] hover:shadow-2xl hover:bg-brand-accent transition-all duration-500 h-full relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-brand-accent to-brand-accent-end opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="relative z-10">
                            <div class="flex justify-between items-start mb-8">
                                <div class="w-16 h-16 rounded-2xl bg-brand-accent/5 flex items-center justify-center text-brand-accent text-3xl group-hover:bg-white group-hover:text-brand-accent group-hover:rotate-12 transition-all duration-700 shadow-sm">
                                    <i class="uil uil-palette"></i>
                                </div>
                                <span class="text-6xl font-black text-gray-100/50 group-hover:text-white/10 transition-colors duration-700">03</span>
                            </div>
                            <h3 class="text-2xl font-bold mb-4 font-heading group-hover:text-white transition-colors">Design</h3>
                            <p class="text-gray-500 leading-relaxed text-sm group-hover:text-white/90">We craft user-centric designs that captivate, convert, and reflect your brand identity across all platforms.</p>
                        </div>
                    </div>
                </div>
                <!-- Step 04 -->
                <div class="process-card reveal">
                    <div class="tilt-inner bg-brand-accent p-8 rounded-[40px] border border-white/50 shadow-2xl transition-all duration-500 h-full relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-brand-accent to-brand-accent-end opacity-100 transition-opacity duration-500"></div>
                        <div class="relative z-10">
                            <div class="flex justify-between items-start mb-8">
                                <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center text-brand-accent text-3xl rotate-12 transition-all duration-700 shadow-sm">
                                    <i class="uil uil-rocket"></i>
                                </div>
                                <span class="text-6xl font-black text-white/10 transition-colors duration-700">04</span>
                            </div>
                            <h3 class="text-2xl font-bold mb-4 font-heading text-white transition-colors">Launch</h3>
                            <p class="text-white/90 leading-relaxed text-sm transition-colors">We ensure a seamless deployment, followed by strategic analysis to maximize growth and scalability from day one.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<br/>
    <section id="faq" class="py-24 bg-brand-gray/30 overflow-hidden">
        <div class="max-w-[1000px] mx-auto px-6">
            <div class="text-center mb-16 reveal">
                <span class="text-brand-accent font-semibold tracking-wider text-sm uppercase mb-4 block">Common Questions</span>
                <h2 class="text-4xl md:text-5xl font-heading font-bold">Frequently Asked <span class="gradient-text">Questions</span></h2>
            </div>

            <div class="divide-y divide-gray-100" x-data="{ active: 1 }">
                <!-- FAQ 1 -->
                <div class="faq-item reveal" :class="{ 'active': active === 1 }">
                    <div class="faq-header" @click="active = active === 1 ? null : 1">
                        <h4 class="text-xl font-bold transition-all duration-300">What specific IT services does Sahasra Barath provide?</h4>
                        <div class="faq-icon text-2xl">
                            <i class="uil uil-plus" x-show="active !== 1"></i>
                            <i class="uil uil-minus" x-show="active === 1"></i>
                        </div>
                    </div>
                    <div x-show="active === 1" x-collapse x-cloak>
                        <div class="faq-content">
                            We offer a comprehensive suite of digital services including high-end web development, mobile application design, UI/UX architecture, digital marketing strategy, and cloud infrastructure management. Our focus is on building scalable, future-proof solutions for modern businesses.
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="faq-item reveal" :class="{ 'active': active === 2 }" style="transition-delay: 100ms;">
                    <div class="faq-header" @click="active = active === 2 ? null : 2">
                        <h4 class="text-lg font-bold transition-all duration-300">How long does a typical digital project take to complete?</h4>
                        <div class="faq-icon text-2xl">
                            <i class="uil uil-plus" x-show="active !== 2"></i>
                            <i class="uil uil-minus" x-show="active === 2"></i>
                        </div>
                    </div>
                    <div x-show="active === 2" x-collapse x-cloak>
                        <div class="faq-content">
                            Timeline depends on project scope, but a standard corporate website typically takes 3 to 5 weeks from initial ideation to launch. Complex enterprise software or bespoke e-commerce platforms may take 8 to 12 weeks including rigorous testing and quality assurance phases.
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="faq-item reveal" :class="{ 'active': active === 3 }" style="transition-delay: 200ms;">
                    <div class="faq-header" @click="active = active === 3 ? null : 3">
                        <h4 class="text-lg font-bold transition-all duration-300">Do you offer post-launch maintenance and support?</h4>
                        <div class="faq-icon text-2xl">
                            <i class="uil uil-plus" x-show="active !== 3"></i>
                            <i class="uil uil-minus" x-show="active === 3"></i>
                        </div>
                    </div>
                    <div x-show="active === 3" x-collapse x-cloak>
                        <div class="faq-content">
                            Absolutely. We provide dedicated post-launch support packages including 24/7 technical monitoring, security patches, content updates, and performance optimization. We ensure your digital assets remain fast, secure, and up-to-date with the latest industry standards.
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="faq-item reveal" :class="{ 'active': active === 4 }" style="transition-delay: 300ms;">
                    <div class="faq-header" @click="active = active === 4 ? null : 4">
                        <h4 class="text-lg font-bold transition-all duration-300">Can you modernize and rebrand an existing website?</h4>
                        <div class="faq-icon text-2xl">
                            <i class="uil uil-plus" x-show="active !== 4"></i>
                            <i class="uil uil-minus" x-show="active === 4"></i>
                        </div>
                    </div>
                    <div x-show="active === 4" x-collapse x-cloak>
                        <div class="faq-content">
                            Yes, rebranding is one of our specialities. We analyze your current digital presence and perform a complete 'High-Fidelity' UI/UX overhaul. We migrate your data to modern frameworks, improve loading speeds, and ensure your brand identity feels premium and competitive in today's market.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. REQUEST CALL BACK FORM -->
    <section id="contact" class="py-24 bg-white relative">
        <div class="container mx-auto px-6 md:px-12 grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left Image -->
            <div class="relative reveal h-[600px] hidden lg:block">
                <div class="absolute inset-0 bg-brand-accent/10 rounded-3xl transform rotate-3 z-0"></div>
                <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?ixlib=rb-4.0.3&auto=format&fit=crop&w=700&q=80" alt="Contact Us" class="w-full h-full object-cover rounded-3xl z-10 relative">
                <!-- Play button overlay simulate video -->
                <div class="absolute inset-0 z-20 flex items-center justify-center">
                    <div class="w-20 h-20 bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center cursor-pointer hover:scale-110 transition-transform">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-lg text-brand-accent text-2xl">
                            <i class="uil uil-play ml-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Form -->
            <div class="bg-white p-10 md:p-12 rounded-3xl shadow-[0_20px_50px_-10px_rgba(0,0,0,0.1)] border border-gray-100 reveal relative z-10">
                <span class="text-brand-accent font-semibold tracking-wider text-sm uppercase mb-2 block">Contact Now</span>
                <h2 class="text-3xl md:text-4xl font-heading font-bold mb-8">Request A <span class="gradient-text">Call Back</span></h2>
                
                <form onsubmit="event.preventDefault();" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <input type="text" placeholder="Your Name" class="w-full outline-none border border-gray-200 focus:border-brand-accent rounded-xl px-5 py-4 bg-gray-50 focus:bg-white transition-colors" required>
                        </div>
                        <div>
                            <input type="email" placeholder="Email Address" class="w-full outline-none border border-gray-200 focus:border-brand-accent rounded-xl px-5 py-4 bg-gray-50 focus:bg-white transition-colors" required>
                        </div>
                    </div>
                    <div>
                        <input type="tel" placeholder="Phone Number" class="w-full outline-none border border-gray-200 focus:border-brand-accent rounded-xl px-5 py-4 bg-gray-50 focus:bg-white transition-colors">
                    </div>
                    <div>
                        <textarea placeholder="Write Your Message..." rows="4" class="w-full outline-none border border-gray-200 focus:border-brand-accent rounded-xl px-5 py-4 bg-gray-50 focus:bg-white transition-colors resize-none" required></textarea>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="btn-7 shadow-lg transition-transform hover:scale-105">
                            <span>Submit Request <i class="uil uil-envelope-check ml-1"></i></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- 12. FOOTER -->
    <footer class="bg-brand-dark pt-24 pb-12 text-gray-400 overflow-hidden relative">
        <!-- Decoration -->
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-brand-accent/5 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="container mx-auto px-6 md:px-12 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">
                <!-- Col 1 -->
                <div>
                    <a href="#" class="flex items-center gap-2 mb-8">
                        <div class="w-10 h-10 rounded-xl gradient-bg flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-brand-accent/20">S</div>
                        <span class="font-heading font-bold text-2xl text-white tracking-tight">Sahasra<span class="text-brand-accent">.</span></span>
                    </a>
                    <p class="text-[15px] leading-relaxed mb-8 text-gray-400">Transforming global businesses through high-fidelity digital solutions and premium IT architecture. We don't just build, we innovate.</p>
                    <div class="flex gap-4">
                        <a href="#" class="footer-social-icon"><i class="uil uil-facebook-f"></i></a>
                        <a href="#" class="footer-social-icon"><i class="uil uil-instagram"></i></a>
                        <a href="#" class="footer-social-icon"><i class="uil uil-twitter"></i></a>
                        <a href="#" class="footer-social-icon"><i class="uil uil-linkedin"></i></a>
                    </div>
                </div>

                <!-- Col 2 -->
                <div class="lg:pl-10">
                    <h4 class="text-white text-lg font-bold mb-8 font-heading relative inline-block">
                        Our Services
                        <span class="absolute -bottom-2 left-0 w-12 h-1 bg-brand-accent rounded-full"></span>
                    </h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="footer-link"><i class="uil uil-angle-right-b mr-2 text-brand-accent"></i> Web Development</a></li>
                        <li><a href="#" class="footer-link"><i class="uil uil-angle-right-b mr-2 text-brand-accent"></i> UI/UX Design</a></li>
                        <li><a href="#" class="footer-link"><i class="uil uil-angle-right-b mr-2 text-brand-accent"></i> Digital Marketing</a></li>
                        <li><a href="#" class="footer-link"><i class="uil uil-angle-right-b mr-2 text-brand-accent"></i> Cloud Solutions</a></li>
                        <li><a href="#" class="footer-link"><i class="uil uil-angle-right-b mr-2 text-brand-accent"></i> App Development</a></li>
                    </ul>
                </div>

                <!-- Col 3 -->
                <div class="lg:pl-10">
                    <h4 class="text-white text-lg font-bold mb-8 font-heading relative inline-block">
                        Quick Links
                        <span class="absolute -bottom-2 left-0 w-12 h-1 bg-brand-accent rounded-full"></span>
                    </h4>
                    <ul class="space-y-4">
                        <li><a href="#about" class="footer-link">About Our Agency</a></li>
                        <li><a href="#portfolio" class="footer-link">Case Studies</a></li>
                        <li><a href="#" class="footer-link">Latest Insights</a></li>
                        <li><a href="#contact" class="footer-link">Contact Support</a></li>
                        <li><a href="#" class="footer-link">Terms of Service</a></li>
                    </ul>
                </div>

                <!-- Col 4 -->
                <div>
                    <h4 class="text-white text-lg font-bold mb-8 font-heading relative inline-block">
                        Reach Us
                        <span class="absolute -bottom-2 left-0 w-12 h-1 bg-brand-accent rounded-full"></span>
                    </h4>
                    <ul class="space-y-5">
                        <li class="flex items-start gap-4 footer-contact-item">
                            <i class="uil uil-map-marker text-brand-accent text-xl mt-1"></i>
                            <span class="text-[15px]">123 Tech Avenue, Silicon Valley, CA 90210</span>
                        </li>
                        <li class="flex items-center gap-4 footer-contact-item">
                            <i class="uil uil-envelope text-brand-accent text-xl"></i>
                            <a href="mailto:info@sahasra.com" class="hover:text-white transition-colors text-[15px]">info@sahasra.com</a>
                        </li>
                        <li class="flex items-center gap-4 footer-contact-item">
                            <i class="uil uil-phone-alt text-brand-accent text-xl"></i>
                            <a href="tel:+918885526751" class="hover:text-white transition-colors text-[15px]">+91 88855 26751</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Strip -->
            <div class="border-t border-white/5 pt-10 flex flex-col md:flex-row justify-between items-center gap-6 text-sm text-gray-500">
                <p>&copy; 2026 Sahasra IT Solutions. Premium Digital Excellence.</p>
                <div class="flex items-center gap-8">
                    <a href="#" class="hover:text-brand-accent transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-brand-accent transition-colors">Cookie Policy</a>
                    <a href="#" class="hover:text-brand-accent transition-colors">Support Center</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS for scroll animations -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Initial Reveal Observer
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.reveal').forEach((el) => {
                observer.observe(el);
            });

            // Initialize Engines
            initThreeJS();
            initHeroSlider();
            initProjectMarquee();
            initGlobalAnimations();
            
            // Remove Loader
            setTimeout(() => document.body.classList.remove('loading'), 500);
        });
        
        let currentSlide = 0;
        const totalSlides = 3;
        const slideData = [
            { 
                title: "Future-Proof <br/> <span class='gradient-text'>Innovation</span>", 
                desc: "Architecting the future of digital commerce with enterprise-grade ecosystems that redefine connectivity.",
                index: "01 / 03"
            },
            { 
                title: "Global <br/> <span class='gradient-text'>Security</span>", 
                desc: "High-performance infrastructure optimized for the next generation of digital marketing and global reach.",
                index: "02 / 03"
            },
            { 
                title: "Pixel Perfect <br/> <span class='gradient-text'>Precision</span>", 
                desc: "Where visionary design meets rigorous engineering to create stunning user experiences in every frame.",
                index: "03 / 03"
            }
        ];

        function updateSlide(index) {
            const images = document.querySelectorAll('.slide-image');
            const dots = document.querySelectorAll('.dot-item');
            const slideTitle = document.querySelector('#slide-title');
            const slideDesc = document.querySelector('#slide-desc');
            const indexText = document.querySelector('.slide-index-text');

            // Content Transition
            const tl = gsap.timeline();
            if (index === currentSlide && !window.heroFirstLoad) {
                // First load path (don't fade out)
                window.heroFirstLoad = true;
                slideTitle.innerHTML = slideData[index].title;
                slideDesc.innerText = slideData[index].desc;
                gsap.fromTo([slideTitle, slideDesc], { y: 20, opacity: 0 }, { y: 0, opacity: 1, duration: 0.8, stagger: 0.1, ease: "power2.out" });
            } else {
                tl.to([slideTitle, slideDesc], { y: -20, opacity: 0, duration: 0.4, ease: "power2.in" })
                  .call(() => {
                      slideTitle.innerHTML = slideData[index].title;
                      slideDesc.innerText = slideData[index].desc;
                      if (indexText) indexText.innerText = slideData[index].index;
                  })
                  .fromTo([slideTitle, slideDesc], { y: 20, opacity: 0 }, { y: 0, opacity: 1, duration: 0.8, stagger: 0.1, ease: "power2.out" });
            }

            // Dots Update
            dots.forEach((dot, i) => {
                gsap.to(dot, {
                    width: i === index ? 64 : 32,
                    opacity: i === index ? 1 : 0.2,
                    duration: 0.5
                });
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlide(currentSlide);
        }

        function initHeroSlider() {
            if (document.querySelectorAll('.slide-image').length === 0) return;
            setInterval(nextSlide, 7000);
            updateSlide(0);
        }

        function initProjectMarquee() {
            const container = document.querySelector('.projects-wrapper');
            const dots = document.querySelectorAll('.project-dot');
            if (!container || dots.length === 0) return;

            let isDragging = false;
            let startX = 0;
            let startScroll = 0;
            let autoScrollTimer = null;
            const cards = Array.from(container.querySelectorAll('.project-card'));
            const projectTargets = cards.slice(0, 3);

            const setActiveDot = (index) => {
                dots.forEach((dot, i) => dot.classList.toggle('active', i === index));
            };

            const scrollToProject = (index) => {
                const card = projectTargets[index];
                if (!card) return;
                container.scrollTo({ left: card.offsetLeft, behavior: 'smooth' });
                setActiveDot(index);
            };

            const stopAutoScroll = () => {
                if (autoScrollTimer) {
                    clearInterval(autoScrollTimer);
                    autoScrollTimer = null;
                }
            };

            const startAutoScroll = () => {
                stopAutoScroll();
                autoScrollTimer = setInterval(() => {
                    if (isDragging) return;
                    const maxScroll = container.scrollWidth - container.clientWidth;
                    if (container.scrollLeft >= maxScroll - 2) {
                        container.scrollLeft = 0;
                        setActiveDot(0);
                    } else {
                        container.scrollLeft += 1;
                    }
                    updateActiveDotOnScroll();
                }, 18);
            };

            dots.forEach(dot => {
                dot.addEventListener('click', () => {
                    const index = Number(dot.dataset.index);
                    scrollToProject(index);
                    stopAutoScroll();
                    setTimeout(startAutoScroll, 4000);
                });
            });

            const updateActiveDotOnScroll = () => {
                const positions = projectTargets.map(card => Math.abs(card.offsetLeft - container.scrollLeft));
                const nearest = positions.indexOf(Math.min(...positions));
                setActiveDot(nearest);
            };

            container.addEventListener('mousedown', (event) => {
                isDragging = true;
                container.classList.add('dragging');
                const rect = container.getBoundingClientRect();
                startX = event.clientX - rect.left;
                startScroll = container.scrollLeft;
                stopAutoScroll();
            });

            container.addEventListener('mousemove', (event) => {
                if (!isDragging) return;
                event.preventDefault();
                const rect = container.getBoundingClientRect();
                const x = event.clientX - rect.left;
                const walk = (x - startX) * 1.2;
                container.scrollLeft = startScroll - walk;
                updateActiveDotOnScroll();
            });

            document.addEventListener('mouseup', () => {
                if (!isDragging) return;
                isDragging = false;
                container.classList.remove('dragging');
                setTimeout(startAutoScroll, 1000);
            });

            container.addEventListener('mouseleave', () => {
                if (!isDragging) return;
                isDragging = false;
                container.classList.remove('dragging');
                setTimeout(startAutoScroll, 1000);
            });

            container.addEventListener('touchstart', (event) => {
                isDragging = true;
                const rect = container.getBoundingClientRect();
                startX = event.touches[0].clientX - rect.left;
                startScroll = container.scrollLeft;
                stopAutoScroll();
            }, { passive: true });

            container.addEventListener('touchmove', (event) => {
                if (!isDragging) return;
                const rect = container.getBoundingClientRect();
                const x = event.touches[0].clientX - rect.left;
                const walk = (x - startX) * 1.2;
                container.scrollLeft = startScroll - walk;
                updateActiveDotOnScroll();
            }, { passive: false });

            container.addEventListener('touchend', () => {
                isDragging = false;
                setTimeout(startAutoScroll, 1000);
            });

            container.addEventListener('wheel', (event) => {
                if (Math.abs(event.deltaX) > 0 || Math.abs(event.deltaY) > 0) {
                    event.preventDefault();
                    container.scrollLeft += event.deltaY || event.deltaX;
                    updateActiveDotOnScroll();
                    stopAutoScroll();
                    setTimeout(startAutoScroll, 1500);
                }
            }, { passive: false });

            container.addEventListener('scroll', () => {
                if (!isDragging) updateActiveDotOnScroll();
            });

            startAutoScroll();
        }

        // --- GLOBAL THREE.JS ENGINE ---
        function initThreeJS() {
            const container = document.getElementById('three-canvas-container');
            if (!container) return;

            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
            const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
            
            renderer.setSize(window.innerWidth, window.innerHeight);
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
            container.appendChild(renderer.domElement);

            const particlesGeometry = new THREE.BufferGeometry();
            const particlesCount = 4000;
            const posArray = new Float32Array(particlesCount * 3);
            for (let i = 0; i < particlesCount * 3; i++) {
                posArray[i] = (Math.random() - 0.5) * 15;
            }
            particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));
            const particleColor = getComputedStyle(document.documentElement).getPropertyValue('--brand-accent').trim() || '#00D4FF';
            const particleMaterial = new THREE.PointsMaterial({
                size: 0.005,
                color: particleColor,
                transparent: true,
                opacity: 0.5,
                blending: THREE.AdditiveBlending
            });
            const particlesMesh = new THREE.Points(particlesGeometry, particleMaterial);
            scene.add(particlesMesh);

            const shapes = [];
            const addShape = (geometry, x, y, z, speed) => {
                const material = new THREE.MeshNormalMaterial({ wireframe: true, transparent: true, opacity: 0.1 });
                const mesh = new THREE.Mesh(geometry, material);
                mesh.position.set(x, y, z);
                scene.add(mesh);
                shapes.push({ mesh, speed, initialY: y });
            };

            addShape(new THREE.TorusGeometry(0.8, 0.2, 16, 100), 4, 3, -2, 0.002);
            addShape(new THREE.IcosahedronGeometry(0.7, 1), -5, -3, -1, 0.003);
            addShape(new THREE.OctahedronGeometry(0.5, 0), 3, -4, 1, 0.001);

            camera.position.z = 6;

            let mouseX = 0, mouseY = 0;
            document.addEventListener('mousemove', (e) => {
                mouseX = (e.clientX - window.innerWidth / 2) / 100;
                mouseY = (e.clientY - window.innerHeight / 2) / 100;
            });

            const clock = new THREE.Clock();
            const animate = () => {
                const elapsedTime = clock.getElapsedTime();
                requestAnimationFrame(animate);
                particlesMesh.rotation.y = elapsedTime * 0.02 + mouseX * 0.01;
                particlesMesh.rotation.x = -mouseY * 0.01;
                shapes.forEach((s, i) => {
                    s.mesh.rotation.x += s.speed;
                    s.mesh.rotation.y += s.speed * 1.5;
                    s.mesh.position.y = s.initialY + Math.sin(elapsedTime * 0.5 + i) * 0.4;
                });
                renderer.render(scene, camera);
            };
            animate();

            window.addEventListener('resize', () => {
                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(window.innerWidth, window.innerHeight);
            });
        }

        // --- GSAP 3 GLOBAL ENGINE ---
        function initGlobalAnimations() {
            gsap.registerPlugin(ScrollTrigger);

            // 0. ULTIMATE BOOT SEQUENCE (Entrance)
            const entranceTL = gsap.timeline();
            
            // Fix initial visibility for GSAP targets
            gsap.set('.hero-floating-card', { opacity: 0, scale: 0.8 });
            gsap.set('canvas', { opacity: 0 }); // Particle canvas

            entranceTL
                .to('body', { opacity: 1, duration: 0.1 })
                .to('canvas', { opacity: 0.4, duration: 2 }) // Background particles fade in
                .from('header', { y: -100, opacity: 0, duration: 1.2, ease: "expo.out" }, "<")
                .from('#home h1 span', { 
                    y: 100, 
                    opacity: 0, 
                    filter: "blur(20px)", 
                    rotationX: -45,
                    duration: 1.5, 
                    stagger: 0.2,
                    ease: "power4.out" 
                }, "-=1.4")
                .from('#home p, #home .flex.flex-col.sm\\:flex-row', {
                    y: 30,
                    opacity: 0,
                    duration: 1,
                    ease: "power3.out"
                }, "-=1")
                .from('.hero-floating-card', {
                    x: (i) => {
                        const offsets = [-600, -600, -800, 600, 600, 800];
                        return offsets[i];
                    },
                    y: (i) => {
                        const offsets = [-600, 600, 0, -600, 600, 0];
                        return offsets[i];
                    },
                    rotation: (i) => i < 3 ? -45 : 45,
                    opacity: 0,
                    filter: "blur(30px)",
                    scale: 0.2,
                    duration: 2.2,
                    stagger: 0.1,
                    ease: "elastic.out(0.6, 0.4)", // Snappy overshoot
                    onComplete: () => {
                        document.querySelectorAll('.hero-floating-card').forEach(c => {
                            c.classList.add('orbit-float-active');
                            c.style.opacity = 1;
                            c.style.pointerEvents = "auto";
                            gsap.to(c, { filter: "blur(0px)", duration: 0.8 });
                        });
                    }
                }, "-=1.8");

            // 1. Mouse Follow / Magnetic Parallax for Orbit Cards
            document.addEventListener('mousemove', (e) => {
                const mouseX = e.clientX;
                const mouseY = e.clientY;

                document.querySelectorAll('.hero-floating-card').forEach((node, i) => {
                    const rect = node.getBoundingClientRect();
                    const nodeX = rect.left + rect.width / 2;
                    const nodeY = rect.top + rect.height / 2;
                    
                    const dist = Math.sqrt(Math.pow(mouseX - nodeX, 2) + Math.pow(mouseY - nodeY, 2));
                    const threshold = 300;
                    
                    // Base parallax
                    const px = (mouseX - window.innerWidth / 2) / (40 + i * 5);
                    const py = (mouseY - window.innerHeight / 2) / (40 + i * 5);

                    if (dist < threshold) {
                        // Magnetic Attraction
                        const power = (threshold - dist) / threshold;
                        const mx = (mouseX - nodeX) * 0.2 * power;
                        const my = (mouseY - nodeY) * 0.2 * power;
                        
                        gsap.to(node, { 
                            x: px + mx, 
                            y: py + my, 
                            scale: 1.05,
                            duration: 0.6, 
                            ease: "power2.out" 
                        });
                    } else {
                        gsap.to(node, { 
                            x: px, 
                            y: py, 
                            scale: 1,
                            duration: 1.5, 
                            ease: "power2.out" 
                        });
                    }
                });
            });

            // Magnetic Interaction
            document.querySelectorAll('.process-card, .btn-7, .footer-social-icon, .magnetic-btn').forEach(el => {
                el.addEventListener('mousemove', e => {
                    const rect = el.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;
                    gsap.to(el, {
                        duration: 0.3,
                        x: x * 0.15,
                        y: y * 0.15,
                        rotationX: -y * 0.05,
                        rotationY: x * 0.05,
                        scale: 1.03,
                        ease: "power2.out"
                    });
                });
                el.addEventListener('mouseleave', () => {
                    gsap.to(el, {
                        duration: 0.6,
                        x: 0, y: 0, rotationX: 0, rotationY: 0, scale: 1,
                        ease: "elastic.out(1, 0.3)"
                    });
                });
            });

            // Section Reveal (Framer Motion feel)
            document.querySelectorAll('.reveal').forEach(section => {
                const children = section.querySelectorAll('.process-card, .project-card, .review-card, p, h2');
                
                if (children.length > 0) {
                    gsap.from(children, {
                        scrollTrigger: {
                            trigger: section,
                            start: "top 85%",
                        },
                        y: 40,
                        opacity: 0,
                        duration: 1,
                        stagger: 0.15,
                        ease: "back.out(1.7)"
                    });
                } else {
                    gsap.to(section, {
                        scrollTrigger: {
                            trigger: section,
                            start: "top 85%",
                            onEnter: () => section.classList.add('active')
                        }
                    });
                }
            });

            // 3D Tilt Effect for All Cards
            document.querySelectorAll('.project-card, .review-card, .process-card, .cardserv .wrap').forEach(card => {
                const inner = card.querySelector('.tilt-inner');
                if(!inner) return;

                card.addEventListener('mousemove', e => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;

                    gsap.to(inner, {
                        duration: 0.3,
                        rotationX: -y * 0.15,
                        rotationY: x * 0.15,
                        scale: 1.03,
                        ease: "power1.out",
                        transformPerspective: 1200
                    });
                });

                card.addEventListener('mouseleave', () => {
                    gsap.to(inner, {
                        duration: 0.8,
                        rotationX: 0,
                        rotationY: 0,
                        scale: 1,
                        ease: "elastic.out(1, 0.3)"
                    });
                });
            });
        }

    </script>
</body>
</html>
