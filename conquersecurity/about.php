<?php
/**
 * Paste complete Cloudinary secure URLs below.
 * Keep the array keys unchanged; only replace the URL values.
 */
$media = [
    'about_hero'            => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784804956/about-banner_psnwoj.png',
    'company_intro'         => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784871267/Our_Story_yglbk3.webp',
    'trained_manpower'      => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784871397/Our_People_sgqg5h.webp',
    'vision_mission'        => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784810847/Who_We_Protect2_ktfjpc.webp',
    'why_choose_us'         => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784871564/The_Conquer_Difference_uljwb5.webp',
    'profile_background'    => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784805094/service2_qc7zvz.png',
    'final_cta'             => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784810843/Who_We_Protect_3_xqxtpz.webp',
];

/**
 * Safely returns a media URL from the array.
 */
function mediaUrl(array $media, string $key): string
{
    return htmlspecialchars($media[$key] ?? '', ENT_QUOTES, 'UTF-8');
}
?>

<?php
$page_title       = "About Us | Conquer Services — Security & Facility Management Delhi NCR";
$page_description = "About Conquer Services — A trusted security guard and facility management company serving Delhi NCR with trained, verified, and professionally managed manpower.";
$active_page      = "about";
$base_path        = "";
include 'includes/header.php';
?>

