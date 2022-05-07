const titleInput = document.querySelector("[data-create-title]");
const titleInfo = document.querySelector("[data-info-title]");
const tagsInput = document.querySelector("[data-create-tags]");
const tagsInfo = document.querySelector("[data-info-tags]");
const contentInput = document.querySelector("[data-create-content]");
const contentInfo = document.querySelector("[data-info-content]");

// Title info toggle
titleInput.addEventListener("focus", () => {
    toggleVisible(titleInfo, "focus");
});

titleInput.addEventListener("blur", () => {
    toggleVisible(titleInfo, "blur");
});

// Tags info toggle
tagsInput.addEventListener("focus", () => {
    toggleVisible(tagsInfo, "focus");
});

tagsInput.addEventListener("blur", () => {
    toggleVisible(tagsInfo, "blur");
});

// Content info toggle
contentInput.addEventListener("focus", () => {
    toggleVisible(contentInfo, "focus");
});

contentInput.addEventListener("blur", () => {
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
