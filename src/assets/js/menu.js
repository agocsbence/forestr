const hamburger = document.querySelector(".navbar-toggler"),
      navbar = document.querySelector('.navbar-nav'),
      content = document.querySelector('.page-content');

hamburger.addEventListener("click", function() {
    hamburger.classList.toggle("is-active");
    navbar.classList.toggle("slide-right");
    content.classList.toggle("slide-left");
});