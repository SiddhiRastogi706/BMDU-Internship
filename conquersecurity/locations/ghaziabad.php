<?php
$page_title       = "Security Guard & Facility Management Services in Ghaziabad | Conquer Services";
$page_description = "Trained security guards, housekeeping, and facility staff in Ghaziabad — Indirapuram, Vaishali, Vasundhara, Raj Nagar Extension, Kavi Nagar & Sahibabad. Quick deployment, verified manpower. Book a free site visit.";
$active_page      = "locations";
$base_path        = "../";
include '../includes/header.php';

// ── Quick-edit city variables (swap these to generate other city pages) ──
$city        = "Ghaziabad";
$city_areas  = "Indirapuram, Vaishali, Vasundhara, Raj Nagar Extension, Kavi Nagar, Sahibabad & NH-9";
$city_phone  = "+919430695171";
$city_phone_display = "+91 94306 95171";
?>

<style>
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
  @media (max-width: 480px) {
    .y-divider-center { width: 40px; }
  }
</style>

<!-- ══════════════════════════════════════════
     1. HERO — dark, image background
═══════════════════════════════════════════ -->
<section class="relative min-h-[380px] sm:h-80 md:h-96 overflow-hidden bg-brand-dark">
  <div class="absolute inset-0">
    <img src="<?php echo $base_path; ?>assets/images/banner/city-banner.png" alt="Security guard and facility management services in Ghaziabad" class="w-full h-full object-cover" style="object-position: 50% 40%;"/>
  </div>
  <div class="page-hero-overlay absolute inset-0"></div>
  <div class="relative z-10 h-full flex flex-col justify-center py-10 sm:py-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
      <p class="text-brand-yellow font-semibold capitalize tracking-widest text-[11px] sm:text-base mb-2 sm:mb-3">Delhi NCR &middot; Ghaziabad Operations</p>
      <h1 class="font-display font-black capitalize leading-tight sm:leading-none text-white">
        <span class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl block">Security Guard & Facility</span>
        <span class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-brand-yellow block">Management Services in Ghaziabad</span>
      </h1>
      <p class="text-white/70 text-sm sm:text-lg max-w-2xl leading-relaxed mt-4 sm:mt-5 mb-2">
        Verified, trained manpower for offices, societies, factories, and institutions across <?php echo $city_areas; ?>. Rapid deployment backed by our Delhi NCR operations team.
      </p>
      <div class="flex flex-wrap gap-3 sm:gap-4 mt-5 sm:mt-6">

        <a href="tel:<?php echo $city_phone; ?>" class="w-full sm:w-auto justify-center flex items-center gap-2 border-2 border-white/40 text-white hover:border-white font-bold px-6 sm:px-7 py-3 rounded capitalize tracking-wider text-base transition-colors">
          <i class="fa fa-phone"></i> <?php echo $city_phone_display; ?>
        </a>
      </div>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-brand-yellow"></div>
</section>


