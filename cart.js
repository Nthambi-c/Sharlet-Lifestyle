document.addEventListener("DOMContentLoaded", function () {

  const cartContainer = document.getElementById("cartItems");
  const totalEl = document.getElementById("cartTotal");

  function getCart() {
    return JSON.parse(localStorage.getItem("cart")) || [];
  }

  function saveCart(cart) {
    localStorage.setItem("cart", JSON.stringify(cart));
  }

  function renderCart() {
    const cart = getCart();
    cartContainer.innerHTML = "";

    if (cart.length === 0) {
      cartContainer.innerHTML = "<p>Your cart is empty.</p>";
      totalEl.textContent = "0";
      return;
    }

    let total = 0;

    cart.forEach((productId, index) => {
      const product = products.find(p => p.id == productId);
      if (!product) return;

      total += product.price;

      const item = document.createElement("div");
      item.className = "cart-item";

      item.innerHTML = `
        <img src="${product.image}" alt="${product.name}">
        <div>
          <h4>${product.name}</h4>
          <p>KSh ${product.price}</p>
        </div>
        <button class="remove-item" data-index="${index}">✕</button>
      `;

      cartContainer.appendChild(item);
    });

    totalEl.textContent = total;
  }

  document.addEventListener("click", function (e) {
    if (e.target.classList.contains("remove-item")) {
      const index = e.target.dataset.index;
      const cart = getCart();

      cart.splice(index, 1);
      saveCart(cart);
      renderCart();
    }
  });
function updateCheckoutState() {
  const checkoutBtn = document.getElementById("checkoutBtn");
  if (!checkoutBtn) return;

  const cart = getCart();

  if (cart.length === 0) {
    checkoutBtn.classList.add("disabled");
    checkoutBtn.removeAttribute("href");
  } else {
    checkoutBtn.classList.remove("disabled");
    checkoutBtn.setAttribute("href", "checkout.html");
  }
}
document.addEventListener("click", function (e) {
  if (e.target.id === "checkoutBtn" && getCart().length === 0) {
    e.preventDefault();
    alert("Your cart is empty. Please add items before checking out.");
  }
});
  renderCart();
});