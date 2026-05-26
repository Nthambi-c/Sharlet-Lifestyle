<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Checkout | Sharlet Lifestyle</title>
  <link rel="stylesheet" href="assets/Css/style.css" />
</head>

<body>

<nav class="navbar">
  <div class="logo">
    <a href="index.html">Sharlet Lifestyle</a>
  </div>

  <ul class="nav-links">
    <li><a href="index.php">Home</a></li>
    <li><a href="shop.php">Shop</a></li>
    <li><a href="cart.php">Cart</a></li>
  </ul>
</nav>

<main class="checkout-container">

  <h1>Checkout</h1>

  <div id="checkoutItems"></div>

  <h3 id="checkoutTotal"></h3>

  <form id="checkoutForm">
    <input type="text" placeholder="Full Name" required />
    <input type="tel" placeholder="Phone Number" required />
    <input type="text" placeholder="Delivery Location" required />

    <button type="submit">Place Order</button>
  </form>

</main>

<script src="assets/js/products.js"></script>
<script src="assets/js/checkout.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>