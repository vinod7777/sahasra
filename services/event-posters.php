<?php $root = '../'; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High-Impact Event Poster Design | Sahasra Barath Agency Viral Energy</title>
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
        .theme-aware-hero {
            background-color: #ffffff;
            transition: all 0.4s ease;
        }
        .theme-aware-hero h1, .theme-aware-hero h3, .theme-aware-hero h2 { color: #000B1A; }
        .theme-aware-hero p { color: #475569; }
        .theme-aware-hero .feature-label { color: #1e293b; }
        .theme-aware-hero .glass-form { background: rgba(0, 0, 0, 0.02); border-color: rgba(0, 0, 0, 0.05); color: #000B1A; }

        .dark-theme .theme-aware-hero {
            background-color: #00050D;
        }
        .dark-theme .theme-aware-hero h1, .dark-theme .theme-aware-hero h3, .dark-theme .theme-aware-hero .feature-label { color: #ffffff; }
        .dark-theme .theme-aware-hero p { color: #94a3b8; }
        .dark-theme .theme-aware-hero .feature-label { color: #cbd5e1; }
        .dark-theme .theme-aware-hero .glass-form { background: rgba(255, 255, 255, 0.03); border-color: rgba(255, 255, 255, 0.1); color: #fff; }
        
        .gradient-bg {
            background: linear-gradient(135deg, var(--brand-accent-start, #2563EB) 0%, var(--brand-accent-end, #00D4FF) 100%);
        }
        .vibrant-event-text { background: linear-gradient(to right, #ec4899, #8b5cf6); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; }
    </style>
    <script id="sahasra-brand-guard">
        (function() {
            const DEFAULT_BLUE = '#2563EB';
            const DEFAULT_GRADIENT = '#00D4FF';
            let savedColor = localStorage.getItem('sahasra-accent-color') || DEFAULT_BLUE;
            let savedGradient = localStorage.getItem('sahasra-accent-gradient') || DEFAULT_GRADIENT;
            const root = document.documentElement;
            root.style.setProperty('--brand-accent', savedColor);
            root.style.setProperty('--brand-accent-start', savedColor);
            root.style.setProperty('--brand-accent-end', savedGradient);
            const savedTheme = localStorage.getItem('sahasra-theme') || 'light';
            document.documentElement.classList.toggle('dark-theme', savedTheme === 'dark');
        })();
    </script>
</head>
<body class="font-sans text-brand-dark bg-brand-gray antialiased selection:bg-brand-accent selection:text-white" x-data="{ scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)">

    <?php include '../includes/theme-toggle.php'; ?>
    <?php include '../includes/nav.php'; ?>

    <!-- 1. EVENT VISUAL HERO -->
    <section id="home" class="relative pt-6 pb-6 theme-aware-hero overflow-hidden">
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-pink-500/5 rounded-full blur-[150px] -mr-96 -mt-96 animate-pulse"></div>

        <div class="container mx-auto px-6 md:px-12 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <div class="reveal">
                    <span class="inline-block px-4 py-1.5 bg-pink-500/10 rounded-full text-[10px] font-black tracking-[0.2em] uppercase mb-6 border border-pink-500/30 text-pink-500 font-medium font-sans">Epicenter of Event Visuals</span>
                    <h1 class="text-4xl md:text-6xl lg:text-8xl font-heading font-black mb-6 leading-[1.0] tracking-tighter italic uppercase">
                        Viral <br/>
                        <span class="vibrant-event-text">Visual Energy.</span>
                    </h1>
                    <p class="text-base md:text-lg mb-8 max-w-xl leading-relaxed opacity-70">
                        Stop the scroll and fill the seats. We engineer high-octane event posters and motion visuals designed to trigger massive engagement and record-breaking conversions.
                    </p>

                    <div class="grid sm:grid-cols-2 gap-4 mb-10">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-pink-500/10 flex items-center justify-center text-pink-500"><i class="uil uil-bolt"></i></div>
                            <span class="text-xs font-bold feature-label uppercase tracking-widest leading-none">Viral Trigger</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-pink-500/10 flex items-center justify-center text-pink-500"><i class="uil uil-print"></i></div>
                            <span class="text-xs font-bold feature-label uppercase tracking-widest leading-none">Print Precision</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-pink-500/10 flex items-center justify-center text-pink-500"><i class="uil uil-video"></i></div>
                            <span class="text-xs font-bold feature-label uppercase tracking-widest leading-none">Motion Posters</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-pink-500/10 flex items-center justify-center text-pink-500"><i class="uil uil-share-alt"></i></div>
                            <span class="text-xs font-bold feature-label uppercase tracking-widest leading-none">Social Assets</span>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 items-center">
                        <a href="#visuals" class="w-full sm:w-auto px-10 py-5 rounded-2xl border-2 border-pink-500 text-pink-500 font-black uppercase text-[10px] tracking-widest hover:bg-pink-500 hover:text-white transition-all shadow-lg">Our Canvas</a>
                        <div class="flex items-center gap-3">
                            <span class="w-3 h-3 rounded-full bg-pink-600 animate-ping"></span>
                            <span class="text-[10px] font-black uppercase tracking-widest opacity-60">Studio Rendering</span>
                        </div>
                    </div>
                </div>

                <div class="reveal">
                    <div class="glass-form p-6 md:p-8 rounded-[40px] shadow-2xl relative overflow-hidden border border-white/20">
                        <div class="absolute top-0 right-0 w-full h-1.5 bg-pink-500 opacity-80"></div>
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-12 h-12 rounded-2xl bg-pink-500 flex items-center justify-center text-white text-2xl shadow-lg ring-4 ring-pink-500/20">
                                <i class="uil uil-comment-alt-edit"></i>
                            </div>
                            <div>
                                <h2 class="text-2xl font-black tracking-tight leading-none text-pink-500 dark:text-pink-400">Get a Quote</h2>
                                <p class="text-[11px] opacity-60 mt-1.5 font-medium uppercase tracking-wider">Creativity on Demand</p>
                            </div>
                        </div>

                        <form action="#" class="space-y-4">
                            <div class="space-y-4">
                                <div class="relative group">
                                    <i class="uil uil-user absolute left-4 top-1/2 -translate-y-1/2 text-pink-500 opacity-50 group-focus-within:opacity-100 transition-opacity"></i>
                                    <input type="text" placeholder="Full Name" class="w-full pl-11 pr-4 py-3.5 border rounded-2xl text-[13px] font-medium outline-none focus:ring-2 focus:ring-pink-500/20 transition-all">
                                </div>
                                <div class="relative group">
                                    <i class="uil uil-envelope absolute left-4 top-1/2 -translate-y-1/2 text-pink-500 opacity-50 group-focus-within:opacity-100 transition-opacity"></i>
                                    <input type="email" placeholder="Email Address" class="w-full pl-11 pr-4 py-3.5 border rounded-2xl text-[13px] font-medium outline-none focus:ring-2 focus:ring-pink-500/20 transition-all">
                                </div>
                                <div class="relative group">
                                    <i class="uil uil-phone absolute left-4 top-1/2 -translate-y-1/2 text-pink-500 opacity-50 group-focus-within:opacity-100 transition-opacity"></i>
                                    <input type="tel" placeholder="Mobile Number" class="w-full pl-11 pr-4 py-3.5 border rounded-2xl text-[13px] font-medium outline-none focus:ring-2 focus:ring-pink-500/20 transition-all">
                                </div>
                                <div class="relative group">
                                    <i class="uil uil-palette absolute left-4 top-1/2 -translate-y-1/2 text-pink-500 opacity-50 group-focus-within:opacity-100 transition-opacity"></i>
                                    <select class="w-full pl-11 pr-4 py-3.5 border rounded-2xl text-[13px] font-medium appearance-none outline-none focus:ring-2 focus:ring-pink-500/20 transition-all">
                                        <option value="">Visual Format</option>
                                        <option value="poster">Static Poster Design</option>
                                        <option value="motion">Motion Poster / Reel</option>
                                        <option value="social">Social Media Branding Kit</option>
                                        <option value="print">Billboard / Large Format</option>
                                    </select>
                                    <i class="uil uil-angle-down absolute right-4 top-1/2 -translate-y-1/2 opacity-50 pointer-events-none"></i>
                                </div>
                            </div>
                            <button type="submit" class="w-full py-4 mt-4 bg-pink-500 text-white font-black rounded-2xl uppercase tracking-[2px] text-[11px] shadow-xl hover:shadow-pink-500/40 active:scale-95 transition-all flex items-center justify-center gap-3">
                                <span>Ignite Your Hype</span>
                                <i class="uil uil-arrow-right text-lg"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. VISUAL ECOSYSTEM -->
    <section id="visuals" class="py-24 theme-aware-hero border-y border-brand-dark/5 dark:border-white/5">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-20 reveal">
                <h2 class="text-3xl md:text-5xl font-heading font-black mb-6 tracking-tighter uppercase italic text-pink-500">Visual <span class="text-brand-dark dark:text-white">Universe</span></h2>
                <p class="text-sm opacity-50 uppercase tracking-widest font-bold max-w-xl mx-auto">Deploying high-impact creative protocols across global event networks</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- V1 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-pink-500 transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-pink-500/10 flex items-center justify-center text-pink-500 mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-bolt-alt text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Viral Trigger</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Psychology-backed layouts designed to halt scrolling and force immediate engagement.</p>
                </div>
                <!-- V2 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-pink-500 transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-pink-500/10 flex items-center justify-center text-pink-500 mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-print text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Print-Perfect</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Institutional CMYK precision for billboards, large format, and high-res flyer distributions.</p>
                </div>
                <!-- V3 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-pink-500 transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-pink-500/10 flex items-center justify-center text-pink-500 mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-presentation-play text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Motion Mastery</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Cinematic animated posters optimized for Instagram Reels, TikTok, and digital outdoor displays.</p>
                </div>
                <!-- V4 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-pink-500 transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-pink-500/10 flex items-center justify-center text-pink-500 mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-chart-up text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Conversion-Op</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Strategic call-to-action engineering to drive record-breaking ticket sales and conversions.</p>
                </div>
                <!-- V5 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-pink-500 transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-pink-500/10 flex items-center justify-center text-pink-500 mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-postcard text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Social Assets</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Coordinated asset kits for Stories, Feeds, and Event Page headers across all channels.</p>
                </div>
                <!-- V6 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-pink-500 transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-pink-500/10 flex items-center justify-center text-pink-500 mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-tv-retro text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Stage Graphics</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Expansive LED backdrops and immersive venue environmentals for world-class stage presence.</p>
                </div>
                <!-- V7 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-pink-500 transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-pink-500/10 flex items-center justify-center text-pink-500 mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-ticket text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Collateral Hub</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Physical tickets, VIP lanyards, and directional event signage that preserves brand dignity.</p>
                </div>
                <!-- V8 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-pink-500 transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-pink-500/10 flex items-center justify-center text-pink-500 mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-film text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Teaser Loops</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">High-fidelity 15-second creative loops built specifically for viral pre-hype campaigns.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. STRATEGIC PILLARS -->
    <section class="py-24 theme-aware-hero">
        <div class="container mx-auto px-6 md:px-12">
            <div class="flex flex-col lg:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-2xl reveal">
                    <h2 class="text-4xl md:text-5xl font-heading font-black mb-6 leading-tight uppercase tracking-tighter text-pink-500">Impact <br><span class="text-brand-dark dark:text-white italic">Architecture.</span></h2>
                    <p class="text-base md:text-lg opacity-60">Success is baked into the aesthetic. We build event visuals that don't just look good—they sell out venues.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] border border-white/10 hover:border-pink-500/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-pink-500/10 flex items-center justify-center text-pink-500 mb-8 group-hover:bg-pink-500 group-hover:text-white transition-all duration-500">
                        <i class="uil uil-palette text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4">Elite Aesthetics</h4>
                    <p class="text-sm opacity-60 leading-relaxed">Drawing from global trend-logic to ensure your events feel culturally relevant and high-fidelity.</p>
                </div>
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] border border-white/10 hover:border-pink-500/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-pink-500/10 flex items-center justify-center text-pink-500 mb-8 group-hover:bg-pink-500 group-hover:text-white transition-all duration-500">
                        <i class="uil uil-desktop-cloud-alt text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4">Omni-Channel Flow</h4>
                    <p class="text-sm opacity-60 leading-relaxed">A cohesive design system that looks equally premium on a 50ft billboard or a 5-inch phone screen.</p>
                </div>
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] border border-white/10 hover:border-pink-500/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-pink-500/10 flex items-center justify-center text-pink-500 mb-8 group-hover:bg-pink-500 group-hover:text-white transition-all duration-500">
                        <i class="uil uil-check-circle text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4">Production Ready</h4>
                    <p class="text-sm opacity-60 leading-relaxed">Zero technical friction. All files are delivered in institution-ready formats for immediate distribution.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. FAQ SECTION -->
    <section class="py-24 theme-aware-hero">
        <div class="container mx-auto px-6 md:px-12">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16 reveal">
                    <h2 class="text-3xl md:text-5xl font-heading font-black mb-4 tracking-tight uppercase italic vibrant-event-text">Visual Intelligence FAQ</h2>
                    <p class="text-base opacity-60 uppercase tracking-widest font-black text-xs">Strategic answers for global event promoters</p>
                </div>

                <div class="space-y-4">
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-pink-500/[0.02]" open>
                        <summary class="cursor-pointer list-none py-6 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight uppercase italic">How fast is the turnaround?</span>
                            <div class="w-10 h-10 rounded-full border border-pink-500/20 flex items-center justify-center text-pink-500 group-open:bg-pink-500 group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">Standard single designs are delivered in 48-72 hours. Full campaign suites typically require 5-7 business days for high-fidelity rollout and adaptation.</p>
                        </div>
                    </details>
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-pink-500/[0.02]">
                        <summary class="cursor-pointer list-none py-6 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight uppercase italic">Do we own the source files?</span>
                            <div class="w-10 h-10 rounded-full border border-pink-500/20 flex items-center justify-center text-pink-500 group-open:bg-pink-500 group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">Yes. Upon final approval and payment, you receive absolute ownership of all final assets and high-fidelity source files (PSD/AI/AE).</p>
                        </div>
                    </details>
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-pink-500/[0.02]">
                        <summary class="cursor-pointer list-none py-6 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight uppercase italic">Can you handle motion posters?</span>
                            <div class="w-10 h-10 rounded-full border border-pink-500/20 flex items-center justify-center text-pink-500 group-open:bg-pink-500 group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">Yes, motion is our specialty. We provide cinematic, looped, and sound-integrated motion posters optimized for Instagram, TikTok, and digital billboards.</p>
                        </div>
                    </details>
                </div>
            </div>

            <!-- CTA -->
            <div class="reveal mt-20 rounded-[40px] border border-pink-500/20 bg-pink-500/[0.03] p-10 md:p-12 text-center relative overflow-hidden">
                <h3 class="text-3xl md:text-5xl font-heading font-black mb-6 relative z-10 leading-tight uppercase italic vibrant-event-text">Ignite Your <br>Event Energy</h3>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 relative z-10">
                    <a href="<?php echo $root; ?>index.php#contact" class="w-full sm:w-auto px-10 py-5 rounded-2xl bg-gradient-to-r from-pink-600 to-violet-600 text-white font-black text-xs uppercase tracking-widest shadow-2xl hover:scale-105 transition-all">Launch Creative</a>
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
