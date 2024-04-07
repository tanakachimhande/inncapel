/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/
/******/
/******/ })()
;


// Backdrop Function

let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

 // Get the current year
 const currentYear = new Date().getFullYear();

 // Update the year in the HTML
 document.getElementById('currentYear').textContent = currentYear;


const error = document.querySelector('#error');

function  removeErrorMessage () {

    setTimeout(() => {

        error.style.display = 'none'

    }, 3000);

}

removeErrorMessage();




