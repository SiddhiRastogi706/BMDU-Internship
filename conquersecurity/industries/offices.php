<?php
/**
 * Paste complete Cloudinary secure URLs below.
 * Keep the array keys unchanged; only replace the URL values.
 */
$media = [
    'hero_banner'      => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1785130864/Industry_Solutions_sqiywe.webp',
    'office_reception' => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784810847/Who_We_Protect1_qyqjgm.webp',
    'lead_background'  => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784805094/service2_qc7zvz.png',
];

/**
 * Safely returns a Cloudinary media URL.
 */
function mediaUrl(array $media, string $key): string
{
    return htmlspecialchars($media[$key] ?? '', ENT_QUOTES, 'UTF-8');
}
?>

<?php
$page_title       = "Corporate Office Security Services in Delhi NCR | Conquer Services";
$page_description = "Trained security guards and front-desk support for corporate offices across Delhi NCR — visitor management, access control, reception support, and 24/7 site supervision.";
$active_page      = "industries";
$base_path        = "../";
include '../includes/header.php';
?>

<style>
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
</style>

<!-- ══════════════════════════════════════════
     PAGE HERO — dark, image background
═══════════════════════════════════════════ -->
<section class="relative h-[280px] sm:h-[320px] md:h-[380px] lg:h-[420px] overflow-hidden bg-brand-dark">
  <div class="absolute inset-0">
    <img src="<?= mediaUrl($media, 'hero_banner'); ?>" alt="Corporate office security" fetchpriority="high" decoding="async" class="w-full h-full object-cover" style="object-position: 100% 35%;" />
  </div>
  <div class="page-hero-overlay absolute inset-0"></div>
  <div class="relative z-10 h-full flex flex-col justify-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
      
      <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Industry Solutions</p>
      <h1 class="font-display font-black capitalize leading-none text-white">
        <span class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl block">Corporate Office</span>
        <span class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-brand-yellow block">Security Services</span>
      </h1><p class="text-white/70 text-sm sm:text-lg max-w-2xl leading-relaxed mb-6 line-height-6">
        Professional security guards and supervisors for corporate offices, designed to protect people,
property, assets, visitors, and daily operations.
      </p>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-brand-yellow"></div>
</section>


