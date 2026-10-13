<?php
/**
 * View: Our Work Page
 * Shows work categories.
 */

require_once __DIR__ . '/../config/config.php';

/*
 * Common temporary image URL
 */
$workImage = 'https://mdidminfoway.com/storage/works/category/ba42aad7-eb62-4fb0-9f72-450f73fa080d.png';
?>

<div class="min-h-screen bg-white pt-28 pb-16">

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-950 to-blue-900 py-20 text-white">

        <div class="container mx-auto px-4 text-center sm:px-6 lg:px-8">

            <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-blue-300">
                Innovation Through Design &amp; Code
            </p>

            <h1 class="mb-2 text-3xl font-extrabold tracking-tight sm:text-4xl md:text-5xl">
                Our Work
            </h1>

        </div>

    </section>


    <!-- Works Grid -->
    <section
        id="works-list"
        class="container mx-auto px-4 py-16 sm:px-6 sm:py-20 lg:px-8"
    >

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:gap-8 lg:grid-cols-3 xl:grid-cols-4">


            <!-- ===================================================== -->
            <!-- 1. DIGITAL CARD -->
            <!-- ===================================================== -->

            <div
                class="group relative block overflow-hidden rounded-xl border-2 border-blue-200 bg-white shadow-sm transition-all duration-500 ease-out hover:-translate-y-2 hover:border-blue-500 hover:shadow-2xl"
            >

                <!-- Image -->
                <div class="relative aspect-[4/3] w-full overflow-hidden bg-gradient-to-br from-blue-50 to-blue-100">

                    <img
                        src="<?= e($workImage) ?>"
                        alt="Digital Card"
                        loading="lazy"
                        class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110"
                    />


                    <!-- Dark Overlay -->
                    <div
                        class="absolute inset-0 bg-blue-950/0 transition-all duration-500 group-hover:bg-blue-950/75"
                    ></div>


                    <!-- Hover Content -->
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center opacity-0 transition-all duration-500 group-hover:opacity-100"
                    >

                        <h3
                            class="translate-y-6 text-xl font-bold text-white transition-all duration-500 group-hover:translate-y-0 sm:text-2xl"
                        >
                            Digital Card
                        </h3>


                        <a
                            href="<?= e(base_url('/digitalcard.php')) ?>"
                            class="mt-4 flex translate-y-6 items-center gap-2 rounded-full border border-white/40 bg-white/10 px-5 py-2.5 text-sm font-semibold text-white backdrop-blur-sm transition-all duration-500 delay-75 group-hover:translate-y-0 group-hover:bg-white/20"
                        >

                            <span>View Work</span>

                            <svg
                                class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"
                                />
                            </svg>

                        </a>

                    </div>

                </div>


                <!-- Category Name -->
                <div
                    class="bg-white p-5 text-center transition-colors duration-300 group-hover:bg-blue-50"
                >

                    <h3
                        class="text-lg font-semibold text-blue-900 transition-colors duration-300 group-hover:text-blue-700 sm:text-xl"
                    >
                        Digital Card
                    </h3>

                </div>

            </div>



            <!-- ===================================================== -->
            <!-- 2. BUSINESS CARD DESIGN -->
            <!-- ===================================================== -->

            <div
                class="group relative block overflow-hidden rounded-xl border-2 border-blue-200 bg-white shadow-sm transition-all duration-500 ease-out hover:-translate-y-2 hover:border-blue-500 hover:shadow-2xl"
            >

                <div class="relative aspect-[4/3] w-full overflow-hidden bg-gradient-to-br from-blue-50 to-blue-100">

                    <img
                        src="/assets/images/digital-card.jpg"
                        alt="Business Card Design"
                        loading="lazy"
                        class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110"
                    />

                    <div
                        class="absolute inset-0 bg-blue-950/0 transition-all duration-500 group-hover:bg-blue-950/75"
                    ></div>

                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center opacity-0 transition-all duration-500 group-hover:opacity-100"
                    >

                        <h3
                            class="translate-y-6 text-xl font-bold text-white transition-all duration-500 group-hover:translate-y-0 sm:text-2xl"
                        >
                            Business Card Design
                        </h3>

                        <a
                            href="<?= e(base_url('/businesscard.php')) ?>"
                            class="mt-4 flex translate-y-6 items-center gap-2 rounded-full border border-white/40 bg-white/10 px-5 py-2.5 text-sm font-semibold text-white backdrop-blur-sm transition-all duration-500 delay-75 group-hover:translate-y-0 group-hover:bg-white/20"
                        >

                            <span>View Work</span>

                            <svg
                                class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"
                                />
                            </svg>

                        </a>

                    </div>

                </div>

                <div
                    class="bg-white p-5 text-center transition-colors duration-300 group-hover:bg-blue-50"
                >

                    <h3
                        class="text-lg font-semibold text-blue-900 transition-colors duration-300 group-hover:text-blue-700 sm:text-xl"
                    >
                        Business Card Design
                    </h3>

                </div>

            </div>



            <!-- ===================================================== -->
            <!-- 3. APPLICATION DEVELOPMENT -->
            <!-- ===================================================== -->

            <div
                class="group relative block overflow-hidden rounded-xl border-2 border-blue-200 bg-white shadow-sm transition-all duration-500 ease-out hover:-translate-y-2 hover:border-blue-500 hover:shadow-2xl"
            >

                <div class="relative aspect-[4/3] w-full overflow-hidden bg-gradient-to-br from-blue-50 to-blue-100">

                    <img
                        src="<?= e($workImage) ?>"
                        alt="Application Development"
                        loading="lazy"
                        class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110"
                    />

                    <div
                        class="absolute inset-0 bg-blue-950/0 transition-all duration-500 group-hover:bg-blue-950/75"
                    ></div>

                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center opacity-0 transition-all duration-500 group-hover:opacity-100"
                    >

                        <h3
                            class="translate-y-6 text-xl font-bold text-white transition-all duration-500 group-hover:translate-y-0 sm:text-2xl"
                        >
                            Application Development
                        </h3>

                        <a
                            href="<?= e(base_url('/appdevelopment.php')) ?>"
                            class="mt-4 flex translate-y-6 items-center gap-2 rounded-full border border-white/40 bg-white/10 px-5 py-2.5 text-sm font-semibold text-white backdrop-blur-sm transition-all duration-500 delay-75 group-hover:translate-y-0 group-hover:bg-white/20"
                        >

                            <span>View Work</span>

                            <svg
                                class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"
                                />
                            </svg>

                        </a>

                    </div>

                </div>

                <div
                    class="bg-white p-5 text-center transition-colors duration-300 group-hover:bg-blue-50"
                >

                    <h3
                        class="text-lg font-semibold text-blue-900 transition-colors duration-300 group-hover:text-blue-700 sm:text-xl"
                    >
                        Application Development
                    </h3>

                </div>

            </div>



            <!-- ===================================================== -->
            <!-- 4. LATTER HEAD -->
            <!-- ===================================================== -->

            <div
                class="group relative block overflow-hidden rounded-xl border-2 border-blue-200 bg-white shadow-sm transition-all duration-500 ease-out hover:-translate-y-2 hover:border-blue-500 hover:shadow-2xl"
            >

                <div class="relative aspect-[4/3] w-full overflow-hidden bg-gradient-to-br from-blue-50 to-blue-100">

                    <img
                        src="/assets/images/digital-card.jpg"
                        alt="Latter Head"
                        loading="lazy"
                        class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110"
                    />

                    <div
                        class="absolute inset-0 bg-blue-950/0 transition-all duration-500 group-hover:bg-blue-950/75"
                    ></div>

                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center opacity-0 transition-all duration-500 group-hover:opacity-100"
                    >

                        <h3
                            class="translate-y-6 text-xl font-bold text-white transition-all duration-500 group-hover:translate-y-0 sm:text-2xl"
                        >
                            Latter Head
                        </h3>
 
                        <a
                            href="<?= e(base_url('/latterhead.php')) ?>"
                            class="mt-4 flex translate-y-6 items-center gap-2 rounded-full border border-white/40 bg-white/10 px-5 py-2.5 text-sm font-semibold text-white backdrop-blur-sm transition-all duration-500 delay-75 group-hover:translate-y-0 group-hover:bg-white/20"
                        >

                            <span>View Work</span>

                            <svg
                                class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"
                                />
                            </svg>

                        </a>

                    </div>

                </div>

                <div
                    class="bg-white p-5 text-center transition-colors duration-300 group-hover:bg-blue-50"
                >

                    <h3
                        class="text-lg font-semibold text-blue-900 transition-colors duration-300 group-hover:text-blue-700 sm:text-xl"
                    >
                        Latter Head
                    </h3>

                </div>

            </div>



            <!-- ===================================================== -->
            <!-- 5. WEBSITE DEVELOPMENT -->
            <!-- ===================================================== -->

            <div
                class="group relative block overflow-hidden rounded-xl border-2 border-blue-200 bg-white shadow-sm transition-all duration-500 ease-out hover:-translate-y-2 hover:border-blue-500 hover:shadow-2xl"
            >

                <div class="relative aspect-[4/3] w-full overflow-hidden bg-gradient-to-br from-blue-50 to-blue-100">

                    <img
                        src="/assets/images/digital-card.jpg"
                        alt="Website Development"
                        loading="lazy"
                        class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110"
                    />

                    <div
                        class="absolute inset-0 bg-blue-950/0 transition-all duration-500 group-hover:bg-blue-950/75"
                    ></div>

                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center opacity-0 transition-all duration-500 group-hover:opacity-100"
                    >

                        <h3
                            class="translate-y-6 text-xl font-bold text-white transition-all duration-500 group-hover:translate-y-0 sm:text-2xl"
                        >
                            Website Development
                        </h3>

                        <a
                            href="<?= e(base_url('/Websitedev.php')) ?>"
                            class="mt-4 flex translate-y-6 items-center gap-2 rounded-full border border-white/40 bg-white/10 px-5 py-2.5 text-sm font-semibold text-white backdrop-blur-sm transition-all duration-500 delay-75 group-hover:translate-y-0 group-hover:bg-white/20"
                        >

                            <span>View Work</span>

                            <svg
                                class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"
                                />
                            </svg>

                        </a>

                    </div>

                </div>

                <div
                    class="bg-white p-5 text-center transition-colors duration-300 group-hover:bg-blue-50"
                >

                    <h3
                        class="text-lg font-semibold text-blue-900 transition-colors duration-300 group-hover:text-blue-700 sm:text-xl"
                    >
                        Website Development
                    </h3>

                </div>

            </div>



            <!-- ===================================================== -->
            <!-- 6. BROCHURE DESIGN -->
            <!-- ===================================================== -->

            <div
                class="group relative block overflow-hidden rounded-xl border-2 border-blue-200 bg-white shadow-sm transition-all duration-500 ease-out hover:-translate-y-2 hover:border-blue-500 hover:shadow-2xl"
            >

                <div class="relative aspect-[4/3] w-full overflow-hidden bg-gradient-to-br from-blue-50 to-blue-100">

                    <img
                        src="<?= e($workImage) ?>"
                        alt="Brochure Design"
                        loading="lazy"
                        class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110"
                    />

                    <div
                        class="absolute inset-0 bg-blue-950/0 transition-all duration-500 group-hover:bg-blue-950/75"
                    ></div>

                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center opacity-0 transition-all duration-500 group-hover:opacity-100"
                    >

                        <h3
                            class="translate-y-6 text-xl font-bold text-white transition-all duration-500 group-hover:translate-y-0 sm:text-2xl"
                        >
                            Brochure Design
                        </h3>

                        <a
                            href="<?= e(base_url('/brochure.php')) ?>"
                            class="mt-4 flex translate-y-6 items-center gap-2 rounded-full border border-white/40 bg-white/10 px-5 py-2.5 text-sm font-semibold text-white backdrop-blur-sm transition-all duration-500 delay-75 group-hover:translate-y-0 group-hover:bg-white/20"
                        >

                            <span>View Work</span>

                            <svg
                                class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"
                                />
                            </svg>

                        </a>

                    </div>

                </div>

                <div
                    class="bg-white p-5 text-center transition-colors duration-300 group-hover:bg-blue-50"
                >

                    <h3
                        class="text-lg font-semibold text-blue-900 transition-colors duration-300 group-hover:text-blue-700 sm:text-xl"
                    >
                        Brochure Design
                    </h3>

                </div>

            </div>



            <!-- ===================================================== -->
            <!-- 7. SOCIAL MEDIA POST -->
            <!-- ===================================================== -->

            <div
                class="group relative block overflow-hidden rounded-xl border-2 border-blue-200 bg-white shadow-sm transition-all duration-500 ease-out hover:-translate-y-2 hover:border-blue-500 hover:shadow-2xl"
            >

                <div class="relative aspect-[4/3] w-full overflow-hidden bg-gradient-to-br from-blue-50 to-blue-100">

                    <img
                        src="/assets/images/digital-card.jpg"
                        alt="Social Media Post"
                        loading="lazy"
                        class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110"
                    />

                    <div
                        class="absolute inset-0 bg-blue-950/0 transition-all duration-500 group-hover:bg-blue-950/75"
                    ></div>

                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center opacity-0 transition-all duration-500 group-hover:opacity-100"
                    >

                        <h3
                            class="translate-y-6 text-xl font-bold text-white transition-all duration-500 group-hover:translate-y-0 sm:text-2xl"
                        >
                            Social Media Post
                        </h3>

                        <a
                        
                            href="<?= e(base_url('/socialmediapost.php')) ?>"
                            class="mt-4 flex translate-y-6 items-center gap-2 rounded-full border border-white/40 bg-white/10 px-5 py-2.5 text-sm font-semibold text-white backdrop-blur-sm transition-all duration-500 delay-75 group-hover:translate-y-0 group-hover:bg-white/20"
                        >

                            <span>View Work</span>

                            <svg
                                class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"
                                />
                            </svg>

                        </a>

                    </div>

                </div>

                <div
                    class="bg-white p-5 text-center transition-colors duration-300 group-hover:bg-blue-50"
                >

                    <h3
                        class="text-lg font-semibold text-blue-900 transition-colors duration-300 group-hover:text-blue-700 sm:text-xl"
                    >
                        Social Media Post
                    </h3>

                </div>

            </div>



            <!-- ===================================================== -->
            <!-- 8. LOGO DESIGN -->
            <!-- ===================================================== -->

            <div
                class="group relative block overflow-hidden rounded-xl border-2 border-blue-200 bg-white shadow-sm transition-all duration-500 ease-out hover:-translate-y-2 hover:border-blue-500 hover:shadow-2xl"
            >

                <div class="relative aspect-[4/3] w-full overflow-hidden bg-gradient-to-br from-blue-50 to-blue-100">

                    <img
                        src="<?= e($workImage) ?>"
                        alt="Logo Design"
                        loading="lazy"
                        class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110"
                    />

                    <div
                        class="absolute inset-0 bg-blue-950/0 transition-all duration-500 group-hover:bg-blue-950/75"
                    ></div>

                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center opacity-0 transition-all duration-500 group-hover:opacity-100"
                    >

                        <h3
                            class="translate-y-6 text-xl font-bold text-white transition-all duration-500 group-hover:translate-y-0 sm:text-2xl"
                        >
                            Logo Design
                        </h3>

                        <a
                            href="<?= e(base_url('/logo.php')) ?>"
                            class="mt-4 flex translate-y-6 items-center gap-2 rounded-full border border-white/40 bg-white/10 px-5 py-2.5 text-sm font-semibold text-white backdrop-blur-sm transition-all duration-500 delay-75 group-hover:translate-y-0 group-hover:bg-white/20"
                        >

                            <span>View Work</span>

                            <svg
                                class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"
                                />
                            </svg>

                        </a>

                    </div>

                </div>

                <div
                    class="bg-white p-5 text-center transition-colors duration-300 group-hover:bg-blue-50"
                >

                    <h3
                        class="text-lg font-semibold text-blue-900 transition-colors duration-300 group-hover:text-blue-700 sm:text-xl"
                    >
                        Logo Design
                    </h3>

                </div>

            </div>


        </div>

    </section>

</div>