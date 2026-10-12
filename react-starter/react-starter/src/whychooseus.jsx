import React from 'react';

const WhyChooseUs = () => {
  const features = [
    {
      number: '01.',
      title: 'Modern UI/UX Design',
      description:
        'We craft each of our websites with full knowledge of how users behave and the basics of visual design to guide customers towards conversion.',
    },
    {
      number: '02.',
      title: 'Fully Responsive Layouts',
      description:
        'Our design process for static web page design is based on mobile-first principles ensuring perfect layout across all modern screen sizes.',
    },
    {
      number: '03.',
      title: 'SEO-Friendly Development',
      description:
        'Website visibility via search engines is automatically included when we design, maximizing your digital presence and organic traffic.',
    },
  ];

  return (
    <div>
      {/* Why Choose Us Section */}
      <section style={styles.sectionContainer}>
        <link
          href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
          rel="stylesheet"
        />

        <style>{`
          .why-main-heading {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 18px;
            font-weight: 500;
            line-height: 1.2;
          }
          .why-card-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 18px;
            font-weight: 500;
            line-height: 1.3;
            transition: color 0.3s ease;
          }
          .why-card {
            background-color: #FFFFFF;
            border: 1px solid #E2E8F0;
            box-shadow: 0 10px 30px rgba(0, 82, 255, 0.05);
            transition: background-color 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease, transform 0.3s ease;
          }
          .why-card:hover {
            background-color: #EFF6FF;
            border-color: #BFDBFE;
            box-shadow: 0 16px 40px rgba(0, 82, 255, 0.14), 0 4px 14px rgba(0, 82, 255, 0.08);
            transform: translateY(-4px);
          }
          .why-card-title {
            color: #0F172A;
          }
          .why-card:hover .why-card-title {
            color: #0052FF;
          }
          @media (min-width: 640px) {
            .why-main-heading { font-size: 24px; }
            .why-card-title { font-size: 20px; }
          }
          @media (min-width: 768px) {
            .why-main-heading { font-size: 26px; }
            .why-card-title { font-size: 22px; }
          }
          @media (min-width: 1024px) {
            .why-main-heading { font-size: 28px; }
            .why-card-title { font-size: 24px; }
          }
          @media (min-width: 1280px) {
            .why-main-heading { font-size: 30px; }
            .why-card-title { font-size: 20px; }
          }
        `}</style>

        <div style={styles.topGlow}></div>
        <div style={styles.bottomGlow}></div>

        <div style={styles.container}>
          <div style={styles.headerWrapper}>
            <span style={styles.badge}>Why Choose us</span>
            <h2 className="why-main-heading" style={styles.mainHeading}>
              We Create Stunning <br />
              <span style={styles.highlightText}>Static Website Designs</span>
            </h2>
            <p style={styles.subHeading}>
              We offer quick, responsive, and impressive static website designs
              that provide an edge to your business with a seamless user experience.
            </p>
          </div>

          <div style={styles.staggeredGrid}>
            <div className="why-card" style={{ ...styles.card, ...styles.cardTop }}>
              <div style={styles.number}>{features[0].number}</div>
              <div style={styles.divider}></div>
              <h3 className="why-card-title" style={styles.cardTitle}>{features[0].title}</h3>
              <p style={styles.cardDescription}>{features[0].description}</p>
            </div>

            <div className="why-card" style={{ ...styles.card, ...styles.cardMiddle }}>
              <div style={styles.number}>{features[1].number}</div>
              <div style={styles.divider}></div>
              <h3 className="why-card-title" style={styles.cardTitle}>{features[1].title}</h3>
              <p style={styles.cardDescription}>{features[1].description}</p>
            </div>

            <div className="why-card" style={{ ...styles.card, ...styles.cardBottom }}>
              <div style={styles.number}>{features[2].number}</div>
              <div style={styles.divider}></div>
              <h3 className="why-card-title" style={styles.cardTitle}>{features[2].title}</h3>
              <p style={styles.cardDescription}>{features[2].description}</p>
            </div>
          </div>
        </div>
      </section>

      {/* Banner Section */}
      <section style={bannerStyles.sectionWrapper}>
        <div style={bannerStyles.bannerContainer}>
          {/* Search Icon Watermark on Left */}
          <div style={bannerStyles.watermarkContainer}>
            <svg 
              style={bannerStyles.watermarkIcon} 
              xmlns="http://www.w3.org/2000/svg" 
              viewBox="0 0 24 24" 
              fill="none" 
              stroke="currentColor" 
              strokeWidth="1.5" 
              strokeLinecap="round" 
              strokeLinejoin="round"
            >
              <circle cx="11" cy="11" r="8"></circle>
              <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
          </div>

          <div style={bannerStyles.leftContent}>
            <span style={bannerStyles.consultationBadge}>
              <span style={bannerStyles.pulseDot}></span>
              Free Consultation
            </span>
            
            <h2 style={bannerStyles.bannerHeading}>
              Start Your Website Project Today
            </h2>
            
            <p style={bannerStyles.bannerParagraph}>
              Share your project requirements with BMDU and receive a comprehensive custom website strategy, including platform recommendations, design direction, technical architecture advice, and a transparent project roadmap tailored specifically to your business goals and online presence objectives.
            </p>
            
            <button style={bannerStyles.contactButton}>
              Contact Us &rarr;
            </button>
            
            <p style={bannerStyles.securityText}>
              100% Secure. We value your privacy.
            </p>
          </div>

          <div style={bannerStyles.rightImageWrapper}>
            <img 
              src="https://4kwallpapers.com/images/walls/thumbs_3t/9660.jpg" 
              alt="3D Element" 
              style={bannerStyles.bannerImage} 
            />
          </div>
        </div>
      </section>
    </div>
  );
};

