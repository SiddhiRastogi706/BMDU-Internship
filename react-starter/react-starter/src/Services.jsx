import React, { useState, useEffect, useRef } from "react";
import {
  Monitor,
  Smartphone,
  Gauge,
  TrendingUp,
  PenTool,
  ShieldCheck,
  Boxes,
  Layers,
} from "lucide-react";

const tabData = [
  {
    id: "01",
    title: "Custom Static Websites",
    icon: Monitor,
    desc: "Your website is the foundation of your digital presence, and it deserves to be built properly. Our static website designing services include fully custom website development, featuring modern layouts, pixel-perfect visuals, and clean, well-structured code that delivers a professional online presence and an exceptional user experience for every visitor who lands on your site.",
  },
  {
    id: "02",
    title: "Responsive Design",
    icon: Smartphone,
    desc: "All the websites created by us, BMDU, are completely responsive, meaning that they will adjust themselves seamlessly regardless of the display size, device used, or the kind of browser environment your viewers utilize. Our static web page design allows your website to be optimized for any viewing device – laptops, tablets, or even smartphones.",
  },
  {
    id: "03",
    title: "Website Speed Optimization",
    icon: Gauge,
    desc: "Page speed is not only one of the major factors affecting search engine rankings but also a direct catalyst for increasing engagement and conversions. With our static website design experts, you can ensure all aspects of your site, including image compression and other technical details like optimization of Core Web Vitals and hosting settings, will contribute to your higher page speed.",
  },
  {
    id: "04",
    title: "SEO-Friendly Development",
    icon: TrendingUp,
    desc: "A beautiful website that cannot be found on Google delivers limited business value. As a leading static web design company in India, we build every website with SEO best practices embedded from the ground up—including clean semantic HTML structure, optimized heading hierarchy, structured data markup, and performance-first architecture that search engines reward with higher visibility.",
  },
  {
    id: "05",
    title: "UI/UX Design",
    icon: PenTool,
    desc: "Outstanding static websites begin with outstanding design. The UI/UX designers in our team develop visually elegant and user-centric designs through careful consideration of effective navigation, well-planned layouts, and branding aesthetics, all contributing to a user experience on your website that captures attention, conveys your message, and motivates desired responses.",
  },
  {
    id: "06",
    title: "Secure Web Architecture",
    icon: ShieldCheck,
    desc: "Static websites are inherently more secure than dynamic alternatives—and BMDU builds them to the highest security standards. Our static website designing services include lightweight, hardened web architecture with reliable hosting configuration, minimal attack surface, and stable long-term performance — protecting your website and your visitors without the complexity of dynamic CMS security management.",
  },
  {
    id: "07",
    title: "Modern Static Web Solutions",
    icon: Boxes,
    desc: "From corporate websites and product landing pages to portfolio platforms and professional service sites, our static website design company delivers high-performance static web solutions focused on speed, responsive design, SEO optimization, modern UI/UX, and scalable digital experiences—built for growing businesses that need a reliable, high-quality online presence from day one.",
  },
];

