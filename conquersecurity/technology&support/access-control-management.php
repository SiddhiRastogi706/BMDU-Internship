<?php
$page_title       = "Access Control Management Service in Delhi NCR | Conquer Services";
$page_description = "Improve your site security with professional access control management for offices, societies, commercial buildings, industrial sites, institutions, and high-risk locations across Delhi NCR.";
$active_page      = "services";
$base_path        = "../";
include '../includes/header.php';
?>

<style>
  @keyframes heroFade { 0%{opacity:0;} 8%{opacity:1;} 92%{opacity:1;} 100%{opacity:0;} }
  .hero-bg-slide { position:absolute; inset:0; background-size:cover; background-position:center; opacity:0; animation: heroFade 9s ease-in-out infinite; }
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
  .feature-card { transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s; }
  .feature-card:hover { transform: translateY(-5px); box-shadow: 0 20px 48px rgba(0,0,0,0.08); border-color: #F2CF4A; }
  .suitable-card { transition: all 0.25s ease; }
  .suitable-card:hover { border-color: #F2CF4A; background: rgba(242,207,74,0.08); transform: translateY(-3px); }
  .stat-counter { font-variant-numeric: tabular-nums; }
  .faq-body { max-height: 0; overflow: hidden; transition: max-height 0.3s ease; }
  .hero-bg-slide {
  position: absolute;
  inset: 0;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center 20%;
  width: 100%;
  height: 100%;
}
</style>

<!-- ══════════════════════════════════════════
     1. HERO SECTION
═══════════════════════════════════════════ -->
<section class="relative overflow-hidden bg-brand-dark py-20 sm:py-24 md:py-0 md:h-[65vh] md:min-h-[440px]">
  <div class="hero-bg-slide" style="background-image:url('../assets/images/banner/access-control-banner.png'); animation-delay:0s;"></div>

  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.90) 0%, rgba(10,10,10,0.55) 100%);"></div>

  <div class="relative z-10 h-full flex items-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">

      <div class="max-w-2xl">
        <p class="text-brand-yellow font-display font-semibold text-xs sm:text-base capitalize tracking-widest mb-3 sm:mb-4 fade-up" style="animation-delay:0.05s">Technology & Support Services</p>
        <h1 class="font-display font-black capitalize leading-tight sm:leading-none mb-4 sm:mb-6 fade-up" style="animation-delay:0.1s">
          <span class="text-3xl sm:text-4xl md:text-4xl lg:text-5xl text-white font-bold block">Access Control</span>
          <span class="text-3xl sm:text-4xl md:text-4xl lg:text-5xl text-brand-yellow font-bold block">Management in Delhi NCR</span>
        </h1>
        <p class="text-white/70 text-sm sm:text-base md:text-lg leading-relaxed mb-6 sm:mb-8 fade-up max-w-xl" style="animation-delay:0.2s">
          Improve your site security with professional access control management for offices, societies, commercial buildings, industrial sites, institutions, and high-risk locations.
        </p>
        <div class="flex flex-col sm:flex-row flex-wrap gap-3 fade-up" style="animation-delay:0.3s">
          <a href="../contact" class="w-full sm:w-auto text-center bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold px-6 sm:px-7 py-3 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-base transition-colors shadow-lg">
            Get Free Quote
          </a>
          <a href="tel:+919430695171" class="w-full sm:w-auto flex items-center justify-center gap-2 border border-brand-yellow text-brand-yellow hover:bg-brand-yellow hover:text-brand-dark font-semibold px-6 sm:px-7 py-3 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-base transition-colors">
            <i class="fa fa-phone"></i> Call Now
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     QUICK STATS BAR — BRAND YELLOW
═══════════════════════════════════════════ -->
<div class="bg-brand-yellow">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid grid-cols-2 sm:grid-cols-4 divide-x divide-y sm:divide-y-0 divide-brand-dark/20">
      <?php
      $stats = [
        ['num' => '24/7',  'label' => 'Entry Monitoring'],
        ['num' => '100%',  'label' => 'Verified Access'],
        ['num' => 'Zero',  'label' => 'Unauthorised Entry'],
        ['num' => 'Daily', 'label' => 'Security Logs'],
      ];
      foreach ($stats as $s):
      ?>
      <div class="py-4 sm:py-5 px-3 sm:px-6 text-center">
        <div class="stat-counter font-display font-black text-xl sm:text-2xl md:text-3xl text-brand-dark leading-none"><?php echo $s['num']; ?></div>
        <div class="text-brand-dark/70 text-[10px] sm:text-base font-semibold capitalize tracking-wider mt-1"><?php echo $s['label']; ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     2. SERVICE OVERVIEW — WHITE
