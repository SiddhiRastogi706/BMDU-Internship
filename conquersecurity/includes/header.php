<?php
require_once __DIR__ . '/../config/media.php';
?>
<?php
/**
 * ============================================================
 *  Conquer Services — Global Header
 *  Usage: <?php include 'includes/header.php'; ?>
 *
 *  ACTUAL FOLDER STRUCTURE (confirmed from file explorer):
 *
 *    conquer-security/               ← ROOT
 *    ├── assets/
 *    ├── blog/
 *    ├── facility-management/        ← 1 level deep
 *    │   ├── bouncers.php
 *    │   ├── drivers.php
 *    │   ├── fire-safety.php
 *    │   ├── garden-maintenance.php
 *    │   ├── helpers.php
 *    │   ├── housekeeping.php
 *    │   ├── office-boy.php
 *    │   └── receptionist.php
 *    ├── includes/
 *    ├── industries/                 ← 1 level deep
 *    │   ├── banks.php
 *    │   ├── construction.php
 *    │   ├── corporate-security.php
 *    │   ├── event-management.php
 *    │   ├── healthcare.php
 *    │   ├── industrial.php
 *    │   ├── offices.php
 *    │   ├── residential.php
 *    │   ├── retail.php
 *    │   ├── schools-colleges.php
 *    │   └── warehouses-logistics.php
 *    ├── locations/
 *    ├── security-guard-services/    ← 1 level deep
 *    ├── services/                   ← 1 level deep
 *    ├── technology&support/         ← 1 level deep
 *    │   ├── access-control-management.php
 *    │   ├── cctv-monitoring.php
 *    │   ├── emergency-response-team.php
 *    │   ├── patrolling-quick-response-team.php
 *    │   ├── security-audit-risk-assessment.php
 *    │   └── visitor-management.php
 *    ├── about.php                   ← ROOT file
 *    ├── blog.php                    ← ROOT file
 *    ├── contact.php                 ← ROOT file
 *    ├── csr.php                     ← ROOT file
 *    ├── index.php                   ← ROOT file
 *    ├── industries.php              ← ROOT file
 *    ├── security-guards-services.php ← ROOT file
 *    └── services.php                ← ROOT file
 *
 *  ── $base_path cheat sheet ──────────────────────────────────
 *  Root files (index, about, services, industries, contact, etc.)
 *      → $base_path = "";
 *      → include 'includes/header.php';
 *
 *  Files 1 level deep (facility-management/, industries/,
 *  technology&support/, security-guard-services/, services/, etc.)
 *      → $base_path = "../";
 *      → include '../includes/header.php';
 * ============================================================
 */

if (!isset($page_title))       $page_title = "Conquer Services — Security & Facility Management Delhi NCR";
if (!isset($page_description)) $page_description = "Professional security guard and facility management services across Delhi NCR. Trained, verified staff for offices, industries, and residential spaces.";
if (!isset($active_page))      $active_page = "";
if (!isset($base_path))        $base_path = "";

