<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

include 'vendor/autoload.php';

use \Firebase\JWT\JWT;

define('APP_ID', 'app1');
define('SECRET', 'abcd');
define('COOKIE_NAME', '_token');
define('OAUTH_SERVER', 'http://ssooauth.test?app_id=' . APP_ID);
define('OAUTH_SERVER_EMBED', 'http://ssooauth.test?page=embed&app_id=' . APP_ID);

include_once 'functions.php';

if (isset($_GET['token'])) {
    // Nhan token tu oauth server
    $jwtDecoded = authentication($_GET['token'], true);
    include 'app/content.php';

} elseif (isset($_COOKIE[COOKIE_NAME])) {
    // Da xac thuc
    $jwtDecoded = authentication($_COOKIE[COOKIE_NAME]);
    include 'app/content.php';
} else {
    // Chua xac thuc
    header('Location:' . OAUTH_SERVER);
    exit;
}

