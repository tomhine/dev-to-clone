const marked = require("marked");
const sanitizeHtml = require("sanitize-html");

const editButton = document.querySelector("[data-markdown-edit-button]");
const previewButton = document.querySelector("[data-markdown-preview-button]");
const previewWindow = document.querySelector("[data-markdown-preview-window]");
const previewContent = document.querySelector(
    "[data-markdown-preview-content]"
);
const markdownContent = document.querySelector("[data-create-content]");

previewButton.addEventListener("click", () => {
    if (!previewWindow.classList.contains("hidden")) return;

    const content = marked.parse(markdownContent.value);
    previewContent.innerHTML = sanitizeHtml(content);

    previewWindow.classList.remove("hidden");
});

editButton.addEventListener("click", () => {
    if (previewWindow.classList.contains("hidden")) return;

    previewWindow.classList.add("hidden");
});
