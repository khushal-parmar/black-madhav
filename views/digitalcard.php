```php
<?php
require_once __DIR__ . '/../config/config.php';
?>

<style>
    .digital-card-page {
        width: 100%;
        min-height: 75vh;
        padding: 80px 24px;
        background: #f5f8fc;
        box-sizing: border-box;
    }

    .digital-card-container {
        width: 100%;
        max-width: 1400px;
        margin: 0 auto;
    }

    /* Responsive card grid */
    .digital-card-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 28px;
        align-items: stretch;
    }

    /* Individual card */
    .digital-card {
        min-width: 0;
        overflow: hidden;
        border: 1px solid #d8e4f2;
        border-radius: 20px;
        background: #ffffff;
        box-shadow: 0 10px 35px rgba(25, 55, 90, 0.10);
        transition:
            transform 0.45s ease,
            box-shadow 0.45s ease,
            border-color 0.45s ease;
        animation: digitalFadeUp 0.8s ease both;
    }

    .digital-card:hover {
        transform: translateY(-10px);
        border-color: #8daed5;
        box-shadow: 0 24px 55px rgba(25, 55, 90, 0.18);
    }

    /* Image */
    .digital-card-image {
        position: relative;
        width: 100%;
        aspect-ratio: 4 / 3;
        overflow: hidden;
        background: #e7eef8;
    }

    .digital-card-image img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s ease;
    }

    .digital-card:hover .digital-card-image img {
        transform: scale(1.08);
    }

    .digital-card-image::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to top,
            rgba(15, 39, 70, 0.35),
            transparent 55%
        );
        opacity: 0;
        transition: opacity 0.45s ease;
        pointer-events: none;
    }

    .digital-card:hover .digital-card-image::after {
        opacity: 1;
    }

    /* Card title */
    .digital-card-content {
        padding: 22px 15px;
        text-align: center;
        background: #ffffff;
    }

    .digital-card-content h2 {
        margin: 0;
        font-size: 21px;
        font-weight: 700;
        color: #193b65;
        letter-spacing: 0.2px;
        overflow-wrap: anywhere;
        transition: color 0.3s ease;
    }

    .digital-card:hover .digital-card-content h2 {
        color: #507eb6;
    }

    /* Decorative line */
    .digital-card-line {
        width: 42px;
        height: 3px;
        margin: 12px auto 0;
        border-radius: 10px;
        background: #8daed5;
        transition: width 0.4s ease;
    }

    .digital-card:hover .digital-card-line {
        width: 75px;
    }

    /* Entrance animation */
    @keyframes digitalFadeUp {
        from {
            opacity: 0;
            transform: translateY(25px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Tablet: 2 cards per row */
    @media (max-width: 1000px) {
        .digital-card-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 24px;
        }
    }

    /* Mobile: 1 card per row */
    @media (max-width: 550px) {
        .digital-card-page {
            padding: 45px 16px;
        }

        .digital-card-grid {
            grid-template-columns: 1fr;
            gap: 22px;
        }

        .digital-card-content {
            padding: 20px 15px;
        }

        .digital-card-content h2 {
            font-size: 21px;
        }
    }

    /* Respect reduced-motion preferences */
    @media (prefers-reduced-motion: reduce) {
        .digital-card,
        .digital-card-image img,
        .digital-card-image::after,
        .digital-card-content h2,
        .digital-card-line {
            animation: none !important;
            transition: none !important;
        }

        .digital-card:hover {
            transform: none;
        }

        .digital-card:hover .digital-card-image img {
            transform: none;
        }
    }
</style>

<section class="digital-card-page">
    <div class="digital-card-container">

        <div class="digital-card-grid">

            <!-- CARD 1: New card add karva mate aa div copy-paste karo -->
            <div class="digital-card">
                <div class="digital-card-image">
                    <img
                        src="/assets/images/digital-card.jpg"
                        alt="Digital Card"
                        loading="lazy"
                    >
                </div>

                <div class="digital-card-content">
                    <h2>Digital Card</h2>
                    <div class="digital-card-line"></div>
                </div>
            </div>

            <!-- CARD 2: Example -->
            <div class="digital-card">
                <div class="digital-card-image">
                    <img
                        src="/assets/images/digital-card.jpg"
                        alt="Business Card"
                        loading="lazy"
                    >
                </div>

                <div class="digital-card-content">
                    <h2>Business Card</h2>
                    <div class="digital-card-line"></div>
                </div>
            </div>

            <!-- CARD 3: Example -->
            <div class="digital-card">
                <div class="digital-card-image">
                    <img
                        src="/assets/images/digital-card.jpg"
                        alt="Visiting Card"
                        loading="lazy"
                    >
                </div>

                <div class="digital-card-content">
                    <h2>Visiting Card</h2>
                    <div class="digital-card-line"></div>
                </div>
            </div>

            <!-- CARD 4: Example -->
            <div class="digital-card">
                <div class="digital-card-image">
                    <img
                        src="/assets/images/digital-card.jpg"
                        alt="Creative Card"
                        loading="lazy"
                    >
                </div>

                <div class="digital-card-content">
                    <h2>Creative Card</h2>
                    <div class="digital-card-line"></div>
                </div>
            </div>

            <!-- NEW CARD: Aa block ne copy-paste kari ne niche add karo -->
            
            <div class="digital-card">
                <div class="digital-card-image">
                    <img
                        src="/assets/images/digital-card.jpg"
                        alt="New Card"
                        loading="lazy"
                    >
                </div>

                <div class="digital-card-content">
                    <h2>New Card</h2>
                    <div class="digital-card-line"></div>
                </div>
            </div>
           

        </div>

    </div>
</section>
```