<?php
/**
 * Navbar Component
 * Only 4 links: Home, About, Our Work, Inquiry.
 * Light Navy Blue + White theme, animated, fully responsive.
 * Styles live at the bottom of this file, so no other file needs to change.
 * (The mobile menu toggle is still handled by assets/js/main.js - same ids as before.)
 */
function renderNavbar($activePath = '/') { 
    // 'key' = route used to detect the active page, 'path' = the link
    // ('Inquiry' opens the existing /contact page, so the backend/form is untouched)
    $navLinks = [
        ['name' => 'Home',     'keys' => ['/'],                     'path' => base_url('/')],
        ['name' => 'About',    'keys' => ['/about'],                'path' => base_url('/about')],
        ['name' => 'Our Work', 'keys' => ['/works'],                'path' => base_url('/works')],
        ['name' => 'Inquiry',  'keys' => ['/contact', '/inquiry'],  'path' => base_url('/contact')],
    ];

    $current = '/' . trim((string)$activePath, '/');
    $current = preg_replace('/\.php$/', '', $current) ?: '/';
    ?>
    <header id="main-navbar" class="bm-navbar fixed top-0 left-0 right-0 z-50 w-full" data-testid="navbar">
      <div class="bm-navbar__inner container mx-auto flex min-w-0 w-full items-center justify-between px-3 sm:px-6 lg:px-8">

        <!-- Logo -->
        <a href="<?= base_url('/') ?>" class="bm-logo group flex min-w-0 max-w-[calc(100%-3.5rem)] items-center gap-2.5 sm:gap-3" data-testid="link-home-logo">
          <span class="bm-logo__box flex flex-shrink-0 items-center justify-center">
            <img src="<?= base_url('assets/images/Blackmadhavicon.svg') ?>" alt="BMDS Logo" class="h-6 w-6 object-contain sm:h-7 sm:w-7" />
          </span>
          <span class="bm-logo__text min-w-0 truncate">Black Madhav Digital Solutions</span>
        </a>

        <!-- Desktop Nav -->
        <nav class="bm-nav hidden md:flex items-center" aria-label="Main navigation">
          <?php foreach ($navLinks as $i => $link):
              $isActive = in_array($current, $link['keys'], true); ?>
            <a href="<?= $link['path'] ?>"
               style="--i:<?= $i ?>"
               class="bm-nav-link<?= $isActive ? ' is-active' : '' ?>"
               <?= $isActive ? 'aria-current="page"' : '' ?>
               data-testid="link-desktop-<?= strtolower(str_replace(' ', '-', $link['name'])) ?>">
              <?= e($link['name']) ?>
            </a>
          <?php endforeach; ?>
        </nav>

        <!-- Mobile Toggle -->
        <button id="mobile-menu-btn"
                class="bm-burger ml-2 flex shrink-0 items-center justify-center md:hidden"
                data-testid="btn-mobile-menu-toggle"
                aria-label="Open menu"
                aria-expanded="false"
                aria-controls="mobile-menu"
                type="button">
          <svg id="menu-icon-open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <svg id="menu-icon-close" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!-- Mobile Nav Dropdown -->
      <div id="mobile-menu" class="bm-mobile hidden absolute left-0 right-0 top-full w-full overflow-y-auto overflow-x-hidden md:hidden" data-testid="mobile-menu">
        <div class="bm-mobile__list flex flex-col gap-1">
          <?php foreach ($navLinks as $i => $link):
              $isActive = in_array($current, $link['keys'], true); ?>
            <a href="<?= $link['path'] ?>"
               style="--i:<?= $i ?>"
               class="bm-mobile-link<?= $isActive ? ' is-active' : '' ?>"
               <?= $isActive ? 'aria-current="page"' : '' ?>
               data-testid="link-mobile-<?= strtolower(str_replace(' ', '-', $link['name'])) ?>">
              <span><?= e($link['name']) ?></span>
              <svg class="bm-mobile-link__arrow" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </header>

    <style>
      /* ===== Navbar - Light Navy Blue + White ===== */
      #main-navbar {
        --nv-50:  #F4F7FC;
        --nv-100: #E8EEF8;
        --nv-300: #B0C2E0;
        --nv-600: #4066A3;
        --nv-700: #2D4D86;
        --nv-900: #1C3158;
        --nv-950: #14264A;
        --ease: cubic-bezier(.22, .8, .24, 1);

        background: rgba(255, 255, 255, .94) !important;
        -webkit-backdrop-filter: saturate(1.5) blur(14px);
        backdrop-filter: saturate(1.5) blur(14px);
        border-bottom: 1px solid rgba(45, 77, 134, .10) !important;
        padding: 1.05rem 0 !important;
        transition: padding .35s var(--ease), background .35s ease, box-shadow .35s ease, border-color .35s ease;
        animation: bmNavDrop .8s var(--ease) backwards;
      }
      #main-navbar.scrolled {
        padding: .6rem 0 !important;
        background: rgba(255, 255, 255, .88) !important;
        border-bottom-color: rgba(45, 77, 134, .16) !important;
        box-shadow: 0 12px 30px -16px rgba(28, 49, 88, .38);
      }
      @media (max-width: 767px) {
        #main-navbar { padding: .7rem 0 !important; }
        #main-navbar.scrolled { padding: .5rem 0 !important; }
      }

      /* logo */
      #main-navbar .bm-logo__box {
        width: 2.5rem; height: 2.5rem; border-radius: .6rem;
        background: var(--nv-950); color: #fff;
        box-shadow: 0 8px 18px -8px rgba(20, 38, 74, .6);
        transition: transform .45s var(--ease), background .3s ease, box-shadow .3s ease;
      }
      @media (min-width: 640px) { #main-navbar .bm-logo__box { width: 3rem; height: 3rem; } }
      #main-navbar .bm-logo:hover .bm-logo__box { transform: rotate(-6deg) scale(1.06); background: var(--nv-700); }
      #main-navbar .bm-logo__text {
        font-size: .875rem; font-weight: 700; line-height: 1.2; letter-spacing: -.01em; color: var(--nv-950);
        transition: color .3s ease;
      }
      @media (min-width: 640px) { #main-navbar .bm-logo__text { font-size: 1.125rem; } }
      #main-navbar .bm-logo:hover .bm-logo__text { color: var(--nv-700); }

      /* desktop links */
      #main-navbar .bm-nav { gap: 2.25rem; }
      @media (max-width: 1023px) { #main-navbar .bm-nav { gap: 1.5rem; } }
      #main-navbar .bm-nav-link {
        position: relative; padding: .45rem .1rem;
        font-size: .95rem; font-weight: 600; letter-spacing: .005em; color: var(--nv-700);
        transition: color .25s ease;
        animation: bmLinkIn .7s var(--ease) backwards;
        animation-delay: calc(.2s + var(--i, 0) * .08s);
      }
      #main-navbar .bm-nav-link::after {
        content: ""; position: absolute; left: 0; right: 0; bottom: -2px; height: 2px; border-radius: 2px;
        background: var(--nv-700);
        transform: scaleX(0); transform-origin: right center;
        transition: transform .4s var(--ease);
      }
      #main-navbar .bm-nav-link:hover { color: var(--nv-950); }
      #main-navbar .bm-nav-link:hover::after,
      #main-navbar .bm-nav-link.is-active::after { transform: scaleX(1); transform-origin: left center; }
      #main-navbar .bm-nav-link.is-active { color: var(--nv-950); }

      /* hamburger */
      #main-navbar .bm-burger {
        width: 2.6rem; height: 2.6rem; border-radius: .7rem; color: var(--nv-950);
        border: 1px solid var(--nv-100); background: var(--nv-50);
        transition: background .25s ease, transform .25s var(--ease), border-color .25s ease;
      }
      #main-navbar .bm-burger:hover { background: var(--nv-100); border-color: var(--nv-300); }
      #main-navbar .bm-burger:active { transform: scale(.92); }
      #main-navbar .bm-burger svg { animation: bmIconIn .35s var(--ease) both; }

      /* mobile dropdown */
      #main-navbar .bm-mobile {
        max-height: calc(100svh - 4.5rem);
        background: #fff;
        border-bottom: 1px solid var(--nv-100);
        box-shadow: 0 24px 40px -20px rgba(20, 38, 74, .35);
      }
      #main-navbar .bm-mobile:not(.hidden) { animation: bmMenuIn .3s var(--ease) both; }
      #main-navbar .bm-mobile__list { padding: .75rem; }
      @media (min-width: 640px) { #main-navbar .bm-mobile__list { padding: 1rem; } }
      #main-navbar .bm-mobile-link {
        display: flex; align-items: center; justify-content: space-between;
        min-height: 3rem; width: 100%; padding: .75rem 1rem; border-radius: .8rem;
        font-size: 1rem; font-weight: 600; color: var(--nv-700);
        transition: background .25s ease, color .25s ease, padding-left .3s var(--ease);
      }
      #main-navbar .bm-mobile:not(.hidden) .bm-mobile-link {
        animation: bmLinkIn .45s var(--ease) backwards;
        animation-delay: calc(.05s + var(--i, 0) * .06s);
      }
      #main-navbar .bm-mobile-link__arrow { opacity: .45; transition: transform .3s var(--ease), opacity .3s ease; }
      #main-navbar .bm-mobile-link:hover { background: var(--nv-50); color: var(--nv-950); padding-left: 1.35rem; }
      #main-navbar .bm-mobile-link:hover .bm-mobile-link__arrow { transform: translateX(4px); opacity: 1; }
      #main-navbar .bm-mobile-link.is-active { background: var(--nv-700); color: #fff; }
      #main-navbar .bm-mobile-link.is-active .bm-mobile-link__arrow { opacity: 1; }

      @keyframes bmNavDrop { from { opacity: 0; transform: translateY(-100%); } to { opacity: 1; transform: none; } }
      @keyframes bmLinkIn  { from { opacity: 0; transform: translateY(-10px); } to { opacity: 1; transform: none; } }
      @keyframes bmMenuIn  { from { opacity: 0; transform: translateY(-10px); } to { opacity: 1; transform: none; } }
      @keyframes bmIconIn  { from { opacity: 0; transform: rotate(-80deg) scale(.7); } to { opacity: 1; transform: none; } }

      @media (prefers-reduced-motion: reduce) {
        #main-navbar, #main-navbar * { animation-duration: .01ms !important; transition-duration: .01ms !important; }
      }
    </style>
    <?php
}