<?php $root = './'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institutional Portfolio | Sahasra Barath</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-white dark:bg-brand-dark text-brand-dark dark:text-white font-sans transition-colors duration-500">

    <?php include 'includes/nav.php'; ?>

    <!-- 1. CINEMATIC HERO SECTION (Minimalist) -->
    <section class="relative pt-32 pb-20 overflow-hidden bg-brand-dark">
        <!-- Background Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1920&q=80" alt="Team Working" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-brand-dark/80 backdrop-blur-[2px]"></div>
        </div>
        
        <div class="container mx-auto px-6 md:px-12 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-heading font-black text-white mb-6 uppercase italic tracking-tight reveal">Our Portfolio</h1>
            <div class="flex justify-center reveal">
                <nav class="bg-brand-accent px-6 py-2 rounded-full flex items-center gap-2 text-white text-[10px] font-bold shadow-2xl">
                    <a href="index.php" class="hover:underline">Home</a>
                    <i class="uil uil-angle-right-b"></i>
                    <span class="opacity-80 italic uppercase">Works</span>
                </nav>
            </div>
        </div>
    </section>

    <!-- 2. CATEGORY-BASED PORTFOLIO GRID (Small & Minimalist) -->
    <section class="py-20 bg-gray-50/10 dark:bg-transparent">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Card 01: Website Portfolio -->
                <div class="reveal group">
                    <div class="bg-white dark:bg-slate-900 rounded-[30px] overflow-hidden shadow-[0_10px_30px_-10px_rgba(0,0,0,0.1)] hover:shadow-xl transition-all duration-500 border border-gray-100 dark:border-white/5 relative h-full flex flex-col">
                        <!-- Top Image -->
                        <div class="h-48 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80" alt="Website Portfolio" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        
                        <!-- Small Overlap Icon -->
                        <div class="absolute top-[168px] left-8 w-12 h-12 bg-gradient-to-br from-brand-accent to-brand-accent-end rounded-xl flex items-center justify-center text-white text-xl shadow-lg shadow-brand-accent/20 z-20 group-hover:-rotate-6 transition-all duration-500">
                            <i class="uil uil-window"></i>
                        </div>

                        <!-- Content -->
                        <div class="p-8 pt-12 relative flex-1 flex flex-col">
                            <!-- Background Number -->
                            <span class="absolute top-6 right-8 text-6xl font-black text-gray-200/20 dark:text-white-[0.03] leading-none pointer-events-none italic">01</span>
                            
                            <div class="relative z-10">
                                <h3 class="text-lg font-black mb-3 font-heading text-gray-900 dark:text-white group-hover:text-brand-accent transition-colors uppercase italic tracking-tight">Website Works</h3>
                                <p class="text-gray-500 dark:text-gray-400 text-[11px] leading-relaxed mb-8 font-medium opacity-80">Showcasing Excellence in Design and Innovation.</p>
                                
                                <a href="#" class="inline-flex items-center justify-center gap-2 w-fit px-6 py-3 bg-brand-accent rounded-full text-white text-[9px] font-black uppercase tracking-widest italic shadow-lg shadow-brand-accent/10 hover:scale-105 transition-all">
                                    Exploration <i class="uil uil-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 02: Logo Portfolio -->
                <div class="reveal group" style="transition-delay: 100ms;">
                    <div class="bg-white dark:bg-slate-900 rounded-[30px] overflow-hidden shadow-[0_10px_30px_-10px_rgba(0,0,0,0.1)] hover:shadow-xl transition-all duration-500 border border-gray-100 dark:border-white/5 relative h-full flex flex-col">
                        <!-- Top Image -->
                        <div class="h-48 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1549490349-8643362247b5?auto=format&fit=crop&w=800&q=80" alt="Logo Design" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        
                        <!-- Small Overlap Icon -->
                        <div class="absolute top-[168px] left-8 w-12 h-12 bg-gradient-to-br from-brand-accent to-brand-accent-end rounded-xl flex items-center justify-center text-white text-xl shadow-lg shadow-brand-accent/20 z-20 group-hover:-rotate-6 transition-all duration-500">
                            <i class="uil uil-vector-square"></i>
                        </div>

                        <!-- Content -->
                        <div class="p-8 pt-12 relative flex-1 flex flex-col">
                            <!-- Background Number -->
                            <span class="absolute top-6 right-8 text-6xl font-black text-gray-200/20 dark:text-white-[0.03] leading-none pointer-events-none italic">02</span>
                            
                            <div class="relative z-10">
                                <h3 class="text-lg font-black mb-3 font-heading text-gray-900 dark:text-white group-hover:text-brand-accent transition-colors uppercase italic tracking-tight">Identity Node</h3>
                                <p class="text-gray-500 dark:text-gray-400 text-[11px] leading-relaxed mb-8 font-medium opacity-80">Crafting Unique Logos for Your Brand Identity.</p>
                                
                                <a href="#" class="inline-flex items-center justify-center gap-2 w-fit px-6 py-3 bg-brand-accent rounded-full text-white text-[9px] font-black uppercase tracking-widest italic shadow-lg shadow-brand-accent/10 hover:scale-105 transition-all">
                                    Exploration <i class="uil uil-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 03: Brochure Portfolio -->
                <div class="reveal group" style="transition-delay: 200ms;">
                    <div class="bg-white dark:bg-slate-900 rounded-[30px] overflow-hidden shadow-[0_10px_30px_-10px_rgba(0,0,0,0.1)] hover:shadow-xl transition-all duration-500 border border-gray-100 dark:border-white/5 relative h-full flex flex-col">
                        <!-- Top Image -->
                        <div class="h-48 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?auto=format&fit=crop&w=800&q=80" alt="Brochure Design" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        
                        <!-- Small Overlap Icon -->
                        <div class="absolute top-[168px] left-8 w-12 h-12 bg-gradient-to-br from-brand-accent to-brand-accent-end rounded-xl flex items-center justify-center text-white text-xl shadow-lg shadow-brand-accent/20 z-20 group-hover:-rotate-6 transition-all duration-500">
                            <i class="uil uil-books"></i>
                        </div>

                        <!-- Content -->
                        <div class="p-8 pt-12 relative flex-1 flex flex-col">
                            <!-- Background Number -->
                            <span class="absolute top-6 right-8 text-6xl font-black text-gray-200/20 dark:text-white-[0.03] leading-none pointer-events-none italic">03</span>
                            
                            <div class="relative z-10">
                                <h3 class="text-lg font-black mb-3 font-heading text-gray-900 dark:text-white group-hover:text-brand-accent transition-colors uppercase italic tracking-tight">Print Assets</h3>
                                <p class="text-gray-500 dark:text-gray-400 text-[11px] leading-relaxed mb-8 font-medium opacity-80">Showcasing Our Expertise Innovative Designs, Exceptional Quality.</p>
                                
                                <a href="#" class="inline-flex items-center justify-center gap-2 w-fit px-6 py-3 bg-brand-accent rounded-full text-white text-[9px] font-black uppercase tracking-widest italic shadow-lg shadow-brand-accent/10 hover:scale-105 transition-all">
                                    Exploration <i class="uil uil-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
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
            gsap.fromTo(elem, { opacity: 0, y: 30 }, {
                scrollTrigger: { trigger: elem, start: 'top 90%' },
                opacity: 1, y: 0, duration: 0.8, ease: 'power3.out'
            });
        });
    </script>

</body>
</html>
