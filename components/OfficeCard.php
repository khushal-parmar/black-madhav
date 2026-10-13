<?php
/**
 * OfficeCard Component
 */
function renderOfficeCard(array $location) {
    $city = e($location['city'] ?? '');
    $phone = e($location['phone'] ?? '');
    $mapUrl = e($location['mapUrl'] ?? '');
    $imageSrc = e($location['imageSrc'] ?? '');
    ?>
    <article class="group flex h-full flex-col overflow-hidden rounded-[1rem] border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">
      <div class="bg-[#17384A] px-4 py-4">
        <div class="flex items-center gap-3 text-white">
          <span class="inline-flex h-11 w-11 items-center justify-center rounded-full bg-slate-900/20 text-lg">
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
          </span>
          <div>
            <p class="text-xs uppercase tracking-[0.24em] text-slate-300">Location</p>
            <h3 class="text-lg font-semibold text-white"><?= $city ?></h3>
          </div>
        </div>
      </div>

      <div class="relative flex-1 overflow-hidden bg-slate-100 min-h-[200px]">
        <img src="<?= $imageSrc ?>" alt="<?= $city ?> office building" class="h-full w-full object-cover transition duration-500 group-hover:scale-105" />
        <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-slate-950/95 via-slate-950/65 to-transparent px-4 py-4">
          <p class="text-sm font-medium text-slate-100"><?= $phone ?></p>
          <a href="<?= $mapUrl ?>" target="_blank" rel="noreferrer" class="mt-3 inline-flex items-center gap-2 text-sm font-semibold text-white transition hover:text-blue-200">
            Get Direction
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </a>
        </div>
      </div>
    </article>
    <?php
}
