import React from "react";

export default function WorkingProcess() {
  return (
    <>
      <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
      />
      <style>{`
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif !important;
        }

        .wp-body {
            background-color: #ffffff;
            width: 100%;
            overflow-x: hidden;
            padding: 40px 20px;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            width: 100%;
            display: block; /* Ensure it stays block level */
        }

        /* Header Section Stack Fix */
        .header-section {
            text-align: center;
            max-width: 750px;
            margin: 0 auto 40px auto;
            display: block;
        }

        h2.title {
            font-size: 30px;
            font-weight: 500;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #111827;
            margin-bottom: 12px;
            line-height: 1.3;
        }

        .title-desc {
            font-size: 15px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #4b5563;
            line-height: 1.5;
        }

        /* Bento Grid Layout */
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 20px;
            width: 100%;
            clear: both;
        }

        .bento-card {
            background: #ffffff;
            border-radius: 20px;
            padding: 24px 28px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
            border: 1px solid rgba(0, 0, 0, 0.04);
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Hover Effect Enhancements */
        .bento-card:hover {
            transform: translateY(-8px) scale(1.01);
            box-shadow: 0 24px 48px rgba(0, 0, 0, 0.08);
        }

        /* Icon Watermark Styling */
        .card-watermark {
            position: absolute;
            right: -10px;
            bottom: -20px;
            font-size: 110px;
            line-height: 1;
            z-index: 0;
            pointer-events: none;
            transition: all 0.4s ease;
            opacity: 0.04;
        }

        .bento-card:hover .card-watermark {
            transform: translateY(-10px) scale(1.08) rotate(10deg);
            opacity: 0.08;
        }

        /* Ensure content sits above watermark */
        .card-header-flex, 
        .card-content-area {
            position: relative;
            z-index: 1;
        }

        /* Span configurations for asymmetric Bento look */
        .bento-card.span-7 {
            grid-column: span 7;
        }

        .bento-card.span-5 {
            grid-column: span 5;
        }

        /* Very light color effects on white background */
        .bento-card.theme-1 { 
            background: linear-gradient(135deg, #ffffff 0%, #f0f9ff 100%);
            border-color: rgba(2, 132, 199, 0.12);
        }

        .bento-card.theme-2 { 
            background: linear-gradient(135deg, #ffffff 0%, #faf5ff 100%);
            border-color: rgba(147, 51, 234, 0.12);
        }

        .bento-card.theme-3 { 
            background: linear-gradient(135deg, #ffffff 0%, #f5f3ff 100%);
            border-color: rgba(124, 58, 237, 0.12);
        }

        .bento-card.theme-4 { 
            background: linear-gradient(135deg, #ffffff 0%, #fdf2f8 100%);
            border-color: rgba(219, 39, 119, 0.12);
        }

        .card-header-flex {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 16px;
        }

        .step-number {
            font-size: 16px;
            font-weight: 800;
            font-family: 'Plus Jakarta Sans', sans-serif;
            padding: 6px 14px;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 6px rgba(0,0,0,0.03);
        }

        .theme-1 .step-number { color: #0284c7; }
        .theme-2 .step-number { color: #9333ea; }
        .theme-3 .step-number { color: #7c3aed; }
        .theme-4 .step-number { color: #db2777; }

        /* Very soft pastel/light icon badges */
        .icon-badge {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
            transition: transform 0.3s ease;
        }

        .bento-card:hover .icon-badge {
            transform: scale(1.1) rotate(5deg);
        }

        .theme-1 .icon-badge { background: #e0f2fe; color: #0284c7; }
        .theme-2 .icon-badge { background: #f3e8ff; color: #9333ea; }
        .theme-3 .icon-badge { background: #ede9fe; color: #7c3aed; }
        .theme-4 .icon-badge { background: #fce7f3; color: #db2777; }

        .step-title {
            font-size: 18px;
            font-weight: 500;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #111827;
            margin-bottom: 8px;
        }

        .step-desc {
            font-size: 14px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #4b5563;
            line-height: 1.6;
        }

        /* Responsive Breakpoints */
        @media (max-width: 868px) {
            .bento-card.span-7, 
            .bento-card.span-5 {
                grid-column: span 12;
            }
        }
      `}</style>

      <div className="wp-body">
        <div className="container">
          <div className="header-section">
            <h2 className="title">Simple & Effective Website Design Process</h2>
            <p className="title-desc">
              When you come to BMDU for your static website design services,
              rest assured that our time-tested approach guarantees that all
              websites created by us are fast, visually polished, and properly
              tested upon launch.
            </p>
          </div>

          <div className="bento-grid">
            {/* Step 1 */}
            <div className="bento-card span-7 theme-1">
              <div className="card-watermark">🔍</div>
              <div className="card-header-flex">
                <div className="step-number">01</div>
                <div className="icon-badge">🔍</div>
              </div>
              <div className="card-content-area">
                <div className="step-title">Discovery & Research</div>
                <div className="step-desc">
                  The process starts with a detailed understanding of your
                  business objectives, your target market, competition, and
                  requirements for the project, and we create a strong
                  strategic brief that guides us in every design and
                  development decision going forward.
                </div>
              </div>
            </div>

            {/* Step 2 */}
            <div className="bento-card span-5 theme-2">
              <div className="card-watermark">🎨</div>
              <div className="card-header-flex">
                <div className="step-number">02</div>
                <div className="icon-badge">🎨</div>
              </div>
              <div className="card-content-area">
                <div className="step-title">UI/UX Planning</div>
                <div className="step-desc">
                  Our team of designers will develop wireframes and page
                  designs custom-made for your branding and audience, validating all decisions before development.
                </div>
              </div>
            </div>

            {/* Step 3 */}
            <div className="bento-card span-5 theme-3">
              <div className="card-watermark">⚡</div>
              <div className="card-header-flex">
                <div className="step-number">03</div>
                <div className="icon-badge">⚡</div>
              </div>
              <div className="card-content-area">
                <div className="step-title">Website Development</div>
                <div className="step-desc">
                  We build your website using high-quality code and cutting-edge front-end technologies to ensure it is lightning fast, responsive, and SEO-friendly.
                </div>
              </div>
            </div>

            {/* Step 4 */}
            <div className="bento-card span-7 theme-4">
              <div className="card-watermark">🚀</div>
              <div className="card-header-flex">
                <div className="step-number">04</div>
                <div className="icon-badge">🚀</div>
              </div>
              <div className="card-content-area">
                <div className="step-title">Testing & Launch</div>
                <div className="step-desc">
                  All possible rigorous tests are carried out across every device type, browser, and performance parameter before your website is successfully launched on schedule.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}