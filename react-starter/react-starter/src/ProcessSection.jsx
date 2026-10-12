import React, { useState } from 'react';

const featuresData = [
  {
    id: 1,
    title: 'Lightning-Fast Speed',
    description: 'The fastest loading websites are static websites, and we optimize each and every development to ensure speed is maximized. Enjoy sub-second loading times for higher engagement.',
  },
  {
    id: 2,
    title: 'Fully Responsive Design',
    description: 'Your website will look fantastic on all devices used by your clients, whether desktop screens, laptop screens, or even tablets and cell phones.',
  },
  {
    id: 3,
    title: 'SEO-Friendly Structure',
    description: 'Your static site will have the best possible structure with clean code, proper heading levels, meta-data tags, and rapid page loading speed.',
  },
  {
    id: 4,
    title: 'High Security',
    description: 'Static sites have a considerably smaller attack surface with no databases or servers to be hacked, built on secure infrastructure and dependable performance.',
  },
  {
    id: 5,
    title: 'Modern UI/UX Design',
    description: 'Well-thought-out layouts, micro-animations, high-quality visuals, and smooth navigation systems come together to hook users from the start.',
  },
  {
    id: 6,
    title: 'Easy Hosting & Maintenance',
    description: 'Lightweight, cheap to host, easy to manage, and the most economical web presence solution for companies seeking high-class performance.',
  },
];

const tagsData = ['Scalable', 'Responsive', 'Development'];

