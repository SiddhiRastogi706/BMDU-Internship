<?php
$page_title       = "Security Audit & Risk Assessment in Delhi NCR | Conquer Services";
$page_description = "Improve your site security with a professional security audit and risk assessment for offices, societies, commercial buildings, industrial sites, institutions, and high-risk locations across Delhi NCR.";
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
  <div class="hero-bg-slide" style="background-image:url('../assets/images/banner/audit-banner.png'); animation-delay:0s;"></div>

  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.50) 0%, rgba(10,10,10,0.55) 60%);"></div>

  <div class="relative z-10 h-full flex items-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">

      <div class="max-w-2xl">
        <p class="text-brand-yellow font-display font-semibold text-xs sm:text-base capitalize tracking-widest mb-3 sm:mb-4 fade-up" style="animation-delay:0.05s">Technology & Support Services</p>
        <h1 class="font-display font-black capitalize leading-tight sm:leading-none mb-4 sm:mb-6 fade-up" style="animation-delay:0.1s">
          <span class="text-3xl sm:text-4xl md:text-4xl lg:text-5xl text-white font-bold block">Security Audit &amp; Risk</span>
          <span class="text-3xl sm:text-4xl md:text-4xl lg:text-5xl text-brand-yellow font-bold block">Assessment in Delhi NCR</span>
        </h1>
        <p class="text-white/70 text-sm sm:text-base md:text-lg leading-relaxed mb-6 sm:mb-8 fade-up max-w-xl" style="animation-delay:0.2s">
          Improve your site security with a professional security audit and risk assessment for offices, societies, commercial buildings, industrial sites, institutions, and high-risk locations.
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
        ['num' => '100+',  'label' => 'Sites Audited'],
        ['num' => '360°',  'label' => 'Risk Coverage'],
        ['num' => '48hrs', 'label' => 'Report Turnaround'],
        ['num' => '100%',  'label' => 'On-Site Assessment'],
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
          <img src="../assets/images/support4.png" alt="Security audit and risk assessment site walkthrough" class="w-full h-full object-cover" />
        </div>
        <div class="absolute -bottom-5 -right-5 bg-brand-dark rounded-2xl p-5 shadow-2xl text-center">
          <i class="fa fa-search text-brand-yellow text-2xl mb-2 block"></i>
          <div class="text-white font-bold text-xs capitalize tracking-wider">Every Gap Found<br/>Before It's Exploited</div>
        </div>
      </div>

      <div class="order-1 lg:order-2">
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3 fade-up">What This Service Does</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark leading-none mb-4 fade-up">
          Find the Gaps<br/><span style="color:#C9A91E;">Before They're Used</span>
        </h2>
        <div class="y-divider-center mb-6 fade-up"></div>
        <p class="text-gray-500 text-lg leading-relaxed mb-5 fade-up">
          Most security failures don't happen because guards or systems are absent — they happen because a gap was never identified. Our security audit and risk assessment service takes a structured look at your entire site: guard posts, entry and exit points, CCTV coverage, access control, and existing protocols.
        </p>
        <p class="text-gray-500 text-lg leading-relaxed mb-8 fade-up">
          The result is a clear, written report that tells you exactly where your site is exposed and what needs to change — whether that's manpower deployment, camera placement, or process discipline.
        </p>
        <div class="grid grid-cols-2 gap-3 fade-up">
          <div class="flex items-center gap-2 text-lg text-gray-600"><i class="fa fa-check text-brand-dark text-xs"></i> Full site risk review</div>
          <div class="flex items-center gap-2 text-lg text-gray-600"><i class="fa fa-check text-brand-dark text-xs"></i> Guard post assessment</div>
          <div class="flex items-center gap-2 text-lg text-gray-600"><i class="fa fa-check text-brand-dark text-xs"></i> Entry/exit point review</div>
          <div class="flex items-center gap-2 text-lg text-gray-600"><i class="fa fa-check text-brand-dark text-xs"></i> CCTV gap review</div>
          <div class="flex items-center gap-2 text-lg text-gray-600"><i class="fa fa-check text-brand-dark text-xs"></i> Written improvement report</div>
          <div class="flex items-center gap-2 text-lg text-gray-600"><i class="fa fa-check text-brand-dark text-xs"></i> Priority-wise recommendations</div>
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
          'icon'  => 'fa-clipboard-check',
          'title' => 'Risk Review',
          'desc'  => 'A structured walkthrough of your site identifies vulnerabilities across physical security, manpower, and process — before they turn into incidents.',
          'pts'   => ['Full-site physical inspection', 'Threat and vulnerability mapping', 'Risk severity rating'],
        ],
        [
          'icon'  => 'fa-user-shield',
          'title' => 'Guard Post Assessment',
          'desc'  => 'Existing guard posts are reviewed for placement, coverage, and adequacy — flagging under-guarded or blind areas.',
          'pts'   => ['Post placement review', 'Manpower adequacy check', 'Shift coverage analysis'],
        ],
        [
          'icon'  => 'fa-door-open',
          'title' => 'Entry/Exit Point Review',
          'desc'  => 'Every entry and exit point is examined for control gaps — unmanned gates, weak checks, or unmonitored access routes.',
          'pts'   => ['Gate and access point mapping', 'Unauthorised entry risk check', 'Visitor and vehicle flow review'],
        ],
        [
          'icon'  => 'fa-video',
          'title' => 'CCTV Gap Review',
          'desc'  => 'Camera coverage is assessed to identify blind spots, poor angles, and areas with no surveillance at all.',
          'pts'   => ['Blind spot identification', 'Camera angle and placement review', 'Recording and retention check'],
        ],
        [
          'icon'  => 'fa-file-signature',
          'title' => 'Security Improvement Report',
          'desc'  => 'Findings are compiled into a clear, written report with prioritised recommendations you can act on immediately.',
          'pts'   => ['Issue-wise findings summary', 'Priority-ranked recommendations', 'Actionable next steps'],
        ],
        [
          'icon'  => 'fa-sync-alt',
          'title' => 'Follow-Up Review Support',
          'desc'  => 'Once recommendations are implemented, we can conduct a follow-up review to confirm the gaps have been closed.',
          'pts'   => ['Post-implementation check', 'Progress tracking', 'Updated risk status'],
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
        How Our Security Audit <span class="text-brand-yellow">Works</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php
      $steps = [
        ['num'=>'01','icon'=>'fa-clipboard-list', 'title'=>'Requirement Discussion', 'desc'=>'We understand your site type, existing security setup, and specific concerns before the audit begins.'],
        ['num'=>'02','icon'=>'fa-walking',         'title'=>'On-Site Walkthrough',    'desc'=>'Our team physically inspects guard posts, entry/exit points, CCTV coverage, and access control on-site.'],
        ['num'=>'03','icon'=>'fa-exclamation-triangle', 'title'=>'Risk & Gap Analysis','desc'=>'Findings are analysed and rated by severity, covering manpower, technology, and process gaps.'],
        ['num'=>'04','icon'=>'fa-file-alt',        'title'=>'Report & Recommendations', 'desc'=>'A written report with prioritised, actionable recommendations is shared with your team.'],
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
        <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Free Report</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-white leading-tight mb-4">
          Free Site Risk<br/><span class="text-brand-yellow">Assessment Report</span>
        </h2>
        <p class="text-white/70 text-lg leading-relaxed mb-6">
          Get a complimentary review of your guard posts, entry/exit points, CCTV coverage, and access control — with a written report highlighting the gaps that matter most.
        </p>
        <ul class="space-y-2 text-lg text-white/80">
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> On-site risk walkthrough</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Guard post & CCTV gap review</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Priority-wise improvement report</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> 100% free, no obligation</li>
        </ul>
      </div>
      <div class="bg-white rounded-2xl p-8 fade-up" style="animation-delay:0.1s">
        <h3 class="font-display font-bold text-brand-dark capitalize text-xl mb-1">Request Free Report</h3>
        <p class="text-gray-400 text-xs mb-6">Site Risk Assessment Report — complimentary for all site types</p>
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
            <i class="fa fa-download text-xs"></i> Get Free Report
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
        ['q' => 'Do I need to already be your client to get a security audit?',
         'a' => 'No, the security audit and risk assessment is available as a standalone service, whether or not you currently use our guards or facility staff.'],
        ['q' => 'How long does an on-site audit take?',
         'a' => 'Duration depends on site size and complexity. A small office may take a few hours, while a large factory or warehouse audit may span a full day.'],
        ['q' => 'What does the final report actually include?',
         'a' => 'The report lists identified risks with severity ratings, covers guard post, entry/exit, and CCTV findings, and gives prioritised, actionable recommendations for each.'],
        ['q' => 'Will you tell us if our current security agency is doing a poor job?',
         'a' => 'The audit is an objective assessment of your site\'s security posture. If gaps exist in current deployment or coverage, they will be reflected in the report regardless of who provides the service.'],
        ['q' => 'Can the audit include our CCTV and access control systems, not just guards?',
         'a' => 'Yes, the audit covers manpower, entry/exit points, CCTV coverage, and access control together, since these all affect your overall site security.'],
        ['q' => 'Do you help implement the recommendations after the report?',
         'a' => 'Yes, we can help implement recommendations, whether that means adjusting guard deployment, improving CCTV coverage, or introducing visitor and access control processes.'],
        ['q' => 'Is a follow-up audit available after changes are made?',
         'a' => 'Yes, we offer a follow-up review to confirm that previously identified gaps have been addressed and to check for any new risks.'],
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
        ['icon'=>'fa-id-badge',       'title'=>'Access Control Management',        'link'=>'access-control-management.php'],
        ['icon'=>'fa-clipboard-list', 'title'=>'Visitor Management',               'link'=>'visitor-management.php'],
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
      Need a Security Audit<br/>for Your Site?
    </h2>
    <p class="text-brand-dark/80 text-sm sm:text-lg mb-8 max-w-lg mx-auto">
      Share your site details and our team will get back with a free consultation and risk assessment plan.
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