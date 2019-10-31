/**
 * 
 */
function validateForm() {
	var x = document.forms["form"]["firstName"].value;
	var y = document.forms["form"]["lastName"].value;
	if (x === "") {
		alert("Name must be filled out");
		return false;
	}
	if (y === "") {
		alert("Name must be filled out");
		return false;
	}
}
function multiplyBy() {
	num1 = document.getElementById("firstNumber").value;
	num2 = document.getElementById("secondNumber").value;
	document.getElementById("result").innerHTML = num1 * num2;
}
function divideBy() {
	num1 = document.getElementById("firstNumber").value;
	num2 = document.getElementById("secondNumber").value;
	document.getElementById("result").innerHTML = num1 / num2;
}
function mouseOver() {
	  document.getElementById("event1").style.color = "red";
	  document.getElementById("event1").addEventListener("mouseover", mouseOver);
	  document.getElementById("event1").addEventListener("mouseout", mouseOut);
	}

function mouseOut() {
	  document.getElementById("event1").style.color = "black";
	  document.getElementById("event1").addEventListener("mouseover", mouseOver);
	  document.getElementById("event1").addEventListener("mouseout", mouseOut);
	}
var $myfname; 
function getFName(fname) {
    showContact(fname, myFunction);
    $myfname = fname; 
    setInterval('getFName($myfname)', 10000);
}
function showContact(namestring, callbackFunction) {

    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    }

    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
        document.getElementById("JSONoutPlace").innerHTML = this.responseText;
        callbackFunction(this.responseText);
            // the previous call actually goes to myFunction because of the
            // reference to it up on line two.
            //  This is crazy stuff passing functions
            // around as parameters when it's hard know the object types!
        }
    }
    xhr.open("GET", "scripts/newfile.php?fname=" + namestring, true);
    xhr.send();
}
function myFunction(xhttp) {
    var wasJSONObject = JSON.parse(xhttp);
    var text = "";
    for (i = 0; i < wasJSONObject.length; i++) {
        text = text + wasJSONObject[i]["first"] + " " + wasJSONObject[i]["last"] + " " + wasJSONObject[i]["now()"]  + "<br>";
    }
    document.getElementById("DBoutPlace").innerHTML = text;

}




