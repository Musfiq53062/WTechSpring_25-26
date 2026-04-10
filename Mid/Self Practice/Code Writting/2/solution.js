const usernameInput =document.getElementById("userName");

function validateUsername(){
    usernameInput.value= usernameInput.value.toUpperCase();
}
usernameInput.addEventListener("input", validateUsername);  