const styles = {
  sectionContainer: {
    backgroundColor: '#FFFFFF',
    color: '#0F172A',
    minHeight: '100vh',
    padding: '32px 24px',
    display: 'flex',
    justifyContent: 'center',
    alignItems: 'center',
    fontFamily: "'Plus Jakarta Sans', sans-serif",
    position: 'relative',
    overflow: 'hidden',
  },
  topGlow: {
    position: 'absolute',
    top: '-5%',
    left: '50%',
    transform: 'translateX(-50%)',
    width: '700px',
    height: '400px',
    background: 'radial-gradient(circle, rgba(0, 82, 255, 0.12) 0%, rgba(255, 255, 255, 0) 70%)',
    pointerEvents: 'none',
  },
  bottomGlow: {
    position: 'absolute',
    bottom: '-10%',
    right: '-5%',
    width: '600px',
    height: '450px',
    background: 'radial-gradient(circle, rgba(56, 189, 248, 0.15) 0%, rgba(255, 255, 255, 0) 70%)',
    pointerEvents: 'none',
  },
  container: {
    maxWidth: '1280px',
    width: '100%',
    display: 'flex',
    flexDirection: 'column',
    gap: '60px',
    zIndex: 1,
  },
  headerWrapper: {
    textAlign: 'center',
    margin: '0 auto',
    maxWidth: '750px',
    display: 'flex',
    flexDirection: 'column',
    alignItems: 'center',
    gap: '16px',
  },
  // UPDATED: transparent sky-blue badge (matches the "Our Services" badge style)
  badge: {
    display: 'inline-flex',
    alignItems: 'center',
    gap: '8px',
    fontSize: '12px',
    fontWeight: '800',
    letterSpacing: '1px',
    color: '#0369a1',
    backgroundColor: 'rgba(14, 182, 250, 0.15)',
    padding: '8px 20px',
    borderRadius: '30px',
    border: '1px solid rgba(14, 182, 250, 0.3)',
    fontFamily: "'Plus Jakarta Sans', sans-serif",
  },
  mainHeading: {
    margin: 0,
    color: '#0F172A',
  },
  highlightText: {
    background: 'linear-gradient(135deg, #0052FF 0%, #00C6FF 100%)',
    WebkitBackgroundClip: 'text',
    WebkitTextFillColor: 'transparent',
    backgroundClip: 'text',
    color: 'transparent',
    display: 'inline-block',
  },
  subHeading: {
    fontSize: '16px',
    color: '#475569',
    lineHeight: '1.6',
    margin: 0,
    fontFamily: "'Plus Jakarta Sans', sans-serif",
  },
  staggeredGrid: {
    display: 'grid',
    gridTemplateColumns: 'repeat(auto-fit, minmax(280px, 1fr))',
    gap: '32px',
    alignItems: 'start',
  },
  card: {
    display: 'flex',
    flexDirection: 'column',
    padding: '28px',
    borderRadius: '20px',
    position: 'relative',
  },
  cardTop: {
    marginTop: '0px',
  },
  cardMiddle: {
    marginTop: '50px',
  },
  cardBottom: {
    marginTop: '100px',
  },
  number: {
    fontSize: '22px',
    fontWeight: '800',
    color: '#0052FF',
    marginBottom: '12px',
    fontFamily: "'Plus Jakarta Sans', sans-serif",
  },
  divider: {
    width: '100%',
    height: '3px',
    background: 'linear-gradient(90deg, #0052FF 0%, #38BDF8 50%, #E2E8F0 100%)',
    borderRadius: '2px',
    marginBottom: '20px',
  },
  cardTitle: {
    margin: 0,
    marginBottom: '12px',
  },
  cardDescription: {
    fontSize: '15px',
    lineHeight: '1.65',
    color: '#475569',
    margin: 0,
    fontFamily: "'Plus Jakarta Sans', sans-serif",
  },
};

