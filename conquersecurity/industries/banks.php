<?php
/**
 * Paste complete Cloudinary secure URLs below.
 * Keep the array keys unchanged; only replace the URL values.
 */
$media = [
    'hero_banner'     => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1785131362/Hero-section-image_r9sbx6.webp',
    'solution_image'  => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784804953/bank1_ecojqy.png',
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
   INDUSTRY PAGE TEMPLATE
   This instance is filled in for: BANKS & ATMs
═══════════════════════════════════════════════════════════ */

$industry_name        = "Banks &amp; ATMs";
$industry_slug        = "banks";
$industry_type        = "banks and ATMs";
$hero_image           = $media['hero_banner'];
$hero_image_alt       = "Bank branch security guard on duty";
$lead_magnet_title    = "ATM and Branch Security Readiness Checklist";
$lead_magnet_offer    = "Get a practical checklist to review cash-handling security, ATM coverage, and branch access control at your bank premises.";

$page_title       = "Banks & ATMs Security Guard Services in Delhi NCR | Conquer Services";
$page_description = "Professional security guards and supervisors for banks and ATMs, designed to protect people, property, assets, visitors, and daily operations across Delhi NCR.";
$active_page      = "industries";
$base_path        = "../";
include '../includes/header.php';
?>

<style>
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
  .service-card { transition: transform 0.3s, box-shadow 0.3s; }
  .service-card:hover { transform: translateY(-4px); box-shadow: 0 16px 40px rgba(0,0,0,0.08); }
</style>

<!-- ══════════════════════════════════════════
     1. HERO SECTION
═══════════════════════════════════════════ -->
<section class="relative min-h-[300px] h-[48vh] sm:min-h-[340px] sm:h-[46vh] md:min-h-[380px] md:h-[420px] lg:h-[440px] overflow-hidden bg-brand-dark">
  <img src="<?= mediaUrl($media, 'hero_banner'); ?>" alt="Bank branch security guard on duty" fetchpriority="high" decoding="async" class="absolute inset-0 w-full h-full object-cover" style="object-position: 100% 35%;" />
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.16) 0%, rgba(10,10,10,0.15) 40%);"></div>
  <div class="absolute inset-0 bg-gradient-to-r from-brand-dark via-brand-dark/60 to-transparent"></div>

  <div class="relative z-10 h-full flex items-center py-8 sm:py-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
      <div class="max-w-2xl">
        <p class="text-brand-yellow font-display font-semibold text-xs sm:text-base capitalize tracking-widest mb-3 sm:mb-4 fade-up">
          Industry Security Services
        </p>
        <h1 class="font-display font-black capitalize leading-tight mb-5 sm:mb-6 fade-up" style="animation-delay:0.1s">
          <span class="text-2xl sm:text-4xl md:text-5xl text-white font-bold block">Banks &amp; ATMs Security</span>
          <span class="text-2xl sm:text-4xl md:text-5xl text-brand-yellow font-bold block mt-1 sm:mt-0">Guard Services in Delhi NCR</span>
        </h1>
        <p class="text-white/70 text-sm sm:text-base md:text-lg leading-relaxed mb-7 sm:mb-8 fade-up max-w-xl" style="animation-delay:0.2s">
          Professional security guards and supervisors for <?php echo $industry_type; ?>, designed to protect people, property, assets, visitors, and daily operations.
        </p>
        <div class="flex flex-col sm:flex-row flex-wrap gap-3 fade-up" style="animation-delay:0.3s">
          <a href="../contact" class="bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold px-7 py-3 sm:py-3.5 rounded capitalize tracking-wider text-base transition-colors shadow-lg text-center w-full sm:w-auto">
            Get Free Site Assessment
          </a>
          <a href="tel:+919430695171" class="flex items-center justify-center gap-2 border border-brand-yellow text-brand-yellow hover:bg-brand-yellow hover:text-brand-dark font-semibold px-7 py-3 sm:py-3.5 rounded capitalize tracking-wider text-base transition-colors w-full sm:w-auto">
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
<section class="py-14 sm:py-16 lg:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 lg:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">The Problem</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl font-bold text-brand-dark mb-4 leading-tight">Security Challenges for <br class="hidden sm:inline">Banks &amp; ATMs</h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 max-w-2xl mx-auto text-lg leading-relaxed">
        Banks and ATMs carry a different threat profile than most sites — common security gaps we see, and why a structured guard deployment matters.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5">
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-door-open text-brand-dark text-lg sm:text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Unauthorised Entry</h3>
        <p class="text-gray-500 text-base leading-relaxed">Unchecked branch or ATM access allows unverified individuals near cash and customer areas.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-vault text-brand-dark text-lg sm:text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Theft or Pilferage</h3>
        <p class="text-gray-500 text-base leading-relaxed">Cash, valuables, and ATM cassettes remain vulnerable without active monitoring and escort.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-id-badge text-brand-dark text-lg sm:text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Visitor Mismanagement</h3>
        <p class="text-gray-500 text-base leading-relaxed">Poor customer and visitor flow control makes it hard to spot suspicious behaviour early.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-square-parking text-brand-dark text-lg sm:text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Parking Issues</h3>
        <p class="text-gray-500 text-base leading-relaxed">Unregulated vehicle movement near branch entrances creates congestion and cash-transit risk.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.2s">
        <i class="fa fa-truck-medical text-brand-dark text-lg sm:text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Emergency Response Gaps</h3>
        <p class="text-gray-500 text-base leading-relaxed">Delayed response during a robbery attempt or medical emergency due to lack of trained personnel.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.25s">
        <i class="fa fa-moon text-brand-dark text-lg sm:text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Night Security Risks</h3>
        <p class="text-gray-500 text-base leading-relaxed">Standalone ATM kiosks face higher risk after hours when footfall and visibility drop.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-dolly text-brand-dark text-lg sm:text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Material Movement Issues</h3>
        <p class="text-gray-500 text-base leading-relaxed">Cash-in-transit and ATM cassette replenishment moving without verification or logging.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-people-group text-brand-dark text-lg sm:text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Crowd Control Issues</h3>
        <p class="text-gray-500 text-base leading-relaxed">Peak banking hours and pension/withdrawal days can overwhelm an unstaffed branch entrance.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-shield-halved text-brand-dark text-lg sm:text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Staff &amp; Customer Safety</h3>
        <p class="text-gray-500 text-base leading-relaxed">Without visible security, branch staff and customers can feel and be unsafe during transactions.</p>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     3. OUR SECURITY SOLUTION — light gray
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 lg:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 grid lg:grid-cols-2 gap-10 lg:gap-12 items-center">
    <div>
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3 fade-up">The Solution</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl font-bold text-brand-dark mb-4 leading-tight fade-up" style="animation-delay:0.05s">
        Our Security<br class="hidden sm:inline"/> Deployment Model
      </h2>
      <div class="y-divider-center mb-5 fade-up" style="animation-delay:0.1s"></div>
      <p class="text-gray-500 text-lg leading-relaxed mb-7 sm:mb-8 fade-up" style="animation-delay:0.1s">
        A layered deployment that covers every entry point, customer, and incident scenario at your <?php echo $industry_type; ?> site.
      </p>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">
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
          <div><h4 class="font-semibold text-brand-dark text-lg">Reporting &amp; Escalation</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.24s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-user-shield text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-lg">Supervisor Checks</h4></div>
        </div>
      </div>
    </div>

    <div class="fade-up mt-2 lg:mt-0">
      <img src="<?= mediaUrl($media, 'solution_image'); ?>" alt="Security guard stationed at bank entrance" loading="lazy" decoding="async" sizes="(max-width: 1023px) 100vw, 50vw" class="w-full h-full object-cover rounded-2xl shadow-lg" />
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     4. RECOMMENDED MANPOWER DEPLOYMENT — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 lg:py-20 bg-white">
  <div class="max-w-5xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Quick Reference</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl font-bold text-brand-dark mb-4 leading-tight">Recommended Manpower<br class="hidden sm:inline"> Deployment</h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 max-w-xl mx-auto text-lg leading-relaxed">
        A general guide — final deployment is confirmed after a free site visit.
      </p>
    </div>

    <?php
      $deployment_rows = [
        ['type' => 'Small Site', 'subtitle' => 'Standalone ATM',                       'plan' => '1 to 2 guards'],
        ['type' => 'Medium Site', 'subtitle' => 'Branch Office',                       'plan' => '2 to 6 guards'],
        ['type' => 'Large Site', 'subtitle' => 'Main Branch / Regional Office',         'plan' => 'Multiple guards with supervisor'],
        ['type' => 'High-Risk Site', 'subtitle' => 'Cash Vault / Currency Chest',       'plan' => 'Guards, supervisor, CCTV, QRT support'],
      ];
    ?>

    <!-- Table view: tablet & desktop -->
    <div class="overflow-x-auto fade-up hidden sm:block">
      <table class="w-full text-base border border-gray-200 rounded-xl overflow-hidden">
        <thead>
          <tr class="bg-brand-dark text-white text-left">
            <th class="px-6 py-4 font-semibold capitalize text-lg tracking-wider">Site Type</th>
            <th class="px-6 py-4 font-semibold capitalize text-lg tracking-wider">Suggested Deployment</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <?php foreach ($deployment_rows as $i => $row): ?>
          <tr class="<?php echo $i % 2 === 0 ? 'bg-gray-50' : 'bg-white'; ?>">
            <td class="px-6 py-4 font-semibold text-brand-dark align-top"><?php echo $row['type']; ?> <span class="block text-base font-normal text-gray-400"><?php echo '(' . $row['subtitle'] . ')'; ?></span></td>
            <td class="px-6 py-4 text-gray-600 align-top"><?php echo $row['plan']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- Stacked card view: mobile only -->
    <div class="sm:hidden space-y-3 fade-up">
      <?php foreach ($deployment_rows as $row): ?>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5">
        <div class="text-brand-dark font-semibold text-lg leading-snug"><?php echo $row['type']; ?></div>
        <div class="text-gray-400 text-base mb-2"><?php echo $row['subtitle']; ?></div>
        <div class="text-gray-600 text-base leading-relaxed"><?php echo $row['plan']; ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     5. DUTIES & RESPONSIBILITIES — light gray
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 lg:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 lg:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">On Duty</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl font-bold text-brand-dark mb-4">Duties &amp; Responsibilities</h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 max-w-2xl mx-auto text-lg leading-relaxed">
        Day-to-day responsibilities our guards carry out at <?php echo $industry_type; ?> sites.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-id-card text-brand-dark text-base sm:text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Entrance &amp; Lobby Watch</h3>
        <p class="text-gray-500 text-base leading-relaxed">Monitoring branch entry, greeting customers, and observing for suspicious behaviour.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-money-check-dollar text-brand-dark text-base sm:text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Cash-in-Transit Escort</h3>
        <p class="text-gray-500 text-base leading-relaxed">Escorting cash movement between vault, counters, and cash vans.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-credit-card text-brand-dark text-base sm:text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">ATM Kiosk Monitoring</h3>
        <p class="text-gray-500 text-base leading-relaxed">Watching over standalone ATM kiosks, especially during night hours.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-square-parking text-brand-dark text-base sm:text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Parking &amp; Vehicle Management</h3>
        <p class="text-gray-500 text-base leading-relaxed">Regulating customer and cash-van vehicle movement near the branch.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-people-line text-brand-dark text-base sm:text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Queue &amp; Crowd Management</h3>
        <p class="text-gray-500 text-base leading-relaxed">Managing customer queues during peak hours, pension days, and festivals.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-video text-brand-dark text-base sm:text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">CCTV &amp; Access Point Monitoring</h3>
        <p class="text-gray-500 text-base leading-relaxed">Coordinating with CCTV operators and vault/locker access control systems.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-triangle-exclamation text-brand-dark text-base sm:text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Incident Reporting</h3>
        <p class="text-gray-500 text-base leading-relaxed">Logging and immediately escalating any suspicious activity or incident on-site.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-fire-extinguisher text-brand-dark text-base sm:text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Emergency &amp; Evacuation Support</h3>
        <p class="text-gray-500 text-base leading-relaxed">Assisting with evacuation and coordinating with police during robbery or fire alerts.</p>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     6. SUITABLE SERVICES — WHITE (cross-links)
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 lg:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 lg:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Related Services</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl font-bold text-brand-dark mb-4">Suitable Services</h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 max-w-xl mx-auto text-lg leading-relaxed">
        Services commonly combined for <?php echo $industry_type; ?> security.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <a href="../security-guard-services/unarmed-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 sm:mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-shield-alt text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-sm text-brand-dark capitalize leading-tight mb-2">Unarmed Security Guards</h3>
        <div class="mt-2 text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../security-guard-services/armed-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up" style="animation-delay:0.05s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 sm:mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-user-shield text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-sm text-brand-dark capitalize leading-tight mb-2">Armed Security Guards</h3>
        <div class="mt-2 text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../security-guard-services/lady-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up" style="animation-delay:0.1s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 sm:mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-venus text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-sm text-brand-dark capitalize leading-tight mb-2">Lady Security Guards</h3>
        <div class="mt-2 text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../technology&support/cctv-monitoring" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up" style="animation-delay:0.15s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 sm:mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-video text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-sm text-brand-dark capitalize leading-tight mb-2">CCTV Monitoring</h3>
        <div class="mt-2 text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../technology&support/visitor-management" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 sm:mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-address-card text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-sm text-brand-dark capitalize leading-tight mb-2">Visitor Management</h3>
        <div class="mt-2 text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../technology&support/patrolling-quick-response-team" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up" style="animation-delay:0.05s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 sm:mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-person-walking text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-sm text-brand-dark capitalize leading-tight mb-2">Patrolling &amp; QRT</h3>
        <div class="mt-2 text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../facility-management/fire-safety" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up" style="animation-delay:0.1s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 sm:mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-fire-extinguisher text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-sm text-brand-dark capitalize leading-tight mb-2">Fire &amp; Safety Personnel</h3>
        <div class="mt-2 text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../industries" class="service-card bg-brand-dark border border-brand-dark rounded-xl p-5 sm:p-6 group fade-up flex flex-col justify-center items-center text-center min-h-[140px] sm:min-h-0" style="animation-delay:0.15s">
        <i class="fa fa-grip text-brand-yellow text-xl sm:text-2xl mb-3"></i>
        <h3 class="font-display font-bold text-sm text-white capitalize leading-tight">View All Industries</h3>
      </a>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     7. LEAD MAGNET SECTION
