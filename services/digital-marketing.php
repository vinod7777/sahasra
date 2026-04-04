<?php $root = '../'; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing Intelligence | Sahasra Barath Performance Agency</title>
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
<body class="font-sans text-brand-dark bg-brand-gray antialiased selection:bg-brand-accent selection:text-white" x-data="{ scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)">

    <?php include '../includes/theme-toggle.php'; ?>
    <?php include '../includes/nav.php'; ?>

    <!-- 1. MARKETING PERFORMANCE HERO -->
    <section id="home" class="relative pt-6 pb-6 theme-aware-hero overflow-hidden">
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-brand-accent/3 rounded-full blur-[150px] -mr-96 -mt-96"></div>

        <div class="container mx-auto px-6 md:px-12 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <div class="reveal">
                    <h1 class="text-3xl md:text-5xl lg:text-7xl font-heading font-black mb-6 leading-[1.1] tracking-tighter italic uppercase">
                        The ROI <br/>
                        <span class="gradient-text">Engine.</span>
                    </h1>
                    <p class="text-base md:text-lg mb-8 max-w-xl leading-relaxed opacity-70">
                        Stop guessing your marketing spend. We deploy data-led omnichannel strategies that laser-target your ideal demographic and maximize conversion velocity.
                    </p>

                    <div class="grid sm:grid-cols-2 gap-4 mb-10">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent"><i class="uil uil-bullseye"></i></div>
                            <span class="text-xs font-bold feature-label uppercase tracking-widest leading-none">Hyper-Targeting</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent"><i class="uil uil-chart-growth"></i></div>
                            <span class="text-xs font-bold feature-label uppercase tracking-widest leading-none">Growth Hacking</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent"><i class="uil uil-feedback"></i></div>
                            <span class="text-xs font-bold feature-label uppercase tracking-widest leading-none">Real-time Analytics</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent"><i class="uil uil-users-alt"></i></div>
                            <span class="text-xs font-bold feature-label uppercase tracking-widest leading-none">Retention Logic</span>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 items-center">
                        <a href="#strategies" class="w-full sm:w-auto px-10 py-5 rounded-2xl border-2 border-brand-accent text-brand-accent font-black uppercase text-[10px] tracking-widest hover:bg-brand-accent hover:text-white transition-all shadow-lg">Our Strategy</a>
                        <div class="flex items-center gap-3">
                            <span class="w-3 h-3 rounded-full bg-green-500 animate-ping"></span>
                            <span class="text-[10px] font-black uppercase tracking-widest opacity-60">Accepting Projects</span>
                        </div>
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
                                        <option value="marketing">Digital Marketing</option>
                                        <option value="ppc">PPC Ads</option>
                                        <option value="social">Paid Social</option>
                                    </select>
                                    <i class="uil uil-angle-down absolute right-4 top-1/2 -translate-y-1/2 opacity-50 pointer-events-none"></i>
                                </div>
                            </div>
                            <button type="submit" class="w-full py-4 mt-4 gradient-bg text-white font-black rounded-2xl uppercase tracking-[2px] text-[11px] shadow-xl hover:shadow-brand-accent/40 active:scale-95 transition-all flex items-center justify-center gap-3">
                                <span>Drive Growth Now</span>
                                <i class="uil uil-arrow-right text-lg"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. MARKETING MIX (ECOSYSTEM) -->
    <section id="strategies" class="py-24 theme-aware-hero border-y border-brand-dark/5 dark:border-white/5">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-20 reveal">
                <h2 class="text-3xl md:text-5xl font-heading font-black mb-6 tracking-tighter uppercase italic text-brand-accent">The Strategy <span class="text-brand-dark dark:text-white">Mix</span></h2>
                <p class="text-sm opacity-50 uppercase tracking-widest font-bold max-w-xl mx-auto">Omnichannel dominance through precision execution</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- M1 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-google text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">PPC Management</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Aggressive Search and Display campaigns designed to capture immediate market share with optimized CPA.</p>
                </div>
                <!-- M2 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-facebook text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Paid Social</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">High-fidelity creative ads across Meta, LinkedIn, and TikTok that stop the scroll and drive action.</p>
                </div>
                <!-- M3 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-envelope-star text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Automated Email</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Retention workflows and drip campaigns that nurture leads into loyal, repeat customers.</p>
                </div>
                <!-- M4 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-document-layout-left text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Content Strategy</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Authority-building articles and video scripts that position your brand as the industry thought leader.</p>
                </div>
                <!-- M5 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-users-alt text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Influencer PR</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Strategic partnerships with niche creators to build authentic trust and reach new audiences.</p>
                </div>
                <!-- M6 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-chart-line text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Conversion (CRO)</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">A/B testing and landing page optimization to ensure your traffic doesn't go to waste.</p>
                </div>
                <!-- M7 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-megaphone text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Brand PR</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Getting your brand featured in top-tier publications to build search equity and credibility.</p>
                </div>
                <!-- M8 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-analytics text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3">Attribution Logic</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-medium">Identifying precisely which touchpoints are driving value using advanced multi-touch models.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. WHY CHOOSE SAHASRA MARKETING -->
    <section class="py-24 theme-aware-hero">
        <div class="container mx-auto px-6 md:px-12">
            <div class="flex flex-col lg:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-2xl reveal">
                    <h2 class="text-4xl md:text-5xl font-heading font-black mb-6 leading-tight uppercase tracking-tighter text-brand-accent">Data Over <br><span class="text-brand-dark dark:text-white italic">Opinion.</span></h2>
                    <p class="text-base md:text-lg opacity-60">We don't launch 'creative' campaigns. We launch 'performant' ones. Every pixel is tracked, every click is measured.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-8 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500">
                        <i class="uil uil-graph-bar text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4">First-Party Data</h4>
                    <p class="text-sm opacity-60 leading-relaxed">In a cookie-less world, we focus on capturing first-party data to build sustainable marketing assets you own.</p>
                </div>
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-8 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500">
                        <i class="uil uil-usd-circle text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4">ROAS Optimization</h4>
                    <p class="text-sm opacity-60 leading-relaxed">Our primary KPI is your return on ad spend. We optimize daily to ensure your budget is fueling growth, not burning.</p>
                </div>
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-8 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500">
                        <i class="uil uil-heart-alt text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4">Empathy Built In</h4>
                    <p class="text-sm opacity-60 leading-relaxed">Digital signals are people. We build campaigns that speak to actual human needs, not just algorithmic triggers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. FAQ SECTION -->
    <section class="py-24 theme-aware-hero">
        <div class="container mx-auto px-6 md:px-12">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16 reveal">
                    <h2 class="text-3xl md:text-5xl font-heading font-black mb-4 tracking-tight uppercase italic gradient-text">Marketing Intelligence FAQ</h2>
                    <p class="text-base opacity-60 uppercase tracking-widest font-black text-xs">Strategic answers for a complex digital economy</p>
                </div>

                <div class="space-y-4">
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-brand-accent/[0.02]" open>
                        <summary class="cursor-pointer list-none py-6 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight uppercase italic">What is the minimum budget required?</span>
                            <div class="w-10 h-10 rounded-full border border-brand-accent/20 flex items-center justify-center text-brand-accent group-open:bg-brand-accent group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">Marketing plans are tiered. While we work with startups on lean budgets, a typical performance campaign starts at ₹30,000/mo in spend to gather enough data for significant optimization.</p>
                        </div>
                    </details>
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-brand-accent/[0.02]">
                        <summary class="cursor-pointer list-none py-6 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight uppercase italic">Do you guarantee specific sales numbers?</span>
                            <div class="w-10 h-10 rounded-full border border-brand-accent/20 flex items-center justify-center text-brand-accent group-open:bg-brand-accent group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">We don't guarantee 'sales' because we don't control your sales team or product-market fit. We *guarantee* high-intent traffic, leads, and continuous performance optimization.</p>
                        </div>
                    </details>
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-brand-accent/[0.02]">
                        <summary class="cursor-pointer list-none py-6 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight uppercase italic">How do we track the results?</span>
                            <div class="w-10 h-10 rounded-full border border-brand-accent/20 flex items-center justify-center text-brand-accent group-open:bg-brand-accent group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">You'll receive a live dashboard link using Looker Studio, integrating GA4, Google Ads, and Meta Ads data for total transparency 24/7.</p>
                        </div>
                    </details>
                </div>
            </div>

            <!-- CTA -->
            <div class="reveal mt-20 rounded-[40px] border border-brand-accent/20 bg-brand-accent/[0.03] p-10 md:p-12 text-center relative overflow-hidden">
                <h3 class="text-3xl md:text-5xl font-heading font-black mb-6 relative z-10 leading-tight uppercase italic gradient-text">Ignite Your <br>Market Presence</h3>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 relative z-10">
                    <a href="<?php echo $root; ?>index.php#contact" class="w-full sm:w-auto px-10 py-5 rounded-2xl gradient-bg text-white font-black text-xs uppercase tracking-widest shadow-2xl hover:scale-105 transition-all">Accelerate Growth</a>
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
