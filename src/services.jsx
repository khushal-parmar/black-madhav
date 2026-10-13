import { motion } from "framer-motion";
import { useState } from "react";
import {
  ArrowRight,
  Globe,
  Smartphone,
  Megaphone,
  Search,
  Code,
  Palette,
  Layout,
  Tag,
} from "lucide-react";

const services = [
  {
    icon: <Globe className="w-7 h-7" />,
    title: "Web Development",
    description:
      "Professional, fast, and responsive websites designed to convert visitors into customers.",
    overview: "We provide modern, responsive, and high-performance website development services tailored to your business needs. Our goal is to create websites that not only look great but also deliver results.",
    offerings: [
      "Business & Corporate Websites",
      "E-commerce Development",
      "Custom Web Applications",
      "Landing Pages",
      "WordPress Development"
    ],
    features: [
      "Mobile Responsive Design",
      "Fast Loading Speed",
      "SEO-Friendly Structure",
      "Secure & Scalable Development"
    ],
    benefits: "A professionally developed website builds credibility, improves user experience, and helps convert visitors into customers."
  },
  {
    icon: <Smartphone className="w-7 h-7" />,
    title: "App Development",
    description:
      "Modern mobile applications for Android and cross-platform that deliver smooth performance.",
    overview: "We design and develop powerful mobile applications that provide seamless user experience and enhance customer engagement.",
    offerings: [
      "Android App Development",
      "iOS App Development",
      "Cross-Platform Apps",
      "Custom Business Apps"
    ],
    features: [
      "User-Friendly Interface",
      "High Performance",
      "Secure Architecture",
      "Scalable Solutions"
    ],
    benefits: "Mobile apps help businesses connect with customers directly and improve accessibility."
  },
  {
    icon: <Megaphone className="w-7 h-7" />,
    title: "Digital Marketing",
    description:
      "Result-driven marketing strategies to increase brand awareness, traffic, and leads.",
    overview: "Our digital marketing services help your business reach the right audience and generate quality leads through effective strategies.",
    offerings: [
      "Social Media Marketing",
      "Paid Ads (Google & Meta)",
      "Content Marketing",
      "Lead Generation Campaigns"
    ],
    features: [
      "Targeted Audience Reach",
      "Data-Driven Strategies",
      "Performance Tracking",
      "ROI-Focused Campaigns"
    ],
    benefits: "Increases brand awareness, website traffic, and business growth."
  },
  {
    icon: <Search className="w-7 h-7" />,
    title: "SEO",
    description:
      "Improve your Google ranking and reach more customers organically.",
    overview: "We improve your website's visibility on search engines to drive organic traffic and increase rankings.",
    offerings: [
      "Keyword Research",
      "On-Page SEO",
      "Technical SEO",
      "Off-Page SEO"
    ],
    features: [
      "Google Ranking Improvement",
      "Website Optimization",
      "Content Strategy",
      "Analytics & Reporting"
    ],
    benefits: "Higher rankings bring more traffic, leads, and long-term growth."
  },
  {
    icon: <Code className="w-7 h-7" />,
    title: "AI Solutions",
    description:
      "Smart automation and AI-powered systems to improve efficiency and business growth.",
    overview: "We provide smart AI-powered solutions to automate processes, improve efficiency, and enhance business decision-making.",
    offerings: [
      "Chatbot Development",
      "AI Automation Tools",
      "Data Analysis & Insights",
      "AI-Based Business Solutions"
    ],
    features: [
      "Automation",
      "Smart Decision Support",
      "Time & Cost Efficiency",
      "Scalable Systems"
    ],
    benefits: "AI helps businesses work faster, smarter, and more efficiently."
  },
  {
    icon: <Palette className="w-7 h-7" />,
    title: "Graphic Design",
    description:
      "Creative designs that strengthen your brand identity and visual communication.",
    overview: "We create visually appealing and creative designs that strengthen your brand identity.",
    offerings: [
      "Logo Design",
      "Social Media Creatives",
      "Banners & Posters",
      "Marketing Materials"
    ],
    features: [
      "Creative Concepts",
      "Modern Design Trends",
      "Brand Consistency",
      "High-Quality Output"
    ],
    benefits: "Good design attracts attention and builds a strong brand image."
  },
  {
    icon: <Layout className="w-7 h-7" />,
    title: "UI/UX Design",
    description:
      "User-focused designs that improve usability, engagement, and conversion rates.",
    overview: "We design intuitive and user-friendly interfaces that provide a smooth and engaging user experience.",
    offerings: [
      "Website UI Design",
      "App UI Design",
      "Wireframing & Prototyping",
      "User Experience Optimization"
    ],
    features: [
      "Clean & Modern Layouts",
      "Easy Navigation",
      "User-Centered Design",
      "Conversion-Focused Approach"
    ],
    benefits: "Better UI/UX increases user satisfaction and improves conversions."
  },
  {
    icon: <Tag className="w-7 h-7" />,
    title: "Branding",
    description:
      "Build a strong and memorable brand identity that stands out in the market.",
    overview: "We help businesses build a strong and memorable brand identity that stands out in the market.",
    offerings: [
      "Brand Strategy",
      "Logo & Identity Design",
      "Brand Guidelines",
      "Social Media Branding"
    ],
    features: [
      "Unique Brand Identity",
      "Consistent Visual Style",
      "Market Positioning",
      "Professional Branding"
    ],
    benefits: "Strong branding builds trust, recognition, and long-term business success."
  },
];

