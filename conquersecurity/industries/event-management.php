<?php
/* ════════════════════════════════════════════════════════════
   INDUSTRY PAGE TEMPLATE (RESPONSIVE)
   Duplicate this file for every industry. Only the variables
   below need to change — the markup stays identical.
   This instance is filled in for: EVENTS & CROWD MANAGEMENT
═══════════════════════════════════════════════════════════ */

$industry_name        = "Events & Crowd Management";
$industry_slug        = "events";
$industry_type        = "events, exhibitions, and large public gatherings";
$hero_image           = "../assets/images/event1.png";
$hero_image_alt       = "Security guards managing crowd at an event entrance";
$lead_magnet_title    = "Event Security and Crowd Management Planning Sheet";
$lead_magnet_offer    = "Get a practical planning sheet to review entry control, crowd flow, and emergency response for your event or gathering.";

$page_title       = "$industry_name Security Guard Services in Delhi NCR | Conquer Services";
$page_description = "Professional security guards and supervisors for $industry_type, designed to protect attendees, staff, assets, and daily operations across Delhi NCR.";
$active_page      = "industries";
$base_path        = "../";
include '../includes/header.php';
?>

<style>
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }

  /* ---- Responsive helpers ---- */
  @media (max-width: 640px) {
    .y-divider-center { width: 44px; height: 3px; }
  }

  /* Mobile stacked "table" for deployment section */
  .deploy-table-desktop { display: none; }
  .deploy-card-mobile { display: block; }
  @media (min-width: 640px) {
    .deploy-table-desktop { display: table; width: 100%; }
    .deploy-card-mobile { display: none; }
  }
</style>

<!-- ══════════════════════════════════════════
     1. HERO SECTION
