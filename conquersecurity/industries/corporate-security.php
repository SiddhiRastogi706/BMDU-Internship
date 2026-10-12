<?php
/* ════════════════════════════════════════════════════════════
   INDUSTRY PAGE TEMPLATE
   Duplicate this file for every industry. Only the variables
   below need to change — the markup stays identical.
   This instance is filled in for: CORPORATE OFFICES
═══════════════════════════════════════════════════════════ */

$industry_name        = "Corporate Offices";              // e.g. "Factories & Industrial Units"
$industry_slug        = "corporate-security";              // used in URL / file name
$industry_type        = "corporate offices";                // lowercase, used inline in subtext
$hero_image           = "https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=1600&q=80";
$hero_image_alt       = "Corporate office lobby security";
$lead_magnet_title    = "Office Security & Visitor Management Checklist";
$lead_magnet_offer    = "Get a practical checklist to review entry security, visitor handling, and access control for your office premises.";

$page_title       = "$industry_name Security Guard Services in Delhi NCR | Conquer Services";
$page_description = "Professional security guards and supervisors for $industry_type, designed to protect people, property, assets, visitors, and daily operations across Delhi NCR.";
$active_page      = "industries";
$base_path        = "../";
include '../includes/header.php';
?>

<style>
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
</style>

<!-- ══════════════════════════════════════════
     1. HERO SECTION
═══════════════════════════════════════════ -->
<section class="relative h-[55vh] min-h-[420px] overflow-hidden bg-brand-dark">
  <img src="<?php echo $hero_image; ?>" alt="<?php echo $hero_image_alt; ?>" class="absolute inset-0 w-full h-full object-cover" />
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.86) 0%, rgba(10,10,10,0.5) 100%);"></div>
  <div class="absolute inset-0 bg-gradient-to-r from-brand-dark via-brand-dark/60 to-transparent"></div>

  <div class="relative z-10 h-full flex items-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
      <div class="max-w-2xl">
        <p class="text-brand-yellow font-display font-semibold text-sm uppercase tracking-widest2 mb-4 fade-up">
          Industry Security Services
        </p>
        <h1 class="font-display font-black uppercase leading-tight mb-6 fade-up" style="animation-delay:0.1s">
          <span class="text-3xl sm:text-4xl md:text-5xl text-white font-medium block"><?php echo $industry_name; ?> Security</span>
          <span class="text-3xl sm:text-4xl md:text-5xl text-brand-yellow font-medium block">Guard Services in Delhi NCR</span>
        </h1>
        <p class="text-white/70 text-base sm:text-lg leading-relaxed mb-8 fade-up max-w-xl" style="animation-delay:0.2s">
          Professional security guards and supervisors for <?php echo $industry_type; ?>, designed to protect people, property, assets, visitors, and daily operations.
        </p>
        <div class="flex flex-wrap gap-3 fade-up" style="animation-delay:0.3s">
          <a href="../../contact" class="bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold px-7 py-3.5 rounded uppercase tracking-wider text-sm transition-colors shadow-lg">
            Get Free Site Assessment
          </a>
          <a href="tel:+919430695171" class="flex items-center gap-2 border border-brand-yellow text-brand-yellow hover:bg-brand-yellow hover:text-brand-dark font-semibold px-7 py-3.5 rounded uppercase tracking-wider text-sm transition-colors">
            <i class="fa fa-phone"></i> Call Now
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Breadcrumb -->
<div class="bg-gray-50 border-b border-gray-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 py-3">
    <nav class="text-xs text-gray-500 flex items-center gap-2">
      <a href="../" class="hover:text-brand-dark">Home</a>
      <i class="fa fa-angle-right text-[10px]"></i>
      <a href="industries" class="hover:text-brand-dark">Industries</a>
      <i class="fa fa-angle-right text-[10px]"></i>
      <span class="text-brand-dark font-semibold"><?php echo $industry_name; ?></span>
    </nav>
  </div>
</div>


<!-- ══════════════════════════════════════════
     2. INDUSTRY SECURITY CHALLENGES — WHITE
