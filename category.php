<?php
require_once __DIR__ . '/inc/cookies.php';
set_magento_cookies();
$page_title = "Category - Magento Cookie Test";
include 'inc/header.php';
?>
<main>
  <h1>Category Page</h1>
  <ul>
    <li><a href="product.php">Demo Product</a></li>
  </ul>
</main>
<?php include 'inc/footer.php'; ?>
