const searchContainer = document.querySelector("[data-search-bar-container]");
const searchInput = document.querySelector("[data-search-bar-input]");

const styles = ["ring-2", "ring-brand-purple"];

searchInput.addEventListener("focus", () => {
    if (!searchContainer.classList.contains(...styles)) {
        searchContainer.classList.add(...styles);
    }
});

searchInput.addEventListener("blur", () => {
    if (searchContainer.classList.contains(...styles)) {
        searchContainer.classList.remove(...styles);
    }
});
