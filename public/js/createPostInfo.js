/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************!*\
  !*** ./resources/js/createPostInfo.js ***!
  \****************************************/
var titleInput = document.querySelector("[data-create-title]");
var titleInfo = document.querySelector("[data-info-title]");
var tagsInput = document.querySelector("[data-create-tags]");
var tagsInfo = document.querySelector("[data-info-tags]");
var contentInput = document.querySelector("[data-create-content]");
var contentInfo = document.querySelector("[data-info-content]"); // Title info toggle

titleInput.addEventListener("focus", function () {
  toggleVisible(titleInfo, "focus");
});
titleInput.addEventListener("blur", function () {
  toggleVisible(titleInfo, "blur");
}); // Tags info toggle

tagsInput.addEventListener("focus", function () {
  toggleVisible(tagsInfo, "focus");
});
tagsInput.addEventListener("blur", function () {
  toggleVisible(tagsInfo, "blur");
}); // Content info toggle

contentInput.addEventListener("focus", function () {
  toggleVisible(contentInfo, "focus");
});
contentInput.addEventListener("blur", function (e) {
  var _e$relatedTarget;

  if ((_e$relatedTarget = e.relatedTarget) !== null && _e$relatedTarget !== void 0 && _e$relatedTarget.dataset.markdownButton) return;
  toggleVisible(contentInfo, "blur");
});

function toggleVisible(element, event) {
  if (event === "focus") {
    if (element.classList.contains("hidden")) {
      element.classList.remove("hidden");
      element.classList.remove("-translate-y-4");
    }
  } else if (event === "blur") {
    if (!element.classList.contains("hidden")) {
      element.classList.add("hidden");
    }
  }
}
/******/ })()
;