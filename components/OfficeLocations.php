
<?php
/**
 * OfficeLocations Component
 */

if (!function_exists('renderOfficeLocations')) {
    function renderOfficeLocations()
    {
        $locations = [
            [
                'city' => 'Jamnagar',
                'phone' => '+91 8128730715',
                'mapUrl' => 'https://www.google.com/maps/search/?api=1&query=MDIDM+Infoway+Jamnagar',
                'imageSrc' => base_url('assets/images/loc.jpg'),
            ],
            [
                'city' => 'Junagadh',
                'phone' => '+91 8128730715',
                'mapUrl' => 'https://www.google.com/maps/search/?api=1&query=MDIDM+Infoway+Junagadh',
                'imageSrc' => base_url('assets/images/loc.jpg'),
            ],
        ];
        ?>

        <style>
            .office-locations-section {
                padding: 80px 20px;
                background: #fff;
            }

            .office-locations-container {
                max-width: 1200px;
                margin: 0 auto;
            }

            .office-locations-heading {
                margin-bottom: 40px;
                text-align: center;
            }

            .office-locations-heading .eyebrow {
                margin-bottom: 12px;
                color: #2563eb;
                font-size: 13px;
                font-weight: 700;
                letter-spacing: 2px;
                text-transform: uppercase;
            }

            .office-locations-heading h2 {
                margin: 0;
                color: #102a56;
                font-size: clamp(28px, 4vw, 42px);
                font-weight: 800;
                line-height: 1.25;
            }

            .office-locations-heading p {
                max-width: 650px;
                margin: 14px auto 0;
                color: #64748b;
                font-size: 16px;
                line-height: 1.7;
            }

            .office-locations-grid {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 28px;
            }

            .office-location-card {
                position: relative;
                height: 420px;
                overflow: hidden;
                isolation: isolate;
                border-radius: 12px;
                background: #1e293b;
                box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
                transition: transform 0.3s ease,
                            box-shadow 0.3s ease;
            }

            .office-location-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 16px 35px rgba(0, 0, 0, 0.2);
            }

            .office-location-image {
                position: absolute;
                inset: 0;
                z-index: -2;
                width: 100%;
                height: 100%;
                object-fit: cover;
                object-position: center;
                transition: transform 0.6s ease;
            }

            .office-location-card:hover .office-location-image {
                transform: scale(1.06);
            }

            .office-location-overlay {
                position: absolute;
                inset: 0;
                z-index: -1;
                background: linear-gradient(
                    to bottom,
                    rgba(0, 0, 0, 0.05) 0%,
                    rgba(0, 0, 0, 0.15) 30%,
                    rgba(0, 0, 0, 0.65) 65%,
                    rgba(0, 0, 0, 0.92) 100%
                );
            }

            .office-location-content {
                position: absolute;
                right: 0;
                bottom: 0;
                left: 0;
                padding: 30px;
                color: #fff;
            }

            .office-location-tag {
                display: inline-block;
                margin-bottom: 12px;
                padding: 7px 12px;
                border: 1px solid rgba(255, 255, 255, 0.4);
                border-radius: 30px;
                background: rgba(255, 255, 255, 0.12);
                color: #fff;
                font-size: 11px;
                font-weight: 700;
                letter-spacing: 1.5px;
                text-transform: uppercase;
                backdrop-filter: blur(5px);
            }

            .office-location-content h3 {
                margin: 0 0 15px;
                color: #fff;
                font-size: 34px;
                font-weight: 800;
                line-height: 1.2;
            }

            .office-location-phone {
                display: flex;
                align-items: center;
                gap: 10px;
                margin-bottom: 22px;
                color: #fff;
                font-size: 15px;
                font-weight: 600;
                text-decoration: none;
            }

            .office-location-phone:hover {
                color: #bfdbfe;
            }

            .office-location-phone svg {
                width: 19px;
                height: 19px;
                flex-shrink: 0;
            }

            .office-location-button {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 9px;
                padding: 12px 20px;
                border: 1px solid #fff;
                border-radius: 5px;
                background: #fff;
                color: #102a56;
                font-size: 13px;
                font-weight: 700;
                text-decoration: none;
                transition: all 0.25s ease;
            }

            .office-location-button:hover {
                border-color: #2563eb;
                background: #2563eb;
                color: #fff;
            }

            .office-location-button svg {
                width: 18px;
                height: 18px;
            }

            @media (max-width: 640px) {
                .office-locations-section {
                    padding: 55px 16px;
                }

                .office-locations-grid {
                    grid-template-columns: 1fr;
                    gap: 22px;
                }

                .office-location-card {
                    height: 370px;
                }

                .office-location-content {
                    padding: 24px;
                }

                .office-location-content h3 {
                    font-size: 30px;
                }

                .office-locations-heading p {
                    font-size: 14px;
                }
            }

            @media (prefers-reduced-motion: reduce) {
                .office-location-card,
                .office-location-image,
                .office-location-button {
                    transition: none;
                }
            }
        </style>

        <section class="office-locations-section">
            <div class="office-locations-container">

                <div class="office-locations-heading">
                    <div class="eyebrow">Our Presence</div>

                    <h2>Our Office Locations</h2>

                    <p>
                        Visit our offices in Gujarat and connect with
                        our team for more information and support.
                    </p>
                </div>

                <div class="office-locations-grid">

                    <?php foreach ($locations as $loc): ?>

                        <article class="office-location-card">

                            <img
                                class="office-location-image"
                                src="<?= htmlspecialchars($loc['imageSrc'], ENT_QUOTES, 'UTF-8') ?>"
                                alt="<?= htmlspecialchars($loc['city'], ENT_QUOTES, 'UTF-8') ?> Office"
                                loading="lazy"
                            >

                            <div
                                class="office-location-overlay"
                                aria-hidden="true"
                            ></div>

                            <div class="office-location-content">

                                <!-- <span class="office-location-tag">
                                    Gujarat, India
                                </span> -->

                                <h3>
                                    <?= htmlspecialchars($loc['city'], ENT_QUOTES, 'UTF-8') ?>
                                </h3>

                                <a
                                    class="office-location-phone"
                                    href="tel:<?= htmlspecialchars(preg_replace('/[^0-9+]/', '', $loc['phone']), ENT_QUOTES, 'UTF-8') ?>"
                                >
                                    <svg
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        aria-hidden="true"
                                    >
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.8 19.8 0 0 1 11.19 18a19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.09 3.18 2 2 0 0 1 4.08 1h3a2 2 0 0 1 2 1.72c.12.96.36 1.9.7 2.8a2 2 0 0 1-.45 2.11L8.06 8.9a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.9.34 1.84.58 2.8.7A2 2 0 0 1 22 16.92Z"/>
                                    </svg>

                                    <?= htmlspecialchars($loc['phone'], ENT_QUOTES, 'UTF-8') ?>
                                </a>

                                <a
                                    class="office-location-button"
                                    href="<?= htmlspecialchars($loc['mapUrl'], ENT_QUOTES, 'UTF-8') ?>"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    <svg
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        aria-hidden="true"
                                    >
                                        <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/>
                                        <circle cx="12" cy="10" r="2.5"/>
                                    </svg>

                                    Get Direction
                                </a>

                            </div>
                        </article>

                    <?php endforeach; ?>

                </div>
            </div>
        </section>

        <?php
    }
}
