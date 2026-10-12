<?php
$page_title       = "Security Guard & Facility Management Services in Faridabad | Conquer Services";
$page_description = "Hire trained and verified security guards, housekeeping staff, bouncers, drivers, and fire safety personnel in Faridabad. Local deployment support with 24/7 supervisor coverage across all Faridabad sectors and industrial areas.";
$active_page      = "services";
$base_path        = "../";
include '../includes/header.php';
?>

<style>
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
  .service-card { transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s; }
  .service-card:hover { transform: translateY(-6px); box-shadow: 0 24px 48px rgba(0,0,0,0.10); border-color: #F2CF4A; }
</style>

<!-- ══════════════════════════════════════════
     1. HERO SECTION
═══════════════════════════════════════════ -->
<section class="relative min-h-[260px] sm:min-h-[340px] md:min-h-[400px] lg:min-h-[460px] overflow-hidden bg-brand-dark flex items-center">
  <div class="absolute inset-0">
    <img src="../assets/images/banner/city-banner.png" alt="Security guard services Faridabad" class="w-full h-full object-cover object-[center_40%]" />
  </div>
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.52) 0%, rgba(10,10,10,0.25) 60%);"></div>
  <div class="absolute inset-0 bg-gradient-to-r from-brand-dark via-brand-dark/65 to-transparent"></div>

  <div class="relative z-10 w-full py-10 sm:py-14 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
      
      <p class="text-brand-yellow font-display font-semibold text-[10px] sm:text-base capitalize tracking-widest mb-3 sm:mb-4 fade-up">
        <i class="fa fa-map-marker-alt mr-1"></i> Faridabad, Haryana
      </p>
      <h1 class="font-display font-black capitalize leading-tight mb-4 sm:mb-6 fade-up" style="animation-delay:0.1s">
        <span class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-white font-bold block">Security Guard &</span>
        <span class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-brand-yellow font-bold block">Facility Management</span>
        <span class="text-lg sm:text-2xl md:text-3xl text-white/80 font-bold block mt-1 sm:mt-2">Services in Faridabad</span>
      </h1>
      <p class="text-white/70 text-xs sm:text-lg leading-relaxed mb-6 sm:mb-8 fade-up max-w-xl" style="animation-delay:0.2s">
        Trained, verified, and locally deployed security guards, housekeeping staff, bouncers, drivers, and fire safety personnel for factories, offices, societies, hospitals, schools, malls, and construction sites across Faridabad and NIT areas.
      </p>
      <div class="flex flex-wrap gap-2 sm:gap-3 fade-up" style="animation-delay:0.3s">
        <a href="../contact" class="bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold px-5 sm:px-7 py-2.5 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-base transition-colors shadow-lg">
          Request Free Quote
        </a>
        <a href="tel:+919430695171" class="flex items-center gap-2 border border-brand-yellow text-brand-yellow hover:bg-brand-yellow hover:text-brand-dark font-semibold px-5 sm:px-7 py-2.5 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-base transition-colors">
          <i class="fa fa-phone"></i> Call Now
        </a>
      </div>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-brand-yellow"></div>
</section>


