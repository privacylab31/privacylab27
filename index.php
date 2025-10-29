<?php
require_once __DIR__ . '/inc/cookies.php';
set_magento_cookies();
$page_title = "Home - Magento Cookie Test";
include 'inc/header.php';
?>
<main>
  <h1>Magento Cookie Test — Home</h1>
  <p>Welcome! This small demo helps test cookie behavior and consent handling.</p>
  <ul>
    <li><a href="product.php">Product Page</a></li>
    <li><a href="category.php">Category Page</a></li>
    <li><a href="cart.php">Cart Page</a></li>
    <li><a href="checkout.php">Checkout Page</a></li>
    <li><a href="account.php">Account Page</a></li>
    <li><a href="privacy.php">Privacy Page</a></li>
    <li><a href="contact.php">Contact Page</a></li>
  </ul>
</main>
<?php include 'inc/footer.php'; ?>
