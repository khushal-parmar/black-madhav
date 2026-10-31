<?php
/**
 * View: About Page
 * Same design system as the Home page: Light Navy Blue + White theme,
 * duotone icons, hover effects and scroll animations (self-contained: styles + script at the bottom).
 */

require_once __DIR__ . '/../config/config.php';

/* ---------------------------------------------------------------------------
 * Duotone line icon set (48x48).  Usage:  <?= bm_icon('target') ?>
 * (guarded, so it is safe if the Home page already defined it)
 * ------------------------------------------------------------------------- */
if (!function_exists('bm_icon')) {
    function bm_icon(string $name): string {
        static $icons = [
            'web'        => '<path class="d" d="M6 13a4 4 0 014-4h28a4 4 0 014 4v6H6z"/><rect x="6" y="9" width="36" height="30" rx="4"/><path d="M6 19h36M20 27l-4 4 4 4M28 27l4 4-4 4"/><circle cx="11.5" cy="14" r=".8"/><circle cx="16" cy="14" r=".8"/>',
            'app'        => '<rect class="d" x="14" y="5" width="20" height="38" rx="4"/><rect x="17.5" y="12" width="13" height="20" rx="1.5"/><path d="M21 8.5h6M22 37.5h4"/>',
            'marketing'  => '<path class="d" d="M9 20h9l17-9v26l-17-9H9a2 2 0 01-2-2v-4a2 2 0 012-2z"/><path d="M16 28l2 11h4l-2-11M39 19a7 7 0 010 10"/>',
            'seo'        => '<circle class="d" cx="21" cy="21" r="14"/><path d="M31.5 31.5L43 43M15 27v-5M21 27V15M27 27v-8"/>',
            'design'     => '<path class="d" d="M24 5l11 15-11 23-11-23z"/><circle cx="24" cy="21" r="3"/><path d="M24 24v14"/>',
            'check'      => '<circle class="d" cx="24" cy="24" r="18"/><path d="M15 24.5l6 6 12-13"/>',
            'clipboard'  => '<rect class="d" x="11" y="8" width="26" height="34" rx="3"/><rect x="18" y="5" width="12" height="7" rx="2"/><path d="M17 21h14M17 28h14M17 35h8"/>',
            'shield'     => '<path class="d" d="M24 5l15 6v11c0 10-7 17-15 21C16 39 9 32 9 22V11z"/><path d="M17 24l5 5 9-10"/>',
            'eye'        => '<path class="d" d="M3 24s7-13 21-13 21 13 21 13-7 13-21 13S3 24 3 24z"/><circle cx="24" cy="24" r="6"/>',
            'bolt'       => '<path class="d" d="M27 4L10 27h12l-2 17 18-24H26z"/>',
            'bulb'       => '<path class="d" d="M24 5a13 13 0 00-7 24c1.5 1.3 2 3 2 5v2h10v-2c0-2 .5-3.7 2-5A13 13 0 0024 5z"/><path d="M19 40h10M21 44h6"/>',
            'trend'      => '<path class="d" stroke="none" d="M8 34l12-12 8 8 14-16v24H8z"/><path d="M8 34l12-12 8 8 14-16M32 14h10v10"/>',
            'target'     => '<circle class="d" cx="24" cy="24" r="19"/><circle cx="24" cy="24" r="12"/><circle cx="24" cy="24" r="5"/>',
            'globe'      => '<circle class="d" cx="24" cy="24" r="19"/><path d="M5 24h38M24 5c6 5 8 12 8 19s-2 14-8 19c-6-5-8-12-8-19s2-14 8-19z"/>',
            'briefcase'  => '<rect class="d" x="5" y="14" width="38" height="26" rx="4"/><path d="M17 14v-3a3 3 0 013-3h8a3 3 0 013 3v3M5 26h38M21 26v4h6v-4"/>',
            'users'      => '<circle class="d" cx="18" cy="16" r="7"/><path d="M5 40c0-8 5-13 13-13s13 5 13 13"/><circle cx="35" cy="18" r="5"/><path d="M34 28c6 0 10 4 10 11"/>',
            'chat'       => '<path class="d" d="M6 10a4 4 0 014-4h28a4 4 0 014 4v20a4 4 0 01-4 4H20l-9 8v-8h-1a4 4 0 01-4-4z"/><path d="M15 17h18M15 24h11"/>',
            'award'      => '<circle class="d" cx="24" cy="20" r="14"/><path d="M18 32l-3 12 9-4 9 4-3-12M18 20l4 4 8-9"/>',
        ];
        $inner = $icons[$name] ?? $icons['check'];
        return '<svg class="bm-ico" viewBox="0 0 48 48" aria-hidden="true">' . $inner . '</svg>';
    }
}

