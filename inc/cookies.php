<?php
function set_magento_cookies() {
    // Essential: form_key
    if (!isset($_COOKIE['form_key'])) {
        setcookie('form_key', bin2hex(random_bytes(8)), time()+3600, '/');
    }
    // Essential: mage-cache-sessid
    if (!isset($_COOKIE['mage-cache-sessid'])) {
        setcookie('mage-cache-sessid', uniqid('sess_'), time()+3600, '/');
    }
    // Non-essential: mage-cache-storage
    if (!isset($_COOKIE['mage-cache-storage'])) {
        setcookie('mage-cache-storage', json_encode(['v'=>1,'t'=>time()]), time()+3600, '/');
    }
    // Non-essential: mage-translation-storage
    if (!isset($_COOKIE['mage-translation-storage'])) {
        setcookie('mage-translation-storage', '{"lang":"en_US"}', time()+3600, '/');
    }
    // PHP Session
    if (session_status() === PHP_SESSION_NONE) {
        @session_start();
    }
}
?>
