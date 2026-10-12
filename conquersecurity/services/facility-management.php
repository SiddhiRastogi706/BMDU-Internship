<?php
$page_title       = "Facility Management Services in Delhi NCR | Conquer Services";
$page_description = "Professional facility manpower for offices, residential societies, commercial spaces, institutions, hospitals, events, and industrial sites across Delhi NCR — housekeeping, office boys, receptionists, bouncers, drivers, and more.";
$active_page      = "services";
$base_path        = "../../";
include '../../includes/header.php';
?>

<style>
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
  .service-card { transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s; }
  .service-card:hover { transform: translateY(-6px); box-shadow: 0 24px 48px rgba(0,0,0,0.10); border-color: #F2CF4A; }
</style>

<!-- ══════════════════════════════════════════
     1. HERO SECTION — dark, image background
═══════════════════════════════════════════ -->
<section class="relative h-72 sm:h-80 md:h-96 overflow-hidden bg-brand-dark">
  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=1600&q=80" alt="Facility Management Services Delhi NCR" class="w-full h-full object-cover" />
  </div>
  <div class="page-hero-overlay absolute inset-0"></div>
  <div class="relative z-10 h-full flex flex-col justify-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
      <div class="flex items-center gap-2 text-xs uppercase tracking-widest mb-4">
        <a href="../../" class="text-gray-400 hover:text-brand-yellow transition-colors">Home</a>
        <span class="text-brand-yellow"><i class="fa fa-chevron-right text-[9px]"></i></span>
        <a href="../../services" class="text-gray-400 hover:text-brand-yellow transition-colors">Services</a>
        <span class="text-brand-yellow"><i class="fa fa-chevron-right text-[9px]"></i></span>
        <span class="text-brand-yellow font-semibold">Facility Management Services</span>
      </div>
      <p class="text-brand-yellow font-semibold uppercase tracking-widest2 text-xs mb-3">Complete Facility Manpower</p>
      <h1 class="font-display font-black uppercase leading-none text-white mb-4">
        <span class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl block">Facility Management</span>
        <span class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl text-brand-yellow block">Services in Delhi NCR</span>
      </h1>
      <p class="text-white/70 text-sm sm:text-base max-w-2xl leading-relaxed mb-6">
        Professional facility manpower for offices, residential societies, commercial spaces, institutions, hospitals, events, and industrial sites.
      </p>
      <div class="flex flex-wrap gap-3">
        <a href="../../contact" class="bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold px-6 py-3 rounded uppercase tracking-wider text-sm transition-colors shadow-lg">
          Request Quote
        </a>
        <a href="tel:+919430695171" class="flex items-center gap-2 border border-brand-yellow text-brand-yellow hover:bg-brand-yellow hover:text-brand-dark font-semibold px-6 py-3 rounded uppercase tracking-wider text-sm transition-colors">
          <i class="fa fa-phone"></i> Call Now
        </a>
      </div>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-brand-yellow"></div>
</section>


<!-- ══════════════════════════════════════════
     2. FACILITY SERVICE CARDS — WHITE
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-white" id="services">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-12 sm:mb-14 fade-up">
      <p class="text-brand-dark font-semibold uppercase tracking-widest2 text-xs mb-3">Our Facility Services</p>
      <h2 class="font-display font-black uppercase text-3xl sm:text-4xl md:text-5xl text-brand-dark mb-4">Complete Facility<br/><span style="color:#C9A91E;">Manpower Solutions</span></h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 max-w-2xl mx-auto text-sm leading-relaxed">
        Trained, verified, and well-groomed staff for every facility requirement — from daily housekeeping to skilled support roles.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

      <a href="housekeeping" class="service-card bg-gray-50 border border-gray-200 rounded-xl overflow-hidden group fade-up">
        <div class="relative h-40 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=600&q=80" alt="Housekeeping Services" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
        </div>
        <div class="p-5">
          <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 group-hover:bg-brand-yellow transition-colors">
            <i class="fa fa-broom text-brand-dark text-base"></i>
          </div>
          <h3 class="font-display font-bold text-sm text-brand-dark uppercase leading-tight mb-2">Housekeeping Services</h3>
          <p class="text-gray-500 text-xs leading-relaxed mb-3">Daily and deep cleaning with trained, groomed staff for offices, societies, and commercial spaces.</p>
          <div class="text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
        </div>
      </a>

      <a href="office-boy" class="service-card bg-gray-50 border border-gray-200 rounded-xl overflow-hidden group fade-up" style="animation-delay:0.05s">
        <div class="relative h-40 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=600&q=80" alt="Office Boy and Pantry Staff" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
        </div>
        <div class="p-5">
          <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 group-hover:bg-brand-yellow transition-colors">
            <i class="fa fa-mug-hot text-brand-dark text-base"></i>
          </div>
          <h3 class="font-display font-bold text-sm text-brand-dark uppercase leading-tight mb-2">Office Boy & Pantry Staff</h3>
          <p class="text-gray-500 text-xs leading-relaxed mb-3">Pantry maintenance, tea service, and day-to-day office support staff.</p>
          <div class="text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
        </div>
      </a>

      <a href="receptionist" class="service-card bg-gray-50 border border-gray-200 rounded-xl overflow-hidden group fade-up" style="animation-delay:0.1s">
        <div class="relative h-40 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=600&q=80" alt="Receptionist and Front Desk Staff" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
        </div>
        <div class="p-5">
          <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 group-hover:bg-brand-yellow transition-colors">
            <i class="fa fa-concierge-bell text-brand-dark text-base"></i>
          </div>
          <h3 class="font-display font-bold text-sm text-brand-dark uppercase leading-tight mb-2">Receptionist & Front Desk</h3>
          <p class="text-gray-500 text-xs leading-relaxed mb-3">Professional front-desk staff for visitor handling and call management.</p>
          <div class="text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
        </div>
      </a>

      <a href="bouncers" class="service-card bg-gray-50 border border-gray-200 rounded-xl overflow-hidden group fade-up" style="animation-delay:0.15s">
        <div class="relative h-40 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?w=600&q=80" alt="Bouncers" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
        </div>
        <div class="p-5">
          <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 group-hover:bg-brand-yellow transition-colors">
            <i class="fa fa-user-shield text-brand-dark text-base"></i>
          </div>
          <h3 class="font-display font-bold text-sm text-brand-dark uppercase leading-tight mb-2">Bouncers</h3>
          <p class="text-gray-500 text-xs leading-relaxed mb-3">Professional bouncers for events, clubs, and high-footfall venues.</p>
          <div class="text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
        </div>
      </a>

      <a href="drivers" class="service-card bg-gray-50 border border-gray-200 rounded-xl overflow-hidden group fade-up">
        <div class="relative h-40 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?w=600&q=80" alt="Drivers and Chauffeurs" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
        </div>
        <div class="p-5">
          <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 group-hover:bg-brand-yellow transition-colors">
            <i class="fa fa-car text-brand-dark text-base"></i>
          </div>
          <h3 class="font-display font-bold text-sm text-brand-dark uppercase leading-tight mb-2">Drivers & Chauffeurs</h3>
          <p class="text-gray-500 text-xs leading-relaxed mb-3">Verified, licensed drivers for personal and corporate transport needs.</p>
          <div class="text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
        </div>
      </a>

      <a href="helpers" class="service-card bg-gray-50 border border-gray-200 rounded-xl overflow-hidden group fade-up" style="animation-delay:0.05s">
        <div class="relative h-40 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=600&q=80" alt="Helpers and Labour Supply" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
        </div>
        <div class="p-5">
          <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 group-hover:bg-brand-yellow transition-colors">
            <i class="fa fa-people-carry text-brand-dark text-base"></i>
          </div>
          <h3 class="font-display font-bold text-sm text-brand-dark uppercase leading-tight mb-2">Helpers & Labour Supply</h3>
          <p class="text-gray-500 text-xs leading-relaxed mb-3">General helpers and labour support for loading, moving, and site work.</p>
          <div class="text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
        </div>
      </a>

      <a href="garden-maintenance" class="service-card bg-gray-50 border border-gray-200 rounded-xl overflow-hidden group fade-up" style="animation-delay:0.1s">
        <div class="relative h-40 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=600&q=80" alt="Garden and Maintenance Staff" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
        </div>
        <div class="p-5">
          <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 group-hover:bg-brand-yellow transition-colors">
            <i class="fa fa-leaf text-brand-dark text-base"></i>
          </div>
          <h3 class="font-display font-bold text-sm text-brand-dark uppercase leading-tight mb-2">Garden & Maintenance Staff</h3>
          <p class="text-gray-500 text-xs leading-relaxed mb-3">Landscaping, gardening, and routine property maintenance personnel.</p>
          <div class="text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
        </div>
      </a>

      <a href="fire-safety" class="service-card bg-gray-50 border border-gray-200 rounded-xl overflow-hidden group fade-up" style="animation-delay:0.15s">
        <div class="relative h-40 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1599619585752-c3edb42a414c?w=600&q=80" alt="Fire and Safety Personnel" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
        </div>
        <div class="p-5">
          <div class="w-11 h-11 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-3 group-hover:bg-brand-yellow transition-colors">
            <i class="fa fa-fire-extinguisher text-brand-dark text-base"></i>
          </div>
          <h3 class="font-display font-bold text-sm text-brand-dark uppercase leading-tight mb-2">Fire & Safety Personnel</h3>
          <p class="text-gray-500 text-xs leading-relaxed mb-3">Trained fire safety officers for commercial and industrial sites.</p>
          <div class="text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
        </div>
      </a>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     3. WHERE WE PROVIDE FACILITY STAFF — light gray
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-14 items-center">
      <div class="relative fade-up order-2 lg:order-1">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?w=900&q=80" alt="Facility staff deployment sites" class="w-full h-full object-cover" />
        </div>
        <div class="absolute -bottom-5 -right-5 bg-brand-dark rounded-xl p-5 shadow-2xl">
          <div class="text-white text-center">
            <div class="font-display font-black text-3xl leading-none text-brand-yellow">10+</div>
            <div class="text-xs font-semibold mt-1 tracking-wider">Site Types</div>
          </div>
        </div>
      </div>
      <div class="order-1 lg:order-2">
        <p class="text-brand-dark font-semibold uppercase tracking-widest2 text-xs mb-3 fade-up">Deployment Locations</p>
        <h2 class="font-display font-black uppercase text-3xl sm:text-4xl md:text-5xl text-brand-dark leading-none mb-4 fade-up">Where We Provide<br/><span style="color:#C9A91E;">Facility Staff</span></h2>
        <div class="y-divider-center mb-6 fade-up"></div>
        <p class="text-gray-500 text-sm leading-relaxed mb-6 fade-up">
          Our facility teams are deployed across a wide range of property types, briefed on site-specific protocols before they begin work.
        </p>
        <div class="grid grid-cols-2 gap-3">
          <div class="flex items-center gap-2 text-sm text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-xs"></i> Offices</div>
          <div class="flex items-center gap-2 text-sm text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-xs"></i> Societies</div>
          <div class="flex items-center gap-2 text-sm text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-xs"></i> Hospitals</div>
          <div class="flex items-center gap-2 text-sm text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-xs"></i> Schools</div>
          <div class="flex items-center gap-2 text-sm text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-xs"></i> Colleges</div>
          <div class="flex items-center gap-2 text-sm text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-xs"></i> Malls</div>
          <div class="flex items-center gap-2 text-sm text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-xs"></i> Commercial Buildings</div>
          <div class="flex items-center gap-2 text-sm text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-xs"></i> Factories</div>
          <div class="flex items-center gap-2 text-sm text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-xs"></i> Warehouses</div>
          <div class="flex items-center gap-2 text-sm text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-xs"></i> Events</div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     4. WHY CHOOSE OUR FACILITY STAFF — DARK
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-brand-dark">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-12 sm:mb-14 fade-up">
      <p class="text-brand-yellow font-semibold uppercase tracking-widest2 text-xs mb-3">The Conquer Advantage</p>
      <h2 class="font-display font-black uppercase text-3xl sm:text-4xl md:text-5xl text-white mb-4">Why Choose Our<br/><span class="text-brand-yellow">Facility Staff</span></h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <div class="bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl p-6 fade-up transition-colors">
        <i class="fa fa-user-check text-brand-yellow text-2xl mb-3 block"></i>
        <h4 class="font-display font-bold text-white text-sm uppercase mb-1">Verified Manpower</h4>
        <p class="text-gray-400 text-xs leading-relaxed">ID, address, and background checks completed before any deployment.</p>
      </div>
      <div class="bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl p-6 fade-up transition-colors" style="animation-delay:0.05s">
        <i class="fa fa-tshirt text-brand-yellow text-2xl mb-3 block"></i>
        <h4 class="font-display font-bold text-white text-sm uppercase mb-1">Groomed Staff</h4>
        <p class="text-gray-400 text-xs leading-relaxed">Presentable, uniformed personnel maintaining a professional appearance.</p>
      </div>
      <div class="bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl p-6 fade-up transition-colors" style="animation-delay:0.1s">
        <i class="fa fa-graduation-cap text-brand-yellow text-2xl mb-3 block"></i>
        <h4 class="font-display font-bold text-white text-sm uppercase mb-1">Trained for Site Duties</h4>
        <p class="text-gray-400 text-xs leading-relaxed">Staff briefed on site-specific protocols and duty requirements before deployment.</p>
      </div>
      <div class="bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl p-6 fade-up transition-colors" style="animation-delay:0.15s">
        <i class="fa fa-user-tie text-brand-yellow text-2xl mb-3 block"></i>
        <h4 class="font-display font-bold text-white text-sm uppercase mb-1">Supervisor Monitoring</h4>
        <p class="text-gray-400 text-xs leading-relaxed">Regular site visits and performance checks by dedicated supervisors.</p>
      </div>
      <div class="bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl p-6 fade-up transition-colors">
        <i class="fa fa-sync-alt text-brand-yellow text-2xl mb-3 block"></i>
        <h4 class="font-display font-bold text-white text-sm uppercase mb-1">Replacement Support</h4>
        <p class="text-gray-400 text-xs leading-relaxed">Absent staff replaced swiftly to ensure uninterrupted service coverage.</p>
      </div>
      <div class="bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl p-6 fade-up transition-colors" style="animation-delay:0.05s">
        <i class="fa fa-sliders-h text-brand-yellow text-2xl mb-3 block"></i>
        <h4 class="font-display font-bold text-white text-sm uppercase mb-1">Flexible Deployment</h4>
        <p class="text-gray-400 text-xs leading-relaxed">Staff available for single-site, multi-site, or rotating deployment needs.</p>
      </div>
      <div class="bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl p-6 fade-up transition-colors" style="animation-delay:0.1s">
        <i class="fa fa-calendar-alt text-brand-yellow text-2xl mb-3 block"></i>
        <h4 class="font-display font-bold text-white text-sm uppercase mb-1">Flexible Contracts</h4>
        <p class="text-gray-400 text-xs leading-relaxed">Daily, monthly, and long-term contract-based staffing options available.</p>
      </div>
      <div class="bg-white/5 border border-white/10 hover:border-brand-yellow/40 rounded-xl p-6 fade-up transition-colors" style="animation-delay:0.15s">
        <i class="fa fa-headset text-brand-yellow text-2xl mb-3 block"></i>
        <h4 class="font-display font-bold text-white text-sm uppercase mb-1">24/7 Support</h4>
        <p class="text-gray-400 text-xs leading-relaxed">Round-the-clock escalation and client support for every account.</p>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     5. LEAD MAGNET — WHITE card on light gray bg
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-gray-50" id="lead-magnet">
  <div class="max-w-6xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-0 bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-200 fade-up">

      <div class="p-8 sm:p-10 lg:p-12 flex flex-col justify-center">
        <p class="text-brand-dark font-semibold uppercase tracking-widest2 text-xs mb-3">Free Planning Tool</p>
        <h2 class="font-display font-black uppercase text-2xl sm:text-3xl text-brand-dark mb-4 leading-tight">
          Free Facility Staffing<br/>Requirement Planner
        </h2>
        <p class="text-gray-500 text-sm leading-relaxed mb-6">
          Get help estimating the right number of housekeeping staff, office boys, pantry staff, receptionists, drivers, helpers, and maintenance staff for your site.
        </p>
        <div class="space-y-3">
          <div class="flex items-center gap-3 text-sm text-gray-600"><i class="fa fa-check-circle text-brand-dark"></i> No-obligation staffing estimate</div>
          <div class="flex items-center gap-3 text-sm text-gray-600"><i class="fa fa-check-circle text-brand-dark"></i> Role-wise headcount recommendation</div>
          <div class="flex items-center gap-3 text-sm text-gray-600"><i class="fa fa-check-circle text-brand-dark"></i> Response within 24 hours</div>
        </div>
      </div>

      <div class="bg-brand-dark p-8 sm:p-10 lg:p-12">
        <form action="../../includes/contact.php" method="POST" class="space-y-4">
          <input type="hidden" name="form_type" value="facility_staffing_planner" />
          <input type="text" name="name" required placeholder="Full Name" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <input type="tel" name="phone" required placeholder="Phone Number" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <input type="email" name="email" placeholder="Email Address" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <select name="staff_type" required class="w-full bg-white/5 border border-white/15 text-white rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow">
            <option value="" class="text-gray-700">Select Staff Type Needed</option>
            <option class="text-gray-700">Housekeeping Staff</option>
            <option class="text-gray-700">Office Boy / Pantry Staff</option>
            <option class="text-gray-700">Receptionist / Front Desk</option>
            <option class="text-gray-700">Bouncers</option>
            <option class="text-gray-700">Drivers / Chauffeurs</option>
            <option class="text-gray-700">Helpers / Labour</option>
            <option class="text-gray-700">Garden & Maintenance Staff</option>
            <option class="text-gray-700">Fire & Safety Personnel</option>
            <option class="text-gray-700">Multiple Staff Types</option>
          </select>
          <input type="text" name="location" placeholder="Location" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <button type="submit" class="w-full bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold py-3.5 rounded uppercase tracking-wider text-sm transition-colors">
            Request Free Staffing Plan
          </button>
        </form>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     6. FAQs — WHITE
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-white">
  <div class="max-w-3xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 fade-up">
      <p class="text-brand-dark font-semibold uppercase tracking-widest2 text-xs mb-2">Common Questions</p>
      <h2 class="font-display font-black uppercase text-3xl sm:text-4xl text-brand-dark mb-1">Frequently Asked</h2>
      <div class="y-divider-center mx-auto mt-4"></div>
    </div>

    <div class="space-y-3">
      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-sm pr-4">What is the minimum contract period for facility staff?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-sm leading-relaxed">We offer flexible terms — daily, monthly, and long-term contract-based staffing depending on your requirement. Short-term and event-based deployments are also available.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.05s">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-sm pr-4">How quickly can facility staff be deployed?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-sm leading-relaxed">We maintain a ready pool of trained and verified staff. Depending on the role and your location, deployment typically begins within 24–72 hours of agreement confirmation.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.1s">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-sm pr-4">What happens if a staff member is absent or unavailable?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-sm leading-relaxed">We provide swift replacement support to ensure uninterrupted service. Our supervisors actively monitor attendance and arrange backup staff when required.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.15s">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-sm pr-4">Do you provide uniforms for facility staff?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-sm leading-relaxed">Yes. All deployed staff are presentable and uniformed, maintaining a professional appearance appropriate to your site and brand standards.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.2s">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-sm pr-4">Can I get staff for specific shift timings only?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-sm leading-relaxed">Yes. We offer flexible deployment for specific shift timings, part-day coverage, or full-day staffing based on your operational needs.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.25s">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-sm pr-4">How is facility staffing priced?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-sm leading-relaxed">Pricing depends on the role, headcount, shift duration, and contract length. Share your requirement with us for a free, no-obligation quote.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     7. FINAL CTA — YELLOW
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-brand-yellow">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center fade-up">
    <h2 class="font-display font-black uppercase text-3xl sm:text-5xl text-brand-dark leading-none mb-4">
      Need Facility Staff for<br/>Your Property or Business?
    </h2>
    <p class="text-brand-dark/70 text-sm sm:text-base mb-8 max-w-lg mx-auto">
      Share your requirement and we'll recommend the right facility staffing plan for your site.
    </p>
    <div class="flex flex-wrap justify-center gap-4">
      <a href="../../contact" class="bg-brand-dark text-white hover:bg-gray-800 font-bold px-8 py-3.5 rounded uppercase tracking-wider text-sm transition-colors shadow-lg">
        Request Quote
      </a>
      <a href="tel:+919430695171" class="flex items-center gap-2 border-2 border-brand-dark/60 text-brand-dark hover:border-brand-dark font-bold px-8 py-3.5 rounded uppercase tracking-wider text-sm transition-colors">
        <i class="fa fa-phone"></i> +91 94306 95171
      </a>
    </div>
  </div>
</section>

<?php include '../../includes/footer.php'; ?>