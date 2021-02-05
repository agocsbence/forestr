const hamburger = document.querySelector(".hamburger"),
      navbar = document.querySelector('.navbar-nav'),
      content = document.querySelector('.page-content'),
      body = document.querySelector('BODY');

hamburger.addEventListener("click", function() {
    hamburger.classList.toggle("is-active");
    navbar.classList.toggle("slide-right");
    content.classList.toggle("slide-left");
    body.classList.toggle("lock-scroll");
});