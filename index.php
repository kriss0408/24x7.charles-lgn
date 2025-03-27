<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tracking_id = trim($_POST["tracking-id"]);
    if (!empty($tracking_id)) {
        // Simulate order tracking lookup (Replace with real database/API integration)
        $order_status = "In Transit"; // Example status
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="Track your orders and explore products from Robinnhoood. Home delivery available. Optical & more."/>
  <meta name="keywords" content="track order, robinnhoood, product tracking, contact lenses, sunglasses, delivery status"/>
  <meta name="author" content="Robinnhoood Optical"/>
  <meta name="robots" content="index, follow">
  <title>Robinnhoood | Order Tracking & Support</title>
  <link rel="icon" href="https://robinnhoood.com/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; background-color: #f9f9f9; color: #333; margin: 0; padding: 0; }
    header { background-color: #111; color: #fff; text-align: center; padding: 30px 20px; }
    h1 { font-size: 2rem; margin: 0; }
    h2 { color: #222; }
    .section { padding: 30px 20px; max-width: 1000px; margin: auto; }
    .divider { border-top: 2px solid #ddd; margin: 40px 0; }
    form { background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.08); margin-top: 20px; }
    form input, form button { width: 100%; padding: 12px; margin-top: 10px; border-radius: 6px; border: 1px solid #ccc; font-size: 1rem; }
    form button { background-color: #111; color: #fff; border: none; cursor: pointer; }
    form button:hover { background-color: #333; }
    .order-status { margin-top: 20px; padding: 15px; background-color: #eaf4fc; border-left: 5px solid #007bff; }
    footer { background-color: #111; color: #fff; text-align: center; padding: 20px; font-size: 0.9rem; }
    footer a { color: #ddd; margin: 0 10px; text-decoration: none; }
    footer a:hover { text-decoration: underline; }
  </style>
</head>
<body>
  <header>
    <h1>Robinnhoood Product Tracking</h1>
    <p>Track your product status and explore order-related support</p>
  </header>

  <section class="section">
    <h2>Track Your Order</h2>
    <form method="POST" action="">
      <label for="tracking-id">Enter Your Tracking ID:</label>
      <input type="text" id="tracking-id" name="tracking-id" placeholder="e.g., RBH123456789" required>
      <button type="submit">Track Now</button>
    </form>
    <?php if (isset($order_status)): ?>
      <div class="order-status">Order Status: <strong><?php echo htmlspecialchars($order_status); ?></strong></div>
    <?php endif; ?>
  </section>

  <footer>
    <p>&copy; 2025 Robinnhoood Optical | All Rights Reserved</p>
    <p>
      <a href="https://robinnhoood.com/privacy-policy" target="_blank">Privacy Policy</a> |
      <a href="https://robinnhoood.com/terms-and-conditions" target="_blank">Terms & Conditions</a> |
      <a href="https://robinnhoood.com/refund-policy" target="_blank">Refund Policy</a>
    </p>
  </footer>
</body>
</html>