const bannerStyles = {
  sectionWrapper: {
    backgroundColor: '#FFFFFF',
    display: 'flex',
    justifyContent: 'center',
    alignItems: 'center',
    padding: '32px 24px',
    fontFamily: "'Plus Jakarta Sans', sans-serif",
  },
  bannerContainer: {
    position: 'relative',
    width: '100%',
    maxWidth: '1000px',
    backgroundColor: '#09112a',
    color: '#ffffff',
    padding: '40px',
    borderRadius: '24px',
    overflow: 'hidden',
    boxShadow: '0 25px 50px -12px rgba(0, 0, 0, 0.2)',
    display: 'flex',
    alignItems: 'center',
    justifyContent: 'space-between',
    border: '1px solid rgba(30, 58, 138, 0.4)',
  },
  watermarkContainer: {
    position: 'absolute',
    left: '20px',
    bottom: '-20px',
    pointerEvents: 'none',
    zIndex: 1,
  },
  watermarkIcon: {
    width: '240px',
    height: '240px',
    color: 'rgba(255, 255, 255, 0.03)', // Subtle watermark effect
  },
  leftContent: {
    maxWidth: '480px',
    zIndex: 2,
  },
  consultationBadge: {
    display: 'inline-flex',
    alignItems: 'center',
    gap: '8px',
    backgroundColor: 'rgba(10, 25, 60, 0.8)',
    border: '1px solid rgba(59, 130, 246, 0.3)',
    padding: '6px 14px',
    borderRadius: '50px',
    fontSize: '12px',
    fontWeight: 500,
    marginBottom: '16px',
    color: '#ffffff',
  },
  pulseDot: {
    width: '8px',
    height: '8px',
    backgroundColor: '#3b82f6',
    borderRadius: '50%',
  },
  bannerHeading: {
    fontSize: '18px',
    fontWeight: 700,
    letterSpacing: '-0.025em',
    marginBottom: '12px',
    lineHeight: 1.4,
    color: '#ffffff',
    fontFamily: "'Plus Jakarta Sans', sans-serif",
  },
  bannerParagraph: {
    color: 'rgba(191, 219, 254, 0.9)',
    fontSize: '13px',
    lineHeight: 1.6,
    marginBottom: '24px',
    fontFamily: "'Plus Jakarta Sans', sans-serif",
  },
  contactButton: {
    background: 'linear-gradient(135deg, #2563eb 0%, #3b82f6 100%)',
    color: '#ffffff',
    fontWeight: 600,
    padding: '10px 22px',
    fontSize: '12px',
    borderRadius: '50px',
    border: 'none',
    cursor: 'pointer',
    boxShadow: '0 4px 14px rgba(37, 99, 235, 0.3)',
  },
  securityText: {
    fontSize: '11px',
    color: 'rgba(147, 197, 253, 0.6)',
    marginTop: '16px',
    fontFamily: "'Plus Jakarta Sans', sans-serif",
  },
  rightImageWrapper: {
    position: 'absolute',
    right: 0,
    top: 0,
    height: '100%',
    width: '55%',
    display: 'flex',
    alignItems: 'center',
    justifyContent: 'flex-end',
    pointerEvents: 'none',
    zIndex: 1,
  },
  bannerImage: {
    height: '100%',
    width: '100%',
    objectFit: 'cover',
    opacity: 0.95,
  },
};

export default WhyChooseUs;