<!-- ══════════════════════════════════════════
     INTRO — WHITE
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-14 items-center">
      <div class="fade-up">
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Built for Office Environments</p>
        <h2 class="font-display font-black capitalize text-4xl sm:text-4xl text-brand-dark leading-none mb-4">
          Professional Security<br/><span style="color:#C9A91E;">for Corporate Offices</span>
        </h2>
        <div class="y-divider-center mb-6"></div>
        <p class="text-gray-500 text-lg leading-relaxed mb-4">
          Corporate offices need security that's discreet, professional, and visitor-friendly. We deploy trained guards who manage access control, reception support, and visitor verification — without disrupting the day-to-day flow of your workplace.
        </p>
        <p class="text-gray-500 text-lg leading-relaxed mb-8">
          From single-tenant offices to multi-floor corporate towers, our teams are briefed on your specific entry protocols, employee ID systems, and emergency procedures before deployment.
        </p>
        <div class="flex flex-wrap gap-3">
          <a href="../../contact" class="bg-brand-dark hover:bg-gray-800 text-white font-bold px-7 py-3 rounded capitalize tracking-wider text-base transition-colors">Get Free Quote</a>
          <a href="../../contact" class="border-2 border-brand-dark text-brand-dark hover:bg-brand-dark hover:text-white font-semibold px-7 py-3 rounded capitalize tracking-wider text-base transition-colors">Book Site Visit</a>
        </div>
      </div>
      <div class="relative fade-up" style="animation-delay:0.1s">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="<?= mediaUrl($media, 'office_reception'); ?>" alt="Office reception security" loading="lazy" decoding="async" sizes="(max-width: 1023px) 100vw, 50vw" class="w-full h-full object-cover" />
        </div>
        <div class="absolute -bottom-5 -right-5 bg-brand-yellow rounded-2xl p-5 shadow-xl text-center">
          <div class="font-display font-black text-3xl text-brand-dark leading-none">24/7</div>
          <div class="text-brand-dark font-bold text-xs capitalize tracking-wider mt-1">Coverage</div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     CHALLENGES — light gray
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Common Risks</p>
      <h2 class="font-display font-black capitalize text-4xl sm:text-4xl text-brand-dark mb-4">Office Security<br/><span style="color:#C9A91E;">Challenges We Solve</span></h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <div class="bg-white border border-gray-200 rounded-xl p-6 fade-up">
        <i class="fa fa-user-slash text-brand-dark text-xl mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Unauthorised Entry</h4>
        <p class="text-gray-500 text-base leading-relaxed">Strict ID checks and access control to prevent unauthorised individuals from entering office floors.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-id-card text-brand-dark text-xl mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Visitor Mismanagement</h4>
        <p class="text-gray-500 text-base leading-relaxed">Structured visitor logging, host confirmation, and pass issuance at every front desk.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-car text-brand-dark text-xl mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Parking Issues</h4>
        <p class="text-gray-500 text-base leading-relaxed">Organised vehicle entry and exit management for employee and visitor parking areas.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-exclamation-triangle text-brand-dark text-xl mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Emergency Response Gaps</h4>
        <p class="text-gray-500 text-base leading-relaxed">Trained first-response procedures for fire, medical, and security incidents.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-moon text-brand-dark text-xl mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">After-Hours Security</h4>
        <p class="text-gray-500 text-base leading-relaxed">Night patrolling and access monitoring when offices are unoccupied.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-boxes text-brand-dark text-xl mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Material Movement</h4>
        <p class="text-gray-500 text-base leading-relaxed">Checks on equipment and material entering or leaving the premises.</p>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     OUR SOLUTION — WHITE
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Our Deployment Model</p>
      <h2 class="font-display font-black capitalize text-4xl sm:text-4xl text-brand-dark mb-4">How We Secure<br/><span style="color:#C9A91E;">Your Office</span></h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 text-center fade-up">
        <i class="fa fa-door-open text-brand-dark mb-2 block text-lg"></i>
        <span class="text-brand-dark text-base font-bold capitalize">Entry Gate Security</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.05s">
        <i class="fa fa-id-badge text-brand-dark mb-2 block text-lg"></i>
        <span class="text-brand-dark text-base font-bold capitalize">Visitor Verification</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.1s">
        <i class="fa fa-walking text-brand-dark mb-2 block text-lg"></i>
        <span class="text-brand-dark text-base font-bold capitalize">Patrol Points</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.15s">
        <i class="fa fa-video text-brand-dark mb-2 block text-lg"></i>
        <span class="text-brand-dark text-base font-bold capitalize">CCTV Coordination</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 text-center fade-up">
        <i class="fa fa-key text-brand-dark mb-2 block text-lg"></i>
        <span class="text-brand-dark text-base font-bold capitalize">Access Control Support</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.05s">
        <i class="fa fa-bolt text-brand-dark mb-2 block text-lg"></i>
        <span class="text-brand-dark text-base font-bold capitalize">Emergency Response</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.1s">
        <i class="fa fa-file-alt text-brand-dark mb-2 block text-lg"></i>
        <span class="text-brand-dark text-base font-bold capitalize">Reporting & Escalation</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.15s">
        <i class="fa fa-user-check text-brand-dark mb-2 block text-lg"></i>
        <span class="text-brand-dark text-base font-bold capitalize">Supervisor Checks</span>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     RECOMMENDED DEPLOYMENT TABLE — light gray
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-gray-50">
  <div class="max-w-5xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Quick Reference</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-3xl text-brand-dark mb-4">Recommended Manpower Deployment</h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="overflow-x-auto fade-up">
      <table class="w-full text-base border border-gray-200 rounded-xl overflow-hidden bg-white">
        <thead>
          <tr class="bg-brand-dark text-white text-left">
            <th class="px-6 py-4 font-semibold capitalize text-lg tracking-wider">Office Size</th>
            <th class="px-6 py-4 font-semibold capitalize text-lg tracking-wider">Suggested Deployment</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr class="bg-gray-50">
            <td class="px-6 py-4 font-semibold text-brand-dark">Small Office (1 Floor)</td>
            <td class="px-6 py-4 text-gray-600">1 guard, day shift</td>
          </tr>
          <tr class="bg-white">
            <td class="px-6 py-4 font-semibold text-brand-dark">Medium Office (2–5 Floors)</td>
            <td class="px-6 py-4 text-gray-600">2–4 guards, day & night shift</td>
          </tr>
          <tr class="bg-gray-50">
            <td class="px-6 py-4 font-semibold text-brand-dark">Corporate Tower / Campus</td>
            <td class="px-6 py-4 text-gray-600">Multiple guards with supervisor + CCTV support</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     LEAD MAGNET — DARK with image
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 relative overflow-hidden">
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.95) 0%, rgba(10,10,10,0.85) 100%), url('<?= mediaUrl($media, 'lead_background'); ?>') center/cover no-repeat;"></div>
  <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div class="fade-up">
        <p class="text-brand-yellow font-semibold capitalize tracking-widest2 text-xs mb-3">Free Resource</p>
        <h2 class="font-display font-black capitalize text-4xl sm:text-4xl text-white leading-none mb-4">
          Office Security &<br/><span class="text-brand-yellow">Visitor Management Checklist</span>
        </h2>
        <p class="text-white/70 text-base leading-relaxed mb-5">Get a practical checklist covering entry control, visitor logging, and emergency procedures for corporate offices.</p>
      </div>
      <div class="bg-white rounded-2xl p-8 fade-up" style="animation-delay:0.1s">
        <h3 class="font-display font-bold text-brand-dark capitalize text-xl mb-6">Get Free Checklist</h3>
        <form action="../../includes/contact.php" method="POST" class="space-y-4">
          <input type="hidden" name="form_type" value="office_security_checklist" />
          <div><label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Name *</label>
            <input type="text" name="name" required placeholder="Your name" class="input-field" /></div>
          <div><label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Phone *</label>
            <input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX" class="input-field" /></div>
          <div><label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Company Name</label>
            <input type="text" name="company" placeholder="Your organisation" class="input-field" /></div>
          <button type="submit" class="w-full bg-brand-dark hover:bg-gray-800 text-white font-bold py-3.5 rounded-lg capitalize tracking-wider text-sm transition-colors flex items-center justify-center gap-2">
            <i class="fa fa-download text-xs"></i> Get Free Checklist
          </button>
        </form>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     FINAL CTA — YELLOW
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-brand-yellow">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center fade-up">
    <h2 class="font-display font-black capitalize text-4xl sm:text-4xl text-brand-dark leading-none mb-4">
      Need Security for<br/>Your Corporate Office?
    </h2>
    <p class="text-brand-dark/70 text-sm sm:text-lg mb-8 max-w-lg mx-auto">
      Get a free site assessment and a tailored security deployment plan for your office.
    </p>
    <div class="flex flex-wrap justify-center gap-4">
      <a href="../../contact" class="bg-brand-dark hover:bg-gray-800 text-white font-bold px-8 py-3.5 rounded capitalize tracking-wider text-base transition-colors shadow-lg">Get Free Quote</a>
      <a href="tel:+919430695171" class="flex items-center gap-2 border-2 border-brand-dark/50 text-brand-dark hover:border-brand-dark font-bold px-8 py-3.5 rounded capitalize tracking-wider text-base transition-colors">
        <i class="fa fa-phone"></i> +91 94306 95171
      </a>
    </div>
  </div>
</section>
<?php include '../includes/footer.php'; ?>