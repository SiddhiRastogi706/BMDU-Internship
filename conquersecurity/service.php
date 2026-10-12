<?php
$page_title       = "Our Services | Security Guards, Facility Management & Technology Support - Conquer Services";
$page_description = "Complete security and facility manpower solutions across Delhi NCR — security guard services, facility management, manpower supply, technology support, and industry-specific deployments.";
$active_page      = "services";
$base_path        = "";
include 'includes/header.php';
?>

<style>
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
  .service-card { transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s; }
  .service-card:hover { transform: translateY(-6px); box-shadow: 0 24px 48px rgba(0,0,0,0.10); border-color: #F2CF4A; }
  .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
  .no-scrollbar::-webkit-scrollbar { display: none; }
</style>

<!-- ══════════════════════════════════════════
     HERO SECTION
═══════════════════════════════════════════ -->
<section class="relative min-h-[20rem] sm:h-80 md:h-96 lg:h-[28rem] overflow-hidden bg-brand-dark py-10 sm:py-0">
  <div class="absolute inset-0">
    <img src="assets/images/banner/service-banner.png" alt="Security and facility management services Delhi NCR" class="w-full h-full object-cover object-[center_30%]" />
  </div>
  <div class="page-hero-overlay absolute inset-0"></div>
  <div class="relative z-10 h-full flex flex-col justify-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
      
      <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Complete Manpower Solutions</p>
      <h1 class="font-display font-black capitalize leading-tight sm:leading-none text-white mb-4 break-words">
        <span class="text-2xl sm:text-4xl md:text-5xl lg:text-5xl block">Security & Facility</span>
        <span class="text-2xl sm:text-4xl md:text-5xl lg:text-5xl text-brand-yellow block">Management Services</span>
        <span class="text-base sm:text-xl md:text-4xl text-white/80 block mt-2">in Delhi NCR</span>
      </h1>
      <p class="text-white/70 text-base sm:text-lg max-w-xl leading-relaxed">
        Trained, verified, and professionally managed manpower for offices, industries, residential societies, hospitals, schools, warehouses, events, and commercial properties across Delhi NCR.
      </p>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-brand-yellow"></div>
</section>


<!-- ══════════════════════════════════════════
     QUICK NAV — sticky service anchors
═══════════════════════════════════════════ -->
<div class="bg-white border-b border-gray-200 sticky top-16 sm:top-18 lg:top-20 z-40 overflow-x-auto no-scrollbar">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex gap-0 whitespace-nowrap">
      <a href="#security-guards" class="text-xs sm:text-sm font-semibold text-gray-500 hover:text-brand-dark px-3 sm:px-5 py-3 sm:py-4 border-b-2 border-transparent hover:border-brand-yellow transition-all capitalize tracking-wider">Security Guards</a>
      <a href="#facility-management" class="text-xs sm:text-sm font-semibold text-gray-500 hover:text-brand-dark px-3 sm:px-5 py-3 sm:py-4 border-b-2 border-transparent hover:border-brand-yellow transition-all capitalize tracking-wider">Facility Management</a>
      <a href="#manpower-services" class="text-xs sm:text-sm font-semibold text-gray-500 hover:text-brand-dark px-3 sm:px-5 py-3 sm:py-4 border-b-2 border-transparent hover:border-brand-yellow transition-all capitalize tracking-wider">Manpower Services</a>
      <a href="#technology-support" class="text-xs sm:text-sm font-semibold text-gray-500 hover:text-brand-dark px-3 sm:px-5 py-3 sm:py-4 border-b-2 border-transparent hover:border-brand-yellow transition-all capitalize tracking-wider">Technology & Support</a>
      <a href="#industries" class="text-xs sm:text-sm font-semibold text-gray-500 hover:text-brand-dark px-3 sm:px-5 py-3 sm:py-4 border-b-2 border-transparent hover:border-brand-yellow transition-all capitalize tracking-wider">Industries</a>
    </div>
  </div>
</div>


<!-- ══════════════════════════════════════════
     TRUST STRIP
═══════════════════════════════════════════ -->
<div class="bg-brand-yellow py-4">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid grid-cols-2 sm:flex sm:flex-wrap justify-items-center sm:justify-center gap-x-4 sm:gap-x-10 gap-y-3 sm:gap-y-2 text-brand-dark text-[14px] sm:text-base font-bold capitalize tracking-wider">
      <span class="flex items-center justify-center sm:justify-start gap-1.5 text-center"><i class="fa fa-check-circle"></i> Trained & Verified Manpower</span>
      <span class="flex items-center justify-center sm:justify-start gap-1.5 text-center"><i class="fa fa-check-circle"></i> 500+ Happy Clients</span>
      <span class="flex items-center justify-center sm:justify-start gap-1.5 text-center"><i class="fa fa-check-circle"></i> Delhi NCR Coverage</span>
      <span class="flex items-center justify-center sm:justify-start gap-1.5 text-center"><i class="fa fa-check-circle"></i> 24/7 Supervision</span>
      <span class="flex items-center justify-center sm:justify-start gap-1.5 text-center"><i class="fa fa-check-circle"></i> Quick Deployment</span>
    </div>
  </div>
</div>


<!-- ══════════════════════════════════════════
     SECTION 1 — SECURITY GUARD SERVICES (WHITE)
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-white" id="security-guards">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">

    <!-- Section header -->
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10 sm:mb-12 fade-up">
      <div>
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">01 — Core Service</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight sm:leading-none mb-1">Security Guard<br/><span style="color:#C9A91E;">Services</span></h2>
        <div class="y-divider-center mt-4"></div>
      </div>
      <a href="security-guards-services" class="self-start sm:self-auto inline-flex items-center gap-2 border-2 border-brand-dark text-brand-dark hover:bg-brand-dark hover:text-white font-bold px-5 py-2.5 rounded capitalize tracking-wider text-xs transition-colors flex-shrink-0">
        View All Security Services <i class="fa fa-arrow-right text-xs"></i>
      </a>
    </div>

    <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-center mb-12">
      <div class="fade-up">
        <p class="text-gray-500 text-lg leading-relaxed mb-6">
          We provide trained, verified, and professionally managed security guards for every type of property across Delhi NCR. Every guard is background-checked, uniformed, briefed on site-specific duties, and monitored by supervisors — so your site is always covered.
        </p>
        <div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-2 gap-3 mb-6">
          <div class="flex items-center gap-2 text-base text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> Gate control & entry management</div>
          <div class="flex items-center gap-2 text-base text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> Visitor verification</div>
          <div class="flex items-center gap-2 text-base text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> Patrolling rounds</div>
          <div class="flex items-center gap-2 text-base text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> Parking management</div>
          <div class="flex items-center gap-2 text-base text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> Emergency response</div>
          <div class="flex items-center gap-2 text-base text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> Incident reporting</div>
          <div class="flex items-center gap-2 text-base text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> CCTV coordination</div>
          <div class="flex items-center gap-2 text-base text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-xs flex-shrink-0"></i> Supervisor monitoring</div>
        </div>
        <div class="flex flex-wrap gap-3">
          <a href="contact" class="bg-brand-dark hover:bg-gray-800 text-white font-bold px-6 py-3 rounded capitalize tracking-wider text-sm transition-colors">Get Free Quote</a>
          
        </div>
      </div>
      <div class="relative fade-up mt-6 lg:mt-0" style="animation-delay:0.1s">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="assets/images/service1.png" alt="Security guards on duty" class="w-full h-full object-cover" />
        </div>
        <div class="absolute -bottom-5 -right-5 bg-brand-yellow rounded-2xl p-4 sm:p-5 shadow-xl text-center">
          <div class="font-display font-black text-2xl sm:text-3xl text-brand-dark leading-none">24/7</div>
          <div class="text-brand-dark font-bold text-[10px] sm:text-xs capitalize tracking-wider mt-1">Coverage</div>
        </div>
      </div>
    </div>

    <!-- Guard type cards -->
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
      <a href="security-guard-services/unarmed-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 group fade-up">
        <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 group-hover:bg-brand-yellow transition-colors"><i class="fa fa-shield-alt text-brand-dark text-base"></i></div>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize leading-tight mb-1.5">Unarmed Security Guards</h3>
        <p class="text-gray-500 text-[18px] leading-relaxed">Offices, societies, schools, hospitals.</p>
        <div class="mt-3 text-brand-dark text-[14px] font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>
      <a href="security-guard-services/armed-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 group fade-up" style="animation-delay:0.05s">
        <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 group-hover:bg-brand-yellow transition-colors"><i class="fa fa-user-shield text-brand-dark text-base"></i></div>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize leading-tight mb-1.5">Armed Security Guards</h3>
        <p class="text-gray-500 text-[18px] leading-relaxed">Banks, cash transit, high-risk sites.</p>
        <div class="mt-3 text-brand-dark text-[14px] font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>
      <a href="security-guard-services/lady-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 group fade-up" style="animation-delay:0.1s">
        <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 group-hover:bg-brand-yellow transition-colors"><i class="fa fa-venus text-brand-dark text-base"></i></div>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize leading-tight mb-1.5">Lady Security Guards</h3>
        <p class="text-gray-500 text-[18px] leading-relaxed">Hospitals, schools, malls, events.</p>
        <div class="mt-3 text-brand-dark text-[14px] font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>
      <a href="security-guard-services/vip-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 group fade-up" style="animation-delay:0.15s">
        <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 group-hover:bg-brand-yellow transition-colors"><i class="fa fa-star text-brand-dark text-base"></i></div>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize leading-tight mb-1.5">VIP & PSO Security</h3>
        <p class="text-gray-500 text-[18px] leading-relaxed">Executives, HNIs, VIP personnel.</p>
        <div class="mt-3 text-brand-dark text-[14px] font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>
      <a href="security-guard-services/escort-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 group fade-up" style="animation-delay:0.2s">
        <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 group-hover:bg-brand-yellow transition-colors"><i class="fa fa-car text-brand-dark text-base"></i></div>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize leading-tight mb-1.5">Escort Security Services</h3>
        <p class="text-gray-500 text-[18px] leading-relaxed">Cash, cargo, and personnel movement.</p>
        <div class="mt-3 text-brand-dark text-[14px] font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[9px]"></i></div>
      </a>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     SECTION 2 — FACILITY MANAGEMENT (light gray)
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-gray-50" id="facility-management">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">

    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10 sm:mb-12 fade-up">
      <div>
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">02 — Core Service</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight sm:leading-none mb-1">Facility Management<br/><span style="color:#C9A91E;">Services</span></h2>
        <div class="y-divider-center mt-4"></div>
      </div>
      <a href="facility-management" class="self-start sm:self-auto inline-flex items-center gap-2 border-2 border-brand-dark text-brand-dark hover:bg-brand-dark hover:text-white font-bold px-5 py-2.5 rounded capitalize tracking-wider text-base transition-colors flex-shrink-0">
        View All Facility Services <i class="fa fa-arrow-right text-base"></i>
      </a>
    </div>

    <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-center mb-12">
      <div class="relative fade-up order-2 lg:order-1 mt-6 lg:mt-0">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="assets/images/service3.png" alt="Facility management services" class="w-full h-full object-cover" />
        </div>
        <div class="absolute -bottom-5 -left-5 bg-brand-dark rounded-2xl p-4 sm:p-5 shadow-xl text-center">
          <div class="font-display font-black text-xl sm:text-2xl text-brand-yellow leading-none">8+</div>
          <div class="text-white font-bold text-[9px] sm:text-[10px] uppercase tracking-wider mt-1">Service Types</div>
        </div>
      </div>
      <div class="fade-up order-1 lg:order-2">
        <p class="text-gray-500 text-lg leading-relaxed mb-6">
          Beyond security guards, we provide a full range of trained facility staff — from housekeeping and office boys to bouncers, drivers, helpers, garden staff, and fire safety personnel. Every team member is groomed, uniformed, briefed, and supervised.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
          <div class="flex items-center gap-3 bg-white border border-gray-200 rounded-xl p-4"><div class="w-9 h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0"><i class="fa fa-broom text-brand-dark text-sm"></i></div><span class="text-brand-dark font-semibold text-base">Housekeeping Staff</span></div>
          <div class="flex items-center gap-3 bg-white border border-gray-200 rounded-xl p-4"><div class="w-9 h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0"><i class="fa fa-mug-hot text-brand-dark text-sm"></i></div><span class="text-brand-dark font-semibold text-base">Office Boy & Pantry</span></div>
          <div class="flex items-center gap-3 bg-white border border-gray-200 rounded-xl p-4"><div class="w-9 h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0"><i class="fa fa-concierge-bell text-brand-dark text-sm"></i></div><span class="text-brand-dark font-semibold text-base">Receptionist & Front Desk</span></div>
          <div class="flex items-center gap-3 bg-white border border-gray-200 rounded-xl p-4"><div class="w-9 h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0"><i class="fa fa-user-shield text-brand-dark text-sm"></i></div><span class="text-brand-dark font-semibold text-base">Bouncers</span></div>
          <div class="flex items-center gap-3 bg-white border border-gray-200 rounded-xl p-4"><div class="w-9 h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0"><i class="fa fa-car text-brand-dark text-sm"></i></div><span class="text-brand-dark font-semibold text-base">Drivers & Chauffeurs</span></div>
          <div class="flex items-center gap-3 bg-white border border-gray-200 rounded-xl p-4"><div class="w-9 h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0"><i class="fa fa-people-carry text-brand-dark text-sm"></i></div><span class="text-brand-dark font-semibold text-base">Helpers & Labour</span></div>
          <div class="flex items-center gap-3 bg-white border border-gray-200 rounded-xl p-4"><div class="w-9 h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0"><i class="fa fa-leaf text-brand-dark text-sm"></i></div><span class="text-brand-dark font-semibold text-base">Garden & Maintenance</span></div>
          <div class="flex items-center gap-3 bg-white border border-gray-200 rounded-xl p-4"><div class="w-9 h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0"><i class="fa fa-fire-extinguisher text-brand-dark text-sm"></i></div><span class="text-brand-dark font-semibold text-base">Fire & Safety Personnel</span></div>
        </div>
        <div class="mt-6 flex flex-wrap gap-3">
          
          <a href="contact" class="border-2 border-brand-dark text-brand-dark hover:bg-brand-dark hover:text-white font-semibold px-6 py-3 rounded capitalize tracking-wider text-sm transition-colors">Get Free Quote</a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     SECTION 3 — MANPOWER SERVICES (WHITE)
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-white" id="manpower-services">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">

    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10 sm:mb-12 fade-up">
      <div>
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">03 — Core Service</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight sm:leading-none mb-1">Manpower<br/><span style="color:#C9A91E;">Services</span></h2>
        <div class="y-divider-center mt-4"></div>
      </div>
      <a href="manpower-services" class="self-start sm:self-auto inline-flex items-center gap-2 border-2 border-brand-dark text-brand-dark hover:bg-brand-dark hover:text-white font-bold px-5 py-2.5 rounded capitalize tracking-wider text-base transition-colors flex-shrink-0">
        View Manpower Services <i class="fa fa-arrow-right text-xs"></i>
      </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-5 mb-10">

      <div class="service-card bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up">
        <i class="fa fa-users text-brand-dark text-2xl mb-4 block"></i>
        <h3 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Contract Staffing</h3>
        <p class="text-gray-500 text-base leading-relaxed">Short-term and long-term contract manpower supply for factories, offices, warehouses, and commercial sites — with full compliance.</p>
      </div>

      <div class="service-card bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.07s">
        <i class="fa fa-user-tie text-brand-dark text-2xl mb-4 block"></i>
        <h3 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Skilled & Semi-Skilled Labour</h3>
        <p class="text-gray-500 text-base leading-relaxed">Skilled technicians, helpers, loaders, and support staff supplied for industrial and commercial operations with documented background checks.</p>
      </div>

      <div class="service-card bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.14s">
        <i class="fa fa-calendar-alt text-brand-dark text-2xl mb-4 block"></i>
        <h3 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Event & Project Staffing</h3>
        <p class="text-gray-500 text-base leading-relaxed">Flexible manpower for events, construction phases, seasonal peak periods, and short-duration project requirements.</p>
      </div>

      <div class="service-card bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.07s">
        <i class="fa fa-file-invoice text-brand-dark text-2xl mb-4 block"></i>
        <h3 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">PF / ESI Compliant Payroll</h3>
        <p class="text-gray-500 text-base leading-relaxed">Full statutory compliance including PF, ESI, and GST billing for all deployed manpower — removing client liability on labour law matters.</p>
      </div>

      <div class="service-card bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.14s">
        <i class="fa fa-sync-alt text-brand-dark text-2xl mb-4 block"></i>
        <h3 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Replacement Support</h3>
        <p class="text-gray-500 text-base leading-relaxed">Quick replacement of absent or underperforming staff to ensure your operations remain uninterrupted at all times.</p>
      </div>

      <div class="service-card bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.21s">
        <i class="fa fa-clipboard-check text-brand-dark text-2xl mb-4 block"></i>
        <h3 class="font-display font-bold capitalize text-brand-dark text-lg mb-2">Site-Specific Training</h3>
        <p class="text-gray-500 text-base leading-relaxed">All manpower is briefed on site-specific SOPs, shift duties, safety protocols, and escalation procedures before deployment.</p>
      </div>

    </div>

    <div class="bg-brand-dark rounded-2xl p-6 sm:p-8 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 fade-up">
      <div>
        <h3 class="font-display font-black capitalize text-white text-lg sm:text-xl mb-2">Need Contract Manpower for Your Site?</h3>
        <p class="text-gray-400 text-base max-w-xl">We'll help you estimate the right number and type of staff, handle all compliance documentation, and deploy within your timeline.</p>
      </div>
      <a href="contact" class="bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold px-7 py-3.5 rounded capitalize tracking-wider text-sm transition-colors whitespace-nowrap flex-shrink-0 w-full sm:w-auto text-center">
        Request Manpower Quote
      </a>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     SECTION 4 — TECHNOLOGY & SUPPORT (DARK)
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-brand-dark" id="technology-support">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">

    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10 sm:mb-12 fade-up">
      <div>
        <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">04 — Core Service</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-white leading-tight sm:leading-none mb-1">Technology &<br/><span class="text-brand-yellow">Support Services</span></h2>
        <div class="y-divider-center mt-4"></div>
      </div>
      <a href="technology-support" class="self-start sm:self-auto inline-flex items-center gap-2 border-2 border-brand-yellow text-brand-yellow hover:bg-brand-yellow hover:text-brand-dark font-bold px-5 py-2.5 rounded capitalize tracking-wider text-base transition-colors flex-shrink-0">
        View Technology Services <i class="fa fa-arrow-right text-xs"></i>
      </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-10">

      <div class="bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl p-6 fade-up transition-colors">
        <i class="fa fa-video text-brand-yellow text-2xl mb-4 block"></i>
        <h3 class="font-display font-bold capitalize text-white text-lg mb-2">CCTV Monitoring</h3>
        <p class="text-gray-400 text-base leading-relaxed">24/7 surveillance monitoring for offices, factories, residential societies, warehouses, and commercial properties.</p>
      </div>

      <div class="bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl p-6 fade-up transition-colors" style="animation-delay:0.07s">
        <i class="fa fa-key text-brand-yellow text-2xl mb-4 block"></i>
        <h3 class="font-display font-bold capitalize text-white text-lg mb-2">Access Control</h3>
        <p class="text-gray-400 text-base leading-relaxed">Biometric and card-based access control system management, installation support, and daily operational monitoring.</p>
      </div>

      <div class="bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl p-6 fade-up transition-colors" style="animation-delay:0.14s">
        <i class="fa fa-id-badge text-brand-yellow text-2xl mb-4 block"></i>
        <h3 class="font-display font-bold capitalize text-white text-lg mb-2">Visitor Management</h3>
        <p class="text-gray-400 text-base leading-relaxed">Digital and manual visitor logging systems, host verification, and pass issuance managed by trained front-desk security staff.</p>
      </div>

      <div class="bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl p-6 fade-up transition-colors" style="animation-delay:0.21s">
        <i class="fa fa-search text-brand-yellow text-2xl mb-4 block"></i>
        <h3 class="font-display font-bold capitalize text-white text-lg mb-2">Security Audit</h3>
        <p class="text-gray-400 text-base leading-relaxed">Comprehensive on-site security audit to identify vulnerabilities in access control, perimeter coverage, and response protocols.</p>
      </div>

      <div class="bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl p-6 fade-up transition-colors">
        <i class="fa fa-running text-brand-yellow text-2xl mb-4 block"></i>
        <h3 class="font-display font-bold capitalize text-white text-lg mb-2">Patrolling & QRT</h3>
        <p class="text-gray-400 text-base leading-relaxed">Scheduled and surprise patrol rounds with a Quick Response Team on standby for immediate incident response across your premises.</p>
      </div>

      <div class="bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl p-6 fade-up transition-colors" style="animation-delay:0.07s">
        <i class="fa fa-fire-extinguisher text-brand-yellow text-2xl mb-4 block"></i>
        <h3 class="font-display font-bold capitalize text-white text-lg mb-2">Fire & Safety Personnel</h3>
        <p class="text-gray-400 text-base leading-relaxed">Trained fire safety officers deployed for fire watch duties, fire equipment checks, and emergency evacuation at commercial and industrial sites.</p>
      </div>

      <div class="bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl p-6 fade-up transition-colors" style="animation-delay:0.14s">
        <i class="fa fa-exclamation-triangle text-brand-yellow text-2xl mb-4 block"></i>
        <h3 class="font-display font-bold capitalize text-white text-lg mb-2">Emergency Response</h3>
        <p class="text-gray-400 text-base leading-relaxed">Trained emergency response teams providing first-action cover for fire, medical, and security incidents with defined escalation chains.</p>
      </div>

      <div class="bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl p-6 fade-up transition-colors" style="animation-delay:0.21s">
        <i class="fa fa-headset text-brand-yellow text-2xl mb-4 block"></i>
        <h3 class="font-display font-bold capitalize text-white text-lg mb-2">24/7 Control Room Support</h3>
        <p class="text-gray-400 text-base leading-relaxed">Round-the-clock monitoring and escalation support via a dedicated operations team for all deployed sites and large campuses.</p>
      </div>

    </div>

    <div class="bg-white/5 border border-brand-yellow/30 rounded-2xl p-6 sm:p-8 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 fade-up">
      <div>
        <h3 class="font-display font-black capitalize text-white text-lg sm:text-xl mb-2">Need a Technology Security Assessment?</h3>
        <p class="text-gray-400 text-base max-w-xl">We'll assess your site's current security setup, identify gaps, and recommend the right technology support stack for your property.</p>
      </div>
      <a href="contact" class="bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold px-7 py-3.5 rounded capitalize tracking-wider text-sm transition-colors whitespace-nowrap flex-shrink-0 w-full sm:w-auto text-center">
        Request Free Assessment
      </a>
    </div>

  </div>
</section>


<!-- ══════════════════════════════════════════
     SECTION 5 — INDUSTRIES WE SERVE (light gray)
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-gray-50" id="industries">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">

    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10 sm:mb-12 fade-up">
      <div>
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">05 — Who We Serve</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight sm:leading-none mb-1">Industries<br/><span style="color:#C9A91E;">We Serve</span></h2>
        <div class="y-divider-center mt-4"></div>
      </div>
      <a href="industries" class="self-start sm:self-auto inline-flex items-center gap-2 border-2 border-brand-dark text-brand-dark hover:bg-brand-dark hover:text-white font-bold px-5 py-2.5 rounded capitalize tracking-wider text-base transition-colors flex-shrink-0">
        All Industries <i class="fa fa-arrow-right text-xs"></i>
      </a>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">

      <a href="industries/offices" class="group relative rounded-xl overflow-hidden aspect-square fade-up">
        <img src="assets/images/industry2.png" alt="Corporate Offices" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-3 sm:p-4">
          <i class="fa fa-building text-brand-yellow text-lg sm:text-xl mb-1.5"></i>
          <h3 class="font-display font-bold text-white text-xs sm:text-sm capitalize leading-tight">Corporate Offices</h3>
        </div>
      </a>

      <a href="industries/industrial" class="group relative rounded-xl overflow-hidden aspect-square fade-up" style="animation-delay:0.05s">
        <img src="assets/images/industry1.png" alt="Factories" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-3 sm:p-4">
          <i class="fa fa-industry text-brand-yellow text-lg sm:text-xl mb-1.5"></i>
          <h3 class="font-display font-bold text-white text-xs sm:text-sm capitalize leading-tight">Factories & Industrial</h3>
        </div>
      </a>

      <a href="industries/residential" class="group relative rounded-xl overflow-hidden aspect-square fade-up" style="animation-delay:0.1s">
        <img src="assets/images/industry3.png" alt="Residential Societies" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-3 sm:p-4">
          <i class="fa fa-home text-brand-yellow text-lg sm:text-xl mb-1.5"></i>
          <h3 class="font-display font-bold text-white text-xs sm:text-sm capitalize leading-tight">Residential Societies</h3>
        </div>
      </a>

      <a href="industries/banks" class="group relative rounded-xl overflow-hidden aspect-square fade-up" style="animation-delay:0.15s">
        <img src="assets/images/industry4.png" alt="Banks ATMs" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-3 sm:p-4">
          <i class="fa fa-university text-brand-yellow text-lg sm:text-xl mb-1.5"></i>
          <h3 class="font-display font-bold text-white text-xs sm:text-sm capitalize leading-tight">Banks & ATMs</h3>
        </div>
      </a>

      <a href="industries/hospitals" class="group relative rounded-xl overflow-hidden aspect-square fade-up" style="animation-delay:0.2s">
        <img src="assets/images/industry5.png" alt="Hospitals" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-3 sm:p-4">
          <i class="fa fa-hospital text-brand-yellow text-lg sm:text-xl mb-1.5"></i>
          <h3 class="font-display font-bold text-white text-xs sm:text-sm capitalize leading-tight">Hospitals</h3>
        </div>
      </a>

      <a href="industries/schools-colleges" class="group relative rounded-xl overflow-hidden aspect-square fade-up">
        <img src="assets/images/industry6.png" alt="Schools" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-3 sm:p-4">
          <i class="fa fa-graduation-cap text-brand-yellow text-lg sm:text-xl mb-1.5"></i>
          <h3 class="font-display font-bold text-white text-xs sm:text-sm capitalize leading-tight">Schools & Colleges</h3>
        </div>
      </a>

      <a href="industries/warehouses-logistics" class="group relative rounded-xl overflow-hidden aspect-square fade-up" style="animation-delay:0.05s">
        <img src="assets/images/industry7.png" alt="Warehouses" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-3 sm:p-4">
          <i class="fa fa-warehouse text-brand-yellow text-lg sm:text-xl mb-1.5"></i>
          <h3 class="font-display font-bold text-white text-xs sm:text-sm capitalize leading-tight">Warehouses & Logistics</h3>
        </div>
      </a>

      <a href="industries/construction" class="group relative rounded-xl overflow-hidden aspect-square fade-up" style="animation-delay:0.1s">
        <img src="assets/images/industry8.png" alt="Construction" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-3 sm:p-4">
          <i class="fa fa-hard-hat text-brand-yellow text-lg sm:text-xl mb-1.5"></i>
          <h3 class="font-display font-bold text-white text-xs sm:text-sm capitalize leading-tight">Construction Sites</h3>
        </div>
      </a>

      <a href="industries/retail" class="group relative rounded-xl overflow-hidden aspect-square fade-up" style="animation-delay:0.15s">
        <img src="assets/images/industry9.png" alt="Retail Malls" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-3 sm:p-4">
          <i class="fa fa-store text-brand-yellow text-lg sm:text-xl mb-1.5"></i>
          <h3 class="font-display font-bold text-white text-xs sm:text-sm capitalize leading-tight">Retail Stores & Malls</h3>
        </div>
      </a>

      <a href="industries/event-management" class="group relative rounded-xl overflow-hidden aspect-square fade-up" style="animation-delay:0.2s">
        <img src="assets/images/industry10.png" alt="Events" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-3 sm:p-4">
          <i class="fa fa-calendar-alt text-brand-yellow text-lg sm:text-xl mb-1.5"></i>
          <h3 class="font-display font-bold text-white text-xs sm:text-sm capitalize leading-tight">Events & Crowds</h3>
        </div>
      </a>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     WHY CHOOSE US — WHITE
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-12 sm:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">The Conquer Advantage</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-4">Why Choose<br/><span style="color:#C9A91E;">Conquer Services</span></h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 text-lg max-w-xl mx-auto leading-relaxed">Trusted by 500+ clients across Delhi NCR for security guards, facility manpower, and technology support — with 10+ years of operational experience.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-5">
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up text-center">
        <div class="w-14 h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4"><i class="fa fa-user-check text-brand-dark text-xl"></i></div>
        <h4 class="font-display font-bold text-brand-dark capitalize text-lg mb-2">Verified Manpower</h4>
        <p class="text-gray-500 text-base leading-relaxed">Every person is background-checked, document-verified, and supervisor-approved before deployment.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up text-center" style="animation-delay:0.07s">
        <div class="w-14 h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4"><i class="fa fa-bolt text-brand-dark text-xl"></i></div>
        <h4 class="font-display font-bold text-brand-dark capitalize text-lg mb-2">Quick Deployment</h4>
        <p class="text-gray-500 text-base leading-relaxed">Ready pool of trained staff for rapid mobilisation once requirement is confirmed.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up text-center" style="animation-delay:0.14s">
        <div class="w-14 h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4"><i class="fa fa-headset text-brand-dark text-xl"></i></div>
        <h4 class="font-display font-bold text-brand-dark capitalize text-lg mb-2">24/7 Support</h4>
        <p class="text-gray-500 text-base leading-relaxed">Round-the-clock escalation and client support for every deployed account.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up text-center" style="animation-delay:0.21s">
        <div class="w-14 h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-4"><i class="fa fa-certificate text-brand-dark text-xl"></i></div>
        <h4 class="font-display font-bold text-brand-dark capitalize text-lg mb-2">ISO Certified</h4>
        <p class="text-gray-500 text-base leading-relaxed">Quality-driven operations backed by ISO-certified processes and full labour law compliance.</p>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     STATS STRIP — YELLOW
═══════════════════════════════════════════ -->
<div class="bg-brand-yellow py-10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
      <div><div class="font-display font-black text-3xl sm:text-5xl text-brand-dark">257+</div><div class="text-brand-dark/70 text-base capitalize tracking-wider font-semibold mt-1">Happy Clients</div></div>
      <div><div class="font-display font-black text-3xl sm:text-5xl text-brand-dark">1200+</div><div class="text-brand-dark/70 text-base capitalize tracking-wider font-semibold mt-1">Staff Deployed</div></div>
      <div><div class="font-display font-black text-3xl sm:text-5xl text-brand-dark">10+</div><div class="text-brand-dark/70 text-base capitalize tracking-wider font-semibold mt-1">Years Experience</div></div>
      <div><div class="font-display font-black text-3xl sm:text-5xl text-brand-dark">15+</div><div class="text-brand-dark/70 text-base capitalize tracking-wider font-semibold mt-1">NCR Locations</div></div>
    </div>
  </div>
</div>


<!-- ══════════════════════════════════════════
     LEAD MAGNET — DARK with image
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 relative overflow-hidden">
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.95) 0%, rgba(10,10,10,0.85) 100%), url('assets/images/service2.png') center/cover no-repeat;"></div>
  <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-10 sm:gap-12 items-center">
      <div class="fade-up">
        <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Free Assessment</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-white leading-tight sm:leading-none mb-4">
          Free Security & Facility<br/><span class="text-brand-yellow">Staffing Requirement Planner</span>
        </h2>
        <p class="text-white/70 text-lg leading-relaxed mb-5">Tell us about your property and requirement and we'll recommend the right combination of security guards, facility staff, and technology support — at no cost.</p>
        <ul class="space-y-2.5">
          <li class="flex items-center gap-2 text-white/80 text-lg"><i class="fa fa-check text-brand-yellow text-base"></i> Guard count & post planning</li>
          <li class="flex items-center gap-2 text-white/80 text-lg"><i class="fa fa-check text-brand-yellow text-base"></i> Facility staff estimation by role</li>
          <li class="flex items-center gap-2 text-white/80 text-lg"><i class="fa fa-check text-brand-yellow text-base"></i> Technology support recommendation</li>
          <li class="flex items-center gap-2 text-white/80 text-lg"><i class="fa fa-check text-brand-yellow text-base"></i> 100% free, no obligation</li>
        </ul>
      </div>
      <div class="bg-white rounded-2xl p-6 sm:p-8 fade-up mt-6 lg:mt-0" style="animation-delay:0.1s">
        <h3 class="font-display font-bold text-brand-dark capitalize text-lg mb-6">Request Free Staffing Plan</h3>
        <form action="includes/contact.php" method="POST" class="space-y-4">
          <input type="hidden" name="form_type" value="services_staffing_planner" />
          <div>
            <label class="text-gray-500 text-xs font-semibold uppercase tracking-wider mb-1.5 block">Name *</label>
            <input type="text" name="name" required placeholder="Your full name" class="input-field" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold uppercase tracking-wider mb-1.5 block">Phone *</label>
            <input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX" class="input-field" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold uppercase tracking-wider mb-1.5 block">Service Required</label>
            <select name="service" class="input-field">
              <option value="">Select a service</option>
              <option>Security Guards</option>
              <option>Facility Management</option>
              <option>Manpower Services</option>
              <option>Technology & Support</option>
              <option>Multiple Services</option>
            </select>
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold uppercase tracking-wider mb-1.5 block">Location</label>
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
              <option>Bahadurgarh</option>
              <option>Other NCR</option>
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
     FAQs — light gray
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-gray-50">
  <div class="max-w-3xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2">Common Questions</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark mb-1">Frequently Asked</h2>
      <div class="y-divider-center mx-auto mt-4"></div>
    </div>
    <div class="space-y-3">

      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden fade-up">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can I hire both security guards and housekeeping staff from you?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. We provide integrated security and facility manpower solutions. You can hire security guards, housekeeping staff, office boys, drivers, bouncers, and fire safety personnel all from a single vendor, with unified billing and supervision.</p>
        </div>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.05s">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you cover all Delhi NCR areas?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. We serve all major Delhi NCR locations including Delhi, Noida, Greater Noida, Gurgaon, Faridabad, Ghaziabad, Manesar, Sonipat, and Bahadurgarh. Contact us to confirm availability in your specific area.</p>
        </div>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.1s">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">How quickly can you deploy staff after confirmation?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">We maintain a ready pool of trained and verified staff. Deployment typically begins within 24–72 hours of agreement confirmation, depending on the role type, headcount, and location.</p>
        </div>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.15s">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Are all staff and guards background verified?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. Every person we deploy undergoes ID verification, address verification, police verification support, document checks, and work history review before being approved for deployment by our operations supervisor.</p>
        </div>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.2s">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you offer flexible contract options?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. We offer daily, monthly, annual, project-based, and event-based staffing contracts. You can scale up or down as your requirement changes and we'll adjust the deployment plan accordingly.</p>
        </div>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.25s">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you provide replacement if a guard or staff member is absent?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. Absent guards or facility staff are replaced as quickly as possible from our backup pool. Our supervisors actively track attendance and arrange backup deployment to ensure your site is never left uncovered.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     FINAL CTA — YELLOW
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-brand-yellow">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center fade-up">
    <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-3xl lg:text-4xl text-brand-dark leading-tight sm:leading-none mb-4">
      Need Security or Facility<br/>Staff for Your Property?
    </h2>
    <p class="text-brand-dark/70 text-sm sm:text-lg mb-8 max-w-lg mx-auto">
      Talk to our team today. We'll recommend the right combination of services, estimate your staffing requirement, and deploy within your timeline — all at no obligation.
    </p>
    <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-3 sm:gap-4">
      
      <a href="contact" class="border-2 border-brand-dark text-brand-dark hover:bg-brand-dark hover:text-white font-bold px-7 sm:px-8 py-3.5 rounded uppercase tracking-wider text-sm transition-colors">
        Book Site Visit
      </a>
      <a href="tel:+919430695171" class="flex items-center justify-center gap-2 border-2 border-brand-dark/50 text-brand-dark hover:border-brand-dark font-bold px-7 sm:px-8 py-3.5 rounded uppercase tracking-wider text-sm transition-colors">
        <i class="fa fa-phone"></i> +91 94306 95171
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>