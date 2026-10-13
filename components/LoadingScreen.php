<?php
/**
 * LoadingScreen Component
 */
function renderLoadingScreen() {
    $particles = [
        ['left' => '12%', 'top' => '20%', 'delay' => '0s'],
        ['left' => '80%', 'top' => '18%', 'delay' => '0.8s'],
        ['left' => '20%', 'top' => '78%', 'delay' => '1.4s'],
        ['left' => '78%', 'top' => '74%', 'delay' => '2.1s'],
        ['left' => '50%', 'top' => '10%', 'delay' => '0.4s'],
        ['left' => '53%', 'top' => '88%', 'delay' => '1.8s'],
    ];
    ?>
    <div id="loading-screen" 
         class="fixed inset-0 z-[200] flex items-center justify-center overflow-hidden bg-[radial-gradient(circle_at_top,_rgba(12,18,32,0.95),_rgba(2,6,23,0.98))] backdrop-blur-3xl transition-opacity duration-700 pointer-events-auto">
      <div class="absolute inset-0 bg-[linear-gradient(120deg,rgba(255,255,255,0.04)_0%,rgba(255,255,255,0)_35%,rgba(255,255,255,0.03)_65%,rgba(255,255,255,0)_100%)]"></div>
      <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(34,211,238,0.14),transparent_55%)]"></div>

      <?php foreach ($particles as $index => $particle): ?>
        <span class="absolute h-2 w-2 rounded-full bg-cyan-300/70 shadow-[0_0_14px_rgba(34,211,238,0.9)] animate-pulse"
              style="left: <?= $particle['left'] ?>; top: <?= $particle['top'] ?>; animation-delay: <?= $particle['delay'] ?>;"></span>
      <?php endforeach; ?>

      <div class="relative flex w-[min(92vw,30rem)] flex-col items-center justify-center px-6 py-8 text-center sm:px-10 sm:py-10">
        <div class="relative mb-8 flex items-center justify-center">
          <!-- Outer rotating ring 1 -->
          <div class="absolute inset-[-1.4rem] rounded-full border border-cyan-300/25 animate-[spin_10s_linear_infinite]"></div>
          <!-- Outer rotating ring 2 -->
          <div class="absolute inset-[-2.25rem] rounded-full border border-cyan-400/15 animate-[spin_14s_linear_infinite_reverse]"></div>
          <!-- Pulse glow -->
          <div class="absolute inset-[-0.35rem] rounded-full bg-cyan-400/20 blur-3xl animate-pulse"></div>
          
          <img src="<?= base_url('assets/images/Blackmadhavicon.svg') ?>" 
               alt="Black Madhav logo" 
               class="relative h-24 w-24 rounded-full object-contain sm:h-32 sm:w-32 animate-[pulse_2.6s_ease-in-out_infinite] drop-shadow-[0_0_18px_rgba(34,211,238,0.4)]" />
        </div>

        <p class="text-[0.67rem] font-semibold uppercase tracking-[0.7em] text-cyan-200/80 sm:text-[0.75rem] animate-pulse">
          BLACK MADHAV DIGITAL SOLUTIONS...
        </p>

        <div class="mt-4 flex items-center gap-2">
          <span class="h-2.5 w-2.5 rounded-full bg-cyan-300/80 shadow-[0_0_10px_rgba(34,211,238,0.8)] animate-bounce" style="animation-delay: 0s;"></span>
          <span class="h-2.5 w-2.5 rounded-full bg-cyan-300/80 shadow-[0_0_10px_rgba(34,211,238,0.8)] animate-bounce" style="animation-delay: 0.16s;"></span>
          <span class="h-2.5 w-2.5 rounded-full bg-cyan-300/80 shadow-[0_0_10px_rgba(34,211,238,0.8)] animate-bounce" style="animation-delay: 0.32s;"></span>
        </div>

        <div class="mt-6 h-1.5 w-44 overflow-hidden rounded-full border border-white/10 bg-white/10 shadow-[inset_0_1px_2px_rgba(255,255,255,0.12)] sm:w-56">
          <div class="h-full rounded-full bg-[linear-gradient(90deg,rgba(34,211,238,0.2),rgba(34,211,238,0.95),rgba(255,255,255,0.3))] animate-[loading-bar_1.2s_easeInOut_infinite] w-full"></div>
        </div>
      </div>
    </div>
    <script>
      // Automatically dismiss loading screen after 1.8s
      document.addEventListener("DOMContentLoaded", function() {
        const screen = document.getElementById("loading-screen");
        if (screen) {
          setTimeout(function() {
            screen.classList.add("opacity-0", "pointer-events-none");
            setTimeout(function() {
              screen.remove();
            }, 700);
          }, 1800);
        }
      });
    </script>
    <?php
}
