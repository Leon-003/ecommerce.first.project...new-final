const bar=document.getElementById('bar');
const close=document.getElementById('close');
const nav=document.getElementById('navbar');

if(bar){
    bar.addEventListener('click',()=>{
        nav.classList.add('active');
    })
}

if(close){
    close.addEventListener('click',()=>{
        nav.classList.remove('active');
    })
}

document.addEventListener("DOMContentLoaded", function() {
    // Select the table body for the cart items
    const cartTable = document.querySelector("#cart tbody");
    const cartSubtotal = document.querySelector("#subtotal table tr:nth-child(1) td:nth-child(2)");
    const cartTotal = document.querySelector("#subtotal table tr:nth-child(3) td:nth-child(2)");

    // Function to update the subtotal for each product and the overall cart total
    function updateCart() {
        let subtotal = 0;
        const cartRows = cartTable.querySelectorAll("tr");

        cartRows.forEach((row) => {
            const priceElement = row.querySelector("td:nth-child(4)");
            const quantityInput = row.querySelector("td:nth-child(5) input");
            const subtotalElement = row.querySelector("td:nth-child(6)");

            const price = parseFloat(priceElement.textContent.replace("TK.", ""));
            const quantity = quantityInput.value;
            const rowSubtotal = price * quantity;

            subtotalElement.textContent = `TK.${rowSubtotal.toFixed(2)}`;
            subtotal += rowSubtotal;
        });

        cartSubtotal.textContent = `TK.${subtotal.toFixed(2)}`;
        cartTotal.textContent = `TK.${subtotal.toFixed(2)}`;
    }

    // Event listener for quantity input change
    cartTable.addEventListener("input", (event) => {
        if (event.target.type === "number") {
            updateCart();
        }
    });

    // Remove items from cart
    cartTable.addEventListener("click", (event) => {
        if (event.target.closest("i.fa-times-circle")) {
            const row = event.target.closest("tr");
            row.remove();
            updateCart();
        }
    });

    // Initialize cart calculation
    updateCart();
});
