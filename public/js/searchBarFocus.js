/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************!*\
  !*** ./resources/js/searchBarFocus.js ***!
  \****************************************/
var searchContainer = document.querySelector("[data-search-bar-container]");
var searchInput = document.querySelector("[data-search-bar-input]");
var styles = ["ring-2", "ring-brand-purple"];
searchInput.addEventListener("focus", function () {
  var _searchContainer$clas;

  if (!(_searchContainer$clas = searchContainer.classList).contains.apply(_searchContainer$clas, styles)) {
    var _searchContainer$clas2;

    (_searchContainer$clas2 = searchContainer.classList).add.apply(_searchContainer$clas2, styles);
  }
});
searchInput.addEventListener("blur", function () {
  var _searchContainer$clas3;

  if ((_searchContainer$clas3 = searchContainer.classList).contains.apply(_searchContainer$clas3, styles)) {
    var _searchContainer$clas4;

    (_searchContainer$clas4 = searchContainer.classList).remove.apply(_searchContainer$clas4, styles);
  }
});
/******/ })()
;