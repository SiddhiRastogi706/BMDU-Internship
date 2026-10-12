<?php
$media = [
    'industry_hero'         => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1785128976/Who_We_Protect_imlofp.webp',
    'industry_offices'      => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784871267/Our_Story_yglbk3.webp',
    'industry_industrial'   => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784810847/Who_We_Protect2_ktfjpc.webp',
    'industry_residential'  => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784810843/Who_We_Protect_3_xqxtpz.webp',
    'industry_banks'        => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784810843/Who_We_Protect_4_z9ip0r.webp',
    'industry_schools'      => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784810845/Who_We_Protect_6_lohpkm.webp',
    'industry_hospitals'    => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784810844/Who_We_Protect_5_jerd32.webp',
    'industry_warehouses'   => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784811240/industry7_arvmzk.webp',
    'industry_construction' => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784811239/Who_We_Protect_8_ymqujg.webp',
    'industry_retail'       => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784810845/Who_We_Protect_9_b4bt2l.webp',
    'industry_events'       => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784811170/Who_We_Protect_10_1_c0xim6.webp',
    'why_it_matters'        => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784810847/Who_We_Protect2_ktfjpc.webp',
];

function mediaUrl(array $media, string $key): string
{
    return htmlspecialchars($media[$key] ?? '', ENT_QUOTES, 'UTF-8');
}
?>

<?php
$page_title       = "Industries We Serve | Security Guard & Facility Management Services - Conquer Services";
$page_description = "Customised security guard and facility manpower solutions for corporate offices, factories, residential societies, banks, schools, hospitals, warehouses, construction sites, malls, and events across Delhi NCR.";
$active_page      = "industries";
$base_path        = "";
include 'includes/header.php';
?>

<style>
  @keyframes marquee {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }
  .marquee-track { animation: marquee 28s linear infinite; display: flex; width: max-content; }
  .marquee-track:hover { animation-play-state: paused; }
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
</style>

<!-- ══════════════════════════════════════════
     1. HERO SECTION