═══════════════════════════════════════════ -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-14 fade-up">
      <p class="text-brand-dark font-semibold uppercase tracking-widest2 text-xs mb-3">The Problem</p>
      <h2 class="font-display font-black uppercase text-3xl sm:text-4xl font-bold text-brand-dark mb-4">Security Challenges for <?php echo $industry_name; ?></h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 max-w-2xl mx-auto text-sm leading-relaxed">
        Common security gaps we see at sites like yours, and why a structured guard deployment matters.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up">
        <i class="fa fa-door-open text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-sm text-brand-dark uppercase mb-1">Unauthorised Entry</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Unchecked access points allow unverified individuals onto the premises.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-box-open text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-sm text-brand-dark uppercase mb-1">Theft or Pilferage</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Assets and inventory remain vulnerable without active monitoring.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-id-badge text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-sm text-brand-dark uppercase mb-1">Visitor Mismanagement</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Poor visitor logging makes it hard to track who is on-site at any time.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-square-parking text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-sm text-brand-dark uppercase mb-1">Parking Issues</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Unregulated vehicle movement creates congestion and safety risks.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.2s">
        <i class="fa fa-truck-medical text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-sm text-brand-dark uppercase mb-1">Emergency Response Gaps</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Delayed response to incidents due to lack of trained personnel on-site.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.25s">
        <i class="fa fa-moon text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-sm text-brand-dark uppercase mb-1">Night Security Risks</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Reduced visibility and lower activity increase vulnerability after hours.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up">
        <i class="fa fa-dolly text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-sm text-brand-dark uppercase mb-1">Material Movement Issues</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Goods and equipment moving in/out without verification or logging.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-people-group text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-sm text-brand-dark uppercase mb-1">Crowd Control Issues</h3>
        <p class="text-gray-500 text-xs leading-relaxed">High footfall periods can overwhelm untrained or understaffed sites.</p>
      </div>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-shield-halved text-brand-dark text-xl mb-3"></i>
        <h3 class="font-display font-bold text-sm text-brand-dark uppercase mb-1">Staff & Visitor Safety</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Without visible security, staff and visitors can feel and be unsafe.</p>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     3. OUR SECURITY SOLUTION — light gray
═══════════════════════════════════════════ -->
<section class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 grid lg:grid-cols-2 gap-12 items-center">
    <div>
      <p class="text-brand-dark font-semibold uppercase tracking-widest2 text-xs mb-3 fade-up">The Solution</p>
      <h2 class="font-display font-black uppercase text-3xl sm:text-4xl font-bold text-brand-dark mb-4 fade-up" style="animation-delay:0.05s">
        Our Security<br/>Deployment Model
      </h2>
      <div class="y-divider-center mb-5 fade-up" style="animation-delay:0.1s"></div>
      <p class="text-gray-500 text-sm leading-relaxed mb-8 fade-up" style="animation-delay:0.1s">
        A layered deployment that covers every entry point, visitor, and incident scenario at your <?php echo $industry_type; ?> site.
      </p>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.1s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-door-closed text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-sm">Entry Gate Security</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.12s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-user-check text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-sm">Visitor Verification</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.14s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-route text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-sm">Patrol Points</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.16s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-video text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-sm">CCTV Coordination</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.18s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-key text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-sm">Access Control Support</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.2s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-truck-medical text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-sm">Emergency Response</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.22s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-clipboard-list text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-sm">Reporting & Escalation</h4></div>
        </div>
        <div class="flex gap-3 items-start fade-up" style="animation-delay:0.24s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa fa-user-shield text-brand-dark text-sm"></i></div>
          <div><h4 class="font-semibold text-brand-dark text-sm">Supervisor Checks</h4></div>
        </div>
      </div>
    </div>

    <div class="fade-up">
      <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=900&q=80" alt="Security guard on patrol" class="w-full h-full object-cover rounded-2xl shadow-lg" />
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     4. RECOMMENDED MANPOWER DEPLOYMENT — WHITE
═══════════════════════════════════════════ -->
<section class="py-20 bg-white">
  <div class="max-w-5xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-12 fade-up">
      <p class="text-brand-dark font-semibold uppercase tracking-widest2 text-xs mb-3">Quick Reference</p>
      <h2 class="font-display font-black uppercase text-3xl sm:text-4xl font-bold text-brand-dark mb-4">Recommended Manpower Deployment</h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 max-w-xl mx-auto text-sm leading-relaxed">
        A general guide — final deployment is confirmed after a free site visit.
      </p>
    </div>

    <div class="overflow-x-auto fade-up">
      <table class="w-full text-sm border border-gray-200 rounded-xl overflow-hidden">
        <thead>
          <tr class="bg-brand-dark text-white text-left">
            <th class="px-6 py-4 font-semibold uppercase text-xs tracking-wider">Site Type</th>
            <th class="px-6 py-4 font-semibold uppercase text-xs tracking-wider">Suggested Deployment</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr class="bg-gray-50">
            <td class="px-6 py-4 font-semibold text-brand-dark">Small Site</td>
            <td class="px-6 py-4 text-gray-600">1 to 2 guards</td>
          </tr>
          <tr class="bg-white">
            <td class="px-6 py-4 font-semibold text-brand-dark">Medium Site</td>
            <td class="px-6 py-4 text-gray-600">2 to 6 guards</td>
          </tr>
          <tr class="bg-gray-50">
            <td class="px-6 py-4 font-semibold text-brand-dark">Large Site</td>
            <td class="px-6 py-4 text-gray-600">Multiple guards with supervisor</td>
          </tr>
          <tr class="bg-white">
            <td class="px-6 py-4 font-semibold text-brand-dark">High-Risk Site</td>
            <td class="px-6 py-4 text-gray-600">Guards, supervisor, CCTV, QRT support</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     5. DUTIES & RESPONSIBILITIES — light gray
