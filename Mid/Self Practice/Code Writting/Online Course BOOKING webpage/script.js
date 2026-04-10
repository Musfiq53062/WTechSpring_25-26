// Get DOM elements
const seatInput = document.getElementById("seats");
const totalFeeP = document.getElementById("total-fee");
const courseMessage = document.getElementById("course-message");
const classType = document.getElementById("class-type");
const finalAmountP = document.getElementById("final-amount");
const confirmCheckbox = document.getElementById("confirm");
const submitBtn = document.getElementById("submit-btn");

// Constants
const feePerSeat = 500;
const discountThreshold = 5000;

// Variable to store current course total
let courseTotal = feePerSeat;

// Function to update total course fee
function updateTotal() {
    let quantity = parseInt(seatInput.value);

    // Validate input
    if (isNaN(quantity) || quantity < 1) {
        alert("Quantity must be at least 1");
        seatInput.value = 1;
        quantity = 1;
    }

    // Calculate total fee
    courseTotal = quantity * feePerSeat;
    totalFeeP.textContent = "Total Fee: " + courseTotal + " Tk";

    // Show discount message if applicable
    courseMessage.textContent = courseTotal > discountThreshold
        ? "You are eligible for a special discount!"
        : "";

    // Update final amount with extra fee
    updateFinalAmount();
}

// Function to update final amount based on class type
function updateFinalAmount() {
    let extraFee = classType.value === "online" ? 100 : 250;
    let finalTotal = courseTotal + extraFee;
    finalAmountP.textContent = "Final Amount: " + finalTotal + " Tk";
}

// Event listeners
seatInput.addEventListener("input", updateTotal);
classType.addEventListener("change", updateFinalAmount);
confirmCheckbox.addEventListener("change", () => {
    submitBtn.style.display = confirmCheckbox.checked ? "inline-block" : "none";
});

// Initialize page
updateTotal();

let x;
console.log(x?? "default"); 
console.log([]+[]);//     