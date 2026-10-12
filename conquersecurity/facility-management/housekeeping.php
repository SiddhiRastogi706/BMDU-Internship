<?php
$page_title       = "Housekeeping Services in Delhi NCR | Conquer Services";
$page_description = "Hire trained, verified, and professionally managed housekeeping staff for offices, residential societies, commercial spaces, hospitals, schools, malls, and events across Delhi NCR.";
$active_page      = "services";
$base_path        = "../";
include '../includes/header.php';
?>

<style>
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
  .service-card { transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s; }
  .service-card:hover { transform: translateY(-6px); box-shadow: 0 24px 48px rgba(0,0,0,0.10); border-color: #F2CF4A; }
  .duty-card { transition: border-color 0.25s, background 0.25s; }
  .duty-card:hover { border-color: #F2CF4A; background: #fffdf0; }
  .suitable-card { transition: border-color 0.25s, transform 0.25s; }
  .suitable-card:hover { border-color: #F2CF4A; transform: translateY(-4px); }
  .deploy-badge { transition: border-color 0.25s, background 0.25s; }
  .deploy-badge:hover { border-color: #F2CF4A; background: #fffdf0; }
</style>


<!-- ══════════════════════════════════════════
     1. HERO SECTION
═══════════════════════════════════════════ -->
<section class="relative h-64 sm:h-80 md:h-[420px] overflow-hidden bg-brand-dark">
  <div class="absolute inset-0">
    <img
      src="../assets/images/service3.png"
      alt="Professional Housekeeping Services Delhi NCR"
      class="w-full h-full object-cover object-[center_25%]"
    />
  </div>
  <div class="page-hero-overlay absolute inset-0"></div>

  <div class="relative z-10 h-full flex flex-col justify-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">

      <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3 fade-up" style="animation-delay:0.05s">Facility Management</p>
      <h1 class="font-display font-black capitalize leading-tight sm:leading-none text-white mb-3 sm:mb-4 fade-up" style="animation-delay:0.1s">
        <span class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl block">Housekeeping</span>
        <span class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-brand-yellow block">Services in Delhi NCR</span>
      </h1>
      <p class="text-white/70 text-sm sm:text-base md:text-lg max-w-2xl leading-relaxed mb-5 sm:mb-6 fade-up" style="animation-delay:0.2s">
        Hire trained, verified, and professionally managed housekeeping staff for offices, societies, commercial spaces, institutions, and events.
      </p>
      <div class="flex flex-col sm:flex-row flex-wrap gap-3 fade-up" style="animation-delay:0.3s">
        <a href="../contact" class="w-full sm:w-auto text-center bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold px-6 py-3 rounded capitalize tracking-wider text-sm sm:text-base transition-colors shadow-lg">
          Get Free Quote
        </a>
        <a href="tel:+919430695171" class="w-full sm:w-auto flex items-center justify-center gap-2 border border-brand-yellow text-brand-yellow hover:bg-brand-yellow hover:text-brand-dark font-semibold px-6 py-3 rounded capitalize tracking-wider text-sm sm:text-base transition-colors">
          <i class="fa fa-phone"></i> Call Now
        </a>
      </div>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-brand-yellow"></div>
</section>
<!-- ══════════════════════════════════════════
     2. SERVICE OVERVIEW — WHITE
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

      <!-- image -->
      <div class="relative fade-up order-2 lg:order-1">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img
            src="https://images.unsplash.com/photo-1563453392212-326f5e854473?w=900&q=80"
            alt="Housekeeping staff cleaning office"
            class="w-full h-full object-cover"
          />
        </div>
        <!-- floating stat card -->
        <div class="absolute -bottom-5 -right-4 sm:-right-6 bg-brand-dark text-white rounded-xl px-5 py-4 shadow-xl hidden sm:block">
          <p class="text-brand-yellow font-display font-black text-2xl leading-none">24/7</p>
          <p class="text-white/70 text-sm mt-0.5">Available Shifts</p>
        </div>
      </div>

      <!-- text -->
      <div class="order-1 lg:order-2">
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3 fade-up">Service Overview</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-3xl md:text-4xl text-brand-dark leading-none mb-4 fade-up" style="animation-delay:0.05s">
          What Our Housekeeping<br/><span style="color:#C9A91E;">Service Includes</span>
        </h2>
        <div class="y-divider-center mb-6 fade-up" style="animation-delay:0.1s"></div>

        <div class="space-y-4 fade-up" style="animation-delay:0.15s">
          <p class="text-gray-500 text-base leading-relaxed">
            Our housekeeping service provides trained, uniformed, and supervisor-monitored cleaning staff for daily, weekly, and deep-cleaning requirements. We supply the right number of staff based on your site size and footfall, covering every area from floors and washrooms to pantries and common zones.
          </p>
          <p class="text-gray-500 text-base leading-relaxed">
            All housekeeping staff are background verified, groomed, briefed on site-specific protocols, and supported by a replacement system that ensures your property is never understaffed.
          </p>
        </div>

        <div class="grid grid-cols-2 gap-3 mt-7 fade-up" style="animation-delay:0.2s">
          <div class="flex items-center gap-2 text-sm text-gray-600">
            <div class="w-5 h-5 rounded bg-brand-yellow flex items-center justify-center flex-shrink-0">
              <i class="fa fa-check text-brand-dark text-[14px]"></i>
            </div>
            Background verified staff
          </div>
          <div class="flex items-center gap-2 text-sm text-gray-600">
            <div class="w-5 h-5 rounded bg-brand-yellow flex items-center justify-center flex-shrink-0">
              <i class="fa fa-check text-brand-dark text-[14px]"></i>
            </div>
            Uniformed & groomed
          </div>
          <div class="flex items-center gap-2 text-sm text-gray-600">
            <div class="w-5 h-5 rounded bg-brand-yellow flex items-center justify-center flex-shrink-0">
              <i class="fa fa-check text-brand-dark text-[14px]"></i>
            </div>
            Supervisor monitored
          </div>
          <div class="flex items-center gap-2 text-sm text-gray-600">
            <div class="w-5 h-5 rounded bg-brand-yellow flex items-center justify-center flex-shrink-0">
              <i class="fa fa-check text-brand-dark text-[14px]"></i>
            </div>
            Replacement support
          </div>
          <div class="flex items-center gap-2 text-sm text-gray-600">
            <div class="w-5 h-5 rounded bg-brand-yellow flex items-center justify-center flex-shrink-0">
              <i class="fa fa-check text-brand-dark text-[14px]"></i>
            </div>
            Daily & contract-based
          </div>
          <div class="flex items-center gap-2 text-sm text-gray-600">
            <div class="w-5 h-5 rounded bg-brand-yellow flex items-center justify-center flex-shrink-0">
              <i class="fa fa-check text-brand-dark text-[14px]"></i>
            </div>
            Covering all Delhi NCR
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     3. SUITABLE FOR — light gray
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Who It's For</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-3xl md:text-4xl text-brand-dark mb-4">Suitable For</h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 max-w-2xl mx-auto text-lg leading-relaxed">
        Our housekeeping staff are deployed across a wide range of properties and site types, each with a customised cleaning schedule and duty plan.
      </p>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">

      <div class="suitable-card bg-white border border-gray-200 rounded-xl p-5 text-center fade-up">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3">
          <i class="fa fa-building text-brand-dark text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-base capitalize leading-snug">Corporate Offices</h4>
        <p class="text-gray-500 text-sm mt-1 leading-relaxed">Daily floor, cabin & common area cleaning.</p>
      </div>

      <div class="suitable-card bg-white border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.05s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3">
          <i class="fa fa-home text-brand-dark text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-base capitalize leading-snug">Residential Societies</h4>
        <p class="text-gray-500 text-sm mt-1 leading-relaxed">Lobby, lift, corridor & common area upkeep.</p>
      </div>

      <div class="suitable-card bg-white border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.1s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3">
          <i class="fa fa-hospital text-brand-dark text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-base capitalize leading-snug">Hospitals & Clinics</h4>
        <p class="text-gray-500 text-sm mt-1 leading-relaxed">Hygienic cleaning for wards, OPD & corridors.</p>
      </div>

      <div class="suitable-card bg-white border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.15s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3">
          <i class="fa fa-school text-brand-dark text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-base capitalize leading-snug">Schools & Colleges</h4>
        <p class="text-gray-500 text-sm mt-1 leading-relaxed">Classrooms, washrooms & campus maintenance.</p>
      </div>

      <div class="suitable-card bg-white border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.2s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3">
          <i class="fa fa-store text-brand-dark text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-base capitalize leading-snug">Malls & Retail Stores</h4>
        <p class="text-gray-500 text-sm mt-1 leading-relaxed">High-footfall floor & washroom cleaning.</p>
      </div>

      <div class="suitable-card bg-white border border-gray-200 rounded-xl p-5 text-center fade-up">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3">
          <i class="fa fa-industry text-brand-dark text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-base capitalize leading-snug">Factories & Plants</h4>
        <p class="text-gray-500 text-sm mt-1 leading-relaxed">Industrial site hygiene and floor upkeep.</p>
      </div>

      <div class="suitable-card bg-white border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.05s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3">
          <i class="fa fa-warehouse text-brand-dark text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-base capitalize leading-snug">Warehouses</h4>
        <p class="text-gray-500 text-sm mt-1 leading-relaxed">Storage area and loading bay cleaning support.</p>
      </div>

      <div class="suitable-card bg-white border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.1s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3">
          <i class="fa fa-calendar-check text-brand-dark text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-base capitalize leading-snug">Events & Functions</h4>
        <p class="text-gray-500 text-sm mt-1 leading-relaxed">Pre, during & post-event cleaning teams.</p>
      </div>

      <div class="suitable-card bg-white border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.15s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3">
          <i class="fa fa-hotel text-brand-dark text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-base capitalize leading-snug">Commercial Buildings</h4>
        <p class="text-gray-500 text-sm mt-1 leading-relaxed">Multi-floor commercial property cleaning.</p>
      </div>

      <div class="suitable-card bg-white border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.2s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3">
          <i class="fa fa-plane text-brand-dark text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-base capitalize leading-snug">Institutions & Govt. Offices</h4>
        <p class="text-gray-500 text-sm mt-1 leading-relaxed">Regular cleaning for institutional premises.</p>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     4. DUTIES & RESPONSIBILITIES — DARK
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-brand-dark">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-12 fade-up">
      <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Scope of Work</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-3xl md:text-4xl text-white mb-4">Duties &amp; Responsibilities</h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-white/60 max-w-2xl mx-auto text-lg leading-relaxed">
        Our housekeeping staff follow a structured daily duty checklist tailored to your site, ensuring every area is covered without gaps.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

      <div class="bg-white/5 border border-white/10 rounded-xl p-6 fade-up group hover:border-brand-yellow transition-colors">
        <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-water text-brand-yellow group-hover:text-brand-dark text-base transition-colors"></i>
        </div>
        <h4 class="font-display font-bold text-white capitalize text-base mb-2">Floor Cleaning</h4>
        <p class="text-white/55 text-sm leading-relaxed">Sweeping, mopping, scrubbing, and polishing of all floor surfaces including tiles, marble, and concrete.</p>
      </div>

      <div class="bg-white/5 border border-white/10 rounded-xl p-6 fade-up group hover:border-brand-yellow transition-colors" style="animation-delay:0.05s">
        <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-toilet text-brand-yellow group-hover:text-brand-dark text-base transition-colors"></i>
        </div>
        <h4 class="font-display font-bold text-white capitalize text-base mb-2">Washroom Cleaning</h4>
        <p class="text-white/55 text-sm leading-relaxed">Sanitising toilets, urinals, wash basins, mirrors, and floors to maintain hygiene standards throughout the day.</p>
      </div>

      <div class="bg-white/5 border border-white/10 rounded-xl p-6 fade-up group hover:border-brand-yellow transition-colors" style="animation-delay:0.1s">
        <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-wind text-brand-yellow group-hover:text-brand-dark text-base transition-colors"></i>
        </div>
        <h4 class="font-display font-bold text-white capitalize text-base mb-2">Dusting</h4>
        <p class="text-white/55 text-sm leading-relaxed">Wiping desks, furniture, cabinets, window sills, doors, fans, and fixtures to keep all surfaces dust-free.</p>
      </div>

      <div class="bg-white/5 border border-white/10 rounded-xl p-6 fade-up group hover:border-brand-yellow transition-colors" style="animation-delay:0.15s">
        <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-trash-alt text-brand-yellow group-hover:text-brand-dark text-base transition-colors"></i>
        </div>
        <h4 class="font-display font-bold text-white capitalize text-base mb-2">Waste Collection</h4>
        <p class="text-white/55 text-sm leading-relaxed">Regular emptying of dustbins, segregation of waste, and maintaining cleanliness of waste disposal areas.</p>
      </div>

      <div class="bg-white/5 border border-white/10 rounded-xl p-6 fade-up group hover:border-brand-yellow transition-colors" style="animation-delay:0.2s">
        <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-mug-hot text-brand-yellow group-hover:text-brand-dark text-base transition-colors"></i>
        </div>
        <h4 class="font-display font-bold text-white capitalize text-base mb-2">Pantry Cleaning</h4>
        <p class="text-white/55 text-sm leading-relaxed">Cleaning of pantry counters, sinks, microwave areas, and kitchen equipment used by office staff.</p>
      </div>

      <div class="bg-white/5 border border-white/10 rounded-xl p-6 fade-up group hover:border-brand-yellow transition-colors" style="animation-delay:0.25s">
        <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-door-open text-brand-yellow group-hover:text-brand-dark text-base transition-colors"></i>
        </div>
        <h4 class="font-display font-bold text-white capitalize text-base mb-2">Common Area Maintenance</h4>
        <p class="text-white/55 text-sm leading-relaxed">Lobbies, staircases, lifts, corridors, reception areas, meeting rooms, and car parks kept clean throughout.</p>
      </div>

      <div class="bg-white/5 border border-white/10 rounded-xl p-6 fade-up group hover:border-brand-yellow transition-colors">
        <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-spray-can text-brand-yellow group-hover:text-brand-dark text-base transition-colors"></i>
        </div>
        <h4 class="font-display font-bold text-white capitalize text-base mb-2">Sanitisation & Disinfection</h4>
        <p class="text-white/55 text-sm leading-relaxed">Periodic sanitisation of high-touch surfaces — door handles, switches, lift buttons, and shared equipment.</p>
      </div>

      <div class="bg-white/5 border border-white/10 rounded-xl p-6 fade-up group hover:border-brand-yellow transition-colors" style="animation-delay:0.05s">
        <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-soap text-brand-yellow group-hover:text-brand-dark text-base transition-colors"></i>
        </div>
        <h4 class="font-display font-bold text-white capitalize text-base mb-2">Consumables Replenishment</h4>
        <p class="text-white/55 text-sm leading-relaxed">Restocking soap dispensers, tissue rolls, hand sanitiser, and other washroom consumables as required.</p>
      </div>

      <div class="bg-white/5 border border-white/10 rounded-xl p-6 fade-up group hover:border-brand-yellow transition-colors" style="animation-delay:0.1s">
        <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-clipboard-list text-brand-yellow group-hover:text-brand-dark text-base transition-colors"></i>
        </div>
        <h4 class="font-display font-bold text-white capitalize text-base mb-2">Daily Duty Reporting</h4>
        <p class="text-white/55 text-sm leading-relaxed">Structured shift reports submitted to client and supervisor on work completion, issues, and consumable levels.</p>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     5. STAFF VERIFICATION & TRAINING — WHITE
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

      <!-- text -->
      <div>
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3 fade-up">Trust & Standards</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-3xl md:text-4xl text-brand-dark leading-none mb-4 fade-up" style="animation-delay:0.05s">
          Staff Verification<br/><span style="color:#C9A91E;">&amp; Training</span>
        </h2>
        <div class="y-divider-center mb-7 fade-up" style="animation-delay:0.1s"></div>

        <div class="space-y-4">

          <div class="flex gap-4 items-start fade-up" style="animation-delay:0.1s">
            <div class="w-9 h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-id-card text-brand-dark text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-lg">ID Verification</h4>
              <p class="text-gray-500 text-base mt-0.5 leading-relaxed">Aadhaar, voter ID, or government ID verified for every staff member before deployment.</p>
            </div>
          </div>

          <div class="flex gap-4 items-start fade-up" style="animation-delay:0.15s">
            <div class="w-9 h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-map-marker-alt text-brand-dark text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-lg">Address Verification</h4>
              <p class="text-gray-500 text-base mt-0.5 leading-relaxed">Permanent and current address confirmed and documented before placement.</p>
            </div>
          </div>

          <div class="flex gap-4 items-start fade-up" style="animation-delay:0.2s">
            <div class="w-9 h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-tshirt text-brand-dark text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-lg">Grooming &amp; Uniform Standards</h4>
              <p class="text-gray-500 text-base mt-0.5 leading-relaxed">All housekeeping staff are uniformed, neatly presented, and wear appropriate PPE for their duties.</p>
            </div>
          </div>

          <div class="flex gap-4 items-start fade-up" style="animation-delay:0.25s">
            <div class="w-9 h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-comments text-brand-dark text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-lg">Duty Briefing</h4>
              <p class="text-gray-500 text-base mt-0.5 leading-relaxed">Site-specific duty schedule, cleaning checklist, and conduct guidelines shared with staff before joining.</p>
            </div>
          </div>

          <div class="flex gap-4 items-start fade-up" style="animation-delay:0.3s">
            <div class="w-9 h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-user-tie text-brand-dark text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-lg">Supervisor Checks</h4>
              <p class="text-gray-500 text-base mt-0.5 leading-relaxed">Regular supervisor visits to monitor attendance, work quality, and client satisfaction.</p>
            </div>
          </div>

          <div class="flex gap-4 items-start fade-up" style="animation-delay:0.35s">
            <div class="w-9 h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-sync-alt text-brand-dark text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-lg">Replacement Support</h4>
              <p class="text-gray-500 text-base mt-0.5 leading-relaxed">Quick backup deployment to ensure your property is never left short-staffed on any working day.</p>
            </div>
          </div>

        </div>
      </div>

      <!-- image -->
      <div class="relative fade-up" style="animation-delay:0.1s">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img
            src="../assets/images/training1.png"
            alt="Housekeeping staff verification and training process"
            class="w-full h-full object-cover"
          />
        </div>
        <!-- accent strip -->
        <div class="absolute top-4 -left-3 w-1.5 h-24 bg-brand-yellow rounded-full hidden sm:block"></div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     6. DEPLOYMENT OPTIONS — light gray
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Flexible Staffing</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-3xl md:text-4xl text-brand-dark mb-4">Deployment Options</h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 max-w-2xl mx-auto text-lg leading-relaxed">
        Whether you need a single part-time cleaner or a full housekeeping team for a large site, we match the right deployment model to your requirement.
      </p>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">

      <div class="deploy-badge bg-white border border-gray-200 rounded-xl p-5 text-center fade-up">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3">
          <i class="fa fa-user-clock text-brand-dark text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize">Full-Time Staff</h4>
        <p class="text-gray-500 text-[14px] mt-1 leading-relaxed">8-hour or 12-hour daily placement.</p>
      </div>

      <div class="deploy-badge bg-white border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.05s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3">
          <i class="fa fa-clock text-brand-dark text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize">Part-Time Staff</h4>
        <p class="text-gray-500 text-[14px] mt-1 leading-relaxed">2–4 hour morning or evening slots.</p>
      </div>

      <div class="deploy-badge bg-white border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.1s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3">
          <i class="fa fa-layer-group text-brand-dark text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize">Shift-Based Staff</h4>
        <p class="text-gray-500 text-[14px] mt-1 leading-relaxed">Day, evening & night shift coverage.</p>
      </div>

      <div class="deploy-badge bg-white border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.15s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3">
          <i class="fa fa-file-contract text-brand-dark text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize">Monthly Contract</h4>
        <p class="text-gray-500 text-[14px] mt-1 leading-relaxed">Dedicated staff on monthly retainer.</p>
      </div>

      <div class="deploy-badge bg-white border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.2s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3">
          <i class="fa fa-users text-brand-dark text-sm sm:text-xl mb-1 block"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize">Event-Based</h4>
        <p class="text-gray-500 text-[14px] mt-1 leading-relaxed">Short-term teams for events & functions.</p>
      </div>

      <div class="deploy-badge bg-white border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.25s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3">
          <i class="fa fa-bolt text-brand-dark text-lg"></i>
        </div>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize">Emergency Replacement</h4>
        <p class="text-gray-500 text-[14px] mt-1 leading-relaxed">Quick backup on leave or absence days.</p>
      </div>

    </div>

    <!-- staffing guidance strip -->
    <div class="mt-10 bg-brand-dark rounded-2xl p-6 sm:p-8 fade-up">
      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="text-center border-r border-white/10 last:border-0 px-2">
          <p class="text-brand-yellow font-display font-black text-xl mb-1">Small Office</p>
          <p class="text-white/60 text-base">Up to 30 people — 1 full-time housekeeping staff</p>
        </div>
        <div class="text-center border-r border-white/10 last:border-0 px-2">
          <p class="text-brand-yellow font-display font-black text-xl mb-1">Medium Office</p>
          <p class="text-white/60 text-base">30–100 people — 2 to 4 staff members</p>
        </div>
        <div class="text-center border-r border-white/10 last:border-0 px-2">
          <p class="text-brand-yellow font-display font-black text-xl mb-1">Large Site</p>
          <p class="text-white/60 text-base">100+ people — full team with supervisor</p>
        </div>
        <div class="text-center px-2">
          <p class="text-brand-yellow font-display font-black text-xl mb-1">Not Sure?</p>
          <p class="text-white/60 text-base">Request a free site assessment from our team</p>
        </div>
      </div>
    </div>

  </div>
</section>


<!-- ══════════════════════════════════════════
     7. LEAD MAGNET — image dark background
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 relative overflow-hidden">
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.95) 0%, rgba(10,10,10,0.82) 100%), url('https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=1600&q=80') center/cover no-repeat;"></div>

  <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-center">

      <!-- copy -->
      <div class="fade-up">
        <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Free Download</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-white leading-none mb-4">
          Office &amp; Society<br/><span class="text-brand-yellow">Housekeeping Checklist</span>
        </h2>
        <p class="text-white/70 text-lg leading-relaxed mb-6">
          Use this checklist to review your current housekeeping coverage — which areas are being cleaned, how often, and what's being missed.
        </p>
        <ul class="space-y-2 text-base text-white/80">
          <li class="flex items-center gap-2.5">
            <div class="w-5 h-5 rounded bg-brand-yellow flex items-center justify-center flex-shrink-0">
              <i class="fa fa-check text-brand-dark text-[9px]"></i>
            </div>
            Room-by-room cleaning frequency guide
          </li>
          <li class="flex items-center gap-2.5">
            <div class="w-5 h-5 rounded bg-brand-yellow flex items-center justify-center flex-shrink-0">
              <i class="fa fa-check text-brand-dark text-[9px]"></i>
            </div>
            Washroom &amp; pantry hygiene audit points
          </li>
          <li class="flex items-center gap-2.5">
            <div class="w-5 h-5 rounded bg-brand-yellow flex items-center justify-center flex-shrink-0">
              <i class="fa fa-check text-brand-dark text-[9px]"></i>
            </div>
            Staffing count recommendation by site size
          </li>
          <li class="flex items-center gap-2.5">
            <div class="w-5 h-5 rounded bg-brand-yellow flex items-center justify-center flex-shrink-0">
              <i class="fa fa-check text-brand-dark text-[9px]"></i>
            </div>
            100% free — no obligation
          </li>
        </ul>
      </div>

      <!-- form -->
      <div class="bg-white rounded-2xl p-7 sm:p-8 fade-up" style="animation-delay:0.1s">
        <h3 class="font-display font-bold text-brand-dark capitalize text-xl mb-6">Get Free Checklist</h3>
        <form action="../includes/contact.php" method="POST" class="space-y-4">
          <input type="hidden" name="form_type" value="housekeeping_checklist" />

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
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Company / Society Name</label>
            <input type="text" name="company" placeholder="Enter name" class="input-field" />
          </div>

          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Site Type</label>
            <select name="site_type" class="input-field">
              <option value="">Select site type</option>
              <option>Corporate Office</option>
              <option>Residential Society</option>
              <option>Hospital or Clinic</option>
              <option>School or College</option>
              <option>Mall or Retail</option>
              <option>Factory or Warehouse</option>
              <option>Commercial Building</option>
              <option>Event / Function</option>
            </select>
          </div>

          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Location</label>
            <select name="location" class="input-field">
              <option value="">Select area</option>
              <option>Delhi</option>
              <option>Noida</option>
              <option>Greater Noida</option>
              <option>Gurgaon</option>
              <option>Faridabad</option>
              <option>Ghaziabad</option>
              <option>Manesar</option>
              <option>Sonipat</option>
              <option>Other NCR</option>
            </select>
          </div>

          <button type="submit" class="w-full bg-brand-dark hover:bg-gray-800 text-white font-bold py-3.5 rounded-lg capitalize tracking-wider text-sm transition-colors flex items-center justify-center gap-2">
            <i class="fa fa-download text-base"></i> Get Free Checklist
          </button>
        </form>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     8. FAQs — WHITE
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-white">
  <div class="max-w-3xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2">Common Questions</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark mb-1">Frequently Asked</h2>
      <div class="y-divider-center mx-auto mt-4"></div>
    </div>

    <div class="space-y-3">

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">How many housekeeping staff do I need for my property?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-base leading-relaxed">It depends on your site size, type, and footfall. As a general guide, a small office of up to 30 people needs 1 staff member, medium offices need 2–4, and larger sites need a full team. Contact us for a free assessment specific to your property.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.05s">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can housekeeping staff be replaced if absent?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. We provide quick replacement support when staff are on leave or unavailable, so your property maintains consistent cleaning every day without disruption.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.1s">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Are all housekeeping staff background verified?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. Every housekeeping staff member undergoes ID verification, address verification, and reference checks before being placed at any client site.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.15s">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">What duty hours are available for housekeeping staff?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-base leading-relaxed">We offer flexible duty options including 2–4 hour part-time slots, 8-hour full-day shifts, 12-hour duty, and night shift coverage depending on your site's operational hours.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.2s">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you provide uniforms for housekeeping staff?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text- leading-relaxed">Yes. All our housekeeping staff are uniformed and properly groomed before deployment. They wear appropriate work attire and PPE to maintain a professional appearance at your property.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.25s">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you provide supervisors for housekeeping teams?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. For larger sites with multiple housekeeping staff, we provide supervisor-led deployment to monitor attendance, work quality, duty completion, and escalate any issues to the client immediately.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.3s">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can housekeeping staff be hired for a one-day event only?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes, we offer event-based and short-term housekeeping deployment for functions, corporate events, exhibitions, and any single-day or multi-day requirements.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     9. FINAL CTA — YELLOW
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-brand-yellow">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center fade-up">
    <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark leading-none mb-4">
      Need Housekeeping Staff<br/>for Your Site?
    </h2>
    <p class="text-brand-dark/70 text-base sm:text-lg mb-8 max-w-lg mx-auto">
      Share your property details and we'll recommend the right housekeeping plan. Free quote, no obligation.
    </p>
    <div class="flex flex-wrap justify-center gap-4">
      <a href="../contact" class="bg-brand-dark text-white hover:bg-gray-800 font-bold px-8 py-3.5 rounded capitalize tracking-wider text-base transition-colors shadow-lg">
        Get Free Quote
      </a>
      <a href="tel:+919430695171" class="flex items-center gap-2 border-2 border-brand-dark/60 text-brand-dark hover:border-brand-dark font-bold px-8 py-3.5 rounded capitalize tracking-wider text-base transition-colors">
        <i class="fa fa-phone"></i> +91 94306 95171
      </a>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>