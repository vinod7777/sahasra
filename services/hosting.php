<?php $root = '../'; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managed Hosting & Cloud Solutions | Sahasra Barath Agency</title>
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

    <!-- 1. ELITE HOSTING HERO SECTION -->
    <section id="home" class="relative pt-2 pb-2 lg:pt-6 lg:pb-6 theme-aware-hero overflow-hidden">
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-brand-accent/5 rounded-full blur-[150px] -mr-96 -mt-96 animate-blob"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-brand-accent/5 rounded-full blur-[120px] -ml-48 -mb-48 animate-blob" style="animation-delay: 2s"></div>
        <div class="absolute inset-0 opacity-[0.03] pointer-events-none bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]"></div>

        <div class="container mx-auto px-6 md:px-12 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <div class="reveal">
                    <h1 class="text-3xl md:text-5xl lg:text-6xl font-heading font-black mb-4 leading-[1.1] tracking-tighter">
                        Turbocharged <br/>
                        <span class="text-brand-accent">Business Hosting</span>
                    </h1>
                    <p class="text-base md:text-lg mb-6 max-w-xl leading-relaxed">
                        Experience blazing-fast website performance with our NVMe-based cloud infrastructure and proactive 24/7 security monitoring.
                    </p>

                    <div class="grid sm:grid-cols-2 gap-4 mb-8">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent">
                                <i class="uil uil-bolt text-base"></i>
                            </div>
                            <span class="text-xs font-bold feature-label">Ultra-Fast NVMe SSD</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent">
                                <i class="uil uil-shield-check text-base"></i>
                            </div>
                            <span class="text-xs font-bold feature-label">Free SSL & Security</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent">
                                <i class="uil uil-history text-base"></i>
                            </div>
                            <span class="text-xs font-bold feature-label">Daily Automatic Backups</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent">
                                <i class="uil uil-users-alt text-base"></i>
                            </div>
                            <span class="text-xs font-bold feature-label">Expert Support 24/7</span>
                        </div>
                    </div>

                    <div class="brand-badge p-5 mb-6 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-brand-accent/10 rounded-full -mr-16 -mt-16 blur-2xl group-hover:bg-brand-accent/20 transition-all"></div>
                        <div class="relative z-10">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="text-xl">⚡</span>
                                <h3 class="text-lg font-black uppercase tracking-tight">99.9% Uptime <span class="text-[9px] opacity-60 font-normal normal-case">(Guaranteed)</span></h3>
                            </div>
                            <p class="text-[10px] text-brand-accent font-bold mb-3">Enterprise-grade infrastructure for <span class="opacity-80">uninterrupted business</span> operations</p>
                            <div class="flex items-baseline gap-2">
                                <span class="text-xs opacity-60 font-medium">Starting at just</span>
                                <span class="text-2xl font-black gradient-text">₹249 / Month</span>
                            </div>
                        </div>
                    </div>

                    <a href="#pricing" class="inline-flex items-center gap-3 px-8 py-4 rounded-xl border-2 border-brand-accent text-brand-accent font-black uppercase text-[10px] tracking-widest hover:bg-brand-accent hover:text-white transition-all shadow-lg hover:shadow-brand-accent/30">
                        <i class="uil uil-bill"></i> View All Plans
                    </a>
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
                                        <option value="cloud">Cloud Hosting</option>
                                        <option value="vps">VPS solutions</option>
                                        <option value="dedicated">Dedicated Server</option>
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

    <!-- 2. PRICING GRID -->
    <section id="pricing" class="py-24 theme-aware-hero">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-16 reveal">
                <h2 class="text-3xl md:text-5xl font-heading font-black mb-4 tracking-tight uppercase italic">Engineered for <span class="gradient-text">Scale</span></h2>
                <p class="text-base opacity-60">High-performance hosting solutions for every stage of your growth</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Basic Plan -->
                <div class="reveal glass-form p-8 rounded-[40px] border border-white/10 hover:border-brand-accent/30 transition-all flex flex-col group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-seedling text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-black mb-2">Starter</h3>
                    <p class="text-xs opacity-50 mb-6">Perfect for new websites and personal blogs.</p>
                    <div class="text-3xl font-black gradient-text mb-8">₹249<span class="text-sm font-medium opacity-50">/mo</span></div>
                    <ul class="space-y-4 mb-10 flex-grow">
                        <li class="flex items-center gap-3 text-sm font-bold"><i class="uil uil-check-circle text-brand-accent"></i> 1 Website</li>
                        <li class="flex items-center gap-3 text-sm font-bold"><i class="uil uil-check-circle text-brand-accent"></i> 10GB NVMe SSD</li>
                        <li class="flex items-center gap-3 text-sm font-bold"><i class="uil uil-check-circle text-brand-accent"></i> Free SSL Certificate</li>
                    </ul>
                    <button class="w-full py-4 rounded-2xl border-2 border-brand-accent/20 text-brand-accent font-black text-[10px] uppercase tracking-widest hover:bg-brand-accent hover:text-white transition-all">Order Now</button>
                </div>

                <!-- Business Plan -->
                <div class="reveal glass-form p-8 rounded-[40px] border-2 border-brand-accent relative shadow-xl shadow-brand-accent/10 flex flex-col transform lg:-translate-y-4">
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 px-4 py-1.5 gradient-bg text-white text-[10px] font-black rounded-full uppercase tracking-widest">Most Popular</div>
                    <div class="w-12 h-12 rounded-2xl gradient-bg flex items-center justify-center text-white mb-6">
                        <i class="uil uil-constructor text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-black mb-2">Business</h3>
                    <p class="text-xs opacity-50 mb-6">Built for growing businesses and online stores.</p>
                    <div class="text-3xl font-black gradient-text mb-8">₹599<span class="text-sm font-medium opacity-50">/mo</span></div>
                    <ul class="space-y-4 mb-10 flex-grow">
                        <li class="flex items-center gap-3 text-sm font-bold"><i class="uil uil-check-circle text-brand-accent"></i> 10 Websites</li>
                        <li class="flex items-center gap-3 text-sm font-bold"><i class="uil uil-check-circle text-brand-accent"></i> 50GB NVMe SSD</li>
                        <li class="flex items-center gap-3 text-sm font-bold"><i class="uil uil-check-circle text-brand-accent"></i> Free Domain (.in)</li>
                    </ul>
                    <button class="w-full py-4 gradient-bg text-white font-black text-[10px] uppercase tracking-widest rounded-2xl shadow-lg hover:scale-[1.02] transition-all">Order Now</button>
                </div>

                <!-- Professional Plan -->
                <div class="reveal glass-form p-8 rounded-[40px] border border-white/10 hover:border-brand-accent/30 transition-all flex flex-col group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-server text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-black mb-2">Pro</h3>
                    <p class="text-xs opacity-50 mb-6">High traffic capability with dedicated resources.</p>
                    <div class="text-3xl font-black gradient-text mb-8">₹1,299<span class="text-sm font-medium opacity-50">/mo</span></div>
                    <ul class="space-y-4 mb-10 flex-grow">
                        <li class="flex items-center gap-3 text-sm font-bold"><i class="uil uil-check-circle text-brand-accent"></i> 100 Websites</li>
                        <li class="flex items-center gap-3 text-sm font-bold"><i class="uil uil-check-circle text-brand-accent"></i> 100GB NVMe SSD</li>
                        <li class="flex items-center gap-3 text-sm font-bold"><i class="uil uil-check-circle text-brand-accent"></i> Turbo Speed Boost</li>
                    </ul>
                    <button class="w-full py-4 rounded-2xl border-2 border-brand-accent/20 text-brand-accent font-black text-[10px] uppercase tracking-widest hover:bg-brand-accent hover:text-white transition-all">Order Now</button>
                </div>

                <!-- Elite Plan -->
                <div class="reveal glass-form p-8 rounded-[40px] border border-white/10 hover:border-brand-accent/30 transition-all flex flex-col group">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform">
                        <i class="uil uil-diamond text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-black mb-2">Enterprise</h3>
                    <p class="text-xs opacity-50 mb-6">The ultimate performance for large enterprises.</p>
                    <div class="text-3xl font-black gradient-text mb-8">₹2,499<span class="text-sm font-medium opacity-50">/mo</span></div>
                    <ul class="space-y-4 mb-10 flex-grow">
                        <li class="flex items-center gap-3 text-sm font-bold"><i class="uil uil-check-circle text-brand-accent"></i> Unlimited Websites</li>
                        <li class="flex items-center gap-3 text-sm font-bold"><i class="uil uil-check-circle text-brand-accent"></i> 200GB NVMe SSD</li>
                        <li class="flex items-center gap-3 text-sm font-bold"><i class="uil uil-check-circle text-brand-accent"></i> Priority 24/7 Support</li>
                    </ul>
                    <button class="w-full py-4 rounded-2xl border-2 border-brand-accent/20 text-brand-accent font-black text-[10px] uppercase tracking-widest hover:bg-brand-accent hover:text-white transition-all">Order Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. WHY CHOOSE SAHASRA HOSTING -->
    <section class="py-24 theme-aware-hero bg-brand-dark/[0.02]">
        <div class="container mx-auto px-6 md:px-12">
            <div class="flex flex-col lg:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-2xl reveal">
                    <h2 class="text-4xl md:text-5xl font-heading font-black mb-6 leading-tight uppercase tracking-tighter">Why Choose <br><span class="gradient-text">Sahasra Infrastructure</span></h2>
                    <p class="text-base md:text-lg opacity-60">We don't just host websites; we provide a high-availability foundation for your digital growth.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Pillar 1 -->
                <div class="reveal glass-form sahasra-feature-card p-5 rounded-[30px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-4 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500">
                        <i class="uil uil-tachometer-fast text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4">99.9% Uptime SLA</h4>
                    <p class="text-sm opacity-60 leading-relaxed">Our redundant network architecture ensures your website stays online, providing a seamless experience for your visitors around the clock.</p>
                </div>

                <!-- Pillar 2 -->
                <div class="reveal glass-form sahasra-feature-card p-5 rounded-[30px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-4 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500">
                        <i class="uil uil-shield-check text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4">Proactive Security</h4>
                    <p class="text-sm opacity-60 leading-relaxed">Advanced DDoS protection, real-time malware scanning, and web application firewalls (WAF) keep your data safe from evolving threats.</p>
                </div>

                <!-- Pillar 3 -->
                <div class="reveal glass-form sahasra-feature-card p-5 rounded-[30px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-4 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500">
                        <i class="uil uil-history text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4">Automated Backups</h4>
                    <p class="text-sm opacity-60 leading-relaxed">Never worry about data loss. We perform daily off-site backups, allowing you to restore your entire site with a single click.</p>
                </div>

                <!-- Pillar 4 -->
                <div class="reveal glass-form sahasra-feature-card p-5 rounded-[30px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-4 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500">
                        <i class="uil uil-processor text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4">NVMe SSD Storage</h4>
                    <p class="text-sm opacity-60 leading-relaxed">Experience up to 20x faster page loads compared to standard SSDs. Our pure NVMe infrastructure is optimized for speed.</p>
                </div>

                <!-- Pillar 5 -->
                <div class="reveal glass-form sahasra-feature-card p-5 rounded-[30px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-4 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500">
                        <i class="uil uil-sync text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4">Free Expert Migration</h4>
                    <p class="text-sm opacity-60 leading-relaxed">Moving from another host? Our migration specialists will handle the transfer of your sites and emails with zero downtime.</p>
                </div>

                <!-- Pillar 6 -->
                <div class="reveal glass-form sahasra-feature-card p-5 rounded-[30px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-4 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500">
                        <i class="uil uil-headset text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4">24/7 Priority Support</h4>
                    <p class="text-sm opacity-60 leading-relaxed">Our in-house experts are available via chat, email, and phone to resolve any technical challenges you might face.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. FAQ SECTION -->
    <section class="py-24 theme-aware-hero">
        <div class="container mx-auto px-6 md:px-12">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16 reveal">
                    <h2 class="text-3xl md:text-5xl font-heading font-black mb-4 tracking-tight uppercase">Hosting <span class="gradient-text">Insights</span></h2>
                    <p class="text-base opacity-60">Everything you need to know about our infrastructure</p>
                </div>

                <div class="space-y-2">
                    <!-- FAQ 1 -->
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-brand-accent/[0.02]" open>
                        <summary class="cursor-pointer list-none py-5 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight">What makes your hosting faster than others?</span>
                            <div class="w-10 h-10 rounded-full border border-brand-accent/20 flex items-center justify-center text-brand-accent group-open:bg-brand-accent group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">
                                We use LiteSpeed Web Servers and NVMe SSD storage, which are significantly faster than traditional Apache servers and standard SATA SSDs. Additionally, our global CDN integration ensures your content is delivered from the nearest server location to your visitors.
                            </p>
                        </div>
                    </details>

                    <!-- FAQ 2 -->
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-brand-accent/[0.02]">
                        <summary class="cursor-pointer list-none py-5 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight">Do you offer free SSL certificates?</span>
                            <div class="w-10 h-10 rounded-full border border-brand-accent/20 flex items-center justify-center text-brand-accent group-open:bg-brand-accent group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">
                                Yes, every hosting account includes free Let's Encrypt SSL certificates. These auto-renew every 90 days, ensuring your website remains secure and SEO-friendly without any manual effort.
                            </p>
                        </div>
                    </details>

                    <!-- FAQ 3 -->
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-brand-accent/[0.02]">
                        <summary class="cursor-pointer list-none py-5 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight">Can I upgrade my plan as my business grows?</span>
                            <div class="w-10 h-10 rounded-full border border-brand-accent/20 flex items-center justify-center text-brand-accent group-open:bg-brand-accent group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">
                                Absolutely. You can upgrade your hosting plan at any time through our client portal. The process is seamless and does not result in any downtime for your website.
                            </p>
                        </div>
                    </details>

                    <!-- FAQ 4 -->
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-brand-accent/[0.02]">
                        <summary class="cursor-pointer list-none py-5 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight">How often do you take backups?</span>
                            <div class="w-10 h-10 rounded-full border border-brand-accent/20 flex items-center justify-center text-brand-accent group-open:bg-brand-accent group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">
                                We perform fully automated daily backups for all accounts. We retain these backups for 30 days, giving you the ability to restore files, databases, or your entire account to any point in the past month.
                            </p>
                        </div>
                    </details>

                    <!-- FAQ 5 -->
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-brand-accent/[0.02]">
                        <summary class="cursor-pointer list-none py-5 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight">Is technical support included in the price?</span>
                            <div class="w-10 h-10 rounded-full border border-brand-accent/20 flex items-center justify-center text-brand-accent group-open:bg-brand-accent group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">
                                Yes, our 24/7 technical support is included with all plans. Our team can help with server-related issues, email setup, and general troubleshooting to ensure your hosting experience is hassle-free.
                            </p>
                        </div>
                    </details>

                    <!-- FAQ 6 -->
                    <details class="reveal group transition-all hover:bg-brand-accent/[0.02]">
                        <summary class="cursor-pointer list-none py-5 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight">Do you provide email accounts with hosting?</span>
                            <div class="w-10 h-10 rounded-full border border-brand-accent/20 flex items-center justify-center text-brand-accent group-open:bg-brand-accent group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">
                                Yes, all our hosting plans come with unlimited business email addresses. You can create profesional emails like name@yourcompany.com and manage them through our easy-to-use control panel.
                            </p>
                        </div>
                    </details>
                </div>
            </div>

            <!-- Tactical CTA -->
            <div class="reveal mt-20 rounded-[40px] border border-brand-accent/20 bg-brand-accent/[0.03] p-10 md:p-16 text-center relative overflow-hidden">
                <div class="absolute -top-32 -left-32 w-64 h-64 bg-brand-accent/10 rounded-full blur-[100px]"></div>
                <div class="absolute -bottom-32 -right-32 w-64 h-64 bg-brand-accent/10 rounded-full blur-[100px]"></div>
                
                <h3 class="text-3xl md:text-5xl font-heading font-black mb-6 relative z-10 leading-tight">Scale Your <span class="gradient-text">Digital Empire</span></h3>
                <p class="opacity-60 max-w-2xl mx-auto mb-10 text-sm md:text-lg leading-relaxed relative z-10">Stop worrying about server downtime and focus on growth. Join thousands of businesses powered by Sahasra Infrastructure.</p>
                
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 relative z-10">
                    <a href="<?php echo $root; ?>index.php#contact" class="w-full sm:w-auto px-10 py-5 rounded-2xl gradient-bg text-white font-black text-xs uppercase tracking-widest shadow-2xl hover:scale-105 active:scale-95 transition-all">
                        Get Started Now
                    </a>
                    <a href="tel:+919876543210" class="w-full sm:w-auto px-10 py-5 rounded-2xl border-2 border-brand-accent text-brand-accent font-black text-xs uppercase tracking-widest hover:bg-brand-accent hover:text-white transition-all shadow-lg">
                        Talk to an Expert
                    </a>
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
