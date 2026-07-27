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

    if ($path === 'server') {
        status_header(200);
        header('Content-Type: text/html; charset=UTF-8');

        require plugin_dir_path(__FILE__) . 'views/server/index.php';
        exit;
    }
}, 0);

add_action('init', function () {
    $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

    if ($path === 'server/dashboard') {
        status_header(200);
        header('Content-Type: text/html; charset=UTF-8');

        require plugin_dir_path(__FILE__) . 'views/server/dashboard.php';
        exit;
    }
}, 0);

add_action('init', function () {
    $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

    if ($path === 'server/analytics/visitors') {
        status_header(200);
        header('Content-Type: text/html; charset=UTF-8');

        require plugin_dir_path(__FILE__) . 'views/server/analytics/visitors.php';
        exit;
    }
}, 0);

add_action('init', function () {
    $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

    if ($path === 'server/analytics/authors') {
        status_header(200);
        header('Content-Type: text/html; charset=UTF-8');

        require plugin_dir_path(__FILE__) . 'views/server/analytics/authors.php';
        exit;
    }
}, 0);