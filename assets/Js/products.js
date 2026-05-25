let products = [];

function loadProducts() {
  return fetch("get_products.php")
    .then(response => response.json())
    .then(data => {
      products = data.map(product => {
        return {
          ...product,
          id: Number(product.id),
          price: Number(product.price),
          sale: product.sale === true || product.sale === "1" || product.sale === 1
        };
      });

      return products;
    })
    .catch(error => {
      console.error("Error loading products:", error);
      return [];
    });
}