export default function InfographicFeatures() {
  const [hoveredId, setHoveredId] = useState(1);

  return (
    <>
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');

        .infographic-section {
          width: 100%;
          background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
          padding: 12px 20px;
          font-family: 'Plus Jakarta Sans', sans-serif !important;
          box-sizing: border-box;
          position: relative;
        }

        .infographic-section * {
          font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .infographic-wrapper {
          max-width: 1100px;
          margin: 0 auto;
          display: flex;
          align-items: flex-start;
          gap: 32px;
        }

        /* Left Side */
        .left-content {
          flex: 1;
          display: flex;
          flex-direction: column;
          align-items: flex-start;
          text-align: left;
          position: sticky;
          top: 40px;
          align-self: flex-start;
          padding-top: 8px;
        }

        .badge {
          display: inline-flex;
          align-items: center;
          gap: 8px;
          background: rgba(37, 99, 235, 0.1);
          color: #2563eb;
          padding: 6px 14px;
          border-radius: 50px;
          font-size: 13px;
          font-weight: 700;
          letter-spacing: 0.5px;
          margin-bottom: 20px;
          box-shadow: inset 0 0 0 1px rgba(37, 99, 235, 0.2);
        }

        .badge-dot {
          width: 8px;
          height: 8px;
          background-color: #2563eb;
          border-radius: 50%;
        }

        .left-content h2 {
          font-size: 38px;
          font-weight: 400;
          color: #0f172a;
          margin: 0 0 20px 0;
          letter-spacing: -1px;
          line-height: 1.2;
        }

        .left-content p {
          font-size: 15px;
          line-height: 1.6;
          color: #475569;
          margin: 0 0 30px 0;
        }

        .cta-button {
          display: inline-flex;
          align-items: center;
          gap: 10px;
          background: #2563eb;
          color: #ffffff;
          border: none;
          padding: 14px 26px;
          border-radius: 8px;
          font-size: 15px;
          font-weight: 700;
          letter-spacing: 0.2px;
          cursor: pointer;
          box-shadow: 0 8px 20px rgba(37, 99, 235, 0.28);
          transition: background 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
        }

        .cta-button:hover {
          background: #1d4ed8;
          transform: translateY(-2px);
          box-shadow: 0 10px 24px rgba(37, 99, 235, 0.35);
        }

        .cta-arrow {
          font-size: 16px;
          transition: transform 0.2s ease;
        }

        .cta-button:hover .cta-arrow {
          transform: translateX(3px);
        }

        /* Small pill tags under the CTA */
        .tag-row {
          display: flex;
          flex-wrap: wrap;
          gap: 10px;
          margin-top: 40px;
        }

        .tag-pill {
          display: inline-flex;
          align-items: center;
          gap: 8px;
          background: rgba(37, 99, 235, 0.08);
          color: #2563eb;
          border: 1px solid rgba(37, 99, 235, 0.25);
          padding: 11px 22px;
          border-radius: 50px;
          font-size: 15px;
          font-weight: 600;
          letter-spacing: 0.2px;
          cursor: default;
          transition: background 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
        }

        .tag-pill:hover {
          background: rgba(37, 99, 235, 0.16);
          transform: translateY(-1px);
          box-shadow: 0 4px 10px rgba(37, 99, 235, 0.15);
        }

        .tag-pill-dot {
          width: 6px;
          height: 6px;
          background-color: #2563eb;
          border-radius: 50%;
          opacity: 0.8;
        }

        /* Right Side: Simple divided list */
        .right-list {
          flex: 1;
          display: flex;
          flex-direction: column;
          width: 100%;
          padding-top: 8px;
        }

        .list-item {
          padding: 26px 4px;
          border-bottom: 1px solid #cbd5e1;
          cursor: pointer;
          transition: padding 0.25s ease;
          display: flex;
          flex-direction: column;
        }

        .list-item-header {
          display: flex;
          justify-content: space-between;
          align-items: center;
          gap: 16px;
        }

        .list-item-icon {
          font-size: 20px;
          font-weight: 400;
          color: #2563eb;
          flex-shrink: 0;
        }

        .list-item:first-child {
          border-top: 1px solid #cbd5e1;
        }

        .list-item h3 {
          font-size: 20px;
          font-weight: 600;
          color: #0f172a;
          margin: 0;
          letter-spacing: -0.3px;
          transition: color 0.25s ease;
        }

        .list-item.active h3 {
          color: #1d4ed8;
        }

        .list-item-body {
          font-size: 14px;
          line-height: 1.6;
          color: #475569;
          margin-top: 10px;
          max-width: 90%;
          animation: fadeIn 0.25s ease forwards;
        }

        @keyframes fadeIn {
          from {
            opacity: 0;
            transform: translateY(-4px);
          }
          to {
            opacity: 1;
            transform: translateY(0);
          }
        }

        @media (max-width: 968px) {
          .infographic-wrapper {
            flex-direction: column;
            gap: 40px;
          }
          .left-content h2 {
            font-size: 30px;
          }
        }
      `}</style>

      <section className="infographic-section">
        <div className="infographic-wrapper">
          {/* Left Side: Heading, Paragraph, Button, and Tags */}
          <div className="left-content">
            <div className="badge">
              <span className="badge-dot"></span>
              Features
            </div>
            <h2>
              Premium Features of Our <br />
              Static Website Design Service
            </h2>
            <p>
              Every static website BMDU delivers comes with a comprehensive set of features designed to maximize performance, security, user experience, and long-term business value.
            </p>
            <button className="cta-button">
              Discuss Your Project
              <span className="cta-arrow">→</span>
            </button>

            <div className="tag-row">
              {tagsData.map((tag) => (
                <span className="tag-pill" key={tag}>
                  <span className="tag-pill-dot"></span>
                  {tag}
                </span>
              ))}
            </div>
          </div>

          {/* Right Side: Simple line list like the reference image */}
          <div className="right-list">
            {featuresData.map((item) => {
              const isActive = hoveredId === item.id;
              return (
                <div
                  key={item.id}
                  className={`list-item ${isActive ? 'active' : ''}`}
                  onMouseEnter={() => setHoveredId(item.id)}
                >
                  <div className="list-item-header">
                    <h3>{item.title}</h3>
                    <span className="list-item-icon">{isActive ? '−' : '+'}</span>
                  </div>
                  {isActive && (
                    <div className="list-item-body">{item.description}</div>
                  )}
                </div>
              );
            })}
          </div>
        </div>
      </section>
    </>
  );
}