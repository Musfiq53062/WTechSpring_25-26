function validateForm() {
    var fname = document.getElementById("firstName").value.trim();
    var lname = document.getElementById("lastName").value.trim();

    if (fname === "" || lname === "") {
        alert("Both fields are required!");
        return false; 
    }

    if (fname.length < 2 || lname.length < 2) {
        alert("Each field must have at least 2 characters.");
        return false; 
    }

    alert("Form submitted successfully!");
    return true; 
}