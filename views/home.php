<?php
/**
 * View: Home Page
 * Light Navy Blue + White theme. Styles + animations are included at the bottom of this file (self-contained).
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../components/HeroSection.php';
require_once __DIR__ . '/../components/OfficeLocations.php';

if (!function_exists('bm_icon')) {
    /** Duotone line icon set (48x48). Usage: <?= bm_icon('web') ?> */
    function bm_icon(string $name): string {
        static $icons = [
            'web' => '<path class="d" d="M6 13a4 4 0 014-4h28a4 4 0 014 4v6H6z"/><rect x="6" y="9" width="36" height="30" rx="4"/><path d="M6 19h36M20 27l-4 4 4 4M28 27l4 4-4 4"/><circle cx="11.5" cy="14" r=".8"/><circle cx="16" cy="14" r=".8"/>',
            'app' => '<rect class="d" x="14" y="5" width="20" height="38" rx="4"/><rect x="17.5" y="12" width="13" height="20" rx="1.5"/><path d="M21 8.5h6M22 37.5h4"/>',
            'marketing' => '<path class="d" d="M9 20h9l17-9v26l-17-9H9a2 2 0 01-2-2v-4a2 2 0 012-2z"/><path d="M16 28l2 11h4l-2-11M39 19a7 7 0 010 10"/>',
            'seo' => '<circle class="d" cx="21" cy="21" r="14"/><path d="M31.5 31.5L43 43M15 27v-5M21 27V15M27 27v-8"/>',
            'ai' => '<rect class="d" x="13" y="13" width="22" height="22" rx="4"/><rect x="19" y="19" width="10" height="10" rx="2"/><path d="M18 6v7M24 6v7M30 6v7M18 35v7M24 35v7M30 35v7M6 18h7M6 24h7M6 30h7M35 18h7M35 24h7M35 30h7"/>',
            'design' => '<path class="d" d="M24 5l11 15-11 23-11-23z"/><circle cx="24" cy="21" r="3"/><path d="M24 24v14"/>',
            'uiux' => '<rect x="6" y="8" width="36" height="32" rx="4"/><rect class="d" x="10" y="12" width="10" height="24" rx="2"/><path d="M25 15h13M25 21h13"/><rect x="25" y="26" width="13" height="10" rx="2"/>',
            'branding' => '<circle class="d" cx="24" cy="20" r="14"/><path d="M18 33l-3 11 9-4 9 4-3-11"/><path d="M24 13.5l2.1 4.3 4.7.7-3.4 3.3.8 4.7-4.2-2.2-4.2 2.2.8-4.7-3.4-3.3 4.7-.7z"/>',
            'ecommerce' => '<path class="d" d="M10 16h28l-2 24a2 2 0 01-2 2H14a2 2 0 01-2-2z"/><path d="M17 16v-3a7 7 0 0114 0v3M18 26a6 6 0 0012 0"/>',
            'healthcare' => '<path class="d" d="M24 5l15 6v11c0 10-7 17-15 21C16 39 9 32 9 22V11z"/><path d="M24 15v14M17 22h14"/>',
            'education' => '<path class="d" d="M24 9L4 19l20 10 20-10z"/><path d="M12 24v10c0 3 6 6 12 6s12-3 12-6V24M44 19v12"/>',
            'corporate' => '<rect class="d" x="12" y="6" width="24" height="36" rx="2"/><path d="M19 13h4M25 13h4M19 20h4M25 20h4M19 27h4M25 27h4M21 42v-8h6v8"/>',
            'hospitality' => '<path class="d" d="M8 32a16 16 0 0132 0z"/><path d="M6 36h36M24 12v4M21 12h6"/>',
            'realestate' => '<path class="d" d="M10 21l14-12 14 12v19H10z"/><path d="M5 23L24 7l19 16M20 40V29h8v11"/>',
            'automotive' => '<path class="d" d="M6 30v-6l5-9a3 3 0 012.6-1.5h20.8A3 3 0 0137 15l5 9v6a2 2 0 01-2 2H8a2 2 0 01-2-2z"/><path d="M6 24h36M12 29h3M33 29h3"/><circle class="d" cx="14" cy="34" r="4"/><circle class="d" cx="34" cy="34" r="4"/>',
            'finance' => '<rect class="d" x="8" y="26" width="8" height="14" rx="1.5"/><rect class="d" x="20" y="16" width="8" height="24" rx="1.5"/><rect class="d" x="32" y="8" width="8" height="32" rx="1.5"/><path d="M5 43h38"/>',
            'startups' => '<path class="d" d="M24 5c8 4 12 12 10 22l-5 5H19l-5-5C12 17 16 9 24 5z"/><circle cx="24" cy="18" r="3.5"/><path d="M14 27l-6 6 7 1M34 27l6 6-7 1M21 36l3 7 3-7"/>',
            'check' => '<circle class="d" cx="24" cy="24" r="18"/><path d="M15 24.5l6 6 12-13"/>',
            'clipboard' => '<rect class="d" x="11" y="8" width="26" height="34" rx="3"/><rect x="18" y="5" width="12" height="7" rx="2"/><path d="M17 21h14M17 28h14M17 35h8"/>',
            'shield' => '<path class="d" d="M24 5l15 6v11c0 10-7 17-15 21C16 39 9 32 9 22V11z"/><path d="M17 24l5 5 9-10"/>',
            'headset' => '<path d="M10 28v-4a14 14 0 0128 0v4"/><rect class="d" x="7" y="27" width="8" height="12" rx="3"/><rect class="d" x="33" y="27" width="8" height="12" rx="3"/><path d="M37 39c0 3-4 4-9 4"/>',
            'pin' => '<path class="d" d="M24 43s13-11.5 13-22a13 13 0 00-26 0c0 10.5 13 22 13 22z"/><circle cx="24" cy="21" r="5"/>',
            'phone' => '<g transform="translate(6 6) scale(1.5)" stroke-width="1.2"><path class="d" d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></g>',
            'mail' => '<rect class="d" x="5" y="10" width="38" height="28" rx="4"/><path d="M7 14l17 13L41 14"/>',
        ];
        $inner = $icons[$name] ?? $icons['check'];
        return '<svg class="bm-ico" viewBox="0 0 48 48" aria-hidden="true">' . $inner . '</svg>';
    }
}

