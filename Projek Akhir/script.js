// Dummy menu items
const menuItems = [
    { name: "Nasi Goreng", price: 15000 },
    { name: "Mie Goreng", price: 12000 },
    { name: "Ayam Goreng", price: 20000 },
    { name: "Es Teh", price: 5000 },
    { name: "Es Jeruk", price: 6000 }
];

// Display menu items
const menuContainer = document.getElementById("menu-items");
menuItems.forEach(item => {
    const menuItemElement = document.createElement("div");
    menuItemElement.innerHTML = `<p>${item.name} - Rp ${item.price}</p>`;
    menuContainer.appendChild(menuItemElement);
});

// Dummy cart items
const cartItems = [];

// Display cart items
const cartContainer = document.getElementById("cart-items");
function updateCart() {
    cartContainer.innerHTML = "";
    cartItems.forEach(item => {
        const cartItemElement = document.createElement("div");
        cartItemElement.innerHTML = `<p>${item.name} - Rp ${item.price}</p>`;
        cartContainer.appendChild(cartItemElement);
    });
}
updateCart();

// Add item to cart
menuContainer.addEventListener("click", (event) => {
    if (event.target.tagName === "DIV") {
        const menuItem = event.target.innerText.split(" - ");
        const itemName = menuItem[0];
        const itemPrice = parseInt(menuItem[1].replace("Rp ", ""));
        cartItems.push({ name: itemName, price: itemPrice });
        updateCart();
    }
});

// Checkout
const checkoutButton = document.getElementById("checkout-btn");
checkoutButton.addEventListener("click", () => {
    const totalPrice = cartItems.reduce((total, item) => total + item.price, 0);
    alert(`Total pembelian: Rp ${totalPrice}`);
    cartItems.length = 0; // Clear cart
    updateCart();
});
