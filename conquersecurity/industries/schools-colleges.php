<?php
/**
 * Paste complete Cloudinary secure URLs below.
 * Keep the array keys unchanged; only replace the URL values.
 */
$media = [
    'hero_banner'      => 'PASTE_CLOUDINARY_IMAGE_URL_HERE',
    'intro_image'      => 'PASTE_CLOUDINARY_IMAGE_URL_HERE',
    'solution_image'   => 'PASTE_CLOUDINARY_IMAGE_URL_HERE',
    'lead_background'  => 'https://res.cloudinary.com/gg0gqaua/image/upload/v1784805094/service2_qc7zvz.png',
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
$page_title       = "School & College Security Guard Services in Delhi NCR | Conquer Services";
$page_description = "Professional security guards and supervisors for schools and colleges, designed to protect people, property, assets, visitors, and daily operations across Delhi NCR.";
$active_page      = "industries";
$base_path        = "../";
include '../includes/header.php';
?>

<style>
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
  .challenge-card { transition: transform 0.3s, box-shadow 0.3s; }
  .challenge-card:hover { transform: translateY(-4px); box-shadow: 0 16px 40px rgba(0,0,0,0.08); }
  .service-link-card { transition: all 0.25s ease; }
  .service-link-card:hover { border-color: #F2CF4A; background: rgba(242,207,74,0.08); transform: translateY(-3px); }
  .duty-item { transition: border-color 0.25s, background 0.25s; }
  .duty-item:hover { border-color: #F2CF4A; background: rgba(255,255,255,0.06); }
  .faq-body { max-height: 0; overflow: hidden; transition: max-height 0.35s ease; }
</style>


<!-- ══════════════════════════════════════════
     1. HERO SECTION
═══════════════════════════════════════════ -->
<section class="relative h-[280px] sm:h-[320px] md:h-[380px] lg:h-[420px] overflow-hidden bg-brand-dark">
  <div class="absolute inset-0">
    <img src="<?= mediaUrl($media, 'hero_banner'); ?>" alt="School and college campus security" fetchpriority="high" decoding="async" class="w-full h-full object-cover" style="object-position: 100% 35%;" />
  </div>
  <div class="page-hero-overlay absolute inset-0"></div>

  <div class="relative z-10 h-full flex flex-col justify-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
      
      <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Industry Solutions</p>
      <h1 class="font-display font-black capitalize leading-none text-white">
        <span class="text-3xl sm:text-4xl md:text-5xl block">School & College</span>
        <span class="text-3xl sm:text-4xl md:text-5xl text-brand-yellow block">Security Guard Services <br>in Delhi NCR</span>
      </h1>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-brand-yellow"></div>
</section>


<!-- ══════════════════════════════════════════
     INTRO — WHITE
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-14 items-center">

      <div class="fade-up">
        <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Built for Educational Institutions</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark leading-none mb-4">
          Professional Security<br/><span style="color:#C9A91E;">for Schools & Colleges</span>
        </h2>
        <div class="y-divider-center mb-6"></div>
        <p class="text-gray-500 text-lg leading-relaxed mb-4">
          Schools and colleges require a security presence that is firm, disciplined, and sensitive to the environment — trained guards who ensure student safety without creating an intimidating atmosphere on campus.
        </p>
        <p class="text-gray-500 text-lg leading-relaxed mb-8">
          From managing main gates and verifying visitors to patrolling campus boundaries and coordinating during emergencies, our guards are briefed on your institution's protocols, entry rules, and child-safety standards before every deployment.
        </p>
        <div class="flex flex-wrap gap-3">
          <a href="../contact" class="bg-brand-dark hover:bg-gray-800 text-white font-bold px-7 py-3 rounded capitalize tracking-wider text-base transition-colors">Get Free Quote</a>
      
        </div>
      </div>

      <div class="relative fade-up" style="animation-delay:0.1s">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="<?= mediaUrl($media, 'intro_image'); ?>" alt="Security guard at school entrance" loading="lazy" decoding="async" sizes="(max-width: 1023px) 100vw, 50vw" class="w-full h-full object-cover" />
        </div>
        <div class="absolute -bottom-5 -right-5 bg-brand-yellow rounded-2xl p-5 shadow-xl text-center">
          <div class="font-display font-black text-2xl text-brand-dark leading-none">24/7</div>
          <div class="text-brand-dark font-bold text-sm capitalize tracking-wider mt-1">Campus Coverage</div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     2. SECURITY CHALLENGES — GRAY
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Common Risks</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark mb-4">
        Campus Security<br/><span style="color:#C9A91E;">Challenges We Solve</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <?php
      $challenges = [
        ['icon'=>'fa-user-slash',          'title'=>'Unauthorised Entry',          'desc'=>'Outsiders entering the campus without verification — a key risk for student safety and institutional security.'],
        ['icon'=>'fa-id-card',             'title'=>'Visitor Mismanagement',       'desc'=>'Parents, vendors, and delivery personnel entering without logging or teacher/admin confirmation.'],
        ['icon'=>'fa-child',               'title'=>'Student Safety During Pickup', 'desc'=>'Ensuring children are handed over only to authorised guardians during dispersal hours.'],
        ['icon'=>'fa-people-arrows',       'title'=>'Crowd Control During Events', 'desc'=>'Managing large gatherings, sports days, and annual functions without overcrowding or safety incidents.'],
        ['icon'=>'fa-car',                 'title'=>'Parking & Vehicle Issues',    'desc'=>'Unauthorised vehicles on campus, blocking emergency routes and causing traffic chaos at entry gates.'],
        ['icon'=>'fa-moon',                'title'=>'After-Hours Security Risk',   'desc'=>'Campus premises, labs, libraries, and equipment remain vulnerable when unoccupied at night.'],
        ['icon'=>'fa-exclamation-triangle','title'=>'Emergency Response Gaps',     'desc'=>'Absence of a clear first-response plan for fire, medical, or security emergencies on campus.'],
        ['icon'=>'fa-tools',               'title'=>'Vendor & Contractor Access',  'desc'=>'Unverified contractors and maintenance staff moving freely inside classrooms, labs, or hostels.'],
        ['icon'=>'fa-female',              'title'=>'Women & Girl Student Safety', 'desc'=>'Need for lady guards at sensitive areas — washrooms, hostels, and girls-only wings of campuses.'],
      ];
      foreach ($challenges as $i => $c):
      ?>
      <div class="challenge-card bg-white border border-gray-200 rounded-xl p-6 fade-up" style="animation-delay:<?php echo $i*0.05; ?>s">
        <i class="fa <?php echo $c['icon']; ?> text-brand-dark text-xl mb-3"></i>
        <h4 class="font-display font-bold text-brand-dark text-lg capitalize mb-1"><?php echo $c['title']; ?></h4>
        <p class="text-gray-500 text-base leading-relaxed"><?php echo $c['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     3. OUR SECURITY SOLUTION — WHITE
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Our Deployment Model</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark mb-4">
        How We Secure<br/><span style="color:#C9A91E;">Your Campus</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 mb-14">
      <?php
      $solutions = [
        ['icon'=>'fa-door-open',  'label'=>'Entry Gate Security'],
        ['icon'=>'fa-id-badge',   'label'=>'Visitor Verification'],
        ['icon'=>'fa-walking',    'label'=>'Patrol Points'],
        ['icon'=>'fa-video',      'label'=>'CCTV Coordination'],
        ['icon'=>'fa-key',        'label'=>'Access Control Support'],
        ['icon'=>'fa-bolt',       'label'=>'Emergency Response'],
        ['icon'=>'fa-file-alt',   'label'=>'Reporting & Escalation'],
        ['icon'=>'fa-user-check', 'label'=>'Supervisor Checks'],
      ];
      foreach ($solutions as $i => $s):
      ?>
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 text-center fade-up" style="animation-delay:<?php echo $i*0.05; ?>s">
        <i class="fa <?php echo $s['icon']; ?> text-brand-dark mb-2 block text-lg"></i>
        <span class="text-brand-dark text-base font-bold capitalize"><?php echo $s['label']; ?></span>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="grid lg:grid-cols-2 gap-14 items-center">
      <div class="relative fade-up">
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
          <img src="<?= mediaUrl($media, 'solution_image'); ?>" alt="Campus safety and monitoring" loading="lazy" decoding="async" sizes="(max-width: 1023px) 100vw, 50vw" class="w-full h-full object-cover" />
        </div>
      </div>
      <div class="fade-up" style="animation-delay:0.1s">
        <h3 class="font-display font-bold text-brand-dark capitalize text-2xl mb-5">
          Layered Protection for <span style="color:#C9A91E;"><br>Every Campus Touchpoint</span>
        </h3>
        <div class="space-y-4">
          <?php
          $detail = [
            ['icon'=>'fa-door-open',  'title'=>'Main Gate & Campus Entry',         'desc'=>'Dedicated guards at all campus entry points — verifying visitor identity, checking student ID cards, and managing vehicle entry during peak hours.'],
            ['icon'=>'fa-child',      'title'=>'Student Dispersal Management',      'desc'=>'Structured dispersal supervision ensuring students are handed over to verified, authorised guardians only.'],
            ['icon'=>'fa-female',     'title'=>'Lady Guard Deployment',             'desc'=>'Trained lady guards stationed at girls-only areas, washrooms, and hostels to provide women-sensitive, protocol-driven security.'],
            ['icon'=>'fa-bolt',       'title'=>'Emergency Response Coordination',   'desc'=>'Guards are trained to immediately alert administration, emergency services, and parents during fire, medical, or security incidents.'],
          ];
          foreach ($detail as $d):
          ?>
          <div class="flex gap-4 items-start">
            <div class="w-10 h-10 rounded-xl bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fa <?php echo $d['icon']; ?> text-brand-dark text-sm"></i>
            </div>
            <div>
              <h4 class="font-display font-bold text-brand-dark text-lg mb-1"><?php echo $d['title']; ?></h4>
              <p class="text-gray-500 text-base leading-relaxed"><?php echo $d['desc']; ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     4. RECOMMENDED MANPOWER DEPLOYMENT — GRAY
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-gray-50">
  <div class="max-w-5xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Quick Reference</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark mb-4">Recommended Manpower<br/>Deployment</h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="overflow-x-auto fade-up">
      <table class="w-full text-base border border-gray-200 rounded-xl overflow-hidden bg-white">
        <thead>
          <tr class="bg-brand-dark text-white text-left">
            <th class="px-6 py-4 font-semibold capitalize text-lg tracking-wider">Campus Size / Type</th>
            <th class="px-6 py-4 font-semibold capitalize text-lg tracking-wider">Suggested Deployment</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr class="bg-gray-50">
            <td class="px-6 py-4 font-semibold text-brand-dark">Small School (1 Gate, up to 500 students)</td>
            <td class="px-6 py-4 text-gray-600">1–2 guards, day shift</td>
          </tr>
          <tr class="bg-white">
            <td class="px-6 py-4 font-semibold text-brand-dark">Medium School / Junior College (2 Gates)</td>
            <td class="px-6 py-4 text-gray-600">2–4 guards with lady guard, day shift</td>
          </tr>
          <tr class="bg-gray-50">
            <td class="px-6 py-4 font-semibold text-brand-dark">Large School / Senior Secondary / Campus</td>
            <td class="px-6 py-4 text-gray-600">4–8 guards with supervisor, lady guard + CCTV support</td>
          </tr>
          <tr class="bg-white">
            <td class="px-6 py-4 font-semibold text-brand-dark">Residential College / University Campus</td>
            <td class="px-6 py-4 text-gray-600">Multiple guards, supervisor, lady guards, 24/7 coverage + QRT</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     5. DUTIES & RESPONSIBILITIES — DARK
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-brand-dark">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-14 fade-up">
      <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">What Our Guards Do</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-white mb-4">
        Duties &amp; <span class="text-brand-yellow">Responsibilities</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
      <?php
      $duties = [
        ['icon'=>'fa-door-open',       'title'=>'Main Gate Management',           'desc'=>'Control all pedestrian and vehicle entry/exit — verifying student ID cards and checking visitor credentials before allowing access.'],
        ['icon'=>'fa-id-card',         'title'=>'Visitor Logging & Verification', 'desc'=>'Register every visitor — parent, vendor, or contractor — with ID details, purpose, class/department, and entry/exit time.'],
        ['icon'=>'fa-child',           'title'=>'Student Dispersal Supervision',  'desc'=>'Manage dispersal queues, verify authorised guardians, and ensure no child leaves with an unverified person.'],
        ['icon'=>'fa-car',             'title'=>'Vehicle & Parking Control',      'desc'=>'Manage school bus bays, parent drop-off zones, and authorised vehicle entry to prevent congestion and ensure safety.'],
        ['icon'=>'fa-female',          'title'=>'Girls Area & Washroom Safety',   'desc'=>'Lady guards monitor girls-only areas, washrooms, and hostels with respectful, protocol-driven supervision.'],
        ['icon'=>'fa-people-arrows',   'title'=>'Event & Crowd Management',       'desc'=>'Manage crowd flow and entry during sports days, annual functions, parent-teacher meetings, and cultural events.'],
        ['icon'=>'fa-tools',           'title'=>'Vendor & Contractor Checking',   'desc'=>'Verify and log all vendors, canteen staff, and maintenance contractors before allowing campus access.'],
        ['icon'=>'fa-walking',         'title'=>'Campus Patrolling',              'desc'=>'Regular rounds across buildings, playgrounds, laboratories, and campus boundaries during all shifts.'],
        ['icon'=>'fa-moon',            'title'=>'Night Security & Rounds',        'desc'=>'Patrol campus premises at night to prevent trespassing, theft, and damage to infrastructure or equipment.'],
        ['icon'=>'fa-bolt',            'title'=>'Emergency First Response',       'desc'=>'Act as first responder for fire, medical, and security emergencies — alerting administration and emergency services.'],
        ['icon'=>'fa-clipboard-list',  'title'=>'Daily Duty Log Maintenance',     'desc'=>'Maintain accurate visitor registers, vehicle logs, and incident reports for school/college administration review.'],
        ['icon'=>'fa-graduation-cap',  'title'=>'Examination Duty Support',       'desc'=>'Maintain discipline and access control during board and internal examinations to prevent unfair practices.'],
      ];
      foreach ($duties as $i => $d):
      ?>
      <div class="duty-item border border-white/10 rounded-xl p-5 flex gap-4 items-start fade-up" style="animation-delay:<?php echo $i*0.04; ?>s">
        <div class="w-10 h-10 rounded-full bg-brand-yellow/20 flex items-center justify-center flex-shrink-0 mt-0.5">
          <i class="fa <?php echo $d['icon']; ?> text-brand-yellow text-sm"></i>
        </div>
        <div>
          <h4 class="font-display font-bold text-white text-lg mb-1"><?php echo $d['title']; ?></h4>
          <p class="text-gray-400 text-base leading-relaxed"><?php echo $d['desc']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     6. SUITABLE SERVICES — WHITE
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">What We Can Deploy</p>
      <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark mb-4">
        Suitable <span style="color:#C9A91E;">Services</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5">
      <?php
      $services = [
        ['icon'=>'fa-shield-alt',       'title'=>'Unarmed Security Guards',  'link'=>'../Security-guard-services/unarmed-security.php'],
        ['icon'=>'fa-user-shield',      'title'=>'Armed Security Guards',    'link'=>'../Security-guard-services/armed-security.php'],
        ['icon'=>'fa-female',           'title'=>'Lady Security Guards',     'link'=>'../Security-guard-services/lady-security.php'],
        ['icon'=>'fa-video',            'title'=>'CCTV Monitoring',          'link'=>'../technology&support/cctv-monitoring.php'],
        ['icon'=>'fa-clipboard-list',   'title'=>'Visitor Management',       'link'=>'../technology&support/visitor-management.php'],
        ['icon'=>'fa-route',            'title'=>'Patrolling & QRT',         'link'=>'../technology&support/patrolling-quick-response-team.php'],
        ['icon'=>'fa-fire-extinguisher','title'=>'Fire & Safety Personnel',  'link'=>'../facility-management/fire-safety.php'],
      ];
      foreach ($services as $i => $s):
      ?>
      <a href="<?php echo $s['link']; ?>" class="service-link-card border border-gray-200 bg-gray-50 rounded-xl p-5 text-center fade-up" style="animation-delay:<?php echo $i*0.06; ?>s">
        <div class="w-12 h-12 rounded-full bg-brand-yellow/20 flex items-center justify-center mx-auto mb-3">
          <i class="fa <?php echo $s['icon']; ?> text-brand-dark"></i>
        </div>
        <div class="text-brand-dark font-bold text-base capitalize tracking-wider leading-snug"><?php echo $s['title']; ?></div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     7. LEAD MAGNET — DARK with image
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 relative overflow-hidden">
  <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(10,10,10,0.95) 0%, rgba(10,10,10,0.85) 100%), url('<?= mediaUrl($media, 'lead_background'); ?>') center/cover no-repeat;"></div>
  <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div class="fade-up">
        <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Free Resource</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-white leading-none mb-4">
          Student Safety and<br/><span class="text-brand-yellow">Campus Security Checklist</span>
        </h2>
        <p class="text-white/70 text-lg leading-relaxed mb-5">
          Use this checklist to review gate entry protocols, visitor logging, student dispersal safety, lady guard coverage, night security, and emergency response readiness — built specifically for schools and colleges.
        </p>
        <ul class="space-y-2 text-lg text-white/80">
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Gate entry & visitor verification review</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Student dispersal & guardian verification check</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> Lady guard deployment & women safety review</li>
          <li class="flex items-center gap-2"><i class="fa fa-check text-brand-yellow text-xs"></i> 100% free, no obligation</li>
        </ul>
      </div>
      <div class="bg-white rounded-2xl p-8 fade-up" style="animation-delay:0.1s">
        <h3 class="font-display font-bold text-brand-dark capitalize text-xl mb-6">Get Free Checklist</h3>
        <form action="../includes/contact.php" method="POST" class="space-y-4">
          <input type="hidden" name="form_type" value="school_campus_security_checklist" />
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Name *</label>
            <input type="text" name="name" required placeholder="Your name" class="input-field" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Phone *</label>
            <input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX" class="input-field" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">School / College Name</label>
            <input type="text" name="company" placeholder="Your institution name" class="input-field" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold capitalize tracking-wider mb-1.5 block">Location</label>
            <select name="location" class="input-field">
              <option value="">Select area</option>
              <option>Delhi</option><option>Noida</option><option>Greater Noida</option>
              <option>Gurgaon</option><option>Faridabad</option><option>Ghaziabad</option>
              <option>Manesar</option><option>Sonipat</option><option>Other NCR</option>
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
     8. FAQs — WHITE
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
  <div class="max-w-4xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-12 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Common Questions</p>
      <h2 class="font-display font-black capitalize text-4xl sm:text-4xl text-brand-dark mb-4">Frequently Asked</h2>
      <div class="y-divider-center mx-auto"></div>
    </div>
    <div class="space-y-3">
      <?php
      $faqs = [
        ['q' => 'How many security guards does a school or college typically need?',
         'a' => 'It depends on campus size, number of entry gates, and student strength. A small school with one gate needs 1–2 guards, while a large residential college may need 8 or more guards with supervisors and lady guards. We conduct a site assessment to recommend the right deployment.'],
        ['q' => 'Do you provide lady security guards for schools?',
         'a' => 'Yes, we regularly deploy trained lady security guards at schools and colleges — specifically for girls-only areas, washrooms, hostels, and women-sensitive zones on campus.'],
        ['q' => 'Can guards manage student dispersal and parent pickup safely?',
         'a' => 'Yes, our guards are briefed on dispersal protocols — verifying authorised guardians before allowing students to leave, managing queues, and ensuring no child leaves campus unaccompanied or with an unverified person.'],
        ['q' => 'Are guards trained to handle emergencies on campus?',
         'a' => 'Yes, all deployed guards receive emergency awareness training — covering fire response, medical first-alert procedures, and how to coordinate with school administration and emergency services during an incident.'],
        ['q' => 'Do you provide security for college events and functions?',
         'a' => 'Yes, we provide additional guard deployment for large events including sports days, annual functions, parent-teacher meetings, and examinations — managing crowd flow, access control, and parking.'],
        ['q' => 'Can guards manage vendor and contractor access to the campus?',
         'a' => 'Yes, all vendors, canteen staff, and maintenance contractors are logged and verified before being allowed inside campus buildings — with entry and exit times recorded.'],
        ['q' => 'What are your deployment hours for schools?',
         'a' => 'We offer flexible deployment — typically day shift aligned with school hours, plus extended coverage for residential campuses requiring 24-hour security. Shifts are planned based on your campus schedule.'],
        ['q' => 'How quickly can guards be deployed for a school?',
         'a' => 'We maintain a ready pool of verified guards and can typically deploy within a short lead time after a brief site discussion and briefing session with school management.'],
      ];
      foreach ($faqs as $i => $f):
      ?>
      <div class="faq-item bg-gray-50 border border-gray-200 rounded-xl overflow-hidden fade-up" style="animation-delay:<?php echo $i*0.04; ?>s">
        <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-left" onclick="toggleFAQ(this)">
          <span class="text-brand-dark font-semibold text-lg pr-4"><?php echo $f['q']; ?></span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body max-h-0 overflow-hidden transition-all duration-300">
          <p class="px-6 pb-5 text-gray-500 text-base leading-relaxed"><?php echo $f['a']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     9. FINAL CTA — YELLOW
═══════════════════════════════════════════ -->
<section class="py-12 sm:py-16 md:py-20 bg-brand-yellow">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center fade-up">
    <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-brand-dark leading-none mb-4">
      Need Security Guards for<br/>Your School or College?
    </h2>
    <p class="text-brand-dark/70 text-sm sm:text-lg mb-8 max-w-lg mx-auto">
      Get a free site assessment and a tailored security deployment plan for your institution.
    </p>
    <div class="flex flex-wrap justify-center gap-4">
      <a href="../contact" class="bg-brand-dark hover:bg-gray-800 text-white font-bold px-8 py-3.5 rounded capitalize tracking-wider text-base transition-colors shadow-lg">
        Get Free Site Assessment
      </a>
      <a href="tel:+919430695171" class="flex items-center gap-2 border-2 border-brand-dark/50 text-brand-dark hover:border-brand-dark font-bold px-8 py-3.5 rounded capitalize tracking-wider text-base transition-colors">
        <i class="fa fa-phone"></i> +91 94306 95171
      </a>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>