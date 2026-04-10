const form = document.getElementById("bookingForm");

// Real-time validation
document.getElementById("name").addEventListener("input", validateName);
document.getElementById("email").addEventListener("input", validateEmail);
document.getElementById("tickets").addEventListener("input", validateTickets);
document.getElementById("eventType").addEventListener("change", validateType);
document.getElementById("eventDate").addEventListener("change", validateDate);
document.getElementById("terms").addEventListener("change", validateTerms);

// Validation functions

function validateName() {
    const name = document.getElementById("name").value;
    if (name === "") {
        document.getElementById("nameError").innerHTML = "Name is required";
        return false;
    } else {//
        document.getElementById("nameError").innerHTML = "";
        return true;
    }
}

function validateEmail() {
    const email = document.getElementById("email").value;
    const pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    if (email === "") {
        document.getElementById("emailError").innerHTML = "Email is required";
        return false;
    } else if (!pattern.test(email)) {
        document.getElementById("emailError").innerHTML = "Invalid email format";
        return false;
    } else {
        document.getElementById("emailError").innerHTML = "";
        return true;
    }
}

function validateTickets() {
    const tickets = document.getElementById("tickets").value;

    if (tickets === "") {
        document.getElementById("ticketError").innerHTML = "Enter number of tickets";
        return false;
    } else if (tickets <= 0) {
        document.getElementById("ticketError").innerHTML = "Must be a positive number";
        return false;
    } else {
        document.getElementById("ticketError").innerHTML = "";
        return true;
    }
}

function validateType() {
    const type = document.getElementById("eventType").value;

    if (type === "") {
        document.getElementById("typeError").innerHTML = "Select an event type";
        return false;
    } else {
        document.getElementById("typeError").innerHTML = "";
        return true;
    }
}

function validateDate() {
    const date = document.getElementById("eventDate").value;

    if (date === "") {
        document.getElementById("dateError").innerHTML = "Select a date";
        return false;
    } else {
        document.getElementById("dateError").innerHTML = "";
        return true;
    }
}

function validateTerms() {
    const terms = document.getElementById("terms").checked;

    if (!terms) {
        document.getElementById("termsError").innerHTML = "You must agree to terms";
        return false;
    } else {
        document.getElementById("termsError").innerHTML = "";
        return true;
    }
}

// Prevent submission if invalid
form.addEventListener("submit", function (e) {

    if (!validateName() || !validateEmail() || !validateTickets() || !validateType() || !validateDate() || !validateTerms()
    ) {
        e.preventDefault(); // stop form submission
    } 
    else {
        alert("Form submitted successfully!");
    }
});