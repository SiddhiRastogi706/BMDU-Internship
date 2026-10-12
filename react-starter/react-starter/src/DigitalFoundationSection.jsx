import React from "react";

export default function DigitalFoundationSection() {
  return (
    <>
      <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
      />
      <style>{`
        .df-body {
            background-color: #ffffff;
            width: 100%;
            overflow-x: hidden;
            padding: 20px 20px 60px 20px;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .df-container {
            max-width: 1100px;
            margin: 0 auto;
            width: 100%;
        }

        .df-card {
            position: relative;
            background: #0a0e17;
            border-radius: 24px;
            overflow: hidden;
            display: grid;
            grid-template-columns: 0.95fr 1.05fr;
            min-height: 300px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.18);
        }

        /* Watermark icon on the dark side */
        .df-watermark {
            position: absolute;
            left: -20px;
            bottom: -20px;
            z-index: 0;
            pointer-events: none;
            user-select: none;
            opacity: 0.06;
        }

        .df-watermark svg {
            width: 170px;
            height: 170px;
            display: block;
        }

        /* Ambient glow accents */
        .df-card::before {
            content: "";
            position: absolute;
            right: -100px;
            top: -80px;
            width: 320px;
            height: 320px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(56,189,248,0.14) 0%, rgba(56,189,248,0) 70%);
            pointer-events: none;
        }

        .df-card::after {
            content: "";
            position: absolute;
            right: 40px;
            bottom: -90px;
            width: 240px;
            height: 240px;
            border-radius: 50%;
            border: 1px solid rgba(59,130,246,0.15);
            pointer-events: none;
        }

        /* White gradient glow — soft light sweep across the dark side */
        .df-gradient-white {
            position: absolute;
            inset: 0;
            background: radial-gradient(55% 85% at 70% 10%, rgba(255,255,255,0.14) 0%, rgba(255,255,255,0) 60%),
                        linear-gradient(160deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0) 42%);
            mix-blend-mode: screen;
            pointer-events: none;
            z-index: 0;
        }

        .df-image-side {
            position: relative;
            min-height: 100%;
        }

        .df-image-side img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .df-badge {
            position: absolute;
            right: 18px;
            bottom: 18px;
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

        .df-badge-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #22d3ee;
            box-shadow: 0 0 8px rgba(34,211,238,0.8);
            flex-shrink: 0;
        }

        .df-content-side {
            position: relative;
            z-index: 1;
            padding: 44px 52px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .df-content-inner {
            position: relative;
            z-index: 2;
        }

        .df-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: #7dd3fc;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            margin-bottom: 16px;
        }

        .df-eyebrow-line {
            width: 22px;
            height: 1px;
            background: #7dd3fc;
        }

        .df-title {
            font-size: 30px;
            font-weight: 600;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #ffffff;
            line-height: 1.28;
            margin-bottom: 16px;
            max-width: 460px;
        }

        .df-desc {
            font-size: 15px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #9aa3b2;
            line-height: 1.6;
            max-width: 460px;
            margin-bottom: 28px;
        }

        .df-buttons {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }

        .df-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 13px 22px;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 700;
            font-family: 'Plus Jakarta Sans', sans-serif;
            border: none;
            cursor: pointer;
            text-decoration: none;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .df-btn-primary {
            background: linear-gradient(135deg, #22d3ee 0%, #3b82f6 100%);
            color: #ffffff;
            box-shadow: 0 8px 20px rgba(59,130,246,0.28);
        }

        .df-btn-secondary {
            background: linear-gradient(135deg, #38bdf8 0%, #60a5fa 100%);
            color: #ffffff;
            box-shadow: 0 8px 20px rgba(96,165,250,0.22);
        }

        .df-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 14px 28px rgba(59,130,246,0.35);
        }

        .df-btn-arrow {
            transition: transform 0.25s ease;
        }

        .df-btn:hover .df-btn-arrow {
            transform: translateX(3px);
        }

        /* Responsive */
        @media (max-width: 820px) {
            .df-card {
                grid-template-columns: 1fr;
            }
            .df-image-side {
                height: 240px;
            }
            .df-content-side {
                padding: 32px 26px 40px 26px;
            }
            .df-title {
                font-size: 24px;
                max-width: 100%;
            }
            .df-desc {
                max-width: 100%;
            }
            .df-watermark {
                font-size: 60px;
            }
        }

        @media (max-width: 480px) {
            .df-buttons {
                flex-direction: column;
            }
            .df-btn {
                justify-content: center;
            }
        }
      `}</style>

      <div className="df-body">
        <div className="df-container">
          <div className="df-card">
            <div className="df-image-side">
              <img
                src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=1200&auto=format&fit=crop"
                alt="Modern coworking lounge with seating"
              />
              <div className="df-badge">
                <span className="df-badge-dot"></span>
                From Startup to Enterprise
              </div>
            </div>

            <div className="df-content-side">
              <div className="df-gradient-white"></div>
              <div className="df-watermark">
                <svg viewBox="0 0 24 24" fill="none" stroke="#ffffff" strokeWidth="1.4" strokeLinecap="round" strokeLinejoin="round">
                  <path d="M3 21h18"></path>
                  <path d="M6 21V9l6-4 6 4v12"></path>
                  <path d="M10 21v-6h4v6"></path>
                  <path d="M9 12h.01"></path>
                  <path d="M15 12h.01"></path>
                  <path d="M9 9h.01"></path>
                  <path d="M15 9h.01"></path>
                </svg>
              </div>
              <div className="df-content-inner">
              <div className="df-eyebrow">
                <span className="df-eyebrow-line"></span>
                Ready For Every Business Stage
              </div>
              <h2 className="df-title">
                Build a Digital Foundation That Can Grow With Your Business.
              </h2>
              <p className="df-desc">
                From an ambitious first launch to enterprise modernization, BMDU creates flexible websites designed around where your business is going next.
              </p>
              <div className="df-buttons">
                <a href="#talk" className="df-btn df-btn-primary">
                  Talk to Our Experts <span className="df-btn-arrow">→</span>
                </a>
                <a href="#stages" className="df-btn df-btn-secondary">
                  Explore Business Stages <span className="df-btn-arrow">→</span>
                </a>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}