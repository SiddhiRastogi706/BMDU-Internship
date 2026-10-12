import './App.css'
import heroImage from './assets/hero.png'
import Statics from './statics'
import Services from './Services'
import WhyChooseUs from './whychooseus'
import EducationFeature from './EducationFeature'
import ProcessSection from './ProcessSection'
import CtaSection from './CtaSection'
import BenefitsSection from './BenefitsSection'
import VisionCtaSection from './VisionCtaSection'
import CaseStudies from './CaseStudies'
import IndustriesSection from './IndustriesSection'
import DigitalFoundationSection from './DigitalFoundationSection'
import TestimonialSection from './TestimonialSection'
import StrategyCallSection from './StrategyCallSection'
import FAQSection from './FAQSection'

function App() {
  return (
    <div className="page">
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');

        html, body {
          overflow-x: hidden;
          max-width: 100%;
        }

        .page {
          font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .cta {
          font-family: 'Plus Jakarta Sans', sans-serif;
        }

        @media (max-width: 960px) {
          .hero-text {
            padding-left: 1.5rem;
          }
        }
      `}</style>

      <section className="hero">
        <div className="hero-bg">
          <img
            className="hero-image"
            src="https://media.istockphoto.com/id/2233949508/vector/futuristic-blue-grid-tunnel-background-with-light-effects.jpg?s=612x612&w=0&k=20&c=jtun1d3TF8nt8fFRHbT7tvCzYOncfNyegUYrRh4eR38="
            alt="Restaurant app hero background"
          />
          <div className="hero-fade" />
        </div>

        <div className="hero-text">
          <div className="badge">
            <svg className="badge-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3 21L21 3M21 3H9M21 3V15" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"/>
            </svg>
             Premium Static Website Design Services
          </div>
          <h1>
            Static Website Design 
            <br />
            <span className="accent">Delivers Visual Impact </span>
            <br />
          
          </h1>
          <p>
            BMDU is a trustworthy static web design company in India, 
            specializing in creating top-quality, fast-loading, and visually 
            appealing static websites using high-quality code, mobile-responsive 
            designs, and SEO-driven architecture to ensure greater visibility and a superior user 
            experience for your audience.
          </p>
          <button className="cta">Start Your Project</button>
        </div>
      </section>
      <Statics />
       <Services />
      <WhyChooseUs />
      <EducationFeature />
      <ProcessSection />
      <CtaSection />
      <BenefitsSection />
      <VisionCtaSection />
      <CaseStudies />
      <IndustriesSection />
      <DigitalFoundationSection />
      <TestimonialSection />
      <StrategyCallSection />
      <FAQSection /> 
    </div>
  )
}

export default App