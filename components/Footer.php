<?php
/**
 * Footer Component
 */
function renderFooter() {
    $quickLinks = [
        ['label' => 'Home', 'href' => base_url('/')],
        ['label' => 'About', 'href' => base_url('/about')],
        ['label' => 'Our Work', 'href' => base_url('/works')],
        // ['label' => 'Portfolio', 'href' => base_url('/portfolio')],
        ['label' => 'inquiry', 'href' => base_url('/contact')],
    ];

    $services = [
        "Web Development",
        "App Development",
        "Digital Marketing",
        "SEO",
        "UI/UX Design",
        "Branding",
    ];
    ?>
    <footer class="bg-slate-950 text-white relative border-t border-blue-950">
      <div class="container mx-auto px-4 py-16 md:px-6">
        <div class="grid gap-10 lg:grid-cols-3">
          <div>
            <p class="mb-4 text-xl font-bold text-white"><?= e(APP_NAME) ?></p>
            <p class="max-w-md leading-relaxed text-gray-400">
              Black Madhav Digital Solution helps businesses grow with modern websites, mobile apps, AI solutions, branding, and digital marketing services.
            </p>
          </div>
          <div class="grid gap-6 sm:grid-cols-2">
            <div>
              <p class="mb-4 text-sm font-semibold uppercase tracking-widest text-blue-400">Quick Links</p>
              <ul class="space-y-3 text-sm text-gray-400">
                <?php foreach ($quickLinks as $link): ?>
                  <li>
                    <a href="<?= $link['href'] ?>" class="transition hover:text-blue-400"><?= e($link['label']) ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <div>
              <p class="mb-4 text-sm font-semibold uppercase tracking-widest text-blue-400">Services</p>
              <ul class="space-y-3 text-sm text-gray-400">
                <?php foreach ($services as $service): ?>
                  <li>
                    <a href="<?= base_url('/works') ?>" class="hover:text-blue-400 transition-colors duration-200 cursor-pointer"><?= e($service) ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>

          <div>
            <p class="mb-4 text-sm font-semibold uppercase tracking-widest text-blue-400">Contact Info</p>
            <ul class="space-y-3 text-sm text-gray-400">
              <li>Email: <?= e(APP_EMAIL) ?></li>
              <li>Phone: <?= e(APP_PHONE) ?></li>
            </ul>
          </div>
        </div>

        <div class="mt-12 border-t border-blue-950/60 pt-6 text-center text-sm text-gray-400">
          © <?= APP_YEAR ?> Black Madhav Digital Solution. All Rights Reserved.
        </div>
      </div>
    </footer>
    <?php
}
