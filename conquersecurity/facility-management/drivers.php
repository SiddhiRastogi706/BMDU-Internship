<?php
$page_title       = "Driver & Chauffeur Services in Delhi NCR | Conquer Services";
$page_description = "Hire verified, licensed, and professionally trained drivers and chauffeurs for corporate travel, personal use, staff transport, event transfers, and daily duty across Delhi NCR.";
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
    <img src="../assets/images/banner/driver-banner.png" alt="Professional driver and chauffeur services Delhi NCR" class="w-full h-full object-cover object-[center_40%]" />
  </div>
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.92) 0%, rgba(10,10,10,0.55) 70%);"></div>
  <div class="absolute inset-0 bg-gradient-to-r from-brand-dark via-brand-dark/65 to-transparent"></div>

  <div class="relative z-10 h-full flex items-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
      <div class="max-w-2xl">

        <p class="text-brand-yellow font-display font-semibold text-xs sm:text-sm capitalize tracking-widest2 mb-3 sm:mb-4 fade-up">Facility Management Services</p>
        <h1 class="font-display font-black capitalize leading-tight sm:leading-none mb-5 sm:mb-6 fade-up" style="animation-delay:0.1s">
          <span class="text-2xl sm:text-4xl md:text-5xl text-white font-bold block">Drivers &</span>
          <span class="text-2xl sm:text-4xl md:text-5xl text-brand-yellow font-bold block">Chauffeur Services</span>
          <span class="text-lg sm:text-2xl md:text-3xl text-white/80 font-bold block mt-1 sm:mt-2">in Delhi NCR</span>
        </h1>
        <p class="text-white/70 text-sm sm:text-base md:text-lg leading-relaxed mb-7 sm:mb-8 fade-up max-w-xl" style="animation-delay:0.2s">
          Verified, licensed, and professionally trained drivers and chauffeurs for corporate travel, personal use, staff transport, event transfers, and daily duty — deployed with full documentation and route briefing.
        </p>
        <div class="flex flex-col sm:flex-row flex-wrap gap-3 fade-up" style="animation-delay:0.3s">
          <a href="../contact" class="bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold px-7 py-3.5 rounded capitalize tracking-wider text-sm transition-colors shadow-lg text-center">
            Request Driver Services
          </a>
          <a href="tel:+919430695171" class="flex items-center justify-center gap-2 border border-brand-yellow text-brand-yellow hover:bg-brand-yellow hover:text-brand-dark font-semibold px-7 py-3.5 rounded capitalize tracking-wider text-sm transition-colors text-center">
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
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Reliable Transport Staff</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight sm:leading-none mb-4">
          Reliable Drivers You<br/><span style="color:#C9A91E;">Can Actually Trust</span>
        </h2>
        <div class="y-divider-center mb-6"></div>
        <p class="text-gray-500 text-lg leading-relaxed mb-4">
          Finding a reliable, well-mannered driver who shows up on time, knows the city, and handles your vehicle with care is harder than it sounds. Whether you need a daily office driver, a chauffeur for senior executives, or transport staff for a large workforce — we provide verified, licensed drivers briefed on your routes, timings, and conduct standards before they begin duty.
        </p>
        <p class="text-gray-500 text-lg leading-relaxed mb-8">
          All our drivers carry valid licences, have clean driving records, and go through background and address verification before deployment. We handle the paperwork — you handle the commute.
        </p>
        <div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-2 gap-3 mb-8">
          <div class="flex items-center gap-2 text-base text-gray-600"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> Valid licence verified</div>
          <div class="flex items-center gap-2 text-base text-gray-600"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> Background checked</div>
          <div class="flex items-center gap-2 text-base text-gray-600"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> Address verified</div>
          <div class="flex items-center gap-2 text-base text-gray-600"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> Route & timing briefed</div>
          <div class="flex items-center gap-2 text-base text-gray-600"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> Uniformed & groomed</div>
          <div class="flex items-center gap-2 text-base text-gray-600"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> Quick replacement support</div>
        </div>
        <div class="flex flex-col sm:flex-row flex-wrap gap-3">
          <a href="../contact" class="bg-brand-dark hover:bg-gray-800 text-white font-bold px-7 py-3 rounded capitalize tracking-wider text-sm transition-colors text-center">Request Driver</a>
          <a href="../facility-management" class="border-2 border-brand-dark text-brand-dark hover:bg-brand-dark hover:text-white font-semibold px-7 py-3 rounded capitalize tracking-wider text-base transition-colors text-center">All Facility Services</a>
        </div>
      </div>
      <div class="relative fade-up mt-10 md:mt-0" style="animation-delay:0.1s">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="../assets/images/driver1.png" alt="Professional chauffeur with vehicle" class="w-full h-full object-cover" />
        </div>
        <div class="absolute -bottom-4 -right-3 sm:-bottom-5 sm:-right-5 bg-brand-yellow rounded-2xl p-4 sm:p-5 shadow-xl text-center">
          <div class="font-display font-black text-xl sm:text-2xl text-brand-dark leading-none">100%</div>
          <div class="text-brand-dark font-bold text-[10px] sm:text-sm capitalize tracking-wider mt-1">Licence Verified</div>
        </div>
        <div class="absolute -top-4 -left-3 sm:-top-5 sm:-left-5 bg-white border border-gray-200 rounded-xl p-3 sm:p-4 shadow-xl">
          <div class="flex items-center gap-2 sm:gap-3">
            <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-brand-yellow/20 flex items-center justify-center flex-shrink-0">
              <i class="fa fa-id-card text-brand-dark text-xs sm:text-sm"></i>
            </div>
            <div>
              <div class="font-display font-black text-brand-dark text-sm sm:text-base leading-none">Verified</div>
              <div class="text-gray-500 text-[10px] sm:text-xs mt-0.5">Licensed Drivers</div>
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
      <p class="text-gray-500 text-lg max-w-xl mx-auto leading-relaxed">We provide trained, verified, and groomed facility staff across all support roles — covering every function your property needs.</p>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3 sm:gap-4">

      <a href="housekeeping" class="service-card bg-white border border-gray-200 rounded-xl p-4 sm:p-5 text-center group fade-up">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-broom text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1">Housekeeping Services</h4>
        <p class="text-gray-500 text-base leading-relaxed hidden sm:block">Daily & deep cleaning for all sites</p>
        <div class="mt-2 text-brand-dark text-[10px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

      <a href="office-boy" class="service-card bg-white border border-gray-200 rounded-xl p-4 sm:p-5 text-center group fade-up" style="animation-delay:0.04s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-mug-hot text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1">Office Boy & Pantry Staff</h4>
        <p class="text-gray-500 text-base leading-relaxed hidden sm:block">Tea service & daily office support</p>
        <div class="mt-2 text-brand-dark text-[10px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

      <a href="receptionist" class="service-card bg-white border border-gray-200 rounded-xl p-4 sm:p-5 text-center group fade-up" style="animation-delay:0.08s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-concierge-bell text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1">Receptionist & Front Desk</h4>
        <p class="text-gray-500 text-base leading-relaxed hidden sm:block">Visitor handling & call management</p>
        <div class="mt-2 text-brand-dark text-[10px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

      <a href="bouncers" class="service-card bg-white border border-gray-200 rounded-xl p-4 sm:p-5 text-center group fade-up" style="animation-delay:0.12s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-user-shield text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1">Bouncers</h4>
        <p class="text-gray-500 text-base leading-relaxed hidden sm:block">Events, clubs & high-footfall venues</p>
        <div class="mt-2 text-brand-dark text-[10px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

      <!-- Current page — highlighted -->
      <a href="drivers" class="service-card bg-brand-dark border border-brand-dark rounded-xl p-4 sm:p-5 text-center group fade-up">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/30 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-car text-brand-yellow group-hover:text-brand-dark text-base sm:text-lg transition-colors"></i>
        </div>
        <h4 class="font-display font-bold text-brand-yellow text-lg capitalize leading-tight mb-1">Drivers & Chauffeurs ✓</h4>
        <p class="text-gray-400 text-base leading-relaxed hidden sm:block">Currently viewing this service</p>
        <div class="mt-2 text-brand-yellow text-[10px] font-bold flex items-center justify-center gap-1">Current Page</div>
      </a>

      <a href="helpers" class="service-card bg-white border border-gray-200 rounded-xl p-4 sm:p-5 text-center group fade-up" style="animation-delay:0.04s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-people-carry text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1">Helpers & Labour Supply</h4>
        <p class="text-gray-500 text-base leading-relaxed hidden sm:block">General helpers & site support</p>
        <div class="mt-2 text-brand-dark text-[10px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

      <a href="garden-maintenance" class="service-card bg-white border border-gray-200 rounded-xl p-4 sm:p-5 text-center group fade-up" style="animation-delay:0.08s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-leaf text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1">Garden & Maintenance Staff</h4>
        <p class="text-gray-500 text-base leading-relaxed hidden sm:block">Landscaping & property upkeep</p>
        <div class="mt-2 text-brand-dark text-[10px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

      <a href="fire-safety" class="service-card bg-white border border-gray-200 rounded-xl p-4 sm:p-5 text-center group fade-up" style="animation-delay:0.12s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-fire-extinguisher text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1">Fire & Safety Personnel</h4>
        <p class="text-gray-500 text-base leading-relaxed hidden sm:block">Trained fire safety officers</p>
        <div class="mt-2 text-brand-dark text-[10px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     WHAT DRIVERS HANDLE — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 md:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Scope of Work</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-4">What Our Drivers<br/><span style="color:#C9A91E;">Are Assigned to Handle</span></h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-user-tie text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Executive & VIP Transfers</h4>
        <p class="text-gray-500 text-base leading-relaxed">Chauffeuring directors, senior executives, and VIP guests between offices, airports, hotels, and meeting venues.</p>
      </div>

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-building text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Daily Office Duty</h4>
        <p class="text-gray-500 text-base leading-relaxed">Regular daily driver duties for office staff — pickup, drop, and on-call driving as per the company's daily schedule.</p>
      </div>

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-users text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Staff Transport</h4>
        <p class="text-gray-500 text-base leading-relaxed">Managing employee pickup and drop routes for factories, hospitals, IT parks, and corporate campuses with multiple shift timings.</p>
      </div>

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-plane text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Airport & Station Transfers</h4>
        <p class="text-gray-500 text-base leading-relaxed">Timely airport, railway station, and metro transfers for executives, clients, and guests with accurate scheduling and wait time management.</p>
      </div>

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-calendar-alt text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Event & Wedding Transfers</h4>
        <p class="text-gray-500 text-base leading-relaxed">Coordinating vehicle movement and guest transfers for corporate events, weddings, conferences, and large-scale gatherings.</p>
      </div>

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-home text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Personal & Family Use</h4>
        <p class="text-gray-500 text-base leading-relaxed">Dedicated personal drivers for families, senior residents, and individuals needing reliable daily transport assistance.</p>
      </div>

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-car-side text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Vehicle Maintenance Coordination</h4>
        <p class="text-gray-500 text-base leading-relaxed">Keeping the assigned vehicle clean, fuelled, and coordinating with garage and maintenance team on behalf of the employer.</p>
      </div>

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-clipboard-list text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Logbook & Route Reporting</h4>
        <p class="text-gray-500 text-base leading-relaxed">Maintaining daily trip logs, mileage records, fuel entries, and route reports as required by the employer.</p>
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
          Where We Provide<br/><span class="text-brand-yellow">Driver Services</span>
        </h2>
        <div class="y-divider-center mb-6"></div>
        <p class="text-gray-400 text-lg leading-relaxed mb-8">
          Our drivers and chauffeurs are deployed across a wide range of clients and settings — each briefed on your specific routes, timings, vehicle type, and conduct expectations before they begin duty.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up">
            <i class="fa fa-building text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Corporate Offices</span>
          </div>
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up" style="animation-delay:0.04s">
            <i class="fa fa-home text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Residential & Personal Use</span>
          </div>
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up" style="animation-delay:0.08s">
            <i class="fa fa-hospital text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Hospitals & Healthcare</span>
          </div>
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up" style="animation-delay:0.12s">
            <i class="fa fa-industry text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Factories & Industrial Units</span>
          </div>
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up">
            <i class="fa fa-hotel text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Hotels & Hospitality</span>
          </div>
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up" style="animation-delay:0.04s">
            <i class="fa fa-graduation-cap text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Schools & Colleges</span>
          </div>
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up" style="animation-delay:0.08s">
            <i class="fa fa-calendar-alt text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Events & Weddings</span>
          </div>
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up" style="animation-delay:0.12s">
            <i class="fa fa-warehouse text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Warehouses & Logistics</span>
          </div>
        </div>
      </div>
      <div class="relative fade-up mt-10 md:mt-0" style="animation-delay:0.1s">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="../assets/images/facility4.png" alt="Professional driver with vehicle" class="w-full h-full object-cover" />
        </div>
        <div class="absolute bottom-3 left-3 right-3 sm:bottom-5 sm:left-5 sm:right-5 bg-white rounded-xl p-3 sm:p-4 shadow-2xl">
          <div class="grid grid-cols-3 gap-2 sm:gap-3 text-center divide-x divide-gray-200">
            <div>
              <div class="font-display font-black text-brand-dark text-base sm:text-xl">8+</div>
              <div class="text-gray-500 text-[9px] sm:text-[12px] capitalize tracking-wider mt-0.5">Site Types</div>
            </div>
            <div>
              <div class="font-display font-black text-brand-dark text-base sm:text-xl">Delhi NCR</div>
              <div class="text-gray-500 text-[9px] sm:text-[12px] capitalize tracking-wider mt-0.5">Coverage</div>
            </div>
            <div>
              <div class="font-display font-black text-brand-dark text-base sm:text-xl">24/7</div>
              <div class="text-gray-500 text-[9px] sm:text-[12px] capitalize tracking-wider mt-0.5">Support</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     4. WHY CHOOSE OUR DRIVERS — light gray
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 md:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">The Conquer Advantage</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-4">Why Choose Our<br/><span style="color:#C9A91E;">Driver Services</span></h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 text-lg max-w-xl mx-auto leading-relaxed">We don't just supply a driver — we supply a professionally verified, route-briefed, and monitored transport staff member who represents your organisation from the moment they start duty.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-id-card text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Licence Verified</h4>
        <p class="text-gray-500 text-base leading-relaxed">All drivers carry valid driving licences appropriate for the vehicle type — verified before deployment.</p>
      </div>

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up" style="animation-delay:0.07s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-user-check text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Background Verified</h4>
        <p class="text-gray-500 text-base leading-relaxed">ID, address, police verification support, and previous employment records checked before clearance.</p>
      </div>

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up" style="animation-delay:0.14s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-tshirt text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Groomed & Uniformed</h4>
        <p class="text-gray-500 text-base leading-relaxed">Presentable, well-dressed drivers who maintain professional conduct and appearance on duty.</p>
      </div>

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up" style="animation-delay:0.21s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-route text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Route & Timing Briefed</h4>
        <p class="text-gray-500 text-base leading-relaxed">Every driver is briefed on your specific routes, pickup/drop timings, and travel preferences before their first duty.</p>
      </div>

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-user-tie text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Supervisor Monitoring</h4>
        <p class="text-gray-500 text-base leading-relaxed">Regular supervisor checks and performance reviews ensure discipline and punctuality throughout the deployment.</p>
      </div>

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up" style="animation-delay:0.07s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-sync-alt text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Replacement Support</h4>
        <p class="text-gray-500 text-base leading-relaxed">If a driver is absent, a replacement is arranged quickly so your travel and transport schedule is never disrupted.</p>
      </div>

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up" style="animation-delay:0.14s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-sliders-h text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Flexible Deployment</h4>
        <p class="text-gray-500 text-base leading-relaxed">Part-day, full-day, shift-based, or round-the-clock deployment options based on your schedule and requirements.</p>
      </div>

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up" style="animation-delay:0.21s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-calendar-alt text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Daily, Monthly & Contract</h4>
        <p class="text-gray-500 text-base leading-relaxed">Engage drivers on daily, monthly, or long-term contract-based terms — whichever matches your transport needs.</p>
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
          Get help estimating the right number of drivers, housekeeping staff, receptionists, helpers, and other facility staff for your organisation or property.
        </p>
        <ul class="space-y-2.5 text-lg text-white/80">
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Driver count & shift planning</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Route & timing structure</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> No-obligation consultation</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Response within 24 hours</li>
        </ul>
      </div>
      <div class="bg-white rounded-2xl p-5 sm:p-6 md:p-8 fade-up mt-6 md:mt-0" style="animation-delay:0.1s">
        <h3 class="font-display font-bold text-brand-dark capitalize text-lg sm:text-xl mb-5 sm:mb-6">Request Free Staffing Plan</h3>
        <form action="../includes/contact.php" method="POST" class="space-y-4">
          <input type="hidden" name="form_type" value="driver_staffing_planner" />
          <div class="grid sm:grid-cols-2 gap-4">
            <div>
              <label class="text-gray-500 text-sm font-semibold capitalize tracking-wider mb-1.5 block">Name *</label>
              <input type="text" name="name" required placeholder="Your full name" class="input-field" />
            </div>
            <div>
              <label class="text-gray-500 text-sm font-semibold capitalize tracking-wider mb-1.5 block">Phone *</label>
              <input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX" class="input-field" />
            </div>
          </div>
          <div>
            <label class="text-gray-500 text-sm font-semibold capitalize tracking-wider mb-1.5 block">Staff Type Needed</label>
            <select name="staff_type" class="input-field">
              <option value="">Select staff type</option>
              <option>Drivers / Chauffeurs Only</option>
              <option>Drivers + Security Guards</option>
              <option>Drivers + Housekeeping</option>
              <option>Multiple Facility Staff Types</option>
            </select>
          </div>
          <div>
            <label class="text-gray-500 text-sm font-semibold capitalize tracking-wider mb-1.5 block">Purpose</label>
            <select name="purpose" class="input-field">
              <option value="">Select purpose</option>
              <option>Corporate / Office Duty</option>
              <option>Personal / Family Use</option>
              <option>Staff Transport</option>
              <option>Airport / Station Transfers</option>
              <option>Event / Wedding</option>
              <option>School / College Transport</option>
              <option>Other</option>
            </select>
          </div>
          <div>
            <label class="text-gray-500 text-sm font-semibold capitalize tracking-wider mb-1.5 block">Location</label>
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
            <i class="fa fa-clipboard-check text-base"></i> Request Free Staffing Plan
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
          <span class="text-brand-dark font-semibold text-lg pr-4">What is the minimum contract period for driver services?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">We offer daily, monthly, and long-term contract-based deployment. Whether you need a driver for a single day, a specific event, or ongoing monthly duty, we offer terms that fit your schedule.</p>
        </div>
      </div>

      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.05s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">How quickly can a driver be deployed?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">We maintain a ready pool of verified and licensed drivers. For most requirements, deployment can begin within 24–72 hours of agreement confirmation after a route and duty briefing is completed.</p>
        </div>
      </div>

      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.1s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">What happens if a driver is absent on a scheduled duty day?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">We provide swift replacement support to ensure your transport schedule is never disrupted. Our supervisor team handles last-minute absences and arranges a backup driver as quickly as possible — typically on the same day.</p>
        </div>
      </div>

      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.15s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do your drivers wear uniforms?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. All deployed drivers are groomed and presentable. Standard formal attire is provided unless a specific uniform or dress code is requested by the client — this is confirmed during the briefing stage before deployment begins.</p>
        </div>
      </div>

      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.2s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can I get a driver for specific shift timings or late-night duty?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. We deploy for specific shift timings including early morning pickups, late-night returns, and round-the-clock duty. Shift hours are agreed during the briefing process and fixed before the driver's first day.</p>
        </div>
      </div>

      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.25s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Are the drivers background verified before being sent on duty?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. Every driver undergoes ID verification, address verification, valid driving licence check, police verification support, and previous work history review before being cleared for deployment by our supervisor team.</p>
        </div>
      </div>

      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.3s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">How is driver staffing priced?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Pricing depends on the number of drivers, shift duration, route requirements, and contract length. Share your duty requirements with us for a free, no-obligation quote tailored to your specific transport needs.</p>
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
    <p class="text-brand-dark/70 text-base sm:text-lg mb-8 max-w-lg mx-auto">
      Contact us today and get the right drivers for your organisation, home, or event — verified, briefed, and deployed on time.
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