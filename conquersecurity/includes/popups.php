<!--
═══════════════════════════════════════════════════════════
  Conquer Services — Global Popup System
  Usage: Add before </body> in every page where needed.

  Which popup fires where:
  ─ Popup 1 (Exit Intent)   → ALL pages (fires on mouse-out to top)
  ─ Popup 2 (Service Page)  → $popup_type = "service"   → fires after 30s
  ─ Popup 3 (Blog Page)     → $popup_type = "blog"      → fires after 20s
  ─ Popup 4 (Location Page) → $popup_type = "location"  → fires after 25s

  How to include:
    Set $popup_type before including this file.
    On service pages:  $popup_type = "service";
    On blog pages:     $popup_type = "blog";
    On location pages: $popup_type = "location"; $popup_location = "Faridabad";
    On other pages:    don't set $popup_type — only exit intent fires.

    Then: <?php include 'includes/popups.php'; ?>
═══════════════════════════════════════════════════════════
-->

<?php
if (!isset($popup_type))     $popup_type     = "";
if (!isset($popup_location)) $popup_location = "Your Area";
if (!isset($base_path))      $base_path      = "";
?>

<style>
/* ─── Shared backdrop & panel ─────────────────────────── */
.cq-popup-backdrop {
  position: fixed; inset: 0;
  background: rgba(10,10,10,0.72);
  backdrop-filter: blur(3px);
  z-index: 9998;
  opacity: 0; pointer-events: none;
  transition: opacity 0.3s ease;
}
.cq-popup-backdrop.open { opacity: 1; pointer-events: all; }

.cq-popup {
  position: fixed;
  z-index: 9999;
  inset: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 16px;
  pointer-events: none;
  opacity: 0;
  transform: translateY(24px) scale(0.97);
  transition: opacity 0.3s ease, transform 0.3s ease;
}
.cq-popup.open { opacity: 1; transform: translateY(0) scale(1); pointer-events: all; }

.cq-popup-panel {
  background: #fff;
  border-radius: 20px;
  width: 100%;
  max-width: 520px;
  max-height: 90vh;
  overflow-y: auto;
  position: relative;
  box-shadow: 0 32px 80px rgba(0,0,0,0.28);
}