$services = [
    [
        'icon' => 'web',
        'title' => "Web Development",
        'description' => "Professional, fast, and responsive websites designed to convert visitors into customers.",
    ],
    [
        'icon' => 'app',
        'title' => "App Development",
        'description' => "Modern mobile applications for Android and cross-platform that deliver smooth performance and user experience.",
    ],
    [
        'icon' => 'marketing',
        'title' => "Digital Marketing",
        'description' => "Result-driven marketing strategies to increase brand awareness, traffic, and leads.",
    ],
    [
        'icon' => 'seo',
        'title' => "SEO",
        'description' => "Improve your Google ranking and reach more customers organically.",
    ],
    [
        'icon' => 'ai',
        'title' => "AI Solutions",
        'description' => "Smart automation and AI-powered systems to improve efficiency and business growth.",
    ],
    [
        'icon' => 'design',
        'title' => "Graphic Design",
        'description' => "Creative designs that strengthen your brand identity and visual communication.",
    ],
    [
        'icon' => 'uiux',
        'title' => "UI/UX Design",
        'description' => "User-focused designs that improve usability, engagement, and conversion rates.",
    ],
    [
        'icon' => 'branding',
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
        'icon' => 'ecommerce',
        'title' => "E-commerce Website",
        'description' => "Developed a high-performance e-commerce website with modern UI/UX, responsive design, and secure checkout.",
    ],
    [
        'icon' => 'corporate',
        'title' => "Business Website",
        'description' => "Created a professional business website to strengthen brand identity and capture qualified leads.",
    ],
    [
        'icon' => 'app',
        'title' => "Mobile App UI",
        'description' => "Designed an intuitive mobile app interface with smooth navigation and modern visuals for better user retention.",
    ],
    [
        'icon' => 'marketing',
        'title' => "Digital Marketing Campaign",
        'description' => "Executed targeted marketing campaigns that increased reach, engagement, and lead generation.",
    ],
    [
        'icon' => 'seo',
        'title' => "SEO Optimization",
        'description' => "Optimized website structure and content to improve search rankings and organic traffic.",
    ],
    [
        'icon' => 'branding',
        'title' => "Brand Identity Design",
        'description' => "Developed a cohesive brand identity system with logo, colors, and visual guidelines.",
    ],
];

