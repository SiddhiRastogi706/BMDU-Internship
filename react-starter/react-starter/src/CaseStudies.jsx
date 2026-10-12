import React from 'react'

const stats = [
  {
    value: '10M+',
    label: 'Million Reach Delivered',
    accent: '#2563eb',
    iconBg: '#eaf1ff',
    icon: (
      <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#2563eb" strokeWidth="2.4" strokeLinecap="round" strokeLinejoin="round">
        <polyline points="3 17 9 11 13 15 21 6"></polyline>
        <polyline points="15 6 21 6 21 12"></polyline>
      </svg>
    ),
  },
  {
    value: '500+',
    label: 'Campaigns Managed',
    accent: '#0891b2',
    iconBg: '#e3f8fb',
    icon: (
      <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#0891b2" strokeWidth="2.4" strokeLinecap="round" strokeLinejoin="round">
        <path d="M3 11l18-5v12L3 14v-3z"></path>
        <path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"></path>
      </svg>
    ),
  },
  {
    value: '8.4%',
    label: 'Average Engagement Rate',
    accent: '#db2777',
    iconBg: '#fde7f1',
    icon: (
      <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#db2777" strokeWidth="2.4" strokeLinecap="round" strokeLinejoin="round">
        <path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.6l-1-1a5.5 5.5 0 0 0-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 0 0 0-7.8z"></path>
      </svg>
    ),
  },
  {
    value: '200+',
    label: 'Brands Worked With',
    accent: '#d97706',
    iconBg: '#fdf0dc',
    icon: (
      <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#d97706" strokeWidth="2.4" strokeLinecap="round" strokeLinejoin="round">
        <path d="M8 21h8"></path>
        <path d="M12 17v4"></path>
        <path d="M7 4h10v5a5 5 0 0 1-10 0V4z"></path>
        <path d="M7 5H4a2 2 0 0 0 2 4"></path>
        <path d="M17 5h3a2 2 0 0 1-2 4"></path>
      </svg>
    ),
  },
]

