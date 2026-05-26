<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Your Cart | Sharlet Lifestyle</title>
  <link rel="stylesheet" href="assets/Css/style.css">
</head>

<body>

<nav class="navbar">
  <div class="nav-top">
    <div class="logo">
      <a href="index.php">Sharlet <span>Lifestyle</span></a>
    </div>

    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="shop.php">Shop</a></li>
    </ul>
  </div>
</nav>

<main class="main-content category-page">
  <h1>Your Cart</h1>

  <div id="cartItems"></div>

  <div id="cartSummary">
  <h3>Total: KSh <span id="cartTotal">0</span></h3>

  <div class="cart-actions">
    <a href="shop.php" class="btn-continue">
      Continue Shopping
    </a>

    <a href="checkout.php" class="btn btn-checkout" id="checkoutBtn">
  Proceed to Checkout
</a>
  </div>
</div>
</main>

<script src="assets/js/products.js"></script>
<script src="assets/js/cart.js"></script>
<script src="assets/js/script.js"></script>

</body>
</html>