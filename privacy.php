<?php
require_once __DIR__ . '/inc/cookies.php';
set_magento_cookies();
$page_title = "Privacy - Magento Cookie Test";
include 'inc/header.php';
?>
<main>
  <h1>Privacy & Cookie Policy (Demo)</h1>
  <p>This page explains the test cookies used:</p>
  <ul>
    <li><strong>form_key</strong> — anti-CSRF token (essential)</li>
    <li><strong>mage-cache-sessid</strong> — session id (essential)</li>
    <li><strong>mage-cache-storage</strong> — simulated local storage</li>
    <li><strong>mage-translation-storage</strong> — translation data</li>
    <li><strong>PHPSESSID</strong> — PHP session cookie</li>
  </ul>
</main>
<?php include 'inc/footer.php'; ?>
