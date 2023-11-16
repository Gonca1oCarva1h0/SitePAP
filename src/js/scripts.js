document.addEventListener("DOMContentLoaded", function () {
    const downloadButton = document.getElementById("download");
    const downloadLink = document.getElementById("download-link");

    downloadLink.href = "FilipeOAventureiro.zip";

    downloadButton.addEventListener("click", function () {
        downloadLink.click();
    });
});

window.onload = function () {
    window.scrollTo({
        top: document.querySelector('#inicio').offsetTop,
        behavior: 'smooth'
    });
};





