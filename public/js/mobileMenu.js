/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/mobileMenu.js ***!
  \************************************/
var menuButton = document.querySelector("[data-mobile-menu-button]");
var menuSidedraw = document.querySelector("[data-mobile-menu-sidedraw]");
menuButton.addEventListener("click", function () {
  if (menuSidedraw.classList.contains("hidden")) {
    menuSidedraw.classList.remove("hidden");
  } else {
    menuSidedraw.classList.add("hidden");
  }
});
/******/ })()
;