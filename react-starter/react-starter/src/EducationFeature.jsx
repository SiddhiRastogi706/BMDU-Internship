import React, { useState, useEffect, useRef } from 'react';

// Platform Data Configuration
const platformData = {
  instagram: {
    title: 'Instagram',
    description:
      'Our Instagram marketing services include the creation and optimization of static landing pages and Instagram profiles, incorporating visually appealing designs and high-speed loading performance, to generate quality leads for your company through the Instagram platform.',
    bgImage:
      'https://images.unsplash.com/photo-1595039838779-f3780873afdd?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    icon: (
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
      </svg>
    ),
  },
  facebook: {
    title: 'Facebook',
    description:
      'The static website designing services we provide encompass the development of Facebook-optimized websites to create fast and responsive landing pages and websites that easily work in tandem with your Facebook marketing strategy.',
    bgImage:
      'https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=1200&q=80',
    icon: (
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
      </svg>
    ),
  },
  linkedin: {
    title: 'LinkedIn',
    description:
      'We build professional, corporate-grade static websites designed to impress LinkedIn audiences, delivering clean, authoritative web presences that strengthen your B2B credibility and support lead generation from your LinkedIn marketing activity.',
    bgImage:
      'https://images.unsplash.com/photo-1663767117374-538a2a266fe1?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    icon: (
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
        <rect x="2" y="9" width="4" height="12"></rect>
        <circle cx="4" cy="4" r="2"></circle>
      </svg>
    ),
  },
  youtube: {
    title: 'YouTube',
    description:
      'Our static web page design team creates YouTube-integrated website experiences, building fast-loading landing pages and channel support pages that convert YouTube viewers into website visitors, email subscribers, and paying customers.',
    bgImage:
      'https://images.unsplash.com/photo-1646446835625-4f23efd5c662?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    icon: (
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
        <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path>
        <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>
      </svg>
    ),
  },
  pinterest: {
    title: 'Pinterest',
    description:
      'Our visual website designs are optimized for traffic from Pinterest with amazing layouts that will entice your audience on Pinterest to convert into customers because of the fast performance of your website.',
    bgImage:
      'https://images.unsplash.com/photo-1733268524121-9fd9133b8e26?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    icon: (
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
      </svg>
    ),
  },
};

const navItems = [
  { key: 'instagram', label: 'Instagram' },
  { key: 'facebook', label: 'Facebook' },
  { key: 'linkedin', label: 'LinkedIn' },
  { key: 'youtube', label: 'YouTube' },
  { key: 'pinterest', label: 'Pinterest' },
];

