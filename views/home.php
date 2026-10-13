<?php
/**
 * View: Home Page
 * Light Navy Blue + White theme. Styles + animations are included at the bottom of this file (self-contained).
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../components/HeroSection.php';
require_once __DIR__ . '/../components/OfficeLocations.php';

$services = [
    [
        'icon' => '<svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>',
        'title' => "Web Development",
        'description' => "Professional, fast, and responsive websites designed to convert visitors into customers.",
    ],
    [
        'icon' => '<svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>',
        'title' => "App Development",
        'description' => "Modern mobile applications for Android and cross-platform that deliver smooth performance and user experience.",
    ],
    [
        'icon' => '<svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>',
        'title' => "Digital Marketing",
        'description' => "Result-driven marketing strategies to increase brand awareness, traffic, and leads.",
    ],
    [
        'icon' => '<svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>',
        'title' => "SEO",
        'description' => "Improve your Google ranking and reach more customers organically.",
    ],
    [
        'icon' => '<svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>',
        'title' => "AI Solutions",
        'description' => "Smart automation and AI-powered systems to improve efficiency and business growth.",
    ],
    [
        'icon' => '<svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4 5 5 0 016-4.5 4 4 0 014 4.5 4 4 0 01-4 4H7z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707"/></svg>',
        'title' => "Graphic Design",
        'description' => "Creative designs that strengthen your brand identity and visual communication.",
    ],
    [
        'icon' => '<svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>',
        'title' => "UI/UX Design",
        'description' => "User-focused designs that improve usability, engagement, and conversion rates.",
    ],
    [
        'icon' => '<svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>',
        'title' => "Branding",
        'description' => "Build a strong and memorable brand identity that stands out in the market.",
    ],
];

$whyChooseItems = [
    [
        'title' => "Business-Focused Solutions",
        'description' => "We design every solution based on your business goals and target audience.",
    ],
    [
        'title' => "Modern & Professional Design",
        'description' => "Clean, premium, and user-friendly designs that build trust and credibility.",
    ],
    [
        'title' => "Complete Services Under One Roof",
        'description' => "From development to marketing, everything is handled by one expert team.",
    ],
    [
        'title' => "Experienced Team",
        'description' => "Skilled designers, developers, and marketers working together for your success.",
    ],
    [
        'title' => "Long-Term Support",
        'description' => "We don't just deliver — we support your business for long-term growth.",
    ],
];

$portfolioItems = [
    [
        'title' => "E-commerce Website",
        'description' => "Developed a high-performance e-commerce website with modern UI/UX, responsive design, and secure checkout.",
    ],
    [
        'title' => "Business Website",
        'description' => "Created a professional business website to strengthen brand identity and capture qualified leads.",
    ],
    [
        'title' => "Mobile App UI",
        'description' => "Designed an intuitive mobile app interface with smooth navigation and modern visuals for better user retention.",
    ],
    [
        'title' => "Digital Marketing Campaign",
        'description' => "Executed targeted marketing campaigns that increased reach, engagement, and lead generation.",
    ],
    [
        'title' => "SEO Optimization",
        'description' => "Optimized website structure and content to improve search rankings and organic traffic.",
    ],
    [
        'title' => "Brand Identity Design",
        'description' => "Developed a cohesive brand identity system with logo, colors, and visual guidelines.",
    ],
];

$testimonials = [
    [
        'category' => "Web Development",
        'rating' => 5,
        'quote' => "We needed a modern and fast website that reflects our brand professionally. The team understood our requirements clearly and delivered beyond expectations. The website design and performance exceeded expectations. Everything is fast, responsive, and user-friendly.",
        'author' => "Nikhil Patel, Patel Fashion Hub",
    ],
    [
        'category' => "App Development",
        'rating' => 5,
        'quote' => "We wanted a mobile app that is simple, fast, and easy to use. The team delivered a smooth and high-quality application. Smooth app performance with a clean interface. The team delivered exactly what we needed.",
        'author' => "Neha Sharma, Urban Trendz",
    ],
    [
        'category' => "Digital Marketing",
        'rating' => 5,
        'quote' => "We were struggling to generate leads online before working with them. Their marketing strategies brought real results. Our lead generation improved significantly after working with them. Great marketing strategies.",
        'author' => "Amit Verma, Style Street India",
    ],
     [
        'category' => "SEO Services",
        'rating' => 5,
        'quote' => "Our website was not ranking on search engines before. Their SEO work made a big difference in visibility. We saw noticeable improvement in rankings and organic traffic within months. Their SEO strategy is result-driven and well-planned. Highly recommended.",
        'author' => "Priya Mehta, NextGen Store",
    ],
     [
        'category' => "AI Solutions",
        'rating' => 5,
        'quote' => "We needed automation to reduce manual work and improve efficiency. Their AI solutions were practical and effective. AI automation saved us time and improved our workflow efficiency.",
        'author' => "Karan Shah",
    ],
     [
        'category' => "Graphic Design",
        'rating' => 5,
        'quote' => "We were looking for creative visuals that match our brand identity. Their designs were exactly what we needed. Creative and eye-catching designs that perfectly match our brand identity.",
        'author' => "Ritu Agarwal",
    ],
     [
        'category' => "UI/UX Design",
        'rating' => 5,
        'quote' => "Our platform needed a better user experience to improve engagement. Their design approach was user-focused and modern. User experience improved significantly after redesign. Clean and modern design.",
        'author' => "Manish Gupta",
    ],
    [
        'category' => "Branding",
        'rating' => 5,
        'quote' => "Our brand identity was inconsistent before working with them. They created a strong and professional brand presence. Our brand identity now looks professional and consistent across all platforms.",
        'author' => "Sneha Desai",
    ],
];

$faqItems = [
    [
        'question' => "What services do you offer?",
        'answer' => "We provide complete IT and digital solutions including website development, mobile applications, AI solutions, UI/UX design, SEO, digital marketing, branding, and video production.",
    ],
    [
        'question' => "How long will my project take to complete?",
        'answer' => "The timeline depends on the project scope. A basic website usually takes 1–2 weeks, while advanced applications or custom solutions may take 3–6 weeks or more.",
    ],
    [
        'question' => "Do you provide customized solutions?",
        'answer' => "Yes, every project is designed based on your business goals, target audience, and industry requirements.",
    ],
    [
        'question' => "Will my website be mobile-friendly and SEO optimized?",
        'answer' => "Absolutely. All our websites are fully responsive and built with SEO best practices to ensure better visibility and performance.",
    ],
    [
        'question' => "Do you provide support after the project is completed?",
        'answer' => "Yes, we offer ongoing support, maintenance, and updates to ensure your system runs smoothly.",
    ],
    [
        'question' => "How can I get started with your services?",
        'answer' => "You can contact us directly or book a free consultation. Our team will guide you through the complete process.",
    ],
];

$stats = [
    ['value' => 100, 'suffix' => "+", 'label' => "Projects Completed Successfully"],
    ['value' => 70, 'suffix' => "+", 'label' => "Happy Clients"],
    ['value' => 20, 'suffix' => "+", 'label' => "Services Offered"],
    ['value' => 5, 'suffix' => "+", 'label' => "Years of Experience"],
    ['value' => 95, 'suffix' => "%", 'label' => "Client Satisfaction Rate"],
    ['value' => 30, 'suffix' => "+", 'label' => "Ongoing Projects & Support Clients"],
];

$processSteps = [
    ['title' => "Step 1 – Understanding Requirements", 'description' => "We start by understanding your business goals, challenges, and project requirements."],
    ['title' => "Step 2 – Research & Planning", 'description' => "We analyze your industry and create a proper strategy and roadmap for execution."],
    ['title' => "Step 3 – UI/UX Design", 'description' => "We design modern, user-friendly, and visually appealing interfaces."],
    ['title' => "Step 4 – Development", 'description' => "Our team develops fast, secure, and scalable solutions using modern technologies."],
    ['title' => "Step 5 – Testing & Quality Check", 'description' => "We test everything to ensure performance, responsiveness, and bug-free delivery."],
    ['title' => "Step 6 – Deployment", 'description' => "We launch your project on a live server with complete optimization."],
    ['title' => "Step 7 – Support & Maintenance", 'description' => "We provide ongoing support, updates, and improvements for long-term success."],
];

$industries = [
    ['title' => "E-commerce", 'description' => "Helping businesses build online stores and digital marketplaces."],
    ['title' => "Healthcare", 'description' => "Developing secure and reliable healthcare systems and applications."],
    ['title' => "Education", 'description' => "Creating e-learning platforms, institute websites, and training systems."],
    ['title' => "Corporate & Business", 'description' => "Professional solutions for companies, startups, and enterprises."],
    ['title' => "Hospitality", 'description' => "Websites and booking systems for hotels, restaurants, and travel businesses."],
    ['title' => "Real Estate", 'description' => "Property listing platforms and real estate management systems."],
    ['title' => "Automotive", 'description' => "Digital solutions for vehicle services, dealerships, and platforms."],
    ['title' => "Finance & Consulting", 'description' => "Secure and professional systems for financial and consulting services."],
    ['title' => "Startups", 'description' => "Complete digital support to launch and scale new business ideas."],
];
?>

<div id="top" class="flex min-h-screen flex-col overflow-x-hidden pt-24 bg-white text-slate-800" data-testid="page-home">

  <!-- Hero Section -->
  <?php renderHeroSection(); ?>

  <!-- About Section -->
  <section id="about" class="border-y border-blue-100 bg-gradient-to-b from-white to-blue-50/30 py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid gap-12 lg:grid-cols-[0.95fr_1.05fr] items-center">
        <div>
          <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-blue-600">
            Your Trusted Digital Growth Partner
          </p>
          <h2 class="mb-6 text-3xl font-bold tracking-tight text-blue-950 md:text-5xl">
            Your Trusted Digital Growth Partner
          </h2>
          <div class="space-y-4 text-lg leading-relaxed text-slate-600">
            <p>
              Black Madhav Digital Solution is a modern IT and digital agency focused on helping businesses grow through innovative technology and creative strategies.
            </p>
            <p>
              We work with startups, brands, and companies to deliver high-quality digital solutions that improve visibility, performance, and customer engagement.
            </p>
            <p>
              Our approach is simple — understand your business, build the right solution, and help you achieve real results.
            </p>
          </div>
        </div>
        <div class="rounded-2xl border border-blue-100 bg-blue-50/50 p-5 shadow-sm sm:p-8">
          <div class="mb-6 rounded-2xl bg-gradient-to-br from-blue-900 to-indigo-950 p-5 text-white shadow-lg shadow-blue-950/15 sm:p-8">
            <p class="text-sm font-semibold uppercase tracking-widest text-blue-200">
              About Us
            </p>
            <h3 class="mt-4 text-2xl font-bold leading-snug">
              Helping businesses grow online with design, technology, and strategy.
            </h3>
          </div>
          <div class="grid gap-4 sm:grid-cols-2">
            <?php foreach (["Digital strategy", "Custom software", "Creative branding", "Performance marketing"] as $item): ?>
              <div class="rounded-xl border border-blue-100 bg-white p-5 shadow-xs transition-all duration-300 hover:border-blue-300 hover:-translate-y-1">
                <p class="font-semibold text-blue-950 flex items-center gap-2">
                  <span class="w-2 h-2 rounded-full bg-blue-500"></span>
                  <?= e($item) ?>
                </p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="bg-white py-24 md:py-32">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="mx-auto mb-16 max-w-3xl text-center">
        <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-blue-600">
          Our Services
        </p>
        <h2 class="mb-4 text-3xl font-bold tracking-tight text-blue-950 md:text-4xl">
          Complete Digital Services For Your Business
        </h2>
        <p class="text-lg leading-relaxed text-slate-600">
          We provide end-to-end solutions designed to help your business succeed in the digital world.
        </p>
      </div>

      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
        <?php foreach ($services as $service): ?>
          <div class="group rounded-2xl border border-blue-100 bg-white p-7 transition-all duration-300 hover:border-blue-400 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/10">
            <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-blue-600 to-blue-800 text-white shadow-md shadow-blue-500/20 transition-transform duration-300 group-hover:scale-110 group-hover:rotate-3">
              <?= $service['icon'] ?>
            </div>
            this is a use for a progrmaing laungage use for progrmaing laungage 
            <h3 class="mb-3 text-xl font-semibold text-blue-950 transition-colors group-hover:text-blue-600 duration-300">
              <?= e($service['title']) ?>
            </h3>
            <p class="text-sm leading-relaxed text-slate-600">
              <?= e($service['description']) ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Why Choose Us Section -->
  <section class="bg-gradient-to-b from-blue-50/20 via-blue-50/50 to-white py-24 md:py-32">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid gap-16 lg:grid-cols-[0.95fr_1.05fr] items-center">
        <div>
          <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-blue-600">
            Why Choose Us
          </p>
          <h2 class="mb-6 text-3xl font-bold tracking-tight text-blue-950 md:text-5xl">
            Why Clients Choose Black Madhav
          </h2>
          <p class="mb-8 text-lg leading-relaxed text-slate-600">
            We provide business-focused digital solutions, modern design, complete services, and long-term support to help your brand grow.
          </p>
        </div>
        <div class="grid gap-4">
          <?php foreach ($whyChooseItems as $item): ?>
            <div class="rounded-2xl border border-blue-100 bg-white p-6 shadow-sm hover:border-blue-300 transition-all duration-300 hover:translate-x-1">
              <div class="mb-3 flex items-center gap-3 text-blue-600">
                <svg class="h-5 w-5 flex-shrink-0 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h3 class="text-lg font-semibold text-blue-950"><?= e($item['title']) ?></h3>
              </div>
              <p class="text-sm leading-relaxed text-slate-600">
                <?= e($item['description']) ?>
              </p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio" class="bg-white py-24 md:py-32">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="mx-auto mb-10 max-w-3xl text-center">
        <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-blue-600">
          Portfolio
        </p>
        <h2 class="text-3xl font-bold tracking-tight text-blue-950 md:text-5xl">
          Our Work Speaks For Itself
        </h2>
        <p class="mt-4 text-lg leading-relaxed text-slate-600">
          Explore our projects including websites, apps, branding, and digital marketing campaigns designed for real business growth.
        </p>
      </div>

      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <?php foreach ($portfolioItems as $item): ?>
          <div class="group rounded-2xl border border-blue-100 bg-white p-5 shadow-sm transition-all duration-300 hover:border-blue-400 hover:shadow-xl hover:shadow-blue-500/5 sm:p-8 hover:-translate-y-2">
            <div class="mb-4 text-xs font-semibold tracking-wider text-blue-600 uppercase">Featured Project</div>
            <h3 class="mb-3 text-xl font-semibold text-blue-950 group-hover:text-blue-600 transition-colors duration-300"><?= e($item['title']) ?></h3>
            <p class="text-sm leading-relaxed text-slate-600"><?= e($item['description']) ?></p>
            <div class="mt-6 flex items-center text-sm font-semibold text-blue-600 group-hover:text-blue-800 transition-colors">
              View Project Details 
              <svg class="ml-1 w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
              </svg>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="bg-gradient-to-b from-white via-blue-50/30 to-blue-50/50 py-24 md:py-32">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="mx-auto mb-10 max-w-3xl text-center">
        <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-blue-600">
          Testimonials
        </p>
        <h2 class="text-3xl font-bold tracking-tight text-blue-950 md:text-5xl">
          What Our Clients Say
        </h2>
      </div>

      <div class="grid gap-6 md:grid-cols-3">
        <?php foreach ($testimonials as $item): ?>
          <div class="relative rounded-2xl border border-blue-100 bg-white p-5 shadow-sm transition-all duration-300 hover:border-blue-200 hover:shadow-lg sm:p-8 hover:-translate-y-1">
            <div class="mb-4 flex flex-wrap items-center gap-2">
              <span class="rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold uppercase tracking-[0.18em] text-blue-600">
                <?= e($item['category']) ?>
              </span>
              <div class="flex items-center gap-1 text-blue-700">
                <?php for ($s = 0; $s < $item['rating']; $s++): ?>
                  ★
                <?php endfor; ?>
              </div>
            </div>
            <span class="absolute top-4 right-6 text-6xl text-blue-100 font-serif leading-none select-none">“</span>
            <p class="relative z-10 mb-6 text-lg italic leading-relaxed text-blue-900">
              “<?= e($item['quote']) ?>”
            </p>
            <div class="flex items-center gap-3">
              <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-xs font-bold text-blue-600 uppercase">
                <?php 
                  $parts = explode(' ', $item['author']);
                  echo e(substr($parts[0] ?? '', 0, 1) . substr($parts[1] ?? '', 0, 1));
                ?>
              </div>
              <div>
                <p class="text-sm font-bold text-blue-950"><?= e($item['author']) ?></p>
                <p class="text-xs text-slate-500">Client feedback</p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Office Locations Component -->
  <?php
  // Office locations (same data as components/OfficeLocations.php) - rendered here so the section is styled by this file
  $officeLocations = [
      ['city' => 'Jamnagar',  'phone' => '+91 8128730715', 'mapUrl' => 'https://www.google.com/maps/search/?api=1&query=MDIDM+Infoway+Jamnagar',  'imageSrc' => base_url('assets/images/loc.jpg')],
      ['city' => 'Junagadh', 'phone' => '+91 8128730715', 'mapUrl' => 'https://www.google.com/maps/search/?api=1&query=MDIDM+Infoway+Junagadh', 'imageSrc' => base_url('assets/images/loc.jpg')],
  ];
  ?>
  <section id="locations" class="bg-white py-24 md:py-32">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="mx-auto mb-12 max-w-3xl text-center">
        <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-blue-600">Our Office Locations</p>
        <h2 class="text-3xl font-bold tracking-tight text-blue-950 md:text-5xl">Our Office Locations</h2>
        <p class="mt-4 text-lg leading-relaxed text-slate-600">
          Explore our locations across Gujarat with quick access to directions and contact details.
        </p>
      </div>
      <div class="branch-grid">
        <?php foreach ($officeLocations as $loc): ?>
          <article class="branch-card">
            <div class="branch-card__head">
              <span class="branch-card__pin">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              </span>
              <div>
                <p class="branch-card__label">Location</p>
                <h3 class="branch-card__city"><?= e($loc['city']) ?></h3>
              </div>
            </div>
            <div class="branch-card__media">
              <img src="<?= e($loc['imageSrc']) ?>" alt="<?= e($loc['city']) ?> office building" loading="lazy" />
            </div>
            <div class="branch-card__foot">
              <span class="branch-card__phone">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                <?= e($loc['phone']) ?>
              </span>
              <a href="<?= e($loc['mapUrl']) ?>" target="_blank" rel="noreferrer" class="bm-btn">
                Get Direction
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
              </a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>


  <!-- FAQ Section -->
  <section id="faq" class="bg-white py-24 md:py-32">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="mx-auto mb-10 max-w-3xl text-center">
        <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-blue-600">
          Frequently Asked Questions
        </p>
        <h2 class="text-3xl font-bold tracking-tight text-blue-950 md:text-5xl">
          Frequently Asked Questions
        </h2>
        <p class="mt-4 text-lg leading-relaxed text-slate-600">
          Everything you need to know before starting your project with us.
        </p>
      </div>

      <div class="max-w-4xl mx-auto space-y-4">
        <?php foreach ($faqItems as $item): ?>
          <div class="rounded-2xl border border-blue-100 bg-white p-6 md:p-8 shadow-sm hover:border-blue-200 transition-all duration-300">
            <h3 class="mb-3 text-lg md:text-xl font-semibold text-blue-950 flex gap-3 items-start">
              <span class="text-blue-500 font-bold">Q.</span>
              <?= e($item['question']) ?>
            </h3>
            <div class="pl-6 text-sm md:text-base leading-relaxed text-slate-600 border-l-2 border-blue-50">
              <?= e($item['answer']) ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Stats Section with Counter Animation -->
  <section id="stats" class="bg-gradient-to-b from-blue-50/50 via-blue-50/30 to-white py-24 md:py-32">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="mx-auto mb-10 max-w-3xl text-center">
        <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-blue-600">
          Our Work Speaks Through Numbers
        </p>
        <h2 class="text-3xl font-bold tracking-tight text-blue-950 md:text-4xl">
          Our Work Speaks Through Numbers
        </h2>
        <p class="mt-4 text-lg leading-relaxed text-slate-600">
          Delivering consistent results and building long-term client relationships.
        </p>
      </div>

      <div class="grid gap-6 md:grid-cols-3 xl:grid-cols-6">
        <?php foreach ($stats as $st): ?>
          <div class="rounded-2xl border border-blue-100 bg-white p-6 text-center shadow-sm hover:border-blue-300 hover:shadow-md transition-all duration-300 hover:-translate-y-1">
            <p class="stat-counter mb-2 text-3xl md:text-4xl font-black text-blue-700"
               data-value="<?= $st['value'] ?>" 
               data-suffix="<?= $st['suffix'] ?>">
              <?= $st['value'] . $st['suffix'] ?>
            </p>
            <p class="text-xs md:text-sm font-medium leading-relaxed text-slate-500"><?= e($st['label']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Process Section -->
  <section id="process" class="bg-white py-24 md:py-32">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="mx-auto mb-10 max-w-3xl text-center">
        <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-blue-600">
          Our Process
        </p>
        <h2 class="text-3xl font-bold tracking-tight text-blue-950 md:text-5xl">
          Our Step-by-Step Working Process
        </h2>
        <p class="mt-4 text-lg leading-relaxed text-slate-600">
          We follow a structured process to deliver high-quality and result-driven solutions.
        </p>
      </div>

      <div class="grid gap-6 lg:grid-cols-2">
        <?php foreach ($processSteps as $i => $step): ?>
          <div class="group rounded-2xl border border-blue-100 bg-white p-5 shadow-sm transition-all duration-300 hover:border-blue-300 hover:shadow-lg sm:p-8 hover:-translate-y-1">
            <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-blue-600 to-blue-800 text-white font-bold shadow-md shadow-blue-500/20 group-hover:scale-110 transition-transform">
              <span class="text-lg font-semibold"><?= $i + 1 ?></span>
            </div>
            <h3 class="mb-3 text-xl font-semibold text-blue-950 group-hover:text-blue-600 transition-colors"><?= e($step['title']) ?></h3>
            <p class="text-sm leading-relaxed text-slate-600"><?= e($step['description']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Industries Section -->
  <section id="industries" class="bg-gradient-to-b from-white via-blue-50/20 to-blue-50/40 py-24 md:py-32">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="mx-auto mb-10 max-w-3xl text-center">
        <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-blue-600">
          Industries We Serve
        </p>
        <h2 class="text-3xl font-bold tracking-tight text-blue-950 md:text-5xl">
          Industries We Serve
        </h2>
        <p class="mt-4 text-lg leading-relaxed text-slate-600">
          We deliver customized digital solutions for businesses across various industries.
        </p>
      </div>

      <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
        <?php foreach ($industries as $ind): ?>
          <div class="group rounded-2xl border border-blue-100 bg-white p-5 shadow-sm transition-all duration-300 hover:border-blue-300 hover:shadow-lg sm:p-8 hover:-translate-y-1">
            <div class="-ml-5 mb-4 h-8 w-1.5 rounded-r-md bg-blue-500 transition-colors group-hover:bg-blue-800 sm:-ml-8"></div>
            <h3 class="mb-3 text-xl font-semibold text-blue-950 group-hover:text-blue-600 transition-colors"><?= e($ind['title']) ?></h3>
            <p class="text-sm leading-relaxed text-slate-600"><?= e($ind['description']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Quote Section -->
  <section class="bg-white py-16 md:py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="rounded-2xl border border-blue-100 bg-gradient-to-r from-blue-50 via-blue-50/30 to-blue-50 p-5 text-center shadow-sm sm:p-10">
        <p class="text-lg font-semibold text-blue-950">
          "We don't just deliver projects — we build long-term partnerships that help your business grow digitally."
        </p>
        <p class="mt-4 text-sm uppercase tracking-widest text-blue-600 font-semibold">
          BLACK MADHAV DIGITAL SOLUTION
        </p>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-24 md:py-32 relative overflow-hidden" style="background: linear-gradient(135deg, var(--navy-950) 0%, var(--navy-800) 55%, var(--navy-950) 100%);">
    <div class="pointer-events-none absolute right-0 top-0 h-56 w-56 max-w-none rounded-full bg-blue-500/10 blur-3xl sm:h-96 sm:w-96 sm:-mr-20 sm:-mt-20"></div>
    <div class="pointer-events-none absolute bottom-0 left-0 h-56 w-56 max-w-none rounded-full bg-blue-300/10 blur-3xl sm:h-96 sm:w-96 sm:-mb-20 sm:-ml-20"></div>

    <div class="container relative z-10 mx-auto px-4 sm:px-6 lg:px-8">
      <div class="mx-auto mb-10 max-w-3xl text-center text-white">
        <h2 class="mb-6 text-3xl font-bold tracking-tight sm:text-4xl md:text-5xl">
          Ready To Grow Your Business?
        </h2>
        <p class="mb-10 text-base leading-7 text-blue-200/80 sm:text-xl">
          Let's build something powerful together. Start your digital journey with Black Madhav Digital Solution today.
        </p>
        <div class="flex flex-col items-center justify-center gap-4 sm:flex-row">
          <a href="<?= base_url('/contact') ?>" 
             class="inline-flex h-14 w-full items-center justify-center rounded-xl bg-white px-6 text-base font-semibold text-blue-950 transition-all duration-300 hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-lg sm:w-auto sm:px-10 sm:text-lg">
            Start Project
          </a>
          <a href="<?= base_url('/contact') ?>" 
             class="inline-flex h-14 w-full items-center justify-center rounded-xl border border-white/40 bg-transparent px-6 text-base font-semibold text-white transition-all duration-300 hover:-translate-y-0.5 hover:border-blue-400 hover:bg-white/5 sm:w-auto sm:px-10 sm:text-lg">
            Contact Us
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Form Section -->
  <section id="contact" class="bg-white py-24 md:py-32">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid gap-16 lg:grid-cols-[0.95fr_1.05fr]">
        <div>
          <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-blue-600">
            Let's Connect
          </p>
          <h2 class="mb-6 text-3xl font-bold tracking-tight text-blue-950 md:text-5xl">
            Let's Connect
          </h2>
          <div class="space-y-6 text-slate-700">
            <div>
              <h3 class="font-semibold text-blue-950">Our Branches</h3>
              <div class="mt-3 space-y-4">
                <?php
                $pin = '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>';
                $branches = [
                    ['Jamnagar Branch:', 'G - 8, Unicorn Prime, Ranjit Sagar Rd, nr. Avadh Honda Showroom, Green City, Jamnagar, Gujarat 361006'],
                    ['Junagadh Branch:', 'SHOP NO 113, CRYSTAL A, madhuram road, Applewood township, Moti Palace Twp, Junagadh, Gujarat 362015'],
                ];
                foreach ($branches as $br): ?>
                  <div class="address-card">
                    <span class="address-card__pin"><?= $pin ?></span>
                    <div>
                      <h4><?= e($br[0]) ?></h4>
                      <p><?= e($br[1]) ?></p>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="contact-line">
              <span class="contact-line__icon"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
              <div>
                <h3 class="font-semibold text-blue-950">Phone</h3>
                <p><?= e(APP_PHONE) ?></p>
              </div>
            </div>
            <div class="contact-line">
              <span class="contact-line__icon"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></span>
              <div>
                <h3 class="font-semibold text-blue-950">Email</h3>
                <p class="break-all"><?= e(APP_EMAIL) ?></p>
              </div>
            </div>
          
          </div>
        </div>

        <div class="bm-form-card rounded-2xl border border-blue-100 bg-blue-50/30 p-5 shadow-sm sm:p-8">
          <form class="bmds-contact-form space-y-5" action="<?= base_url('/api/contact.php') ?>" method="POST">
            <div class="form-feedback hidden mb-6 rounded-2xl border border-blue-200 bg-blue-50 px-4 py-3 text-sm text-slate-900" role="status" aria-live="polite"></div>

            <div>
              <label class="mb-2 block text-sm font-medium text-blue-950">Your Name</label>
              <input type="text" name="name" required class="w-full rounded-lg border border-blue-200 bg-white px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-blue-500 focus:ring-1 focus:ring-blue-500/20" placeholder="Enter your name" />
            </div>
            <div>
              <label class="mb-2 block text-sm font-medium text-blue-950">Business Name</label>
              <input type="text" name="businessName" required class="w-full rounded-lg border border-blue-200 bg-white px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-blue-500 focus:ring-1 focus:ring-blue-500/20" placeholder="Enter your business name" />
            </div>
            <div class="grid gap-5 sm:grid-cols-2">
              <div>
                <label class="mb-2 block text-sm font-medium text-blue-950">Phone Number</label>
                <input type="tel" name="phone" required maxlength="10" class="w-full rounded-lg border border-blue-200 bg-white px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-blue-500 focus:ring-1 focus:ring-blue-500/20" placeholder="10 digit mobile number" />
              </div>
              <div>
                <label class="mb-2 block text-sm font-medium text-blue-950">Email Address</label>
                <input type="email" name="email" required class="w-full rounded-lg border border-blue-200 bg-white px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-blue-500 focus:ring-1 focus:ring-blue-500/20" placeholder="info@example.com" />
              </div>
            </div>
            <div>
              <label class="mb-2 block text-sm font-medium text-blue-950">Select Service</label>
              <select name="service" class="w-full rounded-lg border border-blue-200 bg-white px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-blue-500 focus:ring-1 focus:ring-blue-500/20">
                <option value="Web Development">Web Development</option>
                <option value="App Development">App Development</option>
                <option value="Digital Marketing">Digital Marketing</option>
                <option value="SEO">SEO</option>
                <option value="UI/UX Design">UI/UX Design</option>
                <option value="Branding">Branding</option>
              </select>
            </div>
            <div>
              <label class="mb-2 block text-sm font-medium text-blue-950">Message</label>
              <textarea name="message" rows="5" required class="w-full rounded-lg border border-blue-200 bg-white px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-blue-500 focus:ring-1 focus:ring-blue-500/20" placeholder="Share a few details about your project"></textarea>
            </div>
            <button type="submit" class="bm-btn w-full" style="padding:1rem 1.5rem">
              Send Message
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <div style="display: none;">Developed by Vandit Katbamna</div>
</div>

<style>
/* ==========================================================================
   HOME PAGE THEME - Light Navy Blue + White (scoped to #top, self-contained)
   ========================================================================== */
