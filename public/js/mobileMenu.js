/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/mobileMenu.js ***!
  \************************************/
var menuOpenButton = document.querySelector("[data-mobile-menu-open-button]");
var menuCloseButton = document.querySelector("[data-mobile-menu-close-button]");
var menuSidedraw = document.querySelector("[data-mobile-menu-sidedraw]");
var header = document.querySelector("[data-header]");
var backdrop = document.querySelector("[data-backdrop]");
menuOpenButton === null || menuOpenButton === void 0 ? void 0 : menuOpenButton.addEventListener("click", openMobileMenu);
menuCloseButton === null || menuCloseButton === void 0 ? void 0 : menuCloseButton.addEventListener("click", closeMobileMenu);
backdrop === null || backdrop === void 0 ? void 0 : backdrop.addEventListener("click", closeMobileMenu);

function openMobileMenu() {
  document.body.classList.add("overflow-hidden");
  menuSidedraw.classList.remove("hidden");
  header.classList.remove("fixed");
  backdrop.classList.remove("hidden");
}

function closeMobileMenu() {
  document.body.classList.remove("overflow-hidden");
  menuSidedraw.classList.add("hidden");
  header.classList.add("fixed");
  backdrop.classList.add("hidden");
}
/******/ })()
;