═══════════════════════════════════════════ -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-14 items-center">

      <div class="relative fade-up order-2 lg:order-1">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="../assets/images/support6.jpg" alt="Access control management system" class="w-full h-full object-cover" />
        </div>
        <div class="absolute -bottom-5 -right-5 bg-brand-dark rounded-2xl p-5 shadow-2xl text-center">
          <i class="fa fa-id-badge text-brand-yellow text-2xl mb-2 block"></i>
          <div class="text-white font-bold text-xs capitalize tracking-wider">Controlled<br/>Entry & Exit</div>
        </div>
      </div>

      <div class="order-1 lg:order-2">
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3 fade-up">What This Service Does</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark leading-none mb-4 fade-up">
          Control Who Enters<br/><span style="color:#C9A91E;">Your Site</span>
        </h2>
        <div class="y-divider-center mb-6 fade-up"></div>
        <p class="text-gray-500 text-lg leading-relaxed mb-5 fade-up">
          Unauthorised entry is one of the most common and avoidable security risks on any site. Our access control management service puts a structured, technology-backed system in place — controlling who can enter which area, when, and under what conditions.
        </p>
        <p class="text-gray-500 text-lg leading-relaxed mb-8 fade-up">
          From biometric and card-based entry systems to gate coordination and security log management, we handle the full setup and day-to-day management so your site stays protected without disrupting daily operations.
        </p>
        <div class="grid grid-cols-2 gap-3 fade-up">
          <div class="flex items-center gap-2 text-lg text-gray-600"><i class="fa fa-check text-brand-dark text-xs"></i> Biometric & card-based access</div>
          <div class="flex items-center gap-2 text-lg text-gray-600"><i class="fa fa-check text-brand-dark text-xs"></i> Restricted zone management</div>
          <div class="flex items-center gap-2 text-lg text-gray-600"><i class="fa fa-check text-brand-dark text-xs"></i> Staff access control</div>
          <div class="flex items-center gap-2 text-lg text-gray-600"><i class="fa fa-check text-brand-dark text-xs"></i> Visitor access support</div>
          <div class="flex items-center gap-2 text-lg text-gray-600"><i class="fa fa-check text-brand-dark text-xs"></i> Gate coordination</div>
          <div class="flex items-center gap-2 text-lg text-gray-600"><i class="fa fa-check text-brand-dark text-xs"></i> Daily security logs</div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     3. KEY FEATURES — GRAY
