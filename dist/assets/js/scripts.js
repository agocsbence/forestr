const hamburger = document.querySelector(".hamburger"),
      navbar = document.querySelector('.navbar-nav'),
      content = document.querySelector('.page-content'),
      body = document.querySelector('BODY'),
      footer = document.querySelector('footer .social');

if(body.classList.contains("bg--green")) {
    hamburger.classList.add("content--white");
    footer.classList.add("content--white");
}

hamburger.addEventListener("click", function() {
    hamburger.classList.toggle("is-active");
    navbar.classList.toggle("slide-right");
    content.classList.toggle("slide-left");
    body.classList.toggle("lock-scroll");
});