const yField = document.getElementById("y_field");

yField.addEventListener("input", (event) => {
    const yValue = parseInt(yField.value);
    console.log("Y is " + yValue);
    if (isNaN(yValue)||yValue.toString()==="") {
        yField.setCustomValidity("Y must be a valid number");
    } else {
        if (yValue<-3||yValue>5) {
            yField.setCustomValidity("Y value should be in range [-3, 5]")
        } else {
            yField.setCustomValidity("");
        }
    }
});





// let xmlHttp = new XMLHttpRequest();
// xmlHttp.open("GET", theUrl, true);
//
// function httpGetAsync(theUrl, callback)
// {
//
//     xmlHttp.onreadystatechange = function() {
//         if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
//             callback(xmlHttp.responseText);
//     }
//     // true for asynchronous
//     xmlHttp.send(null);
// }
//
// // Define a callback function to handle the response
// function handleResponse(responseText) {
//     // Process the response here
//     console.log("Response received:", responseText);
// }
//
// var url = "file:///D:/Univer/web/lab_1/index.html";
// httpGetAsync(url, handleResponse);