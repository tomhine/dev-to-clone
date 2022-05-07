/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************!*\
  !*** ./resources/js/markdownEditor.js ***!
  \****************************************/
var textArea = document.querySelector("[data-create-content]");
var markdownButtons = document.querySelectorAll("[data-markdown-button]");
markdownButtons.forEach(function (button) {
  button.addEventListener("click", function (e) {
    e.stopPropagation();
    textArea.focus();
    var start = textArea.selectionStart;
    var end = textArea.selectionEnd;
    var data = e.currentTarget.dataset;

    if (data.markdownButtonBold) {
      insertMarkdownElement("**", "**", start, end, 2);
    } else if (data.markdownButtonItalic) {
      insertMarkdownElement("_", "_", start, end, 1);
    } else if (data.markdownButtonLink) {
      insertMarkdownElement("[", "]()", start, end, 1);
    } else if (data.markdownButtonOrderedList) {
      insertMarkdownElement("1. ", "", start, end, 3);
    } else if (data.markdownButtonUnorderedList) {
      insertMarkdownElement("- ", "", start, end, 2);
    } else if (data.markdownButtonHeading) {
      insertMarkdownElement("## ", "", start, end, 3);
    } else if (data.markdownButtonQuote) {
      insertMarkdownElement("> ", "", start, end, 2);
    } else if (data.markdownButtonCode) {
      insertMarkdownElement("`", "`", start, end, 1);
    } else if (data.markdownButtonCodeBlock) {
      insertMarkdownElement("```", "```", start, end, 3);
    }
  });
});

function insertMarkdownElement(prefix, suffix, start, end, suffixLength) {
  var textArray = textArea.value.split("");
  textArray.splice(start, 0, prefix);
  textArray.splice(end + 1, 0, suffix);
  textArea.value = textArray.join("");
  textArea.setSelectionRange(start + prefix.length, end + suffixLength);
}
/******/ })()
;