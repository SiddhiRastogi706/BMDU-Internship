<?php
/**
 * Paste complete Cloudinary secure URLs below.
 * Keep the array keys unchanged; only replace the URL values.
 */
$media = [
    'hero_banner'       => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1785131228/Hero-section-img_qzfzyo.webp',
    'solution_image'    => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784810843/Who_We_Protect_3_xqxtpz.webp',
    'lead_background'   => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784805094/service2_qc7zvz.png',
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
$page_title       = "Residential Society Security Guard Services in Delhi NCR | Conquer Services";
$page_description = "Professional security guards and supervisors for residential societies, gated communities, and apartment complexes across Delhi NCR. Gate security, visitor management, patrol, and 24/7 supervision.";
$active_page      = "industries";
$base_path        = "../";
include '../includes/header.php';
?>

<style>
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
  .challenge-card   { transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s; }
  .challenge-card:hover { transform: translateY(-5px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); border-color: #F2CF4A; }
  .duty-card        { transition: border-color 0.25s, background 0.25s; }
  .duty-card:hover  { border-color: #F2CF4A; background: #fffdf0; }
  .service-link-card { transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s; }
  .service-link-card:hover { transform: translateY(-4px); box-shadow: 0 16px 36px rgba(0,0,0,0.09); border-color: #F2CF4A; }
  /* Belt-and-braces: stop any accidental horizontal scroll on small phones */
  html, body { overflow-x: hidden; }
  img { max-width: 100%; }
  img:not(.w-full) { height: auto; }
</style>

<!-- ══════ 1. HERO ══════ -->
<section class="relative min-h-[280px] sm:min-h-[320px] md:min-h-[380px] lg:min-h-[420px] overflow-hidden bg-brand-dark flex items-center">
  <div class="absolute inset-0">
    <img src="<?= mediaUrl($media, 'hero_banner'); ?>" alt="Residential society security guard services Delhi NCR" fetchpriority="high" decoding="async" class="w-full h-full object-cover object-[center_35%]" style="object-position: 100% 35%;" />
  </div>
  <div class="absolute inset-0" style="background:linear-gradient(135deg,rgba(10,10,10,0.42) 0%,rgba(10,10,10,0.25) 50%);"></div>
  <div class="absolute inset-0 bg-gradient-to-r from-brand-dark via-brand-dark/65 to-transparent"></div>
  <div class="relative z-10 w-full py-8 sm:py-14 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">

      <p class="text-brand-yellow font-display font-semibold text-[10px] sm:text-base capitalize tracking-widest mb-2 sm:mb-4 fade-up">Industry — Residential & Gated Communities</p>
      <h1 class="font-display font-black capitalize leading-tight mb-3 sm:mb-5 fade-up" style="animation-delay:0.1s">
        <span class="text-xl sm:text-3xl md:text-4xl lg:text-5xl text-white block">Residential Society</span>
        <span class="text-xl sm:text-3xl md:text-4xl lg:text-5xl text-brand-yellow block">Security Guard Services</span>
        <span class="text-sm sm:text-2xl md:text-3xl text-white/80 block mt-1">in Delhi NCR</span>
      </h1>
      <p class="text-white/70 text-xs sm:text-lg leading-relaxed mb-5 sm:mb-8 fade-up max-w-2xl" style="animation-delay:0.2s">
        Professional security guards and supervisors for residential societies, gated communities, and apartment complexes — designed to protect residents, visitors, vehicles, and daily operations around the clock.
      </p>
      <div class="flex flex-col sm:flex-row flex-wrap gap-2 sm:gap-3 fade-up" style="animation-delay:0.3s">
        <a href="../contact" class="w-full sm:w-auto text-center bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold px-5 sm:px-7 py-2.5 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-base transition-colors shadow-lg">Get Free Site Assessment</a>
        <a href="tel:+919430695171" class="w-full sm:w-auto justify-center flex items-center gap-2 border border-brand-yellow text-brand-yellow hover:bg-brand-yellow hover:text-brand-dark font-semibold px-5 sm:px-7 py-2.5 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-base transition-colors"><i class="fa fa-phone"></i> Call Now</a>
      </div>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-brand-yellow"></div>
</section>

<!-- Trust Strip -->
<div class="bg-brand-yellow py-3 sm:py-4">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex flex-wrap justify-center gap-x-3 gap-y-1.5 sm:gap-x-8 sm:gap-y-2 text-brand-dark text-[9px] sm:text-base font-bold capitalize tracking-wider">
      <span class="flex items-center gap-1.5"><i class="fa fa-check-circle"></i> Verified Guards</span>
      <span class="flex items-center gap-1.5"><i class="fa fa-check-circle"></i> 24/7 Coverage</span>
      <span class="flex items-center gap-1.5"><i class="fa fa-check-circle"></i> Supervisor Monitoring</span>
      <span class="flex items-center gap-1.5"><i class="fa fa-check-circle"></i> Quick Deployment</span>
      <span class="flex items-center gap-1.5"><i class="fa fa-check-circle"></i> RWA-Friendly Contracts</span>
    </div>
  </div>
</div>

<!-- ══════ 2. CHALLENGES — WHITE ══════ -->
<section class="py-10 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-8 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">What Societies Face</p>
      <h2 class="font-display font-black capitalize text-xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-3 sm:mb-4">Residential Society<br/><span style="color:#C9A91E;">Security Challenges</span></h2>
      <div class="y-divider-center mx-auto mb-4 sm:mb-5"></div>
      <p class="text-gray-500 max-w-2xl mx-auto text-xs sm:text-lg leading-relaxed">Residential societies deal with a unique mix of high footfall, multiple entry points, and a resident population that includes seniors, children, and working families — each with different security needs.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-4">
      <?php
      $challenges = [
        ['icon'=>'fa-user-slash','title'=>'Unauthorised Entry','desc'=>'Unauthorised visitors, delivery persons, and vendors entering premises without proper verification.'],
        ['icon'=>'fa-box-open','title'=>'Theft & Pilferage','desc'=>'Theft of vehicles, bikes, parcels, and common area property — especially during late night hours.'],
        ['icon'=>'fa-users','title'=>'Visitor Mismanagement','desc'=>'Unverified domestic workers, guests, and contractors entering without ID or resident confirmation.'],
        ['icon'=>'fa-parking','title'=>'Parking & Vehicle Issues','desc'=>'Unauthorised parking, vehicle damage, and disputes over slots causing daily resident friction.'],
        ['icon'=>'fa-ambulance','title'=>'Emergency Response Gaps','desc'=>'Delayed response to medical emergencies, fire incidents, or resident distress in large towers.'],
        ['icon'=>'fa-moon','title'=>'Night Security Risks','desc'=>'Reduced vigilance during late-night shifts, unmonitored back gates, and isolated stairwells.'],
        ['icon'=>'fa-child','title'=>'Child & Resident Safety','desc'=>'Safety of unaccompanied children in play areas, corridors, and lifts — a top concern for most societies.'],
        ['icon'=>'fa-people-arrows','title'=>'Domestic Worker Management','desc'=>'Lack of systematic entry-exit tracking for maids, drivers, cooks, and daily-visit domestic workers.'],
      ];
      foreach ($challenges as $i => $c): ?>
      <div class="challenge-card bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 fade-up" style="animation-delay:<?php echo $i*0.05; ?>s">
        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3"><i class="fa <?php echo $c['icon']; ?> text-brand-dark text-base sm:text-lg"></i></div>
        <h4 class="font-display font-bold text-brand-dark text-xs sm:text-lg capitalize leading-tight mb-1 sm:mb-2"><?php echo $c['title']; ?></h4>
        <p class="text-gray-500 text-[10px] sm:text-base leading-relaxed"><?php echo $c['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════ 3. SECURITY SOLUTION — DARK ══════ -->
<section class="py-10 sm:py-16 md:py-20 bg-brand-dark">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-center">
      <div class="fade-up">
        <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">Deployment Model</p>
        <h2 class="font-display font-black capitalize text-xl sm:text-3xl md:text-4xl text-white leading-tight mb-3 sm:mb-4">Our Residential Society<br/><span class="text-brand-yellow">Security Solution</span></h2>
        <div class="y-divider-center mb-4 sm:mb-6"></div>
        <p class="text-gray-400 text-xs sm:text-lg leading-relaxed mb-6 sm:mb-8">We deploy a structured, multi-point security model specifically designed for gated residential communities — covering every entry point, common area, and shift with supervised, verified guards briefed on your society's layout and resident protocols.</p>
        <div class="space-y-3 sm:space-y-4">
          <?php
          $solutions = [
            ['icon'=>'fa-door-open','title'=>'Entry Gate Security','desc'=>'Manned gate control with visitor register, ID check, resident confirmation call, and vehicle pass system.'],
            ['icon'=>'fa-id-card','title'=>'Visitor & Domestic Worker Verification','desc'=>'Systematic verification of all visitors, domestic workers, vendors, and delivery persons before entry.'],
            ['icon'=>'fa-walking','title'=>'Patrol Points','desc'=>'Scheduled patrol rounds covering towers, basement, play areas, parking, and perimeter at defined intervals.'],
            ['icon'=>'fa-video','title'=>'CCTV Coordination','desc'=>'Guards work alongside CCTV monitoring to ensure coverage gaps are physically covered and incidents flagged.'],
            ['icon'=>'fa-key','title'=>'Access Control Support','desc'=>'Supporting card-based, biometric, or boom-barrier access systems — managing exceptions and visitor overrides.'],
            ['icon'=>'fa-bolt','title'=>'Emergency Response','desc'=>'Trained first response for fire, medical emergency, or resident distress — coordinating with emergency services and RWA.'],
            ['icon'=>'fa-clipboard-list','title'=>'Reporting & Escalation','desc'=>'Daily duty logs, incident reports, and visitor records submitted to RWA at defined intervals.'],
            ['icon'=>'fa-user-tie','title'=>'Supervisor Checks','desc'=>'Regular supervisor visits for attendance verification, duty briefing, and quality checks across all shifts.'],
          ];
          foreach ($solutions as $i => $s): ?>
          <div class="flex gap-3 sm:gap-4 items-start fade-up" style="animation-delay:<?php echo $i*0.05; ?>s">
            <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa <?php echo $s['icon']; ?> text-brand-yellow text-xs sm:text-sm"></i></div>
            <div>
              <h4 class="font-semibold text-white text-xs sm:text-lg"><?php echo $s['title']; ?></h4>
              <p class="text-gray-400 text-[10px] sm:text-base mt-0.5 leading-relaxed"><?php echo $s['desc']; ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="relative fade-up mt-12 lg:mt-0" style="animation-delay:0.1s">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]"><img src="<?= mediaUrl($media, 'solution_image'); ?>" alt="Residential society security" loading="lazy" decoding="async" sizes="(max-width: 1023px) 100vw, 50vw" class="w-full h-full object-cover" /></div>
        <div class="absolute -bottom-3 sm:-bottom-5 -right-2 sm:-right-5 bg-brand-yellow rounded-2xl p-3 sm:p-5 shadow-xl text-center">
          <div class="font-display font-black text-lg sm:text-xl text-brand-dark leading-none">24/7</div>
          <div class="text-brand-dark font-bold text-[9px] sm:text-xs capitalize tracking-wider mt-1">Gate Coverage</div>
        </div>
        <div class="absolute -top-6 sm:-top-5 -left-2 sm:-left-5 bg-white border border-gray-200 rounded-xl p-2.5 sm:p-4 shadow-xl">
          <div class="flex items-center gap-2 sm:gap-3">
            <div class="w-7 h-7 sm:w-10 sm:h-10 rounded-full bg-brand-yellow/20 flex items-center justify-center flex-shrink-0"><i class="fa fa-home text-brand-dark text-xs sm:text-sm"></i></div>
            <div>
              <div class="font-display font-black text-brand-dark text-xs sm:text-base leading-none">RWA</div>
              <div class="text-gray-500 text-[9px] sm:text-xs mt-0.5">Friendly Contracts</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════ 4. DEPLOYMENT TABLE — light gray ══════ -->
<section class="py-10 sm:py-16 md:py-20 bg-gray-50">
  <div class="max-w-5xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-8 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">Quick Reference</p>
      <h2 class="font-display font-black capitalize text-lg sm:text-2xl md:text-3xl text-brand-dark leading-tight mb-3 sm:mb-4">Recommended Manpower Deployment<br/><span style="color:#C9A91E;">for Residential Societies</span></h2>
      <div class="y-divider-center mx-auto mb-4 sm:mb-5"></div>
      <p class="text-gray-500 max-w-xl mx-auto text-xs sm:text-lg leading-relaxed">Actual guard count is always finalised after a free site visit and layout assessment — these are general starting estimates.</p>
    </div>
    <div class="overflow-x-auto fade-up rounded-2xl border border-gray-200 shadow-sm">
      <table class="w-full min-w-[480px]">
        <thead>
          <tr class="bg-brand-dark text-white text-left">
            <th class="px-3 sm:px-6 py-3 sm:py-4 font-display font-bold capitalize text-[11px] sm:text-lg tracking-wider">Society Type</th>
            <th class="px-3 sm:px-6 py-3 sm:py-4 font-display font-bold capitalize text-[11px] sm:text-lg tracking-wider">Size</th>
            <th class="px-3 sm:px-6 py-3 sm:py-4 font-display font-bold capitalize text-[11px] sm:text-lg tracking-wider">Suggested Deployment</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr class="bg-white"><td class="px-3 sm:px-6 py-3 sm:py-4 font-semibold text-brand-dark text-xs sm:text-sm">Small Society</td><td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-500 text-xs sm:text-sm">Up to 50 units / 1 gate</td><td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-600 text-xs sm:text-sm">1 to 2 guards (day + night shift)</td></tr>
          <tr class="bg-gray-50"><td class="px-3 sm:px-6 py-3 sm:py-4 font-semibold text-brand-dark text-xs sm:text-sm">Medium Society</td><td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-500 text-xs sm:text-sm">50–200 units / 2–3 gates</td><td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-600 text-xs sm:text-sm">3 to 6 guards with shift rotation</td></tr>
          <tr class="bg-white"><td class="px-3 sm:px-6 py-3 sm:py-4 font-semibold text-brand-dark text-xs sm:text-sm">Large Society / Group Housing</td><td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-500 text-xs sm:text-sm">200–500+ units / multiple towers</td><td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-600 text-xs sm:text-sm">6+ guards + supervisor + mobile patrol</td></tr>
          <tr class="bg-gray-50"><td class="px-3 sm:px-6 py-3 sm:py-4 font-semibold text-brand-dark text-xs sm:text-sm">High-Rise / Premium Community</td><td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-500 text-xs sm:text-sm">Luxury / VVIP / High-density</td><td class="px-3 sm:px-6 py-3 sm:py-4 text-gray-600 text-xs sm:text-sm">Guards + supervisor + CCTV + QRT support</td></tr>
        </tbody>
      </table>
    </div>
    <p class="text-center text-gray-400 text-[10px] mt-2 sm:hidden">Swipe left/right to see full table →</p>
    <div class="mt-5 sm:mt-6 text-center fade-up">
      <a href="../contact" class="inline-flex items-center gap-2 bg-brand-dark hover:bg-gray-800 text-white font-bold px-6 sm:px-8 py-2.5 sm:py-3 rounded capitalize tracking-wider text-xs sm:text-sm transition-colors">Get Free Deployment Estimate <i class="fa fa-arrow-right text-xs"></i></a>
    </div>
  </div>
</section>

<!-- ══════ 5. DUTIES — WHITE ══════ -->
<section class="py-10 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-8 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">On-Ground Responsibilities</p>
      <h2 class="font-display font-black capitalize text-xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-3 sm:mb-4">Guard Duties & Responsibilities<br/><span style="color:#C9A91E;">in Residential Societies</span></h2>
      <div class="y-divider-center mx-auto mb-4 sm:mb-5"></div>
      <p class="text-gray-500 max-w-xl mx-auto text-xs sm:text-lg leading-relaxed">Every guard is briefed on these specific duties before their first shift — tailored further to your society's layout, gate configuration, and RWA requirements.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4">
      <?php
      $duties = [
        ['no'=>'01','title'=>'Gate Entry & Exit Control','desc'=>'Manage all vehicles and pedestrians at society gates. Check resident IDs, confirm visitor permissions with residents, and log every entry and exit.'],
        ['no'=>'02','title'=>'Visitor Register Maintenance','desc'=>'Maintain a complete visitor register — name, ID, vehicle number, purpose, time in and out — submitted to RWA at shift end.'],
        ['no'=>'03','title'=>'Domestic Worker Entry Management','desc'=>'Record daily entry and exit of maids, cooks, drivers, and regular domestic workers. Flag unregistered staff and verify with the concerned flat before entry.'],
        ['no'=>'04','title'=>'Delivery & Parcel Handling','desc'=>'Receive, log, and safely handle courier deliveries. Verify resident confirmation before allowing delivery agents beyond the gate.'],
        ['no'=>'05','title'=>'Parking Management','desc'=>'Ensure only authorised vehicles park in designated slots. Prevent unauthorised parking, manage visitor allocation, and monitor parking zones.'],
        ['no'=>'06','title'=>'Scheduled Patrol Rounds','desc'=>'Timed patrol rounds covering all towers, basements, parking areas, play zones, terrace access, and rear perimeter — logged in duty register.'],
        ['no'=>'07','title'=>'Night Security & Perimeter Watch','desc'=>'Maintain heightened vigilance during night shifts — checking rear gates, perimeter fencing, service entries, and isolated staircases at regular intervals.'],
        ['no'=>'08','title'=>'Emergency First Response','desc'=>'Respond immediately to fire alarms, medical emergencies, or resident distress calls — alerting emergency services, RWA, and supervisor as required.'],
        ['no'=>'09','title'=>'Vendor & Contractor Management','desc'=>'Verify vendor and maintenance contractor identities and permissions. Issue timed temporary passes and ensure exit confirmation before expiry.'],
      ];
      foreach ($duties as $i => $d): ?>
      <div class="duty-card bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 fade-up" style="animation-delay:<?php echo $i*0.05; ?>s">
        <div class="flex items-start gap-3 sm:gap-4">
          <div class="font-display font-black text-2xl sm:text-3xl text-brand-yellow/60 leading-none flex-shrink-0 w-8 sm:w-10"><?php echo $d['no']; ?></div>
          <div>
            <h4 class="font-display font-bold text-brand-dark text-xs sm:text-lg capitalize leading-tight mb-1 sm:mb-2"><?php echo $d['title']; ?></h4>
            <p class="text-gray-500 text-[10px] sm:text-base leading-relaxed"><?php echo $d['desc']; ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════ 6. SUITABLE SERVICES — DARK ══════ -->
<section class="py-10 sm:py-16 md:py-20 bg-brand-dark">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-8 sm:mb-12 fade-up">
      <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">Recommended for Societies</p>
      <h2 class="font-display font-black capitalize text-xl sm:text-3xl md:text-4xl text-white leading-tight mb-3 sm:mb-4">Suitable Services for<br/><span class="text-brand-yellow">Residential Societies</span></h2>
      <div class="y-divider-center mx-auto mb-4 sm:mb-5"></div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-4">
      <?php
      $services = [
        ['href'=>'../security-guard-services/unarmed-security.php','icon'=>'fa-shield-alt','title'=>'Unarmed Security Guards','desc'=>'Gate guards, patrol guards, and lobby guards for societies of all sizes.'],
        ['href'=>'../security-guard-services/lady-security.php','icon'=>'fa-venus','title'=>'Lady Security Guards','desc'=>'Female security officers for visitor frisking and women-sensitive entry points.'],
        ['href'=>'../security-guard-services/armed-security.php','icon'=>'fa-user-shield','title'=>'Armed Security Guards','desc'=>'For premium or high-rise communities requiring armed perimeter security.'],
        ['href'=>'../technology&support/cctv-monitoring.php','icon'=>'fa-video','title'=>'CCTV Monitoring','desc'=>'Live surveillance for society gates, parking, lobby areas, and common zones.'],
        ['href'=>'../technology&support/visitor-management.php','icon'=>'fa-id-card','title'=>'Visitor Management','desc'=>'Structured visitor log and identity verification for daily guest and domestic worker entry.'],
        ['href'=>'../technology&support/patrolling-quick-response-team.php','icon'=>'fa-car','title'=>'Patrolling & QRT','desc'=>'Mobile patrol and quick response for large society campuses.'],
        ['href'=>'../facility-management/fire-safety.php','icon'=>'fa-fire-extinguisher','title'=>'Fire & Safety Personnel','desc'=>'Trained fire safety officers for residential towers — drills, equipment checks, emergency response.'],
        ['href'=>'../technology&support/access-control-management.php','icon'=>'fa-key','title'=>'Access Control','desc'=>'Boom barriers, card access, biometric systems — managed by our trained staff.'],
      ];
      foreach ($services as $i => $s): ?>
      <a href="<?php echo $s['href']; ?>" class="service-link-card bg-white/5 border border-white/10 rounded-xl p-4 sm:p-5 group fade-up" style="animation-delay:<?php echo $i*0.05; ?>s">
        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-lg bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mb-3 transition-colors"><i class="fa <?php echo $s['icon']; ?> text-brand-yellow group-hover:text-brand-dark text-base sm:text-lg transition-colors"></i></div>
        <h4 class="font-display font-bold text-white text-xs sm:text-lg capitalize leading-tight mb-1 sm:mb-2"><?php echo $s['title']; ?></h4>
        <p class="text-gray-400 text-[10px] sm:text-base leading-relaxed"><?php echo $s['desc']; ?></p>
        <div class="mt-2 sm:mt-3 text-brand-yellow text-[10px] sm:text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all">View Service <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════ 7. LEAD MAGNET ══════ -->
<section class="py-10 sm:py-16 md:py-20 relative overflow-hidden">
  <div class="absolute inset-0" style="background:linear-gradient(135deg,rgba(10,10,10,0.96) 0%,rgba(10,10,10,0.88) 100%),url('<?= mediaUrl($media, 'lead_background'); ?>') center/cover no-repeat;"></div>
  <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-10 sm:gap-12 items-center">
      <div class="fade-up">
        <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">Free Download</p>
        <h2 class="font-display font-black capitalize text-xl sm:text-3xl md:text-4xl text-white leading-tight mb-3 sm:mb-4">Free Society Gate Security<br/><span class="text-brand-yellow">Audit Checklist</span></h2>
        <p class="text-white/70 text-xs sm:text-lg leading-relaxed mb-4 sm:mb-6">Use this checklist to audit your society's current gate security setup, identify gaps in visitor management, patrol coverage, and emergency preparedness.</p>
        <ul class="space-y-2 sm:space-y-2.5 text-xs sm:text-base text-white/80 mb-6 sm:mb-8">
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Gate entry & visitor register review</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Domestic worker entry control audit</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Night security & patrol gap check</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> CCTV coverage & access control review</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Emergency response readiness check</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> 100% free — no obligation</li>
        </ul>
        <div class="grid grid-cols-3 gap-2 sm:gap-4">
          <div class="bg-white/10 rounded-xl p-2.5 sm:p-4 text-center"><div class="font-display font-black text-base sm:text-2xl text-brand-yellow">500+</div><div class="text-white/60 text-[8px] sm:text-sm mt-1 capitalize tracking-wider">Societies Served</div></div>
          <div class="bg-white/10 rounded-xl p-2.5 sm:p-4 text-center"><div class="font-display font-black text-base sm:text-2xl text-brand-yellow">24/7</div><div class="text-white/60 text-[8px] sm:text-sm mt-1 capitalize tracking-wider">Coverage</div></div>
          <div class="bg-white/10 rounded-xl p-2.5 sm:p-4 text-center"><div class="font-display font-black text-base sm:text-2xl text-brand-yellow">48 hrs</div><div class="text-white/60 text-[8px] sm:text-sm mt-1 capitalize tracking-wider">Deployment</div></div>
        </div>
      </div>
      <div class="bg-white rounded-2xl p-5 sm:p-8 fade-up mt-6 lg:mt-0" style="animation-delay:0.1s">
        <h3 class="font-display font-bold text-brand-dark capitalize text-lg sm:text-xl mb-1">Get Free Checklist</h3>
        <p class="text-gray-500 text-xs mb-5 sm:mb-6">Society Gate Security Audit — Response within 24 hours</p>
        <form action="../includes/contact.php" method="POST" class="space-y-3 sm:space-y-4">
          <input type="hidden" name="form_type" value="residential_society_checklist" />
          <div class="grid sm:grid-cols-2 gap-3 sm:gap-4">
            <div><label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1 block">Name *</label><input type="text" name="name" required placeholder="Your full name" class="input-field" /></div>
            <div><label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1 block">Phone *</label><input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX" class="input-field" /></div>
          </div>
          <div><label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1 block">Society / RWA Name</label><input type="text" name="company" placeholder="Your society or RWA name" class="input-field" /></div>
          <div><label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1 block">Location</label>
            <select name="location" class="input-field"><option value="">Select NCR area</option><option>Delhi</option><option>Noida</option><option>Greater Noida</option><option>Gurgaon</option><option>Faridabad</option><option>Ghaziabad</option><option>Manesar</option><option>Sonipat</option><option>Other NCR Area</option></select>
          </div>
          <div><label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1 block">Society Size</label>
            <select name="society_size" class="input-field"><option value="">Select size</option><option>Small (up to 50 units)</option><option>Medium (50–200 units)</option><option>Large (200–500 units)</option><option>Very Large / Group Housing (500+ units)</option></select>
          </div>
          <button type="submit" class="w-full bg-brand-dark hover:bg-gray-800 text-white font-bold py-3 sm:py-3.5 rounded-lg capitalize tracking-wider text-xs sm:text-sm transition-colors flex items-center justify-center gap-2"><i class="fa fa-download text-xs"></i> Download Free Checklist</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ══════ 8. FAQs — light gray ══════ -->
<section class="py-10 sm:py-16 md:py-20 bg-gray-50">
  <div class="max-w-3xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-8 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">Common Questions</p>
      <h2 class="font-display font-black capitalize text-xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-1">Frequently Asked</h2>
      <div class="y-divider-center mx-auto mt-4"></div>
    </div>
    <div class="space-y-3">
      <?php
      $faqs = [
        ['q'=>'How many security guards does our residential society need?','a'=>'It depends on the number of gates, towers, units, and shift coverage required. Small societies (up to 50 units, 1 gate) typically need 1–2 guards; medium societies need 3–6; large group housing complexes need 6+ guards with a supervisor. We offer a free site visit to give you an exact recommendation.'],
        ['q'=>'Can we hire guards for specific shift timings — day, night, or both?','a'=>'Yes. We deploy guards for day shifts, night shifts, 12-hour shifts, and full 24-hour coverage with rotating personnel. Shift timings are confirmed during the briefing stage and followed consistently throughout the contract.'],
        ['q'=>'How do you manage domestic worker and visitor entry in societies?','a'=>'We brief guards specifically on your society\'s domestic worker entry protocol. This typically includes maintaining a daily register, verifying identity against a pre-registered list, calling the resident for unregistered visitors, and issuing timed visitor passes — adapted to your existing gate management setup.'],
        ['q'=>'What happens if a guard is absent or doesn\'t report for duty?','a'=>'We provide replacement support — our supervisor team monitors guard attendance and arranges a backup within the same shift window if a guard is absent. Your gate is never left unmanned due to absence.'],
        ['q'=>'Do you provide lady security guards for residential societies?','a'=>'Yes. Many residential societies specifically request lady guards for visitor frisking, women\'s-only entry points, or to provide a more resident-friendly gate experience. We deploy trained female security officers as required.'],
        ['q'=>'Can the RWA manage the guards directly, or does Conquer Services handle it?','a'=>'Our model is fully managed — we handle deployment, attendance tracking, shift management, supervisor visits, and escalation. The RWA interacts with guards on daily duty matters, but all backend HR, payroll, and compliance is handled entirely by us.'],
        ['q'=>'Are the guards background verified before deployment?','a'=>'Yes. Every guard undergoes ID verification, address verification, police verification support, and previous employment checks before being cleared for deployment. Documentation is maintained by our operations team.'],
        ['q'=>'What contract terms do you offer for residential societies?','a'=>'We offer monthly, quarterly, and annual contracts. RWA-friendly terms are available including monthly billing, transparent service charges, and no hidden costs. Contact us for a customised quote based on your society size and requirements.'],
      ];
      foreach ($faqs as $i => $faq): ?>
      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:<?php echo $i*0.04; ?>s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-xs sm:text-lg pr-4"><?php echo $faq['q']; ?></span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-4 sm:pb-5 text-gray-500 text-xs sm:text-base leading-relaxed"><?php echo $faq['a']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════ 9. FINAL CTA — YELLOW ══════ -->
<section class="py-10 sm:py-16 md:py-20 bg-brand-yellow">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center fade-up">
    <h2 class="font-display font-black capitalize text-xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-3 sm:mb-4">Need Security Guards for<br/>Your Residential Society?</h2>
    <p class="text-brand-dark/70 text-xs sm:text-lg mb-6 sm:mb-8 max-w-lg mx-auto">Get a free site assessment and the right guard deployment plan for your society — verified, trained, and deployed within 48 hours of confirmation.</p>
    <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-2 sm:gap-4">
      <a href="../contact" class="w-full sm:w-auto bg-brand-dark hover:bg-gray-800 text-white font-bold px-6 sm:px-8 py-3 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-base transition-colors shadow-lg">Get Free Site Assessment</a>
      <a href="tel:+919430695171" class="w-full sm:w-auto justify-center flex items-center gap-2 border-2 border-brand-dark/50 text-brand-dark hover:border-brand-dark font-bold px-6 sm:px-8 py-3 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-base transition-colors"><i class="fa fa-phone"></i> Call Now</a>
    </div>
  </div>
</section>

<script>
  function toggleFAQ(btn) {
    const body = btn.nextElementSibling;
    const icon = btn.querySelector('i');
    const isOpen = body.style.maxHeight && body.style.maxHeight !== '0px';
    document.querySelectorAll('.faq-body').forEach(b => b.style.maxHeight = '0px');
    document.querySelectorAll('.faq-toggle i').forEach(i => i.classList.remove('rotate-45'));
    if (!isOpen) { body.style.maxHeight = body.scrollHeight + 'px'; icon.classList.add('rotate-45'); }
  }
</script>

<?php include '../includes/footer.php'; ?>