import React from "react";
import ctaImage from "./assets/cta.jpg";

export default function StrategyCallSection() {
  return (
    <>
      <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
      />
      <style>{`
        .sc-body {
            background-color: #ffffff;
            width: 100%;
            overflow-x: hidden;
            padding: 20px 0px 60px 0px;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .sc-card {
            position: relative;
            background: linear-gradient(135deg, #0b1a3a 0%, #14275c 45%, #0a1a40 100%);
            border-radius: 24px;
            overflow: hidden;
            display: grid;
            grid-template-columns: 0.95fr 1.05fr;
            min-height: 70px;
            width: 100%;
            box-shadow: 0 20px 50px rgba(0,0,0,0.18);
            margin: 0 20px;
        }

        @media (min-width: 1400px) {
            .sc-card {
                margin: 0 32px;
            }
        }

        /* Ambient glow accents */
        .sc-card::before {
            content: "";
            position: absolute;
            left: -100px;
            top: -80px;
            width: 320px;
            height: 320px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(56,189,248,0.14) 0%, rgba(56,189,248,0) 70%);
            pointer-events: none;
            z-index: 0;
        }

        /* Left-side watermark icon */
        .sc-watermark {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            width: 90px;
            height: 90px;
            opacity: 0.06;
            pointer-events: none;
            z-index: 0;
            user-select: none;
        }

        .sc-watermark svg {
            width: 100%;
            height: 100%;
            fill: #ffffff;
        }

        .sc-content-side {
            position: relative;
            z-index: 1;
            padding: 10px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .sc-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #7dd3fc;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .sc-eyebrow-line {
            width: 18px;
            height: 1px;
            background: #7dd3fc;
        }

        .sc-title {
            font-size: 22px;
            font-weight: 700;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #ffffff;
            line-height: 1.25;
            margin-bottom: 6px;
            max-width: 460px;
        }

        .sc-desc {
            font-size: 12px;
            color: #b9c2d0;
            line-height: 1.45;
            max-width: 440px;
            margin-bottom: 12px;
        }

        .sc-buttons {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .sc-btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 13px 26px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 700;
            border: none;
            cursor: pointer;
            text-decoration: none;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .sc-btn-primary {
            background: linear-gradient(135deg, #22d3ee 0%, #3b82f6 100%);
            color: #ffffff;
            box-shadow: 0 8px 20px rgba(59,130,246,0.28);
        }

        .sc-btn-secondary {
            background: linear-gradient(135deg, #38bdf8 0%, #60a5fa 100%);
            color: #ffffff;
            box-shadow: 0 8px 20px rgba(96,165,250,0.22);
        }

        .sc-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 14px 28px rgba(59,130,246,0.35);
        }

        .sc-btn-arrow {
            transition: transform 0.25s ease;
        }

        .sc-btn:hover .sc-btn-arrow {
            transform: translateX(3px);
        }

        /* RIGHT: IMAGE */
        .sc-image-side {
            position: relative;
            min-height: 100%;
        }

        .sc-image-side img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .sc-image-side:hover img {
            transform: scale(1.05);
        }

        .sc-image-fade {
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, #0a0e17 0%, rgba(10,14,23,0.0) 12%);
            pointer-events: none;
        }

        .sc-badge {
            position: absolute;
            right: 14px;
            bottom: 14px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(10, 14, 23, 0.72);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
            border: 1px solid rgba(255,255,255,0.1);
            padding: 8px 14px;
            border-radius: 999px;
            color: #ffffff;
            font-size: 12px;
            font-weight: 500;
            white-space: nowrap;
        }

        .sc-badge-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #22d3ee;
            box-shadow: 0 0 8px rgba(34,211,238,0.8);
            flex-shrink: 0;
        }

        /* Responsive */
        @media (max-width: 820px) {
            .sc-card {
                grid-template-columns: 1fr;
                margin: 0 16px;
            }
            .sc-image-side {
                height: 200px;
                order: -1;
            }
            .sc-content-side {
                padding: 26px 22px 30px 22px;
            }
            .sc-title {
                font-size: 22px;
                max-width: 100%;
            }
            .sc-desc {
                max-width: 100%;
            }
            .sc-image-fade {
                background: linear-gradient(180deg, rgba(10,14,23,0.0) 60%, #0a0e17 100%);
            }
            .sc-watermark {
                width: 60px;
                height: 60px;
            }
        }

        @media (max-width: 480px) {
            .sc-buttons {
                flex-direction: column;
            }
            .sc-btn {
                justify-content: center;
            }
        }
      `}</style>

      <div className="sc-body">
        <div className="sc-card">
          <div className="sc-watermark">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 2C6.48 2 2 5.94 2 10.8c0 2.77 1.46 5.24 3.75 6.86-.12.99-.5 2.4-1.5 3.84a.5.5 0 00.55.77c2.2-.66 3.83-1.7 4.79-2.45.76.14 1.55.24 2.41.24 5.52 0 10-3.94 10-8.8S17.52 2 12 2z"/>
            </svg>
          </div>

          <div className="sc-content-side">
            <div className="sc-eyebrow">
              <span className="sc-eyebrow-line"></span>
              Let's Build It Right
            </div>
            <h2 className="sc-title">
              Your Next High-Quality Website Starts With One Conversation.
            </h2>
            <p className="sc-desc">
              Tell us what you want to achieve and get a clear direction for your website's design, functionality, performance, and future growth.
            </p>
            <div className="sc-buttons">
              <a href="#call" className="sc-btn sc-btn-primary">
                Book a Free Strategy Call <span className="sc-btn-arrow">→</span>
              </a>
              <a href="#faq" className="sc-btn sc-btn-secondary">
                Read Common Questions <span className="sc-btn-arrow">→</span>
              </a>
            </div>
          </div>

          <div className="sc-image-side">
            <img
              src={ctaImage}
              alt="Engineers discussing a project with a laptop"
            />
            <div className="sc-image-fade"></div>
            <div className="sc-badge">
              <span className="sc-badge-dot"></span>
              Free Project Consultation
            </div>
          </div>
        </div>
      </div>
    </>
  );
}