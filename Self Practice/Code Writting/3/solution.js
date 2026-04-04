const ageInput = document.getElementById("Age");
const messageInput = document.getElementById("message");

function validateAge() {
    let age = parseInt(ageInput.value);

    // Handle empty input
    if (age=="") {
        messageInput.innerHTML = "";
        return;
    }

    // Validation: negative age not allowed
    if (age < 0) {
        alert("Age cannot be negative. Resetting to 0.");
        age = 0;
        ageInput.value = 0;
    }

    // Main logic (dynamic message)
    if (age < 40) {
        messageInput.innerHTML = "To be a part of the community, you need to at least 40";
        messageInput.style.color = "black";
    } 
    else if (age <= 50) {
        messageInput.innerHTML = "You are the youngsters of this community";
        messageInput.style.color = "black";
    } 
    else if (age>50){
        messageInput.innerHTML = "Top level members of the group";
        messageInput.style.color = "red";
    }
}

ageInput.addEventListener("input", validateAge);