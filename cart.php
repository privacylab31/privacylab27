<?php
require_once __DIR__ . '/inc/cookies.php';
set_magento_cookies();
$page_title = "Cart - Magento Cookie Test";
include 'inc/header.php';
?>
<main>
  <h1>Your Cart (Simulated)</h1>
  <p>This page mimics a shopping cart and is used for cookie behavior testing.</p>
  <p><a href="checkout.php">Proceed to checkout</a></p>
</main>
<?php include 'inc/footer.php'; ?>