═══════════════════════════════════════════ -->
<section class="relative h-auto min-h-[440px] sm:h-[70vh] sm:min-h-[420px] overflow-hidden bg-brand-dark py-14 sm:py-0">
  <img src="<?php echo $hero_image; ?>" alt="<?php echo $hero_image_alt; ?>" class="absolute inset-0 w-full h-full object-cover" />
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.28) 0%, rgba(10,10,10,0.25) 30%);"></div>
  <div class="absolute inset-0 bg-gradient-to-r from-brand-dark via-brand-dark/60 to-transparent"></div>

  <div class="relative z-10 h-full flex items-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
      <div class="max-w-2xl">
        <p class="text-brand-yellow font-display font-semibold text-xs sm:text-base capitalize tracking-widest mb-3 sm:mb-4 fade-up">
          Industry Security Services
        </p>
        <h1 class="font-display font-black capitalize leading-tight mb-5 sm:mb-6 fade-up" style="animation-delay:0.1s">
          <span class="text-2xl xs:text-3xl sm:text-4xl md:text-5xl text-white font-bold block"><?php echo $industry_name; ?></span>
          <span class="text-2xl xs:text-3xl sm:text-4xl md:text-5xl text-brand-yellow font-bold block">Security Services in Delhi NCR</span>
        </h1>
        <p class="text-white/70 text-sm sm:text-base md:text-lg leading-relaxed mb-6 sm:mb-8 fade-up max-w-xl" style="animation-delay:0.2s">
          Professional security guards and supervisors for <?php echo $industry_type; ?>, designed to protect attendees, staff, assets, and daily operations.
        </p>
        <div class="flex flex-row flex-wrap gap-2.5 sm:gap-3 fade-up" style="animation-delay:0.3s">
          <a href="../contact" class="flex-1 sm:flex-none text-center whitespace-nowrap bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold px-4 sm:px-7 py-3 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-base transition-colors shadow-lg">
            Get Free Site Assessment
          </a>
          <a href="tel:+919430695171" class="flex-1 sm:flex-none justify-center whitespace-nowrap flex items-center gap-2 border border-brand-yellow text-brand-yellow hover:bg-brand-yellow hover:text-brand-dark font-semibold px-4 sm:px-7 py-3 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-base transition-colors">
            <i class="fa fa-phone"></i> Call Now
          </a>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- ══════════════════════════════════════════
     2. INDUSTRY SECURITY CHALLENGES — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">The Problem</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl font-bold text-brand-dark mb-4">Security Challenges for <br><?php echo $industry_name; ?></h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 max-w-2xl mx-auto text-lg leading-relaxed">
        Events bring large, temporary crowds into a fixed space in a short window — common gaps we see, and why a structured guard deployment matters.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-door-open text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Unauthorised Entry</h3>
        <p class="text-gray-500 text-base leading-relaxed">Without ticket or pass checks, unverified individuals can slip into the venue.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-people-group text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Crowd Control Issues</h3>
        <p class="text-gray-500 text-base leading-relaxed">Large gatherings at entry, stage, or exit points can turn chaotic without trained control.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-id-badge text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Visitor & Guest Mismanagement</h3>
        <p class="text-gray-500 text-base leading-relaxed">Mixing general attendees, VIPs, and vendors without a process creates confusion and risk.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-square-parking text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Parking & Traffic Issues</h3>
        <p class="text-gray-500 text-base leading-relaxed">Sudden vehicle inflow around the venue can cause congestion and safety hazards.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.2s">
        <i class="fa fa-truck-medical text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Emergency Response Gaps</h3>
        <p class="text-gray-500 text-base leading-relaxed">A stampede, altercation, or medical emergency needs an immediate, coordinated response.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.25s">
        <i class="fa fa-moon text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Night Event Risks</h3>
        <p class="text-gray-500 text-base leading-relaxed">Evening and late-night events bring lower visibility and higher risk of incidents.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-dolly text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Equipment & Material Movement</h3>
        <p class="text-gray-500 text-base leading-relaxed">Stage, sound, and vendor equipment moving in and out without verification or logging.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-door-closed text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Exit & Evacuation Planning</h3>
        <p class="text-gray-500 text-base leading-relaxed">Poorly managed exits can turn a routine dispersal into a dangerous bottleneck.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-shield-halved text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-lg text-brand-dark capitalize mb-1">Attendee & Staff Safety</h3>
        <p class="text-gray-500 text-base leading-relaxed">Without visible security, attendees and event staff can feel and be unsafe in large crowds.</p>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     3. OUR SECURITY SOLUTION — light gray
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
    <div>
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3 fade-up">The Solution</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl font-bold text-brand-dark mb-4 fade-up" style="animation-delay:0.05s">
        Our Security<br/>Deployment Model
      </h2>
      <div class="y-divider-center mb-5 fade-up" style="animation-delay:0.1s"></div>
      <p class="text-gray-500 text-lg leading-relaxed mb-8 fade-up" style="animation-delay:0.1s">
        A layered deployment that covers every entry point, crowd zone, and incident scenario at your <?php echo $industry_type; ?>.
      </p>

      <div class="grid grid-cols-1 xs:grid-cols-2 gap-5">
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.1s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-door-closed text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-base">Entry Gate Security</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.12s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-user-check text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-base">Visitor Verification</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.14s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-route text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-base">Patrol Points</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.16s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-video text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-base">CCTV Coordination</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.18s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-key text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-base">Access Control Support</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.2s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-truck-medical text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-base">Emergency Response</h4></div>
        </div>
      
        
      </div>
    </div>

    <div class="fade-up order-first lg:order-last">
      <img src="../assets/images/industry10.png" alt="Security guards managing entry at an event" class="w-full h-56 xs:h-72 sm:h-96 lg:h-full object-cover rounded-2xl shadow-lg" />
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     4. RECOMMENDED MANPOWER DEPLOYMENT — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-20 bg-white">
  <div class="max-w-5xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Quick Reference</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl font-bold text-brand-dark mb-4">Recommended Manpower Deployment</h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 max-w-xl mx-auto text-lg leading-relaxed">
        A general guide — final deployment is confirmed after a free site visit and headcount estimate.
      </p>
    </div>

    <!-- Desktop / tablet table -->
    <div class="overflow-x-auto fade-up">
      <table class="deploy-table-desktop text-base border border-gray-200 rounded-xl overflow-hidden">
        <thead>
          <tr class="bg-brand-dark text-white text-left">
            <th class="px-6 py-4 font-semibold capitalize text-lg tracking-wider">Site Type</th>
            <th class="px-6 py-4 font-semibold capitalize text-lg tracking-wider">Suggested Deployment</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr class="bg-gray-50">
            <td class="px-6 py-4 font-semibold text-brand-dark">Small Event <span class="block text-sm font-normal text-gray-400">(Private Function / Small Gathering)</span></td>
            <td class="px-6 py-4 text-gray-600">1 to 2 guards</td>
          </tr>
          <tr class="bg-white">
            <td class="px-6 py-4 font-semibold text-brand-dark">Medium Event <span class="block text-sm font-normal text-gray-400">(Corporate Event / Wedding)</span></td>
            <td class="px-6 py-4 text-gray-600">2 to 6 guards</td>
          </tr>
          <tr class="bg-gray-50">
            <td class="px-6 py-4 font-semibold text-brand-dark">Large Event <span class="block text-sm font-normal text-gray-400">(Exhibition / Concert / Public Gathering)</span></td>
            <td class="px-6 py-4 text-gray-600">Multiple guards with supervisor</td>
          </tr>
          <tr class="bg-white">
            <td class="px-6 py-4 font-semibold text-brand-dark">High-Risk Event <span class="block text-sm font-normal text-gray-400">(High Footfall / VIP Presence)</span></td>
            <td class="px-6 py-4 text-gray-600">Guards, supervisor, CCTV, QRT support</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Mobile stacked cards (replaces table below sm breakpoint) -->
    <div class="deploy-card-mobile space-y-3 fade-up">
      <div class="border border-gray-200 rounded-xl p-4 bg-gray-50">
        <p class="font-semibold text-brand-dark text-sm">Small Event</p>
        <p class="text-xs text-gray-400 mb-2">Private Function / Small Gathering</p>
        <p class="text-sm text-gray-600"><span class="font-semibold text-brand-dark">Deployment:</span> 1 to 2 guards</p>
      </div>
      <div class="border border-gray-200 rounded-xl p-4 bg-white">
        <p class="font-semibold text-brand-dark text-sm">Medium Event</p>
        <p class="text-xs text-gray-400 mb-2">Corporate Event / Wedding</p>
        <p class="text-sm text-gray-600"><span class="font-semibold text-brand-dark">Deployment:</span> 2 to 6 guards</p>
      </div>
      <div class="border border-gray-200 rounded-xl p-4 bg-gray-50">
        <p class="font-semibold text-brand-dark text-sm">Large Event</p>
        <p class="text-xs text-gray-400 mb-2">Exhibition / Concert / Public Gathering</p>
        <p class="text-sm text-gray-600"><span class="font-semibold text-brand-dark">Deployment:</span> Multiple guards with supervisor</p>
      </div>
      <div class="border border-gray-200 rounded-xl p-4 bg-white">
        <p class="font-semibold text-brand-dark text-sm">High-Risk Event</p>
        <p class="text-xs text-gray-400 mb-2">High Footfall / VIP Presence</p>
        <p class="text-sm text-gray-600"><span class="font-semibold text-brand-dark">Deployment:</span> Guards, supervisor, CCTV, QRT support</p>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     5. DUTIES & RESPONSIBILITIES — light gray
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">On Duty</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl font-bold text-brand-dark mb-4">Duties & Responsibilities</h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 max-w-2xl mx-auto text-lg leading-relaxed">
        Day-to-day responsibilities our guards carry out at <?php echo $industry_type; ?>.
      </p>
    </div>

    <div class="grid grid-cols-1 xs:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-ticket text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Ticket & Pass Verification</h3>
        <p class="text-gray-500 text-base leading-relaxed">Checking tickets, invitations, and passes before allowing entry into the venue.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-people-arrows text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Crowd Flow Management</h3>
        <p class="text-gray-500 text-base leading-relaxed">Guiding attendee movement at entry, stage areas, and food/vendor zones.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-user-tie text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">VIP & Guest Coordination</h3>
        <p class="text-gray-500 text-base leading-relaxed">Managing separate access and movement for VIP guests and speakers.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-square-parking text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Parking & Traffic Management</h3>
        <p class="text-gray-500 text-base leading-relaxed">Regulating attendee, vendor, and VIP vehicle movement around the venue.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up">
        <i class="fa fa-door-closed text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Exit & Evacuation Support</h3>
        <p class="text-gray-500 text-base leading-relaxed">Directing safe and orderly dispersal at event close or during emergencies.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-video text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">CCTV & Stage Area Monitoring</h3>
        <p class="text-gray-500 text-base leading-relaxed">Coordinating with CCTV operators and maintaining watch near stage and backstage zones.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-triangle-exclamation text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Incident Reporting</h3>
        <p class="text-gray-500 text-base leading-relaxed">Logging and escalating altercations, medical incidents, or unusual activity promptly.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-fire-extinguisher text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-lg mb-1">Emergency & Evacuation Support</h3>
        <p class="text-gray-500 text-base leading-relaxed">Assisting with evacuation procedures during fire, medical, or crowd-related emergencies.</p>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     6. SUITABLE SERVICES — WHITE (cross-links)
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Related Services</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl font-bold text-brand-dark mb-4">Suitable Services</h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 max-w-xl mx-auto text-lg leading-relaxed">
        Services commonly combined for <?php echo $industry_type; ?> security.
      </p>
    </div>

    <div class="grid grid-cols-1 xs:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
      <a href="../security-guard-services/unarmed-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-shield-alt text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-base text-brand-dark capitalize leading-tight mb-2">Unarmed Security Guards</h3>
        <div class="mt-2 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../security-guard-services/armed-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up" style="animation-delay:0.05s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-user-shield text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-base text-brand-dark capitalize leading-tight mb-2">Armed Security Guards</h3>
        <div class="mt-2 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../security-guard-services/lady-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up" style="animation-delay:0.1s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-venus text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-base text-brand-dark capitalize leading-tight mb-2">Lady Security Guards</h3>
        <div class="mt-2 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../technology&support/cctv-monitoring" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up" style="animation-delay:0.15s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-video text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-base text-brand-dark capitalize leading-tight mb-2">CCTV Monitoring</h3>
        <div class="mt-2 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../technology&support/visitor-management" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-address-card text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-base text-brand-dark capitalize leading-tight mb-2">Visitor Management</h3>
        <div class="mt-2 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../technology&support/patrolling-quick-response-team" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up" style="animation-delay:0.05s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-person-walking text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-base text-brand-dark capitalize leading-tight mb-2">Patrolling & QRT</h3>
        <div class="mt-2 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../facility-management/fire-safety" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 group fade-up" style="animation-delay:0.1s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-fire-extinguisher text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-base text-brand-dark capitalize leading-tight mb-2">Fire & Safety Personnel</h3>
        <div class="mt-2 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../industries" class="service-card bg-brand-dark border border-brand-dark rounded-xl p-5 sm:p-6 group fade-up flex flex-col justify-center items-center text-center min-h-[140px]" style="animation-delay:0.15s">
        <i class="fa fa-grip text-brand-yellow text-2xl mb-3"></i>
        <h3 class="font-display font-bold text-base text-white capitalize leading-tight">View All Industries</h3>
      </a>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     7. LEAD MAGNET SECTION
