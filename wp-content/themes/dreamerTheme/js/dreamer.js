/*jslint node:true*/
"use strict";

/*global alert*/




/*
fetch ('./data/cabotcruises.json') 
.then((mydata) => mydata.json())
.then((mydata) => {
  console.log(mydata); 
}); 
*/

function toggleMenu() {
  document.getElementById("hamburgerBtn").classList.toggle("open");
  document.getElementById("primaryNav").classList.toggle("open");
}
var x = document.getElementById('hamburgerBtn');
x.onclick = toggleMenu; 


function toggleMenu2() {
  document.getElementById("secondaryNav").classList.toggle; 
  document.getElementById("secondaryNav").classList.toggle('parent');
}



function toggleMenu3() {
  document.getElementById("secondaryNav").classList.toggle; 
  document.getElementById("secondaryNav").classList.toggle('parent');
}




$(document).ready(function(){
  $('.my-class').slick({
   slidesToShow: 1, 
   autoplay: true, 
   autoplaySpeed: 5000,
   dots: true, 
   arrows: false
  });
});


//retrieves website href

var currentHref = location.href; 


//retrieves all / within the href using the split method

var currentPage = currentHref.split('/')
console.log(currentPage)


// lists out number of splits in href

var currentSelectedPage = currentPage.length
console.log(currentSelectedPage)


// retrieves the specific split info  

var thePage = currentPage[currentSelectedPage - 1]
console.log(thePage)

//gathers all anchors in the unordered list called primaryNav 

var currentLI = document.querySelectorAll("ul#primaryNav li a"); 
console.log(currentLI); 



//loops through all anchors when clicked on to either add or remove the active class 

for (var i=0; i < currentLI.length; i++) {
 var activePage = currentLI[i].getAttribute("href");
 console.log(activePage); 


   if (thePage == activePage) {
     currentLI[i].classList.add("active");
     console.log("We have a match"); 
   }
   else {
     currentLI[i].classList.remove("active"); 
   }
 

  }




  
  
  








