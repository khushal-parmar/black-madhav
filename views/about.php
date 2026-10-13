<?php
/**
 * View: About Page
 * Converted from src/About.jsx
 */

require_once __DIR__ . '/../config/config.php';

$approachSteps = [
    [
        'title' => "Understand",
        'description' => "We understand your business and goals",
        'icon' => '<svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>'
    ],
    [
        'title' => "Strategize",
        'description' => "We create a clear strategy",
        'icon' => '<svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>'
    ],
    [
        'title' => "Create",
        'description' => "We design and develop solutions",
        'icon' => '<svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>'
    ],
    [
        'title' => "Optimize",
        'description' => "We go live with perfection",
        'icon' => '<svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
    ],
    [
        'title' => "Grow",
        'description' => "We optimize and scale your business",
        'icon' => '<svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>'
    ],
];

$differences = [
    [
        'title' => "Strategy First",
        'description' => "We don't just execute — we plan smart strategies for long-term success.",
        'icon' => '<svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><circle cx="12" cy="12" r="10" stroke-width="2"/><circle cx="12" cy="12" r="6" stroke-width="2"/><circle cx="12" cy="12" r="2" stroke-width="2"/></svg>'
    ],
    [
        'title' => "Design + Performance",
        'description' => "Our designs are not only attractive but also focused on conversions.",
        'icon' => '<svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>'
    ],
    [
        'title' => "Result-Oriented Work",
        'description' => "We focus on measurable results like traffic, leads, and growth.",
        'icon' => '<svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>'
    ],
    [
        'title' => "End-to-End Solutions",
        'description' => "From idea to execution — everything under one roof.",
        'icon' => '<svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><circle cx="12" cy="12" r="10" stroke-width="2"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>'
    ],
];

$expertise = [
    "Modern & Responsive Website Development",
    "High-Converting UI/UX Design",
    "Search Engine Optimization (SEO)",
    "Digital Marketing & Paid Advertising",
    "Brand Building & Online Presence",
    "Business Growth & Lead Generation",
];

$experts = [
    [
        'name' => "Krishn Chandravadiya",
        'role' => "CEO & Founder",
        'bio' => "Leads the company vision and guides strategy, ensuring every project achieves growth, brand impact, and measurable business results.",
    ],
    [
        'name' => "Drashti Sanchaniya",
        'role' => "UI/UX Designer & Graphic Designer",
        'bio' => "Creates beautiful, user-focused interfaces and brand visuals that improve usability, drive engagement, and deliver a polished customer experience.",
    ],
    [
        'name' => "Vishruti Sangani",
        'role' => "Digital Marketing Specialist",
        'bio' => "Develops tailored marketing campaigns and growth strategies that increase visibility, generate leads, and convert audiences across digital channels.",
        ],
        [
            'name' => "Vandit Katbamna",
            'role' => "Full Stack Developer",
            'bio' => "Builds reliable, high-performance web applications from front-end design to back-end systems, making sure every solution is fast, scalable, and secure.",
        ],
];

