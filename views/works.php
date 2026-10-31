<?php
/**
 * View: Our Work Page
 * Shows work categories.
 *
 * Hero background photo: put an image at  assets/images/our-work-bg.jpg
 * (team meeting / office / IT company working). If the file is missing,
 * a plain blue background is shown instead.
 */

require_once __DIR__ . '/../config/config.php';

/*
 * Common temporary image URL
 */
$workImage = 'https://mdidminfoway.com/storage/works/category/ba42aad7-eb62-4fb0-9f72-450f73fa080d.png';

/* Hero background image (local file) */
$heroImage = base_url('assets/images/our-work-bg.jpg');

/* Which side the hero text sits on: 'left' or 'right' */
$heroSide = 'left';

/* Show the extra line "Explore our websites, apps, branding..." under the heading? (true / false) */
$showHeroText = false;

/*
 * Work categories  (title, card image, "View Work" link)
 */
$works = [
    ['title' => 'Digital Card',            'image' => $workImage,                        'href' => '/digitalcard.php'],
    ['title' => 'Business Card Design',    'image' => '/assets/images/digital-card.jpg', 'href' => '/businesscard.php'],
    ['title' => 'Application Development', 'image' => $workImage,                        'href' => '/appdevelopment.php'],
    ['title' => 'Latter Head',             'image' => '/assets/images/digital-card.jpg', 'href' => '/latterhead.php'],
    ['title' => 'Website Development',     'image' => '/assets/images/digital-card.jpg', 'href' => '/Websitedev.php'],
    ['title' => 'Brochure Design',         'image' => $workImage,                        'href' => '/brochure.php'],
    ['title' => 'Social Media Post',       'image' => '/assets/images/digital-card.jpg', 'href' => '/socialmediapost.php'],
    ['title' => 'Logo Design',             'image' => $workImage,                        'href' => '/logo.php'],
];
?>

<div class="min-h-screen bg-white pb-16">

    <!-- Hero Section : photo, text at the top-left with a soft dark shadow behind it -->
    <section
        class="ow-hero ow-hero--<?= e($heroSide) ?> relative isolate overflow-hidden bg-blue-950"
        style="background-image: url('<?= e($heroImage) ?>');"
    >
        <!-- dark shadow behind the text (strong on the text side, fades to clear) -->
        <div class="ow-hero__shade" aria-hidden="true"></div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8">

            <div class="ow-hero__card">

                <h1 class="ow-hero__title">
                    Our Work
                </h1>

                <p class="ow-hero__sub">
                    Innovation Through Design &amp; Code
                </p>

                <?php if ($showHeroText): ?>
                    <p class="ow-hero__text">
                        Explore our websites, apps, branding<br class="ow-br">
                        and design projects created<br class="ow-br">
                        for growing businesses.
                    </p>
                <?php endif; ?>

            </div>

        </div>
    </section>


    <!-- Works Grid -->
    <section
        id="works-list"
        class="container mx-auto px-4 py-16 sm:px-6 sm:py-20 lg:px-8"
    >

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:gap-8 lg:grid-cols-3 xl:grid-cols-4">

            <?php foreach ($works as $w): ?>

                <div
                    class="group relative block overflow-hidden rounded-xl border-2 border-blue-200 bg-white shadow-sm transition-all duration-500 ease-out hover:-translate-y-2 hover:border-blue-500 hover:shadow-2xl"
                >

                    <!-- Image -->
                    <div class="relative aspect-[4/3] w-full overflow-hidden bg-gradient-to-br from-blue-50 to-blue-100">

                        <img
                            src="<?= e($w['image']) ?>"
                            alt="<?= e($w['title']) ?>"
                            loading="lazy"
                            class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110"
                        />

                        <!-- Dark Overlay -->
                        <div
                            class="absolute inset-0 bg-blue-950/0 transition-all duration-500 group-hover:bg-blue-950/75"
                        ></div>

                        <!-- Hover Content -->
                        <div
                            class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center opacity-0 transition-all duration-500 group-hover:opacity-100"
                        >

                            <h3
                                class="translate-y-6 text-xl font-bold text-white transition-all duration-500 group-hover:translate-y-0 sm:text-2xl"
                            >
                                <?= e($w['title']) ?>
                            </h3>

                            <a
                                href="<?= e(base_url($w['href'])) ?>"
                                class="mt-4 flex translate-y-6 items-center gap-2 rounded-full border border-white/40 bg-white/10 px-5 py-2.5 text-sm font-semibold text-white backdrop-blur-sm transition-all duration-500 delay-75 group-hover:translate-y-0 group-hover:bg-white/20"
                            >

                                <span>View Work</span>

                                <svg
                                    class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 7l5 5m0 0l-5 5m5-5H6"
                                    />
                                </svg>

                            </a>

                        </div>

                    </div>

                    <!-- Category Name -->
                    <div
                        class="bg-white p-5 text-center transition-colors duration-300 group-hover:bg-blue-50"
                    >

                        <h3
                            class="text-lg font-semibold text-blue-900 transition-colors duration-300 group-hover:text-blue-700 sm:text-xl"
                        >
                            <?= e($w['title']) ?>
                        </h3>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </section>

