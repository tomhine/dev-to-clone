const menuButton = document.querySelector("[data-mobile-menu-button]");
const menuSidedraw = document.querySelector("[data-mobile-menu-sidedraw]");

menuButton.addEventListener("click", () => {
    if (menuSidedraw.classList.contains("hidden")) {
        menuSidedraw.classList.remove("hidden");
    } else {
        menuSidedraw.classList.add("hidden");
    }
});