$approachSteps = [
    ['title' => "Understand", 'description' => "We understand your business and goals",   'icon' => 'eye'],
    ['title' => "Strategize", 'description' => "We create a clear strategy",             'icon' => 'clipboard'],
    ['title' => "Create",     'description' => "We design and develop solutions",        'icon' => 'bulb'],
    ['title' => "Optimize",   'description' => "We go live with perfection",             'icon' => 'check'],
    ['title' => "Grow",       'description' => "We optimize and scale your business",    'icon' => 'trend'],
];

$differences = [
    ['title' => "Strategy First",        'description' => "We don't just execute — we plan smart strategies for long-term success.",       'icon' => 'target'],
    ['title' => "Design + Performance",  'description' => "Our designs are not only attractive but also focused on conversions.",          'icon' => 'bolt'],
    ['title' => "Result-Oriented Work",  'description' => "We focus on measurable results like traffic, leads, and growth.",              'icon' => 'trend'],
    ['title' => "End-to-End Solutions",  'description' => "From idea to execution — everything under one roof.",                          'icon' => 'globe'],
];

$expertise = [
    "Modern & Responsive Website Development",
    "High-Converting UI/UX Design",
    "Search Engine Optimization (SEO)",
    "Digital Marketing & Paid Advertising",
    "Brand Building & Online Presence",
    "Business Growth & Lead Generation",
];

/*
 * Team photos: put them in  assets/images/team/  (square or portrait photo, about 400x400 .jpg).
 * If a photo is missing, the initials circle is shown instead (nothing breaks).
 */
$experts = [
    [
        'name' => "Krishn Chandravadiya",
        'image' => 'krishn.jpg',
        'role' => "CEO & Founder",
        'bio'  => "Leads the company vision and guides strategy, ensuring every project achieves growth, brand impact, and measurable business results.",
    ],
    [
        'name' => "Drashti Sanchaniya",
        'image' => 'drashti.jpg',
        'role' => "UI/UX Designer & Graphic Designer",
        'bio'  => "Creates beautiful, user-focused interfaces and brand visuals that improve usability, drive engagement, and deliver a polished customer experience.",
    ],
    [
        'name' => "Vishruti Sangani",
        'image' => 'vishruti.jpg',
        'role' => "Digital Marketing Specialist",
        'bio'  => "Develops tailored marketing campaigns and growth strategies that increase visibility, generate leads, and convert audiences across digital channels.",
    ],
    [
        'name' => "Vandit Katbamna",
        'image' => 'vandit.jpg',
        'role' => "Full Stack Developer",
        'bio'  => "Builds reliable, high-performance web applications from front-end design to back-end systems, making sure every solution is fast, scalable, and secure.",
    ],
];

$extraSections = [
    ['title' => "Our Philosophy",              'icon' => 'bulb',
     'description' => "We believe that digital success is not just about technology — it's about creating meaningful experiences. Our philosophy is to combine creativity, strategy, and innovation to deliver solutions that truly impact businesses."],
    ['title' => "Our Goal",                    'icon' => 'target',
     'description' => "Our goal is to empower businesses with digital tools and strategies that help them grow faster, reach the right audience, and achieve long-term success."],
    ['title' => "Our Strengths",               'icon' => 'briefcase',
     'description' => "Strong technical expertise, creative and modern design approach, deep understanding of digital marketing, focus on performance and results, and continuous learning and improvement."],
    ['title' => "Innovation & Technology",     'icon' => 'bolt',
     'description' => "We stay updated with the latest industry trends and technologies to deliver cutting-edge solutions. From modern frameworks to smart marketing tools, we ensure your business stays ahead of the competition."],
    ['title' => "Client-Centric Approach",     'icon' => 'users',
     'description' => "We put our clients first. Every decision we make is based on what is best for your business. We listen, understand, and deliver solutions that match your goals."],
    ['title' => "Our Growth Mindset",          'icon' => 'trend',
     'description' => "We believe in continuous growth — for our clients and for ourselves. We analyze, optimize, and improve strategies to ensure consistent progress."],
    ['title' => "Transparency & Communication",'icon' => 'chat',
     'description' => "We maintain clear and honest communication throughout the project. You are always updated about progress, ensuring trust and clarity."],
    ['title' => "Commitment to Excellence",    'icon' => 'award',
     'description' => "We are committed to delivering high-quality work that meets industry standards and exceeds client expectations."],
    ['title' => "Our Promise",                 'icon' => 'shield',
     'description' => "We promise to deliver reliable, scalable, and effective digital solutions that help your business succeed in the long run."],
];
?>

