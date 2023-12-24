document.getElementById("menu-icon").addEventListener("click", function () {
    var menuContent = document.getElementById("menu-content");
    menuContent.style.display === "block" ? menuContent.style.display = "none" : menuContent.style.display = "block";
    this.classList.toggle("active");
});
