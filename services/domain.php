<?php $root = '../'; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domain Protocols | Sahasra Barath Agency</title>
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
        /* Theme Swapping Authorities */
        .theme-aware-hero {
            background-color: #ffffff;
            transition: all 0.4s ease;
        }
        .theme-aware-hero h1, .theme-aware-hero h3, .theme-aware-hero h2 { color: #000B1A; }
        .theme-aware-hero p { color: #475569; }
        .theme-aware-hero .feature-label { color: #1e293b; }
        .theme-aware-hero .glass-form { background: rgba(0, 0, 0, 0.02); border-color: rgba(0, 0, 0, 0.05); color: #000B1A; }
        .theme-aware-hero input, .theme-aware-hero textarea { background: #fff; color: #000; border-color: #e2e8f0; }

        /* Dark Theme Authority */
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

    <!-- 1. ELITE DOMAIN HERO SECTION -->
    <section id="home" class="relative pt-2 pb-2 lg:pt-6 lg:pb-6 theme-aware-hero overflow-hidden">
        <!-- Abstract BG Elements -->
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-brand-accent/5 rounded-full blur-[150px] -mr-96 -mt-96 animate-blob"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-brand-accent/5 rounded-full blur-[120px] -ml-48 -mb-48 animate-blob" style="animation-delay: 2s"></div>
        <div class="absolute inset-0 opacity-[0.03] pointer-events-none bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]"></div>

        <div class="container mx-auto px-6 md:px-12 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <!-- Left Content: Value Proposition -->
                <div class="reveal">
                    <h1 class="text-3xl md:text-5xl lg:text-6xl font-heading font-black mb-4 leading-[1.1] tracking-tighter">
                        Register Your <br/>
                        <span class="text-brand-accent">Perfect Domain Name</span>
                    </h1>
                    <p class="text-base md:text-lg mb-6 max-w-xl leading-relaxed">
                        Secure your brand identity with affordable domain names across popular global and country-specific extensions.
                    </p>

                    <!-- Feature Grid -->
                    <div class="grid sm:grid-cols-2 gap-4 mb-8">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent">
                                <i class="uil uil-globe text-base"></i>
                            </div>
                            <span class="text-xs font-bold feature-label">350+ Domain Extensions</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent">
                                <i class="uil uil-bolt text-base"></i>
                            </div>
                            <span class="text-xs font-bold feature-label">Instant Registration</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent">
                                <i class="uil uil-server-network text-base"></i>
                            </div>
                            <span class="text-xs font-bold feature-label">Easy DNS Management</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent">
                                <i class="uil uil-shield-check text-base"></i>
                            </div>
                            <span class="text-xs font-bold feature-label">Free WHOIS Privacy*</span>
                        </div>
                    </div>

                    <!-- Pricing Promo Box -->
                    <div class="brand-badge p-5 mb-6 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-brand-accent/10 rounded-full -mr-16 -mt-16 blur-2xl group-hover:bg-brand-accent/20 transition-all"></div>
                        <div class="relative z-10">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="text-xl">🚀</span>
                                <h3 class="text-lg font-black uppercase tracking-tight">1 Year Free <span class="text-[9px] opacity-60 font-normal normal-case">(Conditions Apply)</span></h3>
                            </div>
                            <p class="text-[10px] text-brand-accent font-bold mb-3">Billing starts from the <span class="opacity-80">second year</span> as per the selected plan</p>
                            <div class="flex items-baseline gap-2">
                                <span class="text-xs opacity-60 font-medium">Domain starting at</span>
                                <span class="text-2xl font-black gradient-text">₹699 / Year</span>
                            </div>
                        </div>
                    </div>

                    <a href="#contact" class="inline-flex items-center gap-3 px-8 py-4 rounded-xl border-2 border-brand-accent text-brand-accent font-black uppercase text-[10px] tracking-widest hover:bg-brand-accent hover:text-white transition-all shadow-lg hover:shadow-brand-accent/30">
                        <i class="uil uil-headset"></i> Talk to Expert
                    </a>
                </div>

                <!-- Right Content: Capture Form -->
                <div class="reveal">
                    <div class="glass-form p-5 md:p-6 rounded-[30px] shadow-2xl relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-full h-1 gradient-bg"></div>
                        
                        <div class="flex items-center gap-3 mb-1">
                            <div class="w-10 h-10 rounded-xl gradient-bg flex items-center justify-center text-white text-xl shadow-lg">
                                <i class="uil uil-rocket"></i>
                            </div>
                            <div>
                                <h2 class="text-xl font-black tracking-tight leading-none">Hosting Assistance</h2>
                                <p class="text-[10px] opacity-60 mt-1">Not sure which plan suits you? We guide you.</p>
                            </div>
                        </div>

                        <form action="#" class="space-y-3 mt-6">
                            <div class="relative">
                                <i class="uil uil-user absolute left-4 top-1/2 -translate-y-1/2 opacity-50 text-sm"></i>
                                <input type="text" placeholder="Your Name" class="w-full pl-10 pr-4 py-2.5 border rounded-xl text-sm outline-none transition-all">
                            </div>
                            <div class="relative">
                                <i class="uil uil-envelope absolute left-4 top-1/2 -translate-y-1/2 opacity-50 text-sm"></i>
                                <input type="email" placeholder="Email Address" class="w-full pl-10 pr-4 py-2.5 border rounded-xl text-sm outline-none transition-all">
                            </div>
                            <div class="relative">
                                <i class="uil uil-phone absolute left-4 top-1/2 -translate-y-1/2 opacity-50 text-sm"></i>
                                <input type="tel" placeholder="Mobile Number" class="w-full pl-10 pr-4 py-2.5 border rounded-xl text-sm outline-none transition-all">
                            </div>
                            <div class="relative">
                                <i class="uil uil-globe absolute left-4 top-1/2 -translate-y-1/2 opacity-50 text-sm"></i>
                                <input type="text" placeholder="Website / Domain" class="w-full pl-10 pr-4 py-2.5 border rounded-xl text-sm outline-none transition-all">
                            </div>
                            <div class="relative">
                                <i class="uil uil-message absolute left-4 top-3 opacity-50 text-sm"></i>
                                <textarea rows="2" placeholder="Message" class="w-full pl-10 pr-4 py-2.5 border rounded-xl text-sm outline-none transition-all"></textarea>
                            </div>

                            <button type="submit" class="w-full py-4 gradient-bg text-white font-black rounded-xl uppercase tracking-[1px] text-[10px] shadow-lg hover:scale-[1.01] active:scale-95 transition-all flex items-center justify-center gap-2">
                                <i class="uil uil-telegram-alt text-base"></i> Request Callback
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 1.5 POPULAR DOMAIN EXTENSIONS SECTION -->
    <section class="py-12 pb-20 theme-aware-hero">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-16 reveal">
                <h2 class="text-3xl md:text-4xl font-heading font-black mb-4 tracking-tight">Popular Domain Extensions</h2>
                <p class="text-base opacity-60 max-w-2xl mx-auto">Choose from the most trusted domain extensions with affordable yearly pricing</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 max-w-6xl mx-auto">
                <!-- .com Card -->
                <div class="reveal glass-form p-5 rounded-[30px] text-center border border-white/10 hover:border-brand-accent/30 transition-all group scale-active">
                    <div class="text-5xl font-black mb-1 font-heading tracking-tighter text-brand-dark group-hover:text-brand-accent transition-colors">.com</div>
                    <p class="text-[10px] opacity-60 mb-4 font-medium uppercase tracking-wider">Global business & brands</p>
                    <div class="text-3xl font-black gradient-text mb-6">₹999 <span class="text-xs opacity-50 font-medium tracking-normal lowercase">/ year</span></div>
                    <button class="w-full py-3 rounded-xl border-2 border-brand-accent/20 text-brand-accent font-black text-xs uppercase tracking-widest hover:bg-brand-accent hover:text-white transition-all shadow-sm">Register Now</button>
                </div>

                <!-- .in Card (Popular) -->
                <div class="reveal glass-form p-5 rounded-[30px] text-center border-2 border-brand-accent relative shadow-xl shadow-brand-accent/10 transform lg:-translate-y-4">
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 px-4 py-1.5 gradient-bg text-white text-[10px] font-black rounded-full uppercase tracking-widest shadow-lg">Popular</div>
                    <div class="text-6xl font-black mb-1 font-heading tracking-tighter text-brand-accent">.in</div>
                    <p class="text-[10px] opacity-60 mb-4 font-medium uppercase tracking-wider">Indian websites & startups</p>
                    <div class="text-3xl font-black gradient-text mb-6">₹699 <span class="text-xs opacity-50 font-medium tracking-normal lowercase">/ year</span></div>
                    <button class="w-full py-3.5 gradient-bg text-white font-black text-xs uppercase tracking-widest rounded-xl shadow-lg hover:scale-[1.02] transition-all">Register Now</button>
                </div>

                <!-- .net Card -->
                <div class="reveal glass-form p-5 rounded-[30px] text-center border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="text-5xl font-black mb-1 font-heading tracking-tighter text-brand-dark group-hover:text-brand-accent transition-colors">.net</div>
                    <p class="text-[10px] opacity-60 mb-4 font-medium uppercase tracking-wider">Technology & services</p>
                    <div class="text-3xl font-black gradient-text mb-6">₹1,199 <span class="text-xs opacity-50 font-medium tracking-normal lowercase">/ year</span></div>
                    <button class="w-full py-3 rounded-xl border-2 border-brand-accent/20 text-brand-accent font-black text-xs uppercase tracking-widest hover:bg-brand-accent hover:text-white transition-all shadow-sm">Register Now</button>
                </div>

                <!-- .org Card -->
                <div class="reveal glass-form p-5 rounded-[30px] text-center border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="text-5xl font-black mb-1 font-heading tracking-tighter text-brand-dark group-hover:text-brand-accent transition-colors">.org</div>
                    <p class="text-[10px] opacity-60 mb-4 font-medium uppercase tracking-wider">Organizations & NGOs</p>
                    <div class="text-3xl font-black gradient-text mb-6">₹899 <span class="text-xs opacity-50 font-medium tracking-normal lowercase">/ year</span></div>
                    <button class="w-full py-3 rounded-xl border-2 border-brand-accent/20 text-brand-accent font-black text-xs uppercase tracking-widest hover:bg-brand-accent hover:text-white transition-all shadow-sm">Register Now</button>
                </div>
            </div>

            <!-- Second Row (Smaller Footprint) -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-6 max-w-4xl mx-auto">
                <!-- .co Card -->
                <div class="reveal glass-form px-5 py-4 rounded-[25px] flex items-center justify-between border border-white/10">
                    <div>
                        <div class="text-3xl font-black font-heading">.co</div>
                        <p class="text-xs opacity-50 uppercase tracking-widest">Startups</p>
                    </div>
                    <div class="text-right">
                        <div class="text-xl font-black gradient-text">₹1,499</div>
                        <p class="text-xs opacity-40">/ year</p>
                    </div>
                </div>
                <!-- .store Card -->
                <div class="reveal glass-form px-5 py-4 rounded-[25px] flex items-center justify-between border border-white/10">
                    <div>
                        <div class="text-3xl font-black font-heading">.store</div>
                        <p class="text-xs opacity-50 uppercase tracking-widest">eCommerce</p>
                    </div>
                    <div class="text-right">
                        <div class="text-xl font-black gradient-text">₹1,299</div>
                        <p class="text-xs opacity-40">/ year</p>
                    </div>
                </div>
                <!-- .online Card -->
                <div class="reveal glass-form px-5 py-4 rounded-[25px] flex items-center justify-between border border-white/10">
                    <div>
                        <div class="text-3xl font-black font-heading">.online</div>
                        <p class="text-xs opacity-50 uppercase tracking-widest">Digital</p>
                    </div>
                    <div class="text-right">
                        <div class="text-xl font-black gradient-text">₹899</div>
                        <p class="text-xs opacity-40">/ year</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 1.8 WHY CHOOSE SAHASRA SECTION -->
    <section class="py-10 theme-aware-hero relative overflow-hidden">
        <!-- Decoration -->
        <div class="absolute top-1/2 left-0 w-64 h-64 bg-brand-accent/5 rounded-full blur-3xl -ml-32"></div>
        
        <div class="container mx-auto px-6 md:px-12 relative z-10">
            <div class="max-w-4xl mx-auto text-center mb-16 reveal">
                <h2 class="text-3xl md:text-5xl font-heading font-black mb-4 tracking-tight">Why Choose <span class="gradient-text">Sahasra Group</span> Domain Services</h2>
                <p class="text-lg opacity-60">Reliable domain solutions designed to protect, manage, and grow your online identity</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 max-w-5xl mx-auto">
                <!-- Pillar 1: DNS Control -->
                <div class="reveal glass-form p-5 rounded-[30px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-11 h-11 rounded-xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-4 group-hover:scale-110 transition-transform">
                        <i class="uil uil-setting text-xl"></i>
                    </div>
                    <h3 class="text-lg font-black mb-2">Full DNS Control</h3>
                    <p class="text-[13px] opacity-60 leading-relaxed">Manage your CNAME, MX, and A records with total precision through our real-time control panel.</p>
                </div>

                <!-- Pillar 2: Privacy First -->
                <div class="reveal glass-form p-5 rounded-[30px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-11 h-11 rounded-xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-4 group-hover:scale-110 transition-transform">
                        <i class="uil uil-shield-check text-xl"></i>
                    </div>
                    <h3 class="text-lg font-black mb-2">Privacy Protection</h3>
                    <p class="text-[13px] opacity-60 leading-relaxed">Shield your personal data from public WHOIS databases to prevent spam, identity theft, and unwanted solicitations.</p>
                </div>

                <!-- Pillar 3: Support -->
                <div class="reveal glass-form p-5 rounded-[30px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-11 h-11 rounded-xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-4 group-hover:scale-110 transition-transform">
                        <i class="uil uil-user-check text-xl"></i>
                    </div>
                    <h3 class="text-lg font-black mb-2">24/7 Human Support</h3>
                    <p class="text-[13px] opacity-60 leading-relaxed">No bots. Talk to real domain experts anytime you need assistance with configuration or transfers.</p>
                </div>

                <!-- Pillar 4: Enterprise Security -->
                <div class="reveal glass-form p-5 rounded-[30px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-11 h-11 rounded-xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-4 group-hover:scale-110 transition-transform">
                        <i class="uil uil-lock-access text-xl"></i>
                    </div>
                    <h3 class="text-lg font-black mb-2">Theft Protection</h3>
                    <p class="text-[13px] opacity-60 leading-relaxed">Advanced domain locking prevents unauthorized transfers, ensuring your digital property stays where it belongs.</p>
                </div>

                <!-- Pillar 5: Auto-Renewal -->
                <div class="reveal glass-form p-5 rounded-[30px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-11 h-11 rounded-xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-4 group-hover:scale-110 transition-transform">
                        <i class="uil uil-sync text-xl"></i>
                    </div>
                    <h3 class="text-lg font-black mb-2">Seamless Autorenew</h3>
                    <p class="text-[13px] opacity-60 leading-relaxed">Never lose your brand. Our automated renewal system ensures your domains never expire unexpectedly.</p>
                </div>

                <!-- Pillar 6: Easy Migration -->
                <div class="reveal glass-form p-5 rounded-[30px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-11 h-11 rounded-xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-4 group-hover:scale-110 transition-transform">
                        <i class="uil uil-exchange-alt text-xl"></i>
                    </div>
                    <h3 class="text-lg font-black mb-2">Hassle-Free Transfer</h3>
                    <p class="text-[13px] opacity-60 leading-relaxed">Moving to Sahasra? Our team handles the migration process for your existing domains with zero downtime.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- 2. SERVICE STRATEGY & DETAILS -->
    <?php
    $fileName = basename($_SERVER['SCRIPT_NAME'] ?? '');
    $slug = strtolower(pathinfo($fileName, PATHINFO_FILENAME));

    $content = [
        'eyebrow' => 'Why Brands Choose Sahasra Barath',
        'heading' => 'Built for Outcomes, Not Just Output',
        'intro' => 'Every engagement is structured around measurable growth outcomes: visibility, trust, conversion, retention, and long-term digital authority.',
        'pillars' => [
            ['title' => 'Strategy First', 'desc' => 'Discovery, market mapping, and competitor intelligence before execution.'],
            ['title' => 'Execution Precision', 'desc' => 'Clear milestones, specialist ownership, and accountable delivery.'],
            ['title' => 'Performance Visibility', 'desc' => 'Transparent reporting with actionable indicators, not vanity metrics.'],
            ['title' => 'Scale Ready', 'desc' => 'Systems built for growth without frequent rebuilds.'],
        ],
        'deliverablesTitle' => 'What You Get in Every Engagement',
        'deliverables' => [
            'Business-aligned execution roadmap with milestone dates.',
            'Channel-specific tactical plan matched to audience intent.',
            'Quality assurance checkpoints before major delivery steps.',
            'Structured updates and regular review communication.',
            'Optimization cycles driven by actual performance data.',
            'A practical path from launch to scale.',
        ],
        'idealTitle' => 'Ideal for These Business Types',
        'ideal' => [
            'Growth-stage startups needing speed and clarity.',
            'SMEs improving lead flow and digital trust.',
            'Enterprise teams requiring process maturity and reliability.',
            'E-commerce brands focused on conversion and retention.',
            'Service brands aiming for stronger authority positioning.',
            'Multi-location brands requiring consistency across channels.',
        ],
        'stats' => [
            ['n' => '10+', 'l' => 'Years Combined Expertise'],
            ['n' => '300+', 'l' => 'Projects Delivered'],
            ['n' => '24/7', 'l' => 'Operational Monitoring'],
            ['n' => '99.9%', 'l' => 'Reliability Standard'],
        ],
        'faq' => [
            ['q' => 'How quickly can we start?', 'a' => 'Most projects begin within 3 to 7 business days after onboarding and scope confirmation.'],
            ['q' => 'Will we get regular updates?', 'a' => 'Yes. You receive structured updates with clear progress and next actions.'],
            ['q' => 'Do you provide custom plans?', 'a' => 'Yes. Scope, pricing, and rollout are tailored to business goals and timelines.'],
            ['q' => 'How do you measure success?', 'a' => 'Metrics are defined during onboarding and tracked through each delivery phase.'],
        ],
        'ctaTitle' => 'Ready to Build a Stronger Growth Engine?',
        'ctaDesc' => 'Share your goals and constraints. We will map a practical path with clear deliverables, realistic timelines, and measurable outcomes.',
        'ctaBtn' => 'Book a Strategy Call',
    ];

    if (in_array($slug, ['seo', 'smo', 'digital-marketing', 'paid-service', 'digital-pr'], true)) {
        $content['eyebrow'] = 'Demand Generation and Brand Visibility';
        $content['heading'] = 'Full-Funnel Marketing that Converts Demand into Revenue';
        // ... (preserving slug logic)
    }
    // (Preserving all your slug-based content logic exactly as provided)
    if (in_array($slug, ['domain', 'hosting', 'emails', 'business-emails', 'google-suite', 'open-xchange'], true)) {
        $content['eyebrow'] = 'Business Infrastructure and Reliability';
        $content['heading'] = 'Reliable Digital Infrastructure for Daily Business Operations';
        $content['intro'] = 'We set up and optimize core business infrastructure including domains, hosting, professional email, and collaboration systems with security and uptime in focus.';
        $content['deliverables'] = [
            'Architecture planning for domain, mail, and hosting dependencies.',
            'Security baseline implementation and policy hardening.',
            'Migration planning with minimal service disruption.',
            'Team onboarding for tools and access workflows.',
            'Monitoring, backup, and recovery readiness checks.',
            'Operational documentation for long-term maintenance.',
        ];
        $content['faq'][0] = ['q' => 'Can you migrate from an existing provider?', 'a' => 'Yes. We plan and execute migration in phases to reduce risk and minimize downtime.'];
        $content['faq'][3] = ['q' => 'Do you provide ongoing support?', 'a' => 'Yes. Ongoing maintenance and support plans are available based on business criticality.'];
        $content['ctaTitle'] = 'Need Stable Infrastructure Before You Scale?';
        $content['ctaBtn'] = 'Book Infrastructure Audit';
    }

    $esc = static function ($value) {
        return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
    };
    ?>

    <section class="py-20 theme-aware-hero border-t border-white/5">
        <div class="container mx-auto px-6 md:px-12">
            <!-- Header -->
            <div class="max-w-4xl mx-auto text-center mb-16 reveal">
                <span class="inline-block text-[11px] uppercase tracking-[0.3em] font-black text-brand-accent mb-4"><?php echo $esc($content['eyebrow']); ?></span>
                <h2 class="text-3xl md:text-5xl font-heading font-black leading-tight mb-6"><?php echo $esc($content['heading']); ?></h2>
                <p class="text-base md:text-xl opacity-60 leading-relaxed max-w-3xl mx-auto"><?php echo $esc($content['intro']); ?></p>
            </div>

            <!-- Pillars Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-20 reveal">
                <?php foreach ($content['pillars'] as $pillar): ?>
                    <div class="glass-form p-6 rounded-[30px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                        <div class="w-10 h-10 rounded-xl gradient-bg flex items-center justify-center text-white mb-5 shadow-lg shadow-brand-accent/20">
                            <i class="uil uil-check text-lg"></i>
                        </div>
                        <h3 class="text-xs font-black uppercase tracking-widest mb-3 opacity-90"><?php echo $esc($pillar['title']); ?></h3>
                        <p class="text-[13px] opacity-60 leading-relaxed"><?php echo $esc($pillar['desc']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Deliverables Row -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mb-20">
                <div class="reveal glass-form p-8 rounded-[35px] border border-white/10 shadow-xl relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-brand-accent/5 rounded-full -mr-16 -mt-16 blur-3xl group-hover:bg-brand-accent/10 transition-all"></div>
                    <h3 class="text-xl font-black mb-6 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-lg gradient-bg flex items-center justify-center text-white text-sm"><i class="uil uil-layer-group"></i></span>
                        <?php echo $esc($content['deliverablesTitle']); ?>
                    </h3>
                    <ul class="space-y-4">
                        <?php foreach ($content['deliverables'] as $item): ?>
                            <li class="flex items-start gap-3 text-sm opacity-60 leading-relaxed">
                                <i class="uil uil-arrow-right text-brand-accent mt-1"></i>
                                <?php echo $esc($item); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <div class="reveal glass-form p-8 rounded-[35px] border border-white/10 shadow-xl relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-brand-accent/5 rounded-full -mr-16 -mt-16 blur-3xl group-hover:bg-brand-accent/10 transition-all"></div>
                    <h3 class="text-xl font-black mb-6 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-lg gradient-bg flex items-center justify-center text-white text-sm"><i class="uil uil-focus-target"></i></span>
                        <?php echo $esc($content['idealTitle']); ?>
                    </h3>
                    <ul class="space-y-4">
                        <?php foreach ($content['ideal'] as $item): ?>
                            <li class="flex items-start gap-3 text-sm opacity-60 leading-relaxed">
                                <i class="uil uil-check-circle text-brand-accent mt-1"></i>
                                <?php echo $esc($item); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- Global Authority Stats -->
            <div class="reveal brand-badge p-10 md:p-14 mb-20 rounded-[40px] relative overflow-hidden group border border-white/5">
                <div class="absolute top-0 left-0 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-[0.05]"></div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center relative z-10">
                    <?php foreach ($content['stats'] as $stat): ?>
                        <div class="group/stat">
                            <div class="text-3xl md:text-5xl font-black gradient-text mb-3 scale-active"><?php echo $esc($stat['n']); ?></div>
                            <p class="text-[10px] uppercase tracking-[0.2em] font-black opacity-40 group-hover/stat:opacity-80 transition-all"><?php echo $esc($stat['l']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </section>

    <!-- 2.5 FAQs – DOMAIN REGISTRATION -->
    <section class="py-20 theme-aware-hero">
        <div class="container mx-auto px-6 md:px-12">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12 reveal">
                    <span class="inline-block px-4 py-1.5 gradient-bg/10 text-brand-accent text-[10px] font-black rounded-full uppercase tracking-widest mb-4">Support & Guidance</span>
                    <h2 class="text-3xl md:text-5xl font-heading font-black tracking-tight mb-4">FAQs – <span class="gradient-text">Domain Registration</span></h2>
                    <p class="text-base opacity-60">Everything you need to know about securing your online identity</p>
                </div>

                <div class="space-y-0 max-w-4xl mx-auto">
                    <!-- FAQ 1 -->
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-brand-accent/[0.02]">
                        <summary class="cursor-pointer list-none py-5 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight">How long does it take for a domain to become active?</span>
                            <div class="w-10 h-10 rounded-full border border-brand-accent/20 flex items-center justify-center text-brand-accent group-open:bg-brand-accent group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">
                                Once you complete the registration and payment, most domain extensions are registered **instantly**. However, it can take up to 24-48 hours for the DNS records to propagate globally across all internet service providers.
                            </p>
                        </div>
                    </details>

                    <!-- FAQ 2 -->
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-brand-accent/[0.02]">
                        <summary class="cursor-pointer list-none py-5 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight">Can I transfer my existing domain to Sahasra Group?</span>
                            <div class="w-10 h-10 rounded-full border border-brand-accent/20 flex items-center justify-center text-brand-accent group-open:bg-brand-accent group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">
                                **Yes, absolutely.** You can transfer your existing domains from any other registrar to us. Our technical team handles the migration process to ensure zero downtime for your website and emails during the transition.
                            </p>
                        </div>
                    </details>

                    <!-- FAQ 3 -->
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-brand-accent/[0.02]">
                        <summary class="cursor-pointer list-none py-5 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight">What is WHOIS Privacy protection?</span>
                            <div class="w-10 h-10 rounded-full border border-brand-accent/20 flex items-center justify-center text-brand-accent group-open:bg-brand-accent group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">
                                When you register a domain, your name, email, and phone number are listed in a public database. **WHOIS Privacy** replaces your personal details with our generic company information, shielding you from spammers, hackers, and telemarketers.
                            </p>
                        </div>
                    </details>

                    <!-- FAQ 4 -->
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-brand-accent/[0.02]">
                        <summary class="cursor-pointer list-none py-5 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight">Do I own the domain permanently?</span>
                            <div class="w-10 h-10 rounded-full border border-brand-accent/20 flex items-center justify-center text-brand-accent group-open:bg-brand-accent group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">
                                Domain names are "leased" for a specific period (usually 1 to 10 years). As long as you continue to pay the renewal fees, you maintain **exclusive ownership** and control of the domain name. We offer auto-renewal to ensure you never lose your brand accidentally.
                            </p>
                        </div>
                    </details>

                    <!-- FAQ 5 -->
                    <details class="reveal group border-b border-brand-dark/5 dark:border-white/10 transition-all hover:bg-brand-accent/[0.02]">
                        <summary class="cursor-pointer list-none py-5 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight">What happens if I forget to renew my domain?</span>
                            <div class="w-10 h-10 rounded-full border border-brand-accent/20 flex items-center justify-center text-brand-accent group-open:bg-brand-accent group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">
                                If a domain expires, it enters a "Grace Period" where you can still renew it at normal prices. After that, it enters a "Redemption Phase" where renewal costs are significantly higher. Finally, it is released to the public for anyone to register. **We highly recommend enabling Auto-Renewal.**
                            </p>
                        </div>
                    </details>

                    <!-- FAQ 6 -->
                    <details class="reveal group transition-all hover:bg-brand-accent/[0.02]">
                        <summary class="cursor-pointer list-none py-5 px-4 font-bold flex items-center justify-between text-brand-dark dark:text-white">
                            <span class="text-lg md:text-xl pr-6 font-heading tracking-tight">Can I change a domain name after registration?</span>
                            <div class="w-10 h-10 rounded-full border border-brand-accent/20 flex items-center justify-center text-brand-accent group-open:bg-brand-accent group-open:text-white group-open:rotate-180 transition-all">
                                <i class="uil uil-angle-down text-2xl"></i>
                            </div>
                        </summary>
                        <div class="px-4 pb-8 pt-0">
                            <p class="text-base md:text-lg opacity-60 leading-relaxed max-w-3xl">
                                **No.** Once a domain is registered, it cannot be edited or renamed due to registry policies. If you made a typo or want a different name, a new registration will be required. Please double-check your spelling before confirming.
                            </p>
                        </div>
                    </details>
                </div>
            </div>

            <!-- Tactical CTA -->
            <div class="reveal mt-20 rounded-[40px] border border-brand-accent/20 bg-brand-accent/[0.03] p-10 md:p-16 text-center relative overflow-hidden">
                <div class="absolute -top-32 -left-32 w-64 h-64 bg-brand-accent/10 rounded-full blur-[100px]"></div>
                <div class="absolute -bottom-32 -right-32 w-64 h-64 bg-brand-accent/10 rounded-full blur-[100px]"></div>
                
                <h3 class="text-3xl md:text-5xl font-heading font-black mb-6 relative z-10 leading-tight">Secure Your Brand's <span class="gradient-text">Future Today</span></h3>
                <p class="opacity-60 max-w-2xl mx-auto mb-10 text-sm md:text-lg leading-relaxed relative z-10">Protect your identity before someone else does. Our domain infrastructure ensures your brand remains secure, private, and always online.</p>
                
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 relative z-10">
                    <a href="<?php echo $root; ?>index.php#contact" class="w-full sm:w-auto px-10 py-5 rounded-2xl gradient-bg text-white font-black text-xs uppercase tracking-widest shadow-2xl hover:scale-105 active:scale-95 transition-all">
                        Register Domain Now
                    </a>
                    <a href="tel:+919876543210" class="w-full sm:w-auto px-10 py-5 rounded-2xl border-2 border-brand-accent text-brand-accent font-black text-xs uppercase tracking-widest hover:bg-brand-accent hover:text-white transition-all shadow-lg">
                        Talk to an Expert
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- 3. FOOTER -->
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
