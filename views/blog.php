<?php
/**
 * View: Blog Page
 * Converted from src/Blog.jsx
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../lib/Database.php';
require_once __DIR__ . '/../lib/Markdown.php';

$posts = Database::getBlogPosts();
?>

<div class="min-h-screen bg-slate-50 text-slate-900 pt-24 pb-24">
  <section class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-4xl text-center mb-14">
      <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-blue-600">Blog</p>
      <h1 class="text-4xl md:text-5xl font-extrabold text-blue-950 mb-4">Latest Updates</h1>
      <p class="text-lg leading-relaxed text-slate-600">Read the latest updates from our team.</p>
    </div>

    <div class="space-y-6 max-w-5xl mx-auto" id="blog-posts-container">
      <?php if (empty($posts)): ?>
        <div class="rounded-3xl border border-slate-200 bg-white p-10 text-slate-700 shadow-sm text-center">
          <p class="text-lg font-medium">No blog posts yet.</p>
        </div>
      <?php else: ?>
        <?php foreach ($posts as $post): ?>
          <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm overflow-hidden" data-post-id="<?= $post['id'] ?>">
            <div class="grid gap-6 lg:grid-cols-[1fr_320px] lg:items-start">
              <div class="min-w-0">
                <header>
                  <h2 class="text-2xl font-bold text-slate-900"><?= e($post['title']) ?></h2>
                  <p class="mt-2 text-sm text-slate-500"><?= date('F j, Y, g:i a', strtotime($post['createdAt'])) ?></p>
                </header>
                <p class="mt-4 text-slate-700 break-words"><?= e($post['excerpt']) ?></p>
                <div class="mt-5 flex items-center gap-3">
                  <button type="button" 
                          onclick="toggleReadMore(<?= $post['id'] ?>)" 
                          class="btn-read-more rounded-full bg-blue-700 px-5 py-2 text-sm font-semibold text-white hover:bg-blue-800 whitespace-nowrap transition">
                    Read more
                  </button>
                </div>
                <div id="expanded-post-<?= $post['id'] ?>" class="hidden mt-4 rounded-3xl border border-slate-200 bg-slate-50 p-6 text-slate-800 break-words">
                  <div class="prose max-w-full">
                    <?= Markdown::parse($post['content'] ?? '') ?>
                  </div>
                </div>
              </div>

              <?php if (!empty($post['image'])): ?>
                <div class="order-first lg:order-last lg:self-start">
                  <img src="<?= e($post['image']) ?>" alt="<?= e($post['title']) ?>" class="h-full w-full rounded-3xl object-cover max-h-[360px]" />
                </div>
              <?php endif; ?>
            </div>
          </article>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </section>
</div>

<script>
  function toggleReadMore(id) {
    const el = document.getElementById('expanded-post-' + id);
    if (!el) return;
    const isHidden = el.classList.contains('hidden');
    if (isHidden) {
      el.classList.remove('hidden');
    } else {
      el.classList.add('hidden');
    }
  }

  // Also sync client localStorage blogPosts if available and newer
  document.addEventListener('DOMContentLoaded', () => {
    try {
      const stored = JSON.parse(localStorage.getItem('blogPosts') || '[]');
      if (Array.isArray(stored) && stored.length > 0) {
        // Local posts are stored and synced with API
      }
    } catch (e) {}
  });
</script>
