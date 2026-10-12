<?php
/**
 * ============================================================
 *  Conquer Services — Global Footer
 *  Usage: <?php include 'includes/footer.php'; ?>
 *
 *  Relies on $base_path being set before header.php was included
 *  (defaults to "" if not set).
 * ============================================================
 */
if (!isset($base_path)) $base_path = "";
?>

<!-- ══════════════════════════════════════════
     FOOTER
═══════════════════════════════════════════ -->
<footer class="bg-black border-t border-gray-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 py-16">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

      <!-- Brand column -->
      <div class="lg:col-span-1">
        <a href="<?php echo $base_path; ?>" class="block mb-5">
          <img src="<?php echo $base_path; ?>assets/images/navlogo.png" alt="Conquer Security" class="h-12 w-auto" />
        </a>
        <p class="text-[#bbb] text-sm leading-relaxed mb-5">
          With Conquer Services, you can be confident that your home and business are protected with professional security solutions you can trust.
        </p>
        <div class="flex gap-3">
          <a href="https://www.facebook.com/profile.php?id=61585709354745" target="_blank" rel="noopener" class="w-9 h-9 rounded-full bg-gray-100 border border-gray-200 flex items-center justify-center text-gray-500 hover:bg-brand-yellow hover:border-brand-yellow hover:text-brand-dark transition-colors">
            <i class="fab fa-facebook-f text-xs"></i>
          </a>
          <a href="https://www.instagram.com/conquersecurity_in/" target="_blank" rel="noopener" class="w-9 h-9 rounded-full bg-gray-100 border border-gray-200 flex items-center justify-center text-gray-500 hover:bg-brand-yellow hover:border-brand-yellow hover:text-brand-dark transition-colors">
            <i class="fab fa-instagram text-xs"></i>
          </a>
          <a href="https://api.whatsapp.com/send?phone=9430695171" target="_blank" rel="noopener" class="w-9 h-9 rounded-full bg-gray-100 border border-gray-200 flex items-center justify-center text-gray-500 hover:bg-green-600 hover:border-green-600 hover:text-white transition-colors">
            <i class="fab fa-whatsapp text-sm"></i>
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div>
        <h4 class="font-display font-bold text-white uppercase text-sm tracking-wider mb-5 flex items-center gap-2 ">
          <span class="w-4 h-0.5 bg-brand-yellow inline-block"></span> Quick Links
        </h4>
        <ul class="space-y-2.5">
          <li><a href="<?php echo $base_path; ?>" class="text-[#bbb] hover:text-brand-yellow text-sm transition-colors flex items-center gap-2"><i class="fa fa-chevron-right text-brand-yellow text-[10px]"></i> Home</a></li>
          <li><a href="<?php echo $base_path; ?>about" class="text-[#bbb] hover:text-brand-yellow text-sm transition-colors flex items-center gap-2"><i class="fa fa-chevron-right text-brand-yellow text-[10px]"></i> About Us</a></li>
          <li><a href="<?php echo $base_path; ?>security-guards-services" class="text-[#bbb] hover:text-brand-yellow text-sm transition-colors flex items-center gap-2"><i class="fa fa-chevron-right text-brand-yellow text-[10px]"></i> Security Guard Services</a></li>
          <li><a href="<?php echo $base_path; ?>facility-management" class="text-[#bbb] hover:text-brand-yellow text-sm transition-colors flex items-center gap-2"><i class="fa fa-chevron-right text-brand-yellow text-[10px]"></i> Facility Management</a></li>
          <li><a href="<?php echo $base_path; ?>industries" class="text-[#bbb] hover:text-brand-yellow text-sm transition-colors flex items-center gap-2"><i class="fa fa-chevron-right text-brand-yellow text-[10px]"></i> Industries Served</a></li>
          <li><a href="<?php echo $base_path; ?>technology-support" class="text-[#bbb] hover:text-brand-yellow text-sm transition-colors flex items-center gap-2"><i class="fa fa-chevron-right text-brand-yellow text-[10px]"></i> Technology & Support</a></li>
          <li><a href="<?php echo $base_path; ?>csr" class="text-[#bbb] hover:text-brand-yellow text-sm transition-colors flex items-center gap-2"><i class="fa fa-chevron-right text-brand-yellow text-[10px]"></i> CSR</a></li>
          <!-- <li><a href="<?php echo $base_path; ?>locations" class="text-[#bbb] hover:text-brand-yellow text-sm transition-colors flex items-center gap-2"><i class="fa fa-chevron-right text-brand-yellow text-[10px]"></i> Locations</a></li> -->
          <li><a href="<?php echo $base_path; ?>blog" class="text-[#bbb] hover:text-brand-yellow text-sm transition-colors flex items-center gap-2"><i class="fa fa-chevron-right text-brand-yellow text-[10px]"></i> Blog</a></li>
          <li><a href="<?php echo $base_path; ?>contact" class="text-[#bbb] hover:text-brand-yellow text-sm transition-colors flex items-center gap-2"><i class="fa fa-chevron-right text-brand-yellow text-[10px]"></i> Contact Us</a></li>
          <!-- <li><a href="<?php echo $base_path; ?>careers" class="text-[#bbb] hover:text-brand-yellow text-sm transition-colors flex items-center gap-2"><i class="fa fa-chevron-right text-brand-yellow text-[10px]"></i> Careers</a></li> -->
        </ul>
      </div>

      <!-- Services -->
      <div>
        <h4 class="font-display font-bold text-white uppercase text-sm tracking-wider mb-5 flex items-center gap-2 hover:text-brand-yellow transition-colors duration-300">
          <span class="w-4 h-0.5 bg-brand-yellow inline-block"></span> Our Services
        </h4>
        <ul class="space-y-2.5">
          <li><a href="<?php echo $base_path; ?>security-guards-services" class="text-[#bbb] hover:text-brand-yellow text-sm transition-colors flex items-center gap-2"><i class="fa fa-shield-alt text-brand-yellow text-[10px]"></i> Security Guard Services</a></li>
          <li><a href="<?php echo $base_path; ?>facility-management/housekeeping" class="text-[#bbb] hover:text-brand-yellow text-sm transition-colors flex items-center gap-2"><i class="fa fa-shield-alt text-brand-yellow text-[10px]"></i> Housekeeping Services</a></li>
          <li><a href="<?php echo $base_path; ?>manpower-services" class="text-[#bbb] hover:text-brand-yellow text-sm transition-colors flex items-center gap-2"><i class="fa fa-shield-alt text-brand-yellow text-[10px]"></i> Manpower Services</a></li>
          <li><a href="<?php echo $base_path; ?>facility-management/bouncers" class="text-[#bbb] hover:text-brand-yellow text-sm transition-colors flex items-center gap-2"><i class="fa fa-shield-alt text-brand-yellow text-[10px]"></i> Bouncers</a></li>
          <li><a href="<?php echo $base_path; ?>facility-management/drivers" class="text-[#bbb] hover:text-brand-yellow text-sm transition-colors flex items-center gap-2"><i class="fa fa-shield-alt text-brand-yellow text-[10px]"></i> Drivers & Chauffeurs</a></li>
          <li><a href="<?php echo $base_path; ?>facility-management/fire-safety" class="text-[#bbb] hover:text-brand-yellow text-sm transition-colors flex items-center gap-2"><i class="fa fa-shield-alt text-brand-yellow text-[10px]"></i> Fire & Safety Personnel</a></li>
          <li><a href="<?php echo $base_path; ?>technology&support/cctv-monitoring" class="text-[#bbb] hover:text-brand-yellow text-sm transition-colors flex items-center gap-2"><i class="fa fa-shield-alt text-brand-yellow text-[10px]"></i> CCTV Monitoring</a></li>
          <li><a href="<?php echo $base_path; ?>technology&support/security-audit-risk-assessment" class="text-[#bbb] hover:text-brand-yellow text-sm transition-colors flex items-center gap-2"><i class="fa fa-shield-alt text-brand-yellow text-[10px]"></i> Security Audit</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div>
        <h4 class="font-display font-bold text-white uppercase text-sm tracking-wider mb-5 flex items-center gap-2 hover:text-brand-yellow transition-colors duration-300">
          <span class="w-4 h-0.5 bg-brand-yellow inline-block"></span> Get In Touch
        </h4>
        <div class="space-y-4">
          <div class="flex gap-3 items-start">
            <div class="w-8 h-8 rounded bg-brand-yellow/70 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-map-marker-alt text-brand-dark text-xs"></i>
            </div>
            <div>
              <p class="text-[#bbb] text-sm leading-relaxed">B-41, B Block, Sector 63<br/>Noida, Uttar Pradesh 201301</p>
            </div>
          </div>
          <div class="flex gap-3 items-center">
            <div class="w-8 h-8 rounded bg-brand-yellow/70 flex items-center justify-center flex-shrink-0">
              <i class="fa fa-phone text-brand-dark text-xs"></i>
            </div>
            <a href="tel:+919430695171" class="text-[#bbb] hover:text-brand-yellow text-sm transition-colors">+91 94306 95171</a>
          </div>
          <div class="flex gap-3 items-center">
            <div class="w-8 h-8 rounded bg-brand-yellow/70 flex items-center justify-center flex-shrink-0">
              <i class="fa fa-envelope text-brand-dark text-xs"></i>
            </div>
            <a href="mailto:Info@conquerservices.com" class="text-[#bbb] hover:text-brand-yellow text-sm transition-colors">Info@conquerservices.com</a>
          </div>
          
        </div>

        <!-- WhatsApp button -->
        <a href="https://api.whatsapp.com/send?phone=9430695171" target="_blank" rel="noopener" class="mt-6 inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-semibold px-5 py-2.5 rounded text-sm transition-colors">
          <i class="fab fa-whatsapp text-base"></i> WhatsApp Enquiry
        </a>
      </div>
    </div>
  </div>

  <!-- Footer bottom bar -->
  <div class="border-t border-gray-200 py-5 bg-brand-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 flex flex-col sm:flex-row justify-between items-center gap-3">
      <p class="text-[#bbb] text-xs">All Rights Reserved. © 2026 Conquer Services</p>
      <p class="flex items-center gap-2 text-[#bbb] text-xs">Developed by<a href="https://digitalutilization.com/" target="_blank" rel="noopener noreferrer"> <img src="<?php echo $base_path; ?>assets/images/logo-bmdu.png" alt="BMDU" class="w-16 h-auto"> </a></p>
      <div class="flex gap-4 text-xs text-[#bbb]">
        <a href="<?php echo $base_path; ?>privacy-policy" class="hover:text-brand-yellow transition-colors">Privacy Policy</a>
        <span>|</span>
        <a href="<?php echo $base_path; ?>terms" class="hover:text-brand-yellow transition-colors">Terms & Conditions</a>
        <span>|</span>
        <a href="<?php echo $base_path; ?>careers" class="hover:text-brand-yellow transition-colors">Careers</a>
      </div>
    </div>
  </div>
