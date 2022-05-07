const textArea = document.querySelector("[data-create-content]");
const markdownButtons = document.querySelectorAll("[data-markdown-button]");

markdownButtons.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.stopPropagation();
        textArea.focus();
        const start = textArea.selectionStart;
        const end = textArea.selectionEnd;

        const data = e.currentTarget.dataset;

        if (data.markdownButtonBold) {
            insertMarkdownElement("**", "**", start, end);
        } else if (data.markdownButtonItalic) {
            insertMarkdownElement("_", "_", start, end);
        }
    });
});

function insertMarkdownElement(prefix, suffix, start, end) {
    const textArray = textArea.value.split("");

    textArray.splice(start, 0, prefix);
    textArray.splice(end + 1, 0, suffix);
    textArea.value = textArray.join("");

    textArea.setSelectionRange(start + prefix.length, end + suffix.length);
}
