<?php
/**
 * HOME PAGE MEDIA
 * --------------------------------------------------------------------------
 * Paste each Cloudinary secure_url below. The HTML does not need to be edited.
 * Local paths are kept as fallbacks until you replace them with Cloudinary URLs.
 */
$media = [
    'hero_video'          => 'https://res.cloudinary.com/gg0gqaua/video/upload/v1784805127/security-staff-hero_daic4o.mp4',
    'hero_poster'         => 'assets/images/banner/home-banner.png',

    'unarmed_security'    => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784871267/Our_Story_yglbk3.webp',
    'armed_security'      => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784879106/Armed_Security_Guards_lhcc2f.webp',
    'lady_security'       => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784879170/Lady_Security_Guards_ey5jfo.webp',
    'vip_security'        => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1785042974/VIP_PSO_Security_w3eagn.webp',
    'escort_security'     => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1785042843/Escort_Security_b7ynff.webp',

    'housekeeping'        => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1785042843/Housekeeping_Services_haame4.webp',
    'office_boy'          => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1785042843/Office_Boy_Pantry_Staff_rhsgum.webp',
    'bouncers'            => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1785043053/Bouncers_n8ounm.webp',
    'fire_safety'         => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1785042843/Fire_Safety_Personnel_aht214.webp',

    'why_choose_us'       => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784809767/Why_Choose_Us_ex8ssj.webp',
    'vision_mission'      => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784810840/Our_Purpose_i7dsoz.webp',
    'faq_background'      => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784805094/service2_qc7zvz.png',
    'final_cta'           => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784810847/Who_We_Protect2_ktfjpc.webp',

    'industry_1'          => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784810847/Who_We_Protect1_qyqjgm.webp',
    'industry_2'          => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784810847/Who_We_Protect2_ktfjpc.webp',
    'industry_3'          => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784810843/Who_We_Protect_3_xqxtpz.webp',
    'industry_4'          => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784810843/Who_We_Protect_4_z9ip0r.webp',
    'industry_5'          => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784810844/Who_We_Protect_5_jerd32.webp',
    'industry_6'          => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784810845/Who_We_Protect_6_lohpkm.webp',
    'industry_7'          => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784811240/industry7_arvmzk.webp',
    'industry_8'          => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784811239/Who_We_Protect_8_ymqujg.webp',
    'industry_9'          => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784810845/Who_We_Protect_9_b4bt2l.webp',
    'industry_10'         => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784811170/Who_We_Protect_10_1_c0xim6.webp',

    'client_1'            => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784805006/client4_gyjjga.png',
    'client_2'            => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784805007/client6_gnahad.png',
    'client_3'            => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784805007/client5_eouate.png',
    'client_4'            => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784805006/client3_jthmt5.png',
    'client_5'            => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784805005/client2_fitli5.png',
    'client_6'            => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784805004/client1_ujyk8p.png',
];

function mediaUrl(array $media, string $key): string
{
    return htmlspecialchars($media[$key] ?? '', ENT_QUOTES, 'UTF-8');
}

$page_title       = "Best Security Company in Delhi NCR | Conquer Services";
$page_description = "Professional security guard and facility management services for offices, industries, and residential spaces across Delhi NCR. Trained staff, reliable service, and peace of mind.";
$active_page      = "home";
$base_path        = "";
include 'includes/header.php';
?>

<!-- ══════════════════════════════════════════
     HERO SECTION — Slider
═══════════════════════════════════════════ -->
<section class="relative h-[60vh] sm:h-[65vh] md:h-[70vh] min-h-[420px] max-h-[650px] overflow-hidden bg-brand-dark" id="hero">

  <!-- VIDEO BACKGROUND -->
 <video
    autoplay
    muted
    loop
    playsinline
    preload="metadata"
    poster="<?= mediaUrl($media, 'hero_poster'); ?>"
    class="absolute inset-0 w-full h-full object-cover object-center"
>
    <source
        src="<?= mediaUrl($media, 'hero_video'); ?>"
        type="video/mp4"
    >
</video>
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.35) 0%, rgba(10,10,10,0.15) 100%);"></div>
  <div class="absolute inset-0 bg-gradient-to-r from-brand-dark via-brand-dark/60 to-transparent z-10"></div>

  <div class="relative z-20 h-full flex items-center">
    <div class="w-full px-4 sm:px-10 lg:px-16 xl:px-20">
      <div class="max-w-2xl">
        <p class="text-brand-yellow font-display font-semibold text-[10px] sm:text-base capitalize tracking-wide mb-2 sm:mb-4 fade-up">
          Your Peace, Our Purpose
        </p>
        <h1 class="font-display font-black capitalize leading-tight mb-3 sm:mb-6 fade-up" style="animation-delay:0.1s">
          <span class="text-2xl sm:text-4xl md:text-5xl text-white font-bold block">Trusted Security</span>
          <span class="text-2xl sm:text-4xl md:text-5xl text-brand-yellow font-bold block">Guard Services</span>
          <span class="text-lg sm:text-2xl md:text-4xl text-white/80 font-bold block mt-1 sm:mt-2">in Delhi NCR</span>
        </h1>
       <p class="text-white/70 text-sm sm:text-base lg:text-lg leading-relaxed mb-5 sm:mb-8 fade-up max-w-2xl" style="animation-delay:0.2s">
  We provide trained, verified security guards, housekeeping teams, facility staff, bouncers, drivers, and fire safety personnel for offices, societies, hospitals, and commercial properties across Delhi NCR.
</p>
        <div class="flex flex-wrap gap-2 sm:gap-3 fade-up" style="animation-delay:0.3s">
          <a href="contact" class="bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold px-5 sm:px-7 py-2.5 sm:py-3.5 rounded capitalize tracking-wide text-xs sm:text-base transition-colors shadow-lg">
            Get Free Quote
          </a>
          <a href="tel:+919430695171" class="flex items-center gap-2 border border-brand-yellow text-brand-yellow hover:bg-brand-yellow hover:text-brand-dark font-semibold px-5 sm:px-7 py-2.5 sm:py-3.5 rounded capitalize tracking-wide text-xs sm:text-base transition-colors">
            <i class="fa fa-phone"></i> Call Now
          </a>
        </div>
      </div>
    </div>
  </div>


</section>


<!-- ══════════════════════════════════════════
     TRUST STRIP — yellow
