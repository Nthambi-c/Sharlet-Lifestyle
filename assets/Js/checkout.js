document.addEventListener("DOMContentLoaded", function () {
  function getCart() {
    return JSON.parse(localStorage.getItem("cart")) || [];
  }

  const checkoutItems = document.getElementById("checkoutItems");
  const checkoutTotal = document.getElementById("checkoutTotal");
  const checkoutForm = document.getElementById("checkoutForm");

  if (!checkoutItems || !checkoutTotal || !checkoutForm) {
    return;
  }

  loadProducts().then(() => {
    const cart = getCart();
    let total = 0;

    checkoutItems.innerHTML = "";

    cart.forEach(id => {
      const product = products.find(p => p.id == id);
      if (!product) return;

      total += product.price;

      const div = document.createElement("div");
      div.className = "checkout-item";

      div.innerHTML = `
        <img src="${product.image}">
        <div>
          <h4>${product.name}</h4>
          <p>KSh ${product.price}</p>
        </div>
      `;

      checkoutItems.appendChild(div);
    });

    checkoutTotal.textContent = `Total: KSh ${total}`;
  });

  checkoutForm.addEventListener("submit", function (e) {
    e.preventDefault();

    alert("Order placed successfully!");

    localStorage.removeItem("cart");
    window.location.href = "index.html";
  });
});