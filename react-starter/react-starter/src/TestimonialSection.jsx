import React, { useState, useEffect, useCallback } from 'react'

const testimonials = [
  {
    quote: "BMDU delivered a static website that perfectly represents our brand and performs exceptionally well across every device and search engine. As a static website design company, their attention to detail, design quality, and technical execution set a standard we have not seen matched by any other web development partner",
    name: 'Robert Hayes',
    title: 'COO, Global Tech Solutions',
    rating: 5,
    avatar: 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150&auto=format&fit=crop&q=80'
  },
  {
    quote: 'The static website designing services BMDU delivered completely transformed our online presence. Their strategic design approach, clean code quality, and SEO-optimised architecture delivered a measurable improvement in organic visibility and a significant increase in website-driven leads within the first quarter after launch',
    name: 'Priya Nair',
    title: 'Marketing Director, BuildCore India',
    rating: 5,
    avatar: 'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=150&auto=format&fit=crop&q=80'
  },
  {
    quote: "Our choice to collaborate with BMDU in designing our static web page design is possibly one of the best decisions that we have ever made regarding our online identity. Our expectations for the performance, design, and professionalism of the website created by the team were more than met",
    name: 'Marcus Brandt',
    title: 'CEO, Brandt Solutions',
    rating: 5,
    avatar: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&auto=format&fit=crop&q=80'
  },
]

const AUTO_ADVANCE_MS = 3500

