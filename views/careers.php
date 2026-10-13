<?php
/**
 * View: Careers Page
 * Converted from src/Careers.jsx
 */

require_once __DIR__ . '/../config/config.php';

$talentCategories = [
    [
        'title' => "Creators",
        'description' => "Designers, UI/UX specialists, and storytellers who shape visual experiences.",
        'icon' => '<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>',
    ],
    [
        'title' => "Builders",
        'description' => "Developers and app creators who bring digital products to life.",
        'icon' => '<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><circle cx="12" cy="12" r="10" stroke-width="2"/><circle cx="12" cy="12" r="6" stroke-width="2"/><circle cx="12" cy="12" r="2" stroke-width="2"/></svg>',
    ],
    [
        'title' => "Growers",
        'description' => "Marketing, SEO, and growth experts focused on scaling businesses.",
        'icon' => '<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>',
    ],
    [
        'title' => "Innovators",
        'description' => "AI and automation thinkers who improve workflows and products.",
        'icon' => '<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>',
    ],
];

$opportunityTypes = [
    "Project-based work",
    "Freelance collaboration",
    "Internship programs",
    "Long-term team roles",
];

$fitItems = [
    "Learners",
    "Creators",
    "Problem-solvers",
    "Self-driven individuals",
];
?>

<main class="min-h-screen bg-slate-50 text-slate-900 pt-24">
  <!-- Careers Hero -->
  <section class="bg-gradient-to-br from-slate-950 via-blue-950 to-blue-700 text-white py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl">
        <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-2 text-sm font-semibold tracking-wide text-slate-100 mb-6">
          <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg>
          WE DON’T HIRE ROLES, WE BUILD PEOPLE
        </span>
        <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
          Not Just Jobs. Opportunities.
        </h1>
        <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-200">
          At BLACK MADHAV DIGITAL SOLUTION, we don’t believe in traditional job openings. Talent doesn’t wait for positions — it creates value wherever needed.
        </p>
        <div class="mt-10 flex flex-col gap-4 sm:flex-row">
          <a href="mailto:careers@blackmadhav.com" 
             class="inline-flex items-center justify-center rounded-full bg-white px-6 py-3 text-sm font-semibold text-slate-950 shadow-lg shadow-slate-950/10 transition hover:bg-slate-100">
            Join The Network
          </a>
          <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-3 text-sm text-slate-200">
            <svg class="h-5 w-5 text-cyan-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>
            We’re Always Open for Talent
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Hiring Philosophy -->
  <section class="container mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="grid gap-8 lg:grid-cols-[1.2fr_0.8fr] items-start">
      <div>
        <div class="mb-8 max-w-3xl">
          <p class="text-sm font-semibold uppercase tracking-[0.3em] text-blue-600">
            Our Hiring Philosophy
          </p>
          <h2 class="mt-4 text-3xl font-bold text-slate-950 md:text-4xl">
            “We don’t hire for positions. We collaborate with talent.”
          </h2>
          <p class="mt-4 text-lg leading-8 text-slate-600">
            No fixed job titles. No limited openings. No traditional hiring pressure. Only skills, mindset, and growth.
          </p>
        </div>

        <div class="space-y-4">
          <article class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm">
            <div class="flex items-center gap-3 text-blue-600">
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
              </svg>
              <h3 class="text-xl font-semibold">Talent First, Role Later</h3>
            </div>
            <p class="mt-4 text-slate-600">
              We discover talent first and define roles later. If you have potential, we make space for your strengths to grow.
            </p>
          </article>

          <article class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm">
            <div class="flex items-center gap-3 text-blue-600">
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
              <h3 class="text-xl font-semibold">Prove Your Skills</h3>
            </div>
            <p class="mt-4 text-slate-600">
              Skip resume — send us your work. Show us what you can build, design, or grow, and we’ll match you to the right opportunity.
            </p>
          </article>

          <article class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm">
            <div class="flex items-center gap-3 text-blue-600">
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
              </svg>
              <h3 class="text-xl font-semibold">Build in Public</h3>
            </div>
            <p class="mt-4 text-slate-600">
              Share projects and demos with us — not just applications. Real work and real creativity speak louder than titles.
            </p>
          </article>
        </div>
      </div>

      <aside class="space-y-6">
        <div class="rounded-3xl border border-slate-200 bg-gradient-to-br from-blue-950 to-cyan-600 p-8 text-white shadow-xl">
          <p class="text-sm font-semibold uppercase tracking-[0.4em] text-cyan-100/80">
            No Vacancy Needed
          </p>
          <h3 class="mt-4 text-2xl font-bold">We’re Always Open for Talent</h3>
          <p class="mt-4 text-slate-100 leading-7">
            No openings? No problem. If you believe you can create value, we want to hear from you.
          </p>
        </div>

        <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm">
          <div class="inline-flex items-center gap-2 rounded-full bg-blue-50 px-4 py-2 text-sm font-semibold text-blue-700">
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            careers@blackmadhav.com
          </div>
          <div class="mt-6 space-y-3 text-slate-600">
            <p class="font-semibold text-slate-900">Send your:</p>
            <ul class="space-y-2 list-disc pl-5">
              <li>Resume / Portfolio</li>
              <li>Skills & Interests</li>
              <li>Recent work samples or demos</li>
            </ul>
          </div>
        </div>
      </aside>
    </div>
  </section>

  <!-- How You Fit In & Categories -->
  <section class="bg-slate-100 py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid gap-8 lg:grid-cols-2">
        <div class="rounded-3xl bg-white p-10 shadow-sm border border-slate-200">
          <h3 class="text-2xl font-bold text-slate-950">How You Fit In</h3>
          <p class="mt-4 text-slate-600 leading-7">
            You don’t apply for a job — you apply to become a part of our ecosystem. Once you join our talent network, you may work on live client projects, collaborate with our team, and grow into long-term roles.
          </p>
          <div class="mt-8 grid gap-3 sm:grid-cols-2">
            <?php foreach ($fitItems as $item): ?>
              <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5">
                <p class="text-base font-semibold text-slate-900"><?= e($item) ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="rounded-3xl bg-white p-10 shadow-sm border border-slate-200">
          <h3 class="text-2xl font-bold text-slate-950">Talent Categories</h3>
          <p class="mt-4 text-slate-600 leading-7">
            We don’t define positions — we define skill zones.
          </p>
          <div class="mt-8 space-y-4">
            <?php foreach ($talentCategories as $category): ?>
              <div class="flex gap-4 rounded-2xl border border-slate-200 bg-slate-50 p-5">
                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-100 text-blue-700 flex-shrink-0">
                  <?= $category['icon'] ?>
                </div>
                <div>
                  <h4 class="text-lg font-semibold text-slate-950"><?= e($category['title']) ?></h4>
                  <p class="mt-2 text-sm text-slate-600"><?= e($category['description']) ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Growth Model & Opportunity Types -->
  <section class="container mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr]">
      <div class="rounded-3xl bg-white p-10 shadow-sm border border-slate-200">
        <h3 class="text-2xl font-bold text-slate-950">Growth Model</h3>
        <p class="mt-4 text-slate-600 leading-7">
          Your journey is not fixed: Explore → Contribute → Prove → Grow → Lead.
        </p>
        <div class="mt-8 space-y-4">
          <?php 
          $steps = [
              ['name' => "Explore", 'desc' => "Discover possibilities"],
              ['name' => "Contribute", 'desc' => "Add value from day one"],
              ['name' => "Prove", 'desc' => "Show what you can do"],
              ['name' => "Grow", 'desc' => "Build your impact"],
              ['name' => "Lead", 'desc' => "Lead with confidence"]
          ];
          foreach ($steps as $idx => $st):
          ?>
            <div class="flex items-start gap-4 rounded-2xl border border-slate-200 bg-slate-50 p-5">
              <div class="flex h-10 w-10 items-center justify-center rounded-full bg-blue-600 text-white font-semibold flex-shrink-0">
                <?= $idx + 1 ?>
              </div>
              <div>
                <p class="font-semibold text-slate-900"><?= e($st['name']) ?></p>
                <p class="text-sm text-slate-600"><?= e($st['desc']) ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="rounded-3xl bg-white p-10 shadow-sm border border-slate-200">
        <h3 class="text-2xl font-bold text-slate-950">Opportunity Types</h3>
        <div class="mt-8 space-y-4">
          <?php foreach ($opportunityTypes as $type): ?>
            <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-slate-50 p-5">
              <svg class="h-5 w-5 text-blue-600 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <p class="text-slate-700"><?= e($type) ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="bg-blue-950 py-20 text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <div class="inline-flex items-center justify-center gap-3 rounded-full bg-white/10 px-5 py-3 text-sm uppercase tracking-[0.25em] text-cyan-200">
        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
        </svg>
        Become the Opportunity
      </div>
      <h2 class="mt-8 text-4xl font-extrabold tracking-tight">
        Stop waiting for opportunities.
      </h2>
      <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-slate-200">
        Apply to become part of our creative, growth-focused talent ecosystem. Whether you’re a maker, thinker, or builder, we want to see how you can add value.
      </p>
      <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
        <a href="mailto:careers@blackmadhav.com" 
           class="inline-flex items-center justify-center rounded-full bg-white px-7 py-3 text-sm font-semibold text-slate-950 shadow-lg shadow-slate-950/20 transition hover:bg-slate-100">
          Send Your Work
        </a>
        <a href="mailto:careers@blackmadhav.com" 
           class="inline-flex items-center justify-center rounded-full border border-white/30 bg-white/10 px-7 py-3 text-sm font-semibold text-white transition hover:bg-white/20">
          careers@blackmadhav.com
        </a>
      </div>
    </div>
  </section>
</main>