═══════════════════════════════════════════ -->
<section class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-14 fade-up">
      <p class="text-brand-dark font-semibold uppercase tracking-widest2 text-xs mb-3">On Duty</p>
      <h2 class="font-display font-black uppercase text-3xl sm:text-4xl font-bold text-brand-dark mb-4">Duties & Responsibilities</h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 max-w-2xl mx-auto text-sm leading-relaxed">
        Day-to-day responsibilities our guards carry out at <?php echo $industry_type; ?> sites.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <div class="bg-white border border-gray-200 rounded-xl p-6 fade-up">
        <i class="fa fa-id-card text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-sm mb-1">Reception Desk Coordination</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Working alongside front desk staff to manage employee and visitor flow.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-clipboard-check text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-sm mb-1">Visitor Pass Verification</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Checking ID, issuing passes, and maintaining visitor logs.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-elevator text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-sm mb-1">Lobby & Floor Patrolling</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Regular checks across lobbies, lifts, and common floor areas.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-square-parking text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-sm mb-1">Parking & Vehicle Management</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Regulating employee, visitor, and cab/delivery vehicle movement.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-6 fade-up">
        <i class="fa fa-box text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-sm mb-1">Courier & Material Checks</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Logging incoming/outgoing courier, vendor, and office material.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.05s">
        <i class="fa fa-video text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-sm mb-1">CCTV & Access Point Monitoring</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Coordinating with CCTV operators and access control systems.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.1s">
        <i class="fa fa-triangle-exclamation text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-sm mb-1">Incident Reporting</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Logging and escalating any unusual activity or incident on-site.</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:0.15s">
        <i class="fa fa-fire-extinguisher text-brand-dark text-lg mb-3"></i>
        <h3 class="font-semibold text-brand-dark text-sm mb-1">Emergency & Evacuation Support</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Assisting with evacuation procedures during fire or emergency drills.</p>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     6. SUITABLE SERVICES — WHITE (cross-links)
═══════════════════════════════════════════ -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-14 fade-up">
      <p class="text-brand-dark font-semibold uppercase tracking-widest2 text-xs mb-3">Related Services</p>
      <h2 class="font-display font-black uppercase text-3xl sm:text-4xl font-bold text-brand-dark mb-4">Suitable Services</h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 max-w-xl mx-auto text-sm leading-relaxed">
        Services commonly combined for <?php echo $industry_type; ?> security.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <a href="../services/unarmed-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-6 group fade-up">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-shield-alt text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-sm text-brand-dark uppercase leading-tight mb-2">Unarmed Security Guards</h3>
        <div class="mt-2 text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../services/armed-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-6 group fade-up" style="animation-delay:0.05s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-user-shield text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-sm text-brand-dark uppercase leading-tight mb-2">Armed Security Guards</h3>
        <div class="mt-2 text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../services/lady-security" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-6 group fade-up" style="animation-delay:0.1s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-venus text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-sm text-brand-dark uppercase leading-tight mb-2">Lady Security Guards</h3>
        <div class="mt-2 text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../services/cctv-monitoring" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-6 group fade-up" style="animation-delay:0.15s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-video text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-sm text-brand-dark uppercase leading-tight mb-2">CCTV Monitoring</h3>
        <div class="mt-2 text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../services/visitor-management" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-6 group fade-up">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-address-card text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-sm text-brand-dark uppercase leading-tight mb-2">Visitor Management</h3>
        <div class="mt-2 text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../services/patrolling-qrt" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-6 group fade-up" style="animation-delay:0.05s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-person-walking text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-sm text-brand-dark uppercase leading-tight mb-2">Patrolling & QRT</h3>
        <div class="mt-2 text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../services/fire-safety" class="service-card bg-gray-50 border border-gray-200 rounded-xl p-6 group fade-up" style="animation-delay:0.1s">
        <div class="w-12 h-12 rounded-lg bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow transition-colors">
          <i class="fa fa-fire-extinguisher text-brand-dark text-lg"></i>
        </div>
        <h3 class="font-display font-bold text-sm text-brand-dark uppercase leading-tight mb-2">Fire & Safety Personnel</h3>
        <div class="mt-2 text-brand-dark text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">Know More <i class="fa fa-arrow-right text-[10px]"></i></div>
      </a>
      <a href="../pages/industries" class="service-card bg-brand-dark border border-brand-dark rounded-xl p-6 group fade-up flex flex-col justify-center items-center text-center" style="animation-delay:0.15s">
        <i class="fa fa-grip text-brand-yellow text-2xl mb-3"></i>
        <h3 class="font-display font-bold text-sm text-white uppercase leading-tight">View All Industries</h3>
      </a>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     7. LEAD MAGNET SECTION
