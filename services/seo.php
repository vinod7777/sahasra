<?php $root = '../'; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO Performance Agency | Sahasra Barath Digital Growth</title>
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

    <!-- 1. SEO AUTHORITY HERO -->
    <section id="home" class="relative pt-6 pb-6 theme-aware-hero overflow-hidden">
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-brand-accent/5 rounded-full blur-[150px] -mr-96 -mt-96 animate-blob"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-brand-accent/5 rounded-full blur-[120px] -ml-48 -mb-48 animate-blob" style="animation-delay: 2s"></div>

        <div class="container mx-auto px-6 md:px-12 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <div class="reveal">
                    <h1 class="text-3xl md:text-5xl lg:text-7xl font-heading font-black mb-6 leading-[1.1] tracking-tighter">
                        Rank Higher, <br/>
                        <span class="text-brand-accent italic">Scale Faster.</span>
                    </h1>
                    <p class="text-base md:text-lg mb-8 max-w-xl leading-relaxed opacity-70">
                        Dominate your industry's search volume. We architect high-authority SEO ecosystems that turn organic clicks into high-ticket conversions.
                    </p>

                    <div class="grid sm:grid-cols-2 gap-4 mb-10">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent"><i class="uil uil-search-alt"></i></div>
                            <span class="text-xs font-bold feature-label uppercase tracking-widest leading-none">Technical SEO Audit</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent"><i class="uil uil-link-h"></i></div>
                            <span class="text-xs font-bold feature-label uppercase tracking-widest leading-none">Backlink Strategy</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent"><i class="uil uil-chart-growth"></i></div>
                            <span class="text-xs font-bold feature-label uppercase tracking-widest leading-none">ROI-Driven Rankings</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent"><i class="uil uil-eye"></i></div>
                            <span class="text-xs font-bold feature-label uppercase tracking-widest leading-none">Brand Visibility</span>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 items-center">
                        <a href="<?php echo $root; ?>contact.php" class="w-full sm:w-auto px-10 py-5 rounded-2xl border-2 border-brand-accent text-brand-accent font-black uppercase text-[10px] tracking-widest hover:bg-brand-accent hover:text-white transition-all shadow-lg hover:shadow-brand-accent/30 block text-center">
                            Claim Free Audit
                        </a>
                        <div class="flex -space-x-4">
                            <div class="w-10 h-10 rounded-full border-2 border-white bg-gray-200 overflow-hidden"><img src="https://i.pravatar.cc/100?u=1" alt="user"></div>
                            <div class="w-10 h-10 rounded-full border-2 border-white bg-gray-200 overflow-hidden"><img src="https://i.pravatar.cc/100?u=2" alt="user"></div>
                            <div class="w-10 h-10 rounded-full border-2 border-white bg-gray-200 overflow-hidden"><img src="https://i.pravatar.cc/100?u=3" alt="user"></div>
                            <div class="flex items-center justify-center w-10 h-10 rounded-full border-2 border-white bg-brand-accent text-white text-[8px] font-black">+400</div>
                        </div>
                        <div class="text-[10px] font-bold opacity-60 uppercase tracking-widest">Happy <br>Clients</div>
                    </div>
                </div>

                <div class="reveal">
                    <div class="glass-form p-6 md:p-8 rounded-[40px] shadow-2xl relative overflow-hidden border border-white/20">
                        <div class="absolute top-0 right-0 w-full h-1.5 gradient-bg opacity-80"></div>
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-12 h-12 rounded-2xl gradient-bg flex items-center justify-center text-white text-2xl shadow-lg ring-4 ring-brand-accent/20">
                                <i class="uil uil-comment-alt-edit"></i>
                            </div>
                            <div>
                                <h2 class="text-2xl font-black tracking-tight leading-none">Get a Quote</h2>
                                <p class="text-[11px] opacity-60 mt-1.5 font-medium uppercase tracking-wider">Fast Response Guaranteed</p>
                            </div>
                        </div>

                        <form action="#" class="space-y-4">
                            <div class="space-y-4">
                                <div class="relative group">
                                    <i class="uil uil-user absolute left-4 top-1/2 -translate-y-1/2 text-brand-accent opacity-50 group-focus-within:opacity-100 transition-opacity"></i>
                                    <input type="text" placeholder="Full Name" class="w-full pl-11 pr-4 py-3.5 border rounded-2xl text-[13px] font-medium outline-none focus:ring-2 focus:ring-brand-accent/20 transition-all">
                                </div>
                                <div class="relative group">
                                    <i class="uil uil-envelope absolute left-4 top-1/2 -translate-y-1/2 text-brand-accent opacity-50 group-focus-within:opacity-100 transition-opacity"></i>
                                    <input type="email" placeholder="Email Address" class="w-full pl-11 pr-4 py-3.5 border rounded-2xl text-[13px] font-medium outline-none focus:ring-2 focus:ring-brand-accent/20 transition-all">
                                </div>
                                <div class="relative group">
                                    <i class="uil uil-phone absolute left-4 top-1/2 -translate-y-1/2 text-brand-accent opacity-50 group-focus-within:opacity-100 transition-opacity"></i>
                                    <input type="tel" placeholder="Mobile Number" class="w-full pl-11 pr-4 py-3.5 border rounded-2xl text-[13px] font-medium outline-none focus:ring-2 focus:ring-brand-accent/20 transition-all">
                                </div>
                                <div class="relative group">
                                    <i class="uil uil-setting absolute left-4 top-1/2 -translate-y-1/2 text-brand-accent opacity-50 group-focus-within:opacity-100 transition-opacity"></i>
                                    <select class="w-full pl-11 pr-4 py-3.5 border rounded-2xl text-[13px] font-medium appearance-none outline-none focus:ring-2 focus:ring-brand-accent/20 transition-all">
                                        <option value="">Select Service</option>
                                        <option value="global">Global SEO</option>
                                        <option value="local">Local SEO</option>
                                        <option value="ecom">E-commerce SEO</option>
                                    </select>
                                    <i class="uil uil-angle-down absolute right-4 top-1/2 -translate-y-1/2 opacity-50 pointer-events-none"></i>
                                </div>
                            </div>
                            <button type="submit" class="w-full py-4 mt-4 gradient-bg text-white font-black rounded-2xl uppercase tracking-[2px] text-[11px] shadow-xl hover:shadow-brand-accent/40 active:scale-95 transition-all flex items-center justify-center gap-3">
                                <span>Get Your Quote Now</span>
                                <i class="uil uil-arrow-right text-lg"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. SERVICE ECOSYSTEM -->
    <section class="py-24 theme-aware-hero border-y border-brand-dark/5 dark:border-white/5">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-20 reveal">
                <h2 class="text-3xl md:text-5xl font-heading font-black mb-6 tracking-tighter uppercase italic">The SEO <span class="gradient-text">Ecosystem</span></h2>
                <p class="text-sm opacity-50 uppercase tracking-widest font-bold">End-to-end intelligence for the modern search landscape</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- S1 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-setting text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Technical Audit</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Deep-dive analysis of server logs, crawl errors, and XML sitemaps to ensure perfect indexing.</p>
                </div>
                <!-- S2 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-key-skeleton text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Keyword Intel</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Identifying high-intent, low-difficulty keywords that competitors are ignoring to capture easy wins.</p>
                </div>
                <!-- S3 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-arrow-up-right text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">On-Page Logic</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Strategic content structural optimization including LSI, semantic tagging, and Core Web Vitals.</p>
                </div>
                <!-- S4 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-link-h text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Link Acquisition</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Manual outreach for high-quality contextual guest placements on industry-leading authority domains.</p>
                </div>
                <!-- S5 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-google text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">GMB Mastery</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Dominating local map packs and regional localized search intent to drive foot traffic and calls.</p>
                </div>
                <!-- S6 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-shopping-cart text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">E-Commerce SEO</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Product visibility, rich snippets, and dynamic schema markup to maximize transactional clicks.</p>
                </div>
                <!-- S7 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-chart-line text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Impact Tracking</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Real-time keyword position tracking with custom ROI dashboards and weekly trend reports.</p>
                </div>
                <!-- S8 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-globe text-22l"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Global SEO</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Multilingual SEO and Hreflang implementation for scaling your brand across international borders.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. STRATEGIC PILLARS (WHY CHOOSE) -->
    <section class="py-24 theme-aware-hero">
        <div class="container mx-auto px-6 md:px-12">
            <div class="flex flex-col lg:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-2xl reveal">
                    <h2 class="text-4xl md:text-5xl font-heading font-black mb-6 leading-tight uppercase tracking-tighter">Why Choose <br><span class="gradient-text">Sahasra Analytics</span></h2>
                    <p class="text-base md:text-lg opacity-60">We don't just track rankings; we track revenue. Our approach is built on transparent data and aggressive execution.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-8 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500">
                        <i class="uil uil-eye text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4">93% Visibility Rate</h4>
                    <p class="text-sm opacity-60 leading-relaxed">We focus on the first page of Google, where 93% of search traffic resides, ensuring your brand is the first choice.</p>
                </div>
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-8 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500">
                        <i class="uil uil-rocket text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4">Speed Optimization</h4>
                    <p class="text-sm opacity-60 leading-relaxed">Core Web Vitals are foundational. We optimize your site's performance to improve both UX and rankings simultaneously.</p>
                </div>
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-8 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500">
                        <i class="uil uil-analytics text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4">Competitor Intel</h4>
                    <p class="text-sm opacity-60 leading-relaxed">Reverse engineering competitor success to identify their gaps and steal their high-value traffic sources.</p>
                </div>
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-8 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500">
                        <i class="uil uil-link-h text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4">High-DA Backlinks</h4>
                    <p class="text-sm opacity-60 leading-relaxed">Zero spam policy. We only acquire links from real websites with high Domain Authority and relevant organic traffic.</p>
                </div>
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-8 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500">
                        <i class="uil uil-chart-growth text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4">ROI over Rankings</h4>
                    <p class="text-sm opacity-60 leading-relaxed">Ranking for vanity keywords is easy. We rank you for 'Buying Intent' keywords that actually impact your bottom line.</p>
                </div>
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-8 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500">
                        <i class="uil uil-shield-check text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4">Algorithmic Guard</h4>
                    <p class="text-sm opacity-60 leading-relaxed">Constant monitoring of Google Core Updates to proactively adjust strategies and protect your search equity.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. FAQ SECTION -->
    <section class="py-24 theme-aware-hero">
        <div class="container mx-auto px-6 md:px-12">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16 reveal">
                    <h2 class="text-3xl md:text-5xl font-heading font-black mb-4 tracking-tight uppercase">Search <span class="gradient-text">Intelligence FAQ</span></h2>
                    <p class="text-base opacity-60">Everything you need to know about organic growth</p>
                </div>

                <div class="space-y-4">
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-brand-accent/[0.02]" open>
                        <summary class="cursor-pointer list-none py-6 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight">How long does it take to see results?</span>
                            <div class="w-10 h-10 rounded-full border border-brand-accent/20 flex items-center justify-center text-brand-accent group-open:bg-brand-accent group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">Every SEO journey is unique. Typically, you'll see trajectory shifts in 6-12 weeks, with significant ROI-impacting results appearing between 4-8 months depending on competition and starting authority.</p>
                        </div>
                    </details>
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-brand-accent/[0.02]">
                        <summary class="cursor-pointer list-none py-6 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight">Do you use black-hat SEO techniques?</span>
                            <div class="w-10 h-10 rounded-full border border-brand-accent/20 flex items-center justify-center text-brand-accent group-open:bg-brand-accent group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">Never. We strictly follow Google's Search Essentials (formerly Webmaster Guidelines). Our methods are sustainable, long-term, and designed to withstand algorithm changes.</p>
                        </div>
                    </details>
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-brand-accent/[0.02]">
                        <summary class="cursor-pointer list-none py-6 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight">What kind of reports do you provide?</span>
                            <div class="w-10 h-10 rounded-full border border-brand-accent/20 flex items-center justify-center text-brand-accent group-open:bg-brand-accent group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">Transparency is our core. You get access to a real-time Looker Studio dashboard showing keyword trends, organic traffic, goal completions, and backlink acquisition progress.</p>
                        </div>
                    </details>
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-brand-accent/[0.02]">
                        <summary class="cursor-pointer list-none py-6 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight">Is SEO better than paid ads (PPC)?</span>
                            <div class="w-10 h-10 rounded-full border border-brand-accent/20 flex items-center justify-center text-brand-accent group-open:bg-brand-accent group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">They serve different purposes. PPC is great for instant traffic. SEO is an 'equity-building' asset that has a much higher long-term ROI and builds brand trust that ads can't buy.</p>
                        </div>
                    </details>
                </div>
            </div>

            <!-- AUDIT CTA -->
            <div id="audit" class="reveal mt-20 rounded-[40px] border border-brand-accent/20 bg-brand-accent/[0.03] p-10 md:p-16 text-center relative overflow-hidden">
                <div class="absolute -top-32 -left-32 w-64 h-64 bg-brand-accent/10 rounded-full blur-[100px]"></div>
                <h3 class="text-3xl md:text-5xl font-heading font-black mb-6 relative z-10 leading-tight italic uppercase italic">Stop Guessing. <br><span class="gradient-text">Start Ranking.</span></h3>
                <p class="opacity-60 max-w-2xl mx-auto mb-10 text-sm md:text-lg leading-relaxed relative z-10">Get a high-fidelity audit report covering technical performance, keyword gaps, and a 6-month organic growth roadmap.</p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 relative z-10">
                    <a href="<?php echo $root; ?>contact.php" class="w-full sm:w-auto px-10 py-5 rounded-2xl gradient-bg text-white font-black text-xs uppercase tracking-widest shadow-2xl hover:scale-105 active:scale-95 transition-all block text-center">Claim Free SEO Audit</a>
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
