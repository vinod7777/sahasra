<?php $root = '../'; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart CRM Management | Sahasra Barath High-Fidelity Enterprise Solutions</title>
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
        .dark-theme .theme-aware-hero h1, .dark-theme .theme-aware-hero h3, .dark-theme .theme-aware-hero h2 { color: #ffffff; }
        .dark-theme .theme-aware-hero p { color: #94a3b8; }
        .dark-theme .theme-aware-hero .feature-label { color: #cbd5e1; }
        .dark-theme .theme-aware-hero .glass-form { background: rgba(255, 255, 255, 0.03); border-color: rgba(255, 255, 255, 0.1); color: #fff; }
        
        .gradient-bg {
            background: linear-gradient(135deg, var(--brand-accent-start, #2563EB) 0%, var(--brand-accent-end, #00D4FF) 100%);
        }
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

    <!-- 1. SMART CRM HERO -->
    <section id="home" class="relative pt-6 pb-6 theme-aware-hero overflow-hidden">
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-brand-accent/3 rounded-full blur-[150px] -mr-96 -mt-96 transition-all duration-700"></div>

        <div class="container mx-auto px-6 md:px-12 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <div class="reveal">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-accent/10 text-brand-accent text-[10px] font-black uppercase tracking-[2px] mb-6 shadow-sm border border-brand-accent/20">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-accent animate-ping"></span>
                        Next-Gen Relationships
                    </div>
                    <h1 class="text-3xl md:text-5xl lg:text-7xl font-heading font-black mb-6 leading-[1.1] tracking-tighter italic uppercase">
                        Smart <br/>
                        <span class="gradient-text">CRM Logic.</span>
                    </h1>
                    <p class="text-base md:text-lg mb-8 max-w-xl leading-relaxed opacity-70">
                        Stop managing data, start managing growth. Our Smart CRM platform provides an institutional-grade engine for customer lifecycle management, revenue forecasting, and collaborative sales ops.
                    </p>

                    <div class="grid sm:grid-cols-2 gap-4 mb-10">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent"><i class="uil uil-users-alt"></i></div>
                            <span class="text-[11px] font-bold feature-label uppercase tracking-widest leading-none">Unified Directory</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent"><i class="uil uil-process"></i></div>
                            <span class="text-[11px] font-bold feature-label uppercase tracking-widest leading-none">Automated Funnels</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent"><i class="uil uil-chart-line"></i></div>
                            <span class="text-[11px] font-bold feature-label uppercase tracking-widest leading-none">Predictive Sales</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent"><i class="uil uil-globe"></i></div>
                            <span class="text-[11px] font-bold feature-label uppercase tracking-widest leading-none">Global Access</span>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 items-center">
                        <a href="#features" class="w-full sm:w-auto px-10 py-5 rounded-2xl border-2 border-brand-accent text-brand-accent font-black uppercase text-[10px] tracking-widest hover:bg-brand-accent hover:text-white transition-all shadow-lg active:scale-95">Explore Capabilities</a>
                        <div class="flex items-center gap-3 group cursor-pointer">
                            <div class="w-12 h-12 rounded-full border border-brand-dark/10 dark:border-white/10 flex items-center justify-center text-brand-dark dark:text-white group-hover:scale-110 group-hover:bg-brand-accent group-hover:text-white transition-all">
                                <i class="uil uil-play"></i>
                            </div>
                            <span class="text-[10px] font-black uppercase tracking-widest opacity-60">Watch Demo</span>
                        </div>
                    </div>
                </div>

                <div class="reveal">
                    <div class="glass-form p-6 md:p-8 rounded-[40px] shadow-2xl relative overflow-hidden border border-white/20">
                        <div class="absolute top-0 right-0 w-full h-1.5 gradient-bg opacity-80"></div>
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-12 h-12 rounded-2xl gradient-bg flex items-center justify-center text-white text-2xl shadow-lg ring-4 ring-brand-accent/20 transition-all hover:rotate-6">
                                <i class="uil uil-comment-alt-edit"></i>
                            </div>
                            <div>
                                <h2 class="text-2xl font-black tracking-tight leading-none uppercase italic">Get Access</h2>
                                <p class="text-[10px] opacity-60 mt-1.5 font-medium uppercase tracking-wider">Enterprise-Ready Deployment</p>
                            </div>
                        </div>

                        <form action="#" class="space-y-4">
                            <div class="space-y-4">
                                <div class="relative group">
                                    <i class="uil uil-user absolute left-4 top-1/2 -translate-y-1/2 text-brand-accent opacity-50 group-focus-within:opacity-100 transition-opacity"></i>
                                    <input type="text" placeholder="Full Name" class="w-full pl-11 pr-4 py-3.5 border rounded-2xl text-[13px] font-medium outline-none focus:ring-2 focus:ring-brand-accent/20 transition-all bg-white/5 dark:bg-black/5">
                                </div>
                                <div class="relative group">
                                    <i class="uil uil-building absolute left-4 top-1/2 -translate-y-1/2 text-brand-accent opacity-50 group-focus-within:opacity-100 transition-opacity"></i>
                                    <input type="text" placeholder="Organization Name" class="w-full pl-11 pr-4 py-3.5 border rounded-2xl text-[13px] font-medium outline-none focus:ring-2 focus:ring-brand-accent/20 transition-all bg-white/5 dark:bg-black/5">
                                </div>
                                <div class="relative group">
                                    <i class="uil uil-envelope absolute left-4 top-1/2 -translate-y-1/2 text-brand-accent opacity-50 group-focus-within:opacity-100 transition-opacity"></i>
                                    <input type="email" placeholder="Business Email" class="w-full pl-11 pr-4 py-3.5 border rounded-2xl text-[13px] font-medium outline-none focus:ring-2 focus:ring-brand-accent/20 transition-all bg-white/5 dark:bg-black/5">
                                </div>
                                <div class="relative group">
                                    <i class="uil uil-phone absolute left-4 top-1/2 -translate-y-1/2 text-brand-accent opacity-50 group-focus-within:opacity-100 transition-opacity"></i>
                                    <input type="tel" placeholder="Contact Number" class="w-full pl-11 pr-4 py-3.5 border rounded-2xl text-[13px] font-medium outline-none focus:ring-2 focus:ring-brand-accent/20 transition-all bg-white/5 dark:bg-black/5">
                                </div>
                                <div class="relative group">
                                    <i class="uil uil-layer-group absolute left-4 top-1/2 -translate-y-1/2 text-brand-accent opacity-50 group-focus-within:opacity-100 transition-opacity"></i>
                                    <select class="w-full pl-11 pr-4 py-3.5 border rounded-2xl text-[13px] font-medium appearance-none outline-none focus:ring-2 focus:ring-brand-accent/20 transition-all bg-white/5 dark:bg-black/5">
                                        <option value="">User Volume</option>
                                        <option value="1-10">1 - 10 Users</option>
                                        <option value="11-50">11 - 50 Users</option>
                                        <option value="51-200">51 - 200 Users</option>
                                        <option value="enterprise">200+ Enterprise</option>
                                    </select>
                                    <i class="uil uil-angle-down absolute right-4 top-1/2 -translate-y-1/2 opacity-50 pointer-events-none"></i>
                                </div>
                            </div>
                            <button type="submit" class="w-full py-4 mt-4 gradient-bg text-white font-black rounded-2xl uppercase tracking-[2px] text-[11px] shadow-xl hover:shadow-brand-accent/40 active:scale-95 transition-all flex items-center justify-center gap-3">
                                <span>Request Product Demo</span>
                                <i class="uil uil-arrow-right text-lg"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. PRODUCT FEATURES GRID -->
    <section id="features" class="py-24 theme-aware-hero border-y border-brand-dark/5 dark:border-white/5">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-20 reveal">
                <h2 class="text-3xl md:text-5xl font-heading font-black mb-6 tracking-tighter uppercase italic text-brand-accent">Engineered <span class="text-brand-dark dark:text-white">Efficiency</span></h2>
                <p class="text-[11px] opacity-60 uppercase tracking-[4px] font-black max-w-xl mx-auto">The Core Modules of the Smartous Infrastructure</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- F1 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group cursor-pointer hover:shadow-2xl hover:shadow-brand-accent/5">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform duration-500">
                        <i class="uil uil-heart-alt text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3 italic uppercase">Life Cycle Logic</h4>
                    <p class="text-[11px] opacity-60 leading-relaxed font-bold tracking-tight">Tracking every heartbeat of the customer journey from initial ping to repeat institutional loyalty.</p>
                </div>
                <!-- F2 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group cursor-pointer hover:shadow-2xl hover:shadow-brand-accent/5">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform duration-500">
                        <i class="uil uil-fast-mail text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3 italic uppercase">Automated Pings</h4>
                    <p class="text-[11px] opacity-60 leading-relaxed font-bold tracking-tight">High-fidelity email and SMS triggers that keep your brand in consistent resonance with your audience.</p>
                </div>
                <!-- F3 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group cursor-pointer hover:shadow-2xl hover:shadow-brand-accent/5">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform duration-500">
                        <i class="uil uil-graph-bar text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3 italic uppercase">Visual KPIs</h4>
                    <p class="text-[11px] opacity-60 leading-relaxed font-bold tracking-tight">A cinematic cockpit showing real-time revenue cycles, team performance, and data integrity metrics.</p>
                </div>
                <!-- F4 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group cursor-pointer hover:shadow-2xl hover:shadow-brand-accent/5">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform duration-500">
                        <i class="uil uil-shield-check text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3 italic uppercase">Security Vault</h4>
                    <p class="text-[11px] opacity-60 leading-relaxed font-bold tracking-tight">Institution-grade encryption for all customer intelligence, ensuring 100% data fidelity and privacy.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. STRATEGIC PILLARS -->
    <section class="py-24 theme-aware-hero overflow-hidden relative">
        <div class="absolute -left-20 bottom-10 w-[500px] h-[500px] bg-brand-accent/5 rounded-full blur-[120px]"></div>
        <div class="container mx-auto px-6 md:px-12 relative z-10">
            <div class="flex flex-col lg:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-2xl reveal">
                    <h2 class="text-4xl md:text-5xl font-heading font-black mb-6 leading-tight uppercase tracking-tighter text-brand-accent">Operational <br><span class="text-brand-dark dark:text-white italic">Fidelity.</span></h2>
                    <p class="text-base md:text-lg mb-8 opacity-60">We don't just provide software; we provide a high-performance operational framework for your entire firm.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-8 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500">
                        <i class="uil uil-mobile-vibrate text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4 italic uppercase">Always Mobile</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-bold tracking-wide">Cloud-synced ops that allow your field agents to capture intelligence the moment it happens.</p>
                </div>
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-8 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500">
                        <i class="uil uil-brackets-curly text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4 italic uppercase">API First</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-bold tracking-wide">Seamlessly pulse-in your existing tools with our robust integration points and zero-stuck connectors.</p>
                </div>
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] border border-white/10 hover:border-brand-accent/30 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-8 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500">
                        <i class="uil uil-bolt text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-black mb-4 italic uppercase">Latency Zero</h4>
                    <p class="text-xs opacity-60 leading-relaxed font-bold tracking-wide">Using edge-computing redirects to ensure the user never feels a delay between data input and report.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. TECHNICAL ARCHITECTURE -->
    <section class="py-24 theme-aware-hero overflow-hidden relative border-b border-brand-dark/5 dark:border-white/5">
        <div class="container mx-auto px-6 md:px-12 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="reveal">
                    <h2 class="text-4xl md:text-5xl font-heading font-black mb-8 italic uppercase text-brand-accent">Neural CRM <br/><span class="text-brand-dark dark:text-white">Architecture.</span></h2>
                    <div class="space-y-6">
                        <div class="flex gap-4 p-6 rounded-3xl glass-form border border-white/10 hover:border-brand-accent/30 transition-all group">
                            <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent shrink-0 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500"><i class="uil uil-brain text-2xl"></i></div>
                            <div>
                                <h4 class="text-lg font-black italic uppercase mb-1">Sentiment Mesh</h4>
                                <p class="text-xs opacity-60 font-bold leading-relaxed">Neural processing of client interactions to predict retention weights and upsell horizons.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 p-6 rounded-3xl glass-form border border-white/10 hover:border-brand-accent/30 transition-all group">
                            <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent shrink-0 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500"><i class="uil uil-chart-growth text-2xl"></i></div>
                            <div>
                                <h4 class="text-lg font-black italic uppercase mb-1">Conversion Flux Nodes</h4>
                                <p class="text-xs opacity-60 font-bold leading-relaxed">Multi-dimensional tracking of lead velocity through recursive sales stages.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reveal">
                    <div class="relative">
                        <div class="absolute -inset-4 bg-brand-accent/20 rounded-[40px] blur-2xl -z-10 animate-pulse"></div>
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80" alt="CRM Architecture" class="rounded-[40px] shadow-2xl border border-white/10 grayscale hover:grayscale-0 transition-all duration-700">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 4. FOOTER -->
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