═══════════════════════════════════════════ -->
<div class="bg-brand-yellow py-3 sm:py-4">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex flex-wrap justify-center gap-x-5 sm:gap-x-8 gap-y-1.5 sm:gap-y-2 text-brand-dark text-[12px] sm:text-base font-bold capitalize tracking-wide">
      <span class="flex items-center gap-1.5 sm:gap-2"><i class="fa fa-check-circle"></i> Trained & Verified Manpower</span>
      <span class="flex items-center gap-1.5 sm:gap-2"><i class="fa fa-check-circle"></i> Police Verification Support</span>
      <span class="flex items-center gap-1.5 sm:gap-2"><i class="fa fa-check-circle"></i> Delhi NCR Coverage</span>
      <span class="flex items-center gap-1.5 sm:gap-2"><i class="fa fa-check-circle"></i> 24/7 Supervision</span>
      <span class="flex items-center gap-1.5 sm:gap-2"><i class="fa fa-check-circle"></i> Quick Deployment</span>
    </div>
  </div>
</div>


<!-- ══════════════════════════════════════════
     STATS — WHITE
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
     SERVICES OVERVIEW — light gray
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-gray-50" id="services">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">

    <div class="text-center mb-8 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-wide text-base mb-2 sm:mb-3">What We Offer</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-3 sm:mb-4">Our Services</h2>
      <div class="y-divider-center mx-auto mb-4 sm:mb-5"></div>
      <p class="text-gray-500 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed">
        From trained security guards to professional facility staff — we provide complete manpower solutions tailored for every site type across Delhi NCR.
      </p>
    </div>

    <!-- Row 1: Security -->
    <div class="mb-4">
      <p class="text-lg capitalize tracking-wide text-brand-dark font-bold mb-4 sm:mb-5 flex items-center gap-3">
        <span class="w-8 h-px bg-brand-yellow inline-block"></span> Security Guard Services
      </p>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 sm:gap-5">

        <a href="security-guard-services/unarmed-security" class="service-card group fade-up">
          <div class="relative h-40 sm:h-44 overflow-hidden">
            <img src="<?= mediaUrl($media, 'unarmed_security'); ?>" alt="Unarmed Security Guards" loading="lazy" decoding="async" sizes="(max-width: 639px) 100vw, (max-width: 1023px) 50vw, 20vw" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
            <div class="absolute bottom-3 left-3 w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-brand-yellow flex items-center justify-center shadow-md">
              <i class="fa fa-shield-alt text-brand-dark text-sm sm:text-base"></i>
            </div>
          </div>
          <div class="card-body bg-white p-4 sm:p-5">
            <h3 class="font-display font-bold text-lg sm:text-xl text-brand-dark capitalize leading-tight mb-1 sm:mb-2">Unarmed Security Guards</h3>
            <p class="text-gray-500 text-sm sm:text-base leading-relaxed hidden sm:block">For offices, societies, schools, hospitals & commercial spaces.</p>
            <div class="mt-3 sm:mt-4 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 group-hover:text-brand-yellow transition-all">Know More <i class="fa fa-arrow-right text-xs"></i></div>
          </div>
        </a>

        <a href="security-guard-services/armed-security" class="service-card group fade-up" style="animation-delay:0.05s">
          <div class="relative h-40 sm:h-44 overflow-hidden">
            <img src="<?= mediaUrl($media, 'armed_security'); ?>" alt="Armed Security Guards" loading="lazy" decoding="async" sizes="(max-width: 639px) 100vw, (max-width: 1023px) 50vw, 20vw" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
            <div class="absolute bottom-3 left-3 w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-brand-yellow flex items-center justify-center shadow-md">
              <i class="fa fa-user-shield text-brand-dark text-sm sm:text-base"></i>
            </div>
          </div>
          <div class="card-body bg-white p-4 sm:p-5">
            <h3 class="font-display font-bold text-lg sm:text-xl text-brand-dark capitalize leading-tight mb-1 sm:mb-2">Armed Security Guards</h3>
            <p class="text-gray-500 text-sm sm:text-base leading-relaxed hidden sm:block">For banks, cash transit, high-risk & sensitive locations.</p>
            <div class="mt-3 sm:mt-4 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 group-hover:text-brand-yellow transition-all">Know More <i class="fa fa-arrow-right text-xs"></i></div>
          </div>
        </a>

        <a href="security-guard-services/lady-security" class="service-card group fade-up" style="animation-delay:0.1s">
          <div class="relative h-40 sm:h-44 overflow-hidden">
            <img src="<?= mediaUrl($media, 'lady_security'); ?>" alt="Lady Security Guards" loading="lazy" decoding="async" sizes="(max-width: 639px) 100vw, (max-width: 1023px) 50vw, 20vw" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
            <div class="absolute bottom-3 left-3 w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-brand-yellow flex items-center justify-center shadow-md">
              <i class="fa fa-venus text-brand-dark text-sm sm:text-base"></i>
            </div>
          </div>
          <div class="card-body bg-white p-4 sm:p-5">
            <h3 class="font-display font-bold text-lg sm:text-xl text-brand-dark capitalize leading-tight mb-1 sm:mb-2">Lady Security Guards</h3>
            <p class="text-gray-500 text-sm sm:text-base leading-relaxed hidden sm:block">Trained female security officers for sensitive deployments.</p>
            <div class="mt-3 sm:mt-4 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 group-hover:text-brand-yellow transition-all">Know More <i class="fa fa-arrow-right text-xs"></i></div>
          </div>
        </a>

        <a href="security-guard-services/vip-security" class="service-card group fade-up" style="animation-delay:0.15s">
          <div class="relative h-40 sm:h-44 overflow-hidden">
            <img src="<?= mediaUrl($media, 'vip_security'); ?>" alt="VIP & PSO Security" loading="lazy" decoding="async" sizes="(max-width: 639px) 100vw, (max-width: 1023px) 50vw, 20vw" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
            <div class="absolute bottom-3 left-3 w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-brand-yellow flex items-center justify-center shadow-md">
              <i class="fa fa-star text-brand-dark text-sm sm:text-base"></i>
            </div>
          </div>
          <div class="card-body bg-white p-4 sm:p-5">
            <h3 class="font-display font-bold text-lg sm:text-xl text-brand-dark capitalize leading-tight mb-1 sm:mb-2">VIP & PSO Security</h3>
            <p class="text-gray-500 text-sm sm:text-base leading-relaxed hidden sm:block">Personal security officers for executives and VIP personnel.</p>
            <div class="mt-3 sm:mt-4 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 group-hover:text-brand-yellow transition-all">Know More <i class="fa fa-arrow-right text-xs"></i></div>
          </div>
        </a>

        <a href="security-guard-services/escort-security" class="service-card group fade-up" style="animation-delay:0.2s">
          <div class="relative h-40 sm:h-44 overflow-hidden">
            <img src="<?= mediaUrl($media, 'escort_security'); ?>" alt="Escort Security Services" loading="lazy" decoding="async" sizes="(max-width: 639px) 100vw, (max-width: 1023px) 50vw, 20vw" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
            <div class="absolute bottom-3 left-3 w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-brand-yellow flex items-center justify-center shadow-md">
              <i class="fa fa-car text-brand-dark text-sm sm:text-base"></i>
            </div>
          </div>
          <div class="card-body bg-white p-4 sm:p-5">
            <h3 class="font-display font-bold text-lg sm:text-xl text-brand-dark capitalize leading-tight mb-1 sm:mb-2">Escort Security Services</h3>
            <p class="text-gray-500 text-sm sm:text-base leading-relaxed hidden sm:block">Safe escort solutions for movement and transit security.</p>
            <div class="mt-3 sm:mt-4 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 group-hover:text-brand-yellow transition-all">Know More <i class="fa fa-arrow-right text-xs"></i></div>
          </div>
        </a>

      </div>
    </div>

    <!-- Row 2: Facility -->
    <div class="mt-8 sm:mt-10 mb-4">
      <p class="text-lg capitalize tracking-wide text-brand-dark font-bold mb-4 sm:mb-5 flex items-center gap-3">
        <span class="w-8 h-px bg-brand-yellow inline-block"></span> Facility Management Services
      </p>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">

        <a href="facility-management/housekeeping" class="service-card group fade-up">
          <div class="relative h-40 sm:h-44 overflow-hidden">
            <img src="<?= mediaUrl($media, 'housekeeping'); ?>" alt="Housekeeping Services" loading="lazy" decoding="async" sizes="(max-width: 639px) 100vw, (max-width: 1023px) 50vw, 20vw" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
            <div class="absolute bottom-3 left-3 w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-brand-yellow flex items-center justify-center shadow-md">
              <i class="fa fa-broom text-brand-dark text-sm sm:text-base"></i>
            </div>
          </div>
          <div class="card-body bg-white p-4 sm:p-5">
            <h3 class="font-display font-bold text-lg sm:text-xl text-brand-dark capitalize leading-tight mb-1 sm:mb-2">Housekeeping Services</h3>
            <p class="text-gray-500 text-sm sm:text-base leading-relaxed hidden sm:block">Daily and deep cleaning with trained, groomed staff.</p>
            <div class="mt-3 sm:mt-4 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 group-hover:text-brand-yellow transition-all">Know More <i class="fa fa-arrow-right text-xs"></i></div>
          </div>
        </a>

        <a href="facility-management/office-boy" class="service-card group fade-up" style="animation-delay:0.05s">
          <div class="relative h-40 sm:h-44 overflow-hidden">
            <img src="<?= mediaUrl($media, 'office_boy'); ?>" alt="Office Boy & Pantry Staff" loading="lazy" decoding="async" sizes="(max-width: 639px) 100vw, (max-width: 1023px) 50vw, 20vw" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
            <div class="absolute bottom-3 left-3 w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-brand-yellow flex items-center justify-center shadow-md">
              <i class="fa fa-coffee text-brand-dark text-sm sm:text-base"></i>
            </div>
          </div>
          <div class="card-body bg-white p-4 sm:p-5">
            <h3 class="font-display font-bold text-lg sm:text-xl text-brand-dark capitalize leading-tight mb-1 sm:mb-2">Office Boy & Pantry Staff</h3>
            <p class="text-gray-500 text-sm sm:text-base leading-relaxed hidden sm:block">Pantry maintenance, tea service and office support staff.</p>
            <div class="mt-3 sm:mt-4 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 group-hover:text-brand-yellow transition-all">Know More <i class="fa fa-arrow-right text-xs"></i></div>
          </div>
        </a>

        <a href="facility-management/bouncers" class="service-card group fade-up" style="animation-delay:0.1s">
          <div class="relative h-40 sm:h-44 overflow-hidden">
            <img src="<?= mediaUrl($media, 'bouncers'); ?>" alt="Bouncers" loading="lazy" decoding="async" sizes="(max-width: 639px) 100vw, (max-width: 1023px) 50vw, 20vw" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
            <div class="absolute bottom-3 left-3 w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-brand-yellow flex items-center justify-center shadow-md">
              <i class="fa fa-dumbbell text-brand-dark text-sm sm:text-base"></i>
            </div>
          </div>
          <div class="card-body bg-white p-4 sm:p-5">
            <h3 class="font-display font-bold text-lg sm:text-xl text-brand-dark capitalize leading-tight mb-1 sm:mb-2">Bouncers</h3>
            <p class="text-gray-500 text-sm sm:text-base leading-relaxed hidden sm:block">Professional bouncers for events, clubs, and high-footfall venues.</p>
            <div class="mt-3 sm:mt-4 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 group-hover:text-brand-yellow transition-all">Know More <i class="fa fa-arrow-right text-xs"></i></div>
          </div>
        </a>

        <a href="facility-management/fire-safety" class="service-card group fade-up" style="animation-delay:0.15s">
          <div class="relative h-40 sm:h-44 overflow-hidden">
            <img src="<?= mediaUrl($media, 'fire_safety'); ?>" alt="Fire & Safety Personnel" loading="lazy" decoding="async" sizes="(max-width: 639px) 100vw, (max-width: 1023px) 50vw, 20vw" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
            <div class="absolute bottom-3 left-3 w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-brand-yellow flex items-center justify-center shadow-md">
              <i class="fa fa-fire-extinguisher text-brand-dark text-sm sm:text-base"></i>
            </div>
          </div>
          <div class="card-body bg-white p-4 sm:p-5">
            <h3 class="font-display font-bold text-lg sm:text-xl text-brand-dark capitalize leading-tight mb-1 sm:mb-2">Fire & Safety Personnel</h3>
            <p class="text-gray-500 text-sm sm:text-base leading-relaxed hidden sm:block">Trained fire safety officers for commercial and industrial sites.</p>
            <div class="mt-3 sm:mt-4 text-brand-dark text-sm font-bold flex items-center gap-1 group-hover:gap-2 group-hover:text-brand-yellow transition-all">Know More <i class="fa fa-arrow-right text-xs"></i></div>
          </div>
        </a>

      </div>
    </div>

  <div class="text-center mt-8 sm:mt-10 fade-up">
  <a href="service" class="inline-flex items-center gap-2 bg-brand-dark text-white hover:bg-brand-yellow hover:text-brand-dark font-bold px-6 sm:px-8 py-2.5 sm:py-3 rounded capitalize tracking-wide text-ms sm:text-base transition-colors">
    View All Services <i class="fa fa-arrow-right text-xs"></i>
  </a>
