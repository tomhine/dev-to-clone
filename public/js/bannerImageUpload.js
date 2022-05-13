/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************************!*\
  !*** ./resources/js/bannerImageUpload.js ***!
  \*******************************************/
var label = document.querySelector("[data-banner-image-upload-label]"),
    input = document.querySelector("[data-banner-image-upload-input]"),
    remove = document.querySelector("[data-banner-image-upload-remove]");
input === null || input === void 0 ? void 0 : input.addEventListener("change", function () {
  remove.classList.remove("hidden");
  label.innerText = "Change";
});
remove === null || remove === void 0 ? void 0 : remove.addEventListener("click", function () {
  remove.classList.add("hidden");
  label.innerText = "Add a cover image";
});
/******/ })()
;