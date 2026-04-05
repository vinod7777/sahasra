<?php $root = '../'; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Website Design | Sahasra Barath Creative Agency</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/style.css">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

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
                    }
                }
            }
        }
    </script>
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
        .glass-form {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .dark-theme .glass-form {
            background: rgba(0, 0, 0, 0.2);
            border-color: rgba(255, 255, 255, 0.05);
        }
        .theme-aware-hero {
            background-color: #ffffff;
            transition: all 0.4s ease;
        }
        .theme-aware-hero h1, .theme-aware-hero h3, .theme-aware-hero h2 { color: #000B1A; }
        .theme-aware-hero p { color: #475569; }
        .theme-aware-hero .feature-label { color: #1e293b; }
        .theme-aware-hero .glass-form { background: rgba(0, 0, 0, 0.02); border-color: rgba(0, 0, 0, 0.05); color: #000B1A; }
        .theme-aware-hero input, .theme-aware-hero textarea { background: #fff; color: #000; border-color: #e2e8f0; }

        .dark-theme .theme-aware-hero {
            background-color: #00050D;
        }
        .dark-theme .theme-aware-hero h1, .dark-theme .theme-aware-hero h3, .dark-theme .theme-aware-hero h2 { color: #ffffff; }
        .dark-theme .theme-aware-hero p { color: #94a3b8; }
        .dark-theme .theme-aware-hero .feature-label { color: #cbd5e1; }
        .dark-theme .theme-aware-hero .glass-form { background: rgba(255, 255, 255, 0.03); border-color: rgba(255, 255, 255, 0.1); color: #fff; }
        .dark-theme .theme-aware-hero input, .dark-theme .theme-aware-hero textarea { background: rgba(255, 255, 255, 0.05); color: #fff; border-color: rgba(255, 255, 255, 0.1); }
        
        .gradient-bg {
            background: linear-gradient(135deg, var(--brand-accent-start, #2563EB) 0%, var(--brand-accent-end, #00D4FF) 100%);
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
                if (hex.length === 3) { hex = hex[0] + hex[0] + hex[1] + hex[1] + hex[2] + hex[2]; }
                const r = parseInt(hex.substring(0, 2), 16);
                const g = parseInt(hex.substring(2, 4), 16);
                const b = parseInt(hex.substring(4, 6), 16);
                if (isNaN(r) || isNaN(g) || isNaN(b)) return 0;
                return (0.299 * r + 0.587 * g + 0.114 * b) / 255;
            }
            let savedColor = localStorage.getItem('sahasra-accent-color') || DEFAULT_BLUE;
            let savedGradient = localStorage.getItem('sahasra-accent-gradient') || DEFAULT_GRADIENT;
            if (getLuminance(savedColor) > 0.85) {
                savedColor = DEFAULT_BLUE; savedGradient = DEFAULT_GRADIENT;
                localStorage.setItem('sahasra-accent-color', DEFAULT_BLUE);
                localStorage.setItem('sahasra-accent-gradient', DEFAULT_GRADIENT);
            }
            const root = document.documentElement;
            root.style.setProperty('--brand-accent', savedColor);
            root.style.setProperty('--brand-accent-start', savedColor);
            root.style.setProperty('--brand-accent-end', savedGradient);
            const savedTheme = localStorage.getItem('sahasra-theme') || 'light';
            document.documentElement.classList.toggle('dark-theme', savedTheme === 'dark');
        })();
    </script>
</head>
<body class="font-sans text-brand-dark bg-brand-gray antialiased selection:bg-brand-accent selection:text-white" x-data="{ scrolled: false, mobileMenuOpen: false }" @scroll.window="scrolled = (window.pageYOffset > 20)">

    <?php include '../includes/theme-toggle.php'; ?>
    <?php include '../includes/nav.php'; ?>

    <!-- 1. CREATIVE VISION HERO -->
    <section id="home" class="relative pt-6 pb-6 theme-aware-hero overflow-hidden">
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-brand-accent/5 rounded-full blur-[150px] -mr-96 -mt-96 animate-blob"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-brand-accent/5 rounded-full blur-[120px] -ml-48 -mb-48 animate-blob" style="animation-delay: 2s"></div>

        <div class="container mx-auto px-6 md:px-12 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <div class="reveal">
                    <h1 class="text-3xl md:text-5xl lg:text-7xl font-heading font-black mb-6 leading-[1.1] tracking-tighter uppercase italic">
                        Digital <br/>
                        <span class="gradient-text">Masterpieces.</span>
                    </h1>
                    <p class="text-base md:text-lg mb-8 max-w-xl leading-relaxed opacity-70">
                        We blend high-fidelity aesthetics with clinical UI/UX engineering to create web experiences that don't just look good—they convert.
                    </p>

                    <div class="grid sm:grid-cols-2 gap-4 mb-10">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent"><i class="uil uil-palette"></i></div>
                            <span class="text-xs font-bold feature-label uppercase tracking-widest leading-none">Artistic UI/UX</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent"><i class="uil uil-mobile-android"></i></div>
                            <span class="text-xs font-bold feature-label uppercase tracking-widest leading-none">Responsive DNA</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent"><i class="uil uil-bolt"></i></div>
                            <span class="text-xs font-bold feature-label uppercase tracking-widest leading-none">60FPS Animations</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent"><i class="uil uil-usd-circle"></i></div>
                            <span class="text-xs font-bold feature-label uppercase tracking-widest leading-none">Conversion Obsessed</span>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 items-center">
                        <a href="<?php echo $root; ?>contact.php" class="w-full sm:w-auto px-10 py-5 rounded-2xl border-2 border-brand-accent text-brand-accent font-black uppercase text-[10px] tracking-widest hover:bg-brand-accent hover:text-white transition-all shadow-lg hover:shadow-brand-accent/30 block text-center">
                            Explore Works
                        </a>
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-full border-2 border-brand-accent/20 flex items-center justify-center animate-pulse">
                                <i class="uil uil-play text-brand-accent"></i>
                            </div>
                            <span class="text-[10px] font-black uppercase tracking-widest opacity-60">Watch Reel</span>
                        </div>
                    </div>
                </div>

                <div class="reveal">
                    <div class="glass-form p-8 rounded-[40px] border-2 border-brand-accent/10 relative overflow-hidden">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="w-12 h-12 rounded-2xl gradient-bg flex items-center justify-center text-white shadow-lg shadow-brand-accent/20">
                                <i class="uil uil-comment-alt-edit-right text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-black tracking-tight leading-none">Get a Free Quote</h3>
                                <p class="text-[10px] opacity-60 mt-1 uppercase tracking-widest font-bold font-sans">Ready to start your project?</p>
                            </div>
                        </div>

                        <form action="#" class="space-y-4">
                            <div class="relative">
                                <i class="uil uil-user absolute left-4 top-1/2 -translate-y-1/2 opacity-50 text-sm"></i>
                                <input type="text" placeholder="Full Name" class="w-full pl-10 pr-4 py-3.5 border rounded-2xl text-sm outline-none transition-all focus:border-brand-accent">
                            </div>
                            <div class="relative">
                                <i class="uil uil-envelope absolute left-4 top-1/2 -translate-y-1/2 opacity-50 text-sm"></i>
                                <input type="email" placeholder="Email Address" class="w-full pl-10 pr-4 py-3.5 border rounded-2xl text-sm outline-none transition-all focus:border-brand-accent">
                            </div>
                            <div class="relative">
                                <i class="uil uil-phone absolute left-4 top-1/2 -translate-y-1/2 opacity-50 text-sm"></i>
                                <input type="tel" placeholder="Phone Number" class="w-full pl-10 pr-4 py-3.5 border rounded-2xl text-sm outline-none transition-all focus:border-brand-accent">
                            </div>
                            <div class="relative">
                                <i class="uil uil-apps absolute left-4 top-1/2 -translate-y-1/2 opacity-50 text-sm"></i>
                                <select class="w-full pl-10 pr-4 py-3.5 border rounded-2xl text-sm outline-none transition-all focus:border-brand-accent appearance-none bg-transparent">
                                    <option>Select Service</option>
                                    <option>UI/UX Design</option>
                                    <option>E-commerce Store</option>
                                    <option>Corporate Website</option>
                                    <option>Custom Landing Page</option>
                                </select>
                            </div>
                            <div class="relative">
                                <i class="uil uil-notes absolute left-4 top-4 opacity-50 text-sm"></i>
                                <textarea rows="3" placeholder="Tell us about your vision..." class="w-full pl-10 pr-4 py-3.5 border rounded-2xl text-sm outline-none transition-all focus:border-brand-accent"></textarea>
                            </div>

                            <button type="submit" class="w-full py-4 gradient-bg text-white font-black rounded-2xl uppercase tracking-[2px] text-[11px] shadow-xl hover:scale-[1.02] active:scale-95 transition-all flex items-center justify-center gap-3">
                                Start My Project <i class="uil uil-arrow-right text-lg"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. DESIGN ECOSYSTEM -->
    <section class="py-24 theme-aware-hero border-y border-brand-dark/5 dark:border-white/5">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-20 reveal">
                <h2 class="text-3xl md:text-5xl font-heading font-black mb-6 tracking-tighter uppercase italic text-brand-accent">Design <span class="text-brand-dark dark:text-white">Pillars</span></h2>
                <p class="text-sm opacity-50 uppercase tracking-widest font-bold max-w-xl mx-auto">From pixel-perfect mocks to high-conversion landing pages</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- D1 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-mobile-android text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Adaptive Layouts</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Websites that fluidly transition across mobile, tablet, and ultra-wide desktops without loss of impact.</p>
                </div>
                <!-- D2 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-paint-tool text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Brand Identity</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Translating your brand values into a cohesive visual language (Color, Type, Grid).</p>
                </div>
                <!-- D3 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-bolt-alt text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Interaction Logic</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Micro-interactions and subtle transitions that guide the user journey effortlessly.</p>
                </div>
                <!-- D4 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-eye text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">UX Research</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Data-backed design decisions based on heatmaps, user behavior, and industry benchmarking.</p>
                </div>
                <!-- D5 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-layer-group text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Motion Graphics</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Integrating Lottie animations and SVG motion to breathe life into static pages.</p>
                </div>
                <!-- D6 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-shopping-cart text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">E-Com Strategy</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Optimizing product pages and checkout flows to reduce friction and abandoned carts.</p>
                </div>
                <!-- D7 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-search-alt text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">SEO Architecture</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Designing with technical SEO in mind—proper heading hierarchy and semantic HTML structure.</p>
                </div>
                <!-- D8 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-shield-check text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Accessibility</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Ensuring WCAG compliance so your digital experience is usable by everyone, everywhere.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. WHY CHOOSE SAHASRA DESIGN -->
    <section class="py-24 theme-aware-hero">
        <div class="container mx-auto px-6 md:px-12">
            <div class="flex flex-col lg:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-2xl reveal">
                    <h2 class="text-4xl md:text-5xl font-heading font-black mb-6 leading-tight uppercase tracking-tighter text-brand-accent">Beyond <br><span class="text-brand-dark dark:text-white italic">Aesthetics.</span></h2>
                    <p class="text-base md:text-lg opacity-60">We don't just 'make it pretty'. We engineer visual systems that drive measurable business outcomes.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-8 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500">
                        <i class="uil uil-swatchbook text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4">Atomic Design</h4>
                    <p class="text-sm opacity-60 leading-relaxed">We build scalable design systems, not just pages. This ensures your brand remains hyper-consistent as you grow.</p>
                </div>
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-8 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500">
                        <i class="uil uil-tachometer-fast text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4">Lighthouse 90+</h4>
                    <p class="text-sm opacity-60 leading-relaxed">Our designs are lightweight. We target maximum speed scores on Google Lighthouse to ensure zero bounce rates.</p>
                </div>
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-8 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500">
                        <i class="uil uil-brackets-curly text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4">Dev-Ready Mocks</h4>
                    <p class="text-sm opacity-60 leading-relaxed">Hand-offs are seamless. Our Figma-to-Code workflow ensures the final product matches the vision exactly.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. FAQ SECTION -->
    <section class="py-24 theme-aware-hero">
        <div class="container mx-auto px-6 md:px-12">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16 reveal">
                    <h2 class="text-3xl md:text-5xl font-heading font-black mb-4 tracking-tight uppercase italic gradient-text">Design Intelligence FAQ</h2>
                    <p class="text-base opacity-60 uppercase tracking-widest font-black text-xs">Clearing the path for your digital vision</p>
                </div>

                <div class="space-y-4">
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-brand-accent/[0.02]" open>
                        <summary class="cursor-pointer list-none py-6 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight uppercase italic">How long does a typical redesign take?</span>
                            <div class="w-10 h-10 rounded-full border border-brand-accent/20 flex items-center justify-center text-brand-accent group-open:bg-brand-accent group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">A standard high-fidelity redesign typically spans 3-6 weeks, covering Discovery, Wireframing, UI Design, and Revision phases. Larger enterprise portals may take longer.</p>
                        </div>
                    </details>
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-brand-accent/[0.02]">
                        <summary class="cursor-pointer list-none py-6 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight uppercase italic">Do I get the source design files?</span>
                            <div class="w-10 h-10 rounded-full border border-brand-accent/20 flex items-center justify-center text-brand-accent group-open:bg-brand-accent group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">Yes, 100%. Upon project completion, we hand over all Figma files, organized design systems, and licensed assets used in the project.</p>
                        </div>
                    </details>
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-brand-accent/[0.02]">
                        <summary class="cursor-pointer list-none py-6 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight uppercase italic">Can you design for existing brands?</span>
                            <div class="w-10 h-10 rounded-full border border-brand-accent/20 flex items-center justify-center text-brand-accent group-open:bg-brand-accent group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">Absolutely. We specialize in modernizing established brands while respecting their legacy identity, ensuring a 'fresh but familiar' outcome.</p>
                        </div>
                    </details>
                </div>
            </div>

            <!-- CTA -->
            <div class="reveal mt-20 rounded-[40px] border border-brand-accent/20 bg-brand-accent/[0.03] p-10 md:p-12 text-center relative overflow-hidden">
                <h3 class="text-3xl md:text-5xl font-heading font-black mb-6 relative z-10 leading-tight uppercase italic italic">Ready to Outshine <br><span class="gradient-text">The Competition?</span></h3>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 relative z-10">
                    <a href="<?php echo $root; ?>contact.php" class="w-full sm:w-auto px-10 py-5 rounded-2xl gradient-bg text-white font-black text-xs uppercase tracking-widest shadow-2xl hover:scale-105 transition-all block text-center">Start Your Project</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. FOOTER -->
    <?php include '../includes/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script>
        gsap.registerPlugin(ScrollTrigger);
        window.addEventListener('DOMContentLoaded', () => {
            const revealElements = gsap.utils.toArray(".reveal");
            gsap.set(revealElements, { visibility: "visible" });
            revealElements.forEach((el) => {
                gsap.fromTo(el, 
                    { y: 50, opacity: 0 },
                    {
                        scrollTrigger: { trigger: el, start: "top 85%", toggleActions: "play none none none" },
                        duration: 0.8, y: 0, opacity: 1, ease: "power3.out"
                    }
                );
            });
        });
    </script>
</body>
</html>