$extraSections = [
    [
        'title' => "Our Philosophy",
        'description' => "We believe that digital success is not just about technology — it's about creating meaningful experiences. Our philosophy is to combine creativity, strategy, and innovation to deliver solutions that truly impact businesses.",
        'icon' => '<svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>'
    ],
    [
        'title' => "Our Goal",
        'description' => "Our goal is to empower businesses with digital tools and strategies that help them grow faster, reach the right audience, and achieve long-term success.",
        'icon' => '<svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><circle cx="12" cy="12" r="10" stroke-width="2"/><circle cx="12" cy="12" r="6" stroke-width="2"/><circle cx="12" cy="12" r="2" stroke-width="2"/></svg>'
    ],
    [
        'title' => "Our Strengths",
        'description' => "Strong technical expertise, creative and modern design approach, deep understanding of digital marketing, focus on performance and results, and continuous learning and improvement.",
        'icon' => '<svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>'
    ],
    [
        'title' => "Innovation & Technology",
        'description' => "We stay updated with the latest industry trends and technologies to deliver cutting-edge solutions. From modern frameworks to smart marketing tools, we ensure your business stays ahead of the competition.",
        'icon' => '<svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>'
    ],
    [
        'title' => "Client-Centric Approach",
        'description' => "We put our clients first. Every decision we make is based on what is best for your business. We listen, understand, and deliver solutions that match your goals.",
        'icon' => '<svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>'
    ],
    [
        'title' => "Our Growth Mindset",
        'description' => "We believe in continuous growth — for our clients and for ourselves. We analyze, optimize, and improve strategies to ensure consistent progress.",
        'icon' => '<svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>'
    ],
    [
        'title' => "Transparency & Communication",
        'description' => "We maintain clear and honest communication throughout the project. You are always updated about progress, ensuring trust and clarity.",
        'icon' => '<svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>'
    ],
    [
        'title' => "Commitment to Excellence",
        'description' => "We are committed to delivering high-quality work that meets industry standards and exceeds client expectations.",
        'icon' => '<svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>'
    ],
    [
        'title' => "Our Promise",
        'description' => "We promise to deliver reliable, scalable, and effective digital solutions that help your business succeed in the long run.",
        'icon' => '<svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><circle cx="12" cy="12" r="10" stroke-width="2"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>'
    ],
];
?>