</footer>


<!-- ══════════════════════════════════════════
     FLOATING WHATSAPP BUTTON
═══════════════════════════════════════════ -->
<a href="https://api.whatsapp.com/send?phone=9430695171" target="_blank" rel="noopener"
   class="fixed bottom-6 right-6 z-50 w-14 h-14 bg-green-500 hover:bg-green-600 text-white rounded-full flex items-center justify-center shadow-2xl shadow-green-900/50 transition-transform hover:scale-110 group"
   aria-label="WhatsApp">
  <i class="fab fa-whatsapp text-2xl"></i>
  <span class="absolute right-16 bg-brand-dark text-white text-xs font-semibold px-3 py-1.5 rounded whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none">WhatsApp Us</span>
</a>


<!-- ══════════════════════════════════════════
     SHARED JAVASCRIPT (mobile menu, sticky nav, fade-up, FAQ)
═══════════════════════════════════════════ -->
<script>
  // ── Mobile Menu ──
  const toggle   = document.getElementById('menu-toggle');
  const mobileM  = document.getElementById('mobile-menu');
  const menuIcon = document.getElementById('menu-icon');
  if (toggle) {
    toggle.addEventListener('click', () => {
      mobileM.classList.toggle('open');
      menuIcon.className = mobileM.classList.contains('open')
        ? 'fa fa-times text-xl' : 'fa fa-bars text-xl';
    });
  }

  // ── Sticky nav shadow ──
  window.addEventListener('scroll', () => {
    const nav = document.getElementById('navbar');
    if (nav) nav.classList.toggle('shadow-xl', window.scrollY > 50);
  });

  // ── Scroll fade-up ──
  const fadeEls = document.querySelectorAll('.fade-up');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); } });
  }, { threshold: 0.12 });
  fadeEls.forEach(el => observer.observe(el));

  // ── FAQ accordion (shared across all pages) ──
  function toggleFAQ(btn) {
    const body = btn.nextElementSibling;
    const icon = btn.querySelector('i');
    const isOpen = body.style.maxHeight && body.style.maxHeight !== '0px';
    document.querySelectorAll('.faq-body').forEach(b => b.style.maxHeight = '0px');
    document.querySelectorAll('.faq-toggle i').forEach(i => { i.className = 'fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300'; });
    if (!isOpen) {
      body.style.maxHeight = body.scrollHeight + 'px';
      icon.className = 'fa fa-minus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300';
    }
  }
</script>


</body>
</html>