═══════════════════════════════════════════ -->
<section class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">What's Included</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark leading-none mb-4">
        Key <span style="color:#C9A91E;">Features</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php
      $features = [
        [
          'icon'  => 'fa-door-closed',
          'title' => 'Entry Restriction',
          'desc'  => 'Controlled access at every entry point using biometric, card, or ID-based systems to prevent unauthorised personnel from entering.',
          'pts'   => ['Zone-wise entry restriction', 'Biometric & card integration', 'Manned entry coordination'],
        ],
        [
          'icon'  => 'fa-users-cog',
          'title' => 'Staff Access Management',
          'desc'  => 'Define and manage which employees can access which areas and at what times — keeping sensitive zones restricted to authorised staff only.',
          'pts'   => ['Role-based access levels', 'Time-bound access scheduling', 'Access update & revocation'],
        ],
        [
          'icon'  => 'fa-clipboard-list',
          'title' => 'Visitor Access Support',
          'desc'  => 'Visitor entry is managed with host confirmation, temporary access credentials, and logged entry/exit to maintain a complete visitor trail.',
          'pts'   => ['Host-confirmed visitor entry', 'Temporary access passes', 'Visitor log integration'],
        ],
        [
          'icon'  => 'fa-shield-alt',
          'title' => 'Gate Coordination',
          'desc'  => 'Our guards work alongside access control systems at all entry points — adding a human layer to technology-controlled gates.',
          'pts'   => ['Guard-system coordination', 'Delivery & vendor gate control', 'Tailgating prevention'],
        ],
        [
          'icon'  => 'fa-file-alt',
          'title' => 'Security Logs',
          'desc'  => 'Every entry and exit is automatically logged with time, date, and identity — giving you a clear, searchable audit trail at all times.',
          'pts'   => ['Auto-generated entry logs', 'Daily & weekly log reports', 'Incident trail support'],
        ],
        [
          'icon'  => 'fa-bell',
          'title' => 'Breach Alerts',
          'desc'  => 'Attempted unauthorised entries trigger immediate alerts to the guard team and site supervisor for fast, coordinated action.',
          'pts'   => ['Real-time breach notification', 'Guard team alert dispatch', 'Incident documentation'],
        ],
      ];
      foreach ($features as $i => $f):
      ?>
      <div class="feature-card bg-white border border-gray-200 rounded-2xl p-7 fade-up" style="animation-delay:<?php echo $i*0.07; ?>s">
        <div class="w-14 h-14 rounded-xl bg-brand-yellow/20 flex items-center justify-center mb-5">
          <i class="fa <?php echo $f['icon']; ?> text-brand-dark text-xl"></i>
        </div>
        <h3 class="font-display font-bold text-brand-dark text-lg mb-2"><?php echo $f['title']; ?></h3>
        <p class="text-gray-500 text-base leading-relaxed mb-4"><?php echo $f['desc']; ?></p>
        <ul class="space-y-1.5">
          <?php foreach ($f['pts'] as $pt): ?>
          <li class="flex items-center gap-2 text-base text-gray-500">
            <span class="w-4 h-4 rounded-full bg-brand-yellow/30 flex items-center justify-center flex-shrink-0">
              <i class="fa fa-check text-brand-dark text-[9px]"></i>
            </span>
            <?php echo $pt; ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     HOW IT WORKS — DARK