</div>
  </div>
</section>

<style>
.service-card {
  display: flex;
  flex-direction: column;
  height: 100%;
  border-radius: 0.75rem;
  overflow: hidden;
  border: 1px solid #E5E7EB;
  box-shadow: 0 2px 10px rgba(0,0,0,0.05);
  transition: transform 0.35s ease, box-shadow 0.35s ease;
  background: #fff;
}
.service-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 14px 30px rgba(0,0,0,0.12);
}
.service-card .card-body {
  display: flex;
  flex-direction: column;
  flex: 1;
}
.service-card .card-body p {
  flex-grow: 1;
}

.fade-up {
  opacity: 0;
  transform: translateY(24px);
}
.fade-up.in-view {
  animation: fadeUp 0.6s ease forwards;
}
@keyframes fadeUp {
  to { opacity: 1; transform: translateY(0); }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const items = document.querySelectorAll('.fade-up');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });
  items.forEach(item => observer.observe(item));
});
</script>

<!-- ══════════════════════════════════════════
     WHY CHOOSE US — WHITE
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-center">

      <div class="relative fade-up order-2 lg:order-1 mt-8 lg:mt-0">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img
    src="<?= mediaUrl($media, 'why_choose_us'); ?>"
    alt="Security guard services"
    loading="lazy"
    decoding="async"
    sizes="(max-width: 1023px) 100vw, 50vw"
    class="w-full h-full object-cover object-center"
