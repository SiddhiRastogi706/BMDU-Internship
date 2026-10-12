<?php
$page_title       = "Blog | Security & Facility Management Insights — Conquer Services";
$page_description = "Security and facility management insights — guides on security guard hiring, residential society security, corporate security checklists, CCTV technology, and compliance.";
$active_page      = "blog";
$base_path        = "";
include 'includes/header.php';
?>

<style>
  .y-divider-center { width: 56px; height: 3px; background: #F2CF4A; }
  .hover-card { transition: transform 0.3s, box-shadow 0.3s; }
  .hover-card:hover { transform: translateY(-5px); box-shadow: 0 20px 48px rgba(0,0,0,0.08); }

  .blog-card { transition: transform 0.3s, box-shadow 0.3s; }
  .blog-card:hover { transform: translateY(-6px); box-shadow: 0 24px 48px rgba(0,0,0,0.10); }
  .blog-card img { transition: transform 0.5s ease; }
  .blog-card:hover img { transform: scale(1.06); }

  .cat-filter { transition: all 0.25s ease; }
  .cat-filter.active { background: #0A0A0A; color: #fff; border-color: #0A0A0A; }
  .cat-filter:not(.active):hover { border-color: #F2CF4A; background: rgba(242,207,74,0.12); }

  .blog-grid-item { display: block; }
  .blog-grid-item.hidden-item { display: none; }
</style>

<!-- ══════════════════════════════════════════
     1. HERO SECTION — FIXED: responsive text + min-height
═══════════════════════════════════════════ -->
<section class="relative min-h-[220px] sm:min-h-[280px] md:min-h-[340px] lg:min-h-[380px] overflow-hidden bg-brand-dark flex items-center">
  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?w=1600&q=80" alt="Conquer Services Blog" class="w-full h-full object-cover" />
  </div>
  <div class="page-hero-overlay absolute inset-0"></div>

  <div class="relative z-10 w-full py-10 sm:py-14 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
      <p class="text-brand-yellow font-semibold capitalize tracking-widest text-[12px] sm:text-xs mb-2 sm:mb-3">Resources & Insights</p>
      <h1 class="font-display font-black capitalize leading-tight text-white">
        <span class="text-xl sm:text-3xl md:text-4xl lg:text-5xl block">Security and Facility</span>
        <span class="text-xl sm:text-3xl md:text-4xl lg:text-5xl text-brand-yellow block">Management Blog</span>
      </h1>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-brand-yellow"></div>
</section>


<?php
// ── Sample / placeholder post data ────────────────────────────────
// Replace this array with a database query when you wire up a CMS.
$posts = [
  [
    'slug' => 'how-to-choose-right-security-guard-agency-delhi-ncr',
    'title' => 'How to Choose the Right Security Guard Agency in Delhi NCR',
    'excerpt' => 'A practical checklist covering licensing, training, verification, and supervision standards to evaluate before signing with any agency.',
    'category' => 'Hiring Guides',
    'img' => 'https://images.unsplash.com/photo-1633265486064-086b219458ec?w=900&q=80',
    'date' => 'June 18, 2026',
    'read' => '6 min read',
    'featured' => true,
  ],
  [
    'slug' => 'how-many-security-guards-residential-society-needs',
    'title' => 'How Many Security Guards Does a Residential Society Need?',
    'excerpt' => 'Guard count depends on gate count, shift pattern, society size, and risk profile — here is how to calculate the right number.',
    'category' => 'Residential Society Security',
    'img' => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=900&q=80',
    'date' => 'June 10, 2026',
    'read' => '5 min read',
    'featured' => true,
  ],
  [
    'slug' => 'security-checklist-corporate-offices',
    'title' => 'Security Checklist for Corporate Offices',
    'excerpt' => 'From access control to visitor logs, a complete checklist to assess and strengthen your office security setup.',
    'category' => 'Corporate Security',
    'img' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=900&q=80',
    'date' => 'June 2, 2026',
    'read' => '7 min read',
    'featured' => true,
  ],
  [
    'slug' => 'why-factories-need-industrial-security-guards',
    'title' => 'Why Factories Need Industrial Security Guards',
    'excerpt' => 'Industrial sites face unique risks — theft, unauthorised access, and safety hazards. Here is why trained guards matter.',
    'category' => 'Industrial Security',
    'img' => 'https://images.unsplash.com/photo-1581094288338-2314dddb7ece?w=900&q=80',
    'date' => 'May 26, 2026',
    'read' => '5 min read',
    'featured' => true,
  ],
  [
    'slug' => 'visitor-management-tips-offices-societies',
    'title' => 'Visitor Management Tips for Offices and Societies',
    'excerpt' => 'Simple, effective practices to log, verify, and track visitors without slowing down daily operations.',
    'category' => 'Safety Tips',
    'img' => 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=900&q=80',
    'date' => 'May 20, 2026',
    'read' => '4 min read',
    'featured' => false,
  ],
  [
    'slug' => 'role-of-cctv-monitoring-modern-security',
    'title' => 'Role of CCTV Monitoring in Modern Security',
    'excerpt' => 'How live monitoring, recorded footage, and smart alerts work together with manned guarding for layered security.',
    'category' => 'CCTV & Technology',
    'img' => 'https://images.unsplash.com/photo-1557597774-9d273605dfa9?w=900&q=80',
    'date' => 'May 14, 2026',
    'read' => '6 min read',
    'featured' => false,
  ],
  [
    'slug' => 'housekeeping-checklist-commercial-offices',
    'title' => 'Housekeeping Checklist for Commercial Offices',
    'excerpt' => 'A daily, weekly, and monthly housekeeping checklist to keep commercial spaces clean, hygienic, and presentable.',
    'category' => 'Facility Management',
    'img' => 'https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=900&q=80',
    'date' => 'May 8, 2026',
    'read' => '5 min read',
    'featured' => false,
  ],
  [
    'slug' => 'how-to-hire-verified-facility-staff',
    'title' => 'How to Hire Verified Facility Staff',
    'excerpt' => 'Background checks, document verification, and reference validation — the essential hiring steps explained.',
    'category' => 'Compliance & Verification',
    'img' => 'https://images.unsplash.com/photo-1568992687947-868a62a9f521?w=900&q=80',
    'date' => 'April 30, 2026',
    'read' => '6 min read',
    'featured' => false,
  ],
  [
    'slug' => 'event-security-planning-checklist',
    'title' => 'Event Security Planning Checklist',
    'excerpt' => 'Crowd control, entry-exit management, and emergency planning essentials for a safe, well-run event.',
    'category' => 'Event Security',
    'img' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=900&q=80',
    'date' => 'April 22, 2026',
    'read' => '5 min read',
    'featured' => false,
  ],
  [
    'slug' => 'fire-safety-personnel-why-they-matter',
    'title' => 'Fire Safety Personnel: Why They Matter for Commercial Sites',
    'excerpt' => 'Trained fire safety staff reduce response time and risk. Here is what their role covers on commercial premises.',
    'category' => 'Safety Tips',
    'img' => 'https://images.unsplash.com/photo-1569235186275-626cb53b83ce?w=900&q=80',
    'date' => 'April 15, 2026',
    'read' => '4 min read',
    'featured' => false,
  ],
];

$categories = [
  'All',
  'Security Guard Services',
  'Facility Management',
  'Residential Society Security',
  'Corporate Security',
  'Industrial Security',
  'CCTV & Technology',
  'Safety Tips',
  'Hiring Guides',
  'Compliance & Verification',
  'Event Security',
];

$featured_posts = array_filter($posts, fn($p) => $p['featured']);
?>


<!-- ══════════════════════════════════════════
     2. FEATURED ARTICLES — WHITE
═══════════════════════════════════════════ -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-14 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Editor's Picks</p>
      <h2 class="font-display font-black capitalize text-4xl sm:text-4xl text-brand-dark leading-none mb-4">
        Featured <span style="color:#C9A91E;">Articles</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php foreach ($featured_posts as $i => $p): ?>
      <a href="blog/<?php echo $p['slug']; ?>" class="blog-card block bg-white border border-gray-200 rounded-2xl overflow-hidden fade-up" style="animation-delay:<?php echo $i*0.08; ?>s">
        <div class="aspect-[4/3] overflow-hidden">
          <img src="<?php echo $p['img']; ?>" alt="<?php echo htmlspecialchars($p['title']); ?>" class="w-full h-full object-cover" />
        </div>
        <div class="p-5">
          <span class="inline-block bg-brand-yellow/20 text-brand-dark text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-3"><?php echo $p['category']; ?></span>
          <h3 class="font-display font-bold text-brand-dark text-base leading-snug mb-2"><?php echo $p['title']; ?></h3>
          <div class="flex items-center gap-3 text-gray-400 text-xs">
            <span><i class="fa fa-calendar-alt mr-1"></i><?php echo $p['date']; ?></span>
            <span><i class="fa fa-clock mr-1"></i><?php echo $p['read']; ?></span>
          </div>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     3 & 4. CATEGORY FILTERS + LATEST ARTICLES — GRAY
═══════════════════════════════════════════ -->
<section class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10 fade-up">
      <p class="text-brand-dark font-semibold capitalize tracking-widest text-base mb-3">Browse by Topic</p>
      <h2 class="font-display font-black capitalize text-4xl sm:text-4xl text-brand-dark leading-none mb-4">
        Latest <span style="color:#C9A91E;">Articles</span>
      </h2>
      <div class="y-divider-center mx-auto"></div>
    </div>

    <!-- Category Filters -->
    <div class="flex flex-wrap justify-center gap-3 mb-12 fade-up">
      <?php foreach ($categories as $i => $cat): ?>
      <button
        type="button"
        onclick="filterBlog('<?php echo htmlspecialchars($cat); ?>', this)"
        class="cat-filter <?php echo $i === 0 ? 'active' : ''; ?> border border-gray-300 bg-white text-brand-dark text-xs font-semibold uppercase tracking-wider px-4 py-2.5 rounded-full"
        data-cat="<?php echo htmlspecialchars($cat); ?>"
      >
        <?php echo $cat; ?>
      </button>
      <?php endforeach; ?>
    </div>

    <!-- Blog Cards Grid -->
    <div id="blogGrid" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($posts as $i => $p): ?>
      <a href="blog/<?php echo $p['slug']; ?>"
         class="blog-grid-item blog-card block bg-white border border-gray-200 rounded-2xl overflow-hidden fade-up"
         data-category="<?php echo htmlspecialchars($p['category']); ?>"
         style="animation-delay:<?php echo ($i % 6)*0.06; ?>s">
        <div class="aspect-[16/10] overflow-hidden">
          <img src="<?php echo $p['img']; ?>" alt="<?php echo htmlspecialchars($p['title']); ?>" class="w-full h-full object-cover" />
        </div>
        <div class="p-5">
          <span class="inline-block bg-brand-yellow/20 text-brand-dark text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-3"><?php echo $p['category']; ?></span>
          <h3 class="font-display font-bold text-brand-dark text-base leading-snug mb-2"><?php echo $p['title']; ?></h3>
          <p class="text-gray-500 text-sm leading-relaxed mb-3"><?php echo $p['excerpt']; ?></p>
          <div class="flex items-center justify-between text-gray-400 text-xs pt-3 border-t border-gray-100">
            <span><i class="fa fa-calendar-alt mr-1"></i><?php echo $p['date']; ?></span>
            <span class="text-brand-dark font-semibold flex items-center gap-1">Read More <i class="fa fa-arrow-right text-[10px]"></i></span>
          </div>
        </div>
      </a>
      <?php endforeach; ?>
    </div>

    <p id="noResultsMsg" class="hidden text-center text-gray-400 text-sm mt-10">No articles found in this category yet. Check back soon.</p>
  </div>
</section>


<!-- ══════════════════════════════════════════
     5. LEAD MAGNET — DARK
═══════════════════════════════════════════ -->
<section class="py-16 bg-brand-dark relative overflow-hidden">
  <div class="absolute inset-0 opacity-15">
    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=1600&q=80" alt="" class="w-full h-full object-cover" />
  </div>
  <div class="max-w-5xl mx-auto px-4 sm:px-6 relative z-10">
    <div class="grid lg:grid-cols-2 gap-10 items-center">

      <div class="fade-up">
        <p class="text-brand-yellow font-semibold capitalize tracking-widest text-base mb-3">Free Resource</p>
        <h2 class="font-display font-black capitalize text-3xl sm:text-4xl text-white leading-tight mb-4">
          Download Free Security Checklist <span class="text-brand-yellow">for Your Property</span>
        </h2>
        <p class="text-gray-300 text-lg leading-relaxed">
          A practical, printable checklist covering access control, guard deployment, CCTV coverage, and visitor management — built from our 10+ years of field experience.
        </p>
      </div>

      <div class="bg-white rounded-2xl p-7 sm:p-8 shadow-2xl fade-up" style="animation-delay:0.1s">
        <form id="leadMagnetForm" class="space-y-4">
          <input type="text" name="name" placeholder="Your Name *" required class="input-field" />
          <input type="tel" name="phone" placeholder="Phone *" required class="input-field" />
          <input type="email" name="email" placeholder="Email *" required class="input-field" />
          <button type="submit" id="leadSubmitBtn" class="w-full bg-brand-yellow hover:bg-yellow-400 text-brand-dark font-bold capitalize tracking-wider text-sm py-3.5 rounded transition-colors flex items-center justify-center gap-2">
            <i class="fa fa-download"></i> Download Checklist
          </button>
          <p id="leadFormMsg" class="text-sm text-center hidden"></p>
        </form>
      </div>

    </div>
  </div>
</section>


<script>
  // ── Category filter ──
  function filterBlog(category, btn) {
    document.querySelectorAll('.cat-filter').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    const items = document.querySelectorAll('.blog-grid-item');
    let visibleCount = 0;
    items.forEach(item => {
      const match = (category === 'All' || item.dataset.category === category);
      item.classList.toggle('hidden-item', !match);
      if (match) visibleCount++;
    });

    document.getElementById('noResultsMsg').classList.toggle('hidden', visibleCount !== 0);
  }

  // ── Lead magnet form ──
  const leadForm = document.getElementById('leadMagnetForm');
  if (leadForm) {
    leadForm.addEventListener('submit', async function (e) {
      e.preventDefault();
      const btn = document.getElementById('leadSubmitBtn');
      const msg = document.getElementById('leadFormMsg');
      const originalHTML = btn.innerHTML;
      btn.disabled = true;
      btn.innerHTML = 'Submitting...';
      msg.classList.add('hidden');

      try {
        const formData = new FormData(leadForm);
        const res = await fetch('includes/lead-magnet.php', { method: 'POST', body: formData });
        const data = await res.json();

        msg.classList.remove('hidden');
        if (data.success) {
          msg.className = 'text-sm text-center text-green-600 font-medium';
          msg.textContent = data.message;
          leadForm.reset();
          if (data.download_url) {
            window.location.href = data.download_url;
          }
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
        btn.innerHTML = originalHTML;
      }
    });
  }
</script>

<?php include 'includes/footer.php'; ?>