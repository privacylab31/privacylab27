<?php
require_once __DIR__ . '/inc/cookies.php';
set_magento_cookies();
$page_title = "Product - Magento Cookie Test";
include 'inc/header.php';
?>
<main>
  <h1>Demo Product</h1>
  <p>Product SKU: TEST-001</p>
  <button id="add-to-cart">Add to cart (simulated)</button>
  <p><a href="cart.php">Go to cart</a></p>
</main>
<?php include 'inc/footer.php'; ?>