export default function TestimonialSection() {
  const [active, setActive] = useState(0)
  const [isPaused, setIsPaused] = useState(false)

  const next = useCallback(() => {
    setActive((prev) => (prev + 1) % testimonials.length)
  }, [])

  const prev = useCallback(() => {
    setActive((p) => (p - 1 + testimonials.length) % testimonials.length)
  }, [])

  useEffect(() => {
    if (isPaused) return
    const timer = setInterval(next, AUTO_ADVANCE_MS)
    return () => clearInterval(timer)
  }, [next, isPaused])

  const current = testimonials[active]

  return (
    <section className="ts-section">
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');

        .ts-section {
          background: #030712;
          padding: 48px 20px; /* Reduced vertical padding */
          font-family: 'Plus Jakarta Sans', sans-serif;
          position: relative;
          overflow: hidden;
        }

        .ts-glow-1 {
          position: absolute;
          top: 0;
          left: 50%;
          transform: translateX(-50%);
          width: 500px;
          height: 250px;
          background: radial-gradient(circle, rgba(37, 99, 235, 0.15) 0%, rgba(3, 7, 18, 0) 70%);
          pointer-events: none;
        }

        .ts-wrap {
          max-width: 820px;
          margin: 0 auto;
          text-align: center;
          position: relative;
          z-index: 2;
        }

        .ts-heading {
          font-family: 'Plus Jakarta Sans', sans-serif;
          font-size: 28px; /* Reduced title size */
          font-weight: 800;
          color: #ffffff;
          margin: 0 0 24px;
          letter-spacing: -0.01em;
        }

        .ts-heading-blue {
          background: linear-gradient(135deg, #60a5fa 0%, #2563eb 100%);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
        }

        /* Compact Glass Card */
        .ts-card {
          background: rgba(15, 23, 42, 0.65);
          backdrop-filter: blur(12px);
          -webkit-backdrop-filter: blur(12px);
          border: 1px solid rgba(255, 255, 255, 0.08);
          border-radius: 20px;
          padding: 24px 32px; /* Compact internal padding */
          position: relative;
          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.1);
          transition: border-color 0.3s ease;
        }

        .ts-card:hover {
          border-color: rgba(59, 130, 246, 0.35);
        }

        .ts-content-anim {
          animation: tsFadeIn 0.4s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        @keyframes tsFadeIn {
          from {
            opacity: 0;
            transform: translateY(6px);
          }
          to {
            opacity: 1;
            transform: translateY(0);
          }
        }

        .ts-stars {
          display: flex;
          justify-content: center;
          gap: 4px;
          margin-bottom: 12px;
          color: #38bdf8;
        }

        .ts-quote {
          font-size: 16px; /* Reduced text size */
          font-weight: 500;
          line-height: 1.5;
          color: #f3f4f6;
          margin: 0 0 18px;
          min-height: 48px; /* Reduced height reservation */
        }

        .ts-user-info {
          display: flex;
          align-items: center;
          justify-content: center;
          gap: 12px;
        }

        .ts-avatar {
          width: 40px; /* Reduced avatar size */
          height: 40px;
          border-radius: 50%;
          object-fit: cover;
          border: 2px solid #2563eb;
        }

        .ts-meta {
          text-align: left;
        }

        .ts-name {
          font-size: 15px;
          font-weight: 700;
          color: #ffffff;
          margin: 0;
          line-height: 1.2;
        }

        .ts-title {
          font-size: 12px;
          font-weight: 600;
          color: #38bdf8;
          margin: 2px 0 0;
        }

        /* Compact Controls */
        .ts-controls {
          display: flex;
          align-items: center;
          justify-content: center;
          gap: 16px;
          margin-top: 20px; /* Reduced top gap */
        }

        .ts-arrow {
          width: 36px; /* Compact arrow size */
          height: 36px;
          border-radius: 50%;
          border: 1px solid rgba(255, 255, 255, 0.12);
          background: rgba(15, 23, 42, 0.8);
          color: #ffffff;
          display: flex;
          align-items: center;
          justify-content: center;
          cursor: pointer;
          transition: all 0.2s ease;
        }

        .ts-arrow:hover {
          border-color: #3b82f6;
          background: #2563eb;
        }

        .ts-dots {
          display: flex;
          align-items: center;
          gap: 8px;
        }

        .ts-dot {
          height: 6px;
          width: 6px;
          border-radius: 999px;
          background: rgba(255, 255, 255, 0.2);
          cursor: pointer;
          transition: all 0.3s ease;
          border: none;
          padding: 0;
        }

        .ts-dot.active {
          width: 24px;
          background: #2563eb;
        }

        @media (max-width: 640px) {
          .ts-section {
            padding: 36px 16px;
          }
          .ts-card {
            padding: 20px 16px;
          }
          .ts-heading {
            font-size: 22px;
          }
          .ts-quote {
            font-size: 14px;
            min-height: auto;
          }
        }
      `}</style>

      <div className="ts-glow-1"></div>

      <div className="ts-wrap">
        <h2 className="ts-heading">
          Partners in <span className="ts-heading-blue">Success</span>
        </h2>

        <div 
          className="ts-card"
          onMouseEnter={() => setIsPaused(true)}
          onMouseLeave={() => setIsPaused(false)}
        >
          <div className="ts-content-anim" key={active}>
            <div className="ts-stars">
              {[...Array(current.rating)].map((_, i) => (
                <svg key={i} width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                </svg>
              ))}
            </div>

            <p className="ts-quote">"{current.quote}"</p>

            <div className="ts-user-info">
              <img className="ts-avatar" src={current.avatar} alt={current.name} />
              <div className="ts-meta">
                <h3 className="ts-name">{current.name}</h3>
                <p className="ts-title">{current.title}</p>
              </div>
            </div>
          </div>
        </div>

        <div className="ts-controls">
          <button className="ts-arrow" onClick={prev} aria-label="Previous testimonial">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round">
              <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
          </button>

          <div className="ts-dots">
            {testimonials.map((_, i) => (
              <button
                key={i}
                className={`ts-dot ${i === active ? 'active' : ''}`}
                onClick={() => setActive(i)}
                aria-label={`Go to testimonial ${i + 1}`}
              />
            ))}
          </div>

          <button className="ts-arrow" onClick={next} aria-label="Next testimonial">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </button>
        </div>
      </div>
    </section>
  )
}