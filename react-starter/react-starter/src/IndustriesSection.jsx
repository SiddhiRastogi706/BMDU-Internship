import React, { useRef, useEffect } from 'react';

const industries = [
  {
    id: 1,
    title: 'Healthcare',
    image: 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=600&q=80',
  },
  {
    id: 2,
    title: 'Finance & Fintech',
    image: 'https://images.unsplash.com/photo-1559526324-4b87b5e36e44?auto=format&fit=crop&w=600&q=80',
  },
  {
    id: 3,
    title: 'Retail & eCommerce',
    image: 'https://images.unsplash.com/photo-1555529771-835f59fc5efe?auto=format&fit=crop&w=600&q=80',
  },
  {
    id: 4,
    title: 'Education & EdTech',
    image: 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=600&q=80',
  },
  {
    id: 5,
    title: 'Travel & Hospitality',
    image: 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=600&q=80',
  },
  {
    id: 6,
    title: 'Real Estate',
    image: 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=600&q=80',
  },
];

export default function IndustriesTransform() {
  const trackRef = useRef(null);

  const scrollGallery = (direction) => {
    if (trackRef.current) {
      const scrollAmount = 300;
      trackRef.current.scrollBy({
        left: direction === 'left' ? -scrollAmount : scrollAmount,
        behavior: 'smooth',
      });
    }
  };

  useEffect(() => {
    const track = trackRef.current;
    if (!track) return;

    const updateCenterCard = () => {
      const cards = track.querySelectorAll('.card-item');
      const trackRect = track.getBoundingClientRect();
      const trackCenter = trackRect.left + trackRect.width / 2;

      cards.forEach((card) => {
        const cardRect = card.getBoundingClientRect();
        const cardCenter = cardRect.left + cardRect.width / 2;
        const distance = Math.abs(trackCenter - cardCenter);

        if (distance < 150) {
          card.style.transform = 'scale(1.08)';
          card.style.zIndex = '20';
          card.style.opacity = '1';
        } else {
          card.style.transform = 'scale(0.9)';
          card.style.zIndex = '10';
          card.style.opacity = '0.7';
        }
      });
    };

    track.addEventListener('scroll', updateCenterCard);
    window.addEventListener('resize', updateCenterCard);
    updateCenterCard();

    return () => {
      track.removeEventListener('scroll', updateCenterCard);
      window.removeEventListener('resize', updateCenterCard);
    };
  }, []);

  return (
    <div style={{ backgroundColor: '#ffffff', minHeight: '100vh', display: 'flex', flexDirection: 'column', alignItems: 'center', justifyContent: 'center', overflowX: 'hidden', padding: '8px 0', fontFamily: "'Plus Jakarta Sans', sans-serif" }}>
      
      {/* Essential CSS for layout structure and horizontal track */}
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');

        .perspective-deep {
          perspective: 1200px;
        }
        .no-scrollbar::-webkit-scrollbar {
          display: none;
        }
        .no-scrollbar {
          -ms-overflow-style: none;
          scrollbar-width: none;
        }
        .industries-heading {
          font-family: 'Plus Jakarta Sans', sans-serif !important;
          font-size: 30px !important;
          font-weight: 400 !important;
        }
      `}</style>

      {/* Header Section */}
      <div style={{ maxWidth: '896px', margin: '0 auto', padding: '0 16px', textAlign: 'center', marginBottom: '48px' }}>
        <h2 className="industries-heading" style={{ letterSpacing: '-0.025em', marginBottom: '24px', color: '#0A192F' }}>
          Industries We <span style={{ color: '#0A192F' }}>Transform</span>
        </h2>
        <p style={{ color: '#525252', fontSize: 'clamp(1rem, 1.5vw, 1.125rem)', maxWidth: '672px', margin: '0 auto', lineHeight: 1.6 }}>
          As a trusted static web design company in India, <span style={{ color: '#2563eb', fontWeight: 600 }}>BMDU</span> has delivered high-performance static website solutions across multiple industries worldwide.
        </p>
      </div>

      {/* Main Slider Section */}
      <div style={{ width: '100%', maxWidth: '1280px', margin: '0 auto', padding: '0 16px', position: 'relative', display: 'flex', flexDirection: 'column', alignItems: 'center', perspective: '1200px', marginBottom: '64px' }}>

        {/* Scrollable Track */}
        <div 
          ref={trackRef} 
          className="no-scrollbar"
          style={{ width: '100%', display: 'flex', alignItems: 'center', gap: '24px', overflowX: 'auto', scrollBehavior: 'smooth', padding: '40px 48px', transform: 'translate3d(0,0,0)', scrollSnapType: 'x mandatory' }}
        >
          {industries.map((item) => (
            <div 
              key={item.id} 
              className="card-item"
              style={{ width: '280px', height: '420px', borderRadius: '16px', overflow: 'hidden', boxShadow: '0 20px 25px -5px rgba(0, 0, 0, 0.2)', flexShrink: 0, position: 'relative', scrollSnapAlign: 'center', transition: 'all 0.5s ease' }}
            >
              <img 
                src={item.image} 
                alt={item.title} 
                style={{ width: '100%', height: '100%', objectFit: 'cover' }} 
              />
              <div style={{ position: 'absolute', inset: 0, background: 'linear-gradient(to top, rgba(0,0,0,0.7), rgba(0,0,0,0.2), transparent)', display: 'flex', alignItems: 'flex-end', padding: '24px' }}>
                <span style={{ color: '#ffffff', fontWeight: 700, fontSize: '1.25rem' }}>{item.title}</span>
              </div>
            </div>
          ))}
        </div>

        {/* Bottom Center Arrows */}
        <div style={{ display: 'flex', alignItems: 'center', justifyContent: 'center', gap: '16px', marginTop: '24px' }}>
          <button 
            onClick={() => scrollGallery('left')} 
            style={{ zIndex: 30, backgroundColor: 'rgba(255, 255, 255, 0.9)', color: '#262626', padding: '12px', borderRadius: '9999px', boxShadow: '0 10px 15px -3px rgba(0, 0, 0, 0.1)', border: 'none', cursor: 'pointer', display: 'flex', alignItems: 'center', justifyContent: 'center' }}
          >
            <svg style={{ width: '24px', height: '24px' }} fill="none" stroke="currentColor" strokeWidth="2.5" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" d="M15 19l-7-7 7-7"></path>
            </svg>
          </button>

          <button 
            onClick={() => scrollGallery('right')} 
            style={{ zIndex: 30, backgroundColor: 'rgba(255, 255, 255, 0.9)', color: '#262626', padding: '12px', borderRadius: '9999px', boxShadow: '0 10px 15px -3px rgba(0, 0, 0, 0.1)', border: 'none', cursor: 'pointer', display: 'flex', alignItems: 'center', justifyContent: 'center' }}
          >
            <svg style={{ width: '24px', height: '24px' }} fill="none" stroke="currentColor" strokeWidth="2.5" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" d="M9 5l7 7-7 7"></path>
            </svg>
          </button>
        </div>

      </div>

      
    </div>
  );
}