<div class="min-h-screen overflow-x-hidden bg-slate-50 text-slate-800 pt-24">
  <!-- Hero Section -->
  <section class="py-20 md:py-28 bg-gradient-to-b from-blue-50/70 via-white to-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center">
        <h1 class="mb-6 bg-gradient-to-r from-blue-950 via-indigo-900 to-blue-900 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl md:text-6xl">
          We Build Digital Experiences That Drive Growth
        </h1>
        <p class="text-base leading-relaxed text-slate-600 sm:text-xl">
          At BLACK MADHAV DIGITAL SOLUTION, we don't just create websites or run campaigns — we build powerful digital experiences that help businesses grow, scale, and stand out in today's competitive market. We combine technology, creativity, and strategy to deliver solutions that are not only visually impressive but also performance-driven.
        </p>
      </div>
    </div>
  </section>

  <!-- Our Approach Section -->
  <section class="py-20 md:py-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <div class="inline-flex items-center gap-2 rounded-full border border-green-200 bg-green-50 px-4 py-2 mb-4">
          <span class="h-3 w-3 rounded-full bg-green-600"></span>
          <span class="text-sm font-semibold text-green-700">Our Approach</span>
        </div>
        <h2 class="mb-6 text-3xl font-extrabold text-blue-950 sm:text-4xl md:text-5xl">
          We believe every business is unique
        </h2>
        <p class="text-lg text-slate-600 max-w-2xl mx-auto">
          That's why we focus on understanding your brand, your audience, and your goals before creating any solution. Our approach is simple:
        </p>
      </div>

      <div class="grid gap-6 md:grid-cols-5 mb-12">
        <?php foreach ($approachSteps as $i => $step): ?>
          <div class="relative bg-gradient-to-br from-white via-slate-50 to-slate-100 rounded-3xl p-6 shadow-lg border border-slate-200 hover:border-blue-300 overflow-hidden hover:-translate-y-2 transition-all">
            <div class="text-center">
              <div class="mx-auto mb-4 h-16 w-16 rounded-full bg-gradient-to-br from-blue-600 to-cyan-500 text-white flex items-center justify-center shadow-md">
                <?= $step['icon'] ?>
              </div>
              <h3 class="text-xl font-bold text-blue-950 mb-2"><?= e($step['title']) ?></h3>
              <p class="text-sm text-slate-600"><?= e($step['description']) ?></p>
            </div>
            <?php if ($i < count($approachSteps) - 1): ?>
              <div class="hidden md:block absolute -right-3 top-1/2 -translate-y-1/2 text-blue-300 text-2xl font-bold">
                →
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="rounded-2xl bg-gradient-to-r from-blue-600 to-indigo-600 p-5 text-center text-white sm:p-8">
        <p class="text-lg font-semibold">
          This ensures that every project we deliver adds real value to your business.
        </p>
      </div>
    </div>
  </section>

  <!-- What Makes Us Different -->
  <section class="py-20 md:py-28 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <div class="inline-flex items-center gap-2 rounded-full border border-blue-200 bg-blue-50 px-4 py-2 mb-4">
          <span class="h-3 w-3 rounded-full bg-blue-600"></span>
          <span class="text-sm font-semibold text-blue-700">Our Difference</span>
        </div>
        <h2 class="text-3xl font-extrabold text-blue-950 sm:text-4xl md:text-5xl">
          What Makes Us Different
        </h2>
      </div>

      <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
        <?php foreach ($differences as $item): ?>
          <div class="group rounded-xl border border-slate-200 bg-slate-50 p-5 transition-all hover:border-blue-300 hover:shadow-lg sm:p-8 hover:-translate-y-1">
            <div class="text-blue-600 mb-4 group-hover:scale-110 transition-transform">
              <?= $item['icon'] ?>
            </div>
            <h3 class="text-xl font-bold text-blue-950 mb-3"><?= e($item['title']) ?></h3>
            <p class="text-slate-600 leading-relaxed"><?= e($item['description']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Our Expertise -->
  <section class="py-20 md:py-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <div class="inline-flex items-center gap-2 rounded-full border border-purple-200 bg-purple-50 px-4 py-2 mb-4">
          <span class="h-3 w-3 rounded-full bg-purple-600"></span>
          <span class="text-sm font-semibold text-purple-700">Our Expertise</span>
        </div>
        <h2 class="text-3xl font-extrabold text-blue-950 sm:text-4xl md:text-5xl mb-4">
          We specialize in building complete digital ecosystems
        </h2>
      </div>

      <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 max-w-5xl mx-auto">
        <?php foreach ($expertise as $item): ?>
          <div class="rounded-2xl border border-blue-100 bg-white p-6 shadow-sm flex items-center gap-3 hover:border-blue-300 transition-all hover:-translate-y-1">
            <span class="h-3 w-3 rounded-full bg-blue-600 flex-shrink-0"></span>
            <p class="font-semibold text-slate-800"><?= e($item) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Meet the Team -->
  <section class="py-20 md:py-28 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <div class="inline-flex items-center gap-2 rounded-full border border-blue-200 bg-blue-50 px-4 py-2 mb-4">
          <span class="h-3 w-3 rounded-full bg-blue-600"></span>
          <span class="text-sm font-semibold text-blue-700">Our Team</span>
        </div>
        <h2 class="text-3xl font-extrabold text-blue-950 sm:text-4xl md:text-5xl">
          Meet the Minds Behind the Magic
        </h2>
      </div>

      <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
        <?php foreach ($experts as $exp): ?>
          <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6 shadow-sm hover:border-blue-400 hover:shadow-xl transition-all hover:-translate-y-2">
            <div class="mb-4 h-16 w-16 rounded-full bg-gradient-to-br from-blue-600 to-indigo-700 text-white flex items-center justify-center text-xl font-bold">
              <?php 
                $words = explode(' ', $exp['name']);
                echo e(substr($words[0] ?? '', 0, 1) . substr($words[1] ?? '', 0, 1));
              ?>
            </div>
            <h3 class="text-xl font-bold text-slate-900"><?= e($exp['name']) ?></h3>
            <p class="text-sm font-semibold text-blue-600 mb-3"><?= e($exp['role']) ?></p>
            <p class="text-sm leading-relaxed text-slate-600"><?= e($exp['bio']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Comprehensive Company Values & Pillars -->
  <section class="py-20 md:py-28 bg-slate-100">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl font-extrabold text-blue-950 sm:text-4xl">
          Core Pillars of Our Organization
        </h2>
      </div>

      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <?php foreach ($extraSections as $sec): ?>
          <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm hover:border-blue-300 hover:shadow-lg transition-all hover:-translate-y-1">
            <div class="text-blue-600 mb-4">
              <?= $sec['icon'] ?>
            </div>
            <h3 class="text-xl font-bold text-blue-950 mb-3"><?= e($sec['title']) ?></h3>
            <p class="text-sm leading-relaxed text-slate-600"><?= e($sec['description']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</div>