═══════════════════════════════════════════ -->
<section class="relative py-20 overflow-hidden bg-gray-50">
  <div class="max-w-6xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-10 bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-200 fade-up">

      <div class="p-10 sm:p-12 flex flex-col justify-center">
        <p class="text-brand-dark font-semibold uppercase tracking-widest2 text-xs mb-3">Free Download</p>
        <h2 class="font-display font-black uppercase text-2xl sm:text-3xl text-brand-dark mb-4 leading-tight">
          <?php echo $lead_magnet_title; ?>
        </h2>
        <p class="text-gray-500 text-sm leading-relaxed mb-6">
          <?php echo $lead_magnet_offer; ?>
        </p>
        <div class="space-y-3">
          <div class="flex items-center gap-3 text-sm text-gray-600"><i class="fa fa-check-circle text-brand-dark"></i> Practical, easy-to-use checklist</div>
          <div class="flex items-center gap-3 text-sm text-gray-600"><i class="fa fa-check-circle text-brand-dark"></i> Built from real site deployments</div>
          <div class="flex items-center gap-3 text-sm text-gray-600"><i class="fa fa-check-circle text-brand-dark"></i> Free, no obligation</div>
        </div>
      </div>

      <div class="bg-brand-dark p-10 sm:p-12">
        <form action="../../includes/contact.php" method="POST" class="space-y-4">
          <input type="hidden" name="industry" value="<?php echo $industry_name; ?>" />
          <input type="text" name="name" required placeholder="Full Name" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <input type="tel" name="phone" required placeholder="Phone Number" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <input type="email" name="email" placeholder="Email Address" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <input type="text" name="company" placeholder="Company / Society Name" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <button type="submit" class="w-full bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold py-3.5 rounded uppercase tracking-wider text-sm transition-colors">
            Download Checklist
          </button>
        </form>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     8. FAQs — WHITE
═══════════════════════════════════════════ -->
<section class="py-20 bg-white">
  <div class="max-w-4xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-12 fade-up">
      <p class="text-brand-dark font-semibold uppercase tracking-widest2 text-xs mb-3">Common Questions</p>
      <h2 class="font-display font-black uppercase text-4xl sm:text-4xl font-bold text-brand-dark mb-4">Frequently Asked</h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="space-y-3" id="faq-container">
      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-sm pr-4">How many guards does a typical office building need?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-sm leading-relaxed">It depends on the size of the building, number of entry points, and footfall. Most small offices need 1 to 2 guards, while larger campuses require multiple guards with a supervisor.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.05s">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-sm pr-4">Can guards manage visitor passes and front desk coordination?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-sm leading-relaxed">Yes. Our guards are trained to verify IDs, issue visitor passes, and coordinate with reception staff to manage entry smoothly.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.1s">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-sm pr-4">Do you provide night shift security for offices?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-sm leading-relaxed">Yes. We offer day, night, 12-hour, and 24-hour deployment options based on your operating hours and risk profile.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.15s">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-sm pr-4">Will a supervisor visit our office site regularly?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-sm leading-relaxed">Yes. Supervisor checks and reporting are part of every deployment to ensure consistent duty discipline and quick issue resolution.</p>
        </div>
      </div>

      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.2s">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-sm pr-4">Can guards coordinate with our existing CCTV system?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-sm leading-relaxed">Yes. Our guards coordinate with on-site CCTV operators and access control systems to strengthen overall monitoring.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     9. FINAL CTA — YELLOW
═══════════════════════════════════════════ -->
<section class="relative py-20 overflow-hidden">
  <div class="absolute inset-0 bg-brand-yellow"></div>
  <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 text-center fade-up">
    <h2 class="font-display font-black uppercase text-4xl sm:text-4xl font-bold text-brand-dark leading-none mb-4">
      Need Security Guards for<br/>Your <?php echo $industry_name; ?>?
    </h2>
    <p class="text-brand-dark/80 text-sm sm:text-base mb-8 max-w-lg mx-auto">
      Get a free site assessment and a deployment plan built specifically for your premises.
    </p>
    <div class="flex flex-wrap justify-center gap-4">
      <a href="../../contact" class="bg-brand-dark text-white hover:bg-gray-800 font-bold px-8 py-3.5 rounded uppercase tracking-wider text-sm transition-colors shadow-lg">
        Get Free Site Assessment
      </a>
      <a href="tel:+919430695171" class="flex items-center gap-2 border-2 border-brand-dark/60 text-brand-dark hover:border-brand-dark font-bold px-8 py-3.5 rounded uppercase tracking-wider text-sm transition-colors">
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
