<?php

if (!function_exists('getUrlFipe')) {
    function getUrlFipe() {
        $url = require __DIR__ . '/config.php';

        return $url['url'];
    }
}
