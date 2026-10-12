<?php
$page_title       = "Garden & Maintenance Staff Services in Delhi NCR | Conquer Services";
$page_description = "Hire trained gardeners, landscaping staff, and property maintenance workers for offices, residential societies, hospitals, hotels, commercial spaces, and industrial sites across Delhi NCR.";
$active_page      = "services";
$base_path        = "../";
include '../includes/header.php';
?>

<style>
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
  .service-card { transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s; }
  .service-card:hover { transform: translateY(-6px); box-shadow: 0 24px 48px rgba(0,0,0,0.10); border-color: #F2CF4A; }
  @media (max-width: 640px) {
    .service-card:hover { transform: none; }
  }
</style>

<!-- ══════════════════════════════════════════
     1. HERO SECTION
═══════════════════════════════════════════ -->
<section class="relative h-[88vh] sm:h-[75vh] lg:h-[70vh] min-h-[560px] sm:min-h-[500px] lg:min-h-[480px] overflow-hidden bg-brand-dark">
  <div class="absolute inset-0">
    <img src="../assets/images/banner/garden-banner.png" alt="Garden and maintenance staff Delhi NCR" class="w-full h-full object-cover object-[center_40%]" />
  </div>
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.90) 0%, rgba(10,10,10,0.52) 100%);"></div>
  <div class="absolute inset-0 bg-gradient-to-r from-brand-dark via-brand-dark/65 to-transparent"></div>

  <div class="relative z-10 h-full flex items-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
      <div class="max-w-2xl">

        <p class="text-brand-yellow font-display font-semibold text-xs sm:text-base capitalize tracking-widest mb-3 sm:mb-4 fade-up">Facility Management Services</p>
        <h1 class="font-display font-black capitalize leading-tight sm:leading-none mb-5 sm:mb-6 fade-up" style="animation-delay:0.1s">
          <span class="text-2xl sm:text-4xl md:text-5xl text-white font-bold block">Garden &</span>
          <span class="text-2xl sm:text-4xl md:text-5xl text-brand-yellow font-bold block">Maintenance Staff</span>
          <span class="text-lg sm:text-2xl md:text-3xl text-white/80 font-bold block mt-1 sm:mt-2">in Delhi NCR</span>
        </h1>
        <p class="text-white/70 text-sm sm:text-base md:text-lg leading-relaxed mb-7 sm:mb-8 fade-up max-w-xl" style="animation-delay:0.2s">
          Trained gardeners, landscaping workers, and property maintenance staff for offices, residential societies, hospitals, hotels, and commercial spaces — keeping your outdoor spaces clean, green, and well-maintained year-round.
        </p>
        <div class="flex flex-col sm:flex-row flex-wrap gap-3 fade-up" style="animation-delay:0.3s">
          <a href="../contact" class="bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold px-7 py-3.5 rounded capitalize tracking-wider text-base transition-colors shadow-lg text-center">
            Request Garden Staff
          </a>
          <a href="tel:+919430695171" class="flex items-center justify-center gap-2 border border-brand-yellow text-brand-yellow hover:bg-brand-yellow hover:text-brand-dark font-semibold px-7 py-3.5 rounded capitalize tracking-wider text-base transition-colors text-center">
            <i class="fa fa-phone"></i> Call Now
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     INTRO — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid md:grid-cols-2 gap-10 md:gap-12 lg:gap-14 items-center">
      <div class="fade-up">
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Property Upkeep Professionals</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight sm:leading-none mb-4">
          Well-Maintained Spaces<br/><span style="color:#C9A91E;">Start with the Right Staff</span>
        </h2>
        <div class="y-divider-center mb-6"></div>
        <p class="text-gray-500 text-lg leading-relaxed mb-4">
          A well-kept garden, clean outdoor area, and properly maintained property speaks directly about your organisation's standards. Whether it's a corporate campus, a residential society, a hospital, or a hotel — the appearance of your outdoor spaces leaves a lasting impression on everyone who visits.
        </p>
        <p class="text-gray-500 text-lg leading-relaxed mb-8">
          We provide trained gardeners, landscaping staff, and general property maintenance workers who keep your outdoor and common areas consistently maintained — briefed on your specific property layout, seasonal requirements, and upkeep schedule before they begin work.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-8">
          <div class="flex items-center gap-2 text-base text-gray-600"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> ID & address verified</div>
          <div class="flex items-center gap-2 text-base text-gray-600"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> Property-briefed before duty</div>
          <div class="flex items-center gap-2 text-base text-gray-600"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> Skilled gardeners & workers</div>
          <div class="flex items-center gap-2 text-base text-gray-600"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> Daily & contract options</div>
          <div class="flex items-center gap-2 text-base text-gray-600"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> Supervisor monitored</div>
          <div class="flex items-center gap-2 text-base text-gray-600"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> Quick replacement support</div>
        </div>
        <div class="flex flex-col sm:flex-row flex-wrap gap-3">
          <a href="../contact" class="bg-brand-dark hover:bg-gray-800 text-white font-bold px-7 py-3 rounded capitalize tracking-wider text-base transition-colors text-center">Request Staff</a>
          <a href="../facility-management" class="border-2 border-brand-dark text-brand-dark hover:bg-brand-dark hover:text-white font-semibold px-7 py-3 rounded capitalize tracking-wider text-base transition-colors text-center">All Facility Services</a>
        </div>
      </div>
      <div class="relative fade-up mt-10 md:mt-0" style="animation-delay:0.1s">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="../assets/images/facility6.png" alt="Gardener maintaining property" class="w-full h-full object-cover" />
        </div>
        <div class="absolute -bottom-4 -right-3 sm:-bottom-5 sm:-right-5 bg-brand-yellow rounded-2xl p-4 sm:p-5 shadow-xl text-center">
          <div class="font-display font-black text-lg sm:text-xl text-brand-dark leading-none">Year</div>
          <div class="text-brand-dark font-bold text-[10px] sm:text-xs capitalize tracking-wider mt-1">Round Care</div>
        </div>
        <div class="absolute -top-4 -left-3 sm:-top-5 sm:-left-5 bg-white border border-gray-200 rounded-xl p-3 sm:p-4 shadow-xl">
          <div class="flex items-center gap-2 sm:gap-3">
            <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-brand-yellow/20 flex items-center justify-center flex-shrink-0">
              <i class="fa fa-leaf text-brand-dark text-xs sm:text-sm"></i>
            </div>
            <div>
              <div class="font-display font-black text-brand-dark text-sm sm:text-base leading-none">Verified</div>
              <div class="text-gray-500 text-[10px] sm:text-xs mt-0.5">Trained Staff</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     2. FACILITY SERVICE CARDS — light gray
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 md:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Our Facility Services</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-4">Explore Our Complete<br/><span style="color:#C9A91E;">Facility Manpower Range</span></h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 text-lg max-w-xl mx-auto leading-relaxed">We provide trained, verified, and groomed facility staff across all support roles — covering every function your property or business needs.</p>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3 sm:gap-4">

      <a href="housekeeping" class="service-card bg-white border border-gray-200 rounded-xl p-4 sm:p-5 text-center group fade-up">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-broom text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1">Housekeeping Services</h4>
        <p class="text-gray-500 text-[16px] leading-relaxed hidden sm:block">Daily & deep cleaning for all sites</p>
        <div class="mt-2 text-brand-dark text-[12px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

      <a href="office-boy" class="service-card bg-white border border-gray-200 rounded-xl p-4 sm:p-5 text-center group fade-up" style="animation-delay:0.04s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-mug-hot text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1">Office Boy & Pantry Staff</h4>
        <p class="text-gray-500 text-[16px] leading-relaxed hidden sm:block">Tea service & daily office support</p>
        <div class="mt-2 text-brand-dark text-[12px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

      <a href="receptionist" class="service-card bg-white border border-gray-200 rounded-xl p-4 sm:p-5 text-center group fade-up" style="animation-delay:0.08s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-concierge-bell text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1">Receptionist & Front Desk</h4>
        <p class="text-gray-500 text-[16px] leading-relaxed hidden sm:block">Visitor handling & call management</p>
        <div class="mt-2 text-brand-dark text-[12px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

      <a href="bouncers" class="service-card bg-white border border-gray-200 rounded-xl p-4 sm:p-5 text-center group fade-up" style="animation-delay:0.12s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-user-shield text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1">Bouncers</h4>
        <p class="text-gray-500 text-[16px] leading-relaxed hidden sm:block">Events, clubs & high-footfall venues</p>
        <div class="mt-2 text-brand-dark text-[12px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

      <a href="drivers" class="service-card bg-white border border-gray-200 rounded-xl p-4 sm:p-5 text-center group fade-up">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-car text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1">Drivers & Chauffeurs</h4>
        <p class="text-gray-500 text-[16px] leading-relaxed hidden sm:block">Verified, licensed drivers</p>
        <div class="mt-2 text-brand-dark text-[12px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

      <a href="helpers" class="service-card bg-white border border-gray-200 rounded-xl p-4 sm:p-5 text-center group fade-up" style="animation-delay:0.04s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-people-carry text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1">Helpers & Labour Supply</h4>
        <p class="text-gray-500 text-[16px] leading-relaxed hidden sm:block">General helpers & site support</p>
        <div class="mt-2 text-brand-dark text-[12px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

      <!-- Current page — highlighted -->
      <a href="garden-maintenance" class="service-card bg-brand-dark border border-brand-dark rounded-xl p-4 sm:p-5 text-center group fade-up" style="animation-delay:0.08s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/30 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-leaf text-brand-yellow group-hover:text-brand-dark text-base sm:text-lg transition-colors"></i>
        </div>
        <h4 class="font-display font-bold text-brand-yellow text-lg capitalize leading-tight mb-1">Garden & Maintenance ✓</h4>
        <p class="text-gray-400 text-[16px] leading-relaxed hidden sm:block">Currently viewing this service</p>
        <div class="mt-2 text-brand-yellow text-[12px] font-bold flex items-center justify-center gap-1">Current Page</div>
      </a>

      <a href="fire-safety" class="service-card bg-white border border-gray-200 rounded-xl p-4 sm:p-5 text-center group fade-up" style="animation-delay:0.12s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-fire-extinguisher text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1">Fire & Safety Personnel</h4>
        <p class="text-gray-500 text-[16px] leading-relaxed hidden sm:block">Trained fire safety officers</p>
        <div class="mt-2 text-brand-dark text-[12px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     WHAT GARDEN STAFF HANDLE — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 md:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Scope of Work</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-4">What Our Garden &<br/><span style="color:#C9A91E;">Maintenance Staff Handle</span></h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-cut text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Lawn Mowing & Trimming</h4>
        <p class="text-gray-500 text-base leading-relaxed">Regular mowing, edging, and trimming of lawns and grass areas to maintain a neat, well-kept appearance throughout the year.</p>
      </div>

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-seedling text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Plant Care & Watering</h4>
        <p class="text-gray-500 text-base leading-relaxed">Daily watering, fertilising, pruning, and seasonal care for all garden plants, potted plants, flower beds, and indoor planters.</p>
      </div>

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-tree text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Tree Trimming & Shaping</h4>
        <p class="text-gray-500 text-base leading-relaxed">Trimming and shaping trees, hedges, and shrubs to maintain the property's aesthetic and prevent overgrowth near structures.</p>
      </div>

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-wind text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Leaf & Debris Clearing</h4>
        <p class="text-gray-500 text-base leading-relaxed">Regular clearing of fallen leaves, garden debris, and waste from lawns, pathways, and outdoor common areas.</p>
      </div>

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-spray-can text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Pest Control Support</h4>
        <p class="text-gray-500 text-base leading-relaxed">Basic pest and weed management in garden areas, flower beds, and around the property perimeter to protect plants and outdoor spaces.</p>
      </div>

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-tools text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Minor Property Maintenance</h4>
        <p class="text-gray-500 text-base leading-relaxed">Basic repairs, paint touch-ups, fixture tightening, and general upkeep of outdoor fittings, pathways, and common area infrastructure.</p>
      </div>

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-broom text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Outdoor Area Cleaning</h4>
        <p class="text-gray-500 text-base leading-relaxed">Sweeping, washing, and maintaining driveways, parking areas, pathways, terraces, and outdoor common areas of the property.</p>
      </div>

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-water text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Water Feature Maintenance</h4>
        <p class="text-gray-500 text-base leading-relaxed">Cleaning and upkeep of water features, fountains, and decorative ponds found in hotel gardens, society premises, and corporate campuses.</p>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     3. WHERE WE PROVIDE — DARK
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-brand-dark">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid md:grid-cols-2 gap-10 md:gap-12 lg:gap-14 items-center">
      <div class="fade-up">
        <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Deployment Sites</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-white leading-tight sm:leading-none mb-4">
          Where We Provide<br/><span class="text-brand-yellow">Garden & Maintenance Staff</span>
        </h2>
        <div class="y-divider-center mb-6"></div>
        <p class="text-gray-400 text-lg leading-relaxed mb-8">
          Our garden and maintenance staff are deployed across all major property types in Delhi NCR — each briefed on your specific outdoor layout, seasonal schedule, and maintenance expectations before they begin work.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up">
            <i class="fa fa-building text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Corporate Offices & Campuses</span>
          </div>
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up" style="animation-delay:0.04s">
            <i class="fa fa-home text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Residential Societies</span>
          </div>
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up" style="animation-delay:0.08s">
            <i class="fa fa-hotel text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Hotels & Resorts</span>
          </div>
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up" style="animation-delay:0.12s">
            <i class="fa fa-hospital text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Hospitals & Healthcare Facilities</span>
          </div>
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up">
            <i class="fa fa-graduation-cap text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Schools & Colleges</span>
          </div>
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up" style="animation-delay:0.04s">
            <i class="fa fa-store text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Malls & Commercial Properties</span>
          </div>
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up" style="animation-delay:0.08s">
            <i class="fa fa-industry text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Factories & Industrial Units</span>
          </div>
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up" style="animation-delay:0.12s">
            <i class="fa fa-hard-hat text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Construction & Real Estate Sites</span>
          </div>
        </div>
      </div>
      <div class="relative fade-up mt-10 md:mt-0" style="animation-delay:0.1s">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="../assets/images/garden2.png" alt="Garden maintenance in progress" class="w-full h-full object-cover" />
        </div>
        <div class="absolute bottom-3 left-3 right-3 sm:bottom-5 sm:left-5 sm:right-5 bg-white rounded-xl p-3 sm:p-4 shadow-2xl">
          <div class="grid grid-cols-3 gap-2 sm:gap-3 text-center divide-x divide-gray-200">
            <div>
              <div class="font-display font-black text-brand-dark text-base sm:text-xl">8+</div>
              <div class="text-gray-500 text-[9px] sm:text-[14px] capitalize tracking-wider mt-0.5">Property Types</div>
            </div>
            <div>
              <div class="font-display font-black text-brand-dark text-base sm:text-xl">Delhi NCR</div>
              <div class="text-gray-500 text-[9px] sm:text-[14px] capitalize tracking-wider mt-0.5">Coverage</div>
            </div>
            <div>
              <div class="font-display font-black text-brand-dark text-base sm:text-xl">Year</div>
              <div class="text-gray-500 text-[9px] sm:text-[14px] capitalize tracking-wider mt-0.5">Round</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     4. WHY CHOOSE OUR GARDEN STAFF — light gray
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 md:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">The Conquer Advantage</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-4">Why Choose Our<br/><span style="color:#C9A91E;">Garden & Maintenance Staff</span></h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 text-lg max-w-xl mx-auto leading-relaxed">We don't just supply a gardener — we supply a verified, briefed, and supervised maintenance professional who keeps your property looking its best every single day.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-user-check text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Verified Manpower</h4>
        <p class="text-gray-500 text-base leading-relaxed">ID and address verification completed for every garden and maintenance worker before deployment on any client property.</p>
      </div>

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up" style="animation-delay:0.07s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-graduation-cap text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Trained for Site Duties</h4>
        <p class="text-gray-500 text-base leading-relaxed">Staff are briefed on your specific property layout, seasonal schedules, plant types, and maintenance expectations before starting work.</p>
      </div>

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up" style="animation-delay:0.14s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-tshirt text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Groomed Staff</h4>
        <p class="text-gray-500 text-base leading-relaxed">All personnel are presentable and in appropriate work attire, maintaining a professional appearance on your property at all times.</p>
      </div>

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up" style="animation-delay:0.21s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-user-tie text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Supervisor Monitoring</h4>
        <p class="text-gray-500 text-base leading-relaxed">Regular supervisor visits ensure attendance, work quality, and proper upkeep standards are consistently maintained throughout the contract.</p>
      </div>

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-sync-alt text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Replacement Support</h4>
        <p class="text-gray-500 text-base leading-relaxed">If a staff member is absent, a replacement is arranged promptly so your property maintenance schedule is never disrupted.</p>
      </div>

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up" style="animation-delay:0.07s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-sliders-h text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Flexible Deployment</h4>
        <p class="text-gray-500 text-base leading-relaxed">Deploy for specific days of the week, full-time daily coverage, or rotating schedules based on your property's maintenance needs.</p>
      </div>

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up" style="animation-delay:0.14s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-calendar-alt text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Daily, Monthly & Contract</h4>
        <p class="text-gray-500 text-base leading-relaxed">Engage staff on daily visits, monthly retainer, or long-term contract terms — whichever matches your property upkeep model.</p>
      </div>

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up" style="animation-delay:0.21s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-headset text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">24/7 Client Support</h4>
        <p class="text-gray-500 text-base leading-relaxed">Round-the-clock support and escalation for every client account so property upkeep issues are never left unaddressed.</p>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     5. LEAD MAGNET — DARK with image
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 relative overflow-hidden">
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.95) 0%, rgba(10,10,10,0.85) 100%), url('../assets/images/service2.png') center/cover no-repeat;"></div>
  <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6">
    <div class="grid md:grid-cols-2 gap-10 sm:gap-12 items-center">
      <div class="fade-up">
        <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Free Planning Tool</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-white leading-tight sm:leading-none mb-4">
          Free Facility Staffing<br/><span class="text-brand-yellow">Requirement Planner</span>
        </h2>
        <p class="text-white/70 text-lg leading-relaxed mb-6">
          Get help estimating the right number of gardeners, maintenance workers, housekeeping staff, and other facility personnel for your property or site.
        </p>
        <ul class="space-y-2.5 text-lg text-white/80">
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Staff count & schedule planning</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Seasonal maintenance recommendations</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> No-obligation site consultation</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Response within 24 hours</li>
        </ul>
      </div>
      <div class="bg-white rounded-2xl p-5 sm:p-6 md:p-8 fade-up mt-6 md:mt-0" style="animation-delay:0.1s">
        <h3 class="font-display font-bold text-brand-dark capitalize text-lg sm:text-xl mb-5 sm:mb-6">Request Free Staffing Plan</h3>
        <form action="../includes/contact.php" method="POST" class="space-y-4">
          <input type="hidden" name="form_type" value="garden_maintenance_staffing_planner" />
          <div class="grid sm:grid-cols-2 gap-4">
            <div>
              <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Name *</label>
              <input type="text" name="name" required placeholder="Your full name" class="input-field" />
            </div>
            <div>
              <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Phone *</label>
              <input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX" class="input-field" />
            </div>
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Staff Type Needed</label>
            <select name="staff_type" class="input-field">
              <option value="">Select staff type</option>
              <option>Gardeners / Landscaping Staff</option>
              <option>Property Maintenance Workers</option>
              <option>Gardeners + Housekeeping</option>
              <option>Maintenance + Cleaning Staff</option>
              <option>Multiple Facility Staff Types</option>
            </select>
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Property Type</label>
            <select name="property_type" class="input-field">
              <option value="">Select your property</option>
              <option>Corporate Office / Campus</option>
              <option>Residential Society</option>
              <option>Hotel / Resort</option>
              <option>Hospital / Healthcare</option>
              <option>School / College</option>
              <option>Mall / Commercial</option>
              <option>Factory / Industrial</option>
              <option>Other</option>
            </select>
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
              <option>Other NCR Area</option>
            </select>
          </div>
          <button type="submit" class="w-full bg-brand-dark hover:bg-gray-800 text-white font-bold py-3.5 rounded-lg capitalize tracking-wider text-sm transition-colors flex items-center justify-center gap-2">
            <i class="fa fa-clipboard-check text-xs"></i> Request Free Staffing Plan
          </button>
        </form>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     6. FAQs — light gray
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-gray-50">
  <div class="max-w-3xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2">Common Questions</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-1">Frequently Asked</h2>
      <div class="y-divider-center mx-auto mt-4"></div>
    </div>
    <div class="space-y-3">

      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">What is the minimum contract period for garden and maintenance staff?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">We offer daily visits, weekly schedules, monthly retainers, and long-term contract-based staffing. Whether you need a gardener to come twice a week or a full-time daily maintenance worker, we have options that fit your property's upkeep needs.</p>
        </div>
      </div>

      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.05s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">How quickly can garden and maintenance staff be deployed?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">For most requirements, we can deploy within 48–72 hours of agreement confirmation after briefing staff on your property's specific layout and schedule. Urgent requirements are handled on priority — contact us directly for fast placement.</p>
        </div>
      </div>

      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.1s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">What happens if a garden staff member is absent?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">We provide swift replacement support so your property's maintenance schedule is never disrupted. Our supervisor team monitors attendance and arranges a backup worker as quickly as possible — typically within the same day.</p>
        </div>
      </div>

      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.15s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do your staff bring their own tools and equipment?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">This is confirmed during the briefing and agreement stage. For most deployments, basic gardening tools are available from the property. For specialised equipment requirements, we can discuss arrangements during the initial consultation.</p>
        </div>
      </div>

      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.2s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can I get staff for specific days of the week only?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. We can deploy garden and maintenance staff on specific days of the week — for example, 3 days per week for a residential society or daily for a hotel garden. The schedule is confirmed before deployment and followed consistently.</p>
        </div>
      </div>

      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.25s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Are garden and maintenance staff background verified?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. Every worker undergoes ID verification and address verification before being cleared for deployment. This is especially important for residential societies and properties where workers will have regular unsupervised access to outdoor areas.</p>
        </div>
      </div>

      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.3s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">How is garden and maintenance staffing priced?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Pricing depends on the number of staff, visit frequency, property size, scope of work, and contract duration. Share your property type and maintenance requirement for a free, no-obligation quote tailored specifically to your site.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     7. FINAL CTA — YELLOW
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-brand-yellow">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center fade-up">
    <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight sm:leading-none mb-4">
      Need Facility Staff for<br/>Your Property or Business?
    </h2>
    <p class="text-brand-dark/70 text-sm sm:text-lg mb-8 max-w-lg mx-auto">
      Contact us today and get the right garden and maintenance staff for your property — verified, briefed, and on schedule from day one.
    </p>
    <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-3 sm:gap-4">
      <a href="../contact" class="bg-brand-dark hover:bg-gray-800 text-white font-bold px-7 sm:px-8 py-3.5 rounded capitalize tracking-wider text-base transition-colors shadow-lg text-center">
        Request Quote
      </a>

      <a href="tel:+919430695171" class="flex items-center justify-center gap-2 border-2 border-brand-dark/50 text-brand-dark hover:border-brand-dark font-bold px-7 sm:px-8 py-3.5 rounded capitalize tracking-wider text-base transition-colors text-center">
        <i class="fa fa-phone"></i> +91 94306 95171
      </a>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>