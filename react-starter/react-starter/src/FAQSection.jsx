import React, { useState } from 'react'

const faqs = [
  {
    q: 'What is the difference between a static website and a dynamic website?',
    a: 'With the static website, the user gets ready-made HTML pages right from the server; there is absolutely no server-side processing involved or the use of databases to render anything dynamically on the web page. Static websites are more secure, efficient, and easier to maintain than their counterparts. At BMDU, we specialize in designing static websites and would like to recommend the same for your business website needs.'
  },
  {
    q: 'How long does it take to design and launch a static website?',
    a: "A standard static web design services project by BMDU is estimated to last from three to six weeks, based on the project's scale, the number of pages, and design complexity. A comprehensive project plan, including key milestones in the project, will be offered to you during the initial proposal phase to ensure maximum transparency from the start."
  },
  {
    q: 'Are static websites good for SEO?',
    a: 'Absolutely. Static webpages are some of the most SEO-friendly types of website architectures, characterized by swift loading speeds, clean coding, and reliable performance, all elements that are always appreciated by search engine algorithms. As a firm specializing in static website development in India, we create each one of our web pages according to industry-leading SEO practices, from optimized meta data and structured data to responsive design and Core Web Vitals.'
  },
  {
    q: 'Do you provide custom design or use pre-built templates?',
    a: 'Every website BMDU creates is fully custom-designed from scratch — tailored specifically to your brand identity, audience, and business objectives. As a dedicated static web page design specialist, we never use generic templates or off-the-shelf layouts. Every design element, layout decision, and user experience detail is purposefully crafted to reflect your unique brand and deliver the best possible results for your specific online goals.'
  },
  {
    q: "Can a static website be updated after it's launched?",
    a: "Yes. While static websites don't rely on databases, content updates like text, images, and new pages can still be made directly in the code by our team. For businesses needing frequent, self-managed updates, we can also recommend a lightweight CMS layer without compromising the site's speed and security advantages."
  },
  {
    q: 'What is the cost of building a static website with BMDU?',
    a: 'Cost depends on the number of pages, design complexity, and any custom functionality like forms or animations. Static websites are generally more budget-friendly than dynamic sites since they don\'t require database infrastructure, and BMDU provides a clear cost estimate during the proposal stage.'
  },
  {
    q: 'Is a static website secure?',
    a: 'Yes, static websites are inherently more secure than dynamic ones since there\'s no database or server-side processing that hackers can exploit through common vulnerabilities like SQL injection. This makes static websites a strong choice for businesses prioritizing a low-risk, stable online presence.'
  },
  {
    q: 'Will my static website work well on mobile devices?',
    a: 'Every static website we build is fully responsive, meaning it automatically adapts to different screen sizes across phones, tablets, and desktops. We test each site across major devices and browsers before launch to ensure consistent performance and visual quality everywhere.'
  },
  {
    q: 'What industries is a static website best suited for?',
    a: 'Static websites work well for businesses like consultancies, portfolios, agencies, restaurants, and service providers that need a fast, reliable online presence without frequent content changes or e-commerce functionality. For businesses needing regular updates or online transactions, we typically recommend a dynamic website instead.'
  },
  {
    q: 'Does BMDU provide hosting and maintenance for static websites?',
    a: 'Yes. We offer hosting setup along with ongoing maintenance covering uptime monitoring, security updates, and minor content changes as needed. This ensures your static website stays fast, secure, and online without you having to manage the technical side yourself.'
  },
]

