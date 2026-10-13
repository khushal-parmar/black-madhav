/**
 * Black Madhav Digital Solutions - Main Client Interactions
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Scroll-based Navbar styling
  const navbar = document.getElementById('main-navbar');
  if (navbar) {
    const handleScroll = () => {
      if (window.scrollY > 20) {
        navbar.classList.add('scrolled');
        navbar.classList.remove('bg-white', 'border-transparent', 'py-5');
      } else {
        navbar.classList.remove('scrolled');
        navbar.classList.add('bg-white', 'border-transparent', 'py-5');
      }
    };
    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();
  }

  // 2. Mobile Menu Toggle
  const mobileBtn = document.getElementById('mobile-menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const iconOpen = document.getElementById('menu-icon-open');
  const iconClose = document.getElementById('menu-icon-close');

  if (mobileBtn && mobileMenu) {
    mobileBtn.addEventListener('click', () => {
      const isHidden = mobileMenu.classList.contains('hidden');
      if (isHidden) {
        mobileMenu.classList.remove('hidden');
        if (iconOpen) iconOpen.classList.add('hidden');
        if (iconClose) iconClose.classList.remove('hidden');
      } else {
        mobileMenu.classList.add('hidden');
        if (iconOpen) iconOpen.classList.remove('hidden');
        if (iconClose) iconClose.classList.add('hidden');
      }
    });
  }

  // 3. Animated Stats Counters
  const statElements = document.querySelectorAll('.stat-counter');
  if (statElements.length > 0) {
    let started = false;
    const animateCounters = () => {
      if (started) return;
      statElements.forEach(el => {
        const target = parseInt(el.getAttribute('data-value') || '0', 10);
        const suffix = el.getAttribute('data-suffix') || '';
        let current = 0;
        const duration = 1200;
        const steps = 30;
        const increment = target / steps;
        const stepTime = duration / steps;

        const timer = setInterval(() => {
          current += increment;
          if (current >= target) {
            el.textContent = target + suffix;
            clearInterval(timer);
          } else {
            el.textContent = Math.round(current) + suffix;
          }
        }, stepTime);
      });
      started = true;
    };

    // Intersection observer for stats
    const statsSection = document.getElementById('stats');
    if (statsSection && 'IntersectionObserver' in window) {
      const observer = new IntersectionObserver((entries) => {
        if (entries[0].isIntersecting) {
          animateCounters();
          observer.disconnect();
        }
      }, { threshold: 0.2 });
      observer.observe(statsSection);
    } else {
      animateCounters();
    }
  }

  // 4. 3D Service Cards Flip
  document.querySelectorAll('.service-card-item, .service-card-flip').forEach(card => {
    card.addEventListener('click', (e) => {
      // Don't flip if user is selecting text
      const selection = window.getSelection().toString();
      if (selection && selection.trim().length > 0) return;

      card.classList.toggle('is-flipped');
      const inner = card.querySelector('.service-card-inner, .preserve-3d');
      if (inner) {
        inner.classList.toggle('rotate-y-180');
      }
    });
  });

  // 5. Contact Form Submissions (Home & Contact pages)
  const contactForms = document.querySelectorAll('.bmds-contact-form');
  contactForms.forEach(form => {
    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      const feedbackEl = form.querySelector('.form-feedback');
      const submitBtn = form.querySelector('button[type="submit"]');

      const name = (form.querySelector('[name="name"]')?.value || '').trim();
      const email = (form.querySelector('[name="email"]')?.value || '').trim();
      const phone = (form.querySelector('[name="phone"]')?.value || '').trim();
      const businessName = (form.querySelector('[name="businessName"]')?.value || '').trim();
      const service = (form.querySelector('[name="service"]')?.value || 'Web Development').trim();
      const message = (form.querySelector('[name="message"]') || form.querySelector('[name="projectDetails"]'))?.value || '';

      const showFeedback = (msg, isError = false) => {
        if (!feedbackEl) {
          alert(msg);
          return;
        }
        feedbackEl.textContent = msg;
        feedbackEl.className = isError 
          ? 'form-feedback mb-6 rounded-2xl border border-red-200 bg-red-50 p-4 text-sm text-red-700'
          : 'form-feedback mb-6 rounded-2xl border border-blue-200 bg-blue-50 px-4 py-4 text-sm text-slate-900';
        feedbackEl.classList.remove('hidden');
      };

      if (!name || !email || !phone || !message.trim()) {
        showFeedback("Please fill in all fields before submitting.", true);
        return;
      }

      const digits = phone.replace(/\D/g, "");
      if (digits.length !== 10) {
        showFeedback("Mobile number must be exactly 10 digits.", true);
        return;
      }

      if (submitBtn) submitBtn.disabled = true;

      const payload = {
        name,
        businessName,
        phone: digits,
        email,
        service,
        projectDetails: message.trim()
      };

      // Submit to PHP API
      try {
        const apiUrl = form.getAttribute('action') || (window.BMDS_BASE_URL || '') + '/api/contact.php';
        const res = await fetch(apiUrl, {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(payload)
        });
        const result = await res.json();
        if (result.success) {
          showFeedback(result.message || "Thank you! Your message has been sent.");
          form.reset();
        } else {
          showFeedback(result.message || "An error occurred.", true);
        }
      } catch (err) {
        showFeedback("Could not send your message. Please check your connection and try again.", true);
      } finally {
        if (submitBtn) submitBtn.disabled = false;
      }
    });
  });

  // Phone number numeric mask
  document.querySelectorAll('input[type="tel"]').forEach(input => {
    input.addEventListener('input', (e) => {
      const digits = e.target.value.replace(/\D/g, "");
      if (digits.length <= 10) {
        e.target.value = digits;
      } else {
        e.target.value = digits.slice(0, 10);
      }
    });
  });
});
