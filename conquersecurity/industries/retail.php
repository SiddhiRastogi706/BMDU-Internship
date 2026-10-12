<?php
/**
 * Paste complete Cloudinary secure URLs below.
 * Keep the array keys unchanged; only replace the URL values.
 */
$media = [
    'hero_banner'    => 'PASTE_CLOUDINARY_IMAGE_URL_HERE',
    'solution_image' => 'PASTE_CLOUDINARY_IMAGE_URL_HERE',
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
/* ════════════════════════════════════════════════════════════
   INDUSTRY PAGE TEMPLATE (RESPONSIVE)
   Duplicate this file for every industry. Only the variables
   below need to change — the markup stays identical.
   This instance is filled in for: RETAIL STORES & MALLS
═══════════════════════════════════════════════════════════ */

$industry_name        = "Retail Stores & Malls";
$industry_slug        = "retail";
$industry_type        = "retail stores, showrooms, and shopping malls";
$hero_image           = $media['hero_banner'];
$hero_image_alt       = "Security guard on duty at a retail mall entrance";
$lead_magnet_title    = "Retail Loss Prevention and Crowd Control Checklist";
$lead_magnet_offer    = "Get a practical checklist to review shoplifting prevention, entry control, and crowd management for your store or mall.";

$page_title       = "$industry_name Security Guard Services in Delhi NCR | Conquer Services";
$page_description = "Professional security guards and supervisors for $industry_type, designed to protect customers, staff, merchandise, and daily operations across Delhi NCR.";
$active_page      = "industries";
$base_path        = "../";
include '../includes/header.php';
?>

<style>
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }

  /* ---- Responsive helpers ---- */
  @media (max-width: 640px) {
    .y-divider-center { width: 44px; height: 3px; }
  }

  /* Mobile stacked "table" for deployment section */
  .deploy-table-desktop { display: none; }
  .deploy-card-mobile { display: block; }
  @media (min-width: 640px) {
    .deploy-table-desktop { display: table; width: 100%; }
    .deploy-card-mobile { display: none; }
  }
</style>

<!-- ══════════════════════════════════════════
     1. HERO SECTION
