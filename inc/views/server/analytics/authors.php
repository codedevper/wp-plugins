<!doctype html>
<html x-data>

<?php require PLUGIN_PATH . 'inc/views/components/ux/head.php'; ?>

<body class="bg-background">
    <!-- ========== HEADER ========== -->
    <?php require PLUGIN_PATH . 'inc/views/components/ux/header.php'; ?>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN SIDEBAR ========== -->
    <?php require PLUGIN_PATH . 'inc/views/components/ux/main-sidebar.php'; ?>
    <!-- ========== END MAIN SIDEBAR ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main class="lg:hs-overlay-layout-open:ps-60 bg-gray-100 dark:bg-neutral-900 transition-all duration-300 lg:fixed lg:inset-0 pt-13 px-3 pb-3">
        <div class="h-[calc(100dvh-62px)] lg:h-full overflow-hidden flex flex-col bg-white dark:bg-neutral-800 border border-gray-200 dark:border-neutral-700 shadow-xs rounded-lg">
            <!-- Header -->
            <div class="py-3 px-4 flex flex-wrap justify-between items-center gap-2 border-b border-card-line">
                <div>
                    <h1 class="font-medium text-lg text-foreground">
                        Analytics
                    </h1>
                </div>

                <!-- Button Group -->
                <div class="flex items-center gap-x-5">
                    <span class="text-sm text-muted-foreground-1">
                        Sign up for Pro
                    </span>
                    <a class="py-1.5 px-2 flex items-center justify-center gap-x-1 bg-primary-500/10 border border-primary-200 text-primary-700 text-xs rounded-full py-1 hover:bg-primary-500/20 focus:outline-hidden focus:bg-primary-500/20 dark:text-primary-400 dark:border-primary-500/20" href="#">
                        Get 7 days free
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </a>
                </div>
                <!-- End Button Group -->
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="flex-1 flex flex-col overflow-y-auto [&::-webkit-scrollbar]:w-0">
                <div class="flex-1 flex flex-col lg:flex-row">
                    <div class="shrink-0 border-e border-gray-200 dark:border-neutral-700">
                        <div class="lg:w-80">
                            <?php require PLUGIN_PATH . 'inc/views/components/ui/TopAuthors.php'; ?>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="flex-1 min-w-0 flex flex-col">
                        <!-- Featured News Blog -->
                        <div class="p-4 flex flex-col">
                            <!-- Header -->
                            <div class="pb-2 flex flex-wrap justify-between items-center gap-2 border-b border-dashed border-line-2">
                                <h2 class="font-medium text-foreground">
                                    Top posts
                                </h2>

                                <button type="button" class="py-1.5 px-2.5 flex items-center justify-center gap-x-1.5 border border-layer-line text-layer-foreground text-[13px] rounded-lg py-1 hover:bg-primary-50 hover:border-primary-100 hover:text-primary-700 focus:outline-none focus:bg-primary-50 focus:border-primary-100 focus:text-primary-700 dark:hover:bg-primary-500/20 dark:hover:border-primary-500/20 dark:hover:text-primary-400 dark:focus:bg-primary-500/20 dark:focus:border-primary-500/20 dark:focus:text-primary-400">
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 12a9 9 0 1 1-9-9c2.52 0 4.93 1 6.74 2.74L21 8"></path>
                                        <path d="M21 3v5h-5"></path>
                                    </svg>
                                    Refresh
                                </button>
                            </div>
                            <!-- End Header -->

                            <!-- Featured News Blog -->
                            <div class="flex flex-col pb-4 last:pb-0 last:border-b-0">
                                <div class="pt-4 flex flex-col md:flex-row gap-5">
                                    <div class="relative aspect-4/2 md:aspect-4/3 w-full md:max-w-80 bg-secondary rounded-lg">
                                        <img class="absolute inset-0 size-full object-cover object-center rounded-lg" src="https://images.unsplash.com/photo-1737625773603-3f0acdb5bb3f?q=80&w=480&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Post Image">
                                    </div>

                                    <div class="grow">
                                        <div class="h-full flex flex-col">
                                            <p class="text-sm text-muted-foreground-1">
                                                Post title:
                                            </p>
                                            <h3 class="font-medium text-foreground">
                                                Top posts
                                            </h3>

                                            <div class="mt-4 grid grid-cols-2 xl:grid-cols-3 gap-y-4 gap-x-2">
                                                <!-- Item -->
                                                <div class="flex flex-col gap-y-1">
                                                    <span class="text-[13px] text-muted-foreground-1">
                                                        Position:
                                                    </span>

                                                    <div class="flex items-center gap-x-1.5">
                                                        <svg class="shrink-0 size-4 text-foreground" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M10 14.66v1.626a2 2 0 0 1-.976 1.696A5 5 0 0 0 7 21.978" />
                                                            <path d="M14 14.66v1.626a2 2 0 0 0 .976 1.696A5 5 0 0 1 17 21.978" />
                                                            <path d="M18 9h1.5a1 1 0 0 0 0-5H18" />
                                                            <path d="M4 22h16" />
                                                            <path d="M6 9a6 6 0 0 0 12 0V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1z" />
                                                            <path d="M6 9H4.5a1 1 0 0 1 0-5H6" />
                                                        </svg>

                                                        <div class="flex items-center gap-2">
                                                            <span class="font-medium text-sm text-foreground">
                                                                #1
                                                            </span>
                                                            <span class="flex justify-center items-center gap-x-1 text-sm text-green-600 dark:text-green-500">
                                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                    <path d="m5 12 7-7 7 7"></path>
                                                                    <path d="M12 19V5"></path>
                                                                </svg>
                                                                11
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Item -->

                                                <!-- Item -->
                                                <div class="flex flex-col gap-y-1">
                                                    <span class="text-[13px] text-muted-foreground-1">
                                                        Published date:
                                                    </span>

                                                    <div class="flex items-center gap-x-1.5">
                                                        <svg class="shrink-0 size-4 text-foreground" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M8 2v4" />
                                                            <path d="M16 2v4" />
                                                            <path d="M21 17V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h11Z" />
                                                            <path d="M3 10h18" />
                                                            <path d="M15 22v-4a2 2 0 0 1 2-2h4" />
                                                        </svg>

                                                        <span class="font-medium text-sm text-foreground">
                                                            June 19, 2025
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- End Item -->

                                                <!-- Item -->
                                                <div class="flex flex-col gap-y-1">
                                                    <span class="text-[13px] text-muted-foreground-1">
                                                        Author:
                                                    </span>

                                                    <div class="flex items-center gap-x-1.5">
                                                        <svg class="shrink-0 size-4 text-foreground" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M11.5 15H7a4 4 0 0 0-4 4v2" />
                                                            <path d="M21.378 16.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                                                            <circle cx="10" cy="7" r="4" />
                                                        </svg>

                                                        <span class="font-medium text-sm text-foreground">
                                                            John Doe
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- End Item -->

                                                <!-- Item -->
                                                <div class="flex flex-col gap-y-1">
                                                    <span class="text-[13px] text-muted-foreground-1">
                                                        Category:
                                                    </span>

                                                    <div class="flex items-center gap-x-1.5">
                                                        <svg class="shrink-0 size-4 text-foreground" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <rect width="7" height="7" x="3" y="3" rx="1" />
                                                            <rect width="7" height="7" x="14" y="3" rx="1" />
                                                            <rect width="7" height="7" x="14" y="14" rx="1" />
                                                            <rect width="7" height="7" x="3" y="14" rx="1" />
                                                        </svg>

                                                        <span class="font-medium text-sm text-foreground">
                                                            Travel
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- End Item -->

                                                <!-- Item -->
                                                <div class="flex flex-col gap-y-1">
                                                    <span class="text-[13px] text-muted-foreground-1">
                                                        Tags:
                                                    </span>

                                                    <div class="flex items-center gap-x-1.5">
                                                        <svg class="shrink-0 size-4 text-foreground" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z" />
                                                            <circle cx="7.5" cy="7.5" r=".5" fill="currentColor" />
                                                        </svg>

                                                        <span class="font-medium text-sm text-foreground">
                                                            Adventure, Nature
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- End Item -->

                                                <!-- Item -->
                                                <div class="flex flex-col gap-y-1">
                                                    <span class="text-[13px] text-muted-foreground-1">
                                                        Views:
                                                    </span>

                                                    <div class="flex items-center gap-x-1.5">
                                                        <svg class="shrink-0 size-4 text-foreground" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                                            <circle cx="12" cy="12" r="3" />
                                                        </svg>

                                                        <div class="flex items-center gap-2">
                                                            <span class="font-medium text-sm text-foreground">
                                                                2,120
                                                            </span>
                                                            <span class="flex justify-center items-center gap-x-1 text-sm text-green-600 dark:text-green-500">
                                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                    <path d="m5 12 7-7 7 7"></path>
                                                                    <path d="M12 19V5"></path>
                                                                </svg>
                                                                1,399
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Item -->
                                            </div>

                                            <!-- Footer -->
                                            <div class="mt-4 xl:mt-auto pt-4 border-t border-line-2">
                                                <div class="flex flex-wrap justify-between items-center gap-1.5">
                                                    <div>
                                                        <a class="inline-flex items-center gap-x-0.5 text-[13px] text-primary underline underline-offset-2 hover:decoration-2 focus:outline-hidden focus:decoration-2 disabled:opacity-50 disabled:pointer-events-none" href="#">
                                                            View post
                                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="m9 18 6-6-6-6"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <!-- End Col -->

                                                    <a class="py-1.5 px-2.5 flex items-center justify-center gap-x-1.5 border border-transparent text-muted-foreground-1 text-[13px] rounded-lg hover:bg-muted-hover hover:text-foreground focus:outline-none focus:bg-muted-focus focus:text-foreground" href="#">
                                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M12 16v5" />
                                                            <path d="M16 14v7" />
                                                            <path d="M20 10v11" />
                                                            <path d="m22 3-8.646 8.646a.5.5 0 0 1-.708 0L9.354 8.354a.5.5 0 0 0-.707 0L2 15" />
                                                            <path d="M4 18v3" />
                                                            <path d="M8 14v7" />
                                                        </svg>
                                                        Metrics
                                                    </a>
                                                    <!-- End Col -->
                                                </div>
                                            </div>
                                            <!-- End Footer -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Featured News Blog -->

                        </div>
                        <!-- End Featured News Blog -->

                        <!-- Loading Indicator -->
                        <div class="h-16 flex flex-col justify-center items-center text-center">
                            <span class="inline-flex gap-x-1">
                                <span class="size-1.5 bg-surface-3 animate-[typing_1s_ease-in-out_infinite] rounded-full"></span>
                                <span class="size-1.5 bg-surface-3 animate-[typing_1s_ease-in-out_infinite_0.2s] rounded-full"></span>
                                <span class="size-1.5 bg-surface-3 animate-[typing_1s_ease-in-out_infinite_0.4s] rounded-full"></span>
                            </span>
                        </div>
                        <!-- End Loading Indicator -->
                    </div>
                    <!-- End Col -->
                </div>
            </div>
            <!-- End Body -->
        </div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <script type="module" src="<?php echo PLUGIN_URL ?>inc/build/js/main.js"></script>
    <script type="module" src="<?php echo PLUGIN_URL ?>inc/build/js/analytics-authors.js"></script>
</body>

</html>