$testimonials = [
    [
        'category' => "Web Development",
        'rating' => 5,
        'quote' => "Vandit completely transformed our internal operations. The custom CRM he built is flawless and that makes our work flow easir.",
        'author' => "Nikhil Patel, Patel Fashion Hub",
    ],
    [
        'category' => "App Development",
        'rating' => 5,
        'quote' => "The Transport Management System handled everything we threw at it. Highly scalable and clean code.",
        'author' => "Neha Sharma, Urban Trendz",
    ],
    [
        'category' => "Digital Marketing",
        'rating' => 5,
        'quote' => "Krushna Kunj Bungalows We had a good experience working with Black Madhav Digital Solution. Their creative designs and professional approach helped us present our bungalow project beautifully. The team is supportive and understands our requirements well.",
        'author' => "Ashvin Ahir, Krushna Kunj Bungalows",
    ],
     [
        'category' => "SEO Services",
        'rating' => 5,
        'quote' => "Krishna Developers Black Madhav Digital Solution provides good creative work and digital marketing support. Their team understands our business needs, communicates well and is always helpful. Happy to work with them!",
        'author' => "Krishna Developers",
    ],
     [
        'category' => "AI Solutions",
        'rating' => 5,
        'quote' => "Krishna Darshan Bungalows We are happy with the services provided by Black Madhav Digital Solution. Their designs are attractive, and they understand how to present our bungalow project professionally. Good service and a cooperative team.",
        'author' => "Rajesh Chhetaliya",
    ],
     [
        'category' => "Graphic Design",
        'rating' => 5,
        'quote' => "Kenko Helthcare Service Good experience with Black Madhav Digital Solution. Their team understands our requirements and provides professional designs and creative support for our business. They are helpful, responsive and easy to work",
        'author' => "Nimish Ahir",
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

$stats = [
    ['value' => 100, 'suffix' => "+", 'label' => "Projects Completed Successfully"],
    ['value' => 70, 'suffix' => "+", 'label' => "Happy Clients"],
    ['value' => 20, 'suffix' => "+", 'label' => "Services Offered"],
    ['value' => 5, 'suffix' => "+", 'label' => "Years of Experience"],
    ['value' => 95, 'suffix' => "%", 'label' => "Client Satisfaction Rate"],
    ['value' => 30, 'suffix' => "+", 'label' => "Ongoing Projects & Support Clients"],
];

$processSteps = [
    ['icon' => 'clipboard', 'title' => "Step 1 – Understanding Requirements", 'description' => "We start by understanding your business goals, challenges, and project requirements."],
    ['icon' => 'seo', 'title' => "Step 2 – Research & Planning", 'description' => "We analyze your industry and create a proper strategy and roadmap for execution."],
    ['icon' => 'uiux', 'title' => "Step 3 – UI/UX Design", 'description' => "We design modern, user-friendly, and visually appealing interfaces."],
    ['icon' => 'web', 'title' => "Step 4 – Development", 'description' => "Our team develops fast, secure, and scalable solutions using modern technologies."],
    ['icon' => 'shield', 'title' => "Step 5 – Testing & Quality Check", 'description' => "We test everything to ensure performance, responsiveness, and bug-free delivery."],
    ['icon' => 'startups', 'title' => "Step 6 – Deployment", 'description' => "We launch your project on a live server with complete optimization."],
    ['icon' => 'headset', 'title' => "Step 7 – Support & Maintenance", 'description' => "We provide ongoing support, updates, and improvements for long-term success."],
];

/*
 * Industries: images are loaded from  assets/images/industries/<file>
 * Put your photos in that folder (recommended size 800x500, .jpg).
 * If an image is missing, a navy gradient is shown instead (no broken image).
 */
$industries = [
    ['title' => "E-commerce",           'image' => 'ecommerce.jpg',  'description' => "Helping businesses build online stores and digital marketplaces."],
    ['title' => "Healthcare",           'image' => 'healthcare.jpg', 'description' => "Developing secure and reliable healthcare systems and applications."],
    ['title' => "Education",            'image' => 'education.jpg',  'description' => "Creating e-learning platforms, institute websites, and training systems."],
    ['title' => "Corporate & Business", 'image' => 'corporate.jpg',  'description' => "Professional solutions for companies, startups, and enterprises."],
    ['title' => "Hospitality",          'image' => 'hospitality.jpg','description' => "Websites and booking systems for hotels, restaurants, and travel businesses."],
    ['title' => "Real Estate",          'image' => 'realestate.jpg', 'description' => "Property listing platforms and real estate management systems."],
    ['title' => "Automotive",           'image' => 'automotive.jpg', 'description' => "Digital solutions for vehicle services, dealerships, and platforms."],
    ['title' => "Finance & Consulting", 'image' => 'finance.jpg',    'description' => "Secure and professional systems for financial and consulting services."],
    ['title' => "Startups",             'image' => 'startups.jpg',   'description' => "Complete digital support to launch and scale new business ideas."],
];
?>

<div id="top" class="flex min-h-screen flex-col overflow-x-hidden pt-24 bg-white text-slate-800" data-testid="page-home">

  <!-- Hero Section -->
  <?php renderHeroSection(); ?>

  <!-- About Section -->
  <section id="about" class="sec sec--about border-y border-blue-100 py-20">
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
  <section id="services" class="sec sec--services py-24 md:py-32">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="mx-auto mb-16 max-w-3xl text-center">
        <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-blue-600">
          Our Services
        </p>
        <h2 class="mb-4 text-3xl font-bold tracking-tight text-blue-950 md:text-4xl">
          Complete Digital Services For Your Business
        </h2>
        
      </div>

      <div class="svc-grid">
        <?php foreach ($services as $i => $service): ?>
          <article class="svc-card">
            <div class="svc-card__top">
              <span class="svc-card__icon"><?= bm_icon($service['icon']) ?></span>
              <h3 class="svc-card__title"><?= e($service['title']) ?></h3>
            </div>
            <p class="svc-card__desc"><?= e($service['description']) ?></p>
            <div class="svc-card__foot">
              <span class="svc-card__num"><?= str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
              <a href="<?= base_url('/contact') ?>" class="svc-card__link">
                Get a Quote
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
              </a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Why Choose Us Section -->
  <section id="why" class="sec sec--why py-24 md:py-32">
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
            <div class="group rounded-2xl border border-blue-100 bg-white p-6 shadow-sm hover:border-blue-300 transition-all duration-300 hover:translate-x-1">
              <div class="mb-3 flex items-center gap-3 text-blue-600">
                <span class="bm-tile bm-tile--sm"><?= bm_icon('check') ?></span>
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
  <section id="portfolio" class="sec sec--portfolio py-24 md:py-32">
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
            <div class="mb-5 flex items-center justify-between">
              <span class="bm-tile"><?= bm_icon($item['icon']) ?></span>
              <span class="text-xs font-semibold tracking-wider text-blue-600 uppercase">Featured Project</span>
            </div>
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
  <section id="testimonials" class="sec sec--testimonials py-24 md:py-32">
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
  <section id="locations" class="sec sec--locations py-24 md:py-32">
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
                <?= bm_icon('pin') ?>
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
                <?= bm_icon('phone') ?>
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

  <!-- Stats Section with Counter Animation -->
  <section id="stats" class="sec sec--stats py-24 md:py-32">
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
  <section id="process" class="sec sec--process py-24 md:py-32">
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

      <?php $stepCount = count($processSteps); ?>
      <div class="orbit-wrap" data-orbit>

        <!-- Circle: step 1 starts at the top and runs clockwise to step 7 -->
        <div class="orbit" role="group" aria-label="Our working process">
          <div class="orbit__ring">
            <svg class="orbit__svg" viewBox="0 0 100 100" aria-hidden="true">
              <circle class="orbit__track" cx="50" cy="50" r="50"/>
              <circle class="orbit__arc" cx="50" cy="50" r="50" pathLength="100"/>
            </svg>
            <?php foreach ($processSteps as $i => $step):
              $ang = deg2rad(-90 + $i * 360 / $stepCount);
              $x = round(50 + 50 * cos($ang), 3);
              $y = round(50 + 50 * sin($ang), 3);
              $nm = explode(' – ', $step['title'], 2);
              $stepName = $nm[1] ?? $nm[0];
            ?>
              <button type="button" class="orbit__node<?= $i === 0 ? ' is-active' : '' ?>" style="left:<?= $x ?>%;top:<?= $y ?>%" data-index="<?= $i ?>" aria-label="Step <?= $i + 1 ?>: <?= e($stepName) ?>">
                <span class="orbit__icon"><?= bm_icon($step['icon']) ?></span>
                <span class="orbit__badge"><?= $i + 1 ?></span>
              </button>
            <?php endforeach; ?>
          </div>
          <div class="orbit__center">
            <span class="orbit__center-txt">Step</span>
            <span class="orbit__center-num" data-center-num>1</span>
            <span class="orbit__center-txt">of <?= $stepCount ?></span>
          </div>
        </div>

        <!-- Details of the selected step -->
        <div class="orbit__detail">
          <div class="orbit__panels" aria-live="polite">
            <?php foreach ($processSteps as $i => $step):
              $nm = explode(' – ', $step['title'], 2);
              $stepLabel = $nm[0];
              $stepName  = $nm[1] ?? $nm[0];
            ?>
              <div class="orbit__panel<?= $i === 0 ? ' is-active' : '' ?>" data-index="<?= $i ?>">
                <span class="orbit__bignum"><?= str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
                <p class="orbit__label"><?= e($stepLabel) ?></p>
                <h3 class="orbit__title"><?= e($stepName) ?></h3>
                <p class="orbit__desc"><?= e($step['description']) ?></p>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="orbit__controls">
            <button type="button" class="orbit__btn" data-prev aria-label="Previous step">
              <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            </button>
            <div class="orbit__bar"><span class="orbit__bar-fill"></span></div>
            <span class="orbit__count"><b data-cur>1</b> / <?= $stepCount ?></span>
            <button type="button" class="orbit__btn" data-next aria-label="Next step">
              <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Industries Section -->
  <section id="industries" class="sec sec--industries py-24 md:py-32">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="mx-auto mb-14 max-w-3xl text-center">
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

      <div class="ind-grid">
        <?php foreach ($industries as $i => $ind): ?>
          <article class="ind-card">
            <div class="ind-card__media">
              <img
                src="<?= e(base_url('assets/images/industries/' . $ind['image'])) ?>"
                alt="<?= e($ind['title']) ?> industry"
                loading="lazy"
                onerror="this.style.display='none'" />
            </div>
            <div class="ind-card__body">
              <h3 class="ind-card__title"><?= e($ind['title']) ?></h3>
              <p class="ind-card__desc"><?= e($ind['description']) ?></p>
              <a href="<?= base_url('/contact') ?>" class="ind-card__link">
                Explore Solutions
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
              </a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Quote Section -->
  <section id="quote" class="sec sec--quote py-16 md:py-20">
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
  <section id="cta" class="sec sec--cta py-24 md:py-32 relative overflow-hidden">
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
  <section id="contact" class="sec sec--contact py-24 md:py-32">
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
                $pin = bm_icon('pin');
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
              <span class="contact-line__icon"><?= bm_icon('phone') ?></span>
              <div>
                <h3 class="font-semibold text-blue-950">Phone</h3>
                <p><?= e(APP_PHONE) ?></p>
              </div>
            </div>
            <div class="contact-line">
              <span class="contact-line__icon"><?= bm_icon('mail') ?></span>
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

/* ==========================================================================
   SECTION BACKGROUNDS - every section has its own LIGHT colour.
   Change any value below to recolour that section (keep them light).
   ========================================================================== */
#top {
  --bg-about:        #E8F0FB;   /* light blue      */
  --bg-services:     #FFFFFF;   /* white           */
  --bg-why:          #E6F4F8;   /* light sky       */
  --bg-portfolio:    #FFFFFF;   /* white           */
  --bg-testimonials: #EEEEFA;   /* light lavender  */
  --bg-locations:    #FFFFFF;   /* white           */
  --bg-stats:        #E7F5EE;   /* light mint      */
  --bg-process:      #FFFFFF;   /* white           */
  --bg-industries:   #FDF3E4;   /* light cream     */
  --bg-quote:        #FFFFFF;   /* white           */
  --bg-cta:          #DCE8F8;   /* soft light blue */
  --bg-contact:      #F4F7FC;   /* very light blue */
}
#top .sec { background-image: none !important; }
#top .sec--about        { background-color: var(--bg-about) !important; }
#top .sec--services     { background-color: var(--bg-services) !important; }
#top .sec--why          { background-color: var(--bg-why) !important; }
#top .sec--portfolio    { background-color: var(--bg-portfolio) !important; }
#top .sec--testimonials { background-color: var(--bg-testimonials) !important; }
#top .sec--locations    { background-color: var(--bg-locations) !important; }
#top .sec--stats        { background-color: var(--bg-stats) !important; }
#top .sec--process      { background-color: var(--bg-process) !important; }
#top .sec--industries   { background-color: var(--bg-industries) !important; }
#top .sec--quote        { background-color: var(--bg-quote) !important; }
#top .sec--cta          { background-color: var(--bg-cta) !important; }
#top .sec--contact      { background-color: var(--bg-contact) !important; }

/* CTA is a light section now, so its text and buttons switch to navy */
#top .sec--cta h2 { color: var(--navy-950) !important; }
#top .sec--cta .text-white, #top .sec--cta p { color: var(--navy-700) !important; }
#top .sec--cta a.inline-flex:first-child { background: var(--navy-800) !important; color: #fff !important; box-shadow: 0 16px 30px -14px rgba(28,49,88,.55) !important; }
#top .sec--cta a.inline-flex:first-child:hover { background: var(--navy-950) !important; }
#top .sec--cta a.inline-flex:last-child { background: transparent !important; color: var(--navy-800) !important; border: 1.5px solid var(--navy-700) !important; }
#top .sec--cta a.inline-flex:last-child:hover { background: #fff !important; }

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

/* ==========================================================================
   SERVICES CARDS  (.svc-*)  - icon + name on top, description below
   ========================================================================== */
#top .svc-grid { display: grid; gap: 1.5rem; grid-template-columns: minmax(0,1fr); }
@media (min-width: 640px)  { #top .svc-grid { grid-template-columns: repeat(2, minmax(0,1fr)); } }
@media (min-width: 1024px) { #top .svc-grid { grid-template-columns: repeat(4, minmax(0,1fr)); } }

#top .svc-card {
  position: relative; display: flex; flex-direction: column; overflow: hidden;
  background: #fff; border: 1px solid var(--navy-100); border-radius: 1.25rem;
  padding: 1.5rem 1.5rem 1.25rem; box-shadow: var(--shadow-soft);
  transition: transform .45s var(--ease-out), box-shadow .45s var(--ease-out), border-color .3s ease;
}
#top .svc-card::before {              /* accent bar that grows on hover */
  content: ""; position: absolute; left: 0; top: 0; height: 3px; width: 100%;
  background: linear-gradient(90deg, var(--navy-600), var(--navy-900));
  transform: scaleX(0); transform-origin: left; transition: transform .5s var(--ease-out);
}
#top .svc-card:hover { transform: translateY(-8px); border-color: var(--navy-300); box-shadow: var(--shadow-lift); }
#top .svc-card:hover::before { transform: scaleX(1); }

#top .svc-card__top { display: flex; align-items: center; gap: .9rem; margin-bottom: 1rem; }
/* ---- duotone icon system: <?= bm_icon('name') ?> ---- */
#top .bm-ico { display: block; width: 1.75rem; height: 1.75rem; fill: none; stroke: currentColor; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }
#top .bm-ico .d { fill: currentColor; fill-opacity: .16; }
#top .bm-tile, #top .svc-card__icon {
  flex: 0 0 auto; display: inline-flex; align-items: center; justify-content: center;
  width: 3.4rem; height: 3.4rem; border-radius: 1rem; color: var(--navy-700);
  background: linear-gradient(145deg, var(--navy-50), var(--navy-100)); border: 1px solid var(--navy-200);
  transition: transform .45s var(--ease-out), background .35s, color .35s, border-color .35s, box-shadow .35s;
}
#top .bm-tile--sm { width: 2.5rem; height: 2.5rem; border-radius: .75rem; }
#top .bm-tile--sm .bm-ico { width: 1.4rem; height: 1.4rem; }
#top .svc-card:hover .svc-card__icon, #top .group:hover .bm-tile {
  color: #fff; background: linear-gradient(135deg, var(--navy-600), var(--navy-900)); border-color: var(--navy-800);
  box-shadow: 0 12px 22px -10px rgba(45,77,134,.7); transform: translateY(-2px) scale(1.05);
}
#top .svc-card:hover .svc-card__icon .d, #top .group:hover .bm-tile .d { fill-opacity: .3; }
#top .branch-card__pin .bm-ico, #top .branch-card__phone .bm-ico, #top .address-card__pin .bm-ico, #top .contact-line__icon .bm-ico { stroke-width: 2.8; }