<!-- ══════════════════════════════════════════
     2. LOCAL SERVICE OVERVIEW — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14 items-center mb-14 sm:mb-16">
      <div class="fade-up">
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-[11px] sm:text-base mb-3">Serving Ghaziabad Since Day One</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight sm:leading-none mb-4">
          Manpower & Facility Solutions<br class="hidden sm:block"/><span style="color:#C9A91E;">Built for Ghaziabad</span>
        </h2>
        <div class="y-divider-center mb-5 sm:mb-6"></div>
        <p class="text-gray-500 text-lg leading-relaxed mb-4">
          Ghaziabad's mix of residential societies, industrial belts, corporate offices, and institutions in areas like <?php echo $city_areas; ?> each need a different security and facility approach. We deploy trained, background-verified staff suited to each site type.
        </p>
        <p class="text-gray-500 text-lg leading-relaxed mb-6 sm:mb-8">
          Our local coordinators handle recruitment, briefing, and replacements so your site is never left uncovered — with supervisor visits and reporting built into every deployment.
        </p>
        <div class="flex flex-wrap gap-3">
          <a href="../contact" class="w-full sm:w-auto text-center bg-brand-dark hover:bg-gray-800 text-white font-bold px-7 py-3 rounded capitalize tracking-wider text-base transition-colors">Get Free Quote</a>

        </div>
      </div>
      <div class="relative fade-up" style="animation-delay:0.1s">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="<?php echo $base_path; ?>assets/images/guard2.png" alt="Facility staff deployed in Ghaziabad" class="w-full h-full object-cover" />
        </div>
        <div class="absolute -bottom-4 -right-4 sm:-bottom-5 sm:-right-5 bg-brand-yellow rounded-2xl p-4 sm:p-5 shadow-xl text-center">
          <div class="font-display font-black text-lg sm:text-xl text-brand-dark leading-none">24/7</div>
          <div class="text-brand-dark font-bold text-[11px] sm:text-sm capitalize tracking-wider mt-1">Local Support</div>
        </div>
      </div>
    </div>

    <!-- Service pills -->
    <div class="text-center mb-10 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-[11px] sm:text-base mb-3">What We Deploy</p>
      <h3 class="font-display font-black capitalize text-xl sm:text-2xl md:text-3xl text-brand-dark mb-4">Services Available in Ghaziabad</h3>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3 sm:gap-4">
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 text-center fade-up hover:border-brand-yellow transition-colors">
        <i class="fa fa-shield-alt text-brand-dark mb-2 block text-lg sm:text-xl"></i>
        <span class="text-brand-dark text-[11px] sm:text-base font-bold capitalize">Security Guards</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 text-center fade-up hover:border-brand-yellow transition-colors" style="animation-delay:0.05s">
        <i class="fa fa-broom text-brand-dark mb-2 block text-lg sm:text-xl"></i>
        <span class="text-brand-dark text-[11px] sm:text-base font-bold capitalize">Housekeeping</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 text-center fade-up hover:border-brand-yellow transition-colors" style="animation-delay:0.1s">
        <i class="fa fa-users text-brand-dark mb-2 block text-lg sm:text-xl"></i>
        <span class="text-brand-dark text-[11px] sm:text-base font-bold capitalize">Facility Staff</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 text-center fade-up hover:border-brand-yellow transition-colors" style="animation-delay:0.15s">
        <i class="fa fa-user-shield text-brand-dark mb-2 block text-lg sm:text-xl"></i>
        <span class="text-brand-dark text-[11px] sm:text-base font-bold capitalize">Bouncers</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 text-center fade-up hover:border-brand-yellow transition-colors">
        <i class="fa fa-car text-brand-dark mb-2 block text-lg sm:text-xl"></i>
        <span class="text-brand-dark text-[11px] sm:text-base font-bold capitalize">Drivers</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 text-center fade-up hover:border-brand-yellow transition-colors" style="animation-delay:0.05s">
        <i class="fa fa-fire-extinguisher text-brand-dark mb-2 block text-lg sm:text-xl"></i>
        <span class="text-brand-dark text-[11px] sm:text-base font-bold capitalize">Fire Safety Personnel</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 text-center fade-up hover:border-brand-yellow transition-colors" style="animation-delay:0.1s">
        <i class="fa fa-video text-brand-dark mb-2 block text-lg sm:text-xl"></i>
        <span class="text-brand-dark text-[11px] sm:text-base font-bold capitalize">CCTV Monitoring</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 text-center fade-up hover:border-brand-yellow transition-colors" style="animation-delay:0.15s">
        <i class="fa fa-headset text-brand-dark mb-2 block text-lg sm:text-xl"></i>
        <span class="text-brand-dark text-[11px] sm:text-base font-bold capitalize">Support Services</span>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     3. INDUSTRIES SERVED IN GHAZIABAD — light gray
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-[11px] sm:text-base mb-3">Local Demand</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-4">Industries We Serve<br class="hidden sm:block"/><span style="color:#C9A91E;">Across Ghaziabad</span></h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-5">
      <a href="../industries/offices" class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up hover:border-brand-yellow hover:-translate-y-1 transition-all block">
        <i class="fa fa-building text-brand-dark text-lg sm:text-xl mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Corporate Offices</h4>
        <p class="text-gray-500 text-base leading-relaxed">Reception support, access control & visitor management for office parks.</p>
      </a>
      <a href="../industries/residential" class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up hover:border-brand-yellow hover:-translate-y-1 transition-all block" style="animation-delay:0.05s">
        <i class="fa fa-home text-brand-dark text-lg sm:text-xl mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Residential Societies</h4>
        <p class="text-gray-500 text-base leading-relaxed">Gate security, visitor logging & patrolling for housing societies.</p>
      </a>
      <a href="../industries/industrial" class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up hover:border-brand-yellow hover:-translate-y-1 transition-all block" style="animation-delay:0.1s">
        <i class="fa fa-industry text-brand-dark text-lg sm:text-xl mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Factories</h4>
        <p class="text-gray-500 text-base leading-relaxed">Shift-based guarding for Ghaziabad's industrial and manufacturing units.</p>
      </a>
      <a href="../industries/warehouses-logistics" class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up hover:border-brand-yellow hover:-translate-y-1 transition-all block" style="animation-delay:0.15s">
        <i class="fa fa-warehouse text-brand-dark text-lg sm:text-xl mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Warehouses</h4>
        <p class="text-gray-500 text-base leading-relaxed">Perimeter checks and material movement control for logistics hubs.</p>
      </a>
      <a href="../industries/schools-colleges" class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up hover:border-brand-yellow hover:-translate-y-1 transition-all block">
        <i class="fa fa-graduation-cap text-brand-dark text-lg sm:text-xl mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Schools</h4>
        <p class="text-gray-500 text-base leading-relaxed">Verified guards trained in campus safety and student protocols.</p>
      </a>
      <a href="../industries/hospitals" class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up hover:border-brand-yellow hover:-translate-y-1 transition-all block" style="animation-delay:0.05s">
        <i class="fa fa-hospital text-brand-dark text-lg sm:text-xl mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Hospitals</h4>
        <p class="text-gray-500 text-base leading-relaxed">Ward security, entry control and emergency response coverage.</p>
      </a>
      <a href="../industries/retail" class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up hover:border-brand-yellow hover:-translate-y-1 transition-all block" style="animation-delay:0.1s">
        <i class="fa fa-store text-brand-dark text-lg sm:text-xl mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Malls</h4>
        <p class="text-gray-500 text-base leading-relaxed">Crowd management, entry screening & customer-friendly guarding.</p>
      </a>
      <a href="../industries/construction" class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up hover:border-brand-yellow hover:-translate-y-1 transition-all block" style="animation-delay:0.15s">
        <i class="fa fa-hard-hat text-brand-dark text-lg sm:text-xl mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Construction Sites</h4>
        <p class="text-gray-500 text-base leading-relaxed">Site access control and material/asset protection round the clock.</p>
      </a>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     4. POPULAR SERVICES IN GHAZIABAD — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-[11px] sm:text-base mb-3">Most Requested</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-4">Popular Services<br class="hidden sm:block"/><span style="color:#C9A91E;">in Ghaziabad</span></h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6">
      <a href="../security-guards-services" class="service-card bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up block">
        <div class="aspect-[16/10] overflow-hidden">
          <img src="<?php echo $base_path; ?>assets/images/service1.png" alt="Security guard services Ghaziabad" class="w-full h-full object-cover"/>
        </div>
        <div class="p-5 sm:p-6">
          <h4 class="font-display font-bold text-brand-dark capitalize text-base mb-2">Security Guard Services</h4>
          <p class="text-gray-500 text-sm leading-relaxed mb-3">Armed & unarmed guards, patrolling teams, and site supervisors.</p>
          <span class="text-brand-dark text-sm font-bold capitalize tracking-wider">Learn More <i class="fa fa-arrow-right ml-1"></i></span>
        </div>
      </a>
      <a href="../facility-management" class="service-card bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up block" style="animation-delay:0.05s">
        <div class="aspect-[16/10] overflow-hidden">
          <img src="<?php echo $base_path; ?>assets/images/facility2.png" alt="Facility management Ghaziabad" class="w-full h-full object-cover"/>
        </div>
        <div class="p-5 sm:p-6">
          <h4 class="font-display font-bold text-brand-dark capitalize text-base mb-2">Facility Management</h4>
          <p class="text-gray-500 text-sm leading-relaxed mb-3">Housekeeping, office boys, receptionists & garden maintenance.</p>
          <span class="text-brand-dark text-sm font-bold capitalize tracking-wider">Learn More <i class="fa fa-arrow-right ml-1"></i></span>
        </div>
      </a>
      <a href="../manpower-services" class="service-card bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up block" style="animation-delay:0.1s">
        <div class="aspect-[16/10] overflow-hidden">
          <img src="<?php echo $base_path; ?>assets/images/manpower1.png" alt="Manpower services Ghaziabad" class="w-full h-full object-cover"/>
        </div>
        <div class="p-5 sm:p-6">
          <h4 class="font-display font-bold text-brand-dark capitalize text-base mb-2">Manpower Services</h4>
          <p class="text-gray-500 text-sm leading-relaxed mb-3">Drivers, helpers, bouncers & fire safety personnel on demand.</p>
          <span class="text-brand-dark text-sm font-bold capitalize tracking-wider">Learn More <i class="fa fa-arrow-right ml-1"></i></span>
        </div>
      </a>
      <a href="../technology-support" class="service-card bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up block">
        <div class="aspect-[16/10] overflow-hidden">
          <img src="<?php echo $base_path; ?>assets/images/support1.png" alt="CCTV and technology support Ghaziabad" class="w-full h-full object-cover"/>
        </div>
        <div class="p-5 sm:p-6">
          <h4 class="font-display font-bold text-brand-dark capitalize text-base mb-2">Technology & Support</h4>
          <p class="text-gray-500 text-sm leading-relaxed mb-3">CCTV monitoring, access control & security audits.</p>
          <span class="text-brand-dark text-sm font-bold capitalize tracking-wider">Learn More <i class="fa fa-arrow-right ml-1"></i></span>
        </div>
      </a>
      <a href="../facility-management/fire-safety" class="service-card bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up block" style="animation-delay:0.05s">
        <div class="aspect-[16/10] overflow-hidden">
          <img src="<?php echo $base_path; ?>assets/images/facility5.png" alt="Fire safety personnel Ghaziabad" class="w-full h-full object-cover"/>
        </div>
        <div class="p-5 sm:p-6">
          <h4 class="font-display font-bold text-brand-dark capitalize text-base mb-2">Fire Safety Personnel</h4>
          <p class="text-gray-500 text-sm leading-relaxed mb-3">Trained fire wardens for factories, malls & residential towers.</p>
          <span class="text-brand-dark text-sm font-bold capitalize tracking-wider">Learn More <i class="fa fa-arrow-right ml-1"></i></span>
        </div>
      </a>
      <a href="../facility-management/drivers" class="service-card bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up block" style="animation-delay:0.1s">
        <div class="aspect-[16/10] overflow-hidden">
          <img src="<?php echo $base_path; ?>assets/images/facility3.png" alt="Drivers Ghaziabad" class="w-full h-full object-cover"/>
        </div>
        <div class="p-5 sm:p-6">
          <h4 class="font-display font-bold text-brand-dark capitalize text-base mb-2">Drivers</h4>
          <p class="text-gray-500 text-sm leading-relaxed mb-3">Verified, licensed drivers for offices, societies & families.</p>
          <span class="text-brand-dark text-sm font-bold capitalize tracking-wider">Learn More <i class="fa fa-arrow-right ml-1"></i></span>
        </div>
      </a>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     5. WHY CHOOSE US IN GHAZIABAD — light gray
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-[11px] sm:text-base mb-3">Local Advantage</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-4">Why Choose Us<br class="hidden sm:block"/><span style="color:#C9A91E;">in Ghaziabad</span></h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 sm:gap-5">
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 text-center fade-up">
        <i class="fa fa-map-marker-alt text-brand-dark text-xl sm:text-2xl mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-2">Local Deployment Support</h4>
        <p class="text-gray-500 text-base leading-relaxed">On-ground coordinators across Ghaziabad who know the local sites.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 text-center fade-up" style="animation-delay:0.05s">
        <i class="fa fa-bolt text-brand-dark text-xl sm:text-2xl mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-2">Quick Staff Availability</h4>
        <p class="text-gray-500 text-base leading-relaxed">Fast turnaround for new deployments and urgent replacements.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 text-center fade-up" style="animation-delay:0.1s">
        <i class="fa fa-user-check text-brand-dark text-xl sm:text-2xl mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-2">Supervisor Visits</h4>
        <p class="text-gray-500 text-base leading-relaxed">Regular site checks to ensure duty discipline and quality control.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 text-center fade-up" style="animation-delay:0.15s">
        <i class="fa fa-headset text-brand-dark text-xl sm:text-2xl mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-2">Delhi NCR Ops Team</h4>
        <p class="text-gray-500 text-base leading-relaxed">Backed by a centralised operations desk covering all of NCR.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 text-center fade-up sm:col-span-2 md:col-span-1" style="animation-delay:0.2s">
        <i class="fa fa-id-badge text-brand-dark text-xl sm:text-2xl mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-2">Verified Manpower</h4>
        <p class="text-gray-500 text-base leading-relaxed">Background-checked, trained staff with valid documentation.</p>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     6. LEAD MAGNET — Free Site Security Assessment — DARK with image