<div id="about-page" class="min-h-screen overflow-x-hidden bg-white text-slate-800" data-testid="page-about">

  <!-- Hero Section -->
  <section class="ab-hero relative overflow-hidden py-20 md:py-28">
    <div class="ab-blob ab-blob--1"></div>
    <div class="ab-blob ab-blob--2"></div>

    <div class="container relative mx-auto px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-4xl text-center ab-hero__text">
        <span class="ab-pill"><span class="ab-pill__dot"></span>About Us</span>

        <h1 class="ab-gradient-text mb-6 text-3xl font-extrabold sm:text-5xl md:text-6xl">
          We Build Digital Experiences That Drive Growth
        </h1>
        <p class="text-base leading-relaxed text-slate-600 sm:text-xl">
          At BLACK MADHAV DIGITAL SOLUTION, we don't just create websites or run campaigns — we build powerful digital experiences that help businesses grow, scale, and stand out in today's competitive market. We combine technology, creativity, and strategy to deliver solutions that are not only visually impressive but also performance-driven.
        </p>

        <!-- floating icon chips -->
        <div class="ab-floaters" aria-hidden="true">
          <?php foreach (['web', 'design', 'seo', 'marketing', 'app'] as $k => $ic): ?>
            <span class="bm-tile ab-floater" style="--fd: <?= $k * 0.45 ?>s"><?= bm_icon($ic) ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Approach Section -->
  <section class="bg-white py-20 md:py-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="ab-head mx-auto mb-16 max-w-3xl text-center">
        <span class="ab-pill"><span class="ab-pill__dot"></span>Our Approach</span>
        <h2 class="mb-6 text-3xl font-extrabold text-blue-950 sm:text-4xl md:text-5xl">
          We believe every business is unique
        </h2>
        <p class="mx-auto max-w-2xl text-lg text-slate-600">
          That's why we focus on understanding your brand, your audience, and your goals before creating any solution. Our approach is simple:
        </p>
      </div>

      <div class="ab-steps mb-14">
        <?php foreach ($approachSteps as $i => $step): ?>
          <div class="ab-step" style="--i: <?= $i ?>">
            <div class="ab-step__circle">
              <span class="ab-step__ring"></span>
              <?= bm_icon($step['icon']) ?>
              <span class="ab-step__num"><?= $i + 1 ?></span>
            </div>
            <div class="ab-step__text">
              <h3 class="ab-step__title"><?= e($step['title']) ?></h3>
              <p class="ab-step__desc"><?= e($step['description']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="ab-band">
        <p class="relative z-10 text-lg font-semibold sm:text-xl">
          This ensures that every project we deliver adds real value to your business.
        </p>
      </div>
    </div>
  </section>

  <!-- What Makes Us Different -->
  <section class="ab-soft py-20 md:py-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="ab-head mx-auto mb-16 max-w-3xl text-center">
        <span class="ab-pill"><span class="ab-pill__dot"></span>Our Difference</span>
        <h2 class="text-3xl font-extrabold text-blue-950 sm:text-4xl md:text-5xl">
          What Makes Us Different
        </h2>
      </div>

      <div class="ab-grid ab-grid--4">
        <?php foreach ($differences as $item): ?>
          <article class="ab-card">
            <div class="ab-card__top">
              <span class="bm-tile"><?= bm_icon($item['icon']) ?></span>
              <h3 class="ab-card__title"><?= e($item['title']) ?></h3>
            </div>
            <p class="ab-card__desc"><?= e($item['description']) ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Our Expertise -->
  <section class="bg-white py-20 md:py-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="ab-head mx-auto mb-16 max-w-3xl text-center">
        <span class="ab-pill"><span class="ab-pill__dot"></span>Our Expertise</span>
        <h2 class="mb-4 text-3xl font-extrabold text-blue-950 sm:text-4xl md:text-5xl">
          We specialize in building complete digital ecosystems
        </h2>
      </div>

      <div class="ab-grid ab-grid--3 mx-auto max-w-5xl">
        <?php foreach ($expertise as $item): ?>
          <div class="ab-chip">
            <span class="bm-tile bm-tile--sm"><?= bm_icon('check') ?></span>
            <p class="font-semibold text-blue-950"><?= e($item) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Meet the Team -->
  <section class="ab-soft py-20 md:py-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="ab-head mx-auto mb-16 max-w-3xl text-center">
        <span class="ab-pill"><span class="ab-pill__dot"></span>Our Team</span>
        <h2 class="text-3xl font-extrabold text-blue-950 sm:text-4xl md:text-5xl">
          Meet the Minds Behind the Magic
        </h2>
      </div>

      <div class="ab-grid ab-grid--4">
        <?php foreach ($experts as $exp): ?>
          <article class="ab-member">
            <div class="ab-member__avatar">
              <span class="ab-member__initials">
                <?php
                  $words = explode(' ', $exp['name']);
                  echo e(substr($words[0] ?? '', 0, 1) . substr($words[1] ?? '', 0, 1));
                ?>
              </span>
              <img
                class="ab-member__photo"
                src="<?= e(base_url('assets/images/team/' . $exp['image'])) ?>"
                alt="<?= e($exp['name']) ?>"
                loading="lazy"
                onerror="this.style.display='none'" />
            </div>
            <h3 class="ab-member__name"><?= e($exp['name']) ?></h3>
            <p class="ab-member__role"><?= e($exp['role']) ?></p>
            <p class="ab-member__bio"><?= e($exp['bio']) ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Comprehensive Company Values & Pillars -->
  <section class="bg-white py-20 md:py-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="ab-head mx-auto mb-16 max-w-3xl text-center">
        <h2 class="text-3xl font-extrabold text-blue-950 sm:text-4xl">
          Core Pillars of Our Organization
        </h2>
      </div>

      <div class="ab-grid ab-grid--3">
        <?php foreach ($extraSections as $sec): ?>
          <article class="ab-card">
            <div class="ab-card__top">
              <span class="bm-tile"><?= bm_icon($sec['icon']) ?></span>
              <h3 class="ab-card__title"><?= e($sec['title']) ?></h3>
            </div>
            <p class="ab-card__desc"><?= e($sec['description']) ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</div>

<style>
/* ==========================================================================
   ABOUT PAGE THEME - Light Navy Blue + White (scoped to #about-page)
   ========================================================================== */
#about-page {
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

  --ease-out: cubic-bezier(.22, .8, .24, 1);
  --shadow-soft: 0 10px 30px -14px rgba(28, 49, 88, .28);
  --shadow-lift: 0 24px 50px -22px rgba(28, 49, 88, .45);

  /* Tailwind palette re-map: blue / slate / indigo shades used here resolve to navy */
  --color-blue-50: #F4F7FC;  --color-blue-100: #E8EEF8; --color-blue-200: #D3DEF0; --color-blue-300: #B0C2E0;
  --color-blue-400: #88A3CE; --color-blue-500: #6283B9; --color-blue-600: #4066A3; --color-blue-700: #2D4D86;
  --color-blue-800: #243F6C; --color-blue-900: #1C3158; --color-blue-950: #14264A;
  --color-indigo-900: #1C3158; --color-indigo-950: #14264A;
  --color-slate-50: #F6F8FC; --color-slate-100: #EDF1F8; --color-slate-200: #DCE4F1; --color-slate-300: #C2CFE4;
  --color-slate-500: #5F7399; --color-slate-600: #4A5E85; --color-slate-700: #384D75; --color-slate-800: #27395F;
  --color-slate-900: #1C3158; --color-slate-950: #14264A;
}

