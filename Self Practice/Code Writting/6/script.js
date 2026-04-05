// Fixed Unit Price
const unitPrice = 100;

// Grab DOM elements
const quantityInput = document.getElementById("quantity");
const totalPriceInput = document.getElementById("totalPrice");
const meessageInput= document.getElementById("message")
// Function to calculate total price
function updateTotal() {
    let quantity = parseInt(quantityInput.value);

    // Validation: Prevent negative numbers
     if(quantity<0){

        meessageInput.innerHTML="Quantity cannot be negative. Resetting to 0.";
        quantity=0;
        quantityInput.value=0;
    }

    // Calculate total
    const total = unitPrice * quantity;
    totalPriceInput.value = total;

    // Gift coupon notification
    if (total > 1000) {
        alert("Congratulations! You are eligible for a gift coupon!");
    }
}

// Listen for changes in quantity
quantityInput.addEventListener("input", updateTotal);