═══════════════════════════════════════════ -->
<section class="py-20 bg-brand-dark relative overflow-hidden">
  <div class="absolute inset-0 opacity-10">
    
  </div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
    <div class="text-center mb-14 fade-up">
      <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">The Process</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-white leading-none mb-4">
        How Our Access Control <span class="text-brand-yellow">Works</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php
      $steps = [
        ['num'=>'01','icon'=>'fa-search',      'title'=>'Site Entry Audit',         'desc'=>'We map all entry and exit points on your site and identify gaps in current access control before setup begins.'],
        ['num'=>'02','icon'=>'fa-cogs',        'title'=>'System Configuration',     'desc'=>'Access levels are configured by role — staff, visitors, vendors — and integrated with your gate management.'],
        ['num'=>'03','icon'=>'fa-shield-alt',  'title'=>'Live Access Management',   'desc'=>'Guards and operators manage daily access in real time, verifying identities and coordinating restricted zone entry.'],
        ['num'=>'04','icon'=>'fa-file-alt',    'title'=>'Log & Report',             'desc'=>'Every entry and exit is logged automatically and compiled into daily reports for client review.'],
      ];
      foreach ($steps as $i => $s):
      ?>
      <div class="bg-white/5 border border-white/10 rounded-2xl p-7 text-center fade-up" style="animation-delay:<?php echo $i*0.08; ?>s">
        <div class="w-12 h-12 rounded-full bg-brand-yellow flex items-center justify-center mx-auto mb-4">
          <i class="fa <?php echo $s['icon']; ?> text-brand-dark text-lg"></i>
        </div>
        <div class="text-brand-yellow/40 font-display font-black text-4xl leading-none mb-2"><?php echo $s['num']; ?></div>
        <h3 class="font-display font-bold text-white text-lg mb-3"><?php echo $s['title']; ?></h3>
        <p class="text-gray-400 text-base leading-relaxed"><?php echo $s['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     4. SUITABLE FOR — WHITE
═══════════════════════════════════════════ -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Who Needs This Service</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark leading-none mb-4">
        Suitable <span style="color:#C9A91E;">For</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
      <?php
      $suitable = [
        ['icon'=>'fa-building',       'label'=>'Offices'],
        ['icon'=>'fa-home',           'label'=>'Societies'],
        ['icon'=>'fa-warehouse',      'label'=>'Warehouses'],
        ['icon'=>'fa-industry',       'label'=>'Factories'],
        ['icon'=>'fa-graduation-cap', 'label'=>'Schools'],
        ['icon'=>'fa-hospital',       'label'=>'Hospitals'],
        ['icon'=>'fa-university',     'label'=>'Banks'],
        ['icon'=>'fa-store',          'label'=>'Malls'],
        ['icon'=>'fa-hard-hat',       'label'=>'Construction Sites'],
      ];
      foreach ($suitable as $i => $s):
      ?>
      <div class="suitable-card border border-gray-200 bg-gray-50 rounded-xl p-5 text-center fade-up" style="animation-delay:<?php echo $i*0.05; ?>s">
        <div class="w-12 h-12 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3">
          <i class="fa <?php echo $s['icon']; ?> text-brand-dark"></i>
        </div>
        <div class="text-brand-dark font-bold text-base capitalize tracking-wider"><?php echo $s['label']; ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     5. LEAD MAGNET — DARK BG IMAGE
═══════════════════════════════════════════ -->
<section class="py-20 relative overflow-hidden">
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.95) 0%, rgba(10,10,10,0.85) 100%), url('../assets/images/service2.png') center/cover no-repeat;"></div>
  <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div class="fade-up">
        <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Free Checklist</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-white leading-tight mb-4">
          Entry Point Access<br/><span class="text-brand-yellow">Control Checklist</span>
        </h2>
        <p class="text-white/70 text-lg leading-relaxed mb-6">
          Use this checklist to assess your current entry point setup — identifying gaps in access control, gate management, visitor handling, and security log practices across your site.
        </p>
        <ul class="space-y-2 text-lg text-white/80">
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Entry & exit point review</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Staff & visitor access gap checklist</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Security log and reporting review</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> 100% free, no obligation</li>
        </ul>
      </div>
      <div class="bg-white rounded-2xl p-8 fade-up" style="animation-delay:0.1s">
        <h3 class="font-display font-bold text-brand-dark capitalize text-xl mb-1">Download Free Checklist</h3>
        <p class="text-gray-400 text-xs mb-6">Entry Point Access Control Review — complimentary for all site types</p>
        <form action="../includes/contact.php" method="POST" class="space-y-4">
          <div class="grid grid-cols-2 gap-4">
            <div>
              <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Name *</label>
              <input type="text" name="name" required placeholder="Your name" class="input-field" />
            </div>
            <div>
              <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Phone *</label>
              <input type="tel" name="phone" required placeholder="+91 XXXXX" class="input-field" />
            </div>
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Site Type</label>
            <select name="site_type" class="input-field">
              <option value="">Select site type</option>
              <option>Office</option><option>Residential Society</option><option>School / College</option>
              <option>Hospital</option><option>Mall / Retail</option><option>Warehouse / Factory</option>
              <option>Bank</option><option>Construction Site</option><option>Other</option>
            </select>
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
     6. FAQs — WHITE