export default function SocialGrowthSection() {
  return (
    <section className="sg-section">
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');

        .sg-section {
          background-color: #ffffff;
          padding: 28px 24px;
          font-family: 'Plus Jakarta Sans', sans-serif !important;
        }

        .sg-wrap {
          max-width: 1240px;
          margin: 0 auto;
          display: grid;
          grid-template-columns: 1.15fr 0.85fr;
          gap: 56px;
          align-items: center;
        }

        /* LEFT: CONTENT */
        .sg-content-col {
          text-align: left;
        }

        .sg-badge {
          display: inline-block;
          padding: 6px 18px;
          border-radius: 999px;
          background: #eff6ff;
          color: #2563eb;
          border: 1px solid #bfdbfe;
          font-family: 'Plus Jakarta Sans', sans-serif !important;
          font-size: 12px;
          font-weight: 600;
          letter-spacing: 0.05em;
          margin-bottom: 16px;
          box-shadow: 0 4px 12px rgba(37, 99, 235, 0.08);
        }

        .sg-heading {
          font-family: 'Plus Jakarta Sans', sans-serif !important;
          font-size: 30px !important;
          font-weight: 500 !important;
          color: #0f172a;
          margin: 0 0 20px;
          letter-spacing: -0.01em;
          line-height: 1.3;
        }

        .sg-heading-blue {
          display: block;
          font-family: 'Plus Jakarta Sans', sans-serif !important;
          font-size: 30px !important;
          font-weight: 500 !important;
          background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
        }

        .sg-subtext {
          font-family: 'Plus Jakarta Sans', sans-serif !important;
          font-size: 15px !important;
          font-weight: 400 !important;
          line-height: 1.65;
          color: #64748b;
          margin: 0 0 18px;
        }

        .sg-subtext:last-of-type {
          margin-bottom: 0;
        }

        /* RIGHT: IMAGE */
        .sg-image-col {
          position: relative;
          text-align: right;
          display: flex;
          justify-content: flex-end;
        }

        .sg-image-frame {
          position: relative;
          border-radius: 24px;
          overflow: hidden;
          box-shadow: 0 20px 40px -12px rgba(15, 23, 42, 0.15);
          border: 1px solid #e2e8f0;
          max-width: 560px;
          width: 100%;
        }

        .sg-image-frame img {
          width: 100%;
          height: 420px;
          display: block;
          object-fit: cover;
          transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1), filter 0.5s ease;
        }

        .sg-image-frame:hover img {
          transform: scale(1.06);
          filter: brightness(0.94);
        }

        .sg-image-badge {
          position: absolute;
          bottom: -18px;
          left: -18px;
          background: rgba(255, 255, 255, 0.18);
          backdrop-filter: blur(14px);
          -webkit-backdrop-filter: blur(14px);
          border-radius: 16px;
          padding: 14px 18px;
          box-shadow: 0 12px 24px -8px rgba(15, 23, 42, 0.2);
          border: 1px solid rgba(255, 255, 255, 0.35);
          display: flex;
          align-items: center;
          gap: 10px;
          font-family: 'Plus Jakarta Sans', sans-serif !important;
          transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), background 0.35s ease;
        }

        .sg-image-frame:hover ~ .sg-image-badge,
        .sg-image-col:hover .sg-image-badge {
          transform: translateY(-4px);
          background: rgba(255, 255, 255, 0.28);
        }

        .sg-image-badge-dot {
          width: 10px;
          height: 10px;
          border-radius: 50%;
          background: #60a5fa;
          box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.25);
        }

        .sg-image-badge-text {
          font-family: 'Plus Jakarta Sans', sans-serif !important;
          font-size: 13px;
          font-weight: 600;
          color: #ffffff;
          text-shadow: 0 1px 4px rgba(0, 0, 0, 0.15);
        }

        /* STATS ROW */
        .sg-stats-row {
          max-width: 1240px;
          margin: 48px auto 0;
          display: grid;
          grid-template-columns: repeat(4, 1fr);
          gap: 18px;
        }

        .sg-stat-card {
          --accent: #2563eb;
          position: relative;
          background: #ffffff;
          border: 1px solid var(--accent);
          border-radius: 18px;
          padding: 30px 22px 26px;
          text-align: center;
          overflow: hidden;
          box-shadow: 0 16px 30px -12px color-mix(in srgb, var(--accent) 35%, transparent);
          transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
          cursor: default;
          font-family: 'Plus Jakarta Sans', sans-serif !important;
        }

        .sg-stat-card:hover {
          transform: translateY(-5px);
          box-shadow: 0 20px 36px -10px color-mix(in srgb, var(--accent) 45%, transparent);
        }

        .sg-stat-underline {
          position: absolute;
          top: 0;
          left: 0;
          right: 0;
          height: 4px;
          border-radius: 18px 18px 0 0;
          background: linear-gradient(90deg, var(--accent), color-mix(in srgb, var(--accent) 40%, #ffffff));
          transform: scaleX(1);
          transform-origin: center;
          opacity: 1;
        }

        .sg-stat-icon {
          width: 56px;
          height: 56px;
          border-radius: 16px;
          display: flex;
          align-items: center;
          justify-content: center;
          margin: 0 auto 18px;
          transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .sg-stat-card:hover .sg-stat-icon {
          transform: translateY(-6px) scale(1.08);
        }

        .sg-stat-value {
          font-family: 'Plus Jakarta Sans', sans-serif !important;
          font-size: 24px;
          font-weight: 700;
          color: #0f172a;
          margin-bottom: 6px;
        }

        .sg-stat-label {
          font-family: 'Plus Jakarta Sans', sans-serif !important;
          font-size: 13.5px;
          font-weight: 400;
          color: #64748b;
        }

        @media (max-width: 968px) {
          .sg-section {
            padding: 40px 16px;
          }

          .sg-wrap {
            grid-template-columns: 1fr;
            gap: 40px;
          }

          .sg-content-col {
            text-align: center;
          }

          .sg-image-col {
            justify-content: center;
            text-align: left;
          }

          .sg-image-frame {
            max-width: 300px;
            margin: 0 auto;
          }

          .sg-heading,
          .sg-heading-blue {
            font-size: 24px !important;
          }

          .sg-image-badge {
            left: 12px;
          }

          .sg-stats-row {
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            margin-top: 32px;
          }

          .sg-stat-card {
            padding: 22px 14px 20px;
          }

          .sg-stat-icon {
            width: 46px;
            height: 46px;
            margin-bottom: 12px;
          }

          .sg-stat-value {
            font-size: 20px;
          }
        }
      `}</style>

      <div className="sg-wrap">
        {/* LEFT: CONTENT */}
        <div className="sg-content-col">
          <span className="sg-badge">Social Media Growth</span>
          <h2 className="sg-heading">
            Helping Brands Grow Faster
            <span className="sg-heading-blue">Through Social Media</span>
          </h2>
          <p className="sg-subtext">
            At BMDU, our static website design company expertise extends beyond web development. We combine
            high-performance static website design with proven social media growth strategies that increase your
            brand's reach, engagement, and audience across every major platform your business operates on.
          </p>
          <p className="sg-subtext">
            In our capacity as a full-service digital agency, we provide you with performance-focused social media
            campaigns that complement your static site effectively, thus providing you with consistent web traffic
            and brand recognition to ensure the growth of your customer base on a sustained basis.
          </p>
        </div>

        {/* RIGHT: IMAGE */}
        <div className="sg-image-col">
          <div className="sg-image-frame">
            <img
              src="https://www.webtrainings.in/wp-content/uploads/2024/07/social-media.jpg"
              alt="Team planning social media growth strategy"
            />
          </div>
          <div className="sg-image-badge">
            <span className="sg-image-badge-dot"></span>
            <span className="sg-image-badge-text">Trusted by 100+ brands</span>
          </div>
        </div>
      </div>

      <div className="sg-stats-row">
        {stats.map((s, i) => (
          <div className="sg-stat-card" style={{ '--accent': s.accent }} key={i}>
            <div className="sg-stat-icon" style={{ background: s.iconBg }}>
              {s.icon}
            </div>
            <div className="sg-stat-value">{s.value}</div>
            <div className="sg-stat-label">{s.label}</div>
            <span className="sg-stat-underline"></span>
          </div>
        ))}
      </div>
    </section>
  )
}