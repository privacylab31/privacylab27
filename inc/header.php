<?php
if (!isset($page_title)) $page_title = "Magento Cookie Test";
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header>
  <nav>
    <a href="index.php">Home</a> |
    <a href="product.php">Product</a> |
    <a href="category.php">Category</a> |
    <a href="cart.php">Cart</a> |
    <a href="checkout.php">Checkout</a> |
    <a href="account.php">Account</a> |
    <a href="privacy.php">Privacy</a> |
    <a href="contact.php">Contact</a>
  </nav>
</header>
<?php include __DIR__ . '/consent-banner.php'; ?>
