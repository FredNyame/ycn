//selecting the element
var mobNav = document.querySelector('#mobile-down');
var dropdown = document.querySelector('#droplist');

//function to do for the navbar
function navBar(){
  var nav = document.querySelector('#navMenu');
  if(nav.className === 'navs'){
    nav.classList.add('navAni');
  }
  else{
    nav.className = 'navs';
  }
}

//adding event listeners
mobNav.addEventListener('click', navBar);

function dropItem(){
  var dropMenu = document.querySelector('#social-con');
  if(dropMenu.className === 'dropdown-con'){
    dropMenu.classList.add('showDrop');
  }
  else{
    dropMenu.className = 'dropdown-con';
  }
}
//adding event listeners
dropdown.addEventListener('click', dropItem);
