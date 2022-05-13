const label = document.querySelector("[data-banner-image-upload-label]"),
    input = document.querySelector("[data-banner-image-upload-input]"),
    remove = document.querySelector("[data-banner-image-upload-remove]");

input?.addEventListener("change", () => {
    remove.classList.remove("hidden");
    label.innerText = "Change";
});

remove?.addEventListener("click", () => {
    remove.classList.add("hidden");
    label.innerText = "Add a cover image";
});