#top {
  --navy-50: #F4F7FC;
  --navy-100: #E8EEF8;
  --navy-200: #D3DEF0;
  --navy-300: #B0C2E0;
  --navy-400: #88A3CE;
  --navy-500: #6283B9;
  --navy-600: #4066A3;
  --navy-700: #2D4D86;
  --navy-800: #243F6C;
  --navy-900: #1C3158;
  --navy-950: #14264A;
  --white: #FFFFFF;

  --ink: var(--navy-950);
  --ink-soft: #4A5E85;
  --brand: var(--navy-700);          /* the "light navy blue" */
  --brand-deep: var(--navy-900);

  --ease-out: cubic-bezier(.22, .8, .24, 1);
  --shadow-soft: 0 10px 30px -14px rgba(28, 49, 88, .28);
  --shadow-lift: 0 24px 50px -22px rgba(28, 49, 88, .45);
  --ring: 0 0 0 4px rgba(64, 102, 163, .18);

  /* Tailwind palette re-map: every blue / grey / accent colour used anywhere
     in the project now resolves to a navy shade (or white). */
  --color-white: #FFFFFF;
  --color-black: var(--navy-950);
  --color-amber-500: #6283B9;
  --color-blue-50: #F4F7FC;
  --color-blue-100: #E8EEF8;
  --color-blue-200: #D3DEF0;
  --color-blue-300: #B0C2E0;
  --color-blue-400: #88A3CE;
  --color-blue-500: #6283B9;
  --color-blue-600: #4066A3;
  --color-blue-700: #2D4D86;
  --color-blue-800: #243F6C;
  --color-blue-900: #1C3158;
  --color-blue-950: #14264A;
  --color-cyan-50: #F4F7FC;
  --color-cyan-100: #E8EEF8;
  --color-cyan-200: #D3DEF0;
  --color-cyan-300: #B0C2E0;
  --color-cyan-500: #6283B9;
  --color-cyan-600: #4066A3;
  --color-cyan-700: #2D4D86;
  --color-gray-100: #EDF1F8;
  --color-gray-200: #DCE4F1;
  --color-gray-400: #98A8C6;
  --color-gray-600: #4A5E85;
  --color-gray-900: #1C3158;
  --color-green-50: #F4F7FC;
  --color-green-200: #D3DEF0;
  --color-green-600: #4066A3;
  --color-green-700: #2D4D86;
  --color-indigo-50: #F4F7FC;
  --color-indigo-500: #6283B9;
  --color-indigo-600: #4066A3;
  --color-indigo-700: #2D4D86;
  --color-indigo-900: #1C3158;
  --color-indigo-950: #14264A;
  --color-orange-50: #F4F7FC;
  --color-orange-200: #D3DEF0;
  --color-orange-600: #4066A3;
  --color-orange-700: #2D4D86;
  --color-purple-50: #F4F7FC;
  --color-purple-200: #D3DEF0;
  --color-purple-400: #88A3CE;
  --color-purple-600: #4066A3;
  --color-purple-700: #2D4D86;
  --color-red-50: #F4F7FC;
  --color-red-200: #D3DEF0;
  --color-red-300: #B0C2E0;
  --color-red-400: #88A3CE;
  --color-red-600: #4066A3;
  --color-red-700: #2D4D86;
  --color-rose-600: #4066A3;
  --color-sky-200: #D3DEF0;
  --color-sky-300: #B0C2E0;
  --color-sky-400: #88A3CE;
  --color-sky-500: #6283B9;
  --color-slate-50: #F6F8FC;
  --color-slate-100: #EDF1F8;
  --color-slate-200: #DCE4F1;
  --color-slate-300: #C2CFE4;
  --color-slate-500: #5F7399;
  --color-slate-600: #4A5E85;
  --color-slate-700: #384D75;
  --color-slate-800: #27395F;
  --color-slate-900: #1C3158;
  --color-slate-950: #14264A;
  --hero-offset: 0s;
}
/* ---- reusable animation classes: .anim + .anim-up/-left/-right/-zoom/-fade ---- */
#top .anim.in-view { animation: bmUp .85s var(--ease-out) backwards; animation-delay: var(--d, 0s); }
#top .anim-left.in-view  { animation-name: bmLeft; }
#top .anim-right.in-view { animation-name: bmRight; }
#top .anim-zoom.in-view  { animation-name: bmZoom; }
#top .anim-fade.in-view  { animation-name: bmFade; }
.js-anim #top .anim:not(.in-view) { opacity: 0; }
@keyframes bmUp    { from { opacity: 0; transform: translateY(28px); }  to { opacity: 1; transform: none; } }
@keyframes bmLeft  { from { opacity: 0; transform: translateX(-30px); } to { opacity: 1; transform: none; } }
@keyframes bmRight { from { opacity: 0; transform: translateX(30px); }  to { opacity: 1; transform: none; } }
@keyframes bmZoom  { from { opacity: 0; transform: scale(.94); }        to { opacity: 1; transform: none; } }
@keyframes bmFade  { from { opacity: 0; } to { opacity: 1; } }
@keyframes bmShimmer { from { transform: translateX(-120%); } to { transform: translateX(120%); } }

