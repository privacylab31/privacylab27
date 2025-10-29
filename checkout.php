<?php
require_once __DIR__ . '/inc/cookies.php';
session_start();
set_magento_cookies();
$page_title = "Checkout - Magento Cookie Test";
include 'inc/header.php';
?>
<main>
  <h1>Checkout (Simulated)</h1>
  <form method="post" action="checkout.php">
    <label>Name: <input name="name" /></label><br/>
    <label>Address: <input name="address" /></label><br/>
    <button type="submit">Place Order</button>
  </form>
  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      echo "<p>Order placed successfully (simulated). Check cookies during this flow.</p>";
  }
  ?>
</main>
<?php include 'inc/footer.php'; ?>