<!-- ══════════════════════════════════════════
     2. LOCAL SERVICE OVERVIEW — WHITE
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-center">
      <div class="fade-up">
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">Faridabad Operations</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-3 sm:mb-4">
          Complete Manpower Solutions<br/><span style="color:#C9A91E;">in Faridabad</span>
        </h2>
        <div class="y-divider-center mb-4 sm:mb-6"></div>
        <p class="text-gray-500 text-xs sm:text-base leading-relaxed mb-4 sm:mb-6">
          Faridabad is one of the largest industrial cities in Haryana — with a dense mix of manufacturing plants, industrial sectors, residential colonies, commercial complexes, hospitals, and schools. Managing security and facility staffing across this diverse landscape requires local knowledge, fast deployment, and consistent supervision.
        </p>
        

        <div class="grid grid-cols-2 gap-3 sm:gap-4">
          <?php
          $services = [
            ['icon'=>'fa-shield-alt',        'title'=>'Security Guards',        'desc'=>'Unarmed, armed, lady guards & VIP security'],
            ['icon'=>'fa-broom',             'title'=>'Housekeeping Staff',     'desc'=>'Daily & deep cleaning teams'],
            ['icon'=>'fa-users',             'title'=>'Facility Manpower',      'desc'=>'Office boys, helpers & support staff'],
            ['icon'=>'fa-user-shield',       'title'=>'Bouncers',               'desc'=>'Events, clubs & high-footfall venues'],
            ['icon'=>'fa-car',               'title'=>'Drivers',                'desc'=>'Verified, licensed chauffeurs'],
            ['icon'=>'fa-fire-extinguisher', 'title'=>'Fire Safety Personnel',  'desc'=>'Trained fire safety officers'],
           
          ];
          foreach ($services as $i => $s):
          ?>
          <div class="bg-gray-50 border border-gray-200 rounded-xl p-3 sm:p-4 hover:border-brand-yellow transition-colors fade-up" style="animation-delay:<?php echo $i*0.04; ?>s">
            <i class="fa <?php echo $s['icon']; ?> text-brand-dark text-base sm:text-lg mb-2 block"></i>
            <div class="font-display font-bold text-brand-dark text-xs sm:text-base capitalize leading-tight mb-0.5"><?php echo $s['title']; ?></div>
            <div class="text-gray-500 text-[10px] sm:text-sm leading-relaxed"><?php echo $s['desc']; ?></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="relative fade-up mt-6 lg:mt-0" style="animation-delay:0.1s">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="../assets/images/facility5.png" alt="Security operations in Faridabad" class="w-full h-full object-cover" />
        </div>
        <div class="absolute -bottom-4 sm:-bottom-5 -right-4 sm:-right-5 bg-brand-yellow rounded-2xl p-4 sm:p-5 shadow-xl text-center">
          <div class="font-display font-black text-2xl sm:text-3xl text-brand-dark leading-none">24/7</div>
          <div class="text-brand-dark font-bold text-xs capitalize tracking-wider mt-1">Coverage</div>
        </div>
        <div class="absolute -top-4 sm:-top-5 -left-4 sm:-left-5 bg-white border border-gray-200 rounded-xl p-3 sm:p-4 shadow-xl">
          <div class="flex items-center gap-2 sm:gap-3">
            <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-brand-yellow/20 flex items-center justify-center flex-shrink-0">
              <i class="fa fa-map-marker-alt text-brand-dark text-sm"></i>
            </div>
            <div>
              <div class="font-display font-black text-brand-dark text-sm sm:text-base leading-none">Local</div>
              <div class="text-gray-500 text-[10px] sm:text-xs mt-0.5">Faridabad Team</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     3. INDUSTRIES SERVED IN FARIDABAD — DARK
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-brand-dark">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-8 sm:mb-12 fade-up">
      <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">Local Industry Coverage</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-white leading-tight mb-3 sm:mb-4">
        Industries We Serve<br/><span class="text-brand-yellow">in Faridabad</span>
      </h2>
      <div class="y-divider-center mx-auto mb-4 sm:mb-5"></div>
      <p class="text-gray-400 max-w-xl mx-auto text-xs sm:text-lg leading-relaxed">
        Faridabad's industrial and residential landscape creates demand across a wide range of security and facility requirements — we cover them all.
      </p>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-4">
      <?php
      $industries = [
        ['icon'=>'fa-industry',      'title'=>'Factories & Industrial Units',  'desc'=>'Security guards and facility staff for manufacturing plants across Faridabad\'s industrial sectors — Sector 24, 25, 27, and the NHPC belt.'],
        ['icon'=>'fa-building',      'title'=>'Corporate Offices',             'desc'=>'Trained guards and receptionist staff for corporate offices, IT parks, and commercial buildings in Faridabad and NIT area.'],
        ['icon'=>'fa-home',          'title'=>'Residential Societies',         'desc'=>'Gate security, visitor management, and facility staff for residential societies and group housing complexes across Faridabad sectors.'],
        ['icon'=>'fa-warehouse',     'title'=>'Warehouses & Logistics',        'desc'=>'Verified loading helpers, security guards, and warehouse staff for logistics hubs and storage facilities near NH-19.'],
        ['icon'=>'fa-hard-hat',      'title'=>'Construction Sites',            'desc'=>'Site security, material check guards, and helpers for under-construction residential and commercial projects in Faridabad.'],
        ['icon'=>'fa-hospital',      'title'=>'Hospitals & Clinics',           'desc'=>'Security officers, ward attendants, and sanitation staff for hospitals, nursing homes, and healthcare facilities.'],
        ['icon'=>'fa-graduation-cap','title'=>'Schools & Colleges',            'desc'=>'Trained security guards and front desk staff for educational institutions with visitor management and entry control.'],
        ['icon'=>'fa-store',         'title'=>'Malls & Retail Spaces',         'desc'=>'Bouncers, security guards, housekeeping staff, and facility manpower for malls, showrooms, and commercial retail spaces.'],
      ];
      foreach ($industries as $i => $ind):
      ?>
      <div class="bg-white/5 border border-white/10 hover:border-brand-yellow/50 rounded-xl p-4 sm:p-5 transition-all fade-up" style="animation-delay:<?php echo $i*0.05; ?>s">
        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3">
          <i class="fa <?php echo $ind['icon']; ?> text-brand-yellow text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-white text-xs sm:text-lg capitalize leading-tight mb-1 sm:mb-2"><?php echo $ind['title']; ?></h4>
        <p class="text-gray-400 text-[10px] sm:text-base leading-relaxed"><?php echo $ind['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     4. POPULAR SERVICES IN FARIDABAD — light gray
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-8 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">Most Requested in Faridabad</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-3 sm:mb-4">
        Popular Services in<br/><span style="color:#C9A91E;">Faridabad</span>
      </h2>
      <div class="y-divider-center mx-auto mb-4 sm:mb-5"></div>
      <p class="text-gray-500 max-w-xl mx-auto text-xs sm:text-lg leading-relaxed">
        These are the most frequently requested services from our Faridabad clients — cross-linked to full service pages for detailed information.
      </p>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-4">
      <?php
      $popular = [
        ['href'=>'../security-guards-services.php',        'icon'=>'fa-shield-alt',        'title'=>'Security Guard Services',        'desc'=>'Unarmed guards for factories, offices, societies & warehouses in Faridabad.'],
        ['href'=>'../facility-management/housekeeping.php','icon'=>'fa-broom',             'title'=>'Housekeeping Services',          'desc'=>'Daily cleaning & deep housekeeping for offices, hospitals & malls.'],
        ['href'=>'../facility-management/helpers.php',     'icon'=>'fa-people-carry',      'title'=>'Helpers & Labour Supply',        'desc'=>'Loading, packing & general site helpers for factories and warehouses.'],
        ['href'=>'../facility-management/bouncers.php',    'icon'=>'fa-user-shield',       'title'=>'Bouncer Services',               'desc'=>'Trained bouncers for events, clubs, and high-footfall venues in Faridabad.'],
        ['href'=>'../facility-management/drivers.php',     'icon'=>'fa-car',               'title'=>'Driver & Chauffeur Services',    'desc'=>'Verified, licensed drivers for corporate and personal duty across Faridabad.'],
        ['href'=>'../facility-management/fire-safety.php', 'icon'=>'fa-fire-extinguisher', 'title'=>'Fire & Safety Personnel',        'desc'=>'Trained fire safety officers for factories, hospitals & commercial buildings.'],
        ['href'=>'../facility-management/receptionist.php','icon'=>'fa-concierge-bell',    'title'=>'Receptionist & Front Desk',      'desc'=>'Professional front desk staff for corporate offices and institutions.'],
        ['href'=>'../manpower-services.php',      'icon'=>'fa-users',             'title'=>'Manpower Outsourcing',           'desc'=>'Contract staffing with PF/ESIC compliance for Faridabad businesses.'],
      ];
      foreach ($popular as $i => $p):
      ?>
      <a href="<?php echo $p['href']; ?>" class="service-card bg-white border border-gray-200 rounded-xl p-4 sm:p-5 group fade-up" style="animation-delay:<?php echo $i*0.05; ?>s">
        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-lg bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mb-3 transition-colors">
          <i class="fa <?php echo $p['icon']; ?> text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1 sm:mb-2"><?php echo $p['title']; ?></h4>
        <p class="text-gray-500 text-[10px] sm:text-base leading-relaxed"><?php echo $p['desc']; ?></p>
        <div class="mt-2 sm:mt-3 text-brand-dark text-[10px] sm:text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all">View Service <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     5. WHY CHOOSE US IN FARIDABAD — WHITE
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-center">
      <div class="fade-up">
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">The Conquer Advantage</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-3 sm:mb-4">
          Why Choose Us<br/><span style="color:#C9A91E;">in Faridabad</span>
        </h2>
        <div class="y-divider-center mb-4 sm:mb-6"></div>
        <p class="text-gray-500 text-xs sm:text-base leading-relaxed mb-6 sm:mb-8">
          Most security agencies in Faridabad operate from a distance — sending staff without local briefings, skipping supervisor visits, and leaving clients to manage problems themselves. We work differently.
        </p>
        <div class="space-y-4 sm:space-y-5">
          <?php
          $reasons = [
            ['icon'=>'fa-map-marker-alt','title'=>'Local Deployment Support',        'desc'=>'Our operations team covers Faridabad directly — staff are sourced, verified, and briefed locally before deployment at your site.'],
            ['icon'=>'fa-bolt',          'title'=>'Quick Staff Availability',         'desc'=>'We maintain a ready pool of trained and verified manpower for Faridabad, enabling deployment within 48–72 hours of confirmation.'],
            ['icon'=>'fa-user-tie',      'title'=>'Regular Supervisor Visits',        'desc'=>'Dedicated supervisors conduct scheduled and surprise visits to your Faridabad site to ensure attendance, discipline, and work quality.'],
            ['icon'=>'fa-network-wired', 'title'=>'Delhi NCR Operations Team',        'desc'=>'Backed by a full NCR-wide operations infrastructure — any issue in Faridabad is escalated and resolved through our central team, same day.'],
            ['icon'=>'fa-user-check',    'title'=>'Verified Manpower Only',           'desc'=>'Every guard and facility staff member deployed in Faridabad undergoes ID verification, address verification, and background checks before clearance.'],
          ];
          foreach ($reasons as $i => $r):
          ?>
          <div class="flex gap-3 sm:gap-4 items-start fade-up" style="animation-delay:<?php echo $i*0.07; ?>s">
            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa <?php echo $r['icon']; ?> text-brand-dark text-sm"></i>
            </div>
            <div>
              <h4 class="font-display font-bold text-brand-dark text-base capitalize mb-1"><?php echo $r['title']; ?></h4>
              <p class="text-gray-500 text-sm leading-relaxed"><?php echo $r['desc']; ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="relative fade-up mt-6 lg:mt-0" style="animation-delay:0.1s">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="../assets/images/industry2.png" alt="Security supervisor Faridabad" class="w-full h-full object-cover" />
        </div>
        <!-- Stats bar -->
        <div class="absolute bottom-4 sm:bottom-5 left-4 sm:left-5 right-4 sm:right-5 bg-white rounded-xl p-3 sm:p-4 shadow-2xl">
          <div class="grid grid-cols-3 gap-2 sm:gap-3 text-center divide-x divide-gray-200">
            <div>
              <div class="font-display font-black text-brand-dark text-lg sm:text-xl">500+</div>
              <div class="text-gray-500 text-[9px] sm:text-[12px] capitalize tracking-wider mt-0.5">NCR Clients</div>
            </div>
            <div>
              <div class="font-display font-black text-brand-dark text-lg sm:text-xl">48 hrs</div>
              <div class="text-gray-500 text-[9px] sm:text-[12px] capitalize tracking-wider mt-0.5">Deployment</div>
            </div>
            <div>
              <div class="font-display font-black text-brand-dark text-lg sm:text-xl">24/7</div>
              <div class="text-gray-500 text-[9px] sm:text-[12px] capitalize tracking-wider mt-0.5">Support</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     6. LEAD MAGNET — DARK
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 relative overflow-hidden">
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.96) 0%, rgba(10,10,10,0.88) 100%), url('../assets/images/service2.png') center/cover no-repeat;"></div>
  <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-10 sm:gap-12 items-center">
      <div class="fade-up">
        <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">Free Site Assessment</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-white leading-tight mb-3 sm:mb-4">
          Free Site Security<br/><span class="text-brand-yellow">Assessment in Faridabad</span>
        </h2>
        <p class="text-white/70 text-xs sm:text-lg leading-relaxed mb-4 sm:mb-6">
          Share your site details and our Faridabad team will assess your security and facility manpower requirements — guard count, post positions, shift structure, and staffing plan — at no cost and no obligation.
        </p>
        <ul class="space-y-2 sm:space-y-2.5 text-xs sm:text-lg text-white/80">
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Guard count & post planning for your site</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Facility staffing recommendation</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Local Faridabad site visit</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> No-obligation, 100% free</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Response within 24 hours</li>
        </ul>
      </div>

      <div class="bg-white rounded-2xl p-5 sm:p-8 fade-up mt-6 lg:mt-0" style="animation-delay:0.1s">
        <h3 class="font-display font-bold text-brand-dark capitalize text-lg sm:text-xl mb-1">Book Free Site Visit</h3>
        <p class="text-gray-500 text-xs mb-5 sm:mb-6">Faridabad — Response within 24 hours</p>
        <form action="../includes/contact.php" method="POST" class="space-y-3 sm:space-y-4">
          <input type="hidden" name="form_type" value="faridabad_site_assessment" />
          <input type="hidden" name="location_page" value="Faridabad" />
          <div class="grid sm:grid-cols-2 gap-3 sm:gap-4">
            <div>
              <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1 block">Name *</label>
              <input type="text" name="name" required placeholder="Your full name" class="input-field" />
            </div>
            <div>
              <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1 block">Phone *</label>
              <input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX" class="input-field" />
            </div>
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1 block">Organisation / Society</label>
            <input type="text" name="company" placeholder="Company or society name" class="input-field" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1 block">Site Area in Faridabad</label>
            <select name="area" class="input-field">
              <option value="">Select area</option>
              <option>NIT Faridabad</option>
              <option>Old Faridabad</option>
              <option>Sector 15 / 16 / 17</option>
              <option>Sector 20 / 21 / 22</option>
              <option>Sector 24 / 25 (Industrial)</option>
              <option>Sector 27 / 28 (Industrial)</option>
              <option>Ballabhgarh</option>
              <option>NHPC Colony Area</option>
              <option>Neelam Chowk Area</option>
              <option>Tigaon / Palwal Road</option>
              <option>Other Faridabad Area</option>
            </select>
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1 block">Service Required</label>
            <select name="service" class="input-field">
              <option value="">Select service</option>
              <option>Security Guards</option>
              <option>Housekeeping Staff</option>
              <option>Helpers & Labour</option>
              <option>Bouncers</option>
              <option>Drivers / Chauffeurs</option>
              <option>Fire Safety Personnel</option>
              <option>Receptionist Staff</option>
              <option>Multiple Services</option>
            </select>
          </div>
          <button type="submit" class="w-full bg-brand-dark hover:bg-gray-800 text-white font-bold py-3 sm:py-3.5 rounded-lg capitalize tracking-wider text-xs sm:text-sm transition-colors flex items-center justify-center gap-2">
            <i class="fa fa-calendar-check text-xs"></i> Book Free Site Visit
          </button>
        </form>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     OTHER NCR LOCATIONS — light gray