#top .svc-card__title { font-size: 1.1rem; font-weight: 700; line-height: 1.25; color: var(--navy-950); transition: color .3s; }
#top .svc-card:hover .svc-card__title { color: var(--navy-600); }
#top .svc-card__desc { flex: 1 1 auto; font-size: .92rem; line-height: 1.65; color: var(--navy-600); }
#top .svc-card__foot {
  display: flex; align-items: center; justify-content: space-between;
  margin-top: 1.25rem; padding-top: 1rem; border-top: 1px dashed var(--navy-200);
}
#top .svc-card__num { font-size: 1.35rem; font-weight: 800; letter-spacing: .04em; color: var(--navy-200); transition: color .3s; }
#top .svc-card:hover .svc-card__num { color: var(--navy-400); }
#top .svc-card__link { display: inline-flex; align-items: center; gap: .4rem; font-size: .85rem; font-weight: 600; color: var(--navy-700); }
#top .svc-card__link svg { width: 1rem; height: 1rem; transition: transform .35s var(--ease-out); }
#top .svc-card__link:hover { color: var(--navy-950); }
#top .svc-card__link:hover svg { transform: translateX(4px); }

/* ==========================================================================
   INDUSTRY CARDS  (.ind-*)  - image on top, information below
   ========================================================================== */
