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
   This instance is filled in for: CONSTRUCTION SITES
═══════════════════════════════════════════════════════════ */

$industry_name        = "Construction Sites";
$industry_slug        = "construction";
$industry_type        = "construction and project sites";
$hero_image           = $media['hero_banner'];
$hero_image_alt       = "Security guard on duty at a construction site gate";
$lead_magnet_title    = "Construction Site Material Protection Checklist";
$lead_magnet_offer    = "Get a practical checklist to review material security, gate control, and labour access at your construction or project site.";

$page_title       = "$industry_name Security Guard Services in Delhi NCR | Conquer Services";
$page_description = "Professional security guards and supervisors for $industry_type, designed to protect people, material, equipment, and daily operations across Delhi NCR.";
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
  <img src="<?= mediaUrl($media, 'hero_banner'); ?>" alt="<?php echo $hero_image_alt; ?>" fetchpriority="high" decoding="async" class="absolute inset-0 w-full h-full object-cover" />
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.86) 0%, rgba(10,10,10,0.5) 60%);"></div>
  <div class="absolute inset-0 bg-gradient-to-r from-brand-dark via-brand-dark/60 to-transparent"></div>

  <div class="relative z-10 h-full flex items-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
      <div class="max-w-2xl">
        <p class="text-brand-yellow font-display font-semibold text-xs sm:text-base capitalize tracking-widest mb-3 sm:mb-4 fade-up">
          Industry Security Services
        </p>
        <h1 class="font-display font-black capitalize leading-tight mb-5 sm:mb-6 fade-up" style="animation-delay:0.1s">
          <span class="text-2xl sm:text-4xl md:text-5xl text-white font-bold block"><?php echo $industry_name; ?> Security</span>
          <span class="text-2xl sm:text-4xl md:text-5xl text-brand-yellow font-bold block">Guard Services in Delhi NCR</span>
        </h1>
        <p class="text-white/70 text-sm sm:text-base md:text-lg leading-relaxed mb-6 sm:mb-8 fade-up max-w-xl" style="animation-delay:0.2s">
          Professional security guards and supervisors for <?php echo $industry_type; ?>, designed to protect people, material, equipment, and daily operations.
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
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl font-bold text-brand-dark mb-4">Security Challenges for <br><?php echo $industry_name; ?></h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 max-w-2xl mx-auto text-lg leading-relaxed">
        Construction sites carry open perimeters, high-value material, and constantly changing workforces — common gaps we see, and why a structured guard deployment matters.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-door-open text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Unauthorised Entry</h3>
        <p class="text-gray-500 text-base leading-relaxed">Open or poorly fenced perimeters allow unverified individuals onto the site.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-box-open text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Material & Equipment Theft</h3>
        <p class="text-gray-500 text-base leading-relaxed">Cement, steel, cables, tools, and machinery remain vulnerable without active monitoring.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-id-badge text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Labour & Visitor Mismanagement</h3>
        <p class="text-gray-500 text-base leading-relaxed">A constantly rotating labour force makes it hard to track who is on-site at any time.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-truck text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Vehicle & Delivery Control</h3>
        <p class="text-gray-500 text-base leading-relaxed">Unregulated entry of trucks, mixers, and delivery vehicles creates safety and theft risk.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.2s">
        <i class="fa fa-truck-medical text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Emergency Response Gaps</h3>
        <p class="text-gray-500 text-base leading-relaxed">Delayed response to site accidents or incidents due to lack of trained personnel on-site.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.25s">
        <i class="fa fa-moon text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Night Security Risks</h3>
        <p class="text-gray-500 text-base leading-relaxed">Idle machinery and stored material face higher theft risk once work hours end.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-dolly text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Material Movement Issues</h3>
        <p class="text-gray-500 text-base leading-relaxed">Goods and equipment moving in and out of the site without verification or logging.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-hard-hat text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Worker Safety Compliance</h3>
        <p class="text-gray-500 text-base leading-relaxed">Unauthorised entry into active work zones increases the risk of on-site accidents.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-shield-halved text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Staff & Public Safety</h3>
        <p class="text-gray-500 text-base leading-relaxed">Without visible security, workers and nearby public can feel and be unsafe near live sites.</p>
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
        A layered deployment that covers every entry point, labourer, and material movement at your <?php echo $industry_type; ?>.
      </p>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.1s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-door-closed text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-base">Entry Gate Security</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.12s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-user-check text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-base">Visitor Verification</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.14s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-route text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-base">Patrol Points</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.16s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-video text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-base">CCTV Coordination</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.18s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-key text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-base">Access Control Support</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.2s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-truck-medical text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-base">Emergency Response</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.22s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-clipboard-list text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-base">Reporting & Escalation</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.24s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-user-shield text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-base">Supervisor Checks</h4></div>
        </div>
      </div>
    </div>

    <div class="fade-up order-first lg:order-last">
      <img src="<?= mediaUrl($media, 'solution_image'); ?>" alt="Security guard stationed at construction site entrance" loading="lazy" decoding="async" sizes="(max-width: 1023px) 100vw, 50vw" class="w-full h-56 sm:h-72 md:h-96 lg:h-full object-cover rounded-2xl shadow-lg" />
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
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl font-bold text-brand-dark mb-4">Recommended Manpower<br class="hidden sm:block"> Deployment</h2>
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
            <td class="px-6 py-4 font-semibold text-brand-dark">Small Site <span class="block text-sm font-normal text-gray-400">(Single Plot / Renovation)</span></td>
            <td class="px-6 py-4 text-gray-600">1 to 2 guards</td>
          </tr>
          <tr class="bg-white">
            <td class="px-6 py-4 font-semibold text-brand-dark">Medium Site <span class="block text-sm font-normal text-gray-400">(Residential / Commercial Project)</span></td>
            <td class="px-6 py-4 text-gray-600">2 to 6 guards</td>
          </tr>
          <tr class="bg-gray-50">
            <td class="px-6 py-4 font-semibold text-brand-dark">Large Site <span class="block text-sm font-normal text-gray-400">(Township / Multi-Phase Project)</span></td>
            <td class="px-6 py-4 text-gray-600">Multiple guards with supervisor</td>
          </tr>
          <tr class="bg-white">
            <td class="px-6 py-4 font-semibold text-brand-dark">High-Risk Site <span class="block text-sm font-normal text-gray-400">(High-Value Material Storage)</span></td>
            <td class="px-6 py-4 text-gray-600">Guards, supervisor, CCTV, QRT support</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Mobile stacked cards (replaces table below sm breakpoint) -->
    <div class="deploy-card-mobile space-y-3 fade-up">
      <div class="border border-gray-200 rounded-xl p-4 bg-gray-50">
        <p class="font-semibold text-brand-dark text-sm">Small Site</p>
        <p class="text-xs text-gray-400 mb-2">Single Plot / Renovation</p>
        <p class="text-sm text-gray-600"><span class="font-semibold text-brand-dark">Deployment:</span> 1 to 2 guards</p>
      </div>
      <div class="border border-gray-200 rounded-xl p-4 bg-white">
        <p class="font-semibold text-brand-dark text-sm">Medium Site</p>
        <p class="text-xs text-gray-400 mb-2">Residential / Commercial Project</p>
        <p class="text-sm text-gray-600"><span class="font-semibold text-brand-dark">Deployment:</span> 2 to 6 guards</p>
      </div>
      <div class="border border-gray-200 rounded-xl p-4 bg-gray-50">
        <p class="font-semibold text-brand-dark text-sm">Large Site</p>
        <p class="text-xs text-gray-400 mb-2">Township / Multi-Phase Project</p>
        <p class="text-sm text-gray-600"><span class="font-semibold text-brand-dark">Deployment:</span> Multiple guards with supervisor</p>
      </div>
      <div class="border border-gray-200 rounded-xl p-4 bg-white">
        <p class="font-semibold text-brand-dark text-sm">High-Risk Site</p>
        <p class="text-xs text-gray-400 mb-2">High-Value Material Storage</p>
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
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Main Gate Entry Control</h3>
        <p class="text-gray-500 text-base leading-relaxed">Verifying labour, staff, and visitor entry at the main site gate.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-clipboard-check text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Labour Attendance Coordination</h3>
        <p class="text-gray-500 text-base leading-relaxed">Supporting attendance logging and ID checks for daily and contract labour.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-truck text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Vehicle & Material Inward-Outward Checks</h3>
        <p class="text-gray-500 text-base leading-relaxed">Verifying and logging trucks, mixers, and material moving in or out of the site.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-warehouse text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Material Store & Yard Watch</h3>
        <p class="text-gray-500 text-base leading-relaxed">Monitoring cement, steel, cable, and equipment storage areas against theft.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-route text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Perimeter & Night Patrolling</h3>
        <p class="text-gray-500 text-base leading-relaxed">Regular rounds across the site boundary, especially during non-working hours.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-hard-hat text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Restricted Zone Access Control</h3>
        <p class="text-gray-500 text-base leading-relaxed">Preventing unauthorised entry into active work zones, excavation, or crane areas.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-triangle-exclamation text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Incident Reporting</h3>
        <p class="text-gray-500 text-base leading-relaxed">Logging and escalating any theft attempt, accident, or unusual activity on-site.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-fire-extinguisher text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Emergency & Accident Support</h3>
        <p class="text-gray-500 text-base leading-relaxed">Assisting in first response and coordination during site accidents or emergencies.</p>
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
        <div class="mt-2 text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[12px]"></i></div>
      </a>
      <a href="../security-guard-services/armed-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up" style="animation-delay:0.05s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-user-shield text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-base text-brand-dark capitalize leading-tight mb-2">Armed Security Guards</h3>
        <div class="mt-2 text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[12px]"></i></div>
      </a>
      <a href="../security-guard-services/lady-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up" style="animation-delay:0.1s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-venus text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-base text-brand-dark capitalize leading-tight mb-2">Lady Security Guards</h3>
        <div class="mt-2 text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[12px]"></i></div>
      </a>
      <a href="../technology&support/cctv-monitoring" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up" style="animation-delay:0.15s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-video text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-base text-brand-dark capitalize leading-tight mb-2">CCTV Monitoring</h3>
        <div class="mt-2 text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[12px]"></i></div>
      </a>
      <a href="../technology&support/visitor-management" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-address-card text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-base text-brand-dark capitalize leading-tight mb-2">Visitor Management</h3>
        <div class="mt-2 text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[12px]"></i></div>
      </a>
      <a href="../technology&support/patrolling-quick-response-team" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up" style="animation-delay:0.05s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-person-walking text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-base text-brand-dark capitalize leading-tight mb-2">Patrolling & QRT</h3>
        <div class="mt-2 text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[12px]"></i></div>
      </a>
      <a href="../facility-management/fire-safety" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up" style="animation-delay:0.1s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-fire-extinguisher text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-base text-brand-dark capitalize leading-tight mb-2">Fire & Safety Personnel</h3>
        <div class="mt-2 text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[12px]"></i></div>
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
          <div class="flex items-center gap-3 text-lg text-gray-600"><i class="fa fa-check-circle text-brand-dark"></i> Built from real construction site deployments</div>
          <div class="flex items-center gap-3 text-lg text-gray-600"><i class="fa fa-check-circle text-brand-dark"></i> Free, no obligation</div>
        </div>
      </div>

      <div class="bg-brand-dark p-6 sm:p-10 lg:p-12">
        <h3 class="font-display font-bold text-white capitalize text-base sm:text-lg mb-1">Get the Free Checklist</h3>
        <p class="text-white/50 text-sm mb-6">Sent straight to your inbox / WhatsApp</p>
        <form action="../includes/contact.php" method="POST" class="space-y-4">
          <input type="hidden" name="industry" value="<?php echo $industry_name; ?>" />
          <input type="text" name="name" required placeholder="Full Name" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <input type="tel" name="phone" required placeholder="Phone Number" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <input type="email" name="email" placeholder="Email Address" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <input type="text" name="company" placeholder="Site / Project Name" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
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
          <span class="text-brand-dark font-semibold text-lg pr-4">How many guards does a construction site typically need?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">It depends on site size, perimeter length, and material value. Small plots need 1 to 2 guards, while large townships or multi-phase projects require multiple guards with a supervisor.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.05s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can guards verify and log labour entering the site daily?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. Our guards support ID verification and entry logging for daily and contract labour, working alongside your site's attendance or HR process.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.1s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you provide night security for material and equipment storage?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. We offer dedicated night guarding and patrol coverage for material yards, cement stores, and idle machinery, when theft risk is typically highest.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.15s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can guards check and log incoming and outgoing trucks and material?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. Our guards verify delivery challans, log vehicle entry and exit, and cross-check material quantities against gate records before allowing movement.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.2s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you provide guards on a short-term or project-duration basis?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. Construction site deployments are commonly project-based, and we scale manpower up or down as the site progresses through different phases.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.25s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can guards restrict access to active work zones and machinery areas?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. Guards can be posted to control entry into excavation zones, crane operation areas, and other active work sections, reducing the risk of unauthorised access and accidents.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.3s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Will a supervisor visit our site regularly?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. Supervisor checks and reporting are part of every deployment to ensure consistent duty discipline and quick resolution of any issue on-site.</p>
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
      Need Security Guards for<br/>Your <?php echo $industry_name; ?>?
    </h2>
    <p class="text-brand-dark/80 text-sm sm:text-lg mb-8 max-w-lg mx-auto">
      Get a free site assessment and a deployment plan built specifically for your construction project.
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