═══════════════════════════════════════════ -->
<section class="relative py-14 sm:py-16 lg:py-20 overflow-hidden bg-gray-50">
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
          <div class="flex items-center gap-3 text-lg text-gray-600"><i class="fa fa-check-circle text-brand-dark"></i> Built from real branch and ATM deployments</div>
          <div class="flex items-center gap-3 text-lg text-gray-600"><i class="fa fa-check-circle text-brand-dark"></i> Free, no obligation</div>
        </div>
      </div>

      <div class="bg-brand-dark p-6 sm:p-10 lg:p-12">
        <h3 class="font-display font-bold text-white capitalize text-base sm:text-lg mb-1">Get the Free Checklist</h3>
        <p class="text-white/50 text-base mb-5 sm:mb-6">Sent straight to your inbox / WhatsApp</p>
        <form action="../includes/contact.php" method="POST" class="space-y-4">
          <input type="hidden" name="industry" value="Banks &amp; ATMs" />
          <input type="text" name="name" required placeholder="Full Name" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <input type="tel" name="phone" required placeholder="Phone Number" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <input type="email" name="email" placeholder="Email Address" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <input type="text" name="company" placeholder="Bank / Branch Name" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
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
<section class="py-14 sm:py-16 lg:py-20 bg-white">
  <div class="max-w-4xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Common Questions</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl font-bold text-brand-dark mb-4">Frequently Asked</h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="space-y-3" id="faq-container">
      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up">
        <button class="faq-toggle w-full flex justify-between items-center gap-3 px-5 py-4 sm:px-6 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-2">Do you provide armed guards for bank branches and cash vaults?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 pb-4 sm:px-6 sm:pb-5 text-gray-500 text-base leading-relaxed">Yes. For high-risk sites such as cash vaults, currency chests, and cash-in-transit escort, we deploy armed security guards along with unarmed staff as required.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.05s">
        <button class="faq-toggle w-full flex justify-between items-center gap-3 px-5 py-4 sm:px-6 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-2">Can you provide security for standalone ATM kiosks?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 pb-4 sm:px-6 sm:pb-5 text-gray-500 text-base leading-relaxed">Yes. We provide dedicated guards or patrol-based coverage for standalone ATM kiosks, with special focus on night-hour monitoring where risk is higher.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.1s">
        <button class="faq-toggle w-full flex justify-between items-center gap-3 px-5 py-4 sm:px-6 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-2">How many guards does a typical bank branch need?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 pb-4 sm:px-6 sm:pb-5 text-gray-500 text-base leading-relaxed">It depends on branch size, cash handling volume, and footfall. Most branches need 2 to 6 guards, while main branches or regional offices require multiple guards with a supervisor.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.15s">
        <button class="faq-toggle w-full flex justify-between items-center gap-3 px-5 py-4 sm:px-6 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-2">Can guards escort cash-in-transit movement?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 pb-4 sm:px-6 sm:pb-5 text-gray-500 text-base leading-relaxed">Yes. Our guards can escort cash movement between the vault, counters, and cash vans, following a defined security protocol for each transfer.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.2s">
        <button class="faq-toggle w-full flex justify-between items-center gap-3 px-5 py-4 sm:px-6 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-2">Do you offer 24-hour security for branches with attached ATMs?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 pb-4 sm:px-6 sm:pb-5 text-gray-500 text-base leading-relaxed">Yes. We offer day, night, 12-hour, and 24-hour deployment options so branch hours and the attached ATM lobby remain covered at all times.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.25s">
        <button class="faq-toggle w-full flex justify-between items-center gap-3 px-5 py-4 sm:px-6 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-2">Will a supervisor visit our branch regularly?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 pb-4 sm:px-6 sm:pb-5 text-gray-500 text-base leading-relaxed">Yes. Supervisor checks and reporting are part of every deployment to ensure consistent duty discipline and quick issue resolution at every branch.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.3s">
        <button class="faq-toggle w-full flex justify-between items-center gap-3 px-5 py-4 sm:px-6 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-2">Can guards coordinate with our existing CCTV and alarm systems?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 pb-4 sm:px-6 sm:pb-5 text-gray-500 text-base leading-relaxed">Yes. Our guards coordinate with on-site CCTV operators, panic alarm systems, and access control to strengthen overall branch and ATM monitoring.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     9. FINAL CTA — YELLOW
═══════════════════════════════════════════ -->
<section class="relative py-14 sm:py-16 lg:py-20 overflow-hidden">
  <div class="absolute inset-0 bg-brand-yellow"></div>
  <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 text-center fade-up">
    <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl font-bold text-brand-dark leading-tight sm:leading-none mb-4">
      Need Security Guards for<br class="hidden sm:inline"/> Your Bank or ATM?
    </h2>
    <p class="text-brand-dark/80 text-sm sm:text-lg mb-8 max-w-lg mx-auto">
      Get a free site assessment and a deployment plan built specifically for your branch or ATM.
    </p>
    <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-3 sm:gap-4">
      <a href="../contact" class="bg-brand-dark text-white hover:bg-gray-800 font-bold px-6 sm:px-8 py-3 sm:py-3.5 rounded capitalize tracking-wider text-base transition-colors shadow-lg w-full sm:w-auto">
        Get Free Site Assessment
      </a>
      <a href="tel:+919430695171" class="flex items-center justify-center gap-2 border-2 border-brand-dark/60 text-brand-dark hover:border-brand-dark font-bold px-6 sm:px-8 py-3 sm:py-3.5 rounded capitalize tracking-wider text-base transition-colors w-full sm:w-auto">
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