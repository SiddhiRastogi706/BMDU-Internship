<?php
/**
 * Paste complete Cloudinary secure URLs below.
 * Keep the array keys unchanged; only replace the URL values.
 */
$media = [
    'csr_hero'            => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784804971/csr-banner_ou3uei.png',
    'employee_welfare'    => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784810847/Who_We_Protect1_qyqjgm.webp',
    'women_empowerment'   => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784879170/Lady_Security_Guards_ey5jfo.webp',

    'gallery_training'    => 'PASTE_CLOUDINARY_IMAGE_URL_HERE',
    'gallery_community'   => 'PASTE_CLOUDINARY_IMAGE_URL_HERE',
    'gallery_recognition' => 'PASTE_CLOUDINARY_IMAGE_URL_HERE',
    'gallery_safety'      => 'PASTE_CLOUDINARY_IMAGE_URL_HERE',

    'final_cta_bg'        => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1785129824/Together_zxfzgf.webp',
];

/**
 * Safely returns a Cloudinary media URL.
 */
function mediaUrl(array $media, string $key): string
{
    return htmlspecialchars($media[$key] ?? '', ENT_QUOTES, 'UTF-8');
}
?>

<?php
$page_title       = "CSR | Conquer Services — Security & Facility Management Delhi NCR";
$page_description = "Our commitment to people, safety, and community — employee welfare, skill development, women empowerment, community safety programs, and ethical manpower practices.";
$active_page      = "csr";
$base_path        = "";
include 'includes/header.php';
?>

