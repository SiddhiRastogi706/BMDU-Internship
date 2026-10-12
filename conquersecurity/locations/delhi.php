<?php
$page_title       = "Security Guard & Facility Management Services in Delhi | Conquer Services";
$page_description = "Professional security guards, housekeeping staff, facility management, bouncers, drivers, and fire safety personnel for offices, societies, factories, schools, hospitals, and malls across Delhi.";
$active_page      = "locations";
$base_path        = "../";
include '../includes/header.php';
?>

<style>
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
  .hover-card { transition: transform 0.3s, box-shadow 0.3s; }
  .hover-card:hover { transform: translateY(-4px); box-shadow: 0 16px 40px rgba(0,0,0,0.08); }
  .service-link-card { transition: all 0.25s ease; }
  .service-link-card:hover { border-color: #F2CF4A; background: rgba(242,207,74,0.08); transform: translateY(-3px); }
  .industry-card { transition: all 0.25s ease; }
  .industry-card:hover { border-color: #F2CF4A; background: rgba(242,207,74,0.08); transform: translateY(-3px); }
  .faq-body { max-height: 0; overflow: hidden; transition: max-height 0.35s ease; }
  .why-card { transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s; }
  .why-card:hover { transform: translateY(-5px); box-shadow: 0 20px 48px rgba(0,0,0,0.08); border-color: #F2CF4A; }
</style>


<!-- ══════════════════════════════════════════
     1. HERO SECTION
═══════════════════════════════════════════ -->
<section class="relative h-72 sm:h-80 md:h-96 overflow-hidden bg-brand-dark">
  <div class="absolute inset-0">
    <img src="../assets/images/banner/city-banner.png" alt="Security guard services in Delhi" class="w-full h-full object-cover" />
  </div>
  <div class="page-hero-overlay absolute inset-0"></div>

  <div class="relative z-10 h-full flex flex-col justify-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
     
      <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Serving Delhi Since 2012</p>
      <h1 class="font-display font-black capitalize leading-none text-white">
        <span class="text-3xl sm:text-4xl md:text-5xl block">Security Guard &</span>
        <span class="text-3xl sm:text-4xl md:text-5xl text-brand-yellow block">Facility Management Services <br>in Delhi</span>
      </h1>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-brand-yellow"></div>
</section>


<!-- ══════════════════════════════════════════
     QUICK STATS BAR — YELLOW
═══════════════════════════════════════════ -->
<div class="bg-brand-yellow">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid grid-cols-2 sm:grid-cols-4 divide-x divide-brand-dark/20">
      <?php
      $stats = [
        ['num' => '10+',   'label' => 'Years in Delhi'],
        ['num' => '500+',  'label' => 'Sites Served'],
        ['num' => '1200+', 'label' => 'Staff Deployed'],
        ['num' => '24/7',  'label' => 'Operations Support'],
      ];
      foreach ($stats as $s):
      ?>
      <div class="py-5 px-4 sm:px-6 text-center">
        <div class="font-display font-black text-2xl sm:text-3xl text-brand-dark leading-none"><?php echo $s['num']; ?></div>
        <div class="text-brand-dark/70 text-base font-semibold capitalize tracking-wider mt-1"><?php echo $s['label']; ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>


<!-- ══════════════════════════════════════════
     2. LOCAL SERVICE OVERVIEW — WHITE
═══════════════════════════════════════════ -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-14 items-center">

      <div class="fade-up">
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Serving Delhi</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark leading-none mb-4">
          Complete Security &<br/><span style="color:#C9A91E;">Facility Solutions in Delhi</span>
        </h2>
        <div class="y-divider-center mb-6"></div>
        <p class="text-gray-500 text-base leading-relaxed mb-5">
          Delhi is one of the most complex security deployment environments in India — with high-density offices in Connaught Place and Nehru Place, thousands of residential societies across South Delhi, West Delhi, and Dwarka, and a sprawling industrial belt stretching through Okhla, Wazirpur, and Naraina.
        </p>
        <p class="text-gray-500 text-base leading-relaxed mb-8">
          Conquer Services has been operating across Delhi since 2012 — deploying trained, verified manpower for security, housekeeping, facility management, and support services for clients across every district of the capital.
        </p>
        <div class="flex flex-wrap gap-3">
          <a href="../contact" class="bg-brand-dark hover:bg-gray-800 text-white font-bold px-7 py-3 rounded capitalize tracking-wider text-base transition-colors">Request a Quote</a>
          <a href="tel:+919430695171" class="flex items-center gap-2 border-2 border-brand-dark text-brand-dark hover:bg-brand-dark hover:text-white font-semibold px-7 py-3 rounded capitalize tracking-wider text-base transition-colors">
            <i class="fa fa-phone text-xs"></i> Call Now
          </a>
        </div>
      </div>

      <div class="fade-up" style="animation-delay:0.1s">
        <div class="grid grid-cols-2 gap-4">
          <?php
          $local_services = [
            ['icon'=>'fa-shield-alt',        'title'=>'Security Guards',          'desc'=>'Trained, verified guards for all site types.'],
            ['icon'=>'fa-broom',             'title'=>'Housekeeping',             'desc'=>'Professional housekeeping for offices & facilities.'],
            ['icon'=>'fa-building',          'title'=>'Facility Staff',           'desc'=>'Receptionists, pantry staff & facility managers.'],
            ['icon'=>'fa-user-shield',       'title'=>'Bouncers',                 'desc'=>'Event & venue security for safe crowd control.'],
            ['icon'=>'fa-car',               'title'=>'Drivers',                  'desc'=>'Trained, verified drivers for corporate use.'],
            ['icon'=>'fa-fire-extinguisher', 'title'=>'Fire Safety Personnel',    'desc'=>'Trained fire wardens for commercial premises.'],
          
          ];
          foreach ($local_services as $i => $ls):
          ?>
          <div class="hover-card bg-gray-50 border border-gray-200 rounded-xl p-4 fade-up" style="animation-delay:<?php echo $i*0.05; ?>s">
            <div class="w-10 h-10 rounded-full bg-brand-yellow/20 flex items-center justify-center mb-3">
              <i class="fa <?php echo $ls['icon']; ?> text-brand-dark text-sm"></i>
            </div>
            <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1"><?php echo $ls['title']; ?></h4>
            <p class="text-gray-500 text-base leading-relaxed"><?php echo $ls['desc']; ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     3. INDUSTRIES SERVED IN DELHI — GRAY
═══════════════════════════════════════════ -->
<section class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Local Demand</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark leading-none mb-4">
        Industries We Serve<br/><span style="color:#C9A91E;">Across Delhi</span>
      </h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 text-lg max-w-2xl mx-auto">From Connaught Place to Okhla Industrial Area, South Delhi to Rohini — we deploy across every major zone and industry in the capital.</p>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5">
      <?php
      $industries = [
        ['icon'=>'fa-building',        'title'=>'Corporate Offices',       'areas'=>'CP, Nehru Place, Jasola, Saket',      'link'=>'../industries/offices.php'],
        ['icon'=>'fa-home',            'title'=>'Residential Societies',   'areas'=>'South Delhi, Dwarka, Rohini, Janakpuri','link'=>'../industries/residential.php'],
        ['icon'=>'fa-industry',        'title'=>'Factories & Industrial',  'areas'=>'Okhla, Wazirpur, Naraina, Bawana',    'link'=>'../industries/industrial.php'],
        ['icon'=>'fa-warehouse',       'title'=>'Warehouses & Logistics',  'areas'=>'Patparganj, Wazirpur, NH-44 Corridor', 'link'=>'../industries/warehouses-logistics.php'],
        ['icon'=>'fa-graduation-cap',  'title'=>'Schools & Colleges',      'areas'=>'All districts of Delhi',               'link'=>'../industries/schools-colleges.php'],
        ['icon'=>'fa-hospital',        'title'=>'Hospitals',               'areas'=>'AIIMS Belt, Saket, Rohini, Pitampura', 'link'=>'../industries/hospitals.php'],
        ['icon'=>'fa-store',           'title'=>'Malls & Retail',          'areas'=>'Saket, Vasant Kunj, Janakpuri, Rohini','link'=>'../industries/retail.php'],
        ['icon'=>'fa-hard-hat',        'title'=>'Construction Sites',      'areas'=>'New development zones across Delhi',   'link'=>'../industries/construction.php'],
      ];
      foreach ($industries as $i => $ind):
      ?>
      <a href="<?php echo $ind['link']; ?>" class="industry-card border border-gray-200 bg-white rounded-xl p-5 fade-up" style="animation-delay:<?php echo $i*0.05; ?>s">
        <div class="w-12 h-12 rounded-full bg-brand-yellow/20 flex items-center justify-center mb-3">
          <i class="fa <?php echo $ind['icon']; ?> text-brand-dark"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg mb-1"><?php echo $ind['title']; ?></h4>
        <p class="text-gray-400 text-base leading-relaxed"><?php echo $ind['areas']; ?></p>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     4. POPULAR SERVICES IN DELHI — WHITE
═══════════════════════════════════════════ -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Most Requested</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark leading-none mb-4">
        Popular Services<br/><span style="color:#C9A91E;">in Delhi</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php
      $popular = [
        ['icon'=>'fa-shield-alt',       'title'=>'Unarmed Security Guards',         'desc'=>'The most deployed service across Delhi offices, societies, schools, and hospitals — trained guards for gate, patrol, and visitor management.', 'link'=>'../security-guard-services/unarmed-security.php'],
        ['icon'=>'fa-female',           'title'=>'Lady Security Guards',            'desc'=>'High demand across Delhi schools, hospitals, malls, and residential societies for women-sensitive security and visitor frisking.', 'link'=>'../security-guard-services/lady-security.php'],
        ['icon'=>'fa-broom',            'title'=>'Housekeeping Services',           'desc'=>'Professional housekeeping for commercial offices, malls, hospitals, and facility management across all Delhi districts.', 'link'=>'../facility-management/housekeeping.php'],
        ['icon'=>'fa-video',            'title'=>'CCTV Monitoring',                 'desc'=>'Live monitoring and incident response support for Delhi offices, societies, and commercial buildings with existing camera setups.', 'link'=>'../technology&support/cctv-monitoring.php'],
        ['icon'=>'fa-user-shield',      'title'=>'Armed Security Guards',           'desc'=>'Licensed armed guards for Delhi banks, industrial units, high-value storage facilities, and VIP premises.', 'link'=>'../security-guard-services/armed-security.php'],
        ['icon'=>'fa-fire-extinguisher','title'=>'Fire Safety Personnel',           'desc'=>'Trained fire wardens and safety personnel for Delhi commercial buildings, factories, and institutions requiring fire compliance.', 'link'=>'../facility-management/fire-safety.php'],
      ];
      foreach ($popular as $i => $p):
      ?>
      <a href="<?php echo $p['link']; ?>" class="service-link-card border border-gray-200 bg-gray-50 rounded-2xl p-7 block fade-up" style="animation-delay:<?php echo $i*0.07; ?>s">
        <div class="w-14 h-14 rounded-xl bg-brand-yellow/20 flex items-center justify-center mb-5">
          <i class="fa <?php echo $p['icon']; ?> text-brand-dark text-xl"></i>
        </div>
        <h3 class="font-display font-bold text-brand-dark text-lg mb-2"><?php echo $p['title']; ?></h3>
        <p class="text-gray-500 text-base leading-relaxed mb-4"><?php echo $p['desc']; ?></p>
        <span class="text-brand-dark font-semibold text-xs capitalize tracking-wider flex items-center gap-1.5">
          View Service <i class="fa fa-arrow-right text-[12px]"></i>
        </span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     5. WHY CHOOSE US IN DELHI — DARK
═══════════════════════════════════════════ -->
<section class="py-20 bg-brand-dark relative overflow-hidden">
  <div class="absolute inset-0 opacity-10">
   
  </div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
    <div class="text-center mb-14 fade-up">
      <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Our Advantage</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-white leading-none mb-4">
        Why Choose Conquer Services<br/><span class="text-brand-yellow">in Delhi</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <?php
      $why = [
        ['icon'=>'fa-map-marker-alt', 'title'=>'Local Deployment Support',       'desc'=>'Our operations team is based in Delhi NCR — enabling fast site visits, quick guard placement, and on-ground coordination without delays.'],
        ['icon'=>'fa-users',          'title'=>'Quick Staff Availability',        'desc'=>'We maintain a ready pool of trained, verified guards and facility staff across Delhi for urgent and scheduled deployment alike.'],
        ['icon'=>'fa-user-check',     'title'=>'Regular Supervisor Visits',       'desc'=>'Our supervisors make frequent and unannounced site visits across Delhi to verify duty discipline, check registers, and address client concerns promptly.'],
        ['icon'=>'fa-network-wired',  'title'=>'Delhi NCR Operations Team',       'desc'=>'Dedicated operations staff covering every district of Delhi — from South Delhi and Central Delhi to Dwarka, Rohini, and the industrial belt.'],
        ['icon'=>'fa-id-card',        'title'=>'Verified Manpower Only',          'desc'=>'Every guard, housekeeping staff, and facility employee is ID-verified and background-checked before being assigned to any Delhi site.'],
        ['icon'=>'fa-clock',          'title'=>'24/7 Support & Escalation',      'desc'=>'Our helpdesk and supervisor team remains reachable round the clock for any requirement, complaint, or emergency across all Delhi deployments.'],
      ];
      foreach ($why as $i => $w):
      ?>
      <div class="why-card border border-white/10 bg-white/5 rounded-2xl p-7 fade-up" style="animation-delay:<?php echo $i*0.07; ?>s">
        <div class="w-14 h-14 rounded-xl bg-brand-yellow/20 flex items-center justify-center mb-5">
          <i class="fa <?php echo $w['icon']; ?> text-brand-yellow text-xl"></i>
        </div>
        <h3 class="font-display font-bold text-white text-lg mb-2"><?php echo $w['title']; ?></h3>
        <p class="text-gray-400 text-base leading-relaxed"><?php echo $w['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     6. LEAD MAGNET — DARK with image
═══════════════════════════════════════════ -->
<section class="py-20 relative overflow-hidden">
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.95) 0%, rgba(10,10,10,0.85) 100%), url('../assets/images/service2.png') center/cover no-repeat;"></div>
  <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div class="fade-up">
        <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Free Assessment</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-white leading-none mb-4">
          Free Site Security<br/><span class="text-brand-yellow">Assessment in Delhi</span>
        </h2>
        <p class="text-white/70 text-lg leading-relaxed mb-5">
          Get a free, no-obligation security assessment for your Delhi site — covering guard requirements, entry point review, CCTV gaps, and housekeeping or facility needs.
        </p>
        <ul class="space-y-2 text-lg text-white/80">
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> On-site visit by our Delhi operations team</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Guard count and deployment recommendation</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Facility and housekeeping requirement review</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> 100% free, no obligation</li>
        </ul>
      </div>
      <div class="bg-white rounded-2xl p-8 fade-up" style="animation-delay:0.1s">
        <h3 class="font-display font-bold text-brand-dark capitalize text-xl mb-1">Book Free Site Visit</h3>
        <p class="text-gray-400 text-sm mb-6">For Delhi sites — offices, societies, schools, factories & more</p>
        <form action="../includes/contact.php" method="POST" class="space-y-4">
          <input type="hidden" name="form_type" value="delhi_free_site_assessment" />
          <div class="grid grid-cols-2 gap-4">
            <div>
              <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Name *</label>
              <input type="text" name="name" required placeholder="Your name" class="input-field" />
            </div>
            <div>
              <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Phone *</label>
              <input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX" class="input-field" />
            </div>
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Organisation / Property *</label>
            <input type="text" name="company" required placeholder="Office, society, school, factory..." class="input-field" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Delhi Area / District</label>
            <select name="location" class="input-field">
              <option value="">Select your area</option>
              <option>South Delhi</option>
              <option>Central Delhi (CP / Barakhamba)</option>
              <option>West Delhi (Janakpuri / Dwarka)</option>
              <option>North Delhi (Rohini / Pitampura)</option>
              <option>East Delhi (Patparganj / Laxmi Nagar)</option>
              <option>Okhla / Industrial Area</option>
              <option>Wazirpur / Naraina</option>
              <option>Saket / Malviya Nagar</option>
              <option>Other Delhi Area</option>
            </select>
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Service Required</label>
            <select name="service" class="input-field">
              <option value="">Select service</option>
              <option>Security Guards</option>
              <option>Housekeeping</option>
              <option>Facility Staff</option>
              <option>CCTV Monitoring</option>
              <option>Lady Security Guards</option>
              <option>Fire Safety Personnel</option>
              <option>Multiple Services</option>
            </select>
          </div>
          <button type="submit" class="w-full bg-brand-dark hover:bg-gray-800 text-white font-bold py-3.5 rounded-lg capitalize tracking-wider text-sm transition-colors flex items-center justify-center gap-2">
            <i class="fa fa-calendar-check text-xs"></i> Book Free Site Visit
          </button>
        </form>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     7. OTHER NCR LOCATIONS — GRAY
═══════════════════════════════════════════ -->
<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Also Serving</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark leading-none mb-4">
        Other <span style="color:#C9A91E;">NCR Locations</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
      <?php
      $locations = [
        ['name'=>'Noida',         'link'=>'noida.php'],
        ['name'=>'Gurgaon',       'link'=>'gurgaon.php'],
        ['name'=>'Ghaziabad',     'link'=>'ghaziabad.php'],
        ['name'=>'Faridabad',     'link'=>'faridabad.php'],
        ['name'=>'Greater Noida', 'link'=>'greater-noida.php'],
        ['name'=>'Manesar',       'link'=>'manesar.php'],
      ];
      foreach ($locations as $i => $loc):
      ?>
      <a href="<?php echo $loc['link']; ?>" class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-4 text-center group transition-all hover:-translate-y-1 fade-up" style="animation-delay:<?php echo $i*0.05; ?>s">
        <div class="w-10 h-10 rounded-full bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-2 transition-colors">
          <i class="fa fa-map-marker-alt text-brand-dark text-sm"></i>
        </div>
        <div class="text-brand-dark font-bold text-base capitalize tracking-wider"><?php echo $loc['name']; ?></div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     8. FAQs — WHITE
═══════════════════════════════════════════ -->
<section class="py-20 bg-white">
  <div class="max-w-4xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Common Questions</p>
      <h2 class="font-display font-black capitalize text-4xl text-brand-dark mb-4">Frequently Asked</h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="space-y-3">
      <?php
      $faqs = [
        ['q' => 'Do you provide security guards across all areas of Delhi?',
         'a' => 'Yes, we deploy across all districts of Delhi — including South Delhi, Central Delhi, West Delhi (Dwarka, Janakpuri), North Delhi (Rohini, Pitampura), East Delhi (Patparganj, Laxmi Nagar), and industrial zones like Okhla, Wazirpur, and Naraina.'],
        ['q' => 'How quickly can security guards be deployed at a Delhi site?',
         'a' => 'Our Delhi operations team maintains a ready pool of trained, verified guards. After a brief site discussion and deployment briefing, we can typically place guards within a short lead time — even for urgent requirements.'],
        ['q' => 'Do you also provide housekeeping and facility management staff in Delhi?',
         'a' => 'Yes, in addition to security guards we provide trained housekeeping staff, facility management personnel, pantry boys, receptionists, drivers, and bouncers for offices, malls, hospitals, and residential societies across Delhi.'],
        ['q' => 'Are your guards verified before deployment in Delhi?',
         'a' => 'Yes, every guard deployed in Delhi undergoes ID verification, address proof check, and background screening — with police verification support where required by the client.'],
        ['q' => 'Do you provide lady security guards in Delhi?',
         'a' => 'Yes, we regularly deploy trained lady security guards for schools, hospitals, malls, residential societies, and women\'s hostels across Delhi — for gate duty, visitor frisking, and women-sensitive area monitoring.'],
        ['q' => 'Can I hire security guards for a residential society in Delhi?',
         'a' => 'Yes, residential society security is one of our highest-demand services in Delhi. We provide guards, shift supervisors, and lady guards for gate management, visitor logging, patrolling, and night security for societies across all Delhi zones.'],
        ['q' => 'Do you conduct site visits before deployment in Delhi?',
         'a' => 'Yes, our Delhi operations team conducts a free site assessment before deployment — reviewing entry points, shift requirements, guard count, and any client-specific protocols before guard placement.'],
        ['q' => 'What industries do you serve in Delhi?',
         'a' => 'We serve corporate offices, residential societies, factories, warehouses, schools, colleges, hospitals, malls, construction sites, banks, and event venues across all zones and districts of Delhi.'],
      ];
      foreach ($faqs as $i => $f):
      ?>
      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:<?php echo $i*0.04; ?>s">
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
     9. FINAL CTA — YELLOW
═══════════════════════════════════════════ -->
<section class="py-20 bg-brand-yellow">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center fade-up">
    <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark leading-none mb-4">
      Need Security or Facility<br/>Staff in Delhi?
    </h2>
    <p class="text-brand-dark/70 text-sm sm:text-lg mb-8 max-w-lg mx-auto">
      Speak with our Delhi operations team today for a free site assessment and quick deployment plan.
    </p>
    <div class="flex flex-wrap justify-center gap-4">
      <a href="../contact" class="bg-brand-dark hover:bg-gray-800 text-white font-bold px-8 py-3.5 rounded capitalize tracking-wider text-base transition-colors shadow-lg">
        Request Quote
      </a>
      <a href="tel:+919430695171" class="flex items-center gap-2 border-2 border-brand-dark/50 text-brand-dark hover:border-brand-dark font-bold px-8 py-3.5 rounded capitalize tracking-wider text-base transition-colors">
        <i class="fa fa-phone"></i>  +91 94306 95171
      </a>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>