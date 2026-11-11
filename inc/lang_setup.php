<?php
declare(strict_types=1);

/**
 * Language bootstrap (PHP 8.1 – 8.5 compatible).
 *
 * Starts the session, works out the visitor's language and loads $lang.
 * Exposes $currentLang ('cn' or 'en') for the templates.
 *
 * Only languages listed in SUPPORTED_LANGUAGES can ever be loaded: an unknown,
 * empty, array or path-like ?lang= value is ignored, so it can no longer break
 * the page ($lang undefined) or be used to include an arbitrary file.
 */

const SUPPORTED_LANGUAGES = ['cn', 'en'];
const DEFAULT_LANGUAGE    = 'cn';

if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
    session_start();
}

if (!headers_sent()) {
    header('Cache-Control: private'); // IE 6 fix (kept from the original code)
}

// A valid ?lang= switches the language and is remembered in the session.
$requestedLang = $_GET['lang'] ?? null;
if (is_string($requestedLang) && in_array($requestedLang, SUPPORTED_LANGUAGES, true)) {
    $_SESSION['lang'] = $requestedLang;
}

// Fall back to the default if the session holds nothing (first visit) or a bad value.
$sessionLang = $_SESSION['lang'] ?? null;
$currentLang = is_string($sessionLang) && in_array($sessionLang, SUPPORTED_LANGUAGES, true)
    ? $sessionLang
    : DEFAULT_LANGUAGE;
$_SESSION['lang'] = $currentLang;

// Include language file (defines $lang).
require dirname(__DIR__) . '/lang/' . $currentLang . '/intelli_studio_content_' . $currentLang . '.php';