═══════════════════════════════════════════ -->
<section id="lead-magnet" class="py-14 sm:py-16 md:py-20 relative overflow-hidden">
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.95) 0%, rgba(10,10,10,0.85) 100%), url('<?php echo $base_path; ?>assets/images/service2.png') center/cover no-repeat;"></div>
  <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-12 items-center">
      <div class="fade-up">
        <p class="text-brand-yellow font-semibold capitalize tracking-widest text-[11px] sm:text-base mb-3">Free For Ghaziabad Sites</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-white leading-tight sm:leading-none mb-4">
          Free Site Security<br class="hidden sm:block"/><span class="text-brand-yellow">Assessment in Ghaziabad</span>
        </h2>
        <p class="text-white/70 text-lg leading-relaxed mb-5">Our supervisor will visit your site in Ghaziabad, assess your current security & facility gaps, and recommend the right manpower deployment — at no cost.</p>
        <ul class="space-y-2.5 text-white/70 text-lg">
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow"></i> On-site risk & footfall assessment</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow"></i> Manpower & shift recommendation</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow"></i> No-obligation quote</li>
        </ul>
      </div>
      <div class="bg-white rounded-2xl p-6 sm:p-8 fade-up" style="animation-delay:0.1s">
        <h3 class="font-display font-bold text-brand-dark capitalize text-lg sm:text-xl mb-5 sm:mb-6">Book Free Site Visit</h3>
        <form action="../includes/contact.php" method="POST" class="space-y-4">
          <input type="hidden" name="form_type" value="ghaziabad_site_assessment" />
          <input type="hidden" name="location" value="Ghaziabad" />
          <div><label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Name *</label>
            <input type="text" name="name" required placeholder="Your name" class="input-field" /></div>
          <div><label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Phone *</label>
            <input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX" class="input-field" /></div>
          <div><label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Site Area in Ghaziabad</label>
            <input type="text" name="company" placeholder="e.g. Indirapuram, Vaishali, Sahibabad" class="input-field" /></div>
          <div><label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Service Required</label>
            <select name="service" class="input-field">
              <option value="">Select a service</option>
              <option value="Security Guards">Security Guards</option>
              <option value="Housekeeping">Housekeeping</option>
              <option value="Facility Staff">Facility Staff</option>
              <option value="Bouncers">Bouncers</option>
              <option value="Drivers">Drivers</option>
              <option value="Fire Safety Personnel">Fire Safety Personnel</option>
              <option value="CCTV & Support">CCTV & Support Services</option>
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
     7. FAQs — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-white">
  <div class="max-w-4xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-[11px] sm:text-base mb-3">Common Questions</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-4">Ghaziabad FAQs</h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="space-y-3" id="faq-container">
      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you provide security guards in all areas of Ghaziabad?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-4 sm:pb-5 text-gray-500 text-base leading-relaxed">Yes. We cover all major areas including Indirapuram, Vaishali, Vasundhara, Raj Nagar Extension, Kavi Nagar, Sahibabad, and the NH-9 industrial belt.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.05s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">How quickly can guards be deployed at my Ghaziabad site?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-4 sm:pb-5 text-gray-500 text-base leading-relaxed">For most sites, we can deploy trained staff within 24 to 48 hours of confirming requirements, subject to the scale of manpower needed.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.1s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you serve industrial units in the Ghaziabad industrial belt?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-4 sm:pb-5 text-gray-500 text-base leading-relaxed">Yes. We regularly deploy shift-based security and support staff for factories and warehouses in Sahibabad and the surrounding industrial areas.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.15s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Is the free site assessment really free?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-4 sm:pb-5 text-gray-500 text-base leading-relaxed">Yes, there's no cost or obligation. Our supervisor visits your Ghaziabad site, assesses your requirements, and shares a tailored recommendation and quote.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.2s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can you provide staff for residential societies in Indirapuram and Vaishali?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-4 sm:pb-5 text-gray-500 text-base leading-relaxed">Yes. We deploy gate security, patrol staff, and housekeeping teams for residential societies and RWAs across Indirapuram, Vaishali, and nearby localities.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.25s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Will a supervisor regularly visit our Ghaziabad site after deployment?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-4 sm:pb-5 text-gray-500 text-base leading-relaxed">Yes. Every deployment in Ghaziabad includes periodic supervisor checks and reporting so staffing and duty discipline stay consistent.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     8. FINAL CTA — YELLOW
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-brand-yellow">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center fade-up">
    <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight sm:leading-none mb-4">
      Need Security or Facility<br class="hidden sm:block"/>Staff in Ghaziabad?
    </h2>
    <p class="text-brand-dark/70 text-sm sm:text-lg mb-7 sm:mb-8 max-w-lg mx-auto">
      Talk to our Ghaziabad operations team today — get verified manpower deployed fast, backed by a free site assessment.
    </p>
    <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4">
      <a href="tel:<?php echo $city_phone; ?>" class="w-full sm:w-auto justify-center flex items-center gap-2 bg-brand-dark hover:bg-gray-800 text-white font-bold px-8 py-3.5 rounded capitalize tracking-wider text-base transition-colors shadow-lg">
        <i class="fa fa-phone"></i> <?php echo $city_phone_display; ?>
      </a>
      <a href="../contact" class="w-full sm:w-auto text-center border-2 border-brand-dark/50 text-brand-dark hover:border-brand-dark font-bold px-8 py-3.5 rounded capitalize tracking-wider text-base transition-colors">Request Quote</a>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>