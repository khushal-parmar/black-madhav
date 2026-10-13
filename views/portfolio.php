<?php
/**
 * View: Portfolio Page
 * Converted from src/Portfolio.jsx
 */

require_once __DIR__ . '/../config/config.php';

$projects = [
    [
        'title' => "E-commerce Website",
        'category' => "Web Development + UI/UX",
        'description' => "Built a high-performance online store with modern design, responsive layouts, and secure payment integration.",
        'results' => ["Fast loading speed", "Mobile responsive design", "Secure payment integration", "User-friendly navigation"],
    ],
    [
        'title' => "Business Website",
        'category' => "Web Development + Branding",
        'description' => "Delivered a polished business site that communicates brand value and turns visitors into leads.",
        'results' => ["Clean and modern layout", "SEO-friendly structure", "Lead capture forms"],
    ],
    [
        'title' => "Mobile App UI",
        'category' => "UI/UX Design",
        'description' => "Designed a clean mobile app interface with intuitive navigation and polished interactions.",
        'results' => ["Intuitive navigation", "Clean UI design", "User-focused layout"],
    ],
    [
        'title' => "Digital Marketing Campaign",
        'category' => "Digital Marketing",
        'description' => "Executed targeted campaigns to grow reach, build awareness, and generate quality leads.",
        'results' => ["Audience targeting", "Creative ad design", "Performance tracking"],
    ],
    [
        'title' => "SEO Optimization",
        'category' => "SEO",
        'description' => "Optimized site content and structure to increase visibility and organic traffic.",
        'results' => ["Keyword optimization", "Technical SEO", "Content strategy"],
    ],
    [
        'title' => "Brand Identity Design",
        'category' => "Branding + Graphic Design",
        'description' => "Created a distinctive brand identity with logo, color palette, and visual guidelines.",
        'results' => ["Logo design", "Brand color palette", "Consistent design system"],
    ],
];
?>

<div class="min-h-screen bg-slate-50 text-slate-900 pt-24 pb-24">
  <section class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-4xl text-center mb-14">
      <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-blue-600">
        Portfolio
      </p>
      <h1 class="text-4xl md:text-5xl font-extrabold text-blue-950 mb-4">
        Our Work Speaks for Itself
      </h1>
      <p class="text-lg leading-relaxed text-slate-600">
        Explore a selection of projects that demonstrate our expertise in web development, branding, design, marketing, and performance-driven digital experiences.
      </p>
      <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-3">
        <a href="<?= base_url('/testimonials') ?>" 
           class="inline-flex items-center justify-center rounded-full border border-blue-700 bg-blue-700 px-6 py-3 text-sm font-semibold text-white transition hover:bg-blue-800">
          View Testimonials
        </a>
        <a href="<?= base_url('/') ?>" 
           class="inline-flex items-center justify-center rounded-full border border-slate-300 bg-white px-6 py-3 text-sm font-semibold text-slate-900 transition hover:bg-slate-100">
          Back to Home
        </a>
      </div>
    </div>

    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
      <?php foreach ($projects as $project): ?>
        <article class="group overflow-hidden rounded-3xl border border-blue-100 bg-white p-8 shadow-sm hover:-translate-y-1 hover:shadow-xl transition-all">
          <div class="mb-4 inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-[0.2em] text-blue-600">
            <span class="h-2 w-2 rounded-full bg-blue-600"></span>
            <?= e($project['category']) ?>
          </div>
          <h2 class="text-2xl font-bold text-slate-950 mb-4"><?= e($project['title']) ?></h2>
          <p class="text-sm leading-relaxed text-slate-600 mb-6"><?= e($project['description']) ?></p>
          <ul class="space-y-3 mb-6 text-sm text-slate-600">
            <?php foreach ($project['results'] as $item): ?>
              <li class="flex gap-2 items-start">
                <span class="mt-1 h-2.5 w-2.5 rounded-full bg-blue-500"></span>
                <span><?= e($item) ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
          <div class="inline-flex items-center gap-2 text-sm font-semibold text-blue-700">
            View Project Details
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <div class="mt-12 rounded-3xl border border-blue-100 bg-gradient-to-r from-blue-600 to-indigo-600 p-8 text-white shadow-lg">
      <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
        <div>
          <h2 class="text-2xl font-bold">Want to bring your next project to life?</h2>
          <p class="mt-2 text-slate-100 text-sm leading-relaxed">
            We deliver end-to-end digital solutions with measurable results. Let's create something great together.
          </p>
        </div>
        <a href="<?= base_url('/contact') ?>" 
           class="inline-flex items-center justify-center rounded-full bg-white px-6 py-3 text-sm font-semibold text-blue-700 transition hover:bg-slate-100">
          Start a Project
        </a>
      </div>
    </div>
  </section>
</div>