═══════════════════════════════════════════ -->
<section class="relative min-h-[320px] sm:min-h-[360px] md:min-h-[400px] lg:min-h-[420px] overflow-hidden bg-brand-dark py-10 sm:py-0">
  <img src="<?= mediaUrl($media, 'hero_banner'); ?>" alt="<?php echo $hero_image_alt; ?>" fetchpriority="high" decoding="async" class="absolute inset-0 w-full h-full object-cover" style="object-position: 100% 35%;" />
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.26) 0%, rgba(10,10,10,0.25) 30%);"></div>
  <div class="absolute inset-0 bg-gradient-to-r from-brand-dark via-brand-dark/60 to-transparent"></div>

  <div class="relative z-10 h-full flex items-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
      <div class="max-w-2xl">
        <p class="text-brand-yellow font-display font-semibold text-xs sm:text-base capitalize tracking-widest mb-3 sm:mb-4 fade-up">
          Industry Security Services
        </p>
        <h1 class="font-display font-black capitalize leading-tight mb-5 sm:mb-6 fade-up" style="animation-delay:0.1s">
          <span class="text-2xl sm:text-4xl md:text-5xl text-white font-bold block"><?php echo $industry_name; ?></span>
          <span class="text-2xl sm:text-4xl md:text-5xl text-brand-yellow font-bold block">Security Guards in Delhi NCR</span>
        </h1>
        <p class="text-white/70 text-sm sm:text-lg md:text-lg leading-relaxed mb-6 sm:mb-8 fade-up max-w-xl" style="animation-delay:0.2s">
          Professional security guards and supervisors for <?php echo $industry_type; ?>, designed to protect customers, staff, merchandise, and daily operations.
        </p>
        <div class="flex flex-row flex-wrap gap-2.5 sm:gap-3 fade-up" style="animation-delay:0.3s">
          <a href="../contact" class="flex-1 sm:flex-none text-center whitespace-nowrap bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold px-4 sm:px-7 py-3 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-base transition-colors shadow-lg">
            Get Free Site Assessment
          </a>
          <a href="tel:+919430695171" class="flex-1 sm:flex-none justify-center whitespace-nowrap flex items-center gap-2 border border-brand-yellow text-brand-yellow hover:bg-brand-yellow hover:text-brand-dark font-semibold px-4 sm:px-7 py-3 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-base transition-colors">
            <i class="fa fa-phone"></i> Call Now
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     2. INDUSTRY SECURITY CHALLENGES — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">The Problem</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl font-bold text-brand-dark mb-4">Security Challenges for<br> <?php echo $industry_name; ?></h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 max-w-2xl mx-auto text-lg leading-relaxed">
        High footfall and open browsing formats make retail spaces especially prone to loss — common gaps we see, and why a structured guard deployment matters.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-door-open text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Unauthorised Entry</h3>
        <p class="text-gray-500 text-base leading-relaxed">Multiple entrances and open-format layouts make it hard to control who walks in.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-bag-shopping text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Shoplifting & Pilferage</h3>
        <p class="text-gray-500 text-base leading-relaxed">Open shelving and self-browsing formats increase the risk of theft without active monitoring.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-id-badge text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Visitor Mismanagement</h3>
        <p class="text-gray-500 text-base leading-relaxed">High customer volume makes it difficult to track suspicious behaviour without a process.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-square-parking text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Parking Issues</h3>
        <p class="text-gray-500 text-base leading-relaxed">Weekend and peak-hour footfall can overwhelm parking areas without proper management.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.2s">
        <i class="fa fa-truck-medical text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Emergency Response Gaps</h3>
        <p class="text-gray-500 text-base leading-relaxed">Fire, medical incidents, or altercations need immediate, coordinated response in crowded stores.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.25s">
        <i class="fa fa-moon text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Night Security Risks</h3>
        <p class="text-gray-500 text-base leading-relaxed">Stores and malls remain vulnerable to break-ins and tampering after closing hours.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-dolly text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Material & Stock Movement Issues</h3>
        <p class="text-gray-500 text-base leading-relaxed">Inventory and delivery movement without verification or logging increases pilferage risk.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-people-group text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Crowd Control Issues</h3>
        <p class="text-gray-500 text-base leading-relaxed">Sale periods, festive rush, and weekend crowds can overwhelm an understaffed store or mall.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-shield-halved text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Staff & Customer Safety</h3>
        <p class="text-gray-500 text-base leading-relaxed">Without visible, trained security, staff and customers can feel and be unsafe.</p>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     3. OUR SECURITY SOLUTION — light gray
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
    <div>
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3 fade-up">The Solution</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl font-bold text-brand-dark mb-4 fade-up" style="animation-delay:0.05s">
        Our Security<br/>Deployment Model
      </h2>
      <div class="y-divider-center mb-5 fade-up" style="animation-delay:0.1s"></div>
      <p class="text-gray-500 text-lg leading-relaxed mb-8 fade-up" style="animation-delay:0.1s">
        A layered deployment that covers every entry point, aisle, and incident scenario at your <?php echo $industry_type; ?>.
      </p>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.1s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-door-closed text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-lg">Entry Gate Security</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.12s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-user-check text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-lg">Visitor Verification</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.14s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-route text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-lg">Patrol Points</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.16s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-video text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-lg">CCTV Coordination</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.18s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-key text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-lg">Access Control Support</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.2s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-truck-medical text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-lg">Emergency Response</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.22s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-clipboard-list text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-lg">Reporting & Escalation</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.24s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-user-shield text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-lg">Supervisor Checks</h4></div>
        </div>
      </div>
    </div>

    <div class="fade-up order-first lg:order-last">
      <img src="<?= mediaUrl($media, 'solution_image'); ?>" alt="Security guard stationed at a retail store entrance" loading="lazy" decoding="async" sizes="(max-width: 1023px) 100vw, 50vw" class="w-full h-56 sm:h-72 md:h-96 lg:h-full object-cover rounded-2xl shadow-lg" />
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     4. RECOMMENDED MANPOWER DEPLOYMENT — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-20 bg-white">
  <div class="max-w-5xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Quick Reference</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl font-bold text-brand-dark mb-4">Recommended Manpower Deployment</h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 max-w-xl mx-auto text-lg leading-relaxed">
        A general guide — final deployment is confirmed after a free site visit.
      </p>
    </div>

    <!-- Desktop / tablet table -->
    <div class="overflow-x-auto fade-up">
      <table class="deploy-table-desktop text-base border border-gray-200 rounded-xl overflow-hidden">
        <thead>
          <tr class="bg-brand-dark text-white text-left">
            <th class="px-6 py-4 font-semibold capitalize text-lg tracking-wider">Site Type</th>
            <th class="px-6 py-4 font-semibold capitalize text-lg tracking-wider">Suggested Deployment</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr class="bg-gray-50">
            <td class="px-6 py-4 font-semibold text-brand-dark">Small Site <span class="block text-xs font-normal text-gray-400">(Single Store / Showroom)</span></td>
            <td class="px-6 py-4 text-gray-600">1 to 2 guards</td>
          </tr>
          <tr class="bg-white">
            <td class="px-6 py-4 font-semibold text-brand-dark">Medium Site <span class="block text-xs font-normal text-gray-400">(Large Format Store / Supermarket)</span></td>
            <td class="px-6 py-4 text-gray-600">2 to 6 guards</td>
          </tr>
          <tr class="bg-gray-50">
            <td class="px-6 py-4 font-semibold text-brand-dark">Large Site <span class="block text-xs font-normal text-gray-400">(Shopping Mall)</span></td>
            <td class="px-6 py-4 text-gray-600">Multiple guards with supervisor</td>
          </tr>
          <tr class="bg-white">
            <td class="px-6 py-4 font-semibold text-brand-dark">High-Risk Site <span class="block text-xs font-normal text-gray-400">(Peak Sale / Festive Rush)</span></td>
            <td class="px-6 py-4 text-gray-600">Guards, supervisor, CCTV, QRT support</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Mobile stacked cards (replaces table below sm breakpoint) -->
    <div class="deploy-card-mobile space-y-3 fade-up">
      <div class="border border-gray-200 rounded-xl p-4 bg-gray-50">
        <p class="font-semibold text-brand-dark text-sm">Small Site</p>
        <p class="text-sm text-gray-400 mb-2">Single Store / Showroom</p>
        <p class="text-sm text-gray-600"><span class="font-semibold text-brand-dark">Deployment:</span> 1 to 2 guards</p>
      </div>
      <div class="border border-gray-200 rounded-xl p-4 bg-white">
        <p class="font-semibold text-brand-dark text-sm">Medium Site</p>
        <p class="text-sm text-gray-400 mb-2">Large Format Store / Supermarket</p>
        <p class="text-sm text-gray-600"><span class="font-semibold text-brand-dark">Deployment:</span> 2 to 6 guards</p>
      </div>
      <div class="border border-gray-200 rounded-xl p-4 bg-gray-50">
        <p class="font-semibold text-brand-dark text-sm">Large Site</p>
        <p class="text-sm text-gray-400 mb-2">Shopping Mall</p>
        <p class="text-sm text-gray-600"><span class="font-semibold text-brand-dark">Deployment:</span> Multiple guards with supervisor</p>
      </div>
      <div class="border border-gray-200 rounded-xl p-4 bg-white">
        <p class="font-semibold text-brand-dark text-sm">High-Risk Site</p>
        <p class="text-sm text-gray-400 mb-2">Peak Sale / Festive Rush</p>
        <p class="text-sm text-gray-600"><span class="font-semibold text-brand-dark">Deployment:</span> Guards, supervisor, CCTV, QRT support</p>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     5. DUTIES & RESPONSIBILITIES — light gray
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">On Duty</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl font-bold text-brand-dark mb-4">Duties & Responsibilities</h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 max-w-2xl mx-auto text-lg leading-relaxed">
        Day-to-day responsibilities our guards carry out at <?php echo $industry_type; ?>.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-door-open text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Entry Gate & Bag Checks</h3>
        <p class="text-gray-500 text-base leading-relaxed">Managing customer entry and conducting bag checks at store and mall entrances.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-magnifying-glass text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Aisle & Floor Monitoring</h3>
        <p class="text-gray-500 text-base leading-relaxed">Regular floor walks to deter shoplifting and spot suspicious behaviour early.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-cash-register text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Billing Counter & Exit Checks</h3>
        <p class="text-gray-500 text-base leading-relaxed">Verifying purchase receipts against merchandise at exit points.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-square-parking text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Parking & Vehicle Management</h3>
        <p class="text-gray-500 text-base leading-relaxed">Regulating vehicle entry, exit, and parking allocation during peak hours.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-truck text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Stock Delivery & Vendor Checks</h3>
        <p class="text-gray-500 text-base leading-relaxed">Verifying and logging inventory deliveries and vendor movement at the back gate.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-video text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">CCTV Coordination</h3>
        <p class="text-gray-500 text-base leading-relaxed">Coordinating with CCTV operators to track suspicious activity across the floor.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-triangle-exclamation text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Incident & Theft Reporting</h3>
        <p class="text-gray-500 text-base leading-relaxed">Logging and escalating shoplifting attempts, disputes, or unusual activity.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-people-group text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Crowd Management During Sales</h3>
        <p class="text-gray-500 text-base leading-relaxed">Managing queues and crowd flow during sale periods and festive rush.</p>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     6. SUITABLE SERVICES — WHITE (cross-links)
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Related Services</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl font-bold text-brand-dark mb-4">Suitable Services</h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 max-w-xl mx-auto text-lg leading-relaxed">
        Services commonly combined for <?php echo $industry_type; ?> security.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
      <a href="../security-guard-services/unarmed-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-shield-alt text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-base text-brand-dark capitalize leading-tight mb-2">Unarmed Security Guards</h3>
        <div class="mt-2 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../security-guard-services/armed-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up" style="animation-delay:0.05s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-user-shield text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-base text-brand-dark capitalize leading-tight mb-2">Armed Security Guards</h3>
        <div class="mt-2 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../security-guard-services/lady-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up" style="animation-delay:0.1s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-venus text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-base text-brand-dark capitalize leading-tight mb-2">Lady Security Guards</h3>
        <div class="mt-2 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../technology&support/cctv-monitoring" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up" style="animation-delay:0.15s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-video text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-base text-brand-dark capitalize leading-tight mb-2">CCTV Monitoring</h3>
        <div class="mt-2 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../technology&support/visitor-management" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-address-card text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-base text-brand-dark capitalize leading-tight mb-2">Visitor Management</h3>
        <div class="mt-2 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../technology&support/patrolling-quick-response-team" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up" style="animation-delay:0.05s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-person-walking text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-base text-brand-dark capitalize leading-tight mb-2">Patrolling & QRT</h3>
        <div class="mt-2 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../facility-management/fire-safety" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up" style="animation-delay:0.1s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-fire-extinguisher text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-base text-brand-dark capitalize leading-tight mb-2">Fire & Safety Personnel</h3>
        <div class="mt-2 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../industries" class="service-card bg-brand-dark border border-brand-dark rounded-xl p-5 sm:p-6 group fade-up flex flex-col justify-center items-center text-center min-h-[140px]" style="animation-delay:0.15s">
        <i class="fa fa-grip text-brand-yellow text-2xl mb-3"></i>
        <h3 class="font-display font-bold text-base text-white capitalize leading-tight">View All Industries</h3>
      </a>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     7. LEAD MAGNET SECTION