>
        </div>
        <div class="absolute -bottom-4 -right-4 sm:-bottom-5 sm:-right-5 bg-brand-dark rounded-xl p-4 sm:p-5 shadow-2xl">
          <div class="text-white text-center">
            <div class="font-display font-black text-2xl sm:text-3xl leading-none text-brand-yellow">ISO</div>
            <div class="text-sm font-semibold mt-1 tracking-wide">Certified</div>
            <div class="text-sm text-gray-300 mt-0.5">Service Model</div>
          </div>
        </div>
        <div class="absolute -top-4 -left-4 sm:-top-5 sm:-left-5 bg-white border border-gray-200 rounded-xl p-3 sm:p-4 shadow-xl max-w-[160px] sm:max-w-[180px]">
          <div class="flex items-center gap-2 sm:gap-3">
            <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-brand-yellow/20 flex items-center justify-center flex-shrink-0">
              <i class="fa fa-clock text-brand-dark text-sm"></i>
            </div>
            <div>
              <div class="font-display font-bold text-brand-dark text-base sm:text-lg leading-none">24/7</div>
              <div class="text-gray-500 text-[10px] sm:text-sm mt-0.5">Operational Support</div>
            </div>
          </div>
        </div>
      </div>

      <div class="order-1 lg:order-2">
        <p class="text-brand-dark font-semibold capitalize tracking-wide text-base mb-2 sm:mb-3 fade-up">Why Choose Us</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-3 sm:mb-4 fade-up">
          Reliable, Compliant &<span style="color:#C9A91E;">Client-Focused</span>
        </h2>
        <div class="y-divider-center mb-4 sm:mb-6 fade-up"></div>
        <p class="text-gray-500 text-base sm:text-lg leading-relaxed mb-6 sm:mb-8 fade-up">
          We provide reliable, compliant, and customer-focused services with a professional management approach across Delhi NCR.
        </p>
        <div class="space-y-3 sm:space-y-4">
          <div class="flex gap-3 sm:gap-4 items-start fade-up">
            <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-certificate text-brand-dark text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-lg">ISO-Certified Service Model</h4>
              <p class="text-gray-500 text-base mt-0.5 leading-relaxed">Quality-driven operations backed by certified processes.</p>
            </div>
          </div>
          <div class="flex gap-3 sm:gap-4 items-start fade-up" style="animation-delay:0.05s">
            <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-users-cog text-brand-dark text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-lg">Experienced Management Team</h4>
              <p class="text-gray-500 text-base mt-0.5 leading-relaxed">Seasoned professionals overseeing all deployments and operations.</p>
            </div>
          </div>
          <div class="flex gap-3 sm:gap-4 items-start fade-up" style="animation-delay:0.1s">
            <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-gavel text-brand-dark text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-lg">Legal Compliance & PF/ESIC Support</h4>
              <p class="text-gray-500 text-base mt-0.5 leading-relaxed">Full labour law compliance with ESI, PF and GST documentation.</p>
            </div>
          </div>
          <div class="flex gap-3 sm:gap-4 items-start fade-up" style="animation-delay:0.15s">
            <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-headset text-brand-dark text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-lg">24x7 Customer Support</h4>
              <p class="text-gray-500 text-base mt-0.5 leading-relaxed">Round-the-clock support and escalation system for all clients.</p>
            </div>
          </div>
          <div class="flex gap-3 sm:gap-4 items-start fade-up" style="animation-delay:0.2s">
            <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa fa-clipboard-list text-brand-dark text-sm"></i>
            </div>
            <div>
              <h4 class="font-semibold text-brand-dark text-lg">Client-Specific SOPs</h4>
              <p class="text-gray-500 text-base mt-0.5 leading-relaxed">Custom Standard Operating Procedures for every client site.</p>
            </div>
          </div>
        </div>
        <div class="mt-6 sm:mt-8 fade-up">
  <a href="about" class="inline-flex items-center gap-2 bg-brand-dark hover:bg-brand-yellow text-white hover:text-brand-dark font-bold px-6 sm:px-7 py-2.5 sm:py-3 rounded capitalize tracking-wide text-xs sm:text-sm transition-colors">
    Learn About Us <i class="fa fa-arrow-right text-xs"></i>
  </a>
