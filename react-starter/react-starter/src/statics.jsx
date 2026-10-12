import React from 'react';

export default function StaticWebsiteSection() {
  return (
    <>
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap');

        .sws-page-wrapper {
          max-width: 1250px;
          width: 100%;
          margin: 20px auto;
          display: flex;
          flex-direction: column;
          gap: 24px;
          font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .sws-web-solutions-section {
          background: linear-gradient(135deg, #f0f4ff 0%, #ffffff 100%);
          border: 1px solid #e2e8f0;
          border-radius: 28px;
          padding: 45px 35px;
          width: 100%;
          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
          position: relative;
          overflow: hidden;
          display: flex;
          flex-direction: column;
          gap: 35px;
        }

        /* Large Watermark 'O' positioned at top-right of main box, half visible */
        .sws-web-solutions-section::after {
          content: "O";
          position: absolute;
          right: -70px;
          top: -90px;
          font-size: 380px;
          font-weight: 700;
          color: rgba(37, 99, 235, 0.06);
          z-index: 1;
          pointer-events: none;
          line-height: 1;
        }

        .sws-web-solutions-section::before {
          content: "";
          position: absolute;
          top: 0;
          right: 0;
          width: 250px;
          height: 250px;
          background-image: radial-gradient(#cbd5e1 1px, transparent 1px);
          background-size: 16px 16px;
          opacity: 0.4;
          z-index: 1;
        }

        .sws-container {
          display: grid;
          grid-template-columns: 1.2fr 1fr;
          gap: 40px;
          align-items: center;
          position: relative;
          z-index: 2;
        }

        .sws-badge {
          display: inline-flex;
          align-items: center;
          background-color: #ebf3ff;
          color: #2563eb;
          font-size: 13px;
          font-weight: 600;
          padding: 6px 14px;
          border-radius: 50px;
          margin-bottom: 18px;
        }

        .sws-dot {
          width: 7px;
          height: 7px;
          background-color: #2563eb;
          border-radius: 50%;
          margin-right: 7px;
        }

        .sws-heading {
          font-size: 26px;
          font-weight: 400;
          line-height: 1.3;
          color: #0f172a;
          margin-bottom: 16px;
          letter-spacing: -0.3px;
        }

        .sws-paragraph {
          font-size: 15px;
          line-height: 1.6;
          color: #64748b;
          max-width: 520px;
          font-weight: 400;
        }

        .sws-features-column {
          display: flex;
          flex-direction: column;
          gap: 12px;
        }

        .sws-feature-card {
          background: #ffffff;
          border: 1px solid #e2e8f0;
          border-radius: 14px;
          padding: 14px 20px;
          display: flex;
          align-items: center;
          gap: 16px;
          box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
          transition: all 0.3s ease;
        }

        .sws-feature-card:hover {
          border-color: #93c5fd;
          box-shadow: 0 6px 16px rgba(37, 99, 235, 0.06);
          transform: translateY(-2px);
        }

        .sws-icon-box {
          width: 40px;
          height: 40px;
          background-color: #ebf3ff;
          color: #2563eb;
          border-radius: 10px;
          display: flex;
          justify-content: center;
          align-items: center;
          font-size: 17px;
          flex-shrink: 0;
          z-index: 3;
          position: relative;
        }

        .sws-icon-box svg {
          width: 18px;
          height: 18px;
          stroke: currentColor;
          fill: none;
          stroke-width: 1.8;
          stroke-linecap: round;
          stroke-linejoin: round;
        }

        .sws-feature-title {
          font-size: 16px;
          font-weight: 600;
          color: #1e293b;
        }

        /* CTA Banner Styles - Inside Main Box with lighter overlay and left watermark */
        .sws-banner-section {
          background-color: #0b1329;
          border-radius: 20px;
          height: 220px;
          width: 100%;
          position: relative;
          overflow: hidden;
          display: flex;
          align-items: center;
          box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
          z-index: 2;
        }

        /* Watermark inside CTA banner on the left side */
        .sws-banner-section::before {
          content: "BMDU";
          position: absolute;
          left: -20px;
          bottom: -30px;
          font-size: 140px;
          font-weight: 700;
          color: rgba(255, 255, 255, 0.03);
          z-index: 1;
          pointer-events: none;
          line-height: 1;
          letter-spacing: -2px;
        }

        .sws-banner-section::after {
          content: "";
          position: absolute;
          right: 0;
          top: 0;
          width: 65%;
          height: 100%;
          background: linear-gradient(270deg, rgba(11, 19, 41, 0.1) 0%, rgba(11, 19, 41, 0.8) 85%),
                      url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1000&q=80') center/cover no-repeat;
          z-index: 1;
        }

        .sws-banner-container {
          position: relative;
          z-index: 3;
          display: flex;
          justify-content: space-between;
          align-items: center;
          width: 100%;
          padding: 0 35px;
        }

        .sws-banner-content {
          max-width: 500px;
        }

        .sws-banner-badge {
          display: inline-flex;
          align-items: center;
          gap: 8px;
          color: #60a5fa;
          font-size: 11px;
          font-weight: 600;
          text-transform: uppercase;
          letter-spacing: 1px;
          margin-bottom: 6px;
        }

        .sws-banner-badge::before {
          content: "";
          display: inline-block;
          width: 15px;
          height: 2px;
          background-color: #3b82f6;
        }

        .sws-banner-title {
          font-size: 20px;
          font-weight: 700;
          color: #ffffff;
          line-height: 1.25;
          margin-bottom: 8px;
          letter-spacing: -0.3px;
        }

        .sws-banner-desc {
          font-size: 12px;
          color: #94a3b8;
          line-height: 1.4;
          margin-bottom: 14px;
          font-weight: 400;
        }

        .sws-banner-buttons {
          display: flex;
          gap: 14px;
          align-items: center;
        }

        .sws-btn-primary {
          background: linear-gradient(90deg, #2563eb 0%, #3b82f6 100%);
          color: #ffffff;
          font-size: 12px;
          font-weight: 600;
          padding: 8px 16px;
          border-radius: 50px;
          border: none;
          cursor: pointer;
          transition: all 0.3s ease;
          box-shadow: 0 4px 15px rgba(37, 99, 235, 0.4);
        }

        .sws-btn-primary:hover {
          transform: translateY(-2px);
          box-shadow: 0 6px 20px rgba(37, 99, 235, 0.6);
        }

        .sws-btn-link {
          background: transparent;
          color: #ffffff;
          font-size: 13px;
          font-weight: 600;
          border: none;
          cursor: pointer;
          transition: all 0.3s ease;
          display: inline-flex;
          align-items: center;
        }

        .sws-btn-link:hover {
          color: #60a5fa;
          transform: translateX(3px);
        }

        .sws-floating-pill {
          position: absolute;
          bottom: 15px;
          right: 30px;
          z-index: 4;
          background: rgba(15, 23, 42, 0.75);
          backdrop-filter: blur(12px);
          border: 1px solid rgba(255, 255, 255, 0.1);
          padding: 5px 12px;
          border-radius: 50px;
          display: flex;
          align-items: center;
          gap: 6px;
          color: #ffffff;
          font-size: 11px;
          font-weight: 500;
        }

        .sws-pill-dot {
          width: 6px;
          height: 6px;
          background-color: #3b82f6;
          border-radius: 50%;
          box-shadow: 0 0 8px #3b82f6;
        }

        @media (max-width: 968px) {
          .sws-web-solutions-section {
            padding: 30px 20px;
          }
          .sws-container {
            grid-template-columns: 1fr;
            gap: 30px;
          }
          .sws-banner-section {
            height: auto;
            padding: 30px 20px;
          }
          .sws-banner-section::after {
            opacity: 0.3;
            width: 100%;
          }
          .sws-banner-container {
            padding: 0;
          }
          .sws-banner-buttons {
            flex-direction: column;
            align-items: flex-start;
          }
          .sws-floating-pill {
            display: none;
          }
        }
      `}</style>

      <div className="sws-page-wrapper">
        {/* Main Wrapper Box Containing Both Sections */}
        <section className="sws-web-solutions-section">
          <div className="sws-container">
            {/* Left Column: Badge, 2-line Heading, Paragraph only */}
            <div className="sws-content-column">
              <div className="sws-badge">
                <span className="sws-dot"></span> Static Website Design 
              </div>
              <h2 className="sws-heading">
                Static Website Design Built <br />
                for performance and Impact
              </h2>
              <p className="sws-paragraph">
                BMDU is a trustworthy static web design company in India, specializing in creating top-quality, fast-loading, and visually appealing static websites using high-quality code, mobile-responsive designs, and SEO-driven architecture to ensure greater visibility and a superior user experience for your audience.
              </p>
            </div>

            {/* Right Column: Feature Cards */}
            <div className="sws-features-column">
              <div className="sws-feature-card">
                <div className="sws-icon-box">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M8 8L4 12L8 16M16 8L20 12L16 16M14 4L10 20" />
                  </svg>
                </div>
                <span className="sws-feature-title">Static Website Development</span>
              </div>

              <div className="sws-feature-card">
                <div className="sws-icon-box">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12 3L3 7L12 11L21 7L12 3Z" />
                    <path d="M3 12L12 16L21 12" />
                    <path d="M3 17L12 21L21 17" />
                  </svg>
                </div>
                <span className="sws-feature-title">Modern Static Websites</span>
              </div>

              <div className="sws-feature-card">
                <div className="sws-icon-box">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M4 15L10 9L14 13L20 7" />
                    <path d="M20 7H15M20 7V12" />
                    <path d="M4 20H20" />
                  </svg>
                </div>
                <span className="sws-feature-title">Fast, SEO-Friendly</span>
              </div>
            </div>
          </div>

          {/* Bottom CTA Banner Section Placed Inside the Main Box */}
          <div className="sws-banner-section">
            <div className="sws-banner-container">
              <div className="sws-banner-content">
                <div className="sws-banner-badge">Your Vision, Built Better</div>
                <h2 className="sws-banner-title">Have a Website Idea? Let’s Turn It Into a High-Performance Experience.</h2>
                <p className="sws-banner-desc">
                  Bring us your goals and our design and development team will shape them into a responsive, conversion-focused custom website.
                </p>
                <div className="sws-banner-buttons">
                  <button className="sws-btn-primary">Get Free Consultation</button>
                  <button className="sws-btn-link">Explore Our Services →</button>
                </div>
              </div>
            </div>

            <div className="sws-floating-pill">
              <span className="sws-pill-dot"></span>
              <span>Strategy • Design • Development</span>
            </div>
          </div>
        </section>
      </div>
    </>
  );
}