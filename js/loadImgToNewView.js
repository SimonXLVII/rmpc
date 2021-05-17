let loadImage = document.querySelector('#loadImage'),
image = document.querySelector("#image");

image.addEventListener('change', function(e) {
    loadImage.src = URL.createObjectURL(e.target.files[0]);
    loadImage.style.height = "300px";
    loadImage.style.width = "500px";
    loadImage.style.display = "block";
    loadImage.onload = function () {
        URL.revokeObjectURL(e.target.src);
    }
});