<style>
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
  .hover-card { transition: transform 0.3s, box-shadow 0.3s; }
  .hover-card:hover { transform: translateY(-5px); box-shadow: 0 20px 48px rgba(0,0,0,0.08); }
  .csr-philosophy-item { transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s; }
  .csr-philosophy-item:hover { transform: translateY(-4px); border-color: #F2CF4A; box-shadow: 0 16px 36px rgba(0,0,0,0.08); }
  .gallery-tile { position: relative; overflow: hidden; border-radius: 16px; }
  .gallery-tile img { transition: transform 0.5s ease; }
  .gallery-tile:hover img { transform: scale(1.08); }
  .gallery-overlay { background: linear-gradient(0deg, rgba(10,10,10,0.85) 0%, rgba(10,10,10,0) 55%); }
</style>

<!-- ══════════════════════════════════════════
     1. HERO
═══════════════════════════════════════════ -->
<section class="relative min-h-[260px] sm:min-h-[320px] md:min-h-[380px] lg:min-h-[420px] overflow-hidden bg-brand-dark flex items-center">
  <div class="absolute inset-0">
    <img src="<?= mediaUrl($media, 'csr_hero'); ?>"
         alt="Conquer Services CSR — community and employee welfare"
         fetchpriority="high"
         decoding="async"
         class="w-full h-full object-cover object-top" />
  </div>
  <div class="page-hero-overlay absolute inset-0"></div>
  <div class="relative z-10 w-full py-10 sm:py-14 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
      <p class="text-brand-yellow font-semibold capitalize tracking-widest text-[12px] sm:text-base mb-2 sm:mb-3">Corporate Social Responsibility</p>
      <h1 class="font-display font-black capitalize leading-tight text-white mb-3 sm:mb-5">
        <span class="text-xl sm:text-3xl md:text-4xl lg:text-5xl block">Our Commitment to</span>
        <span class="text-xl sm:text-3xl md:text-4xl lg:text-5xl text-brand-yellow block">People, Safety & Community</span>
      </h1>
      <p class="text-gray-300 text-sm sm:text-base md:text-lg max-w-xl leading-relaxed">
        As a manpower-based organisation, we believe our responsibility goes beyond service delivery. We are committed to employee welfare, skill development, safety awareness, and community support.
      </p>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-brand-yellow"></div>
</section>


<!-- ══════════════════════════════════════════
     2. CSR PHILOSOPHY — WHITE
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-8 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">What We Stand For</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-3 sm:mb-4">
        Our CSR <span style="color:#C9A91E;">Philosophy</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
      <?php
      $philosophy = [
        ['icon' => 'fa-hands-helping', 'title' => 'Respect for Workers',              'desc' => 'Every individual we employ is treated with dignity, fairness, and respect.'],
        ['icon' => 'fa-city',           'title' => 'Safer Communities',                'desc' => 'Promoting awareness and preparedness that protect the spaces people live and work in.'],
        ['icon' => 'fa-briefcase',      'title' => 'Responsible Employment',           'desc' => 'Verified hiring, fair wages, and transparent practices for every staff member.'],
        ['icon' => 'fa-graduation-cap', 'title' => 'Skill-Building',                  'desc' => 'Continuous training that improves employability and on-job confidence.'],
        ['icon' => 'fa-balance-scale',  'title' => 'Ethical Manpower Practices',      'desc' => 'Compliance-driven deployment with no compromise on worker rights.'],
        ['icon' => 'fa-heart',          'title' => 'Support for Underprivileged Groups','desc' => 'Creating opportunities for individuals from underserved communities.'],
      ];
      foreach ($philosophy as $i => $p):
      ?>
      <div class="csr-philosophy-item bg-gray-50 border border-gray-200 rounded-2xl p-5 sm:p-7 fade-up" style="animation-delay:<?php echo $i*0.08; ?>s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-yellow/20 flex items-center justify-center mb-4 sm:mb-5">
          <i class="fa <?php echo $p['icon']; ?> text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h3 class="font-display font-bold text-brand-dark text-lg sm:text-xl mb-2"><?php echo $p['title']; ?></h3>
        <p class="text-gray-500 text-base sm:text-lg leading-relaxed"><?php echo $p['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     3. EMPLOYEE WELFARE — GRAY
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-center">

      <div class="fade-up">
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">Caring for Our Workforce</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-3 sm:mb-4">
          Employee Welfare<br/><span style="color:#C9A91E;">Initiatives</span>
        </h2>
        <div class="y-divider-center mb-4 sm:mb-6"></div>
        <p class="text-gray-500 text-base sm:text-lg leading-relaxed mb-6 sm:mb-8">
          Our people are at the heart of every service we deliver. We invest in their growth, safety, and wellbeing so they can serve our clients with confidence and pride.
        </p>
        <div class="grid grid-cols-2 gap-3 sm:gap-4">
          <?php
          $welfare = [
            ['icon'=>'fa-chalkboard-teacher','title'=>'Training & Skill Development'],
            ['icon'=>'fa-tshirt',            'title'=>'Uniform & Grooming Support'],
            ['icon'=>'fa-hard-hat',          'title'=>'Safety Awareness'],
            ['icon'=>'fa-notes-medical',     'title'=>'Health Camps'],
            ['icon'=>'fa-piggy-bank',        'title'=>'Financial Literacy Sessions'],
            ['icon'=>'fa-comments',          'title'=>'Worker Grievance Support'],
            ['icon'=>'fa-award',             'title'=>'Recognition for Good Performance'],
          ];
          foreach ($welfare as $w):
          ?>
          <div class="bg-white border border-gray-200 rounded-xl p-3 sm:p-4 hover-card">
            <i class="fa <?php echo $w['icon']; ?> text-brand-dark mb-2 block text-base sm:text-lg"></i>
            <div class="text-brand-dark font-semibold text-sm sm:text-base"><?php echo $w['title']; ?></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="relative fade-up mt-8 lg:mt-0" style="animation-delay:0.1s">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="<?= mediaUrl($media, 'employee_welfare'); ?>" alt="Employee welfare and training" loading="lazy" decoding="async" sizes="(max-width: 1023px) 100vw, 50vw" class="w-full h-full object-cover" />
        </div>
        <div class="absolute -bottom-4 -left-4 sm:-bottom-5 sm:-left-5 bg-brand-yellow rounded-2xl p-4 sm:p-6 shadow-2xl text-center">
          <div class="font-display font-black text-3xl sm:text-4xl text-brand-dark leading-none">1200+</div>
          <div class="text-brand-dark font-bold text-xs uppercase tracking-wider mt-1">Lives We Support</div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     4. SKILL DEVELOPMENT — WHITE
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-8 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">Building Capability</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-3 sm:mb-4">
        Skill <span style="color:#C9A91E;">Development</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-5">
      <?php
      $skills = [
        ['icon'=>'fa-shield-alt',        'title'=>'Security Training'],
        ['icon'=>'fa-fire-extinguisher', 'title'=>'Fire Safety Awareness'],
        ['icon'=>'fa-ambulance',         'title'=>'Emergency Response Basics'],
        ['icon'=>'fa-user-tie',          'title'=>'Workplace Behaviour'],
        ['icon'=>'fa-comments',          'title'=>'Soft Skills'],
        ['icon'=>'fa-concierge-bell',    'title'=>'Front Desk Discipline'],
        ['icon'=>'fa-broom',             'title'=>'Housekeeping Hygiene Training'],
      ];
      foreach ($skills as $i => $s):
      ?>
      <div class="hover-card bg-gray-50 border border-gray-200 rounded-2xl p-4 sm:p-6 text-center fade-up" style="animation-delay:<?php echo $i*0.06; ?>s">
        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3 sm:mb-4">
          <i class="fa <?php echo $s['icon']; ?> text-brand-dark text-sm sm:text-base"></i>
        </div>
        <div class="text-brand-dark font-semibold text-base sm:text-lg leading-snug"><?php echo $s['title']; ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     5. WOMEN EMPOWERMENT — DARK
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-brand-dark relative overflow-hidden">
  <div class="absolute inset-0 opacity-10">
    
  </div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
    <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-center">

      <div class="relative fade-up">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="<?= mediaUrl($media, 'women_empowerment'); ?>" alt="Women empowerment in security services" loading="lazy" decoding="async" sizes="(max-width: 1023px) 100vw, 50vw" class="w-full h-full object-cover" />
        </div>
        <div class="absolute -top-4 -right-4 sm:-top-5 sm:-right-5 bg-brand-yellow rounded-2xl p-4 sm:p-6 shadow-2xl text-center">
          <i class="fa fa-venus text-brand-dark text-xl sm:text-2xl mb-1 block"></i>
          <div class="text-brand-dark font-bold text-xs capitalize tracking-wider">Women in<br/>Security</div>
        </div>
      </div>

      <div class="fade-up mt-8 lg:mt-0" style="animation-delay:0.1s">
        <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">Empowering Women</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-white leading-tight mb-3 sm:mb-4">
          Women <span class="text-brand-yellow">Empowerment</span>
        </h2>
        <div class="y-divider-center mb-4 sm:mb-6"></div>
        <p class="text-gray-300 text-base sm:text-lg leading-relaxed mb-6 sm:mb-8">
          We create dignified, safe, and growth-oriented roles for women across our security and facility services workforce — including dedicated lady guard training programs.
        </p>
        <div class="space-y-3 sm:space-y-4">
          <?php
          $women = [
            'Employment Opportunities for Women',
            'Safe Workplace Support',
            'Lady Guard Training',
            'Dignified Roles in Security & Facility Services',
          ];
          foreach ($women as $w):
          ?>
          <div class="flex items-center gap-3 sm:gap-4 bg-white/5 border border-white/10 rounded-xl p-3 sm:p-4">
            <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-brand-yellow flex items-center justify-center flex-shrink-0">
              <i class="fa fa-check text-brand-dark text-xs sm:text-sm"></i>
            </div>
            <span class="text-gray-200 text-xs sm:text-base font-medium"><?php echo $w; ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     6. COMMUNITY SAFETY PROGRAMS — WHITE
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-8 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">Giving Back</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-3 sm:mb-4">
        Community Safety <span style="color:#C9A91E;">Programs</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
      <?php
      $community = [
        ['icon'=>'fa-building',    'title'=>'Security Awareness for Residential Societies','desc'=>'Sessions for RWAs and residents on access control and personal safety.'],
        ['icon'=>'fa-fire',        'title'=>'Fire Safety Awareness Sessions',              'desc'=>'Practical guidance on fire prevention and emergency evacuation.'],
        ['icon'=>'fa-school',      'title'=>'School Safety Awareness',                    'desc'=>'Safety orientation programs for students, staff, and parents.'],
        ['icon'=>'fa-first-aid',   'title'=>'Emergency Preparedness Workshops',           'desc'=>'Hands-on workshops covering response to common emergencies.'],
        ['icon'=>'fa-user-shield', 'title'=>'Visitor Management Awareness for RWAs',     'desc'=>'Best practices for visitor logging, verification, and entry control.'],
      ];
      foreach ($community as $i => $c):
      ?>
      <div class="hover-card bg-gray-50 border border-gray-200 rounded-2xl p-5 sm:p-7 fade-up" style="animation-delay:<?php echo $i*0.08; ?>s">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-brand-yellow/20 flex items-center justify-center mb-4 sm:mb-5">
          <i class="fa <?php echo $c['icon']; ?> text-brand-dark text-lg sm:text-xl"></i>
        </div>
        <h3 class="font-display font-bold text-brand-dark text-lg sm:text-xl mb-2"><?php echo $c['title']; ?></h3>
        <p class="text-gray-500 text-base sm:text-lg leading-relaxed"><?php echo $c['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     7. ENVIRONMENTAL RESPONSIBILITY — YELLOW
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-brand-yellow">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-8 sm:mb-12 fade-up">
      <p class="text-brand-dark/70 font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">Sustainable Practices</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-3 sm:mb-4">
        Environmental Responsibility
      </h2>
      <div class="y-divider-center mx-auto" style="background:#0A0A0A;"></div>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3 sm:gap-5">
      <?php
      $env = [
        ['icon'=>'fa-recycle',     'title'=>'Waste Segregation Awareness'],
        ['icon'=>'fa-broom',       'title'=>'Clean Premises Campaigns'],
        ['icon'=>'fa-hands-wash',  'title'=>'Responsible Housekeeping Practices'],
        ['icon'=>'fa-tint',        'title'=>'Water & Electricity Saving Awareness'],
        ['icon'=>'fa-leaf',        'title'=>'Green Maintenance Practices'],
      ];
      foreach ($env as $e):
      ?>
      <div class="bg-brand-dark rounded-2xl p-4 sm:p-6 text-center hover-card">
        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3 sm:mb-4">
          <i class="fa <?php echo $e['icon']; ?> text-brand-yellow text-sm sm:text-base"></i>
        </div>
        <div class="text-white font-semibold text-xs sm:text-base leading-snug"><?php echo $e['title']; ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     8. CSR STORIES / GALLERY — WHITE
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-8 sm:mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">In Action</p>
      <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-3 sm:mb-4">
        CSR Stories & <span style="color:#C9A91E;">Gallery</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-5">
      <?php
      $gallery = [
        ['img'=>$media['gallery_training'],    'title'=>'Training Sessions'],
        ['img'=>$media['gallery_community'],   'title'=>'Community Programs'],
        ['img'=>$media['gallery_recognition'], 'title'=>'Employee Recognition'],
        ['img'=>$media['gallery_safety'],      'title'=>'Safety Drives'],
      ];
      foreach ($gallery as $i => $g):
      ?>
      <div class="gallery-tile aspect-[3/4] fade-up" style="animation-delay:<?php echo $i*0.08; ?>s">
        <img src="<?php echo $g['img']; ?>" alt="<?php echo $g['title']; ?>" loading="lazy" decoding="async" sizes="(max-width: 639px) 50vw, (max-width: 1023px) 50vw, 25vw" class="w-full h-full object-cover" />
        <div class="gallery-overlay absolute inset-0 flex items-end p-3 sm:p-5">
          <span class="text-white font-display font-bold text-sm sm:text-base capitalize tracking-wider"><?php echo $g['title']; ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     9. PARTNER WITH US — GRAY, FORM
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-center">

      <div class="fade-up">
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-2 sm:mb-3">Collaborate With Us</p>
        <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-brand-dark leading-tight mb-3 sm:mb-4">
          Partner <span style="color:#C9A91E;">With Us</span>
        </h2>
        <div class="y-divider-center mb-4 sm:mb-6"></div>
        <p class="text-gray-500 text-base sm:text-lg leading-relaxed mb-6 sm:mb-8">
          Invite us for a safety awareness session at your residential society, school, or organisation. Our trained team can design a program suited to your needs.
        </p>

        <div class="flex items-center gap-3 sm:gap-4 bg-white border border-gray-200 rounded-xl p-4 sm:p-5 mb-3 sm:mb-4">
          <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-brand-yellow/20 flex items-center justify-center flex-shrink-0">
            <i class="fa fa-phone text-brand-dark"></i>
          </div>
          <div>
            <div class="text-gray-500 text-lg">Call Us</div>
            <a href="tel:+919430695171" class="text-brand-dark font-bold text-base">+91 94306 95171</a>
          </div>
        </div>
        <div class="flex items-center gap-3 sm:gap-4 bg-white border border-gray-200 rounded-xl p-4 sm:p-5">
          <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-brand-yellow/20 flex items-center justify-center flex-shrink-0">
            <i class="fa fa-envelope text-brand-dark"></i>
          </div>
          <div>
            <div class="text-gray-500 text-lg">Email Us</div>
            <a href="mailto:Info@conquerservices.com" class="text-brand-dark font-bold text-base">Info@conquerservices.com</a>
          </div>
        </div>
      </div>

      <div class="bg-white border border-gray-200 rounded-2xl p-5 sm:p-7 md:p-9 shadow-xl fade-up mt-6 lg:mt-0" style="animation-delay:0.1s">
        <h3 class="font-display font-black capitalize text-lg sm:text-xl text-brand-dark mb-1">Invite Us for a</h3>
        <p class="font-display font-black capitalize text-lg sm:text-xl mb-5 sm:mb-6" style="color:#C9A91E;">Safety Awareness Session</p>

        <form id="csrForm" class="space-y-3 sm:space-y-4">
          <div class="grid sm:grid-cols-2 gap-3 sm:gap-4">
            <input type="text" name="name" placeholder="Your Name *" required class="input-field" />
            <input type="text" name="organisation" placeholder="Organisation *" required class="input-field" />
          </div>
          <div class="grid sm:grid-cols-2 gap-3 sm:gap-4">
            <input type="tel" name="phone" placeholder="Phone *" required class="input-field" />
            <input type="email" name="email" placeholder="Email" class="input-field" />
          </div>
          <input type="text" name="location" placeholder="Location *" required class="input-field" />
          <textarea name="requirement" placeholder="CSR / Safety Program Requirement" rows="3" class="input-field resize-none"></textarea>
          <button type="submit" id="csrSubmitBtn" class="w-full bg-brand-dark hover:bg-gray-800 text-white font-bold capitalize tracking-wider text-sm py-3.5 rounded transition-colors border-2 border-brand-dark">
            Submit Request
          </button>
          <p id="csrFormMsg" class="text-sm text-center hidden"></p>
        </form>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     10. FINAL CTA — DARK
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-14 md:py-16 bg-brand-dark relative overflow-hidden">
  <div class="absolute inset-0 opacity-15">
    <img src="<?= mediaUrl($media, 'final_cta_bg'); ?>" alt="" loading="lazy" decoding="async" class="w-full h-full object-cover" />
  </div>
  <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center relative z-10 fade-up">
    <h2 class="font-display font-black capitalize text-2xl sm:text-3xl md:text-4xl text-white leading-tight mb-3 sm:mb-4">
      Together, We Can Build <span class="text-brand-yellow"><br>Safer & Better Workplaces</span>
    </h2>
    <div class="y-divider-center mx-auto mb-6 sm:mb-8"></div>
    <a href="contact" class="inline-flex items-center gap-2 bg-brand-yellow hover:bg-yellow-400 text-brand-dark font-bold capitalize tracking-wider text-base px-6 sm:px-8 py-3.5 sm:py-4 rounded transition-colors">
      Contact Our CSR Team <i class="fa fa-arrow-right"></i>
    </a>
  </div>
</section>


<script>
  const csrForm = document.getElementById('csrForm');
  if (csrForm) {
    csrForm.addEventListener('submit', async function (e) {
      e.preventDefault();
      const btn = document.getElementById('csrSubmitBtn');
      const msg = document.getElementById('csrFormMsg');
      const originalText = btn.textContent;
      btn.disabled = true;
      btn.textContent = 'Submitting...';
      msg.classList.add('hidden');
      try {
        const formData = new FormData(csrForm);
        const res = await fetch('includes/csr-form.php', { method: 'POST', body: formData });
        const data = await res.json();
        msg.classList.remove('hidden');
        if (data.success) {
          msg.className = 'text-sm text-center text-green-600 font-medium';
          msg.textContent = data.message;
          csrForm.reset();
        } else {
          msg.className = 'text-sm text-center text-red-600 font-medium';
          msg.textContent = data.message;
        }
      } catch (err) {
        msg.classList.remove('hidden');
        msg.className = 'text-sm text-center text-red-600 font-medium';
        msg.textContent = 'Something went wrong. Please call us directly at +91 94306 95171.';
      } finally {
        btn.disabled = false;
        btn.textContent = originalText;
      }
    });
  }
</script>

<?php include 'includes/footer.php'; ?>