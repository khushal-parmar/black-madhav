<?php
/**
 * App Class and Router Dispatcher
 * Converted from src/App.jsx
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/components/Layout.php';

class App {
    private array $routes = [
        '/' => ['view' => 'home.php', 'title' => 'Home', 'loading' => true],
        '/about' => ['view' => 'about.php', 'title' => 'About Us', 'loading' => false],
        '/works' => ['view' => 'works.php', 'title' => 'Our Work', 'loading' => false],
        // '/portfolio' => ['view' => 'portfolio.php', 'title' => 'Portfolio', 'loading' => false],
        // '/testimonials' => ['view' => 'testimonials.php', 'title' => 'Testimonials', 'loading' => false],
        '/contact' => ['view' => 'contact.php', 'title' => 'Contact Us', 'loading' => false],
        // '/blog' => ['view' => 'blog.php', 'title' => 'Blog', 'loading' => false],
        // '/careers' => ['view' => 'careers.php', 'title' => 'Careers', 'loading' => false],
        '/digitalcard.php' => ['view' => 'digitalcard.php','title' => 'Digital Card','loading' => false],
      '/businesscard.php' => ['view' => 'businesscard.php','title' => 'Business Card','loading' => false],
      '/appdevelopment.php' => ['view' => 'appdevelopment.php','title' => 'App Development','loading' => false],
      '/latterhead.php' => ['view' => 'latterhead.php','title' => 'Latter Head','loading' => false],
      '/Websitedev.php' => ['view' => 'Websitedev.php','title' => 'Web Development','loading' => false],
      '/brochure.php' => ['view' => 'brochure.php','title' => 'Brochure Design','loading' => false],
      '/socialmediapost.php' => ['view' => 'socialmediapost.php','title' => 'Social Media Post','loading' => false],
      '/logo.php' => ['view' => 'logo.php','title' => 'Logo Design','loading' => false],
    ];

    public function run(?string $uri = null): void {
        if ($uri === null) {
            $uri = $_SERVER['REQUEST_URI'] ?? '/';
        }

        // Clean URI from query string and base directory
        $parsed = parse_url($uri, PHP_URL_PATH);
        $scriptDir = dirname($_SERVER['SCRIPT_NAME'] ?? '');
        if ($scriptDir !== '/' && $scriptDir !== '\\' && strpos($parsed, $scriptDir) === 0) {
            $parsed = substr($parsed, strlen($scriptDir));
        }
        $path = '/' . trim($parsed, '/');

        // Old Services URL now points to Our Work
        if ($path === '/services' || $path === '/services.php') {
            header('Location: ' . base_url('/works'), true, 301);
            exit;
        }

        // Check if matching route exists
        if (isset($this->routes[$path])) {
            $route = $this->routes[$path];
            renderHeader($route['title'], $path, $route['loading']);
            require __DIR__ . '/views/' . $route['view'];
            renderFooterLayout();
            return;
        }

        // Check alternative without extension or with .php
        $stripped = preg_replace('/\.php$/', '', $path);
        if (isset($this->routes[$stripped])) {
            $route = $this->routes[$stripped];
            renderHeader($route['title'], $stripped, $route['loading']);
            require __DIR__ . '/views/' . $route['view'];
            renderFooterLayout();
            return;
        }

        // 404 Not Found
        http_response_code(404);
        renderHeader('Page Not Found', $path);
        ?>
        <div class="min-h-[70vh] flex flex-col items-center justify-center text-center px-4 pt-24 pb-16">
          <h1 class="text-7xl font-extrabold text-blue-950 mb-4">404</h1>
          <p class="text-xl text-slate-600 mb-8">The page you are looking for does not exist.</p>
          <a href="<?= base_url('/') ?>" class="rounded-full bg-blue-700 px-8 py-3 text-sm font-semibold text-white hover:bg-blue-800 transition">
            Back to Home
          </a>
        </div>
        <?php
        renderFooterLayout();
    }
    
}