export default function FAQSection() {
  const [openIndex, setOpenIndex] = useState(null)

  const open = (i) => {
    setOpenIndex(i)
  }

  const close = (i) => {
    setOpenIndex((prev) => (prev === i ? null : prev))
  }

  return (
    <section className="faq-section">
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');

        .faq-section {
          background: radial-gradient(circle at top center, rgba(11, 95, 255, 0.05) 0%, rgba(255, 255, 255, 0) 60%), #f8fafc;
          padding: 36px 24px 48px;
          font-family: 'Plus Jakarta Sans', sans-serif;
          position: relative;
          overflow: hidden;
        }

        /* Subtle Left Watermark Graphic */
        .faq-section::before {
          content: '';
          position: absolute;
          top: -100px;
          left: -120px;
          width: 450px;
          height: 600px;
          background: linear-gradient(135deg, rgba(11, 95, 255, 0.08) 0%, rgba(59, 130, 246, 0.02) 100%);
          border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%;
          transform: rotate(-15deg);
          pointer-events: none;
          z-index: 0;
          filter: blur(20px);
        }

        .faq-wrap {
          max-width: 1240px;
          margin: 0 auto;
          position: relative;
          z-index: 1;
        }

        .faq-header-wrap {
          text-align: center;
          max-width: 680px;
          margin: 0 auto 32px;
        }

        .faq-badge {
          display: inline-flex;
          align-items: center;
          gap: 6px;
          padding: 5px 14px;
          border-radius: 999px;
          background: rgba(11, 95, 255, 0.08);
          border: 1px solid rgba(11, 95, 255, 0.15);
          color: #0b5fff;
          font-size: 11.5px;
          font-weight: 700;
          letter-spacing: 0.06em;
          margin-bottom: 10px;
        }

        .faq-heading {
          font-family: 'Plus Jakarta Sans', sans-serif;
          font-size: 30px;
          font-weight: 800;
          margin: 0 0 8px;
          letter-spacing: -0.02em;
          background: linear-gradient(90deg, #101c3d 0%, #1e40af 60%, #2563eb 100%);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
        }

        .faq-subtext {
          font-size: 14px;
          color: #64748b;
          margin: 0;
          line-height: 1.5;
        }

        .faq-grid {
          display: grid;
          grid-template-columns: 1.2fr 1fr;
          gap: 36px;
          align-items: start;
        }

        /* Left Side: Scrollable Accordion List matching the height of the right card */
        .faq-list {
          display: flex;
          flex-direction: column;
          gap: 12px;
          max-height: 720px;
          overflow-y: auto;
          padding-right: 12px;
        }

        .faq-list::-webkit-scrollbar {
          width: 6px;
        }
        .faq-list::-webkit-scrollbar-track {
          background: #f1f5f9;
          border-radius: 10px;
        }
        .faq-list::-webkit-scrollbar-thumb {
          background: #cbd5e1;
          border-radius: 10px;
        }
        .faq-list::-webkit-scrollbar-thumb:hover {
          background: #94a3b8;
        }

        .faq-item {
          background: #ffffff;
          border: 1.5px solid #e2e8f0;
          border-radius: 14px;
          overflow: hidden;
          transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .faq-item:hover {
          border-color: #cbd5e1;
        }

        .faq-item.open {
          border-color: #0b5fff;
          box-shadow: 0 10px 25px rgba(11, 95, 255, 0.05);
        }

        .faq-item-header {
          display: flex;
          align-items: center;
          justify-content: space-between;
          gap: 16px;
          padding: 16px 20px;
          cursor: pointer;
          user-select: none;
        }

        .faq-question {
          font-family: 'Plus Jakarta Sans', sans-serif;
          font-size: 15px;
          font-weight: 700;
          color: #0f172a;
          margin: 0;
          transition: color 0.2s ease;
        }

        .faq-item.open .faq-question {
          color: #0b5fff;
        }

        .faq-toggle-icon {
          flex-shrink: 0;
          width: 28px;
          height: 28px;
          border-radius: 50%;
          background: #f1f5f9;
          display: flex;
          align-items: center;
          justify-content: center;
          color: #64748b;
          transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .faq-item.open .faq-toggle-icon {
          transform: rotate(135deg);
          background: #0b5fff;
          color: #ffffff;
        }

        .faq-answer-wrap {
          display: grid;
          grid-template-rows: 0fr;
          transition: grid-template-rows 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .faq-item.open .faq-answer-wrap {
          grid-template-rows: 1fr;
        }

        .faq-answer-inner {
          overflow: hidden;
        }

        .faq-answer {
          font-family: 'Plus Jakarta Sans', sans-serif;
          font-size: 13.5px;
          line-height: 1.6;
          color: #475569;
          padding: 0 20px 18px 20px;
          margin: 0;
        }

        /* Right Side Promo Card styled taller and spacious like the reference screenshot */
        .faq-promo-card {
          background: linear-gradient(135deg, #07111e 0%, #0e1f3d 50%, #17336b 100%);
          border: 1px solid rgba(255, 255, 255, 0.12);
          border-radius: 24px;
          padding: 44px 36px;
          box-shadow: 0 25px 50px -12px rgba(7, 17, 30, 0.4);
          position: sticky;
          top: 20px;
          color: #ffffff;
          overflow: hidden;
          display: flex;
          flex-direction: column;
          justify-content: space-between;
          min-height: 650px;
          box-sizing: border-box;
        }

        .faq-promo-card::after {
          content: '?';
          position: absolute;
          right: -10px;
          bottom: -30px;
          font-size: 260px;
          font-weight: 800;
          color: rgba(255, 255, 255, 0.03);
          pointer-events: none;
          line-height: 1;
        }

        .faq-promo-content {
          position: relative;
          z-index: 1;
        }

        .faq-promo-title {
          font-family: 'Plus Jakarta Sans', sans-serif;
          font-size: 30px;
          font-weight: 800;
          color: #ffffff;
          margin: 0 0 20px;
          line-height: 1.25;
          letter-spacing: -0.02em;
        }

        .faq-promo-desc {
          font-size: 15px;
          line-height: 1.7;
          color: #cbd5e1;
          margin: 0 0 20px;
        }

        .faq-promo-desc-secondary {
          font-size: 14.5px;
          line-height: 1.7;
          color: #93c5fd;
          margin: 0;
        }

        .faq-promo-footer-wrap {
          position: relative;
          z-index: 1;
          margin-top: 32px;
        }

        .faq-promo-actions {
          display: flex;
          flex-direction: column;
          gap: 16px;
          margin-bottom: 24px;
        }

        .faq-promo-btn {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          gap: 8px;
          width: 100%;
          padding: 16px 24px;
          border-radius: 14px;
          background: #0b5fff;
          color: #ffffff;
          font-size: 16px;
          font-weight: 700;
          text-decoration: none;
          box-shadow: 0 10px 25px rgba(11, 95, 255, 0.4);
          transition: all 0.25s ease;
          box-sizing: border-box;
        }

        .faq-promo-btn:hover {
          background: #2563eb;
          transform: translateY(-2px);
          box-shadow: 0 14px 28px rgba(11, 95, 255, 0.5);
        }

        .faq-promo-call {
          text-align: center;
          font-size: 15px;
          font-weight: 600;
          color: #e2e8f0;
        }

        .faq-promo-call a {
          color: #60a5fa;
          text-decoration: none;
          font-weight: 700;
        }

        .faq-promo-call a:hover {
          text-decoration: underline;
        }

        .faq-promo-footer {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          padding: 6px 16px;
          border-radius: 999px;
          background: transparent;
          border: 1px solid rgba(255, 255, 255, 0.25);
          font-size: 12px;
          color: #cbd5e1;
          text-align: center;
          font-weight: 600;
          letter-spacing: 0.03em;
          width: fit-content;
          white-space: nowrap;
        }

        .faq-promo-footer-outer {
          padding-top: 18px;
          border-top: 1px solid rgba(255, 255, 255, 0.12);
          display: flex;
          justify-content: center;
          gap: 10px;
          flex-wrap: wrap;
        }

        @media (max-width: 968px) {
          .faq-grid {
            grid-template-columns: 1fr;
          }
          .faq-list {
            max-height: none;
            overflow-y: visible;
            padding-right: 0;
          }
          .faq-promo-card {
            position: static;
            min-height: auto;
          }
        }

        @media (max-width: 560px) {
          .faq-heading {
            font-size: 24px;
          }
          .faq-promo-card {
            padding: 28px 20px;
          }
          .faq-promo-title {
            font-size: 24px;
          }
        }
      `}</style>

      <div className="faq-wrap">
        <div className="faq-header-wrap">
          <span className="faq-badge">Common Question</span>
          <h2 className="faq-heading">Static Website Development FAQ</h2>
          <p className="faq-subtext">Everything you need to know before building your business website with BMDU.</p>
        </div>

        <div className="faq-grid">
          {/* Left Side: Scrollable Accordion List */}
          <div className="faq-list">
            {faqs.map((item, i) => (
              <div
                className={`faq-item ${openIndex === i ? 'open' : ''}`}
                key={i}
                onMouseEnter={() => open(i)}
                onMouseLeave={() => close(i)}
              >
                <div className="faq-item-header">
                  <h4 className="faq-question">{item.q}</h4>
                  <div className="faq-toggle-icon">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round">
                      <line x1="12" y1="5" x2="12" y2="19"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                  </div>
                </div>
                <div className="faq-answer-wrap">
                  <div className="faq-answer-inner">
                    <p className="faq-answer">{item.a}</p>
                  </div>
                </div>
              </div>
            ))}
          </div>

          {/* Right Side: Tall Promotional Banner Card */}
          <div className="faq-promo-card">
            <div className="faq-promo-content">
              <h3 className="faq-promo-title">Ready to Build Your Next Big Project?</h3>
              <p className="faq-promo-desc">
                Stop settling for slow, generic websites that fail to represent your brand or perform on search engines. Partner with BMDU, a trusted static web design company in India, for premium static website designing services that deliver speed, visual impact, SEO performance, and a professional online presence your business deserves.
              </p>
              <p className="faq-promo-desc-secondary">
                As a dedicated static website design company, our team is ready to design, build, and launch your next static website on time, on budget, and built to perform from day one.
              </p>
            </div>

            <div className="faq-promo-footer-wrap">
              <div className="faq-promo-actions">
                <a href="#start" className="faq-promo-btn">
                  Start Your Project &rarr;
                </a>
                <div className="faq-promo-call">
                  Call <a href="tel:+18005550199">+1 (800) 555-0199</a>
                </div>
              </div>

              <div className="faq-promo-footer-outer">
                <span className="faq-promo-footer">100% Secure</span>
                <span className="faq-promo-footer">NDA Available on Request</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}