console.log("JS Entered");

var firstDiv = document.getElementById("first_div");
var secondDiv = document.getElementById("second_div");
var firstHeading = document.getElementById("heading_first");
var editText = document.getElementById("edit_text");

function firstButton() {
    firstDiv.style.display = firstDiv.style.display === 'none' ? 'flex' : 'none';
}

function secondButton() {
    secondDiv.style.display = secondDiv.style.display === 'none' ? 'flex' : 'none';
}

editText.onkeyup = function(){
    firstHeading.innerHTML = editText.value;
};