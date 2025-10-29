<?php
require_once __DIR__ . '/inc/cookies.php';
set_magento_cookies();
$page_title = "Contact - Magento Cookie Test";
include 'inc/header.php';
?>
<main>
  <h1>Contact Us</h1>
  <form method="POST" action="contact.php">
    <label>Email: <input name="email" /></label><br/>
    <label>Message: <textarea name="message"></textarea></label><br/>
    <button type="submit">Send</button>
  </form>
  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      echo "<p>Message sent successfully (simulated).</p>";
  }
  ?>
</main>
<?php include 'inc/footer.php'; ?>
