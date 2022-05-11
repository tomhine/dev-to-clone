const imageInput = document.querySelector("[data-banner-image-input]");
const removeButton = document.querySelector("[data-banner-image-remove]");
const imageLabel = document.querySelector("[data-banner-image-label]");
const imagePreview = document.querySelector("[data-upload-image-preview]");

imageInput.addEventListener("change", () => {
    getImageData();
    imageLabel.innerText = "Change";
});

removeButton.addEventListener("click", () => {
    imageInput.value = null;
    removeButton.classList.add("hidden");
    imagePreview.classList.add("hidden");
    imageLabel.innerText = "Add a cover image";
});

function getImageData() {
    const file = imageInput.files[0];
    if (file) {
        const fileReader = new FileReader();
        fileReader.readAsDataURL(file);
        fileReader.addEventListener("load", function () {
            imagePreview.classList.remove("hidden");
            removeButton.classList.remove("hidden");
            imagePreview.innerHTML =
                '<img src="' +
                this.result +
                '" alt="post cover" class="rounded-md" />';
        });
    }
}
