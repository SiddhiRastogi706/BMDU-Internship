<?php
$page_title       = "Security Guard Services in Delhi NCR | Conquer Services";
$page_description = "Hire trained and verified security guards — unarmed, armed, lady guards, VIP/PSO and escort security — for offices, societies, factories, schools, hospitals and commercial properties across Delhi NCR.";
$active_page      = "services";
$base_path        = "";
include 'includes/header.php';
?>

<style>
  @keyframes heroFade { 0%{opacity:0;} 8%{opacity:1;} 92%{opacity:1;} 100%{opacity:0;} }
  .hero-bg-slide { position:absolute; inset:0; background-size:cover; background-position:center; opacity:0; animation: heroFade 9s ease-in-out infinite; }
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
</style>

<!-- ══════════════════════════════════════════
     HERO SECTION
═══════════════════════════════════════════ -->
<section class="relative h-[70vh] min-h-[560px] overflow-hidden bg-brand-dark" id="page-hero">

  <div class="hero-bg-slide" style="background-image:url('assets/images/banner/security-guard-banner.png'); animation-delay:0s;"></div>

  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.88) 0%, rgba(10,10,10,0.55) 40%);"></div>

  <div class="relative z-10 h-full flex items-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
      <div class="max-w-2xl">
        
        <p class="text-brand-yellow font-display font-semibold text-base capitalize tracking-widest mb-4 fade-up">Security Guard Services</p>
        <h1 class="font-display font-black capitalize leading-none mb-6 fade-up" style="animation-delay:0.1s">
          <span class="text-4xl sm:text-5xl md:text-5xl text-white font-bold block">Professional Security</span>
          <span class="text-4xl sm:text-5xl md:text-5xl text-brand-yellow font-bold block">Guard Services</span>
          <span class="text-2xl sm:text-3xl text-white/80 font-bold block mt-2">in Delhi NCR</span>
        </h1>
        <p class="text-white/70 text-base sm:text-lg leading-relaxed mb-8 fade-up max-w-xl" style="animation-delay:0.2s">
          Hire trained and verified security guards for offices, societies, factories, schools, hospitals, warehouses, events, banks, and commercial properties.
        </p>
        <div class="flex flex-wrap gap-3 fade-up" style="animation-delay:0.3s">
          <a href="contact" class="bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold px-7 py-3.5 rounded capitalize tracking-wider text-sm transition-colors shadow-lg">
            Request Security Guard Quote
          </a>
          <a href="tel:+919430695171" class="flex items-center gap-2 border border-brand-yellow text-brand-yellow hover:bg-brand-yellow hover:text-brand-dark font-semibold px-7 py-3.5 rounded capitalize tracking-wider text-sm transition-colors">
            <i class="fa fa-phone"></i> Call Now
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     SERVICE CATEGORY CARDS — WHITE background
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-white" id="services">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-12 sm:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Choose Your Service</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl md:text-4xl text-brand-dark mb-4">Security Guard Categories</h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 max-w-2xl mx-auto text-lg leading-relaxed">
        We provide the right type of trained, verified manpower for every site, risk level, and duty requirement.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
      <a href="security-guard-services/unarmed-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-6 group fade-up">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-shield-alt text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-xl text-brand-dark capitalize leading-tight mb-2">Unarmed Security Guards</h3>
        <p class="text-gray-500 text-lg leading-relaxed">For offices, societies, schools, hospitals & commercial spaces.</p>
        <div class="mt-4 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="security-guard-services/armed-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-6 group fade-up" style="animation-delay:0.05s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-user-shield text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-xl text-brand-dark capitalize leading-tight mb-2">Armed Security Guards</h3>
        <p class="text-gray-500 text-lg leading-relaxed">For banks, cash transit, high-risk & sensitive locations.</p>
        <div class="mt-4 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="security-guard-services/lady-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-6 group fade-up" style="animation-delay:0.1s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-venus text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-xl text-brand-dark capitalize leading-tight mb-2">Lady Security Guards</h3>
        <p class="text-gray-500 text-lg leading-relaxed">Trained female security officers for sensitive deployments.</p>
        <div class="mt-4 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="security-guard-services/vip-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-6 group fade-up" style="animation-delay:0.15s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-star text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-xl text-brand-dark capitalize leading-tight mb-2">VIP & PSO Security</h3>
        <p class="text-gray-500 text-lg leading-relaxed">Personal security officers for executives and VIP personnel.</p>
        <div class="mt-4 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="security-guard-services/escort-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-6 group fade-up" style="animation-delay:0.2s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-car text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-xl text-brand-dark capitalize leading-tight mb-2">Escort Security Services</h3>
        <p class="text-gray-500 text-lg leading-relaxed">Safe escort solutions for movement and transit security.</p>
        <div class="mt-4 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     WHERE WE DEPLOY GUARDS — light gray
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-14 items-center">
      <div class="relative fade-up order-2 lg:order-1 mt-6 lg:mt-0">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="assets/images/guard1.png" alt="Security guard deployment at gate" class="w-full h-full object-cover" />
        </div>
        <div class="absolute -bottom-5 -right-5 bg-brand-dark rounded-xl p-5 shadow-2xl">
          <div class="text-white text-center">
            <div class="font-display font-black text-3xl leading-none text-brand-yellow">24/7</div>
            <div class="text-xs font-semibold mt-1 tracking-wider">Coverage</div>
          </div>
        </div>
      </div>
      <div class="order-1 lg:order-2">
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3 fade-up">Deployment Sites</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-4xl md:text-4xl text-brand-dark leading-none mb-4 fade-up">Where We<br> Deploy Guards</h2>
        <div class="y-divider-center mb-6 fade-up"></div>
        <div class="grid grid-cols-2 gap-3">
          <div class="flex items-center gap-2 text-lg text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-lg"></i> Entry gates</div>
          <div class="flex items-center gap-2 text-lg text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-lg"></i> Reception areas</div>
          <div class="flex items-center gap-2 text-lg text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-lg"></i> Parking areas</div>
          <div class="flex items-center gap-2 text-lg text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-lg"></i> Residential towers</div>
          <div class="flex items-center gap-2 text-lg text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-lg"></i> Office buildings</div>
          <div class="flex items-center gap-2 text-lg text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-lg"></i> Factory premises</div>
          <div class="flex items-center gap-2 text-lg text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-lg"></i> Warehouses</div>
          <div class="flex items-center gap-2 text-lg text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-lg"></i> Banks & ATMs</div>
          <div class="flex items-center gap-2 text-lg text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-lg"></i> Schools & hospitals</div>
          <div class="flex items-center gap-2 text-lg text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-lg"></i> Events & gatherings</div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     GUARD DUTIES — WHITE background
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-12 sm:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Scope of Work</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl md:text-4xl text-brand-dark mb-4">Guard Duties</h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up">
        <i class="fa fa-door-open text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Gate Control</h4>
        <p class="text-gray-500 text-base leading-relaxed">Controlled entry and exit at all access points.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-id-card text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Visitor Entry</h4>
        <p class="text-gray-500 text-base leading-relaxed">ID checks and visitor verification before entry.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-boxes text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Material Checks</h4>
        <p class="text-gray-500 text-base leading-relaxed">Inward and outward material movement checks.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-walking text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Patrolling</h4>
        <p class="text-gray-500 text-base leading-relaxed">Scheduled and surprise patrol rounds across site.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up">
        <i class="fa fa-parking text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Parking Management</h4>
        <p class="text-gray-500 text-base leading-relaxed">Organised vehicle entry, exit, and parking control.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-bolt text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Emergency Response</h4>
        <p class="text-gray-500 text-base leading-relaxed">First-response action during incidents and emergencies.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-clipboard-list text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">Incident Reporting</h4>
        <p class="text-gray-500 text-base leading-relaxed">Daily duty logs and incident reports for clients.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-video text-brand-dark text-xl mb-3 block"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1">CCTV Coordination</h4>
        <p class="text-gray-500 text-base leading-relaxed">Working alongside CCTV monitoring and access control.</p>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     TRAINING & VERIFICATION — DARK background
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-brand-dark">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-14 items-center">
      <div class="fade-up">
        <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Trust & Compliance</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-4xl md:text-4xl text-white leading-none mb-4">Training & <br>Verification</h2>
        <div class="y-divider-center mb-6"></div>
        <p class="text-gray-400 text-lg leading-relaxed mb-8">
          Every guard goes through a structured verification and training process before being deployed at a client site.
        </p>
        <div class="space-y-4">
          <div class="flex gap-4 items-start fade-up">
            <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-id-badge text-brand-yellow text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-white text-base">Background Checks</h4>
              <p class="text-gray-400 text-sm mt-0.5 leading-relaxed">ID, address and previous work history verification.</p>
            </div>
          </div>
          <div class="flex gap-4 items-start fade-up" style="animation-delay:0.05s">
            <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-graduation-cap text-brand-yellow text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-white text-base">Basic Security Training</h4>
              <p class="text-gray-400 text-sm mt-0.5 leading-relaxed">Gate management, patrolling, and emergency awareness.</p>
            </div>
          </div>
          <div class="flex gap-4 items-start fade-up" style="animation-delay:0.1s">
            <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-tshirt text-brand-yellow text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-white text-base">Uniform & Grooming</h4>
              <p class="text-gray-400 text-sm mt-0.5 leading-relaxed">Disciplined, presentable, and uniformed personnel.</p>
            </div>
          </div>
          <div class="flex gap-4 items-start fade-up" style="animation-delay:0.15s">
            <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-user-check text-brand-yellow text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-white text-base">Supervisor Monitoring</h4>
              <p class="text-gray-400 text-sm mt-0.5 leading-relaxed">Regular supervisor visits and duty briefings before deployment.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="relative fade-up mt-6 lg:mt-0" style="animation-delay:0.1s">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="assets/images/about2.png" alt="Security guard training and verification" class="w-full h-full object-cover" />
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     DEPLOYMENT OPTIONS — WHITE background
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-12 sm:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Flexible Staffing</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl md:text-4xl text-brand-dark mb-4">Deployment Options</h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 text-center fade-up">
        <i class="fa fa-sun text-brand-dark mb-2 block text-lg"></i>
        <span class="text-brand-dark text-base font-bold capitalize">Day Shift</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.05s">
        <i class="fa fa-moon text-brand-dark mb-2 block text-lg"></i>
        <span class="text-brand-dark text-base font-bold capitalize">Night Shift</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.1s">
        <i class="fa fa-clock text-brand-dark mb-2 block text-lg"></i>
        <span class="text-brand-dark text-base font-bold capitalize">12-Hour Duty</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.15s">
        <i class="fa fa-clock text-brand-dark mb-2 block text-lg"></i>
        <span class="text-brand-dark text-base font-bold capitalize">24-Hour Duty</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 text-center fade-up">
        <i class="fa fa-user text-brand-dark mb-2 block text-lg"></i>
        <span class="text-brand-dark text-base font-bold capitalize">Single Guard</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:0.05s">
        <i class="fa fa-users text-brand-dark mb-2 block text-lg"></i>
        <span class="text-brand-dark text-base font-bold capitalize">Supervisor-Led Team</span>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     INDUSTRIES SERVED — DARK background
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-brand-dark">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-12 sm:mb-14 fade-up">
      <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Who We Protect</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl md:text-4xl text-white mb-4">Industries Served</h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4">
      <a href="industries/offices" class="bg-white/5 border border-white/10 hover:border-brand-yellow rounded-xl p-5 text-center transition-all hover:bg-brand-yellow/10 fade-up">
        <i class="fa fa-building text-brand-yellow mb-2 block text-lg"></i>
        <span class="text-white text-base font-semibold">Corporate Offices</span>
      </a>
      <a href="industries/industrial" class="bg-white/5 border border-white/10 hover:border-brand-yellow rounded-xl p-5 text-center transition-all hover:bg-brand-yellow/10 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-industry text-brand-yellow mb-2 block text-lg"></i>
        <span class="text-white text-base font-semibold">Factories</span>
      </a>
      <a href="industries/residential" class="bg-white/5 border border-white/10 hover:border-brand-yellow rounded-xl p-5 text-center transition-all hover:bg-brand-yellow/10 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-home text-brand-yellow mb-2 block text-lg"></i>
        <span class="text-white text-base font-semibold">Residential Societies</span>
      </a>
      <a href="industries/banks" class="bg-white/5 border border-white/10 hover:border-brand-yellow rounded-xl p-5 text-center transition-all hover:bg-brand-yellow/10 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-university text-brand-yellow mb-2 block text-lg"></i>
        <span class="text-white text-base font-semibold">Banks & ATMs</span>
      </a>
      <a href="industries/hospitals" class="bg-white/5 border border-white/10 hover:border-brand-yellow rounded-xl p-5 text-center transition-all hover:bg-brand-yellow/10 fade-up" style="animation-delay:0.2s">
        <i class="fa fa-hospital text-brand-yellow mb-2 block text-lg"></i>
        <span class="text-white text-base font-semibold">Hospitals</span>
      </a>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     LEAD MAGNET — DARK with image
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 relative overflow-hidden">
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.95) 0%, rgba(10,10,10,0.85) 100%), url('../../assets/images/service2.png') center/cover no-repeat;"></div>
  <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-10 sm:gap-12 items-center">
      <div class="fade-up">
        <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Free Checklist</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-4xl md:text-4xl text-white leading-none mb-4">
          Free Security Guard<br/><span class="text-brand-yellow">Deployment Checklist</span>
        </h2>
        <p class="text-white/70 text-lg leading-relaxed mb-6">
          Find out how many guards your site needs, where they should be placed, and what duties should be assigned.
        </p>
        <ul class="space-y-2.5 text-base text-white/80">
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Guard count estimation</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Post & shift planning</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> 100% free, no obligation</li>
        </ul>
      </div>
      <div class="bg-white rounded-2xl p-6 sm:p-8 fade-up mt-6 lg:mt-0" style="animation-delay:0.1s">
        <h3 class="font-display font-bold text-brand-dark capitalize text-xl mb-6">Get Free Checklist</h3>
        <form action="../../includes/contact.php" method="POST" class="space-y-4">
          <input type="hidden" name="form_type" value="security_guard_checklist" />
          <div class="grid sm:grid-cols-2 gap-4">
            <div>
              <label class="text-gray-500 text-xs font-semibold uppercase tracking-wider mb-1.5 block">Name *</label>
              <input type="text" name="name" required placeholder="Your name" class="input-field" />
            </div>
            <div>
              <label class="text-gray-500 text-xs font-semibold uppercase tracking-wider mb-1.5 block">Phone *</label>
              <input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX" class="input-field" />
            </div>
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold uppercase tracking-wider mb-1.5 block">Location</label>
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
            <i class="fa fa-download text-xs"></i> Get Free Checklist
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
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark mb-1">Frequently Asked</h2>
      <div class="y-divider-center mx-auto mt-4"></div>
    </div>

    <div class="space-y-3">
      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">What is the minimum contract period?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Contract terms are flexible and depend on your site requirement, ranging from short-term event deployment to long-term monthly contracts.</p>
        </div>
      </div>
      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.05s">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you provide 12-hour and 24-hour guards?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes, we offer flexible shift options including 8-hour, 12-hour, and full 24-hour deployment based on your site's needs.</p>
        </div>
      </div>
      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.1s">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Are guards trained before deployment?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes, every guard undergoes background verification and basic security training, including gate management, patrolling, and emergency response, before being deployed.</p>
        </div>
      </div>
      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.15s">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you provide guards for societies?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes, we provide trained security guards for residential societies, including gate security, visitor management, and night patrolling.</p>
        </div>
      </div>
      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.2s">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can you deploy guards urgently?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">We maintain a ready pool of verified guards and can support urgent deployment requests after a quick site discussion and agreement.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     FINAL CTA — YELLOW background
═══════════════════════════════════════════ -->
<section class="py-16 sm:py-20 bg-brand-yellow">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center fade-up">
    <h2 class="font-display font-black capitalize text-3xl sm:text-3xl md:text-4xl text-brand-dark leading-none mb-4">
      Need Professional Security<br/>Guards for Your Site?
    </h2>
    <p class="text-brand-dark/80 text-sm sm:text-lg mb-8 max-w-lg mx-auto">
      Contact us today for a free consultation and get the right security guard solution for your property.
    </p>
    <div class="flex flex-wrap justify-center gap-3 sm:gap-4">
      <a href="contact" class="bg-brand-dark text-white hover:bg-gray-800 font-bold px-7 sm:px-8 py-3.5 rounded capitalize tracking-wider text-sm transition-colors shadow-lg">
        Book Free Consultation
      </a>

      <a href="tel:+919430695171" class="flex items-center gap-2 border-2 border-brand-dark/60 text-brand-dark hover:border-brand-dark font-bold px-7 sm:px-8 py-3.5 rounded uppercase tracking-wider text-sm transition-colors">
        <i class="fa fa-phone"></i> +91 94306 95171
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>