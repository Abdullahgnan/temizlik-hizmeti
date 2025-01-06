<?php
if (!function_exists('getLang')) {
    function getLang() {
        return isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'TR';
    }
}

if (!function_exists('getText')) {
    function getText($key) {
        $lang = strtolower(getLang());
        $translations = require __DIR__ . "/../lang/{$lang}.php";
        return isset($translations[$key]) ? $translations[$key] : $key;
    }
} 