═══════════════════════════════════════════ -->
<section class="relative min-h-[280px] sm:min-h-[320px] md:min-h-[360px] lg:h-[460px] lg:min-h-[400px] overflow-hidden bg-brand-dark flex items-center" id="hero">
  <img src="<?= mediaUrl($media, 'industry_hero'); ?>" alt="Industry-specific security services Delhi NCR" fetchpriority="high" decoding="async" class="absolute inset-0 w-full h-full object-cover" />
  <div class="absolute inset-0" style="background: linear-gradient(115deg, rgba(5,5,5,0.32) 0%, rgba(10,10,10,0.45) 0%);"></div>
  <div class="absolute inset-0 bg-gradient-to-r from-brand-dark via-brand-dark/60 to-transparent z-10"></div>

  <div class="relative z-20 w-full py-10 sm:py-12 md:py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
      <div class="max-w-2xl">
        <p class="text-brand-yellow font-display font-semibold text-[14px] sm:text-basen capitalize tracking-widest mb-3 sm:mb-4 fade-up">
          Who We Protect
        </p>
        <h1 class="font-display font-black capitalize leading-tight mb-4 sm:mb-6 fade-up" style="animation-delay:0.1s">
          <span class="text-2xl sm:text-4xl md:text-5xl text-white font-bold block">Industry-Specific</span>
          <span class="text-2xl sm:text-4xl md:text-5xl text-brand-yellow font-bold block">Security Services</span>
        </h1>
        <p class="text-white/70 text-base sm:text-lg leading-relaxed mb-6 sm:mb-8 fade-up max-w-xl" style="animation-delay:0.2s">
          Security requirements are different for every site. We provide customised security manpower for corporate offices, factories, residential societies, banks, schools, hospitals, warehouses, construction sites, malls, and events.
        </p>
        <div class="flex flex-wrap gap-3 fade-up" style="animation-delay:0.3s">
          <a href="contact" class="bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold px-5 sm:px-7 py-3 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-sm transition-colors shadow-lg">
            Talk to Our Security Expert
          </a>
          <a href="tel:+919430695171" class="flex items-center gap-2 border border-brand-yellow text-brand-yellow hover:bg-brand-yellow hover:text-brand-dark font-semibold px-5 sm:px-7 py-3 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-sm transition-colors">
            <i class="fa fa-phone"></i> Call Now
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     2. INDUSTRY CARDS — WHITE
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-white" id="industries">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-8 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">Tailored Manpower Solutions</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-3 sm:mb-4">Industries We Serve</h2>
      <div class="y-divider-center mx-auto mb-4 sm:mb-5"></div>
      <p class="text-gray-500 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed">
        From corporate towers to construction sites — we deploy trained, verified, and supervised manpower built around the risk profile of your industry.
      </p>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3 sm:gap-4">
      <a href="industries/offices" class="group relative rounded-xl overflow-hidden fade-up" style="aspect-ratio:1/1">
        <img src="<?= mediaUrl($media, 'industry_offices'); ?>" alt="Corporate Offices" loading="lazy" decoding="async" sizes="(max-width: 639px) 50vw, (max-width: 1023px) 33vw, 20vw" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
        <div class="absolute inset-x-0 bottom-0 p-2 sm:p-4">
          <i class="fa fa-building text-brand-yellow text-sm sm:text-xl mb-1 block"></i>
          <h3 class="font-display font-bold text-white text-[10px] sm:text-sm capitalize leading-tight">Corporate Offices</h3>
        </div>
      </a>
      <a href="industries/industrial" class="group relative rounded-xl overflow-hidden fade-up" style="animation-delay:0.05s;aspect-ratio:1/1">
        <img src="<?= mediaUrl($media, 'industry_industrial'); ?>" alt="Factories and Industrial Units" loading="lazy" decoding="async" sizes="(max-width: 639px) 50vw, (max-width: 1023px) 33vw, 20vw" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
        <div class="absolute inset-x-0 bottom-0 p-2 sm:p-4">
          <i class="fa fa-industry text-brand-yellow text-sm sm:text-xl mb-1 block"></i>
          <h3 class="font-display font-bold text-white text-[10px] sm:text-sm capitalize   leading-tight">Factories & Industrial</h3>
        </div>
      </a>
      <a href="industries/residential" class="group relative rounded-xl overflow-hidden fade-up" style="animation-delay:0.1s;aspect-ratio:1/1">
        <img src="<?= mediaUrl($media, 'industry_residential'); ?>" alt="Residential Societies" loading="lazy" decoding="async" sizes="(max-width: 639px) 50vw, (max-width: 1023px) 33vw, 20vw" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
        <div class="absolute inset-x-0 bottom-0 p-2 sm:p-4">
          <i class="fa fa-home text-brand-yellow text-sm sm:text-xl mb-1 block"></i>
          <h3 class="font-display font-bold text-white text-[10px] sm:text-sm capitalize leading-tight">Residential Societies</h3>
        </div>
      </a>
      <a href="industries/banks" class="group relative rounded-xl overflow-hidden fade-up" style="animation-delay:0.15s;aspect-ratio:1/1">
        <img src="<?= mediaUrl($media, 'industry_banks'); ?>" alt="Banks and ATMs" loading="lazy" decoding="async" sizes="(max-width: 639px) 50vw, (max-width: 1023px) 33vw, 20vw" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
        <div class="absolute inset-x-0 bottom-0 p-2 sm:p-4">
          <i class="fa fa-university text-brand-yellow text-sm sm:text-xl mb-1 block"></i>
          <h3 class="font-display font-bold text-white text-[10px] sm:text-sm capitalize leading-tight">Banks & ATMs</h3>
        </div>
      </a>
      <a href="industries/schools-colleges" class="group relative rounded-xl overflow-hidden fade-up" style="animation-delay:0.2s;aspect-ratio:1/1">
        <img src="<?= mediaUrl($media, 'industry_schools'); ?>" alt="Schools and Colleges" loading="lazy" decoding="async" sizes="(max-width: 639px) 50vw, (max-width: 1023px) 33vw, 20vw" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
        <div class="absolute inset-x-0 bottom-0 p-2 sm:p-4">
          <i class="fa fa-graduation-cap text-brand-yellow text-sm sm:text-xl mb-1 block"></i>
          <h3 class="font-display font-bold text-white text-[10px] sm:text-sm capitalize leading-tight">Schools & Colleges</h3>
        </div>
      </a>
      <a href="industries/hospitals" class="group relative rounded-xl overflow-hidden fade-up" style="aspect-ratio:1/1">
        <img src="<?= mediaUrl($media, 'industry_hospitals'); ?>" alt="Hospitals" loading="lazy" decoding="async" sizes="(max-width: 639px) 50vw, (max-width: 1023px) 33vw, 20vw" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
        <div class="absolute inset-x-0 bottom-0 p-2 sm:p-4">
          <i class="fa fa-hospital text-brand-yellow text-sm sm:text-xl mb-1 block"></i>
          <h3 class="font-display font-bold text-white text-[10px] sm:text-sm capitalize leading-tight">Hospitals</h3>
        </div>
      </a>
      <a href="industries/warehouses-logistics" class="group relative rounded-xl overflow-hidden fade-up" style="animation-delay:0.05s;aspect-ratio:1/1">
        <img src="<?= mediaUrl($media, 'industry_warehouses'); ?>" alt="Warehouses and Logistics" loading="lazy" decoding="async" sizes="(max-width: 639px) 50vw, (max-width: 1023px) 33vw, 20vw" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
        <div class="absolute inset-x-0 bottom-0 p-2 sm:p-4">
          <i class="fa fa-warehouse text-brand-yellow text-sm sm:text-xl mb-1 block"></i>
          <h3 class="font-display font-bold text-white text-[10px] sm:text-sm capitalize leading-tight">Warehouses & Logistics</h3>
        </div>
      </a>
      <a href="industries/construction" class="group relative rounded-xl overflow-hidden fade-up" style="animation-delay:0.1s;aspect-ratio:1/1">
        <img src="<?= mediaUrl($media, 'industry_construction'); ?>" alt="Construction Sites" loading="lazy" decoding="async" sizes="(max-width: 639px) 50vw, (max-width: 1023px) 33vw, 20vw" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
        <div class="absolute inset-x-0 bottom-0 p-2 sm:p-4">
          <i class="fa fa-hard-hat text-brand-yellow text-sm sm:text-xl mb-1 block"></i>
          <h3 class="font-display font-bold text-white text-[10px] sm:text-sm capitalize leading-tight">Construction Sites</h3>
        </div>
      </a>
      <a href="industries/retail" class="group relative rounded-xl overflow-hidden fade-up" style="animation-delay:0.15s;aspect-ratio:1/1">
        <img src="<?= mediaUrl($media, 'industry_retail'); ?>" alt="Retail Stores and Malls" loading="lazy" decoding="async" sizes="(max-width: 639px) 50vw, (max-width: 1023px) 33vw, 20vw" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
        <div class="absolute inset-x-0 bottom-0 p-2 sm:p-4">
          <i class="fa fa-store text-brand-yellow text-sm sm:text-xl mb-1 block"></i>
          <h3 class="font-display font-bold text-white text-[10px] sm:text-sm capitalize leading-tight">Retail & Malls</h3>
        </div>
      </a>
      <a href="industries/event-management" class="group relative rounded-xl overflow-hidden fade-up" style="animation-delay:0.2s;aspect-ratio:1/1">
        <img src="<?= mediaUrl($media, 'industry_events'); ?>" alt="Events and Crowd Management" loading="lazy" decoding="async" sizes="(max-width: 639px) 50vw, (max-width: 1023px) 33vw, 20vw" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
        <div class="absolute inset-x-0 bottom-0 p-2 sm:p-4">
          <i class="fa fa-users text-brand-yellow text-sm sm:text-xl mb-1 block"></i>
          <h3 class="font-display font-bold text-white text-[10px] sm:text-sm capitalize leading-tight">Events & Crowd Mgmt</h3>
        </div>
      </a>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     3. WHY INDUSTRY-SPECIFIC SECURITY MATTERS — GRAY
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 grid lg:grid-cols-2 gap-8 sm:gap-12 items-center">
    <div class="fade-up">
      <img src="<?= mediaUrl($media, 'why_it_matters'); ?>" alt="Security supervisor reviewing site plan" loading="lazy" decoding="async" sizes="(max-width: 1023px) 100vw, 50vw" class="w-full h-full object-cover rounded-2xl shadow-lg" />
    </div>
    <div class="mt-6 lg:mt-0">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3 fade-up">Why It Matters</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-3 sm:mb-4 fade-up" style="animation-delay:0.05s">
        Why Industry-Specific<br/>Security Matters
      </h2>
      <div class="y-divider-center mb-4 sm:mb-5 fade-up" style="animation-delay:0.1s"></div>
      <p class="text-gray-500 text-base sm:text-lg leading-relaxed mb-6 sm:mb-8 fade-up" style="animation-delay:0.1s">
        No two sites carry the same risk. We design deployment plans around the realities of your industry rather than applying a one-size-fits-all guard roster.
      </p>

      <div class="space-y-4 sm:space-y-5">
        <div class="flex gap-3 sm:gap-4 items-start fade-up" style="animation-delay:0.1s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
            <i class="fa fa-triangle-exclamation text-brand-dark text-sm"></i>
          </div>
          <div>
            <h4 class="font-semibold text-brand-dark text-lg">Different Risk Levels</h4>
            <p class="text-gray-500 text-sm sm:text-base mt-0.5 leading-relaxed">A bank carries a different threat profile than a residential society or a school campus.</p>
          </div>
        </div>
        <div class="flex gap-3 sm:gap-4 items-start fade-up" style="animation-delay:0.15s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
            <i class="fa fa-door-open text-brand-dark text-sm"></i>
          </div>
          <div>
            <h4 class="font-semibold text-brand-dark text-lg">Different Entry Systems</h4>
            <p class="text-gray-500 text-sm sm:text-base mt-0.5 leading-relaxed">Gate layouts, access points, and entry protocols vary widely between site types.</p>
          </div>
        </div>
        <div class="flex gap-3 sm:gap-4 items-start fade-up" style="animation-delay:0.2s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
            <i class="fa fa-id-card text-brand-dark text-sm"></i>
          </div>
          <div>
            <h4 class="font-semibold text-brand-dark text-lg">Different Visitor Types</h4>
            <p class="text-gray-500 text-sm sm:text-base mt-0.5 leading-relaxed">Patients, students, vendors, and employees each require a different verification approach.</p>
          </div>
        </div>
        <div class="flex gap-3 sm:gap-4 items-start fade-up" style="animation-delay:0.25s">
          <div class="w-8 h-8 rounded bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
            <i class="fa fa-file-shield text-brand-dark text-sm"></i>
          </div>
          <div>
            <h4 class="font-semibold text-brand-dark text-lg">Different Compliance Expectations</h4>
            <p class="text-gray-500 text-sm sm:text-base mt-0.5 leading-relaxed">Reporting, escalation, and documentation needs differ by sector and site sensitivity.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     4. OUR INDUSTRY SECURITY PROCESS — DARK
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-brand-dark">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-8 sm:mb-12 fade-up">
      <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">How We Work</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-white leading-tight mb-3 sm:mb-4">Our Industry Security Process</h2>
      <div class="y-divider-center mx-auto mb-4 sm:mb-5"></div>
      <p class="text-gray-400 max-w-xl mx-auto text-base sm:text-lg leading-relaxed">
        A structured, repeatable process that ensures every deployment is matched to the actual risk and layout of your site.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-4">
      <div class="bg-white/5 border border-white/10 rounded-xl p-4 sm:p-6 fade-up">
        <div class="text-brand-yellow font-display font-black text-2xl sm:text-3xl mb-2 sm:mb-3">01</div>
        <h3 class="text-white font-semibold text-sm sm:text-base capitalize mb-1">Site Risk Review</h3>
        <p class="text-gray-400 text-sm leading-relaxed">Assess threats specific to your location and operations.</p>
      </div>
      <div class="bg-white/5 border border-white/10 rounded-xl p-4 sm:p-6 fade-up" style="animation-delay:0.05s">
        <div class="text-brand-yellow font-display font-black text-2xl sm:text-3xl mb-2 sm:mb-3">02</div>
        <h3 class="text-white font-semibold text-sm sm:text-base capitalize mb-1">Entry & Exit Mapping</h3>
        <p class="text-gray-400 text-sm leading-relaxed">Map every access point that needs coverage.</p>
      </div>
      <div class="bg-white/5 border border-white/10 rounded-xl p-4 sm:p-6 fade-up" style="animation-delay:0.1s">
        <div class="text-brand-yellow font-display font-black text-2xl sm:text-3xl mb-2 sm:mb-3">03</div>
        <h3 class="text-white font-semibold text-sm sm:text-base capitalize mb-1">Guard Post Planning</h3>
        <p class="text-gray-400 text-sm leading-relaxed">Decide post locations and required headcount.</p>
      </div>
      <div class="bg-white/5 border border-white/10 rounded-xl p-4 sm:p-6 fade-up" style="animation-delay:0.15s">
        <div class="text-brand-yellow font-display font-black text-2xl sm:text-3xl mb-2 sm:mb-3">04</div>
        <h3 class="text-white font-semibold text-sm sm:text-base capitalize mb-1">Duty Chart Creation</h3>
        <p class="text-gray-400 text-sm leading-relaxed">Build shift-wise duty charts for every post.</p>
      </div>
      <div class="bg-white/5 border border-white/10 rounded-xl p-4 sm:p-6 fade-up" style="animation-delay:0.2s">
        <div class="text-brand-yellow font-display font-black text-2xl sm:text-3xl mb-2 sm:mb-3">05</div>
        <h3 class="text-white font-semibold text-sm sm:text-base capitalize mb-1">Deployment</h3>
        <p class="text-gray-400 text-sm leading-relaxed">Verified, trained manpower deployed on schedule.</p>
      </div>
      <div class="bg-white/5 border border-white/10 rounded-xl p-4 sm:p-6 fade-up" style="animation-delay:0.25s">
        <div class="text-brand-yellow font-display font-black text-2xl sm:text-3xl mb-2 sm:mb-3">06</div>
        <h3 class="text-white font-semibold text-sm sm:text-base capitalize mb-1">Supervision & Reporting</h3>
        <p class="text-gray-400 text-sm leading-relaxed">Ongoing site visits, checks, and reporting.</p>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     5. RECOMMENDED MANPOWER DEPLOYMENT — WHITE
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
  <div class="max-w-5xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-8 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">Quick Reference</p>
      <h2 class="font-display font-black capitalize text-xl sm:text-2xl md:text-3xl text-brand-dark leading-tight mb-3 sm:mb-4">Recommended Manpower Deployment</h2>
      <div class="y-divider-center mx-auto mb-4 sm:mb-5"></div>
      <p class="text-gray-500 max-w-xl mx-auto text-base sm:text-lg leading-relaxed">
        A general guide — actual deployment is always finalised after a site visit and risk assessment.
      </p>
    </div>

    <div class="overflow-x-auto fade-up">
      <table class="w-full text-sm border border-gray-200 rounded-xl overflow-hidden">
        <thead>
          <tr class="bg-brand-dark text-white text-left">
            <th class="px-4 sm:px-6 py-3 sm:py-4 font-semibold capitalize text-lg tracking-wider">Site Type</th>
            <th class="px-4 sm:px-6 py-3 sm:py-4 font-semibold capitalize text-lg tracking-wider">Suggested Deployment</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr class="bg-gray-50">
            <td class="px-4 sm:px-6 py-3 sm:py-4 font-semibold text-brand-dark text-base">Small Site</td>
            <td class="px-4 sm:px-6 py-3 sm:py-4 text-gray-600 text-base">1 to 2 guards</td>
          </tr>
          <tr class="bg-white">
            <td class="px-4 sm:px-6 py-3 sm:py-4 font-semibold text-brand-dark text-base">Medium Site</td>
            <td class="px-4 sm:px-6 py-3 sm:py-4 text-gray-600 text-base">2 to 6 guards</td>
          </tr>
          <tr class="bg-gray-50">
            <td class="px-4 sm:px-6 py-3 sm:py-4 font-semibold text-brand-dark text-base">Large Site</td>
            <td class="px-4 sm:px-6 py-3 sm:py-4 text-gray-600 text-base">Multiple guards with supervisor</td>
          </tr>
          <tr class="bg-white">
            <td class="px-4 sm:px-6 py-3 sm:py-4 font-semibold text-brand-dark text-base">High-Risk Site</td>
            <td class="px-4 sm:px-6 py-3 sm:py-4 text-gray-600 text-base">Guards, supervisor, CCTV, QRT support</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     6. LEAD MAGNET — GRAY
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-gray-50" id="lead-magnet">
  <div class="max-w-6xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-200 fade-up">

      <div class="p-6 sm:p-10 md:p-12 flex flex-col justify-center">
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">Free Assessment</p>
        <h2 class="font-display font-black capitalize text-xl sm:text-2xl md:text-3xl text-brand-dark leading-tight mb-3 sm:mb-4">
          Free Industry Security<br/>Risk Assessment
        </h2>
        <p class="text-gray-500 text-base sm:text-lg leading-relaxed mb-4 sm:mb-6">
          Share your site details and our team will help you understand the right manpower mix, guard posts, and risk coverage for your industry.
        </p>
        <div class="space-y-2 sm:space-y-3">
          <div class="flex items-center gap-3 text-xs sm:text-lg text-gray-600"><i class="fa fa-check-circle text-brand-dark"></i> No-obligation site review</div>
          <div class="flex items-center gap-3 text-xs sm:text-lg text-gray-600"><i class="fa fa-check-circle text-brand-dark"></i> Industry-matched recommendations</div>
          <div class="flex items-center gap-3 text-xs sm:text-lg text-gray-600"><i class="fa fa-check-circle text-brand-dark"></i> Response within 24 hours</div>
        </div>
      </div>

      <div class="bg-brand-dark p-6 sm:p-10 md:p-12">
        <form action="includes/contact.php" method="POST" class="space-y-3 sm:space-y-4">
          <input type="hidden" name="form_type" value="industry_risk_assessment" />
          <input type="text" name="name" required placeholder="Full Name" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <input type="tel" name="phone" required placeholder="Phone Number" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <input type="email" name="email" placeholder="Email Address" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <select name="industry" required class="w-full bg-white/5 border border-white/15 text-white rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow">
            <option value="" class="text-gray-700">Select Your Industry</option>
            <option class="text-gray-700">Corporate Office</option>
            <option class="text-gray-700">Factory / Industrial Unit</option>
            <option class="text-gray-700">Residential Society</option>
            <option class="text-gray-700">Bank / ATM</option>
            <option class="text-gray-700">School / College</option>
            <option class="text-gray-700">Hospital</option>
            <option class="text-gray-700">Warehouse / Logistics</option>
            <option class="text-gray-700">Construction Site</option>
            <option class="text-gray-700">Retail Store / Mall</option>
            <option class="text-gray-700">Event / Crowd Management</option>
          </select>
          <input type="text" name="location" placeholder="Location" class="w-full bg-white/5 border border-white/15 text-white placeholder-white/40 rounded px-4 py-3 text-sm focus:outline-none focus:border-brand-yellow" />
          <button type="submit" class="w-full bg-brand-yellow hover:bg-yellow-300 text-brand-dark font-bold py-3.5 rounded capitalize tracking-wider text-sm transition-colors">
            Request Assessment
          </button>
        </form>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     7. FAQs — WHITE
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
  <div class="max-w-4xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-8 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">Common Questions</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-3 sm:mb-4">Frequently Asked</h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="space-y-3" id="faq-container">
      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you provide security guards for every industry?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-4 sm:pb-5 text-gray-500 text-base leading-relaxed">Yes, we provide customised security manpower for corporate offices, factories, residential societies, banks, schools, hospitals, warehouses, construction sites, retail spaces, and events across Delhi NCR.</p>
        </div>
      </div>
      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.05s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">How do you decide the number of guards for my site?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-4 sm:pb-5 text-gray-500 text-base leading-relaxed">We conduct a site risk review, map entry and exit points, and plan guard posts before finalising the duty chart and total headcount required.</p>
        </div>
      </div>
      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.1s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can you support high-risk sites like banks and cash movement?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-4 sm:pb-5 text-gray-500 text-base leading-relaxed">Yes. High-risk sites receive armed or unarmed guards along with supervisor oversight, CCTV coordination, and quick response team support as needed.</p>
        </div>
      </div>
      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.15s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Do you provide a free risk assessment before deployment?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-4 sm:pb-5 text-gray-500 text-base leading-relaxed">Yes. We offer a free industry security risk assessment to recommend the right manpower mix and guard posts for your specific site.</p>
        </div>
      </div>
      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:0.2s">
        <button class="faq-toggle w-full flex justify-between items-center px-4 sm:px-6 py-4 sm:py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4">Can the deployment plan be changed later if my site needs change?</span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-4 sm:px-6 pb-4 sm:pb-5 text-gray-500 text-base leading-relaxed">Absolutely. Deployment plans are reviewed periodically and can be scaled up, scaled down, or restructured based on changing site requirements.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     8. FINAL CTA — YELLOW
═══════════════════════════════════════════ -->
<section class="relative py-12 sm:py-16 md:py-20 overflow-hidden bg-brand-yellow">
  <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 text-center fade-up">
    <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-3 sm:mb-4">
      Need a Security Plan<br/>for Your Industry?
    </h2>
    <p class="text-brand-dark/80 text-base sm:text-lg mb-6 sm:mb-8 max-w-lg mx-auto">
      Talk to our security expert and get a deployment plan built around your industry's actual risk profile.
    </p>
    <div class="flex flex-wrap justify-center gap-3 sm:gap-4">
      <a href="contact" class="bg-brand-dark text-white hover:bg-gray-800 font-bold px-6 sm:px-8 py-3 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-base transition-colors shadow-lg">
        Talk to Our Security Expert
      </a>
      
      <a href="tel:+919430695171" class="flex items-center gap-2 border-2 border-brand-dark/60 text-brand-dark hover:border-brand-dark font-bold px-6 sm:px-8 py-3 sm:py-3.5 rounded capitalize tracking-wider text-xs sm:text-base transition-colors">
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

<?php include 'includes/footer.php'; ?>