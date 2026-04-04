<?php $root = './'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Sahasra | Global Partnership Node</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-white dark:bg-brand-dark text-brand-dark dark:text-white font-sans transition-colors duration-500">

    <?php include 'includes/nav.php'; ?>

    <!-- 1. HERO SECTION -->
    <section class="relative pt-24 pb-16 overflow-hidden theme-aware-hero">
        <div class="absolute top-0 right-0 w-1/4 h-full gradient-bg opacity-5 skew-x-12 translate-x-1/2"></div>
        <div class="container mx-auto px-6 md:px-12 relative z-10 text-center">
            <div class="max-w-3xl mx-auto reveal">
                <span class="inline-block px-3 py-1 rounded-full bg-brand-accent/10 text-brand-accent text-[8px] font-black uppercase tracking-[3px] mb-4 italic">Global Connectivity Node</span>
                <h1 class="text-4xl md:text-6xl font-heading font-black mb-6 italic uppercase leading-none">Initialize <br/><span class="text-brand-accent">Contact.</span></h1>
                <p class="text-sm md:text-base opacity-70 font-bold leading-relaxed mb-10 italic max-w-2xl mx-auto">
                    Secure communication lines for institutional partnerships, technical telemetry queries, and global commerce initiatives.
                </p>
            </div>
        </div>
    </section>

    <!-- 2. MULTI-NODE CONTACT GRID -->
    <section class="py-16">
        <div class="container mx-auto px-6 md:px-12 grid lg:grid-cols-2 gap-12">
            <!-- Form Side -->
            <div class="reveal glass-form p-8 md:p-10 rounded-[40px] border border-gray-100 dark:border-white/10 relative overflow-hidden backdrop-blur-2xl bg-white/50 dark:bg-brand-dark/50">
                <h2 class="text-2xl md:text-3xl font-heading font-black mb-10 italic uppercase text-brand-accent">Partnership <span class="text-brand-dark dark:text-white">Form</span></h2>
                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase tracking-widest text-gray-600 dark:text-gray-400 ml-2">Node Principal</label>
                            <input type="text" placeholder="Full Name" class="w-full py-4 px-6 rounded-xl bg-gray-100/50 dark:bg-white/5 border border-gray-300/50 dark:border-white/20 outline-none text-brand-dark dark:text-white text-sm font-bold placeholder:text-gray-500 focus:border-brand-accent transition-colors shadow-sm">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase tracking-widest text-gray-600 dark:text-gray-400 ml-2">Digital Signature (Email)</label>
                            <input type="email" placeholder="professional@node.com" class="w-full py-4 px-6 rounded-xl bg-gray-100/50 dark:bg-white/5 border border-gray-300/50 dark:border-white/20 outline-none text-brand-dark dark:text-white text-sm font-bold placeholder:text-gray-500 focus:border-brand-accent transition-colors shadow-sm">
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="text-[10px] font-black uppercase tracking-widest text-gray-600 dark:text-gray-400 ml-2">Institutional Sector</label>
                        <select class="w-full py-4 px-6 rounded-xl bg-gray-100/50 dark:bg-white/5 border border-gray-300/50 dark:border-white/20 outline-none text-brand-dark dark:text-white text-sm font-bold focus:border-brand-accent transition-colors appearance-none shadow-sm">
                            <option>Enterprise Software Services</option>
                            <option>Fintech Infrastructure</option>
                            <option>Edutech Deployment</option>
                            <option>Digital Marketing Node</option>
                        </select>
                    </div>
                    <div class="space-y-2">
                        <label class="text-[10px] font-black uppercase tracking-widest text-gray-600 dark:text-gray-400 ml-2">Objective Detail</label>
                        <textarea rows="4" placeholder="Brief partnership overview..." class="w-full py-4 px-6 rounded-xl bg-gray-100/50 dark:bg-white/5 border border-gray-300/50 dark:border-white/20 outline-none text-brand-dark dark:text-white text-sm font-bold placeholder:text-gray-500 focus:border-brand-accent transition-colors resize-none shadow-sm"></textarea>
                    </div>
                    <button class="w-full py-5 rounded-2xl gradient-bg text-white font-black uppercase text-[10px] tracking-widest shadow-2xl hover:scale-105 transition-transform flex items-center justify-center gap-3 mt-4">
                        Initialize Connection Node <i class="uil uil-bolt"></i>
                    </button>
                    <p class="text-[8px] opacity-30 text-center uppercase tracking-widest mt-6 italic font-black">Encrypted via 256-bit Institutional RSA Node</p>
                </form>
            </div>

            <!-- Info Side -->
            <div class="space-y-8">
                <!-- Info Node 1 -->
                <div class="reveal glass-form p-8 rounded-[35px] border border-gray-100 dark:border-white/10 group hover:border-brand-accent/30 transition-all flex items-start gap-6 relative overflow-hidden bg-white/50 dark:bg-white/5">
                    <div class="absolute -top-10 -right-10 w-24 h-24 bg-brand-accent/10 rounded-full blur-2xl opacity-50 group-hover:bg-brand-accent/20 transition-all"></div>
                    <div class="w-14 h-14 rounded-2xl gradient-bg flex items-center justify-center text-white text-3xl shadow-xl flex-shrink-0">
                        <i class="uil uil-map-marker"></i>
                    </div>
                    <div>
                        <span class="text-[8px] font-black text-brand-accent uppercase tracking-[4px] mb-2 block italic">Global Headquarters</span>
                        <h4 class="text-xl font-heading font-black italic uppercase mb-2">Digital Sector One</h4>
                        <p class="text-sm opacity-60 font-bold leading-relaxed italic">Nexus Plaza, Level 42, Floor Zero,<br/>Institutional District, Global commerce Hub</p>
                    </div>
                </div>

                <!-- Info Node 2 -->
                <div class="reveal glass-form p-8 rounded-[35px] border border-gray-100 dark:border-white/10 group hover:border-brand-accent/30 transition-all flex items-start gap-6 relative overflow-hidden bg-white/50 dark:bg-white/5">
                    <div class="w-14 h-14 rounded-2xl bg-white/5 border border-gray-200 dark:border-white/10 flex items-center justify-center text-brand-accent text-3xl shadow-xl flex-shrink-0">
                        <i class="uil uil-calling"></i>
                    </div>
                    <div>
                        <span class="text-[8px] font-black text-brand-accent uppercase tracking-[4px] mb-2 block italic">Primary Feed</span>
                        <h4 class="text-xl font-heading font-black italic uppercase mb-2">Institutional Lines</h4>
                        <p class="text-sm opacity-60 font-bold leading-relaxed italic">+91 000 000 0000 (Mainframe)<br/>operations@sahasra.io</p>
                    </div>
                </div>

                <!-- Info Node 3 (Social) -->
                <div class="reveal glass-form p-8 rounded-[35px] border border-gray-100 dark:border-white/10 group hover:border-brand-accent/30 transition-all flex items-center justify-between gap-6 relative overflow-hidden bg-white/50 dark:bg-white/5">
                    <div class="flex items-center gap-6">
                        <div class="w-12 h-12 rounded-xl bg-gray-50 dark:bg-white/10 border border-gray-200 dark:border-white/10 flex items-center justify-center text-gray-400 dark:text-white/50 text-xl hover:text-brand-accent hover:bg-brand-accent/10 transition-all cursor-pointer">
                            <i class="uil uil-linkedin"></i>
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-gray-50 dark:bg-white/10 border border-gray-200 dark:border-white/10 flex items-center justify-center text-gray-400 dark:text-white/50 text-xl hover:text-brand-accent hover:bg-brand-accent/10 transition-all cursor-pointer">
                            <i class="uil uil-twitter"></i>
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-gray-50 dark:bg-white/10 border border-gray-200 dark:border-white/10 flex items-center justify-center text-gray-400 dark:text-white/50 text-xl hover:text-brand-accent hover:bg-brand-accent/10 transition-all cursor-pointer">
                            <i class="uil uil-instagram"></i>
                        </div>
                    </div>
                    <div class="px-3 py-1 rounded-full bg-brand-accent/10 text-brand-accent text-[8px] font-black uppercase tracking-widest border border-brand-accent/20">Live Nodes</div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script>
        gsap.registerPlugin(ScrollTrigger);
        gsap.utils.toArray('.reveal').forEach(elem => {
            gsap.fromTo(elem, { opacity: 0, y: 50 }, {
                scrollTrigger: { trigger: elem, start: 'top 85%' },
                opacity: 1, y: 0, duration: 1, ease: 'power4.out'
            });
        });
    </script>
</body>
</html>
