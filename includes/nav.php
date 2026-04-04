<?php $root = $root ?? './'; ?>
<script>
  // Sync Tailwind with our custom theme toggle system
  tailwind.config = {
    darkMode: ['class', '.dark-theme'],
    theme: {
      extend: {
        colors: {
          'brand-dark': '#0f172a',
          'brand-accent': 'var(--brand-accent, #2563EB)',
          'brand-accent-end': 'var(--brand-accent-end, #00D4FF)',
        }
      }
    }
  }
</script>
<?php include_once __DIR__ . '/theme-toggle.php'; ?>

   <!-- RIGHT FLOATING CTA -->
    <a href="<?php echo $root; ?>index.php#contact" class="fixed right-0 top-1/2 -translate-y-1/2 z-[1002] btn-7-vertical flex flex-col items-center group" style="writing-mode: vertical-rl; text-orientation: mixed;">
        <span class="flex items-center justify-center font-bold tracking-widest text-[11px] uppercase">
             Book Appointment 
             <i class="uil uil-calendar-alt text-lg md:text-xl mb-4" style="text-orientation: upright;"></i>
        </span>
    </a>

<!-- 1. NAVBAR WITH TOP BAR (TOP BAR NOT STICKY) -->
    <div class="w-full text-white text-sm relative z-[1001] gradient-bg top-bar-custom">
        <div class="container mx-auto px-6 md:px-12 flex justify-between items-center py-1.5">
            <div class="flex gap-6 items-center">
                <a href="mailto:info@sahasra.com" class="flex items-center gap-2 hover:opacity-80"><i class="uil uil-envelope text-lg"></i> info@sahasra.com</a>
                <a href="tel:+918885526751" class="flex items-center gap-2 hover:opacity-80"><i class="uil uil-phone text-lg"></i> </a>
            </div>
            <div class="flex gap-4 items-center text-lg">
                <a href="#" class="hover:opacity-80"><i class="uil uil-facebook-f"></i></a>
                <a href="#" class="hover:opacity-80"><i class="uil uil-twitter"></i></a>
                <a href="#" class="hover:opacity-80"><i class="uil uil-instagram"></i></a>
                <a href="#" class="hover:opacity-80"><i class="uil uil-linkedin"></i></a>
            </div>
        </div>
    </div>

    <header class="sticky top-0 w-full z-[1000] transition-all duration-300 shadow-sm bg-white/95 dark:bg-slate-900/95 backdrop-blur-md border-b border-gray-100 dark:border-white/5" 
            x-data="{ mobileMenuOpen: false, mobileServicesOpen: false, mobileProductsOpen: false, scrolled: false }" 
            @scroll.window="scrolled = (window.pageYOffset > 50)"
            :class="{'shadow-lg': scrolled}">
        <!-- Main Nav -->
        <div class="container mx-auto px-6 md:px-12 flex justify-between items-center py-4 relative">
            <a href="<?php echo $root; ?>index.php" class="flex items-center gap-2 group">
                <div class="logo-box-main gradient-bg w-10 h-10 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg group-hover:scale-110 transition-transform duration-300">S</div>
                <span class="font-heading font-bold text-2xl tracking-tight text-brand-dark dark:text-white transition-colors duration-300">Sahasra Barath<span class="text-brand-accent">.</span></span>
            </a>
 
            <!-- Desktop Menu -->
            <nav class="hidden lg:flex items-center gap-8 font-semibold text-sm h-full text-brand-dark dark:text-gray-300 transition-colors duration-300">
                <a href="<?php echo $root; ?>index.php#home" class="hover:text-brand-accent dark:hover:text-brand-accent transition-colors">Home</a>
                <a href="<?php echo $root; ?>index.php#about" class="hover:text-brand-accent dark:hover:text-brand-accent transition-colors">About Us</a>
                
                <!-- Services Mega Menu (Desktop) -->
                <div class="group h-full py-4 cursor-pointer">
                    <span class="group-hover:text-brand-accent transition-colors">Services +</span>
                    <div class="absolute top-full left-0 w-full bg-white dark:bg-slate-900 shadow-2xl border-t-2 border-brand-accent opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 p-10 grid grid-cols-5 gap-8 -mt-2 z-[70] dark:text-gray-300">
                        <!-- Column 1: Infrastructure -->
                        <div class="space-y-6">
                            <a href="<?php echo $root; ?>services/domain.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 dark:text-gray-100 group-hover/item:text-brand-accent transition-colors">Domain</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Website Identifier</p>
                            </a>
                            <a href="<?php echo $root; ?>services/hosting.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Hosting</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Server Storage</p>
                            </a>
                            <a href="<?php echo $root; ?>services/emails.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Emails</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Electronic Mail</p>
                            </a>
                            <a href="<?php echo $root; ?>services/business-emails.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Business E-Mails</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Professional Correspondence</p>
                            </a>
                            <a href="<?php echo $root; ?>services/google-suite.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Google Suite</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Cloud Productivity</p>
                            </a>
                             <a href="<?php echo $root; ?>services/open-xchange.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Open XChange</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Collaborative Email</p>
                            </a>
                        </div>

                        <!-- Column 2: Development & Design -->
                        <div class="space-y-6 border-l border-gray-100 pl-8">
                             <a href="<?php echo $root; ?>services/website-design.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Website Design</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Digital Aesthetics</p>
                            </a>
                            <a href="<?php echo $root; ?>services/web-development.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Web Development</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Website Creation</p>
                            </a>
                            <a href="<?php echo $root; ?>services/mobile-applications.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Mobile Applications</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Software Programs</p>
                            </a>
                            <a href="<?php echo $root; ?>services/graphic-design.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Graphic Design</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Visual Communication</p>
                            </a>
                            <a href="<?php echo $root; ?>services/video-editing.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Video Editing</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Media Manipulation</p>
                            </a>
                        </div>

                        <!-- Column 3: Marketing & SEO -->
                        <div class="space-y-6 border-l border-gray-100 pl-8">
                            <a href="<?php echo $root; ?>services/digital-marketing.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Digital Marketing</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Online Promotion</p>
                            </a>
                            <a href="<?php echo $root; ?>services/seo.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">SEO</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Search Optimization</p>
                            </a>
                            <a href="<?php echo $root; ?>services/smo.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">SMO</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Social Media optimization</p>
                            </a>
                            <a href="<?php echo $root; ?>services/paid-service.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Paid Service</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Fee-Based Assistance</p>
                            </a>
                            <a href="<?php echo $root; ?>services/digital-pr.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Digital PR</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Online Reputation</p>
                            </a>
                            <a href="<?php echo $root; ?>services/event-posters.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Event Posters</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Promotional Graphics</p>
                            </a>
                        </div>

                        <!-- Column 4: Enterprise Solutions -->
                        <div class="space-y-6 border-l border-gray-100 pl-8">
                             <a href="<?php echo $root; ?>services/staffing.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Staffing</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Personnel Management</p>
                            </a>
                            <a href="<?php echo $root; ?>services/autocad.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">AutoCad</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Design Software</p>
                            </a>
                            <a href="<?php echo $root; ?>services/middleware.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Middleware</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Intermediary Software</p>
                            </a>
                            <a href="<?php echo $root; ?>services/salesforce.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 dark:text-gray-100 group-hover/item:text-brand-accent transition-colors">Salesforce</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Cloud CRM</p>
                            </a>
                        </div>

                        <!-- Column 5: Communication -->
                        <div class="space-y-6 border-l border-gray-100 pl-8">
                            <a href="<?php echo $root; ?>services/bulk-sms.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Bulk SMS</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Mass Text Messaging</p>
                            </a>
                            <a href="<?php echo $root; ?>services/url-shortener.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">URL Shortner</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Condensed Link</p>
                            </a>
                            <a href="<?php echo $root; ?>services/ivr-calls.php" class="hover:text-brand-accent group/item block">
                                <h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">IVR Calls</h4>
                                <p class="text-[11px] text-gray-400 font-normal uppercase tracking-tighter">Automated Calls</p>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Products Mega Menu Dropdown -->
                <div class="group h-full py-4 cursor-pointer">
                    <span class="group-hover:text-brand-accent transition-colors">Products +</span>
                    <div class="absolute top-full left-0 w-full bg-white dark:bg-slate-900 shadow-2xl border-t-2 border-brand-accent opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 p-8 grid grid-cols-4 gap-x-8 gap-y-8 -mt-2 z-[70] dark:text-gray-300">
                        <div class="space-y-6">
                            <a href="<?php echo $root; ?>products/smart-crm.php" class="flex gap-3 group/item cursor-pointer">
                                <i class="uil uil-users-alt text-xl text-brand-accent"></i>
                                <div><h4 class="font-bold text-gray-900 dark:text-gray-100 group-hover/item:text-brand-accent transition-colors">Smart CRM</h4><p class="text-xs text-gray-500 font-normal mt-1 leading-relaxed">Sales & Tracking</p></div>
                            </a>
                            <a href="<?php echo $root; ?>products/elvi-grow.php" class="flex gap-3 group/item cursor-pointer">
                                <i class="uil uil-building text-xl text-brand-accent"></i>
                                <div><h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Elvi Grow</h4><p class="text-xs text-gray-500 font-normal mt-1 leading-relaxed">Elevator Monitoring</p></div>
                            </a>
                            <a href="<?php echo $root; ?>products/opus-lead.php" class="flex gap-3 group/item cursor-pointer">
                                <i class="uil uil-chart-line text-xl text-brand-accent"></i>
                                <div><h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Opus Lead</h4><p class="text-xs text-gray-500 font-normal mt-1 leading-relaxed">Lead conversion</p></div>
                            </a>
                        </div>
                        <div class="space-y-6">
                            <a href="<?php echo $root; ?>products/office-mgmt.php" class="flex gap-3 group/item cursor-pointer">
                                <i class="uil uil-suitcase-alt text-xl text-brand-accent"></i>
                                <div><h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Office Management</h4><p class="text-xs text-gray-500 font-normal mt-1 leading-relaxed">Productivity Hub</p></div>
                            </a>
                            <a href="<?php echo $root; ?>products/ss-smartnous-school.php" class="flex gap-3 group/item cursor-pointer">
                                <i class="uil uil-graduation-cap text-xl text-brand-accent"></i>
                                <div><h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">School Management</h4><p class="text-xs text-gray-500 font-normal mt-1 leading-relaxed">SS Smartnous</p></div>
                            </a>
                            <a href="<?php echo $root; ?>products/sc-smartnous-college.php" class="flex gap-3 group/item cursor-pointer">
                                <i class="uil uil-university text-xl text-brand-accent"></i>
                                <div><h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">College Management</h4><p class="text-xs text-gray-500 font-normal mt-1 leading-relaxed">SC Smartnous</p></div>
                            </a>
                        </div>
                        <div class="space-y-6">
                            <a href="<?php echo $root; ?>products/restaurant-mgmt.php" class="flex gap-3 group/item cursor-pointer">
                                <i class="uil uil-restaurant text-xl text-brand-accent"></i>
                                <div><h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Restaurant</h4><p class="text-xs text-gray-500 font-normal mt-1 leading-relaxed">Kitchen & Orders</p></div>
                            </a>
                            <a href="<?php echo $root; ?>products/ecommerce-platform.php" class="flex gap-3 group/item cursor-pointer">
                                <i class="uil uil-shopping-cart-alt text-xl text-brand-accent"></i>
                                <div><h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Ecommerce</h4><p class="text-xs text-gray-500 font-normal mt-1 leading-relaxed">Scale online</p></div>
                            </a>
                            <a href="<?php echo $root; ?>products/traffic-plus.php" class="flex gap-3 group/item cursor-pointer">
                                <i class="uil uil-traffic-light text-xl text-brand-accent"></i>
                                <div><h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Traffic Plus</h4><p class="text-xs text-gray-500 font-normal mt-1 leading-relaxed">Digital Growth</p></div>
                            </a>
                        </div>
                        <div class="space-y-6">
                            <a href="<?php echo $root; ?>products/mera-hostel.php" class="flex gap-3 group/item cursor-pointer">
                                <i class="uil uil-bed text-xl text-brand-accent"></i>
                                <div><h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Mera Hostel</h4><p class="text-xs text-gray-500 font-normal mt-1 leading-relaxed">Smart bookings</p></div>
                            </a>
                            <a href="<?php echo $root; ?>products/job-portal.php" class="flex gap-3 group/item cursor-pointer">
                                <i class="uil uil-bag text-xl text-brand-accent"></i>
                                <div><h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Job Portal</h4><p class="text-xs text-gray-500 font-normal mt-1 leading-relaxed">Talent Node</p></div>
                            </a>
                            <a href="<?php echo $root; ?>products/real-estate-crm.php" class="flex gap-3 group/item cursor-pointer">
                                <i class="uil uil-estate text-xl text-brand-accent"></i>
                                <div><h4 class="font-bold text-gray-900 group-hover/item:text-brand-accent transition-colors">Real Estate</h4><p class="text-xs text-gray-500 font-normal mt-1 leading-relaxed">Property Assets</p></div>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="<?php echo $root; ?>portfolio.php" class="hover:text-brand-accent transition-colors">Portfolio</a>
                <a href="<?php echo $root; ?>blog.php" class="hover:text-brand-accent transition-colors">Blog</a>
                <a href="<?php echo $root; ?>contact.php" class="hover:text-brand-accent transition-colors">Contact Us</a>

                <!-- Refined Color Customizer (Navbar) -->
                <div class="relative ml-6 pl-6 border-l border-gray-100/30" x-data="{ colorPickerOpen: false }">
                    <button @click="colorPickerOpen = !colorPickerOpen" class="w-11 h-11 rounded-2xl flex items-center justify-center bg-gray-50/50 hover:bg-white text-brand-accent group shadow-sm transition-all duration-500 overflow-hidden relative" title="Brand Personality">
                        <div class="absolute inset-0 bg-brand-accent/5 group-hover:bg-brand-accent/10 transition-colors"></div>
                        <i class="uil uil-palette text-xl relative z-10 group-hover:rotate-12 transition-transform"></i>
                    </button>
                    <!-- Premium Glassmorphism Palette -->
                    <div x-show="colorPickerOpen" @click.away="colorPickerOpen = false" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 scale-95" x-transition:enter-end="opacity-100 translate-y-0 scale-100" class="absolute top-full right-0 mt-4 p-5 bg-white/95 backdrop-blur-xl rounded-[24px] shadow-[0_20px_50px_rgba(0,0,0,0.15)] border border-white/20 z-[100] w-64">
                         <p class="text-[9px] font-black uppercase tracking-[3px] text-brand-dark/40 mb-4 text-center">Brand Personality Hub</p>
                         <div class="grid grid-cols-2 gap-3">
                              <div @click="setAccent('#2563EB', '#00D4FF'); colorPickerOpen = false" class="group/picker cursor-pointer relative h-10 rounded-xl bg-[#2563EB] overflow-hidden shadow-sm border border-black/5">
                                  <div class="absolute inset-0 bg-white/10 opacity-0 group-hover/picker:opacity-100 transition-opacity"></div>
                                  <span class="absolute bottom-1 right-2 text-[6px] text-white/50 font-black tracking-widest uppercase">Blue</span>
                              </div>
                              <div @click="setAccent('#7C3AED', '#C084FC'); colorPickerOpen = false" class="group/picker cursor-pointer relative h-10 rounded-xl bg-[#7C3AED] overflow-hidden shadow-sm border border-black/5">
                                  <div class="absolute inset-0 bg-white/10 opacity-0 group-hover/picker:opacity-100 transition-opacity"></div>
                                  <span class="absolute bottom-1 right-2 text-[6px] text-white/50 font-black tracking-widest uppercase">Purple</span>
                              </div>
                              <div @click="setAccent('#10B981', '#6EE7B7'); colorPickerOpen = false" class="group/picker cursor-pointer relative h-10 rounded-xl bg-[#10B981] overflow-hidden shadow-sm border border-black/5">
                                  <div class="absolute inset-0 bg-white/10 opacity-0 group-hover/picker:opacity-100 transition-opacity"></div>
                                  <span class="absolute bottom-1 right-2 text-[6px] text-white/50 font-black tracking-widest uppercase">Green</span>
                              </div>
                              <!-- Custom Color Picker -->
                              <div class="relative h-10 rounded-xl bg-gray-50 dark:bg-white/5 border border-dashed border-gray-300 dark:border-white/20 flex items-center justify-center overflow-hidden group/picker">
                                  <input type="color" @input="setAccent($event.target.value)" class="absolute inset-0 opacity-0 cursor-pointer w-full h-full">
                                  <i class="uil uil-plus text-gray-400 group-hover/picker:text-brand-accent transition-colors"></i>
                                  <span class="absolute bottom-1 right-2 text-[6px] text-gray-400 font-black tracking-widest uppercase">Custom</span>
                              </div>
                         </div>
                    </div>
                </div>
            </nav>

            <!-- Mobile Menu Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-2xl text-brand-dark focus:outline-none">
                <i :class="mobileMenuOpen ? 'uil uil-multiply' : 'uil uil-bars'"></i>
            </button>
        </div>

        <!-- Mobile Menu (Full Experience) -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             class="lg:hidden absolute top-full left-0 w-full bg-white dark:bg-slate-900 shadow-2xl border-t border-gray-100 dark:border-white/5 flex flex-col py-8 px-6 gap-2 max-h-[80vh] overflow-y-auto">
            
            <a href="<?php echo $root; ?>index.php#home" @click="mobileMenuOpen = false" class="font-bold text-base hover:text-brand-accent dark:text-gray-100 transition-colors py-2 border-b border-gray-50 dark:border-white/5">Home</a>
            <a href="<?php echo $root; ?>index.php#about" @click="mobileMenuOpen = false" class="font-bold text-base hover:text-brand-accent dark:text-gray-100 transition-colors py-2 border-b border-gray-50 dark:border-white/5">About Us</a>
            
            <!-- Mobile Services Accordion -->
            <div class="py-2 border-b border-gray-50 dark:border-white/5">
                <div @click="mobileServicesOpen = !mobileServicesOpen" class="flex justify-between items-center cursor-pointer group">
                    <span class="font-bold text-base group-hover:text-brand-accent dark:text-gray-100 transition-colors">Services</span>
                    <i class="uil uil-angle-down text-xl transition-transform duration-300" :class="mobileServicesOpen ? 'rotate-180 text-brand-accent' : 'dark:text-gray-400'"></i>
                </div>
                <div x-show="mobileServicesOpen" x-collapse class="mt-4 pl-4 space-y-4 border-l-2 border-brand-accent/20">
                    <div class="space-y-3">
                        <p class="text-[10px] font-black uppercase tracking-widest text-brand-accent">Infrastructure</p>
                        <a href="<?php echo $root; ?>services/domain.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Domain</a>
                        <a href="<?php echo $root; ?>services/hosting.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Hosting</a>
                        <a href="<?php echo $root; ?>services/emails.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Emails</a>
                        <a href="<?php echo $root; ?>services/business-emails.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Business E-Mails</a>
                        <a href="<?php echo $root; ?>services/google-suite.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Google Suite</a>
                        <a href="<?php echo $root; ?>services/open-xchange.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Open XChange</a>
                    </div>
                    <div class="space-y-3 pt-2 border-t border-gray-50 dark:border-white/5">
                        <p class="text-[10px] font-black uppercase tracking-widest text-brand-accent">Development</p>
                        <a href="<?php echo $root; ?>services/website-design.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Website Design</a>
                        <a href="<?php echo $root; ?>services/web-development.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Web Development</a>
                        <a href="<?php echo $root; ?>services/mobile-applications.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Mobile Apps</a>
                        <a href="<?php echo $root; ?>services/graphic-design.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Graphic Design</a>
                        <a href="<?php echo $root; ?>services/video-editing.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Video Editing</a>
                    </div>
                    <div class="space-y-3 pt-2 border-t border-gray-50 dark:border-white/5">
                        <p class="text-[10px] font-black uppercase tracking-widest text-brand-accent">Marketing</p>
                        <a href="<?php echo $root; ?>services/digital-marketing.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Digital Marketing</a>
                        <a href="<?php echo $root; ?>services/seo.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">SEO</a>
                        <a href="<?php echo $root; ?>services/smo.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">SMO</a>
                        <a href="<?php echo $root; ?>services/paid-service.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Paid Service</a>
                        <a href="<?php echo $root; ?>services/digital-pr.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Digital PR</a>
                        <a href="<?php echo $root; ?>services/event-posters.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Event Posters</a>
                    </div>
                    <div class="space-y-3 pt-2 border-t border-gray-50 dark:border-white/5">
                        <p class="text-[10px] font-black uppercase tracking-widest text-brand-accent">Enterprise</p>
                        <a href="<?php echo $root; ?>services/staffing.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Staffing</a>
                        <a href="<?php echo $root; ?>services/autocad.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">AutoCad</a>
                        <a href="<?php echo $root; ?>services/middleware.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Middleware</a>
                        <a href="<?php echo $root; ?>services/salesforce.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Salesforce</a>
                    </div>
                    <div class="space-y-3 pt-2 border-t border-gray-50 dark:border-white/5">
                        <p class="text-[10px] font-black uppercase tracking-widest text-brand-accent">Communication</p>
                        <a href="<?php echo $root; ?>services/bulk-sms.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Bulk SMS</a>
                        <a href="<?php echo $root; ?>services/url-shortener.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">URL Shortner</a>
                        <a href="<?php echo $root; ?>services/ivr-calls.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">IVR Calls</a>
                    </div>
                </div>
            </div>

            <!-- Mobile Products Accordion -->
            <div class="py-2 border-b border-gray-50 dark:border-white/5">
                <div @click="mobileProductsOpen = !mobileProductsOpen" class="flex justify-between items-center cursor-pointer group">
                    <span class="font-bold text-base group-hover:text-brand-accent dark:text-gray-100 transition-colors">Products</span>
                    <i class="uil uil-angle-down text-xl transition-transform duration-300" :class="mobileProductsOpen ? 'rotate-180 text-brand-accent' : 'dark:text-gray-400'"></i>
                </div>
                <div x-show="mobileProductsOpen" x-collapse class="mt-4 pl-4 space-y-4 border-l-2 border-brand-accent/20">
                    <a href="<?php echo $root; ?>products/smart-crm.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Smart CRM</a>
                    <a href="<?php echo $root; ?>products/elvi-grow.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Elvi Grow</a>
                    <a href="<?php echo $root; ?>products/opus-lead.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Opus Lead</a>
                    <a href="<?php echo $root; ?>products/office-mgmt.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Office Management</a>
                    <a href="<?php echo $root; ?>products/ss-smartnous-school.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">School Management</a>
                    <a href="<?php echo $root; ?>products/sc-smartnous-college.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">College Management</a>
                    <a href="<?php echo $root; ?>products/restaurant-mgmt.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Restaurant</a>
                    <a href="<?php echo $root; ?>products/ecommerce-platform.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Ecommerce</a>
                    <a href="<?php echo $root; ?>products/traffic-plus.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Traffic Plus</a>
                    <a href="<?php echo $root; ?>products/mera-hostel.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Mera Hostel</a>
                    <a href="<?php echo $root; ?>products/job-portal.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Job Portal</a>
                    <a href="<?php echo $root; ?>products/real-estate-crm.php" class="block font-bold text-sm text-gray-700 dark:text-gray-300 hover:text-brand-accent">Real Estate</a>
                </div>
            </div>
            
            <a href="<?php echo $root; ?>portfolio.php" @click="mobileMenuOpen = false" class="font-bold text-base hover:text-brand-accent dark:text-gray-100 transition-colors py-2 border-b border-gray-50 dark:border-white/5">Portfolio</a>
            <a href="<?php echo $root; ?>blog.php" @click="mobileMenuOpen = false" class="font-bold text-base hover:text-brand-accent dark:text-gray-100 transition-colors py-2 border-b border-gray-50 dark:border-white/5">Blog</a>
            <a href="<?php echo $root; ?>contact.php" @click="mobileMenuOpen = false" class="font-bold text-base hover:text-brand-accent dark:text-gray-100 transition-colors py-2 border-b border-gray-50 dark:border-white/5">Contact Us</a>
            
            <!-- Mobile Brand Customizer -->
            <div class="mt-6 pt-6 border-t border-gray-100">
                <p class="text-[9px] font-black uppercase tracking-[3px] text-gray-400 mb-6 text-center">Brand Personality Hub</p>
                <div class="flex justify-center gap-4">
                    <button @click="setAccent('#2563EB', '#00D4FF')" class="w-12 h-12 rounded-2xl bg-[#2563EB] shadow-lg"></button>
                    <button @click="setAccent('#7C3AED', '#C084FC')" class="w-12 h-12 rounded-2xl bg-[#7C3AED] shadow-lg"></button>
                    <button @click="setAccent('#10B981', '#6EE7B7')" class="w-12 h-12 rounded-2xl bg-[#10B981] shadow-lg"></button>
                    <div class="relative w-12 h-12 rounded-2xl bg-gray-100 dark:bg-white/10 flex items-center justify-center border-2 border-dashed border-gray-300 dark:border-white/20">
                        <input type="color" @input="setAccent($event.target.value)" class="absolute inset-0 opacity-0 cursor-pointer">
                        <i class="uil uil-plus text-gray-400"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>
