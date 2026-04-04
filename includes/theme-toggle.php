<style>
    :root {
        /* Default Colors (Handled by JS on load) */
        --brand-accent: #2563EB;
        --brand-accent-rgb: 37, 99, 235;
        --brand-accent-start: #2563EB;
        --brand-accent-end: #00D4FF;
        --accent-shadow: rgba(37, 99, 235, 0.3);
        
        --bg-color-dark: #000B1A;
        --sun-color: #fabc1c;
        --moon-color: #fffdf2;
        --day-bg-color: #0dbdf6;
        --night-bg-color: #272a30;
        --cloud-color: #fffdf2;
        --star-color: #fffdf2;
    }

    /* Global Transitions */
    body { transition: background-color 0.8s ease, color 0.8s ease; }

    /* --- TOTAL GLOBAL COLOR SYNCHRONIZATION --- */
    
    /* 0. BRAND RECOVERY */
    .text-brand-dark { color: #0f172a !important; }
    .bg-brand-dark { background-color: #0f172a !important; }

    /* 1. TEXT OVERRIDES - Catch every possible color variation */
    .text-brand-accent, .text-brand-pink, .text-red-600, .text-red-500,
    .text-blue-600, .text-blue-500,
    .headingnm span,
    .subtitlee, .subtitlee:before, 
    .cardserv .wrap .link, 
    .cardserv .wrap .title:hover,
    .mobile-nav-link:hover,
    #hero-heading-accent,
    .footer-link:hover,
    .faq-icon i,
    .faq-header h4,
    nav a:hover,
    .group:hover .group-hover\:text-brand-accent,
    .group:hover .group-hover\:text-brand-accent\/10 {
        color: var(--brand-accent) !important;
    }

    /* Target icons inside hovered groups to ensure white contrast */
    /* Smart Contrast: ONLY turn white if the card specifically turns into a brand-colored card */
    .process-card:hover :not(.w-16, .w-12, .w-14, .w-20, i, .faq-icon),
    .btn-7:hover *,
    .gradient-bg:hover *,
    .bg-brand-accent:hover *,
    .hover\:bg-brand-accent:hover * {
        color: white !important;
    }

    /* Ensure icons inside boxes keep brand color */
    .process-card:hover .w-16 i,
    .process-card:hover .w-12 i,
    .process-card:hover .w-14 i {
        color: var(--brand-accent) !important;
    }

    /* Keep icons white on hover across standard cards */
    .group:hover .group-hover\:text-white,
    .group:hover .group-hover\:text-white *,
    .cardserv .wrap:hover .imgwrap i {
        color: white !important;
    }

    /* 2. GRADIENT & BACKGROUND OVERRIDES - Targeted elements only */
    .gradient-bg, .btn-7, .btn-7-vertical, .bg-brand-accent,
    .btn-7 span:after,
    .w-10.h-10.rounded-xl.gradient-bg, 
    .z-\[1001\], .top-bar-custom, /* Added top-bar-custom as a hook */
    [style*="background: linear-gradient"], 
    .cardserv .wrap .imgwrap:hover,
    .hover\:bg-brand-accent:hover,
    .btn-7:before, .btn-7:after,
    .group:hover .group-hover\:bg-brand-accent {
        background-color: #2563EB !important; /* Solid Fallback */
        background: linear-gradient(135deg, var(--brand-accent-start, #2563EB) 0%, var(--brand-accent-end, #00D4FF) 100%) !important;
        color: white !important;
        text-shadow: 0 1px 2px rgba(0,0,0,0.2) !important;
    }

    /* Exceptions for light backgrounds with branding colors! */
    .bg-brand-accent\/10, .bg-brand-pink\/10, .bg-blue-50, .bg-pink-50, 
    .w-12.h-12.rounded-lg.bg-brand-accent\/10,
    .cardserv .wrap .imgwrap {
        background: var(--accent-shadow) !important;
        background-color: var(--accent-shadow) !important;
        color: var(--brand-accent) !important;
    }

    /* Target btn-7 specifically for its unique hover logic */
    .btn-7 {
        background: linear-gradient(135deg, var(--brand-accent-start) 0%, var(--brand-accent-end) 100%) !important;
        border-color: var(--brand-accent) !important;
    }
    .btn-7 span {
        color: white !important;
    }

    /* Target pseudo-elements like card numbers (01, 02, etc) */
    .cardserv .wrap:after, .cardserv .wrap [class*="after"] {
        color: var(--brand-accent) !important;
        opacity: 0.15 !important;
    }

    /* FAQ Item Style Refresh */
    .faq-item.active {
        border-left: 4px solid var(--brand-accent) !important;
        background: transparent !important;
        padding-left: 1.5rem !important;
    }
    .faq-item.active h4 {
        color: var(--brand-accent) !important;
    }

    /* 3. BORDER & SHADOW OVERRIDES */
    .border-brand-accent, .border-brand-accent,
    .border-blue-600, .border-red-600,
    .hero-accent-line, 
    .shadow-brand-accent\/20,
    input:focus, textarea:focus {
        border-color: var(--brand-accent) !important;
        box-shadow: 0 10px 20px -5px var(--accent-shadow) !important;
    }

    /* 4. ICON OVERRIDES - Ensure LordIcons and Unicons match */
    i.uil-palette, 
    i[class*="text-brand-accent"], i[class*="text-brand-accent"], i[class*="text-blue-"],
    .cardserv .imgwrap i,
    .w-12.h-12.rounded-2xl i {
        color: var(--brand-accent) !important;
    }

    /* 5. SPECIFIC BUTTONS & BADGES */
    .btn-7 span, .btn-7:hover span {
        color: #fff !important; /* Keep text white on gradient buttons */
    }
    .bg-gray-100 .gradient-bg {
        background: var(--brand-accent) !important;
    }

    /* --- Refined Dark Theme Logic --- */
    /* Global Background Fixes */
    .dark-theme body { 
        background-color: var(--bg-color-dark) !important; 
        color: #f8fafc !important; 
    }
    
    /* Target ANY background that might stay white */
    /* Lighter, more breathable dark mode cards */
    /* Soft glassmorphism for general white containers */
    .dark-theme [class*='bg-white']:not(header):not(nav):not(.gradient-bg) {
        background-color: rgba(255, 255, 255, 0.05) !important;
        backdrop-filter: blur(10px);
    }
 
    .dark-theme .text-brand-dark, 
    .dark-theme .text-gray-900,
    .dark-theme .text-slate-900 {
        color: #f8fafc !important;
    }
 
    /* Force specific section backgrounds */
    .dark-theme section:not(.gradient-bg) {
        background-color: var(--bg-color-dark) !important;
    }

    .dark-theme .service-card-new,
    .dark-theme .glass-card,
    .dark-theme .theme-picker-container,
    .dark-theme .p-8.bg-white,
    .dark-theme .p-6.bg-white,
    .dark-theme .rounded-3xl.bg-white,
    .dark-theme .rounded-2xl.bg-white,
    .dark-theme .hover-scale.bg-white {
        background-color: rgba(255, 255, 255, 0.05) !important;
        background-image: none !important;
        backdrop-filter: blur(20px) !important;
        border: 1px solid rgba(255, 255, 255, 0.08) !important;
        color: #f8fafc !important;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4) !important;
    }

    /* Force iconography and numbers in service cards */
    .dark-theme #services i,
    .dark-theme #services .font-heading.text-6xl {
        color: var(--brand-accent) !important;
        opacity: 0.8 !important;
    }

    .dark-theme #services .text-gray-400,
    .dark-theme #services .text-gray-500 {
        color: #cbd5e1 !important;
    }

    /* Force Grid Content to Flip */
    .dark-theme #services .text-gray-500,
    .dark-theme #services .text-gray-400,
    .dark-theme #services .text-gray-600 {
        color: #94a3b8 !important;
    }

    .dark-theme #services .bg-blue-600,
    .dark-theme #services .bg-brand-accent {
        background-color: var(--brand-accent) !important;
    }

    .dark-theme .hover-scale:hover {
        background: rgba(255, 255, 255, 0.08) !important;
        border-color: var(--brand-accent) !important;
    }

    /* Force Theme Picker Specifics */
    .dark-theme #theme-switcher-grid,
    .dark-theme .theme-switcher-grid,
    .dark-theme [x-show="colorPickerOpen"] {
        background: rgba(10, 25, 47, 0.95) !important;
        border: 1px solid rgba(255, 255, 255, 0.1) !important;
    }

    /* Text Color Mastery */
    .dark-theme h1, .dark-theme h2, .dark-theme h3, .dark-theme h4, .dark-theme h5, .dark-theme h6,
    .dark-theme .text-brand-dark, .dark-theme .text-slate-900, .dark-theme .text-gray-900,
    .dark-theme .text-slate-700, .dark-theme .text-gray-700, .dark-theme .text-gray-800 {
        color: #ffffff !important;
    }

    .dark-theme p, .dark-theme span, .dark-theme li, .dark-theme .text-gray-600, .dark-theme .text-slate-600 {
        color: #cbd5e1 !important;
    }

    /* Remove/Invert specific images or patterns if needed */
    .dark-theme .opacity-5 { opacity: 0.02 !important; }
    .dark-theme .bg-[url*='pattern'] { opacity: 0.2; }
    
    /* Header Authority */
    .dark-theme header {
        background: rgba(0, 11, 26, 0.9) !important;
        backdrop-filter: blur(20px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }
    
    .dark-theme .nav-link { color: #f8fafc !important; }
    .dark-theme .nav-link:hover { color: var(--brand-accent) !important; }

    .dark-theme .shadow-xl, 
    .dark-theme .shadow-lg, 
    .dark-theme .shadow-2xl {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5) !important;
    }

    .dark-theme input, 
    .dark-theme textarea {
        background: rgba(255, 255, 255, 0.05) !important;
        border-color: rgba(255, 255, 255, 0.1) !important;
        color: white !important;
    }

    .dark-theme .footer-link:hover {
        color: var(--brand-accent) !important;
    }

    /* Card & Pricing Refinements */
    body.dark-theme .cardserv > .wrap,
    body.dark-theme .stickyblock,
    body.dark-theme .wrap.reveal,
    body.dark-theme .tilt-inner,
    body.dark-theme .flex.items-start.gap-4.p-4.rounded-xl,
    body.dark-theme table, body.dark-theme thead {
        background-color: rgba(255, 255, 255, 0.03) !important;
        border: 1px solid rgba(255, 255, 255, 0.08) !important;
        backdrop-filter: blur(10px);
    }

    body.dark-theme tr { border-bottom: 1px solid rgba(255, 255, 255, 0.05) !important; }
    body.dark-theme td { color: #cbd5e1 !important; }

    /* Form & Input Refinements */
    body.dark-theme input, body.dark-theme textarea, body.dark-theme select {
        background-color: rgba(255, 255, 255, 0.05) !important;
        color: #fff !important;
        border: 1px solid rgba(255, 255, 255, 0.1) !important;
    }
    body.dark-theme input:focus, body.dark-theme textarea:focus {
        border-color: var(--brand-accent) !important;
        box-shadow: 0 0 0 2px var(--accent-shadow) !important;
    }

    /* Footer */
    body.dark-theme footer { background-color: #00050d !important; border-top: 1px solid rgba(255,255,255,0.05) !important; }
    body.dark-theme .bg-brand-dark { background-color: #00050d !important; }

    /* --- RESTORED ORIGINAL ANIMATED TOGGLE STYLES --- */
    #theme-toggle-animated-wrapper {
        position: fixed;
        bottom: 30px;
        left: 30px;
        z-index: 9999;
        transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    #theme-toggle-animated-wrapper:hover { transform: scale(1.15); }

    .theme-switcher-grid {
        display: grid;
        grid-template-columns: repeat(54, 1px);
        grid-template-rows: repeat(24, 1px);
        gap: 0;
        position: relative;
        background-color: var(--day-bg-color);
        border-radius: 49px;
        border: 2px solid white;
        cursor: pointer;
        transition: background-color 0.8s ease, border-color 0.8s ease;
        appearance: none;
        padding: 0;
        width: 60px;
        height: 30px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }

    .theme-switcher-grid.night-theme {
        background-color: #1e293b;
        border-color: var(--brand-accent);
        box-shadow: 0 10px 25px rgba(0,0,0,0.5), 0 0 15px var(--accent-shadow);
    }

    .sun {
        background-color: var(--sun-color);
        grid-column: 3 / 23; grid-row: 3 / 23;
        border-radius: 50%;
        transition: grid-column 0.8s ease, background-color 0.8s ease;
        height: 20px;
    }

    .theme-switcher-grid.night-theme .sun {
        grid-column: 33 / 53;
        background-color: var(--moon-color);
    }

    .moon-overlay {
        position: absolute; border-radius: 50%;
        transition: left 0.8s ease, background-color 0.8s ease;
        z-index: 1; background-color: var(--day-bg-color);
        width: 18px; height: 18px; left: -20px; top: 3px;
    }

    .theme-switcher-grid.night-theme .moon-overlay {
        left: 31px; background-color: var(--night-bg-color);
    }

    .cloud-ball {
        background-color: var(--cloud-color); border-radius: 50%;
        width: 9px; height: 9px; position: absolute;
        transition: all 0.8s ease; z-index: 2;
    }
    #ball1 { top: 7px; left: 12px; } #ball2 { top: 7px; left: 17px; }
    #ball3 { top: 7px; left: 22px; } #ball4 { top: 5px; left: 17px; }

    .theme-switcher-grid.night-theme #ball1 { top: 16px; left: 16px; width: 2px; height: 2px; }
    .theme-switcher-grid.night-theme #ball2 { top: 3px; left: 22px; width: 2px; height: 2px; }
    .theme-switcher-grid.night-theme #ball3 { top: 10px; left: 29px; width: 2px; height: 2px; }
    .theme-switcher-grid.night-theme #ball4 { top: 5px; left: 34px; width: 2px; height: 2px; }

    .star {
        background-color: var(--star-color); width: 1px; height: 1px;
        position: absolute; opacity: 0; transition: opacity 0.8s ease; border-radius: 50%;
    }
    #star1 { top: 7px; left: 10px; } #star2 { top: 9px; left: 16px; }
    #star3 { top: 13px; left: 23px; } #star4 { top: 18px; left: 29px; }
    .theme-switcher-grid.night-theme .star { opacity: 1; }

</style>

<!-- Floating Animated Toggle Box -->
<div id="theme-toggle-animated-wrapper">
    <button class="theme-switcher-grid" id="theme-switcher-grid" onclick="toggleTheme()" aria-label="Switch Theme">
        <div class="sun" id="sun"></div>
        <div class="moon-overlay" id="moon-overlay"></div>
        <div class="cloud-ball" id="ball1"></div>
        <div class="cloud-ball" id="ball2"></div>
        <div class="cloud-ball" id="ball3"></div>
        <div class="cloud-ball" id="ball4"></div>
        <div class="star" id="star1"></div>
        <div class="star" id="star2"></div>
        <div class="star" id="star3"></div>
        <div class="star" id="star4"></div>
    </button>
</div>

<script>
    (function() {
        const DEFAULT_BRAND = '#2563EB';
        const DEFAULT_GRADIENT = '#00D4FF';

        function getLuminance(hex) {
            const rgb = hexToRgb(hex);
            if (!rgb) return 0;
            return (0.299 * rgb.r + 0.587 * rgb.g + 0.114 * rgb.b) / 255;
        }

        function hexToRgb(hex) {
            var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
            hex = hex.replace(shorthandRegex, function(m, r, g, b) { return r + r + g + g + b + b; });
            var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
            return result ? { r: parseInt(result[1], 16), g: parseInt(result[2], 16), b: parseInt(result[3], 16) } : null;
        }

        // 1. Immediate Boot
        let savedColor = localStorage.getItem('sahasra-accent-color') || DEFAULT_BRAND;
        let savedGradient = localStorage.getItem('sahasra-accent-gradient') || DEFAULT_GRADIENT;
        const savedTheme = localStorage.getItem('sahasra-theme') || 'light';

        // SAFETY GUARD: If the stored color is white or too bright, reset to Sahasra Blue
        if (getLuminance(savedColor) > 0.9) {
            savedColor = DEFAULT_BRAND;
            savedGradient = DEFAULT_GRADIENT;
            localStorage.setItem('sahasra-accent-color', DEFAULT_BRAND);
            localStorage.setItem('sahasra-accent-gradient', DEFAULT_GRADIENT);
        }

        document.documentElement.classList.toggle('dark-theme', savedTheme === 'dark');
        
        // Initial root variable injection (Instant)
        const root = document.documentElement;
        root.style.setProperty('--brand-accent', savedColor);
        root.style.setProperty('--brand-accent-start', savedColor);
        root.style.setProperty('--brand-accent-end', savedGradient);
        const rgb = hexToRgb(savedColor);
        if (rgb) {
            root.style.setProperty('--brand-accent-rgb', `${rgb.r}, ${rgb.g}, ${rgb.b}`);
            root.style.setProperty('--accent-shadow', `rgba(${rgb.r}, ${rgb.g}, ${rgb.b}, 0.2)`);
        }

        // 2. Global Sync (deferred for UI elements)
        window.initSahasraEngine = function() {
            const syncUI = () => {
                const currentTheme = document.documentElement.classList.contains('dark-theme') ? 'dark' : 'light';
                document.getElementById('theme-switcher-grid')?.classList.toggle('night-theme', currentTheme === 'dark');
                const pickers = document.querySelectorAll('input[type="color"]');
                pickers.forEach(p => p.value = savedColor);
            };
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', syncUI);
            } else {
                syncUI();
            }
        };

        window.toggleTheme = function() {
            const isDark = document.documentElement.classList.toggle('dark-theme');
            localStorage.setItem('sahasra-theme', isDark ? 'dark' : 'light');
            document.getElementById('theme-switcher-grid')?.classList.toggle('night-theme', isDark);
            
            // Dispatch a global event for others to respond (like Three.js background)
            window.dispatchEvent(new CustomEvent('themechanged', { detail: { theme: isDark ? 'dark' : 'light' } }));
        };

        window.setAccent = function(color, endColor = null) {
            if (getLuminance(color) > 0.9) return; // Block selecting white
            
            localStorage.setItem('sahasra-accent-color', color);
            let finalEnd = endColor;
            
            if (!endColor || endColor === color) {
                const rgb = hexToRgb(color);
                const { h, s, l } = rgbToHsl(rgb.r, rgb.g, rgb.b);
                const h2 = (h + 0.05) % 1; 
                const s2 = Math.min(1, s + 0.1); 
                const l2 = Math.max(0, l - 0.15); 
                const rgb2 = hslToRgb(h2, s2, l2);
                finalEnd = `rgb(${rgb2.r}, ${rgb2.g}, ${rgb2.b})`;
            }
            
            localStorage.setItem('sahasra-accent-gradient', finalEnd);
            applyAccent(color, finalEnd);
        };

        window.applyAccent = function(color, endColor) {
            const root = document.documentElement;
            root.style.setProperty('--brand-accent', color);
            root.style.setProperty('--brand-accent-start', color);
            root.style.setProperty('--brand-accent-end', endColor);
            
            const rgb = hexToRgb(color);
            if (rgb) {
                root.style.setProperty('--brand-accent-rgb', `${rgb.r}, ${rgb.g}, ${rgb.b}`);
                root.style.setProperty('--accent-shadow', `rgba(${rgb.r}, ${rgb.g}, ${rgb.b}, 0.2)`);
            }
            
            document.querySelectorAll('input[type="color"]').forEach(p => p.value = color);
        };

        function rgbToHsl(r, g, b) {
            r /= 255; g /= 255; b /= 255;
            const max = Math.max(r, g, b), min = Math.min(r, g, b);
            let h, s, l = (max + min) / 2;
            if (max === min) { h = s = 0; } else {
                const d = max - min;
                s = l > 0.5 ? d / (2 - max - min) : d / (max + min);
                switch (max) {
                    case r: h = (g - b) / d + (g < b ? 6 : 0); break;
                    case g: h = (b - r) / d + 2; break;
                    case b: h = (r - g) / d + 4; break;
                }
                h /= 6;
            }
            return { h, s, l };
        }

        function hslToRgb(h, s, l) {
            let r, g, b;
            if (s === 0) { r = g = b = l; } else {
                const hue2rgb = (p, q, t) => {
                    if (t < 0) t += 1; if (t > 1) t -= 1;
                    if (t < 1/6) return p + (q - p) * 6 * t;
                    if (t < 1/2) return q;
                    if (t < 2/3) return p + (q - p) * (2/3 - t) * 6;
                    return p;
                };
                const q = l < 0.5 ? l * (1 + s) : l + s - l * s;
                const p = 2 * l - q;
                r = hue2rgb(p, q, h + 1/3); g = hue2rgb(p, q, h); b = hue2rgb(p, q, h - 1/3);
            }
            return { r: Math.round(r * 255), g: Math.round(g * 255), b: Math.round(b * 255) };
        }

        initSahasraEngine();
    })();
</script>