<style>
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
  .hover-card { transition: transform 0.3s, box-shadow 0.3s; }
  .hover-card:hover { transform: translateY(-5px); box-shadow: 0 20px 48px rgba(0,0,0,0.08); }
  .timeline-line { background: linear-gradient(180deg, #F2CF4A 0%, #E5E5E5 100%); }
  /* Shared container — matches header's max-w-7xl + px-3 sm:px-5 exactly,
     so every section's content lines up under the logo and nav. */
  /* Shared container — left edge precisely matches the header
     logo's actual visual position, accounting for its negative
     margin (-ml-2 sm:-ml-4 lg:-ml-6) on top of the header's own
     px-3 sm:px-5 padding. Math (container left padding 0.75rem
     mobile / 1.25rem sm+, minus the logo's pull-left amount):
       mobile : 0.75rem - 0.5rem = 0.25rem  → padding-left: 0.25rem
       sm:    : 1.25rem - 1rem   = 0.25rem  → padding-left: 0.25rem
       lg:    : 1.25rem - 1.5rem = -0.25rem → padding can't go
                negative, so we use margin-left instead at lg: */
  /* Shared container — normal padding, used by every section
     EXCEPT the hero (which uses .hero-container below instead). */
  .container-x { max-width: 80rem; margin-left: auto; margin-right: auto; padding-left: 0.75rem; padding-right: 0.75rem; }
  @media (min-width: 640px) { .container-x { padding-left: 1.25rem; padding-right: 1.25rem; } }

  /* Hero-only container — shifted further left to align with the
     header logo's visual position (the logo has -ml-2 sm:-ml-4
     lg:-ml-6 pulling it past the header's own padding edge). */
  .hero-container { max-width: 80rem; margin-left: auto; margin-right: auto; padding-left: 0; padding-right: 0.75rem; }
  @media (min-width: 640px)  { .hero-container { padding-left: 0; padding-right: 1.25rem; } }
  @media (min-width: 1024px) { .hero-container { padding-left: 0; padding-right: 1.25rem; position: relative; left: -1.5rem; } }
</style>

<!-- ══════════════════════════════════════════
     PAGE HERO — dark, image background
═══════════════════════════════════════════ -->
<section class="relative overflow-hidden bg-brand-dark py-12 sm:py-16 md:py-20 lg:py-24 min-h-[320px] sm:min-h-[380px] md:min-h-[440px] lg:min-h-[480px]">
  <div class="absolute inset-0">
    <img src="<?= mediaUrl($media, 'about_hero'); ?>" alt="About Conquer Services" fetchpriority="high" decoding="async" class="w-full h-full object-cover object-[center_20%]" />
  </div>
  <div class="page-hero-overlay absolute inset-0"></div>

  <div class="relative z-10 hero-container">
    <div class="max-w-3xl">
      <p class="text-brand-yellow font-semibold capitalize tracking-wide text-[13px] sm:text-base mb-3">Who We Are</p>
      <h1 class="font-display font-black capitalize leading-[1.05] text-white">
        <span class="text-2xl xs:text-3xl sm:text-4xl md:text-5xl block">About Our</span>
        <span class="text-2xl xs:text-3xl sm:text-4xl md:text-5xl text-brand-yellow block">Security Guard & Facility</span>
        <span class="text-2xl xs:text-3xl sm:text-4xl md:text-5xl block">Management Company</span>
      </h1>
      <p class="text-[#bbb] text-base sm:text-lg font-medium leading-relaxed mt-4 max-w-xl">
        We provide trained, verified, and professionally managed security and facility manpower services across Delhi NCR.
      </p>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-brand-yellow"></div>
</section>


<!-- ══════════════════════════════════════════
     COMPANY INTRODUCTION — WHITE
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
  <div class="container-x">
    <div class="grid lg:grid-cols-2 gap-10 sm:gap-12 lg:gap-14 items-center">

      <div class="relative fade-up">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="<?= mediaUrl($media, 'company_intro'); ?>" alt="Conquer Services leadership" loading="lazy" decoding="async" sizes="(max-width: 1023px) 100vw, 50vw" class="w-full h-full object-cover" />
        </div>
        <div class="absolute -bottom-4 -right-4 sm:-bottom-5 sm:-right-5 bg-brand-yellow rounded-2xl p-4 sm:p-6 shadow-2xl text-center">
          <div class="font-display font-black text-2xl sm:text-3xl text-brand-dark leading-none">10+</div>
          <div class="text-brand-dark font-bold text-[10px] sm:text-sm capitalize tracking-wide mt-1">Years of</div>
          <div class="text-brand-dark font-bold text-[10px] sm:text-sm capitalize tracking-wide">Excellence</div>
        </div>
        <div class="absolute -top-4 -left-4 sm:-top-5 sm:-left-5 bg-white border border-gray-200 rounded-xl p-3 sm:p-4 shadow-xl">
          <div class="flex items-center gap-2 sm:gap-3">
            <div class="w-9 h-9 sm:w-11 sm:h-11 rounded-full bg-brand-yellow/20 flex items-center justify-center flex-shrink-0">
              <i class="fa fa-shield-alt text-brand-dark text-sm sm:text-lg"></i>
            </div>
            <div>
              <div class="font-display font-black text-brand-dark text-base sm:text-xl leading-none">ISO</div>
              <div class="text-gray-500 text-[10px] sm:text-sm mt-0.5">Certified Service</div>
            </div>
          </div>
        </div>
      </div>

      <div class="fade-up mt-6 lg:mt-0" style="animation-delay:0.1s">
        <p class="text-brand-dark font-semibold capitalize tracking-wide text-base mb-3">Our Story</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-4xl md:text-4xl text-brand-dark leading-none mb-4">
          Trusted Security &<br/><span style="color:#C9A91E;">Facility Partner</span>
        </h2>
        <div class="y-divider-center mb-6"></div>

        <p class="text-gray-500 text-base sm:text-base leading-relaxed mb-4">
          Conquer Services is a professionally managed security guard and facility management company operating across Delhi NCR. We provide trained, verified, and disciplined manpower to offices, residential societies, hospitals, schools, warehouses, factories, banks, malls, and events.
        </p>
        <p class="text-gray-500 text-base sm:text-base leading-relaxed mb-4">
          Our commitment to safety, discipline, reliability, and service quality sets us apart. Every guard and facility staff member we deploy goes through a rigorous background verification process and structured training before being assigned to a client site.
        </p>
        <p class="text-gray-500 text-base sm:text-base leading-relaxed mb-8">
          From a single guard deployment to complete facility management solutions, we customise our services to match your site type, risk level, and operational requirements — all backed by 24/7 supervisor support.
        </p>

        <div class="grid grid-cols-2 gap-3 sm:gap-4">
          <div class="bg-gray-50 border border-gray-200 rounded-xl p-3 sm:p-4">
            <i class="fa fa-map-marker-alt text-brand-dark mb-2 block"></i>
            <div class="text-brand-dark font-semibold text-base sm:text-lg">Delhi NCR Operations</div>
            <div class="text-gray-500 text-[11px] sm:text-base mt-1">All major NCR areas covered</div>
          </div>
          <div class="bg-gray-50 border border-gray-200 rounded-xl p-3 sm:p-4">
            <i class="fa fa-users text-brand-dark mb-2 block"></i>
            <div class="text-brand-dark font-semibold text-base sm:text-lg">1200+ Staff Deployed</div>
            <div class="text-gray-500 text-[11px] sm:text-base mt-1">Across varied industries</div>
          </div>
          <div class="bg-gray-50 border border-gray-200 rounded-xl p-3 sm:p-4">
            <i class="fa fa-building text-brand-dark mb-2 block"></i>
            <div class="text-brand-dark font-semibold text-base sm:text-lg">500+ Happy Clients</div>
            <div class="text-gray-500 text-[11px] sm:text-base mt-1">Corporate, industrial & residential</div>
          </div>
          <div class="bg-gray-50 border border-gray-200 rounded-xl p-3 sm:p-4">
            <i class="fa fa-headset text-brand-dark mb-2 block"></i>
            <div class="text-brand-dark font-semibold text-base sm:text-lg">24/7 Support</div>
            <div class="text-gray-500 text-[11px] sm:text-base mt-1">Round-the-clock escalation</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     STATS STRIP — YELLOW background
═══════════════════════════════════════════ -->
<section class="relative bg-gradient-to-b from-[#fff] to-white py-10 sm:py-14">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-5">

      <div class="stat-card fade-up bg-white rounded-xl border border-gray-200 shadow-[0_2px_10px_rgba(0,0,0,0.05)] hover:shadow-[0_6px_20px_rgba(0,0,0,0.08)] hover:-translate-y-0.5 transition-all duration-300 py-5 sm:py-6 px-3 text-center">
        <div class="flex items-center justify-center">
          <span class="counter font-display font-black text-2xl sm:text-3xl md:text-4xl text-[#0A0A0A]" data-target="257">0</span>
          <span class="font-display font-black text-xl sm:text-2xl md:text-3xl text-[#F2CF4A] ml-0.5">+</span>
        </div>
        <div class="text-gray-500 text-[9px] sm:text-[11px] md:text-sm capitalize tracking-[0.12em] mt-2">Happy Clients</div>
      </div>

      <div class="stat-card fade-up bg-white rounded-xl border border-gray-200 shadow-[0_2px_10px_rgba(0,0,0,0.05)] hover:shadow-[0_6px_20px_rgba(0,0,0,0.08)] hover:-translate-y-0.5 transition-all duration-300 py-5 sm:py-6 px-3 text-center" style="animation-delay:0.1s">
        <div class="flex items-center justify-center">
          <span class="counter font-display font-black text-2xl sm:text-3xl md:text-4xl text-[#0A0A0A]" data-target="1200">0</span>
          <span class="font-display font-black text-xl sm:text-2xl md:text-3xl text-[#F2CF4A] ml-0.5">+</span>
        </div>
        <div class="text-gray-500 text-[9px] sm:text-[11px] md:text-sm capitalize tracking-[0.12em] mt-2">Guards Deployed</div>
      </div>

      <div class="stat-card fade-up bg-white rounded-xl border border-gray-200 shadow-[0_2px_10px_rgba(0,0,0,0.05)] hover:shadow-[0_6px_20px_rgba(0,0,0,0.08)] hover:-translate-y-0.5 transition-all duration-300 py-5 sm:py-6 px-3 text-center" style="animation-delay:0.2s">
        <div class="flex items-center justify-center">
          <span class="counter font-display font-black text-2xl sm:text-3xl md:text-4xl text-[#0A0A0A]" data-target="10">0</span>
          <span class="font-display font-black text-xl sm:text-2xl md:text-3xl text-[#F2CF4A] ml-0.5">+</span>
        </div>
        <div class="text-gray-500 text-[9px] sm:text-[11px] md:text-sm capitalize tracking-[0.12em] mt-2">Years Experience</div>
      </div>

      <div class="stat-card fade-up bg-white rounded-xl border border-gray-200 shadow-[0_2px_10px_rgba(0,0,0,0.05)] hover:shadow-[0_6px_20px_rgba(0,0,0,0.08)] hover:-translate-y-0.5 transition-all duration-300 py-5 sm:py-6 px-3 text-center" style="animation-delay:0.3s">
        <div class="flex items-center justify-center">
          <span class="counter font-display font-black text-2xl sm:text-3xl md:text-4xl text-[#0A0A0A]" data-target="15">0</span>
          <span class="font-display font-black text-xl sm:text-2xl md:text-3xl text-[#F2CF4A] ml-0.5">+</span>
        </div>
        <div class="text-gray-500 text-[9px] sm:text-[11px] md:text-sm capitalize tracking-[0.12em] mt-2">NCR Locations</div>
      </div>

    </div>
  </div>
</section>
<style>
.fade-up {
  opacity: 0;
  transform: translateY(20px);
  animation: fadeUp 0.6s ease forwards;
}
@keyframes fadeUp {
  to { opacity: 1; transform: translateY(0); }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const counters = document.querySelectorAll('.counter');
  let animated = false;

  function animateCounters() {
    if (animated) return;
    animated = true;
    counters.forEach(counter => {
      const target = parseInt(counter.getAttribute('data-target'), 10);
      const duration = 1500;
      const startTime = performance.now();

      function update(now) {
        const progress = Math.min((now - startTime) / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        const value = Math.floor(eased * target);
        counter.textContent = value.toLocaleString('en-IN');
        if (progress < 1) {
          requestAnimationFrame(update);
        } else {
          counter.textContent = target.toLocaleString('en-IN');
        }
      }
      requestAnimationFrame(update);
    });
  }

  const statSection = document.querySelector('.stat-card')?.closest('section');
  if (statSection) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounters();
          observer.disconnect();
        }
      });
    }, { threshold: 0.3 });
    observer.observe(statSection);
  }
});
</script>


