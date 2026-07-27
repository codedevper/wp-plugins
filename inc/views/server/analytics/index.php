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
                        Dashboard
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
                    <div class="flex-1 min-w-0 flex flex-col border-e border-gray-200 dark:border-neutral-700">
                        <!-- Negative Value Chart in Card -->
                        <div class="p-4 flex flex-col border-b border-line-2">
                            <!-- Grid -->
                            <div class="mt-2 grid grid-cols-2 gap-2">
                                <div class="flex flex-col">
                                    <div class="flex items-center gap-2">
                                        <span class="block font-medium text-xl text-foreground">
                                            22,900
                                        </span>
                                        <span class="flex justify-center items-center gap-x-1 text-sm text-green-600 dark:text-green-500">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m5 12 7-7 7 7"></path>
                                                <path d="M12 19V5"></path>
                                            </svg>
                                            0.2%
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span class="shrink-0 w-3 h-1.5 inline-block bg-chart-primary rounded-xs"></span>
                                        <div class="grow">
                                            <span class="block text-sm text-muted-foreground-1">
                                                Free
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="flex flex-col items-end">
                                    <div class="flex items-center gap-2">
                                        <span class="flex justify-center items-center gap-x-1 text-sm text-green-600 dark:text-green-500">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m5 12 7-7 7 7"></path>
                                                <path d="M12 19V5"></path>
                                            </svg>
                                            14.5%
                                        </span>
                                        <span class="block font-medium text-xl text-foreground">
                                            24,300
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span class="shrink-0 w-3 h-1.5 inline-block bg-[linear-gradient(135deg,var(--color-chart-3)_25%,transparent_25%,transparent_50%,var(--color-chart-3)_50%,var(--color-chart-3)_75%,transparent_75%,transparent)] bg-[length:4px_4px] rounded-xs"></span>
                                        <div class="grow">
                                            <span class="block text-sm text-muted-foreground-1">
                                                Paid
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Grid -->

                            <!-- Apex Line Chart -->
                            <div id="hs-pro-anvpch" class="min-h-[323px] "></div>
                        </div>
                        <!-- End Negative Value Chart in Card -->
                         
                        
                    </div>
                    <!-- End Col -->

                    <div class="shrink-0">
                        <div class="lg:w-80">

                        </div>
                    </div>
                    <!-- End Col -->
                </div>
            </div>
            <!-- End Body -->
        </div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <script type="module" src="<?php echo PLUGIN_URL ?>inc/build/js/main.js"></script>
    <script type="module" src="<?php echo PLUGIN_URL ?>inc/build/js/analytics.js"></script>
</body>

</html>