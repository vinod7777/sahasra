<?php $root = './'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Sahasra Barath Hub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .blog-hero {
            background: linear-gradient(rgba(10, 25, 47, 0.8), rgba(10, 25, 47, 0.8)), url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-white dark:bg-brand-dark text-brand-dark dark:text-white font-sans transition-colors duration-500">

    <?php include 'includes/nav.php'; ?>

    <!-- 1. HERO SECTION (Minimalist) -->
    <section class="blog-hero relative pt-32 pb-24 flex flex-col items-center justify-center text-center">
        <div class="container mx-auto px-6 relative z-10 reveal">
            <h1 class="text-4xl md:text-5xl font-black text-white mb-6 uppercase tracking-tight italic">Journal</h1>
            <div class="inline-flex items-center gap-3 px-6 py-2 bg-white/10 backdrop-blur-md border border-white/10 rounded-full text-white text-[9px] font-bold shadow-2xl">
                <a href="index.php" class="hover:underline">Home</a>
                <i class="uil uil-angle-right-b"></i>
                <span class="italic uppercase tracking-widest opacity-70">Insights</span>
            </div>
        </div>
    </section>

    <!-- 2. ARTICLE GRID (Minimalist & Compact) -->
    <section class="py-20 bg-gray-50/10 dark:bg-transparent">
        <div class="max-w-[1100px] mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Blog Card 01 -->
                <div class="reveal group">
                    <div class="bg-white dark:bg-slate-900 rounded-[30px] overflow-hidden shadow-[0_10px_30px_-10px_rgba(0,0,0,0.1)] hover:shadow-xl transition-all duration-500 border border-gray-100 dark:border-white/5 relative h-full flex flex-col">
                        <!-- Top Image (More compact) -->
                        <div class="h-48 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80" alt="Google Ads" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        
                        <!-- Small Minimalist Icon -->
                        <div class="absolute top-[168px] left-8 w-12 h-12 bg-gradient-to-br from-brand-accent to-brand-accent-end rounded-xl flex items-center justify-center text-white text-xl shadow-lg shadow-brand-accent/20 z-20 transition-all duration-500">
                            <i class="uil uil-chart-growth"></i>
                        </div>

                        <!-- Content (Reduced Padding) -->
                        <div class="p-8 pt-12 relative flex-1 flex flex-col">
                            <!-- Background Number (Smaller & More Subtle) -->
                            <span class="absolute top-6 right-8 text-6xl font-black text-gray-200/20 dark:text-white-[0.03] leading-none pointer-events-none italic">01</span>
                            
                            <div class="relative z-10">
                                <h3 class="text-lg font-black mb-3 font-heading text-gray-900 dark:text-white group-hover:text-brand-accent transition-colors uppercase italic tracking-tight leading-tight">
                                    Google Ads Evaluates Keyword
                                </h3>
                                <p class="text-gray-500 dark:text-gray-400 text-[11px] leading-relaxed mb-8 font-medium opacity-80">Deep dive into semantic clustering and real-time CPC telemetry for institutional scale.</p>
                                
                                <!-- Compact Footer -->
                                <div class="mt-auto pt-6 border-t border-gray-50 dark:border-white/5 flex items-center gap-4 text-[9px] font-bold uppercase tracking-widest opacity-40 italic">
                                    <div class="flex items-center gap-2">
                                        <i class="uil uil-user-circle text-sm"></i>
                                        <span>Editor</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="uil uil-calendar-alt text-sm"></i>
                                        <span>Apr 03</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Card 02 -->
                <div class="reveal group" style="transition-delay: 100ms;">
                    <div class="bg-white dark:bg-slate-900 rounded-[30px] overflow-hidden shadow-[0_10px_30px_-10px_rgba(0,0,0,0.1)] hover:shadow-xl transition-all duration-500 border border-gray-100 dark:border-white/5 relative h-full flex flex-col">
                        <!-- Top Image -->
                        <div class="h-48 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&w=800&q=80" alt="AI Web Designing" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        
                        <!-- Small Minimalist Icon -->
                        <div class="absolute top-[168px] left-8 w-12 h-12 bg-gradient-to-br from-brand-accent to-brand-accent-end rounded-xl flex items-center justify-center text-white text-xl shadow-lg shadow-brand-accent/20 z-20 transition-all duration-500">
                            <i class="uil uil-robot"></i>
                        </div>

                        <!-- Content -->
                        <div class="p-8 pt-12 relative flex-1 flex flex-col">
                            <span class="absolute top-6 right-8 text-6xl font-black text-gray-200/20 dark:text-white-[0.03] leading-none pointer-events-none italic">02</span>
                            
                            <div class="relative z-10">
                                <h3 class="text-lg font-black mb-3 font-heading text-gray-900 dark:text-white group-hover:text-brand-accent transition-colors uppercase italic tracking-tight leading-tight">
                                    Achieve with AI Web Designing
                                </h3>
                                <p class="text-gray-500 dark:text-gray-400 text-[11px] leading-relaxed mb-8 font-medium opacity-80">Bespoke neural interface modeling and the death of traditional layout staticism.</p>
                                
                                <div class="mt-auto pt-6 border-t border-gray-50 dark:border-white/5 flex items-center gap-4 text-[9px] font-bold uppercase tracking-widest opacity-40 italic">
                                    <div class="flex items-center gap-2">
                                        <i class="uil uil-user-circle text-sm"></i>
                                        <span>Editor</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="uil uil-calendar-alt text-sm"></i>
                                        <span>Apr 02</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Card 03 -->
                <div class="reveal group" style="transition-delay: 200ms;">
                    <div class="bg-white dark:bg-slate-900 rounded-[30px] overflow-hidden shadow-[0_10px_30px_-10px_rgba(0,0,0,0.1)] hover:shadow-xl transition-all duration-500 border border-gray-100 dark:border-white/5 relative h-full flex flex-col">
                        <!-- Top Image -->
                        <div class="h-48 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1549490349-8643362247b5?auto=format&fit=crop&w=800&q=80" alt="SEO Ranking" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        
                        <!-- Small Minimalist Icon -->
                        <div class="absolute top-[168px] left-8 w-12 h-12 bg-gradient-to-br from-brand-accent to-brand-accent-end rounded-xl flex items-center justify-center text-white text-xl shadow-lg shadow-brand-accent/20 z-20 transition-all duration-500">
                            <i class="uil uil-search-alt"></i>
                        </div>

                        <!-- Content -->
                        <div class="p-8 pt-12 relative flex-1 flex flex-col">
                            <span class="absolute top-6 right-8 text-6xl font-black text-gray-200/20 dark:text-white-[0.03] leading-none pointer-events-none italic">03</span>
                            
                            <div class="relative z-10">
                                <h3 class="text-lg font-black mb-3 font-heading text-gray-900 dark:text-white group-hover:text-brand-accent transition-colors uppercase italic tracking-tight leading-tight">
                                    Why Google Crawls but Doesn't Rank
                                </h3>
                                <p class="text-gray-500 dark:text-gray-400 text-[11px] leading-relaxed mb-8 font-medium opacity-80">Analyzing indexation bottlenecks and the core web vitals threshold for new data nodes.</p>
                                
                                <div class="mt-auto pt-6 border-t border-gray-50 dark:border-white/5 flex items-center gap-4 text-[9px] font-bold uppercase tracking-widest opacity-40 italic">
                                    <div class="flex items-center gap-2">
                                        <i class="uil uil-user-circle text-sm"></i>
                                        <span>Editor</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="uil uil-calendar-alt text-sm"></i>
                                        <span>Mar 13</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. NEWSLETTER (Minimalist) -->
    <section class="py-20 bg-gray-50 dark:bg-white/5">
        <div class="container mx-auto px-6 flex flex-col items-center text-center max-w-2xl">
            <div class="reveal">
                <span class="inline-block px-3 py-1 rounded-full bg-brand-accent/10 text-brand-accent text-[7px] font-black uppercase tracking-[2px] mb-4 italic">Neural Feed</span>
                <h2 class="text-3xl font-black mb-4 uppercase italic tracking-tight">Stay <span class="text-brand-accent">Updated.</span></h2>
                <p class="text-[10px] opacity-60 mb-8 font-bold italic max-w-md mx-auto">Direct telemetry of institutional research and digital trends delivered to your professional node.</p>
                <form class="flex flex-col md:flex-row gap-3 w-full bg-white dark:bg-slate-900 p-1.5 rounded-2xl shadow-xl border border-gray-100 dark:border-white/5">
                    <input type="email" placeholder="Professional Email" class="flex-1 py-3 px-6 rounded-xl bg-transparent outline-none text-brand-dark dark:text-white text-xs font-bold placeholder:text-gray-400">
                    <button class="py-3 px-8 rounded-xl bg-brand-accent text-white font-black uppercase text-[9px] tracking-widest shadow-xl hover:scale-105 transition-transform italic">Subscribe</button>
                </form>
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
