<?php
$page_title       = "Fire & Safety Personnel Services in Delhi NCR | Conquer Services";
$page_description = "Hire trained fire safety officers and emergency response personnel for factories, hospitals, malls, hotels, schools, warehouses, and commercial buildings across Delhi NCR.";
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
    <img src="../assets/images/fire3.png" alt="Fire and safety personnel Delhi NCR" class="w-full h-full object-cover object-[center_30%]" />
  </div>
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.52) 0%, rgba(10,10,10,0.25) 30%);"></div>
  <div class="absolute inset-0 bg-gradient-to-r from-brand-dark via-brand-dark/65 to-transparent"></div>

  <div class="relative z-10 h-full flex items-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
      <div class="max-w-2xl">

        <p class="text-brand-yellow font-display font-semibold text-xs sm:text-base capitalize tracking-widest mb-3 sm:mb-4 fade-up">Facility Management Services</p>
        <h1 class="font-display font-black capitalize leading-tight sm:leading-none mb-5 sm:mb-6 fade-up" style="animation-delay:0.1s">
          <span class="text-2xl sm:text-4xl md:text-5xl text-white font-bold block">Fire & Safety</span>
          <span class="text-2xl sm:text-4xl md:text-5xl text-brand-yellow font-bold block">Personnel</span>
          <span class="text-base sm:text-xl md:text-2xl text-white/80 font-bold block mt-1 sm:mt-2">in Delhi NCR</span>
        </h1>
        <p class="text-white/70 text-sm sm:text-base md:text-lg leading-relaxed mb-7 sm:mb-8 fade-up max-w-xl" style="animation-delay:0.2s">
          Trained fire safety officers and emergency response personnel for factories, hospitals, malls, hotels, schools, warehouses, and commercial buildings — deployed with full site briefings on evacuation plans, fire equipment, and emergency protocols.
        </p>
        <div class="flex flex-col sm:flex-row flex-wrap gap-3 fade-up" style="animation-delay:0.3s">
          <a href="../contact" class="bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold px-7 py-3.5 rounded capitalize tracking-wider text-base transition-colors shadow-lg text-center">
            Request Fire Safety Staff
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
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Emergency Preparedness</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight sm:leading-none mb-4">
          Fire Safety Staff Who<br/><span style="color:#C9A91E;">Know What to Do</span>
        </h2>
        <div class="y-divider-center mb-6"></div>
        <p class="text-gray-500 text-lg leading-relaxed mb-4">
          A fire safety officer's value is measured not on normal days — but in the two minutes that matter most when an emergency happens. Our fire and safety personnel are trained in fire prevention, first response, evacuation coordination, and equipment operation so your site is genuinely prepared, not just compliant on paper.
        </p>
        <p class="text-gray-500 text-lg leading-relaxed mb-8">
          We deploy trained fire safety officers across factories, hospitals, malls, hotels, schools, warehouses, and commercial buildings throughout Delhi NCR — each fully briefed on your site's fire exits, evacuation routes, assembly points, fire suppression systems, and emergency escalation contacts before their first shift.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-8">
          <div class="flex items-center gap-2 text-base text-gray-600"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> Fire safety trained & certified</div>
          <div class="flex items-center gap-2 text-base text-gray-600"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> ID & address verified</div>
          <div class="flex items-center gap-2 text-base text-gray-600"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> Site evacuation plan briefed</div>
          <div class="flex items-center gap-2 text-base text-gray-600"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> Fire equipment operation trained</div>
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
          <img src="../assets/images/facility7.png" alt="Fire safety officer at industrial site" class="w-full h-full object-cover" />
        </div>
        <div class="absolute -bottom-4 -right-3 sm:-bottom-5 sm:-right-5 bg-brand-yellow rounded-2xl p-4 sm:p-5 shadow-xl text-center">
          <div class="font-display font-black text-lg sm:text-xl text-brand-dark leading-none">24/7</div>
          <div class="text-brand-dark font-bold text-[10px] sm:text-sm capitalize tracking-wider mt-1">Readiness</div>
        </div>
        <div class="absolute -top-4 -left-3 sm:-top-5 sm:-left-5 bg-white border border-gray-200 rounded-xl p-3 sm:p-4 shadow-xl">
          <div class="flex items-center gap-2 sm:gap-3">
            <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-brand-yellow/20 flex items-center justify-center flex-shrink-0">
              <i class="fa fa-fire-extinguisher text-brand-dark text-xs sm:text-sm"></i>
            </div>
            <div>
              <div class="font-display font-black text-brand-dark text-sm sm:text-base leading-none">Trained</div>
              <div class="text-gray-500 text-[10px] sm:text-sm mt-0.5">Fire Safety Officers</div>
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

      <a href="garden-maintenance" class="service-card bg-white border border-gray-200 rounded-xl p-4 sm:p-5 text-center group fade-up" style="animation-delay:0.08s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-leaf text-brand-dark text-base sm:text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize leading-tight mb-1">Garden & Maintenance Staff</h4>
        <p class="text-gray-500 text-[16px] leading-relaxed hidden sm:block">Landscaping & property upkeep</p>
        <div class="mt-2 text-brand-dark text-[12px] font-bold flex items-center justify-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>

      <!-- Current page — highlighted -->
      <a href="fire-safety" class="service-card bg-brand-dark border border-brand-dark rounded-xl p-4 sm:p-5 text-center group fade-up" style="animation-delay:0.12s">
        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/30 group-hover:bg-brand-yellow flex items-center justify-center mx-auto mb-3 transition-colors">
          <i class="fa fa-fire-extinguisher text-brand-yellow group-hover:text-brand-dark text-base sm:text-lg transition-colors"></i>
        </div>
        <h4 class="font-display font-bold text-brand-yellow text-lg capitalize leading-tight mb-1">Fire & Safety ✓</h4>
        <p class="text-gray-400 text-[16px] leading-relaxed hidden sm:block">Currently viewing this service</p>
        <div class="mt-2 text-brand-yellow text-[12px] font-bold flex items-center justify-center gap-1">Current Page</div>
      </a>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     WHAT FIRE SAFETY STAFF HANDLE — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 md:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Scope of Work</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-4">What Our Fire &<br/><span style="color:#C9A91E;">Safety Staff Handle</span></h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-fire-extinguisher text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Fire Equipment Monitoring</h4>
        <p class="text-gray-500 text-base leading-relaxed">Regular inspection and monitoring of fire extinguishers, hose reels, sprinklers, smoke detectors, and hydrant systems on site.</p>
      </div>

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-running text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Evacuation Coordination</h4>
        <p class="text-gray-500 text-base leading-relaxed">Managing safe and orderly evacuation of occupants during fire alarms, drills, and actual emergency events across all floors and zones.</p>
      </div>

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-fire text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">First Response Action</h4>
        <p class="text-gray-500 text-base leading-relaxed">Immediate first-response deployment in case of fire breakout — using on-site fire suppression equipment while alerting emergency services.</p>
      </div>

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-clipboard-check text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Fire Drill Assistance</h4>
        <p class="text-gray-500 text-base leading-relaxed">Supporting and coordinating regular fire drills for occupants, staff, and workers to ensure everyone knows evacuation routes and assembly points.</p>
      </div>

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-exclamation-triangle text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Fire Hazard Identification</h4>
        <p class="text-gray-500 text-base leading-relaxed">Routine site walkthroughs to identify and report fire hazards — blocked exits, improper storage, exposed wiring, and combustible material risks.</p>
      </div>

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-heartbeat text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Basic First Aid Support</h4>
        <p class="text-gray-500 text-base leading-relaxed">Providing basic first aid to injured persons during emergencies while coordinating with medical teams and ambulance services for evacuation.</p>
      </div>

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-door-open text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Emergency Exit Monitoring</h4>
        <p class="text-gray-500 text-base leading-relaxed">Ensuring all emergency exits, stairwells, and escape routes remain clear, accessible, and properly lit at all times during duty hours.</p>
      </div>

      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-file-alt text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Safety Reporting & Logs</h4>
        <p class="text-gray-500 text-base leading-relaxed">Maintaining daily fire safety logs, equipment check reports, incident records, and drill reports as required by site management and compliance teams.</p>
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
          Where We Deploy<br/><span class="text-brand-yellow">Fire & Safety Personnel</span>
        </h2>
        <div class="y-divider-center mb-6"></div>
        <p class="text-gray-400 text-lg leading-relaxed mb-8">
          Our fire safety personnel are deployed across all high-occupancy and high-risk site types — each fully briefed on your facility's fire exits, assembly points, suppression systems, and escalation contacts before their first duty.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up">
            <i class="fa fa-industry text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Factories & Industrial Units</span>
          </div>
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up" style="animation-delay:0.04s">
            <i class="fa fa-hospital text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Hospitals & Healthcare</span>
          </div>
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up" style="animation-delay:0.08s">
            <i class="fa fa-store text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Malls & Commercial Buildings</span>
          </div>
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up" style="animation-delay:0.12s">
            <i class="fa fa-hotel text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Hotels & Resorts</span>
          </div>
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up">
            <i class="fa fa-graduation-cap text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Schools & Colleges</span>
          </div>
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up" style="animation-delay:0.04s">
            <i class="fa fa-warehouse text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Warehouses & Logistics</span>
          </div>
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up" style="animation-delay:0.08s">
            <i class="fa fa-building text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Corporate Offices & IT Parks</span>
          </div>
          <div class="flex items-center gap-3 bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl px-4 py-3 transition-colors fade-up" style="animation-delay:0.12s">
            <i class="fa fa-hard-hat text-brand-yellow text-sm flex-shrink-0"></i>
            <span class="text-white text-base font-medium">Construction Sites</span>
          </div>
        </div>
      </div>
      <div class="relative fade-up mt-10 md:mt-0" style="animation-delay:0.1s">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="../assets/images/fire4.png" alt="Fire safety officer on duty" class="w-full h-full object-cover" />
        </div>
        <div class="absolute bottom-3 left-3 right-3 sm:bottom-5 sm:left-5 sm:right-5 bg-white rounded-xl p-3 sm:p-4 shadow-2xl">
          <div class="grid grid-cols-3 gap-2 sm:gap-3 text-center divide-x divide-gray-200">
            <div>
              <div class="font-display font-black text-brand-dark text-base sm:text-xl">8+</div>
              <div class="text-gray-500 text-[9px] sm:text-[14px] capitalize tracking-wider mt-0.5">Site Types</div>
            </div>
            <div>
              <div class="font-display font-black text-brand-dark text-base sm:text-xl">Delhi NCR</div>
              <div class="text-gray-500 text-[9px] sm:text-[14px] capitalize tracking-wider mt-0.5">Coverage</div>
            </div>
            <div>
              <div class="font-display font-black text-brand-dark text-base sm:text-xl">24/7</div>
              <div class="text-gray-500 text-[9px] sm:text-[14px] capitalize tracking-wider mt-0.5">Readiness</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     4. WHY CHOOSE OUR FIRE SAFETY STAFF — light gray
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-16 md:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 md:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">The Conquer Advantage</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-4">Why Choose Our<br/><span style="color:#C9A91E;">Fire & Safety Personnel</span></h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 text-lg max-w-xl mx-auto leading-relaxed">We don't deploy generic guards with fire safety awareness — we deploy dedicated fire safety officers who are trained specifically for emergency prevention and response on your type of site.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-user-check text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Verified Manpower</h4>
        <p class="text-gray-500 text-base leading-relaxed">ID, address, and background checks completed for every fire safety officer before deployment on any client site.</p>
      </div>

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up" style="animation-delay:0.07s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-graduation-cap text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Fire Safety Trained</h4>
        <p class="text-gray-500 text-base leading-relaxed">All personnel are trained in fire prevention, fire suppression equipment operation, evacuation coordination, and first response.</p>
      </div>

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up" style="animation-delay:0.14s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-map-marked-alt text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Site-Specific Briefing</h4>
        <p class="text-gray-500 text-base leading-relaxed">Every officer is briefed on your site's fire exits, assembly points, suppression systems, and escalation contacts before duty starts.</p>
      </div>

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up" style="animation-delay:0.21s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-user-tie text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Supervisor Monitoring</h4>
        <p class="text-gray-500 text-base leading-relaxed">Regular supervisor checks ensure compliance, duty discipline, and fire safety readiness standards throughout the contract.</p>
      </div>

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-sync-alt text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Replacement Support</h4>
        <p class="text-gray-500 text-base leading-relaxed">Absent personnel are replaced promptly so your site's fire safety coverage is never compromised — especially important for mandatory compliance deployments.</p>
      </div>

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up" style="animation-delay:0.07s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-sliders-h text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Flexible Deployment</h4>
        <p class="text-gray-500 text-base leading-relaxed">Deploy for specific shifts, round-the-clock 3-shift coverage, event-based assignments, or ongoing monthly duty based on your site's requirements.</p>
      </div>

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up" style="animation-delay:0.14s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-calendar-alt text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Daily, Monthly & Contract</h4>
        <p class="text-gray-500 text-base leading-relaxed">Engage personnel on daily, monthly, or long-term contract terms — whichever suits your facility's compliance and operational model.</p>
      </div>

      <div class="bg-white border border-gray-200 hover:border-brand-yellow rounded-xl p-5 sm:p-6 text-center transition-all fade-up" style="animation-delay:0.21s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-headset text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h4 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">24/7 Client Support</h4>
        <p class="text-gray-500 text-base leading-relaxed">Round-the-clock support and escalation for every client account — fire safety is a round-the-clock responsibility, and so is ours.</p>
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
          Get help estimating the right number of fire safety officers, security guards, housekeeping staff, and other facility personnel for your site or building.
        </p>
        <ul class="space-y-2.5 text-lg text-white/80">
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Fire safety officer count & shift planning</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Site coverage & zone assessment</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> No-obligation site consultation</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Response within 24 hours</li>
        </ul>
      </div>
      <div class="bg-white rounded-2xl p-5 sm:p-6 md:p-8 fade-up mt-6 md:mt-0" style="animation-delay:0.1s">
        <h3 class="font-display font-bold text-brand-dark capitalize text-lg sm:text-xl mb-5 sm:mb-6">Request Free Staffing Plan</h3>
        <form action="../includes/contact.php" method="POST" class="space-y-4">
          <input type="hidden" name="form_type" value="fire_safety_staffing_planner" />
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
              <option>Fire Safety Officers Only</option>
              <option>Fire Safety + Security Guards</option>
              <option>Fire Safety + Housekeeping</option>
              <option>Multiple Facility Staff Types</option>
            </select>
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Site Type</label>
            <select name="site_type" class="input-field">
              <option value="">Select your site</option>
              <option>Factory / Industrial Unit</option>
              <option>Hospital / Healthcare</option>
              <option>Mall / Commercial Building</option>
              <option>Hotel / Resort</option>
              <option>School / College</option>
              <option>Warehouse / Logistics</option>
              <option>Corporate Office / IT Park</option>
              <option>Construction Site</option>
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
          <span class="text-brand-dark font-semibold text-lg pr-4">What is the minimum contract period for fire safety personnel?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">We offer daily, monthly, and long-term contract-based deployment. For event-based or short-term requirements, deployment can be arranged with prior notice. For ongoing compliance-based deployments, monthly and annual contracts are available.</p>
        </div>
      </div>

      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.05s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">How quickly can fire safety personnel be deployed?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">We maintain a ready pool of trained fire safety officers. For most requirements, deployment can begin within 48–72 hours of confirmation — after the officer is briefed on your site's evacuation plan, fire systems, and emergency contacts.</p>
        </div>
      </div>

      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.1s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">What happens if a fire safety officer is absent on duty?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">We provide swift replacement support — fire safety coverage is a compliance requirement that cannot be left unmanned. Our supervisor team monitors attendance and arranges a replacement as quickly as possible, typically within the same shift window.</p>
        </div>
      </div>

      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.15s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do your fire safety officers wear uniforms?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. All deployed fire safety personnel are uniformed and groomed. Standard uniform is provided unless the site specifies a particular dress code or high-visibility requirement. Uniform details are confirmed during the briefing stage before deployment.</p>
        </div>
      </div>

      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.2s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can I get fire safety staff for specific shift timings?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. We deploy for day shifts, night shifts, and full 3-shift round-the-clock coverage. For high-risk industrial and commercial sites requiring 24/7 fire safety presence, we provide multi-shift deployment with supervisor oversight across all shifts.</p>
        </div>
      </div>

      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.25s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Are fire safety personnel background verified before deployment?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. Every fire safety officer undergoes ID verification, address verification, and previous work history checks before being cleared for deployment. All documentation is maintained by our operations team and available to the client on request.</p>
        </div>
      </div>

      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.3s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">How is fire safety staffing priced?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Pricing depends on the number of officers, shift coverage, site type, and contract length. Factories, hospitals, and high-risk sites have different staffing requirements. Share your site details for a free, no-obligation quote tailored to your specific fire safety need.</p>
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
      Contact us today and get the right fire safety personnel for your site — trained, verified, site-briefed, and deployed on time.
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