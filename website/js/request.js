let items = [];

// MAAK een nieuw request object aan
let xmlhttp = new XMLHttpRequest();

// STATUS bijhouden
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

        // this.responseText is het teruggekomen JSON resultaat.
        let jsonText = this.responseText;
        console.log(jsonText);
        items = JSON.parse(jsonText);
        console.log(items);      
    }
};

// OPEN en verstuur
xmlhttp.open("GET", "functions.php", true);
xmlhttp.send();

document.body.onload = addElement;

function addElement () {
    const newDiv = document.createElement("div")
    newDiv.className = 'product-card'
    const newImg = document.createElement("img")
    newImg.src = './foto/product1.png'
    const newProductDiv = document.createElement("div")
    newProductDiv.className = 'product-details'
    const newH1 = document.createElement("H1")
    newH1.innerHTML = 'yes'
    const newP = document.createElement("p")
    newP.innerHTML = 'yes'
    const newA = document.createElement("a")
    newA.innerHTML = 'yes'
    const currentDiv = document.getElementById("slider")
    
    
    newDiv.appendChild(newImg, newProductDiv);
    newProductDiv.appendChild(newH1, newP, newA);
    document.body.insertBefore(currentDiv, newDiv);
}




