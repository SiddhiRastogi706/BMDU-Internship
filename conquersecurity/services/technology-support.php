<?php
$page_title       = "Security Technology & Support Services in Delhi NCR | Conquer Services";
$page_description = "CCTV monitoring, access control management, visitor management, security audits, emergency response teams, and patrolling — technology-backed support for your physical security.";
$active_page      = "services";
$base_path        = "../../";
include '../../includes/header.php';
?>

<style>
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
  .hover-card { transition: transform 0.3s, box-shadow 0.3s; }
  .hover-card:hover { transform: translateY(-5px); box-shadow: 0 20px 48px rgba(0,0,0,0.08); }
  .service-card { transition: transform 0.3s, box-shadow 0.3s; }
  .service-card:hover { transform: translateY(-6px); box-shadow: 0 24px 48px rgba(0,0,0,0.10); }
  .service-card img { transition: transform 0.5s ease; }
  .service-card:hover img { transform: scale(1.07); }
  .faq-toggle { cursor: pointer; }
  .faq-body { max-height: 0; overflow: hidden; transition: max-height 0.3s ease; }
  .integration-step { position: relative; }
  .integration-step:not(:last-child)::after {
    content: ''; position: absolute; left: 1.4rem; top: 3.2rem; bottom: -1.5rem; width: 2px;
    background: repeating-linear-gradient(to bottom, #F2CF4A 0, #F2CF4A 6px, transparent 6px, transparent 12px);
  }
</style>

<!-- ══════════════════════════════════════════
     1. HERO SECTION — dark, image background
═══════════════════════════════════════════ -->
<section class="relative h-80 sm:h-96 md:h-[28rem] overflow-hidden bg-brand-dark">
  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1557597774-9d273605dfa9?w=1600&q=80" alt="Security technology and support services" class="w-full h-full object-cover" />
  </div>
  <div class="page-hero-overlay absolute inset-0"></div>

  <div class="relative z-10 h-full flex flex-col justify-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
      <div class="flex items-center gap-2 text-xs uppercase tracking-widest mb-5">
        <a href="../../" class="text-gray-400 hover:text-brand-yellow transition-colors">Home</a>
        <span class="text-brand-yellow"><i class="fa fa-chevron-right text-[9px]"></i></span>
        <a href="../../services" class="text-gray-400 hover:text-brand-yellow transition-colors">Services</a>
        <span class="text-brand-yellow"><i class="fa fa-chevron-right text-[9px]"></i></span>
        <span class="text-brand-yellow font-semibold">Technology & Support</span>
      </div>
      <p class="text-brand-yellow font-semibold uppercase tracking-widest2 text-xs mb-3">Smarter, Stronger Security</p>
      <h1 class="font-display font-black uppercase leading-none text-white mb-5">
        <span class="text-4xl sm:text-5xl md:text-6xl block">Security Technology</span>
        <span class="text-4xl sm:text-5xl md:text-6xl text-brand-yellow block">& Support Services</span>
      </h1>
      <p class="text-gray-300 text-sm sm:text-base max-w-2xl leading-relaxed">
        Strengthen your physical security with CCTV monitoring, access control, visitor management, security audits, emergency response, patrolling, and quick response teams.
      </p>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-brand-yellow"></div>
</section>


<!-- ══════════════════════════════════════════
     2. SERVICE CARDS — WHITE
═══════════════════════════════════════════ -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-14 fade-up">
      <p class="text-brand-dark font-semibold uppercase tracking-widest2 text-xs mb-3">What We Offer</p>
      <h2 class="font-display font-black uppercase text-4xl sm:text-5xl text-brand-dark leading-none mb-4">
        Technology & Support <span style="color:#C9A91E;">Services</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php
      $tech_services = [
        ['icon' => 'fa-video',           'title' => 'CCTV Monitoring',                   'desc' => 'Live and recorded surveillance coverage across entry points, common areas, and perimeters.', 'img' => 'https://images.unsplash.com/photo-1557597774-9d273605dfa9?w=700&q=80', 'link' => 'cctv-monitoring.php'],
        ['icon' => 'fa-id-badge',        'title' => 'Access Control Management',         'desc' => 'Biometric, card, and ID-based entry systems to control who enters restricted areas.',        'img' => 'https://images.unsplash.com/photo-1614064548237-096d815f6fcf?w=700&q=80', 'link' => 'access-control-management.php'],
        ['icon' => 'fa-clipboard-list',  'title' => 'Visitor Management',                'desc' => 'Digital visitor logging, ID capture, and host notification for every entry.',                 'img' => 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=700&q=80', 'link' => 'visitor-management.php'],
        ['icon' => 'fa-search',          'title' => 'Security Audit & Risk Assessment',  'desc' => 'On-site review of vulnerabilities across guarding, technology, and access points.',            'img' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=700&q=80', 'link' => 'security-audit-risk-assessment.php'],
        ['icon' => 'fa-ambulance',       'title' => 'Emergency Response Team',           'desc' => 'Trained personnel ready to act fast during fire, medical, or security emergencies.',           'img' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=700&q=80', 'link' => 'emergency-response-team.php'],
        ['icon' => 'fa-route',           'title' => 'Patrolling & Quick Response Team',  'desc' => 'Scheduled and surprise patrols backed by a rapid-response team for fast escalation.',          'img' => 'https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=700&q=80', 'link' => 'patrolling-quick-response-team.php'],
      ];
      foreach ($tech_services as $i => $s):
      ?>
      <a href="<?php echo $s['link']; ?>" class="service-card block bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden fade-up" style="animation-delay:<?php echo $i*0.08; ?>s">
        <div class="aspect-[16/10] overflow-hidden">
          <img src="<?php echo $s['img']; ?>" alt="<?php echo $s['title']; ?>" class="w-full h-full object-cover" />
        </div>
        <div class="p-6">
          <div class="w-12 h-12 rounded-xl bg-brand-yellow/20 flex items-center justify-center mb-4 -mt-12 relative bg-white border border-gray-200 shadow-md">
            <i class="fa <?php echo $s['icon']; ?> text-brand-dark"></i>
          </div>
          <h3 class="font-display font-bold text-brand-dark text-base mb-2"><?php echo $s['title']; ?></h3>
          <p class="text-gray-500 text-sm leading-relaxed mb-3"><?php echo $s['desc']; ?></p>
          <span class="text-brand-dark font-semibold text-xs uppercase tracking-wider flex items-center gap-1.5">
            Learn More <i class="fa fa-arrow-right text-[10px]"></i>
          </span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     3. WHY TECHNOLOGY SUPPORT MATTERS — GRAY
═══════════════════════════════════════════ -->
<section class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-14 fade-up">
      <p class="text-brand-dark font-semibold uppercase tracking-widest2 text-xs mb-3">The Bigger Picture</p>
      <h2 class="font-display font-black uppercase text-4xl sm:text-5xl text-brand-dark leading-none mb-4">
        Why Technology Support <span style="color:#C9A91E;">Matters</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <?php
      $why = [
        ['icon' => 'fa-eye',             'title' => 'Better Monitoring',          'desc' => 'Continuous visibility across every entry point and common area.'],
        ['icon' => 'fa-bolt',            'title' => 'Faster Incident Response',   'desc' => 'Real-time alerts mean issues get caught and acted on sooner.'],
        ['icon' => 'fa-check-double',    'title' => 'Reduced Manual Errors',      'desc' => 'Digital logs replace error-prone manual registers.'],
        ['icon' => 'fa-door-closed',     'title' => 'Stronger Entry Control',     'desc' => 'Controlled access reduces unauthorised movement on-site.'],
        ['icon' => 'fa-address-card',    'title' => 'Better Visitor Records',     'desc' => 'Accurate, searchable logs of every visitor and vendor.'],
        ['icon' => 'fa-chart-line',      'title' => 'Improved Reporting',         'desc' => 'Clear, regular reports on incidents, access, and patrol activity.'],
        ['icon' => 'fa-shield-alt',      'title' => 'Stronger Risk Prevention',   'desc' => 'Proactive audits catch vulnerabilities before they are exploited.'],
        ['icon' => 'fa-sync-alt',        'title' => 'Continuous Improvement',     'desc' => 'Data-backed insights help refine deployment over time.'],
      ];
      foreach ($why as $i => $w):
      ?>
      <div class="hover-card bg-white border border-gray-200 rounded-2xl p-6 fade-up" style="animation-delay:<?php echo $i*0.06; ?>s">
        <div class="w-12 h-12 rounded-full bg-brand-yellow/20 flex items-center justify-center mb-4">
          <i class="fa <?php echo $w['icon']; ?> text-brand-dark"></i>
        </div>
        <h3 class="font-display font-bold text-brand-dark text-sm mb-2"><?php echo $w['title']; ?></h3>
        <p class="text-gray-500 text-xs leading-relaxed"><?php echo $w['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     4. INTEGRATION WITH GUARD SERVICES — DARK
═══════════════════════════════════════════ -->
<section class="py-20 bg-brand-dark relative overflow-hidden">
  <div class="absolute inset-0 opacity-10">
    <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=1600&q=80" alt="" class="w-full h-full object-cover" />
  </div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
    <div class="grid lg:grid-cols-2 gap-14 items-center">

      <div class="fade-up">
        <p class="text-brand-yellow font-semibold uppercase tracking-widest2 text-xs mb-3">One Connected System</p>
        <h2 class="font-display font-black uppercase text-4xl sm:text-5xl text-white leading-none mb-4">
          Integration With <span class="text-brand-yellow">Guard Services</span>
        </h2>
        <div class="y-divider-center mb-6"></div>
        <p class="text-gray-300 text-sm leading-relaxed">
          Technology works best when it's connected to trained people on the ground. Our guards, supervisors, and technology systems operate as one coordinated layer of security — not separate add-ons.
        </p>
      </div>

      <div class="space-y-7">
        <?php
        $integration = [
          ['icon' => 'fa-video',       'title' => 'Guards Coordinate With CCTV Operators',          'desc' => 'On-ground response is directed in real time based on what the cameras catch.'],
          ['icon' => 'fa-clipboard-list','title' => 'Visitor Logs Support Gate Security',            'desc' => 'Digital visitor records back up gate guards with verified entry data.'],
          ['icon' => 'fa-id-badge',    'title' => 'Access Control Reduces Unauthorised Entry',       'desc' => 'Card and biometric systems work alongside guards to prevent unverified access.'],
          ['icon' => 'fa-ambulance',   'title' => 'QRT Supports Emergency Escalation',               'desc' => 'Quick response teams back up on-site guards the moment an incident is flagged.'],
          ['icon' => 'fa-search',      'title' => 'Security Audits Improve Deployment Planning',     'desc' => 'Audit findings directly shape how guards and technology are deployed on-site.'],
        ];
        foreach ($integration as $i => $it):
        ?>
        <div class="integration-step flex items-start gap-5 fade-up" style="animation-delay:<?php echo $i*0.08; ?>s">
          <div class="w-11 h-11 rounded-full bg-brand-yellow flex items-center justify-center flex-shrink-0 relative z-10">
            <i class="fa <?php echo $it['icon']; ?> text-brand-dark text-sm"></i>
          </div>
          <div>
            <h3 class="font-display font-bold text-white text-sm mb-1"><?php echo $it['title']; ?></h3>
            <p class="text-gray-400 text-xs leading-relaxed"><?php echo $it['desc']; ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     5. LEAD MAGNET — YELLOW
═══════════════════════════════════════════ -->
<section class="py-20 bg-brand-yellow">
  <div class="max-w-5xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-10 items-center">

      <div class="fade-up">
        <p class="text-brand-dark/70 font-semibold uppercase tracking-widest2 text-xs mb-3">Free Assessment</p>
        <h2 class="font-display font-black uppercase text-3xl sm:text-4xl text-brand-dark leading-tight mb-4">
          Free Security Technology Audit
        </h2>
        <p class="text-brand-dark/80 text-sm leading-relaxed">
          Get a basic review of your CCTV, access control, visitor management, patrolling, and emergency response gaps — at no cost.
        </p>
      </div>

      <div class="bg-white rounded-2xl p-7 sm:p-8 shadow-2xl fade-up" style="animation-delay:0.1s">
        <form id="techAuditForm" class="space-y-4">
          <input type="text" name="name" placeholder="Your Name *" required class="input-field" />
          <input type="text" name="organisation" placeholder="Organisation / Property *" required class="input-field" />
          <input type="tel" name="phone" placeholder="Phone *" required class="input-field" />
          <input type="email" name="email" placeholder="Email" class="input-field" />
          <input type="text" name="location" placeholder="Location *" required class="input-field" />
          <button type="submit" id="techAuditBtn" class="w-full bg-brand-dark hover:bg-gray-800 text-white font-bold uppercase tracking-wider text-sm py-3.5 rounded transition-colors">
            Request Technology Audit
          </button>
          <p id="techAuditMsg" class="text-sm text-center hidden"></p>
        </form>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     6. FAQS — WHITE
═══════════════════════════════════════════ -->
<section class="py-20 bg-white">
  <div class="max-w-4xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-14 fade-up">
      <p class="text-brand-dark font-semibold uppercase tracking-widest2 text-xs mb-3">Common Questions</p>
      <h2 class="font-display font-black uppercase text-4xl sm:text-5xl text-brand-dark leading-none mb-4">
        Frequently Asked <span style="color:#C9A91E;">Questions</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="space-y-3">
      <?php
      $faqs = [
        ['q' => 'Do you provide CCTV cameras, or only monitoring?', 'a' => 'We provide both — installation and live/recorded monitoring — depending on your site requirements, alongside coordinated guard support.'],
        ['q' => 'How does visitor management work alongside gate security?', 'a' => 'Visitors are logged digitally with ID capture and host notification, while gate guards verify entry in real time using the same system.'],
        ['q' => 'What does an access control setup typically include?', 'a' => 'Card-based, biometric, or app-based entry systems for restricted zones, integrated with guard-monitored entry points for full coverage.'],
        ['q' => 'What is included in a security audit report?', 'a' => 'A structured review of guarding, CCTV coverage, access points, visitor handling, and emergency readiness, with clear recommendations.'],
        ['q' => 'How often is patrolling carried out?', 'a' => 'Patrol frequency is customised per site — typically scheduled rounds plus randomised checks to avoid predictable patterns.'],
        ['q' => 'Is the Quick Response Team available 24/7?', 'a' => 'Yes, our QRT operates round the clock and is dispatched immediately when an escalation is flagged by guards or CCTV monitoring.'],
      ];
      foreach ($faqs as $f):
      ?>
      <div class="border border-gray-200 rounded-xl overflow-hidden bg-gray-50">
        <button type="button" onclick="toggleFAQ(this)" class="faq-toggle w-full flex items-center justify-between gap-4 p-5 text-left">
          <span class="font-display font-bold text-brand-dark text-sm"><?php echo $f['q']; ?></span>
          <i class="fa fa-plus text-brand-dark text-sm flex-shrink-0 transition-transform duration-300"></i>
        </button>
        <div class="faq-body px-5">
          <p class="text-gray-500 text-sm leading-relaxed pb-5"><?php echo $f['a']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     7. FINAL CTA — DARK
═══════════════════════════════════════════ -->
<section class="py-16 bg-brand-dark relative overflow-hidden">
  <div class="absolute inset-0 opacity-15">
    <img src="https://images.unsplash.com/photo-1557597774-9d273605dfa9?w=1600&q=80" alt="" class="w-full h-full object-cover" />
  </div>
  <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center relative z-10 fade-up">
    <h2 class="font-display font-black uppercase text-3xl sm:text-4xl md:text-5xl text-white leading-tight mb-4">
      Want to Improve Your <span class="text-brand-yellow">Site Security System?</span>
    </h2>
    <div class="y-divider-center mx-auto mb-8"></div>
    <a href="../../contact" class="inline-flex items-center gap-2 bg-brand-yellow hover:bg-yellow-400 text-brand-dark font-bold uppercase tracking-wider text-sm px-8 py-4 rounded transition-colors">
      Book Free Security Audit <i class="fa fa-arrow-right"></i>
    </a>
  </div>
</section>


<script>
  // ── FAQ accordion ──
  function toggleFAQ(btn) {
    const body = btn.nextElementSibling;
    const icon = btn.querySelector('i');
    const isOpen = body.style.maxHeight && body.style.maxHeight !== '0px';

    document.querySelectorAll('.faq-body').forEach(b => { b.style.maxHeight = '0px'; });
    document.querySelectorAll('.faq-toggle i').forEach(i => { i.classList.remove('fa-minus'); i.classList.add('fa-plus'); i.style.transform = 'rotate(0deg)'; });

    if (!isOpen) {
      body.style.maxHeight = body.scrollHeight + 'px';
      icon.classList.remove('fa-plus');
      icon.classList.add('fa-minus');
      icon.style.transform = 'rotate(180deg)';
    }
  }

  // ── Technology audit lead form ──
  const techForm = document.getElementById('techAuditForm');
  if (techForm) {
    techForm.addEventListener('submit', async function (e) {
      e.preventDefault();
      const btn = document.getElementById('techAuditBtn');
      const msg = document.getElementById('techAuditMsg');
      const originalText = btn.textContent;
      btn.disabled = true;
      btn.textContent = 'Submitting...';
      msg.classList.add('hidden');

      try {
        const formData = new FormData(techForm);
        const res = await fetch('../../includes/tech-audit-form.php', { method: 'POST', body: formData });
        const data = await res.json();

        msg.classList.remove('hidden');
        if (data.success) {
          msg.className = 'text-sm text-center text-green-600 font-medium';
          msg.textContent = data.message;
          techForm.reset();
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

<?php include '../../includes/footer.php'; ?>