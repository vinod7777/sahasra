   <footer class="bg-brand-dark pt-24 pb-12 text-gray-400 overflow-hidden relative">
        <!-- Decoration -->
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-brand-accent/5 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="container mx-auto px-6 md:px-12 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">
                <!-- Col 1 -->
                <div>
                    <a href="<?php echo $root; ?>index.php" class="flex items-center gap-2 mb-8">
                        <div class="w-10 h-10 rounded-xl gradient-bg flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-brand-accent/20">S</div>
                        <span class="font-heading font-bold text-2xl text-white tracking-tight">Sahasra<span class="text-brand-accent">.</span></span>
                    </a>
                    <p class="text-[15px] leading-relaxed mb-8 text-gray-400">Transforming global businesses through high-fidelity digital solutions and premium IT architecture. We don't just build, we innovate.</p>
                    <div class="flex gap-4">
                        <a href="#" class="footer-social-icon"><i class="uil uil-facebook-f"></i></a>
                        <a href="#" class="footer-social-icon"><i class="uil uil-instagram"></i></a>
                        <a href="#" class="footer-social-icon"><i class="uil uil-twitter"></i></a>
                        <a href="#" class="footer-social-icon"><i class="uil uil-linkedin"></i></a>
                    </div>
                </div>

                <!-- Col 2 -->
                <div class="lg:pl-10">
                    <h4 class="text-white text-lg font-bold mb-8 font-heading relative inline-block">
                        Other Services
                        <span class="absolute -bottom-2 left-0 w-12 h-1 bg-brand-accent rounded-full"></span>
                    </h4>
                    <ul class="space-y-4">
                        <li><a href="<?php echo $root; ?>services/web-development.php" class="footer-link"><i class="uil uil-angle-right-b mr-2 text-brand-accent"></i> Web Development</a></li>
                        <li><a href="<?php echo $root; ?>services/website-design.php" class="footer-link"><i class="uil uil-angle-right-b mr-2 text-brand-accent"></i> UI/UX Design</a></li>
                        <li><a href="<?php echo $root; ?>services/digital-marketing.php" class="footer-link"><i class="uil uil-angle-right-b mr-2 text-brand-accent"></i> Digital Marketing</a></li>
                        <li><a href="<?php echo $root; ?>services/hosting.php" class="footer-link"><i class="uil uil-angle-right-b mr-2 text-brand-accent"></i> Cloud Solutions</a></li>
                        <li><a href="<?php echo $root; ?>services/mobile-applications.php" class="footer-link"><i class="uil uil-angle-right-b mr-2 text-brand-accent"></i> App Development</a></li>
                    </ul>
                </div>

                <!-- Col 3 -->
                <div class="lg:pl-10">
                    <h4 class="text-white text-lg font-bold mb-8 font-heading relative inline-block">
                        Quick Links
                        <span class="absolute -bottom-2 left-0 w-12 h-1 bg-brand-accent rounded-full"></span>
                    </h4>
                    <ul class="space-y-4">
                        <li><a href="<?php echo $root; ?>index.php#about" class="footer-link">About Our Agency</a></li>
                        <li><a href="<?php echo $root; ?>index.php#portfolio" class="footer-link">Case Studies</a></li>
                        <li><a href="#" class="footer-link">Latest Insights</a></li>
                        <li><a href="<?php echo $root; ?>index.php#contact" class="footer-link">Contact Support</a></li>
                        <li><a href="#" class="footer-link">Terms of Service</a></li>
                    </ul>
                </div>

                <!-- Col 4 -->
                <div>
                    <h4 class="text-white text-lg font-bold mb-8 font-heading relative inline-block">
                        Reach Us
                        <span class="absolute -bottom-2 left-0 w-12 h-1 bg-brand-accent rounded-full"></span>
                    </h4>
                    <ul class="space-y-5">
                        <li class="flex items-start gap-4 footer-contact-item">
                            <i class="uil uil-map-marker text-brand-accent text-xl mt-1"></i>
                            <span class="text-[15px]">123 Tech Avenue, Silicon Valley, CA 90210</span>
                        </li>
                        <li class="flex items-center gap-4 footer-contact-item">
                            <i class="uil uil-envelope text-brand-accent text-xl"></i>
                            <a href="mailto:sahasrabharat7@gmail.com" class="hover:text-white transition-colors text-[15px]">sahasrabharat7@gmail.com</a>
                        </li>
                        <li class="flex items-center gap-4 footer-contact-item">
                            <i class="uil uil-phone-alt text-brand-accent text-xl"></i>
                            <a href="tel:+918885526751" class="hover:text-white transition-colors text-[15px]">+91 88855 26751</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Strip -->
            <div class="border-t border-white/5 pt-10 flex flex-col md:flex-row justify-between items-center gap-6 text-sm text-gray-500">
                <p>&copy; 2026 Sahasra IT Solutions. Premium Digital Excellence.</p>
                <div class="flex items-center gap-8">
                    <a href="#" class="hover:text-brand-accent transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-brand-accent transition-colors">Cookie Policy</a>
                    <a href="#" class="hover:text-brand-accent transition-colors">Support Center</a>
                </div>
            </div>
        </div>
        </div>
    </footer>

    <!-- Universal Form Handler Script -->
    <script>
        const GOOGLE_SCRIPT_URL = "https://script.google.com/macros/s/AKfycbzQCh-ubpvgR-1BV6HTsKS3i2pFU1SGTzUb2Apb3Li2ijTopwzBPwKa0iVsf-oB255q/exec";

        document.addEventListener('DOMContentLoaded', () => {
            // Find all forms on the page
            const allForms = document.querySelectorAll('form');
            
            allForms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const submitBtn = form.querySelector('button[type="submit"]') || form.querySelector('button');
                    if (!submitBtn) return;

                    const originalBtnContent = submitBtn.innerHTML;
                    
                    // Visual feedback
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = `
                        <span class="flex items-center justify-center gap-2">
                             <svg class="animate-spin h-5 w-5 text-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Sending Inquiry...
                        </span>
                    `;

                    // Smart Data Extraction (Works even without name attributes)
                    const params = new URLSearchParams();
                    const fields = form.querySelectorAll('input, textarea, select');
                    
                    fields.forEach((field, index) => {
                        const key = field.name || field.placeholder || field.getAttribute('aria-label') || ("Field_" + (index + 1));
                        if (field.type === 'checkbox') {
                            if (field.checked) params.append(key, "Yes");
                        } else if (field.type === 'radio') {
                            if (field.checked) params.append(key, field.value);
                        } else {
                            params.append(key, field.value);
                        }
                    });
                    
                    // Add Page Info if form_name isn't present
                    const formName = form.dataset.name || `Form on: ${document.title}`;
                    params.append('_Form_Source', window.location.href);
                    params.append('_Form_Name', formName);
                    params.append('_Timestamp', new Date().toLocaleString());

                    // Send to Google Script
                    fetch(GOOGLE_SCRIPT_URL, {
                        method: 'POST',
                        mode: 'no-cors', // Use no-cors for Google Script redirects
                        body: params
                    })
                    .then(() => {
                        alert("✅ Success! Your inquiry has been received. We will contact you at sahasrabharat7@gmail.com shortly.");
                        form.reset();
                    })
                    .catch(error => {
                        console.error('Submission Error:', error);
                        alert("❌ Error: Could not send message. Please try again or email us directly at sahasrabharat7@gmail.com");
                    })
                    .finally(() => {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnContent;
                    });
                });
            });
        });
    </script>