</div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     INDUSTRIES SERVED — DARK
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-brand-dark">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-8 sm:mb-12 fade-up">
      <p class="text-brand-yellow font-semibold capitalize tracking-wide text-base mb-2 sm:mb-3">Who We Protect</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-white leading-tight mb-3 sm:mb-4">Industries Served</h2>
      <div class="y-divider-center mx-auto mb-4 sm:mb-5"></div>
      <p class="text-gray-400 max-w-xl mx-auto text-base sm:text-lg leading-relaxed">
        Security requirements differ for every site. We provide customised security and facility manpower across all major industries.
      </p>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3 sm:gap-4">
      <?php
      $industries = [
        ['href'=>'industries/offices',             'media'=>'industry_1',  'icon'=>'fa-building',       'label'=>'Corporate Offices'],
        ['href'=>'industries/industrial',          'media'=>'industry_2',  'icon'=>'fa-industry',       'label'=>'Factories & Industrial'],
        ['href'=>'industries/residential',         'media'=>'industry_3',  'icon'=>'fa-home',           'label'=>'Residential Societies'],
        ['href'=>'industries/banks',               'media'=>'industry_4',  'icon'=>'fa-university',     'label'=>'Banks & ATMs'],
        ['href'=>'industries/hospitals',           'media'=>'industry_5',  'icon'=>'fa-hospital',       'label'=>'Hospitals'],
        ['href'=>'industries/schools-colleges',    'media'=>'industry_6',  'icon'=>'fa-graduation-cap', 'label'=>'Schools & Colleges'],
        ['href'=>'industries/warehouses-logistics','media'=>'industry_7',  'icon'=>'fa-warehouse',      'label'=>'Warehouses & Logistics'],
        ['href'=>'industries/construction',        'media'=>'industry_8',  'icon'=>'fa-hard-hat',       'label'=>'Construction Sites'],
        ['href'=>'industries/retail',              'media'=>'industry_9',  'icon'=>'fa-store',          'label'=>'Retail & Malls'],
        ['href'=>'industries/event-management',    'media'=>'industry_10', 'icon'=>'fa-calendar-alt',  'label'=>'Events & Crowds'],
      ];
      foreach ($industries as $i => $ind):
      ?>
      <a href="<?php echo $ind['href']; ?>" class="group relative rounded-xl overflow-hidden fade-up" style="aspect-ratio:1/1;<?php echo $i > 0 ? 'animation-delay:'.($i*0.05).'s' : ''; ?>">
        <img
          src="<?= mediaUrl($media, $ind['media']); ?>"
          alt="<?= htmlspecialchars($ind['label'], ENT_QUOTES, 'UTF-8'); ?>"
          loading="lazy"
          decoding="async"
          sizes="(max-width: 639px) 50vw, (max-width: 767px) 33vw, (max-width: 1023px) 25vw, 20vw"
          class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-500"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
        <div class="absolute inset-x-0 bottom-0 p-2 sm:p-4">
          <i class="fa <?php echo $ind['icon']; ?> text-brand-yellow text-sm sm:text-xl mb-1 block"></i>
          <h3 class="font-display font-bold text-white text-[10px] sm:text-base capitalize leading-tight"><?php echo $ind['label']; ?></h3>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     OUR PROCESS — WHITE
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-8 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-wide text-base mb-2 sm:mb-3">How It Works</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-3 sm:mb-4">Our Process</h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="relative grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 sm:gap-6">

      <!-- connecting line (desktop only) — starts/ends at first & last circle centers -->
      <div class="hidden lg:block absolute h-[2px] bg-gray-200" style="top: 2rem; left: 10%; right: 10%;"></div>

      <?php
      $steps = [
        ['n'=>'1','fill'=>true, 'title'=>'Enquiry Received',      'desc'=>'Submit your requirement via call, WhatsApp, or contact form.'],
        ['n'=>'2','fill'=>false,'title'=>'Site Visit',             'desc'=>'Our team visits your site or conducts a detailed requirement discussion.'],
        ['n'=>'3','fill'=>false,'title'=>'Risk Assessment',        'desc'=>'Risk and manpower assessment is prepared for your specific site.'],
        ['n'=>'4','fill'=>false,'title'=>'Staff Deployment',       'desc'=>'Verified and trained staff are selected and deployed at your site.'],
        ['n'=>'5','fill'=>false,'title'=>'Supervision & Reporting','desc'=>'Regular supervision and periodic reporting ensure service quality.'],
      ];
      foreach ($steps as $i => $s):
      ?>
      <div class="relative text-center fade-up process-step" style="animation-delay:<?php echo $i*0.08; ?>s">
        <div class="relative z-10 inline-flex items-center justify-center w-12 h-12 sm:w-16 sm:h-16 rounded-full process-circle <?php echo $s['fill'] ? 'bg-brand-dark text-brand-yellow' : 'bg-white text-brand-dark border-2 border-brand-dark'; ?> font-display font-black text-xl sm:text-2xl mb-3 sm:mb-4 mx-auto transition-colors duration-300">
          <?php echo $s['n']; ?>
        </div>
        <h4 class="font-display font-bold text-brand-dark capitalize text-sm sm:text-xl mb-1 sm:mb-2"><?php echo $s['title']; ?></h4>
        <p class="text-gray-500 text-base sm:text-lg leading-relaxed"><?php echo $s['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
.process-step:hover .process-circle {
  background-color: #F2CF4A !important;
  border-color: #F2CF4A !important;
  color: #0A0A0A !important;
}
</style>




<!-- ══════════════════════════════════════════
     OUR COMMITMENTS — WHITE
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-white relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
    <div class="text-center mb-8 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-wide text-sm sm:text-base mb-2 sm:mb-3">Our Commitments</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-3 sm:mb-4">Dedicated to Excellence</h2>
      <div class="y-divider-center mx-auto mb-4 sm:mb-5"></div>
      <p class="font-display font-black capitalize text-base sm:text-lg md:text-xl text-brand-dark leading-tight mb-3 sm:mb-4">In Every Service We Provide</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6">
      <?php
      $commitments = [
        ['icon'=>'fa-thumbs-up', 'title'=>'Customer Satisfaction','desc'=>'We deliver exceptional service to ensure complete customer trust and satisfaction at every touchpoint.'],
        ['icon'=>'fa-star',      'title'=>'Quality Assurance',    'desc'=>'High-quality service delivery that meets global standards through regular inspections and structured SOPs.'],
        ['icon'=>'fa-lightbulb', 'title'=>'Innovation & Growth',  'desc'=>'Continuous innovation in security technology and training to meet future challenges and evolving client demands.'],
        ['icon'=>'fa-leaf',      'title'=>'Sustainability',        'desc'=>'Eco-friendly practices in housekeeping and facility management for a better and safer tomorrow.'],
        ['icon'=>'fa-heart',     'title'=>'Employee Well-being',   'desc'=>'We nurture growth, inclusivity, and a positive work culture ensuring our people thrive on every assignment.'],
        ['icon'=>'fa-handshake', 'title'=>'Transparent Operations','desc'=>'Building trust through transparent communication, ethical practices, and reliable delivery commitments.'],
      ];
      foreach ($commitments as $i => $c):
      ?>
      <div class="commitment-card relative bg-gray-50 border border-gray-200 rounded-2xl p-5 sm:p-8 fade-up group overflow-hidden" style="animation-delay:<?php echo $i*0.07; ?>s">
        <!-- decorative number -->
        <span class="absolute -top-2 -right-1 font-display font-black text-6xl sm:text-7xl text-gray-100 select-none pointer-events-none group-hover:text-brand-yellow/20 transition-colors duration-500"><?php echo str_pad($i+1, 2, '0', STR_PAD_LEFT); ?></span>

        <div class="relative z-10">
          <div class="commitment-icon w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-yellow/20 flex items-center justify-center mb-4 sm:mb-5 transition-all duration-400 group-hover:bg-brand-yellow group-hover:-rotate-6 group-hover:scale-110">
            <i class="fa <?php echo $c['icon']; ?> text-brand-dark text-xl sm:text-2xl transition-colors"></i>
          </div>
          <h3 class="font-display font-bold text-brand-dark capitalize text-base sm:text-xl mb-2 sm:mb-3"><?php echo $c['title']; ?></h3>
          <p class="text-gray-500 text-sm sm:text-base leading-relaxed"><?php echo $c['desc']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
.commitment-card {
  transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 0.4s ease, border-color 0.4s ease;
}
.commitment-card:hover {
  transform: translateY(-8px);
  border-color: #F2CF4A;
  box-shadow: 0 16px 32px rgba(0,0,0,0.08);
}
.commitment-card:hover::before {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: 1rem;
  padding: 1px;
  background: linear-gradient(135deg, #F2CF4A, transparent 60%);
  -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
  mask-composite: exclude;
  pointer-events: none;
}
</style>
<!-- ══════════════════════════════════════════
     LOCATION COVERAGE — DARK
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-brand-dark">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-8 sm:mb-12 fade-up">
      <p class="text-brand-yellow font-semibold capitalize tracking-wide text-base mb-2 sm:mb-3">Service Coverage</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-white leading-tight mb-3 sm:mb-4">Delhi NCR Coverage</h2>
      <div class="y-divider-center mx-auto mb-4 sm:mb-5"></div>
      <p class="text-gray-400 text-base sm:text-lg max-w-lg mx-auto">Security guard and facility management services available across all major Delhi NCR locations.</p>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-2 sm:gap-3 fade-up">
      <?php
      $locations = [
        ['href'=>'locations/delhi',         'name'=>'Delhi'],
        ['href'=>'locations/noida',         'name'=>'Noida'],
        ['href'=>'locations/greater-noida', 'name'=>'Greater Noida'],
        ['href'=>'locations/gurgaon',       'name'=>'Gurgaon'],
        ['href'=>'locations/faridabad',     'name'=>'Faridabad'],
        ['href'=>'locations/ghaziabad',     'name'=>'Ghaziabad'],
        
        ['href'=>'locations/manesar',       'name'=>'Manesar'],
        ['href'=>'locations/bahadurgarh',   'name'=>'Bahadurgarh'],
      ];
      foreach ($locations as $loc):
      ?>
      <a href="<?php echo $loc['href']; ?>" class="group bg-white/5 border border-white/10 hover:border-brand-yellow rounded-xl p-3 sm:p-4 text-center transition-all hover:bg-brand-yellow/10">
        <i class="fa fa-map-marker-alt text-brand-yellow mb-1 sm:mb-2 block text-base sm:text-lg"></i>
        <span class="text-white text-base sm:text-lg font-semibold"><?php echo $loc['name']; ?></span>
      </a>
      <?php endforeach; ?>
      <a href="location/" class="group bg-brand-yellow/15 border border-brand-yellow/50 hover:bg-brand-yellow rounded-xl p-3 sm:p-4 text-center transition-all">
        <i class="fa fa-plus text-brand-yellow group-hover:text-brand-dark mb-1 sm:mb-2 block text-base sm:text-lg transition-colors"></i>
        <span class="text-white group-hover:text-brand-dark text-xs sm:text-sm font-semibold transition-colors">More Areas</span>
      </a>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     VISION & MISSION — light gray
═══════════════════════════════════════════ -->
<section class="relative py-14 sm:py-20 md:py-28 bg-gray-50 overflow-hidden">

  <!-- Decorative background blobs -->
  <div class="absolute -top-24 -left-24 w-72 h-72 sm:w-96 sm:h-96 bg-brand-yellow/20 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute -bottom-32 -right-20 w-72 h-72 sm:w-96 sm:h-96 bg-brand-yellow/10 rounded-full blur-3xl pointer-events-none"></div>

  <div class="relative max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

      <!-- ── Left: Text ── -->
      <div class="fade-up">
        <div class="inline-flex items-center gap-2 mb-3 sm:mb-4">
          <span class="w-8 h-[2px] bg-brand-yellow"></span>
          <p class="text-brand-dark font-semibold capitalize tracking-wide text-xs sm:text-base ">Our Purpose</p>
        </div>

        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-[1.15] mb-5 sm:mb-6">
          Vision &amp; Mission<br/>
          <span class="bg-gradient-to-r from-[#C9A91E] to-brand-yellow bg-clip-text text-transparent">
            That Defines Excellence
          </span>
        </h2>

        <div class="space-y-4 sm:space-y-5">

          <!-- Vision card -->
          <div class="vm-card group fade-up" style="animation-delay:0.1s">
            <div class="vm-icon">
              <i class="fa fa-eye text-brand-dark text-lg sm:text-xl"></i>
            </div>
            <div class="flex-1 min-w-0">
              <h3 class="font-display font-bold text-brand-dark text-lg sm:text-xl mb-1.5">Our Vision</h3>
              <p class="text-gray-500 text-sm sm:text-base leading-relaxed">
                To be a symbol of trust, discipline, and excellence by delivering world-class security, housekeeping, and manpower solutions across Delhi NCR and beyond.
              </p>
            </div>
          </div>

          <!-- Mission card -->
          <div class="vm-card group fade-up" style="animation-delay:0.2s">
            <div class="vm-icon">
              <i class="fa fa-bullseye text-brand-dark text-lg sm:text-xl"></i>
            </div>
            <div class="flex-1 min-w-0">
              <h3 class="font-display font-bold text-brand-dark text-lg sm:text-xl mb-1.5">Our Mission</h3>
              <p class="text-gray-500 text-sm sm:text-base leading-relaxed">
                To provide ethical, reliable, and cost-effective services through trained professionals while maintaining the highest standards of safety, discipline, and client satisfaction.
              </p>
            </div>
          </div>

        </div>
      </div>

      <!-- ── Right: Image ── -->
      <div class="relative fade-up mt-4 lg:mt-0" style="animation-delay:0.15s">

        <!-- Accent frame behind image -->
        <div class="absolute -inset-3 sm:-inset-4 border-2 border-brand-yellow/40 rounded-2xl -z-10 hidden sm:block"></div>

        <div class="vm-image-wrap rounded-2xl overflow-hidden aspect-[4/3] shadow-xl">
          <img
            src="<?= mediaUrl($media, 'vision_mission'); ?>"
            alt="Vision and Mission"
            loading="lazy"
            decoding="async"
            sizes="(max-width: 1023px) 100vw, 50vw"
            class="w-full h-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-105"
          />
        </div>

        <!-- Floating stat badge -->
        <div class="vm-badge">
          <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-brand-yellow flex items-center justify-center flex-shrink-0">
            <i class="fa fa-shield-halved text-brand-dark text-base sm:text-lg"></i>
          </div>
          <div class="min-w-0">
            <p class="font-display font-black text-brand-dark text-base sm:text-lg leading-none">10+ Years</p>
            <p class="text-gray-500 text-[11px] sm:text-xs mt-1">Of Trusted Service</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
  .vm-card {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    background: #FFFFFF;
    border: 1px solid #ECECEC;
    border-radius: 14px;
    padding: 18px 20px;
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
  }
  .vm-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 32px rgba(0,0,0,0.08);
    border-color: rgba(242,207,74,0.5);
  }
  .vm-icon {
    flex-shrink: 0;
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: #F2CF4A;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease;
  }
  .vm-card:hover .vm-icon {
    transform: scale(1.08) rotate(-4deg);
  }

  .vm-image-wrap { position: relative; }

  .vm-badge {
    position: absolute;
    left: 16px;
    bottom: 16px;
    display: flex;
    align-items: center;
    gap: 10px;
    background: rgba(255,255,255,0.9);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(255,255,255,0.6);
    border-radius: 14px;
    padding: 10px 16px;
    box-shadow: 0 12px 28px rgba(0,0,0,0.15);
  }
  @media (min-width: 640px) {
    .vm-badge { left: 24px; bottom: 24px; padding: 12px 18px; }
  }
</style>



<!-- ══════════════════════════════════════════
     CLIENT MARQUEE — light gray
═══════════════════════════════════════════ -->
<section class="py-10 sm:py-14 bg-white border border-gray-200 rounded-xl overflow-hidden">
  <style>
    .marquee-wrap { overflow: hidden; }
    .marquee-track {
      animation: marquee-scroll 32s linear infinite;
    }
    .marquee-wrap:hover .marquee-track {
      animation-play-state: paused;
    }
    @keyframes marquee-scroll {
      0%   { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }
    @media (max-width: 640px) {
      .marquee-track { animation-duration: 20s; }
    }
    @media (prefers-reduced-motion: reduce) {
      .marquee-track { animation: none; }
    }
    .logo-card { position: relative; overflow: hidden; }
    .logo-card .gradient-reveal {
      position: absolute;
      inset: 0;
      opacity: 0;
      transform: scale(1.5);
      transition: opacity 0.7s ease, transform 0.7s ease;
    }
    .logo-card:hover .gradient-reveal {
      opacity: 1;
      transform: scale(1);
    }
    .logo-card img { position: relative; z-index: 1; }
  </style>

  <!-- Header row -->
  <div class="px-6 md:px-8 lg:px-10 pb-6 md:pb-8">
    <div class="grid grid-cols-1 lg:grid-cols-[3fr_2fr] gap-4 lg:gap-8">
      <h2 class="font-display font-black text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight">
        Trusted by Leading Organisations
      </h2>
      <p class="text-gray-500 text-sm sm:text-base leading-relaxed lg:self-end lg:text-right">
        Businesses, societies, and institutions across Delhi NCR trust us for their security and facility management needs.
      </p>
    </div>
  </div>

  <!-- Marquee -->
  <div class="marquee-wrap relative mt-6 sm:mt-8"
       style="-webkit-mask-image: linear-gradient(to right, transparent, black 8%, black 92%, transparent);
              mask-image: linear-gradient(to right, transparent, black 8%, black 92%, transparent);">

    <div class="marquee-track flex w-max items-center gap-4 sm:gap-5 pr-4">
      <?php
        // Update filenames + gradient colors to match your actual logos
        $client_logos = [
          ['media' => 'client_1', 'alt' => 'Client 1', 'from' => '#F2CF4A', 'via' => '#E8B93A', 'to' => '#B38F00'],
          ['media' => 'client_2', 'alt' => 'Client 2', 'from' => '#F2CF4A', 'via' => '#E8B93A', 'to' => '#B38F00'],
          ['media' => 'client_3', 'alt' => 'Client 3', 'from' => '#F2CF4A', 'via' => '#E8B93A', 'to' => '#B38F00'],
          ['media' => 'client_4', 'alt' => 'Client 4', 'from' => '#F2CF4A', 'via' => '#E8B93A', 'to' => '#B38F00'],
          ['media' => 'client_5', 'alt' => 'Client 5', 'from' => '#F2CF4A', 'via' => '#E8B93A', 'to' => '#B38F00'],
          ['media' => 'client_6', 'alt' => 'Client 6', 'from' => '#F2CF4A', 'via' => '#E8B93A', 'to' => '#B38F00'],
        ];
        for ($rep = 0; $rep < 3; $rep++):
          foreach ($client_logos as $logo):
      ?>
      <div class="logo-card flex-shrink-0 h-20 w-36 sm:h-24 sm:w-40 rounded-lg bg-gray-50 border border-gray-200 flex items-center justify-center">
        <div class="gradient-reveal" style="background: linear-gradient(to bottom right, <?php echo $logo['from']; ?>, <?php echo $logo['via']; ?>, <?php echo $logo['to']; ?>);"></div>
        <img
          src="<?= mediaUrl($media, $logo['media']); ?>"
          alt="<?= htmlspecialchars($logo['alt'], ENT_QUOTES, 'UTF-8'); ?>"
          loading="lazy"
          decoding="async"
          width="160"
          height="96"
          class="max-h-3/4 w-auto object-contain"
          style="max-height: 75%;"
          onerror="this.parentElement.style.display='none'"
        />
      </div>
      <?php
          endforeach;
        endfor;
      ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     FAQ + LEAD FORM — DARK background
═══════════════════════════════════════════ -->
<section class="py-8 sm:py-10 md:py-14 relative overflow-hidden">
  <div
    class="absolute inset-0 bg-center bg-cover bg-no-repeat"
    style="background-image:
      linear-gradient(135deg, rgba(10,10,10,0.95) 0%, rgba(10,10,10,0.85) 100%),
      url('<?= mediaUrl($media, 'faq_background'); ?>');"
  ></div>

  <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-6 sm:gap-8 items-start">

      <!-- LEFT: FAQ -->
      <div class="fade-up">
        <p class="text-brand-yellow font-semibold capitalize tracking-wide text-xs sm:text-base mb-1.5 sm:mb-2">Common Questions</p>
        <h2 class="font-display font-black capitalize text-xl sm:text-2xl md:text-3xl text-white leading-tight mb-3 sm:mb-4">
          Frequently <span class="text-brand-yellow">Asked</span>
        </h2>

        <div class="space-y-2 sm:space-y-2.5" id="faq-container">
          <?php
          $faqs = [
            ['q'=>'Do you provide security guards across Delhi NCR?',   'a'=>'Yes, we provide security guard and facility management services across all major Delhi NCR areas including Delhi, Noida, Greater Noida, Gurgaon, Faridabad, Ghaziabad, Manesar, Sonipat, and Bahadurgarh.'],
            ['q'=>'Are your guards verified and background checked?',   'a'=>'Yes. All our staff go through a thorough verification process including ID verification, address verification, police verification support, document checks, and previous work history checks before deployment.'],
            ['q'=>'Can I hire security guards for 24-hour duty?',       'a'=>'Yes. We offer flexible deployment options including 8-hour shifts, 12-hour duty, and full 24-hour deployment. We can assign single guards or complete teams with supervisors based on your requirement.'],
            ['q'=>'Do you provide housekeeping and facility staff?',    'a'=>'Yes. Our facility management services include housekeeping, office boys, pantry staff, receptionists, bouncers, drivers, helpers, garden & maintenance staff, and fire safety personnel.'],
            ['q'=>'How quickly can you deploy manpower?',               'a'=>'We have a ready pool of trained and verified staff. Depending on your requirement size and location, we can deploy manpower quickly after a site discussion and agreement.'],
          ];
          foreach ($faqs as $i => $faq):
          ?>
          <div class="faq-item bg-white/5 border border-white/10 rounded-xl overflow-hidden backdrop-blur-sm fade-up" style="animation-delay:<?php echo $i*0.05; ?>s">
            <button class="faq-toggle w-full flex justify-between items-center px-3.5 sm:px-4 py-2.5 sm:py-3 text-left" onclick="toggleFAQ(this)">
              <span class="text-white font-semibold text-xs sm:text-base pr-4"><?php echo $faq['q']; ?></span>
              <i class="fa fa-plus text-brand-yellow text-xs flex-shrink-0 transition-transform duration-300"></i>
            </button>
            <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
              <p class="px-3.5 sm:px-4 pb-3 sm:pb-3.5 text-white/60 text-xs sm:text-sm leading-relaxed"><?php echo $faq['a']; ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- RIGHT: Form -->
      <div class="bg-white rounded-2xl p-4 sm:p-6 shadow-2xl fade-up mt-4 lg:mt-0" style="animation-delay:0.1s">
        <p class="text-brand-yellow font-semibold capitalize tracking-wide text-base mb-1">Free Assessment</p>
        <h3 class="font-display font-bold text-brand-dark capitalize text-base sm:text-lg mb-3 sm:mb-4">Request Free Assessment</h3>
        <form action="includes/contact" method="POST" class="space-y-2.5 sm:space-y-3">
          <div class="grid grid-cols-2 gap-2.5 sm:gap-3">
            <div>
              <label class="text-gray-500 text-xs font-semibold capitalize tracking-wide mb-1 block">Name *</label>
              <input type="text" name="name" required placeholder="Your name" class="input-field" />
            </div>
            <div>
              <label class="text-gray-500 text-xs font-semibold capitalize tracking-wide mb-1 block">Phone *</label>
              <input type="tel" name="phone" required placeholder="+91 XXXXX" class="input-field" />
            </div>
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wide mb-1 block">Email</label>
            <input type="email" name="email" placeholder="you@company.com" class="input-field" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wide mb-1 block">Company / Society Name</label>
            <input type="text" name="company" placeholder="Organisation name" class="input-field" />
          </div>
          <div class="grid grid-cols-2 gap-2.5 sm:gap-3">
            <div>
              <label class="text-gray-500 text-xs font-semibold capitalize tracking-wide mb-1 block">Service</label>
              <select name="service" class="input-field">
                <option value="">Select</option>
                <option>Security Guards</option>
                <option>Housekeeping</option>
                <option>Facility Management</option>
                <option>Bouncers</option>
                <option>Fire Safety</option>
                <option>CCTV / Technology</option>
                <option>Multiple Services</option>
              </select>
            </div>
            <div>
              <label class="text-gray-500 text-xs font-semibold capitalize tracking-wide mb-1 block">Location</label>
              <select name="location" class="input-field">
                <option value="">Select</option>
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
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wide mb-1 block">Message</label>
            <textarea name="message" rows="2" placeholder="Describe your requirement..." class="input-field resize-none"></textarea>
          </div>
          <button type="submit" class="w-full bg-brand-dark hover:bg-brand-yellow text-white hover:text-brand-dark font-bold py-2.5 sm:py-3 rounded-lg capitalize tracking-wide text-xs sm:text-sm transition-colors flex items-center justify-center gap-2">
            <i class="fa fa-paper-plane text-xs"></i> Request Free Assessment
          </button>
        </form>
      </div>

    </div>
  </div>
</section>

<script>
function toggleFAQ(btn) {
  const item = btn.closest('.faq-item');
  const body = item.querySelector('.faq-body');
  const icon = btn.querySelector('i');
  const isOpen = body.style.maxHeight && body.style.maxHeight !== '0px';

  document.querySelectorAll('#faq-container .faq-body').forEach(b => {
    if (b !== body) {
      b.style.maxHeight = '0px';
      b.closest('.faq-item').querySelector('i').style.transform = 'rotate(0deg)';
    }
  });

  if (isOpen) {
    body.style.maxHeight = '0px';
    icon.style.transform = 'rotate(0deg)';
  } else {
    body.style.maxHeight = body.scrollHeight + 'px';
    icon.style.transform = 'rotate(45deg)';
  }
}
</script>

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
          class="h-40 sm:h-48 md:h-full w-full object-cover object-center"
        />
      </div>

      <!-- Content Section -->
      <div class="md:w-3/5 w-full p-5 sm:p-6 md:p-8 flex flex-col justify-center text-center md:text-left">
        <p class="text-brand-yellow font-semibold capitalize tracking-wide text-base mb-1 sm:mb-1.5">Get In Touch</p>
        <h2 class="font-display font-black capitalize text-xl sm:text-2xl md:text-3xl text-brand-dark leading-tight mb-2 sm:mb-3">
          Need Reliable Security<br class="hidden md:block"/> or Facility Staff?
        </h2>
        <p class="text-gray-500 text-sm sm:text-base mb-4 sm:mb-5 max-w-md mx-auto md:mx-0">
          Contact us today for a free site assessment and get the right security and facility solution for your property.
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


<script>
  // Hero slider
  (function () {
    const slides = document.querySelectorAll('#hero .hero-slide');
    const dots   = document.querySelectorAll('#slider-dots .dot');
    if (!slides.length) return;
    let current = 0;

    function goToSlide(index) {
      slides[current].classList.remove('active');
      // reset dot
      dots[current].style.width = '8px';
      dots[current].style.background = 'rgba(255,255,255,0.4)';

      current = index;

      slides[current].classList.add('active');
      // activate dot
      dots[current].style.width = '32px';
      dots[current].style.background = '#F2CF4A';
    }

    let timer = setInterval(() => goToSlide((current + 1) % slides.length), 3000);

    dots.forEach((dot, i) => {
      dot.addEventListener('click', () => {
        clearInterval(timer);
        goToSlide(i);
        timer = setInterval(() => goToSlide((current + 1) % slides.length), 3000);
      });
    });
  })();

  // FAQ accordion
  function toggleFAQ(btn) {
    const body = btn.nextElementSibling;
    const icon = btn.querySelector('i');
    const isOpen = body.style.maxHeight && body.style.maxHeight !== '0px';
    document.querySelectorAll('.faq-body').forEach(b => b.style.maxHeight = '0px');
    document.querySelectorAll('.faq-toggle i').forEach(i => i.classList.remove('rotate-45'));
    if (!isOpen) {
      body.style.maxHeight = body.scrollHeight + 'px';
      icon.classList.add('rotate-45');
    }
  }
</script>

<?php include 'includes/footer.php'; ?>