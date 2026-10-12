<?php
/**
 * Paste complete Cloudinary secure URLs below.
 * Keep the array keys unchanged; only replace the URL values.
 */
$media = [
    'contact_hero' => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784878209/Get_In_Touch_i5g0zj.webp',
    'final_cta'    => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784879170/Lady_Security_Guards_ey5jfo.webp',
];

/**
 * Safely returns a media URL from the array.
 */
function mediaUrl(array $media, string $key): string
{
    return htmlspecialchars($media[$key] ?? '', ENT_QUOTES, 'UTF-8');
}
?>

<?php
$page_title       = "Contact Us | Security Guard & Facility Management Services - Conquer Services";
$page_description = "Need security guards, housekeeping staff, facility manpower, bouncers, drivers, fire safety personnel, or technology support across Delhi NCR? Contact Conquer Services today.";
$active_page      = "contact";
$base_path        = "";
include 'includes/header.php';
?>

<style>
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
  .quick-contact-card { transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s; }
  .quick-contact-card:hover { transform: translateY(-5px); box-shadow: 0 20px 48px rgba(0,0,0,0.10); border-color: #F2CF4A; }
  .service-pill { transition: all 0.25s; cursor: pointer; }
  .service-pill input:checked + div { background: #F2CF4A; border-color: #F2CF4A; }
  .service-pill input:checked + div .pill-icon { color: #0A0A0A; }
  .service-pill input:checked + div .pill-label { color: #0A0A0A; font-weight: 700; }
</style>

<!-- ══════════════════════════════════════════
     1. HERO SECTION — dark, image background
═══════════════════════════════════════════ -->
<section class="relative min-h-[260px] sm:min-h-[320px] md:min-h-[380px] lg:min-h-[420px] overflow-hidden bg-brand-dark flex items-center">
  <div class="absolute inset-0">
    <img src="<?= mediaUrl($media, 'contact_hero'); ?>" alt="Contact Conquer Services" fetchpriority="high" decoding="async" class="w-full h-full object-cover object-[center_30%]" />
  </div>
  <div class="page-hero-overlay absolute inset-0"></div>
  <div class="relative z-10 w-full py-10 sm:py-14 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
      
      <p class="text-brand-yellow font-semibold capitalize tracking-wide text-[12px] sm:text-base mb-2 sm:mb-3">Get In Touch</p>
      <h1 class="font-display font-black capitalize leading-tight text-white mb-3 sm:mb-4">
        <span class="text-xl sm:text-3xl md:text-4xl lg:text-5xl block">Contact Us for Security Guard</span>
        <span class="text-xl sm:text-3xl md:text-4xl lg:text-5xl text-brand-yellow block">& Facility Management Services</span>
      </h1>
      <p class="text-white/70 text-xs sm:text-base md:text-lg max-w-xl leading-relaxed">
        Need security guards, housekeeping staff, facility manpower, bouncers, drivers, fire safety personnel, or technology support? Share your requirement and our team will get in touch.
      </p>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-brand-yellow"></div>
</section>



<!-- ══════════════════════════════════════════
     3. QUICK CONTACT CARDS — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-5">

      <a href="tel:+919430695171" class="quick-contact-card bg-gray-50 border border-gray-200 rounded-2xl p-6 text-center group fade-up">
        <div class="w-14 h-14 rounded-full bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-4 transition-colors duration-300">
          <i class="fa fa-phone text-brand-dark text-xl"></i>
        </div>
        <h3 class="font-display font-bold capitalize text-brand-dark text-base mb-1">Call Us</h3>
        <p class="text-brand-dark font-semibold text-sm">+91 94306 95171</p>
        <p class="text-gray-500 text-sm mt-1">Mon–Sat, 9am–7pm</p>
      </a>

      <a href="https://api.whatsapp.com/send?phone=9430695171" target="_blank" rel="noopener" class="quick-contact-card bg-gray-50 border border-gray-200 hover:border-green-400 rounded-2xl p-6 text-center group fade-up" style="animation-delay:0.05s">
        <div class="w-14 h-14 rounded-full bg-green-500/15 group-hover:bg-green-500 flex items-center justify-center mx-auto mb-4 transition-colors duration-300">
          <i class="fab fa-whatsapp text-green-600 group-hover:text-white text-2xl transition-colors duration-300"></i>
        </div>
        <h3 class="font-display font-bold capitalize text-brand-dark text-base mb-1">WhatsApp</h3>
        <p class="text-green-600 font-semibold text-sm">+91 94306 95171</p>
        <p class="text-gray-500 text-sm mt-1">Quick response guaranteed</p>
      </a>

      <a href="mailto:Info@conquerservices.com" class="quick-contact-card bg-gray-50 border border-gray-200 rounded-2xl p-6 text-center group fade-up" style="animation-delay:0.1s">
        <div class="w-14 h-14 rounded-full bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-4 transition-colors duration-300">
          <i class="fa fa-envelope text-brand-dark text-xl"></i>
        </div>
        <h3 class="font-display font-bold capitalize text-brand-dark text-base mb-1">Email Us</h3>
        <p class="text-brand-dark font-semibold text-xs break-all">Info@conquerservices.com</p>
        <p class="text-gray-500 text-sm mt-1">Response within 24 hours</p>
      </a>

      <div class="quick-contact-card bg-gray-50 border border-gray-200 rounded-2xl p-6 text-center group fade-up" style="animation-delay:0.15s">
        <div class="w-14 h-14 rounded-full bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-4 transition-colors duration-300">
          <i class="fa fa-map-marker-alt text-brand-dark text-xl"></i>
        </div>
        <h3 class="font-display font-bold capitalize text-brand-dark text-base mb-1">Office Address</h3>
        <p class="text-gray-500 text-sm leading-relaxed">B-41, B Block, Sector 63<br/>Noida, UP 201301</p>
      </div>

      <div class="quick-contact-card bg-gray-50 border border-gray-200 rounded-2xl p-6 text-center group fade-up" style="animation-delay:0.2s">
        <div class="w-14 h-14 rounded-full bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-4 transition-colors duration-300">
          <i class="fa fa-clock text-brand-dark text-xl"></i>
        </div>
        <h3 class="font-display font-bold capitalize text-brand-dark text-base mb-1">Business Hours</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Mon–Sat: 9am–7pm<br/>24/7 Ops Support</p>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     2 & 4. CONTACT FORM + SERVICE SELECTION — light gray
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-5 gap-12">

      <!-- FORM — 3 cols -->
      <div class="lg:col-span-3 fade-up">
        <p class="text-brand-dark font-semibold capitalize tracking-wide text-base mb-3">Send Enquiry</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark leading-none mb-3">
          Share Your<br/><span style="color:#C9A91E;">Requirement</span>
        </h2>
        <div class="y-divider-center mb-7"></div>

       <form id="contact-form" action="includes/contact.php" method="POST" class="bg-white border border-gray-200 rounded-2xl p-6 sm:p-8 space-y-6" novalidate>
  <input type="hidden" name="form_type" value="contact_enquiry" />

  <!-- 4. Service Selection Section -->
  <div>
    <label class="text-gray-500 text-sm font-semibold capitalize tracking-wide mb-1.5 block">Service Required *</label>
    <select name="service" id="service-select" required class="input-field">
      <option value="">Select a service</option>
      <option value="Security Guards">Security Guards</option>
      <option value="Facility Management">Facility Management</option>
      <option value="Housekeeping">Housekeeping</option>
      <option value="Bouncers">Bouncers</option>
      <option value="Drivers">Drivers</option>
      <option value="Fire Safety Staff">Fire Safety Staff</option>
      <option value="CCTV Monitoring">CCTV Monitoring</option>
      <option value="Security Audit">Security Audit</option>
      <option value="Patrolling/QRT">Patrolling/QRT</option>
    </select>
    <p id="service-error" class="text-red-500 text-xs mt-2 hidden">Please select a service.</p>
  </div>

  <!-- Name / Phone -->
  <div class="grid sm:grid-cols-2 gap-4">
    <div>
      <label class="text-gray-500 text-sm font-semibold capitalize tracking-wide mb-1.5 block">Name *</label>
      <input type="text" name="name" required placeholder="Your full name" class="input-field" />
    </div>
    <div>
      <label class="text-gray-500 text-sm font-semibold capitalize tracking-wide mb-1.5 block">Phone *</label>
      <input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX" class="input-field" />
    </div>
  </div>

  <!-- Email / Company -->
  <div class="grid sm:grid-cols-2 gap-4">
    <div>
      <label class="text-gray-500 text-sm font-semibold capitalize tracking-wide mb-1.5 block">Email *</label>
      <input type="email" name="email" required placeholder="you@company.com" class="input-field" />
    </div>
    <div>
      <label class="text-gray-500 text-sm font-semibold capitalize tracking-wide mb-1.5 block">Company / Society Name</label>
      <input type="text" name="company" placeholder="Your organisation" class="input-field" />
    </div>
  </div>

  <!-- Location / Guards Count -->
  <div class="grid sm:grid-cols-2 gap-4">
    <div>
      <label class="text-gray-500 text-sm font-semibold capitalize tracking-wide mb-1.5 block">Location *</label>
      <select name="location" required class="input-field">
        <option value="">Select NCR area</option>
        <option>Delhi</option>
        <option>Noida</option>
        <option>Greater Noida</option>
        <option>Gurgaon</option>
        <option>Faridabad</option>
        <option>Ghaziabad</option>
        <option>Manesar</option>
        <option>Sonipat</option>
        <option>Bahadurgarh</option>
        <option>Other NCR Area</option>
      </select>
    </div>
    <div>
      <label class="text-gray-500 text-sm font-semibold capitalize tracking-wide mb-1.5 block">Number of Guards / Staff Required</label>
      <select name="guards_count" class="input-field">
        <option value="">Select approx. count</option>
        <option>1–2 staff</option>
        <option>3–5 staff</option>
        <option>6–10 staff</option>
        <option>11–20 staff</option>
        <option>20+ staff</option>
        <option>Not sure yet</option>
      </select>
    </div>
  </div>

  <!-- Preferred Duty Hours -->
  <div>
    <label class="text-gray-500 text-sm font-semibold capitalize tracking-wide mb-1.5 block">Preferred Duty Hours</label>
    <div class="flex flex-wrap gap-2">
      <label class="flex items-center gap-2 bg-gray-50 border border-gray-300 hover:border-brand-yellow rounded-lg px-4 py-2.5 cursor-pointer transition-colors">
        <input type="radio" name="duty_hours" value="Day Shift (8hrs)" class="accent-yellow-400" checked /> <span class="text-brand-dark text-sm font-medium">Day Shift (8hr)</span>
      </label>
      <label class="flex items-center gap-2 bg-gray-50 border border-gray-300 hover:border-brand-yellow rounded-lg px-4 py-2.5 cursor-pointer transition-colors">
        <input type="radio" name="duty_hours" value="Night Shift (8hrs)" class="accent-yellow-400" /> <span class="text-brand-dark text-sm font-medium">Night Shift (8hr)</span>
      </label>
      <label class="flex items-center gap-2 bg-gray-50 border border-gray-300 hover:border-brand-yellow rounded-lg px-4 py-2.5 cursor-pointer transition-colors">
        <input type="radio" name="duty_hours" value="12-Hour Duty" class="accent-yellow-400" /> <span class="text-brand-dark text-sm font-medium">12-Hour</span>
      </label>
      <label class="flex items-center gap-2 bg-gray-50 border border-gray-300 hover:border-brand-yellow rounded-lg px-4 py-2.5 cursor-pointer transition-colors">
        <input type="radio" name="duty_hours" value="24-Hour Duty" class="accent-yellow-400" /> <span class="text-brand-dark text-sm font-medium">24-Hour</span>
      </label>
    </div>
  </div>

  <!-- Message -->
  <div>
    <label class="text-gray-500 text-sm font-semibold capitalize tracking-wide mb-1.5 block">Message</label>
    <textarea name="message" rows="4" placeholder="Describe your requirement, site details, timeline, or any specific needs..." class="input-field resize-none"></textarea>
  </div>

  <button type="submit" id="submit-btn"
    class="w-full bg-brand-dark hover:bg-gray-800 text-white font-bold py-4 rounded-lg capitalize tracking-wide text-sm transition-colors flex items-center justify-center gap-2">
    <i class="fa fa-paper-plane text-xs"></i> Send Enquiry
  </button>

  <div id="form-msg" class="hidden text-sm font-semibold text-center py-3 rounded-lg"></div>
</form>
      </div>

      <!-- INFO SIDEBAR — 2 cols -->
      <div class="lg:col-span-2 space-y-6 fade-up" style="animation-delay:0.1s">

        <div>
          <p class="text-brand-dark font-semibold capitalize tracking-wide text-base mb-3">Contact Information</p>
          <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark leading-none mb-3">
            We're Here<br/><span style="color:#C9A91E;">to Help</span>
          </h2>
          <div class="y-divider-center mb-6"></div>
          <p class="text-gray-500 text-base leading-relaxed">
            Need security guards, housekeeping staff, facility manpower, bouncers, drivers, fire safety personnel, or technology support? Share your requirement and our team will get in touch within 2 hours.
          </p>
        </div>

        <div class="space-y-4">
          <div class="flex gap-4 items-start bg-white border border-gray-200 rounded-xl p-4">
            <div class="w-10 h-10 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0">
              <i class="fa fa-phone text-brand-dark text-sm"></i>
            </div>
            <div>
              <div class="text-gray-500 text-base capitalize tracking-wide mb-0.5">Phone</div>
              <a href="tel:+919430695171" class="text-brand-dark font-semibold text-base hover:text-yellow-600 transition-colors">+91 94306 95171</a>
              <div class="text-gray-500 text-sm mt-0.5">Mon–Sat, 9am–7pm IST</div>
            </div>
          </div>

          <div class="flex gap-4 items-start bg-white border border-gray-200 rounded-xl p-4">
            <div class="w-10 h-10 rounded-lg bg-green-500/15 flex items-center justify-center flex-shrink-0">
              <i class="fab fa-whatsapp text-green-600 text-lg"></i>
            </div>
            <div>
              <div class="text-gray-500 text-base capitalize tracking-wide mb-0.5">WhatsApp</div>
              <a href="https://api.whatsapp.com/send?phone=9430695171" target="_blank" rel="noopener" class="text-brand-dark font-semibold text-base hover:text-green-600 transition-colors">+91 94306 95171</a>
              <div class="text-gray-500 text-sm mt-0.5">Quick response guaranteed</div>
            </div>
          </div>

          <div class="flex gap-4 items-start bg-white border border-gray-200 rounded-xl p-4">
            <div class="w-10 h-10 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0">
              <i class="fa fa-envelope text-brand-dark text-sm"></i>
            </div>
            <div>
              <div class="text-gray-500 text-base capitalize tracking-wide mb-0.5">Email</div>
              <a href="mailto:Info@conquerservices.com" class="text-brand-dark font-semibold text-base hover:text-yellow-600 transition-colors break-all">Info@conquerservices.com</a>
              <div class="text-gray-500 text-sm mt-0.5">Reply within 24 hours</div>
            </div>
          </div>

          <div class="flex gap-4 items-start bg-white border border-gray-200 rounded-xl p-4">
            <div class="w-10 h-10 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0">
              <i class="fa fa-map-marker-alt text-brand-dark text-sm"></i>
            </div>
            <div>
              <div class="text-gray-500 text-base capitalize tracking-wide mb-0.5">Office Address</div>
              <div class="text-brand-dark font-semibold text-base">B-41, B Block, Sector 63</div>
              <div class="text-gray-500 text-sm mt-0.5">Noida, Uttar Pradesh 201301</div>
            </div>
          </div>
        </div>

        <!-- Business Hours table -->
        <div class="bg-white border border-gray-200 rounded-xl p-5">
          <h4 class="font-display font-bold capitalize text-brand-dark text-base mb-4 flex items-center gap-2">
            <i class="fa fa-clock text-brand-dark text-base"></i> Business Hours
          </h4>
          <div class="space-y-2.5 text-base">
            <div class="flex justify-between items-center border-b border-gray-100 pb-2">
              <span class="text-gray-500">Monday – Friday</span>
              <span class="text-brand-dark font-semibold">9:00 AM – 7:00 PM</span>
            </div>
            <div class="flex justify-between items-center border-b border-gray-100 pb-2">
              <span class="text-gray-500">Saturday</span>
              <span class="text-brand-dark font-semibold">9:00 AM – 5:00 PM</span>
            </div>
            <div class="flex justify-between items-center border-b border-gray-100 pb-2">
              <span class="text-gray-500">Sunday</span>
              <span class="text-gray-500">Closed (emergencies: WhatsApp)</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-gray-500">24/7 Operations Support</span>
              <span class="text-yellow-600 font-semibold">Available</span>
            </div>
          </div>
        </div>

        <!-- Social -->
        <div>
          <h4 class="font-display font-bold capitalize text-brand-dark text-base tracking-wide mb-3">Follow Us</h4>
          <div class="flex gap-3 flex-wrap">
            <a href="https://www.facebook.com/profile.php?id=61585709354745" target="_blank" rel="noopener"
              class="flex items-center gap-2 bg-white border border-gray-200 hover:border-brand-yellow hover:bg-brand-yellow/10 rounded-lg px-4 py-2.5 text-sm text-gray-500 hover:text-brand-dark transition-all">
              <i class="fab fa-facebook-f text-brand-dark text-sm"></i> Facebook
            </a>
            <a href="https://www.instagram.com/conquersecurity_in/" target="_blank" rel="noopener"
              class="flex items-center gap-2 bg-white border border-gray-200 hover:border-brand-yellow hover:bg-brand-yellow/10 rounded-lg px-4 py-2.5 text-sm text-gray-500 hover:text-brand-dark transition-all">
              <i class="fab fa-instagram text-brand-dark text-sm"></i> Instagram
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>



<!-- ══════════════════════════════════════════
     5. LOCATION COVERAGE — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-wide text-base mb-2">Where We Serve</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark mb-1">Delhi NCR Coverage</h2>
      <div class="y-divider-center mx-auto mt-3"></div>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-3 fade-up">
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-3 text-center"><i class="fa fa-map-marker-alt text-brand-dark mb-1.5 block"></i><span class="text-brand-dark text-base font-semibold">Delhi</span></div>
      <div class="bg-gray-50 border border-gray-200 hover:border-brand-yellow rounded-xl p-3 text-center transition-colors"><i class="fa fa-map-marker-alt text-brand-dark mb-1.5 block"></i><span class="text-brand-dark text-base font-semibold">Noida</span></div>
      <div class="bg-gray-50 border border-gray-200 hover:border-brand-yellow rounded-xl p-3 text-center transition-colors"><i class="fa fa-map-marker-alt text-brand-dark mb-1.5 block"></i><span class="text-brand-dark text-base font-semibold">Greater Noida</span></div>
      <div class="bg-gray-50 border border-gray-200 hover:border-brand-yellow rounded-xl p-3 text-center transition-colors"><i class="fa fa-map-marker-alt text-brand-dark mb-1.5 block"></i><span class="text-brand-dark text-base font-semibold">Gurgaon</span></div>
      <div class="bg-gray-50 border border-gray-200 hover:border-brand-yellow rounded-xl p-3 text-center transition-colors"><i class="fa fa-map-marker-alt text-brand-dark mb-1.5 block"></i><span class="text-brand-dark text-base font-semibold">Faridabad</span></div>
      <div class="bg-gray-50 border border-gray-200 hover:border-brand-yellow rounded-xl p-3 text-center transition-colors"><i class="fa fa-map-marker-alt text-brand-dark mb-1.5 block"></i><span class="text-brand-dark text-base font-semibold">Ghaziabad</span></div>
      <div class="bg-gray-50 border border-gray-200 hover:border-brand-yellow rounded-xl p-3 text-center transition-colors"><i class="fa fa-map-marker-alt text-brand-dark mb-1.5 block"></i><span class="text-brand-dark text-base font-semibold">Sonipat</span></div>
      <div class="bg-gray-50 border border-gray-200 hover:border-brand-yellow rounded-xl p-3 text-center transition-colors"><i class="fa fa-map-marker-alt text-brand-dark mb-1.5 block"></i><span class="text-brand-dark text-base font-semibold">Manesar</span></div>
      <div class="bg-gray-50 border border-gray-200 hover:border-brand-yellow rounded-xl p-3 text-center transition-colors"><i class="fa fa-map-marker-alt text-brand-dark mb-1.5 block"></i><span class="text-brand-dark text-base font-semibold">Bahadurgarh</span></div>
      <div class="bg-brand-yellow/15 border border-brand-yellow/40 rounded-xl p-3 text-center"><i class="fa fa-plus text-brand-dark mb-1.5 block"></i><span class="text-brand-dark text-base font-semibold">Other NCR</span></div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     6. GOOGLE MAP — light gray
═══════════════════════════════════════════ -->
<section class="bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 pb-16 sm:pb-20">
    <div class="text-center mb-8 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-wide text-base ">Find Us</p>
      <h2 class="font-display font-black capitalize text-3xl text-brand-dark">Our Office Location</h2>
    </div>
    <div class="rounded-2xl overflow-hidden border border-gray-200 fade-up shadow-sm" style="height: 400px;">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.2596!2d77.3731!3d28.6275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5b6b41a1e7f%3A0x1!2sB-41%2C+B+Block%2C+Sector+63%2C+Noida%2C+UP+201301!5e0!3m2!1sen!2sin!4v1"
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
        title="Conquer Services Office Location — Sector 63, Noida">
      </iframe>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     8. FAQs — WHITE
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-white">
  <div class="max-w-3xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-wide text-base mb-2">Common Questions</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark mb-1">Contact FAQs</h2>
      <div class="y-divider-center mx-auto mt-4"></div>
    </div>
    <div class="space-y-3">
      <div class="bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">How soon can you deploy staff?</span>
          <i class="fa fa-plus text-brand-dark text-base flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-base leading-relaxed">We maintain a ready pool of trained and verified staff. Depending on your location and requirement size, deployment can typically begin within 24–72 hours of agreement confirmation.</p>
        </div>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.05s">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you provide staff in my location?</span>
          <i class="fa fa-plus text-brand-dark text-base flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-base leading-relaxed">We cover all major areas of Delhi NCR including Delhi, Noida, Greater Noida, Gurgaon, Faridabad, Ghaziabad, Manesar, Sonipat, and Bahadurgarh. Contact us to confirm availability in your specific location.</p>
        </div>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.1s">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can I get a site visit before finalising?</span>
          <i class="fa fa-plus text-brand-dark text-base flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. Our team will visit your site to assess security needs, map entry/exit points, plan guard posts, and create a site-specific duty chart before any deployment begins.</p>
        </div>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.15s">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Are guards and staff verified?</span>
          <i class="fa fa-plus text-brand-dark text-base flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. All staff undergo ID verification, address verification, police verification support, document checks, and work history review before being cleared for deployment by our supervisor team.</p>
        </div>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.2s">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you offer monthly contracts?</span>
          <i class="fa fa-plus text-brand-dark text-base flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. We offer flexible engagement options — monthly contracts, annual agreements, event-based deployments, and emergency replacements. Contact us to discuss the option that best suits your requirement.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     FINAL CTA — YELLOW
═══════════════════════════════════════════ -->

<section class="relative py-8 sm:py-10 md:py-12 overflow-hidden bg-brand-white">
  <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 fade-up">
    <div class="bg-white rounded-2xl shadow-2xl overflow-hidden flex flex-col md:flex-row">

      <!-- Image Section -->
      <div class="md:w-2/5 w-full">
        <img
          src="<?= mediaUrl($media, 'final_cta'); ?>"
          alt="Professional security guard on duty"
          loading="lazy"
          decoding="async"
          sizes="(max-width: 767px) 100vw, 40vw"
          class="h-40 sm:h-48 md:h-full w-full object-cover"
        />
      </div>

      <!-- Content Section -->
      <div class="md:w-3/5 w-full p-5 sm:p-6 md:p-8 flex flex-col justify-center text-center md:text-left">
       
        <h2 class="font-display font-black capitalize text-xl sm:text-2xl md:text-3xl text-brand-dark leading-tight mb-2 sm:mb-3">
          Still Have Questions?
        </h2>
        <p class="text-gray-500 text-sm sm:text-base mb-4 sm:mb-5 max-w-md mx-auto md:mx-0">
          Call us directly or send a WhatsApp message — our team responds quickly to every enquiry.
        </p>
        <div class="flex flex-wrap justify-center md:justify-start gap-2.5 sm:gap-3">
          <a href="tel:+919430695171" class="bg-brand-dark hover:bg-gray-800 text-white font-bold px-8 py-3.5 rounded capitalize tracking-wide text-sm transition-colors shadow-lg flex items-center gap-2">
        <i class="fa fa-phone"></i> +91 94306 95171
      </a>
      <a href="https://api.whatsapp.com/send?phone=9430695171" target="_blank" rel="noopener" class="bg-green-600 hover:bg-green-700 text-white font-bold px-8 py-3.5 rounded capitalize tracking-wide text-sm transition-colors shadow-lg flex items-center gap-2">
        <i class="fab fa-whatsapp"></i> WhatsApp Us
      </a>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
  // Service pill selector
  function selectService(input) {
    document.querySelectorAll('.service-pill > div').forEach(d => {
      d.classList.remove('bg-brand-yellow');
      d.style.background = '';
      d.style.borderColor = '';
    });
    const wrapper = input.nextElementSibling;
    wrapper.style.background = '#F2CF4A';
    wrapper.style.borderColor = '#F2CF4A';
    document.getElementById('service-hidden').value = input.value;
    document.getElementById('service-error').classList.add('hidden');
  }

  // Form submit with AJAX
  document.getElementById('contact-form').addEventListener('submit', async function(e) {
    e.preventDefault();

    if (!document.getElementById('service-hidden').value) {
      document.getElementById('service-error').classList.remove('hidden');
      document.getElementById('service-error').scrollIntoView({ behavior: 'smooth', block: 'center' });
      return;
    }

    const btn = document.getElementById('submit-btn');
    const msg = document.getElementById('form-msg');
    btn.innerHTML = '<i class="fa fa-spinner fa-spin text-xs"></i> Sending...';
    btn.disabled = true;

    try {
      const res = await fetch(this.action, { method: 'POST', body: new FormData(this) });
      const data = await res.json();
      msg.classList.remove('hidden');
      if (data.success) {
        msg.className = 'text-sm font-semibold text-center py-3 rounded-lg bg-green-50 text-green-700 border border-green-300';
        msg.textContent = '✓ ' + data.message;
        this.reset();
        document.querySelectorAll('.service-pill > div').forEach(d => { d.style.background = ''; d.style.borderColor = ''; });
        document.getElementById('service-hidden').value = '';
      } else {
        msg.className = 'text-sm font-semibold text-center py-3 rounded-lg bg-red-50 text-red-700 border border-red-300';
        msg.textContent = '✕ ' + data.message;
      }
    } catch {
      msg.classList.remove('hidden');
      msg.className = 'text-sm font-semibold text-center py-3 rounded-lg bg-yellow-50 text-yellow-700 border border-yellow-300';
      msg.textContent = 'Call us directly: +91 94306 95171';
    }
    btn.innerHTML = '<i class="fa fa-paper-plane text-xs"></i> Send Enquiry';
    btn.disabled = false;
  });
</script>

<?php include 'includes/footer.php'; ?>