═══════════════════════════════════════════ -->
<section class="relative py-14 sm:py-20 overflow-hidden bg-gray-50">
  <div class="max-w-6xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-0 bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-200 fade-up">

      <div class="p-6 sm:p-10 lg:p-12 flex flex-col justify-center">
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Free Download</p>
        <h2 class="font-display font-black capitalize text-xl sm:text-2xl md:text-3xl text-brand-dark mb-4 leading-tight">
          <?php echo $lead_magnet_title; ?>
        </h2>
        <p class="text-gray-500 text-lg leading-relaxed mb-6">
          <?php echo $lead_magnet_offer; ?>
        </p>
        <div class="space-y-3">
          <div class="flex items-center gap-3 text-lg text-gray-600"><i class="fa fa-check-circle text-brand-dark"></i> Practical, easy-to-use checklist</div>
          <div class="flex items-center gap-3 text-lg text-gray-600"><i class="fa fa-check-circle text-brand-dark"></i> Built from real retail deployments</div>
          <div class="flex items-center gap-3 text-lg text-gray-600"><i class="fa fa-check-circle text-brand-dark"></i> Free, no obligation</div>
        </div>
      </div>

      <div class="bg-brand-dark p-6 sm:p-10 lg:p-12">
        <h3 class="font-display font-bold text-white capitalize text-base sm:text-lg mb-1">Get the Free Checklist</h3>
        <p class="text-white/50 text-base mb-6">Sent straight to your inbox / WhatsApp</p>
        <form action="../includes/contact.php" method="POST" class="space-y-4">
          <input type="hidden" name="industry" value="<?php echo $industry_name; ?>" />
          <input type="text" name="name" required placeholder="Full Name" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <input type="tel" name="phone" required placeholder="Phone Number" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <input type="email" name="email" placeholder="Email Address" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <input type="text" name="company" placeholder="Store / Mall Name" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <button type="submit" class="w-full bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold py-3.5 rounded capitalize tracking-wider text-sm transition-colors">
            Download Checklist
          </button>
        </form>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     8. FAQs — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-20 bg-white">
  <div class="max-w-4xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Common Questions</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl font-bold text-brand-dark mb-4">Frequently Asked</h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="space-y-3" id="faq-container">
      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">How many guards does a retail store or mall typically need?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">It depends on store size, footfall, and layout. A single store may need 1 to 2 guards, while a large format store or mall requires multiple guards with a supervisor.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.05s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can guards help reduce shoplifting and pilferage?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. Our guards conduct regular floor walks, monitor high-risk aisles, and verify bills at exit points, working alongside your CCTV and loss-prevention systems.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.1s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you provide additional guards during sale periods or festive rush?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. We can scale up manpower temporarily during sale events, festive seasons, and other high-footfall periods, and scale back down once the rush is over.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.15s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can guards check stock deliveries and vendor entries at the back gate?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. Our guards verify and log inventory deliveries, vendor movement, and staff entries at back gates and loading areas, in addition to front-of-store duties.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.2s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you provide night security for closed stores and malls?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. Night guarding and patrol coverage are available for stores and malls after closing hours, when break-in and tampering risk is typically highest.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.25s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can your guards handle disputes between customers or staff calmly?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes, our guards are briefed on de-escalation and calm conflict handling, which is important in a customer-facing retail environment.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.3s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Will a supervisor visit our store or mall regularly?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. Supervisor checks and reporting are part of every deployment to ensure consistent duty discipline and quick resolution of any issue across shifts.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     9. FINAL CTA — YELLOW
