import React from "react";

export default function CtaSection() {
  return (
    <>
      <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
      />
      <style>{`
        .cta-body {
            background-color: #ffffff;
            width: 100%;
            overflow-x: hidden;
            padding: 60px 20px 60px 20px;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .cta-container {
            max-width: 1100px;
            margin: 0 auto;
            width: 100%;
        }

        .cta-card {
            position: relative;
            background: #0a0e17;
            border-radius: 28px;
            overflow: hidden;
            display: grid;
            grid-template-columns: 0.95fr 1.05fr;
            min-height: 130px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.18);
        }

        /* Ambient glow accents on the dark side */
        .cta-card::before {
            content: "";
            position: absolute;
            right: -120px;
            top: -80px;
            width: 340px;
            height: 340px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(56,189,248,0.16) 0%, rgba(56,189,248,0) 70%);
            pointer-events: none;
        }

        .cta-card::after {
            content: "";
            position: absolute;
            right: 60px;
            bottom: -100px;
            width: 260px;
            height: 260px;
            border-radius: 50%;
            border: 1px solid rgba(59,130,246,0.15);
            pointer-events: none;
        }

        .cta-image-side {
            position: relative;
            min-height: 100%;
        }

        .cta-image-side img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .cta-badge {
            position: absolute;
            right: 20px;
            bottom: 20px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(10, 14, 23, 0.72);
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255,255,255,0.1);
            padding: 10px 16px;
            border-radius: 999px;
            color: #ffffff;
            font-size: 13px;
            font-weight: 500;
            white-space: nowrap;
        }

        .cta-badge-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #22d3ee;
            box-shadow: 0 0 8px rgba(34,211,238,0.8);
            flex-shrink: 0;
        }

        .cta-content-side {
            position: relative;
            z-index: 1;
            padding: 18px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .cta-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: #7dd3fc;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .cta-eyebrow-line {
            width: 22px;
            height: 1px;
            background: #7dd3fc;
        }

        .cta-title {
            font-size: 21px;
            font-weight: 600;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #ffffff;
            line-height: 1.25;
            margin-bottom: 7px;
            max-width: 480px;
        }

        .cta-desc {
            font-size: 13px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #9aa3b2;
            line-height: 1.5;
            max-width: 460px;
            margin-bottom: 14px;
        }

        .cta-buttons {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }

        .cta-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 9px 18px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 700;
            font-family: 'Plus Jakarta Sans', sans-serif;
            border: none;
            cursor: pointer;
            text-decoration: none;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .cta-btn-primary {
            background: linear-gradient(135deg, #22d3ee 0%, #3b82f6 100%);
            color: #ffffff;
            box-shadow: 0 8px 20px rgba(59,130,246,0.28);
        }

        .cta-btn-secondary {
            background: linear-gradient(135deg, #38bdf8 0%, #60a5fa 100%);
            color: #ffffff;
            box-shadow: 0 8px 20px rgba(96,165,250,0.22);
        }

        .cta-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 14px 28px rgba(59,130,246,0.35);
        }

        .cta-btn-arrow {
            transition: transform 0.25s ease;
        }

        .cta-btn:hover .cta-btn-arrow {
            transform: translateX(3px);
        }

        /* Responsive */
        @media (max-width: 820px) {
            .cta-card {
                grid-template-columns: 1fr;
            }
            .cta-image-side {
                height: 180px;
            }
            .cta-content-side {
                padding: 22px 24px 26px 24px;
            }
            .cta-title {
                font-size: 20px;
                max-width: 100%;
            }
            .cta-desc {
                max-width: 100%;
            }
        }

        @media (max-width: 480px) {
            .cta-buttons {
                flex-direction: column;
            }
            .cta-btn {
                justify-content: center;
            }
        }
      `}</style>

      <div className="cta-body">
        <div className="cta-container">
          <div className="cta-card">
            <div className="cta-image-side">
              <img
                src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?q=80&w=1200&auto=format&fit=crop"
                alt="Two colleagues working together on laptops"
              />
              
            </div>

            <div className="cta-content-side">
              <div className="cta-eyebrow">
                <span className="cta-eyebrow-line"></span>
                Built Around Your Brand
              </div>
              <h2 className="cta-title">
                Ready to Replace Generic Templates With a Website Made for Your Business?
              </h2>
              <p className="cta-desc">
                Collaborate with BMDU on a custom digital experience shaped around your audience, functionality, and long-term growth goals.
              </p>
              <div className="cta-buttons">
                <a href="#contact" className="cta-btn cta-btn-primary">
                  Contact Us <span className="cta-btn-arrow">→</span>
                </a>
                <a href="#process" className="cta-btn cta-btn-secondary">
                  See Our Process <span className="cta-btn-arrow">→</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}