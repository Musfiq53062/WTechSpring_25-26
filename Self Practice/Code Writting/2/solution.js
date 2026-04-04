const usernameInput =document.getElementById("userName");

usernameInput.addEventListener("input", function(){
    usernameInput.value = usernameInput.value.toUpperCase();
});
