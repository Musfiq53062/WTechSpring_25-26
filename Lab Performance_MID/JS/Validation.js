const unitPrice =1000;
const quantityIp=document.getElementById("quantity");
const totalPriceIp=document.getElementById("totalPrice");

function calculation(){
    let quantity = parseInt(quantityIp.value)||0;

    if(quantity<0){

        alert("Quantity cannot be negative. Resetting to 0.");
        quantity=0;
        quantityIp.value=0;
    }
    let total = quantity*unitPrice*30;
    totalPriceIp.value=total;
    if(total>1000){
        alert("Congratulations! You are eligible for a gift coupon. ");
    }
}
quantityIp.addEventListener("input",calculation);
