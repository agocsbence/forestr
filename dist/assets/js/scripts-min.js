var i,acc=document.getElementsByClassName("accordion");for(i=0;i<acc.length;i++)acc[i].addEventListener("click",function(){this.classList.toggle("active"),this.parentElement.classList.toggle("active");var e=this.nextElementSibling;e.style.maxHeight?e.style.maxHeight=null:e.style.maxHeight=e.scrollHeight+"px"});const hamburger=document.querySelector(".navbar-toggler"),navbar=document.querySelector(".navbar-nav"),content=document.querySelector(".page-content");hamburger.addEventListener("click",function(){hamburger.classList.toggle("is-active"),navbar.classList.toggle("slide-right"),content.classList.toggle("slide-left")});const headerTechData=document.querySelector(".tech-details-popup"),buttonTechData=document.querySelector(".btn-tech-details");buttonTechData.addEventListener("click",function(){headerTechData.classList.toggle("hide")});