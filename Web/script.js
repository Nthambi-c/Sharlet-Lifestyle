document.addEventListener("DOMContentLoaded", function () {

  /* =========================
     NAVBAR DROPDOWN
  ========================== */
  const toggle = document.getElementById("categoriesToggle");
  const menu = document.getElementById("categoriesMenu");

  if (toggle && menu) {
    const arrow = toggle.querySelector(".arrow");

    toggle.addEventListener("click", function (e) {
      e.preventDefault();
      menu.classList.toggle("show");
      arrow.classList.toggle("rotate");
    });

    document.addEventListener("click", function (e) {
      if (!toggle.contains(e.target) && !menu.contains(e.target)) {
        menu.classList.remove("show");
        arrow.classList.remove("rotate");
      }
    });
  }

  /* =========================
     CART STORAGE
  ========================== */
  function getCart() {
    return JSON.parse(localStorage.getItem("cart")) || [];
  }

  function saveCart(cart) {
    localStorage.setItem("cart", JSON.stringify(cart));
  }

  /* =========================
     CART COUNT (OPTIONAL)
  ========================== */
  function updateCartCount() {
    const countEl = document.getElementById("cartCount");
    if (countEl) {
      countEl.textContent = getCart().length;
    }
  }

  updateCartCount();

  /* =========================
     ADD TO CART CLICK
  ========================== */
  document.addEventListener("click", function (e) {
    if (e.target.classList.contains("add-to-cart")) {

      const productId = e.target.dataset.id;
      const cart = getCart();

      cart.push(productId);
      saveCart(cart);
      updateCartCount();

      e.target.textContent = "Added ✓";
      e.target.disabled = true;

      showToast("Item added to cart");
    }
  });

  /* =========================
     TOAST MESSAGE
  ========================== */
  function showToast(message) {
    const toast = document.createElement("div");
    toast.textContent = message;

    toast.style.position = "fixed";
    toast.style.bottom = "20px";
    toast.style.right = "20px";
    toast.style.background = "#022b14";
    toast.style.color = "white";
    toast.style.padding = "10px 16px";
    toast.style.borderRadius = "6px";
    toast.style.zIndex = "9999";

    document.body.appendChild(toast);
    setTimeout(() => toast.remove(), 2000);
  }

});