#top .ind-grid { display: grid; gap: 1.75rem; grid-template-columns: minmax(0,1fr); }
@media (min-width: 768px)  { #top .ind-grid { grid-template-columns: repeat(2, minmax(0,1fr)); } }
@media (min-width: 1024px) { #top .ind-grid { grid-template-columns: repeat(3, minmax(0,1fr)); } }

#top .ind-card {
  display: flex; flex-direction: column; overflow: hidden;
  background: #fff; border: 1px solid var(--navy-100); border-radius: 1.25rem;
  box-shadow: var(--shadow-soft);
  transition: transform .5s var(--ease-out), box-shadow .5s var(--ease-out), border-color .3s ease;
}
#top .ind-card:hover { transform: translateY(-8px); border-color: var(--navy-300); box-shadow: var(--shadow-lift); }

#top .ind-card__media {
  position: relative; aspect-ratio: 16 / 10; overflow: hidden;
  background: linear-gradient(135deg, var(--navy-700), var(--navy-950));   /* fallback if image missing */
}
#top .ind-card__media img {
  position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; display: block;
  transition: transform .9s var(--ease-out);
}
#top .ind-card__media::after {        /* soft navy fade at the bottom of the image */
  content: ""; position: absolute; inset: 0; pointer-events: none;
  background: linear-gradient(to top, rgba(20,38,74,.55) 0%, rgba(20,38,74,0) 55%);
}
#top .ind-card:hover .ind-card__media img { transform: scale(1.08); }
#top .ind-card__body { display: flex; flex-direction: column; flex: 1 1 auto; padding: 1.4rem 1.5rem 1.5rem; }
#top .ind-card__title { font-size: 1.25rem; font-weight: 700; color: var(--navy-950); margin-bottom: .55rem; transition: color .3s; }
#top .ind-card:hover .ind-card__title { color: var(--navy-600); }
#top .ind-card__desc { flex: 1 1 auto; font-size: .93rem; line-height: 1.65; color: var(--navy-600); }
#top .ind-card__link {
  display: inline-flex; align-items: center; gap: .45rem; align-self: flex-start;
  margin-top: 1.15rem; font-size: .875rem; font-weight: 600; color: var(--navy-700);
}
#top .ind-card__link svg { width: 1rem; height: 1rem; transition: transform .35s var(--ease-out); }
#top .ind-card__link:hover { color: var(--navy-950); }
#top .ind-card__link:hover svg { transform: translateX(5px); }


