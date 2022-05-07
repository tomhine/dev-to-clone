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
            const textArray = textArea.value.split("");

            textArray.splice(start, 0, "**");
            textArray.splice(end + 1, 0, "**");
            textArea.value = textArray.join("");

            textArea.setSelectionRange(start + 2, end + 2);
        }
    });
});
