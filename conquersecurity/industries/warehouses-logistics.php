<?php
/**
 * Paste complete Cloudinary secure URLs below.
 * Keep the array keys unchanged; only replace the URL values.
 */
$media = [
    'hero_banner'     => 'PASTE_CLOUDINARY_IMAGE_URL_HERE',
    'intro_image'     => 'PASTE_CLOUDINARY_IMAGE_URL_HERE',
    'solution_image'  => 'PASTE_CLOUDINARY_IMAGE_URL_HERE',
    'lead_background' => 'PASTE_CLOUDINARY_IMAGE_URL_HERE',
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
$page_title       = "Warehouse & Logistics Security Guard Services in Delhi NCR | Conquer Services";
$page_description = "Professional security guards and supervisors for warehouses and logistics facilities, designed to protect people, property, assets, visitors, and daily operations across Delhi NCR.";
$active_page      = "industries";
$base_path        = "../";
include '../includes/header.php';
?>

<style>
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
  .challenge-card { transition: transform 0.3s, box-shadow 0.3s; }
  .challenge-card:hover { transform: translateY(-4px); box-shadow: 0 16px 40px rgba(0,0,0,0.08); }
  .service-link-card { transition: all 0.25s ease; }
  .service-link-card:hover { border-color: #F2CF4A; background: rgba(242,207,74,0.08); transform: translateY(-3px); }
  .duty-item { transition: border-color 0.25s, background 0.25s; }
  .duty-item:hover { border-color: #F2CF4A; background: rgba(255,255,255,0.06); }
  .faq-body { max-height: 0; overflow: hidden; transition: max-height 0.35s ease; }
</style>


<!-- ══════════════════════════════════════════
     1. HERO SECTION
═══════════════════════════════════════════ -->
<section class="relative min-h-[280px] sm:h-[320px] md:h-[380px] lg:h-[420px] overflow-hidden bg-brand-dark py-8 sm:py-0">
  <div class="absolute inset-0">
    <img src="<?= mediaUrl($media, 'hero_banner'); ?>" alt="Warehouse and logistics security" fetchpriority="high" decoding="async" class="w-full h-full object-cover" style="object-position: 100% 35%;" />
  </div>
  <div class="page-hero-overlay absolute inset-0"></div>

  <div class="relative z-10 h-full flex flex-col justify-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">

      <p class="text-brand-yellow font-semibold capitalize tracking-widest text-[11px] sm:text-base mb-2 sm:mb-3">Industry Solutions</p>
      <h1 class="font-display font-black capitalize leading-tight sm:leading-none text-white">
        <span class="text-2xl sm:text-4xl md:text-5xl block">Warehouse &amp; Logistics</span>
        <span class="text-2xl sm:text-4xl md:text-5xl text-brand-yellow block mt-1 sm:mt-0">Security Guard Services<br class="hidden sm:inline"> in Delhi NCR</span>
      </h1>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-brand-yellow"></div>
</section>


<!-- ══════════════════════════════════════════
     INTRO — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 lg:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-10 sm:gap-12 lg:gap-14 items-center">

      <div class="fade-up">
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Built for Warehouse &amp; Logistics Facilities</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight sm:leading-none mb-4">
          Professional Security for<br class="hidden sm:inline"/> <span style="color:#C9A91E;">Warehouses &amp; Logistics</span>
        </h2>
        <div class="y-divider-center mb-5 sm:mb-6"></div>
        <p class="text-gray-500 text-lg leading-relaxed mb-4">
          Warehouses and logistics facilities handle high-value inventory, constant vehicle movement, and a large rotating workforce — making them one of the most theft-prone and operationally complex environments to secure.
        </p>
        <p class="text-gray-500 text-lg leading-relaxed mb-7 sm:mb-8">
          Our trained guards are briefed on your material movement protocols, gate entry procedures, shift schedules, and emergency response plans before deployment — ensuring security that keeps operations running without disruption.
        </p>
        <div class="flex flex-col sm:flex-row flex-wrap gap-3">
          <a href="../contact" class="bg-brand-dark hover:bg-gray-800 text-white font-bold px-7 py-3 rounded capitalize tracking-wider text-base transition-colors text-center w-full sm:w-auto">Get Free Quote</a>
        </div>
      </div>

      <div class="relative fade-up mt-4 sm:mt-0" style="animation-delay:0.1s">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="<?= mediaUrl($media, 'intro_image'); ?>" alt="Warehouse security guard on patrol" loading="lazy" decoding="async" sizes="(max-width: 1023px) 100vw, 50vw" class="w-full h-full object-cover" />
        </div>
        <div class="absolute -bottom-4 -right-4 sm:-bottom-5 sm:-right-5 bg-brand-yellow rounded-xl sm:rounded-2xl p-3.5 sm:p-5 shadow-xl text-center">
          <div class="font-display font-black text-lg sm:text-2xl text-brand-dark leading-none">24/7</div>
          <div class="text-brand-dark font-bold text-[10px] sm:text-base capitalize tracking-wider mt-1">Site Coverage</div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     2. SECURITY CHALLENGES — GRAY
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 lg:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 lg:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Common Risks</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-4 leading-tight sm:leading-tight">
        Warehouse Security<br class="hidden sm:inline"/> <span style="color:#C9A91E;">Challenges We Solve</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5">
      <?php
      $challenges = [
        ['icon'=>'fa-box-open',            'title'=>'Theft & Pilferage',             'desc'=>'Inventory theft and internal pilferage during loading, unloading, and shift changeovers.'],
        ['icon'=>'fa-user-slash',          'title'=>'Unauthorised Entry',            'desc'=>'Unverified personnel and visitors accessing storage zones, loading bays, and restricted areas.'],
        ['icon'=>'fa-truck',               'title'=>'Vehicle & Logistics Control',   'desc'=>'Untracked trucks, tempos, and delivery vehicles creating security and accountability gaps.'],
        ['icon'=>'fa-boxes',               'title'=>'Material Movement Issues',      'desc'=>'Goods leaving or entering the facility without proper documentation and security verification.'],
        ['icon'=>'fa-moon',                'title'=>'Night Security Risks',          'desc'=>'High-value inventory left unguarded or inadequately monitored during night and non-operational hours.'],
        ['icon'=>'fa-exclamation-triangle','title'=>'Emergency Response Gaps',       'desc'=>'Absence of a trained first-response team for fire, accident, or security incidents inside the facility.'],
        ['icon'=>'fa-users',               'title'=>'Workforce Access Management',   'desc'=>'Large and rotating daily-wage workforce moving across zones without proper access control.'],
        ['icon'=>'fa-fire',                'title'=>'Fire & Safety Risk',            'desc'=>'Combustible packaging, electrical equipment, and dense storage create elevated fire risk in warehouses.'],
        ['icon'=>'fa-id-card',             'title'=>'Visitor & Vendor Mismanagement','desc'=>'Vendors, auditors, and clients entering facility zones without logged verification or escort.'],
      ];
      foreach ($challenges as $i => $c):
      ?>
      <div class="challenge-card bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:<?php echo $i*0.05; ?>s">
        <i class="fa <?php echo $c['icon']; ?> text-brand-dark text-lg sm:text-xl mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1"><?php echo $c['title']; ?></h4>
        <p class="text-gray-500 text-base leading-relaxed"><?php echo $c['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     3. OUR SECURITY SOLUTION — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 lg:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 lg:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Our Deployment Model</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-4 leading-tight sm:leading-tight">
        How We Secure Your<br class="hidden sm:inline"/> <span style="color:#C9A91E;">Warehouse &amp; Facility</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-4 mb-10 sm:mb-12 lg:mb-14">
      <?php
      $solutions = [
        ['icon'=>'fa-door-open',  'label'=>'Entry Gate Security'],
        ['icon'=>'fa-id-badge',   'label'=>'Visitor Verification'],
        ['icon'=>'fa-walking',    'label'=>'Patrol Points'],
        ['icon'=>'fa-video',      'label'=>'CCTV Coordination'],
        ['icon'=>'fa-key',        'label'=>'Access Control Support'],
        ['icon'=>'fa-bolt',       'label'=>'Emergency Response'],
        ['icon'=>'fa-file-alt',   'label'=>'Reporting & Escalation'],
        ['icon'=>'fa-user-check', 'label'=>'Supervisor Checks'],
      ];
      foreach ($solutions as $i => $s):
      ?>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 text-center fade-up" style="animation-delay:<?php echo $i*0.05; ?>s">
        <i class="fa <?php echo $s['icon']; ?> text-brand-dark mb-2 block text-base sm:text-lg"></i>
        <span class="text-brand-dark text-[11px] sm:text-base font-bold capitalize leading-snug block"><?php echo $s['label']; ?></span>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="grid lg:grid-cols-2 gap-10 sm:gap-12 lg:gap-14 items-center">
      <div class="relative fade-up">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="<?= mediaUrl($media, 'solution_image'); ?>" alt="Warehouse gate security and CCTV" loading="lazy" decoding="async" sizes="(max-width: 1023px) 100vw, 50vw" class="w-full h-full object-cover" />
        </div>
      </div>
      <div class="fade-up" style="animation-delay:0.1s">
        <h3 class="font-display font-bold text-brand-dark capitalize text-xl sm:text-2xl mb-4 sm:mb-5 leading-snug">
          Layered Protection for <span style="color:#C9A91E;"><br class="hidden sm:inline">Every Facility Touchpoint</span>
        </h3>
        <div class="space-y-4">
          <?php
          $detail = [
            ['icon'=>'fa-door-open', 'title'=>'Gate & Loading Bay Control',     'desc'=>'Guards manage all entry and exit points — verifying vehicles, checking inward/outward documentation, and logging driver and labour movement.'],
            ['icon'=>'fa-boxes',     'title'=>'Material Movement Verification',  'desc'=>'Every consignment entering or leaving the facility is checked against documentation to prevent pilferage and unauthorised removal of goods.'],
            ['icon'=>'fa-walking',   'title'=>'Zone Patrolling & Night Rounds',  'desc'=>'Scheduled and surprise patrols across storage zones, loading docks, perimeters, and parking areas during all shifts including nights.'],
            ['icon'=>'fa-bolt',      'title'=>'Emergency & Fire Response',       'desc'=>'Guards trained to act as first responders during fire, accidents, or security incidents — coordinating with emergency services immediately.'],
          ];
          foreach ($detail as $d):
          ?>
          <div class="flex gap-3 sm:gap-4 items-start">
            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa <?php echo $d['icon']; ?> text-brand-dark text-xs sm:text-sm"></i>
            </div>
            <div>
              <h4 class="font-display font-bold text-brand-dark text-lg mb-1"><?php echo $d['title']; ?></h4>
              <p class="text-gray-500 text-base leading-relaxed"><?php echo $d['desc']; ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     4. RECOMMENDED MANPOWER DEPLOYMENT — GRAY
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 lg:py-20 bg-gray-50">
  <div class="max-w-5xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Quick Reference</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-4 leading-tight">Recommended Manpower<br class="hidden sm:inline"/> Deployment</h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <?php
      $deployment_rows = [
        ['size' => 'Small Warehouse (1 Gate, up to 5,000 sq ft)',          'plan' => '1–2 guards, day & night shift'],
        ['size' => 'Medium Warehouse (2 Gates, 5,000–20,000 sq ft)',       'plan' => '2–6 guards with shift supervisor'],
        ['size' => 'Large Warehouse / Distribution Centre',                'plan' => 'Multiple guards with dedicated supervisor + CCTV support'],
        ['size' => 'High-Value / Cold Chain / Logistics Hub',              'plan' => 'Guards, armed guard, supervisor, CCTV, QRT support'],
      ];
    ?>

    <!-- Table view: tablet & desktop -->
    <div class="overflow-x-auto fade-up hidden sm:block">
      <table class="w-full text-base border border-gray-200 rounded-xl overflow-hidden bg-white">
        <thead>
          <tr class="bg-brand-dark text-white text-left">
            <th class="px-6 py-4 font-semibold capitalize text-lg tracking-wider">Warehouse / Facility Size</th>
            <th class="px-6 py-4 font-semibold capitalize text-lg tracking-wider">Suggested Deployment</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <?php foreach ($deployment_rows as $i => $row): ?>
          <tr class="<?php echo $i % 2 === 0 ? 'bg-gray-50' : 'bg-white'; ?>">
            <td class="px-6 py-4 font-semibold text-brand-dark align-top"><?php echo $row['size']; ?></td>
            <td class="px-6 py-4 text-gray-600 align-top"><?php echo $row['plan']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- Stacked card view: mobile only -->
    <div class="sm:hidden space-y-3 fade-up">
      <?php foreach ($deployment_rows as $row): ?>
      <div class="bg-white border border-gray-200 rounded-xl p-5">
        <div class="text-brand-dark font-semibold text-sm mb-1.5 leading-snug"><?php echo $row['size']; ?></div>
        <div class="text-gray-600 text-sm leading-relaxed"><?php echo $row['plan']; ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     5. DUTIES & RESPONSIBILITIES — DARK
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 lg:py-20 bg-brand-dark">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 lg:mb-14 fade-up">
      <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">What Our Guards Do</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-white mb-4">
        Duties &amp; <span class="text-brand-yellow">Responsibilities</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
      <?php
      $duties = [
        ['icon'=>'fa-door-open',      'title'=>'Main Gate & Loading Bay Control',   'desc'=>'Manage all vehicle and pedestrian entry/exit — verifying driver identity, vehicle registration, and gate passes before allowing access.'],
        ['icon'=>'fa-truck',          'title'=>'Vehicle Entry & Exit Logging',       'desc'=>'Maintain a complete log of all inbound and outbound vehicles with driver details, vehicle number, and consignment reference.'],
        ['icon'=>'fa-boxes',          'title'=>'Material Inward & Outward Checks',  'desc'=>'Verify every consignment against delivery challans or gate passes to prevent pilferage and unauthorised removal of goods.'],
        ['icon'=>'fa-id-card',        'title'=>'Labour & Workforce Entry Log',       'desc'=>'Track daily-wage workers, contract staff, and temporary labour entering and exiting the facility across all shifts.'],
        ['icon'=>'fa-id-badge',       'title'=>'Vendor & Visitor Verification',     'desc'=>'Register all vendors, auditors, and clients with ID details and purpose before escorting them to relevant facility zones.'],
        ['icon'=>'fa-walking',        'title'=>'Storage Zone Patrolling',           'desc'=>'Regular rounds across all storage bays, racks, and floor areas to deter theft and monitor stock area access.'],
        ['icon'=>'fa-moon',           'title'=>'Night Security & Rounds',           'desc'=>'Dedicated night shift patrolling of the entire facility perimeter, loading docks, and parking areas to prevent intrusion.'],
        ['icon'=>'fa-fire',           'title'=>'Fire Safety & First Response',      'desc'=>'Monitor fire hazards, enforce no-smoking zones, and act as first responders during any fire or emergency incident.'],
        ['icon'=>'fa-bolt',           'title'=>'Emergency Incident Response',       'desc'=>'Coordinate immediately with management, emergency services, and supervisors during accidents, theft, or security breaches.'],
        ['icon'=>'fa-key',            'title'=>'Restricted Zone Access Control',    'desc'=>'Prevent unauthorised access to high-value storage zones, server rooms, and management areas inside the facility.'],
        ['icon'=>'fa-clipboard-list', 'title'=>'Daily Duty & Gate Log Maintenance', 'desc'=>'Maintain accurate gate registers, material movement records, and incident reports for facility management review.'],
        ['icon'=>'fa-user-check',     'title'=>'Shift Handover & Supervisor Report','desc'=>'Structured shift handover with documented status report ensuring continuity and accountability across shifts.'],
      ];
      foreach ($duties as $i => $d):
      ?>
      <div class="duty-item border border-white/10 rounded-xl p-4 sm:p-5 flex gap-3 sm:gap-4 items-start fade-up" style="animation-delay:<?php echo $i*0.04; ?>s">
        <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
          <i class="fa <?php echo $d['icon']; ?> text-brand-yellow text-xs sm:text-sm"></i>
        </div>
        <div>
          <h4 class="font-display font-bold text-white text-lg mb-1"><?php echo $d['title']; ?></h4>
          <p class="text-gray-400 text-base leading-relaxed"><?php echo $d['desc']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     6. SUITABLE SERVICES — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 lg:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 lg:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">What We Can Deploy</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-4">
        Suitable <span style="color:#C9A91E;">Services</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-5">
      <?php
      $services = [
        ['icon'=>'fa-shield-alt',       'title'=>'Unarmed Security Guards',  'link'=>'../security-guard-services/unarmed-security.php'],
        ['icon'=>'fa-user-shield',      'title'=>'Armed Security Guards',    'link'=>'../security-guard-services/armed-security.php'],
        ['icon'=>'fa-female',           'title'=>'Lady Security Guards',     'link'=>'../security-guard-services/lady-security.php'],
        ['icon'=>'fa-video',            'title'=>'CCTV Monitoring',          'link'=>'../technology&support/cctv-monitoring.php'],
        ['icon'=>'fa-clipboard-list',   'title'=>'Visitor Management',       'link'=>'../technology&support/visitor-management.php'],
        ['icon'=>'fa-route',            'title'=>'Patrolling & QRT',         'link'=>'../technology&support/patrolling-quick-response-team.php'],
        ['icon'=>'fa-fire-extinguisher','title'=>'Fire & Safety Personnel',  'link'=>'../facility-management/fire-safety.php'],
      ];
      foreach ($services as $i => $s):
      ?>
      <a href="<?php echo $s['link']; ?>" class="service-link-card border border-gray-200 bg-gray-50 rounded-xl p-4 sm:p-5 text-center fade-up" style="animation-delay:<?php echo $i*0.06; ?>s">
        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-2.5 sm:mb-3">
          <i class="fa <?php echo $s['icon']; ?> text-brand-dark text-sm sm:text-base"></i>
        </div>
        <div class="text-brand-dark font-bold text-[11px] sm:text-base capitalize tracking-wider leading-snug"><?php echo $s['title']; ?></div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     7. LEAD MAGNET — DARK with image
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 lg:py-20 relative overflow-hidden">
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.95) 0%, rgba(10,10,10,0.85) 100%), url('<?= mediaUrl($media, 'lead_background'); ?>') center/cover no-repeat;"></div>
  <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-8 sm:gap-10 lg:gap-12 items-center">
      <div class="fade-up">
        <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Free Resource</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-white leading-tight sm:leading-none mb-4">
          Warehouse Theft<br class="hidden sm:inline"/> <span class="text-brand-yellow">Prevention Checklist</span>
        </h2>
        <p class="text-white/70 text-lg leading-relaxed mb-5">
          Use this checklist to identify theft risks, material movement gaps, access control issues, and night security vulnerabilities in your warehouse or logistics facility.
        </p>
        <ul class="space-y-2 text-lg text-white/80">
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs flex-shrink-0"></i> Gate &amp; material movement audit points</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs flex-shrink-0"></i> Internal pilferage risk checklist</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs flex-shrink-0"></i> Night patrolling &amp; CCTV coverage review</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs flex-shrink-0"></i> 100% free, no obligation</li>
        </ul>
      </div>
      <div class="bg-white rounded-2xl p-6 sm:p-8 fade-up" style="animation-delay:0.1s">
        <h3 class="font-display font-bold text-brand-dark capitalize text-lg sm:text-xl mb-5 sm:mb-6">Get Free Checklist</h3>
        <form action="../includes/contact.php" method="POST" class="space-y-4">
          <input type="hidden" name="form_type" value="warehouse_theft_prevention_checklist" />
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Name *</label>
            <input type="text" name="name" required placeholder="Your name" class="input-field" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Phone *</label>
            <input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX" class="input-field" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Company / Facility Name</label>
            <input type="text" name="company" placeholder="Your facility name" class="input-field" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Location</label>
            <select name="location" class="input-field">
              <option value="">Select area</option>
              <option>Delhi</option><option>Noida</option><option>Greater Noida</option>
              <option>Gurgaon</option><option>Faridabad</option><option>Ghaziabad</option>
              <option>Manesar</option><option>Sonipat</option><option>Other NCR</option>
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
     8. FAQs — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 lg:py-20 bg-white">
  <div class="max-w-4xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Common Questions</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-4">Frequently Asked</h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="space-y-3">
      <?php
      $faqs = [
        ['q' => 'How many security guards does a warehouse typically need?',
         'a' => 'It depends on the warehouse size, number of entry points, shift schedule, and inventory value. A small warehouse with one gate may need 1–2 guards, while a large distribution centre may require 6 or more guards with a supervisor. We assess your facility and recommend the right deployment.'],
        ['q' => 'How do guards prevent theft and pilferage inside the warehouse?',
         'a' => 'Our guards carry out regular zone patrols, enforce material movement documentation checks, monitor loading and unloading activity, and maintain structured shift handover logs — making theft significantly harder to execute undetected.'],
        ['q' => 'Do your guards manage material inward and outward verification?',
         'a' => 'Yes, guards are briefed on your material movement process and verify every consignment entering or leaving the facility against the relevant delivery challan, gate pass, or dispatch document.'],
        ['q' => 'Can guards handle vehicle and truck entry management at loading docks?',
         'a' => 'Yes, guards manage loading bay access — logging vehicle registration numbers, driver details, and consignment references for all inbound and outbound truck movement.'],
        ['q' => 'Do you provide 24-hour security coverage for warehouses?',
         'a' => 'Yes, we offer round-the-clock deployment with day shift, night shift, and 12-hour options — ensuring the facility is never left unguarded, particularly during high-risk night hours.'],
        ['q' => 'Are guards trained to handle fire and emergency situations?',
         'a' => 'Yes, all guards receive emergency awareness training covering fire first-response, evacuation support, and coordination with fire services and management during incidents.'],
        ['q' => 'Can you provide armed guards for high-value warehouse facilities?',
         'a' => 'Yes, for high-value inventory, cold chain, or sensitive logistics facilities we can deploy licensed armed guards alongside the standard security team as part of a layered security plan.'],
        ['q' => 'Do your supervisors conduct regular site visits to warehouses?',
         'a' => 'Yes, our supervisors make regular and unannounced site visits to verify duty discipline, check registers, review incident logs, and address any operational concerns raised by facility management.'],
      ];
      foreach ($faqs as $i => $f):
      ?>
      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:<?php echo $i*0.04; ?>s">
        <button class="faq-toggle w-full flex justify-between items-center gap-3 px-5 py-4 sm:px-6 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-2"><?php echo $f['q']; ?></span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 pb-4 sm:px-6 sm:pb-5 text-gray-500 text-base leading-relaxed"><?php echo $f['a']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     9. FINAL CTA — YELLOW
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 lg:py-20 bg-brand-yellow">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center fade-up">
    <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight sm:leading-none mb-4">
      Need Security Guards for Your<br class="hidden sm:inline"/> Warehouse or Logistics Facility?
    </h2>
    <p class="text-brand-dark/70 text-sm sm:text-lg mb-8 max-w-lg mx-auto">
      Get a free site assessment and a tailored security deployment plan for your facility.
    </p>
    <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-3 sm:gap-4">
      <a href="../contact" class="bg-brand-dark hover:bg-gray-800 text-white font-bold px-6 sm:px-8 py-3 sm:py-3.5 rounded capitalize tracking-wider text-base transition-colors shadow-lg w-full sm:w-auto">
        Get Free Site Assessment
      </a>
      <a href="tel:+919430695171" class="flex items-center justify-center gap-2 border-2 border-brand-dark/50 text-brand-dark hover:border-brand-dark font-bold px-6 sm:px-8 py-3 sm:py-3.5 rounded capitalize tracking-wider text-base transition-colors w-full sm:w-auto">
        <i class="fa fa-phone"></i> +91 94306 95171
      </a>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>