<?php $root = '../'; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opus Lead CRM | Sahasra Barath Conversion Engine</title>
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

    <!-- 1. OPUS LEAD HERO -->
    <section id="home" class="relative pt-6 pb-6 theme-aware-hero overflow-hidden">
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-brand-accent/3 rounded-full blur-[150px] -mr-96 -mt-96 transition-all duration-700"></div>

        <div class="container mx-auto px-6 md:px-12 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <div class="reveal">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-accent/10 text-brand-accent text-[10px] font-black uppercase tracking-[2px] mb-6 shadow-sm border border-brand-accent/20">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-accent animate-pulse"></span>
                        Prospect Intelligence
                    </div>
                    <h1 class="text-3xl md:text-5xl lg:text-7xl font-heading font-black mb-6 leading-[1.1] tracking-tighter italic uppercase">
                        Opus <br/>
                        <span class="gradient-text">Lead Sync.</span>
                    </h1>
                    <p class="text-base md:text-lg mb-8 max-w-xl leading-relaxed opacity-70">
                        Opus Lead Management is a high-fidelity capture engine designed to turn pings into partnerships. Track every source, score every signal, and automate every follow-up with institutional precision.
                    </p>

                    <div class="grid sm:grid-cols-2 gap-4 mb-10">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent"><i class="uil uil-capture"></i></div>
                            <span class="text-[11px] font-bold feature-label uppercase tracking-widest leading-none">Omnichannel Grid</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent"><i class="uil uil-filter"></i></div>
                            <span class="text-[11px] font-bold feature-label uppercase tracking-widest leading-none">Smart Scorer</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent"><i class="uil uil-message"></i></div>
                            <span class="text-[11px] font-bold feature-label uppercase tracking-widest leading-none">Trigger Logic</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-brand-accent/10 flex items-center justify-center text-brand-accent"><i class="uil uil-chart-pie"></i></div>
                            <span class="text-[11px] font-bold feature-label uppercase tracking-widest leading-none">ROI Cockpit</span>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 items-center">
                        <a href="#prospects" class="w-full sm:w-auto px-10 py-5 rounded-2xl border-2 border-brand-accent text-brand-accent font-black uppercase text-[10px] tracking-widest hover:bg-brand-accent hover:text-white transition-all shadow-lg active:scale-95">Prospect Discovery</a>
                    </div>
                </div>

                <div class="reveal">
                    <div class="glass-form p-6 md:p-8 rounded-[40px] shadow-2xl relative overflow-hidden border border-white/20">
                        <div class="absolute top-0 right-0 w-full h-1.5 gradient-bg opacity-80"></div>
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-12 h-12 rounded-2xl gradient-bg flex items-center justify-center text-white text-2xl shadow-lg ring-4 ring-brand-accent/20 transition-all hover:rotate-12">
                                <i class="uil uil-focus"></i>
                            </div>
                            <div>
                                <h2 class="text-2xl font-black tracking-tight leading-none uppercase italic text-brand-accent">Deploy Opus</h2>
                                <p class="text-[10px] opacity-60 mt-1.5 font-medium uppercase tracking-wider">Revenue Acceleration Tech</p>
                            </div>
                        </div>

                        <form action="#" class="space-y-4">
                            <div class="space-y-4">
                                <div class="relative group">
                                    <i class="uil uil-user absolute left-4 top-1/2 -translate-y-1/2 text-brand-accent opacity-50 group-focus-within:opacity-100 transition-opacity"></i>
                                    <input type="text" placeholder="Sales Executive" class="w-full pl-11 pr-4 py-3.5 border rounded-2xl text-[13px] font-medium outline-none focus:ring-2 focus:ring-brand-accent/20 transition-all bg-white/5 dark:bg-black/5">
                                </div>
                                <div class="relative group">
                                    <i class="uil uil-envelope absolute left-4 top-1/2 -translate-y-1/2 text-brand-accent opacity-50 group-focus-within:opacity-100 transition-opacity"></i>
                                    <input type="email" placeholder="Work Email" class="w-full pl-11 pr-4 py-3.5 border rounded-2xl text-[13px] font-medium outline-none focus:ring-2 focus:ring-brand-accent/20 transition-all bg-white/5 dark:bg-black/5">
                                </div>
                                <div class="relative group">
                                    <i class="uil uil-analytics absolute left-4 top-1/2 -translate-y-1/2 text-brand-accent opacity-50 group-focus-within:opacity-100 transition-opacity"></i>
                                    <select class="w-full pl-11 pr-4 py-3.5 border rounded-2xl text-[13px] font-medium appearance-none outline-none focus:ring-2 focus:ring-brand-accent/20 transition-all bg-white/5 dark:bg-black/5">
                                        <option value="">Lead Source Type</option>
                                        <option value="digital">Digital Ads / SEO</option>
                                        <option value="field">Field Ops / Events</option>
                                        <option value="referral">Referral / Institutional</option>
                                        <option value="mixed">Mixed Ecosystem</option>
                                    </select>
                                    <i class="uil uil-angle-down absolute right-4 top-1/2 -translate-y-1/2 opacity-50 pointer-events-none"></i>
                                </div>
                            </div>
                            <button type="submit" class="w-full py-4 mt-4 gradient-bg text-white font-black rounded-2xl uppercase tracking-[2px] text-[11px] shadow-xl hover:shadow-brand-accent/40 active:scale-95 transition-all flex items-center justify-center gap-3">
                                <span>Activate Capture Node</span>
                                <i class="uil uil-arrow-right text-lg"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. CAPTURE GRID -->
    <section id="prospects" class="py-24 theme-aware-hero border-y border-brand-dark/5 dark:border-white/5">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-20 reveal">
                <h2 class="text-3xl md:text-5xl font-heading font-black mb-6 tracking-tighter uppercase italic gradient-text">Prospect <span class="text-brand-dark dark:text-white">Resonance</span></h2>
                <p class="text-[10px] opacity-60 uppercase tracking-[4px] font-black max-w-xl mx-auto italic leading-relaxed">Closing the gap between interest and transaction through high-fidelity data nodes</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- O1 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group cursor-pointer">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform duration-500">
                        <i class="uil uil-arrow-growth text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3 lowercase font-heading underline decoration-brand-accent/30 decoration-4 underline-offset-4">Fidelity Flow</h4>
                    <p class="text-[11px] opacity-60 leading-relaxed font-bold italic">Visualizing the lead pipeline as a high-performance river of revenue potential.</p>
                </div>
                <!-- O2 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group cursor-pointer">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform duration-500">
                        <i class="uil uil-comment-dots text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3 lowercase font-heading underline decoration-brand-accent/30 decoration-4 underline-offset-4">Auto Pulse</h4>
                    <p class="text-[11px] opacity-60 leading-relaxed font-bold italic">Automatic SMS and email cascades that keep the prospect engaged with zero manual friction.</p>
                </div>
                <!-- O3 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group cursor-pointer">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform duration-500">
                        <i class="uil uil-sitemap text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3 lowercase font-heading underline decoration-brand-accent/30 decoration-4 underline-offset-4">Chain Logic</h4>
                    <p class="text-[11px] opacity-60 leading-relaxed font-bold italic">Mapping relationships between decision-makers to identify the critical path to closing.</p>
                </div>
                <!-- O4 -->
                <div class="reveal glass-form sahasra-feature-card p-10 rounded-[40px] hover:border-brand-accent transition-all group cursor-pointer">
                    <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent mb-6 group-hover:scale-110 transition-transform duration-500">
                        <i class="uil uil-chart-bar text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-black mb-3 lowercase font-heading underline decoration-brand-accent/30 decoration-4 underline-offset-4">Zero Dark Data</h4>
                    <p class="text-[11px] opacity-60 leading-relaxed font-bold italic">Eliminating blind spots in your sales ops with high-fidelity attribution tracking.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. TECHNICAL ARCHITECTURE -->
    <section class="py-24 theme-aware-hero overflow-hidden relative border-b border-brand-dark/5 dark:border-white/5">
        <div class="container mx-auto px-6 md:px-12 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="reveal">
                    <h2 class="text-4xl md:text-5xl font-heading font-black mb-8 italic uppercase text-brand-accent">Lead Velocity <br/><span class="text-brand-dark dark:text-white">Architecture.</span></h2>
                    <div class="space-y-6">
                        <div class="flex gap-4 p-6 rounded-3xl glass-form border border-white/10 hover:border-brand-accent/30 transition-all group">
                            <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent shrink-0 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500"><i class="uil uil-bolt text-2xl"></i></div>
                            <div>
                                <h4 class="text-lg font-black italic uppercase mb-1">Response Acceleration</h4>
                                <p class="text-xs opacity-60 font-bold leading-relaxed">Sub-second lead distribution to the highest-scoring available node, maximizing conversion weights.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 p-6 rounded-3xl glass-form border border-white/10 hover:border-brand-accent/30 transition-all group">
                            <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center text-brand-accent shrink-0 group-hover:bg-brand-accent group-hover:text-white transition-all duration-500"><i class="uil uil-phone-volume text-2xl"></i></div>
                            <div>
                                <h4 class="text-lg font-black italic uppercase mb-1">Unified Dialer Sync</h4>
                                <p class="text-xs opacity-60 font-bold leading-relaxed">Direct telemetry integration with global VoIP clusters for high-fidelity communication logs.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reveal">
                    <div class="relative">
                        <div class="absolute -inset-4 bg-brand-accent/20 rounded-[40px] blur-2xl -z-10 animate-pulse"></div>
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80" alt="Lead Architecture" class="rounded-[40px] shadow-2xl border border-white/10 grayscale hover:grayscale-0 transition-all duration-700">
                    </div>
                </div>
            </div>
        </div>
    </section>


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
