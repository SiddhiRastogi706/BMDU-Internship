<?php
$page_title       = "Security Guard & Facility Management Services in Manesar | Conquer Services";
$page_description = "Trained, verified security guards, facility staff and fire safety personnel in Manesar — IMT Manesar, industrial estates, automobile ancillary units, warehouses & factories. Quick deployment, 24/7 support.";
$active_page      = "locations";
$base_path        = "../";
include '../includes/header.php';
?>

<style>
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
  .service-card { transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s; }
  .service-card:hover { transform: translateY(-6px); box-shadow: 0 24px 48px rgba(0,0,0,0.10); border-color: #F2CF4A; }
  .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
  .no-scrollbar::-webkit-scrollbar { display: none; }
</style>

<!-- JSON-LD: Local Service schema for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Security Guard & Facility Management Services",
  "provider": {
    "@type": "LocalBusiness",
    "name": "Conquer Services",
    "telephone": "+91-94306-95171",
    "areaServed": "Manesar, Gurgaon, Haryana"
  },
  "areaServed": {
    "@type": "Place",
    "name": "Manesar"
  },
  "description": "Security guards, facility staff, fire safety personnel and industrial manpower services in Manesar, IMT Manesar and the surrounding industrial belt."
}
</script>

<!-- ══════════════════════════════════════════
     1. HERO SECTION
═══════════════════════════════════════════ -->
<section class="relative min-h-[20rem] sm:h-80 md:h-96 lg:h-[26rem] overflow-hidden bg-brand-dark py-10 sm:py-0">
  <div class="absolute inset-0">
    <img src="<?php echo $base_path; ?>assets/images/banner/city-banner.png" alt="Security guard services in Manesar" class="w-full h-full object-cover object-[center_30%]" />
  </div>
  <div class="page-hero-overlay absolute inset-0"></div>
  <div class="relative z-10 h-full flex flex-col justify-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">

 

      <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Delhi NCR — Manesar Industrial Belt</p>
      <h1 class="font-display font-black capitalize leading-tight sm:leading-none text-white mb-4 break-words">
        <span class="text-2xl sm:text-4xl md:text-5xl block">Security Guard & Facility</span>
        <span class="text-2xl sm:text-4xl md:text-5xl text-brand-yellow block">Management Services</span>
        <span class="text-base sm:text-xl md:text-3xl text-white/80 block mt-2">in Manesar</span>
      </h1>
      <p class="text-white/70 text-sm sm:text-lg max-w-xl leading-relaxed">
        Trained and verified security guards, fire safety officers, and facility staff deployed across IMT Manesar, automobile ancillary units, warehouses, and factories along the Manesar-Gurgaon industrial corridor.
      </p>
      <div class="flex flex-wrap gap-3 mt-6">
        <a href="<?php echo $base_path; ?>contact" class="bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold px-6 py-3 rounded capitalize tracking-wider text-base transition-colors">Get Free Quote</a>
        <a href="tel:+919430695171" class="flex items-center gap-2 border-2 border-white/40 text-white hover:border-brand-yellow hover:text-brand-yellow font-bold px-6 py-3 rounded capitalize tracking-wider text-base transition-colors"><i class="fa fa-phone"></i> Call Now</a>
      </div>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-brand-yellow"></div>
</section>

<!-- TRUST STRIP -->
<div class="bg-brand-yellow py-4">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid grid-cols-2 sm:flex sm:flex-wrap justify-items-center sm:justify-center gap-x-4 sm:gap-x-10 gap-y-3 sm:gap-y-2 text-brand-dark text-[10px] sm:text-sm font-bold capitalize tracking-wider">
      <span class="flex items-center justify-center sm:justify-start gap-1.5 text-center"><i class="fa fa-check-circle"></i> Verified Manpower</span>
      <span class="flex items-center justify-center sm:justify-start gap-1.5 text-center"><i class="fa fa-check-circle"></i> Industrial Security Experts</span>
      <span class="flex items-center justify-center sm:justify-start gap-1.5 text-center"><i class="fa fa-check-circle"></i> Quick Deployment</span>
      <span class="flex items-center justify-center sm:justify-start gap-1.5 text-center"><i class="fa fa-check-circle"></i> 24/7 Supervision</span>
      <span class="flex items-center justify-center sm:justify-start gap-1.5 text-center"><i class="fa fa-check-circle"></i> Haryana Compliant</span>
    </div>
  </div>
