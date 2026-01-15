document.addEventListener("DOMContentLoaded", function () {

  const productGrid = document.getElementById("productGrid");
  if (!productGrid) {
    console.error("productGrid not found");
    return;
  }

  const page = document.querySelector(".category-page");
  let filteredProducts = products;

  if (page) {
    const category = page.dataset.category;
    const subcategory = page.dataset.subcategory;
    const sale = page.dataset.sale;

    if (sale === "true") {
      filteredProducts = products.filter(p => p.sale === true);
    } 
    else if (category && subcategory) {
      filteredProducts = products.filter(
        p => p.category === category && p.subcategory === subcategory
      );
    } 
    else if (category) {
      filteredProducts = products.filter(p => p.category === category);
    }
  }

  productGrid.innerHTML = "";

  filteredProducts.forEach(product => {
    const card = document.createElement("div");
    card.className = "product-card";

    card.innerHTML = `
      <img src="${product.image}" alt="${product.name}">
      <h3>${product.name}</h3>
      <p>KSh ${product.price}</p>
      <button class="add-to-cart" data-id="${product.id}">
        Add to Cart
      </button>
    `;

    productGrid.appendChild(card);
  });

});