/* ---- process: 7 steps on one circle (step 1 -> step 7) ---- */
#top .orbit-wrap { display: grid; gap: 3rem; align-items: center; grid-template-columns: minmax(0,1fr); }
@media (min-width: 1024px) { #top .orbit-wrap { grid-template-columns: minmax(0,1.05fr) minmax(0,.95fr); gap: 4rem; } }

#top .orbit { position: relative; width: min(100%, 32rem); aspect-ratio: 1; margin: 0 auto; }
#top .orbit__ring { position: absolute; inset: 2.6rem; }
#top .orbit__svg { position: absolute; inset: 0; width: 100%; height: 100%; overflow: visible; }
#top .orbit__track { fill: none; stroke: var(--navy-300); stroke-width: .45; stroke-dasharray: 1.1 1.7; stroke-linecap: round; }
#top .orbit__arc {
  fill: none; stroke: var(--navy-600); stroke-width: .9; stroke-linecap: round;
  stroke-dasharray: 100; stroke-dashoffset: 100; transform: rotate(-90deg); transform-origin: 50% 50%;
  transition: stroke-dashoffset .7s var(--ease-out);
}
#top .orbit__center {
  position: absolute; left: 50%; top: 50%; transform: translate(-50%,-50%);
  width: 46%; aspect-ratio: 1; border-radius: 50%; display: flex; flex-direction: column; align-items: center; justify-content: center;
  background: radial-gradient(circle at 30% 25%, #fff, var(--navy-100)); border: 1px solid var(--navy-200); box-shadow: var(--shadow-soft);
}
#top .orbit__center-num { font-size: clamp(3rem, 9vw, 4.5rem); font-weight: 900; line-height: 1; color: var(--navy-700); }
#top .orbit__center-num.bump { animation: bmPop .45s var(--ease-out); }
@keyframes bmPop { from { opacity: 0; transform: scale(.55); } to { opacity: 1; transform: none; } }
#top .orbit__center-txt { margin-top: .25rem; margin-bottom: .25rem; font-size: .7rem; font-weight: 700; letter-spacing: .22em; text-transform: uppercase; color: var(--navy-500); }