═══════════════════════════════════════════ -->
<section class="relative py-14 sm:py-20 overflow-hidden bg-gray-50">
  <div class="max-w-6xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-0 bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-200 fade-up">

      <div class="p-6 sm:p-10 lg:p-12 flex flex-col justify-center">
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Free Download</p>
        <h2 class="font-display font-black capitalize text-xl sm:text-2xl md:text-3xl text-brand-dark mb-4 leading-tight">
          <?php echo $lead_magnet_title; ?>
        </h2>
        <p class="text-gray-500 text-lg leading-relaxed mb-6">
          <?php echo $lead_magnet_offer; ?>
        </p>
        <div class="space-y-3">
          <div class="flex items-center gap-3 text-lg text-gray-600"><i class="fa fa-check-circle text-brand-dark"></i> Practical, easy-to-use planning sheet</div>
          <div class="flex items-center gap-3 text-lg text-gray-600"><i class="fa fa-check-circle text-brand-dark"></i> Built from real event deployments</div>
          <div class="flex items-center gap-3 text-lg text-gray-600"><i class="fa fa-check-circle text-brand-dark"></i> Free, no obligation</div>
        </div>
      </div>

      <div class="bg-brand-dark p-6 sm:p-10 lg:p-12">
        <h3 class="font-display font-bold text-white capitalize text-base sm:text-lg mb-1">Get the Free Planning Sheet</h3>
        <p class="text-white/50 text-lg mb-6">Sent straight to your inbox / WhatsApp</p>
        <form action="../includes/contact.php" method="POST" class="space-y-4">
          <input type="hidden" name="industry" value="<?php echo $industry_name; ?>" />
          <input type="text" name="name" required placeholder="Full Name" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <input type="tel" name="phone" required placeholder="Phone Number" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <input type="email" name="email" placeholder="Email Address" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <input type="text" name="company" placeholder="Event / Organisation Name" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <button type="submit" class="w-full bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold py-3.5 rounded capitalize tracking-wider text-sm transition-colors">
            Download Planning Sheet
          </button>
        </form>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     8. FAQs — WHITE
