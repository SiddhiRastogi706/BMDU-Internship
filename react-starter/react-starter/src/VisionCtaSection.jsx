import React from "react";

export default function VisionCtaSection() {
  return (
    <>
      <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
      />
      <style>{`
        .vc-body {
            background-color: #ffffff;
            width: 100%;
            overflow-x: hidden;
            padding: 20px 20px 60px 20px;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .vc-container {
            max-width: 1100px;
            margin: 0 auto;
            width: 100%;
        }

        .vc-card {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            min-height: 130px;
            display: flex;
            align-items: center;
            box-shadow: 0 20px 50px rgba(0,0,0,0.18);
        }

        .vc-bg-img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center 40%;
            z-index: 0;
        }

        /* Black gradient — dark on the left for text readability, fading out on the right */
        .vc-gradient-black {
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, rgba(2,6,16,0.88) 0%, rgba(2,6,16,0.72) 30%, rgba(2,6,16,0.32) 58%, rgba(2,6,16,0.05) 100%);
            z-index: 1;
        }

        /* White gradient glow — soft light sweep for extra depth */
        .vc-gradient-white {
            position: absolute;
            inset: 0;
            background: radial-gradient(60% 90% at 78% 15%, rgba(255,255,255,0.16) 0%, rgba(255,255,255,0) 60%),
                        linear-gradient(160deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0) 40%);
            z-index: 1;
            mix-blend-mode: screen;
            pointer-events: none;
        }

        .vc-content {
            position: relative;
            z-index: 2;
            padding: 20px 32px;
            max-width: 620px;
        }

        .vc-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #7dd3fc;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.07em;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .vc-eyebrow-line {
            width: 18px;
            height: 1px;
            background: #7dd3fc;
        }

        .vc-title {
            font-size: 19px;
            font-weight: 600;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #ffffff;
            line-height: 1.25;
            margin-bottom: 6px;
        }

        .vc-desc {
            font-size: 12.5px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #cbd5e1;
            line-height: 1.5;
            max-width: 480px;
            margin-bottom: 14px;
        }

        .vc-actions {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .vc-btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 9px 18px;
            border-radius: 999px;
            font-size: 12.5px;
            font-weight: 700;
            font-family: 'Plus Jakarta Sans', sans-serif;
            border: none;
            cursor: pointer;
            text-decoration: none;
            color: #ffffff;
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
            box-shadow: 0 10px 24px rgba(37,99,235,0.35);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .vc-btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 16px 30px rgba(37,99,235,0.42);
        }

        .vc-link-secondary {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 12.5px;
            font-weight: 600;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #ffffff;
            text-decoration: none;
            border-bottom: 1px solid rgba(255,255,255,0.0);
            transition: gap 0.25s ease, opacity 0.25s ease;
        }

        .vc-link-secondary:hover {
            gap: 10px;
            opacity: 0.85;
        }

        .vc-badge {
            position: absolute;
            right: 16px;
            bottom: 16px;
            z-index: 2;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(10, 14, 23, 0.6);
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255,255,255,0.14);
            padding: 6px 12px;
            border-radius: 999px;
            color: #ffffff;
            font-size: 11px;
            font-weight: 600;
            white-space: nowrap;
        }

        .vc-badge-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #38bdf8;
            box-shadow: 0 0 8px rgba(56,189,248,0.8);
            flex-shrink: 0;
        }

        /* Responsive */
        @media (max-width: 820px) {
            .vc-card {
                min-height: auto;
            }
            .vc-content {
                padding: 18px 20px 52px 20px;
                max-width: 100%;
            }
            .vc-title {
                font-size: 16px;
            }
            .vc-badge {
                right: 12px;
                bottom: 12px;
                left: 12px;
                justify-content: center;
            }
        }
      `}</style>

      <div className="vc-body">
        <div className="vc-container">
          <div className="vc-card">
            <img
              className="vc-bg-img"
              src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=1600&auto=format&fit=crop"
              alt="Laptop screen showing code"
            />
            <div className="vc-gradient-black"></div>
            <div className="vc-gradient-white"></div>

            <div className="vc-content">
              <div className="vc-eyebrow">
                <span className="vc-eyebrow-line"></span>
                Your Vision, Built Better
              </div>
              <h2 className="vc-title">
                Have a Website Idea? Let's Turn It Into a High-Performance Experience.
              </h2>
              <p className="vc-desc">
                Bring us your goals and our design and development team will shape them into a responsive, conversion-focused custom website.
              </p>
              <div className="vc-actions">
                <a href="#consultation" className="vc-btn-primary">
                  Get Free Consultation
                </a>
                <a href="#services" className="vc-link-secondary">
                  Explore Our Services <span>→</span>
                </a>
              </div>
            </div>

            <div className="vc-badge">
              <span className="vc-badge-dot"></span>
              Strategy • Design • Development
            </div>
          </div>
        </div>
      </div>
    </>
  );
}