/* ─── Close button ─────────────────────────────────────── */
.cq-close {
  position: absolute; top: 14px; right: 14px;
  width: 32px; height: 32px;
  border-radius: 50%;
  background: #f3f4f6;
  border: none; cursor: pointer;
  display: flex; align-items: center; justify-content: center;
  color: #0A0A0A; font-size: 13px;
  transition: background 0.2s;
  z-index: 10;
}
.cq-close:hover { background: #F2CF4A; }

/* ─── Panel header stripe ──────────────────────────────── */
.cq-popup-header {
  background: #0A0A0A;
  border-radius: 20px 20px 0 0;
  padding: 24px 24px 20px;
}
@media(min-width:480px){
  .cq-popup-header { padding: 28px 32px 24px; }
}
.cq-popup-header .cq-tag {
  display: inline-flex; align-items: center; gap: 6px;
  background: rgba(242,207,74,0.18);
  border: 1px solid rgba(242,207,74,0.35);
  color: #F2CF4A;
  font-size: 10px; font-weight: 700;
  letter-spacing: 0.18em; text-transform: uppercase;
  padding: 4px 10px; border-radius: 50px;
  margin-bottom: 12px;
}
.cq-popup-header h3 {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 900; text-transform: uppercase;
  color: #fff; line-height: 1.15;
  font-size: 20px; margin: 0 0 8px;
}
@media(min-width:480px){ .cq-popup-header h3 { font-size: 24px; } }
.cq-popup-header p {
  color: rgba(255,255,255,0.65);
  font-size: 12px; line-height: 1.6; margin: 0;
}
@media(min-width:480px){ .cq-popup-header p { font-size: 13px; } }

/* ─── Panel body ────────────────────────────────────────── */
.cq-popup-body { padding: 20px 20px 24px; }
@media(min-width:480px){ .cq-popup-body { padding: 24px 32px 32px; } }

/* ─── Form fields ───────────────────────────────────────── */
.cq-field { display: flex; flex-direction: column; gap: 5px; }
.cq-field label {
  font-size: 10px; font-weight: 700;
  text-transform: uppercase; letter-spacing: 0.12em;
  color: #6b7280;
}
.cq-field input, .cq-field select {
  width: 100%; background: #f9fafb;
  border: 1.5px solid #e5e7eb;
  border-radius: 8px; padding: 10px 14px;
  font-size: 13px; color: #0A0A0A;
  font-family: 'Plus Jakarta Sans', sans-serif;
  outline: none; transition: border-color 0.25s, box-shadow 0.25s;
}
.cq-field input:focus, .cq-field select:focus {
  border-color: #F2CF4A;
  box-shadow: 0 0 0 3px rgba(242,207,74,0.18);
}
.cq-field input::placeholder { color: #9ca3af; }

/* ─── Grid helper ───────────────────────────────────────── */
.cq-grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
@media(max-width:400px){ .cq-grid-2 { grid-template-columns: 1fr; } }

/* ─── Submit button ─────────────────────────────────────── */
.cq-submit {
  width: 100%; background: #F2CF4A;
  color: #0A0A0A; font-weight: 800;
  font-size: 12px; letter-spacing: 0.12em;
  text-transform: uppercase; border: none;
  border-radius: 8px; padding: 13px 20px;
  cursor: pointer; font-family: 'Plus Jakarta Sans', sans-serif;
  transition: background 0.2s, transform 0.15s;
  display: flex; align-items: center; justify-content: center; gap: 8px;
}
.cq-submit:hover { background: #e8c235; transform: translateY(-1px); }
.cq-submit:active { transform: translateY(0); }
.cq-submit:disabled { opacity: 0.6; cursor: not-allowed; transform: none; }

/* ─── Success message ───────────────────────────────────── */
.cq-success {
  display: none; text-align: center; padding: 8px 0;
}
.cq-success .cq-success-icon {
  width: 52px; height: 52px; border-radius: 50%;
  background: #F2CF4A; margin: 0 auto 14px;
  display: flex; align-items: center; justify-content: center;
  font-size: 22px; color: #0A0A0A;
}
.cq-success h4 {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 800; text-transform: uppercase;
  color: #0A0A0A; font-size: 16px; margin: 0 0 8px;
}
.cq-success p { color: #6b7280; font-size: 13px; margin: 0; }

/* ─── Note line under form ──────────────────────────────── */
.cq-note {
  text-align: center; font-size: 10px;
  color: #9ca3af; margin-top: 10px;
}

/* ─── Mobile scroll lock ─────────────────────────────────── */
body.cq-locked { overflow: hidden; }
</style>


<!-- ══════════════════════════════════════════════════════
     POPUP 1 — EXIT INTENT
════════════════════════════════════════════════════════ -->
<div class="cq-popup-backdrop" id="cq-backdrop-exit" onclick="CQPopup.closeAll()"></div>
<div class="cq-popup" id="cq-popup-exit" role="dialog" aria-modal="true" aria-labelledby="cq-exit-title">
  <div class="cq-popup-panel">
    <button class="cq-close" onclick="CQPopup.close('exit')" aria-label="Close"><i class="fa fa-times"></i></button>
    <div class="cq-popup-header">
      <div class="cq-tag"><i class="fa fa-shield-alt"></i> Free Quote</div>
      <h3 id="cq-exit-title">Leaving Without a<br/>Security Quote?</h3>
      <p>Share your requirement and get a free estimate for security guards or facility staff — no obligation, response within 24 hours.</p>
    </div>
    <div class="cq-popup-body">
      <form id="cq-form-exit" class="space-y-3" onsubmit="CQPopup.submit(event,'exit')">
        <input type="hidden" name="form_type" value="exit_intent_popup" />
        <div class="cq-grid-2">
          <div class="cq-field">
            <label>Name *</label>
            <input type="text" name="name" required placeholder="Your name" />
          </div>
          <div class="cq-field">
            <label>Phone *</label>
            <input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX" />
          </div>
        </div>
        <div class="cq-field">
          <label>Service Required</label>
          <select name="service">
            <option value="">Select service</option>
            <option>Security Guards</option>
            <option>Housekeeping Staff</option>
            <option>Facility Management</option>
            <option>Bouncers</option>
            <option>Drivers / Chauffeurs</option>
            <option>Fire Safety Personnel</option>
            <option>CCTV / Technology</option>
            <option>Multiple Services</option>
          </select>
        </div>
        <div class="cq-field">
          <label>Location</label>
          <select name="location">
            <option value="">Select NCR area</option>
            <option>Delhi</option>
            <option>Noida</option>
            <option>Greater Noida</option>
            <option>Gurgaon</option>
            <option>Faridabad</option>
            <option>Ghaziabad</option>
            <option>Manesar</option>
            <option>Sonipat</option>
            <option>Other NCR Area</option>
          </select>
        </div>
        <button type="submit" class="cq-submit" id="cq-exit-btn">
          <i class="fa fa-paper-plane"></i> Get Free Quote
        </button>
        <p class="cq-note"><i class="fa fa-lock text-[9px] mr-1"></i> 100% free · No obligation · Response within 24 hrs</p>
      </form>
      <div class="cq-success" id="cq-success-exit">
        <div class="cq-success-icon"><i class="fa fa-check"></i></div>
        <h4>Quote Request Sent!</h4>
        <p>Our team will get back to you within 24 hours with a free estimate.</p>
      </div>
    </div>
  </div>
</div>


<!-- ══════════════════════════════════════════════════════
     POPUP 2 — SERVICE PAGE (fires after 30s on service pages)
════════════════════════════════════════════════════════ -->
<?php if ($popup_type === 'service'): ?>
<div class="cq-popup-backdrop" id="cq-backdrop-service" onclick="CQPopup.closeAll()"></div>
<div class="cq-popup" id="cq-popup-service" role="dialog" aria-modal="true" aria-labelledby="cq-service-title">
  <div class="cq-popup-panel">
    <button class="cq-close" onclick="CQPopup.close('service')" aria-label="Close"><i class="fa fa-times"></i></button>
    <div class="cq-popup-header">
      <div class="cq-tag"><i class="fa fa-headset"></i> Free Assessment</div>
      <h3 id="cq-service-title">Need Help Choosing the<br/>Right Security Staff?</h3>
      <p>Get a free recommendation based on your site type, duty hours, and location — our team will match you with the right deployment model.</p>
    </div>
    <div class="cq-popup-body">
      <form id="cq-form-service" class="space-y-3" onsubmit="CQPopup.submit(event,'service')">
        <input type="hidden" name="form_type" value="service_page_popup" />
        <div class="cq-grid-2">
          <div class="cq-field">
            <label>Name *</label>
            <input type="text" name="name" required placeholder="Your name" />
          </div>
          <div class="cq-field">
            <label>Phone *</label>
            <input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX" />
          </div>
        </div>
        <div class="cq-field">
          <label>Site Type</label>
          <select name="site_type">
            <option value="">Select your site</option>
            <option>Corporate Office</option>
            <option>Factory / Industrial Unit</option>
            <option>Residential Society</option>
            <option>Hospital / Healthcare</option>
            <option>School / College</option>
            <option>Mall / Retail</option>
            <option>Warehouse / Logistics</option>
            <option>Construction Site</option>
            <option>Event / Gathering</option>
            <option>Other</option>
          </select>
        </div>
        <div class="cq-field">
          <label>Location</label>
          <select name="location">
            <option value="">Select NCR area</option>
            <option>Delhi</option>
            <option>Noida</option>
            <option>Greater Noida</option>
            <option>Gurgaon</option>
            <option>Faridabad</option>
            <option>Ghaziabad</option>
            <option>Manesar</option>
            <option>Sonipat</option>
            <option>Other NCR Area</option>
          </select>
        </div>
        <button type="submit" class="cq-submit" id="cq-service-btn">
          <i class="fa fa-clipboard-check"></i> Request Free Assessment
        </button>
        <p class="cq-note"><i class="fa fa-lock text-[9px] mr-1"></i> 100% free · No obligation · Response within 24 hrs</p>
      </form>
      <div class="cq-success" id="cq-success-service">
        <div class="cq-success-icon"><i class="fa fa-check"></i></div>
        <h4>Request Received!</h4>
        <p>Our team will contact you shortly with a tailored security staff recommendation.</p>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>


<!-- ══════════════════════════════════════════════════════
     POPUP 3 — BLOG PAGE (fires after 20s on blog pages)
════════════════════════════════════════════════════════ -->
<?php if ($popup_type === 'blog'): ?>
<div class="cq-popup-backdrop" id="cq-backdrop-blog" onclick="CQPopup.closeAll()"></div>
<div class="cq-popup" id="cq-popup-blog" role="dialog" aria-modal="true" aria-labelledby="cq-blog-title">
  <div class="cq-popup-panel">
    <button class="cq-close" onclick="CQPopup.close('blog')" aria-label="Close"><i class="fa fa-times"></i></button>
    <div class="cq-popup-header">
      <div class="cq-tag"><i class="fa fa-download"></i> Free Download</div>
      <h3 id="cq-blog-title">Download Free<br/>Security Checklist</h3>
      <p>Use this checklist to review your office, society, factory, warehouse, or commercial site security — identify gaps and fix them before they become incidents.</p>
    </div>
    <div class="cq-popup-body">
      <!-- Checklist covers -->
      <div class="grid grid-cols-3 gap-2 mb-4">
        <?php
        $covers = ['Office', 'Society', 'Factory', 'Warehouse', 'Mall', 'Hospital'];
        foreach ($covers as $c):
        ?>
        <div class="bg-gray-50 border border-gray-200 rounded-lg px-3 py-2 text-center">
          <span class="text-brand-dark text-[10px] font-bold uppercase"><?php echo $c; ?></span>
        </div>
        <?php endforeach; ?>
      </div>
      <form id="cq-form-blog" class="space-y-3" onsubmit="CQPopup.submit(event,'blog')">
        <input type="hidden" name="form_type" value="blog_checklist_popup" />
        <div class="cq-grid-2">
          <div class="cq-field">
            <label>Name *</label>
            <input type="text" name="name" required placeholder="Your name" />
          </div>
          <div class="cq-field">
            <label>Phone *</label>
            <input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX" />
          </div>
        </div>
        <div class="cq-field">
          <label>Email *</label>
          <input type="email" name="email" required placeholder="you@company.com" />
        </div>
        <button type="submit" class="cq-submit" id="cq-blog-btn">
          <i class="fa fa-download"></i> Download Free Checklist
        </button>
        <p class="cq-note"><i class="fa fa-lock text-[9px] mr-1"></i> Free download · No spam · Unsubscribe anytime</p>
      </form>
      <div class="cq-success" id="cq-success-blog">
        <div class="cq-success-icon"><i class="fa fa-check"></i></div>
        <h4>Checklist on Its Way!</h4>
        <p>Check your email — we've sent you the free security checklist. Our team may also reach out to help with your site's specific needs.</p>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>


<!-- ══════════════════════════════════════════════════════
     POPUP 4 — LOCATION PAGE (fires after 25s on location pages)
════════════════════════════════════════════════════════ -->
<?php if ($popup_type === 'location'): ?>
<div class="cq-popup-backdrop" id="cq-backdrop-location" onclick="CQPopup.closeAll()"></div>
<div class="cq-popup" id="cq-popup-location" role="dialog" aria-modal="true" aria-labelledby="cq-location-title">
  <div class="cq-popup-panel">
    <button class="cq-close" onclick="CQPopup.close('location')" aria-label="Close"><i class="fa fa-times"></i></button>
    <div class="cq-popup-header">
      <div class="cq-tag"><i class="fa fa-map-marker-alt"></i> <?php echo htmlspecialchars($popup_location); ?></div>
      <h3 id="cq-location-title">Need Security Guards<br/>in <?php echo htmlspecialchars($popup_location); ?>?</h3>
      <p>Get quick deployment support in <?php echo htmlspecialchars($popup_location); ?>. Our team will call you back within a few hours and arrange a free site visit.</p>
    </div>
    <div class="cq-popup-body">
      <form id="cq-form-location" class="space-y-3" onsubmit="CQPopup.submit(event,'location')">
        <input type="hidden" name="form_type" value="location_page_popup" />
        <input type="hidden" name="popup_location" value="<?php echo htmlspecialchars($popup_location); ?>" />
        <div class="cq-grid-2">
          <div class="cq-field">
            <label>Name *</label>
            <input type="text" name="name" required placeholder="Your name" />
          </div>
          <div class="cq-field">
            <label>Phone *</label>
            <input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX" />
          </div>
        </div>
        <div class="cq-field">
          <label>Service Needed</label>
          <select name="service">
            <option value="">Select service</option>
            <option>Security Guards</option>
            <option>Housekeeping Staff</option>
            <option>Facility Management</option>
            <option>Bouncers</option>
            <option>Drivers / Chauffeurs</option>
            <option>Fire Safety Personnel</option>
            <option>Multiple Services</option>
          </select>
        </div>
        <button type="submit" class="cq-submit" id="cq-location-btn">
          <i class="fa fa-phone"></i> Request Callback
        </button>
        <p class="cq-note"><i class="fa fa-clock text-[9px] mr-1"></i> We'll call back within a few hours · No spam</p>
      </form>
      <div class="cq-success" id="cq-success-location">
        <div class="cq-success-icon"><i class="fa fa-check"></i></div>
        <h4>Callback Requested!</h4>
        <p>Our <?php echo htmlspecialchars($popup_location); ?> team will call you back shortly to discuss your requirement.</p>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>


<script>
const CQPopup = (function () {

  // ── Helpers ───────────────────────────────────────────
  const SESSION_KEY = 'cq_popup_shown';
  const shownTypes  = new Set(
    (sessionStorage.getItem(SESSION_KEY) || '').split(',').filter(Boolean)
  );

  function markShown(type) {
    shownTypes.add(type);
    sessionStorage.setItem(SESSION_KEY, [...shownTypes].join(','));
  }

  function wasShown(type) { return shownTypes.has(type); }

  function open(type) {
    if (wasShown(type)) return;
    const backdrop = document.getElementById('cq-backdrop-' + type);
    const popup    = document.getElementById('cq-popup-'    + type);
    if (!backdrop || !popup) return;

    // Close any other open popup first
    closeAll();

    backdrop.classList.add('open');
    popup.classList.add('open');
    document.body.classList.add('cq-locked');
    markShown(type);

    // Focus first input for accessibility
    const first = popup.querySelector('input,select');
    if (first) setTimeout(() => first.focus(), 320);
  }

  function close(type) {
    const backdrop = document.getElementById('cq-backdrop-' + type);
    const popup    = document.getElementById('cq-popup-'    + type);
    if (backdrop) backdrop.classList.remove('open');
    if (popup)    popup.classList.remove('open');
    document.body.classList.remove('cq-locked');
  }

  function closeAll() {
    ['exit','service','blog','location'].forEach(t => close(t));
  }

  // ── Form submit ───────────────────────────────────────
  async function submit(e, type) {
    e.preventDefault();
    const form    = document.getElementById('cq-form-' + type);
    const btn     = document.getElementById('cq-' + type + '-btn');
    const success = document.getElementById('cq-success-' + type);
    if (!form || !btn) return;

    const origHTML = btn.innerHTML;
    btn.disabled  = true;
    btn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Sending…';

    try {
      const data = new FormData(form);
      await fetch('<?php echo $base_path; ?>includes/contact.php', {
        method: 'POST', body: data
      });
      // Show success regardless of server response
      form.style.display = 'none';
      if (success) success.style.display = 'block';
      // Auto-close after 3s
      setTimeout(() => close(type), 3000);
    } catch (_) {
      btn.disabled  = false;
      btn.innerHTML = origHTML;
    }
  }

  // ── Triggers ──────────────────────────────────────────

  // 1. EXIT INTENT — mouse leaves viewport top edge (desktop)
  let exitBound = false;
  function setupExitIntent() {
    if (exitBound) return;
    exitBound = true;
    document.addEventListener('mouseleave', function handler(e) {
      if (e.clientY > 0) return;
      if (wasShown('exit')) { document.removeEventListener('mouseleave', handler); return; }
      open('exit');
      document.removeEventListener('mouseleave', handler);
    });
    // Mobile fallback — back button / page hide
    window.addEventListener('pagehide', function () {
      // On mobile we don't pop on pagehide (too intrusive); skip.
    });
  }

  // 2. TIMED POPUPS — fire after delay if not shown
  function setupTimed(type, delayMs) {
    if (wasShown(type)) return;
    setTimeout(() => open(type), delayMs);
  }

  // ── Keyboard: Escape closes all ───────────────────────
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeAll();
  });

  // ── Init ──────────────────────────────────────────────
  function init() {
    setupExitIntent();

    <?php if ($popup_type === 'service'): ?>
    setupTimed('service', 30000);
    <?php elseif ($popup_type === 'blog'): ?>
    setupTimed('blog', 20000);
    <?php elseif ($popup_type === 'location'): ?>
    setupTimed('location', 25000);
    <?php endif; ?>
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

  return { open, close, closeAll, submit };

})();
</script>