export default function PlatformsUI() {
  const [activeKey, setActiveKey] = useState('instagram');
  const [isFading, setIsFading] = useState(false);
  const [isIntersecting, setIsIntersecting] = useState(false);
  const wrapperRef = useRef(null);
  const timerRef = useRef(null);

  const activeData = platformData[activeKey];

  const handleTabChange = (key) => {
    if (key === activeKey) return;
    setIsFading(true);
    setTimeout(() => {
      setActiveKey(key);
      setIsFading(false);
    }, 150);
  };

  // Detect when the section is on screen, so it only auto-plays while visible
  useEffect(() => {
    const observer = new IntersectionObserver(
      ([entry]) => setIsIntersecting(entry.isIntersecting),
      { root: null, threshold: 0.1 }
    );
    if (wrapperRef.current) observer.observe(wrapperRef.current);
    return () => {
      if (wrapperRef.current) observer.unobserve(wrapperRef.current);
    };
  }, []);

  // Auto-move through the platforms every 4s, only while the section is visible
  useEffect(() => {
    if (isIntersecting) {
      timerRef.current = setInterval(() => {
        setIsFading(true);
        setTimeout(() => {
          setActiveKey((prevKey) => {
            const currentIdx = navItems.findIndex((n) => n.key === prevKey);
            const nextIdx = (currentIdx + 1) % navItems.length;
            return navItems[nextIdx].key;
          });
          setIsFading(false);
        }, 150);
      }, 4000);
    } else if (timerRef.current) {
      clearInterval(timerRef.current);
    }
    return () => {
      if (timerRef.current) clearInterval(timerRef.current);
    };
  }, [isIntersecting]);

  return (
    <>
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap');

        .platforms-wrapper {
          display: flex;
          flex-direction: column;
          align-items: center;
          background-color: black;
          padding: 24px 20px;
          font-family: 'Plus Jakarta Sans', sans-serif;
          color: #ffffff;
          box-sizing: border-box;
        }

        /* Top Header Section */
        .top-header {
          text-align: center;
          max-width: 850px;
          margin-bottom: 24px;
        }

        .top-header h2 {
          font-family: 'Plus Jakarta Sans', sans-serif !important;
          font-size: 30px !important;
          font-weight: 700;
          margin-bottom: 12px;
          color: #ffffff;
          letter-spacing: -0.5px;
        }

        .top-header h2 .highlight {
          color: #0070f3;
        }

        .top-header p {
          font-family: 'Plus Jakarta Sans', sans-serif;
          font-size: 15px;
          line-height: 1.6;
          color: rgba(255, 255, 255, 0.7);
          font-weight: 400;
        }

        /* Main Container */
        .platforms-container {
          position: relative;
          width: 1050px;
          max-width: 100%;
          height: 520px;
          background-color: #121218;
          display: flex;
          overflow: hidden;
          border-radius: 16px;
          box-shadow: 0 20px 50px rgba(0, 0, 0, 0.7);
          font-family: 'Plus Jakarta Sans', sans-serif;
          box-sizing: border-box;
        }

        .bg-image-layer {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-size: cover;
          background-position: center;
          transition: background-image 0.5s ease-in-out;
          z-index: 0;
        }

        .backdrop-overlay {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: linear-gradient(
            90deg,
            rgba(10, 10, 15, 0.82) 0%,
            rgba(10, 10, 15, 0.45) 50%,
            rgba(10, 10, 15, 0.25) 100%
          );
          backdrop-filter: blur(2px);
          -webkit-backdrop-filter: blur(2px);
          z-index: 1;
        }

        .sidebar {
          position: relative;
          z-index: 2;
          width: 320px;
          flex-shrink: 0;
          padding: 30px 0 30px 45px;
          border-right: 1px solid rgba(255, 255, 255, 0.15);
          display: flex;
          flex-direction: column;
          justify-content: space-around;
          background: rgba(10, 10, 15, 0.45);
          box-sizing: border-box;
        }

        .nav-item {
          font-family: 'Plus Jakarta Sans', sans-serif !important;
          color: rgba(255, 255, 255, 0.6);
          font-size: 18px;
          font-weight: 600;
          cursor: pointer;
          transition: all 0.3s ease;
          position: relative;
          user-select: none;
          display: flex;
          align-items: center;
          padding: 6px 0;
          text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
        }

        .nav-item:hover {
          color: rgba(255, 255, 255, 0.9);
          transform: translateX(4px);
        }

        .nav-item.active {
          color: #ffffff;
          font-weight: 700;
          font-size: 19px;
        }

        .nav-item.active::after {
          content: '';
          position: absolute;
          right: -1px;
          top: 0;
          height: 100%;
          width: 4px;
          background-color: #0070f3;
          box-shadow: 0 0 12px #0070f3;
          border-radius: 2px 0 0 2px;
        }

        .content {
          position: relative;
          z-index: 2;
          flex: 1;
          padding: 50px 60px 30px 70px;
          display: flex;
          flex-direction: column;
          justify-content: center;
          min-width: 0;
        }

        .content h1 {
          font-family: 'Plus Jakarta Sans', sans-serif !important;
          font-size: 38px;
          font-weight: 800;
          margin-bottom: 14px;
          letter-spacing: -0.5px;
          transition: opacity 0.2s ease;
          text-shadow: 0 2px 10px rgba(0, 0, 0, 0.8);
        }

        .accent-line {
          width: 140px;
          height: 3px;
          background: linear-gradient(90deg, #0070f3 0%, rgba(0, 112, 243, 0) 100%);
          margin-bottom: 24px;
          border-radius: 2px;
        }

        .content p {
          font-family: 'Plus Jakarta Sans', sans-serif !important;
          color: rgba(255, 255, 255, 0.95);
          font-size: 15px;
          line-height: 1.7;
          max-width: 480px;
          font-weight: 400;
          transition: opacity 0.2s ease;
          text-shadow: 0 2px 8px rgba(0, 0, 0, 0.9);
        }

        .bg-icon-watermark {
          position: absolute;
          bottom: -20px;
          right: -10px;
          z-index: 2;
          width: 280px;
          height: 280px;
          opacity: 0.25;
          pointer-events: none;
          color: #ffffff;
          transition: opacity 0.3s ease;
          filter: drop-shadow(0 2px 8px rgba(0, 0, 0, 0.6));
        }

        .bg-icon-watermark svg {
          width: 100%;
          height: 100%;
        }

        .fade-out {
          opacity: 0;
        }

        /* Mobile responsive */
        @media (max-width: 900px) {
          .platforms-container {
            flex-direction: column;
            height: auto;
          }

          .sidebar {
            width: 100%;
            flex-direction: row;
            justify-content: flex-start;
            gap: 22px;
            padding: 18px 16px;
            border-right: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
            overflow-x: auto;
          }

          .nav-item {
            font-size: 14px;
            white-space: nowrap;
            padding: 4px 0;
          }

          .nav-item.active {
            font-size: 15px;
          }

          .nav-item.active::after {
            right: auto;
            left: 0;
            bottom: -8px;
            top: auto;
            width: 100%;
            height: 3px;
            border-radius: 2px 2px 0 0;
          }

          .content {
            padding: 28px 20px 32px;
          }

          .content h1 {
            font-size: 26px;
          }

          .content p {
            max-width: 100%;
            font-size: 14px;
          }

          .bg-icon-watermark {
            width: 160px;
            height: 160px;
            opacity: 0.15;
          }
        }

        @media (max-width: 480px) {
          .platforms-wrapper {
            padding: 20px 12px;
          }

          .top-header h2 {
            font-size: 24px !important;
          }

          .top-header p {
            font-size: 13.5px;
          }

          .sidebar {
            gap: 16px;
          }

          .content h1 {
            font-size: 22px;
          }
        }
      `}</style>

      <div className="platforms-wrapper" ref={wrapperRef}>
        {/* Top Header Section */}
        <div className="top-header">
          <h2>
            Platforms We <span className="highlight">Manage</span>
          </h2>
          <p>
            With the expertise gained from being a reliable web design company in India, BMDU creates a strong online presence for your brand across all major platforms that your target audience might be accessing through our effective web development services.
          </p>
        </div>

        {/* Main Box */}
        <div className="platforms-container">
          <div
            className="bg-image-layer"
            style={{ backgroundImage: `url('${activeData.bgImage}')` }}
          />
          <div className="backdrop-overlay" />

          {/* Sidebar */}
          <div className="sidebar">
            {navItems.map((item) => (
              <div
                key={item.key}
                className={`nav-item ${activeKey === item.key ? 'active' : ''}`}
                onClick={() => handleTabChange(item.key)}
              >
                {item.label}
              </div>
            ))}
          </div>

          {/* Dynamic Content */}
          <div className="content">
            <h1 className={isFading ? 'fade-out' : ''}>{activeData.title}</h1>
            <div className="accent-line" />
            <p className={isFading ? 'fade-out' : ''}>{activeData.description}</p>
          </div>

          {/* Watermark Icon */}
          <div className="bg-icon-watermark">{activeData.icon}</div>
        </div>
      </div>
    </>
  );
}