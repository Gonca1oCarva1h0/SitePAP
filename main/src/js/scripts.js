document.addEventListener("DOMContentLoaded", function () {
    const downloadButton = document.getElementById("download");
    const downloadLink = document.getElementById("download-link");

    // Defina o atributo 'href' do link de download para o arquivo que você deseja baixar.
    downloadLink.href = "gameFille/FilipeOAventureiro.zip";; // Substitua pelo caminho real do arquivo.

    downloadButton.addEventListener("click", function () {

        downloadLink.click();
    });
});
