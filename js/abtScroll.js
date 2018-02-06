var abtHeadHeight = document.querySelector('#ab-head').offsetHeight;

//Function to execute when scrolled
function whenScroll() {
 var wScroll = window.scrollY;

 //if the scroll get to this point execute the code
 if( wScroll <= abtHeadHeight){
   document.querySelector('#ab-head').style.backgroundPosition = "center "+ (wScroll / -2) + "px";
 }

}

//EventListener
window.addEventListener("scroll", whenScroll)