/* ---- scroll-reveal animation classes ---- */
#about-page .anim.in-view { animation: abUp .85s var(--ease-out) backwards; animation-delay: var(--d, 0s); }
#about-page .anim-zoom.in-view { animation-name: abZoom; }
.js-anim #about-page .anim:not(.in-view) { opacity: 0; }
@keyframes abUp   { from { opacity: 0; transform: translateY(28px); } to { opacity: 1; transform: none; } }
@keyframes abZoom { from { opacity: 0; transform: scale(.94); }       to { opacity: 1; transform: none; } }
@keyframes abFloat { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-12px); } }
@keyframes abPing  { 0% { transform: scale(.92); opacity: .65; } 100% { transform: scale(1.38); opacity: 0; } }
@keyframes abDash  { to { background-position-x: 16px; } }
@keyframes abPulse { 0%,100% { box-shadow: 0 0 0 0 rgba(64,102,163,.45); } 50% { box-shadow: 0 0 0 7px rgba(64,102,163,0); } }
@keyframes abSpin  { to { transform: rotate(360deg); } }
@keyframes abShimmer { from { transform: translateX(-120%); } to { transform: translateX(120%); } }

/* ---- duotone icon system: <?= bm_icon('name') ?> ---- */
#about-page .bm-ico { display: block; width: 1.75rem; height: 1.75rem; fill: none; stroke: currentColor; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }
#about-page .bm-ico .d { fill: currentColor; fill-opacity: .16; }
#about-page .bm-tile {
  flex: 0 0 auto; display: inline-flex; align-items: center; justify-content: center;
  width: 3.4rem; height: 3.4rem; border-radius: 1rem; color: var(--navy-700);
  background: linear-gradient(145deg, var(--navy-50), var(--navy-100)); border: 1px solid var(--navy-200);
  transition: transform .45s var(--ease-out), background .35s, color .35s, border-color .35s, box-shadow .35s;
}
#about-page .bm-tile--sm { width: 2.5rem; height: 2.5rem; border-radius: .75rem; }
#about-page .bm-tile--sm .bm-ico { width: 1.4rem; height: 1.4rem; }
#about-page .ab-card:hover .bm-tile, #about-page .ab-chip:hover .bm-tile {
  color: #fff; background: linear-gradient(135deg, var(--navy-600), var(--navy-900)); border-color: var(--navy-800);
  box-shadow: 0 12px 22px -10px rgba(45,77,134,.7); transform: translateY(-2px) scale(1.06) rotate(-3deg);
}
#about-page .ab-card:hover .bm-tile .d, #about-page .ab-chip:hover .bm-tile .d { fill-opacity: .3; }

