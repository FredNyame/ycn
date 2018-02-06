var headerHeight = document.querySelector('#header-height').offsetHeight;

//Function to execute when scrolled
function whenScroll() {
 var wScroll = window.scrollY;

 //if the scroll get to this point execute the code
 if(wScroll <= headerHeight){
   document.querySelector('#header-height').style.backgroundPosition = "center "+ (wScroll / -10) + "px";
   document.querySelector('#mid-con').style.top = (wScroll / 2) +"px";
   document.querySelector('#mid-con').style.bottom = (wScroll / -2) +"px";
 }
}

//EventListener
window.addEventListener("scroll", whenScroll)