export default function Service() {
  const [currentIndex, setCurrentIndex] = useState(0);
  const [isIntersecting, setIsIntersecting] = useState(false);
  const activeTabRef = useRef(null);
  const sectionRef = useRef(null);
  const tabsListRef = useRef(null);
  const timerRef = useRef(null);
  const firstItemRef = useRef(null);
  const [listMaxHeight, setListMaxHeight] = useState(null);

  // Measure a single tab item's height so the left list always shows exactly 4 at a time
  useEffect(() => {
    const updateHeight = () => {
      if (firstItemRef.current) {
        setListMaxHeight(firstItemRef.current.offsetHeight * 4);
      }
    };
    updateHeight();
    window.addEventListener("resize", updateHeight);
    return () => window.removeEventListener("resize", updateHeight);
  }, []);

  // Intersection Observer to detect if section is in view
  useEffect(() => {
    const observer = new IntersectionObserver(
      ([entry]) => {
        setIsIntersecting(entry.isIntersecting);
      },
      {
        root: null, // use the viewport
        threshold: 0.1, // trigger when 10% of the section is visible
      }
    );

    if (sectionRef.current) {
      observer.observe(sectionRef.current);
    }

    return () => {
      if (sectionRef.current) {
        observer.unobserve(sectionRef.current);
      }
    };
  }, []);

  // Auto-play timer logic - ONLY runs when in view
  useEffect(() => {
    if (isIntersecting) {
      // Start timer if in view
      timerRef.current = setInterval(() => {
        setCurrentIndex((prevIndex) => (prevIndex + 1) % tabData.length);
      }, 4000);
    } else {
      // Clear timer if out of view
      if (timerRef.current) {
        clearInterval(timerRef.current);
      }
    }

    // Cleanup on unmount or when visibility changes
    return () => {
      if (timerRef.current) {
        clearInterval(timerRef.current);
      }
    };
  }, [isIntersecting]); // Dependencies: only re-run when visibility changes

  // Scroll active tab into view - contained inside the tabs list only.
  // FIX: previously used element.scrollIntoView(), which can bubble up and
  // scroll the whole page (jumping the user back to this section even while
  // they're reading a different section further down). Now we manually
  // scroll just the tabsList container, so the page scroll position never moves.
  useEffect(() => {
    if (!isIntersecting) return;
    const container = tabsListRef.current;
    const activeEl = activeTabRef.current;
    if (!container || !activeEl) return;

    // NOTE: previously this used activeEl.offsetTop, but offsetTop is
    // measured against the element's offsetParent (nearest POSITIONED
    // ancestor), which is NOT guaranteed to be this scroll container when
    // none of the ancestors in between have position set. That mismatch
    // caused wrong target values, so the list would sometimes get stuck
    // scrolled down and never scroll back up for earlier items (1,2,3).
    // getBoundingClientRect() is measured against the viewport instead,
    // so combining it with the container's own rect + scrollTop always
    // gives the correct position regardless of the offsetParent chain.
    const containerRect = container.getBoundingClientRect();
    const itemRect = activeEl.getBoundingClientRect();

    const itemTop = itemRect.top - containerRect.top + container.scrollTop;
    const itemBottom = itemTop + itemRect.height;

    const containerTop = container.scrollTop;
    const containerBottom = containerTop + container.clientHeight;

    let target = null;
    if (itemTop < containerTop) {
      target = itemTop;
    } else if (itemBottom > containerBottom) {
      target = itemBottom - container.clientHeight;
    }

    if (target !== null) {
      container.scrollTo({ top: target, behavior: "smooth" });
    }
  }, [currentIndex, isIntersecting]);

  const activeData = tabData[currentIndex];
  const ActiveIcon = activeData.icon;

  // Manual tab selection - resets the timer implicitly since it changes state while visible
  const handleTabClick = (index) => {
    setCurrentIndex(index);
    // Intersection observer will handle stopping/starting the timer based on visibility
  };

  return (
    <div ref={sectionRef} style={styles.pageContainer}>
      <style>{`
        .custom-tab-scroll::-webkit-scrollbar {
          width: 6px;
        }
        .custom-tab-scroll::-webkit-scrollbar-track {
          background: #e0f2fe;
        }
        .custom-tab-scroll::-webkit-scrollbar-thumb {
          background: linear-gradient(180deg, #1d8cf8, #00d1ff);
          border-radius: 6px;
        }
        @media (max-width: 768px) {
          .main-grid-layout {
            grid-template-columns: 1fr !important;
          }
        }

        /* Heading sizes matched to global index.css h2/h3 rules */
        .svc-main-title {
          font-family: 'Plus Jakarta Sans', sans-serif !important;
          font-size: 30px !important;
          font-weight: 500;
          line-height: 1.1;
        }
        .svc-card-title {
          font-family: 'Plus Jakarta Sans', sans-serif;
          font-size: 18px;
          font-weight: 500;
          line-height: 1.1;
        }
        @media (min-width: 640px) {
          .svc-card-title { font-size: 20px; }
        }
        @media (min-width: 768px) {
          .svc-card-title { font-size: 22px; }
        }
        @media (min-width: 1280px) {
          .svc-card-title { font-size: 20px; }
        }
      `}</style>

      {/* Top Header Section */}
      <div style={styles.headerSection}>
        {/* FIX 2: Blue Transparent Badge */}
        <div style={styles.badge}>
          <Layers style={{ width: 16, height: 16, color: "#0EB6FA" }} />
          Our Services
        </div>

        <h2 className="svc-main-title" style={styles.mainTitle}>
          Build Powerful Static <br />
          <span style={styles.titleHighlight}>
            Websites That Perform
            <span style={styles.titleUnderline}></span>
          </span>
        </h2>

        <p style={styles.headerDesc}>
          As a specialist static website design company, BMDU creates fast,
          secure, visually engaging static websites designed to improve your
          brand presence, deliver outstanding user experiences, and drive
          measurable improvements in online performance.
        </p>
      </div>

      {/* Main Grid Layout */}
      <div className="main-grid-layout" style={styles.gridLayout}>

        {/* Left Side: Headings List */}
        {/* FIX: outer wrapper owns the rounded corners + border + shadow and
            clips overflow. The inner scrollable div no longer has its own
            radius/border, so the scrollbar thumb can never poke out past
            the rounded bottom corner anymore. */}
        <div style={styles.tabsListWrapper}>
          <div
            ref={tabsListRef}
            className="custom-tab-scroll"
            style={{
              ...styles.tabsList,
              maxHeight: listMaxHeight ? `${listMaxHeight}px` : styles.tabsList.maxHeight,
            }}
          >
            {tabData.map((item, index) => {
              const IconComponent = item.icon;
              const isActive = index === currentIndex;

              return (
                <div
                  key={item.id}
                  ref={(el) => {
                    if (isActive) activeTabRef.current = el;
                    if (index === 0) firstItemRef.current = el;
                  }}
                  onClick={() => handleTabClick(index)}
                  style={{
                    ...styles.tabItem,
                    backgroundColor: isActive ? "#e0f2fe" : "#ffffff",
                    color: isActive ? "#0369a1" : "#0f172a",
                  }}
                >
                  {isActive && <span style={styles.activeIndicator}></span>}

                  <div
                    style={{
                      ...styles.tabIconBox,
                      background: isActive
                        ? "linear-gradient(135deg, #1D8CF8, #00D1FF)"
                        : "#f0f9ff",
                      color: isActive ? "#ffffff" : "#0EB6FA",
                      boxShadow: isActive ? "0 4px 12px rgba(14, 182, 250, 0.4)" : "none",
                    }}
                  >
                    <IconComponent style={{ width: 18, height: 18 }} />
                  </div>

                  <span style={{ flex: 1 }}>{item.title}</span>
                </div>
              );
            })}
          </div>
        </div>

        {/* Right Side: Glowy Content Box */}
        <div style={styles.glowCard}>
          <div style={styles.cardHeader}>
            <span style={styles.numberBadge}>{activeData.id}</span>
            <div style={styles.headerLine}></div>
            <ActiveIcon style={styles.cardHeaderIcon} />
          </div>

          <div style={{ position: "relative", zIndex: 2 }}>
            <h3 className="svc-card-title" style={styles.cardTitle}>{activeData.title}</h3>
            <p style={styles.cardDesc}>{activeData.desc}</p>
          </div>

          {/* Watermark Icon */}
          <ActiveIcon style={styles.watermarkIcon} />
        </div>

      </div>
    </div>
  );
}