#top .orbit__node {
  position: absolute; transform: translate(-50%,-50%); z-index: 2;
  display: grid; place-items: center; width: 4.6rem; height: 4.6rem; border-radius: 50%; cursor: pointer; padding: 0;
  color: var(--navy-700); background: #fff; border: 2px solid var(--navy-200); box-shadow: var(--shadow-soft);
  transition: transform .45s var(--ease-out), background .35s, color .35s, border-color .35s, box-shadow .4s;
}
#top .orbit__node:hover { border-color: var(--navy-500); transform: translate(-50%,-50%) scale(1.08); }
#top .orbit__node:focus-visible { outline: none; box-shadow: var(--ring); }
#top .orbit__node.is-done { background: var(--navy-100); border-color: var(--navy-400); }
#top .orbit__node.is-active {
  color: #fff; background: linear-gradient(135deg, var(--navy-600), var(--navy-950)); border-color: var(--navy-800);
  transform: translate(-50%,-50%) scale(1.2); box-shadow: 0 0 0 6px rgba(64,102,163,.18), 0 18px 30px -12px rgba(28,49,88,.6);
}
#top .orbit__icon .bm-ico { width: 2.1rem; height: 2.1rem; stroke-width: 1.8; }
#top .orbit__node.is-active .orbit__icon .d { fill-opacity: .3; }
#top .orbit__badge {
  position: absolute; top: -.3rem; right: -.3rem; display: grid; place-items: center;
  width: 1.6rem; height: 1.6rem; border-radius: 50%; font-size: .75rem; font-weight: 800; line-height: 1;
  color: var(--navy-900); background: var(--navy-100); border: 2px solid #fff; transition: background .35s, color .35s;
}
#top .orbit__node.is-active .orbit__badge { background: #fff; color: var(--navy-800); }

#top .orbit__detail { background: #fff; border: 1px solid var(--navy-100); border-radius: 1.5rem; padding: 2rem; box-shadow: var(--shadow-soft); }
#top .orbit__panels { display: grid; min-height: 14rem; }
#top .orbit__panel { grid-area: 1 / 1; position: relative; opacity: 0; visibility: hidden; transform: translateY(10px); transition: opacity .4s ease, transform .5s var(--ease-out), visibility .4s; }
#top .orbit__panel.is-active { opacity: 1; visibility: visible; transform: none; }
#top .orbit__bignum { position: absolute; top: -.6rem; right: 0; font-size: 5.5rem; font-weight: 900; line-height: 1; color: var(--navy-100); user-select: none; }
#top .orbit__label { position: relative; font-size: .75rem; font-weight: 700; letter-spacing: .22em; text-transform: uppercase; color: var(--navy-500); margin-bottom: .6rem; }
#top .orbit__title { position: relative; font-size: 1.6rem; font-weight: 800; line-height: 1.25; color: var(--navy-950); margin-bottom: .9rem; }
#top .orbit__desc { position: relative; font-size: 1.02rem; line-height: 1.75; color: var(--navy-600); max-width: 30rem; }
#top .orbit__controls { display: flex; align-items: center; gap: .9rem; margin-top: 1.6rem; padding-top: 1.4rem; border-top: 1px dashed var(--navy-200); }
#top .orbit__btn { flex: 0 0 auto; display: grid; place-items: center; width: 2.7rem; height: 2.7rem; border-radius: 50%; cursor: pointer; color: var(--navy-700); background: var(--navy-50); border: 1px solid var(--navy-200); transition: background .3s, color .3s, transform .3s var(--ease-out); }
#top .orbit__btn svg { width: 1.1rem; height: 1.1rem; }
#top .orbit__btn:hover { background: var(--navy-700); color: #fff; transform: scale(1.08); }
#top .orbit__bar { flex: 1 1 auto; height: .4rem; border-radius: 999px; background: var(--navy-100); overflow: hidden; }
#top .orbit__bar-fill { display: block; height: 100%; width: 14.28%; border-radius: inherit; background: linear-gradient(90deg, var(--navy-500), var(--navy-800)); transition: width .6s var(--ease-out); }
#top .orbit__count { font-size: .85rem; font-weight: 600; color: var(--navy-500); white-space: nowrap; }
#top .orbit__count b { color: var(--navy-900); }