/* ---- section helpers ---- */
#about-page .ab-soft { background: linear-gradient(180deg, var(--navy-50) 0%, #fff 100%); }
#about-page .ab-pill {
  display: inline-flex; align-items: center; gap: .55rem; margin-bottom: 1.1rem;
  padding: .45rem 1rem; border-radius: 999px; font-size: .8rem; font-weight: 700; letter-spacing: .12em; text-transform: uppercase;
  color: var(--navy-700); background: var(--navy-100); border: 1px solid var(--navy-200);
}
#about-page .ab-pill__dot { width: .6rem; height: .6rem; border-radius: 50%; background: var(--navy-600); animation: abPulse 2s ease-in-out infinite; }

/* ---- hero ---- */
#about-page .ab-hero { background: linear-gradient(180deg, var(--navy-100) 0%, var(--navy-50) 45%, #fff 100%); }
#about-page .ab-gradient-text {
  background: linear-gradient(90deg, var(--navy-950), var(--navy-700) 55%, var(--navy-900));
  -webkit-background-clip: text; background-clip: text; color: transparent; -webkit-text-fill-color: transparent;
}
#about-page .ab-blob { position: absolute; border-radius: 50%; filter: blur(70px); pointer-events: none; }
#about-page .ab-blob--1 { width: 22rem; height: 22rem; right: -6rem; top: -6rem; background: rgba(98,131,185,.28); }
#about-page .ab-blob--2 { width: 20rem; height: 20rem; left: -6rem; bottom: -8rem; background: rgba(176,194,224,.35); }
#about-page .ab-floaters { display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap; margin-top: 2.5rem; }
#about-page .ab-floater { width: 3.6rem; height: 3.6rem; box-shadow: var(--shadow-soft); background: #fff; animation: abFloat 4s ease-in-out infinite; animation-delay: var(--fd, 0s); }

