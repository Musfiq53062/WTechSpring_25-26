const button = document.getElementById("changeBtn");

function changeBackgroundColor() {
    const r = parseInt(Math.random() * 256);
    const g = parseInt(Math.random() * 256);
    const b = parseInt(Math.random() * 256);
    
    document.body.style.background = "rgb(" + r + "," + g + "," + b + ")";
}

button.addEventListener("click", changeBackgroundColor);