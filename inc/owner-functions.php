<?

add_action('init', function () {
    $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

    if ($path === 'icons.svg') {

        $file = plugin_dir_path(__FILE__) . 'build/icons.svg';

        if (!file_exists($file)) {
            status_header(404);
            exit;
        }

        status_header(200);
        header('Content-Type: image/svg+xml');
        header('Content-Length: ' . filesize($file));

        readfile($file);
        exit;
    }
}, 0);

add_action('init', function () {
    $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

    if ($path === 'owner') {
        status_header(200);
        header('Content-Type: text/html; charset=UTF-8');

        require plugin_dir_path(__FILE__) . 'views/owner/index.php';
        exit;
    }
}, 0);

add_action('init', function () {
    $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

    if ($path === 'owner/upgrade') {
        status_header(200);
        header('Content-Type: text/html; charset=UTF-8');

        require plugin_dir_path(__FILE__) . 'views/owner/upgrade/index.php';
        exit;
    }
}, 0);

add_action('init', function () {
    $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

    if ($path === 'owner/upgrade/pricing') {
        status_header(200);
        header('Content-Type: text/html; charset=UTF-8');

        require plugin_dir_path(__FILE__) . 'views/owner/upgrade/pricing.php';
        exit;
    }
}, 0);