/* ---- approach: 5 steps with animated dashed connectors ---- */
#about-page .ab-steps { display: grid; gap: 2.75rem 1.5rem; grid-template-columns: minmax(0,1fr); }
@media (min-width: 640px)  { #about-page .ab-steps { grid-template-columns: repeat(2, minmax(0,1fr)); } }
@media (min-width: 1024px) { #about-page .ab-steps { grid-template-columns: repeat(5, minmax(0,1fr)); } }
#about-page .ab-step { position: relative; display: flex; flex-direction: column; align-items: center; text-align: center; padding: 0 .4rem; }
#about-page .ab-step__circle {
  position: relative; display: grid; place-items: center; width: 4.8rem; height: 4.8rem; border-radius: 50%; margin-bottom: 1.2rem;
  color: #fff; background: linear-gradient(135deg, var(--navy-600), var(--navy-900));
  box-shadow: 0 16px 28px -12px rgba(45,77,134,.7);
  transition: transform .45s var(--ease-out);
}
#about-page .ab-step__circle .bm-ico { width: 2.2rem; height: 2.2rem; }
#about-page .ab-step__circle .bm-ico .d { fill-opacity: .3; }
#about-page .ab-step__ring {
  position: absolute; inset: -4px; border-radius: 50%; border: 2px solid var(--navy-400); pointer-events: none;
  animation: abPing 3.5s ease-out infinite; animation-delay: calc(var(--i, 0) * .7s);
}
#about-page .ab-step__num {
  position: absolute; top: -.2rem; right: -.2rem; display: grid; place-items: center; width: 1.6rem; height: 1.6rem; border-radius: 50%;
  font-size: .75rem; font-weight: 800; color: var(--navy-900); background: #fff; border: 2px solid var(--navy-200);
}
#about-page .ab-step:hover .ab-step__circle { transform: translateY(-6px) scale(1.08); }
#about-page .ab-step__title { font-size: 1.2rem; font-weight: 700; color: var(--navy-950); margin-bottom: .4rem; transition: color .3s; }
#about-page .ab-step:hover .ab-step__title { color: var(--navy-600); }
#about-page .ab-step__desc { font-size: .92rem; line-height: 1.6; color: var(--navy-600); max-width: 14rem; }
@media (min-width: 1024px) {
  #about-page .ab-step:not(:last-child)::after {
    content: ""; position: absolute; top: 2.4rem; left: calc(50% + 3.1rem); width: calc(100% + 1.5rem - 6.2rem); height: 2px;
    background: repeating-linear-gradient(90deg, var(--navy-300) 0 8px, transparent 8px 16px);
    animation: abDash 1s linear infinite;
  }
}

/* ---- navy message band ---- */
#about-page .ab-band {
  position: relative; overflow: hidden; border-radius: 1.25rem; padding: 2rem 1.5rem; text-align: center; color: #fff;
  background: linear-gradient(135deg, var(--navy-950) 0%, var(--navy-800) 55%, var(--navy-950) 100%);
  box-shadow: var(--shadow-lift);
}
#about-page .ab-band::before { content: ""; position: absolute; right: -4rem; top: -5rem; width: 16rem; height: 16rem; border-radius: 50%; background: rgba(98,131,185,.28); filter: blur(40px); }
#about-page .ab-band::after {
  content: ""; position: absolute; inset: 0; transform: translateX(-120%); pointer-events: none;
  background: linear-gradient(110deg, transparent 30%, rgba(255,255,255,.12) 50%, transparent 70%);
  animation: abShimmer 5s ease-in-out infinite;
}

