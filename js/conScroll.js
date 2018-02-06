var contactHeadHeight = document.querySelector("#con-head").offsetHeight;

//Function to execute when scrolled
function whenScroll() {
 var wScroll = window.scrollY;

 //if the scroll get to this point execute the code
 if(wScroll <= contactHeadHeight){
   document.querySelector('#con-head').style.backgroundPosition = "center "+ (wScroll / -20) + "px";
 }

 //landing element
 /*if(wScroll > document.querySelector('#sub-con').offsetTop){
   document.querySelector('#sub-con').style.opacity = 1;
   //alert(document.querySelector('#sub-con').offsetTop);
 }*/
}

//EventListener
window.addEventListener("scroll", whenScroll)
