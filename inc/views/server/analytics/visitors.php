<!doctype html>
<html x-data class="relative min-h-full">

<?php require PLUGIN_PATH . 'inc/views/components/ux/head.php'; ?>

<body class="hs-overlay-body-open overflow-hidden bg-background">
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
                            <?php require PLUGIN_PATH . 'inc/views/components/ui/TopVisitors.php'; ?>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="flex-1 min-w-0 flex flex-col">
                        <!-- Featured News Blog -->
                        <div class="p-4 flex flex-col">
                            <!-- Header -->
                            <div class="pb-2 flex flex-wrap justify-between items-center gap-2 border-b border-dashed border-line-2">
                                <div>
                                    <h2 class="text-xl font-semibold text-foreground">
                                        Events
                                    </h2>
                                    <p class="text-sm text-muted-foreground-2">
                                        Log events, status and metrics.
                                    </p>
                                </div>

                                <button type="button" class="py-1.5 px-2.5 flex items-center justify-center gap-x-1.5 border border-layer-line text-layer-foreground text-[13px] rounded-lg py-1 hover:bg-primary-50 hover:border-primary-100 hover:text-primary-700 focus:outline-none focus:bg-primary-50 focus:border-primary-100 focus:text-primary-700 dark:hover:bg-primary-500/20 dark:hover:border-primary-500/20 dark:hover:text-primary-400 dark:focus:bg-primary-500/20 dark:focus:border-primary-500/20 dark:focus:text-primary-400">
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 12a9 9 0 1 1-9-9c2.52 0 4.93 1 6.74 2.74L21 8"></path>
                                        <path d="M21 3v5h-5"></path>
                                    </svg>
                                    Refresh
                                </button>
                            </div>
                            <!-- End Header -->

                            <!-- Card -->
                            <div class="mt-4 flex flex-col">
                                <div class="bg-layer border border-layer-line rounded-xl shadow-2xs overflow-hidden">
                                    <!-- Header -->
                                    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-table-line">
                                        <!-- Search Input -->
                                        <div class="relative">
                                            <div class="absolute inset-y-0 inset-s-0 flex items-center pointer-events-none z-20 ps-3.5">
                                                <svg class="shrink-0 size-4 text-muted-foreground" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="11" cy="11" r="8" />
                                                    <path d="m21 21-4.3-4.3" />
                                                </svg>
                                            </div>
                                            <input type="text" class="py-2 ps-10 pe-16 block w-full bg-layer border-layer-line rounded-lg text-sm text-foreground placeholder:text-muted-foreground focus:outline-hidden focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none" placeholder="Search">
                                            <div class="hidden absolute inset-y-0 inset-e-0 flex items-center z-20 pe-1">
                                                <button type="button" class="inline-flex shrink-0 justify-center items-center size-6 rounded-full text-muted-foreground-1 hover:text-primary-hover focus:outline-hidden focus:text-primary-focus" aria-label="Close">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <circle cx="12" cy="12" r="10" />
                                                        <path d="m15 9-6 6" />
                                                        <path d="m9 9 6 6" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="absolute inset-y-0 inset-e-0 flex items-center pointer-events-none z-20 pe-3 text-muted-foreground">
                                                <svg class="shrink-0 size-3 text-muted-foreground" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M15 6v12a3 3 0 1 0 3-3H6a3 3 0 1 0 3 3V6a3 3 0 1 0-3 3h12a3 3 0 1 0-3-3" />
                                                </svg>
                                                <span class="mx-1">
                                                    <svg class="shrink-0 size-3 text-muted-foreground" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M5 12h14" />
                                                        <path d="M12 5v14" />
                                                    </svg>
                                                </span>
                                                <span class="text-xs">/</span>
                                            </div>
                                        </div>
                                        <!-- End Search Input -->
                                        <div>
                                            <div class="inline-flex gap-x-2">
                                                <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-layer border border-layer-line text-layer-foreground shadow-2xs hover:bg-layer-hover disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-layer-focus" href="#">
                                                    Selected (0) delete
                                                </a>
                                                <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-primary border border-primary-line text-primary-foreground hover:bg-primary-hover focus:outline-hidden focus:bg-primary-focus disabled:opacity-50 disabled:pointer-events-none" href="#">
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M5 12h14" />
                                                        <path d="M12 5v14" />
                                                    </svg>
                                                    Clear all
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Header -->
                                    <!-- Table -->
                                    <div class="min-w-full">
                                        <div class="overflow-x-auto [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-none [&::-webkit-scrollbar-track]:bg-gray-100 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                                            <table class="min-w-full divide-y divide-table-line">
                                                <thead class="bg-muted">
                                                    <tr>
                                                        <th scope="col" class="ps-6 pe-3 py-3 text-start">
                                                            <label for="hs-at-with-checkboxes-main" class="flex">
                                                                <input type="checkbox" class="shrink-0 size-4 bg-transparent border-line-3 rounded-sm shadow-2xs text-primary focus:ring-0 focus:ring-offset-0 checked:bg-primary-checked checked:border-primary-checked disabled:opacity-50 disabled:pointer-events-none" id="hs-at-with-checkboxes-main">
                                                                <span class="sr-only">Checkbox</span>
                                                            </label>
                                                        </th>
                                                        <th scope="col" class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3 text-start">
                                                            <div class="flex items-center gap-x-2">
                                                                <span class="text-xs font-semibold uppercase text-foreground">
                                                                    Matching ID
                                                                </span>
                                                            </div>
                                                        </th>
                                                        <th scope="col" class="px-6 py-3 text-start">
                                                            <div class="flex items-center gap-x-2">
                                                                <span class="text-xs font-semibold uppercase text-foreground">
                                                                    Page
                                                                </span>
                                                            </div>
                                                        </th>
                                                        <th scope="col" class="px-6 py-3 text-start">
                                                            <div class="flex items-center gap-x-2">
                                                                <span class="text-xs font-semibold uppercase text-foreground">
                                                                    Status
                                                                </span>
                                                            </div>
                                                        </th>
                                                        <th scope="col" class="px-6 py-3 text-start">
                                                            <div class="flex items-center gap-x-2">
                                                                <span class="text-xs font-semibold uppercase text-foreground">
                                                                    Metrics
                                                                </span>
                                                            </div>
                                                        </th>
                                                        <th scope="col" class="px-6 py-3 text-start">
                                                            <div class="flex items-center gap-x-2">
                                                                <span class="text-xs font-semibold uppercase text-foreground">
                                                                    Created
                                                                </span>
                                                            </div>
                                                        </th>
                                                        <th scope="col" class="px-6 py-3 text-end"></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="divide-y divide-table-line">
                                                    <tr>
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="ps-6 pe-3 py-3">
                                                                <label for="hs-at-with-checkboxes-1" class="flex">
                                                                    <input type="checkbox" class="shrink-0 size-4 bg-transparent border-line-3 rounded-sm shadow-2xs text-primary focus:ring-0 focus:ring-offset-0 checked:bg-primary-checked checked:border-primary-checked disabled:opacity-50 disabled:pointer-events-none" id="hs-at-with-checkboxes-1">
                                                                    <span class="sr-only">Checkbox</span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                                                                <div class="flex items-center gap-x-3">
                                                                    <div class="grow">
                                                                        <span class="block text-sm font-semibold text-foreground">v6-1785183811173</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="h-px w-72 whitespace-nowrap">
                                                            <div class="px-6 py-3">
                                                                <span class="block text-sm text-muted-foreground-1">Human resources</span>
                                                            </div>
                                                        </td>
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-6 py-3">
                                                                <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                                    <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                    </svg>
                                                                    Active
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-6 py-3">
                                                                <div class="flex items-center gap-x-3">
                                                                    <span class="text-xs text-muted-foreground-1">1/5</span>
                                                                    <div class="flex w-full h-1.5 bg-surface-1 rounded-full overflow-hidden">
                                                                        <div class="flex flex-col justify-center overflow-hidden bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-6 py-3">
                                                                <span class="text-sm text-muted-foreground-1">28 Dec, 12:12</span>
                                                            </div>
                                                        </td>
                                                        <td class="size-px whitespace-nowrap">
                                                            <div class="px-6 py-1.5">
                                                                <a class="inline-flex items-center gap-x-1 text-sm text-primary decoration-2 hover:underline focus:outline-hidden focus:underline font-medium" href="#">
                                                                    Entries
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- End Table -->
                                    <!-- Footer -->
                                    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-layer-line">
                                        <div>
                                            <p class="text-sm text-muted-foreground-2">
                                                <span class="font-semibold text-foreground">12</span> results
                                            </p>
                                        </div>
                                        <div>
                                            <div class="inline-flex gap-x-2">
                                                <button type="button" class="py-1.5 px-2.5 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg bg-layer border border-layer-line text-layer-foreground shadow-2xs hover:bg-layer-hover disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-layer-focus">
                                                    <svg class="shrink-0 size-4 -ms-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="m15 18-6-6 6-6" />
                                                    </svg>
                                                    Prev
                                                </button>
                                                <button type="button" class="py-1.5 px-2.5 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg bg-layer border border-layer-line text-layer-foreground shadow-2xs hover:bg-layer-hover disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-layer-focus">
                                                    Next
                                                    <svg class="shrink-0 size-4 -me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="m9 18 6-6-6-6" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Footer -->
                                </div>
                            </div>
                            <!-- End Card -->

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
    <script type="module" src="<?php echo PLUGIN_URL ?>inc/build/js/analytics-visitors.js"></script>
</body>

</html>