/* ---- card grids ---- */
#about-page .ab-grid { display: grid; gap: 1.5rem; grid-template-columns: minmax(0,1fr); }
@media (min-width: 640px)  { #about-page .ab-grid--3, #about-page .ab-grid--4 { grid-template-columns: repeat(2, minmax(0,1fr)); } }
@media (min-width: 1024px) { #about-page .ab-grid--3 { grid-template-columns: repeat(3, minmax(0,1fr)); } #about-page .ab-grid--4 { grid-template-columns: repeat(4, minmax(0,1fr)); } }

/* ---- cards (icon + title on top, text below) ---- */
#about-page .ab-card {
  position: relative; display: flex; flex-direction: column; overflow: hidden;
  background: #fff; border: 1px solid var(--navy-100); border-radius: 1.25rem; padding: 1.6rem 1.5rem; box-shadow: var(--shadow-soft);
  transition: transform .45s var(--ease-out), box-shadow .45s var(--ease-out), border-color .3s;
}
#about-page .ab-card::before, #about-page .ab-member::before {
  content: ""; position: absolute; left: 0; top: 0; height: 3px; width: 100%;
  background: linear-gradient(90deg, var(--navy-600), var(--navy-900)); transform: scaleX(0); transform-origin: left; transition: transform .5s var(--ease-out);
}
#about-page .ab-card:hover, #about-page .ab-member:hover { transform: translateY(-8px); border-color: var(--navy-300); box-shadow: var(--shadow-lift); }
#about-page .ab-card:hover::before, #about-page .ab-member:hover::before { transform: scaleX(1); }
#about-page .ab-card__top { display: flex; align-items: center; gap: .9rem; margin-bottom: 1rem; }
#about-page .ab-card__title { font-size: 1.1rem; font-weight: 700; line-height: 1.3; color: var(--navy-950); transition: color .3s; }
#about-page .ab-card:hover .ab-card__title { color: var(--navy-600); }
#about-page .ab-card__desc { font-size: .93rem; line-height: 1.7; color: var(--navy-600); }

/* ---- expertise chips ---- */
#about-page .ab-chip {
  display: flex; align-items: center; gap: .9rem; padding: 1.1rem 1.25rem;
  background: #fff; border: 1px solid var(--navy-100); border-radius: 1rem; box-shadow: var(--shadow-soft);
  transition: transform .4s var(--ease-out), border-color .3s, box-shadow .4s;
}
#about-page .ab-chip:hover { transform: translateY(-4px); border-color: var(--navy-300); box-shadow: var(--shadow-lift); }

/* ---- team ---- */
#about-page .ab-member {
  position: relative; overflow: hidden; text-align: center;
  background: #fff; border: 1px solid var(--navy-100); border-radius: 1.5rem; padding: 2rem 1.5rem; box-shadow: var(--shadow-soft);
  transition: transform .45s var(--ease-out), box-shadow .45s var(--ease-out), border-color .3s;
}
#about-page .ab-member__avatar { position: relative; width: 7.5rem; height: 7.5rem; margin: 0 auto 1.3rem; }
#about-page .ab-member__avatar::before {          /* dashed ring that spins on hover */
  content: ""; position: absolute; inset: -7px; border-radius: 50%; border: 2px dashed var(--navy-300);
  transition: border-color .3s;
}
#about-page .ab-member:hover .ab-member__avatar::before { border-color: var(--navy-600); animation: abSpin 10s linear infinite; }
#about-page .ab-member__initials {
  display: grid; place-items: center; width: 100%; height: 100%; border-radius: 50%;
  font-size: 2rem; font-weight: 800; letter-spacing: .04em; color: #fff;
  background: linear-gradient(135deg, var(--navy-600), var(--navy-900)); box-shadow: 0 14px 24px -12px rgba(45,77,134,.7);
}
#about-page .ab-member__photo {
  position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; object-position: center top;
  border-radius: 50%; border: 3px solid #fff; background: var(--navy-100);
  box-shadow: 0 14px 24px -12px rgba(45,77,134,.7); transition: transform .5s var(--ease-out);
}
#about-page .ab-member:hover .ab-member__photo { transform: scale(1.04); }
#about-page .ab-member__name { font-size: 1.15rem; font-weight: 700; color: var(--navy-950); }
#about-page .ab-member__role {
  display: inline-block; margin: .55rem 0 .9rem; padding: .25rem .8rem; border-radius: 999px;
  font-size: .78rem; font-weight: 700; color: var(--navy-700); background: var(--navy-100);
}
#about-page .ab-member__bio { font-size: .9rem; line-height: 1.7; color: var(--navy-600); }