<!-- ══════════════════════════════════════════
     EXPERIENCE & EXPERTISE — light gray
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-gray-50">
  <div class="container-x">
    <div class="text-center mb-10 sm:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-wide text-base mb-3">Our Expertise</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl md:text-4xl text-brand-dark mb-4">Experience Across<br/><span style="color:#C9A91E;">Every Industry</span></h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 text-lg max-w-2xl mx-auto leading-relaxed">
        Years of hands-on experience deploying security and facility manpower across offices, societies, factories, hospitals, schools, warehouses, banks, events, and commercial properties.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6">
      <div class="hover-card bg-white border border-gray-200 rounded-2xl p-6 sm:p-8 fade-up group">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-yellow/20 flex items-center justify-center mb-4 sm:mb-5 group-hover:bg-brand-yellow transition-colors duration-300">
          <i class="fa fa-shield-alt text-brand-dark text-xl sm:text-2xl transition-colors duration-300"></i>
        </div>
        <h3 class="font-display font-bold capitalize text-brand-dark text-lg sm:text-xl mb-3">Security Guard Services</h3>
        <p class="text-gray-500 text-lg leading-relaxed">
          Unarmed guards, armed guards, lady security officers, VIP/PSO security, and escort services — deployed at gates, reception areas, parking, patrol routes, and emergency points.
        </p>
      </div>
      <div class="hover-card bg-white border border-gray-200 rounded-2xl p-6 sm:p-8 fade-up group" style="animation-delay:0.08s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-yellow/20 flex items-center justify-center mb-4 sm:mb-5 group-hover:bg-brand-yellow transition-colors duration-300">
          <i class="fa fa-broom text-brand-dark text-xl sm:text-2xl transition-colors duration-300"></i>
        </div>
        <h3 class="font-display font-bold capitalize text-brand-dark text-lg sm:text-xl mb-3">Facility Management</h3>
        <p class="text-gray-500 text-lg leading-relaxed">
          Housekeeping, office boys, pantry staff, receptionists, bouncers, drivers, helpers, garden and maintenance staff, and fire safety personnel for all property types.
        </p>
      </div>
      <div class="hover-card bg-white border border-gray-200 rounded-2xl p-6 sm:p-8 fade-up group" style="animation-delay:0.16s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-yellow/20 flex items-center justify-center mb-4 sm:mb-5 group-hover:bg-brand-yellow transition-colors duration-300">
          <i class="fa fa-video text-brand-dark text-xl sm:text-2xl transition-colors duration-300"></i>
        </div>
        <h3 class="font-display font-bold capitalize text-brand-dark text-lg sm:text-xl mb-3">Technology & Support</h3>
        <p class="text-gray-500 text-lg leading-relaxed">
          CCTV monitoring, access control management, visitor management systems, security audits, emergency response teams, and patrolling & quick response teams.
        </p>
      </div>
      <div class="hover-card bg-white border border-gray-200 rounded-2xl p-6 sm:p-8 fade-up group" style="animation-delay:0.08s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-yellow/20 flex items-center justify-center mb-4 sm:mb-5 group-hover:bg-brand-yellow transition-colors duration-300">
          <i class="fa fa-industry text-brand-dark text-xl sm:text-2xl transition-colors duration-300"></i>
        </div>
        <h3 class="font-display font-bold capitalize text-brand-dark text-lg sm:text-xl mb-3">Industrial Deployments</h3>
        <p class="text-gray-500 text-lg leading-relaxed">
          Factories, warehouses, construction sites, and logistics hubs — understanding of gate management, material movement checks, shift-based deployments, and supervisor-led operations.
        </p>
      </div>
      <div class="hover-card bg-white border border-gray-200 rounded-2xl p-6 sm:p-8 fade-up group" style="animation-delay:0.16s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-yellow/20 flex items-center justify-center mb-4 sm:mb-5 group-hover:bg-brand-yellow transition-colors duration-300">
          <i class="fa fa-hospital text-brand-dark text-xl sm:text-2xl transition-colors duration-300"></i>
        </div>
        <h3 class="font-display font-bold capitalize text-brand-dark text-lg sm:text-xl mb-3">Institutional Security</h3>
        <p class="text-gray-500 text-lg leading-relaxed">
          Hospitals, schools, colleges, banks, and ATMs — sensitive deployments requiring trained, disciplined, and compliant manpower with specific protocols for each environment.
        </p>
      </div>
      <div class="hover-card bg-white border border-gray-200 rounded-2xl p-6 sm:p-8 fade-up group" style="animation-delay:0.24s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-yellow/20 flex items-center justify-center mb-4 sm:mb-5 group-hover:bg-brand-yellow transition-colors duration-300">
          <i class="fa fa-calendar-alt text-brand-dark text-xl sm:text-2xl transition-colors duration-300"></i>
        </div>
        <h3 class="font-display font-bold capitalize text-brand-dark text-lg sm:text-xl mb-3">Event & Crowd Security</h3>
        <p class="text-gray-500 text-lg leading-relaxed">
          Corporate events, public gatherings, concerts, exhibitions — crowd management, entry control, bouncers, and rapid response coordination for any event scale.
        </p>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     TRAINED MANPOWER — WHITE
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-white overflow-hidden">
  <div class="container-x">
    <div class="grid lg:grid-cols-2 gap-10 sm:gap-14 items-center">

      <div class="fade-up">
        <p class="text-brand-dark font-semibold capitalize tracking-wide text-base mb-3">Our People</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-4xl md:text-4xl text-brand-dark leading-none mb-4">
          Trained &<br/><span style="color:#C9A91E;">Disciplined Manpower</span>
        </h2>
        <div class="y-divider-center mb-6"></div>
        <p class="text-gray-500 text-lg leading-relaxed mb-6 sm:mb-8">
          Every security guard and facility staff member we deploy is trained, uniformed, disciplined, and monitored by supervisors. We don't just supply manpower — we manage it end to end.
        </p>

        <div class="space-y-4">
          <div class="flex gap-3 sm:gap-4 items-start">
            <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-graduation-cap text-brand-dark text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-lg mb-1">Security Training</h4>
              <p class="text-gray-500 text-base leading-relaxed">Gate management, visitor control, patrolling, emergency handling, and incident reporting protocols.</p>
            </div>
          </div>
          <div class="flex gap-3 sm:gap-4 items-start">
            <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-user-tie text-brand-dark text-lg"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-lg mb-1">Grooming & Discipline</h4>
              <p class="text-gray-500 text-base leading-relaxed">Uniformed personnel with strict conduct standards, punctuality requirements, and professional appearance.</p>
            </div>
          </div>
          <div class="flex gap-3 sm:gap-4 items-start">
            <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-fire-extinguisher text-brand-dark text-lg"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-lg mb-1">Emergency Awareness</h4>
              <p class="text-gray-500 text-base leading-relaxed">Fire safety awareness, emergency evacuation support, and basic first-response training for all deployed staff.</p>
            </div>
          </div>
          <div class="flex gap-3 sm:gap-4 items-start">
            <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-chart-bar text-brand-dark text-lg"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-lg mb-1">Reporting & CCTV Coordination</h4>
              <p class="text-gray-500 text-base leading-relaxed">Basic incident reporting, daily duty logs, and coordination with CCTV operators and access control systems.</p>
            </div>
          </div>
          <div class="flex gap-3 sm:gap-4 items-start">
            <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-lg bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-users-cog text-brand-dark text-lg"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-lg mb-1">Supervisor-Led Operations</h4>
              <p class="text-gray-500 text-base leading-relaxed">Every deployment has a dedicated supervisor for regular site checks, performance monitoring, and client escalation support.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="relative fade-up mt-6 lg:mt-0" style="animation-delay:0.1s">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="<?= mediaUrl($media, 'trained_manpower'); ?>" alt="Security training" loading="lazy" decoding="async" sizes="(max-width: 1023px) 100vw, 50vw" class="w-full h-full object-cover" />
        </div>
        <div class="absolute bottom-3 left-3 right-3 sm:bottom-6 sm:left-6 sm:right-6 bg-white border border-gray-200 rounded-xl p-3 sm:p-4 shadow-xl">
          <div class="flex items-center gap-2 sm:gap-3">
            <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-brand-yellow flex items-center justify-center flex-shrink-0">
              <i class="fa fa-check text-brand-dark font-black text-sm"></i>
            </div>
            <div>
              <div class="text-brand-dark font-semibold text-sm sm:text-base">All staff pre-verified</div>
              <div class="text-gray-500 text-[10px] sm:text-sm">Background checked before every deployment</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     VERIFICATION PROCESS — light gray
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-gray-50">
  <div class="container-x">
    <div class="text-center mb-10 sm:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-wide text-base mb-3">Background Checks</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl md:text-4xl text-brand-dark mb-4">Our Verification<br/><span style="color:#C9A91E;">Process</span></h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 text-lg max-w-xl mx-auto leading-relaxed">
        Every guard and facility staff member passes through our structured verification process before they step on a client site.
      </p>
    </div>

    <div class="max-w-4xl mx-auto">
      <div class="relative">
        <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-0.5 timeline-line -translate-x-1/2"></div>

        <div class="space-y-8 sm:space-y-10">

          <div class="relative grid md:grid-cols-2 gap-4 sm:gap-6 md:gap-12 items-center fade-up">
            <div class="md:text-right order-2 md:order-1">
              <span class="inline-block text-brand-dark font-display font-black text-xs capitalize tracking-wide mb-2">Step 01</span>
              <h3 class="font-display font-bold capitalize text-brand-dark text-xl sm:text-xl mb-2">ID Verification</h3>
              <p class="text-gray-500 text-base leading-relaxed">Aadhar, PAN, and government-issued ID documents verified for every candidate before proceeding further.</p>
            </div>
            <div class="order-1 md:order-2 flex md:justify-start justify-start">
              <div class="relative z-10 w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow flex items-center justify-center shadow-lg flex-shrink-0">
                <i class="fa fa-id-card text-brand-dark text-lg sm:text-xl"></i>
              </div>
            </div>
          </div>

          <div class="relative grid md:grid-cols-2 gap-4 sm:gap-6 md:gap-12 items-center fade-up" style="animation-delay:0.08s">
            <div class="flex md:justify-end justify-start">
              <div class="relative z-10 w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow flex items-center justify-center shadow-lg flex-shrink-0">
                <i class="fa fa-home text-brand-dark text-lg sm:text-xl"></i>
              </div>
            </div>
            <div>
              <span class="inline-block text-brand-dark font-display font-black text-xs capitalize tracking-wide mb-2">Step 02</span>
              <h3 class="font-display font-bold capitalize text-brand-dark text-xl sm:text-xl mb-2">Address Verification</h3>
              <p class="text-gray-500 text-base leading-relaxed">Current residential address verified through documents and physical confirmation where required.</p>
            </div>
          </div>

          <div class="relative grid md:grid-cols-2 gap-4 sm:gap-6 md:gap-12 items-center fade-up" style="animation-delay:0.16s">
            <div class="md:text-right order-2 md:order-1">
              <span class="inline-block text-brand-dark font-display font-black text-xs capitalize tracking-wide mb-2">Step 03</span>
              <h3 class="font-display font-bold capitalize text-brand-dark text-xl sm:text-xl mb-2">Police Verification</h3>
              <p class="text-gray-500 text-base leading-relaxed">Police verification support provided wherever applicable to ensure clean criminal records and trustworthy deployment.</p>
            </div>
            <div class="order-1 md:order-2 flex md:justify-start justify-start">
              <div class="relative z-10 w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow flex items-center justify-center shadow-lg flex-shrink-0">
                <i class="fa fa-shield-alt text-brand-dark text-lg sm:text-xl"></i>
              </div>
            </div>
          </div>

          <div class="relative grid md:grid-cols-2 gap-4 sm:gap-6 md:gap-12 items-center fade-up" style="animation-delay:0.24s">
            <div class="flex md:justify-end justify-start">
              <div class="relative z-10 w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow flex items-center justify-center shadow-lg flex-shrink-0">
                <i class="fa fa-file-alt text-brand-dark text-lg sm:text-xl"></i>
              </div>
            </div>
            <div>
              <span class="inline-block text-brand-dark font-display font-black text-xs capitalize tracking-wide mb-2">Step 04</span>
              <h3 class="font-display font-bold capitalize text-brand-dark text-xl sm:text-xl mb-2">Document & Work History Check</h3>
              <p class="text-gray-500 text-base leading-relaxed">Previous employment records, references, and all required compliance documents checked and maintained on file.</p>
            </div>
          </div>

          <div class="relative grid md:grid-cols-2 gap-4 sm:gap-6 md:gap-12 items-center fade-up" style="animation-delay:0.32s">
            <div class="md:text-right order-2 md:order-1">
              <span class="inline-block text-brand-dark font-display font-black text-xs capitalize tracking-wide mb-2">Step 05</span>
              <h3 class="font-display font-bold capitalize text-brand-dark text-xl sm:text-xl mb-2">Supervisor Approval</h3>
              <p class="text-gray-500 text-base leading-relaxed">Final clearance given by the operations supervisor before any staff member is assigned to a client site.</p>
            </div>
            <div class="order-1 md:order-2 flex md:justify-start justify-start">
              <div class="relative z-10 w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-brand-yellow flex items-center justify-center shadow-lg flex-shrink-0">
                <i class="fa fa-user-check text-brand-dark text-lg sm:text-xl"></i>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     VISION & MISSION — DARK background
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-brand-dark overflow-hidden">
  <div class="container-x">
    <div class="grid lg:grid-cols-2 gap-10 sm:gap-14 items-center">

      <div class="relative fade-up order-2 lg:order-1 mt-6 lg:mt-0">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="<?= mediaUrl($media, 'vision_mission'); ?>" alt="Vision and Mission" loading="lazy" decoding="async" sizes="(max-width: 1023px) 100vw, 50vw" class="w-full h-full object-cover" />
        </div>
        <div class="absolute top-4 left-4 sm:top-6 sm:left-6 bg-brand-yellow text-brand-dark text-[10px] sm:text-base font-bold capitalize tracking-wide px-3 sm:px-4 py-1.5 sm:py-2 rounded-full">
          Our Purpose
        </div>
      </div>

      <div class="order-1 lg:order-2 fade-up" style="animation-delay:0.1s">
        <p class="text-brand-yellow font-semibold capitalize tracking-wide text-base mb-3">What Drives Us</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-4xl md:text-4xl text-white leading-none mb-4">
          Vision & Mission<br/><span class="text-brand-yellow">That Define Excellence</span>
        </h2>
        <div class="y-divider-center mb-6 sm:mb-8"></div>

        <div class="space-y-6 sm:space-y-8">
          <div class="relative pl-6 border-l-2 border-brand-yellow">
            <div class="absolute -left-3 top-0 w-6 h-6 rounded-full bg-brand-yellow flex items-center justify-center">
              <i class="fa fa-eye text-brand-dark text-xs"></i>
            </div>
            <h3 class="font-display font-bold capitalize text-white text-xl sm:text-2xl mb-3">Our Vision</h3>
            <p class="text-gray-400 text-base leading-relaxed">
              To be a symbol of trust, discipline, and excellence by delivering world-class security, housekeeping, and manpower solutions — and to be the most dependable security and facility partner for businesses and institutions across Delhi NCR.
            </p>
          </div>

          <div class="relative pl-6 border-l-2 border-white/20">
            <div class="absolute -left-3 top-0 w-6 h-6 rounded-full bg-white/10 flex items-center justify-center border border-brand-yellow/40">
              <i class="fa fa-bullseye text-brand-yellow text-xs"></i>
            </div>
            <h3 class="font-display font-bold capitalize text-white text-xl sm:text-2xl mb-3">Our Mission</h3>
            <p class="text-gray-400 text-base leading-relaxed">
              To provide ethical, reliable, and cost-effective services through trained professionals while maintaining the highest standards of safety, discipline, and client satisfaction — with transparent communication at every step.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     CERTIFICATIONS & COMPLIANCE — WHITE
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
  <div class="container-x">
    <div class="text-center mb-10 sm:mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-wide text-base mb-3">Compliance & Standards</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl md:text-4xl text-brand-dark mb-4">Certifications &<br/><span style="color:#C9A91E;">Legal Compliance</span></h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-500 text-lg max-w-xl mx-auto">We operate with full legal and regulatory compliance so our clients never face documentation or labour law issues.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5">

      <div class="hover-card bg-gray-50 border border-gray-200 hover:border-brand-yellow rounded-2xl p-5 sm:p-6 flex gap-3 sm:gap-4 fade-up">
        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 flex items-center justify-center flex-shrink-0">
          <i class="fa fa-certificate text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <div>
          <h4 class="font-display font-bold capitalize text-brand-dark text-base sm:text-lg mb-1">ISO-Certified</h4>
          <p class="text-gray-500 text-sm leading-relaxed">ISO-certified service model ensuring quality-driven operations across all deployments.</p>
        </div>
      </div>

      <div class="hover-card bg-gray-50 border border-gray-200 hover:border-brand-yellow rounded-2xl p-5 sm:p-6 flex gap-3 sm:gap-4 fade-up" style="animation-delay:0.07s">
        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 flex items-center justify-center flex-shrink-0">
          <i class="fa fa-gavel text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <div>
          <h4 class="font-display font-bold capitalize text-brand-dark text-base sm:text-lg mb-1">Labour Law Compliance</h4>
          <p class="text-gray-500 text-sm leading-relaxed">Full adherence to applicable labour laws, employment regulations, and statutory requirements.</p>
        </div>
      </div>

      <div class="hover-card bg-gray-50 border border-gray-200 hover:border-brand-yellow rounded-2xl p-5 sm:p-6 flex gap-3 sm:gap-4 fade-up" style="animation-delay:0.14s">
        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 flex items-center justify-center flex-shrink-0">
          <i class="fa fa-file-invoice text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <div>
          <h4 class="font-display font-bold capitalize text-brand-dark text-base sm:text-lg mb-1">ESI & PF Support</h4>
          <p class="text-gray-500 text-sm leading-relaxed">Employee State Insurance and Provident Fund documentation managed for all deployed staff.</p>
        </div>
      </div>

      <div class="hover-card bg-gray-50 border border-gray-200 hover:border-brand-yellow rounded-2xl p-5 sm:p-6 flex gap-3 sm:gap-4 fade-up" style="animation-delay:0.07s">
        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 flex items-center justify-center flex-shrink-0">
          <i class="fa fa-receipt text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <div>
          <h4 class="font-display font-bold capitalize text-brand-dark text-base sm:text-lg mb-1">GST Registered</h4>
          <p class="text-gray-500 text-sm leading-relaxed">GST-compliant billing with proper invoicing for all corporate, institutional, and commercial clients.</p>
        </div>
      </div>

      <div class="hover-card bg-gray-50 border border-gray-200 hover:border-brand-yellow rounded-2xl p-5 sm:p-6 flex gap-3 sm:gap-4 fade-up" style="animation-delay:0.14s">
        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 flex items-center justify-center flex-shrink-0">
          <i class="fa fa-folder-open text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <div>
          <h4 class="font-display font-bold capitalize text-brand-dark text-base sm:text-lg mb-1">Employee Documentation</h4>
          <p class="text-gray-500 text-sm leading-relaxed">All staff records, ID copies, verification documents, and training records maintained on file.</p>
        </div>
      </div>

      <div class="hover-card bg-gray-50 border border-gray-200 hover:border-brand-yellow rounded-2xl p-5 sm:p-6 flex gap-3 sm:gap-4 fade-up" style="animation-delay:0.21s">
        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-brand-yellow/20 flex items-center justify-center flex-shrink-0">
          <i class="fa fa-handshake text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <div>
          <h4 class="font-display font-bold capitalize text-brand-dark text-base sm:text-lg mb-1">Client Agreements</h4>
          <p class="text-gray-500 text-sm leading-relaxed">Formal service agreements and deployment documentation provided for every client engagement.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     WHY CHOOSE US — light gray
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-gray-50">
  <div class="container-x">
    <div class="grid lg:grid-cols-2 gap-10 sm:gap-14 items-center">

      <div class="fade-up">
        <p class="text-brand-dark font-semibold capitalize tracking-wide text-base mb-3">The Conquer Difference</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-4xl md:text-4xl text-brand-dark leading-none mb-4">
          Why Clients Choose<br/><span style="color:#C9A91E;">Conquer Services</span>
        </h2>
        <div class="y-divider-center mb-6 sm:mb-8"></div>

        <div class="space-y-4 sm:space-y-5">
          <div class="flex gap-3 sm:gap-4 items-start group">
            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center flex-shrink-0 mt-0.5 transition-colors duration-300">
              <i class="fa fa-user-check text-brand-dark text-sm transition-colors duration-300"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-lg mb-1">Verified Manpower</h4>
              <p class="text-gray-500 text-base leading-relaxed">Every person deployed is background-checked, document-verified, and supervisor-approved before joining your site.</p>
            </div>
          </div>
          <div class="flex gap-3 sm:gap-4 items-start group">
            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center flex-shrink-0 mt-0.5 transition-colors duration-300">
              <i class="fa fa-bolt text-brand-dark text-sm transition-colors duration-300"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-lg mb-1">Quick Deployment</h4>
              <p class="text-gray-500 text-base leading-relaxed">Ready pool of trained staff allows us to mobilise manpower quickly once a requirement is confirmed.</p>
            </div>
          </div>
          <div class="flex gap-3 sm:gap-4 items-start group">
            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center flex-shrink-0 mt-0.5 transition-colors duration-300">
              <i class="fa fa-headset text-brand-dark text-sm transition-colors duration-300"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-lg mb-1">24/7 Operational Support</h4>
              <p class="text-gray-500 text-base leading-relaxed">Our support and escalation system runs round-the-clock so client issues are never left unaddressed.</p>
            </div>
          </div>
          <div class="flex gap-3 sm:gap-4 items-start group">
            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center flex-shrink-0 mt-0.5 transition-colors duration-300">
              <i class="fa fa-sliders-h text-brand-dark text-sm transition-colors duration-300"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-lg mb-1">Flexible Staffing</h4>
              <p class="text-gray-500 text-base leading-relaxed">Day shift, night shift, 12-hour, 24-hour, monthly contract, or event-based — we adapt to your operational model.</p>
            </div>
          </div>
          <div class="flex gap-3 sm:gap-4 items-start group">
            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center flex-shrink-0 mt-0.5 transition-colors duration-300">
              <i class="fa fa-comments text-brand-dark text-sm transition-colors duration-300"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-lg mb-1">Transparent Communication</h4>
              <p class="text-gray-500 text-base leading-relaxed">Regular reporting, open escalation channels, and a dedicated point of contact for every client account.</p>
            </div>
          </div>
          <div class="flex gap-3 sm:gap-4 items-start group">
            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-brand-yellow/20 group-hover:bg-brand-yellow flex items-center justify-center flex-shrink-0 mt-0.5 transition-colors duration-300">
              <i class="fa fa-puzzle-piece text-brand-dark text-sm transition-colors duration-300"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-lg mb-1">Industry-Specific Solutions</h4>
              <p class="text-gray-500 text-base leading-relaxed">Custom deployment plans, duty charts, and SOPs created for your specific industry and site type.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="relative fade-up mt-6 lg:mt-0" style="animation-delay:0.1s">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="<?= mediaUrl($media, 'why_choose_us'); ?>" alt="Why choose Conquer Services" loading="lazy" decoding="async" sizes="(max-width: 1023px) 100vw, 50vw" class="w-full h-full object-cover" />
        </div>
        <div class="absolute bottom-0 left-0 right-0 p-4 sm:p-6">
          <div class="bg-white border border-gray-200 rounded-xl p-3 sm:p-5 grid grid-cols-3 gap-2 sm:gap-4 shadow-xl">
            <div class="text-center border-r border-gray-200">
              <div class="font-display font-black text-brand-dark text-lg sm:text-2xl">500+</div>
              <div class="text-gray-500 text-[9px] sm:text-[14px] capitalize tracking-wide mt-0.5">Clients</div>
            </div>
            <div class="text-center border-r border-gray-200">
              <div class="font-display font-black text-brand-dark text-lg sm:text-2xl">1200+</div>
              <div class="text-gray-500 text-[9px] sm:text-[14px] capitalize tracking-wide mt-0.5">Staff</div>
            </div>
            <div class="text-center">
              <div class="font-display font-black text-brand-dark text-lg sm:text-2xl">10+</div>
              <div class="text-gray-500 text-[9px] sm:text-[14px] capitalize tracking-wide mt-0.5">Years</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     SERVICE COVERAGE — DARK background
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-brand-dark">
  <div class="container-x">
    <div class="text-center mb-10 sm:mb-12 fade-up">
      <p class="text-brand-yellow font-semibold capitalize tracking-wide text-base mb-3">Where We Operate</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl md:text-4xl text-white mb-4">Service Coverage<br/><span class="text-brand-yellow">Across Delhi NCR</span></h2>
      <div class="y-divider-center mx-auto mb-5"></div>
      <p class="text-gray-400 text-lg max-w-xl mx-auto">Security guard and facility management services available across all major Delhi NCR regions.</p>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-2.5 sm:gap-3 fade-up">
      <div class="bg-white/10 border border-brand-yellow/40 rounded-xl p-3 sm:p-4 text-center hover:bg-brand-yellow/10 transition-colors">
        <i class="fa fa-map-marker-alt text-brand-yellow mb-2 block text-base sm:text-lg"></i>
        <span class="text-white text-xs sm:text-sm font-semibold">Delhi</span>
      </div>
      <div class="bg-white/5 border border-white/10 rounded-xl p-3 sm:p-4 text-center hover:border-brand-yellow/40 hover:bg-brand-yellow/10 transition-colors">
        <i class="fa fa-map-marker-alt text-brand-yellow mb-2 block text-base sm:text-lg"></i>
        <span class="text-white text-xs sm:text-sm font-semibold">Noida</span>
      </div>
      <div class="bg-white/5 border border-white/10 rounded-xl p-3 sm:p-4 text-center hover:border-brand-yellow/40 hover:bg-brand-yellow/10 transition-colors">
        <i class="fa fa-map-marker-alt text-brand-yellow mb-2 block text-base sm:text-lg"></i>
        <span class="text-white text-xs sm:text-sm font-semibold">Greater Noida</span>
      </div>
      <div class="bg-white/5 border border-white/10 rounded-xl p-3 sm:p-4 text-center hover:border-brand-yellow/40 hover:bg-brand-yellow/10 transition-colors">
        <i class="fa fa-map-marker-alt text-brand-yellow mb-2 block text-base sm:text-lg"></i>
        <span class="text-white text-xs sm:text-sm font-semibold">Gurgaon</span>
      </div>
      <div class="bg-white/5 border border-white/10 rounded-xl p-3 sm:p-4 text-center hover:border-brand-yellow/40 hover:bg-brand-yellow/10 transition-colors">
        <i class="fa fa-map-marker-alt text-brand-yellow mb-2 block text-base sm:text-lg"></i>
        <span class="text-white text-xs sm:text-sm font-semibold">Faridabad</span>
      </div>
      <div class="bg-white/5 border border-white/10 rounded-xl p-3 sm:p-4 text-center hover:border-brand-yellow/40 hover:bg-brand-yellow/10 transition-colors">
        <i class="fa fa-map-marker-alt text-brand-yellow mb-2 block text-base sm:text-lg"></i>
        <span class="text-white text-xs sm:text-sm font-semibold">Ghaziabad</span>
      </div>
      <div class="bg-white/5 border border-white/10 rounded-xl p-3 sm:p-4 text-center hover:border-brand-yellow/40 hover:bg-brand-yellow/10 transition-colors">
        <i class="fa fa-map-marker-alt text-brand-yellow mb-2 block text-base sm:text-lg"></i>
        <span class="text-white text-xs sm:text-sm font-semibold">Sonipat</span>
      </div>
      <div class="bg-white/5 border border-white/10 rounded-xl p-3 sm:p-4 text-center hover:border-brand-yellow/40 hover:bg-brand-yellow/10 transition-colors">
        <i class="fa fa-map-marker-alt text-brand-yellow mb-2 block text-base sm:text-lg"></i>
        <span class="text-white text-xs sm:text-sm font-semibold">Manesar</span>
      </div>
      <div class="bg-white/5 border border-white/10 rounded-xl p-3 sm:p-4 text-center hover:border-brand-yellow/40 hover:bg-brand-yellow/10 transition-colors">
        <i class="fa fa-map-marker-alt text-brand-yellow mb-2 block text-base sm:text-lg"></i>
        <span class="text-white text-xs sm:text-sm font-semibold">Bahadurgarh</span>
      </div>
      <div class="bg-brand-yellow/15 border border-brand-yellow/50 hover:bg-brand-yellow rounded-xl p-3 sm:p-4 text-center transition-colors group">
        <i class="fa fa-plus text-brand-yellow group-hover:text-brand-dark mb-2 block text-base sm:text-lg transition-colors"></i>
        <span class="text-white group-hover:text-brand-dark text-xs sm:text-sm font-semibold transition-colors">More NCR Areas</span>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     DOWNLOAD COMPANY PROFILE — DARK with image
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 relative overflow-hidden">
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.96) 0%, rgba(10,10,10,0.88) 100%), url('<?= mediaUrl($media, 'profile_background'); ?>') center/cover no-repeat;"></div>
  <div class="relative z-10 container-x max-w-5xl">
    <div class="grid lg:grid-cols-2 gap-8 sm:gap-12 items-center">

      <div class="fade-up">
        <p class="text-brand-yellow font-semibold capitalize tracking-wide text-base mb-3">Free Download</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl lg:text-4xl text-white leading-tight sm:leading-none mb-4">
          Get Our Company Profile &<br/><span class="text-brand-yellow">Service Capability Deck</span>
        </h2>
        <p class="text-white/70 text-lg leading-relaxed mb-6">
          Download our complete company profile including service details, coverage areas, compliance documentation, client case studies, and deployment capabilities.
        </p>
        <ul class="space-y-2 text-lg text-white/80">
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-lg"></i> Full service capability overview</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-lg"></i> Compliance & certification details</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-lg"></i> Industry-wise deployment examples</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-lg"></i> Coverage area & contact information</li>
        </ul>
      </div>

      <div class="bg-white rounded-2xl p-5 sm:p-8 fade-up" style="animation-delay:0.1s">
        <h3 class="font-display font-bold text-brand-dark capitalize text-lg sm:text-xl mb-5 sm:mb-6">Download Company Profile</h3>
        <form action="includes/contact.php" method="POST" class="space-y-4">
          <input type="hidden" name="form_type" value="company_profile_download" />
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wide mb-1.5 block">Name *</label>
            <input type="text" name="name" required placeholder="Your full name" class="input-field" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wide mb-1.5 block">Phone *</label>
            <input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX" class="input-field" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wide mb-1.5 block">Email</label>
            <input type="email" name="email" placeholder="you@company.com" class="input-field" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wide mb-1.5 block">Company Name</label>
            <input type="text" name="company" placeholder="Your organisation" class="input-field" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wide mb-1.5 block">Required Service</label>
            <select name="service" class="input-field">
              <option value="">Select a service</option>
              <option>Security Guards</option>
              <option>Facility Management</option>
              <option>Housekeeping</option>
              <option>Technology & Support</option>
              <option>Multiple Services</option>
            </select>
          </div>
          <button type="submit" class="w-full bg-brand-dark hover:bg-gray-800 text-white font-bold py-3.5 rounded-lg capitalize tracking-wide text-sm transition-colors flex items-center justify-center gap-2">
            <i class="fa fa-download text-base"></i> Download Company Profile
          </button>
        </form>
      </div>

    </div>
  </div>
