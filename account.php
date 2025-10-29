<?php
require_once __DIR__ . '/inc/cookies.php';
set_magento_cookies();
$page_title = "Account - Magento Cookie Test";
include 'inc/header.php';
?>
<main>
  <h1>Account Page (Simulated)</h1>
  <p>Here you can test cookies that behave like login/session cookies.</p>
</main>
<?php include 'inc/footer.php'; ?>