function navClass($key, $active) {
  if ($key === $active) {
    return "nav-link text-sm font-semibold text-brand-yellow whitespace-nowrap";
  }
  return "nav-link text-sm font-medium text-gray-300 hover:text-white transition-colors whitespace-nowrap";
}
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>" />
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <link rel="icon" type="image/png" href="<?php echo $base_path; ?>assets/images/fav-logo.png" />

  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              yellow: '#F2CF4A',
              dark:   '#0A0A0A',
              gray:   '#1A1A1A',
              mid:    '#2B2B2B',
              light:  '#F5F4F0',
              muted:  '#8A8A8A',
            }
          },
          fontFamily: {
            display: ['Plus Jakarta Sans', 'sans-serif'],
            body:    ['Plus Jakarta Sans', 'sans-serif'],
          },
          letterSpacing: { widest2: '0.25em' }
        }
      }
    }
  </script>

  <style>
    html { scroll-behavior: smooth; }
    body { font-family: 'Plus Jakarta Sans', sans-serif; background: #FFFFFF; color: #0A0A0A; }

    .fade-up { opacity: 0; transform: translateY(32px); transition: opacity 0.7s ease, transform 0.7s ease; }
    .fade-up.visible { opacity: 1; transform: translateY(0); }

    .nav-link { position: relative; }
    .nav-link::after { content: ''; display: block; height: 2px; background: #F2CF4A; transform: scaleX(0); transform-origin: left; transition: transform 0.3s; }
    .nav-link:hover::after { transform: scaleX(1); }

    .y-divider { width: 56px; height: 3px; background: #F2CF4A; }

    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-track { background: #F1F1F1; }
    ::-webkit-scrollbar-thumb { background: #F2CF4A; border-radius: 4px; }

    .page-hero-overlay { background: linear-gradient(135deg, rgba(10,10,10,0.93) 0%, rgba(10,10,10,0.60) 60%, rgba(242,207,74,0.07) 100%); }

    .hero-slide { position: absolute; inset: 0; opacity: 0; transition: opacity 1.2s ease; overflow: hidden; }
    .hero-slide.active { opacity: 1; }
    .hero-slide img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; object-position: center; }

    .service-card { transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s; }
    .service-card:hover { transform: translateY(-6px); box-shadow: 0 24px 48px rgba(0,0,0,0.10); }

    .input-field { width: 100%; background: #FFFFFF; border: 1px solid #E2E2E2; border-radius: 8px; padding: 12px 16px; color: #0A0A0A; font-size: 14px; transition: border-color 0.3s; outline: none; }
    .input-field::placeholder { color: #9A9A9A; }
    .input-field:focus { border-color: #F2CF4A; box-shadow: 0 0 0 3px rgba(242,207,74,0.15); }

    .input-field-dark { width: 100%; background: #1A1A1A; border: 1px solid rgba(255,255,255,0.12); border-radius: 8px; padding: 12px 16px; color: #F5F4F0; font-size: 14px; transition: border-color 0.3s; outline: none; }
    .input-field-dark::placeholder { color: #8A8A8A; }
    .input-field-dark:focus { border-color: #F2CF4A; box-shadow: 0 0 0 3px rgba(242,207,74,0.10); }
    .input-field-dark option { background: #1A1A1A; }

    .main-header { background: #0A0A0A; }

    .dropdown { position: relative; }
    .dropdown::after {
      content: '';
      position: absolute;
      left: 0; right: 0;
      top: 100%;
      height: 14px;
    }
    .dropdown-menu {
      position: absolute;
      top: calc(100% + 14px);
      left: 50%;
      transform: translateX(-50%) translateY(8px);
      opacity: 0;
      visibility: hidden;
      pointer-events: none;
      transition: opacity 0.2s ease, transform 0.2s ease;
    }
    .dropdown:hover .dropdown-menu,
    .dropdown:focus-within .dropdown-menu {
      opacity: 1;
      visibility: visible;
      pointer-events: auto;
      transform: translateX(-50%) translateY(0);
    }

    #mobile-menu { overflow: hidden; transition: max-height 0.35s ease; }
    .mobile-submenu { overflow: hidden; transition: max-height 0.3s ease; }
  </style>
</head>
<body class="font-body">

<!-- ══════════════════════════════════════════
     HEADER
═══════════════════════════════════════════ -->
<header id="navbar" class="main-header sticky top-0 z-50 border-b border-white/10">
  <div class="max-w-7xl mx-auto px-3 sm:px-5 flex items-center justify-between h-16 sm:h-18 lg:h-20 gap-3 sm:gap-4">

    <!-- Logo -->
    <a href="<?php echo $base_path; ?>index" class="flex-shrink-0 flex items-center -ml-2 sm:-ml-4 lg:-ml-6">
      <img
    src="https://res.cloudinary.com/gg0gqaua/image/upload/v1784805084/navlogo_mspvso.png"
    alt="Conquer Security"
    width="100"
    height="30"
>
    </a>

    <!-- Desktop Nav -->
    <nav class="hidden lg:flex items-center gap-6 xl:gap-8 mx-auto">
      <a href="<?php echo $base_path; ?>" class="<?php echo navClass('home', $active_page); ?>">Home</a>
      <a href="<?php echo $base_path; ?>about" class="<?php echo navClass('about', $active_page); ?>">About Us</a>

      <!-- Services — click goes to services.php, hover shows dropdown -->
      <div class="dropdown">
        <a href="<?php echo $base_path; ?>service" class="<?php echo navClass('service', $active_page); ?> flex items-center gap-1.5">
          Services <i class="fa fa-chevron-down text-[9px] mt-0.5"></i>
        </a>
        <div class="dropdown-menu w-64 bg-white border border-gray-200 rounded-lg shadow-2xl py-2 z-50">
          <a href="<?php echo $base_path; ?>security-guards-services" class="block px-5 py-3 text-sm text-gray-600 hover:text-brand-dark hover:bg-brand-yellow/20 transition-colors">
            <i class="fa fa-shield-alt mr-2 text-brand-dark"></i> Security Guard Services
          </a>
          <a href="<?php echo $base_path; ?>facility-managements" class="block px-5 py-3 text-sm text-gray-600 hover:text-brand-dark hover:bg-brand-yellow/20 transition-colors">
            <i class="fa fa-building mr-2 text-brand-dark"></i> Facility Management
          </a>
          <a href="<?php echo $base_path; ?>manpower-services" class="block px-5 py-3 text-sm text-gray-600 hover:text-brand-dark hover:bg-brand-yellow/20 transition-colors">
            <i class="fa fa-users mr-2 text-brand-dark"></i> Manpower Services
          </a>
          <a href="<?php echo $base_path; ?>technology-support" class="block px-5 py-3 text-sm text-gray-600 hover:text-brand-dark hover:bg-brand-yellow/20 transition-colors">
            <i class="fa fa-video mr-2 text-brand-dark"></i> Technology & Support
          </a>
        </div>
      </div>

      <!-- Industries — click goes to industries.php, hover shows dropdown -->
      <div class="dropdown">
        <a href="<?php echo $base_path; ?>industry" class="<?php echo navClass('industry', $active_page); ?> flex items-center gap-1.5">
          Industries <i class="fa fa-chevron-down text-[9px] mt-0.5"></i>
        </a>
        <div class="dropdown-menu w-64 bg-white border border-gray-200 rounded-lg shadow-2xl py-2 z-50">
          <a href="<?php echo $base_path; ?>industries/offices" class="block px-5 py-3 text-sm text-gray-600 hover:text-brand-dark hover:bg-brand-yellow/20 transition-colors">
            <i class="fa fa-building mr-2 text-brand-dark"></i> Corporate Offices
          </a>
           <a href="<?php echo $base_path; ?>industries/industrial" class="block px-5 py-3 text-sm text-gray-600 hover:text-brand-dark hover:bg-brand-yellow/20 transition-colors">
            <i class="fa fa-industry mr-2 text-brand-dark"></i> Factories & Industrial
          </a>
          <a href="<?php echo $base_path; ?>industries/residential" class="block px-5 py-3 text-sm text-gray-600 hover:text-brand-dark hover:bg-brand-yellow/20 transition-colors">
            <i class="fa fa-home mr-2 text-brand-dark"></i> Residential Societies
          </a>
         <a href="<?php echo $base_path; ?>industries/banks" class="block px-5 py-3 text-sm text-gray-600 hover:text-brand-dark hover:bg-brand-yellow/20 transition-colors">
            <i class="fa fa-university mr-2 text-brand-dark"></i> Banks & ATMs
          </a>
          <a href="<?php echo $base_path; ?>industries/schools-colleges" class="block px-5 py-3 text-sm text-gray-600 hover:text-brand-dark hover:bg-brand-yellow/20 transition-colors">
            <i class="fa fa-graduation-cap mr-2 text-brand-dark"></i> Schools & Colleges
          </a>
          <a href="<?php echo $base_path; ?>industries/hospitals" class="block px-5 py-3 text-sm text-gray-600 hover:text-brand-dark hover:bg-brand-yellow/20 transition-colors">
            <i class="fa fa-hospital mr-2 text-brand-dark"></i> Hospitals
          </a>
          <a href="<?php echo $base_path; ?>industries/warehouses-logistics" class="block px-5 py-3 text-sm text-gray-600 hover:text-brand-dark hover:bg-brand-yellow/20 transition-colors">
            <i class="fa fa-warehouse mr-2 text-brand-dark"></i> Warehouses & Logistics
          </a>
          <a href="<?php echo $base_path; ?>industries/construction" class="block px-5 py-3 text-sm text-gray-600 hover:text-brand-dark hover:bg-brand-yellow/20 transition-colors">
            <i class="fa fa-hard-hat mr-2 text-brand-dark"></i> Construction
          </a>
          <a href="<?php echo $base_path; ?>industries/retail" class="block px-5 py-3 text-sm text-gray-600 hover:text-brand-dark hover:bg-brand-yellow/20 transition-colors">
            <i class="fa fa-shopping-bag mr-2 text-brand-dark"></i> Retail
          </a>
          <a href="<?php echo $base_path; ?>industries/event-management" class="block px-5 py-3 text-sm text-gray-600 hover:text-brand-dark hover:bg-brand-yellow/20 transition-colors">
            <i class="fa fa-calendar-alt mr-2 text-brand-dark"></i> Event Management
          </a>


        </div>
      </div>

      <a href="<?php echo $base_path; ?>csr" class="<?php echo navClass('csr', $active_page); ?>">CSR</a>
      <a href="<?php echo $base_path; ?>blogs" class="<?php echo navClass('blogs', $active_page); ?>">Blog</a>
      <a href="<?php echo $base_path; ?>contact" class="<?php echo navClass('contact', $active_page); ?>">Contact</a>
    </nav>

    <!-- CTA -->
    <div class="hidden lg:flex items-center gap-3 flex-shrink-0">
      <a href="tel:+919430695171" class="flex items-center gap-2 bg-brand-yellow text-brand-dark text-sm font-bold px-5 py-2.5 rounded-md transition-colors whitespace-nowrap">
  <i class="fa fa-phone"></i> Contact Us
</a>
    </div>

    <!-- Mobile toggle -->
    <button id="menu-toggle" type="button" class="lg:hidden text-white p-2 flex-shrink-0" aria-label="Toggle menu" aria-expanded="false">
      <i class="fa fa-bars text-xl" id="menu-icon"></i>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="lg:hidden bg-brand-dark border-t border-white/10" style="max-height:0;">
    <div class="px-4 py-4 space-y-1 max-h-[80vh] overflow-y-auto">
      <a href="<?php echo $base_path; ?>" class="block py-2.5 <?php echo $active_page === 'home' ? 'text-brand-yellow font-bold' : 'text-gray-300 hover:text-white'; ?> border-b border-white/10">Home</a>
      <a href="<?php echo $base_path; ?>about" class="block py-2.5 <?php echo $active_page === 'about' ? 'text-brand-yellow font-bold' : 'text-gray-300 hover:text-white'; ?> border-b border-white/10">About Us</a>

      <!-- Services accordion -->
      <div class="border-b border-white/10">
        <div class="flex items-center justify-between py-2.5">
          <a href="<?php echo $base_path; ?>services" class="<?php echo $active_page === 'services' ? 'text-brand-yellow font-bold' : 'text-gray-300 hover:text-white'; ?>">Services</a>
          <button type="button" onclick="toggleSubmenu('services-submenu', this)" class="text-gray-400 hover:text-white p-2" aria-label="Toggle Services submenu">
            <i class="fa fa-chevron-down text-xs"></i>
          </button>
        </div>
        <div id="services-submenu" class="mobile-submenu" style="max-height:0;">
          <a href="<?php echo $base_path; ?>security-guards-services" class="block py-2.5 text-gray-400 hover:text-white pl-4">
            <i class="fa fa-shield-alt mr-2 text-brand-yellow text-sm"></i> Security Guard Services
          </a>
          <a href="<?php echo $base_path; ?>facility-management/housekeeping" class="block py-2.5 text-gray-400 hover:text-white pl-4">
            <i class="fa fa-building mr-2 text-brand-yellow text-sm"></i> Facility Management
          </a>
          <a href="<?php echo $base_path; ?>services/manpower-services" class="block py-2.5 text-gray-400 hover:text-white pl-4">
            <i class="fa fa-users mr-2 text-brand-yellow text-sm"></i> Manpower Services
          </a>
          <a href="<?php echo $base_path; ?>technology&support/cctv-monitoring" class="block py-2.5 text-gray-400 hover:text-white pl-4">
            <i class="fa fa-video mr-2 text-brand-yellow text-sm"></i> Technology & Support
          </a>
        </div>
      </div>

      <!-- Industries accordion -->
      <div class="border-b border-white/10">
        <div class="flex items-center justify-between py-2.5">
          <a href="<?php echo $base_path; ?>industries" class="<?php echo $active_page === 'industries' ? 'text-brand-yellow font-bold' : 'text-gray-300 hover:text-white'; ?>">Industries</a>
          <button type="button" onclick="toggleSubmenu('industries-submenu', this)" class="text-gray-400 hover:text-white p-2" aria-label="Toggle Industries submenu">
            <i class="fa fa-chevron-down text-xs"></i>
          </button>
        </div>
        <div id="industries-submenu" class="mobile-submenu" style="max-height:0;">
          <a href="<?php echo $base_path; ?>industries/offices" class="block py-2.5 text-gray-400 hover:text-white pl-4">
            <i class="fa fa-building mr-2 text-brand-yellow text-sm"></i> Corporate Offices
          </a>
          <a href="<?php echo $base_path; ?>industries/residential" class="block py-2.5 text-gray-400 hover:text-white pl-4">
            <i class="fa fa-home mr-2 text-brand-yellow text-sm"></i> Residential Societies
          </a>
          <a href="<?php echo $base_path; ?>industries/industrial" class="block py-2.5 text-gray-400 hover:text-white pl-4">
            <i class="fa fa-industry mr-2 text-brand-yellow text-sm"></i> Factories & Industrial
          </a>
          <a href="<?php echo $base_path; ?>industries/healthcare" class="block py-2.5 text-gray-400 hover:text-white pl-4">
            <i class="fa fa-hospital mr-2 text-brand-yellow text-sm"></i> Hospitals
          </a>
          <a href="<?php echo $base_path; ?>industries/banks" class="block py-2.5 text-gray-400 hover:text-white pl-4">
            <i class="fa fa-university mr-2 text-brand-yellow text-sm"></i> Banks & ATMs
          </a>
          <a href="<?php echo $base_path; ?>industries/schools-colleges" class="block py-2.5 text-gray-400 hover:text-white pl-4">
            <i class="fa fa-graduation-cap mr-2 text-brand-yellow text-sm"></i> Schools & Colleges
          </a>
        </div>
      </div>

      <a href="<?php echo $base_path; ?>csr" class="block py-2.5 <?php echo $active_page === 'csr' ? 'text-brand-yellow font-bold' : 'text-gray-300 hover:text-white'; ?> border-b border-white/10">CSR</a>
      <a href="<?php echo $base_path; ?>blogs" class="block py-2.5 <?php echo $active_page === 'blogs' ? 'text-brand-yellow font-bold' : 'text-gray-300 hover:text-white'; ?> border-b border-white/10">Blog</a>
      <a href="<?php echo $base_path; ?>contact" class="block py-2.5 <?php echo $active_page === 'contact' ? 'text-brand-yellow font-bold' : 'text-gray-300 hover:text-white'; ?>">Contact</a>
      <a href="tel:+919430695171" class="flex items-center justify-center gap-2 mt-3 bg-brand-yellow text-brand-dark text-center py-3 rounded-md font-bold uppercase tracking-wider">
  <i class="fa fa-phone"></i> Contact Us
</a>
    </div>
  </div>
</header>

<script>
  // Mobile menu toggle
  (function () {
    const toggle = document.getElementById('menu-toggle');
    const menu   = document.getElementById('mobile-menu');
    const icon   = document.getElementById('menu-icon');
    if (!toggle || !menu) return;
    let isOpen = false;
    toggle.addEventListener('click', function () {
      isOpen = !isOpen;
      menu.style.maxHeight = isOpen ? menu.scrollHeight + 'px' : '0px';
      toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      if (icon) {
        icon.classList.toggle('fa-bars', !isOpen);
        icon.classList.toggle('fa-times', isOpen);
      }
    });
  })();

  // Mobile submenu accordion
  function toggleSubmenu(id, btn) {
    const submenu = document.getElementById(id);
    const icon = btn.querySelector('i');
    const isCurrentlyOpen = submenu.style.maxHeight && submenu.style.maxHeight !== '0px';
    document.querySelectorAll('.mobile-submenu').forEach(el => {
      if (el.id !== id) {
        el.style.maxHeight = '0px';
        const otherIcon = el.previousElementSibling ? el.previousElementSibling.querySelector('button i') : null;
        if (otherIcon) otherIcon.style.transform = 'rotate(0deg)';
      }
    });
    if (isCurrentlyOpen) {
      submenu.style.maxHeight = '0px';
      icon.style.transform = 'rotate(0deg)';
    } else {
      submenu.style.maxHeight = submenu.scrollHeight + 'px';
      icon.style.transform = 'rotate(180deg)';
    }
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenu && mobileMenu.style.maxHeight !== '0px') {
      requestAnimationFrame(() => {
        mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
      });
    }
  }

  // Fade-up scroll animation
  (function () {
    const els = document.querySelectorAll('.fade-up');
    if (!els.length) return;
    const obs = new IntersectionObserver((entries) => {
      entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
    }, { threshold: 0.15 });
    els.forEach(el => obs.observe(el));
  })();
</script>