<?php
/**
 * View: Contact Page
 * Converted from src/Contact.jsx
 */

require_once __DIR__ . '/../config/config.php';
?>

<div class="min-h-screen bg-slate-50 text-slate-900 pt-24 pb-24">
  <section class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-4xl text-center mb-14">
      <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-blue-600">
        Contact
      </p>
      <h1 class="text-4xl md:text-5xl font-extrabold text-blue-950 mb-4">
        Let's Build Something Great Together
      </h1>
      <p class="text-lg leading-relaxed text-slate-600">
        Tell us about your project and we’ll help you bring it to life with a strategic, beautiful, and high-performing digital solution.
      </p>
    </div>

    <div class="grid gap-8 lg:grid-cols-2">
      <!-- Contact Info Card -->
      <div class="rounded-3xl border border-blue-100 bg-white p-10 shadow-sm">
        <h2 class="text-2xl font-bold text-blue-950 mb-6">Contact Info</h2>
        <div class="space-y-5 text-slate-700">
          <div class="flex items-start gap-4">
            <div class="mt-1 rounded-2xl bg-blue-50 p-3 text-blue-600">
              <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
            </div>
            <div>
              <p class="font-semibold text-slate-900">Email</p>
              <p class="text-sm text-slate-600"><?= e(APP_EMAIL) ?></p>
            </div>
          </div>
          <div class="flex items-start gap-4">
            <div class="mt-1 rounded-2xl bg-blue-50 p-3 text-blue-600">
              <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
            </div>
            <div>
              <p class="font-semibold text-slate-900">Phone</p>
              <p class="text-sm text-slate-600"><?= e(APP_PHONE) ?></p>
            </div>
          </div>
          <div class="flex items-start gap-4">
            <div class="mt-1 rounded-2xl bg-blue-50 p-3 text-blue-600">
              <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </div>
            <div>
              <p class="font-semibold text-slate-900">Location</p>
              <p class="text-sm text-slate-600">G8 Unicorn prime, Near Avadh Showroom, Jamnagar, Gujarat</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Send a Message Card -->
      <div class="rounded-3xl border border-blue-100 bg-white p-10 shadow-sm">
        <h2 class="text-2xl font-bold text-blue-950 mb-6">Send a Message</h2>
        <form class="bmds-contact-form space-y-6" action="<?= base_url('/api/contact.php') ?>" method="POST">
          <div class="form-feedback hidden mb-6 rounded-2xl border border-blue-200 bg-blue-50 px-4 py-4 text-sm text-slate-900"></div>

          <label class="block">
            <span class="text-sm font-medium text-slate-700">Name</span>
            <input name="name" type="text" required placeholder="Your name" class="mt-2 w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100" />
          </label>
          <label class="block">
            <span class="text-sm font-medium text-slate-700">Email</span>
            <input name="email" type="email" required placeholder="Your email" class="mt-2 w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100" />
          </label>
          <label class="block">
            <span class="text-sm font-medium text-slate-700">Mobile Number</span>
            <input name="phone" type="tel" required maxlength="10" placeholder="10 digit mobile number" class="mt-2 w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100" />
          </label>
          <label class="block">
            <span class="text-sm font-medium text-slate-700">Project Details</span>
            <textarea name="projectDetails" rows="5" required placeholder="Tell us about your project" class="mt-2 w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"></textarea>
          </label>
          <button type="submit" class="inline-flex w-full items-center justify-center rounded-2xl bg-blue-700 px-6 py-3 text-sm font-semibold text-white transition hover:bg-blue-800">
            Send Message
          </button>
        </form>
      </div>
    </div>
  </section>
</div>
