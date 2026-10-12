<?php
/**
 * Paste complete Cloudinary secure URLs below.
 * Keep the array keys unchanged; only replace the URL values.
 */
$media = [
    'hero_banner'       => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1785131019/Hero-section_img_hiuy25.webp',
    'intro_industrial'  => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784810847/Who_We_Protect2_ktfjpc.webp',
    'solution_image'    => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1785131130/Our_Deployment_Model_zoycyj.webp',
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
$page_title       = "Factory & Industrial Unit Security Guard Services in Delhi NCR | Conquer Services";
$page_description = "Professional security guards and supervisors for factories and industrial units across Delhi NCR — designed to protect people, property, assets, workers, and daily plant operations.";
$active_page      = "industries";
$base_path        = "../";
include '../includes/header.php';
?>

<style>
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
  .service-card { transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s; }
  @media (max-width: 640px) {
    .service-card:hover { transform: none; }
  }
</style>

<!-- ══════════════════════════════════════════
     1. HERO SECTION
═══════════════════════════════════════════ -->
<section class="relative min-h-[320px] sm:min-h-[360px] md:h-[380px] lg:h-[420px] overflow-hidden bg-brand-dark">
  <div class="absolute inset-0">
    <img src="<?= mediaUrl($media, 'hero_banner'); ?>" alt="Factory and industrial security guards" fetchpriority="high" decoding="async" class="w-full h-full object-cover object-[center_30%]" />
  </div>
  <div class="page-hero-overlay absolute inset-0"></div>
  <div class="relative z-10 h-full flex flex-col justify-center py-10 sm:py-12 md:py-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">

      <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">Industry Solutions</p>
      <h1 class="font-display font-black capitalize leading-tight sm:leading-none text-white mb-3 sm:mb-4">
        <span class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl block">Factories & Industrial Units</span>
        <span class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-brand-yellow block">Security Guard Services</span>
        <span class="text-base sm:text-xl md:text-2xl lg:text-3xl text-white/80 block mt-1 sm:mt-2">in Delhi NCR</span>
      </h1>
      <p class="text-white/70 text-xs sm:text-sm md:text-lg max-w-xl leading-relaxed">
        Professional security guards and supervisors for factories and industrial units, designed to protect people, property, assets, workers, and daily plant operations.
      </p>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-brand-yellow"></div>
</section>


<!-- ══════════════════════════════════════════
     INTRO — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid md:grid-cols-2 gap-10 md:gap-12 lg:gap-14 items-center">
      <div class="fade-up">
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Built for Industrial Environments</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight sm:leading-none mb-4">
          Professional Security<br/><span style="color:#C9A91E;">for Factories & Plants</span>
        </h2>
        <div class="y-divider-center mb-6"></div>
        <p class="text-gray-500 text-lg leading-relaxed mb-4">
          Factories and industrial units operate round the clock with high-value machinery, raw materials, finished goods, and large workforces moving across complex sites. Security here isn't just about guards at the gate — it's about controlling who enters, what moves in and out, and how incidents are responded to across every shift.
        </p>
        <p class="text-gray-500 text-lg leading-relaxed mb-8">
          We deploy trained, disciplined guards briefed on your specific plant layout, shift timings, material movement protocols, and emergency procedures — before they arrive on site.
        </p>
        <div class="flex flex-col sm:flex-row flex-wrap gap-3">
          <a href="../contact" class="bg-brand-dark hover:bg-gray-800 text-white font-bold px-7 py-3 rounded capitalize tracking-wider text-base transition-colors text-center">Get Free Quote</a>
        </div>
      </div>
      <div class="relative fade-up mt-10 md:mt-0" style="animation-delay:0.1s">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="<?= mediaUrl($media, 'intro_industrial'); ?>" alt="Industrial plant security" loading="lazy" decoding="async" sizes="(max-width: 767px) 100vw, 50vw" class="w-full h-full object-cover" />
        </div>
        <div class="absolute -bottom-4 -right-3 sm:-bottom-5 sm:-right-5 bg-brand-yellow rounded-2xl p-4 sm:p-5 shadow-xl text-center">
          <div class="font-display font-black text-xl sm:text-2xl text-brand-dark leading-none">24/7</div>
          <div class="text-brand-dark font-bold text-[10px] sm:text-xs capitalize tracking-wider mt-1">Coverage</div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     2. INDUSTRY SECURITY CHALLENGES — light gray
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 md:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Common Risks</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-4">Industrial Security<br/><span style="color:#C9A91E;">Challenges We Solve</span></h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5">

      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-user-slash text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Unauthorised Entry</h4>
        <p class="text-gray-500 text-base leading-relaxed">Unauthorised persons entering production floors, restricted zones, or storage areas without proper verification or passes.</p>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-boxes text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Theft & Pilferage</h4>
        <p class="text-gray-500 text-base leading-relaxed">Theft of raw materials, finished goods, tools, and equipment — often by insiders during shift changes or at exit gates.</p>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-truck text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Material Movement Issues</h4>
        <p class="text-gray-500 text-base leading-relaxed">Unverified vehicles, unofficial material exits, and missing gate pass documentation enabling goods loss at loading docks.</p>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-moon text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Night Security Risks</h4>
        <p class="text-gray-500 text-base leading-relaxed">Reduced staff during night shifts creates vulnerabilities — unmonitored entry points, perimeter gaps, and slow incident response.</p>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-fire text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Emergency Response Gaps</h4>
        <p class="text-gray-500 text-base leading-relaxed">Fire breakouts, machinery accidents, chemical spills, and medical emergencies require trained first responders who know the layout.</p>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-users text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Worker & Contractor Safety</h4>
        <p class="text-gray-500 text-base leading-relaxed">Managing daily contract labour, third-party vendors, and visitors entering restricted production areas without standard checks.</p>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-car text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Vehicle & Parking Issues</h4>
        <p class="text-gray-500 text-base leading-relaxed">Unregistered vehicles in factory premises, blocked loading zones, and uncontrolled vehicle movement near production areas.</p>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-shield-alt text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Perimeter & Boundary Breaches</h4>
        <p class="text-gray-500 text-base leading-relaxed">Large industrial land areas with unmanned perimeter fencing, boundary gaps, and no regular perimeter patrol rounds in place.</p>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-exclamation-triangle text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Industrial Dispute Situations</h4>
        <p class="text-gray-500 text-base leading-relaxed">Labour disputes, strikes, or agitations near factory gates requiring professional crowd management and neutral security presence.</p>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     3. OUR SECURITY SOLUTION — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid md:grid-cols-2 gap-10 md:gap-12 lg:gap-14 items-center">

      <div class="fade-up">
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Our Deployment Model</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight sm:leading-none mb-4">
          How We Secure<br/><span style="color:#C9A91E;">Your Factory & Plant</span>
        </h2>
        <div class="y-divider-center mb-6"></div>
        <p class="text-gray-500 text-lg leading-relaxed mb-6">
          Every guard is briefed on your factory's gate layout, shift schedule, material movement rules, restricted zones, and emergency escalation procedure before their first duty.
        </p>
        <div class="space-y-4">
          <div class="flex gap-3 sm:gap-4 items-start">
            <div class="w-9 h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-door-open text-brand-dark text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-base mb-0.5">Entry Gate Control</h4>
              <p class="text-gray-500 text-sm leading-relaxed">Strict checking of worker ID cards, contractor passes, vehicle numbers, and visitor authorisations at every gate point.</p>
            </div>
          </div>
          <div class="flex gap-3 sm:gap-4 items-start">
            <div class="w-9 h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-clipboard-check text-brand-dark text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-base mb-0.5">Material Movement Checks</h4>
              <p class="text-gray-500 text-sm leading-relaxed">Verification of gate passes for all inward and outward material, goods, and machinery to prevent pilferage.</p>
            </div>
          </div>
          <div class="flex gap-3 sm:gap-4 items-start">
            <div class="w-9 h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-route text-brand-dark text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-base mb-0.5">Perimeter & Plant Patrolling</h4>
              <p class="text-gray-500 text-sm leading-relaxed">Scheduled patrol rounds covering perimeter fence, production floors, warehousing zones, loading docks, and parking areas.</p>
            </div>
          </div>
          <div class="flex gap-3 sm:gap-4 items-start">
            <div class="w-9 h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-video text-brand-dark text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-base mb-0.5">CCTV Coordination</h4>
              <p class="text-gray-500 text-sm leading-relaxed">Guards coordinate with CCTV operators to monitor blind spots, loading areas, and storage zones in real time.</p>
            </div>
          </div>
          <div class="flex gap-3 sm:gap-4 items-start">
            <div class="w-9 h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-fire-extinguisher text-brand-dark text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-base mb-0.5">Emergency Response</h4>
              <p class="text-gray-500 text-sm leading-relaxed">Trained first-response action for fire, machinery accidents, worker injury, and chemical spills with immediate escalation to supervisors.</p>
            </div>
          </div>
          <div class="flex gap-3 sm:gap-4 items-start">
            <div class="w-9 h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-file-alt text-brand-dark text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-base mb-0.5">Shift Reporting & Logs</h4>
              <p class="text-gray-500 text-sm leading-relaxed">End-of-shift incident reports, occurrence register, vehicle logs, and visitor records maintained for every duty period.</p>
            </div>
          </div>
          <div class="flex gap-3 sm:gap-4 items-start">
            <div class="w-9 h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-user-check text-brand-dark text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-base mb-0.5">Supervisor Checks</h4>
              <p class="text-gray-500 text-sm leading-relaxed">Field supervisors conduct unannounced visits and daily performance checks across all deployed guards and shifts.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="relative fade-up mt-10 md:mt-0" style="animation-delay:0.1s">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="<?= mediaUrl($media, 'solution_image'); ?>" alt="Factory gate security deployment" loading="lazy" decoding="async" sizes="(max-width: 767px) 100vw, 50vw" class="w-full h-full object-cover" />
        </div>
        <div class="grid grid-cols-2 gap-3 sm:gap-4 mt-4">
          <div class="bg-gray-50 border border-gray-200 rounded-xl p-3 sm:p-4 text-center">
            <i class="fa fa-clock text-brand-dark mb-2 block text-base sm:text-lg"></i>
            <span class="text-brand-dark text-[11px] sm:text-sm font-bold capitalize">3-Shift Coverage</span>
          </div>
          <div class="bg-gray-50 border border-gray-200 rounded-xl p-3 sm:p-4 text-center">
            <i class="fa fa-shield-alt text-brand-dark mb-2 block text-base sm:text-lg"></i>
            <span class="text-brand-dark text-[11px] sm:text-sm font-bold capitalize">Verified Guards</span>
          </div>
          <div class="bg-gray-50 border border-gray-200 rounded-xl p-3 sm:p-4 text-center">
            <i class="fa fa-route text-brand-dark mb-2 block text-base sm:text-lg"></i>
            <span class="text-brand-dark text-[11px] sm:text-sm font-bold capitalize">Perimeter Patrol</span>
          </div>
          <div class="bg-gray-50 border border-gray-200 rounded-xl p-3 sm:p-4 text-center">
            <i class="fa fa-headset text-brand-dark mb-2 block text-base sm:text-lg"></i>
            <span class="text-brand-dark text-[11px] sm:text-sm font-bold capitalize">24/7 Supervision</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     4. RECOMMENDED MANPOWER DEPLOYMENT — light gray
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-gray-50">
  <div class="max-w-5xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Quick Reference</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-4">Recommended Manpower Deployment</h2>
      <div class="y-divider-center mx-auto mb-4"></div>
      <p class="text-gray-500 text-lg max-w-xl mx-auto">Actual deployment is always finalised after a site visit and risk assessment. This table is a general guide only.</p>
    </div>
    <div class="overflow-x-auto fade-up -mx-4 sm:mx-0 px-4 sm:px-0">
      <table class="w-full text-xs sm:text-sm border border-gray-200 rounded-xl overflow-hidden bg-white min-w-[480px]">
        <thead>
          <tr class="bg-brand-dark text-white text-left">
            <th class="px-4 sm:px-6 py-3 sm:py-4 font-semibold capitalize text-[11px] sm:text-lg tracking-wider">Site Type</th>
            <th class="px-4 sm:px-6 py-3 sm:py-4 font-semibold capitalize text-[11px] sm:text-lg tracking-wider">Suggested Deployment</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 text-base">
          <tr class="bg-gray-50">
            <td class="px-4 sm:px-6 py-3 sm:py-4 font-semibold text-brand-dark">Small Factory / Workshop</td>
            <td class="px-4 sm:px-6 py-3 sm:py-4 text-gray-600">1–2 guards, day & night shift</td>
          </tr>
          <tr class="bg-white">
            <td class="px-4 sm:px-6 py-3 sm:py-4 font-semibold text-brand-dark">Medium Industrial Unit</td>
            <td class="px-4 sm:px-6 py-3 sm:py-4 text-gray-600">3–6 guards across shifts with gate & patrol duties</td>
          </tr>
          <tr class="bg-gray-50">
            <td class="px-4 sm:px-6 py-3 sm:py-4 font-semibold text-brand-dark">Large Manufacturing Plant</td>
            <td class="px-4 sm:px-6 py-3 sm:py-4 text-gray-600">Multiple guards per shift with dedicated supervisor</td>
          </tr>
          <tr class="bg-white">
            <td class="px-4 sm:px-6 py-3 sm:py-4 font-semibold text-brand-dark">High-Risk / Restricted Site</td>
            <td class="px-4 sm:px-6 py-3 sm:py-4 text-gray-600">Armed/unarmed guards + supervisor + CCTV + QRT support</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     5. DUTIES & RESPONSIBILITIES — DARK
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-brand-dark">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 md:mb-14 fade-up">
      <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Scope of Work</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-white mb-4">Guard Duties at<br/><span class="text-brand-yellow">Factories & Industrial Sites</span></h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5">

      <div class="bg-white/5 border border-white/10 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-door-open text-brand-yellow text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-white text-lg capitalize mb-1">Gate Entry & Exit Control</h4>
        <p class="text-gray-400 text-base leading-relaxed">Checking all incoming and outgoing persons, vehicles, and materials with valid gate passes and ID verification at every entry point.</p>
      </div>

      <div class="bg-white/5 border border-white/10 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-clipboard-list text-brand-yellow text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-white text-lg capitalize mb-1">Vehicle & Labour Log Maintenance</h4>
        <p class="text-gray-400 text-base leading-relaxed">Recording vehicle numbers, driver details, material type, and entry/exit times in the site register for every movement.</p>
      </div>

      <div class="bg-white/5 border border-white/10 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-search text-brand-yellow text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-white text-lg capitalize mb-1">Worker Frisking & Bag Checks</h4>
        <p class="text-gray-400 text-base leading-relaxed">Random bag and person checks at shift end to prevent unauthorised removal of tools, components, or raw materials from the plant.</p>
      </div>

      <div class="bg-white/5 border border-white/10 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-route text-brand-yellow text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-white text-lg capitalize mb-1">Perimeter & Plant Patrolling</h4>
        <p class="text-gray-400 text-base leading-relaxed">Scheduled patrol rounds of factory perimeter fencing, production areas, storage yards, and loading docks at defined intervals.</p>
      </div>

      <div class="bg-white/5 border border-white/10 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-parking text-brand-yellow text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-white text-lg capitalize mb-1">Parking & Vehicle Management</h4>
        <p class="text-gray-400 text-base leading-relaxed">Managing company vehicle parking, contractor vehicles, and ensuring no unauthorised vehicles enter production or restricted zones.</p>
      </div>

      <div class="bg-white/5 border border-white/10 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-fire-extinguisher text-brand-yellow text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-white text-lg capitalize mb-1">Emergency First Response</h4>
        <p class="text-gray-400 text-base leading-relaxed">Immediate action for fire, medical emergencies, machinery incidents, and chemical spills with escalation to supervisors and emergency services.</p>
      </div>

      <div class="bg-white/5 border border-white/10 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-moon text-brand-yellow text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-white text-lg capitalize mb-1">Night Shift Monitoring</h4>
        <p class="text-gray-400 text-base leading-relaxed">Continuous monitoring during night shifts when the plant is low-staffed, covering all entry points, perimeter, and internal zones.</p>
      </div>

      <div class="bg-white/5 border border-white/10 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-video text-brand-yellow text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-white text-lg capitalize mb-1">CCTV & Access Control Support</h4>
        <p class="text-gray-400 text-base leading-relaxed">Working alongside CCTV monitoring rooms to flag suspicious activity, track movement in restricted zones, and investigate incidents.</p>
      </div>

      <div class="bg-white/5 border border-white/10 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-file-alt text-brand-yellow text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-white text-lg capitalize mb-1">Shift Handover & Incident Reports</h4>
        <p class="text-gray-400 text-base leading-relaxed">Structured shift handover briefings and end-of-shift incident reports filed for all occurrences, thefts, accidents, or suspicious activity.</p>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     6. SUITABLE SERVICES — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 md:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Recommended for This Industry</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-4">Suitable Security<br/><span style="color:#C9A91E;">Services for Factories</span></h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 text-lg max-w-xl mx-auto leading-relaxed">A combination of these services gives factories and industrial units the most complete security coverage across all shifts and zones.</p>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3 sm:gap-4">

      <a href="../security-guard-services/unarmed-security" class="service-card group bg-gray-50 border border-gray-200 hover:border-brand-yellow rounded-xl p-4 sm:p-5 text-center fade-up transition-all">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-shield-alt text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1">Unarmed Security Guards</h4>
        <p class="text-gray-500 text-[16px] leading-relaxed">Gate duty, patrolling, and shift coverage</p>
        <div class="mt-2 text-brand-dark text-[14px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

      <a href="../security-guard-services/armed-security" class="service-card group bg-gray-50 border border-gray-200 hover:border-brand-yellow rounded-xl p-4 sm:p-5 text-center fade-up transition-all" style="animation-delay:0.05s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-user-shield text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1">Armed Security Guards</h4>
        <p class="text-gray-500 text-[16px] leading-relaxed">For high-value inventory and restricted areas</p>
        <div class="mt-2 text-brand-dark text-[14px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

      <a href="../security-guard-services/lady-security" class="service-card group bg-gray-50 border border-gray-200 hover:border-brand-yellow rounded-xl p-4 sm:p-5 text-center fade-up transition-all" style="animation-delay:0.1s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-venus text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1">Lady Security Guards</h4>
        <p class="text-gray-500 text-[16px] leading-relaxed">For female worker entry points and frisking</p>
        <div class="mt-2 text-brand-dark text-[14px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

      <a href="../technology&support/cctv-monitoring" class="service-card group bg-gray-50 border border-gray-200 hover:border-brand-yellow rounded-xl p-4 sm:p-5 text-center fade-up transition-all" style="animation-delay:0.15s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-video text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1">CCTV Monitoring</h4>
        <p class="text-gray-500 text-[16px] leading-relaxed">24/7 surveillance of production and storage zones</p>
        <div class="mt-2 text-brand-dark text-[14px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

      <a href="../technology&support/visitor-management" class="service-card group bg-gray-50 border border-gray-200 hover:border-brand-yellow rounded-xl p-4 sm:p-5 text-center fade-up transition-all">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-id-badge text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1">Visitor Management</h4>
        <p class="text-gray-500 text-[16px] leading-relaxed">Contractor and visitor pass control at gates</p>
        <div class="mt-2 text-brand-dark text-[14px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

      <a href="../technology&support/patrolling-quick-response-team" class="service-card group bg-gray-50 border border-gray-200 hover:border-brand-yellow rounded-xl p-4 sm:p-5 text-center fade-up transition-all" style="animation-delay:0.05s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-running text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1">Patrolling & QRT</h4>
        <p class="text-gray-500 text-[16px] leading-relaxed">Quick response team for perimeter and incident alerts</p>
        <div class="mt-2 text-brand-dark text-[14px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

      <a href="../facility-management" class="service-card group bg-gray-50 border border-gray-200 hover:border-brand-yellow rounded-xl p-4 sm:p-5 text-center fade-up transition-all" style="animation-delay:0.1s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-fire-extinguisher text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1">Fire & Safety Personnel</h4>
        <p class="text-gray-500 text-[16px] leading-relaxed">Trained fire safety officers for industrial sites</p>
        <div class="mt-2 text-brand-dark text-[14px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

      <a href="../contact" class="service-card group bg-brand-dark border border-brand-dark rounded-xl p-4 sm:p-5 text-center fade-up transition-all" style="animation-delay:0.15s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-phone text-brand-yellow group-hover:text-brand-dark text-base sm:text-lg transition-colors"></i>
        </div>
        <h4 class="font-display font-bold text-white text-lg capitalize leading-tight mb-1">Not Sure What You Need?</h4>
        <p class="text-gray-400 text-[16px] leading-relaxed">Talk to us — we'll plan the right mix</p>
        <div class="mt-2 text-brand-yellow text-[14px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Talk to Us <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     7. LEAD MAGNET — DARK with image
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 relative overflow-hidden">
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.95) 0%, rgba(10,10,10,0.85) 100%), url('<?= mediaUrl($media, 'lead_background'); ?>') center/cover no-repeat;"></div>
  <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6">
    <div class="grid md:grid-cols-2 gap-10 sm:gap-12 items-center">
      <div class="fade-up">
        <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Free Resource</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-white leading-tight sm:leading-none mb-4">
          Factory Gate &<br/><span class="text-brand-yellow">Material Movement Security Checklist</span>
        </h2>
        <p class="text-white/70 text-lg leading-relaxed mb-5">
          Get a practical checklist covering gate control, material movement verification, shift handover procedures, and emergency protocols specifically designed for factories and industrial plants.
        </p>
        <ul class="space-y-2.5">
          <li class="flex items-center gap-2 text-white/80 text-lg"><i class="fa fa-check text-brand-yellow text-xs"></i> Gate pass and vehicle entry procedures</li>
          <li class="flex items-center gap-2 text-white/80 text-lg"><i class="fa fa-check text-brand-yellow text-xs"></i> Material inward/outward verification steps</li>
          <li class="flex items-center gap-2 text-white/80 text-lg"><i class="fa fa-check text-brand-yellow text-xs"></i> Shift handover and patrol round checklist</li>
          <li class="flex items-center gap-2 text-white/80 text-lg"><i class="fa fa-check text-brand-yellow text-xs"></i> Emergency escalation contact structure</li>
          <li class="flex items-center gap-2 text-white/80 text-lg"><i class="fa fa-check text-brand-yellow text-xs"></i> 100% free, no obligation</li>
        </ul>
      </div>
      <div class="bg-white rounded-2xl p-5 sm:p-6 md:p-8 fade-up mt-6 md:mt-0" style="animation-delay:0.1s">
        <h3 class="font-display font-bold text-brand-dark capitalize text-lg sm:text-xl mb-5 sm:mb-6">Get Free Checklist</h3>
        <form action="../includes/contact.php" method="POST" class="space-y-4">
          <input type="hidden" name="form_type" value="factory_security_checklist" />
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Name *</label>
            <input type="text" name="name" required placeholder="Your full name" class="input-field" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Phone *</label>
            <input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX" class="input-field" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Company / Factory Name</label>
            <input type="text" name="company" placeholder="Your organisation" class="input-field" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Location</label>
            <select name="location" class="input-field">
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
          <button type="submit" class="w-full bg-brand-dark hover:bg-gray-800 text-white font-bold py-3.5 rounded-lg capitalize tracking-wider text-sm transition-colors flex items-center justify-center gap-2">
            <i class="fa fa-download text-xs"></i> Get Free Checklist
          </button>
        </form>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     8. FAQs — light gray
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-gray-50">
  <div class="max-w-3xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2">Common Questions</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-1">Frequently Asked</h2>
      <div class="y-divider-center mx-auto mt-4"></div>
    </div>
    <div class="space-y-3">

      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden fade-up">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can you provide guards for all three factory shifts — day, evening, and night?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. We deploy guards for all shift timings including 8-hour day, evening, and night shifts, as well as 12-hour and 24-hour coverage. Duty charts are prepared specific to your plant's shift schedule before deployment begins.</p>
        </div>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.05s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">How do your guards handle material movement at factory gates?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Guards are briefed on your specific gate pass and material movement procedure before deployment. They verify inward and outward gate passes for all goods, check vehicle details, and maintain a vehicle register for every shift. Any discrepancy is escalated to the supervisor immediately.</p>
        </div>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.1s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you provide female guards for frisking at factory entry points?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. We provide trained lady security guards specifically for factories requiring female worker frisking at entry/exit points. This is particularly useful for factories with large female workforces in the garment, food processing, or pharmaceutical sectors.</p>
        </div>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.15s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">How do you handle a theft or pilferage incident at the factory?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Guards are trained to immediately secure the incident location, detain the concerned person, escalate to the supervisor, and initiate a written report. Our supervisor coordinates with your factory management for any further action including involving law enforcement if required.</p>
        </div>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.2s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do your guards have fire safety and emergency response training?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. All guards receive basic fire safety awareness, emergency evacuation protocol training, and first-response awareness before deployment. For high-risk industrial sites requiring dedicated fire safety officers, we also provide trained fire safety personnel as a separate service.</p>
        </div>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.25s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can you cover large industrial campuses with multiple gate points?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. We deploy multi-guard teams with a dedicated supervisor for large industrial campuses with multiple entry gates, loading bays, production blocks, and perimeter patrol requirements. A site-specific duty chart is prepared before deployment to cover every post.</p>
        </div>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.3s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Are the guards background verified before being sent to the factory?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. Every guard undergoes document verification (Aadhaar, PAN), address verification, police verification support, and previous work history checks before being approved for deployment by our operations supervisor. All records are maintained on file and available to the client on request.</p>
        </div>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.35s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">What happens if a guard is absent during a shift?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">We maintain a ready pool of backup staff and arrange a replacement guard as quickly as possible so your factory's shift coverage is never left unattended. Our supervisors are on call to manage any attendance gaps immediately.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     9. FINAL CTA — YELLOW
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-brand-yellow">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center fade-up">
    <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight sm:leading-none mb-4">
      Need Security Guards for<br/>Your Factory or Industrial Unit?
    </h2>
    <p class="text-brand-dark/70 text-sm sm:text-lg mb-8 max-w-lg mx-auto">
      Get a free site assessment and a customised security deployment plan built around your factory's shift schedule, gate layout, and risk profile.
    </p>
    <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-3 sm:gap-4">
      <a href="../contact" class="bg-brand-dark hover:bg-gray-800 text-white font-bold px-7 sm:px-8 py-3.5 rounded capitalize tracking-wider text-base transition-colors shadow-lg text-center">
        Get Free Site Assessment
      </a>

      <a href="tel:+919430695171" class="flex items-center justify-center gap-2 border-2 border-brand-dark/50 text-brand-dark hover:border-brand-dark font-bold px-7 sm:px-8 py-3.5 rounded capitalize tracking-wider text-base transition-colors text-center">
        <i class="fa fa-phone"></i> +91 94306 95171
      </a>
    </div>
  </div>
</section>


<?php include '../includes/footer.php'; ?>