/* ---- hero ---- */
#top #home h1 span { color: var(--navy-200) !important; background: none !important; -webkit-text-fill-color: currentColor !important; }
#top #home a.inline-flex { background: #fff !important; color: var(--navy-950) !important; box-shadow: 0 18px 40px -18px rgba(0,0,0,.5) !important; }
#top #home a.inline-flex:hover { background: var(--navy-50) !important; }

/* ---- cards: one consistent lift on hover ---- */
#top :is(.rounded-xl, .rounded-2xl).border:not(:has(form)) {
  transition: transform .45s var(--ease-out), box-shadow .45s var(--ease-out), border-color .3s ease;
}
#top :is(.rounded-xl, .rounded-2xl).border:not(:has(form)):hover { border-color: var(--navy-300); box-shadow: var(--shadow-soft); }
#top .group .bg-gradient-to-br { transition: transform .4s var(--ease-out), box-shadow .4s ease; }
#top .group:hover .bg-gradient-to-br { box-shadow: 0 14px 26px -12px rgba(45,77,134,.65); }
#top section p.uppercase.tracking-widest { letter-spacing: .22em; }

/* ---- buttons ---- */
#top a.inline-flex[class*="rounded-"], #top button[type="submit"], #top .bm-btn {
  position: relative; overflow: hidden; isolation: isolate;
  transition: transform .35s var(--ease-out), box-shadow .35s var(--ease-out), background-color .3s, color .3s, border-color .3s;
}
#top a.inline-flex[class*="rounded-"]::after, #top button[type="submit"]::after, #top .bm-btn::after {
  content: ""; position: absolute; inset: 0; z-index: -1; pointer-events: none; transform: translateX(-120%);
  background: linear-gradient(110deg, transparent 30%, rgba(255,255,255,.38) 50%, transparent 70%);
}
#top a.inline-flex[class*="rounded-"]:hover::after, #top button[type="submit"]:hover::after, #top .bm-btn:hover::after { animation: bmShimmer .9s ease; }
#top a.inline-flex[class*="rounded-"]:active, #top button[type="submit"]:active { transform: translateY(1px) scale(.985); }
#top .bm-btn {
  display: inline-flex; align-items: center; justify-content: center; gap: .55rem; width: 100%;
  padding: 1rem 1.5rem; border-radius: .8rem; border: 1px solid var(--navy-700);
  background: var(--navy-700); color: #fff; font-weight: 600; font-size: 1rem; cursor: pointer;
}
#top .bm-btn:hover { background: var(--navy-900); border-color: var(--navy-900); transform: translateY(-2px); box-shadow: 0 16px 30px -14px rgba(28,49,88,.55); }

