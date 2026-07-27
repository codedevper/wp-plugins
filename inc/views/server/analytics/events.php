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
            <!-- Body -->
            <div class="flex-1 flex flex-col overflow-y-auto [&::-webkit-scrollbar]:w-0">
                <div class="flex-1 flex flex-col lg:flex-row">
                    <div class="flex-1 min-w-0 flex flex-col border-e border-gray-200 dark:border-neutral-700">
                        <!-- Featured News Blog -->
                        <div class="p-4 flex flex-col">
                            <!-- Header -->
                            <div class="pb-2 flex flex-wrap justify-between items-center gap-2 border-b border-dashed border-gray-200 dark:border-neutral-700">
                                <h2 class="font-medium text-gray-800 dark:text-neutral-200">
                                    Top posts
                                </h2>

                                <button type="button" class="py-1.5 px-2.5 flex items-center justify-center gap-x-1.5 border border-gray-200 dark:border-neutral-700 text-gray-800 dark:text-white text-[13px] rounded-lg py-1 hover:bg-blue-50 hover:border-blue-100 hover:text-blue-700 focus:outline-none focus:bg-blue-50 focus:border-blue-100 focus:text-blue-700 dark:hover:bg-blue-500/20 dark:hover:border-blue-500/20 dark:hover:text-blue-400 dark:focus:bg-blue-500/20 dark:focus:border-blue-500/20 dark:focus:text-blue-400">
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 12a9 9 0 1 1-9-9c2.52 0 4.93 1 6.74 2.74L21 8"></path>
                                        <path d="M21 3v5h-5"></path>
                                    </svg>
                                    Refresh
                                </button>
                            </div>
                            <!-- End Header -->

                        </div>
                        <!-- End Featured News Blog -->
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
    <script type="module" src="<?php echo PLUGIN_URL ?>inc/build/js/server.js"></script>
</body>

</html>