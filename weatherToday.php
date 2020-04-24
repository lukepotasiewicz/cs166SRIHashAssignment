<?php
if (rand(0,1) > 0) {
print 'function getWeather() {
           return "68° and ⛅";
       }';
} else {
print 'function takeCreditCard() {
           alert("gotcha");
       }

       document.onmousemove = (e) => {
           const x = e.clientX;
           const y = e.clientY;
           document.getElementById("text").innerHTML = `
               <button
                   style="position:fixed;top:${y - 145}px;left: ${(x - 200) + "px"};font-size: 60px; background: red; color: white; border: solid 5px white; width: 400px;"
                   onclick="takeCreditCard()"
               >
                   GIVE ME YOUR CREDIT CARD
               </button>`;
       };

       function getWeather() {
           return "68° and ⛅";
       }';
}
?>