@media (max-width: 767px) {
  #about-page .ab-card:hover, #about-page .ab-member:hover, #about-page .ab-chip:hover { transform: none; }
}
/* ==========================================================================
   MOBILE TUNING (phones)
   ========================================================================== */
@media (max-width: 767px) {
  #about-page section.py-20 { padding-top: 3.25rem; padding-bottom: 3.25rem; }
  #about-page .mb-16 { margin-bottom: 2.25rem; }
  #about-page h1 { font-size: 1.85rem; line-height: 1.2; }
  #about-page h2 { font-size: 1.65rem; line-height: 1.25; }
  #about-page .ab-pill { font-size: .72rem; letter-spacing: .1em; padding: .4rem .85rem; }

  /* hero icon chips fit in one row */
  #about-page .ab-floaters { gap: .55rem; margin-top: 2rem; flex-wrap: nowrap; }
  #about-page .ab-floater { width: 2.9rem; height: 2.9rem; border-radius: .8rem; }
  #about-page .ab-floater .bm-ico { width: 1.4rem; height: 1.4rem; }

  /* approach steps: icon on the left, text on the right (compact list) */
  #about-page .ab-steps { gap: 1.1rem; margin-bottom: 2rem; }
  #about-page .ab-step {
    flex-direction: row; align-items: center; text-align: left; gap: 1rem; padding: 1rem 1.1rem;
    background: #fff; border: 1px solid var(--navy-100); border-radius: 1.1rem; box-shadow: var(--shadow-soft);
  }
  #about-page .ab-step__circle { flex: 0 0 auto; width: 3.8rem; height: 3.8rem; margin-bottom: 0; }
  #about-page .ab-step__circle .bm-ico { width: 1.8rem; height: 1.8rem; }
  #about-page .ab-step__text { min-width: 0; }
  #about-page .ab-step__title { font-size: 1.05rem; margin-bottom: .15rem; }
  #about-page .ab-step__desc { max-width: none; font-size: .88rem; }

  #about-page .ab-band { padding: 1.5rem 1.1rem; }
  #about-page .ab-card { padding: 1.3rem 1.2rem; }
  #about-page .ab-member { padding: 1.6rem 1.2rem; }
  #about-page .ab-grid { gap: 1rem; }
}
/* hero starts at the very top (behind the navbar): no white gap. Top padding = navbar height + normal spacing */
#about-page section.ab-hero { padding-top: 12.15rem; }
@media (max-width: 767px) { #about-page section.ab-hero { padding-top: 7.3rem; } }
@media (prefers-reduced-motion: reduce) {
  #about-page *,#about-page *::before, #about-page *::after { animation-duration: .01ms !important; animation-iteration-count: 1 !important; transition-duration: .01ms !important; }
  .js-anim #about-page .anim:not(.in-view) { opacity: 1; }
}
</style>

<script>
/* Scroll-reveal animations for the About page (self-contained) */
(function () {
  var root = document.getElementById('about-page');
  if (!root) return;
  var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (reduce || !('IntersectionObserver' in window)) return;

  function tag(els, cls, step, base) {
    els.forEach(function (el, i) {
      if (!el || el.classList.contains('anim')) return;
      el.classList.add('anim', cls);
      el.style.setProperty('--d', ((base || 0) + Math.min(i, 6) * (step || 0.08)) + 's');
    });
  }
  function list(sel) { return Array.prototype.slice.call(root.querySelectorAll(sel)); }

  // hero: pill, heading, paragraph and icon chips rise in one by one
  tag(list('.ab-hero__text > *'), 'anim-up', 0.12, 0.1);

  // section headings
  tag(list('.ab-head'), 'anim-up');

  // grids and steps: staggered
  tag(list('.ab-grid > *'), 'anim-up', 0.07);
  tag(list('.ab-steps > *'), 'anim-zoom', 0.1);
  tag(list('.ab-band'), 'anim-zoom');

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