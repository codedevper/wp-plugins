<!doctype html>
<html x-data>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo PLUGIN_URL ?>inc/build/assets/css/main.css" rel="stylesheet">
    <meta name="csrf-token" content="<?php echo wp_create_nonce('wp_rest') ?>">
</head>

<body>
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>

    <div x-data="dropdown">
        <button @click="toggle">...</button>

        <div x-show="open">...</div>
    </div>

    <span x-data="{ enabled: false }">
        <button @click.prevent="enabled = !enabled">Toggle</button>

        <template x-if="enabled">
            <span x-data="timer" x-text="counter"></span>
        </template>
    </span>

    <div x-data :class="$store.darkMode.on && 'bg-black'">...</div>

    <button x-data @click="$store.darkMode.toggle()">Toggle Dark Mode</button>

    <div x-data="$store.auth.toggle()">
        <template x-if="$store.auth.user">
            <h1 x-data="{ message: `I ❤️ ${$store.auth.user.name}` }" x-text="message" class="text-3xl font-bold underline">
                Hello world!
            </h1>
        </template>
        <template x-if="!$store.auth.user">
            <h1 x-data="{ message: `Loading...` }" x-text="message" class="text-3xl font-bold underline">
                Hello world!
            </h1>
        </template>
    </div>

    <script type="module" src="<?php echo PLUGIN_URL ?>inc/build/js/main.js"></script>
    <script type="module" src="<?php echo PLUGIN_URL ?>inc/build/js/index.js"></script>
</body>

</html>