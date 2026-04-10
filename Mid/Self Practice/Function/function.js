//call a function
function function_name(){
    console.log("Hello World");
}
function_name();

function greet(name){
    console.log("Hello " + name);
}
greet("Mohsin");

//function Expression:
const greet2 = function(name){
    console.log("Hello " + name);
}
greet2("Alice");

//Arrow function:
const greet3 = (name) => {
    console.log("hello "+name);
}
greet("Mokul");

//function with return value 
function add(a,b){
    return a+b;
}
let sum = add(5,2);
console.log(sum);

//function with default parameters
function greet4(name="Guest"){//default value of name is Guest
    console.log("Hello " + name);
}
greet4(); // Output: Hello Guest
greet4("Bob"); // Output: Hello Bob

function Sum(...numbers){ //accept any number of arguements
    let total =0;
    for(let num of numbers){
        total+=num;        
    }
    return total;
}
console.log(Sum(5,7,1,3,5,6));

setTimeout(function(){//anonymous function.
    console.log("hello after 5 seconds");
}, 5000);

(function(){//IIFE: Immediately Invoked Function Expression
    console.log("IIFE runs immediately");
 
})();

let globalVar =10;
function test(){
    let localVar = 5;
    console.log(globalVar);
    console.log(localVar);
}
test();
console.log(globalVar);
//console.log(localVar);   //error:localVar is not defined outside the function.

/*Problem1: Create a function using the “function” 
keyword that takes a String as an argument 
& returns the number of vowels in the string.*/
function countVowels(string){
    let count=0;
    let vowels= "aeiouAEIOU";
    for (let i=0; i<string.length; i++){
        if(vowels.includes(string[i])){
            count++;
        }
    }
    return count;

}
let vowelCount =countVowels("Unaccademy");
console.log(vowelCount);

const countVowels2 = (string) => {
    let count=0;
    let vowels= "aeiouAEIOU";
    for (let i=0; i<string.length; i++){
        if(vowels.includes(string[i])){
            count++;
        }
    }
    return count;
}
console.log(countVowels2("Unaccademy"));


/*Problem4: We are given array of marks of students. Filter out of the marks of students that 
scored 90+.  
a) Take a number n as input from user. Create an array of numbers from 1 to n.  
b) Use the reduce method to calculate sum of all numbers in the array.  
c) Use the reduce method to calculate product of all numbers in the array.*/

var marks = [85, 92, 94, 90, 88];
function marksGreaterThan90(mark){
    return mark>90;
}
console.log("Marks 90+ :", marks.filter(marksGreaterThan90)); //
let n= parseInt(prompt("Enter the number:"));
let arr =[];
for (let i=0; i<=n; i++){
    arr.push(i);
}
console.log(arr);