// Service Card Component with 360 Rotation
function ServiceCard({ service, index }) {
  const [isFlipped, setIsFlipped] = useState(false);

  return (
    <motion.div
      initial={{ opacity: 0, y: 24 }}
      whileInView={{ opacity: 1, y: 0 }}
      viewport={{ once: true }}
      transition={{ duration: 0.5, delay: index * 0.05 }}
      className="h-full"
    >
      <div
        onClick={() => setIsFlipped(!isFlipped)}
        className="relative w-full h-[470px] sm:h-[480px] cursor-pointer select-none perspective"
        style={{
          perspective: "1200px",
        }}
      >
        <motion.div
          initial={{ rotateY: 0 }}
          animate={{ rotateY: isFlipped ? 180 : 0 }}
          transition={{ duration: 0.6, ease: [0.4, 0, 0.2, 1] }}
          style={{
            transformStyle: "preserve-3d",
          }}
          className="relative w-full h-full"
        >
          {/* Front Side */}
          <div
            style={{ backfaceVisibility: "hidden" }}
            className="absolute inset-0 w-full h-full rounded-2xl border-2 border-blue-100 bg-white p-6 sm:p-7 shadow-sm hover:border-blue-500 hover:shadow-xl hover:shadow-blue-500/10 transition-all duration-300 flex flex-col justify-between"
          >
            <div>
              <div className="mb-5 inline-flex h-12 w-12 sm:h-13 sm:w-13 items-center justify-center rounded-xl bg-blue-600 text-white shadow-md shadow-blue-600/20">
                {service.icon}
              </div>
              <h3 className="mb-3 text-xl sm:text-2xl font-bold text-[#1e3a8a]">{service.title}</h3>
              <p className="text-sm sm:text-base leading-relaxed text-[#4b5563]">{service.description}</p>
            </div>
            <div className="mt-auto pt-4">
              <div className="w-full border-t border-blue-100 mb-4"></div>
              <p className="text-sm font-medium text-blue-600 hover:text-blue-700 text-center tracking-normal">
                Click to see more details
              </p>
            </div>
          </div>

          {/* Back Side (360 Flip Detail View) */}
          <div
            style={{
              backfaceVisibility: "hidden",
              transform: "rotateY(180deg)",
            }}
            className="absolute inset-0 w-full h-full rounded-2xl border-2 border-blue-500 bg-[#0d3880] text-white shadow-xl overflow-hidden"
          >
            <div className="w-full h-full p-6 sm:p-7 overflow-y-auto service-card-scrollbar scrollbar-thin flex flex-col">
              <h4 className="text-lg sm:text-xl font-bold mb-2 text-white">Overview</h4>
              <p className="text-sm leading-relaxed text-white/95 mb-4">{service.overview}</p>

              <h4 className="text-lg sm:text-xl font-bold mb-2 text-white">What We Offer</h4>
              <ul className="text-sm space-y-1.5 mb-4">
                {service.offerings.map((offer, i) => (
                  <li key={i} className="flex items-start text-white/95">
                    <span className="text-white font-bold mr-2.5">•</span>
                    <span>{offer}</span>
                  </li>
                ))}
              </ul>

              {service.features && service.features.length > 0 && (
                <>
                  <h4 className="text-lg sm:text-xl font-bold mb-2 text-white">Key Features</h4>
                  <ul className="text-sm space-y-1.5 mb-4">
                    {service.features.map((feature, i) => (
                      <li key={i} className="flex items-start text-white/95">
                        <span className="text-white font-bold mr-2">✓</span>
                        <span>{feature}</span>
                      </li>
                    ))}
                  </ul>
                </>
              )}

              {service.benefits && (
                <div className="mt-2 text-sm text-white/95 leading-relaxed pb-2">
                  <strong className="font-bold text-white">Benefits:</strong> {service.benefits}
                </div>
              )}
            </div>
          </div>
        </motion.div>
      </div>
    </motion.div>
  );
}


