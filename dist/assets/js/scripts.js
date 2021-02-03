var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var accWrap = this.parentElement;
    accWrap.classList.toggle('active');
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
    } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
    }
    });
}
const hamburger = document.querySelector(".navbar-toggler"),
      navbar = document.querySelector('.navbar-nav'),
      content = document.querySelector('.page-content');

hamburger.addEventListener("click", function() {
    hamburger.classList.toggle("is-active");
    navbar.classList.toggle("slide-right");
    content.classList.toggle("slide-left");
});
const headerTechData = document.querySelector(".tech-details-popup"),
      buttonTechData = document.querySelector('.btn-tech-details');

buttonTechData.addEventListener("click", function() {
    headerTechData.classList.toggle("hide");
});