═══════════════════════════════════════════ -->
<section class="py-14 sm:py-20 bg-white">
  <div class="max-w-4xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Common Questions</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl font-bold text-brand-dark mb-4">Frequently Asked</h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="space-y-3" id="faq-container">
      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">How many guards do I need for my event?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-lg leading-relaxed">It depends on expected footfall, venue layout, and event type. Small private functions need 1 to 2 guards, while large exhibitions or public gatherings require multiple guards with a supervisor.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.05s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you provide bouncers along with security guards for events?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes, we provide bouncers alongside our regular security guards for events that need a stronger physical presence at entry points or near the stage.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.1s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can your team handle ticket and pass verification at the entrance?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. Our guards can manage ticket, invitation, and pass checks at the gate, working alongside your event coordination team to keep entry organised.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.15s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Is security available for a single-day event or short-duration function?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes, event security deployments are commonly single-day or short-duration bookings, and manpower is scaled based on your event date, hours, and expected footfall.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.2s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can your guards manage crowd flow at exits and after the event ends?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. Our guards are positioned at exits to manage orderly dispersal, preventing the bottlenecks that often occur right after an event ends.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.25s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you provide separate security for VIP guests or speakers?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes, we can provide dedicated VIP/PSO security or escort staff for guests, speakers, or dignitaries attending your event, separate from general crowd management guards.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.3s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Will a supervisor be present on-site during the event?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-5 text-gray-500 text-base leading-relaxed">Yes. For events above a certain size, a supervisor is deployed on-site to coordinate the guard team and act as the single point of contact for your event organisers.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     9. FINAL CTA — YELLOW
