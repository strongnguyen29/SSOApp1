<?php

use Firebase\JWT\JWT;

/**
 * @param $token
 * @param bool $save
 * @return bool|object
 */
function authentication($token, $save = false) {
    try {
        $jwtDecoded = JWT::decode($token, SECRET, array('HS256'));
        if ($save) setcookie(COOKIE_NAME, $_GET['token'], time() + 86400);
        return $jwtDecoded;
    } catch (\Throwable $exception) {
        header('Location:' . OAUTH_SERVER);
        exit;
    }
}