</section>



<!-- ══════════════════════════════════════════
     FINAL CTA — YELLOW
═══════════════════════════════════════════ -->
<section class="relative py-8 sm:py-10 md:py-12 overflow-hidden bg-brand-white">
  <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 fade-up">
    <div class="bg-white rounded-2xl shadow-2xl overflow-hidden flex flex-col md:flex-row">

      <!-- Image Section -->
      <div class="md:w-2/5 w-full">
        <img
          src="<?= mediaUrl($media, 'final_cta'); ?>"
          alt="Professional security guard on duty"
          loading="lazy"
          decoding="async"
          sizes="(max-width: 767px) 100vw, 40vw"
          class="h-40 sm:h-48 md:h-full w-full object-cover"
        />
      </div>

      <!-- Content Section -->
      <div class="md:w-3/5 w-full p-5 sm:p-6 md:p-8 flex flex-col justify-center text-center md:text-left">
        <p class="text-brand-yellow font-semibold capitalize tracking-wide text-base mb-1 sm:mb-1.5">Get In Touch</p>
        <h2 class="font-display font-black capitalize text-xl sm:text-2xl md:text-3xl text-brand-dark leading-tight mb-2 sm:mb-3">
          Ready to Secure<br class="hidden md:block"/> Your Property?
        </h2>
        <p class="text-gray-500 text-sm sm:text-base mb-4 sm:mb-5 max-w-md mx-auto md:mx-0">
          Talk to our team today for a free site assessment. We'll recommend the right security and facility solution for your requirement.
        </p>
        <div class="flex flex-wrap justify-center md:justify-start gap-2.5 sm:gap-3">
          <a href="contact" class="bg-brand-dark text-white hover:bg-brand-yellow hover:text-brand-dark font-bold px-5 sm:px-6 py-2.5 sm:py-3 rounded capitalize tracking-wide text-xs sm:text-sm transition-colors shadow-lg">
            Get Free Quote
          </a>
          <a href="tel:+919430695171" class="flex items-center gap-2 border-2 border-brand-dark text-brand-dark hover:bg-brand-dark hover:text-white font-bold px-5 sm:px-6 py-2.5 sm:py-3 rounded capitalize tracking-wide text-xs sm:text-sm transition-colors">
            <i class="fa fa-phone"></i> +91 94306 95171
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>