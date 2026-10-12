<?php
$page_title       = "VIP & Personal Security Officer (PSO) Services in Delhi NCR | Conquer Services";
$page_description = "Hire trained, verified, and discreet VIP & Personal Security Officers (PSOs) for executives, dignitaries, celebrities, and high-profile individuals across Delhi NCR.";
$active_page      = "services";
$base_path        = "../";
include '../includes/header.php';
?>

<style>
  @keyframes heroFade { 0%{opacity:0;} 8%{opacity:1;} 92%{opacity:1;} 100%{opacity:0;} }
  .hero-bg-slide { position:absolute; inset:0; background-size:cover; background-position:center; opacity:0; animation: heroFade 9s ease-in-out infinite; }
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
  /* Eyebrow labels: tighter, safer letter-spacing on phones; full widest2 spacing from sm: up */
  .eyebrow { letter-spacing: 0.08em; }
  @media (min-width: 640px) { .eyebrow { letter-spacing: 0.25em; } }

  .hero-bg-slide {
  position: absolute;
  inset: 0;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center 20%; /* <-- key line */
}
</style>

<!-- ══════════════════════════════════════════
     1. HERO SECTION
     Mobile: height grows with content (no clipping).
     md+: fixed viewport-based height as before.
═══════════════════════════════════════════ -->
<section class="relative overflow-hidden bg-brand-dark py-24 sm:py-28 md:py-0 md:h-[65vh] md:min-h-[440px]">
  <div class="hero-bg-slide" style="background-image:url('../assets/images/banner/vip-banner.png'); animation-delay:0s;"></div>
 

  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.58) 0%, rgba(10,10,10,0.55) 60%);"></div>

  <div class="relative z-10 h-full flex items-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
      
      <div class="max-w-2xl">
        <p class="eyebrow text-brand-yellow font-display font-semibold text-xs sm:text-base capitalize mb-3 sm:mb-4 fade-up" style="animation-delay:0.05s">Security Guard Services</p>
        <h1 class="font-display font-black capitalize leading-tight sm:leading-none mb-4 sm:mb-6 fade-up" style="animation-delay:0.1s">
          <span class="text-3xl sm:text-4xl md:text-4xl lg:text-5xl text-white font-bold block">VIP & Personal</span>
          <span class="text-3xl sm:text-4xl md:text-4xl lg:text-5xl text-brand-yellow font-bold block">Security Officers</span>
        </h1>
        <p class="text-white/70 text-sm sm:text-base md:text-lg leading-relaxed mb-6 sm:mb-8 fade-up max-w-xl" style="animation-delay:0.2s">
          Hire trained, verified, and discreet Personal Security Officers (PSOs) for executives, dignitaries, celebrities, and high-profile individuals across Delhi NCR.
        </p>
        <div class="flex flex-col sm:flex-row flex-wrap gap-3 fade-up" style="animation-delay:0.3s">
          <a href="../contact" class="w-full sm:w-auto text-center bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold px-6 sm:px-7 py-3 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-base transition-colors shadow-lg">
            Get Free Quote
          </a>
          <a href="tel:+919430695171" class="w-full sm:w-auto flex items-center justify-center gap-2 border border-brand-yellow text-brand-yellow hover:bg-brand-yellow hover:text-brand-dark font-semibold px-6 sm:px-7 py-3 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-base transition-colors">
            <i class="fa fa-phone"></i> Call Now
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     2. WHO THIS SERVICE IS FOR — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-20 bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-8 sm:gap-10 lg:gap-14 items-center">
      <div class="relative fade-up order-2 lg:order-1">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="../assets/images/facility3.png" alt="Personal Security Officer escorting a client" class="w-full h-full object-cover" />
        </div>
      </div>
      <div class="order-1 lg:order-2">
        <p class="eyebrow text-brand-dark font-semibold capitalize text-base tracking-wide mb-3 fade-up">Who This Service Is For</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-3xl md:text-4xl text-brand-dark leading-tight sm:leading-none mb-4 fade-up">
          Built for High-Profile<br/><span style="color:#C9A91E;">Individuals & Dignitaries</span>
        </h2>
        <div class="y-divider-center mb-5 sm:mb-6 fade-up"></div>
        <p class="text-gray-500 text-lg leading-relaxed mb-6 sm:mb-8 fade-up">
          PSOs are deployed for individuals who require close, discreet protection during daily movement, travel, public appearances, or residential stays — backed by trained close-protection personnel.
        </p>
        <div class="grid grid-cols-2 gap-3">
          <div class="flex items-center gap-2 text-lg text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-lg flex-shrink-0"></i> Business executives</div>
          <div class="flex items-center gap-2 text-lg text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-lg flex-shrink-0"></i> Celebrities & artists</div>
          <div class="flex items-center gap-2 text-lg text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-lg flex-shrink-0"></i> Political dignitaries</div>
          <div class="flex items-center gap-2 text-lg text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-lg flex-shrink-0"></i> Foreign delegates</div>
          <div class="flex items-center gap-2 text-lg text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-lg flex-shrink-0"></i> HNI families</div>
          <div class="flex items-center gap-2 text-lg text-gray-600 fade-up"><i class="fa fa-check text-brand-dark text-lg flex-shrink-0"></i> Event & public appearances</div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     3. KEY RESPONSIBILITIES — light gray
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-14 fade-up">
      <p class="eyebrow text-brand-dark font-semibold capitalize text-base mb-3">Scope of Work</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-3xl md:text-4xl text-brand-dark mb-4">Key Responsibilities</h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
      <div class="bg-white border border-gray-200 rounded-xl p-4 sm:p-6 fade-up">
        <i class="fa fa-user-shield text-brand-dark text-lg sm:text-xl mb-2 sm:mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-xs sm:text-lg capitalize mb-1">Close Personal Protection</h4>
        <p class="text-gray-500 text-base leading-relaxed hidden sm:block">Constant, discreet presence near the protected individual.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-4 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-route text-brand-dark text-lg sm:text-xl mb-2 sm:mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-xs sm:text-lg capitalize mb-1">Route & Movement Planning</h4>
        <p class="text-gray-500 text-base leading-relaxed hidden sm:block">Advance route checks and safe travel planning.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-4 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-car text-brand-dark text-lg sm:text-xl mb-2 sm:mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-xs sm:text-lg capitalize mb-1">Travel & Vehicle Escort</h4>
        <p class="text-gray-500 text-base leading-relaxed hidden sm:block">Coordinated escort during local and outstation travel.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-4 sm:p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-users text-brand-dark text-lg sm:text-xl mb-2 sm:mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-xs sm:text-lg capitalize mb-1">Crowd & Access Management</h4>
        <p class="text-gray-500 text-base leading-relaxed hidden sm:block">Controlling access and crowd proximity at public events.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-4 sm:p-6 fade-up">
        <i class="fa fa-search text-brand-dark text-lg sm:text-xl mb-2 sm:mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-xs sm:text-lg capitalize mb-1">Venue & Advance Checks</h4>
        <p class="text-gray-500 text-base leading-relaxed hidden sm:block">Pre-visit assessment of venues and residential premises.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-4 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-bolt text-brand-dark text-lg sm:text-xl mb-2 sm:mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-xs sm:text-lg capitalize mb-1">Emergency Response</h4>
        <p class="text-gray-500 text-base leading-relaxed hidden sm:block">Immediate, trained response to any threat or emergency.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-4 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-user-secret text-brand-dark text-lg sm:text-xl mb-2 sm:mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-xs sm:text-lg capitalize mb-1">Discreet Protocol</h4>
        <p class="text-gray-500 text-base leading-relaxed hidden sm:block">Low-profile presence maintaining privacy and dignity.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-4 sm:p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-clipboard-list text-brand-dark text-lg sm:text-xl mb-2 sm:mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-xs sm:text-lg capitalize mb-1">Daily & Incident Reporting</h4>
        <p class="text-gray-500 text-base leading-relaxed hidden sm:block">Structured reporting on movement and any incidents.</p>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     4. STAFF TRAINING & VERIFICATION — DARK
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-20 bg-brand-dark">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-8 sm:gap-10 lg:gap-14 items-center">
      <div>
        <p class="eyebrow text-brand-yellow font-semibold capitalize text-base mb-3 fade-up">Trust & Compliance</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-3xl md:text-4xl text-white leading-tight sm:leading-none mb-4 fade-up">Staff Training &<br> Verification</h2>
        <div class="y-divider-center mb-5 sm:mb-6 fade-up"></div>
        <div class="space-y-4">
          <div class="flex gap-4 items-start fade-up">
            <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-file-alt text-brand-yellow text-sm"></i></div>
            <div><h4 class="font-semibold text-white text-lg">Document Verification</h4><p class="text-gray-400 text-base mt-0.5 leading-relaxed">ID, address proof, and employment history checks.</p></div>
          </div>
          <div class="flex gap-4 items-start fade-up" style="animation-delay:0.05s">
            <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-user-check text-brand-yellow text-sm"></i></div>
            <div><h4 class="font-semibold text-white text-lg">Background Checks</h4><p class="text-gray-400 text-base mt-0.5 leading-relaxed">Police verification support and thorough reference checks.</p></div>
          </div>
          <div class="flex gap-4 items-start fade-up" style="animation-delay:0.1s">
            <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-tshirt text-brand-yellow text-sm"></i></div>
            <div><h4 class="font-semibold text-white text-lg">Grooming & Presentation</h4><p class="text-gray-400 text-base mt-0.5 leading-relaxed">Formal, presentable appearance suited to client profile.</p></div>
          </div>
          <div class="flex gap-4 items-start fade-up" style="animation-delay:0.15s">
            <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-comments text-brand-yellow text-sm"></i></div>
            <div><h4 class="font-semibold text-white text-lg">Duty Briefing</h4><p class="text-gray-400 text-base mt-0.5 leading-relaxed">Client-specific schedule and protocol briefing before deployment.</p></div>
          </div>
          <div class="flex gap-4 items-start fade-up" style="animation-delay:0.2s">
            <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-exclamation-triangle text-brand-yellow text-sm"></i></div>
            <div><h4 class="font-semibold text-white text-lg">Emergency Awareness</h4><p class="text-gray-400 text-base mt-0.5 leading-relaxed">Trained to handle close-protection and emergency scenarios.</p></div>
          </div>
          <div class="flex gap-4 items-start fade-up" style="animation-delay:0.25s">
            <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-user-lock text-brand-yellow text-sm"></i></div>
            <div><h4 class="font-semibold text-white text-lg">Confidentiality</h4><p class="text-gray-400 text-base mt-0.5 leading-relaxed">Strict confidentiality of client schedule and movement.</p></div>
          </div>
        </div>
      </div>
      <div class="relative fade-up" style="animation-delay:0.1s">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="../assets/images/about2.png
        " alt="Personal Security Officer verification and training" class="w-full h-full object-cover" />
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     5. DEPLOYMENT OPTIONS — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-14 fade-up">
      <p class="eyebrow text-brand-dark font-semibold capitalize text-base mb-3">Flexible Staffing</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-3xl md:text-4xl text-brand-dark mb-4">Deployment Options</h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-7 gap-3 sm:gap-4">
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 text-center fade-up">
        <i class="fa fa-sun text-brand-dark mb-2 block text-base sm:text-lg"></i><span class="text-brand-dark text-[11px] sm:text-base font-bold capitalize">Day Shift</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 text-center fade-up" style="animation-delay:0.05s">
        <i class="fa fa-moon text-brand-dark mb-2 block text-base sm:text-lg"></i><span class="text-brand-dark text-[11px] sm:text-base font-bold capitalize">Night Shift</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 text-center fade-up" style="animation-delay:0.1s">
        <i class="fa fa-clock text-brand-dark mb-2 block text-base sm:text-lg"></i><span class="text-brand-dark text-[11px] sm:text-base font-bold capitalize">12-Hour Duty</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 text-center fade-up" style="animation-delay:0.15s">
        <i class="fa fa-clock text-brand-dark mb-2 block text-base sm:text-lg"></i><span class="text-brand-dark text-[11px] sm:text-base font-bold capitalize">24-Hour Duty</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 text-center fade-up">
        <i class="fa fa-user text-brand-dark mb-2 block text-base sm:text-lg"></i><span class="text-brand-dark text-[11px] sm:text-base font-bold capitalize">Single PSO</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 text-center fade-up" style="animation-delay:0.05s">
        <i class="fa fa-users text-brand-dark mb-2 block text-base sm:text-lg"></i><span class="text-brand-dark text-[11px] sm:text-base font-bold capitalize">PSO Team</span>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 sm:p-5 text-center fade-up col-span-2 sm:col-span-1" style="animation-delay:0.1s">
        <i class="fa fa-plane text-brand-dark mb-2 block text-base sm:text-lg"></i><span class="text-brand-dark text-[11px] sm:text-base font-bold capitalize">Outstation Travel</span>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     6. INDUSTRIES / SETTINGS COVERED — DARK
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-20 bg-brand-dark">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-14 fade-up">
      <p class="eyebrow text-brand-yellow font-semibold capitalize text-base mb-3">Where We Deploy</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-3xl md:text-4xl text-white mb-4">Settings We Cover</h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3 sm:gap-4">
      <a href="../industries/offices" class="bg-white/5 border border-white/10 hover:border-brand-yellow rounded-xl p-4 sm:p-5 text-center transition-all hover:bg-brand-yellow/10 fade-up">
        <i class="fa fa-building text-brand-yellow mb-2 block text-base sm:text-lg"></i><span class="text-white text-[11px] sm:text-base font-semibold">Corporate Offices</span>
      </a>
      <a href="../industries/residential" class="bg-white/5 border border-white/10 hover:border-brand-yellow rounded-xl p-4 sm:p-5 text-center transition-all hover:bg-brand-yellow/10 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-home text-brand-yellow mb-2 block text-base sm:text-lg"></i><span class="text-white text-[11px] sm:text-base font-semibold">Private Residences</span>
      </a>
      <a href="../contact" class="bg-white/5 border border-white/10 hover:border-brand-yellow rounded-xl p-4 sm:p-5 text-center transition-all hover:bg-brand-yellow/10 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-plane-departure text-brand-yellow mb-2 block text-base sm:text-lg"></i><span class="text-white text-[11px] sm:text-base font-semibold">Airport Transfers</span>
      </a>
      <a href="../contact" class="bg-white/5 border border-white/10 hover:border-brand-yellow rounded-xl p-4 sm:p-5 text-center transition-all hover:bg-brand-yellow/10 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-users text-brand-yellow text-sm sm:text-xl mb-1 block"></i><span class="text-white text-[11px] sm:text-base font-semibold">Public Events</span>
      </a>
      <a href="../contact" class="bg-white/5 border border-white/10 hover:border-brand-yellow rounded-xl p-4 sm:p-5 text-center transition-all hover:bg-brand-yellow/10 fade-up" style="animation-delay:0.2s">
        <i class="fa fa-hotel text-brand-yellow mb-2 block text-base sm:text-lg"></i><span class="text-white text-[11px] sm:text-base font-semibold">Hotels & Stays</span>
      </a>
      <a href="../contact" class="bg-white/5 border border-white/10 hover:border-brand-yellow rounded-xl p-4 sm:p-5 text-center transition-all hover:bg-brand-yellow/10 fade-up">
        <i class="fa fa-store text-brand-yellow mb-2 block text-base sm:text-lg"></i><span class="text-white text-[11px] sm:text-base font-semibold">Retail & Mall Visits</span>
      </a>
      <a href="../contact" class="bg-white/5 border border-white/10 hover:border-brand-yellow rounded-xl p-4 sm:p-5 text-center transition-all hover:bg-brand-yellow/10 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-film text-brand-yellow mb-2 block text-base sm:text-lg"></i><span class="text-white text-[11px] sm:text-base font-semibold">Shoots & Shows</span>
      </a>
      <a href="../contact" class="bg-white/5 border border-white/10 hover:border-brand-yellow rounded-xl p-4 sm:p-5 text-center transition-all hover:bg-brand-yellow/10 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-route text-brand-yellow mb-2 block text-base sm:text-lg"></i><span class="text-white text-[11px] sm:text-base font-semibold">Outstation Travel</span>
      </a>
      <a href="../contact" class="bg-white/5 border border-white/10 hover:border-brand-yellow rounded-xl p-4 sm:p-5 text-center transition-all hover:bg-brand-yellow/10 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-landmark text-brand-yellow mb-2 block text-base sm:text-lg"></i><span class="text-white text-[11px] sm:text-base font-semibold">Official Functions</span>
      </a>
      <a href="../contact" class="bg-white/5 border border-white/10 hover:border-brand-yellow rounded-xl p-4 sm:p-5 text-center transition-all hover:bg-brand-yellow/10 fade-up col-span-2 sm:col-span-1" style="animation-delay:0.2s">
        <i class="fa fa-shield-alt text-brand-yellow mb-2 block text-base sm:text-lg"></i><span class="text-white text-[11px] sm:text-base font-semibold">High-Profile Visits</span>
      </a>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     7. WHY CHOOSE US FOR THIS SERVICE — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-14 fade-up">
      <p class="eyebrow text-brand-dark font-semibold capitalize text-base mb-3">Why Choose Us</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-3xl md:text-4xl text-brand-dark mb-4">Built On Discretion & Trust</h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6">
      <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 sm:p-8 fade-up group hover:border-brand-yellow transition-colors">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-yellow/20 flex items-center justify-center mb-4 sm:mb-5 group-hover:bg-brand-yellow transition-colors"><i class="fa fa-bolt text-brand-dark text-xl sm:text-2xl"></i></div>
        <h3 class="font-display font-bold text-brand-dark capitalize text-lg sm:text-l mb-2 sm:mb-3">Fast Deployment</h3>
        <p class="text-gray-500 text-base leading-relaxed">Ready pool of trained, verified PSOs for quick assignment.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 sm:p-8 fade-up group hover:border-brand-yellow transition-colors" style="animation-delay:0.05s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-yellow/20 flex items-center justify-center mb-4 sm:mb-5 group-hover:bg-brand-yellow transition-colors"><i class="fa fa-medal text-brand-dark text-xl sm:text-2xl"></i></div>
        <h3 class="font-display font-bold text-brand-dark capitalize text-lg sm:text-l mb-2 sm:mb-3">Experienced Manpower</h3>
        <p class="text-gray-500 text-base leading-relaxed">PSOs trained for close protection of high-profile individuals.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 sm:p-8 fade-up group hover:border-brand-yellow transition-colors" style="animation-delay:0.1s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-yellow/20 flex items-center justify-center mb-4 sm:mb-5 group-hover:bg-brand-yellow transition-colors"><i class="fa fa-clipboard-list text-brand-dark text-xl sm:text-2xl"></i></div>
        <h3 class="font-display font-bold text-brand-dark capitalize text-lg sm:text-l mb-2 sm:mb-3">Customised Protection Plan</h3>
        <p class="text-gray-500 text-base leading-relaxed">Plans tailored to client schedule, profile, and risk level.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 sm:p-8 fade-up group hover:border-brand-yellow transition-colors" style="animation-delay:0.15s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-yellow/20 flex items-center justify-center mb-4 sm:mb-5 group-hover:bg-brand-yellow transition-colors"><i class="fa fa-user-check text-brand-dark text-xl sm:text-2xl"></i></div>
        <h3 class="font-display font-bold text-brand-dark capitalize text-lg sm:text-l mb-2 sm:mb-3">Regular Supervision</h3>
        <p class="text-gray-500 text-base leading-relaxed">Supervisor coordination to maintain protocol discipline.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 sm:p-8 fade-up group hover:border-brand-yellow transition-colors" style="animation-delay:0.2s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-yellow/20 flex items-center justify-center mb-4 sm:mb-5 group-hover:bg-brand-yellow transition-colors"><i class="fa fa-sync-alt text-brand-dark text-xl sm:text-2xl"></i></div>
        <h3 class="font-display font-bold text-brand-dark capitalize text-lg sm:text-l mb-2 sm:mb-3">Replacement Support</h3>
        <p class="text-gray-500 text-base leading-relaxed">Quick PSO replacement in case of leave or unavailability.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 sm:p-8 fade-up group hover:border-brand-yellow transition-colors" style="animation-delay:0.25s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-yellow/20 flex items-center justify-center mb-4 sm:mb-5 group-hover:bg-brand-yellow transition-colors"><i class="fa fa-user-lock text-brand-dark text-xl sm:text-2xl"></i></div>
        <h3 class="font-display font-bold text-brand-dark capitalize text-lg sm:text-l mb-2 sm:mb-3">Discreet & Confidential</h3>
        <p class="text-gray-500 text-base leading-relaxed">Low-profile conduct that protects client privacy at all times.</p>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     8. LEAD MAGNET — image dark background
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-20 relative overflow-hidden">
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.95) 0%, rgba(10,10,10,0.85) 100%), url('../assets/images/service2.png') center/cover no-repeat;"></div>
  <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-8 sm:gap-12 items-center">
      <div class="fade-up">
        <p class="eyebrow text-brand-yellow font-semibold capitalize text-base mb-3">Free Assessment</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-white leading-tight sm:leading-none mb-4">
          Personal Security<br/><span class="text-brand-yellow">Requirement Assessment</span>
        </h2>
        <p class="text-white/70 text-lg leading-relaxed mb-6">
          Share your profile, schedule, and travel pattern, and we'll help you assess the right PSO setup and team size for your protection.
        </p>
        <ul class="space-y-2 text-lg text-white/80">
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs flex-shrink-0"></i> Risk & exposure assessment points</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs flex-shrink-0"></i> Travel & movement protocol guidance</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs flex-shrink-0"></i> 100% free, no obligation</li>
        </ul>
      </div>
      <div class="bg-white rounded-2xl p-6 sm:p-8 fade-up" style="animation-delay:0.1s">
        <h3 class="font-display font-bold text-brand-dark capitalize text-lg sm:text-xl mb-5 sm:mb-6">Get Free Assessment</h3>
        <form action="../../includes/contact.php" method="POST" class="space-y-4">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div><label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Name *</label><input type="text" name="name" required placeholder="Your name" class="input-field" /></div>
            <div><label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Phone *</label><input type="tel" name="phone" required placeholder="+91 XXXXX" class="input-field" /></div>
          </div>
          <div><label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Location</label>
            <select name="location" class="input-field">
              <option value="">Select area</option>
              <option>Delhi</option><option>Noida</option><option>Greater Noida</option>
              <option>Gurgaon</option><option>Faridabad</option><option>Ghaziabad</option>
              <option>Manesar</option><option>Sonipat</option><option>Other NCR</option>
            </select>
          </div>
          <button type="submit" class="w-full bg-brand-dark hover:bg-gray-800 text-white font-bold py-3.5 rounded-lg capitalize tracking-wider text-sm transition-colors flex items-center justify-center gap-2">
            <i class="fa fa-download text-xs"></i> Get Free Assessment
          </button>
        </form>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     9. FAQs — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-20 bg-white">
  <div class="max-w-4xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 fade-up">
      <p class="eyebrow text-brand-dark font-semibold capitalize text-base mb-3">Common Questions</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark mb-4">Frequently Asked</h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="space-y-3">
      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">What is a Personal Security Officer (PSO)?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">A PSO is a trained close-protection professional assigned to a specific individual, responsible for their personal safety during daily movement, travel, and public appearances.</p>
        </div>
      </div>
      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.05s">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can I get a PSO for outstation or international travel?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes, we provide PSOs for outstation travel within India along with advance route and venue planning support.</p>
        </div>
      </div>
      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.1s">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Are PSOs background verified before deployment?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes, every PSO undergoes ID verification, address checks, background screening, and a confidentiality briefing before assignment.</p>
        </div>
      </div>
      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.15s">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can I hire a PSO for a single event only?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes, we offer single-event, short-term, and long-term PSO deployment depending on your requirement.</p>
        </div>
      </div>
      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.2s">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you provide a team of PSOs for larger protection needs?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes, we can deploy a multi-member PSO team with a lead officer for higher-risk profiles, large events, or family protection.</p>
        </div>
      </div>
      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.25s">
        <button class="faq-toggle w-full flex justify-between items-center px-5 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Is confidentiality maintained regarding the client's schedule?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-5 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes, all PSOs are briefed on strict confidentiality regarding client movement, schedule, and personal information.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     10. FINAL CTA — YELLOW
═══════════════════════════════════════════ -->
<section class="relative py-14 sm:py-20 overflow-hidden">
  <div class="absolute inset-0 bg-brand-yellow"></div>
  <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 text-center fade-up">
    <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark leading-tight sm:leading-none mb-4">
      Need a VIP or Personal<br/>Security Officer?
    </h2>
    <p class="text-brand-dark/80 text-sm sm:text-lg mb-6 sm:mb-8 max-w-lg mx-auto">
      Share your requirement and our team will get back to you with a callback and a free quote.
    </p>
    <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-4">
      <a href="../contact" class="w-full sm:w-auto text-center bg-brand-dark text-white hover:bg-gray-800 font-bold px-8 py-3.5 rounded capitalize tracking-wider text-base transition-colors shadow-lg">
        Request Callback
      </a>
      <a href="tel:+919430695171" class="w-full sm:w-auto flex items-center justify-center gap-2 border-2 border-brand-dark/60 text-brand-dark hover:border-brand-dark font-bold px-8 py-3.5 rounded capitalize tracking-wider text-base transition-colors">
        <i class="fa fa-phone"></i> +91 94306 95171
      </a>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>