</div>

<style>
/* ---- Hero: text at the TOP-LEFT with a soft dark shadow behind it ---- */
.ow-hero {
  position: relative; display: flex; align-items: flex-start;       /* top of the image */
  min-height: 33rem; padding: 13rem 0 2.5rem;                         /* image now starts at the very top; top gap: bigger number = text goes lower */
  background-size: cover; background-position: center; background-attachment: scroll;
}
.ow-hero > .container {
  position: relative; z-index: 1; display: flex; max-width: none !important; margin: 0 !important; width: 100%;
  padding-left: 1.25rem; padding-right: 1.25rem;                      /* gap from the screen edge */
}
.ow-hero--left  > .container { justify-content: flex-start; }
.ow-hero--right > .container { justify-content: flex-end; }

/* back shadow: darkest behind the text, fading out towards the other side. Change .72 to make it lighter/darker */
.ow-hero__shade { position: absolute; inset: 0; z-index: 0; pointer-events: none; }
.ow-hero--left  .ow-hero__shade { background: linear-gradient(90deg, rgba(8,18,45,.72) 0%, rgba(8,18,45,.45) 38%, rgba(8,18,45,0) 70%); }
.ow-hero--right .ow-hero__shade { background: linear-gradient(270deg, rgba(8,18,45,.72) 0%, rgba(8,18,45,.45) 38%, rgba(8,18,45,0) 70%); }

.ow-hero__card { width: 100%; max-width: 34rem; padding: 0; text-align: left; background: none; border: 0; box-shadow: none; }

.ow-hero__title, .ow-hero__sub, .ow-hero__text { color: #fff; text-shadow: 0 2px 14px rgba(0,0,0,.45); }
.ow-hero__title { margin-bottom: .5rem; font-size: 3.5rem; line-height: 1.05; font-weight: 800; letter-spacing: -.01em; }
.ow-hero__sub   { margin-bottom: .9rem; font-size: 1.35rem; line-height: 1.4; font-weight: 600; color: #E8EEF8; }
.ow-hero__text  { font-size: 1.1rem; line-height: 1.7; font-weight: 500; color: #E8EEF8; }
.ow-br { display: inline; }

@media (max-width: 767px) {
  .ow-hero { min-height: 25rem; padding: 9rem 0 1.75rem; }
  .ow-hero--left .ow-hero__shade, .ow-hero--right .ow-hero__shade {
    background: linear-gradient(180deg, rgba(8,18,45,.72) 0%, rgba(8,18,45,.4) 55%, rgba(8,18,45,0) 100%);
  }
  .ow-hero__card { max-width: none; }
  .ow-hero__title { font-size: 2.5rem; }
  .ow-hero__sub { font-size: 1.1rem; }
  .ow-hero__text { font-size: 1rem; }
  .ow-br { display: none; }
}
</style>