function collect_data(){
    let text = document.getElementById("textInput").value.trim();

    if (text === "") {
        alert ("Please enter some text to analyze.");
        return false;
    }

    let totalchar = text.length;
    let totalword = text.split(/\s+/).length;
    let reversetext = "";
    for (let i = text.length - 1; i >= 0; i--) {
        reversetext += text[i];
    }

    document.getElementById("charCount").textContent = "Total Characters: " + totalchar;
    document.getElementById("wordCount").textContent = "Total Words: " + totalword;
    document.getElementById("reverseText").textContent = "Reversed Text: " + reversetext;
    return false;
    
}