<?php
/**
 * View: Testimonials Page
 * Converted from src/Testimonials.jsx
 */

require_once __DIR__ . '/../config/config.php';

$testimonials = [
    [
        'title' => "Web Development",
        'rating' => 5,
        'quote' => "We needed a modern and fast website that reflects our brand professionally. The team understood our requirements clearly and delivered beyond expectations. The website design and performance exceeded expectations. Everything is fast, responsive, and user-friendly.",
        'author' => "Nikhil Patel, Patel Fashion Hub",
    ],
    [
        'title' => "App Development",
        'rating' => 5,
        'quote' => "We wanted a mobile app that is simple, fast, and easy to use. The team delivered a smooth and high-quality application. Smooth app performance with a clean interface. The team delivered exactly what we needed.",
        'author' => "Neha Sharma, Urban Trendz",
    ],
    [
        'title' => "Digital Marketing",
        'rating' => 5,
        'quote' => "We were struggling to generate leads online before working with them. Their marketing strategies brought real results. Our lead generation improved significantly after working with them. Great marketing strategies.",
        'author' => "Amit Verma, Style Street India",
    ],
    [
        'title' => "SEO Services",
        'rating' => 5,
        'quote' => "Our website was not ranking on search engines before. Their SEO work made a big difference in visibility. We saw noticeable improvement in rankings and organic traffic within months. Their SEO strategy is result-driven and well-planned. Highly recommended.",
        'author' => "Priya Mehta, NextGen Store",
    ],
    [
        'title' => "AI Solutions",
        'rating' => 5,
        'quote' => "We needed automation to reduce manual work and improve efficiency. Their AI solutions were practical and effective. AI automation saved us time and improved our workflow efficiency.",
        'author' => "Karan Shah",
    ],
    [
        'title' => "Graphic Design",
        'rating' => 5,
        'quote' => "We were looking for creative visuals that match our brand identity. Their designs were exactly what we needed. Creative and eye-catching designs that perfectly match our brand identity.",
        'author' => "Ritu Agarwal",
    ],
    [
        'title' => "UI/UX Design",
        'rating' => 5,
        'quote' => "Our platform needed a better user experience to improve engagement. Their design approach was user-focused and modern. User experience improved significantly after redesign. Clean and modern design.",
        'author' => "Manish Gupta",
    ],
    [
        'title' => "Branding",
        'rating' => 5,
        'quote' => "Our brand identity was inconsistent before working with them. They created a strong and professional brand presence. Our brand identity now looks professional and consistent across all platforms.",
        'author' => "Sneha Desai",
    ],
];
?>

<div class="min-h-screen bg-slate-50 text-slate-900 pt-24 pb-24">
  <section class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-4xl text-center mb-14">
      <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-blue-600">
        Testimonials
      </p>
      <h1 class="text-4xl md:text-5xl font-extrabold text-blue-950 mb-4">
        What Our Clients Say
      </h1>
      <p class="text-lg leading-relaxed text-slate-600">
        Real feedback from businesses that trusted us to build websites, apps, brands, and growth strategies.
      </p>
      <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-3">
        <a href="<?= base_url('/portfolio') ?>" 
           class="inline-flex items-center justify-center rounded-full border border-blue-700 bg-blue-700 px-6 py-3 text-sm font-semibold text-white transition hover:bg-blue-800">
          View Portfolio
        </a>
        <a href="<?= base_url('/') ?>" 
           class="inline-flex items-center justify-center rounded-full border border-slate-300 bg-white px-6 py-3 text-sm font-semibold text-slate-900 transition hover:bg-slate-100">
          Back to Home
        </a>
      </div>
    </div>

    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
      <?php foreach ($testimonials as $item): ?>
        <div class="rounded-3xl border border-blue-100 bg-white p-8 shadow-sm hover:-translate-y-1 hover:shadow-xl transition-all">
          <div class="mb-4 flex flex-wrap items-center justify-between gap-3">
            <div class="inline-flex items-center gap-2 text-blue-600">
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <p class="text-sm uppercase tracking-[0.2em] font-semibold"><?= e($item['title']) ?></p>
            </div>
            <div class="flex items-center gap-1 text-amber-500">
              <?php for ($s = 0; $s < $item['rating']; $s++): ?>
                ★
              <?php endfor; ?>
            </div>
          </div>
          <p class="mb-6 text-lg leading-relaxed text-slate-700">“<?= e($item['quote']) ?>”</p>
          <p class="text-sm font-semibold text-slate-900"><?= e($item['author']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="mt-12 rounded-3xl border border-blue-100 bg-gradient-to-r from-blue-600 to-indigo-600 p-8 text-white shadow-lg">
      <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
        <div>
          <h2 class="text-2xl font-bold">Ready to join our satisfied clients?</h2>
          <p class="mt-2 text-slate-100 text-sm leading-relaxed">
            Let's turn your next project into a digital success story with strategy, design, and measurable growth.
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