═══════════════════════════════════════════ -->
<section class="py-10 sm:py-14 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-6 sm:mb-10 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2">We Also Serve</p>
      <h3 class="font-display font-black capitalize text-xl sm:text-2xl text-brand-dark leading-tight">Other Delhi NCR Locations</h3>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-3 fade-up">
      <?php
      $locations = [
        ['href'=>'delhi.php',        'name'=>'Delhi'],
        ['href'=>'noida.php',        'name'=>'Noida'],
        ['href'=>'greater-noida.php','name'=>'Greater Noida'],
        ['href'=>'gurgaon.php',      'name'=>'Gurgaon'],
        ['href'=>'ghaziabad.php',    'name'=>'Ghaziabad'],
        ['href'=>'manesar.php',      'name'=>'Manesar'],
      ];
      foreach ($locations as $loc):
      ?>
      <a href="<?php echo $loc['href']; ?>" class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-3 sm:p-4 text-center transition-all group">
        <i class="fa fa-map-marker-alt text-brand-dark group-hover:text-brand-yellow mb-1 sm:mb-2 block text-base transition-colors"></i>
        <span class="text-brand-dark font-bold text-xs sm:text-base"><?php echo $loc['name']; ?></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     7. FAQs — WHITE
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
  <div class="max-w-3xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-8 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">Faridabad — Common Questions</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-1">Frequently Asked</h2>
      <div class="y-divider-center mx-auto mt-4"></div>
    </div>
    <div class="space-y-3">
      <?php
      $faqs = [
        [
          'q' => 'Do you provide security guards in Faridabad?',
          'a' => 'Yes. We deploy trained, verified security guards across all Faridabad areas including NIT, Old Faridabad, Ballabhgarh, Sector 15–28, NHPC Colony, and the industrial sectors along Palwal Road. Our operations team covers Faridabad directly from our Delhi NCR base.',
        ],
        [
          'q' => 'How quickly can guards or facility staff be deployed in Faridabad?',
          'a' => 'We maintain a ready pool of verified manpower for the Faridabad region. For most requirements, deployment begins within 48–72 hours of confirmation. Urgent requests are handled on priority — contact us directly with your timeline.',
        ],
        [
          'q' => 'Do you provide security for factories in Faridabad\'s industrial sectors?',
          'a' => 'Yes. We have significant experience deploying security guards and facility staff across Faridabad\'s manufacturing belt — including Sector 24, 25, 27, the NHPC industrial area, and Ballabhgarh. Guards are briefed on factory-specific entry control, material check, and shift duty requirements.',
        ],
        [
          'q' => 'Are your staff background verified before deployment in Faridabad?',
          'a' => 'Yes. Every security guard and facility staff member deployed in Faridabad undergoes ID verification, address verification, police verification support, and previous employment checks before being cleared by our supervisor team.',
        ],
        [
          'q' => 'Do you provide housekeeping and facility staff in Faridabad?',
          'a' => 'Yes. We deploy housekeeping staff, office boys, helpers, receptionists, bouncers, drivers, garden & maintenance staff, and fire safety personnel across Faridabad for offices, societies, hospitals, schools, factories, and commercial spaces.',
        ],
        [
          'q' => 'Do you conduct supervisor visits to Faridabad client sites?',
          'a' => 'Yes. Dedicated supervisors conduct regular scheduled and surprise visits to all Faridabad client sites to check attendance, work quality, uniform, and discipline. Supervisors are also reachable for same-day escalations.',
        ],
        [
          'q' => 'What is the minimum contract period for Faridabad deployments?',
          'a' => 'We offer flexible terms — monthly, quarterly, and annual contracts as well as short-term or event-based deployments. There is no rigid minimum for enquiries; contact us with your requirement and we will recommend the most suitable arrangement.',
        ],
      ];
      foreach ($faqs as $i => $faq):
      ?>
      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:<?php echo $i*0.05; ?>s">
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


