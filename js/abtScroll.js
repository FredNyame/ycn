//Function to execute when scrolled
function whenScroll() {
 var wScroll = window.scrollY;

 //if the scroll get to this point execute the code
   document.querySelector('#ab-head').style.backgroundPosition = "center "+ (wScroll * 0.25) + "px";

}

//EventListener
window.addEventListener("scroll", whenScroll)
