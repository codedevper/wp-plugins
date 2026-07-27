<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo PLUGIN_URL ?>inc/build/assets/css/main.css" rel="stylesheet">
    <meta name="csrf-token" content="<?php echo wp_create_nonce('wp_rest') ?>">
</head>

<body>
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