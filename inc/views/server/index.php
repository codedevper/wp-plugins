<!doctype html>
<html x-data>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo PLUGIN_URL ?>inc/build/assets/css/main.css" rel="stylesheet">
    <meta name="csrf-token" content="<?php echo wp_create_nonce('wp_rest') ?>">
</head>

<body class="bg-background">
    <div id="hs-pro-sidebar"
        class="hs-overlay [--auto-close:md] hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform w-65 hs-overlay-minified:w-13 overflow-hidden hidden fixed inset-y-0 z-60 inset-s-0 bg-white dark:bg-neutral-800 border-e border-gray-200 dark:border-neutral-700 md:block md:translate-x-0 md:inset-e-auto md:bottom-0"
        role="dialog" tabindex="-1" aria-label="Sidebar">
        <div class="relative flex flex-col h-full max-h-full">
            <!-- Header -->
            <header class="py-2.5 px-4 flex justify-between items-center gap-x-2">
                <div class="-ms-2 flex items-center gap-x-1">
                    <div class="md:hs-overlay-minified:hidden">
                        <a class="shrink-0 inline-flex justify-center items-center size-9 rounded-lg text-xl inline-block font-semibold hover:bg-gray-100 dark:hover:bg-neutral-700 focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-700"
                            href="@@href" aria-label="Preline">
                            <svg class="shrink-0 size-5 text-blue-600 dark:text-blue-500" width="36" height="36" viewBox="0 0 36 36"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.0835 3.23358C9.88316 3.23358 3.23548 9.8771 3.23548 18.0723V35.5832H0.583496V18.0723C0.583496 8.41337 8.41851 0.583252 18.0835 0.583252C27.7485 0.583252 35.5835 8.41337 35.5835 18.0723C35.5835 27.7312 27.7485 35.5614 18.0835 35.5614H16.7357V32.911H18.0835C26.2838 32.911 32.9315 26.2675 32.9315 18.0723C32.9315 9.8771 26.2838 3.23358 18.0835 3.23358Z"
                                    fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.0833 8.62162C12.8852 8.62162 8.62666 12.9245 8.62666 18.2879V35.5833H5.97468V18.2879C5.97468 11.5105 11.3713 5.97129 18.0833 5.97129C24.7954 5.97129 30.192 11.5105 30.192 18.2879C30.192 25.0653 24.7954 30.6045 18.0833 30.6045H16.7355V27.9542H18.0833C23.2815 27.9542 27.54 23.6513 27.54 18.2879C27.54 12.9245 23.2815 8.62162 18.0833 8.62162Z"
                                    fill="currentColor" />
                                <path
                                    d="M24.8225 18.1012C24.8225 21.8208 21.8053 24.8361 18.0833 24.8361C14.3614 24.8361 11.3442 21.8208 11.3442 18.1012C11.3442 14.3815 14.3614 11.3662 18.0833 11.3662C21.8053 11.3662 24.8225 14.3815 24.8225 18.1012Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                        
                        <span class="truncate font-medium text-sm sm:text-base text-gray-800 dark:text-neutral-200">
                            Preline UI Overview
                        </span>
                    </div>

                    <!-- Sidebar Toggle -->
                    <button type="button"
                        class="hidden md:hs-overlay-minified:flex justify-center items-center flex-none gap-x-3 size-9 text-sm text-gray-500 dark:text-neutral-400 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-700"
                        aria-haspopup="dialog" aria-expanded="true" aria-controls="hs-pro-sidebar" aria-label="Minify navigation"
                        data-hs-overlay-minifier="#hs-pro-sidebar">
                        <svg class="hidden hs-overlay-minified:block shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                            <path d="M15 3v18"></path>
                            <path d="m8 9 3 3-3 3"></path>
                        </svg>
                        <svg class="hs-overlay-minified:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                            <path d="M15 3v18"></path>
                            <path d="m10 15-3-3 3-3"></path>
                        </svg>
                        <span class="sr-only">Sidebar Toggle</span>
                    </button>
                    <!-- End Sidebar Toggle -->
                </div>

                <!-- Sidebar Toggle -->
                <button type="button"
                    class="hidden md:hs-overlay-minified:hidden md:flex justify-center items-center flex-none gap-x-3 size-9 text-sm text-gray-500 dark:text-neutral-400 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-700"
                    aria-haspopup="dialog" aria-expanded="true" aria-controls="hs-pro-sidebar" aria-label="Minify navigation"
                    data-hs-overlay-minifier="#hs-pro-sidebar">
                    <svg class="hidden hs-overlay-minified:block shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                        <path d="M15 3v18"></path>
                        <path d="m8 9 3 3-3 3"></path>
                    </svg>
                    <svg class="hs-overlay-minified:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                        <path d="M15 3v18"></path>
                        <path d="m10 15-3-3 3-3"></path>
                    </svg>
                    <span class="sr-only">Sidebar Toggle</span>
                </button>
                <!-- End Sidebar Toggle -->

                <!-- Sidebar Toggle -->
                <button type="button"
                    class="flex md:hidden justify-center items-center gap-x-3 size-6 bg-white dark:bg-neutral-800 border border-gray-200 dark:border-neutral-700 text-sm text-gray-500 dark:text-neutral-400 rounded-full hover:bg-gray-100 dark:hover:bg-neutral-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-700"
                    data-hs-overlay="#hs-pro-sidebar" aria-expanded="true">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                    <span class="sr-only">Close</span>
                </button>
                <!-- End Sidebar Toggle -->
            </header>
            <!-- End Header -->

            <div class="mb-5 px-2 flex flex-col gap-y-5">
                <!-- List -->
                <ul class="flex flex-col gap-y-0.5">
                    <li>
                        <a class="group relative w-full flex items-center gap-1 py-1.5 px-2.5 text-sm rounded-lg before:absolute before:inset-y-0 before:-inset-s-2 before:rounded-e-full before:w-1 before:h-full text-gray-800 dark:text-neutral-200 hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 focus:bg-gray-100/70 dark:focus:bg-neutral-700/70"
                            href="#">
                            <span class="-ms-[5px] flex shrink-0 justify-center items-center size-6">
                                <svg
                                    class="shrink-0 size-4 group-hover:scale-115 group-focus:scale-115 transition-transform duration-300"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                    <path d="M12 5v14" />
                                </svg>
                            </span>
                            <span class="truncate hs-overlay-minified:opacity-0 transition-opacity duration-300">New chat</span>
                        </a>
                    </li>
                    <li>
                        <button type="button"
                            class="group w-full flex items-center gap-1 py-1.5 px-2.5 text-sm text-gray-800 dark:text-neutral-200 truncate rounded-lg hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70"
                            aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-pro-dnsm" data-hs-overlay="#hs-pro-dnsm">
                            <span class="-ms-[5px] flex shrink-0 justify-center items-center size-6">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path class="group-hover:scale-100 group-focus:scale-100 scale-115 transition-transform duration-300"
                                        d="m21 21-4.34-4.34" />
                                    <circle cx="11" cy="11" r="8" />
                                </svg>
                            </span>
                            <span class="truncate hs-overlay-minified:opacity-0 transition-opacity duration-300">Search chats</span>
                        </button>
                    </li>
                    <li>
                        <a class="group relative w-full flex items-center gap-1 py-1.5 px-2.5 text-sm rounded-lg before:absolute before:inset-y-0 before:-inset-s-2 before:rounded-e-full before:w-1 before:h-full text-gray-800 dark:text-neutral-200 hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 focus:bg-gray-100/70 dark:focus:bg-neutral-700/70"
                            href="#">
                            <span class="-ms-[5px] flex shrink-0 justify-center items-center size-6">
                                <svg
                                    class="shrink-0 size-4 group-hover:rotate-180 group-focus:rotate-180 transition-transform duration-300"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                                    <path d="M2 12h20" />
                                </svg>
                            </span>
                            <span class="truncate hs-overlay-minified:opacity-0 transition-opacity duration-300">Explore</span>
                        </a>
                    </li>
                    <li>
                        <a class="group relative w-full flex items-center gap-1 py-1.5 px-2.5 text-sm rounded-lg before:absolute before:inset-y-0 before:-inset-s-2 before:rounded-e-full before:w-1 before:h-full text-gray-800 dark:text-neutral-200 hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 focus:bg-gray-100/70 dark:focus:bg-neutral-700/70"
                            href="#">
                            <span class="-ms-[5px] flex shrink-0 justify-center items-center size-6">
                                <svg
                                    class="shrink-0 size-4 group-hover:scale-110 group-focus:scale-110 transition-transform duration-300"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 3v18" />
                                    <path d="M3 12h18" />
                                    <path d="m5.6 5.6 12.8 12.8" />
                                    <path d="m18.4 5.6-12.8 12.8" />
                                </svg>
                            </span>
                            <span class="truncate hs-overlay-minified:opacity-0 transition-opacity duration-300">Studio</span>
                        </a>
                    </li>
                    <li>
                        <a class="group relative w-full flex items-center gap-1 py-1.5 px-2.5 text-sm rounded-lg before:absolute before:inset-y-0 before:-inset-s-2 before:rounded-e-full before:w-1 before:h-full text-gray-800 dark:text-neutral-200 hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 focus:bg-gray-100/70 dark:focus:bg-neutral-700/70"
                            href="#">
                            <span class="-ms-[5px] flex shrink-0 justify-center items-center size-6">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path class="group-hover:scale-110 group-focus:scale-110 transition-transform duration-300"
                                        d="M14 9a2 2 0 0 1-2 2H6l-4 4V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2z" />
                                    <path class="group-hover:scale-95 group-focus:scale-95 transition-transform duration-300"
                                        d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1" />
                                </svg>
                            </span>
                            <span class="truncate hs-overlay-minified:opacity-0 transition-opacity duration-300">Chat details</span>
                        </a>
                    </li>
                </ul>
                <!-- End List -->
            </div>

            <!-- Body -->
            <div
                class="hs-overlay-minified:opacity-0 transition-opacity duration-300 pb-4 px-2 size-full flex flex-col gap-y-5 overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-none [&::-webkit-scrollbar-track]:bg-gray-100 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                <div class="flex flex-col">
                    <span class="block ps-2.5 mb-2 text-sm text-gray-400 dark:text-neutral-500">
                        Recent chats
                    </span>

                    <!-- List -->
                    <ul class="flex flex-col gap-y-0.5">
                        <li>
                            <div class="relative group">
                                <a class="w-full flex items-center gap-x-2 py-2 ps-2.5 pe-8 text-sm text-gray-800 dark:text-neutral-200 truncate rounded-lg hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70"
                                    href="chat-details.html">
                                    <span class="truncate">Preline UI Overview</span>
                                </a>

                                <div
                                    class="absolute top-1/2 inset-e-0 z-1 -translate-y-1/2 group-hover:opacity-100 opacity-0 transition-opacity duration-300">
                                    <!-- More Dropdown -->
                                    <div class="hs-dropdown [--scope:window] relative inline-flex">
                                        <button id="hs-pro-chthmdid1" type="button"
                                            class="flex justify-center items-center gap-x-3 size-8 text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 rounded-lg disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="12" cy="5" r="1" />
                                                <circle cx="12" cy="19" r="1" />
                                            </svg>
                                        </button>

                                        <!-- More Dropdown -->
                                        <div
                                            class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-32 transition-[opacity,margin] duration opacity-0 hidden z-60 bg-white dark:bg-neutral-900 border border-transparent rounded-xl shadow-lg before:absolute before:-top-4 before:inset-s-0 before:w-full before:h-5"
                                            role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-chthmdid1">
                                            <div class="p-1 space-y-0.5">
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
                                                        <polyline points="16 6 12 2 8 6" />
                                                        <line x1="12" x2="12" y1="2" y2="15" />
                                                    </svg>
                                                    Share
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                        <path d="m15 5 4 4" />
                                                    </svg>
                                                    Rename
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <rect width="20" height="5" x="2" y="3" rx="1" />
                                                        <path d="M4 8v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8" />
                                                        <path d="M10 12h4" />
                                                    </svg>
                                                    Archive
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-red-500 hover:bg-red-600/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-red-600/10">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M3 6h18" />
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                                        <line x1="10" x2="10" y1="11" y2="17" />
                                                        <line x1="14" x2="14" y1="11" y2="17" />
                                                    </svg>
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End More Dropdown -->
                                    </div>
                                    <!-- End More Dropdown -->
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="relative group">
                                <a class="w-full flex items-center gap-x-2 py-2 ps-2.5 pe-8 text-sm text-gray-800 dark:text-neutral-200 truncate rounded-lg hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70"
                                    href="chat-details.html">
                                    <span class="truncate">Product Photography Lighting Setup</span>
                                </a>

                                <div
                                    class="absolute top-1/2 inset-e-0 z-1 -translate-y-1/2 group-hover:opacity-100 opacity-0 transition-opacity duration-300">
                                    <!-- More Dropdown -->
                                    <div class="hs-dropdown [--scope:window] relative inline-flex">
                                        <button id="hs-pro-chthmdid2" type="button"
                                            class="flex justify-center items-center gap-x-3 size-8 text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 rounded-lg disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="12" cy="5" r="1" />
                                                <circle cx="12" cy="19" r="1" />
                                            </svg>
                                        </button>

                                        <!-- More Dropdown -->
                                        <div
                                            class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-32 transition-[opacity,margin] duration opacity-0 hidden z-60 bg-white dark:bg-neutral-900 border border-transparent rounded-xl shadow-lg before:absolute before:-top-4 before:inset-s-0 before:w-full before:h-5"
                                            role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-chthmdid2">
                                            <div class="p-1 space-y-0.5">
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
                                                        <polyline points="16 6 12 2 8 6" />
                                                        <line x1="12" x2="12" y1="2" y2="15" />
                                                    </svg>
                                                    Share
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                        <path d="m15 5 4 4" />
                                                    </svg>
                                                    Rename
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <rect width="20" height="5" x="2" y="3" rx="1" />
                                                        <path d="M4 8v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8" />
                                                        <path d="M10 12h4" />
                                                    </svg>
                                                    Archive
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-red-500 hover:bg-red-600/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-red-600/10">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M3 6h18" />
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                                        <line x1="10" x2="10" y1="11" y2="17" />
                                                        <line x1="14" x2="14" y1="11" y2="17" />
                                                    </svg>
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End More Dropdown -->
                                    </div>
                                    <!-- End More Dropdown -->
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="relative group">
                                <a class="w-full flex items-center gap-x-2 py-2 ps-2.5 pe-8 text-sm text-gray-800 dark:text-neutral-200 truncate rounded-lg hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70"
                                    href="chat-details.html">
                                    <span class="truncate">Social Media Content</span>
                                </a>

                                <div
                                    class="absolute top-1/2 inset-e-0 z-1 -translate-y-1/2 group-hover:opacity-100 opacity-0 transition-opacity duration-300">
                                    <!-- More Dropdown -->
                                    <div class="hs-dropdown [--scope:window] relative inline-flex">
                                        <button id="hs-pro-chthmdid3" type="button"
                                            class="flex justify-center items-center gap-x-3 size-8 text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 rounded-lg disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="12" cy="5" r="1" />
                                                <circle cx="12" cy="19" r="1" />
                                            </svg>
                                        </button>

                                        <!-- More Dropdown -->
                                        <div
                                            class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-32 transition-[opacity,margin] duration opacity-0 hidden z-60 bg-white dark:bg-neutral-900 border border-transparent rounded-xl shadow-lg before:absolute before:-top-4 before:inset-s-0 before:w-full before:h-5"
                                            role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-chthmdid3">
                                            <div class="p-1 space-y-0.5">
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
                                                        <polyline points="16 6 12 2 8 6" />
                                                        <line x1="12" x2="12" y1="2" y2="15" />
                                                    </svg>
                                                    Share
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                        <path d="m15 5 4 4" />
                                                    </svg>
                                                    Rename
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <rect width="20" height="5" x="2" y="3" rx="1" />
                                                        <path d="M4 8v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8" />
                                                        <path d="M10 12h4" />
                                                    </svg>
                                                    Archive
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-red-500 hover:bg-red-600/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-red-600/10">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M3 6h18" />
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                                        <line x1="10" x2="10" y1="11" y2="17" />
                                                        <line x1="14" x2="14" y1="11" y2="17" />
                                                    </svg>
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End More Dropdown -->
                                    </div>
                                    <!-- End More Dropdown -->
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="relative group">
                                <a class="w-full flex items-center gap-x-2 py-2 ps-2.5 pe-8 text-sm text-gray-800 dark:text-neutral-200 truncate rounded-lg hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70"
                                    href="chat-details.html">
                                    <span class="truncate">Website Optimization</span>
                                </a>

                                <div
                                    class="absolute top-1/2 inset-e-0 z-1 -translate-y-1/2 group-hover:opacity-100 opacity-0 transition-opacity duration-300">
                                    <!-- More Dropdown -->
                                    <div class="hs-dropdown [--scope:window] relative inline-flex">
                                        <button id="hs-pro-chthmdid4" type="button"
                                            class="flex justify-center items-center gap-x-3 size-8 text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 rounded-lg disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="12" cy="5" r="1" />
                                                <circle cx="12" cy="19" r="1" />
                                            </svg>
                                        </button>

                                        <!-- More Dropdown -->
                                        <div
                                            class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-32 transition-[opacity,margin] duration opacity-0 hidden z-60 bg-white dark:bg-neutral-900 border border-transparent rounded-xl shadow-lg before:absolute before:-top-4 before:inset-s-0 before:w-full before:h-5"
                                            role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-chthmdid4">
                                            <div class="p-1 space-y-0.5">
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
                                                        <polyline points="16 6 12 2 8 6" />
                                                        <line x1="12" x2="12" y1="2" y2="15" />
                                                    </svg>
                                                    Share
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                        <path d="m15 5 4 4" />
                                                    </svg>
                                                    Rename
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <rect width="20" height="5" x="2" y="3" rx="1" />
                                                        <path d="M4 8v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8" />
                                                        <path d="M10 12h4" />
                                                    </svg>
                                                    Archive
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-red-500 hover:bg-red-600/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-red-600/10">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M3 6h18" />
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                                        <line x1="10" x2="10" y1="11" y2="17" />
                                                        <line x1="14" x2="14" y1="11" y2="17" />
                                                    </svg>
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End More Dropdown -->
                                    </div>
                                    <!-- End More Dropdown -->
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="relative group">
                                <a class="w-full flex items-center gap-x-2 py-2 ps-2.5 pe-8 text-sm text-gray-800 dark:text-neutral-200 truncate rounded-lg hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70"
                                    href="chat-details.html">
                                    <span class="truncate">Customer Support Ticket System</span>
                                </a>

                                <div
                                    class="absolute top-1/2 inset-e-0 z-1 -translate-y-1/2 group-hover:opacity-100 opacity-0 transition-opacity duration-300">
                                    <!-- More Dropdown -->
                                    <div class="hs-dropdown [--scope:window] relative inline-flex">
                                        <button id="hs-pro-chthmdid5" type="button"
                                            class="flex justify-center items-center gap-x-3 size-8 text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 rounded-lg disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="12" cy="5" r="1" />
                                                <circle cx="12" cy="19" r="1" />
                                            </svg>
                                        </button>

                                        <!-- More Dropdown -->
                                        <div
                                            class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-32 transition-[opacity,margin] duration opacity-0 hidden z-60 bg-white dark:bg-neutral-900 border border-transparent rounded-xl shadow-lg before:absolute before:-top-4 before:inset-s-0 before:w-full before:h-5"
                                            role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-chthmdid5">
                                            <div class="p-1 space-y-0.5">
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
                                                        <polyline points="16 6 12 2 8 6" />
                                                        <line x1="12" x2="12" y1="2" y2="15" />
                                                    </svg>
                                                    Share
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                        <path d="m15 5 4 4" />
                                                    </svg>
                                                    Rename
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <rect width="20" height="5" x="2" y="3" rx="1" />
                                                        <path d="M4 8v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8" />
                                                        <path d="M10 12h4" />
                                                    </svg>
                                                    Archive
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-red-500 hover:bg-red-600/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-red-600/10">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M3 6h18" />
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                                        <line x1="10" x2="10" y1="11" y2="17" />
                                                        <line x1="14" x2="14" y1="11" y2="17" />
                                                    </svg>
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End More Dropdown -->
                                    </div>
                                    <!-- End More Dropdown -->
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="relative group">
                                <a class="w-full flex items-center gap-x-2 py-2 ps-2.5 pe-8 text-sm text-gray-800 dark:text-neutral-200 truncate rounded-lg hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70"
                                    href="chat-details.html">
                                    <span class="truncate">Mobile App Design</span>
                                </a>

                                <div
                                    class="absolute top-1/2 inset-e-0 z-1 -translate-y-1/2 group-hover:opacity-100 opacity-0 transition-opacity duration-300">
                                    <!-- More Dropdown -->
                                    <div class="hs-dropdown [--scope:window] relative inline-flex">
                                        <button id="hs-pro-chthmdid6" type="button"
                                            class="flex justify-center items-center gap-x-3 size-8 text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 rounded-lg disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="12" cy="5" r="1" />
                                                <circle cx="12" cy="19" r="1" />
                                            </svg>
                                        </button>

                                        <!-- More Dropdown -->
                                        <div
                                            class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-32 transition-[opacity,margin] duration opacity-0 hidden z-60 bg-white dark:bg-neutral-900 border border-transparent rounded-xl shadow-lg before:absolute before:-top-4 before:inset-s-0 before:w-full before:h-5"
                                            role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-chthmdid6">
                                            <div class="p-1 space-y-0.5">
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
                                                        <polyline points="16 6 12 2 8 6" />
                                                        <line x1="12" x2="12" y1="2" y2="15" />
                                                    </svg>
                                                    Share
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                        <path d="m15 5 4 4" />
                                                    </svg>
                                                    Rename
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <rect width="20" height="5" x="2" y="3" rx="1" />
                                                        <path d="M4 8v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8" />
                                                        <path d="M10 12h4" />
                                                    </svg>
                                                    Archive
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-red-500 hover:bg-red-600/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-red-600/10">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M3 6h18" />
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                                        <line x1="10" x2="10" y1="11" y2="17" />
                                                        <line x1="14" x2="14" y1="11" y2="17" />
                                                    </svg>
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End More Dropdown -->
                                    </div>
                                    <!-- End More Dropdown -->
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="relative group">
                                <a class="w-full flex items-center gap-x-2 py-2 ps-2.5 pe-8 text-sm text-gray-800 dark:text-neutral-200 truncate rounded-lg hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70"
                                    href="chat-details.html">
                                    <span class="truncate">Ecommerce Payment Integration</span>
                                </a>

                                <div
                                    class="absolute top-1/2 inset-e-0 z-1 -translate-y-1/2 group-hover:opacity-100 opacity-0 transition-opacity duration-300">
                                    <!-- More Dropdown -->
                                    <div class="hs-dropdown [--scope:window] relative inline-flex">
                                        <button id="hs-pro-chthmdid7" type="button"
                                            class="flex justify-center items-center gap-x-3 size-8 text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 rounded-lg disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="12" cy="5" r="1" />
                                                <circle cx="12" cy="19" r="1" />
                                            </svg>
                                        </button>

                                        <!-- More Dropdown -->
                                        <div
                                            class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-32 transition-[opacity,margin] duration opacity-0 hidden z-60 bg-white dark:bg-neutral-900 border border-transparent rounded-xl shadow-lg before:absolute before:-top-4 before:inset-s-0 before:w-full before:h-5"
                                            role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-chthmdid7">
                                            <div class="p-1 space-y-0.5">
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
                                                        <polyline points="16 6 12 2 8 6" />
                                                        <line x1="12" x2="12" y1="2" y2="15" />
                                                    </svg>
                                                    Share
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                        <path d="m15 5 4 4" />
                                                    </svg>
                                                    Rename
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <rect width="20" height="5" x="2" y="3" rx="1" />
                                                        <path d="M4 8v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8" />
                                                        <path d="M10 12h4" />
                                                    </svg>
                                                    Archive
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-red-500 hover:bg-red-600/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-red-600/10">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M3 6h18" />
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                                        <line x1="10" x2="10" y1="11" y2="17" />
                                                        <line x1="14" x2="14" y1="11" y2="17" />
                                                    </svg>
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End More Dropdown -->
                                    </div>
                                    <!-- End More Dropdown -->
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="relative group">
                                <a class="w-full flex items-center gap-x-2 py-2 ps-2.5 pe-8 text-sm text-gray-800 dark:text-neutral-200 truncate rounded-lg hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70"
                                    href="chat-details.html">
                                    <span class="truncate">Data Analytics Dashboard Setup</span>
                                </a>

                                <div
                                    class="absolute top-1/2 inset-e-0 z-1 -translate-y-1/2 group-hover:opacity-100 opacity-0 transition-opacity duration-300">
                                    <!-- More Dropdown -->
                                    <div class="hs-dropdown [--scope:window] relative inline-flex">
                                        <button id="hs-pro-chthmdid8" type="button"
                                            class="flex justify-center items-center gap-x-3 size-8 text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 rounded-lg disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="12" cy="5" r="1" />
                                                <circle cx="12" cy="19" r="1" />
                                            </svg>
                                        </button>

                                        <!-- More Dropdown -->
                                        <div
                                            class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-32 transition-[opacity,margin] duration opacity-0 hidden z-60 bg-white dark:bg-neutral-900 border border-transparent rounded-xl shadow-lg before:absolute before:-top-4 before:inset-s-0 before:w-full before:h-5"
                                            role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-chthmdid8">
                                            <div class="p-1 space-y-0.5">
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
                                                        <polyline points="16 6 12 2 8 6" />
                                                        <line x1="12" x2="12" y1="2" y2="15" />
                                                    </svg>
                                                    Share
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                        <path d="m15 5 4 4" />
                                                    </svg>
                                                    Rename
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <rect width="20" height="5" x="2" y="3" rx="1" />
                                                        <path d="M4 8v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8" />
                                                        <path d="M10 12h4" />
                                                    </svg>
                                                    Archive
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-red-500 hover:bg-red-600/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-red-600/10">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M3 6h18" />
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                                        <line x1="10" x2="10" y1="11" y2="17" />
                                                        <line x1="14" x2="14" y1="11" y2="17" />
                                                    </svg>
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End More Dropdown -->
                                    </div>
                                    <!-- End More Dropdown -->
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="relative group">
                                <a class="w-full flex items-center gap-x-2 py-2 ps-2.5 pe-8 text-sm text-gray-800 dark:text-neutral-200 truncate rounded-lg hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70"
                                    href="chat-details.html">
                                    <span class="truncate">Video Production</span>
                                </a>

                                <div
                                    class="absolute top-1/2 inset-e-0 z-1 -translate-y-1/2 group-hover:opacity-100 opacity-0 transition-opacity duration-300">
                                    <!-- More Dropdown -->
                                    <div class="hs-dropdown [--scope:window] relative inline-flex">
                                        <button id="hs-pro-chthmdid9" type="button"
                                            class="flex justify-center items-center gap-x-3 size-8 text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 rounded-lg disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="12" cy="5" r="1" />
                                                <circle cx="12" cy="19" r="1" />
                                            </svg>
                                        </button>

                                        <!-- More Dropdown -->
                                        <div
                                            class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-32 transition-[opacity,margin] duration opacity-0 hidden z-60 bg-white dark:bg-neutral-900 border border-transparent rounded-xl shadow-lg before:absolute before:-top-4 before:inset-s-0 before:w-full before:h-5"
                                            role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-chthmdid9">
                                            <div class="p-1 space-y-0.5">
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
                                                        <polyline points="16 6 12 2 8 6" />
                                                        <line x1="12" x2="12" y1="2" y2="15" />
                                                    </svg>
                                                    Share
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                        <path d="m15 5 4 4" />
                                                    </svg>
                                                    Rename
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <rect width="20" height="5" x="2" y="3" rx="1" />
                                                        <path d="M4 8v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8" />
                                                        <path d="M10 12h4" />
                                                    </svg>
                                                    Archive
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-red-500 hover:bg-red-600/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-red-600/10">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M3 6h18" />
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                                        <line x1="10" x2="10" y1="11" y2="17" />
                                                        <line x1="14" x2="14" y1="11" y2="17" />
                                                    </svg>
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End More Dropdown -->
                                    </div>
                                    <!-- End More Dropdown -->
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="relative group">
                                <a class="w-full flex items-center gap-x-2 py-2 ps-2.5 pe-8 text-sm text-gray-800 dark:text-neutral-200 truncate rounded-lg hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70"
                                    href="chat-details.html">
                                    <span class="truncate">Project Management Timeline</span>
                                </a>

                                <div
                                    class="absolute top-1/2 inset-e-0 z-1 -translate-y-1/2 group-hover:opacity-100 opacity-0 transition-opacity duration-300">
                                    <!-- More Dropdown -->
                                    <div class="hs-dropdown [--scope:window] relative inline-flex">
                                        <button id="hs-pro-chthmdid10" type="button"
                                            class="flex justify-center items-center gap-x-3 size-8 text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 rounded-lg disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="12" cy="5" r="1" />
                                                <circle cx="12" cy="19" r="1" />
                                            </svg>
                                        </button>

                                        <!-- More Dropdown -->
                                        <div
                                            class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-32 transition-[opacity,margin] duration opacity-0 hidden z-60 bg-white dark:bg-neutral-900 border border-transparent rounded-xl shadow-lg before:absolute before:-top-4 before:inset-s-0 before:w-full before:h-5"
                                            role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-chthmdid10">
                                            <div class="p-1 space-y-0.5">
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
                                                        <polyline points="16 6 12 2 8 6" />
                                                        <line x1="12" x2="12" y1="2" y2="15" />
                                                    </svg>
                                                    Share
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                        <path d="m15 5 4 4" />
                                                    </svg>
                                                    Rename
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <rect width="20" height="5" x="2" y="3" rx="1" />
                                                        <path d="M4 8v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8" />
                                                        <path d="M10 12h4" />
                                                    </svg>
                                                    Archive
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-red-500 hover:bg-red-600/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-red-600/10">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M3 6h18" />
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                                        <line x1="10" x2="10" y1="11" y2="17" />
                                                        <line x1="14" x2="14" y1="11" y2="17" />
                                                    </svg>
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End More Dropdown -->
                                    </div>
                                    <!-- End More Dropdown -->
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="relative group">
                                <a class="w-full flex items-center gap-x-2 py-2 ps-2.5 pe-8 text-sm text-gray-800 dark:text-neutral-200 truncate rounded-lg hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70"
                                    href="chat-details.html">
                                    <span class="truncate">Brand Design System</span>
                                </a>

                                <div
                                    class="absolute top-1/2 inset-e-0 z-1 -translate-y-1/2 group-hover:opacity-100 opacity-0 transition-opacity duration-300">
                                    <!-- More Dropdown -->
                                    <div class="hs-dropdown [--scope:window] relative inline-flex">
                                        <button id="hs-pro-chthmdid11" type="button"
                                            class="flex justify-center items-center gap-x-3 size-8 text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100/70 dark:hover:bg-neutral-700/70 rounded-lg disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100/70 dark:focus:bg-neutral-700/70">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="12" cy="5" r="1" />
                                                <circle cx="12" cy="19" r="1" />
                                            </svg>
                                        </button>

                                        <!-- More Dropdown -->
                                        <div
                                            class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-32 transition-[opacity,margin] duration opacity-0 hidden z-60 bg-white dark:bg-neutral-900 border border-transparent rounded-xl shadow-lg before:absolute before:-top-4 before:inset-s-0 before:w-full before:h-5"
                                            role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-chthmdid11">
                                            <div class="p-1 space-y-0.5">
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
                                                        <polyline points="16 6 12 2 8 6" />
                                                        <line x1="12" x2="12" y1="2" y2="15" />
                                                    </svg>
                                                    Share
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                        <path d="m15 5 4 4" />
                                                    </svg>
                                                    Rename
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <rect width="20" height="5" x="2" y="3" rx="1" />
                                                        <path d="M4 8v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8" />
                                                        <path d="M10 12h4" />
                                                    </svg>
                                                    Archive
                                                </button>
                                                <button type="button"
                                                    class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-red-500 hover:bg-red-600/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-red-600/10">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M3 6h18" />
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                                        <line x1="10" x2="10" y1="11" y2="17" />
                                                        <line x1="14" x2="14" y1="11" y2="17" />
                                                    </svg>
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End More Dropdown -->
                                    </div>
                                    <!-- End More Dropdown -->
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- End List -->
                </div>
            </div>
            <!-- End Body -->
        </div>
    </div>

    <!-- ========== MAIN CONTENT ========== -->
    <main
        class="md:ps-65 md:hs-overlay-minified:ps-13 transition-all duration-300 pb-4 h-screen flex flex-col bg-white dark:bg-neutral-800">
        <!-- ========== HEADER ========== -->
        <header
            class="md:ms-65 xl:hs-overlay-layout-open:me-96 md:hs-overlay-minified:ms-13 transition-all duration-300 fixed top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-48 md:z-61 bg-layer/60 backdrop-blur-lg py-2.5">
            <nav class="px-4 sm:px-5.5 flex basis-full justify-between items-center w-full mx-auto">
                <!-- Button Group -->
                <div class="flex items-center sm:gap-x-1.5 truncate">
                    <!-- Sidebar Toggle -->
                    <button type="button"
                        class="md:hidden flex justify-center items-center flex-none gap-x-3 size-9 text-sm text-gray-500 dark:text-neutral-400 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-700"
                        aria-haspopup="dialog" aria-expanded="true" aria-controls="hs-pro-sidebar" aria-label="Minify navigation"
                        data-hs-overlay="#hs-pro-sidebar">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                            <path d="M15 3v18"></path>
                            <path d="m8 9 3 3-3 3"></path>
                        </svg>
                        <span class="sr-only">Sidebar Toggle</span>
                    </button>
                    <!-- End Sidebar Toggle -->
                </div>
                <!-- End Button Group -->

                <!-- Button Group -->
                <ul class="flex flex-row items-center gap-x-3 ms-auto">
                    <li class="hidden lg:inline-flex items-center gap-1.5 relative pe-3 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:inset-e-0 after:inline-block after:w-px after:h-3.5 after:bg-navbar-2-divider after:rounded-full after:-translate-y-1/2 after:rotate-12">
                        <button type="button" class="flex items-center gap-x-1.5 py-2 px-2.5 font-medium text-xs bg-navbar-2-nav-active text-surface-foreground rounded-lg hover:text-primary-hover focus:outline-hidden focus:text-primary-focus disabled:opacity-50 disabled:pointer-events-none">
                            <svg class="shrink-0 size-4 text-primary" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z" />
                            </svg>
                            Ask AI
                        </button>
                        <a class="flex items-center gap-x-1.5 py-1.5 px-2 text-sm text-navbar-2-nav-foreground rounded-lg hover:bg-navbar-2-nav-hover focus:outline-hidden focus:bg-navbar-2-nav-focus" href="#">
                            Docs
                        </a>
                        <a class="flex items-center gap-x-1.5 py-1.5 px-2 text-sm text-navbar-2-nav-foreground rounded-lg hover:bg-navbar-2-nav-hover focus:outline-hidden focus:bg-navbar-2-nav-focus" href="#">
                            API
                        </a>
                    </li>
                    <li class="inline-flex items-center gap-1.5 relative pe-3 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:inset-e-0 after:inline-block after:w-px after:h-3.5 after:bg-navbar-2-divider after:rounded-full after:-translate-y-1/2 after:rotate-12">
                        <button type="button" class="relative hidden lg:flex justify-center items-center gap-x-1.5 size-8 text-sm text-navbar-2-nav-foreground rounded-full hover:bg-navbar-2-nav-hover focus:outline-hidden focus:bg-navbar-2-nav-focus">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 7v14" />
                                <path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z" />
                            </svg>
                            <span class="sr-only">Knowledge Base</span>
                        </button>
                        <div class="h-8">
                            <!-- Account Dropdown -->
                            <div class="hs-dropdown inline-flex [--strategy:absolute] [--auto-close:inside] [--placement:bottom-right] relative text-start">
                                <button id="hs-dnad" type="button" class="p-0.5 inline-flex shrink-0 items-center gap-x-3 text-start text-navbar-nav-foreground rounded-full hover:bg-navbar-nav-hover focus:outline-hidden focus:bg-navbar-nav-focus" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                    <img class="shrink-0 size-7 rounded-full" src="https://secure.gravatar.com/avatar/ea815376d6b92c01e2ca24e0e8ed9a05e578acd3744194d6880aa3bbdf18de44?s=64&d=mm&r=g" alt="Avatar">
                                </button>
                                <!-- Account Dropdown -->
                                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-60 transition-[opacity,margin] duration opacity-0 hidden z-20 bg-dropdown border border-dropdown-line rounded-xl shadow-xl" role="menu" aria-orientation="vertical" aria-labelledby="hs-dnad">
                                    <div class="py-2 px-3.5">
                                        <template x-if="$store.auth.user">
                                            <span x-text="$store.auth.user.displayName" class="font-medium text-gray-800 dark:text-neutral-200">
                                                James Collison
                                            </span>
                                            <p x-text="$store.auth.user.email" class="text-sm text-gray-500 dark:text-neutral-400">
                                                jamescollison@site.com
                                            </p>
                                        </template>
                                        <div class="mt-1.5">
                                            <a class="flex justify-center items-center gap-x-1.5 py-2 px-2.5 font-medium text-[13px] bg-secondary text-secondary-foreground rounded-lg hover:bg-secondary-hover focus:outline-hidden focus:bg-secondary-focus disabled:opacity-50 disabled:pointer-events-none" href="#">
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path
                                                        d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z" />
                                                    <path d="M20 3v4" />
                                                    <path d="M22 5h-4" />
                                                    <path d="M4 17v2" />
                                                    <path d="M5 18H3" />
                                                </svg>
                                                Get Plus
                                            </a>
                                        </div>
                                    </div>
                                    <div class="px-4 py-2 border-t border-dropdown-divider grid gap-2">
                                        <!-- Switch Theme -->
                                        <div class="flex flex-wrap justify-between items-center gap-2">
                                            <span class="flex-1 cursor-pointer text-sm text-foreground">Theme</span>
                                            <div class="p-0.5 inline-flex cursor-pointer bg-surface rounded-full">
                                                <button type="button" class="size-7 flex justify-center items-center bg-layer shadow-sm text-layer-foreground rounded-full hs-auto-mode-active:bg-transparent hs-auto-mode-active:shadow-none hs-dark-mode-active:bg-transparent hs-dark-mode-active:shadow-none" data-hs-theme-click-value="default">
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <circle cx="12" cy="12" r="4" />
                                                        <path d="M12 3v1" />
                                                        <path d="M12 20v1" />
                                                        <path d="M3 12h1" />
                                                        <path d="M20 12h1" />
                                                        <path d="m18.364 5.636-.707.707" />
                                                        <path d="m6.343 17.657-.707.707" />
                                                        <path d="m5.636 5.636.707.707" />
                                                        <path d="m17.657 17.657.707.707" />
                                                    </svg>
                                                    <span class="sr-only">Default (Light)</span>
                                                </button>
                                                <button type="button" class="size-7 flex justify-center items-center text-layer-foreground rounded-full hs-dark-mode-active:bg-secondary-active hs-dark-mode-active:text-secondary-foreground hs-dark-mode-active:shadow-sm" data-hs-theme-click-value="dark">
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" />
                                                    </svg>
                                                    <span class="sr-only">Dark</span>
                                                </button>
                                                <button type="button" class="size-7 flex justify-center items-center text-layer-foreground rounded-full hs-auto-light-mode-active:bg-layer hs-auto-mode-active:shadow-sm" data-hs-theme-click-value="auto">
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <rect width="20" height="14" x="2" y="3" rx="2" />
                                                        <line x1="8" x2="16" y1="21" y2="21" />
                                                        <line x1="12" x2="12" y1="17" y2="21" />
                                                    </svg>
                                                    <span class="sr-only">Auto (System)</span>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Switch Theme -->

                                        <!-- Switch Language -->
                                        <div class="flex flex-wrap justify-between items-center gap-2">
                                            <span class="flex-1 cursor-pointer text-sm text-foreground">Language</span>
                                            <!-- Language Dropdown -->
                                            <div class="hs-dropdown [--strategy:absolute] [--placement:bottom-right] relative inline-flex">
                                                <button id="hs-pro-aimtlg" type="button"
                                                    class="flex justify-center items-center gap-x-3 size-9 text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-700 rounded-lg disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-700">
                                                    <svg class="shrink-0 size-4.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="m5 8 6 6" />
                                                        <path d="m4 14 6-6 2-3" />
                                                        <path d="M2 5h12" />
                                                        <path d="M7 2h1" />
                                                        <path d="m22 22-5-10-5 10" />
                                                        <path d="M14 18h6" />
                                                    </svg>
                                                    <span class="sr-only">Language</span>
                                                </button>

                                                <!-- Language Dropdown -->
                                                <div
                                                    class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-40 transition-[opacity,margin] duration opacity-0 hidden z-11 bg-white dark:bg-neutral-900 border border-transparent rounded-xl shadow-lg before:absolute before:-top-4 before:inset-s-0 before:w-full before:h-5"
                                                    role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-aimtlg">
                                                    <div class="p-1 space-y-0.5">
                                                        <button type="button"
                                                            class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                            English (US)
                                                        </button>
                                                        <button type="button"
                                                            class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                            English (UK)
                                                        </button>
                                                        <button type="button"
                                                            class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                            Deutsch
                                                        </button>
                                                        <button type="button"
                                                            class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                            Dansk
                                                        </button>
                                                        <button type="button"
                                                            class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                            Italiano
                                                        </button>
                                                        <button type="button"
                                                            class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-sm text-gray-800 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:focus:bg-neutral-800">
                                                            中文 (繁體)
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- End Language Dropdown -->
                                            </div>
                                            <!-- End Language Dropdown -->
                                        </div>
                                        <!-- End Switch Language -->
                                    </div>
                                    <div class="p-1 border-t border-dropdown-divider">
                                        <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-dropdown-item-foreground hover:bg-dropdown-item-hover disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-dropdown-item-focus" href="#">
                                            <svg class="shrink-0 mt-0.5 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                                <circle cx="12" cy="7" r="4" />
                                            </svg>
                                            Profile
                                        </a>
                                        <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-dropdown-item-foreground hover:bg-dropdown-item-hover disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-dropdown-item-focus" href="#">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                                                <circle cx="12" cy="12" r="3" />
                                            </svg>
                                            Settings
                                        </a>
                                        <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-dropdown-item-foreground hover:bg-dropdown-item-hover disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-dropdown-item-focus" href="#">
                                            <svg class="shrink-0 mt-0.5 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m16 17 5-5-5-5" />
                                                <path d="M21 12H9" />
                                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                            </svg>
                                            Log out
                                        </a>
                                    </div>
                                </div>
                                <!-- End Account Dropdown -->
                            </div>
                            <!-- End Account Dropdown -->
                        </div>
                    </li>
                </ul>

                <!-- End Button Group -->
            </nav>
        </header>
        <!-- ========== END HEADER ========== -->

        <!-- Hero Sections -->
    <!-- Simple centered -->
    <div class="md:ps-65 md:hs-overlay-minified:ps-13 absolute inset-x-0 top-0 z-40 bg-white dark:bg-gray-900">
        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div aria-hidden="true"
                class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
                <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                    class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75">
                </div>
            </div>
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div
                        class="relative rounded-full px-3 py-1 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 dark:text-gray-400 dark:ring-white/10 dark:hover:ring-white/20">
                        Announcing our next round of funding. <a href="#"
                            class="font-semibold text-indigo-600 dark:text-indigo-400"><span aria-hidden="true"
                                class="absolute inset-0"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
                <div class="text-center">
                    <h1
                        class="text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl dark:text-white">
                        Data to enrich your online business</h1>
                    <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8 dark:text-gray-400">Anim
                        aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt
                        amet fugiat veniam occaecat.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="#"
                            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:hover:bg-indigo-400 dark:focus-visible:outline-indigo-500">Get
                            started</a>
                        <a href="#" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Learn more <span
                                aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div>
            <div aria-hidden="true"
                class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
                <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                    class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75">
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Sections -->
    <!-- With product screenshot -->
    <div class="overflow-hidden bg-white py-24 sm:py-32 dark:bg-gray-900">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="lg:pt-4 lg:pr-8">
                    <div class="lg:max-w-lg">
                        <h2 class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">Deploy faster</h2>
                        <p
                            class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl dark:text-white">
                            A better workflow</p>
                        <p class="mt-6 text-lg/8 text-gray-700 dark:text-gray-300">Lorem ipsum, dolor sit amet
                            consectetur
                            adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate
                            blanditiis
                            ratione.
                        </p>
                        <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-600 lg:max-w-none dark:text-gray-400">
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900 dark:text-white">
                                    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                                        class="absolute top-1 left-1 size-5 text-indigo-600 dark:text-indigo-400">
                                        <path
                                            d="M5.5 17a4.5 4.5 0 0 1-1.44-8.765 4.5 4.5 0 0 1 8.302-3.046 3.5 3.5 0 0 1 4.504 4.272A4 4 0 0 1 15 17H5.5Zm3.75-2.75a.75.75 0 0 0 1.5 0V9.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0l-3.25 3.5a.75.75 0 1 0 1.1 1.02l1.95-2.1v4.59Z"
                                            clip-rule="evenodd" fill-rule="evenodd" />
                                    </svg>
                                    Push to deploy.
                                </dt>
                                <dd class="inline">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores
                                    impedit
                                    perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900 dark:text-white">
                                    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                                        class="absolute top-1 left-1 size-5 text-indigo-600 dark:text-indigo-400">
                                        <path
                                            d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z"
                                            clip-rule="evenodd" fill-rule="evenodd" />
                                    </svg>
                                    SSL certificates.
                                </dt>
                                <dd class="inline">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui
                                    lorem
                                    cupidatat
                                    commodo.</dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900 dark:text-white">
                                    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                                        class="absolute top-1 left-1 size-5 text-indigo-600 dark:text-indigo-400">
                                        <path
                                            d="M4.632 3.533A2 2 0 0 1 6.577 2h6.846a2 2 0 0 1 1.945 1.533l1.976 8.234A3.489 3.489 0 0 0 16 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234Z" />
                                        <path
                                            d="M4 13a2 2 0 1 0 0 4h12a2 2 0 1 0 0-4H4Zm11.24 2a.75.75 0 0 1 .75-.75H16a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V15Zm-2.25-.75a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75h-.01Z"
                                            clip-rule="evenodd" fill-rule="evenodd" />
                                    </svg>
                                    Database backups.
                                </dt>
                                <dd class="inline">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et
                                    magna
                                    sit morbi
                                    lobortis.</dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <img width="2432" height="1442"
                    src="https://tailwindcss.com/plus-assets/img/component-images/dark-project-app-screenshot.png"
                    alt="Product screenshot"
                    class="w-3xl max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 not-dark:hidden sm:w-228 md:-ml-4 lg:ml-0 dark:ring-white/10" />
                <img width="2432" height="1442"
                    src="https://tailwindcss.com/plus-assets/img/component-images/project-app-screenshot.png"
                    alt="Product screenshot"
                    class="w-3xl max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-228 md:-ml-4 lg:ml-0 dark:hidden dark:ring-white/10" />
            </div>
        </div>
    </div>

    <!-- Feature Sections -->
    <!-- Centered 2x2 grid -->
    <div class="bg-white py-24 sm:py-32 dark:bg-gray-900">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">Deploy faster</h2>
                <p
                    class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl lg:text-balance dark:text-white">
                    Everything you need to deploy your app</p>
                <p class="mt-6 text-lg/8 text-gray-700 dark:text-gray-300">Quis tellus eget adipiscing convallis sit sit
                    eget
                    aliquet quis. Suspendisse eget egestas a elementum pulvinar et feugiat blandit at. In mi viverra
                    elit nunc.
                </p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                    <div class="relative pl-16">
                        <dt class="text-base/7 font-semibold text-gray-900 dark:text-white">
                            <div
                                class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-indigo-600 dark:bg-indigo-500">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    data-slot="icon" aria-hidden="true" class="size-6 text-white">
                                    <path
                                        d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            Push to deploy
                        </dt>
                        <dd class="mt-2 text-base/7 text-gray-600 dark:text-gray-400">Morbi viverra dui mi arcu sed.
                            Tellus semper
                            adipiscing suspendisse semper morbi. Odio urna massa nunc massa.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base/7 font-semibold text-gray-900 dark:text-white">
                            <div
                                class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-indigo-600 dark:bg-indigo-500">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    data-slot="icon" aria-hidden="true" class="size-6 text-white">
                                    <path
                                        d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            SSL certificates
                        </dt>
                        <dd class="mt-2 text-base/7 text-gray-600 dark:text-gray-400">Sit quis amet rutrum tellus
                            ullamcorper
                            ultricies libero dolor eget. Sem sodales gravida quam turpis enim lacus amet.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base/7 font-semibold text-gray-900 dark:text-white">
                            <div
                                class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-indigo-600 dark:bg-indigo-500">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    data-slot="icon" aria-hidden="true" class="size-6 text-white">
                                    <path
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            Simple queues
                        </dt>
                        <dd class="mt-2 text-base/7 text-gray-600 dark:text-gray-400">Quisque est vel vulputate cursus.
                            Risus
                            proin diam nunc commodo. Lobortis auctor congue commodo diam neque.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base/7 font-semibold text-gray-900 dark:text-white">
                            <div
                                class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-indigo-600 dark:bg-indigo-500">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    data-slot="icon" aria-hidden="true" class="size-6 text-white">
                                    <path
                                        d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            Advanced security
                        </dt>
                        <dd class="mt-2 text-base/7 text-gray-600 dark:text-gray-400">Arcu egestas dolor vel iaculis in
                            ipsum
                            mauris. Tincidunt mattis aliquet hac quis. Id hac maecenas ac donec pharetra eget.</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <!-- CTA Sections -->
    <!-- Dark panel with app screenshot -->
    <div class="bg-white dark:bg-gray-900">
        <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
            <div
                class="relative isolate overflow-hidden bg-gray-900 px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0 dark:bg-gray-800 dark:shadow-none dark:after:pointer-events-none dark:after:absolute dark:after:inset-0 dark:after:inset-ring dark:after:inset-ring-white/10 dark:after:sm:rounded-3xl">
                <svg viewBox="0 0 1024 1024" aria-hidden="true"
                    class="absolute top-1/2 left-1/2 -z-10 size-256 -translate-y-1/2 mask-[radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0">
                    <circle r="512" cx="512" cy="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)"
                        fill-opacity="0.7" />
                    <defs>
                        <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
                            <stop stop-color="#7775D6" />
                            <stop offset="1" stop-color="#E935C1" />
                        </radialGradient>
                    </defs>
                </svg>
                <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
                    <h2 class="text-3xl font-semibold tracking-tight text-balance text-white sm:text-4xl">Boost your
                        productivity. Start using our app today.</h2>
                    <p class="mt-6 text-lg/8 text-pretty text-gray-300">Ac euismod vel sit maecenas id pellentesque eu
                        sed
                        consectetur. Malesuada adipiscing sagittis vel nulla.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
                        <a href="#"
                            class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-xs hover:bg-gray-100 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white dark:bg-gray-700 dark:text-white dark:shadow-none dark:inset-ring dark:inset-ring-white/5 dark:hover:bg-gray-600 dark:focus-visible:outline-white">
                            Get started </a>
                        <a href="#" class="text-sm/6 font-semibold text-white hover:text-gray-100">
                            Learn more
                            <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </div>
                <div class="relative mt-16 h-80 lg:mt-8">
                    <img width="1824" height="1080"
                        src="https://tailwindcss.com/plus-assets/img/component-images/dark-project-app-screenshot.png"
                        alt="App screenshot"
                        class="absolute top-0 left-0 w-228 max-w-none rounded-md bg-white/5 ring-1 ring-white/10" />
                </div>
            </div>
        </div>
    </div>

    <!-- Bento Grids -->
    <!-- Three column bento grid -->
    <div class="bg-gray-50 py-24 sm:py-32 dark:bg-gray-900">
        <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
            <h2 class="text-center text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">Deploy faster</h2>
            <p
                class="mx-auto mt-2 max-w-lg text-center text-4xl font-semibold tracking-tight text-balance text-gray-950 sm:text-5xl dark:text-white">
                Everything you need to deploy your app</p>
            <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
                <div class="relative lg:row-span-2">
                    <div class="absolute inset-px rounded-lg bg-white lg:rounded-l-4xl dark:bg-gray-800"></div>
                    <div
                        class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                        <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                            <p
                                class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center dark:text-white">
                                Mobile friendly</p>
                            <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center dark:text-gray-400">Anim
                                aute
                                id
                                magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</p>
                        </div>
                        <div class="@container relative min-h-120 w-full grow max-lg:mx-auto max-lg:max-w-sm">
                            <div
                                class="absolute inset-x-10 top-10 bottom-0 overflow-hidden rounded-t-[12cqw] border-x-[3cqw] border-t-[3cqw] border-gray-700 bg-gray-900 shadow-2xl dark:shadow-none dark:outline dark:outline-white/20">
                                <img src="https://tailwindcss.com/plus-assets/img/component-images/bento-03-mobile-friendly.png"
                                    alt="" class="size-full object-cover object-top" />
                            </div>
                        </div>
                    </div>
                    <div
                        class="pointer-events-none absolute inset-px rounded-lg shadow-sm outline outline-black/5 lg:rounded-l-4xl dark:outline-white/15">
                    </div>
                </div>
                <div class="relative max-lg:row-start-1">
                    <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-4xl dark:bg-gray-800"></div>
                    <div
                        class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                        <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                            <p
                                class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center dark:text-white">
                                Performance</p>
                            <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center dark:text-gray-400">Lorem
                                ipsum,
                                dolor sit amet consectetur adipisicing elit maiores impedit.</p>
                        </div>
                        <div
                            class="flex flex-1 items-center justify-center px-8 max-lg:pt-10 max-lg:pb-12 sm:px-10 lg:pb-2">
                            <img src="https://tailwindcss.com/plus-assets/img/component-images/bento-03-performance.png"
                                alt="" class="w-full max-lg:max-w-xs dark:hidden" />
                            <img src="https://tailwindcss.com/plus-assets/img/component-images/dark-bento-03-performance.png"
                                alt="" class="w-full not-dark:hidden max-lg:max-w-xs" />
                        </div>
                    </div>
                    <div
                        class="pointer-events-none absolute inset-px rounded-lg shadow-sm outline outline-black/5 max-lg:rounded-t-4xl dark:outline-white/15">
                    </div>
                </div>
                <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
                    <div class="absolute inset-px rounded-lg bg-white dark:bg-gray-800"></div>
                    <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)]">
                        <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                            <p
                                class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center dark:text-white">
                                Security</p>
                            <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center dark:text-gray-400">Morbi
                                viverra dui
                                mi arcu sed. Tellus semper adipiscing suspendisse semper morbi.</p>
                        </div>
                        <div class="@container flex flex-1 items-center max-lg:py-6 lg:pb-2">
                            <img src="https://tailwindcss.com/plus-assets/img/component-images/bento-03-security.png"
                                alt="" class="h-[min(152px,40cqw)] object-cover dark:hidden" />
                            <img src="https://tailwindcss.com/plus-assets/img/component-images/dark-bento-03-security.png"
                                alt="" class="h-[min(152px,40cqw)] object-cover not-dark:hidden" />
                        </div>
                    </div>
                    <div
                        class="pointer-events-none absolute inset-px rounded-lg shadow-sm outline outline-black/5 dark:outline-white/15">
                    </div>
                </div>
                <div class="relative lg:row-span-2">
                    <div
                        class="absolute inset-px rounded-lg bg-white max-lg:rounded-b-4xl lg:rounded-r-4xl dark:bg-gray-800">
                    </div>
                    <div
                        class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]">
                        <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                            <p
                                class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center dark:text-white">
                                Powerful APIs</p>
                            <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center dark:text-gray-400">Sit
                                quis
                                amet
                                rutrum tellus ullamcorper ultricies libero dolor eget sem sodales gravida.</p>
                        </div>
                        <div class="relative min-h-120 w-full grow">
                            <div
                                class="absolute top-10 right-0 bottom-0 left-10 overflow-hidden rounded-tl-xl bg-gray-900 shadow-2xl outline outline-white/10 dark:bg-gray-900/60 dark:shadow-none">
                                <div class="flex bg-gray-900 outline outline-white/5">
                                    <div class="-mb-px flex text-sm/6 font-medium text-gray-400">
                                        <div
                                            class="border-r border-b border-r-white/10 border-b-white/20 bg-white/5 px-4 py-2 text-white">
                                            NotificationSetting.jsx</div>
                                        <div class="border-r border-gray-600/10 px-4 py-2">App.jsx</div>
                                    </div>
                                </div>
                                <div class="px-6 pt-6 pb-14">
                                    <!-- Your code example -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="pointer-events-none absolute inset-px rounded-lg shadow-sm outline outline-black/5 max-lg:rounded-b-4xl lg:rounded-r-4xl dark:outline-white/15">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Sections -->
    <!-- Two tiers with emphasized right tier -->
    <div class="relative isolate bg-white px-6 py-24 sm:py-32 lg:px-8 dark:bg-gray-900">
        <div aria-hidden="true" class="absolute inset-x-0 -top-3 -z-10 transform-gpu overflow-hidden px-36 blur-3xl">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                class="mx-auto aspect-1155/678 w-288.75 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 dark:opacity-20">
            </div>
        </div>
        <div class="mx-auto max-w-4xl text-center">
            <h2 class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">Pricing</h2>
            <p
                class="mt-2 text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-6xl dark:text-white">
                Choose the right plan for you</p>
        </div>
        <p
            class="mx-auto mt-6 max-w-2xl text-center text-lg font-medium text-pretty text-gray-600 sm:text-xl/8 dark:text-gray-400">
            Choose an affordable plan that’s packed with the best features for engaging your audience, creating customer
            loyalty, and driving sales.</p>
        <div
            class="mx-auto mt-16 grid max-w-lg grid-cols-1 items-center gap-y-6 sm:mt-20 sm:gap-y-0 lg:max-w-4xl lg:grid-cols-2">
            <div
                class="rounded-3xl rounded-t-3xl bg-white/60 p-8 ring-1 ring-gray-900/10 sm:mx-8 sm:rounded-b-none sm:p-10 lg:mx-0 lg:rounded-tr-none lg:rounded-bl-3xl dark:bg-white/2.5 dark:ring-white/10">
                <h3 id="tier-hobby" class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">Hobby</h3>
                <p class="mt-4 flex items-baseline gap-x-2">
                    <span class="text-5xl font-semibold tracking-tight text-gray-900 dark:text-white">$29</span>
                    <span class="text-base text-gray-500 dark:text-gray-400">/month</span>
                </p>
                <p class="mt-6 text-base/7 text-gray-600 dark:text-gray-300">The perfect plan if you&#039;re just
                    getting
                    started with our product.</p>
                <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-600 sm:mt-10 dark:text-gray-300">
                    <li class="flex gap-x-3">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-6 w-5 flex-none text-indigo-600 dark:text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        25 products
                    </li>
                    <li class="flex gap-x-3">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-6 w-5 flex-none text-indigo-600 dark:text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Up to 10,000 subscribers
                    </li>
                    <li class="flex gap-x-3">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-6 w-5 flex-none text-indigo-600 dark:text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Advanced analytics
                    </li>
                    <li class="flex gap-x-3">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-6 w-5 flex-none text-indigo-600 dark:text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        24-hour support response time
                    </li>
                </ul>
                <a href="#" aria-describedby="tier-hobby"
                    class="mt-8 block rounded-md px-3.5 py-2.5 text-center text-sm font-semibold text-indigo-600 inset-ring inset-ring-indigo-200 hover:inset-ring-indigo-300 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:mt-10 dark:bg-white/10 dark:text-white dark:inset-ring-white/5 dark:hover:bg-white/20 dark:hover:inset-ring-white/5 dark:focus-visible:outline-white/75">Get
                    started today</a>
            </div>
            <div
                class="relative rounded-3xl bg-gray-900 p-8 shadow-2xl ring-1 ring-gray-900/10 sm:p-10 dark:bg-gray-800 dark:shadow-none dark:ring-white/10">
                <h3 id="tier-enterprise" class="text-base/7 font-semibold text-indigo-400">Enterprise</h3>
                <p class="mt-4 flex items-baseline gap-x-2">
                    <span class="text-5xl font-semibold tracking-tight text-white">$99</span>
                    <span class="text-base text-gray-400">/month</span>
                </p>
                <p class="mt-6 text-base/7 text-gray-300">Dedicated support and infrastructure for your company.</p>
                <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-300 sm:mt-10">
                    <li class="flex gap-x-3">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-6 w-5 flex-none text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Unlimited products
                    </li>
                    <li class="flex gap-x-3">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-6 w-5 flex-none text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Unlimited subscribers
                    </li>
                    <li class="flex gap-x-3">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-6 w-5 flex-none text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Advanced analytics
                    </li>
                    <li class="flex gap-x-3">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-6 w-5 flex-none text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Dedicated support representative
                    </li>
                    <li class="flex gap-x-3">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-6 w-5 flex-none text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Marketing automations
                    </li>
                    <li class="flex gap-x-3">
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="h-6 w-5 flex-none text-indigo-400">
                            <path
                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                        Custom integrations
                    </li>
                </ul>
                <a href="#" aria-describedby="tier-enterprise"
                    class="mt-8 block rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 sm:mt-10 dark:shadow-none">Get
                    started today</a>
            </div>
        </div>
    </div>

    <!-- Hero Sections -->
    <!-- With stats -->
    <div class="relative isolate overflow-hidden bg-white py-24 sm:py-32 dark:bg-gray-900">
        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=screen"
            alt=""
            class="absolute inset-0 -z-10 size-full object-cover object-right opacity-10 md:object-center dark:hidden" />
        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply"
            alt=""
            class="absolute inset-0 -z-10 size-full object-cover object-right not-dark:hidden md:object-center" />
        <div aria-hidden="true"
            class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                class="aspect-1097/845 w-274.25 bg-linear-to-tr from-[#ff4694] to-[#776fff] opacity-15 dark:opacity-20">
            </div>
        </div>
        <div aria-hidden="true"
            class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:-top-112 sm:ml-16 sm:translate-x-0">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                class="aspect-1097/845 w-274.25 bg-linear-to-tr from-[#ff4694] to-[#776fff] opacity-15 dark:opacity-20">
            </div>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl dark:text-white">Work with us
                </h2>
                <p class="mt-8 text-lg font-medium text-pretty text-gray-700 sm:text-xl/8 dark:text-gray-300">Anim aute
                    id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet
                    fugiat veniam occaecat fugiat.</p>
            </div>
            <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
                <div
                    class="grid grid-cols-1 gap-x-8 gap-y-6 text-base/7 font-semibold text-gray-900 sm:grid-cols-2 md:flex lg:gap-x-10 dark:text-white">
                    <a href="#">Open roles <span aria-hidden="true">&rarr;</span></a>
                    <a href="#">Internship program <span aria-hidden="true">&rarr;</span></a>
                    <a href="#">Our values <span aria-hidden="true">&rarr;</span></a>
                    <a href="#">Meet our leadership <span aria-hidden="true">&rarr;</span></a>
                </div>
                <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="flex flex-col-reverse gap-1">
                        <dt class="text-base/7 text-gray-700 dark:text-gray-300">Offices worldwide</dt>
                        <dd class="text-4xl font-semibold tracking-tight text-gray-900 dark:text-white">12</dd>
                    </div>
                    <div class="flex flex-col-reverse gap-1">
                        <dt class="text-base/7 text-gray-700 dark:text-gray-300">Full-time colleagues</dt>
                        <dd class="text-4xl font-semibold tracking-tight text-gray-900 dark:text-white">300+</dd>
                    </div>
                    <div class="flex flex-col-reverse gap-1">
                        <dt class="text-base/7 text-gray-700 dark:text-gray-300">Hours per week</dt>
                        <dd class="text-4xl font-semibold tracking-tight text-gray-900 dark:text-white">40</dd>
                    </div>
                    <div class="flex flex-col-reverse gap-1">
                        <dt class="text-base/7 text-gray-700 dark:text-gray-300">Paid time off</dt>
                        <dd class="text-4xl font-semibold tracking-tight text-gray-900 dark:text-white">Unlimited</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>


    <!-- Newsletter Sections -->
    <!-- Side-by-side with details -->
    <div class="relative isolate overflow-hidden bg-white py-16 sm:py-24 lg:py-32 dark:bg-gray-900">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
                <div class="max-w-xl lg:max-w-lg">
                    <h2 class="text-4xl font-semibold tracking-tight text-gray-900 dark:text-white">Subscribe to our
                        newsletter
                    </h2>
                    <p class="mt-4 text-lg text-gray-600 dark:text-gray-300">Nostrud amet eu ullamco nisi aute in ad
                        minim
                        nostrud adipisicing velit quis. Duis tempor incididunt dolore.</p>
                    <div class="mt-6 flex max-w-md gap-x-4">
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" type="email" name="email" required placeholder="Enter your email"
                            autocomplete="email"
                            class="min-w-0 flex-auto rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:focus:outline-indigo-500" />
                        <button type="submit"
                            class="flex-none rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:hover:bg-indigo-400 dark:focus-visible:outline-indigo-500">Subscribe</button>
                    </div>
                </div>
                <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
                    <div class="flex flex-col items-start">
                        <div class="rounded-md bg-white/50 p-2 ring-1 ring-gray-200 dark:bg-white/5 dark:ring-white/10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-gray-600 dark:text-white">
                                <path
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <dt class="mt-4 text-base font-semibold text-gray-900 dark:text-white">Weekly articles</dt>
                        <dd class="mt-2 text-base/7 text-gray-600 dark:text-gray-400">Non laboris consequat cupidatat
                            laborum
                            magna. Eiusmod non irure cupidatat duis commodo amet.</dd>
                    </div>
                    <div class="flex flex-col items-start">
                        <div class="rounded-md bg-white/50 p-2 ring-1 ring-gray-200 dark:bg-white/5 dark:ring-white/10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6 text-gray-600 dark:text-white">
                                <path
                                    d="M10.05 4.575a1.575 1.575 0 1 0-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 0 1 3.15 0v1.5m-3.15 0 .075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 0 1 3.15 0V15M6.9 7.575a1.575 1.575 0 1 0-3.15 0v8.175a6.75 6.75 0 0 0 6.75 6.75h2.018a5.25 5.25 0 0 0 3.712-1.538l1.732-1.732a5.25 5.25 0 0 0 1.538-3.712l.003-2.024a.668.668 0 0 1 .198-.471 1.575 1.575 0 1 0-2.228-2.228 3.818 3.818 0 0 0-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0 1 16.35 15m.002 0h-.002"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <dt class="mt-4 text-base font-semibold text-gray-900 dark:text-white">No spam</dt>
                        <dd class="mt-2 text-base/7 text-gray-600 dark:text-gray-400">Officia excepteur ullamco ut sint
                            duis
                            proident non adipisicing. Voluptate incididunt anim.</dd>
                    </div>
                </dl>
            </div>
        </div>
        <div aria-hidden="true" class="absolute top-0 left-1/2 -z-10 -translate-x-1/2 blur-3xl xl:-top-6">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                class="aspect-1155/678 w-288.75 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 dark:opacity-30">
            </div>
        </div>
    </div>

    <!-- Stats -->
    <!-- Simple -->
    <div class="bg-white py-24 sm:py-32 dark:bg-gray-900">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dt class="text-base/7 text-gray-600 dark:text-gray-400">Transactions every 24 hours</dt>
                    <dd
                        class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl dark:text-white">
                        44
                        million</dd>
                </div>
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dt class="text-base/7 text-gray-600 dark:text-gray-400">Assets under holding</dt>
                    <dd
                        class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl dark:text-white">
                        $119
                        trillion</dd>
                </div>
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dt class="text-base/7 text-gray-600 dark:text-gray-400">New users annually</dt>
                    <dd
                        class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl dark:text-white">
                        46,000</dd>
                </div>
            </dl>
        </div>
    </div>

    <!-- Testimonials -->
    <!-- Simple centered -->
    <section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8 dark:bg-gray-900">
        <div
            class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,var(--color-indigo-100),white)] opacity-20 dark:bg-[radial-gradient(45rem_50rem_at_top,var(--color-indigo-500),transparent)] dark:opacity-10">
        </div>
        <div
            class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl ring-1 shadow-indigo-600/10 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center dark:bg-gray-900 dark:shadow-indigo-500/5 dark:ring-white/5">
        </div>
        <div class="mx-auto max-w-2xl lg:max-w-4xl">
            <img src="https://tailwindcss.com/plus-assets/img/logos/workcation-logo-indigo-600.svg" alt=""
                class="mx-auto h-12 dark:hidden" />
            <img src="https://tailwindcss.com/plus-assets/img/logos/workcation-logo-indigo-400.svg" alt=""
                class="mx-auto h-12 not-dark:hidden" />
            <figure class="mt-10">
                <blockquote class="text-center text-xl/8 font-semibold text-gray-900 sm:text-2xl/9 dark:text-white">
                    <p>“Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa sapiente
                        alias
                        molestiae. Numquam corrupti in laborum sed rerum et corporis.”</p>
                </blockquote>
                <figcaption class="mt-10">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="" class="mx-auto size-10 rounded-full" />
                    <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                        <div class="font-semibold text-gray-900 dark:text-white">Judith Black</div>
                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true"
                            class="fill-gray-900 dark:fill-white">
                            <circle r="1" cx="1" cy="1" />
                        </svg>
                        <div class="text-gray-600 dark:text-gray-400">CEO of Workcation</div>
                    </div>
                </figcaption>
            </figure>
        </div>
    </section>

    <!-- Blog Sections -->
    <!-- Three-column -->
    <div class="bg-white py-24 sm:py-32 dark:bg-gray-900">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl dark:text-white">
                    From
                    the blog</h2>
                <p class="mt-2 text-lg/8 text-gray-600 dark:text-gray-300">Learn how to grow your business with our
                    expert
                    advice.</p>
            </div>
            <div
                class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3 dark:border-gray-700">
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-03-16" class="text-gray-500 dark:text-gray-400">Mar 16, 2020</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100 dark:bg-gray-800/60 dark:text-gray-300 dark:hover:bg-gray-800">Marketing</a>
                    </div>
                    <div class="group relative grow">
                        <h3
                            class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600 dark:text-white dark:group-hover:text-gray-300">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Boost your conversion rate
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600 dark:text-gray-400">Illo sint voluptas.
                            Error
                            voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus
                            unde.
                            Sed
                            exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4 justify-self-end">
                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="size-10 rounded-full bg-gray-50 dark:bg-gray-800" />
                        <div class="text-sm/6">
                            <p class="font-semibold text-gray-900 dark:text-white">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Michael Foster
                                </a>
                            </p>
                            <p class="text-gray-600 dark:text-gray-400">Co-Founder / CTO</p>
                        </div>
                    </div>
                </article>
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-03-10" class="text-gray-500 dark:text-gray-400">Mar 10, 2020</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100 dark:bg-gray-800/60 dark:text-gray-300 dark:hover:bg-gray-800">Sales</a>
                    </div>
                    <div class="group relative grow">
                        <h3
                            class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600 dark:text-white dark:group-hover:text-gray-300">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                How to use search engine optimization to drive sales
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600 dark:text-gray-400">Optio cum necessitatibus
                            dolor
                            voluptatum provident commodi et. Qui aperiam fugiat nemo cumque.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4 justify-self-end">
                        <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="size-10 rounded-full bg-gray-50 dark:bg-gray-800" />
                        <div class="text-sm/6">
                            <p class="font-semibold text-gray-900 dark:text-white">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Lindsay Walton
                                </a>
                            </p>
                            <p class="text-gray-600 dark:text-gray-400">Front-end Developer</p>
                        </div>
                    </div>
                </article>
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-02-12" class="text-gray-500 dark:text-gray-400">Feb 12, 2020</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100 dark:bg-gray-800/60 dark:text-gray-300 dark:hover:bg-gray-800">Business</a>
                    </div>
                    <div class="group relative grow">
                        <h3
                            class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600 dark:text-white dark:group-hover:text-gray-300">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Improve your customer experience
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600 dark:text-gray-400">Cupiditate maiores ullam
                            eveniet
                            adipisci in doloribus nulla minus. Voluptas iusto libero adipisci rem et corporis. Nostrud
                            sint
                            anim
                            sunt aliqua. Nulla eu labore irure incididunt velit cillum quis magna dolore.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4 justify-self-end">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="size-10 rounded-full bg-gray-50 dark:bg-gray-800" />
                        <div class="text-sm/6">
                            <p class="font-semibold text-gray-900 dark:text-white">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Tom Cook
                                </a>
                            </p>
                            <p class="text-gray-600 dark:text-gray-400">Director of Product</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <!-- Contact Sections -->
    <!-- Centered -->
    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8 dark:bg-gray-900">
        <div aria-hidden="true"
            class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                class="relative left-1/2 -z-10 aspect-1155/678 w-144.5 max-w-none -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-288.75 dark:opacity-20">
            </div>
        </div>
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl dark:text-white">
                Contact
                sales</h2>
            <p class="mt-2 text-lg/8 text-gray-600 dark:text-gray-400">Aute magna irure deserunt veniam aliqua magna
                enim
                voluptate.</p>
        </div>
        <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                    <label for="first-name" class="block text-sm/6 font-semibold text-gray-900 dark:text-white">First
                        name</label>
                    <div class="mt-2.5">
                        <input id="first-name" type="text" name="first-name" autocomplete="given-name"
                            class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:placeholder:text-gray-500 dark:focus:outline-indigo-500" />
                    </div>
                </div>
                <div>
                    <label for="last-name" class="block text-sm/6 font-semibold text-gray-900 dark:text-white">Last
                        name</label>
                    <div class="mt-2.5">
                        <input id="last-name" type="text" name="last-name" autocomplete="family-name"
                            class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:placeholder:text-gray-500 dark:focus:outline-indigo-500" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="company"
                        class="block text-sm/6 font-semibold text-gray-900 dark:text-white">Company</label>
                    <div class="mt-2.5">
                        <input id="company" type="text" name="company" autocomplete="organization"
                            class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:placeholder:text-gray-500 dark:focus:outline-indigo-500" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm/6 font-semibold text-gray-900 dark:text-white">Email</label>
                    <div class="mt-2.5">
                        <input id="email" type="email" name="email" autocomplete="email"
                            class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:placeholder:text-gray-500 dark:focus:outline-indigo-500" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="phone-number" class="block text-sm/6 font-semibold text-gray-900 dark:text-white">Phone
                        number</label>
                    <div class="mt-2.5">
                        <div
                            class="flex rounded-md bg-white outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600 dark:bg-white/5 dark:outline-white/10 dark:has-[input:focus-within]:outline-indigo-500">
                            <div class="grid shrink-0 grid-cols-1 focus-within:relative">
                                <select id="country" name="country" autocomplete="country" aria-label="Country"
                                    class="col-start-1 row-start-1 w-full appearance-none rounded-md py-2 pr-7 pl-3.5 text-base text-gray-500 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 dark:bg-transparent dark:text-gray-400 dark:placeholder:text-gray-500 dark:focus:outline-indigo-500">
                                    <option>US</option>
                                    <option>CA</option>
                                    <option>EU</option>
                                </select>
                                <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true"
                                    class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4 dark:text-gray-400">
                                    <path
                                        d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" fill-rule="evenodd" />
                                </svg>
                            </div>
                            <input id="phone-number" type="text" name="phone-number" placeholder="123-456-7890"
                                class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 dark:bg-transparent dark:text-white dark:placeholder:text-gray-500" />
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="message"
                        class="block text-sm/6 font-semibold text-gray-900 dark:text-white">Message</label>
                    <div class="mt-2.5">
                        <textarea id="message" name="message" rows="4"
                            class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:placeholder:text-gray-500 dark:focus:outline-indigo-500"></textarea>
                    </div>
                </div>
                <div class="flex gap-x-4 sm:col-span-2">
                    <div class="flex h-6 items-center">
                        <div
                            class="group relative inline-flex w-8 shrink-0 rounded-full bg-gray-200 p-px inset-ring inset-ring-gray-900/5 outline-offset-2 outline-indigo-600 transition-colors duration-200 ease-in-out has-checked:bg-indigo-600 has-focus-visible:outline-2 dark:bg-white/5 dark:inset-ring-white/10 dark:outline-indigo-500 dark:has-checked:bg-indigo-500">
                            <span
                                class="size-4 rounded-full bg-white shadow-xs ring-1 ring-gray-900/5 transition-transform duration-200 ease-in-out group-has-checked:translate-x-3.5"></span>
                            <input id="agree-to-policies" type="checkbox" name="agree-to-policies"
                                aria-label="Agree to policies"
                                class="absolute inset-0 size-full appearance-none focus:outline-hidden" />
                        </div>
                    </div>
                    <label for="agree-to-policies" class="text-sm/6 text-gray-600 dark:text-gray-400">
                        By selecting this, you agree to our
                        <a href="#" class="font-semibold whitespace-nowrap text-indigo-600 dark:text-indigo-400">privacy
                            policy</a>.
                    </label>
                </div>
            </div>
            <div class="mt-10">
                <button type="submit"
                    class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:hover:bg-indigo-400 dark:focus-visible:outline-indigo-500">Let's
                    talk</button>
            </div>
        </form>
    </div>

    <!-- Team Sections -->
    <!-- With small images -->
    <div class="bg-white py-24 sm:py-32 dark:bg-gray-900">
        <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
            <div class="max-w-xl">
                <h2 class="text-3xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-4xl dark:text-white">
                    Meet
                    our leadership</h2>
                <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-400">We’re a dynamic group of individuals who are
                    passionate about what we do and dedicated to delivering the best results for our clients.</p>
            </div>
            <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                <li>
                    <div class="flex items-center gap-x-6">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt=""
                            class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5 dark:outline-white/10" />
                        <div>
                            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900 dark:text-white">Leslie
                                Alexander</h3>
                            <p class="text-sm/6 font-semibold text-indigo-600 dark:text-indigo-400">Co-Founder / CEO</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt=""
                            class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5 dark:outline-white/10" />
                        <div>
                            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900 dark:text-white">Michael
                                Foster</h3>
                            <p class="text-sm/6 font-semibold text-indigo-600 dark:text-indigo-400">Co-Founder / CTO</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt=""
                            class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5 dark:outline-white/10" />
                        <div>
                            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900 dark:text-white">Dries
                                Vincent
                            </h3>
                            <p class="text-sm/6 font-semibold text-indigo-600 dark:text-indigo-400">Business Relations
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt=""
                            class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5 dark:outline-white/10" />
                        <div>
                            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900 dark:text-white">Lindsay
                                Walton</h3>
                            <p class="text-sm/6 font-semibold text-indigo-600 dark:text-indigo-400">Front-end Developer
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt=""
                            class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5 dark:outline-white/10" />
                        <div>
                            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900 dark:text-white">Courtney
                                Henry</h3>
                            <p class="text-sm/6 font-semibold text-indigo-600 dark:text-indigo-400">Designer</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt=""
                            class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5 dark:outline-white/10" />
                        <div>
                            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900 dark:text-white">Tom Cook
                            </h3>
                            <p class="text-sm/6 font-semibold text-indigo-600 dark:text-indigo-400">Director of Product
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Content Sections -->
    <!-- With sticky product screenshot -->
    <div
        class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0 dark:bg-gray-900">
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <svg aria-hidden="true"
                class="absolute top-0 left-[max(50%,25rem)] h-256 w-512 -translate-x-1/2 mask-[radial-gradient(64rem_64rem_at_top,white,transparent)] stroke-gray-200 dark:stroke-gray-800">
                <defs>
                    <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1"
                        patternUnits="userSpaceOnUse">
                        <path d="M100 200V.5M.5 .5H200" fill="none" />
                    </pattern>
                </defs>
                <svg x="50%" y="-1" class="overflow-visible fill-gray-50 dark:fill-gray-800/50">
                    <path
                        d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z"
                        stroke-width="0" />
                </svg>
                <rect width="100%" height="100%" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" stroke-width="0" />
            </svg>
        </div>
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
            <div
                class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <div class="lg:pr-4">
                    <div class="lg:max-w-lg">
                        <p class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">Deploy faster</p>
                        <h1
                            class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl dark:text-white">
                            A better workflow</h1>
                        <p class="mt-6 text-xl/8 text-gray-700 dark:text-gray-300">Aliquet nec orci mattis amet quisque
                            ullamcorper neque, nibh sem. At arcu, sit dui mi, nibh dui, diam eget aliquam. Quisque id at
                            vitae
                            feugiat egestas.</p>
                    </div>
                </div>
            </div>
            <div
                class="-mt-12 -ml-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
                <img src="https://tailwindcss.com/plus-assets/img/component-images/dark-project-app-screenshot.png"
                    alt=""
                    class="w-3xl max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-228 dark:bg-gray-800 dark:ring-white/10" />
            </div>
            <div
                class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <div class="lg:pr-4">
                    <div class="max-w-xl text-base/7 text-gray-600 lg:max-w-lg dark:text-gray-400">
                        <p>Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis mauris semper
                            sed
                            amet
                            vitae sed turpis id. Id dolor praesent donec est. Odio penatibus risus viverra tellus varius
                            sit
                            neque
                            erat velit. Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis
                            mauris
                            semper sed amet vitae sed turpis id.</p>
                        <ul role="list" class="mt-8 space-y-8 text-gray-600 dark:text-gray-400">
                            <li class="flex gap-x-3">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                                    class="mt-1 size-5 flex-none text-indigo-600 dark:text-indigo-400">
                                    <path
                                        d="M5.5 17a4.5 4.5 0 0 1-1.44-8.765 4.5 4.5 0 0 1 8.302-3.046 3.5 3.5 0 0 1 4.504 4.272A4 4 0 0 1 15 17H5.5Zm3.75-2.75a.75.75 0 0 0 1.5 0V9.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0l-3.25 3.5a.75.75 0 1 0 1.1 1.02l1.95-2.1v4.59Z"
                                        clip-rule="evenodd" fill-rule="evenodd" />
                                </svg>
                                <span><strong class="font-semibold text-gray-900 dark:text-white">Push to
                                        deploy.</strong>
                                    Lorem
                                    ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis
                                    suscipit
                                    eaque, iste
                                    dolor cupiditate blanditiis ratione.</span>
                            </li>
                            <li class="flex gap-x-3">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                                    class="mt-1 size-5 flex-none text-indigo-600 dark:text-indigo-400">
                                    <path
                                        d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z"
                                        clip-rule="evenodd" fill-rule="evenodd" />
                                </svg>
                                <span><strong class="font-semibold text-gray-900 dark:text-white">SSL
                                        certificates.</strong>
                                    Anim aute
                                    id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat
                                    commodo.</span>
                            </li>
                            <li class="flex gap-x-3">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                                    class="mt-1 size-5 flex-none text-indigo-600 dark:text-indigo-400">
                                    <path
                                        d="M4.632 3.533A2 2 0 0 1 6.577 2h6.846a2 2 0 0 1 1.945 1.533l1.976 8.234A3.489 3.489 0 0 0 16 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234Z" />
                                    <path
                                        d="M4 13a2 2 0 1 0 0 4h12a2 2 0 1 0 0-4H4Zm11.24 2a.75.75 0 0 1 .75-.75H16a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V15Zm-2.25-.75a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75h-.01Z"
                                        clip-rule="evenodd" fill-rule="evenodd" />
                                </svg>
                                <span><strong class="font-semibold text-gray-900 dark:text-white">Database
                                        backups.</strong>
                                    Ac
                                    tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi
                                    lobortis.</span>
                            </li>
                        </ul>
                        <p class="mt-8">Et vitae blandit facilisi magna lacus commodo. Vitae sapien duis odio id et. Id
                            blandit
                            molestie auctor fermentum dignissim. Lacus diam tincidunt ac cursus in vel. Mauris varius
                            vulputate et
                            ultrices hac adipiscing egestas. Iaculis convallis ac tempor et ut. Ac lorem vel integer
                            orci.
                        </p>
                        <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">No server? No
                            problem.
                        </h2>
                        <p class="mt-6">Id orci tellus laoreet id ac. Dolor, aenean leo, ac etiam consequat in.
                            Convallis
                            arcu
                            ipsum urna nibh. Pharetra, euismod vitae interdum mauris enim, consequat vulputate nibh.
                            Maecenas
                            pellentesque id sed tellus mauris, ultrices mauris. Tincidunt enim cursus ridiculus mi.
                            Pellentesque nam
                            sed nullam sed diam turpis ipsum eu a sed convallis diam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logo Clouds -->
    <!-- Simple with heading -->
    <div class="bg-white py-24 sm:py-32 dark:bg-gray-900">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2 class="text-center text-lg/8 font-semibold text-gray-900 dark:text-white">Trusted by the world’s most
                innovative teams</h2>
            <div
                class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                <img width="158" height="48"
                    src="https://tailwindcss.com/plus-assets/img/logos/158x48/transistor-logo-gray-900.svg"
                    alt="Transistor" class="col-span-2 max-h-12 w-full object-contain lg:col-span-1 dark:hidden" />
                <img width="158" height="48"
                    src="https://tailwindcss.com/plus-assets/img/logos/158x48/transistor-logo-white.svg"
                    alt="Transistor" class="col-span-2 max-h-12 w-full object-contain not-dark:hidden lg:col-span-1" />

                <img width="158" height="48"
                    src="https://tailwindcss.com/plus-assets/img/logos/158x48/reform-logo-gray-900.svg" alt="Reform"
                    class="col-span-2 max-h-12 w-full object-contain lg:col-span-1 dark:hidden" />
                <img width="158" height="48"
                    src="https://tailwindcss.com/plus-assets/img/logos/158x48/reform-logo-white.svg" alt="Reform"
                    class="col-span-2 max-h-12 w-full object-contain not-dark:hidden lg:col-span-1" />

                <img width="158" height="48"
                    src="https://tailwindcss.com/plus-assets/img/logos/158x48/tuple-logo-gray-900.svg" alt="Tuple"
                    class="col-span-2 max-h-12 w-full object-contain lg:col-span-1 dark:hidden" />
                <img width="158" height="48"
                    src="https://tailwindcss.com/plus-assets/img/logos/158x48/tuple-logo-white.svg" alt="Tuple"
                    class="col-span-2 max-h-12 w-full object-contain not-dark:hidden lg:col-span-1" />

                <img width="158" height="48"
                    src="https://tailwindcss.com/plus-assets/img/logos/158x48/savvycal-logo-gray-900.svg" alt="SavvyCal"
                    class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1 dark:hidden" />
                <img width="158" height="48"
                    src="https://tailwindcss.com/plus-assets/img/logos/158x48/savvycal-logo-white.svg" alt="SavvyCal"
                    class="col-span-2 max-h-12 w-full object-contain not-dark:hidden sm:col-start-2 lg:col-span-1" />

                <img width="158" height="48"
                    src="https://tailwindcss.com/plus-assets/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic"
                    class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1 dark:hidden" />
                <img width="158" height="48"
                    src="https://tailwindcss.com/plus-assets/img/logos/158x48/statamic-logo-white.svg" alt="Statamic"
                    class="col-span-2 col-start-2 max-h-12 w-full object-contain not-dark:hidden sm:col-start-auto lg:col-span-1" />
            </div>
        </div>
    </div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <script type="module" src="<?php echo PLUGIN_URL ?>inc/build/js/main.js"></script>
    <script type="module" src="<?php echo PLUGIN_URL ?>inc/build/js/server.js"></script>
</body>

</html>