<!-- ══════════════════════════════════════════
     8. FINAL CTA — YELLOW
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-brand-yellow">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center fade-up">
    <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-3 sm:mb-4">
      Need Security or Facility<br/>Staff in Faridabad?
    </h2>
    <p class="text-brand-dark/70 text-xs sm:text-lg mb-6 sm:mb-8 max-w-lg mx-auto">
      Contact our team today and get the right security guards, housekeeping staff, or facility manpower for your Faridabad site — verified, briefed, and deployed fast.
    </p>
    <div class="flex flex-wrap justify-center gap-2 sm:gap-4">
      <a href="../contact" class="bg-brand-dark hover:bg-gray-800 text-white font-bold px-6 sm:px-8 py-3 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-base transition-colors shadow-lg">
        Request Quote
      </a>
    
      <a href="tel:+919430695171" class="flex items-center gap-2 border-2 border-brand-dark/50 text-brand-dark hover:border-brand-dark font-bold px-6 sm:px-8 py-3 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-base transition-colors">
        <i class="fa fa-phone"></i> Call Now
      </a>
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
    if (!isOpen) {
      body.style.maxHeight = body.scrollHeight + 'px';
      icon.classList.add('rotate-45');
    }
  }
</script>

<?php include '../includes/footer.php'; ?>