═══════════════════════════════════════════ -->
<section class="py-20 bg-white">
  <div class="max-w-4xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Common Questions</p>
      <h2 class="font-display font-black capitalize text-4xl sm:text-4xl text-brand-dark mb-4">Frequently Asked</h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="space-y-3">
      <?php
      $faqs = [
        ['q' => 'What types of access control systems do you support?',
         'a' => 'We work with biometric fingerprint systems, RFID card-based entry, PIN-based access, and app-controlled gates — and can recommend the right type based on your site size and risk profile.'],
        ['q' => 'Can access control be set up for specific zones inside a building?',
         'a' => 'Yes, zone-wise access control is one of the key features — different access levels can be assigned for reception, server rooms, executive floors, warehouses, and other restricted areas.'],
        ['q' => 'Do you handle access for visitors and vendors separately from staff?',
         'a' => 'Yes, visitor and vendor access is managed separately with host confirmation, temporary access credentials, and time-limited entry — keeping staff and restricted zones protected.'],
        ['q' => 'How do guards work alongside the access control system?',
         'a' => 'Guards at entry points use the system as a reference and override tool — verifying physical identity against system-granted access and preventing tailgating or credential sharing.'],
        ['q' => 'Can the system track who entered which area and at what time?',
         'a' => 'Yes, every access event is automatically logged with user identity, time, date, and zone — giving you a complete, searchable audit trail for security reviews or incident investigation.'],
        ['q' => 'What happens if someone tries to enter a restricted area without authorisation?',
         'a' => 'The system triggers an immediate alert to the monitoring operator and on-site guard team, and the incident is documented with timestamp and access attempt details.'],
        ['q' => 'Do you help with installation, or only management?',
         'a' => 'We provide full service — from system selection and installation to day-to-day management and log reporting — or we can take over management of an existing system already in place.'],
      ];
      foreach ($faqs as $i => $f):
      ?>
      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:<?php echo $i*0.05; ?>s">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4"><?php echo $f['q']; ?></span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-base leading-relaxed"><?php echo $f['a']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     RELATED TECHNOLOGY SERVICES — GRAY
═══════════════════════════════════════════ -->
<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Also Available</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark leading-none mb-4">
        Related <span style="color:#C9A91E;">Services</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-4">
      <?php
      $related = [
        ['icon'=>'fa-video',          'title'=>'CCTV Monitoring',                  'link'=>'cctv-monitoring.php'],
        ['icon'=>'fa-clipboard-list', 'title'=>'Visitor Management',               'link'=>'visitor-management.php'],
        ['icon'=>'fa-search',         'title'=>'Security Audit & Risk Assessment', 'link'=>'security-audit-risk-assessment.php'],
        ['icon'=>'fa-ambulance',      'title'=>'Emergency Response Team',          'link'=>'emergency-response-team.php'],
        ['icon'=>'fa-route',          'title'=>'Patrolling & Quick Response Team', 'link'=>'patrolling-quick-response-team.php'],
      ];
      foreach ($related as $i => $r):
      ?>
      <a href="<?php echo $r['link']; ?>" class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 text-center group transition-all hover:-translate-y-1 fade-up" style="animation-delay:<?php echo $i*0.06; ?>s">
        <div class="w-11 h-11 rounded-full bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa <?php echo $r['icon']; ?> text-brand-dark text-sm"></i>
        </div>
        <div class="text-brand-dark font-semibold text-base leading-snug"><?php echo $r['title']; ?></div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     7. FINAL CTA — YELLOW
═══════════════════════════════════════════ -->
<section class="relative py-20 overflow-hidden">
  <div class="absolute inset-0 bg-brand-yellow"></div>
  <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 text-center fade-up">
    <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark leading-none mb-4">
      Need Access Control Management<br/>for Your Site?
    </h2>
    <p class="text-brand-dark/80 text-sm sm:text-lg mb-8 max-w-lg mx-auto">
      Share your site details and our team will get back with a free consultation and access control plan.
    </p>
    <div class="flex flex-wrap justify-center gap-4">
      <a href="../contact" class="bg-brand-dark text-white hover:bg-gray-800 font-bold px-8 py-3.5 rounded capitalize tracking-wider text-base transition-colors shadow-lg">
        Request Free Consultation
      </a>
      <a href="tel:+919430695171" class="flex items-center gap-2 border-2 border-brand-dark/60 text-brand-dark hover:border-brand-dark font-bold px-8 py-3.5 rounded capitalize tracking-wider text-base transition-colors">
        <i class="fa fa-phone"></i> +91 94306 95171
      </a>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>