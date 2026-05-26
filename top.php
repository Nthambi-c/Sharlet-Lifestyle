<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tops | Sharlet Lifestyle</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="assets/Css/style.css">
</head>
<body>
<a id="top"></a>
 <nav class="navbar">
    <div class="nav-top">
        <div class="logo">
            Sharlet <span> Lifestyle</span>
        </div>
        <div class="nav-center">
 <input type="text"
            placeholder="Search..."
            class="search-bar"
            aria-label="Search products">
            </div>
       <div class="nav-icons">
    <a href="cart.php" class="icon cart-icon" aria-label="Cart">
        <i class="fa-solid fa-bag-shopping"></i>
        <span id="cartCount">0</span>
    </a>
      <button type="button" class="profile-icon" id="profileToggle" aria-label="Account">
<i class="fa-regular fa-user"></i>
</button>
    </div>
    </div>
    <div class="nav-bottom">
        <ul class="nav-links">
     <li class="dropdown">
    <a href="#" class="dropdown-toggle" id="categoriesToggle">
        Categories <span class="arrow">▾</span>
    </a>

    <ul class="dropdown-menu" id="categoriesMenu">
        <li><a href="dresses.php">Dresses</a></li>
        <li><a href="coverups.php">Cover-ups</a></li>
        <li><a href="top.php">Tops</a></li>
        <li><a href="tshirts.php">T-Shirts</a></li>
        <li><a href="sweaters.php">Sweaters</a></li>
    </ul>
</li>

            <li><a href="index.php">Home</a></li>
            <li><a href="sale.php">Sale!!!</a></li>
            <li><a href="men.php">Men</a></li>
            <li><a href="women.php">Women</a></li>

        </ul>
    </div>
</nav>

  <main class="main-content category-page" data-category="women" data-subcategory="tops">
    <h1>Tops Section</h1>

   <div class="products-grid" id="productGrid"></div>

      
  </main>

 <footer class="footer">
    <div class="footer-container">

        <div class="footer-left"><h3>
  <a href="#top" class="footer-logo">Sharlet Lifestyle</a>
</h3>
            <ul>
                <li><a href="about.php">About Sharlet Lifestyle</a></li>
                <li><a href="about.php">Returns</a></li>
                <li><a href="about.php">Refunds</a></li>
                <li><a href="about.php">How to Order</a></li>
                <li><a href="about.php">Size Guide</a></li>
            </ul>
        </div>
        </div>
        <div class="footer-right">
            <h3>Find us on</h3>
            <div class="social-icons">
                <a href="https://facebook.com/sharletlifestyle" target="_blank" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://instagram.com/sharl_etlifestyle" target="_blank" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://wa.me/254746424105" target="_blank" aria-label="WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://youtube.com/@sharletlifestyle1155" target="_blank" aria-label="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://tiktok.com/@sharlet_lifestyle" target="_blank" aria-label="TikTok">
                     <i class="fab fa-tiktok"></i>
                    </a>
            </div>
        </div>

    </div>

    <p class="footer-bottom">
        © 2025 Sharlet Lifestyle. All rights reserved.
    </p>
</footer>
<script src="assets/js/products.js"></script>
<script src="assets/js/shop.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>