const styles = {
  pageContainer: {
    backgroundColor: "#f8fafc",
    minHeight: "100vh",
    padding: "32px 16px",
    fontFamily: "'Plus Jakarta Sans', system-ui, -apple-system, sans-serif",
    color: "#0f172a",
    boxSizing: "border-box",
  },
  headerSection: {
    maxWidth: "800px",
    margin: "0 auto 48px auto",
    textAlign: "center",
  },
  badge: {
    display: "inline-flex",
    alignItems: "center",
    gap: "8px",
    backgroundColor: "rgba(14, 182, 250, 0.15)",
    color: "#0369a1",
    padding: "8px 20px",
    borderRadius: "30px",
    fontSize: "12px",
    fontWeight: "800",
    letterSpacing: "1px",
    marginBottom: "16px",
    border: "1px solid rgba(14, 182, 250, 0.3)",
  },
  mainTitle: {
    color: "#0f172a",
    margin: "0 0 16px 0",
  },
  titleHighlight: {
    color: "#0EB6FA",
    position: "relative",
    display: "inline-block",
  },
  titleUnderline: {
    position: "absolute",
    bottom: "-8px",
    left: "50%",
    transform: "translateX(-50%)",
    width: "60px",
    height: "4px",
    background: "linear-gradient(90deg, #1D8CF8 0%, #00D1FF 100%)",
    borderRadius: "2px",
  },
  headerDesc: {
    fontSize: "16px",
    lineHeight: "1.7",
    color: "#475569",
    marginTop: "24px",
  },
  gridLayout: {
    maxWidth: "1080px",
    margin: "0 auto",
    display: "grid",
    gridTemplateColumns: "330px 1fr",
    gap: "30px",
    alignItems: "start",
  },
  // NEW: wrapper owns radius/border/shadow + clips the scrollbar
  tabsListWrapper: {
    borderRadius: "16px",
    overflow: "hidden",
    border: "1px solid #e2e8f0",
    boxShadow: "0 4px 15px rgba(0,0,0,0.03)",
  },
  tabsList: {
    backgroundColor: "#ffffff",
    overflowY: "auto",
    maxHeight: "480px",
    display: "flex",
    flexDirection: "column",
    position: "relative", // ensures a stable coordinate reference for children
    // radius/border/shadow removed from here — moved to tabsListWrapper
  },
  tabItem: {
    display: "flex",
    alignItems: "center",
    gap: "12px",
    padding: "18px 20px",
    borderBottom: "1px solid #f1f5f9",
    cursor: "pointer",
    position: "relative",
    fontFamily: "'Plus Jakarta Sans', sans-serif",
    fontWeight: "700",
    fontSize: "15px",
    transition: "all 0.2s ease",
  },
  activeIndicator: {
    position: "absolute",
    left: 0,
    top: 0,
    bottom: 0,
    width: "4px",
    background: "linear-gradient(180deg, #1D8CF8, #00D1FF)",
    boxShadow: "0 0 10px #0EB6FA",
  },
  tabIconBox: {
    width: "38px",
    height: "38px",
    borderRadius: "10px",
    display: "flex",
    alignItems: "center",
    justifyContent: "center",
    flexShrink: 0,
    transition: "all 0.3s ease",
  },
  glowCard: {
    backgroundColor: "#ffffff",
    borderRadius: "16px",
    padding: "40px",
    position: "relative",
    border: "1.5px solid #bae6fd",
    minHeight: "320px",
    display: "flex",
    flexDirection: "column",
    justifyContent: "center",
    overflow: "hidden",
    boxShadow: "0 0 25px rgba(14, 182, 250, 0.25), 0 10px 30px rgba(29, 140, 248, 0.15)",
    boxSizing: "border-box",
  },
  cardHeader: {
    display: "flex",
    alignItems: "center",
    justifyContent: "space-between",
    marginBottom: "24px",
    position: "relative",
  },
  numberBadge: {
    background: "linear-gradient(135deg, #1D8CF8, #00D1FF)",
    color: "#ffffff",
    padding: "6px 14px",
    borderRadius: "8px",
    fontSize: "14px",
    fontWeight: "800",
    zIndex: 2,
    boxShadow: "0 2px 8px rgba(14, 182, 250, 0.4)",
  },
  headerLine: {
    position: "absolute",
    left: 0,
    right: 0,
    top: "50%",
    height: "1px",
    background: "linear-gradient(90deg, #bae6fd, transparent)",
    zIndex: 1,
  },
  cardHeaderIcon: {
    width: "22px",
    height: "22px",
    color: "#0EB6FA",
    backgroundColor: "#ffffff",
    paddingLeft: "12px",
    zIndex: 2,
  },
  cardTitle: {
    color: "#0f172a",
    marginBottom: "16px",
  },
  cardDesc: {
    fontSize: "16px",
    lineHeight: "1.7",
    color: "#475569",
    margin: 0,
  },
  watermarkIcon: {
    position: "absolute",
    bottom: "-40px",
    right: "-30px",
    width: "220px",
    height: "220px",
    color: "#0EB6FA",
    opacity: 0.08,
    zIndex: 1,
    pointerEvents: "none",
    filter: "drop-shadow(0 0 10px rgba(14, 182, 250, 0.4))",
  },
};