═══════════════════════════════════════════ -->
<section class="relative py-14 sm:py-20 overflow-hidden">
  <div class="absolute inset-0 bg-brand-yellow"></div>
  <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 text-center fade-up">
    <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl font-bold text-brand-dark leading-tight sm:leading-none mb-4">
      Need Security Guards for<br class="hidden xs:block"/>Your Event?
    </h2>
    <p class="text-brand-dark/80 text-sm sm:text-lg mb-8 max-w-lg mx-auto">
      Get a free site assessment and a crowd management plan built specifically for your event.
    </p>
    <div class="flex flex-row flex-wrap justify-center gap-3 sm:gap-4">
      <a href="../contact" class="flex-1 sm:flex-none text-center whitespace-nowrap bg-brand-dark text-white hover:bg-gray-800 font-bold px-4 sm:px-8 py-3 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-base transition-colors shadow-lg">
        Get Free Site Assessment
      </a>
      <a href="tel:+919430695171" class="flex-1 sm:flex-none justify-center whitespace-nowrap flex items-center gap-2 border-2 border-brand-dark/60 text-brand-dark hover:border-brand-dark font-bold px-4 sm:px-8 py-3 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-base transition-colors">
        <i class="fa fa-phone"></i> +91 94306 95171
      </a>
    </div>
  </div>
</section>

<script>
  function toggleFAQ(btn) {
    const body = btn.nextElementSibling;
    const icon = btn.querySelector('i');
    const isOpen = body.style.maxHeight && body.style.maxHeight !== '0px';

    document.querySelectorAll('.faq-body').forEach(b => { b.style.maxHeight = '0px'; });
    document.querySelectorAll('.faq-toggle i').forEach(i => i.classList.remove('rotate-45'));

    if (!isOpen) {
      body.style.maxHeight = body.scrollHeight + 'px';
      icon.classList.add('rotate-45');
    }
  }
</script>

<?php include '../includes/footer.php'; ?>