@media (max-width: 560px) {
  #top .orbit__ring { inset: 2.1rem; }
  #top .orbit__node { width: 3.3rem; height: 3.3rem; }
  #top .orbit__icon .bm-ico { width: 1.5rem; height: 1.5rem; }
  #top .orbit__badge { width: 1.35rem; height: 1.35rem; font-size: .65rem; }
  #top .orbit__node.is-active { transform: translate(-50%,-50%) scale(1.15); }
  #top .orbit__detail { padding: 1.5rem; }
  #top .orbit__title { font-size: 1.35rem; }
  #top .orbit__bignum { font-size: 4rem; }
}

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
  #top .branch-card:hover, #top .svc-card:hover, #top .ind-card:hover { transform: none; }
  #top .branch-card__foot { flex-direction: column; align-items: stretch; }
  #top .branch-card .bm-btn { width: 100%; }
  #top input, #top select, #top textarea { font-size: 16px !important; }
  #top .anim-left.in-view, #top .anim-right.in-view { animation-name: bmUp; }
}
@media (hover: none) { #top .group:hover img, #top .ind-card:hover img { transform: none; } }
@media (prefers-reduced-motion: reduce) {
  #top *, #top *::before, #top *::after { animation-duration: .01ms !important; transition-duration: .01ms !important; }
  .js-anim #top .anim:not(.in-view) { opacity: 1; }
}
/* ==========================================================================
   MOBILE TUNING (phones up to 767px): tighter spacing, readable text, no overlaps
   ========================================================================== */
@media (max-width: 767px) {
  #top section.py-24, #top section.py-16 { padding-top: 3.5rem; padding-bottom: 3.5rem; }
  #top section .mb-16 { margin-bottom: 2.5rem; }
  #top section .mb-10, #top section .mb-12, #top section .mb-14 { margin-bottom: 2rem; }

  #top section p.uppercase.tracking-widest { letter-spacing: .14em; font-size: .72rem; }
  #top section h2 { font-size: 1.75rem; line-height: 1.25; }
  #top section .text-lg.leading-relaxed { font-size: 1rem; }

  /* testimonials: smaller quote text, no overlap of the big quote mark with the stars */
  #top .text-6xl.font-serif { display: none; }
  #top blockquote, #top .italic.text-lg { font-size: 1rem; line-height: 1.7; }
  #top .tracking-\[0\.18em\] { letter-spacing: .1em; }

  /* stats: two per row instead of six long cards */
  #top #stats .grid { grid-template-columns: repeat(2, minmax(0,1fr)); gap: .9rem; }
  #top #stats .grid > * { padding: 1.1rem .75rem; }
  #top #stats .stat-counter { font-size: 1.9rem; }

  /* industries: shorter pictures */
  #top .ind-card__media { aspect-ratio: 16 / 9; }
  #top .ind-card__body { padding: 1.1rem 1.2rem 1.25rem; }

  /* service cards a little tighter */
  #top .svc-card { padding: 1.25rem 1.25rem 1rem; }

  /* process circle: fits narrow phones */
  #top .orbit-wrap { gap: 2rem; }
  #top .orbit { width: min(100%, 22rem); }
  #top .orbit__center-num { font-size: 2.6rem; }
  #top .orbit__detail { padding: 1.25rem; }
  #top .orbit__panels { min-height: 12.5rem; }

  /* CTA buttons and branch cards */
  #top .bm-form-card { padding: 1.25rem; }
}
@media (max-width: 400px) {
  #top .orbit__node { width: 2.9rem; height: 2.9rem; }
  #top .orbit__icon .bm-ico { width: 1.3rem; height: 1.3rem; }
  #top .orbit__badge { width: 1.2rem; height: 1.2rem; font-size: .6rem; }
  #top .orbit__ring { inset: 1.8rem; }
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
  tag(list('.svc-card'), 'anim-up', 0.07);
  tag(list('.ind-card'), 'anim-up', 0.07);
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
<script>
/* Process circle: click a step, use the arrows, or let it play 1 -> 7 */
(function () {
  var wrap = document.querySelector('[data-orbit]');
  if (!wrap) return;
  var nodes  = [].slice.call(wrap.querySelectorAll('.orbit__node'));
  var panels = [].slice.call(wrap.querySelectorAll('.orbit__panel'));
  var arc = wrap.querySelector('.orbit__arc');
  var fill = wrap.querySelector('.orbit__bar-fill');
  var cur = wrap.querySelector('[data-cur]');
  var cnum = wrap.querySelector('[data-center-num]');
  var n = nodes.length, idx = 0, timer = null;
  var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function set(i) {
    idx = (i + n) % n;
    nodes.forEach(function (el, k) {
      el.classList.toggle('is-active', k === idx);
      el.classList.toggle('is-done', k < idx);
      el.setAttribute('aria-current', k === idx ? 'step' : 'false');
    });
    panels.forEach(function (el, k) { el.classList.toggle('is-active', k === idx); });
    if (arc)  arc.style.strokeDashoffset = String(100 - (idx / n) * 100);
    if (fill) fill.style.width = (((idx + 1) / n) * 100) + '%';
    if (cur)  cur.textContent = String(idx + 1);
    if (cnum) {                       /* centre of the circle shows the selected step number */
      cnum.textContent = String(idx + 1);
      cnum.classList.remove('bump'); void cnum.offsetWidth; cnum.classList.add('bump');
    }
  }
  function stop() { if (timer) { clearInterval(timer); timer = null; } }
  function play() { if (reduce) return; stop(); timer = setInterval(function () { set(idx + 1); }, 5000); }

  nodes.forEach(function (el, k) { el.addEventListener('click', function () { set(k); play(); }); });
  var prev = wrap.querySelector('[data-prev]'), next = wrap.querySelector('[data-next]');
  if (prev) prev.addEventListener('click', function () { set(idx - 1); play(); });
  if (next) next.addEventListener('click', function () { set(idx + 1); play(); });
  wrap.addEventListener('mouseenter', stop);
  wrap.addEventListener('mouseleave', play);
  wrap.addEventListener('focusin', stop);
  wrap.addEventListener('focusout', play);

  set(0);
  play();
})();
</script>