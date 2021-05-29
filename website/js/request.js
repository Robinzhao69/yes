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