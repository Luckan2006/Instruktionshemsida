document.addEventListener("DOMContentLoaded", function () {
    const footer = document.createElement("footer");
    footer.innerHTML = "&copy; " + new Date().getFullYear() + " Alla rättigheter reserverade | Python Guide | Administratör: Lukas Persson | " +
    '<a href="https://github.com/Luckan2006/Instruktionshemsida.git" target="_blank" style="color:rgb(40, 114, 226); text-decoration: none;">GitHub</a>';
    document.body.appendChild(footer);
});
