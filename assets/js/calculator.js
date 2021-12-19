function addTwoNumbers() {
    "use strict"
    let gasPrice = 302600; /*B1*/
    let tank = 20; /*B2*/
    var x = document.getElementById("numberIn1").value;
    var y = document.getElementById("numberIn2").value; 
    var fillPrice = ((y/tank)*gasPrice);
    var tankMakesKm = ((tank*100)/x);
    var capacityMakesKm = ((y*100)/x);
    var priceKm = (gasPrice/tankMakesKm);

    fillPrice = fillPrice.toFixed(2)
    tankMakesKm = tankMakesKm.toFixed(2)
    capacityMakesKm = capacityMakesKm.toFixed(2)
    priceKm = priceKm.toFixed(2)

    function thousands_separators(num)
  {
    var num_parts = num.toString().split(".");
    num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return num_parts.join(".");
  }
  
    document.getElementById("fillPrice").innerHTML = thousands_separators(fillPrice);
    document.getElementById("tankMakesKm").innerHTML = thousands_separators(tankMakesKm);
    document.getElementById("capacityMakesKm").innerHTML = thousands_separators(capacityMakesKm);
    document.getElementById("priceKm").innerHTML = thousands_separators(priceKm);
}

