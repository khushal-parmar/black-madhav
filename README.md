# Black Madhav Digital Solutions — PHP Edition

This project is a complete conversion of the **Black Madhav Digital Solutions** application from React/Vite to native **PHP 8.3**.

---

## 🚀 Quick Start

### 1. Start the PHP Built-in Server

Run the development server from the project root:

```bash
php -S localhost:8000 router.php
```

Then open your browser at:
👉 **[http://localhost:8000](http://localhost:8000)**

---

## 🗂 Architecture Overview

```text
Black_Madhav/
├── index.php                 # Front controller (entry point)
├── router.php                # Development server router for php -S
├── App.php                   # Core application router (converted from App.jsx)
├── .htaccess                 # Apache mod_rewrite rules
├── home.php                  # Direct page: Home
├── about.php                 # Direct page: About Us
├── works.php                 # Direct page: Our Work
├── portfolio.php             # Direct page: Portfolio
├── testimonials.php          # Direct page: Testimonials
├── contact.php               # Direct page: Contact Us
├── blog.php                  # Direct page: Blog
├── careers.php               # Direct page: Careers
├── config/
│   └── config.php            # App constants, mail settings, paths
├── lib/
│   ├── Database.php          # SQLite PDO & JSON fallback persistence
│   ├── Mailer.php            # Sends inquiry emails (SMTP or mail())
│   ├── Validator.php         # 10-digit phone and form validation
│   └── Markdown.php          # Safe Markdown to HTML parser
├── api/
│   ├── contact.php           # POST inquiry -> saved + emailed
│   └── blog.php              # Blog (read-only GET)
├── components/
│   ├── Layout.php            # Unified page header & footer wrapper
│   ├── Navbar.php            # Header navigation & mobile menu
│   ├── Footer.php            # Footer navigation & contact info
│   ├── LoadingScreen.php     # Animated loading overlay
│   ├── HeroSection.php       # Hero banner
│   ├── HeroBackground.php    # 3D Three.js particle canvas & CSS orbs
│   ├── OfficeLocations.php   # Branch location grid
│   ├── OfficeCard.php        # Branch card
│   ├── ConfirmModal.php      # Reusable confirmation dialog
│   └── ui/                   # All 55 UI components converted to PHP
│       ├── accordion.php
│       ├── alert.php
│       ├── button.php
│       ├── card.php
│       └── ... (55 components total)
├── views/
│   ├── home.php
│   ├── about.php
│   ├── works.php
│   ├── portfolio.php
│   ├── testimonials.php
│   ├── contact.php
│   ├── blog.php
│   └── careers.php
├── assets/
│   ├── css/
│   │   ├── style.css         # Full Tailwind CSS compilation
│   │   └── custom.css        # 3D flip card, loading bar & animations
│   ├── js/
│   │   └── main.js           # Interactive client features
│   └── images/               # All project logos and assets
└── data/
    ├── black_madhav.sqlite   # SQLite database
    ├── contacts.json         # JSON backup for submissions
    └── blog.json             # JSON backup for blog posts
```

---

## 📧 Inquiry Emails

Every Contact / Inquiry form submission is emailed to `MAIL_TO` (see `config/config.php`).
For reliable delivery, fill in the `SMTP_*` settings (Gmail App Password recommended).
Failed emails are logged in `data/mail_error.log`.


---

## ✨ Features Converted

- **All 8 Pages**: Home, About, Our Work, Portfolio, Testimonials, Contact, Blog, Careers.
- **Interactive 3D Three.js Canvas**: Rotating particle field and wireframe icosahedron in HeroBackground.
- **3D 360° Flip Cards**: Clickable service cards with overview, offerings, features, and benefits.
- **Animated Number Counters**: Smooth 0-to-target counter for the Stats section.
- **Contact Inquiries**: Form with strict 10-digit mobile number validation, saved to SQLite & JSON, emailed to the business owner.
- **All 55 UI Components**: Converted to PHP helper components under `components/ui/`.
- **Zero External PHP Dependencies**: Runs out of the box on PHP 8.0+.
