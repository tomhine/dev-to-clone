/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************************!*\
  !*** ./resources/js/bannerImageUpload.js ***!
  \*******************************************/
var imageInput = document.querySelector("[data-banner-image-input]");
var removeButton = document.querySelector("[data-banner-image-remove]");
var imageLabel = document.querySelector("[data-banner-image-label]");
var imagePreview = document.querySelector("[data-upload-image-preview]");
imageInput.addEventListener("change", function () {
  getImageData();
  imageLabel.innerText = "Change";
});
removeButton.addEventListener("click", function () {
  imageInput.value = null;
  removeButton.classList.add("hidden");
  imagePreview.classList.add("hidden");
  imageLabel.innerText = "Add a cover image";
});

function getImageData() {
  var file = imageInput.files[0];

  if (file) {
    var fileReader = new FileReader();
    fileReader.readAsDataURL(file);
    fileReader.addEventListener("load", function () {
      imagePreview.classList.remove("hidden");
      removeButton.classList.remove("hidden");
      imagePreview.innerHTML = '<img src="' + this.result + '" alt="post cover" class="rounded-md" />';
    });
  }
}
/******/ })()
;