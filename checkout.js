function getCart() {
  return JSON.parse(localStorage.getItem("cart")) || [];
}

const cart = getCart();
const checkoutItems = document.getElementById("checkoutItems");
const checkoutTotal = document.getElementById("checkoutTotal");

let total = 0;

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

document.getElementById("checkoutForm").addEventListener("submit", function (e) {
  e.preventDefault();

  alert("Order placed successfully!");

  localStorage.removeItem("cart");
  window.location.href = "index.html";
});