export default function Services() {
  return (
    <div className="min-h-screen bg-white pt-28 pb-16">
      <section className="bg-gradient-to-r from-blue-950 to-blue-900 py-20 text-white">
        <div className="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <p className="mb-3 text-sm font-semibold uppercase tracking-widest text-blue-300">
            Services
          </p>
          <h1 className="mb-6 text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight">
            Complete Digital Solutions for Business Growth
          </h1>
          <p className="mx-auto max-w-2xl text-base sm:text-lg leading-relaxed text-blue-100">
            From websites and apps to branding, marketing, and AI systems, we deliver digital solutions that grow revenue and strengthen your brand.
          </p>
          <div className="mt-10 inline-flex items-center justify-center gap-4 flex-wrap">
            <a
              href="/"
              className="inline-flex h-12 sm:h-14 items-center justify-center rounded-md bg-blue-500 hover:bg-blue-600 px-6 sm:px-8 text-sm sm:text-base font-semibold text-white transition-all"
            >
              Back to Home
            </a>
            <a
              href="#services-list"
              className="inline-flex h-12 sm:h-14 items-center justify-center rounded-md border-2 border-blue-400 bg-transparent px-6 sm:px-8 text-sm sm:text-base font-semibold text-blue-200 transition-colors hover:bg-blue-500/10"
            >
              View Services <ArrowRight className="ml-2 h-4 w-4 sm:h-5 sm:w-5" />
            </a>
          </div>
        </div>
      </section>

      <section id="services-list" className="container mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20">
        <div className="mx-auto mb-12 sm:mb-16 max-w-3xl text-center">
          <p className="mb-3 text-xs sm:text-sm font-semibold uppercase tracking-widest text-blue-600">
            Our Services
          </p>
          <h2 className="text-2xl sm:text-3xl md:text-5xl font-bold tracking-tight text-gray-900">
            Services Designed to Support Every Stage of Your Growth
          </h2>
          <p className="mt-4 text-sm sm:text-base md:text-lg leading-relaxed text-gray-600">
            Click on any service card to explore detailed information about what we offer, key features, and benefits.
          </p>
        </div>

        <div className="grid gap-6 sm:gap-7 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
          {services.map((service, index) => (
            <ServiceCard key={service.title} service={service} index={index} />
          ))}
        </div>
      </section>
    </div>
  );
}