/* ---- forms ---- */
#top input, #top select, #top textarea { transition: border-color .25s ease, box-shadow .25s ease; }
#top input:hover, #top select:hover, #top textarea:hover { border-color: var(--navy-400); }
#top input:focus, #top select:focus, #top textarea:focus { outline: none; border-color: var(--navy-600) !important; box-shadow: var(--ring) !important; }
#top input::placeholder, #top textarea::placeholder { color: var(--navy-400); }
#top button[type="submit"][disabled] { opacity: .65; cursor: progress; pointer-events: none; }
#top .form-feedback { display: flex; gap: .65rem; align-items: flex-start; animation: bmUp .45s var(--ease-out) both; }
#top .form-feedback.hidden { display: none; }
#top .form-feedback[data-state="error"] { background: #fff; border-color: var(--navy-700); border-left-width: 4px; }

/* ---- branch cards (Our Office Locations) ---- */
#top .branch-grid { display: grid; gap: 1.5rem; grid-template-columns: minmax(0,1fr); max-width: 64rem; margin: 0 auto; }
@media (min-width: 768px) { #top .branch-grid { grid-template-columns: repeat(2, minmax(0,1fr)); gap: 2rem; } }
#top .branch-card { display: flex; flex-direction: column; overflow: hidden; background: #fff; border: 1px solid var(--navy-100); border-radius: 1.25rem; box-shadow: var(--shadow-soft); transition: transform .5s var(--ease-out), box-shadow .5s var(--ease-out), border-color .3s; }
#top .branch-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-lift); border-color: var(--navy-300); }
#top .branch-card__head { display: flex; align-items: center; gap: .85rem; padding: 1rem 1.25rem; background: linear-gradient(135deg, var(--navy-700), var(--navy-900)); }
#top .branch-card__pin { display: inline-flex; align-items: center; justify-content: center; width: 2.6rem; height: 2.6rem; border-radius: 50%; background: rgba(255,255,255,.14); color: #fff; }
#top .branch-card__pin svg { width: 1.3rem; height: 1.3rem; }
#top .branch-card__label { font-size: .7rem; letter-spacing: .24em; text-transform: uppercase; color: var(--navy-200); }
#top .branch-card__city { font-size: 1.15rem; font-weight: 700; color: #fff; line-height: 1.2; }
#top .branch-card__media { position: relative; aspect-ratio: 16/10; overflow: hidden; background: var(--navy-100); }
#top .branch-card__media img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform .8s var(--ease-out); }
#top .branch-card:hover .branch-card__media img { transform: scale(1.07); }
#top .branch-card__foot { display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: .9rem; padding: 1rem 1.25rem 1.2rem; }
#top .branch-card__phone { display: inline-flex; align-items: center; gap: .55rem; font-weight: 600; color: var(--navy-900); }
#top .branch-card__phone svg { width: 1.1rem; height: 1.1rem; color: var(--navy-600); }
#top .branch-card .bm-btn { width: auto; padding: .6rem 1.05rem; font-size: .875rem; }
#top .branch-card .bm-btn svg { width: 1rem; height: 1rem; transition: transform .35s var(--ease-out); }
#top .branch-card .bm-btn:hover svg { transform: translateX(4px); }

/* ---- "Let's Connect" address + contact lines ---- */
#top .address-card { display: flex; gap: 1rem; align-items: flex-start; padding: 1.1rem 1.25rem; background: #fff; border: 1px solid var(--navy-100); border-radius: 1rem; box-shadow: var(--shadow-soft); transition: transform .4s var(--ease-out), border-color .3s, box-shadow .4s; }
#top .address-card:hover { transform: translateY(-3px); border-color: var(--navy-300); }
#top .address-card__pin, #top .contact-line__icon { flex: 0 0 auto; display: inline-flex; align-items: center; justify-content: center; width: 2.4rem; height: 2.4rem; border-radius: .8rem; background: var(--navy-100); color: var(--navy-700); transition: transform .4s var(--ease-out), background .3s, color .3s; }
#top .address-card:hover .address-card__pin { background: var(--navy-700); color: #fff; }
#top .address-card__pin svg, #top .contact-line__icon svg { width: 1.15rem; height: 1.15rem; }
#top .address-card h4 { font-weight: 700; color: var(--navy-950); margin-bottom: .2rem; }
#top .address-card p { font-size: .925rem; line-height: 1.55; color: var(--navy-600); }
#top .contact-line { display: flex; align-items: center; gap: .8rem; }
#top .contact-line:hover .contact-line__icon { background: var(--navy-700); color: #fff; transform: scale(1.1); }

@media (max-width: 767px) {
  #top .branch-card:hover { transform: none; }
  #top .branch-card__foot { flex-direction: column; align-items: stretch; }
  #top .branch-card .bm-btn { width: 100%; }
  #top input, #top select, #top textarea { font-size: 16px !important; }
  #top .anim-left.in-view, #top .anim-right.in-view { animation-name: bmUp; }
}
@media (hover: none) { #top .group:hover img { transform: none; } }
@media (prefers-reduced-motion: reduce) {
  #top *, #top *::before, #top *::after { animation-duration: .01ms !important; transition-duration: .01ms !important; }
  .js-anim #top .anim:not(.in-view) { opacity: 1; }
}
</style>
<script>
/* Scroll-reveal animations for the home page (self-contained) */
(function () {
  var root = document.getElementById('top');
  if (!root) return;
  var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (reduce || !('IntersectionObserver' in window)) return;

  function tag(els, dir, step, base) {
    els.forEach(function (el, i) {
      if (!el || el.classList.contains('anim')) return;
      el.classList.add('anim', dir);
      el.style.setProperty('--d', ((base || 0) + Math.min(i, 6) * (step || 0.08)) + 's');
    });
  }
  function list(sel) { return Array.prototype.slice.call(root.querySelectorAll(sel)); }

  // hero: waits for the loading screen (about 1.8s), then rises in step by step
  tag(list('#home .text-center > *'), 'anim-up', 0.12, 1.7);

  // section headings
  tag(list('section .max-w-3xl.text-center'), 'anim-up');

  // card grids: staggered; two-column split sections slide in from the sides
  list('section .grid').forEach(function (g) {
    if (g.closest('#home')) return;
    var kids = Array.prototype.slice.call(g.children);
    if (g.className.indexOf('0.95fr_1.05fr') > -1) { tag([kids[0]], 'anim-left'); tag([kids[1]], 'anim-right'); }
    else { tag(kids, 'anim-up', 0.07); }
  });
  tag(list('.space-y-4 > *'), 'anim-up', 0.07);
  tag(list('.branch-card'), 'anim-up', 0.12);
  tag(list('#stats .grid > *'), 'anim-zoom', 0.08);

  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) { e.target.classList.add('in-view'); io.unobserve(e.target); }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -6% 0px' });

  document.documentElement.classList.add('js-anim');
  root.querySelectorAll('.anim').forEach(function (el) { io.observe(el); });

  // safety net: never leave anything hidden
  setTimeout(function () {
    root.querySelectorAll('.anim:not(.in-view)').forEach(function (el) {
      if (el.getBoundingClientRect().top < window.innerHeight) el.classList.add('in-view');
    });
  }, 2500);
})();
</script>