</div>


<!-- ══════════════════════════════════════════
     2. LOCAL SERVICE OVERVIEW
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-white" id="services-in-manesar">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10 sm:mb-12 fade-up">
      <div>
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">01 — What We Offer</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight sm:leading-none mb-1">Our Services<br/><span style="color:#C9A91E;">in Manesar</span></h2>
        <div class="y-divider-center mt-4"></div>
      </div>
    </div>

    <p class="text-gray-500 text-lg leading-relaxed max-w-3xl mb-10 fade-up">
      Conquer Services runs a dedicated industrial deployment team for the Manesar belt, covering IMT Manesar factories, automobile ancillary units, warehouses, and logistics parks. Every guard and staff member is background-checked, uniformed, briefed on site-specific shift SOPs, and monitored by a local supervisor.
    </p>

    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
      <a href="<?php echo $base_path; ?>security-guards-services" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 group fade-up">
        <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 group-hover:bg-brand-yellow transition-colors"><i class="fa fa-shield-alt text-brand-dark text-base"></i></div>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize leading-tight mb-1.5">Security Guards</h3>
        <p class="text-gray-500 text-[16px] leading-relaxed">Factory gate & perimeter guards.</p>
      </a>
      <a href="<?php echo $base_path; ?>facility-management/housekeeping" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 group fade-up" style="animation-delay:0.05s">
        <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 group-hover:bg-brand-yellow transition-colors"><i class="fa fa-broom text-brand-dark text-base"></i></div>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize leading-tight mb-1.5">Housekeeping</h3>
        <p class="text-gray-500 text-[16px] leading-relaxed">Plant & office housekeeping.</p>
      </a>
      <a href="<?php echo $base_path; ?>facility-management" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 group fade-up" style="animation-delay:0.1s">
        <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 group-hover:bg-brand-yellow transition-colors"><i class="fa fa-users text-brand-dark text-base"></i></div>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize leading-tight mb-1.5">Facility Staff</h3>
        <p class="text-gray-500 text-[16px] leading-relaxed">Helpers, loaders & support staff.</p>
      </a>
      <a href="<?php echo $base_path; ?>facility-management/bouncers" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 group fade-up" style="animation-delay:0.15s">
        <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 group-hover:bg-brand-yellow transition-colors"><i class="fa fa-user-shield text-brand-dark text-base"></i></div>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize leading-tight mb-1.5">Bouncers</h3>
        <p class="text-gray-500 text-[16px] leading-relaxed">Site access & crowd control.</p>
      </a>
      <a href="<?php echo $base_path; ?>facility-management/drivers" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 group fade-up">
        <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 group-hover:bg-brand-yellow transition-colors"><i class="fa fa-car text-brand-dark text-base"></i></div>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize leading-tight mb-1.5">Drivers</h3>
        <p class="text-gray-500 text-[16px] leading-relaxed">Plant & material transport drivers.</p>
      </a>
      <a href="<?php echo $base_path; ?>facility-management/fire-safety" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 group fade-up" style="animation-delay:0.05s">
        <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 group-hover:bg-brand-yellow transition-colors"><i class="fa fa-fire-extinguisher text-brand-dark text-base"></i></div>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize leading-tight mb-1.5">Fire Safety Personnel</h3>
        <p class="text-gray-500 text-[16px] leading-relaxed">Factory fire watch & equipment checks.</p>
      </a>
      <a href="<?php echo $base_path; ?>technology-support" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 group fade-up" style="animation-delay:0.1s">
        <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 group-hover:bg-brand-yellow transition-colors"><i class="fa fa-video text-brand-dark text-base"></i></div>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize leading-tight mb-1.5">CCTV & Support</h3>
        <p class="text-gray-500 text-[16px] leading-relaxed">Plant monitoring & access control.</p>
      </a>
      <a href="<?php echo $base_path; ?>manpower-services" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 group fade-up" style="animation-delay:0.15s">
        <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 group-hover:bg-brand-yellow transition-colors"><i class="fa fa-people-carry text-brand-dark text-base"></i></div>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize leading-tight mb-1.5">Manpower Supply</h3>
        <p class="text-gray-500 text-[16px] leading-relaxed">Contract & industrial staffing.</p>
      </a>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     3. INDUSTRIES SERVED IN MANESAR
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-gray-50" id="industries-manesar">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10 sm:mb-12 fade-up">
      <div>
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">02 — Local Demand</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight sm:leading-none mb-1">Industries We Serve<br/><span style="color:#C9A91E;">in Manesar</span></h2>
        <div class="y-divider-center mt-4"></div>
      </div>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">

      <div class="group relative rounded-xl overflow-hidden aspect-square fade-up bg-brand-dark">
        <img src="<?php echo $base_path; ?>assets/images/industry1.png" alt="IMT Manesar factories" class="w-full h-full object-cover opacity-70 group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-3 sm:p-4">
          <i class="fa fa-industry text-brand-yellow text-lg sm:text-xl mb-1.5"></i>
          <h3 class="font-display font-bold text-white text-xs sm:text-base capitalize leading-tight">IMT Manesar Factories</h3>
        </div>
      </div>

      <div class="group relative rounded-xl overflow-hidden aspect-square fade-up bg-brand-dark" style="animation-delay:0.05s">
        <img src="<?php echo $base_path; ?>assets/images/industry7.png" alt="Warehouses and logistics parks Manesar" class="w-full h-full object-cover opacity-70 group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-3 sm:p-4">
          <i class="fa fa-warehouse text-brand-yellow text-lg sm:text-xl mb-1.5"></i>
          <h3 class="font-display font-bold text-white text-xs sm:text-base capitalize leading-tight">Warehouses & Logistics Parks</h3>
        </div>
      </div>

      <div class="group relative rounded-xl overflow-hidden aspect-square fade-up bg-brand-dark" style="animation-delay:0.1s">
        <img src="<?php echo $base_path; ?>assets/images/industry1.png" alt="Automobile ancillary units Manesar" class="w-full h-full object-cover opacity-70 group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-3 sm:p-4">
          <i class="fa fa-cogs text-brand-yellow text-lg sm:text-xl mb-1.5"></i>
          <h3 class="font-display font-bold text-white text-xs sm:text-base capitalize leading-tight">Automobile Ancillary Units</h3>
        </div>
      </div>

      <div class="group relative rounded-xl overflow-hidden aspect-square fade-up bg-brand-dark" style="animation-delay:0.15s">
        <img src="<?php echo $base_path; ?>assets/images/industry8.png" alt="Construction sites Manesar" class="w-full h-full object-cover opacity-70 group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-3 sm:p-4">
          <i class="fa fa-hard-hat text-brand-yellow text-lg sm:text-xl mb-1.5"></i>
          <h3 class="font-display font-bold text-white text-xs sm:text-base capitalize leading-tight">Construction Sites</h3>
        </div>
      </div>

      <div class="group relative rounded-xl overflow-hidden aspect-square fade-up bg-brand-dark">
        <img src="<?php echo $base_path; ?>assets/images/industry2.png" alt="Corporate & admin offices Manesar" class="w-full h-full object-cover opacity-70 group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-3 sm:p-4">
          <i class="fa fa-building text-brand-yellow text-lg sm:text-xl mb-1.5"></i>
          <h3 class="font-display font-bold text-white text-xs sm:text-base capitalize leading-tight">Corporate & Admin Offices</h3>
        </div>
      </div>

      <div class="group relative rounded-xl overflow-hidden aspect-square fade-up bg-brand-dark" style="animation-delay:0.05s">
        <img src="<?php echo $base_path; ?>assets/images/industry3.png" alt="Residential and labour colonies Manesar" class="w-full h-full object-cover opacity-70 group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-3 sm:p-4">
          <i class="fa fa-home text-brand-yellow text-lg sm:text-xl mb-1.5"></i>
          <h3 class="font-display font-bold text-white text-xs sm:text-base capitalize leading-tight">Residential & Staff Colonies</h3>
        </div>
      </div>

      <div class="group relative rounded-xl overflow-hidden aspect-square fade-up bg-brand-dark" style="animation-delay:0.1s">
        <img src="<?php echo $base_path; ?>assets/images/industry5.png" alt="Hospitals near Manesar" class="w-full h-full object-cover opacity-70 group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-3 sm:p-4">
          <i class="fa fa-hospital text-brand-yellow text-lg sm:text-xl mb-1.5"></i>
          <h3 class="font-display font-bold text-white text-xs sm:text-base capitalize leading-tight">Hospitals</h3>
        </div>
      </div>

      <div class="group relative rounded-xl overflow-hidden aspect-square fade-up bg-brand-dark" style="animation-delay:0.15s">
        <img src="<?php echo $base_path; ?>assets/images/industry6.png" alt="Schools near Manesar" class="w-full h-full object-cover opacity-70 group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-3 sm:p-4">
          <i class="fa fa-graduation-cap text-brand-yellow text-lg sm:text-xl mb-1.5"></i>
          <h3 class="font-display font-bold text-white text-xs sm:text-base capitalize leading-tight">Schools & Colleges</h3>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     4. POPULAR SERVICES IN MANESAR (cross-links)
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-white" id="popular-services">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10 sm:mb-12 fade-up">
      <div>
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">03 — Explore Further</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight sm:leading-none mb-1">Popular Services<br/><span style="color:#C9A91E;">in Manesar</span></h2>
        <div class="y-divider-center mt-4"></div>
      </div>
      <a href="<?php echo $base_path; ?>services" class="self-start sm:self-auto inline-flex items-center gap-2 border-2 border-brand-dark text-brand-dark hover:bg-brand-dark hover:text-white font-bold px-5 py-2.5 rounded capitalize tracking-wider text-base transition-colors flex-shrink-0">
        View All Services <i class="fa fa-arrow-right text-xs"></i>
      </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <div class="service-card bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up">
        <i class="fa fa-shield-alt text-brand-dark text-2xl mb-4 block"></i>
        <h3 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Security Guard Services</h3>
        <p class="text-gray-500 text-base leading-relaxed mb-4">Gate, perimeter and night-shift guards for factories and warehouses in Manesar.</p>
        <a href="<?php echo $base_path; ?>security-guards-services" class="text-brand-dark text-sm font-bold capitalize flex items-center gap-1">Know More <i class="fa fa-arrow-right text-[9px]"></i></a>
      </div>
      <div class="service-card bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.07s">
        <i class="fa fa-broom text-brand-dark text-2xl mb-4 block"></i>
        <h3 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Facility Management</h3>
        <p class="text-gray-500 text-base leading-relaxed mb-4">Housekeeping, helpers and admin support staff for plants and offices.</p>
        <a href="<?php echo $base_path; ?>facility-management" class="text-brand-dark text-sm font-bold capitalize flex items-center gap-1">Know More <i class="fa fa-arrow-right text-[9px]"></i></a>
      </div>
      <div class="service-card bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.14s">
        <i class="fa fa-users text-brand-dark text-2xl mb-4 block"></i>
        <h3 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Manpower Services</h3>
        <p class="text-gray-500 text-base leading-relaxed mb-4">Contract and skilled industrial labour with PF/ESI compliance.</p>
        <a href="<?php echo $base_path; ?>manpower-services" class="text-brand-dark text-sm font-bold capitalize flex items-center gap-1">Know More <i class="fa fa-arrow-right text-[9px]"></i></a>
      </div>
      <div class="service-card bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.21s">
        <i class="fa fa-video text-brand-dark text-2xl mb-4 block"></i>
        <h3 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Technology & Support</h3>
        <p class="text-gray-500 text-base leading-relaxed mb-4">CCTV monitoring, access control and 24/7 control room support for plants.</p>
        <a href="<?php echo $base_path; ?>technology-support" class="text-brand-dark text-sm font-bold capitalize flex items-center gap-1">Know More <i class="fa fa-arrow-right text-[9px]"></i></a>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     5. WHY CHOOSE US IN MANESAR (DARK)
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-brand-dark">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-12 sm:mb-14 fade-up">
      <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">04 — The Conquer Advantage</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-white mb-4">Why Choose Us<br/><span class="text-brand-yellow">in Manesar</span></h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-400 text-lg max-w-xl mx-auto leading-relaxed">Industrial security expertise, a ready manpower pool, and local supervisor visits — so your plant is never left uncovered on any shift.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
      <div class="bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl p-5 fade-up text-center transition-colors">
        <div class="w-12 h-12 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3"><i class="fa fa-map-marker-alt text-brand-yellow text-lg"></i></div>
        <h4 class="font-display font-bold text-white capitalize text-lg mb-2">Local Deployment Support</h4>
        <p class="text-gray-400 text-base leading-relaxed">On-ground team stationed across the Manesar industrial belt.</p>
      </div>
      <div class="bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl p-5 fade-up text-center transition-colors" style="animation-delay:0.07s">
        <div class="w-12 h-12 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3"><i class="fa fa-bolt text-brand-yellow text-lg"></i></div>
        <h4 class="font-display font-bold text-white capitalize text-lg mb-2">Quick Staff Availability</h4>
        <p class="text-gray-400 text-base leading-relaxed">Ready pool of verified guards for rapid factory & warehouse mobilisation.</p>
      </div>
      <div class="bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl p-5 fade-up text-center transition-colors" style="animation-delay:0.14s">
        <div class="w-12 h-12 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3"><i class="fa fa-user-check text-brand-yellow text-lg"></i></div>
        <h4 class="font-display font-bold text-white capitalize text-lg mb-2">Supervisor Visits</h4>
        <p class="text-gray-400 text-base leading-relaxed">Regular on-site supervisor rounds across all shifts, including night shift.</p>
      </div>
      <div class="bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl p-5 fade-up text-center transition-colors" style="animation-delay:0.21s">
        <div class="w-12 h-12 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3"><i class="fa fa-headset text-brand-yellow text-lg"></i></div>
        <h4 class="font-display font-bold text-white capitalize text-lg mb-2">Delhi NCR Ops Team</h4>
        <p class="text-gray-400 text-base leading-relaxed">Backed by a centralised Delhi NCR operations and control room.</p>
      </div>
      <div class="bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl p-5 fade-up text-center transition-colors">
        <div class="w-12 h-12 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3"><i class="fa fa-certificate text-brand-yellow text-lg"></i></div>
        <h4 class="font-display font-bold text-white capitalize text-lg mb-2">Verified Manpower</h4>
        <p class="text-gray-400 text-base leading-relaxed">Background-checked, document-verified staff for every deployment.</p>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     6. LEAD MAGNET — FREE SITE ASSESSMENT
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 relative overflow-hidden">
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.95) 0%, rgba(10,10,10,0.85) 100%), url('../assets/images/service2.png') center/cover no-repeat;"></div>
  <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-10 sm:gap-12 items-center">
      <div class="fade-up">
        <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Free Assessment</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-white leading-tight sm:leading-none mb-4">
          Free Site Security<br/><span class="text-brand-yellow">Assessment in Manesar</span>
        </h2>
        <p class="text-white/70 text-lg leading-relaxed mb-5">Our Manesar team will visit your plant or site, review current gaps, and recommend the right combination of guards, facility staff, and fire safety support — at no cost.</p>
        <ul class="space-y-2.5">
          <li class="flex items-center gap-2 text-white/80 text-lg"><i class="fa fa-check text-brand-yellow text-xs"></i> Factory & warehouse guard post planning</li>
          <li class="flex items-center gap-2 text-white/80 text-lg"><i class="fa fa-check text-brand-yellow text-xs"></i> Facility & fire safety staff estimation</li>
          <li class="flex items-center gap-2 text-white/80 text-lg"><i class="fa fa-check text-brand-yellow text-xs"></i> Technology support recommendation</li>
          <li class="flex items-center gap-2 text-white/80 text-lg"><i class="fa fa-check text-brand-yellow text-xs"></i> 100% free, no obligation</li>
        </ul>
      </div>
      <div class="bg-white rounded-2xl p-6 sm:p-8 fade-up mt-6 lg:mt-0" style="animation-delay:0.1s">
        <h3 class="font-display font-bold text-brand-dark capitalize text-lg mb-6">Book Free Site Visit</h3>
        <form action="<?php echo $base_path; ?>includes/contact.php" method="POST" class="space-y-4">
          <input type="hidden" name="form_type" value="location_manesar_site_visit" />
          <input type="hidden" name="location" value="Manesar" />
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Name *</label>
            <input type="text" name="name" required placeholder="Your full name" class="input-field" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Phone *</label>
            <input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX" class="input-field" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Area in Manesar</label>
            <select name="area" class="input-field">
              <option value="">Select an area</option>
              <option>IMT Manesar</option>
              <option>Sector 1-8 Industrial Estate</option>
              <option>Dharuhera Road Belt</option>
              <option>Kasan / Bilaspur</option>
              <option>NH-48 Manesar Stretch</option>
              <option>Other Manesar Area</option>
            </select>
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Service Required</label>
            <select name="service" class="input-field">
              <option value="">Select a service</option>
              <option>Security Guards</option>
              <option>Facility Management</option>
              <option>Manpower Services</option>
              <option>Fire Safety Personnel</option>
              <option>Technology & Support</option>
              <option>Multiple Services</option>
            </select>
          </div>
          <button type="submit" class="w-full bg-brand-dark hover:bg-gray-800 text-white font-bold py-3.5 rounded-lg capitalize tracking-wider text-sm transition-colors flex items-center justify-center gap-2">
            <i class="fa fa-clipboard-check text-xs"></i> Book Free Site Visit
          </button>
        </form>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     7. FAQs — MANESAR SPECIFIC
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-gray-50">
  <div class="max-w-3xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2">Common Questions</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-1">Manesar FAQs</h2>
      <div class="y-divider-center mx-auto mt-4"></div>
    </div>
    <div class="space-y-3">

      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden fade-up">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you provide security guards for factories in IMT Manesar?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. We deploy trained gate, perimeter, and patrolling guards across IMT Manesar factories and automobile ancillary units, with a dedicated local supervisor for each site.</p>
        </div>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.05s">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can you cover night-shift patrolling for industrial units?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. Manesar factories and warehouses often run multi-shift operations, so we plan round-the-clock guard rosters including dedicated night-shift patrolling and a Quick Response Team on standby.</p>
        </div>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.1s">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you provide fire safety personnel for industrial compliance?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. We supply trained fire safety officers for fire watch duties, equipment checks, and emergency evacuation support at factories and warehouses across the Manesar belt.</p>
        </div>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.15s">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Is your industrial manpower compliant with Haryana labour laws?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. All guards and industrial manpower supplied in Manesar are covered under PF, ESI, and applicable Haryana state labour law compliance, with GST-billed contracts.</p>
        </div>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.2s">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you supply loaders and helpers for warehouses in Manesar?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. Beyond security, we supply loaders, helpers, and skilled/semi-skilled labour for warehouses and logistics parks, with quick replacement support in case of absenteeism.</p>
        </div>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.25s">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">How quickly can you deploy staff for a new plant in Manesar?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">We maintain a ready pool of verified industrial guards and staff for the Manesar belt. Deployment typically begins within 24–72 hours of agreement confirmation, depending on headcount and role type.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     8. FINAL CTA — YELLOW
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-brand-yellow">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center fade-up">
    <h2 class="font-display font-black capitalize text-2xl sm:text-2xl md:text-3xl lg:text-4xl text-brand-dark leading-tight sm:leading-none mb-4">
      Need Security or Facility<br/>Staff in Manesar?
    </h2>
    <p class="text-brand-dark/70 text-sm sm:text-lg mb-8 max-w-lg mx-auto">
      Talk to our Manesar team today. We'll recommend the right combination of services, estimate your staffing requirement, and deploy within your timeline — all at no obligation.
    </p>
    <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-3 sm:gap-4">
      <a href="tel:+919430695171" class="flex items-center justify-center gap-2 bg-brand-dark hover:bg-gray-800 text-white font-bold px-7 sm:px-8 py-3.5 rounded capitalize tracking-wider text-base transition-colors shadow-lg">
        <i class="fa fa-phone"></i> Call Now
      </a>
      <a href="<?php echo $base_path; ?>contact" class="border-2 border-brand-dark text-brand-dark hover:bg-brand-dark hover:text-white font-bold px-7 sm:px-8 py-3.5 rounded capitalize tracking-wider text-base transition-colors">
        Request Quote
      </a>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>