═══════════════════════════════════════════ -->
<section class="relative py-14 sm:py-20 overflow-hidden">
  <div class="absolute inset-0 bg-brand-yellow"></div>
  <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 text-center fade-up">
    <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl font-bold text-brand-dark leading-tight sm:leading-none mb-4">
      Need Security Guards for<br/>Your Store or Mall?
    </h2>
    <p class="text-brand-dark/80 text-sm sm:text-lg mb-8 max-w-lg mx-auto">
      Get a free site assessment and a deployment plan built specifically for your retail space.
    </p>
    <div class="flex flex-row flex-wrap justify-center gap-3 sm:gap-4">
      <a href="../contact" class="flex-1 sm:flex-none text-center whitespace-nowrap bg-brand-dark text-white hover:bg-gray-800 font-bold px-4 sm:px-8 py-3 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-base transition-colors shadow-lg">
        Get Free Site Assessment
      </a>
      <a href="tel:+919430695171" class="flex-1 sm:flex-none justify-center whitespace-nowrap flex items-center gap-2 border-2 border-brand-dark/60 text-brand-dark hover:border-brand-dark font-bold px-4 sm:px-8 py-3 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-base transition-colors">
        <i class="fa fa-phone"></i> +91 94306 95171
      </a>
    </div>
  </div>
</section>

<script>
  function toggleFAQ(btn) {
    const body = btn.nextElementSibling;
    const icon = btn.querySelector('i');
    const isOpen = body.style.maxHeight && body.style.maxHeight !== '0px';

    document.querySelectorAll('.faq-body').forEach(b => { b.style.maxHeight = '0px'; });
    document.querySelectorAll('.faq-toggle i').forEach(i => i.classList.remove('rotate-45'));

    if (!isOpen) {
      body.style.maxHeight = body.scrollHeight + 'px';
      icon.classList.add('rotate-45');
    }
  }
</script>

<?php include '../includes/footer.php'; ?>