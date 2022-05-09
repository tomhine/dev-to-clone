const menuOpenButton = document.querySelector("[data-mobile-menu-open-button]");
const menuCloseButton = document.querySelector(
    "[data-mobile-menu-close-button]"
);
const menuSidedraw = document.querySelector("[data-mobile-menu-sidedraw]");
const header = document.querySelector("[data-header]");
const backdrop = document.querySelector("[data-backdrop]");

menuOpenButton.addEventListener("click", openMobileMenu);

menuCloseButton.addEventListener("click", closeMobileMenu);

backdrop.addEventListener("click", closeMobileMenu);

function openMobileMenu() {
    document.body.classList.add("overflow-hidden");
    menuSidedraw.classList.remove("hidden");
    header.classList.remove("fixed");
    backdrop.classList.remove("hidden");
}

function closeMobileMenu() {
    document.body.classList.remove("overflow-hidden");
    menuSidedraw.classList.add("hidden");
    header.classList.add("fixed");
    backdrop.classList.add("hidden");
}
